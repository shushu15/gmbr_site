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

/* /home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/styles.htm */
class __TwigTemplate_4475be7f5bea227393e290af094fb4f3a50f0332c4b7166a47a735f32ef018d9 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "font_awesome", [], "any", false, false, false, 1)) {
            // line 2
            echo "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 4
        echo "    <link href=\"https://fonts.googleapis.com/css?family=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "fonts", [], "any", false, false, false, 4), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/webbook.scss"]);
        // line 7
        echo "\" rel=\"stylesheet\">
        ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/test.css");
        echo "\">
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "google_analytics", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['trackingID'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "google_analytics", [], "any", false, false, false, 11)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/ga"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 12
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/styles.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  63 => 11,  61 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.theme.font_awesome %}
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" rel=\"stylesheet\">
    {% endif %}
    <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.fonts }}\" rel=\"stylesheet\">
    <link href=\"{{ [
            'assets/scss/webbook.scss'
        ] | theme }}\" rel=\"stylesheet\">
        {% styles %}
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/test.css' | theme }}\">
    {% if this.theme.google_analytics %}
        {% partial 'site/ga'  trackingID = this.theme.google_analytics %}
    {% endif %}", "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/styles.htm", "");
    }
}
