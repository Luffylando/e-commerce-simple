<?php

/* Cart/cart.html */
class __TwigTemplate_809dde8183949cd4618ddfa63985900c3c7f6e830225bc4a4862f776cef66872 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main2.html", "Cart/cart.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "__layout/main2.html";
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

<div class=\"col-md-8 mx-auto\">
    <div id=\"page-title-checkout\">Cart</div><br>
    <table class=\"table table-striped table-bordered\">
        <thead>
            <th>#</th>
            <th>Product Name</th>
            <th>Price per one product</th>
            <th>Quantity</th>
            <th>Total sum</th>

        </thead>
        <tbody>



            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            <tr>
                <td></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "flower_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", array()), "html", null, true);
            echo " &euro;</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "price", array()) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array())), "html", null, true);
            echo " &euro;</td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        </tbody>
    </table>

    <div id=\"page-title-checkout\">Final table</div><br>
    <table class=\"table table-striped table-bordered\">
        <thead>
            <th>#</th>
            <th>Total items</th>
            <th>Subtotal</th>
            <th>Tax(";
        // line 42
        echo twig_escape_filter($this->env, ($context["tax"] ?? null), "html", null, true);
        echo ")</th>
            <th bg=\"danger\">Grand Total</th>

        </thead>
        <tbody>
           
            <tr>
                <td></td>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</td>

                <td>";
        // line 52
        echo twig_escape_filter($this->env, ($context["subtotal"] ?? null), "html", null, true);
        echo " &euro;</td>


                <td>";
        // line 55
        echo twig_escape_filter($this->env, (($context["subtotal"] ?? null) * ($context["tax"] ?? null)), "html", null, true);
        echo " &euro;</td>
                <td id=\"grand-total\">";
        // line 56
        echo twig_escape_filter($this->env, (($context["subtotal"] ?? null) + (($context["subtotal"] ?? null) * ($context["tax"] ?? null))), "html", null, true);
        echo " &euro;</td>

            </tr>
    

        </tbody>
    </table>
    <div><br>
        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart-checkout\"><button class=\"btn btn-primary float-right\">Checkout >>></button></a>
    </div><br>
</div>

";
    }

    public function getTemplateName()
    {
        return "Cart/cart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 64,  122 => 56,  118 => 55,  112 => 52,  107 => 50,  96 => 42,  84 => 32,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 23,  54 => 22,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Cart/cart.html", "/var/www/html/e-commerce/Views/Cart/cart.html");
    }
}
