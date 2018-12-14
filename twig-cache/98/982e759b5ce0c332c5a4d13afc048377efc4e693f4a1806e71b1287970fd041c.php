<?php

/* __layout/main2.html */
class __TwigTemplate_354f8d30533b37dcc65155018299ccdf2825787484cb981a5d9942e7fca7eab0 extends Twig_Template
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
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/js/jquery.js\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/js/bootstrap.js\"></script>
       
    </head>
    <body>
     
        <nav class=\" navbar-nav fixed-top\">
            <div class=\"container\">
                
                <div class=\"float-left\">
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/logof.png\" id=\"logo-nav\" alt=\"logo\"></a>

                </div>

                   
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "about\">About</a>
                    <a data-toggle=\"modal\" href=\"\" data-target=\"#exampleModal\"
                    onclick=\"mail();\">Contact</a>
   



                    <a class=\"float-right\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart\">Cart</a>
                


             </div>            
        </nav>

        <div id=\"img1-main2\">
                <div id=\"logo-main2\"></div>
            


            </div>

       

        ";
        // line 48
        $this->displayBlock('main', $context, $blocks);
        // line 52
        echo "
        <footer id=\"foot-m\">
                <div class=\"footer-head mx-auto\">
                    <div class=\"f-logo\">
                        <a href=\"#\"><img src=\"";
        // line 56
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
        // line 88
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-1.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-2.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-3.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-4.png\" id=\"soc-icons\" alt=\"\">
                   <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/icons/si-5.png\" id=\"soc-icons\" alt=\"\">

               </div>
                <hr id=\"hr-footer\" class=\"mx-auto\">
                <div class=\"footer-bottom\">

                    <small>Copyright &copy; - 2018</small>

                </div>

        </footer>
        <script>
        
        function mail(){
            var mail = {\"email\": \"antonije25.01.1994@gmail.com\"};
           
            \$.ajax({
                url: \"";
        // line 109
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
    </body>
</html>";
    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
        // line 49
        echo "            <main>
            </main>
        ";
    }

    public function getTemplateName()
    {
        return "__layout/main2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 49,  195 => 48,  175 => 109,  155 => 92,  151 => 91,  147 => 90,  143 => 89,  139 => 88,  104 => 56,  98 => 52,  96 => 48,  77 => 32,  67 => 25,  57 => 20,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__layout/main2.html", "/var/www/html/e-commerce/Views/__layout/main2.html");
    }
}
