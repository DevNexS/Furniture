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

/* oct_remarket/template/octemplates/module/oct_products_modules.twig */
class __TwigTemplate_1508bf98fa1cdf18adf6d1d0f4a0caeafb33a6042f91fbc0e461b5fd73a4fa86 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "    ";
            if (((($context["position"] ?? null) == "column_left") || (($context["position"] ?? null) == "column_right"))) {
                // line 3
                echo "        <div class=\"rm-module-column-box\">
            <div class=\"rm-column-title\">
                ";
                // line 5
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 6
                    echo "                    <a href=\"";
                    echo ($context["link"] ?? null);
                    echo "\">
                    ";
                }
                // line 7
                echo ($context["heading_title"] ?? null);
                echo "
                    ";
                // line 8
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 9
                    echo "                    </a>
                ";
                }
                // line 11
                echo "            </div>
            <div id=\"rm-column-";
                // line 12
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\" class=\"rm-module-column-box-content\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 14
                    echo "                    <div class=\"rm-item h-100\">
                        <div class=\"rm-module-item d-flex flex-column h-100";
                    // line 15
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 15)) {
                        echo " rm-no-stock";
                    }
                    echo "\">
                            ";
                    // line 16
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 16))) {
                        // line 17
                        echo "                \t\t\t<div class=\"rm-module-stickers\">
                \t\t\t\t";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 18));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 19
                            echo "                \t\t\t\t\t";
                            if ( !twig_test_empty($context["oct_sticker"])) {
                                // line 20
                                echo "                \t\t\t\t\t<div class=\"rm-module-stickers-sticker rm-module-stickers-sticker-";
                                echo $context["key"];
                                echo "\">
                \t\t\t\t\t\t";
                                // line 21
                                echo $context["oct_sticker"];
                                echo "
                \t\t\t\t\t</div>
                \t\t\t\t\t";
                            }
                            // line 24
                            echo "                \t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                \t\t\t</div>
                \t\t\t";
                    }
                    // line 27
                    echo "                            <div class=\"rm-module-buttons list-unstyled d-flex flex-column\">
                                ";
                    // line 28
                    if (($context["oct_popup_view_status"] ?? null)) {
                        // line 29
                        echo "                    \t\t\t<button type=\"button\" aria-label=\"Quick view\" class=\"rm-module-buttons-item popup-view d-flex align-items-center justify-content-center\" title=\"";
                        echo ($context["oct_popup_view"] ?? null);
                        echo "\" onclick=\"octPopUpView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 29);
                        echo "')\">
                                    <span></span>
                                </button>
                    \t\t\t";
                    }
                    // line 33
                    echo "                                <button type=\"button\" aria-label=\"Wishlist\" class=\"rm-module-buttons-item wishlist d-flex align-items-center justify-content-center\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 33);
                    echo "');\">
                                    <span></span></button>
                                <button type=\"button\" aria-label=\"Compare\" class=\"rm-module-buttons-item compare d-flex align-items-center justify-content-center\" title=\"";
                    // line 35
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 35);
                    echo "');\">
                                    <span></span></button>
                            </div>
                            <div class=\"rm-module-img\">
                                <a href=\"";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
                    echo "\">
                                    <img
                                        src=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
                    echo "\"
                                        ";
                    // line 42
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        // line 43
                        echo "                                        data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                        echo " 100w\"
                                        srcset=\"";
                        // line 44
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\"
                                        sizes=\"100vw\"
                                        class=\"img-fluid oct-lazy\"
                                        ";
                    } else {
                        // line 48
                        echo "                                        class=\"img-fluid\"
                                        ";
                    }
                    // line 50
                    echo "                                        alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\"
                                        title=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                    echo "\"
                                        width=\"";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 52);
                    echo "\"
                                        height=\"";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 53);
                    echo "\"/>
                                </a>
                            </div>
                            ";
                    // line 56
                    if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 56) === false)) {
                        // line 57
                        echo "                                <div class=\"rm-module-rating d-flex align-items-center justify-content-start\">
                                    <div class=\"rm-module-rating-stars d-flex align-items-center\">
                                        ";
                        // line 59
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 60
                            echo "                                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 60) < $context["i"])) {
                                // line 61
                                echo "                                                <span class=\"rm-module-rating-star\"></span>
                                            ";
                            } else {
                                // line 63
                                echo "                                                <span class=\"rm-module-rating-star rm-module-rating-star-is\"></span>
                                            ";
                            }
                            // line 65
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                                    </div>
                                    <div class=\"rm-module-reviews\">
                                        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--comments-icon\" alt=\"\" width=\"12\" height=\"11\" />
                                        <span>";
                        // line 69
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 69);
                        echo "</span>
                                    </div>
                                </div>
                            ";
                    }
                    // line 73
                    echo "                            <div class=\"rm-module-title\">
                                <a href=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                    echo "</a>
                            </div>
                            ";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76)) {
                        // line 77
                        echo "                                <div class=\"rm-module-price-box\">
                                    ";
                        // line 78
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78)) {
                            // line 79
                            echo "                                        <div class=\"rm-module-price-bottom d-flex align-items-end justify-content-between\">
                                            <span class=\"rm-module-price\">";
                            // line 80
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                            echo "</span>
                                            ";
                            // line 81
                            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 81)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 81))) {
                                // line 82
                                echo "                                            <button type=\"button\" aria-label=\"To cart\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 82);
                                echo "');\" class=\"rm-btn secondary rm-cart-btn\">
                                                <span class=\"rm-cart-btn-icon\"></span>
                                            </button>
                                            ";
                            }
                            // line 86
                            echo "                                        </div>
                                    ";
                        } else {
                            // line 88
                            echo "                                        <div class=\"rm-module-price-top d-flex align-items-center\">
                                            <span class=\"rm-module-price-old\">";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                            echo "</span>
                                            ";
                            // line 90
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 90))) {
                                // line 91
                                echo "                                \t\t\t\t";
                                if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 91))) {
                                    // line 92
                                    echo "                                \t\t\t\t\t<div class=\"rm-module-sticker-discount\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 92);
                                    echo "</div>
                                \t\t\t\t";
                                }
                                // line 94
                                echo "                                \t\t\t";
                            }
                            // line 95
                            echo "                                        </div>
                                        <div class=\"rm-module-price-bottom d-flex align-items-end justify-content-between\">
                                            <span class=\"rm-module-price\">";
                            // line 97
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 97);
                            echo "</span>
                                            ";
                            // line 98
                            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 98)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 98))) {
                                // line 99
                                echo "                                            <button type=\"button\" aria-label=\"To cart\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 99);
                                echo "');\" class=\"rm-btn secondary rm-cart-btn\">
                                                <span class=\"rm-cart-btn-icon\"></span>
                                            </button>
                                            ";
                            }
                            // line 103
                            echo "                                        </div>
                                    ";
                        }
                        // line 105
                        echo "                                </div>
                            ";
                    }
                    // line 107
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 107)) {
                        // line 108
                        echo "                                <div class=\"price-tax\">
                                    ";
                        // line 109
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 109);
                        echo "
                                </div>
                            ";
                    }
                    // line 112
                    echo "                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "            </div>
            <button type=\"button\" aria-label=\"Prev\" id=\"rm-";
                // line 116
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-prev\" class=\"rm-column-module-btn rm-column-module-btn-prev\">
                <span>&lt;</span></button>
            <button type=\"button\" aria-label=\"Next\" id=\"rm-";
                // line 118
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-next\" class=\"rm-column-module-btn rm-column-module-btn-next\">
                <span>&gt;</span></button>
            <script>
                octColumnProducts(\"rm-";
                // line 121
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-prev\", \"rm-";
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "-button-next\", \"rm-column-";
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\");
            </script>
        </div>
    ";
            } else {
                // line 125
                echo "        <div class=\"rm-module\">
            <div class=\"row row-padding-top\">
                <div class=\"col-12 rm-module-header";
                // line 127
                if ((($context["show_type"] ?? null) == "width-infinity")) {
                    echo " width-infinity-header";
                }
                echo "\">
                    <span>
                        ";
                // line 129
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 130
                    echo "                            <a href=\"";
                    echo ($context["link"] ?? null);
                    echo "\">
                            ";
                }
                // line 131
                echo ($context["heading_title"] ?? null);
                echo "
                            ";
                // line 132
                if ((array_key_exists("link", $context) && ($context["link"] ?? null))) {
                    // line 133
                    echo "                            </a>
                        ";
                }
                // line 135
                echo "                    </span>
                </div>
            </div>
            <div id=\"rm-";
                // line 138
                echo ($context["module_name"] ?? null);
                echo "_";
                echo ($context["module"] ?? null);
                echo "\" class=\"row no-gutters";
                if ((($context["show_type"] ?? null) == "width-infinity")) {
                    echo " width-infinity-row";
                }
                echo "\">
                ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 140
                    echo "                    <div class=\"col-12 col-md-4 col-xl-3 rm-module-col\"";
                    if ((($context["show_type"] ?? null) == "width-100")) {
                        echo " data-width=\"width-100\"";
                    }
                    if ((($context["show_type"] ?? null) == "width-50")) {
                        echo " data-width=\"width-50\"";
                    }
                    if ((($context["show_type"] ?? null) == "width-infinity")) {
                        echo " data-width=\"width-infinity\"";
                    }
                    echo ">
                        <div class=\"rm-module-item d-flex flex-md-column h-100";
                    // line 141
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "oct_grayscale", [], "any", false, false, false, 141)) {
                        echo " rm-no-stock";
                    }
                    echo "\">
                            <div class=\"rm-module-img d-flex flex-column d-md-block\">
                                ";
                    // line 143
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 143))) {
                        // line 144
                        echo "                    \t\t\t<div class=\"rm-module-stickers\">
                    \t\t\t\t";
                        // line 145
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 145));
                        foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                            // line 146
                            echo "                    \t\t\t\t\t";
                            if ( !twig_test_empty($context["oct_sticker"])) {
                                // line 147
                                echo "                    \t\t\t\t\t<div class=\"rm-module-stickers-sticker rm-module-stickers-sticker-";
                                echo $context["key"];
                                echo "\">
                    \t\t\t\t\t\t";
                                // line 148
                                echo $context["oct_sticker"];
                                echo "
                    \t\t\t\t\t</div>
                    \t\t\t\t\t";
                            }
                            // line 151
                            echo "                    \t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 152
                        echo "                    \t\t\t</div>
                    \t\t\t";
                    }
                    // line 154
                    echo "                                <div class=\"rm-module-buttons list-unstyled d-flex justify-content-center flex-md-column order-1\">
                                    ";
                    // line 155
                    if (($context["oct_popup_view_status"] ?? null)) {
                        // line 156
                        echo "                        \t\t\t<button type=\"button\" aria-label=\"Quick view\" class=\"rm-module-buttons-item popup-view d-flex align-items-center justify-content-center\" title=\"";
                        echo ($context["oct_popup_view"] ?? null);
                        echo "\" onclick=\"octPopUpView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                        echo "')\">
                                        <span></span>
                                    </button>
                        \t\t\t";
                    }
                    // line 160
                    echo "                                    <button type=\"button\" aria-label=\"Wishlist\" class=\"rm-module-buttons-item wishlist d-flex align-items-center justify-content-center\" title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
                    echo "');\">
                                        <span></span>
                                    </button>
                                    <button type=\"button\" aria-label=\"Compare\" class=\"rm-module-buttons-item compare d-flex align-items-center justify-content-center\" title=\"";
                    // line 163
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163);
                    echo "');\">
                                        <span></span>
                                    </button>
                                </div>
                                <a href=\"";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 167);
                    echo "\" class=\"order-0\">
                                    <img
                                        src=\"";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 169);
                    echo "\"
                                        ";
                    // line 170
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        // line 171
                        echo "                                        data-srcset=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 171);
                        echo " 100w\"
                                        srcset=\"";
                        // line 172
                        echo ($context["oct_lazy_image"] ?? null);
                        echo " 100w\"
                                        sizes=\"100vw\"
                                        class=\"img-fluid oct-lazy\"
                                        ";
                    } else {
                        // line 176
                        echo "                                        class=\"img-fluid\"
                                        ";
                    }
                    // line 178
                    echo "                                        alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 178);
                    echo "\"
                                        title=\"";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 179);
                    echo "\"
                                        width=\"";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 180);
                    echo "\"
                                        height=\"";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 181);
                    echo "\"/>
                                </a>
                                ";
                    // line 183
                    if ( !(twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 183) === false)) {
                        // line 184
                        echo "                                    <div class=\"rm-module-rating d-flex align-items-center justify-content-center justify-content-md-start order-2\">
                                        <div class=\"rm-module-rating-stars d-flex align-items-center\">
                                            ";
                        // line 186
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 187
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 187) < $context["i"])) {
                                // line 188
                                echo "                                                    <span class=\"rm-module-rating-star\"></span>
                                                ";
                            } else {
                                // line 190
                                echo "                                                    <span class=\"rm-module-rating-star rm-module-rating-star-is\"></span>
                                                ";
                            }
                            // line 192
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 193
                        echo "                                        </div>
                                        <div class=\"rm-module-reviews\">
                                            <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--comments-icon\" alt=\"\" width=\"12\" height=\"11\" />
                                            <span>";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 196);
                        echo "</span>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 200
                    echo "                                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 200)) {
                        // line 201
                        echo "                                <div class=\"rm-module-quantity d-flex align-items-center justify-content-center\">
                                    <button type=\"button\" aria-label=\"Minus\" class=\"rm-module-quantity-btn d-flex align-items-center justify-content-center rm-minus\">
                                        <span class=\"minus\"></span>
                                    </button>
                                    <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"1\" aria-label=\"Quantity\">
                                    <button type=\"button\" aria-label=\"Plus\" class=\"rm-module-quantity-btn d-flex align-items-center justify-content-center rm-plus\">
                                        <span class=\"plus\"></span>
                                    </button>
                                </div>
                                ";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 211);
                    echo "\" />
                            </div>
                            <div class=\"rm-module-caption d-flex flex-column flex-grow-1\">
                                <div class=\"rm-module-title\">
                                    <a href=\"";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 215);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 215);
                    echo "</a>
                                </div>
                                ";
                    // line 217
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 217)) {
                        // line 218
                        echo "                                <div class=\"rm-module-stock\">";
                        echo ($context["oct_product_stock"] ?? null);
                        echo "</div>
                                ";
                    }
                    // line 220
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", true, true, false, 220) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 220))) {
                        // line 221
                        echo "\t                            <div class=\"rm-category-product-model\"><span>";
                        echo ($context["oct_view_model_cat"] ?? null);
                        echo "</span>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "oct_model", [], "any", false, false, false, 221);
                        echo "</div>
                                ";
                    }
                    // line 223
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", true, true, false, 223) && twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 223))) {
                        // line 224
                        echo "                                <div class=\"rm-module-attr\">
                                ";
                        // line 225
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "oct_atributes", [], "any", false, false, false, 225));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 226
                            echo "                                    <span class=\"rm-module-attr-item\">
                                        <span>";
                            // line 227
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 227);
                            echo ":</span> <span class=\"rm-module-attr-item-header\">";
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 227);
                            echo "</span>
                                    </span>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 230
                        echo "                                </div>
                                ";
                    }
                    // line 232
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 232)) {
                        // line 233
                        echo "                                    <div class=\"rm-module-price-box d-flex flex-column mt-auto\">
                                        ";
                        // line 234
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 234)) {
                            // line 235
                            echo "                                            <div class=\"price-tax\">
                                                ";
                            // line 236
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 236);
                            echo "
                                            </div>
                                        ";
                        }
                        // line 239
                        echo "                                        ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 239)) {
                            // line 240
                            echo "                                            <div class=\"rm-module-price-bottom d-flex align-items-md-end justify-content-between flex-column flex-md-row mt-md-auto flex-grow-1\">
                                                <span class=\"rm-module-price\">";
                            // line 241
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 241);
                            echo "</span>
                                                ";
                            // line 242
                            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 242)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 242))) {
                                // line 243
                                echo "                                                <button type=\"button\" aria-label=\"To cart\" class=\"rm-btn secondary rm-cart-btn d-flex align-items-center justify-content-center justify-content-md-start rm-cat-button-cart\">
                                                    <span class=\"rm-cart-btn-icon\"></span><span class=\"rm-btn-text\">";
                                // line 244
                                echo ($context["button_cart"] ?? null);
                                echo "</span>
                                                </button>
                                                ";
                            }
                            // line 247
                            echo "                                            </div>
                                        ";
                        } else {
                            // line 249
                            echo "                                            <div class=\"rm-module-price-top d-flex align-items-center mt-md-auto\">
                                                <span class=\"rm-module-price-old\">";
                            // line 250
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 250);
                            echo "</span>
                                                ";
                            // line 251
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "oct_stickers", [], "any", false, false, false, 251))) {
                                // line 252
                                echo "                                    \t\t\t\t";
                                if ((($context["oct_sticker_you_save"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 252))) {
                                    // line 253
                                    echo "                                    \t\t\t\t\t<div class=\"rm-module-sticker-discount\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "you_save", [], "any", false, false, false, 253);
                                    echo "</div>
                                    \t\t\t\t";
                                }
                                // line 255
                                echo "                                    \t\t\t";
                            }
                            // line 256
                            echo "                                            </div>
                                            <div class=\"rm-module-price-bottom d-flex align-items-md-end justify-content-between flex-column flex-md-row\">
                                                <span class=\"rm-module-price\">";
                            // line 258
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 258);
                            echo "</span>
                                                ";
                            // line 259
                            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 259)) && twig_get_attribute($this->env, $this->source, $context["product"], "can_buy", [], "any", false, false, false, 259))) {
                                // line 260
                                echo "                                                <button type=\"button\" aria-label=\"To cart\" class=\"rm-btn secondary rm-cart-btn d-flex align-items-center justify-content-center justify-content-md-start rm-cat-button-cart\">
                                                    <span class=\"rm-cart-btn-icon\"></span><span class=\"rm-btn-text\">";
                                // line 261
                                echo ($context["button_cart"] ?? null);
                                echo "</span>
                                                </button>
                                                ";
                            }
                            // line 264
                            echo "                                            </div>
                                        ";
                        }
                        // line 266
                        echo "                                    </div>
                                ";
                    }
                    // line 268
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 272
                echo "            </div>
            ";
                // line 273
                if (((array_key_exists("show_more", $context) && ($context["show_more"] ?? null)) && (($context["show_type"] ?? null) != "width-infinity"))) {
                    // line 274
                    echo "            <div class=\"row oct-load-more\">
                <div class=\"col-12 text-center\">
                    <div class=\"oct-load-more-button-wrapper\">
                        <input type=\"hidden\" id=\"more_";
                    // line 277
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" name=\"more_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" value=\"";
                    echo ($context["page"] ?? null);
                    echo "\">
                    <button id=\"btn_";
                    // line 278
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "\" class=\"rm-btn rm-btn-2x dark oct-load-more-button text-center mx-0\" onclick=\"octShowMoreModule('";
                    echo ($context["module_id"] ?? null);
                    echo "', '";
                    if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                        echo "1";
                    } else {
                        echo "0";
                    }
                    echo "', 'btn_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "', 'rm-";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "', 'more_";
                    echo ($context["module_name"] ?? null);
                    echo "_";
                    echo ($context["module"] ?? null);
                    echo "', '";
                    echo ($context["oct_path"] ?? null);
                    echo "');\">
                              <span class=\"rm-btn-icon\">
                                  <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--show-more-icon\" alt=\"\" width=\"24\" height=\"24\">
                              </span>
                              <span class=\"rm-btn-text\">";
                    // line 282
                    echo ($context["oct_show_more"] ?? null);
                    echo "</span>
                          </button>
                      </div>
                  </div>
            </div>
            ";
                }
                // line 288
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/module/oct_products_modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 288,  827 => 282,  796 => 278,  784 => 277,  779 => 274,  777 => 273,  774 => 272,  765 => 268,  761 => 266,  757 => 264,  751 => 261,  748 => 260,  746 => 259,  742 => 258,  738 => 256,  735 => 255,  729 => 253,  726 => 252,  724 => 251,  720 => 250,  717 => 249,  713 => 247,  707 => 244,  704 => 243,  702 => 242,  698 => 241,  695 => 240,  692 => 239,  684 => 236,  681 => 235,  679 => 234,  676 => 233,  673 => 232,  669 => 230,  658 => 227,  655 => 226,  651 => 225,  648 => 224,  645 => 223,  637 => 221,  634 => 220,  628 => 218,  626 => 217,  619 => 215,  611 => 211,  599 => 201,  596 => 200,  589 => 196,  584 => 193,  578 => 192,  574 => 190,  570 => 188,  567 => 187,  563 => 186,  559 => 184,  557 => 183,  552 => 181,  548 => 180,  544 => 179,  539 => 178,  535 => 176,  528 => 172,  523 => 171,  521 => 170,  517 => 169,  512 => 167,  503 => 163,  494 => 160,  484 => 156,  482 => 155,  479 => 154,  475 => 152,  469 => 151,  463 => 148,  458 => 147,  455 => 146,  451 => 145,  448 => 144,  446 => 143,  439 => 141,  426 => 140,  422 => 139,  412 => 138,  407 => 135,  403 => 133,  401 => 132,  397 => 131,  391 => 130,  389 => 129,  382 => 127,  378 => 125,  361 => 121,  353 => 118,  346 => 116,  343 => 115,  335 => 112,  327 => 109,  324 => 108,  321 => 107,  317 => 105,  313 => 103,  305 => 99,  303 => 98,  299 => 97,  295 => 95,  292 => 94,  286 => 92,  283 => 91,  281 => 90,  277 => 89,  274 => 88,  270 => 86,  262 => 82,  260 => 81,  256 => 80,  253 => 79,  251 => 78,  248 => 77,  246 => 76,  239 => 74,  236 => 73,  229 => 69,  224 => 66,  218 => 65,  214 => 63,  210 => 61,  207 => 60,  203 => 59,  199 => 57,  197 => 56,  191 => 53,  187 => 52,  183 => 51,  178 => 50,  174 => 48,  167 => 44,  162 => 43,  160 => 42,  156 => 41,  151 => 39,  142 => 35,  134 => 33,  124 => 29,  122 => 28,  119 => 27,  115 => 25,  109 => 24,  103 => 21,  98 => 20,  95 => 19,  91 => 18,  88 => 17,  86 => 16,  80 => 15,  77 => 14,  73 => 13,  67 => 12,  64 => 11,  60 => 9,  58 => 8,  54 => 7,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/module/oct_products_modules.twig", "");
    }
}
