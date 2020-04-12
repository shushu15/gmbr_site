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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/header.htm */
class __TwigTemplate_6b31655611f949cd5fda4e05a21bb5fd920be3844dbffcb18b2f06b43f9480ce extends \Twig\Template
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
        // line 3
        echo "<header class=\"navigation\">
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand text-nowrap\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t\t<span class=\"hidden-md-up\">
\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo36x36.png");
        echo "\" alt=\"logo\">
\t\t\t</span>
\t\t  \tGmBr<span>games.</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Home"]);
        echo "<span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Games"]);
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cribbage");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cribbage"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gin-rummy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gin Rummy"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("canasta");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Canasta"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("backgammon");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Backgammon"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dominoes");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Dominoes"]);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Rules"]);
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cribbage");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cribbage"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gin-rummy");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Gin Rummy"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("canasta");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Canasta"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("backgammon");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Backgammon"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dominoes");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Dominoes"]);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t  
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown04\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Help"]);
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown04\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our company"]);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("practice");
        echo "\" class=\"btn btn-solid-border btn-round-full\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Practice"]);
        echo "</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 54,  164 => 48,  158 => 47,  152 => 46,  147 => 44,  137 => 39,  131 => 38,  125 => 37,  119 => 36,  113 => 35,  108 => 33,  99 => 29,  93 => 28,  87 => 27,  81 => 26,  75 => 25,  70 => 23,  62 => 20,  47 => 8,  42 => 6,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Header Start #}
<header class=\"navigation\">
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand text-nowrap\" href=\"{{ 'home'|page }}\">
\t\t\t<span class=\"hidden-md-up\">
\t\t\t\t<img class=\"img-responsive\" src=\"{{ 'assets/images/logo36x36.png'|theme }}\" alt=\"logo\">
\t\t\t</span>
\t\t  \tGmBr<span>games.</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">{{ 'Home'|_ }}<span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'Games'|_ }}</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'cribbage'|page }}\">{{ 'Cribbage'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'gin-rummy'|page }}\">{{ 'Gin Rummy'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'canasta'|page }}\">{{ 'Canasta'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'backgammon'|page }}\">{{ 'Backgammon'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'dominoes'|page }}\">{{ 'Dominoes'|_ }}</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'Rules'|_ }}</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'cribbage'|page }}\">{{ 'Cribbage'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'gin-rummy'|page }}\">{{ 'Gin Rummy'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'canasta'|page }}\">{{ 'Canasta'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'backgammon'|page }}\">{{ 'Backgammon'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'dominoes'|page }}\">{{ 'Dominoes'|_ }}</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t  
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown04\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'Help'|_ }}</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown04\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'blog'|page }}\">{{ 'Blog'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'about'|page }}\">{{ 'Our company'|_ }}</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'contact-us'|page }}\">{{ 'Contact'|_ }}</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"{{ 'practice'|page }}\" class=\"btn btn-solid-border btn-round-full\">{{ 'Practice'|_ }}</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
{# Header Close #}", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/header.htm", "");
    }
}
