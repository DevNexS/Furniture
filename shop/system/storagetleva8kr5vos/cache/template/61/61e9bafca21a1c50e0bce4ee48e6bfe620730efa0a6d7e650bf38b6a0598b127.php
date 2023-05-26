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

/* oct_remarket/template/extension/module/carousel.twig */
class __TwigTemplate_98795f386d6f994ad16c5b8808e756c925f30d1c99fdc388500aafd2449f38a3 extends \Twig\Template
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
        if (($context["banners"] ?? null)) {
            // line 2
            echo "<div class=\"rm-carousel row-padding-top\">
\t";
            // line 3
            if ( !twig_test_empty(($context["heading_title"] ?? null))) {
                // line 4
                echo "\t<div class=\"row\">
        <div class=\"col-12 rm-module-header\">
\t\t\t<span>";
                // line 6
                echo ($context["heading_title"] ?? null);
                echo "</span>
\t\t</div>
\t</div>
\t";
            }
            // line 10
            echo "\t<div id=\"rm-carousel-";
            echo ($context["module"] ?? null);
            echo "\">
\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 12
                echo "\t  \t<div class=\"rm-carousel-item\">
\t\t\t<div class=\"rm-carousel-item-wrap d-flex flex-column align-items-center justify-content-between h-100\">
\t\t      \t";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t      \t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 15);
                    echo "\" class=\"text-center\">
\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 17);
                echo "\" class=\"img-fluid\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 17);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 17);
                echo "\" />
\t\t\t\t\t<span>";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 18);
                echo "</span>
\t\t\t\t";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t\t\t\t</a>
\t\t    \t";
                }
                // line 22
                echo "\t\t\t</div>
\t    </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t</div>
</div>
<script>
\$( document ).ready(function() {
\t\$('#rm-carousel-";
            // line 29
            echo ($context["module"] ?? null);
            echo "').slick({
\t\tinfinite: false,
\t\tslidesToShow: 6,
\t\tslidesToScroll: 1,
\t    autoplay: true,
\t\tdots: false,
\t\tarrows: true,
\t\tprevArrow:\"<button type='button' class='slick-prev pull-left'>&lt;</button>\",
\t\tnextArrow:\"<button type='button' class='slick-next pull-right'>&gt;</button>\",
\t\tresponsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  105 => 25,  97 => 22,  93 => 20,  91 => 19,  87 => 18,  76 => 17,  70 => 15,  68 => 14,  64 => 12,  60 => 11,  55 => 10,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/extension/module/carousel.twig", "");
    }
}
