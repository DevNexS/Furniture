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

/* oct_remarket/template/octemplates/module/oct_popup_cart.twig */
class __TwigTemplate_8de2c229c0ca6aa9b6c14d68d2fa8bfc59b991e0ab1885968a8ee73a96242e6b extends \Twig\Template
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
        if ((array_key_exists("isPopup", $context) && ($context["isPopup"] ?? null))) {
            // line 2
            echo "<div class=\"modal\" id=\"rm-popup-cart\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"rm-cart-modal\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered narrow\" role=\"document\">
\t    <div class=\"modal-content\">
\t        <div class=\"modal-header\">
\t            <div class=\"modal-title\" id=\"rm-cart-modal\">";
            // line 6
            echo ($context["heading_title"] ?? null);
            echo "</div>
\t            <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
\t            </button>
\t        </div>
\t        <div class=\"modal-body rm-cart\">
\t\t\t\t";
            // line 13
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 14
                echo "\t\t        <div class=\"rm-cart-text text-center\">
\t\t\t\t\t<div>";
                // line 15
                echo ($context["text_cart_items"] ?? null);
                echo "</div>
\t\t\t\t\t<a href=\"";
                // line 16
                echo ($context["cart_link"] ?? null);
                echo "\" class=\"rm-product-link\">";
                echo ($context["button_cart"] ?? null);
                echo "</a>
\t\t\t    </div>
\t\t\t\t<div class=\"rm-cart-products\">
\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "\t\t            <div class=\"rm-cart-products-item d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"rm-cart-products-item-left d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"rm-cart-products-item-img\">
\t\t\t\t\t\t\t\t<img src=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                        echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rm-cart-products-item-right d-flex flex-column\">
\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-title\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                    // line 31
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 31)) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t<span class=\"required\">***</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info\">
\t\t\t\t\t\t\t\t";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 37));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-info-option\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 38);
                            echo " <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 38);
                            echo "</span></div>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mt-auto\">
\t\t\t\t\t\t\t\t<div class=\"rm-cart-products-item-price mr-3\">
\t\t\t\t\t\t\t\t\t";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44);
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group rm-product-quantity\" role=\"group\">
\t\t\t\t\t\t\t\t\t<input name=\"product_id_q\" value=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 47);
                    echo "\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t<input name=\"product_id\" value=\"";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 48);
                    echo "\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t<input name=\"product_stock_";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 49);
                    echo "\" id=\"product_stock_";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 49);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity_product", [], "any", false, false, false, 49);
                    echo "\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" class=\"form-control\" id=\"main-quantity-val-";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50);
                    echo "\" onchange=\"update_manual('#main-quantity-val-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "', 'manual', '";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "'); return validate('#main-quantity-val-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "');\" keypress=\"update_manual('#main-quantity-val-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "', '', '";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "'); return validate('#main-quantity-val-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 50);
                    echo "');\"></input>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"rm-product-quantity-btn-plus d-flex align-items-center justify-content-center\" onclick=\"update_manual('#main-quantity-val-";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 52);
                    echo "', 'plus', '";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 52);
                    echo "'); return validate('#main-quantity-val-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 52);
                    echo "');\"><span></span></button>
\t\t\t\t\t\t\t\t\t\t<div class=\"rm-product-quantity-btn-border\"></div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"rm-product-quantity-btn-minus d-flex align-items-center justify-content-center\" onclick=\"update_manual('#main-quantity-val-";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 54);
                    echo "', 'minus', '";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 54);
                    echo "'); return validate('#main-quantity-val-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 54);
                    echo "');\"><span></span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input name=\"product_key\" value=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 57);
                    echo "\" style=\"display: none;\" hidden />
\t\t\t\t\t\t\t\t<input name=\"product_id_q\" value=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                    echo "\" style=\"display: none;\" hidden />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"rm-btn-del\" onclick=\"remove(this, 'remove'); return false;\">
\t\t\t\t\t\t\t<span class=\"rm-btn-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 67
                    echo "\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"rm-cart-text\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 68);
                    echo "</div>
\t\t\t\t\t\t<button type=\"button\" class=\"rm-btn-del\" onclick=\"voucher.remove('";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 69);
                    echo "');\">
