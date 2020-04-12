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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-theme/partials/menu-items.htm */
class __TwigTemplate_88aa8a0b28fbeec3a4075a40b6c180d97dcbae7963b68b1a52189603c8487f18 extends \Twig\Template
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
        echo "<ul class=\"navbar-nav ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    <li class=\"
      nav-item
      ";
            // line 5
            echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 5) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 5))) ? ("active") : (""));
            echo " 
      ";
            // line 6
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 6)) ? ("dropdown") : (""));
            echo "
    \">
      <a
        class=\"nav-link ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 9)) {
                echo "dropdown-toggle";
            }
            echo "\"
        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10)) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " 
        href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 11), "html", null, true);
            echo "\"
      >";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</a>

      ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 14)) {
                // line 15
                echo "        <div class=\"dropdown-menu\">
          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 17
                    echo "            <a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, false, 17), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, false, 17), "html", null, true);
                    echo "</a>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </div>
      ";
            }
            // line 21
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-theme/partials/menu-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  105 => 21,  101 => 19,  90 => 17,  86 => 16,  83 => 15,  81 => 14,  76 => 12,  72 => 11,  66 => 10,  60 => 9,  54 => 6,  50 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav {{ class }}\">
  {% for item in items %}
    <li class=\"
      nav-item
      {{ item.isActive or item.isChildActive ? 'active' : '' }} 
      {{ item.items ? 'dropdown' : '' }}
    \">
      <a
        class=\"nav-link {% if item.items %}dropdown-toggle{% endif %}\"
        {% if item.items %}data-toggle=\"dropdown\"{% endif %} 
        href=\"{{ item.url }}\"
      >{{ item.title }}</a>

      {% if item.items %}
        <div class=\"dropdown-menu\">
          {% for subitem in item.items %}
            <a class=\"dropdown-item\" href=\"{{ subitem.url }}\">{{ subitem.title }}</a>
          {% endfor %}
        </div>
      {% endif %}
    </li>
  {% endfor %}
</ul>", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-theme/partials/menu-items.htm", "");
    }
}
