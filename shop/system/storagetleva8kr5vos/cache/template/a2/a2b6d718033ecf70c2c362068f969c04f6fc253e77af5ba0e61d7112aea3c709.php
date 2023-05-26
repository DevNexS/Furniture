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

/* oct_remarket/template/product/special.twig */
class __TwigTemplate_261b849a174170c102dd263d290327653760e118a61fb89ac3fa41792739faa7 extends \Twig\Template
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
<div id=\"product-special\" class=\"container\">
    ";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
    <div class=\"content-top-box\">";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "</div>
    <main>
        <div class=\"row\">
            <div class=\"col-12 rm-page-title\">
                <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
        </div>
        <div class=\"row no-gutters\">
        ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "            ";
            $context["class"] = "col-lg-6 is-cols";
            // line 15
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "            ";
            $context["class"] = "col-lg-9";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            $context["class"] = "col-lg-12 no-col";
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"rm-content rm-category h-100\">
                ";
        // line 22
        if (($context["products"] ?? null)) {
            // line 23
            echo "                    <div class=\"rm-category-buttons d-flex d-lg-none justify-content-between sticky-top\">
                        <button type=\"button\" class=\"rm-btn rm-category-buttons-catalog\" onclick=\"rmSidebar('";
            // line 24
            echo ($context["oct_menu"] ?? null);
            echo "', 'menu', 1);\">
                            <span class=\"rm-btn-icon\">
                                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--category-catalog-icon\" alt=\"\" width=\"15\" height=\"14\">
                            </span>
                            <span class=\"rm-btn-text\">";
            // line 28
            echo ($context["oct_catalog"] ?? null);
            echo "</span>
                        </button>
                    </div>
                    ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_sort_oder", [], "any", true, true, false, 31) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 31) || (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 31) == "on")))) {
                // line 32
                echo "                        <div class=\"rm-category-sort d-flex flex-column flex-md-row justify-content-between\">
                            <div class=\"rm-category-sort-limit d-flex align-items-center justify-content-between d-lg-block w-100 w-lg-auto\">
                                <select id=\"input-sort\" class=\"rm-category-sort-select w-100 w-md-auto\" onchange=\"location = this.value;\">
                                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 36
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 36) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 37
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 37);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 37);
                        echo "</option>
                                        ";
                    } else {
                        // line 39
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 39);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 39);
                        echo "</option>
                                        ";
                    }
                    // line 41
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                </select>
                                <select id=\"input-limit\" class=\"rm-category-limit-select d-none d-sm-inline-block\" onchange=\"location = this.value;\">
                                    ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 45
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 45) == ($context["limit"] ?? null))) {
                        // line 46
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 46);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 46);
                        echo "</option>
                                        ";
                    } else {
                        // line 48
                        echo "                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 48);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 48);
                        echo "</option>
                                        ";
                    }
                    // line 50
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                                </select>
                            </div>
                            <div class=\"rm-category-appearance btn-group d-none d-lg-flex\">
                                <button type=\"button\" aria-label=\"List view\" id=\"list-view\" class=\"rm-category-appearance-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 54
                echo ($context["button_list"] ?? null);
                echo "\">
                                    <span></span>
                                </button>
                                <button type=\"button\" aria-label=\"Grid view\" id=\"grid-view\" class=\"rm-category-appearance-btn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 57
                echo ($context["button_grid"] ?? null);
                echo "\">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    ";
            }
            // line 63
            echo "                    <div class=\"row no-gutters rm-category-products\">
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "                            <div class=\"product-layout product-grid rm-module-col col-12 col-md-4 col-lg-4\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_type", [], "any", false, false, false, 65) == "width-100")) {
                    echo " data-width=\"width-100\"";
                }
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_type", [], "any", false, false, false, 65) == "width-50")) {
                    echo " data-width=\"width-50\"";
                }
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_more", [], "any", true, true, false, 65) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_more", [], "any", false, false, false, 65))) {
                    echo " data-pid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 65);
                    echo "\"";
                }
                echo ">
                                <div class=\"rm-module-item d-flex flex-md-column h-100";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 66)) {
                    echo " rm-no-stock";
                }
                echo "\">
                                    <div class=\"rm-module-img d-flex flex-column d-md-block\">
                                        ";
                // line 68
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "                            \t\t\t<div class=\"rm-module-stickers\">
                            \t\t\t\t";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 70));
                    foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                        // line 71
                        echo "                            \t\t\t\t\t";
                        if ( !twig_test_empty($context["oct_sticker"])) {
                            // line 72
                            echo "                            \t\t\t\t\t<div class=\"rm-module-stickers-sticker rm-module-stickers-sticker-";
                            echo $context["key"];
                            echo "\">
                            \t\t\t\t\t\t";
                            // line 73
                            echo $context["oct_sticker"];
                            echo "
                            \t\t\t\t\t</div>
                            \t\t\t\t\t";
                        }
                        // line 76
                        echo "                            \t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                            \t\t\t</div>
                            \t\t\t";
                }
                // line 79
                echo "                                        <div class=\"rm-module-buttons list-unstyled d-flex justify-content-center flex-md-column order-1\">
                                            ";
                // line 80
                if (($context["oct_popup_view_status"] ?? null)) {
                    // line 81
                    echo "                                \t\t\t<button aria-label=\"Quick view\" type=\"button\" class=\"rm-module-buttons-item popup-view d-flex align-items-center justify-content-center\" title=\"";
                    echo ($context["oct_popup_view"] ?? null);
                    echo "\" onclick=\"octPopUpView('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
                    echo "')\">
                                                <span></span>
                                            </button>
                                \t\t\t";
                }
                // line 85
                echo "                                            <button aria-label=\"Wishlist\" type=\"button\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 85);
                echo "');\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" class=\"rm-module-buttons-item wishlist d-flex align-items-center justify-content-center\">
                                                <span></span>
                                            </button>
                                            <button aria-label=\"Compare\" type=\"button\" title=\"";
                // line 88
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
                echo "');\" class=\"rm-module-buttons-item compare d-flex align-items-center justify-content-center\">
                                                <span></span>
                                            </button>
                                        </div>
                                        <a class=\"order-0\" href=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 92);
                echo "\">
                                            <img
                                                src=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 94);
                echo "\"
                                                ";
                // line 95
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    // line 96
                    echo "                                                data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 96);
                    echo " 100w\"
                                                srcset=\"";
                    // line 97
                    echo ($context["oct_lazy_image"] ?? null);
                    echo " 100w\"
                                                sizes=\"100vw\"
                                                class=\"img-fluid oct-lazy\"
                                                ";
                } else {
                    // line 101
                    echo "                                                class=\"img-fluid\"
                                                ";
                }
                // line 103
                echo "                                                alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 103);
                echo "\"
                                                title=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                echo "\"
                                                width=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 105);
                echo "\"
                                                height=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 106);
                echo "\"/>
                                        </a>
                                        ";
                // line 108
                if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 108) === false)) {
                    // line 109
                    echo "                                            <div class=\"rm-module-rating d-flex align-items-center justify-content-center justify-content-md-start order-2\">
                                                <div class=\"rm-module-rating-stars d-flex align-items-center\">
                                                    ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 112) < $context["i"])) {
                            // line 113
                            echo "                                                            <span class=\"rm-module-rating-star\"></span>
                                                        ";
                        } else {
                            // line 115
                            echo "                                                            <span class=\"rm-module-rating-star rm-module-rating-star-is\"></span>
                                                        ";
                        }
                        // line 117
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                                                </div>
                                                <div class=\"rm-module-reviews\">
                                                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--comments-icon\" alt=\"\"       width=\"12\" height=\"11\" />
                                                    <span>";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 121);
                    echo "</span>
                                                </div>
                                            </div>
                                        ";
                }
                // line 125
                echo "                                        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_quantity", [], "any", true, true, false, 125) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 125)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 125)))) {
                    // line 126
                    echo "                            \t\t\t<div class=\"rm-module-quantity d-flex align-items-center justify-content-center\">
                            \t\t\t\t<button type=\"button\" aria-label=\"Minus\" class=\"rm-module-quantity-btn d-flex align-items-center justify-content-center rm-minus\"><span class=\"minus\"></span></button>
                            \t\t\t\t<input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 128);
                    echo "\" />
                            \t\t\t\t<button type=\"button\" aria-label=\"Plus\" class=\"rm-module-quantity-btn d-flex align-items-center justify-content-center rm-plus\"><span class=\"plus\"></span></button>
                            \t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 130);
                    echo "\" />
                            \t\t\t\t<input class=\"min-qty\" type=\"hidden\" value=\"";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 131);
                    echo "\" name=\"min_quantity\">
                            \t\t\t</div>
                            \t\t\t";
                }
                // line 134
                echo "                                    </div>
                                    <div class=\"rm-module-caption d-flex flex-column flex-grow-1\">
                                        <div class=\"rm-module-title\">
                                            <a href=\"";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137);
                echo "</a>
                                        </div>
                                        ";
                // line 139
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                                        <div class=\"rm-module-stock mt-auto\">";
                    echo ($context["oct_product_stock"] ?? null);
                    echo "</div>
                                        ";
                } else {
                    // line 142
                    echo "                                        <div class=\"rm-module-stock rm-out-of-stock mt-auto\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 142);
                    echo "</div>
                                        ";
                }
                // line 144
                echo "                                        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 144))) {
                    // line 145
                    echo "                                            <div class=\"rm-category-product-model\"><span>";
                    echo ($context["oct_view_model_cat"] ?? null);
                    echo "</span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 145);
                    echo "</div>
                                        ";
                }
                // line 147
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", true, true, false, 147) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 147))) {
                    // line 148
                    echo "                            \t        <div class=\"rm-module-attr\">
                            \t\t\t";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 150
                        echo "                            \t\t\t\t<span class=\"rm-module-attr-item\">
                            \t\t\t\t\t<span>";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 151);
                        echo ":</span> <span class=\"rm-module-attr-item-header\">";
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 151);
                        echo "</span>
                            \t\t\t\t</span>
                            \t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                            \t\t\t</div>
                            \t\t\t";
                }
                // line 156
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", true, true, false, 156) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 156)) > 3))) {
                    // line 157
                    echo "                                            <div class=\"rm-module-description d-none d-md-block\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 157);
                    echo "</div>
                                        ";
                }
                // line 159
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159)) {
                    // line 160
                    echo "                                            <div class=\"rm-module-price-box d-flex flex-column\">
                                                ";
                    // line 161
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 161)) {
                        // line 162
                        echo "                                                    <div class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                                                        ";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 163);
                        echo "
                                                    </div>
                                                ";
                    }
                    // line 166
                    echo "\t                                            ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 166)) {
                        // line 167
                        echo "                                                    <div class=\"rm-module-price-bottom d-flex align-items-md-end justify-content-between flex-column flex-md-row mt-md-auto flex-grow-1\">
                                                        <span class=\"rm-module-price\">";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 168);
                        echo "</span>
                                                        ";
                        // line 169
                        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 169)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 169))) {
                            // line 170
                            echo "                                                        <button type=\"button\" aria-label=\"To cart\" class=\"rm-btn secondary rm-cart-btn d-flex align-items-center justify-content-center justify-content-md-start";
                            if (((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_quantity", [], "any", true, true, false, 170) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 170)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 170)))) {
                                echo " rm-cat-button-cart";
                            } else {
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 170);
                                echo "');";
                            }
                            echo "\">
                                                            <span class=\"rm-cart-btn-icon\"></span>
\t\t\t                                                <span class=\"rm-btn-text\">";
                            // line 172
                            echo (((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 172) &&  !twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 172))) ? (twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 172)) : (($context["button_cart"] ?? null)));
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
                                                        ";
                        }
                        // line 175
                        echo "                                                    </div>
                                                ";
                    } else {
                        // line 177
                        echo "                                                    <div class=\"rm-module-price-top d-flex align-items-center mt-md-auto\">
                                                        <span class=\"rm-module-price-old\">";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
                        echo "</span>
                                                        ";
                        // line 179
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 179))) {
                            // line 180
                            echo "                                            \t\t\t\t";
                            if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 180))) {
                                // line 181
                                echo "                                            \t\t\t\t\t<div class=\"rm-module-sticker-discount\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 181);
                                echo "</div>
                                            \t\t\t\t";
                            }
                            // line 183
                            echo "                                            \t\t\t";
                        }
                        // line 184
                        echo "                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rm-module-price-bottom d-flex align-items-md-end justify-content-between flex-column flex-md-row flex-grow-1\">
                                                        <span class=\"rm-module-price\">";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 186);
                        echo "</span>
                                                        ";
                        // line 187
                        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 187)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 187))) {
                            // line 188
                            echo "                                                        <button type=\"button\" aria-label=\"To cart\" class=\"rm-btn secondary rm-cart-btn d-flex align-items-center justify-content-center justify-content-md-start";
                            if (((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_quantity", [], "any", true, true, false, 188) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 188)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 188)))) {
                                echo " rm-cat-button-cart";
                            } else {
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                                echo "');";
                            }
                            echo "\">
                                                            <span class=\"rm-cart-btn-icon\"></span>
\t\t\t                                                <span class=\"rm-btn-text\">";
                            // line 190
                            echo (((twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 190) &&  !twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 190))) ? (twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 190)) : (($context["button_cart"] ?? null)));
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
                                                        ";
                        }
                        // line 193
                        echo "                                                    </div>
                                                ";
                    }
                    // line 195
                    echo "                                            </div>
                                        ";
                }
                // line 197
                echo "                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                    </div>
                    ";
            // line 202
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_more", [], "any", true, true, false, 202) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_more", [], "any", false, false, false, 202))) {
                // line 203
                echo "                \t<div class=\"d-flex justify-content-center oct-load-more\">
                \t\t<button class=\"rm-btn rm-btn-2x dark oct-load-more-button text-center d-none\" onClick=\"octLoadMore(";
                // line 204
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    echo "1";
                }
                echo ");\">
                            <span class=\"rm-btn-icon\">
                                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--show-more-icon\" alt=\"\" width=\"24\" height=\"24\">
                            </span>
                            <span class=\"rm-btn-text\">";
                // line 208
                echo ($context["oct_show_more"] ?? null);
                echo "</span>
                        </button>
                \t</div>
                    ";
            }
            // line 212
            echo "                    ";
            echo ($context["pagination"] ?? null);
            echo "
                    ";
            // line 213
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_more", [], "any", true, true, false, 213) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "category_show_more", [], "any", false, false, false, 213))) {
                // line 214
                echo "                    <script src=\"catalog/view/theme/oct_remarket/js/oct-show-more.js\"></script>
                \t<script>
                        octCheckPagination();
                \t</script>
                    ";
            }
            // line 219
            echo "                ";
        } else {
            // line 220
            echo "                    <div class=\"p-4\">
                        <p>";
            // line 221
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        <a href=\"";
            // line 222
            echo ($context["continue"] ?? null);
            echo "\" class=\"rm-btn dark mt-3 d-inline-block\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                    </div>
                ";
        }
        // line 225
        echo "            </div>
        </div>
        ";
        // line 227
        echo ($context["column_right"] ?? null);
        echo "
    </div>
    </main>
    ";
        // line 230
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 232
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 232,  657 => 230,  651 => 227,  647 => 225,  639 => 222,  635 => 221,  632 => 220,  629 => 219,  622 => 214,  620 => 213,  615 => 212,  608 => 208,  599 => 204,  596 => 203,  594 => 202,  591 => 201,  582 => 197,  578 => 195,  574 => 193,  568 => 190,  556 => 188,  554 => 187,  550 => 186,  546 => 184,  543 => 183,  537 => 181,  534 => 180,  532 => 179,  528 => 178,  525 => 177,  521 => 175,  515 => 172,  503 => 170,  501 => 169,  497 => 168,  494 => 167,  491 => 166,  485 => 163,  480 => 162,  478 => 161,  475 => 160,  472 => 159,  466 => 157,  463 => 156,  459 => 154,  448 => 151,  445 => 150,  441 => 149,  438 => 148,  435 => 147,  427 => 145,  424 => 144,  418 => 142,  412 => 140,  410 => 139,  403 => 137,  398 => 134,  392 => 131,  388 => 130,  383 => 128,  379 => 126,  376 => 125,  369 => 121,  364 => 118,  358 => 117,  354 => 115,  350 => 113,  347 => 112,  343 => 111,  339 => 109,  337 => 108,  332 => 106,  328 => 105,  324 => 104,  319 => 103,  315 => 101,  308 => 97,  303 => 96,  301 => 95,  297 => 94,  292 => 92,  283 => 88,  274 => 85,  264 => 81,  262 => 80,  259 => 79,  255 => 77,  249 => 76,  243 => 73,  238 => 72,  235 => 71,  231 => 70,  228 => 69,  226 => 68,  219 => 66,  204 => 65,  200 => 64,  197 => 63,  188 => 57,  182 => 54,  177 => 51,  171 => 50,  163 => 48,  155 => 46,  152 => 45,  148 => 44,  144 => 42,  138 => 41,  130 => 39,  122 => 37,  119 => 36,  115 => 35,  110 => 32,  108 => 31,  102 => 28,  95 => 24,  92 => 23,  90 => 22,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  64 => 13,  60 => 12,  53 => 8,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/product/special.twig", "");
    }
}
