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

/* /home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/scripts.htm */
class __TwigTemplate_01a79d55da55b53adc12ffbb4c6ee1f3e6e4550004870ee454636c5f80675ebd extends \Twig\Template
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
        echo "<script   src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
              integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
              crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/bootstrap.bundle.min.js", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/js/site.js"]);
        // line 9
        echo "\"></script>
    ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script   src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
              integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
              crossorigin=\"anonymous\"></script>
    <script src=\"{{[
            'assets/js/bootstrap.bundle.min.js',
            '@framework',
            '@framework.extras',
            'assets/js/site.js',
        ] | theme }}\"></script>
    {% scripts %}", "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/site/scripts.htm", "");
    }
}
