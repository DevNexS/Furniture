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

/* oct_remarket/template/product/review.twig */
class __TwigTemplate_3fcf6bf919d78afe4b9870c1d16ad25360a037521f981e192c4023954e37f279 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "\t<div class=\"rm-store-reviews-item\">
\t\t<div class=\"row align-items-start\">
\t\t\t<div class=\"col-md-3 rm-store-reviews-item-info text-center py-md-4\">
\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--user-icon\" alt=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 6);
                echo "\" width=\"50\" height=\"50\" />
\t\t\t\t<div class=\"rm-store-reviews-item-info-name\">";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 7);
                echo "</div>
\t\t\t\t<div class=\"rm-store-reviews-item-info-date\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 8);
                echo "</div>
\t\t\t\t<div class=\"rm-store-reviews-item-info-rating\">
\t\t\t\t\t<span class=\"rm-store-reviews-item-info-rating-title\">";
                // line 10
                echo ($context["text_oct_review"] ?? null);
                echo "</span>
\t\t\t\t\t<div class=\"rm-module-rating-stars d-flex align-items-center justify-content-center\">
\t\t\t\t\t";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 13
                    echo "\t\t\t\t      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 13) < $context["i"])) {
                        // line 14
                        echo "\t\t\t\t      <span class=\"rm-module-rating-star\"></span>
\t\t\t\t      ";
                    } else {
                        // line 16
                        echo "\t\t\t\t      <span class=\"rm-module-rating-star rm-module-rating-star-is\"></span>
\t\t\t\t      ";
                    }
                    // line 18
                    echo "\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9 py-lg-4\">
\t\t\t\t<div class=\"rm-store-reviews-item-text\">
\t\t\t\t\t<div>";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 24);
                echo "</div>
\t\t\t\t\t";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["review"], "reply", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t\t\t<div class=\"rm-store-reviews-item-text-admin mt-4\">
\t\t\t\t\t\t<div class=\"rm-store-reviews-item-text-admin-title\">";
                    // line 27
                    echo ($context["oct_product_answer_admin"] ?? null);
                    echo "</div>
\t\t\t\t\t\t<p>";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "reply", [], "any", false, false, false, 28);
                    echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t";
            echo ($context["pagination"] ?? null);
            echo "
";
        } else {
            // line 38
            echo "\t<div class=\"p-md-4\">
\t\t<div class=\"my-3 my-md-0 mb-md-3 text-center text-sm-left\"><b>";
            // line 39
            echo ($context["oct_text_no_reviews"] ?? null);
            echo "</b></div>
\t\t<img src=\"catalog/view/theme/oct_remarket/img/reviews-empty.svg\" alt=\"\" class=\"img-fluid d-md-none my-4\">
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  130 => 38,  124 => 36,  114 => 31,  108 => 28,  104 => 27,  101 => 26,  99 => 25,  95 => 24,  88 => 19,  82 => 18,  78 => 16,  74 => 14,  71 => 13,  67 => 12,  62 => 10,  57 => 8,  53 => 7,  49 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/product/review.twig", "");
    }
}
