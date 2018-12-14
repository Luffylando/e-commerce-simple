<?php

/* Admin/editEmployees.html */
class __TwigTemplate_548b7e90a0ba84a031c4285636ba79345409feec20477cc5e44dd2496613d871 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/editEmployees.html", 1);
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
<h3 id=\"page-title\">Edit Employee</h3><br><br><br>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/employees/edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "employee_id", array()), "html", null, true);
        echo "\" method=\"POST\">
    <div class=\"col-md-8 mx-auto\">
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Username</label>
            <input type=\"text\" name=\"username\" class=\"form-control col-md-5\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "username", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Fullname</label>
            <input type=\"text\" name=\"fullname\" class=\"form-control col-md-5\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "fullname", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group row\">
            <label class=\"col-md-4\">Email</label>
            <input type=\"text\" name=\"email\" class=\"form-control col-md-5\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "email", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group row\">
             <label class=\"col-md-4\">Role</label>
            <select name=\"role\" id=\"role\">
                <option value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "role", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["employee"] ?? null), "role", array()), "html", null, true);
        echo "</option>

                <option value=\"Admin\">Admin</option>
                <option value=\"Technician\">Technician</option>
                <option value=\"Editor\">Editor</option>

            </select>
        </div>
        <div class=\"form-group col-md-9\">
            <button type=\"submit\" class=\"btn btn-outline-secondary float-right\" style=\"margin-left: 5px;\">Edit</button>
            <a class=\"btn btn-outline-secondary float-right\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/employees\">Go back</a>

        </div>
    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "Admin/editEmployees.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  71 => 25,  62 => 19,  55 => 15,  48 => 11,  39 => 7,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/editEmployees.html", "/var/www/html/e-commerce/Views/Admin/editEmployees.html");
    }
}
