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

/* oct_remarket/template/checkout/oct_fastorder/fastorder.twig */
class __TwigTemplate_e2e8fe569f7b0cd53cdab8f881e4d6a5401120bb01da50fba61818f7db2f89aa extends \Twig\Template
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
<div class=\"container\">
\t";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
\t";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
\t";
        // line 5
        if (($context["error_warning"] ?? null)) {
            // line 6
            echo "\t<div class=\"alert alert-danger d-none\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t</div>
\t<script>
\t\t\$(function () {
\t\t\t\$('#button-go').attr('disabled', 'disabled');
\t\t\t\$('#button-go').addClass('disabled');
\t\t});
\t</script>
\t";
        }
        // line 16
        echo "\t<div class=\"row\">
\t\t<div class=\"col-12\">
\t\t\t<h1 class=\"rm-main-shop-title\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<main class=\"oct-checkout row g-3 g-md-4 mt-3\">
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"oct-checkout-block\">
\t\t\t\t\t\t<div class=\"d-flex flex-column flex-md-row align-items-md-center justify-content-md-between\">
\t\t\t\t\t\t\t<div class=\"oct-checkout-block-title d-flex align-items-center mb-3 mb-md-0\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite-fastorder.svg#include--user-icon\"
\t\t\t\t\t\t\t\t\talt=\"\" width=\"24\" height=\"24\">
\t\t\t\t\t\t\t\t<span class=\"text-uppercase\">";
        // line 30
        echo ($context["heading_user_block"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 32
        if ( !($context["user_logged"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t\t\t<a onclick=\"octPopupLogin();\" class=\"blue-link\">";
            echo ($context["heading_login_block"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-3 gx-3 gx-md-4 gy-3 register_block\">
\t\t\t\t\t\t\t";
        // line 37
        if (((((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "customer_groups", [], "any", false, false, false, 37) == 1) && ($context["customer_groups"] ?? null)) &&  !($context["user_logged"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "registration", [], "any", false, false, false, 37) == 1))) {
            // line 38
            echo "\t\t\t\t\t\t\t<div class=\"col-lg-12 mb-3\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
            // line 39
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label class=\"d-flex align-items-center ml-0 mb-2\"><input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\tname=\"customer_group_id\" value=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 43);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44) == ($context["customer_group_id"] ?? null))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\" ";
                }
                echo " />";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 45);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"customer_group_id\" value=\"";
            echo ($context["customer_group_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-firstname\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
        // line 54
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\"
\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 56
        echo ((twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstname", [], "any", false, false, false, 56)) ? (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstname", [], "any", false, false, false, 56)) : (($context["firstname"] ?? null)));
        echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 57
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "lastname", [], "any", false, false, false, 60) && (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "lastname", [], "any", false, false, false, 60) == 1))) {
            // line 61
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-lastname\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            // line 63
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 65
            echo ((twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastname", [], "any", false, false, false, 65)) ? (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastname", [], "any", false, false, false, 65)) : (($context["lastname"] ?? null)));
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 66
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-payment-lastname\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"lastname\" value=\"\" />
\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "email", [], "any", false, false, false, 72) && (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "email", [], "any", false, false, false, 72) == 2))) {
            // line 73
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-email\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            // line 75
            echo ($context["entry_email"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
            // line 76
            echo ((($context["email_user"] ?? null)) ? (($context["email_user"] ?? null)) : (($context["email"] ?? null)));
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 77
            echo ($context["entry_email"] ?? null);
            echo "\" id=\"input-payment-email\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 79
($context["oct_fastorder_data"] ?? null), "email", [], "any", false, false, false, 79) && (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "email", [], "any", false, false, false, 79) == 1))) {
            // line 80
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-email\">";
            // line 81
            echo ($context["entry_email"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
            // line 82
            echo ((($context["email_user"] ?? null)) ? (($context["email_user"] ?? null)) : (($context["email"] ?? null)));
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 83
            echo ($context["entry_email"] ?? null);
            echo "\" id=\"input-payment-email\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"email\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "notify_email", [], "any", false, false, false, 86);
            echo "\" />
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
        if (($context["customer_id"] ?? null)) {
            echo "style=\"display:none;\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-telephone\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
        // line 90
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\"
\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 92
        echo ((($context["telephone_user"] ?? null)) ? (($context["telephone_user"] ?? null)) : (($context["telephone"] ?? null)));
        echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
        // line 93
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "fax", [], "any", false, false, false, 96) && (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "fax", [], "any", false, false, false, 96) == 1))) {
            // line 97
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-fax\">";
            // line 98
            echo ($context["entry_fax"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"fax\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 100
            if ((array_key_exists("fax", $context) && ($context["fax"] ?? null))) {
                echo ($context["fax"] ?? null);
            }
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 101
            echo ($context["entry_fax"] ?? null);
            echo "\" id=\"input-payment-fax\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 104
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"fax\" value=\"\" />
\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t\t";
        if (($context["custom_fields"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 108
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 108) == "account")) {
                    // line 109
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "select")) {
                        // line 110
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 112)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 112);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 115);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tid=\"input-custom-field";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control rm-select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 118
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        // line 119
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["custom_field"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["account_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["account_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null)))) {
                                // line 121
                                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 121);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\tselected=\"selected\">";
                                // line 122
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 124
                                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 125
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 125);
                                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "radio")) {
                        // line 133
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"control-label\">";
                        // line 135
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 135)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 138
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["custom_field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 139
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 140
                            if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140) == (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["account_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)))) {
                                // line 141
                                echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                                // line 143
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 143);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                                echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                                // line 144
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 144);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 146
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 146);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 148
                                echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                                // line 150
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 150);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                                echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                                // line 151
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 151);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 152
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 152);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 154
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 160
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 160) == "checkbox")) {
                        // line 161
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"control-label\">";
                        // line 163
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 166
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["custom_field"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 167
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 168
                            if (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["account_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 168), (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)))) {
                                // line 169
                                echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                                // line 171
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 171);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                                echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                                // line 172
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 172);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 174
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 174);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 176
                                echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                                // line 178
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 178);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                                echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                                // line 179
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 179);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 180
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 180);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 188
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 188) == "text")) {
                        // line 189
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 191)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 191);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 194);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 195
                        echo (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["account_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) ? ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195)));
                        echo "\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 202
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "textarea")) {
                        // line 203
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 205)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 205);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<textarea
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 208);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\trows=\"5\" placeholder=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 209);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 210
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">";
                        // line 211
                        echo (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["account_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null)) ? ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["account_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 211)));
                        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 215
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 215) == "file")) {
                        // line 216
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"control-label\">";
                        // line 218
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 218)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 218);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\t\tid=\"button-shipping-custom-field";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-default\"><i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t";
                        // line 223
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 225
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 225);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 226
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 226);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 231
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "date")) {
                        // line 232
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 234
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 234)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"date\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 237
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 237);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 238
                        echo (((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null)) ? ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["account_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 238)));
                        echo "\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                        // line 239
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 240
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 245
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 245) == "datetime")) {
                        // line 246
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 248)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 248);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"datetime-local\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 251);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 252
                        echo (((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["account_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252)] ?? null) : null)) ? ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["account_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 252)));
                        echo "\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                        // line 253
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 254
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 259
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 259) == "time")) {
                        // line 260
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 262
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 262)) ? ("<span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 262);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"time\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 265
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 265);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 266
                        echo (((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["account_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) ? ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["account_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 266)));
                        echo "\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                        // line 267
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 267);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 268
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 273
                    echo "\t\t\t\t\t\t\t";
                }
                // line 274
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "\t\t\t\t\t\t\t";
        }
        // line 276
        echo "\t\t\t\t\t\t\t";
        if (($context["addresses"] ?? null)) {
            // line 277
            echo "\t\t\t\t\t\t\t";
            if (($context["customer_id"] ?? null)) {
                // line 278
                echo "\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"radio\"><label class=\"ml-0 mb-2\"><input type=\"radio\" name=\"payment_address\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"existing\" checked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#payment-address-new').hide()\" />";
                // line 281
                echo ($context["text_address_existing_payment"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"payment-existing\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_address_id\" class=\"form-control rm-select\">
\t\t\t\t\t\t\t\t\t\t";
                // line 285
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["payment_address_id"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 286) == ($context["payment_address_id"] ?? null)))) {
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 287);
                        echo "\" selected=\"selected\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 288
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 288);
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 288);
                        echo ", ";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 288);
                        echo ",
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 289
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 289);
                        echo ", ";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 289);
                        echo ", ";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 289);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 291
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 291);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 292
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 292);
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 292);
                        echo ", ";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 292);
                        echo ",
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 293
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 293);
                        echo ", ";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 293);
                        echo ", ";
                        echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 293);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 295
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"radio\" style=\"display:none;\"><label><input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\tname=\"payment_address\" value=\"new\"
\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#payment-address-new').show();\" />";
                // line 300
                echo ($context["text_address_new"] ?? null);
                echo "</label>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t\t\t\t";
        }
        // line 306
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "company", [], "any", false, false, false, 306) == 1)) {
            // line 307
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 308
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-company\">";
            // line 309
            echo ($context["entry_company"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"company\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 311
            if ((array_key_exists("company", $context) && ($context["company"] ?? null))) {
                echo ($context["company"] ?? null);
            }
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 312
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-payment-company\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 316
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"company\" value=\"\" />
\t\t\t\t\t\t\t";
        }
        // line 318
        echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"company_id\" value=\"\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tax_id\" value=\"\" />
\t\t\t\t\t\t\t";
        // line 320
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 320) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 320) == 2))) {
            // line 321
            echo "\t\t\t\t\t\t\t<div class=\"form-group  col-lg-6\" ";
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 322
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-country\">";
            // line 324
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 324) == 2)) {
                echo "<span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            }
            // line 325
            echo ($context["entry_country"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<select name=\"country_id\" id=\"input-payment-country\"
\t\t\t\t\t\t\t\t\tclass=\"form-control rm-select\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 328
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 330
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 330) == ($context["country_id"] ?? null))) {
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 331);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 331);
                    echo "
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 334
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 334);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 334);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 336
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
            // line 339
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-zone\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            // line 342
            echo ($context["entry_zone"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<select name=\"zone_id\" id=\"input-payment-zone\"
\t\t\t\t\t\t\t\t\tclass=\"form-control rm-select\"></select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 347
            echo "\t\t\t\t\t\t\t<select name=\"country_id\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<option value=\"";
            // line 348
            echo twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_country", [], "any", false, false, false, 348);
            echo "\" selected=\"selected\">
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"zone_id\" style=\"display: none;\"></select>
\t\t\t\t\t\t\t";
        }
        // line 353
        echo "\t\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "city", [], "any", false, false, false, 353) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "city", [], "any", false, false, false, 353) == 2))) {
            // line 354
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 355
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-city\">";
            // line 357
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "city", [], "any", false, false, false, 357) == 2)) {
                echo "<span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            }
            // line 358
            echo ($context["entry_city"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"city\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 360
            if ((array_key_exists("city", $context) && ($context["city"] ?? null))) {
                echo ($context["city"] ?? null);
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_city", [], "any", true, true, false, 360) && twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_city", [], "any", false, false, false, 360))) {
                echo twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_city", [], "any", false, false, false, 360);
            }
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 361
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-payment-city\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 364
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"city\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_city", [], "any", false, false, false, 364);
            echo "\" />
