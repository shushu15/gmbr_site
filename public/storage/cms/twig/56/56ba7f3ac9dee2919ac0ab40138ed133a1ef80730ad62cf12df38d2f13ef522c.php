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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/home/contacthome.htm */
class __TwigTemplate_0082cd7624c0d590a8e0d76e8ccbf96487b372404f9bec491ce352082cbbba62 extends \Twig\Template
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
        echo "<section class=\"mt-70 position-relative\">
\t<div class=\"container\">
        <div class=\"cta-block-2 bg-gray p-5 rounded border-1\">
            <div class=\"row justify-content-center align-items-center \">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 mb-4 mb-lg-0\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right \">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/home/contacthome.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<section class=\"mt-70 position-relative\">
\t<div class=\"container\">
        <div class=\"cta-block-2 bg-gray p-5 rounded border-1\">
            <div class=\"row justify-content-center align-items-center \">
                <div class=\"col-lg-7\">
                    <span class=\"text-color\">For Every type business</span>
                    <h2 class=\"mt-2 mb-4 mb-lg-0\">Entrust Your Project to Our Best Team of Professionals</h2>
                </div>
                <div class=\"col-lg-4\">
                    <a href=\"contact.html\" class=\"btn btn-main btn-round-full float-lg-right \">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/partials/home/contacthome.htm", "");
    }
}
