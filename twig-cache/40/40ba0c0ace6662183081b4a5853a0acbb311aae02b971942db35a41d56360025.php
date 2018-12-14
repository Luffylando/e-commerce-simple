<?php

/* AjaxInfo/details.html */
class __TwigTemplate_e283d5ee64b9d097d6e8ee650ada0f5e11b93c7566f1c7f3566ac33f74798167 extends Twig_Template
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
        echo "    <!-- Modal -->
      <div class=\"modal fade details-1\" data-backdrop=\"static\" id=\"details-1\" role=\"dialog\" aria-labelledby=\"details-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"content\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
    
                  <h5 class=\"modal-title mx-auto\" id=\"flower_name\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "flower_name", array()), "html", null, true);
        echo "</h5>
                  
                </div>
                <div class=\"modal-body row\" id=\"modal-body-feature\">
                  <div class=\"col-md-6\">
                    <img src=\" ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "flower_img", array()), "html", null, true);
        echo "\" alt=\"img\" id=\"modal-img\">
                 </div>
                 <div class=\"col-md-6\" id=\"modal-text\">
                   Description: Description of the object
                   Price (for single article): ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "actual_price", array()), "html", null, true);
        echo " &euro;
                   <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "add_cart\" id=\"add_product_form\" method=\"post\">
                   <div class=\"form-group row\">
                      <label class=\"col-md-3\">Quantity:</label>&nbsp;&nbsp;&nbsp;
                      <input type=\"number\" min=\"0\" class=\"form-control col-md-2\" id=\"quantity\" name=\"quantity\">
                  </div>
                  <input type=\"hidden\" name=\"flower_id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["flower"] ?? null), "flowers_id", array()), "html", null, true);
        echo "\">
                   
                
                </div>
              </div>
                <div class=\"modal-footer\">
              
                  <button type=\"button\" class=\"btn btn-secondary\" onclick=\"closeModal()\">Close</button>
                  <button onclick=\"add_to_cart(); return false\" class=\"btn btn-primary\">Add to Cart</button>
        
                </div>
              </div>
            </div>
          </div>
        </form>
    
   <!-- END OF MODAL-->

   <script>
    function add_to_cart(){

        \$('#modal_errors').html(\"\");

        var quantity = \$('#quantity').val();
        var error = '';
        var data = \$('#add_product_form').serialize();
        if(quantity == '' || quantity == 0){
          error += '<div class=\"alert alert-danger\">You must choose quantity!</div>';
          \$('#modal_errors').html(error);
          return;
        } else {

          \$.ajax({
            url : '";
        // line 55
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "add_cart',
            method : 'post',
            data : data,
            success: function(){
              location.reload();
            },
            error: function(){alert(\"Something Went Wrong!\");}

          });
        }
      }
   </script>
   
";
    }

    public function getTemplateName()
    {
        return "AjaxInfo/details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 55,  58 => 22,  50 => 17,  46 => 16,  39 => 12,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AjaxInfo/details.html", "C:\\xampp\\htdocs\\e-commerce\\Views\\AjaxInfo\\details.html");
    }
}
