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

/* oct_remarket/template/account/order_info.twig */
class __TwigTemplate_7c7bb2d1500921a65c2e31238ac8fe557d40ee630fef3a7347b74a687dde4c0b extends \Twig\Template
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
<div id=\"account-order\" class=\"container account-container\">
    ";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"rm-page-title\">";
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
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "        <script>
            rmNotify('warning', '";
            // line 17
            echo ($context["error_warning"] ?? null);
            echo "');
        </script>
    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"row\">
        ";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "            ";
            $context["class"] = "col-lg-6";
            // line 24
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "            ";
            $context["class"] = "col-lg-9";
            // line 26
            echo "        ";
        } else {
            // line 27
            echo "            ";
            $context["class"] = "col-lg-12";
            // line 28
            echo "        ";
        }
        // line 29
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"rm-content h-100\">
                <div class=\"rm-content-title\">";
        // line 31
        echo ($context["text_order_detail"] ?? null);
        echo "</div>
                <div class=\"rm-account-text rm-account-order\">
                    ";
        // line 33
        if (($context["invoice_no"] ?? null)) {
            // line 34
            echo "                    \t<div class=\"rm-account-text-order\">";
            echo ($context["text_invoice_no"] ?? null);
            echo ":<span>";
            echo ($context["invoice_no"] ?? null);
            echo "</span></div>
                    ";
        }
        // line 36
        echo "                    <div class=\"rm-account-text-order\">";
        echo ($context["text_order_id"] ?? null);
        echo ":<span>#";
        echo ($context["order_id"] ?? null);
        echo "</span></div>
                    <div class=\"rm-account-text-order\">";
        // line 37
        echo ($context["text_date_added"] ?? null);
        echo ":<span>";
        echo ($context["date_added"] ?? null);
        echo "</span>
                    </div>
                    <div class=\"rm-account-text-order\">";
        // line 39
        echo ($context["text_payment_method"] ?? null);
        echo ":<span>";
        echo ($context["payment_method"] ?? null);
        echo "</span></div>
                    ";
        // line 40
        if (($context["shipping_method"] ?? null)) {
            // line 41
            echo "                        <div class=\"rm-account-text-order\">";
            echo ($context["text_shipping_method"] ?? null);
            echo ":<span>";
            echo ($context["shipping_method"] ?? null);
            echo "</span></div>
                    ";
        }
        // line 43
        echo "                </div>
                <div class=\"rm-content-title\">";
        // line 44
        echo ($context["text_payment_address"] ?? null);
        echo "</div>
                <div class=\"rm-account-text\">
                    <div class=\"rm-account-text-order\">
                        ";
        // line 47
        echo ($context["payment_address"] ?? null);
        echo "
                    </div>
                </div>
                ";
        // line 50
        if (($context["shipping_address"] ?? null)) {
            // line 51
            echo "                    <div class=\"rm-content-title mt-4\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</div>
                    <div class=\"rm-account-text mb-4\">
                        <div class=\"rm-account-text-order\">
                            ";
            // line 54
            echo ($context["shipping_address"] ?? null);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 58
        echo "                <div class=\"table-responsive-sm rm-table-box\">
                    <table class=\"table table-hover\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th>";
        // line 62
        echo ($context["column_name"] ?? null);
        echo "</th>
                                <th>";
        // line 63
        echo ($context["column_model"] ?? null);
        echo "</th>
                                <th>";
        // line 64
        echo ($context["column_quantity"] ?? null);
        echo "</th>
                                <th>";
        // line 65
        echo ($context["column_price"] ?? null);
        echo "</th>
                                <th>";
        // line 66
        echo ($context["column_total"] ?? null);
        echo "</th>
                                ";
        // line 67
        if (($context["products"] ?? null)) {
            // line 68
            echo "                                    <th style=\"width: 20px;\"></th>
                                ";
        }
        // line 70
        echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "                                <tr>
                                    <td>";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
            echo "
                                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 77
                echo "                                            <br/>
                                            &nbsp;<small>
                                                -
                                                ";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 80);
                echo ":
                                                ";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 81);
                echo "</small>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    </td>
                                    <td>";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 84);
            echo "</td>
                                    <td>";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 85);
            echo "</td>
                                    <td>";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
            echo "</td>
                                    <td>";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 87);
            echo "</td>
                                    <td style=\"white-space: nowrap;\">
                                        ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 89)) {
                // line 90
                echo "                                            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 90);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"rm-btn secondary rm-cart-btn\">
                                                <span class=\"rm-cart-btn-icon\"></span>
                                            </a>
                                        ";
            }
            // line 94
            echo "                                        <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 94);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"rm-btn red\">
                                            <i class=\"fa fa-reply\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 101
            echo "                                <tr>
                                    <td>";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 102);
            echo "</td>
                                    <td></td>
                                    <td>1</td>
                                    <td>";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 105);
            echo "</td>
                                    <td>";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 106);
            echo "</td>
                                    ";
            // line 107
            if (($context["products"] ?? null)) {
                // line 108
                echo "                                        <td></td>
                                    ";
            }
            // line 110
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 113
            echo "                                <tr>
                                    <td colspan=\"3\"></td>
                                    <td>";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 115);
            echo "</td>
                                    <td style=\"min-width:120px;\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 116);
            echo "</td>
                                    ";
            // line 117
            if (($context["products"] ?? null)) {
                // line 118
                echo "                                        <td></td>
                                    ";
            }
            // line 120
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        </tbody>
                    </table>
                </div>
                ";
        // line 125
        if (($context["comment"] ?? null)) {
            // line 126
            echo "                    <div class=\"rm-content-title\">";
            echo ($context["text_comment"] ?? null);
            echo "</div>
                    <div class=\"rm-account-text\">";
            // line 127
            echo ($context["comment"] ?? null);
            echo "</div>
                ";
        }
        // line 129
        echo "                ";
        if (($context["histories"] ?? null)) {
            // line 130
            echo "                    <div class=\"rm-content-title\">";
            echo ($context["text_history"] ?? null);
            echo "</div>
                    <div class=\"table-responsive-sm rm-table-box\">
                        <table class=\"table table-hover\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th>";
            // line 135
            echo ($context["column_date_added"] ?? null);
            echo "</th>
                                    <th>";
            // line 136
            echo ($context["column_status"] ?? null);
            echo "</th>
                                    <th>";
            // line 137
            echo ($context["column_comment"] ?? null);
            echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 141
            if (($context["histories"] ?? null)) {
                // line 142
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 143
                    echo "                                        <tr>
                                            <td>";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 144);
                    echo "</td>
                                            <td>";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 145);
                    echo "</td>
                                            <td>";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 146);
                    echo "</td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                                ";
            } else {
                // line 150
                echo "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center\">";
                // line 151
                echo ($context["text_no_results"] ?? null);
                echo "</td>
                                    </tr>
                                ";
            }
            // line 154
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 158
        echo "                <div class=\"buttons\">
                    <a href=\"";
        // line 159
        echo ($context["continue"] ?? null);
        echo "\" class=\"rm-btn dark\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
                </div>
            </div>
        </div>
        ";
        // line 163
        echo ($context["column_right"] ?? null);
        echo "
    </div>
    ";
        // line 165
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 167
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 167,  477 => 165,  472 => 163,  463 => 159,  460 => 158,  454 => 154,  448 => 151,  445 => 150,  442 => 149,  433 => 146,  429 => 145,  425 => 144,  422 => 143,  417 => 142,  415 => 141,  408 => 137,  404 => 136,  400 => 135,  391 => 130,  388 => 129,  383 => 127,  378 => 126,  376 => 125,  371 => 122,  364 => 120,  360 => 118,  358 => 117,  354 => 116,  350 => 115,  346 => 113,  341 => 112,  334 => 110,  330 => 108,  328 => 107,  324 => 106,  320 => 105,  314 => 102,  311 => 101,  306 => 100,  291 => 94,  281 => 90,  279 => 89,  274 => 87,  270 => 86,  266 => 85,  262 => 84,  259 => 83,  251 => 81,  247 => 80,  242 => 77,  238 => 76,  234 => 75,  231 => 74,  227 => 73,  222 => 70,  218 => 68,  216 => 67,  212 => 66,  208 => 65,  204 => 64,  200 => 63,  196 => 62,  190 => 58,  183 => 54,  176 => 51,  174 => 50,  168 => 47,  162 => 44,  159 => 43,  151 => 41,  149 => 40,  143 => 39,  136 => 37,  129 => 36,  121 => 34,  119 => 33,  114 => 31,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  81 => 20,  75 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/order_info.twig", "");
    }
}
