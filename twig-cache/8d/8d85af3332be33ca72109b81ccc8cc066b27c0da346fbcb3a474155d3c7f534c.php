<?php

/* Admin/editProducts.html */
class __TwigTemplate_5901e6323420ab3ddb73e357e1b7c302e7e35a33ff3313c2dba3149fcfe38a6e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/editProducts.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "__layout/main-admin.html";
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
<h3 id=\"page-title\">Edit Products</h3><br><br><br>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/products/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "flowers_id", array()), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
    <div class=\"col-md-8 mx-auto\">
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Flower Name</label>
            <input type=\"text\" name=\"flower_name\" class=\"form-control col-md-5\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "flower_name", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-4\">List Price</label>
            <input type=\"text\" name=\"list_price\" class=\"form-control col-md-5\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "old_price", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Actual Price</label>
            <input type=\"text\" name=\"actual_price\" class=\"form-control col-md-5\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "actual_price", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group row\">
                <label class=\"col-md-4\">Availability</label>
                <input type=\"text\" name=\"availability\" class=\"form-control col-md-5\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "availability", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group row\">
            <label class=\"col-md-4\">Flower Image</label>
            <input type=\"file\" name=\"image\">
        </div>
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "flower_img", array()), "html", null, true);
        echo "\" id=\"edit-img\" alt=\"img\">


        <div class=\"form-group col-md-9\">
                <br>
            <button type=\"submit\" class=\"btn btn-outline-secondary float-right\" style=\"margin-left: 5px;\">Edit</button>
            <a class=\"btn btn-outline-secondary float-right\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/products\">Go back</a>

        </div>
    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "Admin/editProducts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  80 => 31,  70 => 24,  62 => 19,  55 => 15,  48 => 11,  39 => 7,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/editProducts.html", "/var/www/html/e-commerce/Views/Admin/editProducts.html");
    }
}
