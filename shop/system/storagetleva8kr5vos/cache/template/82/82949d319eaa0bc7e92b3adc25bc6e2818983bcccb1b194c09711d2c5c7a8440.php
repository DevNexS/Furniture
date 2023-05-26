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

/* oct_remarket/template/product/product.twig */
class __TwigTemplate_b33e3de7205816500231c8b9b17d5808052fdd920fe2a90e1ddb13a3fcea6ddf extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
    ";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
    <div class=\"content-top-box\">";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "</div>
    <div class=\"rm-product-mobile-fixed fixed-bottom d-lg-none d-flex align-items-center justify-content-between w-100\">
        <div class=\"rm-product-mobile-fixed-price d-flex flex-column\">
            ";
        // line 7
        if ( !($context["special"] ?? null)) {
            // line 8
            echo "                <span class=\"rm-product-mobile-fixed-price-new\">";
            echo ($context["price"] ?? null);
            echo "</span>
            ";
        } else {
            // line 10
            echo "                <span class=\"rm-product-mobile-fixed-price-old\">";
            echo ($context["price"] ?? null);
            echo "</span>
                <span class=\"rm-product-mobile-fixed-price-new\">";
            // line 11
            echo ($context["special"] ?? null);
            echo "</span>
            ";
        }
        // line 13
        echo "        </div>
        <div class=\"rm-product-mobile-fixed-buttons d-flex align-items-center\">
            <button type=\"button\" class=\"rm-btn wishlist\" onclick=\"wishlist.add('";
        // line 15
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\">
                <span class=\"rm-btn-icon\"><img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-product-button-wishlist-icon\" alt=\"";
        // line 16
        echo ($context["button_wishlist"] ?? null);
        echo "\" width=\"20\" height=\"17\"></span>
            </button>
            <button type=\"button\" class=\"rm-btn compare\" onclick=\"compare.add('";
        // line 18
        echo ($context["product_id"] ?? null);
        echo "');\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\">
                <span class=\"rm-btn-icon\"><img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-product-button-compare-icon\" alt=\"";
        // line 19
        echo ($context["button_compare"] ?? null);
        echo "\" width=\"18\" height=\"18\"></span>
            </button>
            ";
        // line 21
        if ((array_key_exists("oct_popup_purchase_status", $context) &&  !twig_test_empty(($context["can_buy"] ?? null)))) {
            // line 22
            echo "            <button type=\"button\" name=\"button\" class=\"rm-btn secondary rm-product-one-click-btn d-flex align-items-center\" onclick=\"octPopPurchase('";
            echo ($context["product_id"] ?? null);
            echo "')\">
                <span class=\"rm-cart-btn-icon\"></span>
                <span class=\"rm-btn-text\">";
            // line 24
            echo ($context["oct_product_oneclickbuy"] ?? null);
            echo "</span>
            </button>
            ";
        }
        // line 27
        echo "        </div>
    </div>
    <main>
        <div id=\"content\" class=\"rm-content rm-product\">
            <div class=\"rm-product-top d-flex flex-column flex-md-row align-items-center justify-content-between\">
                <div class=\"rm-product-title order-1 order-md-0\"><h1>";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h1></div>
                ";
        // line 33
        if ( !array_key_exists("oct_desktop", $context)) {
            // line 34
            echo "                <div class=\"d-none d-lg-flex align-items-center flex-column flex-lg-row rm-product-top-buttons order-0 order-md-1\">
                    <button type=\"button\" class=\"rm-product-top-button rm-product-top-button-wishlist d-flex align-items-center justify-content-center\" onclick=\"wishlist.add('";
            // line 35
            echo ($context["product_id"] ?? null);
            echo "');\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
                        <span class=\"rm-product-top-button-icon\"></span>
                        <span class=\"rm-product-top-button-text d-lg-none\">";
            // line 37
            echo ($context["button_wishlist"] ?? null);
            echo "</span>
                    </button>
                    <button type=\"button\" class=\"rm-product-top-button rm-product-top-button-compare d-flex align-items-center justify-content-center\" onclick=\"compare.add('";
            // line 39
            echo ($context["product_id"] ?? null);
            echo "');\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
                        <span class=\"rm-product-top-button-icon\"></span>
                        <span class=\"rm-product-top-button-text d-lg-none\">";
            // line 41
            echo ($context["button_compare"] ?? null);
            echo "</span>
                    </button>
                </div>
                ";
        }
        // line 45
        echo "            </div>
            <div class=\"row no-gutters\">
                <div class=\"col-lg-12 col-xl-6\">
                    <div class=\"rm-product-images h-100\">
            \t\t\t";
        // line 49
        if (($context["oct_product_stickers"] ?? null)) {
            // line 50
            echo "            \t\t\t<div class=\"rm-module-stickers\">
            \t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_stickers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["oct_sticker"]) {
                // line 52
                echo "            \t\t\t\t\t";
                if ( !twig_test_empty($context["oct_sticker"])) {
                    // line 53
                    echo "            \t\t\t\t\t<div class=\"rm-module-stickers-sticker rm-product-stickers-";
                    echo $context["key"];
                    echo "\">
            \t\t\t\t\t\t";
                    // line 54
                    echo $context["oct_sticker"];
                    echo "
            \t\t\t\t\t</div>
            \t\t\t\t\t";
                }
                // line 57
                echo "            \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['oct_sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            \t\t\t</div>
            \t\t\t";
        }
        // line 60
        echo "                        ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 61
            echo "                            ";
            if (($context["thumb"] ?? null)) {
                // line 62
                echo "                                <div class=\"rm-product-images-main\">
                                    <div class=\"rm-product-slide\">
                                        <a href=\"";
                // line 64
                echo ($context["popup"] ?? null);
                echo "\" class=\"oct-gallery\" onclick=\"return false;\">
                                            <img src=\"";
                // line 65
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-fluid\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" width=\"";
                echo ($context["thumb_width"] ?? null);
                echo "\" height=\"";
                echo ($context["thumb_height"] ?? null);
                echo "\" />
                                        </a>
                                    </div>
                                    ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 69
                    echo "                                        ";
                    $context["i"] = ($context["key"] + 1);
                    // line 70
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 70) > 0)) {
                        // line 71
                        echo "                                            <div class=\"rm-product-slide\">
                                                <a href=\"";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup_fancy", [], "any", false, false, false, 72);
                        echo "\" class=\"oct-gallery\" onclick=\"return false;\">
                                                    <img src=\"";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 73);
                        echo "\" class=\"img-fluid\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" width=\"";
                        echo ($context["thumb_width"] ?? null);
                        echo "\" height=\"";
                        echo ($context["thumb_height"] ?? null);
                        echo "\" />
                                                </a>
                                            </div>
                                        ";
                    }
                    // line 77
                    echo "                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                                </div>
                            ";
            }
            // line 80
            echo "                            ";
            if (($context["images"] ?? null)) {
                // line 81
                echo "                                <div class=\"rm-product-images-additional d-none d-md-block\">
                                    ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                    // line 83
                    echo "                                        ";
                    $context["i"] = ($context["key"] + 1);
                    // line 84
                    echo "                                        <div class=\"rm-product-images-additional-item\">
                                            <a href=\"";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 85);
                    echo "\" onClick=\"return false;\" data-href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 85);
                    echo "\">
                                                <img src=\"";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 86);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_width", [], "any", false, false, false, 86);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "images_height", [], "any", false, false, false, 86);
                    echo "\" />
                                            </a>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                                </div>
                            ";
            }
            // line 92
            echo "                            <script>
                                \$(function() {
                                    setTimeout(function() {
                                        \$('#image-additional').slick('refresh');
                                        \$('.image-additional-box').addClass('overflow-visible');
                                    }, 500);

                                    ";
            // line 99
            if ( !twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_gallery", [], "any", true, true, false, 99)) {
                // line 100
                echo "                        \t\t\tvar sliderProducts = \$('.rm-product-images-main a');

                        \t\t\tsliderProducts.on('click', function(e) {
                        \t\t\t\te.preventDefault();

                        \t\t\t\tvar totalSlides = \$(this).parents('.rm-product-images-main').slick(\"getSlick\").slideCount,
                        \t\t\t\tdataIndex = \$(this).parents('.rm-product-slide').data('slick-index'),
                        \t\t\t\ttrueIndex;

                        \t\t\t\tswitch(true) {
                        \t\t\t\t\tcase (dataIndex < 0):
                        \t\t\t\t\t\ttrueIndex = totalSlides+dataIndex;

                        \t\t\t\t\t\tbreak;
                        \t\t\t\t\tcase (dataIndex >= totalSlides):
                        \t\t\t\t\t\ttrueIndex = dataIndex%totalSlides;

                        \t\t\t\t\t\tbreak;
                        \t\t\t\t\tdefault:
                        \t\t\t\t\t\ttrueIndex = dataIndex;
                        \t\t\t\t}

                        \t\t\t\t\$.fancybox.open(sliderProducts, {backFocus: false, hideScrollbar: false, loop : true}, trueIndex);

                        \t\t\t\treturn false;
                        \t\t\t});
                        \t\t\t";
            }
            // line 127
            echo "
                                    ";
            // line 128
            if (($context["images"] ?? null)) {
                // line 129
                echo "                                    \$('.rm-product-images-main').slick({
                                        infinite: true,
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        fade: false,
                                        draggable: false,
                                        asNavFor: '.rm-product-images-additional',
                                        dots: false,
                                        arrows: false,
                                        responsive: [
                                            {
                                                breakpoint: 768,
                                                settings: {
                                                    dots: ";
                // line 142
                if ((twig_length_filter($this->env, ($context["images"] ?? null)) <= 1)) {
                    echo "false";
                } else {
                    echo "true";
                }
                // line 143
                echo "                                                }
                                            }
                                        ]
                                    });
                                    \$('.rm-product-images-additional').slick({
                                        infinite: ";
                // line 148
                if ((twig_length_filter($this->env, ($context["images"] ?? null)) > 3)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo ",
                                        slidesToShow: 5,
                                        slidesToScroll: 1,
                                        focusOnSelect: true,
                                        asNavFor: '.rm-product-images-main',
                                        dots: false,
                                        prevArrow: \"<button type='button' class='slick-prev pull-left'>&lt;</button>\",
                                        nextArrow: \"<button type='button' class='slick-next pull-right'>&gt;</button>\",
                                        responsive: [
                                            {
                                                breakpoint: 1600,
                                                settings: {
                                                    slidesToShow: 4,
                                                    slidesToScroll: 1
                                                }
                                            }, {
                                                breakpoint: 1200,
                                                settings: {
                                                    slidesToShow: 5,
                                                    slidesToScroll: 1
                                                }
                                            }, {
                                                breakpoint: 992,
                                                settings: {
                                                    slidesToShow: 3,
                                                    slidesToScroll: 1
                                                }
                                            }, {
                                                breakpoint: 376,
                                                settings: {
                                                    slidesToShow: 2,
                                                    slidesToScroll: 1
                                                }
                                            }
                                        ]
                                    });
                                    ";
            } else {
                // line 185
                echo "                                    \$('.rm-product-images-main').slick({});
                                    ";
            }
            // line 187
            echo "                                });
                            </script>
                        ";
        }
        // line 190
        echo "                    </div>
                </div>
                <div id=\"product\" class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"rm-product-center h-100\">
                        <div class=\"rm-product-center-info\">
                            ";
        // line 195
        if (($context["manufacturer"] ?? null)) {
            // line 196
            echo "                                <div class=\"rm-product-center-info-item\">
                                    <span class=\"rm-product-center-info-item-title\">";
            // line 197
            echo ($context["text_manufacturer"] ?? null);
            echo "</span>
                                    <span>
                                        <a href=\"";
            // line 199
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a>
                                    </span>
                                </div>
                            ";
        }
        // line 203
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_model", [], "any", true, true, false, 203) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_model", [], "any", false, false, false, 203) == "on"))) {
            // line 204
            echo "                                <div class=\"rm-product-center-info-item\">
                                    <span class=\"rm-product-center-info-item-title\">";
            // line 205
            echo ($context["text_model"] ?? null);
            echo "</span>
                                    <span>";
            // line 206
            echo ($context["model"] ?? null);
            echo "</span>
                                </div>
                            ";
        }
        // line 209
        echo "                            ";
        if (($context["review_status"] ?? null)) {
            // line 210
            echo "                                <div class=\"rm-product-center-info-item rm-product-center-info-item-reviews d-flex align-items-center\">
                                    <span class=\"rm-product-center-info-item-title\">";
            // line 211
            echo ($context["oct_product_reviews"] ?? null);
            echo "</span>
                                    <span class=\"blue-link\" id=\"reviews-quick-view\" onclick=\"\$('a[href=\\'#product_reviews\\']').trigger('click');scrollToElement('.tab-content');\">(";
            // line 212
            echo ($context["total_reviews"] ?? null);
            echo ")</span>
                                    <div class=\"rm-module-rating-stars d-flex align-items-center\">
                                        ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 215
                echo "                                            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 216
                    echo "                                                <span class=\"rm-module-rating-star\"></span>
                                            ";
                } else {
                    // line 218
                    echo "                                                <span class=\"rm-module-rating-star rm-module-rating-star-is\"></span>
                                            ";
                }
                // line 220
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 224
        echo "                            <div class=\"rm-module-stock";
        if (($context["out_of_stock"] ?? null)) {
            echo " rm-out-of-stock";
        }
        echo "\">";
        echo ($context["stock"] ?? null);
        echo "</div>
                        </div>
                        ";
        // line 226
        if (($context["price"] ?? null)) {
            // line 227
            echo "                        <div class=\"rm-product-center-price\">
                            ";
            // line 228
            if ( !($context["special"] ?? null)) {
                // line 229
                echo "                                <span>";
                echo ($context["price"] ?? null);
                echo "</span>
                            ";
            } else {
                // line 231
                echo "                                ";
                if (($context["product_timer"] ?? null)) {
                    // line 232
                    echo "                                    <div class=\"rm-day-discounts-timer rm-product-timer d-flex-inline mb-4\">
                                        <div class=\"rm-day-discounts-timer-text\">";
                    // line 233
                    echo ($context["oct_product_timer"] ?? null);
                    echo "</div>
                                        <div class=\"rm-day-discounts-timer-inner d-inline-flex align-items-start justify-content-center\">
                                            <div class=\"d-flex flex-column align-items-center\">
                                                <div id=\"rm-timer-days\" class=\"rm-day-discounts-timer-number\"></div>
                                                <span>";
                    // line 237
                    echo ($context["oct_product_timer_days"] ?? null);
                    echo "</span>
                                            </div>
                                            <div class=\"rm-day-discounts-timer-delimiter animated\">:</div>
                                            <div class=\"d-flex flex-column align-items-center\">
                                                <div id=\"rm-timer-hours\" class=\"rm-day-discounts-timer-number\"></div>
                                                <span>";
                    // line 242
                    echo ($context["oct_product_timer_hours"] ?? null);
                    echo "</span>
                                            </div>
                                            <div class=\"rm-day-discounts-timer-delimiter animated\">:</div>
                                            <div class=\"d-flex flex-column align-items-center\">
                                                <div id=\"rm-timer-minutes\" class=\"rm-day-discounts-timer-number\"></div>
                                                <span>";
                    // line 247
                    echo ($context["oct_product_timer_minutes"] ?? null);
                    echo "</span>
                                            </div>
                                            <div class=\"rm-day-discounts-timer-delimiter animated\">:</div>
                                            <div class=\"d-flex flex-column align-items-center\">
                                                <div id=\"rm-timer-seconds\" class=\"rm-day-discounts-timer-number\"></div>
                                                <span>";
                    // line 252
                    echo ($context["oct_product_timer_seconds"] ?? null);
                    echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function timerSpecial(id, deadline) {
                                            const addZero = (num) => {
                                                if (num <= 9) {
                                                    return '0' + num;
                                                } else {
                                                    return num;
                                                }
                                            };

                                            const getTimeRemaining = (endtime) => {
                                                const t = Date.parse(endtime) - Date.parse(new Date()),
                                                    seconds = Math.floor((t/1000) % 60),
                                                    minutes = Math.floor((t/1000/60) % 60),
                                                    hours = Math.floor((t/(1000 * 60 * 60)) % 24),
                                                    days = Math.floor((t/(1000 * 60 * 60 * 24)));

                                                return {
                                                    'total': t,
                                                    'days': days,
                                                    'hours': hours,
                                                    'minutes': minutes,
                                                    'seconds': seconds
                                                };
                                            };

                                            const setClock = (selector, endtime) => {
                                                const timer = document.querySelector(selector),
                                                    days = timer.querySelector('#rm-timer-days'),
                                                    hours = timer.querySelector('#rm-timer-hours'),
                                                    minutes = timer.querySelector('#rm-timer-minutes'),
                                                    seconds = timer.querySelector('#rm-timer-seconds'),
                                                    timeInterval = setInterval(updateClock, 1000);

                                                updateClock();

                                                function updateClock() {
                                                    const t = getTimeRemaining(endtime);

                                                    days.textContent = addZero(t.days);
                                                    hours.textContent = addZero(t.hours);
                                                    minutes.textContent = addZero(t.minutes);
                                                    seconds.textContent = addZero(t.seconds);

                                                    if (t.total <= 0) {
                                                        days.textContent = \"00\";
                                                        hours.textContent = \"00\";
                                                        minutes.textContent = \"00\";
                                                        seconds.textContent = \"00\";

                                                        clearInterval(timeInterval);
                                                    }
                                                }
                                            };

                                            setClock(id, deadline);
                                        }

                                        let deadLine = '";
                    // line 314
                    echo ($context["special_date_end"] ?? null);
                    echo "T00:00:00';
                                        timerSpecial('.rm-product-timer', deadLine);
                                    </script>
                                ";
                }
                // line 318
                echo "                                <div class=\"d-flex align-items-center\">
                                    <span class=\"rm-product-center-price-old\">";
                // line 319
                echo ($context["price"] ?? null);
                echo "</span>
                                    ";
                // line 320
                if ((($context["special"] ?? null) && ($context["oct_sticker_you_save"] ?? null))) {
                    // line 321
                    echo "                                        <div id=\"main-product-you-save\" class=\"rm-product-center-price-sticker d-flex align-items-center justify-content-center\">";
                    echo ($context["you_save"] ?? null);
                    echo "</div>
                                    ";
                }
                // line 323
                echo "                                </div>
                                <span>";
                // line 324
                echo ($context["special"] ?? null);
                echo "</span>
                            ";
            }
            // line 326
            echo "                            ";
            if (($context["tax"] ?? null)) {
                // line 327
                echo "                                <div class=\"rm-product-center-price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "
                                    <span>";
                // line 328
                echo ($context["tax"] ?? null);
                echo "</span>
                                </div>
                            ";
            }
            // line 331
            echo "                            ";
            if (($context["discounts"] ?? null)) {
                // line 332
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 333
                    echo "                                    <div class=\"rm-product-center-price-discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 333);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 333);
                    echo "</div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 335
                echo "                            ";
            }
            // line 336
            echo "                            ";
            if (((array_key_exists("oct_popup_found_cheaper_status", $context) && (($context["oct_popup_found_cheaper_status"] ?? null) == "on")) &&  !twig_test_empty(($context["can_buy"] ?? null)))) {
                // line 337
                echo "                \t\t\t<div class=\"rm-product-found-cheaper blue-link\" onclick=\"octPopupFoundCheaper('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["oct_product_cheaper"] ?? null);
                echo "</div>
                \t\t\t";
            }
            // line 339
            echo "                        </div>
                        ";
        }
        // line 341
        echo "                        ";
        if ( !twig_test_empty(($context["can_buy"] ?? null))) {
            // line 342
            echo "                            ";
            if ((((($context["options"] ?? null) || (($context["minimum"] ?? null) > 1)) || ($context["points"] ?? null)) || ($context["reward"] ?? null))) {
                // line 343
                echo "                            <div id=\"rm-product-options-box\" class=\"rm-product-center-options\">
                                ";
                // line 344
                if (($context["options"] ?? null)) {
                    // line 345
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 346
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 346) == "select")) {
                            // line 347
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                            // line 348
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 348);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 348);
                            echo "
                                                    ";
                            // line 349
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 349)) {
                                // line 350
                                echo "                                                        <span class=\"required\">*</span>
                                                    ";
                            }
                            // line 352
                            echo "                                                </label>
                                                <select name=\"option[";
                            // line 353
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 353);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 353);
                            echo "\" class=\"rm-select form-control\">
                                                    <option value=\"\">";
                            // line 354
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                                                    ";
                            // line 355
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 355));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 356
                                echo "                                                        <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 356);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 356);
                                echo "
                                                            ";
                                // line 357
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 357)) {
                                    // line 358
                                    echo "                                                                (";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 358);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 358);
                                    echo ")
                                                            ";
                                }
                                // line 360
                                echo "                                                        </option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 362
                            echo "                                                </select>
                                            </div>
                                        ";
                        }
                        // line 365
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 365) == "radio")) {
                            // line 366
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\">";
                            // line 367
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 367);
                            echo "
                                                    ";
                            // line 368
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 368)) {
                                // line 369
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 370
                            echo "                                                </label>
                                                <div id=\"input-option";
                            // line 371
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 371);
                            echo "\" class=\"options-box d-flex\">
                                                    ";
                            // line 372
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 372));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 373
                                echo "                                                        <div class=\"radio\">
                                                            <label
                                                                data-toggle=\"tooltip\"
                                                                data-trigger=\"hover\"
                                                                class=\"option optid-";
                                // line 377
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 377);
                                echo " not-selected ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 377)) {
                                    echo " radio-img";
                                } else {
                                    echo "rm-radio";
                                }
                                echo "\"
                                                                title=\"";
                                // line 378
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 378);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 378)) {
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 378);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 378);
                                }
                                echo "\">
                                                                <input type=\"radio\" name=\"option[";
                                // line 379
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 379);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 379);
                                echo "\" class=\"input-radio\"/>
                                                                ";
                                // line 380
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 380)) {
                                    // line 381
                                    echo "                                                                    <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 381);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 381);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 381)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 381);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 381);
                                        echo " ";
                                    }
                                    echo "\" width=\"50\" height=\"50\" />
                                                                ";
                                } else {
                                    // line 383
                                    echo "                                                                    ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 383);
                                    echo "
                                                                ";
                                }
                                // line 385
                                echo "                                                            </label>
                                                            <script>
                                                                \$(document).ready(function() {
                                                                    \$(document).on('touchstart click', 'label.optid-";
                                // line 388
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 388);
                                echo "', function(event) {
                                                                        \$('label.optid-";
                                // line 389
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 389);
                                echo "').removeClass('selected').addClass('not-selected');
                                                                        \$(this).removeClass('not-selected').addClass('selected');
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 396
                            echo "                                                </div>
                                            </div>
                                        ";
                        }
                        // line 399
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 399) == "checkbox")) {
                            // line 400
                            echo "                                            <div class=\"form-checkbox-group\">
                                                <div class=\"rm-control-label\">";
                            // line 401
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 401);
                            echo "
                                                    ";
                            // line 402
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 402)) {
                                // line 403
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 404
                            echo "                                                </div>
                                                <div id=\"input-option";
                            // line 405
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 405);
                            echo "\">
                                                    ";
                            // line 406
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 406));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 407
                                echo "                                                        <div class=\"checkbox\">
                                                            <label>
                                                                ";
                                // line 409
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 409)) {
                                    echo "<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 409);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 409);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 409)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 409);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 409);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" width=\"50\" height=\"50\" />";
                                }
                                // line 410
                                echo "                                                                <input type=\"checkbox\" id=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 410);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 410);
                                echo "]\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 410);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 410);
                                echo "\" class=\"rm-form-checkbox-input\"/>
                                                                <span class=\"check-box\"></span>
                                                                ";
                                // line 412
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 412);
                                echo "
                                                                ";
                                // line 413
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 413)) {
                                    // line 414
                                    echo "                                                                    (";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 414);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 414);
                                    echo ")
                                                                ";
                                }
                                // line 416
                                echo "                                                            </label>
                                                        </div>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 419
                            echo "                                                </div>
                                            </div>
                                        ";
                        }
                        // line 422
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 422) == "text")) {
                            // line 423
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                            // line 424
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 424);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 424);
                            echo "
                                                    ";
                            // line 425
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 425)) {
                                // line 426
                                echo "                                                        <span class=\"required\">*</span>
                                                    ";
                            }
                            // line 428
                            echo "                                                </label>
                                                <input type=\"text\" name=\"option[";
                            // line 429
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 429);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 429);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 429);
                            echo "\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 429);
                            echo "\" class=\"form-control\"/>
                                            </div>
                                        ";
                        }
                        // line 432
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 432) == "textarea")) {
                            // line 433
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                            // line 434
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 434);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 434);
                            echo "
                                                    ";
                            // line 435
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 435)) {
                                // line 436
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 437
                            echo "                                                </label>
                                                <textarea name=\"option[";
                            // line 438
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 438);
                            echo "]\" rows=\"5\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 438);
                            echo "\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 438);
                            echo "\" class=\"form-control\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 438);
                            echo "</textarea>
                                            </div>
                                        ";
                        }
                        // line 441
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 441) == "file")) {
                            // line 442
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\">";
                            // line 443
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 443);
                            echo "
                                                    ";
                            // line 444
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 444)) {
                                // line 445
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 446
                            echo "                                                </label>
                                                <button type=\"button\" id=\"button-upload";
                            // line 447
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 447);
                            echo "\" data-loading-text=\"";
                            echo ($context["text_loading"] ?? null);
                            echo "\" class=\"rm-btn dark\">
                                                    <i class=\"fa fa-upload\"></i>
                                                    ";
                            // line 449
                            echo ($context["button_upload"] ?? null);
                            echo "</button>
                                                <input type=\"hidden\" name=\"option[";
                            // line 450
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                            echo "]\" value=\"\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 450);
                            echo "\"/>
                                            </div>
                                        ";
                        }
                        // line 453
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 453) == "date")) {
                            // line 454
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                            // line 455
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 455);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 455);
                            echo "
                                                    ";
                            // line 456
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 456)) {
                                // line 457
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 458
                            echo "                                                </label>
                                                <div class=\"input-group date\">
                                                    <input type=\"text\" name=\"option[";
                            // line 460
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 460);
                            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 460);
                            echo "\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"rm-btn rm-input-with-btn dark\" type=\"button\">
                                                            <i class=\"fa fa-calendar\"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 469
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 469) == "datetime")) {
                            // line 470
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                            // line 471
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 471);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 471);
                            echo "
                                                    ";
                            // line 472
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 472)) {
                                // line 473
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 474
                            echo "                                                </label>
                                                <div class=\"input-group datetime\">
                                                    <input type=\"text\" name=\"option[";
                            // line 476
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 476);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 476);
                            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 476);
                            echo "\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                                                        <button type=\"button\" class=\"rm-btn rm-input-with-btn dark\">
                                                            <i class=\"fa fa-calendar\"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 485
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 485) == "time")) {
                            // line 486
                            echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                            // line 487
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 487);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 487);
                            echo "
                                                    ";
                            // line 488
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 488)) {
                                // line 489
                                echo "                                                        <span class=\"required\">*</span>";
                            }
                            // line 490
                            echo "                                                </label>
                                                <div class=\"input-group time\">
                                                    <input type=\"text\" name=\"option[";
                            // line 492
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 492);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 492);
                            echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 492);
                            echo "\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                                                        <button type=\"button\" class=\"rm-btn rm-input-with-btn dark\">
                                                            <i class=\"fa fa-clock\"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 501
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 502
                    echo "                                ";
                }
                // line 503
                echo "                                ";
                if ((($context["minimum"] ?? null) > 1)) {
                    // line 504
                    echo "                                    <div class=\"rm-product-option-minquant\">";
                    echo ($context["text_minimum"] ?? null);
                    echo "</div>
                                ";
                }
                // line 506
                echo "                                ";
                if (($context["points"] ?? null)) {
                    // line 507
                    echo "                                    <div class=\"rm-product-option-bonus\">";
                    echo ($context["text_points"] ?? null);
                    echo "
                                        ";
                    // line 508
                    echo ($context["points"] ?? null);
                    echo "</div>
                                ";
                }
                // line 510
                echo "                                ";
                if (($context["reward"] ?? null)) {
                    // line 511
                    echo "                                    <div class=\"rm-product-option-bonus\">";
                    echo ($context["text_reward"] ?? null);
                    echo "
                                        ";
                    // line 512
                    echo ($context["reward"] ?? null);
                    echo "</div>
                                ";
                }
                // line 514
                echo "                            </div>
                            ";
            }
            // line 516
            echo "                            ";
            if (($context["recurrings"] ?? null)) {
                // line 517
                echo "                                <div class=\"rm-product-option mt-3\">
                                    <div class=\"rm-control-label\">";
                // line 518
                echo ($context["text_payment_recurring"] ?? null);
                echo "
                                        <span class=\"required\">*</span></div>
                                    <div class=\"form-group\">
                                        <select name=\"recurring_id\" class=\"rm-select form-control\">
                                            <option value=\"\">";
                // line 522
                echo ($context["text_select"] ?? null);
                echo "</option>
                                            ";
                // line 523
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 524
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 524);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 524);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 526
                echo "                                        </select>
                                        <div class=\"help-block\" id=\"recurring-description\"></div>
                                    </div>
                                </div>
                            ";
            }
            // line 531
            echo "                            <div class=\"rm-product-center-buttons\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <div class=\"d-flex align-items-center justify-content-between\">
                                        <div class=\"btn-group rm-product-quantity\" role=\"group\">
                                            <input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"";
            // line 535
            echo ($context["minimum"] ?? null);
            echo "\" id=\"input-quantity\" aria-label=\"Quantity\"/>
                                            <div class=\"d-flex flex-column\">
                                                <button type=\"button\" aria-label=\"Plus\" class=\"rm-product-quantity-btn-plus d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(false, true, false);\">
                                                    <span></span></button>
                                                <div class=\"rm-product-quantity-btn-border\"></div>
                                                <button type=\"button\" aria-label=\"Minus\" class=\"rm-product-quantity-btn-minus d-flex align-items-center justify-content-center\" onclick=\"updateValueProduct(true, false, false);\">
                                                    <span></span></button>
                                            </div>
                                            <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 543
            echo ($context["product_id"] ?? null);
            echo "\"/>
                                            <input type=\"hidden\" id=\"min-product-quantity\" value=\"";
            // line 544
            echo ($context["minimum"] ?? null);
            echo "\" name=\"min_quantity\">
                                            <input type=\"hidden\" id=\"max-product-quantity\" value=\"";
            // line 545
            echo ($context["max_quantity"] ?? null);
            echo "\" name=\"max_quantity\">
                                        </div>
                                    </div>
                                    <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 548
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"rm-btn dark rm-product-btn rm-product-btn-cart d-flex align-items-center justify-content-center w-100\">
                                        <span class=\"rm-cart-btn-icon\"></span>
                                        <span class=\"rm-btn-text\">";
            // line 550
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                    </button>
                                </div>
                                ";
            // line 553
            if (array_key_exists("oct_popup_purchase_status", $context)) {
                // line 554
                echo "                    \t\t\t<button type=\"button\" class=\"rm-btn secondary rm-product-btn button-fast-order rm-product-one-click-btn w-100 text-center d-none d-sm-block\" onclick=\"octPopPurchase('";
                echo ($context["product_id"] ?? null);
                echo "')\"><span class=\"rm-btn-text\">";
                echo ($context["oct_product_quickbuy"] ?? null);
                echo "</span></button>
                    \t\t\t";
            }
            // line 556
            echo "                            </div>
                        ";
        }
        // line 558
        echo "                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"rm-product-right\">
                        ";
        // line 562
        if ( !twig_test_empty(($context["can_buy"] ?? null))) {
            // line 563
            echo "            \t\t\t";
            echo ($context["oct_byoneclick"] ?? null);
            echo "
            \t\t\t";
        }
        // line 565
        echo "                        ";
        if (($context["oct_attributs"] ?? null)) {
            // line 566
            echo "                        <div class=\"rm-product-attr\">
                            <div class=\"rm-product-attr-title\">
                                <span class=\"rm-product-right-title\">";
            // line 568
            echo ($context["oct_product_attributes"] ?? null);
            echo "</span>
                                <span class=\"blue-link\" id=\"attr-quick-view\" onclick=\"\$('a[href=\\'#product_attributes\\']').trigger('click');scrollToElement('.tab-content');\">";
            // line 569
            echo ($context["oct_product_attributes_seeall"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"rm-product-attr-list\">
                                ";
            // line 572
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_attributs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 573
                echo "                                <div class=\"rm-product-attr-list-item d-flex d-sm-block\">
                                    <div>";
                // line 574
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 574);
                echo "</div>
                                    <div>";
                // line 575
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 575);
                echo "</div>
                                </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 578
            echo "                            </div>
                        </div>
                        ";
        }
        // line 581
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_advantage", [], "any", true, true, false, 581) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_advantage", [], "any", false, false, false, 581) == "on")) && (array_key_exists("oct_product_advantages", $context) &&  !twig_test_empty(($context["oct_product_advantages"] ?? null))))) {
            // line 582
            echo "                            <div class=\"rm-product-advantages\">
                                ";
            // line 583
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_advantages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
                // line 584
                echo "                                <span class=\"rm-product-advantages-item d-flex align-items-center\">
                                    <span class=\"rm-product-advantages-item-image\">
                                        <i class=\"";
                // line 586
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 586);
                echo "\"></i>
                                    </span>
                                    <span class=\"rm-product-advantages-item-info d-flex flex-column\">
                                        <a href=\"";
                // line 589
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 589);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 589) && twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 589))) {
                    echo " data-rel=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 589);
                    echo "\" ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["advantage"], "link", [], "any", false, false, false, 589) != "javascript:;")) {
                    echo " target=\"_blank\" ";
                }
                echo " class=\"rm-product-advantages-item-title";
                if (twig_get_attribute($this->env, $this->source, $context["advantage"], "popup", [], "any", false, false, false, 589)) {
                    echo " agree";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "title", [], "any", false, false, false, 589);
                echo "</a>
                                        <span class=\"rm-product-advantages-item-text\">";
                // line 590
                echo twig_get_attribute($this->env, $this->source, $context["advantage"], "text", [], "any", false, false, false, 590);
                echo "</span>
                                    </span>
                                </span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 594
            echo "                            </div>
                        ";
        }
        // line 596
        echo "    \t\t\t\t\t";
        if ((array_key_exists("product_js_button", $context) && ($context["product_js_button"] ?? null))) {
            // line 597
            echo "    \t\t\t\t        <div class=\"rm-product-social-buttons\">";
            echo ($context["product_js_button"] ?? null);
            echo "</div>
    \t\t\t\t    ";
        }
        // line 599
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"row row-padding-top rm-product-tabs\">
            <div class=\"col-12\">
                <ul id=\"oct-tabs\" class=\"nav nav-tabs\">
                    ";
        // line 606
        if (($context["description"] ?? null)) {
            // line 607
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center active\" data-toggle=\"tab\" href=\"#product_description\"><span class=\"nav-link-text\">";
            // line 608
            echo ($context["oct_product_maintab"] ?? null);
            echo "</span></a>
                        </li>
                    ";
        }
        // line 611
        echo "                    ";
        if (($context["attribute_groups"] ?? null)) {
            // line 612
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center";
            // line 613
            if ( !($context["description"] ?? null)) {
                echo " active";
            }
            echo "\" data-toggle=\"tab\" href=\"#product_attributes\"><span class=\"nav-link-text\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</span></a>
                        </li>
                    ";
        }
        // line 616
        echo "                    ";
        if (($context["review_status"] ?? null)) {
            // line 617
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center";
            // line 618
            if (( !($context["description"] ?? null) &&  !($context["attribute_groups"] ?? null))) {
                echo " active";
            }
            echo "\" data-toggle=\"tab\" href=\"#product_reviews\">";
            echo ($context["tab_review"] ?? null);
            echo "</a>
                        </li>
                    ";
        }
        // line 621
        echo "                    ";
        if (($context["oct_product_faq"] ?? null)) {
            // line 622
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center\" data-toggle=\"tab\" href=\"#product_questions\">";
            // line 623
            echo ($context["tab_oct_faq"] ?? null);
            echo "</a>
                        </li>
                    ";
        }
        // line 626
        echo "                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 626) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 626)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 626) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 626)))) {
            // line 627
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link d-flex align-items-center\" data-toggle=\"tab\" href=\"#product_dop_tab\"><span class=\"nav-link-text\">";
            // line 628
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 628);
            echo "</span></a>
                        </li>
                    ";
        }
        // line 631
        echo "                    ";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 632
            echo "                        ";
            $context["key"] = 0;
            // line 633
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 634
                echo "                            ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 635
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link d-flex align-items-center\" data-toggle=\"tab\" href=\"#product_extra_tab-";
                // line 636
                echo ($context["key"] ?? null);
                echo "\"><span class=\"nav-link-text\">";
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "title", [], "any", false, false, false, 636);
                echo "</span></a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 639
            echo "                    ";
        }
        // line 640
        echo "                </ul>
            </div>
        </div>
        <script>
        \$.fn.octTabbing=function(t){return this.each(function(){\$(this).on(\"click\",function(t){let i=0;\$(this).prevAll().each(function(){i+=\$(this).width()});document.getElementById(\"oct-tabs\").scrollWidth;let n=i-(\$(this).parent().width()-\$(this).width())/2;n<0&&(n=0),\$(this).parent().animate({scrollLeft:n},300)})})};
        \$('#oct-tabs li').octTabbing();
        </script>
        <div class=\"tab-content\">
            ";
        // line 648
        if (($context["description"] ?? null)) {
            // line 649
            echo "                <div class=\"tab-pane rm-content rm-product-tabs-description show active\" id=\"product_description\">
                    ";
            // line 650
            echo ($context["description"] ?? null);
            echo "
                    ";
            // line 651
            if (($context["tags"] ?? null)) {
                // line 652
                echo "                        <p class=\"rm-product-tags\">";
                echo ($context["text_tags"] ?? null);
                echo "
                            ";
                // line 653
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 654
                    echo "                                ";
                    if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                        // line 655
                        echo "                                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 655);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 655);
                        echo "</a>,
                                ";
                    } else {
                        // line 657
                        echo "                                    <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 657);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 657);
                        echo "</a>
                                ";
                    }
                    // line 659
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 660
                echo "                        </p>
                    ";
            }
            // line 662
            echo "                </div>
            ";
        }
        // line 664
        echo "            ";
        if (($context["attribute_groups"] ?? null)) {
            // line 665
            echo "                <div class=\"tab-pane rm-content rm-product-tabs-attributes";
            if ( !($context["description"] ?? null)) {
                echo " show active";
            }
            echo "\" id=\"product_attributes\">
                    ";
            // line 666
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 667
                echo "                        <div class=\"rm-product-tabs-attributtes-list\">
                            <div class=\"rm-product-tabs-attributtes-list-title\">";
                // line 668
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 668);
                echo "</div>
                            ";
                // line 669
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 669));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 670
                    echo "                                <div class=\"rm-product-tabs-attributtes-list-item d-flex justify-content-between\">
                                    <div>";
                    // line 671
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 671);
                    echo "</div>
                                    <div>";
                    // line 672
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 672);
                    echo "</div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 675
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 677
            echo "                </div>
            ";
        }
        // line 679
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 680
            echo "                <div class=\"tab-pane rm-content rm-product-tabs-reviews rm-store-reviews";
            if (( !($context["description"] ?? null) &&  !($context["attribute_groups"] ?? null))) {
                echo " show active";
            }
            echo "\" id=\"product_reviews\">
                    <div class=\"rm-store-reviews-top d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"d-flex flex-column align-items-start\">
                            <div class=\"rm-store-reviews-top-title align-items-center";
            // line 683
            if ((($context["total_reviews"] ?? null) == 0)) {
                echo " d-none d-md-flex";
            }
            echo "\">";
            echo ($context["tab_review_view"] ?? null);
            echo "</div>
                            <div class=\"rm-store-reviews-top-value";
            // line 684
            if ((($context["total_reviews"] ?? null) == 0)) {
                echo " d-none d-md-block";
            }
            echo "\">";
            echo ($context["oct_rating"] ?? null);
            echo "<span>/ 5</span></div>
                            <div class=\"rm-store-reviews-top-value-text";
            // line 685
            if ((($context["total_reviews"] ?? null) == 0)) {
                echo " d-none d-md-block";
            }
            echo "\">";
            echo ($context["tab_review_c"] ?? null);
            echo "</div>
                            ";
            // line 686
            if (($context["review_guest"] ?? null)) {
                // line 687
                echo "                                <button type=\"button\" class=\"rm-btn dark\" data-toggle=\"modal\" data-target=\"#rm-popup-review\">";
                echo ($context["text_write"] ?? null);
                echo "</button>
                                <div class=\"modal\" id=\"rm-popup-review\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered wide\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <div class=\"modal-title\">";
                // line 692
                echo ($context["text_write"] ?? null);
                echo "</div>
                                                <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                                                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
                                                </button>
                                            </div>
                                            <div class=\"modal-body\">
                                                <form id=\"form-review\" class=\"d-flex flex-column flex-md-row\">
                                                    <div class=\"modal-body-left d-flex flex-column align-items-center\">
                                                        <img src=\"";
                // line 701
                echo ($context["thumb"] ?? null);
                echo "\" class=\"modal-body-img d-none d-md-block mx-auto\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                                        <div class=\"modal-product-title\">";
                // line 702
                echo ($context["heading_title"] ?? null);
                echo "</div>
                                                        <div class=\"rm-review-block mt-4 mt-md-auto text-center\">
                                                            <div class=\"control-label\">";
                // line 704
                echo ($context["text_oct_review"] ?? null);
                echo "</div>
                                                            <div class=\"rm-module-rating-stars d-flex align-items-center justify-content-center\">
                                                                <label class=\"rm-module-rating-star\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"1\"/></label>
                                                                <label class=\"rm-module-rating-star\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"2\"/></label>
                                                                <label class=\"rm-module-rating-star\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"3\"/></label>
                                                                <label class=\"rm-module-rating-star\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"4\"/></label>
                                                                <label class=\"rm-module-rating-star\"><input class=\"d-none\" type=\"radio\" name=\"rating\" value=\"5\"/></label>
                                                            </div>
                                                            <script>
                                                                \$(document).ready(function() {
                                                                    \$('#form-review .rm-module-rating-star').on('click', function() {
                                                                        if (\$(this).hasClass('rm-module-rating-star-is')) {
                                                                            \$(this).nextAll().removeClass('rm-module-rating-star-is');
                                                                        } else {
                                                                            \$(this).addClass('rm-module-rating-star-is');
                                                                            \$(this).prevAll().addClass('rm-module-rating-star-is');
                                                                        }
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-body-right\">
                                                        <div class=\"form-group\">
                                                            <input type=\"text\" name=\"name\" class=\"form-control\" id=\"InputName\" placeholder=\"";
                // line 728
                echo ($context["entry_name"] ?? null);
                echo "\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <textarea id=\"input-review\" name=\"text\" class=\"form-control\" placeholder=\"";
                // line 731
                echo ($context["oct_product_yourreview"] ?? null);
                echo "\"></textarea>
                                                        </div>
                                                        <div class=\"rm-modal-comment\">";
                // line 733
                echo ($context["text_note"] ?? null);
                echo "</div>
                                                        <div class=\"form-group\">
                                                            ";
                // line 735
                echo ($context["captcha"] ?? null);
                echo "
                                                        </div>
                                                        <button type=\"button\" id=\"button-review\" class=\"rm-btn dark\">";
                // line 737
                echo ($context["button_continue"] ?? null);
                echo "</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 745
            echo "                        </div>
                        <div class=\"rm-product-reviews-top-right";
            // line 746
            if ((($context["total_reviews"] ?? null) == 0)) {
                echo " d-none d-md-block";
            }
            echo "\">
                            ";
            // line 747
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_raiting_stats"] ?? null));
            foreach ($context['_seq'] as $context["oct_key"] => $context["oct_raiting_stat"]) {
                // line 748
                echo "                                <div class=\"rm-product-reviews-rating-item d-flex align-items-center\">
                                    <div class=\"rm-product-reviews-rating-stars d-flex align-items-center\">
                                        <span class=\"rm-module-rating-star";
                // line 750
                if (($context["oct_key"] >= 5)) {
                    echo " rm-module-rating-star-is";
                }
                echo "\"></span>
                                        <span class=\"rm-module-rating-star";
                // line 751
                if (($context["oct_key"] >= 4)) {
                    echo "  rm-module-rating-star-is";
                }
                echo "\"></span>
                                        <span class=\"rm-module-rating-star";
                // line 752
                if (($context["oct_key"] >= 3)) {
                    echo "  rm-module-rating-star-is";
                }
                echo "\"></span>
                                        <span class=\"rm-module-rating-star";
                // line 753
                if (($context["oct_key"] >= 2)) {
                    echo "  rm-module-rating-star-is";
                }
                echo "\"></span>
                                        <span class=\"rm-module-rating-star";
                // line 754
                if (($context["oct_key"] >= 1)) {
                    echo "  rm-module-rating-star-is";
                }
                echo "\"></span>
                                    </div>
                                    <div class=\"rm-product-reviews-rating-line\">
                                        <span class=\"rm-product-reviews-rating-line-value\" style=\"width: ";
                // line 757
                echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "raiting", [], "any", false, false, false, 757);
                echo "%;\"></span>
                                    </div>
                                    <div class=\"rm-product-reviews-rating-value text-center\">";
                // line 759
                echo twig_get_attribute($this->env, $this->source, $context["oct_raiting_stat"], "sum", [], "any", false, false, false, 759);
                echo "</div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['oct_key'], $context['oct_raiting_stat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 762
            echo "                        </div>
                    </div>
                    <div id=\"review\">
                        ";
            // line 765
            if ( !twig_test_empty(($context["oct_reviews_list"] ?? null))) {
                // line 766
                echo "                            ";
                echo ($context["oct_reviews_list"] ?? null);
                echo "
                        ";
            }
            // line 768
            echo "                    </div>
                </div>
            ";
        }
        // line 771
        echo "            ";
        if ((array_key_exists("oct_product_faq", $context) && ($context["oct_product_faq"] ?? null))) {
            // line 772
            echo "            ";
            echo ($context["oct_product_faq"] ?? null);
            echo "
            ";
        }
        // line 774
        echo "            ";
        if (((twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", true, true, false, 774) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "title", [], "any", false, false, false, 774)) && (twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", true, true, false, 774) && twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 774)))) {
            // line 775
            echo "    \t\t\t<div class=\"tab-pane rm-content rm-product-tabs-description\" id=\"product_dop_tab\">
                    ";
            // line 776
            echo twig_get_attribute($this->env, $this->source, ($context["dop_tab"] ?? null), "text", [], "any", false, false, false, 776);
            echo "
                </div>
            ";
        }
        // line 779
        echo "    \t\t";
        if (($context["oct_product_extra_tabs"] ?? null)) {
            // line 780
            echo "    \t        ";
            $context["key"] = 0;
            // line 781
            echo "    \t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_product_extra_tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra_tab"]) {
                // line 782
                echo "    \t            ";
                $context["key"] = (($context["key"] ?? null) + 1);
                // line 783
                echo "    \t\t\t\t\t<div class=\"tab-pane rm-content rm-product-tabs-description\" id=\"product_extra_tab-";
                echo ($context["key"] ?? null);
                echo "\">
    \t                    ";
                // line 784
                echo twig_get_attribute($this->env, $this->source, $context["extra_tab"], "text", [], "any", false, false, false, 784);
                echo "
    \t                </div>
    \t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 787
            echo "    \t    ";
        }
        // line 788
        echo "        </div>
    </main>
    ";
        // line 790
        if (($context["products"] ?? null)) {
            // line 791
            echo "        ";
            echo ($context["products"] ?? null);
            echo "
    ";
        }
        // line 793
        echo "    ";
        if (($context["oct_related_articles"] ?? null)) {
            // line 794
            echo "    <div class=\"row row-padding-top\">
        <div class=\"col-12 rm-module-header\">
\t\t\t<span>";
            // line 796
            echo ($context["oct_product_related_articles"] ?? null);
            echo "</span>
\t\t</div>
    </div>
    <div class=\"row no-gutters\">
        ";
            // line 800
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_related_articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 801
                echo "        <div class=\"col-12 col-md-6 col-xl-3 rm-news-col\">
            <div class=\"rm-news-item d-flex flex-column justify-content-between h-100\">
                <div class=\"rm-news-item-top\">
                    <div class=\"rm-news-item-date\">";
                // line 804
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 804);
                echo "</div>
                    <a href=\"";
                // line 805
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 805);
                echo "\" class=\"rm-news-item-photo\">
