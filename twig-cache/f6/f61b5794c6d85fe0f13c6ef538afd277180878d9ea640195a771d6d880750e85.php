<?php

/* Admin/employees.html */
class __TwigTemplate_f2db1ce40214b45b9ba3d27d31138c6525c59a0d040786ca8026744bc503b453 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/employees.html", 1);
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
<h3 id=\"page-title\">Employees</h3><br>

<div class=\"col-md-12\">
    <div class=\"col-md-7 float-left\">
    <table class=\"table table-striped table-bordered\">
        <thead>
            <th>#</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Role</th>

        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 21
            echo "
            <tr>
                <td>
                    <div class=\"row\">&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/employees/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "employee_id", array()), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-primary\">Edit</button></a>&nbsp;&nbsp;
                    <form action=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/employees/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "employee_id", array()), "html", null, true);
            echo "\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
                    </form>   
                </div>
                </td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "fullname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "role", array()), "html", null, true);
            echo "</td>

            </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    </div>

    <div class=\"col-md-5 float-right\">
        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/employees\" method=\"POST\">
            <div class=\"card\" id=\"category-body\">
                 <h4 align=\"center\">Add Employee</h4>

                    <div class=\"form-group\">
                        <br>
                        <label class=\"col-md-5\">Username</label>
                        <input type=\"text\" name=\"username\">
                    
                        <label class=\"col-md-5\">Fullname</label>
                        <input type=\"text\" name=\"fullname\">

                        <label class=\"col-md-5\">Email</label>
                        <input type=\"text\" name=\"email\">

                        <label class=\"col-md-5\">Password</label>
                        <input type=\"password\" name=\"password\">

                        <label class=\"col-md-5\">Role</label>
                        <select name=\"role\" id=\"role\">
                            <option value=\"\"></option>

                            <option value=\"Admin\">Admin</option>
                            <option value=\"Technician\">Technician</option>
                            <option value=\"Editor\">Editor</option>

                        </select>
                        <div class=\"col-md-11\"><br>
                            <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary float-right\">Add Employee</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>


</div>


";
    }

    public function getTemplateName()
    {
        return "Admin/employees.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  101 => 39,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  68 => 26,  62 => 25,  56 => 21,  52 => 20,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/employees.html", "C:\\xampp\\htdocs\\e-commerce\\Views\\Admin\\employees.html");
    }
}