\t\t\t\t\t\t\t<span class=\"rm-btn-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "\t\t\t\t\t";
                if (($context["error_warning"] ?? null)) {
                    // line 75
                    echo "\t\t\t\t\t<div class=\"required mt-3\">*** ";
                    echo ($context["error_warning"] ?? null);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t";
                // line 79
                if ((array_key_exists("oct_byoneclick", $context) && ($context["oct_byoneclick"] ?? null))) {
                    // line 80
                    echo "\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
                    // line 81
                    echo ($context["oct_byoneclick"] ?? null);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"d-flex flex-column flex-md-row justify-content-md-between\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"rm-btn secondary text-center mb-3 mb-md-0\" data-dismiss=\"modal\"><span class=\"rm-btn-text\">";
                // line 86
                echo ($context["button_shopping"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t<a href=\"";
                // line 87
                echo ($context["checkout_link"] ?? null);
                echo "\" class=\"rm-btn dark d-block text-center\">";
                echo ($context["button_checkout"] ?? null);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 92
                echo "\t\t        <div class=\"empty-popup-cart text-center\">
\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/empty-cart.svg\">
\t\t\t\t\t<div class=\"empty-popup-cart-text\">";
                // line 94
                echo ($context["text_empty"] ?? null);
                echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t</div>
\t    </div>
\t</div>
<script>
//popup_cart_one_click
function showInput() {
\t\$('#popup_cart_one_click').fadeOut(1);
\t\$('.hidden-input-group').fadeIn(300).css('height', '44px');
}

// validate input value
function validate(input) {
\t\$(input).val(\$(input).val().replace(/[^\\d,]/g, ''));
}

// remove product from cart
function remove(target, status) {
\tproduct_key  = \$(target).parent().find('input[name=\"product_key\"]').val(),
\turl = null;
\tif (status == 'remove') {
\t\turl = 'index.php?route=octemplates/module/oct_popup_cart&isPopup=1&remove=' + product_key;
\t}
\tmasked('body', true);
\t\$.ajax({
\t\turl: url,
\t\ttype: 'get',
\t\tdataType: 'html',
\t\tcache: false,
\t\tsuccess: function(data) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=octemplates/module/oct_popup_cart/status_cart',
\t\t\t\ttype: 'get',
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(\".modal-backdrop\").remove();
\t\t\t\t\tmasked('body', false);
\t\t\t\t\t\$(\".modal-holder\").html(data);
\t\t\t\t\t\$('#rm-popup-cart').modal('show');
\t\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('#oct-cart-quantity, .rm-header-cart-quantity, #mobile_cart_index, .oct-fixed-bar-quantity-cart').html(json['total_products']);
\t\t\t\t\t\t\$('.rm-header-cart-text').html(json['total_amount']);
\t\t\t\t\t}, 100);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
}

// update quantity function
function update_manual(target, change, productID) {
\tlet input_val = \$(target).val(),
\tquantity  = parseInt(input_val),
\tchangeQuantity;

\t// check quantity
\tif (quantity <= 0) {
\t\tquantity = \$(target).val(1);
\t} else if (change === 'minus') {
\t\tchangeQuantity = quantity-1;
\t} else if (change === 'plus') {
\t\tchangeQuantity = quantity+1;
\t} else {
\t\tchangeQuantity = quantity;
\t}
\tchangeQuantity = (changeQuantity > 0) ? changeQuantity : 1;

\t// show loading mask
\tmasked('body', true);

\t// check minimum
\tlet minimum = '";
            // line 169
            echo ($context["product_minimum"] ?? null);
            echo "';
\tif(changeQuantity < minimum) changeQuantity = minimum;

\t// check stock order
\tlet productStock = \$('#product_stock_' + productID).val();
\tlet productStockCheckout = '";
            // line 174
            echo ($context["product_stock_checkout"] ?? null);
            echo "';

\tif (productStockCheckout == false) {
\t\tif (changeQuantity > productStock) {
\t\t\trmNotify('danger', '";
            // line 178
            echo ($context["error_stock"] ?? null);
            echo "');
\t\t\tmasked('body', false);
\t\t\tif(productStock != 0) quantity = \$(target).val(productStock);
\t\t\tchangeQuantity = productStock;
\t\t}
\t}

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/module/oct_popup_cart&isPopup=1&update=' + productID + '&quantity=' + changeQuantity,
\t\ttype: 'get',
\t\tdataType: 'html',
\t\tcache: false,
\t\tsuccess: function(data) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=octemplates/module/oct_popup_cart/status_cart',
\t\t\ttype: 'get',
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.modal-backdrop').remove();
\t\t\t\t\$('.modal-holder').html(data);
\t\t\t\t\$('#rm-popup-cart').modal('show');
\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('#oct-cart-quantity, .rm-header-cart-quantity, #mobile_cart_index, .oct-fixed-bar-quantity-cart').html(json['total_products']);
\t\t\t\t\t\$('.rm-header-cart-text').html(json['total_amount']);
\t\t\t\t\tmasked('body', false);
\t\t\t\t}, 100);
\t\t\t}
\t\t});
\t\t}
\t});
}
</script>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/module/oct_popup_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 178,  376 => 174,  368 => 169,  294 => 97,  288 => 94,  284 => 92,  274 => 87,  270 => 86,  266 => 84,  260 => 81,  257 => 80,  255 => 79,  251 => 77,  245 => 75,  242 => 74,  231 => 69,  227 => 68,  224 => 67,  219 => 66,  205 => 58,  201 => 57,  191 => 54,  182 => 52,  163 => 50,  155 => 49,  151 => 48,  147 => 47,  141 => 44,  137 => 42,  133 => 40,  122 => 38,  118 => 37,  115 => 36,  113 => 35,  110 => 34,  106 => 32,  104 => 31,  98 => 30,  93 => 27,  85 => 24,  82 => 23,  80 => 22,  76 => 20,  72 => 19,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/module/oct_popup_cart.twig", "");
    }
}
