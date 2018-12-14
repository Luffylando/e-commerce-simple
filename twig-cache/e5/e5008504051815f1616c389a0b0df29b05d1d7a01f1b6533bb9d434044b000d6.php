<?php

/* Admin/login.html */
class __TwigTemplate_2c7c056a31307d7e0d6142c02a9469446207d9ae557127ac6340fad80844c71f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
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

        <div id=\"admin-dashboard\">
            ADMINISTRATORS PAGE
        </div>
        <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "login\" method='POST'>
            <div class=\"col-md-6 mx-auto\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>Login</h5>
                    </div>
                    <div class=\"card-body\" id=\"login-body\">
                        <div class=\"form-group row\">
                                <label for=\"email\" class=\"col-md-3\">Email</label>
                                <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control col-md-7\">
                        </div> 
                        
                        <div class=\"form-group row\">
                                <label for=\"password\" class=\"col-md-3\">Password</label>
                                <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control col-md-7\">
                        </div>
                        
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-outline-secondary float-right\">Login</button>

                    </div>
                </div>
            </div>
        </form>
        <br>
        <h3 class=\"text-center\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Go back on customer page</a></h3>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 45,  55 => 19,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/login.html", "C:\\xampp\\htdocs\\e-commerce\\Views\\Admin\\login.html");
    }
}
