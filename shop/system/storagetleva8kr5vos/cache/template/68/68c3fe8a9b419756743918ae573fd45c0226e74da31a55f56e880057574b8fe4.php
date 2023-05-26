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

/* oct_remarket/template/product/compare.twig */
class __TwigTemplate_60debfda86350477b0c4ab1d170c230dccf4372ea463ebf2e3661fbcfa090e26 extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
    ";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
    <div class=\"row\">
        <div class=\"col-12 rm-page-title\">
            <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>
    <div class=\"content-top-box\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "</div>
    ";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "        <script>
            rmNotify('success', '";
            // line 12
            echo ($context["success"] ?? null);
            echo "');
        </script>
    ";
        }
        // line 15
        echo "    <div id=\"content\" class=\"row no-gutters\">
        ";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "            ";
            $context["class"] = "col-lg-6 is-cols";
            // line 19
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "            ";
            $context["class"] = "col-lg-9";
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            $context["class"] = "col-lg-12 no-col";
            // line 23
            echo "        ";
        }
        // line 24
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"rm-content h-100\">
                ";
        // line 26
        if (($context["products"] ?? null)) {
            // line 27
            echo "                    <div class=\"rm-content-title\">";
            echo ($context["text_product"] ?? null);
            echo "</div>
                    <table class=\"table rm-table-compare table-responsive-lg\">
                        <tbody>
                            <tr class=\"rm-table-compare-product\">
                                <td>";
            // line 31
            echo ($context["text_name"] ?? null);
            echo "</td>
                                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                echo "                                    <td class=\"rm-table-product-name text-center\">
                                        <a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "</a>
                                    </td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            </tr>
                            <tr class=\"rm-table-compare-img\">
                                <td class=\"align-middle\">";
            // line 39
            echo ($context["text_image"] ?? null);
            echo "</td>
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 41
                echo "                                    <td class=\"text-center\">
                                        ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "                                            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                    echo "\"/>
                                        ";
                }
                // line 45
                echo "                                    </td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            </tr>
                            <tr class=\"rm-table-compare-price\">
                                <td>";
            // line 49
            echo ($context["text_price"] ?? null);
            echo "</td>
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 51
                echo "                                    <td class=\"rm-module-price text-center\">
                                        ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "                                            ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "                                                <span class=\"rm-module-price-actual\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54);
                        echo "</span>
                                            ";
                    } else {
                        // line 56
                        echo "                                                <span class=\"rm-module-price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                        echo "</span><span class=\"rm-module-price-actual\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 56);
                        echo "</span>
                                            ";
                    }
                    // line 58
                    echo "                                        ";
                }
                // line 59
                echo "                                    </td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </tr>
                            <tr class=\"rm-table-compare-model\">
                                <td>";
            // line 63
            echo ($context["text_model"] ?? null);
            echo "</td>
                                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "                                    <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 65);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                            </tr>
                            <tr class=\"rm-table-compare-producer\">
                                <td>";
            // line 69
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
                                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 71
                echo "                                    <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 71);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                            </tr>
                            <tr class=\"rm-table-compare-available\">
                                <td>";
            // line 75
            echo ($context["text_availability"] ?? null);
            echo "</td>
                                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 77
                echo "                                    <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 77);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            </tr>
                            ";
            // line 80
            if (($context["review_status"] ?? null)) {
                // line 81
                echo "                                <tr class=\"rm-table-compare-rating\">
                                    <td class=\"align-middle\">";
                // line 82
                echo ($context["text_rating"] ?? null);
                echo "</td>
                                    ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 84
                    echo "                                        <td class=\"text-center\">
                                            <div class=\"rm-module-rating-stars d-flex align-items-center justify-content-center\">
                                                ";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 87
                        echo "                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 87) < $context["i"])) {
                            // line 88
                            echo "                                                        <span class=\"rm-module-rating-star\"></span>
                                                    ";
                        } else {
                            // line 90
                            echo "                                                        <span class=\"rm-module-rating-star rm-module-rating-star-is\"></span>
                                                    ";
                        }
                        // line 92
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "                                            </div>
                                            <div class=\"rm-table-compare-review\">";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 94);
                    echo "</div>
                                        </td>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                                </tr>
                            ";
            }
            // line 99
            echo "                            <tr class=\"rm-table-compare-weight\">
                                <td>";
            // line 100
            echo ($context["text_weight"] ?? null);
            echo "</td>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "                                    <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 102);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                            </tr>
                            <tr class=\"rm-table-compare-sizes\">
                                <td>";
            // line 106
            echo ($context["text_dimension"] ?? null);
            echo "</td>
                                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "                                    <td class=\"text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 108);
                echo "
                                        x
                                        ";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 110);
                echo "
                                        x
                                        ";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 112);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                            </tr>

                            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 117
                echo "                                <tr>
                                    <td class=\"rm-table-compare-title\" colspan=\"";
                // line 118
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\">
                                        <strong>";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 119);
                echo "</strong>
                                    </td>
                                </tr>
                                ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 122));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 123
                    echo "                                    <tr>
                                        <td>";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 124);
                    echo "</td>
                                        ";
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 126
                        echo "                                            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 126)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 127
                            echo "                                                <td class=\"text-center\">
                                                    ";
                            // line 128
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 128)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
                                            ";
                        } else {
                            // line 130
                            echo "                                                <td></td>
                                            ";
                        }
                        // line 132
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                            <tr class=\"rm-table-compare-btn\">
                                <td></td>
                                ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 139
                echo "                                    <td class=\"text-center\">
                                        <div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" aria-label=\"To cart\" class=\"rm-btn rm-cart-btn secondary d-inline-flex align-items-center\" onclick=\"cart.add('";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 141);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 141);
                echo "');\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"rm-cart-btn-icon\"></span>
