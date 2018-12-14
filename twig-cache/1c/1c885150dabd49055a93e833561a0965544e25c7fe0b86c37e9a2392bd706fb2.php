<?php

/* Cart/thankYou.html */
class __TwigTemplate_ceb3e4c7c2c00d666e363e8272bb96b224eb4eae1a0245b3da54a679d15062f7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main2.html", "Cart/thankYou.html", 1);
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
<div id=\"receipt-title\" style=\"color:rgb(5, 97, 5);\">You Purchased Item Successfully!</div><br>

<div class=\"card col-md-6 mx-auto\">
    <p id=\"receipt-title\">Receipt</p> 
<address>
    Name: ";
        // line 11
        echo twig_escape_filter($this->env, ($context["fullname"] ?? null), "html", null, true);
        echo "            <br>
    Email: ";
        // line 12
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "              <br>
    Country:";
        // line 13
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo "           <br>
    City: ";
        // line 14
        echo twig_escape_filter($this->env, ($context["city"] ?? null), "html", null, true);
        echo "                <br>
    Street Address: ";
        // line 15
        echo twig_escape_filter($this->env, ($context["street"] ?? null), "html", null, true);
        echo "    <br>
    Zip Code: ";
        // line 16
        echo twig_escape_filter($this->env, ($context["zip"] ?? null), "html", null, true);
        echo "        <br><br><br>
    
    The item\\items have been shipped to address above.
    <br><br>



    Regards, <br>
    E-commerce stuff
    <div class=\"float-right\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Jump on starting page</a></div>

</address>

   
</div>

";
    }

    public function getTemplateName()
    {
        return "Cart/thankYou.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Cart/thankYou.html", "C:\\xampp\\htdocs\\e-commerce\\Views\\Cart\\thankYou.html");
    }
}
