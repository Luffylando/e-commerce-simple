<?php

/* Admin/transactions.html */
class __TwigTemplate_6c69a85bad6e9d5338d8e3e99d7d3e1684b36e6195205e36364d8128a4169169 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("__layout/main-admin.html", "Admin/transactions.html", 1);
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
<p id=\"page-title\">Transactions</p>


";
    }

    public function getTemplateName()
    {
        return "Admin/transactions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Admin/transactions.html", "/var/www/html/e-commerce/Views/Admin/transactions.html");
    }
}