\t\t\t\t\t\t\t";
        }
        // line 366
        echo "\t\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "address_1", [], "any", false, false, false, 366) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "address_1", [], "any", false, false, false, 366) == 2))) {
            // line 367
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 368
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-address-1\">";
            // line 370
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "address_1", [], "any", false, false, false, 370) == 2)) {
                echo "<span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            }
            // line 371
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"address_1\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 373
            if ((array_key_exists("address_1", $context) && ($context["address_1"] ?? null))) {
                echo ($context["address_1"] ?? null);
            }
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 374
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-payment-address-1\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 378
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"address_1\" value=\"\" />
\t\t\t\t\t\t\t";
        }
        // line 380
        echo "\t\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "address_2", [], "any", false, false, false, 380) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "address_2", [], "any", false, false, false, 380) == 2))) {
            // line 381
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 382
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-address-2\">";
            // line 384
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "address_2", [], "any", false, false, false, 384) == 2)) {
                echo "<span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            }
            // line 385
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"address_2\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 387
            if ((array_key_exists("address_2", $context) && ($context["address_2"] ?? null))) {
                echo ($context["address_2"] ?? null);
            }
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 388
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-payment-address-2\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 392
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"address_2\" value=\"\" />
\t\t\t\t\t\t\t";
        }
        // line 394
        echo "\t\t\t\t\t\t\t";
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "postcode", [], "any", false, false, false, 394) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "postcode", [], "any", false, false, false, 394) == 2))) {
            // line 395
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-6\" ";
            if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                echo "style=\"display:none\"
\t\t\t\t\t\t\t\t";
            }
            // line 396
            echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-postcode\">";
            // line 398
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "postcode", [], "any", false, false, false, 398) == 2)) {
                echo "<span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
            }
            // line 399
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"postcode\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 401
            if ((array_key_exists("postcode", $context) && ($context["postcode"] ?? null))) {
                echo ($context["postcode"] ?? null);
            }
            echo "\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 402
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-payment-postcode\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 406
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"postcode\" value=\"\" />
\t\t\t\t\t\t\t";
        }
        // line 408
        echo "\t\t\t\t\t\t\t";
        if (($context["custom_fields"] ?? null)) {
            // line 409
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 410
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 410) == "address")) {
                    // line 411
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 411) == "select")) {
                        // line 412
                        echo "\t\t\t\t\t\t\t<div class=\"form-groupcustom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 413
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 415
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 415)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 415);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<select
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 418
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 418);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 419
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control rm-select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 421
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        // line 422
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["custom_field"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 423
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 423);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 424
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 424);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 426
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 430
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 430) == "radio")) {
                        // line 431
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-md-6\"
\t\t\t\t\t\t\t\t";
                        // line 432
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"control-label\">";
                        // line 434
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 434)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 434);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                        // line 436
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 436);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 437
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["custom_field"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 438
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                            // line 441
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 441);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                            echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 442
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 442);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 443
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 443);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 446
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 450
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 450) == "checkbox")) {
                        // line 451
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-md-6\"
\t\t\t\t\t\t\t\t";
                        // line 452
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"control-label\">";
                        // line 454
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 454)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 454);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<div id=\"input-payment-custom-field";
                        // line 456
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 456);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 457
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["custom_field"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["custom_field_value"] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 458
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"
\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                            // line 461
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 461);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 461);
                            echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 462
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 462);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 463
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 463);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 466
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 470
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 470) == "text")) {
                        // line 471
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 472
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 474
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 474);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 474)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 474);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 477
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 477);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 477);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 478
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 478);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 478);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 479
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 479);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 484
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 484) == "textarea")) {
                        // line 485
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 486
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 488
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 488);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 488)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 488);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<textarea
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 491
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 491);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 491);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\trows=\"5\" placeholder=\"";
                        // line 492
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 492);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 493
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 493);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">";
                        // line 494
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 494);
                        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 498
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 498) == "file")) {
                        // line 499
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 500
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label
\t\t\t\t\t\t\t\t\tclass=\"control-label\">";
                        // line 502
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 502)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 502);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\t\tid=\"button-shipping-custom-field";
                        // line 505
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 505);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-default\"><i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t";
                        // line 507
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 509
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 509);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 510
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 510);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 511
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 511);
                        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 515
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 515) == "date")) {
                        // line 516
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 517
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 519
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 519);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 519)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 519);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"date\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 522
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 522);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 523
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 523);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 523);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 524
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 529
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 529) == "datetime")) {
                        // line 530
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 531
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 533
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 533);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 533)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 533);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"datetime-local\"
\t\t\t\t\t\t\t\t\t\tname=\"custom_field[";
                        // line 536
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 536);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 537
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 537);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 537);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 538
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 538);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 543
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 543) == "time")) {
                        // line 544
                        echo "\t\t\t\t\t\t\t<div class=\"form-group custom-field col-lg-6\"
\t\t\t\t\t\t\t\t";
                        // line 545
                        if ((($context["customer_id"] ?? null) && ($context["addresses"] ?? null))) {
                            echo "style=\"display:none\" ";
                        }
                        echo ">
\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\tfor=\"input-payment-custom-field";
                        // line 547
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547);
                        echo "\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 547)) ? (" <span class=\"required\">*</span>") : (""));
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 547);
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"time\" name=\"custom_field[";
                        // line 549
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 550
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 550);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 550);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-payment-custom-field";
                        // line 551
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 556
                    echo "\t\t\t\t\t\t\t";
                }
                // line 557
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 558
            echo "\t\t\t\t\t\t\t";
        }
        // line 559
        echo "\t\t\t\t\t\t\t";
        if (($context["shipping_required"] ?? null)) {
            // line 560
            echo "\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t";
            // line 561
            if ( !($context["customer_id"] ?? null)) {
                // line 562
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t<label class=\"ml-0\"><input type=\"checkbox\" name=\"shipping_address\" value=\"new\"
\t\t\t\t\t\t\t\t\t\t\t";
                // line 564
                if ((array_key_exists("address_id", $context) && ($context["address_id"] ?? null))) {
                    echo "checked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 565
                echo " onclick=\"\$('.shipping-address').toggle()\">
\t\t\t\t\t\t\t\t\t\t";
                // line 566
                echo ($context["text_address_new"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 569
            echo "\t\t\t\t\t\t\t\t<div class=\"shipping-address mt-3\"
\t\t\t\t\t\t\t\t\t";
            // line 570
            if (((array_key_exists("shipping_address_id", $context) && ($context["shipping_address_id"] ?? null)) || array_key_exists("customer_id", $context))) {
                echo "style=\"display:block\"
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 571
                echo "style=\"display:none\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t";
            // line 572
            if (($context["addresses"] ?? null)) {
                // line 573
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["customer_id"] ?? null)) {
                    // line 574
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\"><label class=\"ml-0 mb-2\"><input type=\"radio\" name=\"shipping_address\"
\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"existing\" checked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#shipping-new').hide()\" />";
                    // line 576
                    echo ($context["text_address_existing_shipping"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"shipping-existing\">
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_address_id\" class=\"form-control rm-select\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 580
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                        // line 581
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((($context["shipping_address_id"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 581) == ($context["shipping_address_id"] ?? null)))) {
                            // line 582
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 582);
                            echo "\" selected=\"selected\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 583
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 583);
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 583);
                            echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 584
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 584);
                            echo ", ";
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 584);
                            echo ", ";
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 584);
                            echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 585
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 585);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 587
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 587);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 588
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 588);
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 588);
                            echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 589
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 589);
                            echo ", ";
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 589);
                            echo ", ";
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 589);
                            echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 590
                            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 590);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 592
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 593
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 596
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["customer_id"] ?? null)) {
                    // line 597
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\" style=\"display:none;\"><label><input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\t\tname=\"shipping_address\" value=\"new\"
\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"\$('#shipping-new').show();\" />";
                    // line 599
                    echo ($context["text_address_new"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 602
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 603
            echo "\t\t\t\t\t\t\t\t\t<div id=\"shipping-new\"
\t\t\t\t\t\t\t\t\t\tstyle=\"display: ";
            // line 604
            echo (((($context["addresses"] ?? null) && ($context["customer_id"] ?? null))) ? ("none") : ("block"));
            echo ";\">
\t\t\t\t\t\t\t\t\t\t<div class=\"oct-fastorder-header\">";
            // line 605
            echo ($context["text_shipping_address"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-firstname\">";
            // line 608
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_firstname\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 611
            echo ($context["entry_firstname"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-shipping-firstname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            // line 615
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "lastname", [], "any", false, false, false, 615) == 1)) {
                // line 616
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-lastname\">";
                // line 618
                echo ($context["entry_lastname"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_lastname\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                // line 621
                echo ($context["entry_lastname"] ?? null);
                echo "\" id=\"input-shipping-lastname\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 626
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_lastname\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 628
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "company", [], "any", false, false, false, 628) == 1)) {
                // line 629
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-company\">";
                // line 631
                echo ($context["entry_company"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_company\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                // line 634
                echo ($context["entry_company"] ?? null);
                echo "\" id=\"input-shipping-company\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 639
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_company\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 641
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "postcode", [], "any", false, false, false, 641) == 1)) {
                // line 642
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-postcode\">";
                // line 644
                echo ($context["entry_postcode"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_postcode\" value=\"";
                // line 646
                echo ($context["postcode"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                // line 647
                echo ($context["entry_postcode"] ?? null);
                echo "\" id=\"input-shipping-postcode\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 652
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_postcode\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 654
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 654) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 654) == 2))) {
                // line 655
                echo "\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-group ";
                // line 656
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 656) == 2)) {
                    echo "required";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-country\">";
                // line 658
                echo ($context["entry_country"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_country_id\" id=\"input-shipping-country\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control rm-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 662
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 663
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 664
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 664) == ($context["country_id"] ?? null))) {
                        // line 665
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 665);
                        echo "\" selected=\"selected\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 666
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 666);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 668
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 668);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 668);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 671
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 672
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-zone\">";
                // line 677
                echo ($context["entry_zone"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_zone_id\" id=\"input-shipping-zone\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control rm-select\"></select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 684
                echo "\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_country_id\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 685
                echo twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_country", [], "any", false, false, false, 685);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tselected=\"selected\"></option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<select name=\"shipping_zone_id\" style=\"display: none;\"></select>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 690
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "city", [], "any", false, false, false, 690) == 1) || (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "city", [], "any", false, false, false, 690) == 2))) {
                // line 691
                echo "\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-group ";
                // line 692
                if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "city", [], "any", false, false, false, 692) == 2)) {
                    echo "required";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"input-shipping-city\">";
                // line 694
                echo ($context["entry_city"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"shipping_city\" value=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                // line 697
                echo ($context["entry_city"] ?? null);
                echo "\" id=\"input-shipping-city\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 702
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"shipping_city\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 703
                echo twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_city", [], "any", false, false, false, 703);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 705
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 710
        echo "\t\t\t\t\t\t\t";
        if (($context["customer_id"] ?? null)) {
            // line 711
            echo "\t\t\t\t\t\t\t<div class=\"col-12 mt-4\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 712
            echo ($context["oct_address_new"] ?? null);
            echo "\" class=\"rm-btn dark\"><span class=\"rm-btn-text\">+ ";
            echo ($context["text_address_new"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 715
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "comment", [], "any", false, false, false, 715) == 1)) {
            // line 716
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 mt-3\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
            // line 717
            echo ($context["text_comments"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
            // line 718
            echo ($context["comment"] ?? null);
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 721
            echo "\t\t\t\t\t\t\t<textarea name=\"comment\" style=\"display:none;\"></textarea>
\t\t\t\t\t\t\t";
        }
        // line 723
        echo "\t\t\t\t\t\t\t";
        if (((( !($context["customer_id"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "email", [], "any", false, false, false, 723)) && twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "email", [], "any", false, false, false, 723)) &&  !($context["approve"] ?? null))) {
            // line 724
            echo "\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 mb-0\"
\t\t\t\t\t\t\t\t";
            // line 725
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "registration", [], "any", false, false, false, 725) != 1)) {
                echo "style=\"display: none;\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t<div class=\"form-check mb-0 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"register\"
\t\t\t\t\t\t\t\t\t\tonclick=\"\$('.register-form').toggle()\" id=\"registerCheckbox\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\"
\t\t\t\t\t\t\t\t\t\tfor=\"registerCheckbox\">";
            // line 730
            echo ($context["text_register"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 734
        echo "\t\t\t\t\t\t\t<div class=\"form-group col-md-6 register-form\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-password\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
        // line 736
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 737
        echo ($context["entry_password"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\tid=\"input-payment-password\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group col-md-6 register-form\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-payment-confirm\"><span
\t\t\t\t\t\t\t\t\t\tclass=\"required\">*</span>";
        // line 742
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 743
        echo ($context["entry_confirm"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\tid=\"input-payment-confirm\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"oct-checkout-block h-100 shipping-method\">
\t\t\t\t\t\t<div class=\"oct-checkout-block-title d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite-fastorder.svg#include--delivery-icon\"
\t\t\t\t\t\t\t\talt=\"\" width=\"24\" height=\"24\">
\t\t\t\t\t\t\t<span class=\"text-uppercase ps-3\">";
        // line 756
        echo ($context["heading_shipping_block"] ?? null);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 758
        if (($context["error_warning"] ?? null)) {
            // line 759
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t\t";
            // line 760
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 762
        echo "\t\t\t\t\t\t";
        if (($context["shipping_methods"] ?? null)) {
            // line 763
            echo "\t\t\t\t\t\t<p class=\"mb-3\">";
            echo ($context["text_shipping_method"] ?? null);
            echo "</p>
\t\t\t\t\t\t<div class=\"shipping-method-box\">
\t\t\t\t\t\t\t";
            // line 765
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 766
                echo "\t\t\t\t\t\t\t<p class=\"mb-2\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 766);
                echo "</strong></p>
\t\t\t\t\t\t\t";
                // line 767
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 767)) {
                    // line 768
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["shipping_method"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["quote"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 769
                        echo "\t\t\t\t\t\t\t<div class=\"mb-3 radio\">
\t\t\t\t\t\t\t\t<label class=\"ml-0\">
\t\t\t\t\t\t\t\t\t";
                        // line 771
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 771) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 772
                            echo "\t\t\t\t\t\t\t\t\t";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 772);
                            // line 773
                            echo "\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 773);
                            echo "\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
                            // line 774
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 774);
                            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 776
                            echo "\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 776);
                            echo "\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
                            // line 777
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 777);
                            echo "\" />
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 779
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 779);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 779);
                        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 782
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 783
                    echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 783);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 785
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 786
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 788
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 mt-4 mt-md-0\">
\t\t\t\t\t<div class=\"oct-checkout-block h-100 payment-method\">
\t\t\t\t\t\t<div class=\"oct-checkout-block-title d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite-fastorder.svg#include--payment-icon\"
\t\t\t\t\t\t\t\talt=\"\" width=\"24\" height=\"24\">
\t\t\t\t\t\t\t<span class=\"text-uppercase ps-3\">";
        // line 795
        echo ($context["heading_payment_block"] ?? null);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 797
        if (($context["error_warning"] ?? null)) {
            // line 798
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t\t";
            // line 799
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 801
        echo "\t\t\t\t\t\t";
        if (($context["payment_methods"] ?? null)) {
            // line 802
            echo "\t\t\t\t\t\t<p class=\"mb-3\">";
            echo ($context["text_payment_method"] ?? null);
            echo "</p>
\t\t\t\t\t\t";
            // line 803
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 804
                echo "\t\t\t\t\t\t<div class=\"payment-method-item\">
\t\t\t\t\t\t\t<label class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t";
                // line 806
                if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 806) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 807
                    echo "\t\t\t\t\t\t\t\t";
                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 807);
                    // line 808
                    echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 808);
                    echo "\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                    // line 809
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 809);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t";
                } else {
                    // line 811
                    echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 811);
                    echo "\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                    // line 812
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 812);
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 814
                echo "\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 814);
                echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 818
            echo "\t\t\t\t\t\t";
        }
        // line 819
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 822
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "cart_view_is", [], "any", false, false, false, 822) && (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "cart_view_is", [], "any", false, false, false, 822) == 1))) {
            // line 823
            echo "\t\t\t";
            if (($context["attention"] ?? null)) {
                // line 824
                echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                echo ($context["attention"] ?? null);
                echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
            }
            // line 828
            echo "\t\t\t";
            if (($context["error_warning"] ?? null)) {
                // line 829
                echo "\t\t\t<div class=\"alert alert-danger mt-4\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["error_warning"] ?? null);
                echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
            }
            // line 833
            echo "\t\t\t<div id=\"cart-table\">
\t\t\t\t";
            // line 834
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 835
                echo "\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"oct-checkout-block oct-checkout-cart d-flex flex-column flex-md-row justify-content-between p-3\">
\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-product-info d-flex align-items-md-center\">
\t\t\t\t\t\t\t\t";
                // line 839
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 839)) {
                    // line 840
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 840);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 840);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 840);
                    echo "\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
                    // line 841
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 841);
                    echo "\" width=\"60\" height=\"60\" /></a>