\t\t\t\t\t\t<img src=\"";
                // line 806
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 806);
                echo "\"";
                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                    echo " data-srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 806);
                    echo " 100w\" srcset=\"";
                    echo ($context["oct_lazy_image"] ?? null);
                    echo " 100w\" sizes=\"100vw\" class=\"img-fluid oct-lazy\"";
                } else {
                    echo " class=\"img-fluid\"";
                }
                echo " alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 806);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 806);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "width", [], "any", false, false, false, 806);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "height", [], "any", false, false, false, 806);
                echo "\" />
                    </a>
                </div>
                <div class=\"rm-news-item-bottom d-flex flex-column justify-content-between h-100\">
\t\t\t\t\t<a href=\"";
                // line 810
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 810);
                echo "\" class=\"rm-news-item-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 810);
                echo "</a>
\t\t\t\t\t<div class=\"rm-news-item-text\">
\t\t\t\t\t\t";
                // line 812
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 812);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 818
            echo "    </div>
    ";
        }
        // line 820
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
<script>
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
</script>
<script>
    \$('body').on('click', '#button-cart', function(){
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            cache: false,
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        let errorOption = '';
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                            errorOption += '<div class=\"alert-text-item\">' + json['error']['option'][i] + '</div>';
                        }
                        rmNotify('danger', errorOption);
                    }

                    if (json['error']['error_warning']) {
                        rmNotify('danger', json['error']['error_warning']);
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    if (json['isPopup']) {
                        octPopupCart();
                    } else {
                        rmNotify('success', json['success']);
                    }

                    if (typeof octYandexEcommerce == 'function') {
                        octYandexEcommerce(json);
                    }

                    // Need to set timeout otherwise it wont update the total
                    setTimeout(function() {
            \t\t\t\t\t  \$('#oct-cart-quantity, .rm-header-cart-quantity, #mobile_cart_index, .oct-fixed-bar-quantity-cart').html(json['total_products']);
                        \$('.rm-header-cart-text').html(json['total_amount']);
                    }, 100);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
</script>
<script>
    ";
        // line 914
        if ((array_key_exists("oct_datetimepicker", $context) && ($context["oct_datetimepicker"] ?? null))) {
            // line 915
            echo "        \$('.date').datetimepicker({
            language: '";
            // line 916
            echo ($context["datepicker"] ?? null);
            echo "',
            pickTime: false,
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar-alt',
                up: 'fa fa-arrow-up',
                down: 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-calendar-check',
                clear: 'fa fa-trash-alt',
                close: 'fa fa-times'
            }
        });

        \$('.datetime').datetimepicker({
            language: '";
            // line 932
            echo ($context["datepicker"] ?? null);
            echo "',
            pickDate: true,
            pickTime: true,
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar-alt',
                up: 'fa fa-arrow-up',
                down: 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-calendar-check',
                clear: 'fa fa-trash-alt',
                close: 'fa fa-times'
            }
        });

        \$('.time').datetimepicker({
            language: '";
            // line 949
            echo ($context["datepicker"] ?? null);
            echo "',
            pickDate: false,
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar-alt',
                up: 'fa fa-arrow-up',
                down: 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-calendar-check',
                clear: 'fa fa-trash-alt',
                close: 'fa fa-times'
            }
        });
    ";
        }
        // line 964
        echo "
    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
