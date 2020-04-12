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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/meta.htm */
class __TwigTemplate_9c5f494530ac0fd6ac346be873379ac6a0aaf065190c517090bea5eb6a0a631c extends \Twig\Template
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
        // line 2
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 5)) {
            // line 6
            echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 9
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, false, 9), 140]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "theme_site_name", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 11), "first_name", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "theme_site_name", [], "any", false, false, false, 13), "html", null, true);
            echo "\">

<title>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 15), "theme_site_name", [], "any", false, false, false, 15), "html", null, true);
            echo "</title>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["this"] ?? null), "page", [], "any", false, false, false, 16), "url", [], "any", false, false, false, 16) == "/blog/:page?")) {
            // line 17
            echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 20
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 20), "meta_description", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 20), "meta_description", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "site_description", [], "any", false, false, false, 20))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "site_description", [], "any", false, false, false, 20))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 21
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 21), "meta_title", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 21), "meta_title", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "title", [], "any", false, false, false, 21))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "title", [], "any", false, false, false, 21))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "theme_site_name", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "theme_site_author", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "theme_site_name", [], "any", false, false, false, 24), "html", null, true);
            echo "\">

<title>";
            // line 26
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 26), "meta_title", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 26), "meta_title", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "theme_site_name", [], "any", false, false, false, 26), "html", null, true);
            echo "</title>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 27
($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 27)) {
            // line 28
            echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 31
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 31), 140]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 32), "theme_site_name", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 33), "theme_site_author", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 35), "theme_site_name", [], "any", false, false, false, 35), "html", null, true);
            echo "\">

<title>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 37), "theme_site_name", [], "any", false, false, false, 37), "html", null, true);
            echo "</title>
";
        } else {
            // line 39
            echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 43
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 43), "meta_description", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 43), "meta_description", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 43), "theme_site_description", [], "any", false, false, false, 43))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 43), "theme_site_description", [], "any", false, false, false, 43))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 44
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 44), "meta_title", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 44), "meta_title", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "theme_site_name", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "theme_site_author", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 47), "theme_site_name", [], "any", false, false, false, 47), "html", null, true);
            echo "\">

<title>";
            // line 49
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 49), "meta_title", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 49), "meta_title", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "title", [], "any", false, false, false, 49))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "title", [], "any", false, false, false, 49))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 49), "theme_site_name", [], "any", false, false, false, 49), "html", null, true);
            echo "</title>
";
        }
        // line 51
        echo "
";
        // line 53
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
";
        // line 55
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/plugins/bootstrap/css/bootstrap.min.css", 1 => "assets/plugins/themify/css/themify-icons.css", 2 => "assets/plugins/fontawesome/css/all.css", 3 => "assets/plugins/magnific-popup/dist/magnific-popup.css", 4 => "assets/plugins/slick-carousel/slick/slick.css", 5 => "assets/plugins/slick-carousel/slick/slick-theme.css"]);
        // line 62
        echo "\" rel=\"stylesheet\">
";
        // line 64
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/style.scss"]);
        // line 66
        echo "\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 66,  188 => 64,  185 => 62,  182 => 55,  177 => 53,  174 => 51,  167 => 49,  162 => 47,  157 => 45,  151 => 44,  147 => 43,  141 => 39,  134 => 37,  129 => 35,  124 => 33,  118 => 32,  114 => 31,  109 => 28,  107 => 27,  101 => 26,  96 => 24,  91 => 22,  85 => 21,  81 => 20,  76 => 17,  74 => 16,  68 => 15,  63 => 13,  58 => 11,  52 => 10,  48 => 9,  43 => 6,  41 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
{# Meta Tags #}
{% if blogPost.post %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ html_limit(post.summary, 140)|raw }}\">
<meta name=\"title\" content=\"{{ post.title }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ post.user.first_name }}\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ post.title }} - {{ this.theme.theme_site_name }}</title>
{% elseif this.page.url == '/blog/:page?' %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.site_description) }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.theme_site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}</title>
{% elseif blogCategories.categories %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ html_limit(category.description, 140)|raw }}\">
<meta name=\"title\" content=\"{{ category.name }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.theme_site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ category.name }} - {{ this.theme.theme_site_name }}</title>
{% else %}

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.theme_site_description) }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.theme_site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}</title>
{% endif %}

{# Favicon #}
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.ico'|theme }}\">
{# CSS #}
<link href=\"{{ [
  'assets/plugins/bootstrap/css/bootstrap.min.css',
  'assets/plugins/themify/css/themify-icons.css',
  'assets/plugins/fontawesome/css/all.css',
  'assets/plugins/magnific-popup/dist/magnific-popup.css',
  'assets/plugins/slick-carousel/slick/slick.css',
  'assets/plugins/slick-carousel/slick/slick-theme.css'
]|theme }}\" rel=\"stylesheet\">
{# Style SCSS #}
<link href=\"{{ [
  'assets/scss/style.scss'
]|theme }}\" rel=\"stylesheet\">", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/meta.htm", "");
    }
}