\t                                            <span class=\"rm-btn-text\">";
                // line 143
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t                                    </div>
                                    <div>
                                        <a href=\"";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 147);
                echo "\" class=\"rm-btn red\"><span class=\"rm-btn-text\">";
                echo ($context["button_remove"] ?? null);
                echo "</span></a>
                                    </div>
                                </td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                        </tr>
                    </tbody>
                </table>
            ";
        } else {
            // line 155
            echo "                <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                <div class=\"buttons\">
                    <a href=\"";
            // line 157
            echo ($context["continue"] ?? null);
            echo "\" class=\"rm-btn dark mt-3 d-inline-block\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                </div>
            ";
        }
        // line 160
        echo "            ";
        echo ($context["column_right"] ?? null);
        echo "
        </div>
    </div>
</div>
";
        // line 164
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 166
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 166,  519 => 164,  511 => 160,  503 => 157,  497 => 155,  491 => 151,  479 => 147,  472 => 143,  465 => 141,  461 => 139,  457 => 138,  453 => 136,  447 => 135,  440 => 133,  434 => 132,  430 => 130,  425 => 128,  422 => 127,  419 => 126,  415 => 125,  411 => 124,  408 => 123,  404 => 122,  398 => 119,  394 => 118,  391 => 117,  387 => 116,  383 => 114,  375 => 112,  370 => 110,  364 => 108,  360 => 107,  356 => 106,  352 => 104,  343 => 102,  339 => 101,  335 => 100,  332 => 99,  328 => 97,  319 => 94,  316 => 93,  310 => 92,  306 => 90,  302 => 88,  299 => 87,  295 => 86,  291 => 84,  287 => 83,  283 => 82,  280 => 81,  278 => 80,  275 => 79,  266 => 77,  262 => 76,  258 => 75,  254 => 73,  245 => 71,  241 => 70,  237 => 69,  233 => 67,  224 => 65,  220 => 64,  216 => 63,  212 => 61,  205 => 59,  202 => 58,  194 => 56,  188 => 54,  185 => 53,  183 => 52,  180 => 51,  176 => 50,  172 => 49,  168 => 47,  161 => 45,  151 => 43,  149 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 37,  123 => 34,  120 => 33,  116 => 32,  112 => 31,  104 => 27,  102 => 26,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/product/compare.twig", "");
    }
}
