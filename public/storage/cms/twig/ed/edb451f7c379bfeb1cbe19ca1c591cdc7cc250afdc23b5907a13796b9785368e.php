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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/scripts.htm */
class __TwigTemplate_981f10d425fb81c5c7999899c952a94ed4e9a4a3bcd59662c5d0d97bb8402576 extends \Twig\Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/plugins/jquery/jquery.js", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/plugins/bootstrap/js/popper.js", 4 => "assets/plugins/bootstrap/js/bootstrap.min.js", 5 => "assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js", 6 => "assets/plugins/slick-carousel/slick/slick.min.js", 7 => "assets/plugins/counterup/jquery.waypoints.min.js", 8 => "assets/plugins/counterup/jquery.counterup.min.js", 9 => "assets/plugins/google-map/map.js", 10 => "assets/js/script.js"]);
        // line 14
        echo "\"></script>
";
        // line 16
        echo "<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 14,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<script src=\"{{ [
    'assets/plugins/jquery/jquery.js',
    '@framework',
    '@framework.extras',
    'assets/plugins/bootstrap/js/popper.js',
    'assets/plugins/bootstrap/js/bootstrap.min.js',
    'assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js',
    'assets/plugins/slick-carousel/slick/slick.min.js',
    'assets/plugins/counterup/jquery.waypoints.min.js',
    'assets/plugins/counterup/jquery.counterup.min.js',
    'assets/plugins/google-map/map.js',
    'assets/js/script.js'
]|theme }}\"></script>
{# Google Map #}
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/site/scripts.htm", "");
    }
}
