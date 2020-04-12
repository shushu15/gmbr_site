<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/footer.htm */
class __TwigTemplate_15c38585e4d275b8cab4d558a0d3056d90eb8e96d1ce362f015393551a84b476 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"web-footer pt-2 pb-1\">
    <div class=\"container\">
      <div class=\"copyright text-center\">&copy; ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        ";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "copyright", [], "any", false, false, false, 4)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "copyright", [], "any", false, false, false, 4)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_title", [], "any", false, false, false, 4))), "html", null, true);
        echo "
      </div>
    </div>
  </footer>
      <div class=\"back-to-top\" id=\"back-to-top\">
        <a href=\"#body\" class=\"smoothscroll btn btn-sm btn btn-outline-secondary\" title=\"Back to top\"><i class=\"fas fa-chevron-up\"></i></a>
      </div>
  
  ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 13
        echo "      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js\"></script>
      <script>
          \$(document).ready(function(){
            \$(window).scroll(function () {
                if (\$(this).scrollTop() > 50) {
                  //console.log(\$(this).scrollTop());
                  \$('#back-to-top').fadeIn();
                } else {
                  \$('#back-to-top').fadeOut();
                }
              });
 
              // scroll body to 0px on click
              \$('#back-to-top').click(function () {
                \$('body,html').animate({
                  scrollTop: 0
                }, 400, \"easeInOutExpo\");
                return false;
              });
          });
      </script>
  ";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  58 => 13,  56 => 12,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"web-footer pt-2 pb-1\">
    <div class=\"container\">
      <div class=\"copyright text-center\">&copy; {{ 'now' | date ('Y') }}
        {{ this.theme.copyright ? this.theme.copyright : this.theme.site_title }}
      </div>
    </div>
  </footer>
      <div class=\"back-to-top\" id=\"back-to-top\">
        <a href=\"#body\" class=\"smoothscroll btn btn-sm btn btn-outline-secondary\" title=\"Back to top\"><i class=\"fas fa-chevron-up\"></i></a>
      </div>
  
  {% put scripts %}
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js\"></script>
      <script>
          \$(document).ready(function(){
            \$(window).scroll(function () {
                if (\$(this).scrollTop() > 50) {
                  //console.log(\$(this).scrollTop());
                  \$('#back-to-top').fadeIn();
                } else {
                  \$('#back-to-top').fadeOut();
                }
              });
 
              // scroll body to 0px on click
              \$('#back-to-top').click(function () {
                \$('body,html').animate({
                  scrollTop: 0
                }, 400, \"easeInOutExpo\");
                return false;
              });
          });
      </script>
  {% endput %}", "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/footer.htm", "");
    }
}
