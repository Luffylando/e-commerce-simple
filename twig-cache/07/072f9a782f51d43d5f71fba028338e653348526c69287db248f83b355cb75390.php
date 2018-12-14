<?php

/* __layout/main-admin.html */
class __TwigTemplate_1cd433c0b48e7b219cc3665e070d534f8162a9c2177673bcb112a3acd43ee2bc extends Twig_Template
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
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/js/jquery.js\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/js/bootstrap.js\"></script>
       
    </head>
    <body>
     
        <nav class=\"navbar-nav fixed-top\">
            <div class=\"container\">
                
                <div class=\"float-left\">
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "Assets/img/logof.png\" id=\"logo-nav\" alt=\"logo\"></a>

                </div>

                    
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/categories\">Categories</a>
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/employees\">Employees</a>
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/products\">Products</a>
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/cart\">Cart</a>


                ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "employee_id", array()) != "")) {
            // line 33
            echo "
                 <a class=\"float-right\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "logout\">Logout</a>
                 <p class=\"float-right\" style=\"color:white; font-family: 'Times New Roman', Times, serif; font-size: 13pt; margin-left:20px;\">Hello ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "username", array()), "html", null, true);
            echo "</p>

         
                ";
        } else {
            // line 39
            echo "                    <a class=\"float-right\" href=\"\">Login</a>
                    <a class=\"float-right\" href=\"\">Register</a>
                ";
        }
        // line 42
        echo "                


             </div>            
        </nav>
        ";
        // line 47
        $this->displayBlock('main', $context, $blocks);
        // line 51
        echo "
        <br>
     
    </body>
</html>";
    }

    // line 47
    public function block_main($context, array $blocks = array())
    {
        // line 48
        echo "        <main>
        </main>
        ";
    }

    public function getTemplateName()
    {
        return "__layout/main-admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  124 => 47,  116 => 51,  114 => 47,  107 => 42,  102 => 39,  95 => 35,  91 => 34,  88 => 33,  86 => 32,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  58 => 21,  46 => 12,  42 => 11,  37 => 9,  33 => 8,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__layout/main-admin.html", "C:\\xampp\\htdocs\\e-commerce\\Views\\__layout\\main-admin.html");
    }
}
