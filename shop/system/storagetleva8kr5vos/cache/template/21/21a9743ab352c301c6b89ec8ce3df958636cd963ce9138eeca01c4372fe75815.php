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

/* oct_remarket/template/extension/module/slideshow.twig */
class __TwigTemplate_4ffb9a30788ea4b55395bdb7a6c98b7dc0361a7abed41c048572d160a2afca99 extends \Twig\Template
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
            echo "<div class=\"row row-padding-top\">
\t<div class=\"col-lg-12\">
\t\t  <div id=\"slideshow";
            // line 4
            echo ($context["module"] ?? null);
            echo "\" class=\"default-slideshow\">
\t\t   ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                echo "\t\t      <div class=\"item text-center\">
\t\t      ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "\t\t      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                    echo "\" class=\"img-fluid\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 8);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 8);
                    echo "\" /></a>
\t\t      ";
                } else {
                    // line 10
                    echo "\t\t      <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                    echo "\" class=\"img-fluid\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "width", [], "any", false, false, false, 10);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "height", [], "any", false, false, false, 10);
                    echo "\" />
\t\t      ";
                }
                // line 12
                echo "\t\t      </div>
\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t  </div>
\t</div>
</div>
<script>
\$('#slideshow";
            // line 18
            echo ($context["module"] ?? null);
            echo "').slick({
\tautoplay: true,
\tdots: true,
\tarrows: false,
\tinfinite: true,
\tautoplaySpeed: 5000,
\tslidesToShow: 1
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  89 => 14,  82 => 12,  70 => 10,  56 => 8,  54 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/extension/module/slideshow.twig", "");
    }
}
