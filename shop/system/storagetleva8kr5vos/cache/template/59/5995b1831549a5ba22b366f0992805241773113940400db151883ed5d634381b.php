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

/* oct_remarket/template/checkout/oct_fastorder/cart.twig */
class __TwigTemplate_f75d7d99c907c7cb92855e0b8935b2538e71e8961983c86608134f97137021d7 extends \Twig\Template
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
        echo "<div id=\"cart-table\">
\t";
        // line 2
        if (($context["attention"] ?? null)) {
            // line 3
            echo "\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t</div>
\t";
        }
        // line 7
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 8
            echo "\t<div class=\"alert alert-danger mt-4\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t</div>
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('#button-go').attr('disabled', 'disabled');
\t\t\t\$('#button-go').addClass('disabled');
\t\t});
\t</script>
\t";
        } else {
            // line 18
            echo "\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('#button-go').removeAttr('disabled');
\t\t\t\$('#button-go').removeClass('disabled');
\t\t\t\$('.oct-checkout .alert-danger').addClass('d-none');
\t\t});
\t</script>
\t";
        }
        // line 26
        echo "
\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "\t<div class=\"row mt-4\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"oct-checkout-block oct-checkout-cart d-flex flex-column flex-md-row justify-content-between p-3\">
\t\t\t\t<div class=\"oct-checkout-cart-product-info d-flex align-items-md-center\">
\t\t\t\t\t";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32)) {
                // line 33
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 33);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                echo "\"
\t\t\t\t\t\t\ttitle=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "\" width=\"60\" height=\"60\" /></a>
\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 37);
            echo "\" class=\"blue-link d-block mb-2\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37);
            echo "</a>
\t\t\t\t\t\t";
            // line 38
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t\t\t\t<span class=\"required\">***</span>
\t\t\t\t\t\t";
            }
            // line 41
            echo "
\t\t\t\t\t\t";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["option"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 44
                    echo "\t\t\t\t\t\t<div class=\"oct-checkout-cart-product-option\">
\t\t\t\t\t\t\t";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45);
                    echo ": <span class=\"light-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 45);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 46
                    if (((((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 46) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 46)) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "quantity_status", [], "any", false, false, false, 46)) && twig_get_attribute($this->env, $this->source, $context["option"], "oct_quantity_value", [], "any", false, false, false, 46)) && twig_get_attribute($this->env, $this->source, $context["option"], "oct_quantity_value", [], "any", false, false, false, 46))) {
                        // line 47
                        echo "\t\t\t\t\t\t\tx";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "oct_quantity_value", [], "any", false, false, false, 47);
                        echo "
\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t\t\t";
                    if (((((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 49) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_sku", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, $context["option"], "sku", [], "any", false, false, false, 49)) || (((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 49) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_model", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, $context["option"], "model", [], "any", false, false, false, 49)))) {
                        echo "(";
                        if ((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_sku", [], "any", false, false, false, 49) && twig_get_attribute($this->env, $this->source, $context["option"], "sku", [], "any", false, false, false, 49))) {
                            echo ($context["text_option_sku"] ?? null);
                            echo ":
\t\t\t\t\t\t\t";
                            // line 50
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "sku", [], "any", false, false, false, 50);
                            echo ",
\t\t\t\t\t\t\t";
                        }
                        // line 51
                        if ((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_model", [], "any", false, false, false, 51) && twig_get_attribute($this->env, $this->source, $context["option"], "model", [], "any", false, false, false, 51))) {
                            echo ($context["text_option_model"] ?? null);
                            echo ":
\t\t\t\t\t\t\t";
                            // line 52
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "model", [], "any", false, false, false, 52);
                        }
                        echo ")
\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 58)) {
                // line 59
                echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t<small>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 60);
                echo "</small>
\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 62)) {
                // line 63
                echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t<small>";
                // line 64
                echo ($context["text_recurring_item"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 64);
                echo "</small>
\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"oct-checkout-cart-actions\">
\t\t\t\t\t<div class=\"oct-checkout-cart-buttons d-flex align-items-stretch justify-content-end\">
\t\t\t\t\t\t<div class=\"oct-checkout-cart-quantity d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<input name=\"product_id_q\" value=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
            echo "\" style=\"display: none;\"
\t\t\t\t\t\t\t\ttype=\"hidden\" />
\t\t\t\t\t\t\t<input name=\"product_id\" value=\"";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 73);
            echo "\" style=\"display: none;\" type=\"hidden\" />
\t\t\t\t\t\t\t<input id=\"quantity-";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 74);
            echo "\" type=\"text\" name=\"quantity\"