</script>
<script>
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('fast');

        \$('#review').load(this.href);

        \$('#review').fadeIn('fast');

        scrollToElement('#review');
    });

    \$(\"#InputName, #input-review\").on(\"change paste keyup\", function() {
        \$(this).removeClass('error_style');
    });

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 1036
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            cache: false,
            data: \$('#form-review').serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    let errorOption = '';

                    \$.each(json['error'], function(i, val) {
                        \$('#rm-popup-review [name=\"' + i + '\"]').addClass('error_style');
                        errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                    });

                    rmNotify('danger', errorOption);
                }

                if (json['success']) {
                    rmNotify('success', json['success']);
                    \$('#rm-popup-review').modal('hide');
                    \$('#form-review input[name=\\'name\\']').val('');
                    \$('#form-review textarea[name=\\'text\\']').val('');
                    \$('#rm-popup-review input[name=\\'rating\\']:checked').prop('checked', false);
                    \$('#rm-popup-review .rm-module-rating-star-is').removeClass('rm-module-rating-star-is');
                }
            }
        });
    });

    \$('#input-quantity').on('change', function(e) {
        updateValueProduct(false, false, true);
    });

    function updateValueProduct(minus, plus, manual) {
        let min = parseInt(\$('#input-quantity').val());
        let currentMinimum = parseInt(\$('#min-product-quantity').val());
        let max = parseInt(\$('#max-product-quantity').val());

        if (max === 0)
            return;

        if (minus && min > 1) {

            if (currentMinimum >= min) {
                \$(\"#input-quantity\").val(currentMinimum);
                updateProductPrice();
                return;
            } else if (min > max) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            }

            \$('#input-quantity').val(~~ \$('#input-quantity').val() - 1);
        }

        if (plus) {
            if (max && min > max - 1) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            } else if (currentMinimum > min) {
                \$('#input-quantity').val(currentMinimum);
                updateProductPrice();
                return;
            }

            \$('#input-quantity').val(~~ \$('#input-quantity').val() + 1);
        }

        if (manual) {
            if (currentMinimum >= min) {
                \$('#input-quantity').val(currentMinimum);
                updateProductPrice();
                return;
            } else if (min > max) {
                \$('#input-quantity').val(max);
                updateProductPrice();
                return;
            }

        }

        updateProductPrice();
    }

    \$('#rm-product-options-box input, #rm-product-options-box select').on('change', function() {
        updateProductPrice();
    });

    ";
        // line 1134
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_zoom", [], "any", true, true, false, 1134) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_zoom", [], "any", false, false, false, 1134))) {
            // line 1135
            echo "    \$(document).ready(function() {
        \$(\".oct-gallery\").zoom();
    });
    ";
        }
        // line 1139
        echo "
    ";
        // line 1140
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_gallery", [], "any", true, true, false, 1140) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "product_gallery", [], "any", false, false, false, 1140) == "on"))) {
            // line 1141
            echo "        \$('.oct-gallery').on('click',function(e) {
            e.preventDefault();
            \$.ajax({
                url: 'index.php?route=octemplates/main/oct_functions/octGallery',
                type: 'post',
                dataType: 'html',
                cache: false,
                data: { product_id: \"";
            // line 1148
            echo ($context["product_id"] ?? null);
            echo "\", goto: \$(this).attr('rel') },
                beforeSend: function() {},
                complete: function() {},
                success: function(data) {
                    \$('.modal-holder').html(data);
                    \$('#rm-product-gallery').modal('show');
                }
            });
        });
    ";
        }
        // line 1158
        echo "
    function updateProductPrice() {
        \$.ajax({
            type: 'post',
            url: 'index.php?route=octemplates/main/oct_functions/updatePrices',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select'),
            dataType: 'json',
            cache: false,
            success: function(json) {
                ";
        // line 1167
        if (($context["special"] ?? null)) {
            // line 1168
            echo "                    \$('.rm-product-center-price-old').html(json['price']);
                    \$('.rm-product-center-price > span').html(json['special']);
                ";
        } else {
            // line 1171
            echo "                    \$('.rm-product-center-price > span').html(json['price']);
                ";
        }
        // line 1173
        echo "
                ";
        // line 1174
        if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
            // line 1175
            echo "                    \$('#main-product-you-save').html(json['you_save']);
                ";
        }
        // line 1177
        echo "
                ";
        // line 1178
        if (($context["tax"] ?? null)) {
            // line 1179
            echo "                    \$('.rm-product-center-price-tax > span').html(json['tax']);
                ";
        }
        // line 1181
        echo "        }
    });
}
";
        // line 1184
        if ((($context["minimum"] ?? null) > 1)) {
            // line 1185
            echo "    updateProductPrice();
";
        }
        // line 1187
        echo "</script>
