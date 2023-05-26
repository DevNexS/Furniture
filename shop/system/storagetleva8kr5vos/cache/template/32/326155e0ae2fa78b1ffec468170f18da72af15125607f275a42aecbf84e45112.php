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

/* oct_remarket/template/checkout/cart.twig */
class __TwigTemplate_116f8c0fd25c7d287ab183d64bc0f94b071c93e56095da435e6c263cc37807a3 extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"container flex-container\">
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
        if (($context["attention"] ?? null)) {
            // line 11
            echo "\t<script>
\trmNotify('warning', '";
            // line 12
            echo ($context["attention"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 15
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 16
            echo "\t<script>
\trmNotify('success', '";
            // line 17
            echo ($context["success"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 20
        echo "\t<div id=\"content\" class=\"row no-gutters\">
\t\t";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "\t    ";
            $context["class"] = "col-lg-6";
            // line 24
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "\t    ";
            $context["class"] = "col-lg-9";
            // line 26
            echo "\t    ";
        } else {
            // line 27
            echo "\t    ";
            $context["class"] = "col-lg-12";
            // line 28
            echo "\t    ";
        }
        // line 29
        echo "\t    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"rm-content rm-cart h-100\">
\t\t    \t<div class=\"rm-content-title rm-cart-title\">";
        // line 31
        echo ($context["heading_title"] ?? null);
        if (($context["weight"] ?? null)) {
            echo " &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ") ";
        }
        echo "</div>
\t\t\t\t<form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"rm-cart-products\">
\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "\t\t\t\t\t    <div class=\"rm-cart-products-item d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center\">
\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-left flex-column flex-lg-row d-flex align-items-center\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"rm-btn-del\" onclick=\"cart.remove('";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 37);
            echo "');\"><span class=\"rm-btn-icon\"></span></button>
\t\t\t\t\t\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
                echo "\" class=\"rm-cart-products-item-img\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                echo "\" /></a>
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info\">
\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-title\"><a href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
            echo "</a>";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 42)) {
                echo "<span class=\"required\"> ***</span>";
            }
            echo "</div>
\t\t\t\t\t\t\t\t\t";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 43)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-option\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45);
                    echo ": <span>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 45);
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-option\">";
            echo ($context["column_model"] ?? null);
            echo ": <span>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 48);
            echo "</span></div>
\t\t\t\t\t\t\t\t\t";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 49)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-option\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 50);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 52)) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-option\">";
                echo ($context["text_recurring_item"] ?? null);
                echo " <span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 53);
                echo "</span></div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-right flex-row d-flex align-items-start align-items-lg-center\">
\t\t\t\t\t\t\t\t<div class=\"btn-group rm-product-quantity\" role=\"group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-quantity-";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 59);
            echo "\" class=\"form-control\"  name=\"quantity[";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 59);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"rm-product-quantity-btn-plus d-flex align-items-center justify-content-center\" onclick=\"\$('#input-quantity-";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 61);
            echo "').val(~~\$('#input-quantity-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 61);
            echo "').val()+1);\"><span></span></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"rm-product-quantity-btn-border\"></div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"rm-product-quantity-btn-minus d-flex align-items-center justify-content-center\" onclick=\"\$('#input-quantity-";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
            echo "').val(~~\$('#input-quantity-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 63);
            echo "').val()-1);\"><span></span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"rm-btn secondary rm-cart-products-item-update\" title=\"";
            // line 66
            echo ($context["button_update"] ?? null);
            echo "\"><i class=\"fas fa-sync-alt\"></i></button>
\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-price text-lg-right\">
\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-price-all\">";
            // line 68
            echo ($context["column_total"] ?? null);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 68);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-price-one\">";
            // line 69
            echo ($context["column_price"] ?? null);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 76
            echo "\t\t\t\t\t<div class=\"rm-cart-block d-flex align-items-center\">
\t\t\t\t\t\t<button type=\"button\" class=\"rm-btn-del mr-2\" onclick=\"voucher.remove('";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 77);
            echo "');\"><span class=\"rm-btn-icon\"></span></button>\t
\t\t\t\t\t\t<div class=\"rm-cart-text\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 78);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t";
        if (($context["error_warning"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t<div class=\"required\">";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t";
        if (($context["modules"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t<div class=\"rm-cart-block\">
\t\t\t\t\t\t<div class=\"rm-content-title rm-cart-title-bold\">";
            // line 86
            echo ($context["text_next"] ?? null);
            echo "</div>
\t\t\t\t\t\t<div class=\"rm-cart-text\">";
            // line 87
            echo ($context["text_next_choice"] ?? null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 90
                echo "\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t\t<script>
\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\$('.rm-cart-block-title').on('click', function() {
\t\t\t\t\t\t\t\t\$(this).toggleClass('clicked');
\t\t\t\t\t\t\t\t\$(this).next().toggleClass('opened');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t</form>
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t";
        // line 103
        if ((array_key_exists("oct_byoneclick", $context) && ($context["oct_byoneclick"] ?? null))) {
            // line 104
            echo "\t\t\t\t\t<div class=\"col-md-6 buy-one-click-box\">
\t\t\t\t\t\t";
            // line 105
            echo ($context["oct_byoneclick"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t<div class=\"col-md-12 text-md-right my-4 my-md-0\">
\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 110
            echo "\t\t\t\t\t\t<div class=\"rm-cart-block-total-price\">
\t\t\t\t\t\t\t";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 111);
            echo ": <span>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 111);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t    <div class=\"rm-cart-buttons d-flex flex-column flex-md-row align-items-center justify-content-between mt-0 mt-md-4\">
\t\t\t        <a href=\"";
        // line 117
        echo ($context["checkout"] ?? null);
        echo "\" class=\"rm-btn dark\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t    </div>
\t\t    </div>
\t    </div>
\t    ";
        // line 121
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 123
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 125
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 125,  394 => 123,  389 => 121,  380 => 117,  375 => 114,  364 => 111,  361 => 110,  357 => 109,  354 => 108,  348 => 105,  345 => 104,  343 => 103,  339 => 101,  328 => 92,  319 => 90,  315 => 89,  310 => 87,  306 => 86,  303 => 85,  300 => 84,  294 => 82,  291 => 81,  282 => 78,  278 => 77,  275 => 76,  271 => 75,  268 => 74,  255 => 69,  249 => 68,  244 => 66,  236 => 63,  229 => 61,  220 => 59,  214 => 55,  206 => 53,  203 => 52,  197 => 50,  195 => 49,  188 => 48,  185 => 47,  174 => 45,  169 => 44,  167 => 43,  157 => 42,  154 => 41,  142 => 39,  140 => 38,  136 => 37,  132 => 35,  128 => 34,  123 => 32,  114 => 31,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  81 => 20,  75 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/checkout/cart.twig", "");
    }
}