\t\t\t\t\t\t\t\tvalue=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\"
\t\t\t\t\t\t\t\tonchange=\"update_manual(this, '";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 76);
            echo "');\" aria-label=\"Quantity\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" aria-label=\"Delete\"
\t\t\t\t\t\t\tclass=\"oct-checkout-cart-delete-btn d-flex align-items-center justify-content-center\"
\t\t\t\t\t\t\tonclick=\"update(this, 'remove');\">
\t\t\t\t\t\t\t<span class=\"oct-checkout-cart-delete-btn-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"oct-checkout-cart-total\">";
            // line 84
            echo ($context["column_total"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 84);
            echo "</div>
\t\t\t\t\t<div class=\"oct-checkout-cart-price\">";
            // line 85
            echo ($context["column_price"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 85);
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "</div>
<div class=\"oct-bottom-total-cart d-none\">
\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 94
            echo "\t<div class=\"oct-checkout-actions-total-item d-flex justify-content-between\">
\t\t<span class=\"light-text\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 95);
            echo "</span>
\t\t<span>";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 96);
            echo "</span>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t";
        if (($context["weight"] ?? null)) {
            // line 100
            echo "\t<div class=\"oct-checkout-actions-total-item d-flex justify-content-between\">
\t\t<span class=\"light-text\">";
            // line 101
            echo ($context["text_weight"] ?? null);
            echo "</span>
\t\t<span>";
            // line 102
            echo ($context["weight"] ?? null);
            echo "</span>
\t</div>
\t";
        }
        // line 105
        echo "</div>
<script>
\tfunction updateTotal() {
\t\tlet oldTotal = document.querySelector('.oct-checkout-actions-total'),
\t\t\tcontent = document.querySelector('.oct-bottom-total-cart');

\t\toldTotal.innerHTML = content.innerHTML;
\t}
\tupdateTotal();
</script>

";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 117
            echo "
<div class=\"row mt-4\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"oct-checkout-block oct-checkout-cart d-flex flex-column flex-md-row align-items-center p-3\">
\t\t\t<p>";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 121);
            echo "</p>
\t\t\t<input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" hidden class=\"form-control\" />
\t\t\t<div class=\"ml-auto d-flex flex-column align-items-end\">
\t\t\t\t<button type=\"button\"
\t\t\t\t\tclass=\"oct-checkout-cart-delete-btn d-flex align-items-center justify-content-center m-0\"
\t\t\t\t\tonclick=\"voucher_remove('";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 126);
            echo "');\"><span
\t\t\t\t\t\tclass=\"oct-checkout-cart-delete-btn-icon\"></span></button>
\t\t\t\t<div class=\"oct-checkout-cart-total\">";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 128);
            echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/checkout/oct_fastorder/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 128,  332 => 126,  324 => 121,  318 => 117,  314 => 116,  301 => 105,  295 => 102,  291 => 101,  288 => 100,  285 => 99,  276 => 96,  272 => 95,  269 => 94,  265 => 93,  261 => 91,  247 => 85,  241 => 84,  230 => 76,  226 => 75,  222 => 74,  218 => 73,  213 => 71,  206 => 66,  200 => 64,  197 => 63,  194 => 62,  189 => 60,  186 => 59,  183 => 58,  180 => 57,  172 => 54,  166 => 52,  161 => 51,  156 => 50,  148 => 49,  142 => 47,  140 => 46,  134 => 45,  131 => 44,  126 => 43,  124 => 42,  121 => 41,  117 => 39,  115 => 38,  109 => 37,  106 => 36,  101 => 34,  92 => 33,  90 => 32,  84 => 28,  80 => 27,  77 => 26,  67 => 18,  53 => 8,  50 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/checkout/oct_fastorder/cart.twig", "");
    }
}
