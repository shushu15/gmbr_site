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

/* /home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/pages/about.htm */
class __TwigTemplate_f3bebeb2b02a34f311c320556db5d2503e1d51936da0b922d94f30178cad51fa extends \Twig\Template
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
        echo "<!-- Section About Start -->
<section class=\"section about-2 position-relative\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t<div class=\"about-item pr-3 mb-5 mb-lg-0\">
\t\t\t\t\t<span class=\"h6 text-color\">What we are</span>
\t\t\t\t\t<h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
\t\t\t\t\t<p class=\"mb-5\">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>

\t\t\t\t\t<a href=\"#\" class=\"btn btn-main btn-round-full\">Get started</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t<div class=\"about-item-img\">
\t\t\t\t\t<img src=\"https://placehold.it/540x350\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About End -->
<!-- Section About Info Start -->
<section class=\"about-info section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md \">01.</span>Our Mission</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md\">02.</span>Vission</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md\">03.</span>Our Approach</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About Info End -->
<!-- Section Count About Start -->
<!-- section Counter Start -->
<section class=\"section counter bg-counter\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-check color-one text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">1730</span> +</h3>
\t\t\t\t\t<p class=\"text-white-50\">Project Done</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-flag color-one text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">125 </span>M </h3>
\t\t\t\t\t<p class=\"text-white-50\">User Worldwide</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-layers color-one text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">39</span></h3>
\t\t\t\t\t<p class=\"text-white-50\">Availble Country</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center\">
\t\t\t\t\t<i class=\"ti-medall color-one  text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">14</span></h3>
\t\t\t\t\t<p class=\"text-white-50\">Award Winner </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About Counter End -->
<!--  Section Services Start -->
<section class=\"section team\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Our Team</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title\">Expert Team member to get best service</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Justin hammer</h4>
\t\t\t\t\t\t<p>Digital Marketer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Jason roy</h4>
\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 \">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Henry oswald</h4>
\t\t\t\t\t\t<p>Developer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">David Williams</h4>
\t\t\t\t\t\t<p>Senior Marketer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Peter Odin</h4>
\t\t\t\t\t\t<p>App Developer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 mb-lg-0 \">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">David Spensor</h4>
\t\t\t\t\t\t<p>Project Manager</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--  Section Services End -->
<!-- Section Testimonial Start -->
<section class=\"section testimonial bg-gray\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Clients testimonial</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title\">Check what's our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"testimonial-wrap\">
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Thomas Johnson</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Mickel hussy</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">James Watson</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Mickel hussy</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Testimonial End -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Section About Start -->
<section class=\"section about-2 position-relative\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t<div class=\"about-item pr-3 mb-5 mb-lg-0\">
\t\t\t\t\t<span class=\"h6 text-color\">What we are</span>
\t\t\t\t\t<h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
\t\t\t\t\t<p class=\"mb-5\">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>

\t\t\t\t\t<a href=\"#\" class=\"btn btn-main btn-round-full\">Get started</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t<div class=\"about-item-img\">
\t\t\t\t\t<img src=\"https://placehold.it/540x350\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About End -->
<!-- Section About Info Start -->
<section class=\"about-info section pt-0\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md \">01.</span>Our Mission</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md\">02.</span>Vission</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"about-info-item mb-4 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-3\"><span class=\"text-color mr-2 text-md\">03.</span>Our Approach</h3>
\t\t\t\t\t<p>llum similique ducimus accusamus laudantium praesentium, impedit quaerat, itaque maxime sunt deleniti voluptas distinctio .</p>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About Info End -->
<!-- Section Count About Start -->
<!-- section Counter Start -->
<section class=\"section counter bg-counter\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-check color-one text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">1730</span> +</h3>
\t\t\t\t\t<p class=\"text-white-50\">Project Done</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-flag color-one text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">125 </span>M </h3>
\t\t\t\t\t<p class=\"text-white-50\">User Worldwide</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-layers color-one text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">39</span></h3>
\t\t\t\t\t<p class=\"text-white-50\">Availble Country</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center\">
\t\t\t\t\t<i class=\"ti-medall color-one  text-md\"></i>
\t\t\t\t\t<h3 class=\"mt-2 mb-0 text-white\"><span class=\"counter-stat font-weight-bold\">14</span></h3>
\t\t\t\t\t<p class=\"text-white-50\">Award Winner </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section About Counter End -->
<!--  Section Services Start -->
<section class=\"section team\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Our Team</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title\">Expert Team member to get best service</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Justin hammer</h4>
\t\t\t\t\t\t<p>Digital Marketer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Jason roy</h4>
\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 \">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Henry oswald</h4>
\t\t\t\t\t\t<p>Developer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">David Williams</h4>
\t\t\t\t\t\t<p>Senior Marketer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">Peter Odin</h4>
\t\t\t\t\t\t<p>App Developer</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"team-item-wrap mb-5 mb-lg-0 \">
\t\t\t\t\t<div class=\"team-item position-relative\">
\t\t\t\t\t\t<img src=\"https://placehold.it/350x480\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t<div class=\"team-img-hover\">
\t\t\t\t\t\t\t<ul class=\"team-social list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"facebook\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"twitter\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"instagram\"><i class=\"fab fa-instagram\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"linkedin\"><i class=\"fab fa-linkedin-in\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team-item-content\">
\t\t\t\t\t\t<h4 class=\"mt-3 mb-0 text-capitalize\">David Spensor</h4>
\t\t\t\t\t\t<p>Project Manager</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--  Section Services End -->
<!-- Section Testimonial Start -->
<section class=\"section testimonial bg-gray\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Clients testimonial</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title\">Check what's our clients say about us</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"testimonial-wrap\">
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti facilis blanditiis.</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Thomas Johnson</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Mickel hussy</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae numquam corrupti.</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">James Watson</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"testimonial-item position-relative\">
\t\t\t\t<i class=\"ti-quote-left text-color\"></i>

\t\t\t\t<div class=\"testimonial-item-content\">
\t\t\t\t\t<p class=\"testimonial-text\">Consectetur adipisicing elit. Quam maiores perspiciatis temporibus odio reiciendis error alias debitis atque consequuntur natus iusto recusandae .</p>

\t\t\t\t\t<div class=\"testimonial-author\">
\t\t\t\t\t\t<h5 class=\"mb-0 text-capitalize\">Mickel hussy</h5>
\t\t\t\t\t\t<p>Excutive Director,themefisher</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Testimonial End -->", "/home/vagrant/laravel/october/gmbr/public/themes/gmbr-site/pages/about.htm", "");
    }
}
