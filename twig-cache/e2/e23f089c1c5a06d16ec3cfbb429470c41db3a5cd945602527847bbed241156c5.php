<?php

/* Admin/editCategories.html */
class __TwigTemplate_8f81fa1f7ed719d8c42d3ed040fe712de5728374c2a65cea382b4d9123f7e654 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/editCategories.html", 1);
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
<h3 id=\"page-title\">Edit Category</h3><br><br><br>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/categories/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_id", array()), "html", null, true);
        echo "\" method=\"POST\">
    <div class=\"col-md-8 mx-auto\">
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Category Name</label>
            <input type=\"text\" name=\"category_name\" class=\"form-control col-md-5\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_name", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Category Parent</label>
            <input type=\"number\" name=\"category_parent\" class=\"form-control col-md-5\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_parent", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group col-md-9\">
            <button type=\"submit\" class=\"btn btn-outline-secondary float-right\" style=\"margin-left: 5px;\">Edit</button>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/categories\"><button class=\"btn btn-outline-secondary float-right\">Go back</button></a>

        </div>
    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "Admin/editCategories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  55 => 15,  48 => 11,  39 => 7,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/editCategories.html", "/var/www/html/e-commerce/Views/Admin/editCategories.html");
    }
}
