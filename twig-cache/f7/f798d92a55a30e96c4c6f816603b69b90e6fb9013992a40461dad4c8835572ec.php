<?php

/* Pocetna/about.html */
class __TwigTemplate_c73dc1aefe279d4a03453e55525fde14526fdbd52b9f81927311a78a808fb0cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main2.html", "Pocetna/about.html", 1);
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
<h3 id=\"page-title-checkout\">About us</h3><br>
    <div class=\"container\">
        <p>
            Lorem Ipsum is simply dummy text of the printing 
            and typesetting industry. Lorem Ipsum has been the 
            industry's standard dummy text ever since the 1500s,
             when an unknown printer took a galley of type and 
             scrambled it to make a type specimen book. It has survived
              not only five centuries, but also the leap into electronic 
              typesetting, remaining essentially unchanged. It was popularised
               in the 1960s with the release of Letraset sheets containing Lorem 
               Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.

        </p>


       
    </div>


";
    }

    public function getTemplateName()
    {
        return "Pocetna/about.html";
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
        return new Twig_Source("", "Pocetna/about.html", "/var/www/html/e-commerce/Views/Pocetna/about.html");
    }
}
