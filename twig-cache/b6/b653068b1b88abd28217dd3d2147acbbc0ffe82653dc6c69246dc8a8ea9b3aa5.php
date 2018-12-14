<?php

/* Pocetna/contact.html */
class __TwigTemplate_3ae42cdd1141bcfef422b8b40c01b149cc4d3dc2a522a7f9cba0c60dc38a4901 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main2.html", "Pocetna/contact.html", 1);
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
<h3 id=\"page-title\">Get in Touch</h3><br>
<div class=\"container\">
<p>
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
        Random text go go goRandom text go go goRandom text go go goandom text go go goR
</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "Pocetna/contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pocetna/contact.html", "/var/www/html/e-commerce/Views/Pocetna/contact.html");
    }
}
