<?php

/* Cart/checkout.html */
class __TwigTemplate_7d326afb07626e6656a801f6358c8ec1258e09520966e478432da2a375c80989 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main2.html", "Cart/checkout.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "__layout/main2.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "

<div id=\"page-title-checkout\">Checkout</div><br>


<div class=\"col-md-10 mx-auto\">
        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart-thankYou\" method=\"post\" id=\"payment-form\">

        <div class=\"row\">

                <div class=\"form-group mx-auto col-md-6\">
                    <label for=\"full_name\" class=\"float-left\">Full Name:</label>
                    <input type=\"text\" class=\"form-control\" name=\"full_name\" id=\"full_name\" required>
                  </div>

                   <div class=\"form-group mx-auto col-md-6\">
                    <label for=\"email\" class=\"float-left\">Email:</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" required>
                  </div>

                  <div class=\"form-group mx-auto col-md-6\">
                    <label for=\"street\" class=\"float-left\">Street Address:</label>
                    <input type=\"text\" class=\"form-control\" name=\"street\" id=\"street\" data-stripe=\"address_line1\" required>
                  </div>


                   <div class=\"form-group mx-auto col-md-6\">
                    <label for=\"city\" class=\"float-left\">City:</label>
                    <input type=\"text\" class=\"form-control\" name=\"city\" id=\"city\" data-stripe=\"address_city\" required>
                  </div>


                   <div class=\"form-group mx-auto col-md-6\">
                    <label for=\"zip_code\" class=\"float-left\">Zip Code:</label>
                    <input type=\"text\" class=\"form-control\" name=\"zip_code\" id=\"zip_code\" data-stripe=\"address_zip\" required>
                  </div>

                   <div class=\"form-group mx-auto col-md-6\">
                    <label for=\"country\" class=\"float-left\">Country:</label>
                    <input type=\"text\" class=\"form-control\" name=\"country\" id=\"country\" data-stripe=\"address_country\" required>
                  </div>

               </div> <br>
            </div>

<div class=\"col-md-6 mx-auto\">

<div id=\"page-title-checkout\">Card credentials</div><br>


        <div class=\"form-group row\">
            <label for=\"name\" class=\"col-sm-3 col-form-label\">Name on Card</label>
             <div class=\"col-sm-6\">
                <input type=\"text\" id=\"name\" class=\"form-control\" data-stripe=\"name\"> <!-- KOD kartica se ne stavlja ime u input zbog sigurnosti.!!!!!  -->
            </div>
        </div>


         <div class=\"form-group row\">
            <label for=\"number\" class=\"col-sm-3 col-form-label\">Card Number</label>
            <div class=\"col-sm-6\">
                <input type=\"text\" id=\"number\" class=\"form-control\" data-stripe=\"number\"> <!-- KOD kartica se ne stavlja ime u input zbog sigurnosti.!!!!!  -->
            </div>
        </div>

         <div class=\"form-group row\">
            <label for=\"cvc\" class=\"col-sm-3 col-form-label\">CVC</label>
             <div class=\"col-sm-6\">
                <input type=\"text\" id=\"cvc\" class=\"form-control\" data-stripe=\"cvc\"> <!-- KOD kartica se ne stavlja ime u input zbog sigurnosti.!!!!!  -->
            </div>
        </div>

         <div class=\"form-group row\">
            <label for=\"exp_month\" class=\"col-sm-3 col-form-label\">Expire Month</label>
            <div class=\"col-md-2\">
            <select id=\"exp_month\" class=\"form-control\" data-stripe=\"exp_month\">
                
                <option value=\"\"></option>

                

                <option value=\"January\">January</option>
                <option value=\"February\">February</option>
                <option value=\"March\">March</option>
                <option value=\"April\">April</option>
                <option value=\"May\">May</option>
                <option value=\"June\">June</option>
                <option value=\"July\">July</option>
                <option value=\"August\">August</option>
                <option value=\"Septembre\">Septembre</option>
                <option value=\"Octobre\">Octobre</option>
                <option value=\"Novembre\">Novembre</option>
                <option value=\"Decembre\">Decembre</option>



               
            </select> 
             </div>
         </div>

         <div class=\"form-group row\">
            <label for=\"exp_year\" class=\"col-sm-3 col-form-label\">Expire Year:</label>
            <div class=\"col-md-2\">
                <select id=\"exp_year\" class=\"form-control\" data-stripe=\"exp_year\">
                

                    
                    <option value=\"\"></option>
                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2018, 2023));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 115
            echo "
             
                <option value=\"";
            // line 117
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
              
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "          
                </select> <br><br>
            </div>
       </div>

       <button type=\"submit\" class=\"btn btn-primary\" id=\"checkout_button\">Check Out</button>
    </form>    

    </div> 
</div>

<script>


     var stripe = Stripe('<?php echo \\Configuration::STRIPE_PUBLIC;?>');

function stripeResponseHandler(status,response){
  var \$form = \$('#payment-form');

  if(response.error){
    console.log(response.error);
  } else {

    var token = response.id;
    \$form.append(\$('<input type=\"hidden\" name=\"stripeToken\" />').val(token));

    \$form.get(0).submit();
  }
};

jQuery(function(\$){
  \$('#payment-form').submit(function(event){
    var \$form = \$(this);

    //\$form.find('button').prop('disabled', true);

    Stripe.card.createToken(\$from, stripeResponseHandler);

    return false;

  });
});



</script>

";
    }

    public function getTemplateName()
    {
        return "Cart/checkout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 120,  157 => 117,  153 => 115,  149 => 114,  43 => 11,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Cart/checkout.html", "/var/www/html/e-commerce/Views/Cart/checkout.html");
    }
}
