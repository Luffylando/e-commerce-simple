<?php

/* __layout/main.html */
class __TwigTemplate_4dd2b7071a5d17e834b6ca96fd09826bf869053c772d549216b8d7baef8f1300 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>e-Commerce</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
        <meta charset=\"utf-8\">

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/css/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/css/main.css\">
        <script type=\"text/javascript\" src=\"https://js.stripe.com/v3/\"></script>

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/js/jquery.js\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/js/bootstrap.js\"></script>
       
    </head>
    <body>
     
        <nav class=\" navbar-nav fixed-top\">
            <div class=\"container\">
                
                <div class=\"float-left\">
                    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/logof.png\" id=\"logo-nav\" alt=\"logo\"></a>

                </div>


                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "about\">About
                    <a data-toggle=\"modal\" href=\"\" data-target=\"#exampleModal\"
                      onclick=\"mail();\">Contact</a>



                    <a class=\"float-right\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart\">Cart</a>
                


             </div>            
        </nav>

        <div id=\"img1\">
                <div id=\"logo1\"></div>
                <div id=\"flower1\"></div>
                <div id=\"flower2\"></div>


            </div>

       

        ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 54
        echo "


        <script>
            \$(window).scroll(function(){
                var vscroll = \$(this).scrollTop();
                \$('#logo1').css({
                    \"transform\" : \"translate(0px, \"+vscroll/1.9+\"px)\"
                });
            });

            \$(window).scroll(function(){
                var vscroll = \$(this).scrollTop();

                \$('#flower1').css({
                    \"transform\" : \"translate(\"+ vscroll/5+ \"px, -\"+vscroll/4+\"px)\"
                });
            });

              \$(window).scroll(function(){
                var vscroll = \$(this).scrollTop();

                \$('#flower2').css({
                    \"transform\" : \"translate(-\"+ vscroll/5+ \"px, -\"+vscroll/4+\"px)\"
                });
            });

       

       function detailsmodal(id){
            var data = {\"id\" : id};
            \$.ajax({

                url: \"";
        // line 87
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "details\",
                method: \"post\",
                data: data,
                success: function(data){
                jQuery('body').append(data);
                jQuery('#details-1').modal('toggle');
                },
                error: function(){
                alert(\"Something went wrong!\");
                }
            });
        }

        function closeModal(){
            \$('#details-1').modal('hide');
            setTimeout(function(){
                jQuery('#details-1').remove();
            }, 200)
        }


          function mail(){
            var mail = {\"email\": \"testemail@gmail.com.com\"};
           
            \$.ajax({
                url: \"";
        // line 112
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "mail\",
                method: \"post\",
                data : mail,
                success: function(mail){
                jQuery('body').append(mail);
                jQuery('#mail').modal('toggle');
                },
                error: function(){
                alert(\"Something went wrong!\");
                }
            });
        }
                    

        </script>


        <footer id=\"foot-m\">
                <div class=\"footer-head mx-auto\">
                    <div class=\"f-logo\">
                        <a href=\"#\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/Assets/img/logof.png\" id=\"f-logo\" alt=\"\"></a>
                      
                    </div>
                    <div class=\"f-about\">
                        <ul>
                            <a class=\"main-c\" href=\"\">About</a>
                            <li><a href=\"\">About2</a></li>
                            <li><a href=\"\">About3</a></li>
                            <li><a href=\"\">About4</a></li>

                        </ul>
                    </div>
                    <div class=\"f-services\">
                            <ul>
                                    <a class=\"main-c\" href=\"\">Services</a>
                                    <li><a href=\"\">services</a></li>
                                    <li><a href=\"\">services</a></li>
                                    <li><a href=\"\">services</a></li>
        
                                </ul>
                    </div>
                    <div class=\"f-contact\">
                            <ul>
                                    <a class=\"main-c\" href=\"\">Contact</a>
                                    <li><a href=\"\">contact</a></li>
                                    <li><a href=\"\">contact</a></li>
                                    <li><a href=\"\">contact</a></li>
        
                                </ul>
                    </div>
                </div>
               <div class=\"social-icons text-center\">
                   <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-1.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-2.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-3.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-4.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-5.png\" id=\"soc-icons\" alt=\"\">

               </div>
                <hr id=\"hr-footer\" class=\"mx-auto\">
                <div class=\"footer-bottom\">

                    <small>Copyright &copy; - 2018</small>

                </div>

        </footer>
    </body>
</html>";
    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        // line 51
        echo "            <main>
            </main>
        ";
    }

    public function getTemplateName()
    {
        return "__layout/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 51,  254 => 50,  237 => 168,  233 => 167,  229 => 166,  225 => 165,  221 => 164,  186 => 132,  163 => 112,  135 => 87,  100 => 54,  98 => 50,  78 => 33,  69 => 27,  59 => 22,  47 => 13,  43 => 12,  37 => 9,  33 => 8,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__layout/main.html", "/var/www/html/e-commerce/Views/__layout/main.html");
    }
}
