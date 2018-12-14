<?php

/* Pocetna/index.html */
class __TwigTemplate_3dcc2a8136cdb136d89946e15438c7f20853997026dbb35f65eaa9dcd68e93a7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main.html", "Pocetna/index.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "__layout/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
<br>
<!-- Main page feature section -->
<div class=\"container-fluid\" id=\"featured-page\">
    <div class=\"col-md-12 mx-auto row\">

    <!-- This is left banner -->
        <div class=\"col-md-2\">
            <!-- LEFT MARGIN-->
        </div>

        <!-- This is center column for Featured items -->
        <div class=\"col-md-8 text-center\">
            <div class=\"text-center\">
                <h4>Featured Flowers</h4> <br>
            </div>
            <div class=\"row\">

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flowers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["flower"]) {
            // line 23
            echo "
                <div class=\"col-md-4\" id=\"flower-card\">
                    <div class=\"mx-auto\">
                        <div id=\"flower-title\">
                            <h5>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flower_name", array()), "html", null, true);
            echo "</h5>
                        </div>
                    </div>
                    <div id=\"flower-body\" onclick=\"detailsmodal(";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flowers_id", array()), "html", null, true);
            echo ")\">
                        <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flower_img", array()), "html", null, true);
            echo "\" id=\"feature-img\" alt=\"img\">
                        
                    </div>
                   <span style=\"color:red; text-decoration: line-through;\">List price: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "old_price", array()), "html", null, true);
            echo " &euro;</span> <br>
                   <span style=\"color:rgb(3, 95, 3);\">Actual price: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "actual_price", array()), "html", null, true);
            echo " &euro;</span><br>
                   <button type=\"button\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"
                   class=\"btn btn-sm btn-outline-secondary mx-auto\" id=\"button-feature\" onclick=\"detailsmodal(";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flower"], "flowers_id", array()), "html", null, true);
            echo ")\">Detaljnije</button>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flower'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
        </div>

        <!-- This is right banner-->
        <div class=\"col-md-2\">
           <!-- RIGHT MARGIN-->

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Pocetna/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  90 => 37,  85 => 35,  81 => 34,  75 => 31,  71 => 30,  65 => 27,  59 => 23,  55 => 22,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pocetna/index.html", "/var/www/html/e-commerce/Views/Pocetna/index.html");
    }
}
