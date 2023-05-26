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

/* oct_remarket/template/account/wishlist.twig */
class __TwigTemplate_5da20d5586ea68f20a9371ff2e9cdab1b8670ded1fa32da7a5ce8e6dff76710b extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-wishlist\" class=\"container account-container\">
\t";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 class=\"rm-page-title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"content-top-box\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "</div>
\t";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "\t<script>
\trmNotify('success', '";
            // line 12
            echo ($context["success"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 15
        echo "\t<div id=\"content\" class=\"row\">
\t\t";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "\t    ";
            $context["class"] = "col-lg-6";
            // line 19
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "\t    ";
            $context["class"] = "col-lg-9";
            // line 21
            echo "\t    ";
        } else {
            // line 22
            echo "\t    ";
            $context["class"] = "col-lg-12";
            // line 23
            echo "\t    ";
        }
        // line 24
        echo "\t    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"rm-content rm-account-wishlist h-100\">
\t\t      ";
        // line 26
        if (($context["products"] ?? null)) {
            // line 27
            echo "\t\t      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 28
                echo "\t\t\t\t<div class=\"rm-account-wishlist-item d-flex justify-content-between align-items-start\">
\t\t\t\t\t<div class=\"rm-account-wishlist-item-left d-flex align-items-center\">
\t\t\t\t\t\t";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "\t\t\t\t\t\t<div class=\"rm-account-wishlist-item-img d-flex align-items-center mr-sm-4\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 32);
                    echo "\" class=\"rm-btn-del mr-sm-4\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\"><span class=\"rm-btn-icon\"></span></a>
\t\t\t\t\t\t\t<a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
                    echo "\"  alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    echo "\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t<div class=\"rm-account-wishlist-item-info text-center text-sm-left\">
\t\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
                echo "\" class=\"rm-content-title my-4 my-sm-0 d-inline-block\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"rm-account-text small\">";
                // line 38
                echo ($context["column_model"] ?? null);
                echo ": <span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 38);
                echo "</span></div>
\t\t\t\t\t\t\t<div class=\"rm-account-text small\">";
                // line 39
                echo ($context["column_stock"] ?? null);
                echo ": <span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 39);
                echo "</span></div>
\t\t\t\t\t\t\t";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "\t\t\t\t\t\t\t<div class=\"rm-account-text rm-wishlist-price mt-4 mt-sm-0 d-flex\">
\t\t\t\t\t\t\t\t<div>";
                    // line 42
                    echo ($context["column_price"] ?? null);
                    echo ":</div>
\t\t\t\t\t\t\t\t<div class=\"rm-module-price\">
\t\t\t\t\t\t\t\t\t";
                    // line 44
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"rm-module-price-new mx-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"rm-module-price-new mx-2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47);
                        echo "</span><span class=\"rm-module-price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" aria-label=\"To cart\" onclick=\"cart.add('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 54);
                echo "');\" class=\"rm-btn dark rm-cart-btn d-flex align-items-center\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span class=\"rm-cart-btn-icon\"></span><span class=\"rm-btn-text\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t</div>
\t\t      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t      ";
        } else {
            // line 58
            echo "\t\t      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t      ";
        }
        // line 60
        echo "\t\t      <div class=\"buttons mt-4\">
\t\t      \t<a href=\"";
        // line 61
        echo ($context["continue"] ?? null);
        echo "\" class=\"rm-btn dark\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t      </div>
\t\t    </div>
\t    </div>
\t    ";
        // line 65
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 67
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 69,  231 => 67,  226 => 65,  217 => 61,  214 => 60,  208 => 58,  205 => 57,  192 => 54,  188 => 52,  183 => 49,  175 => 47,  169 => 45,  167 => 44,  162 => 42,  159 => 41,  157 => 40,  151 => 39,  145 => 38,  139 => 37,  136 => 36,  124 => 33,  118 => 32,  115 => 31,  113 => 30,  109 => 28,  104 => 27,  102 => 26,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/wishlist.twig", "");
    }
}