\t\t\t\t\t\t\t\t";
                }
                // line 843
                echo "\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 844
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 844);
                echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"blue-link d-block mb-2\">";
                // line 845
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 845);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 846
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 846)) {
                    // line 847
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"required\">***</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 849
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 850
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 850)) {
                    // line 851
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["option"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 852
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-product-option\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 853
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 853);
                        echo ": <span class=\"light-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 853);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 854
                        if (((((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 854) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 854)) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "quantity_status", [], "any", false, false, false, 854)) && twig_get_attribute($this->env, $this->source, $context["option"], "oct_quantity_value", [], "any", false, false, false, 854)) && twig_get_attribute($this->env, $this->source, $context["option"], "oct_quantity_value", [], "any", false, false, false, 854))) {
                            // line 855
                            echo "\t\t\t\t\t\t\t\t\t\tx";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "oct_quantity_value", [], "any", false, false, false, 855);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 857
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (((((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 857) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 857)) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_sku", [], "any", false, false, false, 857)) && twig_get_attribute($this->env, $this->source, $context["option"], "sku", [], "any", false, false, false, 857)) || (((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 857) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "status", [], "any", false, false, false, 857)) && twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_model", [], "any", false, false, false, 857)) && twig_get_attribute($this->env, $this->source, $context["option"], "model", [], "any", false, false, false, 857)))) {
                            echo "(";
                            if ((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_sku", [], "any", false, false, false, 857) && twig_get_attribute($this->env, $this->source, $context["option"], "sku", [], "any", false, false, false, 857))) {
                                echo ($context["text_option_sku"] ?? null);
                                echo ":
\t\t\t\t\t\t\t\t\t\t";
                                // line 858
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "sku", [], "any", false, false, false, 858);
                                echo ",
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 859
                            if ((twig_get_attribute($this->env, $this->source, ($context["oct_advanced_options_settings_data"] ?? null), "allow_model", [], "any", false, false, false, 859) && twig_get_attribute($this->env, $this->source, $context["option"], "model", [], "any", false, false, false, 859))) {
                                echo ($context["text_option_model"] ?? null);
                                echo ":
\t\t\t\t\t\t\t\t\t\t";
                                // line 860
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "model", [], "any", false, false, false, 860);
                            }
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 862
                        echo "\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 865
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 866
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 866)) {
                    // line 867
                    echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<small>";
                    // line 868
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 868);
                    echo "</small>