";
        // line 1188
        if (($context["oct_is_youtube"] ?? null)) {
            // line 1189
            echo "    <script>
        function findVideos() {
            let videos = document.querySelectorAll('.rm-video');

            for (let i = 0; videos.length > i; i++) {
                setupVideo(videos[i]);
            }
        }

        function setupVideo(video) {
            let link = video.querySelector('.rm-video__link');
            let media = video.querySelector('.rm-video__media');
            let button = video.querySelector('.rm-video__button');
            let id = parseMediaURL(media);

            video.addEventListener('click', () => {
                let iframe = createIframe(id);

                link.remove();
                button.remove();
                video.appendChild(iframe);
            });

            link.removeAttribute('href');
            video.classList.add('rm-video--enabled');
        }

        function parseMediaURL(media) {
            let regexp = /https:\\/\\/i\\.ytimg\\.com\\/vi\\/([a-zA-Z0-9_-]+)\\/maxresdefault\\.jpg/i;
            let url = media.src;
            let match = url.match(regexp);

            return match[1];
        }

        function createIframe(id) {
            let iframe = document.createElement('iframe');

            iframe.setAttribute('allowfullscreen', '');
            iframe.setAttribute('allow', 'autoplay');
            iframe.setAttribute('src', generateURL(id));
            iframe.classList.add('rm-video__media');

            return iframe;
        }

        function generateURL(id) {
            let query = '?rel=0&showinfo=0&autoplay=1';

            return 'https://www.youtube.com/embed/' + id + query;
        }

        findVideos();
    </script>
";
        }
        // line 1244
        if (((array_key_exists("oct_analytics_yandex_ecommerce", $context) && ($context["oct_analytics_yandex_ecommerce"] ?? null)) && (array_key_exists("oct_analytics_yandex_container", $context) && ($context["oct_analytics_yandex_container"] ?? null)))) {
            // line 1245
            echo "<script>
\$(document).ready(function() {
    if(typeof ";
            // line 1247
            echo ($context["oct_analytics_yandex_container"] ?? null);
            echo " != 'undefined') {
        ";
            // line 1248
            echo ($context["oct_analytics_yandex_container"] ?? null);
            echo ".push({
            \"ecommerce\": {
                \"detail\": {
                    \"products\": [{
                        \"id\": \"";
            // line 1252
            echo ($context["product_id"] ?? null);
            echo "\",
                        \"name\" : \"";
            // line 1253
            echo ($context["oct_analytics_yandex_product_name"] ?? null);
            echo "\",
                        \"price\": \"";
            // line 1254
            if (($context["oct_analytics_yandex_product_special"] ?? null)) {
                echo ($context["oct_analytics_yandex_product_special"] ?? null);
            } else {
                echo ($context["oct_analytics_yandex_product_price"] ?? null);
            }
            echo "\",
                        ";
            // line 1255
            if (($context["manufacturer"] ?? null)) {
                // line 1256
                echo "                        \"brand\": \"";
                echo ($context["manufacturer"] ?? null);
                echo "\",
                        ";
            }
            // line 1258
            echo "                        ";
            if ((array_key_exists("oct_analytics_yandex_product_category", $context) &&  !twig_test_empty(($context["oct_analytics_yandex_product_category"] ?? null)))) {
                // line 1259
                echo "                        \"category\": \"";
                echo ($context["oct_analytics_yandex_product_category"] ?? null);
                echo "\"
                        ";
            }
            // line 1261
            echo "                    }]
                }
            }
        });
    }
});
</script>
";
        }
        // line 1269
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "micro", [], "any", true, true, false, 1269) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "micro", [], "any", false, false, false, 1269))) {
            // line 1270
            echo "<script type=\"application/ld+json\">
{
    \"@context\": \"https://schema.org\",
    \"@type\": \"Product\",
    \"url\": \"";
            // line 1274
            echo ($context["share"] ?? null);
            echo "\",
    \"category\": \"";
            // line 1275
            echo ($context["oct_product_categories"] ?? null);
            echo "\",
    \"image\": \"";
            // line 1276
            echo ($context["thumb"] ?? null);
            echo "\",
    \"brand\": {\"@type\": \"Brand\",\"name\": \"";
            // line 1277
            echo ($context["manufacturer"] ?? null);
            echo "\"},
    \"manufacturer\": \"";
            // line 1278
            echo ($context["manufacturer"] ?? null);
            echo "\",
    \"model\": \"";
            // line 1279
            echo ($context["model"] ?? null);
            echo "\",
    \"productID\": \"";
            // line 1280
            echo ($context["product_id"] ?? null);
            echo "\",
    ";
            // line 1281
            if ((array_key_exists("upc", $context) && ($context["upc"] ?? null))) {
                // line 1282
                echo "    \"gtin12\": \"";
                echo ($context["upc"] ?? null);
                echo "\",
    ";
            }
            // line 1284
            echo "    ";
            if ((array_key_exists("ean", $context) && ($context["ean"] ?? null))) {
                // line 1285
                echo "    \"gtin8\": \"";
                echo ($context["ean"] ?? null);
                echo "\",
    ";
            }
            // line 1287
            echo "    ";
            if ((array_key_exists("mpn", $context) && ($context["mpn"] ?? null))) {
                // line 1288
                echo "    \"mpn\": \"";
                echo ($context["mpn"] ?? null);
                echo "\",
    ";
            }
            // line 1290
            echo "    ";
            if ((array_key_exists("sku", $context) && ($context["sku"] ?? null))) {
                // line 1291
                echo "    \"sku\": \"";
                echo ($context["sku"] ?? null);
                echo "\",
    ";
            }
            // line 1293
            echo "    ";
            if (($context["rating"] ?? null)) {
                // line 1294
                echo "    \"aggregateRating\": {
        \"@type\": \"AggregateRating\",
        \"ratingValue\": \"";
                // line 1296
                echo ($context["rating"] ?? null);
                echo "\",
        \"ratingCount\": \"";
                // line 1297
                echo ($context["total_reviews"] ?? null);
                echo "\",
        \"reviewCount\": \"";
                // line 1298
                echo ($context["total_reviews"] ?? null);
                echo "\",
        \"bestRating\": \"5\",
        \"worstRating\": \"1\"
    },
    ";
            }
            // line 1303
            echo "
    \"description\": \"";
            // line 1304
            echo ($context["oct_description_microdata"] ?? null);
            echo "\",
    \"name\": \"";
            // line 1305
            echo ($context["oct_micro_heading_title"] ?? null);
            echo "\",

    \"offers\": {
        \"@type\": \"Offer\",
        \"url\": \"";
            // line 1309
            echo ($context["share"] ?? null);
            echo "\",

        ";
            // line 1311
            if (($context["oct_special_microdata"] ?? null)) {
                // line 1312
                echo "        ";
                $context["special_date"] = twig_date_modify_filter($this->env, "now", "+30 day");
                // line 1313
                echo "        \"priceValidUntil\" : \"";
                echo twig_date_format_filter($this->env, ($context["special_date"] ?? null), "Y-m-d");
                echo "\",
        ";
            } else {
                // line 1315
                echo "        \"priceValidUntil\" : \"";
                echo twig_date_format_filter($this->env, twig_date_modify_filter($this->env, ($context["now"] ?? null), "+60 days"), "Y-m-d");
                echo "\",
        ";
            }
            // line 1317
            echo "
        ";
            // line 1318
            if (($context["out_of_stock"] ?? null)) {
                // line 1319
                echo "        \"availability\": \"https://schema.org/OutOfStock\",
        ";
            } else {
                // line 1321
                echo "        \"availability\": \"https://schema.org/InStock\",
        ";
            }
            // line 1323
            echo "
        \"price\": \"";
            // line 1324
            if ( !($context["oct_special_microdata"] ?? null)) {
                echo ($context["oct_price_microdata"] ?? null);
            } else {
                echo ($context["oct_special_microdata"] ?? null);
            }
            echo "\",
        \"priceCurrency\": \"";
            // line 1325
            echo ($context["oct_price_currency"] ?? null);
            echo "\",
        \"itemCondition\": \"https://schema.org/NewCondition\"

    ";
            // line 1328
            if (($context["rating"] ?? null)) {
                // line 1329
                echo "    },

    \"review\": [
        ";
                // line 1332
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_reviews_all"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["rew_one"]) {
                    // line 1333
                    echo "        {
            \"@type\": \"Review\",
            \"author\": {
\t\t\t   \"@type\": \"Person\",
\t\t\t   \"name\": \"";
                    // line 1337
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "author", [], "any", false, false, false, 1337);
                    echo "\"
\t\t\t},
            \"datePublished\": \"";
                    // line 1339
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "date_added", [], "any", false, false, false, 1339);
                    echo "\",
            \"description\": \"";
                    // line 1340
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "text", [], "any", false, false, false, 1340);
                    echo "\",
            \"reviewRating\": {
                \"@type\": \"Rating\",
                \"bestRating\": \"5\",
                \"ratingValue\": \"";
                    // line 1344
                    echo twig_get_attribute($this->env, $this->source, $context["rew_one"], "rating", [], "any", false, false, false, 1344);
                    echo "\",
                \"worstRating\": \"1\"
            }
        }";
                    // line 1347
                    if ((twig_length_filter($this->env, ($context["oct_reviews_all"] ?? null)) > twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1347))) {
                        echo ",";
                    }
                    // line 1348
                    echo "
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rew_one'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1350
                echo "    ]
    ";
            } else {
                // line 1352
                echo "    }
    ";
            }
            // line 1354
            echo "}
