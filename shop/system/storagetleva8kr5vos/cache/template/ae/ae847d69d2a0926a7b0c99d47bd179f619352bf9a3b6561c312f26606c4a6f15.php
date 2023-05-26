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

/* oct_remarket/template/octemplates/module/oct_popup_purchase.twig */
class __TwigTemplate_57fa8e5392221195d613156870d4bd34aa1ba0ba55d8b737899de4a05b9e179c extends \Twig\Template
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
        echo "<div class=\"modal\" id=\"rm-popup-quickorder\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"rm-one-click\">
    <div class=\"modal-dialog modal-dialog-centered wide\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"rm-one-click\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
                <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
                </button>
            </div>
            <div id=\"one-click-main-block\" class=\"modal-body\">
                <form action=\"javascript:;\" id=\"oct_purchase_form\" method=\"post\" class=\"d-flex flex-column flex-md-row\">
                    <div class=\"modal-body-left text-center\">
                        ";
        // line 14
        if ((array_key_exists("images", $context) && (twig_length_filter($this->env, ($context["images"] ?? null)) > 1))) {
            // line 15
            echo "                            <div id=\"popup_purchase_images\" class=\"d-none d-md-block\">
                                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 17
                echo "                                    <div class=\"d-flex justify-content-center\">
                                        <img src=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"modal-body-img img-fluid d-block mx-auto\">
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                            </div>
                            <script>
                                \$(document).ready(function() {
                                    \$('#popup_purchase_images').slick({
                                        autoplay: true,
                                        dots: false,
                                        arrows: false,
                                        infinite: true,
                                        autoplaySpeed: 3000,
                                        slidesToShow: 1
                                    });
                                });
                            </script>
                        ";
        } else {
            // line 35
            echo "                            ";
            if (array_key_exists("thumb", $context)) {
                // line 36
                echo "                                <img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"d-none d-md-block modal-body-img mx-auto\" alt=\"";
                echo ($context["heading_title_product"] ?? null);
                echo "\">
                            ";
            }
            // line 38
            echo "                        ";
        }
        // line 39
        echo "                        <div class=\"modal-product-title\">
                            ";
        // line 40
        echo ($context["product_name"] ?? null);
        echo "
                        </div>
                        ";
        // line 42
        if (($context["price"] ?? null)) {
            // line 43
            echo "                            <div class=\"rm-product-center-price\">
                                ";
            // line 44
            if ( !($context["special"] ?? null)) {
                // line 45
                echo "                                    <span>";
                echo ($context["price"] ?? null);
                echo "</span>
                                ";
            } else {
                // line 47
                echo "                                    <div class=\"d-inline-flex align-items-center\">
                                        <div class=\"rm-popup-price-old\">";
                // line 48
                echo ($context["price"] ?? null);
                echo "</div>
                                        <div id=\"popup-quickorder-product-you-save\" class=\"rm-product-center-price-sticker d-flex align-items-center justify-content-center ml-2\">";
                // line 49
                echo ($context["you_save"] ?? null);
                echo "</div>
                                    </div>
                                    <span>";
                // line 51
                echo ($context["special"] ?? null);
                echo "</span>
                                ";
            }
            // line 53
            echo "                                ";
            if (($context["tax"] ?? null)) {
                // line 54
                echo "                                    <div class=\"rm-popup-center-price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "
                                        <span>";
                // line 55
                echo ($context["tax"] ?? null);
                echo "</span>
                                    </div>
                                ";
            }
            // line 58
            echo "                            </div>
                        ";
        }
        // line 60
        echo "                        ";
        if (($context["options"] ?? null)) {
            // line 61
            echo "                            <div class=\"options popup-purchase-options\">
                                <div class=\"rm-product-center-options\" id=\"rm-purchase-options-box\">
                                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 64
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 64) == "select")) {
                    // line 65
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 66);
                    echo "\">
                                                    ";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 67)) {
                        // line 68
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 69);
                    echo "</label>
                                                <select name=\"option[";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 70);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 70);
                    echo "\" class=\"rm-select form-control\">
                                                    <option value=\"\">";
                    // line 71
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                                    ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 73
                        echo "                                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 73);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 73);
                        echo "
                                                            ";
                        // line 74
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 74)) {
                            // line 75
                            echo "                                                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 75);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 75);
                            echo ")
                                                            ";
                        }
                        // line 77
                        echo "                                                        </option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                                </select>
                                            </div>
                                        ";
                }
                // line 82
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 82) == "radio")) {
                    // line 83
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\">
                                                    ";
                    // line 85
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 85)) {
                        // line 86
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 87);
                    echo "</label>
                                                <div id=\"input-option";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 88);
                    echo "\" class=\"options-box d-flex align-items-center justify-content-center\">
                                                    ";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 90
                        echo "                                                        <div class=\"radio\">
                                                            <label
                                                                data-toggle=\"tooltip\"
                                                                data-trigger=\"hover\"
                                                                class=\"optid ";
                        // line 94
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 94);
                        echo " not-selected";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 94)) {
                            echo " radio-img";
                        }
                        echo "\"
                                                                title=\"";
                        // line 95
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 95);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 95)) {
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 95);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 95);
                        }
                        echo "\">
                                                                <input type=\"radio\" name=\"option[";
                        // line 96
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 96);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 96);
                        echo "\" class=\"d-none\"/>
                                                                ";
                        // line 97
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 97)) {
                            // line 98
                            echo "                                                                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 98);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 98);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 98)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 98);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 98);
                                echo " ";
                            }
                            echo "\"/>
                                                                ";
                        } else {
                            // line 100
                            echo "                                                                    ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 100);
                            echo "
                                                                ";
                        }
                        // line 102
                        echo "                                                            </label>
                                                            <script>
                                                                \$(document).ready(function() {
                                                                    \$('label.optid.";
                        // line 105
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 105);
                        echo "').click(function() {
                                                                        \$('label.optid.";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 106);
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
                    // line 113
                    echo "                                                </div>
                                            </div>
                                        ";
                }
                // line 116
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) == "checkbox")) {
                    // line 117
                    echo "                                            <div class=\"form-checkbox-group\">
                                                <div class=\"rm-control-label\">
                                                    ";
                    // line 119
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 119)) {
                        // line 120
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 121);
                    echo "</div>
                                                <div id=\"input-option";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 122);
                    echo "\">
                                                    ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 123));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 124
                        echo "                                                        <div class=\"checkbox\">
                                                            <label>
                                                                <input type=\"checkbox\" id=\"popup-option[";
                        // line 126
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                        echo "]\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                        echo "\" class=\"rm-form-checkbox-input\"/>
                                                                <span class=\"check-box\"></span>
                                                                ";
                        // line 128
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 128)) {
                            // line 129
                            echo "                                                                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
                                                                ";
                        }
                        // line 131
                        echo "                                                                ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 131);
                        echo "
                                                                ";
                        // line 132
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132)) {
                            // line 133
                            echo "                                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 133);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133);
                            echo ")";
                        }
                        // line 134
                        echo "                                                            </label>
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "                                                </div>
                                            </div>
                                        ";
                }
                // line 140
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 140) == "text")) {
                    // line 141
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    echo "\">
                                                    ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo "</label>
                                                <input type=\"text\" name=\"option[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 146);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 146);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\" class=\"form-control\"/>
                                            </div>
                                        ";
                }
                // line 149
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 149) == "textarea")) {
                    // line 150
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\">
                                                    ";
                    // line 152
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "</label>
                                                <textarea name=\"option[";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 155);
                    echo "</textarea>
                                            </div>
                                        ";
                }
                // line 158
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "file")) {
                    // line 159
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\">
                                                    ";
                    // line 161
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 161)) {
                        // line 162
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    echo "</label>
                                                <button type=\"button\" id=\"popup-button-upload";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"rm-btn dark\">
                                                    <span class=\"rm-btn-text\">
                                                        <i class=\"fa fa-upload\"></i>
                                                        ";
                    // line 167
                    echo ($context["button_upload"] ?? null);
                    echo "</span></button>
                                                <input type=\"hidden\" name=\"option[";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\"/>
                                            </div>
                                        ";
                }
                // line 171
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 171) == "date")) {
                    // line 172
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\">
                                                    ";
                    // line 174
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                    echo "</label>
                                                <div class=\"input-group date\">
                                                    <input type=\"text\" name=\"option[";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 178);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
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
                // line 187
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 187) == "datetime")) {
                    // line 188
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\">
                                                    ";
                    // line 190
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 190)) {
                        // line 191
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                    echo "</label>
                                                <div class=\"input-group datetime\">
                                                    <input type=\"text\" name=\"option[";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 194);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
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
                // line 203
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 203) == "time")) {
                    // line 204
                    echo "                                            <div class=\"form-group\">
                                                <label class=\"rm-control-label\" for=\"input-option";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\">
                                                    ";
                    // line 206
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        // line 207
                        echo "                                                        <span class=\"required\">*</span>
                                                    ";
                    }
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "</label>
                                                <div class=\"input-group time\">
                                                    <input type=\"text\" name=\"option[";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 210);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
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
                // line 219
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                </div>
                            </div>
                        ";
        }
        // line 223
        echo "                    </div>
                    <div class=\"modal-body-right\">
                        ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "firstname", [], "any", false, false, false, 225)) {
            // line 226
            echo "                            <div class=\"form-group\">
                                <input type=\"text\" name=\"name\" value=\"";
            // line 227
            echo ($context["user_name"] ?? null);
            echo "\" class=\"form-control\" id=\"user_name\" placeholder=\"";
            echo ($context["enter_firstname"] ?? null);
            echo "\">
                            </div>
                        ";
        }
        // line 230
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "telephone", [], "any", false, false, false, 230)) {
            // line 231
            echo "                            <div class=\"form-group\">
                                <input type=\"tel\" name=\"telephone\" value=\"";
            // line 232
            echo ($context["user_telephone"] ?? null);
            echo "\" class=\"form-control\" id=\"user_telephone\" placeholder=\"";
            echo ($context["enter_telephone"] ?? null);
            echo "\">
                            </div>
                        ";
        }
        // line 235
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "email", [], "any", false, false, false, 235)) {
            // line 236
            echo "                            <div class=\"form-group\">
                                <input type=\"email\" name=\"email\" value=\"";
            // line 237
            echo ($context["user_email"] ?? null);
            echo "\" class=\"form-control\" id=\"user_email\" placeholder=\"";
            echo ($context["enter_email"] ?? null);
            echo "\">
                            </div>
                        ";
        }
        // line 240
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "comment", [], "any", false, false, false, 240)) {
            // line 241
            echo "                            <div class=\"form-group\">
                                <textarea name=\"comment\" class=\"form-control\" id=\"user_comment\" placeholder=\"";
            // line 242
            echo ($context["enter_comment"] ?? null);
            echo "\"></textarea>
                            </div>
                        ";
        }
        // line 245
        echo "                        <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
                        ";
        // line 246
        if (($context["text_agree"] ?? null)) {
            // line 247
            echo "                            <div class=\"form-checkbox-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input id=\"scales-2\" type=\"checkbox\" class=\"rm-form-checkbox-input\" name=\"agree\">
                                        <span class=\"check-box\"></span>
                                        ";
            // line 252
            echo ($context["text_agree"] ?? null);
            echo "
                                    </label>
                                </div>
                            </div>
                        ";
        }
        // line 257
        echo "                        ";
        if (($context["price"] ?? null)) {
            // line 258
            echo "                            ";
            echo ($context["captcha"] ?? null);
            echo "
                            ";
            // line 259
            if ( !array_key_exists("error_stock_check", $context)) {
                // line 260
                echo "                                <div class=\"d-flex align-items-center justify-content-start\">
                                    ";
                // line 261
                if (twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "quantity", [], "any", true, true, false, 261)) {
                    // line 262
                    echo "                                        <div class=\"btn-group rm-product-quantity\" role=\"group\">
                                            <input type=\"text\" id=\"popup-input-quantity\" class=\"form-control\" name=\"quantity\" value=\"";
                    // line 263
                    echo ($context["minimum"] ?? null);
                    echo "\"/>
                                            <div class=\"d-flex flex-column\">
                                                <button type=\"button\" class=\"rm-product-quantity-btn-plus d-flex align-items-center justify-content-center\" onclick=\"updatePurchaseValue(false, true, false);\">
                                                    <span></span></button>
                                                <div class=\"rm-product-quantity-btn-border\"></div>
                                                <button type=\"button\" class=\"rm-product-quantity-btn-minus d-flex align-items-center justify-content-center\" onclick=\"updatePurchaseValue(true, false, false);\">
                                                    <span></span></button>
                                            </div>
                                            <input type=\"hidden\" id=\"min_quantity\" value=\"";
                    // line 271
                    echo ($context["minimum"] ?? null);
                    echo "\" name=\"min_quantity\">
                                            <input type=\"hidden\" id=\"max-purchase-quantity\" value=\"";
                    // line 272
                    echo ($context["max_quantity"] ?? null);
                    echo "\" name=\"max_quantity\">
                                        </div>
                                    ";
                } else {
                    // line 275
                    echo "                                        <input type=\"hidden\" id=\"popup-input-quantity\" name=\"quantity\" value=\"";
                    echo ($context["minimum"] ?? null);
                    echo "\" />
                                    ";
                }
                // line 277
                echo "                                    <button id=\"button_checkout\" type=\"submit\" class=\"rm-btn dark\">
                                        <span class=\"rm-btn-text\">";
                // line 278
                echo ($context["button_checkout"] ?? null);
                echo "</span>
                                    </button>
                                </div>
                            ";
            } else {
                // line 282
                echo "                                <div class=\"btn-group\" role=\"group\" aria-label=\"rm-cont-btn\">
                                    <span class=\"error-stock-check\">";
                // line 283
                echo ($context["error_stock_check"] ?? null);
                echo "</span>
                                </div>
                            ";
            }
            // line 286
            echo "                        ";
        }
        // line 287
        echo "                    </div>
                </form>
                <div class=\"rm-popup-success d-none flex-column align-items-center text-center\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--popup-success-icon\" alt=\"\" width=\"70\" height=\"70\">
                    <div id=\"rm-popup-success-text\"></div>
                    <button type=\"button\" class=\"rm-btn dark\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span class=\"rm-btn-text\">";
        // line 293
        echo ($context["oct_info_bar_close"] ?? null);
        echo "</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/oct_remarket/js/slick/slick.min.css\">
