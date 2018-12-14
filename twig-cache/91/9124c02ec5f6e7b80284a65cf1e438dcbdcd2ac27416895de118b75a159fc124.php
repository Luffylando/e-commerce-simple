<?php

/* AjaxInfo/mail.html */
class __TwigTemplate_190df2ddb2b6d659ab94c489d33aa465b5f18bf0da4143288e6b2e52045a3d1c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade mail mx-auto\" id=\"mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Contact us</h5>
        
      </div>
      <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "sendMail\">

      <div class=\"modal-body\">
          <div class=\"form-group\">
            <label for=\"email_kompanija\" class=\"col-form-label\">Send to:</label>
            <input type=\"text\" class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" readonly id=\"email_kompanija\" name=\"email_kompanija\">
          </div>
          <div class=\"row\">
       
              <div class=\"form-group col-md-6\">
                    <label for=\"predmet\" class=\"col-form-label\">Subject</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Subject \" id=\"predmet\" name=\"predmet\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"posaljioc_email\" class=\"col-form-label\">Email</label>
                    <input type=\"email\" class=\"form-control\" placeholder=\"Your Email\" id=\"posaljioc_email\" name=\"posaljioc_email\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"ime\" class=\"col-form-label\">Firstname</label>
                    <input type=\"text\" class=\"form-control\" name=\"ime\" placeholder=\"Your Firstname\">
                </div>
                
                <div class=\"form-group col-md-6\">
                    <label for=\"prezime\" class=\"col-form-label\">Lastname</label>
                <input type=\"text\" class=\"form-control\" name=\"prezime\" placeholder=\"Your Lastname\">
                </div>
            </div>
          
          <div class=\"form-group\">
            <label for=\"poruka\" class=\"col-form-label\">Poruka</label>
            <textarea class=\"form-control\" name=\"poruka\" id=\"poruka\">Message body</textarea>
          </div>
       
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary\">Send E-mail</button>
      </div>
    </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AjaxInfo/mail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AjaxInfo/mail.html", "/var/www/html/e-commerce/Views/AjaxInfo/mail.html");
    }
}
