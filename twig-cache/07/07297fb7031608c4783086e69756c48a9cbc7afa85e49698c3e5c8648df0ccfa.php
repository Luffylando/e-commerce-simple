<?php

/* Admin/categories.html */
class __TwigTemplate_d62555e2cd8190df93fe18c04b5561f134484f35ed3ff48a19cd61f4b1f42efd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/categories.html", 1);
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
<h3 id=\"page-title\">Categories</h3><br>

<div class=\"col-md-12\">
    <div class=\"col-md-7 float-left\">
    <table class=\"table table-striped table-bordered\">
        <thead>
            <th>#</th>
            <th>Category Name</th>
            <th>Category Parent</th>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "
            <tr>
                <td>
                    <div class=\"row\">&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/categories/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-outline-primary\">Edit</button></a>&nbsp;&nbsp;
                    <form action=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/categories/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\" method=\"POST\">
                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
                    </form>   
                </div>
                </td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_parent", array()), "html", null, true);
            echo "</td>
            </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
    </div>

    <div class=\"col-md-5 float-right\">
        <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "admin/categories\" method=\"POST\">
            <div class=\"card\" id=\"category-body\">
                 <h4 align=\"center\">Add Category</h4>

                    <div class=\"form-group\">
                        <br>
                        <label class=\"col-md-5\">Category Name</label>
                        <input type=\"text\" name=\"category_name\">
                    
                        <label class=\"col-md-5\">Category Parent</label>
                        <input type=\"number\" name=\"category_parent\">
                        <div class=\"col-md-11\"><br>
                            <button type=\"submit\" class=\"btn btn-sm btn-outline-secondary float-right\">Add Category</button>
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
        return "Admin/categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  89 => 33,  79 => 29,  75 => 28,  65 => 23,  59 => 22,  53 => 18,  49 => 17,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/categories.html", "C:\\xampp\\htdocs\\e-commerce\\Views\\Admin\\categories.html");
    }
}
