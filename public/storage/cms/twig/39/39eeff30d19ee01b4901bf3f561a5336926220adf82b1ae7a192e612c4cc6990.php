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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/home/slider.htm */
class __TwigTemplate_22b58a4a758f0741dc03874b812d0340d4bd18b4c09d10977b5e906445e0d94c extends \Twig\Template
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
        echo "<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-9 col-md-10\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<span class=\"d-block mb-3 text-white text-capitalize\">To play games better</span>
\t\t\t\t\t<h1 class=\"animated fadeInUp mb-5\">Cribbage practice<br>in your phone or desktop.</h1>
\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"btn btn-main animated fadeInUp btn-round-full\" >Get started<i class=\"btn-icon fa fa-angle-right ml-2\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/home/slider.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Slider Start #}
<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-9 col-md-10\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<span class=\"d-block mb-3 text-white text-capitalize\">To play games better</span>
\t\t\t\t\t<h1 class=\"animated fadeInUp mb-5\">Cribbage practice<br>in your phone or desktop.</h1>
\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"btn btn-main animated fadeInUp btn-round-full\" >Get started<i class=\"btn-icon fa fa-angle-right ml-2\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Slider End #}", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/home/slider.htm", "");
    }
}