<script src=\"catalog/view/theme/oct_remarket/js/slick/slick.min.js\" charset=\"utf-8\"></script>
<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\"/>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\"></script>
<script src=\"catalog/view/theme/oct_remarket/js/bootstrap-datetimepicker.min.js\"></script>
";
        // line 305
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "mask", [], "any", true, true, false, 305) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "mask", [], "any", false, false, false, 305)))) {
            // line 306
            echo "    <script src=\"catalog/view/theme/oct_remarket/js/jquery.inputmask.bundle.min.js\"></script>
    <script>
        rmInputMask('#user_telephone', '";
            // line 308
            echo twig_get_attribute($this->env, $this->source, ($context["oct_popup_purchase_data"] ?? null), "mask", [], "any", false, false, false, 308);
            echo "');
    </script>
";
        }
        // line 311
        echo "<script>
\$('#rm-popup-quickorder .date').datetimepicker({
    language: '";
        // line 313
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

\$('#rm-popup-quickorder .datetime').datetimepicker({
    language: '";
        // line 329
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

\$('#rm-popup-quickorder .time').datetimepicker({
    language: '";
        // line 346
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

\$(\"#user_name, #user_telephone, #user_email, #user_comment, #scales-2\").on(\"change paste keyup\", function() {
    \$(this).removeClass('error_style');
});

";
        // line 365
        if ( !array_key_exists("error_stock_check", $context)) {
            // line 366
            echo "    \$('#button_checkout').on('click', function() {
        \$.ajax({
            type: 'post',
            dataType: 'json',
            cache: false,
            url: 'index.php?route=octemplates/module/oct_popup_purchase/makeOrder',
            data: \$('#oct_purchase_form').serialize(),
            beforeSend: function() {
                masked('body', true);
            },
            complete: function() {
                masked('body', false);
            },
            success: function(json) {
                masked('body', false);
                if (json['error']) {
                    \$('#rm-popup-quickorder .text-danger').remove();
                    let errorOption = '';

                    \$.each(json['error']['options'], function(i, val) {
                        if (val) {
                            var element = \$('#oct_purchase_form #input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + val + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + val + '</div>');
                            }

                            errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                        }
                    });

                    delete json['error']['options'];

                    \$.each(json['error'], function(i, val) {
                        if (val) {
                            \$('#rm-popup-quickorder [name=\"' + i + '\"]').addClass('error_style');
                            errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                        }
                    });

                    rmNotify('danger', errorOption);
                } else {
                    if (json['success']) {
                        ";
            // line 411
            if ((array_key_exists("oct_analytics_google_ecommerce", $context) &&  !twig_test_empty(($context["oct_analytics_google_ecommerce"] ?? null)))) {
                // line 412
                echo "                            if (typeof gtag != 'undefined' && json['ecommerce']) {
                                gtag('event', 'purchase', json['ecommerce']);
                            }
                        ";
            }
            // line 416
            echo "
                        ";
            // line 417
            if ((((array_key_exists("oct_analytics_yandex_ecommerce", $context) &&  !twig_test_empty(($context["oct_analytics_yandex_ecommerce"] ?? null))) && array_key_exists("oct_analytics_yandex_container", $context)) &&  !twig_test_empty(($context["oct_analytics_yandex_container"] ?? null)))) {
                // line 418
                echo "                            window.";
                echo ($context["oct_analytics_yandex_container"] ?? null);
                echo " = window.";
                echo ($context["oct_analytics_yandex_container"] ?? null);
                echo " || [];
                            if (typeof ";
                // line 419
                echo ($context["oct_analytics_yandex_container"] ?? null);
                echo " != 'undefined' && json['ecommerce']) {
                                ";
                // line 420
                echo ($context["oct_analytics_yandex_container"] ?? null);
                echo ".push({
                                    \"ecommerce\": {
                                        \"purchase\": {
                                            \"actionField\": {
                                                \"id\": json['ecommerce']['transaction_id']
                                            },
                                            \"products\": json['ecommerce']['items']
                                        }
                                    }
                                });
                            }
                        ";
            }
            // line 432
            echo "
                        \$(\"#rm-popup-success-text\").html(json['success']);
                        \$(\"#one-click-main-block\").html(\$(\".rm-popup-success\"));
                        \$(\".rm-popup-success\").removeClass(\"d-none\");
    \t\t\t\t\t\$(\".modal-dialog\").removeClass(\"wide\");
                    }
                }
            }
        });
    });
";
        }
        // line 443
        echo "
\$('#popup-input-quantity').on('input', function(e) {
    updatePurchaseValue(false, false, true);
});

function updatePurchaseValue(minus, plus, manual) {
    let min = parseInt(\$('#popup-input-quantity').val());
    let currentMinimum = parseInt(\$('#min_quantity').val());
    let max = parseInt(\$('#max-purchase-quantity').val());

    if (max === 0)
        return;

    if (minus && min > 1) {
        if (min <= currentMinimum) {
            \$('#popup-input-quantity').val(currentMinimum);
            updatePurchasePrice();
            return;
        } else if (min > max) {
            \$('#popup-input-quantity').val(max);
            updatePurchasePrice();
            return;
        }

        \$('#popup-input-quantity').val(~~ \$('#popup-input-quantity').val() - 1);
    }

    if (plus) {
        if (max && min > max - 1) {
            \$('#popup-input-quantity').val(max);
            updatePurchasePrice();
            return;
        } else if (min < currentMinimum) {
            \$('#popup-input-quantity').val(currentMinimum);
            updatePurchasePrice();
            return;
        }

        \$('#popup-input-quantity').val(~~ \$('#popup-input-quantity').val() + 1);
    }

    if (manual) {
        if (min <= currentMinimum) {
            \$('#popup-input-quantity').val(currentMinimum);
            updatePurchasePrice();
            return;
        } else if (min > max) {
            \$('#popup-input-quantity').val(max);
            updatePurchasePrice();
            return;
        }

    }

    updatePurchasePrice();
}

\$(\"#rm-purchase-options-box input, #rm-purchase-options-box select \").on('change', function() {
    updatePurchasePrice();
});

function updatePurchasePrice() {
    \$.ajax({
        type: 'post',
        url: 'index.php?route=octemplates/main/oct_functions/updatePrices',
        data: \$('#rm-popup-quickorder input[type=\\'text\\'], #rm-popup-quickorder input[type=\\'hidden\\'], #rm-popup-quickorder input[type=\\'radio\\']:checked, #rm-popup-quickorder input[type=\\'checkbox\\']:checked, #rm-popup-quickorder select'),
        dataType: 'json',
        cache: false,
        success: function(json) {
            ";
        // line 512
        if (($context["special"] ?? null)) {
            // line 513
            echo "                \$('#rm-popup-quickorder .rm-popup-price-old').html(json['price']);
                \$('#rm-popup-quickorder .rm-product-center-price > span').html(json['special']);
            ";
        } else {
            // line 516
            echo "                \$('#rm-popup-quickorder .rm-product-center-price > span').html(json['price']);
            ";
        }
        // line 518
        echo "
            ";
        // line 519
        if ((($context["oct_sticker_you_save"] ?? null) && ($context["you_save"] ?? null))) {
            // line 520
            echo "                \$('#popup-quickorder-product-you-save').html(json['you_save']);
            ";
        }
        // line 522
        echo "
            ";
        // line 523
        if (($context["tax"] ?? null)) {
            // line 524
            echo "                \$('.rm-product-center-price-tax > span').html(json['tax']);
            ";
        }
        // line 526
        echo "        }
    });
}

\$('button[id^=\\'popup-button-upload\\']').on('click', function() {
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
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/module/oct_popup_purchase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1096 => 526,  1092 => 524,  1090 => 523,  1087 => 522,  1083 => 520,  1081 => 519,  1078 => 518,  1074 => 516,  1069 => 513,  1067 => 512,  996 => 443,  983 => 432,  968 => 420,  964 => 419,  957 => 418,  955 => 417,  952 => 416,  946 => 412,  944 => 411,  897 => 366,  895 => 365,  873 => 346,  853 => 329,  834 => 313,  830 => 311,  824 => 308,  820 => 306,  818 => 305,  803 => 293,  795 => 287,  792 => 286,  786 => 283,  783 => 282,  776 => 278,  773 => 277,  767 => 275,  761 => 272,  757 => 271,  746 => 263,  743 => 262,  741 => 261,  738 => 260,  736 => 259,  731 => 258,  728 => 257,  720 => 252,  713 => 247,  711 => 246,  706 => 245,  700 => 242,  697 => 241,  694 => 240,  686 => 237,  683 => 236,  680 => 235,  672 => 232,  669 => 231,  666 => 230,  658 => 227,  655 => 226,  653 => 225,  649 => 223,  644 => 220,  638 => 219,  622 => 210,  617 => 208,  613 => 207,  611 => 206,  607 => 205,  604 => 204,  601 => 203,  585 => 194,  580 => 192,  576 => 191,  574 => 190,  570 => 189,  567 => 188,  564 => 187,  548 => 178,  543 => 176,  539 => 175,  537 => 174,  533 => 173,  530 => 172,  527 => 171,  519 => 168,  515 => 167,  507 => 164,  503 => 163,  499 => 162,  497 => 161,  493 => 159,  490 => 158,  478 => 155,  474 => 154,  470 => 153,  468 => 152,  464 => 151,  461 => 150,  458 => 149,  446 => 146,  442 => 145,  438 => 144,  436 => 143,  432 => 142,  429 => 141,  426 => 140,  421 => 137,  413 => 134,  407 => 133,  405 => 132,  400 => 131,  384 => 129,  382 => 128,  371 => 126,  367 => 124,  363 => 123,  359 => 122,  355 => 121,  351 => 120,  349 => 119,  345 => 117,  342 => 116,  337 => 113,  324 => 106,  320 => 105,  315 => 102,  309 => 100,  293 => 98,  291 => 97,  285 => 96,  276 => 95,  268 => 94,  262 => 90,  258 => 89,  254 => 88,  250 => 87,  246 => 86,  244 => 85,  240 => 83,  237 => 82,  232 => 79,  225 => 77,  218 => 75,  216 => 74,  209 => 73,  205 => 72,  201 => 71,  195 => 70,  191 => 69,  187 => 68,  185 => 67,  181 => 66,  178 => 65,  175 => 64,  171 => 63,  167 => 61,  164 => 60,  160 => 58,  154 => 55,  149 => 54,  146 => 53,  141 => 51,  136 => 49,  132 => 48,  129 => 47,  123 => 45,  121 => 44,  118 => 43,  116 => 42,  111 => 40,  108 => 39,  105 => 38,  97 => 36,  94 => 35,  78 => 21,  67 => 18,  64 => 17,  60 => 16,  57 => 15,  55 => 14,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/module/oct_popup_purchase.twig", "");
    }
}
