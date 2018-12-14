<?php
    namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\FlowersModel;
    use App\Models\CartModel;
    use App\Models\TransactionModel;


    class CartController extends Controller{

        public function cart(){        

            $id = $_COOKIE[\Configuration::CART_COOKIE];
            if(empty($id)){
                $this->redirect(\Configuration::BASE);
            }

            $cartModel = new CartModel($this->getDbConnection());
            $cart = $cartModel->getById($id);
            $this->set('cart', $cart);

            $tax = 0.07;
            $items = json_decode($cart->items, true);
          
            
            if($items != []){
            foreach($items as $item){

              $count += $item['quantity'];
              $subtotal += $item['quantity'] * $item['price'];

                }
            }


            $this->set('tax', $tax);            
            $this->set('subtotal', $subtotal);
            $this->set('count', $count);
            $this->set('items', $items);

        }   


        public function addCart() {

            $flower_id = filter_input(INPUT_POST, 'flower_id', FILTER_SANITIZE_NUMBER_INT);
            $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
            $cart_expire = date("Y-m-d H:i:s", strtotime("+30 days"));

            $flowersModel = new FlowersModel($this->getDbConnection());
            $flower = $flowersModel->getById($flower_id);

            $flower_name = $flower->flower_name;
            $price = $flower->actual_price;


            $newItems [] = [
    
                'flower_id'    => $flower_id,
                'quantity'     => $quantity,
                'flower_name'  => $flower_name,
                'price'        => $price
    
                ];

                
            if(!isset($_COOKIE[\Configuration::CART_COOKIE])){

                $items_json = json_encode($newItems);

                    $cartModel = new CartModel($this->getDbConnection());                           
                    $cart = $cartModel->add([
        
                        'items'         => $items_json,
                        'expire_date'   => $cart_expire    
        
                    ]);
        
                    if($cart){

                                             
                        $lastCart = $cartModel->getLastInsertedId();
                        if($cart_id = null){
                            $cart_id = 1;
                        } else {
                            $cart_id = $lastCart['cart_id'];
                        }
                     
                        setcookie(\Configuration::CART_COOKIE, $cart_id, time() + (84600*30), '/', false);
                        $this->redirect(\Configuration::BASE);
                    }
                } else {

                    $newItems  = [
    
                        'flower_id'    => $flower_id,
                        'quantity'     => $quantity,
                        'flower_name'  => $flower_name,
                        'price'        => $price
            
                        ];
               
                    $cart_id = $_COOKIE[\Configuration::CART_COOKIE];

                    $cartModel = new CartModel($this->getDbConnection());
                    $lastCart = $cartModel->getLastInsertedId();

                    $previousItems = json_decode($lastCart['items'], true);
                    $item_match = 0;
                    $new_items = [];
                    
                    foreach($previousItems as $pitem){

                        if($newItems['flower_id'] == $pitem['flower_id']){
                            
                            $pitem['quantity'] = $pitem['quantity'] + $newItems['quantity'];             
                            $item_match = 1;       

                        }
               
                        $new_items[] = $pitem;
                    }
                        
                   if($item_match != 1){
                   
                       $new_items [] = array_merge($previousItems, $newItems);
                } 

            
                    
                   $new_items = json_encode($new_items);
            

                $updateCart = $cartModel->editById($cart_id, [

                    'items'         =>  $new_items,
                    'expire_date'   =>  $cart_expire,

                ]);
            
                    if($updateCart){
                        
                        setcookie(\Configuration::CART_COOKIE, '', 1);
                        setcookie(\Configuration::CART_COOKIE, $cart_id, time() + (84600*30), '/', false);
                        $this->redirect(\Configuration::BASE);             

                }
            }     
        } 


        public function checkout() {

    

        }

        public function thankYou() {
            

            
            $cart_id = $_COOKIE[\Configuration::CART_COOKIE];
            $fullname = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
            $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
            $street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);
            $zip_code = filter_input(INPUT_POST, 'zip_code', FILTER_SANITIZE_NUMBER_INT);


            $cartModel = new CartModel($this->getDbConnection());
            $cart = $cartModel->getById($cart_id);
            $this->set('cart', $cart);

            $tax = 0.07;
            $items = json_decode($cart->items, true);
          
            
            if($items != []){
            foreach($items as $item){

              $count += $item['quantity'];
              $subtotal += $item['quantity'] * $item['price'];

                }
            }

            

            $grand_total = $subtotal + ($subtotal * $tax);


            $this->set('tax', $tax);            
            $this->set('subtotal', $subtotal);
            $this->set('count', $count);
            $this->set('fullname', $fullname);
            $this->set('email', $email);
            $this->set('country', $country);
            $this->set('city', $city);
            $this->set('street', $street);
            $this->set('zip', $zip_code);

            // Set your secret key: remember to change this to your live secret key in production
            // See your keys here: https://dashboard.stripe.com/account/apikeys
            //Ovde ovo zove Stripe iz vendora
            \Stripe\Stripe::setApiKey(\Configuration::STRIPE_PRIVATE);

            // Token is created using Checkout or Elements!
            // Get the payment token ID submitted by the form:

            //$token = isset($_POST['stripeToken'])? $_POST['stripeToken']:'';
            $token = 'tok_bypassPending';

            // Get the rest of the pos data

            $metadata = array(

                "cart_id"		=> $cart_id,
                "tax"			=> $tax,
                "sub_total"	 	=> $sub_total,
            
            );
            
            
            
            // Charge the user's card:
            $charge = \Stripe\Charge::create(array(
            
              "amount"				=> intval($grand_total * 100),
              "currency" 			=> 'usd',
              "description" 		=> 'Opis',
              "source" 				=> $token,
              "metadata"   			=> $metadata
            
            ));


            $transModel = new TransactionModel($this->getDbConnection());
            $transaction = $transModel->add([


                'cart_id '              => $cart_id,
                'fullname'              => $fullname,
                'email'                 => $email,
                'country'               => $country,
                'city'                  => $city,
                'street'                => $street,
                'zipcode'               => $zip_code,
                'items'                 => $count,
                'sub_total'             => $subtotal,
                'tax'                   => $tax,
                'grand_total'           => $grand_total,

            ]);

            if($transaction){
                $cartModel = new CartModel($this->getDbConnection());
                $cartUpdate = $cartModel->editById($cart_id, [

                    'paid'  => 1
                ]);
                if(isset($_COOKIE[\Configuration::CART_COOKIE])) {
                    unset($_COOKIE[\Configuration::CART_COOKIE]);
                    setcookie(\Configuration::CART_COOKIE, '', time() - 3600, '/'); // empty value and old timestamp
                }
            }
        }
    }

