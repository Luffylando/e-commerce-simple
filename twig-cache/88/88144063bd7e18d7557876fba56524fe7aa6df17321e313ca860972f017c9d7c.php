<?php

/* Admin/products.html */
class __TwigTemplate_06e28612c7d22ebd90609f6082d5af49b422634025523d8d258604bfa8303d4d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/products.html", 1);
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
<h3 id=\"page-title\">Products</h3><br>

<div class=\"col-md-12\">
    <div class=\"col-md-7 float-left\">
    <table class=\"table table-striped table-bordered\">
        <thead>
            <th>#</th>
            <th>Flower Name</th>
            <th>List Pirce</th>
            <th>Actual Pirce</th>
            <th>Availability</th>

        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flowers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["flower"]) {
            // line 21
            echo "            <tr>
                <td>
                    <div class=\"row\">&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/products/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flowers_id", array()), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-primary\">Edit</button></a>&nbsp;&nbsp;
                    <form action=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/products/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flowers_id", array()), "html", null, true);
            echo "\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
                    </form>   
                </div>
                </td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flower_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "old_price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "actual_price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "availability", array()), "html", null, true);
            echo "</td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
    </div>

    <div class=\"col-md-5 float-right\">
        <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/products\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"card\" id=\"category-body\">
                 <h4 align=\"center\">Add Product</h4>

                    <div class=\"form-group\">
                        <br>

                        <label class=\"col-md-5\">Flower Name</label>
                        <input type=\"text\" name=\"flower_name\">

                        <label class=\"col-md-5\">List Price</label>
                        <input type=\"text\" name=\"list_price\">

                        <label class=\"col-md-5\">Actual Price</label>
                        <input type=\"text\" name=\"actual_price\">

                        <label class=\"col-md-5\">Flower image</label>
                        <input type=\"file\" class=\"col-md-4\" name=\"image\">
                    
                        <label class=\"col-md-5\">Availability</label>
                        <select name=\"availability\" id=\"availability\">
                            <option value=\"\"></option>

                            <option value=\"Available\">Available</option>
                            <option value=\"Unavailable\">Unavailable</option>

                        </select>

                        <div class=\"col-md-11\"><br>
                            <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary float-right\">Add product</button>
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
        return "Admin/products.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 42,  99 => 37,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  67 => 25,  61 => 24,  56 => 21,  52 => 20,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/products.html", "/var/www/html/e-commerce/Views/Admin/products.html");
    }
}