</script>
";
        }
        // line 1357
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2849 => 1357,  2844 => 1354,  2840 => 1352,  2836 => 1350,  2821 => 1348,  2817 => 1347,  2811 => 1344,  2804 => 1340,  2800 => 1339,  2795 => 1337,  2789 => 1333,  2772 => 1332,  2767 => 1329,  2765 => 1328,  2759 => 1325,  2751 => 1324,  2748 => 1323,  2744 => 1321,  2740 => 1319,  2738 => 1318,  2735 => 1317,  2729 => 1315,  2723 => 1313,  2720 => 1312,  2718 => 1311,  2713 => 1309,  2706 => 1305,  2702 => 1304,  2699 => 1303,  2691 => 1298,  2687 => 1297,  2683 => 1296,  2679 => 1294,  2676 => 1293,  2670 => 1291,  2667 => 1290,  2661 => 1288,  2658 => 1287,  2652 => 1285,  2649 => 1284,  2643 => 1282,  2641 => 1281,  2637 => 1280,  2633 => 1279,  2629 => 1278,  2625 => 1277,  2621 => 1276,  2617 => 1275,  2613 => 1274,  2607 => 1270,  2605 => 1269,  2595 => 1261,  2589 => 1259,  2586 => 1258,  2580 => 1256,  2578 => 1255,  2570 => 1254,  2566 => 1253,  2562 => 1252,  2555 => 1248,  2551 => 1247,  2547 => 1245,  2545 => 1244,  2488 => 1189,  2486 => 1188,  2483 => 1187,  2479 => 1185,  2477 => 1184,  2472 => 1181,  2468 => 1179,  2466 => 1178,  2463 => 1177,  2459 => 1175,  2457 => 1174,  2454 => 1173,  2450 => 1171,  2445 => 1168,  2443 => 1167,  2432 => 1158,  2419 => 1148,  2410 => 1141,  2408 => 1140,  2405 => 1139,  2399 => 1135,  2397 => 1134,  2296 => 1036,  2222 => 964,  2204 => 949,  2184 => 932,  2165 => 916,  2162 => 915,  2160 => 914,  2062 => 820,  2058 => 818,  2046 => 812,  2039 => 810,  2014 => 806,  2010 => 805,  2006 => 804,  2001 => 801,  1997 => 800,  1990 => 796,  1986 => 794,  1983 => 793,  1977 => 791,  1975 => 790,  1971 => 788,  1968 => 787,  1959 => 784,  1954 => 783,  1951 => 782,  1946 => 781,  1943 => 780,  1940 => 779,  1934 => 776,  1931 => 775,  1928 => 774,  1922 => 772,  1919 => 771,  1914 => 768,  1908 => 766,  1906 => 765,  1901 => 762,  1892 => 759,  1887 => 757,  1879 => 754,  1873 => 753,  1867 => 752,  1861 => 751,  1855 => 750,  1851 => 748,  1847 => 747,  1841 => 746,  1838 => 745,  1827 => 737,  1822 => 735,  1817 => 733,  1812 => 731,  1806 => 728,  1779 => 704,  1774 => 702,  1766 => 701,  1754 => 692,  1745 => 687,  1743 => 686,  1735 => 685,  1727 => 684,  1719 => 683,  1710 => 680,  1707 => 679,  1703 => 677,  1696 => 675,  1687 => 672,  1683 => 671,  1680 => 670,  1676 => 669,  1672 => 668,  1669 => 667,  1665 => 666,  1658 => 665,  1655 => 664,  1651 => 662,  1647 => 660,  1641 => 659,  1633 => 657,  1625 => 655,  1622 => 654,  1618 => 653,  1613 => 652,  1611 => 651,  1607 => 650,  1604 => 649,  1602 => 648,  1592 => 640,  1589 => 639,  1578 => 636,  1575 => 635,  1572 => 634,  1567 => 633,  1564 => 632,  1561 => 631,  1555 => 628,  1552 => 627,  1549 => 626,  1543 => 623,  1540 => 622,  1537 => 621,  1527 => 618,  1524 => 617,  1521 => 616,  1511 => 613,  1508 => 612,  1505 => 611,  1499 => 608,  1496 => 607,  1494 => 606,  1485 => 599,  1479 => 597,  1476 => 596,  1472 => 594,  1462 => 590,  1444 => 589,  1438 => 586,  1434 => 584,  1430 => 583,  1427 => 582,  1424 => 581,  1419 => 578,  1410 => 575,  1406 => 574,  1403 => 573,  1399 => 572,  1393 => 569,  1389 => 568,  1385 => 566,  1382 => 565,  1376 => 563,  1374 => 562,  1368 => 558,  1364 => 556,  1356 => 554,  1354 => 553,  1348 => 550,  1343 => 548,  1337 => 545,  1333 => 544,  1329 => 543,  1318 => 535,  1312 => 531,  1305 => 526,  1294 => 524,  1290 => 523,  1286 => 522,  1279 => 518,  1276 => 517,  1273 => 516,  1269 => 514,  1264 => 512,  1259 => 511,  1256 => 510,  1251 => 508,  1246 => 507,  1243 => 506,  1237 => 504,  1234 => 503,  1231 => 502,  1225 => 501,  1209 => 492,  1205 => 490,  1202 => 489,  1200 => 488,  1194 => 487,  1191 => 486,  1188 => 485,  1172 => 476,  1168 => 474,  1165 => 473,  1163 => 472,  1157 => 471,  1154 => 470,  1151 => 469,  1135 => 460,  1131 => 458,  1128 => 457,  1126 => 456,  1120 => 455,  1117 => 454,  1114 => 453,  1106 => 450,  1102 => 449,  1095 => 447,  1092 => 446,  1089 => 445,  1087 => 444,  1083 => 443,  1080 => 442,  1077 => 441,  1065 => 438,  1062 => 437,  1059 => 436,  1057 => 435,  1051 => 434,  1048 => 433,  1045 => 432,  1033 => 429,  1030 => 428,  1026 => 426,  1024 => 425,  1018 => 424,  1015 => 423,  1012 => 422,  1007 => 419,  999 => 416,  992 => 414,  990 => 413,  986 => 412,  974 => 410,  958 => 409,  954 => 407,  950 => 406,  946 => 405,  943 => 404,  940 => 403,  938 => 402,  934 => 401,  931 => 400,  928 => 399,  923 => 396,  910 => 389,  906 => 388,  901 => 385,  895 => 383,  879 => 381,  877 => 380,  871 => 379,  862 => 378,  852 => 377,  846 => 373,  842 => 372,  838 => 371,  835 => 370,  832 => 369,  830 => 368,  826 => 367,  823 => 366,  820 => 365,  815 => 362,  808 => 360,  801 => 358,  799 => 357,  792 => 356,  788 => 355,  784 => 354,  778 => 353,  775 => 352,  771 => 350,  769 => 349,  763 => 348,  760 => 347,  757 => 346,  752 => 345,  750 => 344,  747 => 343,  744 => 342,  741 => 341,  737 => 339,  729 => 337,  726 => 336,  723 => 335,  712 => 333,  707 => 332,  704 => 331,  698 => 328,  693 => 327,  690 => 326,  685 => 324,  682 => 323,  676 => 321,  674 => 320,  670 => 319,  667 => 318,  660 => 314,  595 => 252,  587 => 247,  579 => 242,  571 => 237,  564 => 233,  561 => 232,  558 => 231,  552 => 229,  550 => 228,  547 => 227,  545 => 226,  535 => 224,  530 => 221,  524 => 220,  520 => 218,  516 => 216,  513 => 215,  509 => 214,  504 => 212,  500 => 211,  497 => 210,  494 => 209,  488 => 206,  484 => 205,  481 => 204,  478 => 203,  469 => 199,  464 => 197,  461 => 196,  459 => 195,  452 => 190,  447 => 187,  443 => 185,  399 => 148,  392 => 143,  386 => 142,  371 => 129,  369 => 128,  366 => 127,  337 => 100,  335 => 99,  326 => 92,  322 => 90,  304 => 86,  298 => 85,  295 => 84,  292 => 83,  288 => 82,  285 => 81,  282 => 80,  278 => 78,  264 => 77,  249 => 73,  245 => 72,  242 => 71,  239 => 70,  236 => 69,  219 => 68,  205 => 65,  201 => 64,  197 => 62,  194 => 61,  191 => 60,  187 => 58,  181 => 57,  175 => 54,  170 => 53,  167 => 52,  163 => 51,  160 => 50,  158 => 49,  152 => 45,  145 => 41,  138 => 39,  133 => 37,  126 => 35,  123 => 34,  121 => 33,  117 => 32,  110 => 27,  104 => 24,  98 => 22,  96 => 21,  91 => 19,  85 => 18,  80 => 16,  74 => 15,  70 => 13,  65 => 11,  60 => 10,  54 => 8,  52 => 7,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/product/product.twig", "");
    }
}