\t\t\t\t\t\t\t\t\t";
                }
                // line 870
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 870)) {
                    // line 871
                    echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<small>";
                    // line 872
                    echo ($context["text_recurring_item"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 872);
                    echo "</small>
\t\t\t\t\t\t\t\t\t";
                }
                // line 874
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-actions\">
\t\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-buttons d-flex align-items-stretch justify-content-end\">
\t\t\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-quantity d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<input name=\"product_id_q\" value=\"";
                // line 879
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 879);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"display: none;\" type=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t<input name=\"product_id\" value=\"";
                // line 881
                echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 881);
                echo "\" style=\"display: none;\"
\t\t\t\t\t\t\t\t\t\t\ttype=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t<input id=\"quantity-";
                // line 883
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 883);
                echo "\" type=\"text\" name=\"quantity\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 884
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 884);
                echo "\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\tonchange=\"update_manual(this, '";
                // line 885
                echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 885);
                echo "');\"
\t\t\t\t\t\t\t\t\t\t\taria-label=\"Quantity\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" aria-label=\"Delete\"
\t\t\t\t\t\t\t\t\t\tclass=\"oct-checkout-cart-delete-btn d-flex align-items-center justify-content-center\"
\t\t\t\t\t\t\t\t\t\tonclick=\"update(this, 'remove');\">
\t\t\t\t\t\t\t\t\t\t<span class=\"oct-checkout-cart-delete-btn-icon\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-total\">";
                // line 894
                echo ($context["column_total"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 894);
                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"oct-checkout-cart-price\">";
                // line 895
                echo ($context["column_price"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 895);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 901
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 903
        echo "\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"oct-checkout-column mt-4 mt-md-0\">
\t\t\t\t<div class=\"oct-checkout-block oct-checkout-actions\">
\t\t\t\t\t<div class=\"oct-checkout-actions-title\">";
        // line 907
        echo ($context["text_next"] ?? null);
        echo "</div>
\t\t\t\t\t";
        // line 908
        if (($context["modules"] ?? null)) {
            // line 909
            echo "\t\t\t\t\t<p class=\"my-3 pb-3\">";
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
\t\t\t\t\t";
            // line 910
            $context["key_step"] = (($context["key_step"] ?? null) + 1);
            // line 911
            echo "\t\t\t\t\t<div class=\"panel-group fastorder-panel-group\" id=\"accordion\">
\t\t\t\t\t\t";
            // line 912
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 913
                echo "\t\t\t\t\t\t";
                echo $context["module"];
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 915
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<script>
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\t\$('.rm-cart-block-title').on('click', function () {
\t\t\t\t\t\t\t\t\$(this).toggleClass('clicked');
\t\t\t\t\t\t\t\t\$(this).next().toggleClass('opened').removeClass('d-md-flex');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t\t";
        }
        // line 925
        echo "\t\t\t\t\t<div class=\"oct-checkout-actions-total\">
\t\t\t\t\t\t";
        // line 926
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 927
            echo "\t\t\t\t\t\t<div class=\"oct-checkout-actions-total-item d-flex justify-content-between\">
\t\t\t\t\t\t\t<span class=\"light-text\">";
            // line 928
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 928);
            echo "</span>
\t\t\t\t\t\t\t<span>";
            // line 929
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 929);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 932
        echo "\t\t\t\t\t\t";
        if (($context["weight"] ?? null)) {
            // line 933
            echo "\t\t\t\t\t\t<div class=\"oct-checkout-actions-total-item d-flex justify-content-between\">
\t\t\t\t\t\t\t<span class=\"light-text\">";
            // line 934
            echo ($context["text_weight"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t<span>";
            // line 935
            echo ($context["weight"] ?? null);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 938
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 939
        if (($context["text_agree"] ?? null)) {
            // line 940
            echo "\t\t\t\t\t<div id=\"agree-block\" class=\"form-check d-flex\">
\t\t\t\t\t\t";
            // line 941
            if (($context["agree"] ?? null)) {
                // line 942
                echo "\t\t\t\t\t\t<input id=\"checkoutCheckbox\" class=\"form-check-input\" type=\"checkbox\" name=\"agree\" value=\"1\"
\t\t\t\t\t\t\tchecked=\"checked\" />
\t\t\t\t\t\t";
            } else {
                // line 945
                echo "\t\t\t\t\t\t<input id=\"checkoutCheckbox\" class=\"form-check-input\" type=\"checkbox\" name=\"agree\"
\t\t\t\t\t\t\tvalue=\"1\" />
\t\t\t\t\t\t";
            }
            // line 948
            echo "\t\t\t\t\t\t<label class=\"form-check-label\" for=\"checkoutCheckbox\">";
            echo ($context["text_agree"] ?? null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 951
        echo "\t\t\t\t\t";
        if (($context["text_payment_agree"] ?? null)) {
            // line 952
            echo "\t\t\t\t\t<div id=\"payment_agree-block\" class=\"form-check mt-3 d-flex\">
\t\t\t\t\t\t";
            // line 953
            if (($context["payment_agree"] ?? null)) {
                // line 954
                echo "\t\t\t\t\t\t<input id=\"checkoutCheckboxPAyment\" class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\tname=\"payment_agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
            } else {
                // line 957
                echo "\t\t\t\t\t\t<input id=\"checkoutCheckboxPAyment\" class=\"form-check-input\" type=\"checkbox\"
\t\t\t\t\t\t\tname=\"payment_agree\" value=\"1\" />
\t\t\t\t\t\t";
            }
            // line 960
            echo "\t\t\t\t\t\t<label class=\"form-check-label\"
\t\t\t\t\t\t\tfor=\"checkoutCheckboxPAyment\">";
            // line 961
            echo ($context["text_payment_agree"] ?? null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 964
        echo "\t\t\t\t\t<div class=\"oct-fastorder-payment\">
\t\t\t\t\t\t";
        // line 965
        if ((($context["payment"] ?? null) && ($context["payment"] ?? null))) {
            // line 966
            echo "\t\t\t\t\t\t<p>";
            echo ($context["payment"] ?? null);
            echo "</p>
\t\t\t\t\t\t";
        } else {
            // line 968
            echo "\t\t\t\t\t\t<button type=\"button\" class=\"rm-btn primary mt-3 w-100\" id=\"button-go\"><span class=\"rm-btn-text\">";
            echo ($context["button_checkout"] ?? null);
            echo "</span></button>
\t\t\t\t\t\t";
        }
        // line 970
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
</div>

";
        // line 977
        if (($context["mask"] ?? null)) {
            // line 978
            echo "<script src=\"catalog/view/theme/oct_remarket/js/jquery.inputmask.bundle.min.js\"></script>
<script>
\trmInputMask('#input-payment-telephone', '";
            // line 980
            echo ($context["mask"] ?? null);
            echo "');
</script>
";
        }
        // line 983
        echo "<script>
\t<!--
\tvar error = true;
\t\$(\".oct-checkout .form-control, .oct-checkout .form-check-input\").on(\"change paste keyup\", function () {
\t\t\$(this).removeClass('error_style');
\t});

\t// Register
\tdocument.getElementById('button-go').addEventListener('click', function () {
\t\tvar data = \$(
\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'tel\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'
\t\t\t).serialize();
\t\tdata += '&_shipping_method=' + \$('.oct-checkout input[name=\\'shipping_method\\']:checked').prop('title') +
\t\t\t'&_payment_method=' + \$('.oct-checkout input[name=\\'payment_method\\']:checked').prop('title');

\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/oct_fastorder/validate_form',
\t\t\ttype: 'post',
\t\t\tdata: data,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-go').button('loading');
\t\t\t\tmasked('body', true);
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-go').button('reset');
\t\t\t\tmasked('body', false);
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\$('.register_block input, .register_block select').css({
\t\t\t\t\t'background': '#ffffff'
\t\t\t\t});
\t\t\t\t\$('.register_block input, .register_block select').parent().removeClass('error_style');
\t\t\t\tmasked('body', false);

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {

\t\t\t\t\tif ((!json['error']['agree']) && (!json['error']['warning_agree'])) {
\t\t\t\t\t\tscrollToElement('.oct-checkout-block');
\t\t\t\t\t}

\t\t\t\t\terror = true;

\t\t\t\t\tif (json['error']['warning_agree']) {
\t\t\t\t\t\trmNotify('warning', json['error']['warning_agree']);
\t\t\t\t\t\t\$('#checkoutCheckbox').addClass('error_style');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['agree']) {
\t\t\t\t\t\trmNotify('warning', json['error']['agree']);
\t\t\t\t\t\t\$('#checkoutCheckbox').addClass('error_style');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['warning_user_exist']) {
\t\t\t\t\t\tscrollToElement('.oct-checkout-block');
\t\t\t\t\t\trmNotify('warning', json['error']['warning_user_exist']);
\t\t\t\t\t\t\$('#input-payment-email').addClass('error_style');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['warning_payment_agree']) {
\t\t\t\t\t\trmNotify('warning', json['error']['warning_payment_agree']);
\t\t\t\t\t\t\$('#checkoutCheckbox').addClass('error_style');
\t\t\t\t\t}

\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\t// \$('[name=\"' + i + '\"]').after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t\$('.oct-checkout .form-control[name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['custom_field']) {
\t\t\t\t\t\tfor (i in json['error']['custom_field']) {
\t\t\t\t\t\t\t// \$('[name=\"' + i + '\"]').after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t\t\$('.oct-checkout .form-control#input-payment-custom-field' + i +
\t\t\t\t\t\t\t\t', .oct-checkout .form-control#input-custom-field' + i +
\t\t\t\t\t\t\t\t', .oct-checkout #input-payment-custom-field' + i + ' label').addClass(
\t\t\t\t\t\t\t\t'error_style');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\terror = false;
\t\t\t\t\t\$('[name=\\'payment_method\\']:checked').click();

\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t// alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$('select[name=\\'country_id\\']').on('change', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/oct_fastorder/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('select[name=\\'country_id\\']').after(' <i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},
\t\t\tsuccess: function (json) {

\t\t\t\t";
        // line 1088
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "postcode", [], "any", false, false, false, 1088) == 1)) {
            // line 1089
            echo "\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t\t} 
\t\t\t\t";
        }
        // line 1095
        echo "
\t\t\t\thtml = '<option value=\"\">";
        // line 1096
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] ==
\t\t\t\t\t\t\t'";
        // line 1103
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 1103) == 1)) ? (($context["zone_id"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_region", [], "any", false, false, false, 1103)));
        echo "'
\t\t\t\t\t\t\t) {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1111
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t";
        // line 1114
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 1114) == 1)) {
            // line 1115
            echo "\t\t\t\t\$('select[name=\\'zone_id\\']').html(html).val(''); 
\t\t\t\t";
        } else {
            // line 1117
            echo "\t\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t\t\t\$('select[name=\\'zone_id\\']').trigger('change'); 
\t\t\t\t";
        }
        // line 1120
        echo "\t\t\t\t\$('select[name=\\'shipping_country_id\\']').val('');
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$('select[name=\\'country_id\\']').trigger('change');

\t\$('select[name=\\'shipping_country_id\\']').on('change', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/oct_fastorder/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('select[name=\\'country_id\\']').after(' <i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},
\t\t\tsuccess: function (json) {

\t\t\t\t";
        // line 1142
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "postcode", [], "any", false, false, false, 1142) == 1)) {
            // line 1143
            echo "\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t\t} 
\t\t\t\t";
        }
        // line 1149
        echo "
\t\t\t\thtml = '<option value=\"\">";
        // line 1150
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] ==
\t\t\t\t\t\t\t'";
        // line 1157
        echo (((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 1157) == 1)) ? (($context["zone_id"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "default_region", [], "any", false, false, false, 1157)));
        echo "'
\t\t\t\t\t\t\t) {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1165
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t";
        // line 1168
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_fastorder_data"] ?? null), "country_and_region", [], "any", false, false, false, 1168) == 1)) {
            // line 1169
            echo "\t\t\t\t\$('select[name=\\'shipping_zone_id\\']').html(html).val(''); 
\t\t\t\t";
        } else {
            // line 1171
            echo "\t\t\t\t\$('select[name=\\'shipping_zone_id\\']').html(html); 
\t\t\t\t";
        }
        // line 1173
        echo "\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$('select[name=\\'shipping_country_id\\']').trigger('change');

\t\$('select[name=\\'country_id\\'], select[name=\\'zone_id\\'], select[name=\\'shipping_country_id\\'], select[name=\\'shipping_zone_id\\'], input[type=\\'radio\\'][name=\\'payment_address\\'], input[type=\\'radio\\'][name=\\'shipping_address\\']')
\t\t.on('change', function () {

\t\t\tif (\$(this).attr(\"name\") == 'country_id') {
\t\t\t\t\$(\"select[name=\\'zone_id\\']\").val('');
\t\t\t}

\t\t\tif (\$(this).attr(\"name\") == 'shipping_country_id') {
\t\t\t\t\$(\"select[name=\\'shipping_zone_id\\']\").val('');
\t\t\t}

\t\t\t\$(\".shipping-method\").load('index.php?route=checkout/oct_fastorder/shipping_method', \$(
\t\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'
\t\t\t\t), function () {
\t\t\t\tif (\$(\"input[name=\\'shipping_method\\']:first\").length) {
\t\t\t\t\t\$(\"input[name=\\'shipping_method\\']:first\").attr('checked', 'checked').prop('checked', true)
\t\t\t\t\t\t.click();
\t\t\t\t} else {
\t\t\t\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$(
\t\t\t\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'
\t\t\t\t\t\t));
\t\t\t\t}
\t\t\t});

\t\t\t\$(\".payment-method\").load('index.php?route=checkout/oct_fastorder/payment_method', \$(
\t\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'
\t\t\t\t), function () {
\t\t\t\t\$('input[name=\\'payment_method\\']:first').attr('checked', 'checked').prop('checked', true)
\t\t\t\t\t.click();
\t\t\t});
\t\t});

\t";
        // line 1214
        if (($context["customer_id"] ?? null)) {
            // line 1215
            echo "\t\$(function () {
\t\t\$('select[name=\\'shipping_address_id\\']').trigger('change');
\t});

\t\$('select[name=\\'shipping_address_id\\']').on('change', function () {
\t\t\$(\".shipping-method\").load('index.php?route=checkout/oct_fastorder/shipping_method', \$(
\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'
\t\t\t), function () {
\t\t\tif (\$(\"input[name=\\'shipping_method\\']:first\").length) {
\t\t\t\t\$(\"input[name=\\'shipping_method\\']:first\").attr('checked', 'checked').prop('checked', true)
\t\t\t\t\t.click();
\t\t\t} else {
\t\t\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$(
\t\t\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'
\t\t\t\t\t));
\t\t\t}
\t\t});
\t}); 
\t";
        }
        // line 1234
        echo "
\t\$('input[name=\\'city\\'], input[name=\\'shipping_city\\']').on('change', function () {
\t\t\$(\".shipping-method\").load('index.php?route=checkout/oct_fastorder/shipping_method', \$(
\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'
\t\t\t), function () {
\t\t\tif (\$(\"input[name=\\'shipping_method\\']:first\").length) {
\t\t\t\t\$(\"input[name=\\'shipping_method\\']:first\").attr('checked', 'checked').prop('checked', true)
\t\t\t\t\t.click();
\t\t\t} else {
\t\t\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$(
\t\t\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'
\t\t\t\t\t));
\t\t\t}
\t\t});
\t});

\t\$(document).delegate('input[name=\\'shipping_method\\']', 'click', function () {
\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$(
\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'
\t\t\t));
\t});

\t\$('body').delegate('input[name=\\'payment_method\\']', 'click', function () {
\t\tvar data = \$(
\t\t\t'.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'tel\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'
\t\t\t).serialize();
\t\tdata += '&_shipping_method=' + \$('.oct-checkout input[name=\\'shipping_method\\']:checked').prop('title') +
\t\t\t'&_payment_method=' + \$('.oct-checkout input[name=\\'payment_method\\']:checked').prop('title');

\t\tif (!error) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=checkout/oct_fastorder/confirm',
\t\t\t\ttype: 'post',
\t\t\t\tdata: data,
\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\$(\".oct-fastorder-payment\").html(html).addClass('d-none');
\t\t\t\t\tif (\$(\".oct-fastorder-payment input[type=button]\").length > 0) {
\t\t\t\t\t\t\$(\".oct-fastorder-payment input[type=button]\").click();
\t\t\t\t\t}
\t\t\t\t\tif (\$(\".oct-fastorder-payment input[type=submit]\").length > 0) {
\t\t\t\t\t\t\$(\".oct-fastorder-payment input[type=submit]\").click();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t});
\t\$(document).ready(function () {
\t\t\$('input:radio[name=\\'payment_method\\']:first').attr('checked', true).prop('checked', true);
\t});
\t//
\t-->
</script>
<script><!--
function update(target, status) {
\tlet input_val  = \$(target).parent().parent().children('input[name=quantity]').val(),
\t\tquantity   = parseInt(input_val),
\t\tproduct_id  = \$(target).parent().parent().parent().children('input[name=product_id]').val(),
\t\tproduct_id_q = \$(target).parent().parent().parent().children('input[name=product_id_q]').val(),
\t\tproduct_key = \$(target).parent().parent().find('input[name=product_id]').val(),
\t\turls     = null;

\tif (quantity <= 0) {
\t\tquantity = \$(target).parent().parent().children('input[name=quantity]').val(1);
\t\treturn;
\t}

\tif (status == 'update') {
\t\turls = 'index.php?route=checkout/oct_fastorder/cart&update=' + product_id + '&quantity=' + quantity;
\t} else if (status == 'add') {
\t\turls = 'index.php?route=checkout/oct_fastorder/cart&add=' + target + '&quantity=1';
\t} else {
\t\turls = 'index.php?route=checkout/oct_fastorder/cart&remove=' + product_key;
\t}

\t\$.ajax({
\t\turl: urls,
\t\ttype: 'get',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\tmasked('body', true);
\t\t},
\t\tsuccess: function(data) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/oct_fastorder/status_cart',
\t\t\ttype: 'get',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\tif (json['total']) {
\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\$('#oct-cart-quantity, .header-cart-index, #mobile_cart_index').html(json['total']);
\t\t\t\t\t\$('.rm-cart-text').html(json['total_amount']);
\t\t\t\t}, 100);
\t\t\t}
\t\t\tif (!json['redirect']) {
\t\t\t\tmasked('body', false);
\t\t\t\t\$(\".shipping-method\").load('index.php?route=checkout/oct_fastorder/shipping_method', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'), function() {
\t\t\t\t\t\t\t\tif (\$(\"input[name=\\'shipping_method\\']:first\").length) {
\t\t\t\t\t\t\t\t\t\$(\"input[name=\\'shipping_method\\']:first\").attr('checked', 'checked').prop('checked', true).click();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t} else {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t\t}
\t\t});
\t\t}
\t});
}
function update_manual(target, product_id) {
 var input_val = \$(target).val(),
\t quantity = parseInt(input_val);

 if (quantity <= 0 || isNaN(quantity)) {
\tquantity = \$(target).val(1);
\treturn;
 }

 \$.ajax({
\turl: 'index.php?route=checkout/oct_fastorder/cart&update=' + product_id + '&quantity=' + quantity,
\ttype: 'get',
\tdataType: 'html',
\tbeforeSend: function() {
\t\t\$('[data-dismiss=\"alert\"]').click();
\t\tmasked('body', true);
\t},
\tsuccess: function(data) {
\t \$.ajax({
\t\turl: 'index.php?route=checkout/oct_fastorder/status_cart',
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t if (json['total']) {
\t\t\tsetTimeout(function () {
\t\t\t\t\$('#oct-cart-quantity, .header-cart-index, #mobile_cart_index').html(json['total']);
\t\t\t\t\$('.rm-cart-text').html(json['total_amount']);
\t\t\t}, 100);
\t\t }
\t\t if (!json['redirect']) {
\t\t\tmasked('body', false);
\t\t\t\$(\".shipping-method\").load('index.php?route=checkout/oct_fastorder/shipping_method', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'), function() {
\t\t\t\t\t\t\tif (\$(\"input[name=\\'shipping_method\\']:first\").length) {
\t\t\t\t\t\t\t\t\$(\"input[name=\\'shipping_method\\']:first\").attr('checked', 'checked').prop('checked', true).click();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'));
\t\t\t\t\t\t\t}
\t\t\t\t\t });
\t\t\t\$(\".payment-method\").load('index.php?route=checkout/oct_fastorder/payment_method', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'), function() {
\t\t\t\t\$('input[name=\\'payment_method\\']:first').attr('checked', 'checked').prop('checked', true).click();
\t\t\t});

\t\t } else {
\t\t\tlocation = json['redirect'];
\t\t }
\t\t}
\t });
\t}
 });
}

function voucher_remove(voucher_key) {
 \$.ajax({
\turl: 'index.php?route=checkout/oct_fastorder/cart&remove=' + voucher_key,
\ttype: 'get',
\tdataType: 'html',
\tsuccess: function(data) {
\t \$.ajax({
\t\turl: 'index.php?route=checkout/oct_fastorder/status_cart',
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t if (json['total']) {
\t\t\tsetTimeout(function () {
\t\t\t\t\$('#oct-cart-quantity, .header-cart-index, #mobile_cart_index').html(json['total']);
\t\t\t\t\$('.rm-cart-text').html(json['total_amount']);
\t\t\t}, 100);
\t\t }
\t\t if (!json['redirect']) {

\t\t\t\$(\".shipping-method\").load('index.php?route=checkout/oct_fastorder/shipping_method', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, input[name=\\'shipping_method\\']:first, .oct-checkout textarea, .oct-checkout select'), function() {
\t\t\t\tif (\$(\"input[name=\\'shipping_method\\']:first\").length) {
\t\t\t\t\t\$(\"input[name=\\'shipping_method\\']:first\").attr('checked', 'checked').prop('checked', true).click();
\t\t\t\t} else {
\t\t\t\t\t\$(\"#cart-table\").load('index.php?route=checkout/oct_fastorder/cart', \$('.oct-checkout input[type=\\'text\\'], .oct-checkout input[type=\\'date\\'], .oct-checkout input[type=\\'datetime-local\\'], .oct-checkout input[type=\\'time\\'], .oct-checkout input[type=\\'password\\'], .oct-checkout input[type=\\'hidden\\'], .oct-checkout input[type=\\'checkbox\\']:checked, .oct-checkout input[type=\\'radio\\']:checked, .oct-checkout textarea, .oct-checkout select'));
\t\t\t\t}
\t\t\t});

\t\t } else {
\t\t\tlocation = json['redirect'];
\t\t }
\t\t}
\t });
\t}
 });
}
</script>
";
        // line 1435
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/checkout/oct_fastorder/fastorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3133 => 1435,  2930 => 1234,  2909 => 1215,  2907 => 1214,  2864 => 1173,  2860 => 1171,  2856 => 1169,  2854 => 1168,  2848 => 1165,  2837 => 1157,  2827 => 1150,  2824 => 1149,  2816 => 1143,  2814 => 1142,  2790 => 1120,  2785 => 1117,  2781 => 1115,  2779 => 1114,  2773 => 1111,  2762 => 1103,  2752 => 1096,  2749 => 1095,  2741 => 1089,  2739 => 1088,  2632 => 983,  2626 => 980,  2622 => 978,  2620 => 977,  2611 => 970,  2605 => 968,  2599 => 966,  2597 => 965,  2594 => 964,  2588 => 961,  2585 => 960,  2580 => 957,  2575 => 954,  2573 => 953,  2570 => 952,  2567 => 951,  2560 => 948,  2555 => 945,  2550 => 942,  2548 => 941,  2545 => 940,  2543 => 939,  2540 => 938,  2534 => 935,  2530 => 934,  2527 => 933,  2524 => 932,  2515 => 929,  2511 => 928,  2508 => 927,  2504 => 926,  2501 => 925,  2489 => 915,  2480 => 913,  2476 => 912,  2473 => 911,  2471 => 910,  2466 => 909,  2464 => 908,  2460 => 907,  2454 => 903,  2450 => 901,  2436 => 895,  2430 => 894,  2418 => 885,  2414 => 884,  2410 => 883,  2405 => 881,  2400 => 879,  2393 => 874,  2387 => 872,  2384 => 871,  2381 => 870,  2376 => 868,  2373 => 867,  2370 => 866,  2367 => 865,  2359 => 862,  2353 => 860,  2348 => 859,  2343 => 858,  2335 => 857,  2329 => 855,  2327 => 854,  2321 => 853,  2318 => 852,  2313 => 851,  2311 => 850,  2308 => 849,  2304 => 847,  2302 => 846,  2298 => 845,  2294 => 844,  2291 => 843,  2286 => 841,  2277 => 840,  2275 => 839,  2269 => 835,  2265 => 834,  2262 => 833,  2254 => 829,  2251 => 828,  2243 => 824,  2240 => 823,  2238 => 822,  2233 => 819,  2230 => 818,  2219 => 814,  2214 => 812,  2209 => 811,  2204 => 809,  2199 => 808,  2196 => 807,  2194 => 806,  2190 => 804,  2186 => 803,  2181 => 802,  2178 => 801,  2173 => 799,  2170 => 798,  2168 => 797,  2163 => 795,  2154 => 788,  2150 => 786,  2144 => 785,  2138 => 783,  2135 => 782,  2123 => 779,  2118 => 777,  2113 => 776,  2108 => 774,  2103 => 773,  2100 => 772,  2098 => 771,  2094 => 769,  2089 => 768,  2087 => 767,  2082 => 766,  2078 => 765,  2072 => 763,  2069 => 762,  2064 => 760,  2061 => 759,  2059 => 758,  2054 => 756,  2038 => 743,  2034 => 742,  2026 => 737,  2022 => 736,  2018 => 734,  2011 => 730,  2001 => 725,  1998 => 724,  1995 => 723,  1991 => 721,  1985 => 718,  1981 => 717,  1978 => 716,  1975 => 715,  1967 => 712,  1964 => 711,  1961 => 710,  1954 => 705,  1949 => 703,  1946 => 702,  1938 => 697,  1932 => 694,  1925 => 692,  1922 => 691,  1919 => 690,  1911 => 685,  1908 => 684,  1898 => 677,  1891 => 672,  1885 => 671,  1876 => 668,  1871 => 666,  1866 => 665,  1863 => 664,  1859 => 663,  1855 => 662,  1848 => 658,  1841 => 656,  1838 => 655,  1835 => 654,  1831 => 652,  1823 => 647,  1819 => 646,  1814 => 644,  1810 => 642,  1807 => 641,  1803 => 639,  1795 => 634,  1789 => 631,  1785 => 629,  1782 => 628,  1778 => 626,  1770 => 621,  1764 => 618,  1760 => 616,  1758 => 615,  1751 => 611,  1745 => 608,  1739 => 605,  1735 => 604,  1732 => 603,  1729 => 602,  1723 => 599,  1719 => 597,  1716 => 596,  1711 => 593,  1705 => 592,  1700 => 590,  1692 => 589,  1687 => 588,  1682 => 587,  1677 => 585,  1669 => 584,  1664 => 583,  1659 => 582,  1656 => 581,  1652 => 580,  1645 => 576,  1641 => 574,  1638 => 573,  1636 => 572,  1631 => 571,  1626 => 570,  1623 => 569,  1617 => 566,  1614 => 565,  1609 => 564,  1605 => 562,  1603 => 561,  1600 => 560,  1597 => 559,  1594 => 558,  1588 => 557,  1585 => 556,  1577 => 551,  1571 => 550,  1567 => 549,  1559 => 547,  1552 => 545,  1549 => 544,  1546 => 543,  1538 => 538,  1532 => 537,  1526 => 536,  1517 => 533,  1510 => 531,  1507 => 530,  1504 => 529,  1496 => 524,  1490 => 523,  1484 => 522,  1475 => 519,  1468 => 517,  1465 => 516,  1462 => 515,  1455 => 511,  1451 => 510,  1445 => 509,  1440 => 507,  1435 => 505,  1428 => 502,  1421 => 500,  1418 => 499,  1415 => 498,  1408 => 494,  1404 => 493,  1400 => 492,  1394 => 491,  1385 => 488,  1378 => 486,  1375 => 485,  1372 => 484,  1364 => 479,  1358 => 478,  1352 => 477,  1343 => 474,  1336 => 472,  1333 => 471,  1330 => 470,  1324 => 466,  1315 => 463,  1311 => 462,  1305 => 461,  1300 => 458,  1296 => 457,  1292 => 456,  1286 => 454,  1279 => 452,  1276 => 451,  1273 => 450,  1267 => 446,  1258 => 443,  1254 => 442,  1248 => 441,  1243 => 438,  1239 => 437,  1235 => 436,  1229 => 434,  1222 => 432,  1219 => 431,  1216 => 430,  1210 => 426,  1202 => 424,  1197 => 423,  1193 => 422,  1189 => 421,  1184 => 419,  1178 => 418,  1169 => 415,  1162 => 413,  1159 => 412,  1156 => 411,  1153 => 410,  1148 => 409,  1145 => 408,  1141 => 406,  1134 => 402,  1128 => 401,  1123 => 399,  1118 => 398,  1114 => 396,  1108 => 395,  1105 => 394,  1101 => 392,  1094 => 388,  1088 => 387,  1083 => 385,  1078 => 384,  1074 => 382,  1068 => 381,  1065 => 380,  1061 => 378,  1054 => 374,  1048 => 373,  1043 => 371,  1038 => 370,  1034 => 368,  1028 => 367,  1025 => 366,  1019 => 364,  1013 => 361,  1005 => 360,  1000 => 358,  995 => 357,  991 => 355,  985 => 354,  982 => 353,  974 => 348,  971 => 347,  963 => 342,  959 => 340,  954 => 339,  950 => 337,  944 => 336,  936 => 334,  927 => 331,  924 => 330,  920 => 329,  916 => 328,  910 => 325,  905 => 324,  901 => 322,  895 => 321,  893 => 320,  889 => 318,  885 => 316,  878 => 312,  872 => 311,  867 => 309,  864 => 308,  858 => 307,  855 => 306,  852 => 305,  844 => 300,  838 => 296,  832 => 295,  823 => 293,  816 => 292,  811 => 291,  802 => 289,  795 => 288,  790 => 287,  787 => 286,  783 => 285,  776 => 281,  771 => 278,  768 => 277,  765 => 276,  762 => 275,  756 => 274,  753 => 273,  745 => 268,  741 => 267,  737 => 266,  731 => 265,  722 => 262,  718 => 260,  715 => 259,  707 => 254,  703 => 253,  699 => 252,  693 => 251,  684 => 248,  680 => 246,  677 => 245,  669 => 240,  665 => 239,  661 => 238,  655 => 237,  646 => 234,  642 => 232,  639 => 231,  632 => 227,  628 => 226,  622 => 225,  617 => 223,  612 => 221,  605 => 218,  601 => 216,  598 => 215,  591 => 211,  587 => 210,  583 => 209,  577 => 208,  568 => 205,  564 => 203,  561 => 202,  553 => 197,  549 => 196,  545 => 195,  539 => 194,  530 => 191,  526 => 189,  523 => 188,  517 => 184,  510 => 182,  505 => 180,  501 => 179,  495 => 178,  491 => 176,  486 => 174,  481 => 172,  475 => 171,  471 => 169,  469 => 168,  466 => 167,  462 => 166,  458 => 165,  452 => 163,  448 => 161,  445 => 160,  439 => 156,  432 => 154,  427 => 152,  423 => 151,  417 => 150,  413 => 148,  408 => 146,  403 => 144,  397 => 143,  393 => 141,  391 => 140,  388 => 139,  384 => 138,  380 => 137,  374 => 135,  370 => 133,  367 => 132,  361 => 128,  355 => 127,  350 => 125,  345 => 124,  340 => 122,  335 => 121,  332 => 120,  328 => 119,  324 => 118,  319 => 116,  313 => 115,  304 => 112,  300 => 110,  297 => 109,  294 => 108,  289 => 107,  286 => 106,  282 => 104,  276 => 101,  270 => 100,  265 => 98,  262 => 97,  260 => 96,  254 => 93,  250 => 92,  245 => 90,  237 => 88,  231 => 86,  225 => 83,  221 => 82,  217 => 81,  214 => 80,  212 => 79,  207 => 77,  203 => 76,  199 => 75,  195 => 73,  192 => 72,  188 => 70,  181 => 66,  177 => 65,  172 => 63,  168 => 61,  166 => 60,  160 => 57,  156 => 56,  151 => 54,  147 => 52,  141 => 50,  137 => 48,  125 => 45,  123 => 44,  119 => 43,  115 => 41,  111 => 40,  107 => 39,  104 => 38,  102 => 37,  98 => 35,  92 => 33,  90 => 32,  85 => 30,  70 => 18,  66 => 16,  52 => 6,  50 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/checkout/oct_fastorder/fastorder.twig", "");
    }
}
