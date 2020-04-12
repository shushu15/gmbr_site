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

/* /home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/nav-home.htm */
class __TwigTemplate_03703bb5e11c3986682b1dbfc8076fc219178a50239397cf3c1314f0be423ca3 extends \Twig\Template
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
        echo "<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-primary\" id=\"navbar1\">
        <div class=\"container\">
            
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_logo", [], "any", false, false, false, 4)) {
            // line 5
            echo "                <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "#top\">
                    <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "site_logo", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "site_title", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
                </a>
            ";
        } else {
            // line 9
            echo "                <a class=\"navbar-brand mr-1 mb-1 mt-0 smoothscroll\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "#top\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "site_title", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>
            ";
        }
        // line 11
        echo "            
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"navbar-collapse collapse justify-content-center\" id=\"collapsingNavbar\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugins</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins/rainlab-blog");
        echo "\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("fontawesome");
        echo "\">Font Awesome</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("content");
        echo "\">Content</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("elements");
        echo "\">Elements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/nav-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  99 => 31,  93 => 28,  87 => 25,  81 => 22,  75 => 19,  65 => 11,  57 => 9,  49 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-primary\" id=\"navbar1\">
        <div class=\"container\">
            
            {% if this.theme.site_logo %}
                <a class=\"navbar-brand\" href=\"{{ 'home'|page }}#top\">
                    <img src=\"{{ this.theme.site_logo.path }}\" alt=\"{{ this.theme.site_title }}\">
                </a>
            {% else %}
                <a class=\"navbar-brand mr-1 mb-1 mt-0 smoothscroll\" href=\"{{ 'home'|page }}#top\">{{ this.theme.site_title }}</a>
            {% endif %}
            
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsingNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"navbar-collapse collapse justify-content-center\" id=\"collapsingNavbar\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ 'plugins'|page }}\">Plugins</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ 'plugins/rainlab-blog'|page }}\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ 'fontawesome'|page }}\">Font Awesome</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ 'content'|page }}\">Content</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ 'elements'|page }}\">Elements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>", "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/nav-home.htm", "");
    }
}
