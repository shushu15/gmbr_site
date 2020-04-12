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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-theme/layouts/default.htm */
class __TwigTemplate_2f3f3e5f6ae562276d72baaa055c6e70949120f257ed9f7d5a329283c401b916 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <title>My blog theme</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"/\">Static pages demo</a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\">
                    <!-- Menu contents will go here -->
                    ";
        // line 24
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["topMenuLeft"] ?? null), "menuItems", [], "any", false, false, false, 24)        ;
        $context['__cms_partial_params']['class'] = "mr-auto"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "                    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["topMenuRight"] ?? null), "menuItems", [], "any", false, false, false, 25)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "                    <!-- End of Menu contents -->
                </div>
            </div>
        </nav>

        <main role=\"main\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-8\">
                    ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "                </div>
                <div class=\"col\">
                    <div class=\"blog-categories-sidebar\">
                        <h4>Blog categories</h4>

                        <!-- Blog category list will go here -->
                    </div>
                </div>
            </div>
        </main><!-- /.container -->

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  87 => 34,  77 => 26,  71 => 25,  65 => 24,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <title>My blog theme</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    </head>
    <body>
        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"/\">Static pages demo</a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\">
                    <!-- Menu contents will go here -->
                    {% partial 'menu-items' items=topMenuLeft.menuItems class='mr-auto' %}
                    {% partial 'menu-items' items=topMenuRight.menuItems %}
                    <!-- End of Menu contents -->
                </div>
            </div>
        </nav>

        <main role=\"main\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-8\">
                    {% page %}
                </div>
                <div class=\"col\">
                    <div class=\"blog-categories-sidebar\">
                        <h4>Blog categories</h4>

                        <!-- Blog category list will go here -->
                    </div>
                </div>
            </div>
        </main><!-- /.container -->

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    </body>
</html>", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-theme/layouts/default.htm", "");
    }
}
