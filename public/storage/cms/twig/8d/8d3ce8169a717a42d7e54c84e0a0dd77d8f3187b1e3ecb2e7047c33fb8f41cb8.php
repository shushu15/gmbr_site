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

/* /home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/home/bootstrap-colours.htm */
class __TwigTemplate_11d4c586891f933175eac729272b3d09f5d9b7553e8a91a693acca9fd37a418f extends \Twig\Template
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
        echo "<section class=\"colors text-center pb-4\">

\t\t  <h1 class=\"warning-color\">Bootstrap Root Colors Example</h1>
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae necessitatibus obcaecati rem nemo placeat consequuntur voluptatum accusantium ipsam doloremque assumenda. Omnis iure velit soluta reprehenderit aliquid! Facilis facere possimus quaerat.</p>
\t\t  <div class=\"bottomfix\"></div>
\t\t  <div class=\"text-center\">
\t\t\t\t<button class=\"btn mb-2 blue-color\">blue-color</button>
\t\t\t\t<button class=\"btn mb-2 indigo-color\">indigo-color</button>
\t\t\t\t<button class=\"btn mb-2 purple-color\">purple-color</button>
\t\t\t\t<button class=\"btn mb-2 pink-color\">pink-color</button>
\t\t\t\t<button class=\"btn mb-2 red-color\">red-color</button>
\t\t\t\t<button class=\"btn mb-2 orange-color\">orange-color</button>
\t\t\t\t<button class=\"btn mb-2 yellow-color\">yellow-color</button>
\t\t\t\t<button class=\"btn mb-2 green-color\">green-color</button>
\t\t\t\t<button class=\"btn mb-2 teal-color\">teal-color</button>
\t\t\t\t<button class=\"btn mb-2 cyan-color\">cyan-color</button>
\t\t\t\t<button class=\"btn mb-2 white-color\">white-color</button>
\t\t\t\t<button class=\"btn mb-2 gray-light-color\">gray-light-color</button>
\t\t\t\t<button class=\"btn mb-2 gray-dark-color text-white\">gray-dark-color</button>
\t\t\t\t<hr>
\t\t\t\t<button class=\"btn mb-2 primary-color text-secondary\">primary-color</button>
\t\t\t\t<button class=\"btn mb-2 secondary-color text-primary\">secondary-color</button>
\t\t\t\t<button class=\"btn mb-2 success-color text-white\">success-color</button>
\t\t\t\t<button class=\"btn mb-2 info-color\">info-color</button>
\t\t\t\t<button class=\"btn mb-2 warning-color\">warning-color</button>
\t\t\t\t<button class=\"btn mb-2 danger-color\">danger-color</button>
\t\t\t\t<button class=\"btn mb-2 light-color\">light-color</button>
\t\t\t\t<button class=\"btn mb-2 dark-color text-white\">dark-color</button>
\t\t  </div>
\t\t</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/home/bootstrap-colours.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"colors text-center pb-4\">

\t\t  <h1 class=\"warning-color\">Bootstrap Root Colors Example</h1>
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae necessitatibus obcaecati rem nemo placeat consequuntur voluptatum accusantium ipsam doloremque assumenda. Omnis iure velit soluta reprehenderit aliquid! Facilis facere possimus quaerat.</p>
\t\t  <div class=\"bottomfix\"></div>
\t\t  <div class=\"text-center\">
\t\t\t\t<button class=\"btn mb-2 blue-color\">blue-color</button>
\t\t\t\t<button class=\"btn mb-2 indigo-color\">indigo-color</button>
\t\t\t\t<button class=\"btn mb-2 purple-color\">purple-color</button>
\t\t\t\t<button class=\"btn mb-2 pink-color\">pink-color</button>
\t\t\t\t<button class=\"btn mb-2 red-color\">red-color</button>
\t\t\t\t<button class=\"btn mb-2 orange-color\">orange-color</button>
\t\t\t\t<button class=\"btn mb-2 yellow-color\">yellow-color</button>
\t\t\t\t<button class=\"btn mb-2 green-color\">green-color</button>
\t\t\t\t<button class=\"btn mb-2 teal-color\">teal-color</button>
\t\t\t\t<button class=\"btn mb-2 cyan-color\">cyan-color</button>
\t\t\t\t<button class=\"btn mb-2 white-color\">white-color</button>
\t\t\t\t<button class=\"btn mb-2 gray-light-color\">gray-light-color</button>
\t\t\t\t<button class=\"btn mb-2 gray-dark-color text-white\">gray-dark-color</button>
\t\t\t\t<hr>
\t\t\t\t<button class=\"btn mb-2 primary-color text-secondary\">primary-color</button>
\t\t\t\t<button class=\"btn mb-2 secondary-color text-primary\">secondary-color</button>
\t\t\t\t<button class=\"btn mb-2 success-color text-white\">success-color</button>
\t\t\t\t<button class=\"btn mb-2 info-color\">info-color</button>
\t\t\t\t<button class=\"btn mb-2 warning-color\">warning-color</button>
\t\t\t\t<button class=\"btn mb-2 danger-color\">danger-color</button>
\t\t\t\t<button class=\"btn mb-2 light-color\">light-color</button>
\t\t\t\t<button class=\"btn mb-2 dark-color text-white\">dark-color</button>
\t\t  </div>
\t\t</section>", "/home/vagrant/laravel/october/gmbr/public/themes/webbook-bootstrap-sass-book/partials/home/bootstrap-colours.htm", "");
    }
}
