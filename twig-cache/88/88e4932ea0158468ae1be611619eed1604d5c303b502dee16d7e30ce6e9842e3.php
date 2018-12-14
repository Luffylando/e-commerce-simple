<?php

/* Admin/cart.html */
class __TwigTemplate_e9bb004362f3f7f244eceb28c7236b26473139d3dca7192837faec27d70c66e6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/cart.html", 1);
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
<p id=\"page-title\">Cart(paid and to be shipped)</p><br>

<div class=\"col-md-10 mx-auto\">
<table class=\"table table-striped table-bordered\">
    <thead>

        <th>#</th>
        <th>Transaction id</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Items</th>
        <th>Grand total</th>
        <th>Paid</th>
        <th>Ship</th>

    </thead>
    <tbody>

             ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 24
            echo "        <tr>
            <td></td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "transaction_id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "fullname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "items", array()), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["cart"], "items", array()) != 1)) {
                echo "  items ";
            } else {
                echo " item ";
            }
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "grand_total", array()), "html", null, true);
            echo "&euro;</td>
            <td>";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["cart"], "paid", array()) == 1)) {
                echo " YES ";
            } else {
                echo " NO ";
            }
            echo " <strong>(";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "transaction_date", array()), "d.m.Y H:i:s"), "html", null, true);
            echo ")</strong></td>
            <form action=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "admin/cart-ship/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cart_id", array()), "html", null, true);
            echo "\" method=\"post\">
            <td><button type=\"submit\" class=\"btn btn-sm btn-success\">Ship</button></td>

            </form>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>

</table>
</div>

";
    }

    public function getTemplateName()
    {
        return "Admin/cart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  99 => 32,  89 => 31,  85 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 24,  56 => 23,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/cart.html", "/var/www/html/e-commerce/Views/Admin/cart.html");
    }
}
