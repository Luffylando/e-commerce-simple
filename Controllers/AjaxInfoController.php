<?php
    namespace App\Controllers;

    use App\Core\Controller;
    use App\Models\FlowersModel;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;



    class AjaxInfoController extends Controller{


        public function details(){
            
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

            $flowersModel = new FlowersModel($this->getDbConnection());
            $flower = $flowersModel->getById($id);
            $this->set('flower', $flower);
         
        }
        
        public function mail() {

        
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $this->set('email', $email);
        }

        public function sendMail() {
           
            
           $posaljioc = filter_input(INPUT_POST, 'posaljioc_email', FILTER_SANITIZE_EMAIL);
           $kompanijaEmail = filter_input(INPUT_POST, 'email_kompanija', FILTER_SANITIZE_EMAIL);
           $imePosaljioca = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
           $prezimePosaljioca = filter_input(INPUT_POST, 'prezime', FILTER_SANITIZE_STRING);
           $predmet = filter_input(INPUT_POST, 'predmet', FILTER_SANITIZE_STRING);
           $poruka = filter_input(INPUT_POST, 'poruka', FILTER_SANITIZE_STRING);


           $mail = new PHPMailer(true);

            try{

                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = \Configuration::EMAIL; // ovde moraju da se stave ispravni podaci, posto je ovo posaljilac.
                $mail->Password = \Configuration::EMAIL_PASSWORD;
                $mail->SMTPSecure = 'tsl';
                $mail->Port = 587;

                $mail->setFrom(\Configuration::EMAIL); // Address from witch mail is recived.
                $mail->addAddress($kompanijaEmail, 'Kompanija email'); // address to wich mail is sent.



                $mail->isHtml(true);
                $mail->Subject = $predmet;
                $mail->Body = $poruka;
                $mail->send();
                        
               echo "<script>window.location.replace('localhost/Projekat')</script>";
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
        }
    
    