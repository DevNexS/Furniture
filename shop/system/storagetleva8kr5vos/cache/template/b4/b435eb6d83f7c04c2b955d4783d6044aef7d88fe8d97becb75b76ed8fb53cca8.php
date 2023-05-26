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

/* oct_remarket/template/account/register.twig */
class __TwigTemplate_09a60af39dcd1436f488588d1d156382a01fce334905f2c9ba0a2b70a0b3f7b7 extends \Twig\Template
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
<div id=\"account-register\" class=\"container account-container\">
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
        if (($context["error_warning"] ?? null)) {
            // line 11
            echo "\t<script>
\trmNotify('danger', '";
            // line 12
            echo ($context["error_warning"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 15
        echo "\t<div class=\"row\">
\t    <div id=\"content\" class=\"col-12\">
\t\t\t<div class=\"rm-content rm-account-content h-100\">
\t\t      <div class=\"rm-account-text mb-4\">";
        // line 18
        echo ($context["text_account_already"] ?? null);
        echo "</div>
\t\t      <form action=\"";
        // line 19
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t        <fieldset id=\"account\" class=\"rm-account-form\">
\t\t          <legend class=\"rm-content-title\">";
        // line 21
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
\t\t          <div class=\"form-group d-";
        // line 22
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo "block ";
        } else {
            echo "none ";
        }
        echo "\">
\t\t            <label class=\"rm-control-label\"><span class=\"required\">*</span> ";
        // line 23
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 25
            echo "\t\t              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 25) == ($context["customer_group_id"] ?? null))) {
                // line 26
                echo "\t\t              <div class=\"radio\">
\t\t                <label class=\"option\">
\t\t                  <input type=\"radio\" name=\"customer_group_id\" class=\"input-radio\" value=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 28);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t  <span class=\"radio-box\"></span>
\t\t                  ";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 30);
                echo "
\t\t                </label>
\t\t              </div>
\t\t              ";
            } else {
                // line 34
                echo "\t\t              <div class=\"radio\">
\t\t                <label class=\"option\">
\t\t                  <input type=\"radio\" name=\"customer_group_id\" class=\"input-radio\" value=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 36);
                echo "\" />
\t\t\t\t\t\t  <span class=\"radio-box\"></span>
\t\t                  ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 38);
                echo "
\t\t                </label>
\t\t              </div>
\t\t              ";
            }
            // line 42
            echo "\t\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t          </div>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\" for=\"input-firstname\"><span class=\"required\">*</span> ";
        // line 45
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t            ";
        // line 46
        if (($context["error_firstname"] ?? null)) {
            // line 47
            echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
            // line 48
            echo ($context["error_firstname"] ?? null);
            echo "');
\t\t\t\t\t</script>
\t\t            ";
        }
        // line 51
        echo "\t\t            <input type=\"text\" name=\"firstname\" value=\"";
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
\t\t          </div>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\" for=\"input-lastname\"><span class=\"required\">*</span> ";
        // line 54
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
\t\t            ";
        // line 55
        if (($context["error_lastname"] ?? null)) {
            // line 56
            echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
            // line 57
            echo ($context["error_lastname"] ?? null);
            echo "');
\t\t\t\t\t</script>
\t\t            ";
        }
        // line 60
        echo "\t\t            <input type=\"text\" name=\"lastname\" value=\"";
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
\t\t          </div>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\" for=\"input-email\"><span class=\"required\">*</span> ";
        // line 63
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t            ";
        // line 64
        if (($context["error_email"] ?? null)) {
            // line 65
            echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
            // line 66
            echo ($context["error_email"] ?? null);
            echo "');
\t\t\t\t\t</script>
\t\t            ";
        }
        // line 69
        echo "\t\t            <input type=\"email\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t          </div>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\" for=\"input-telephone\"><span class=\"required\">*</span> ";
        // line 72
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t            ";
        // line 73
        if (($context["error_telephone"] ?? null)) {
            // line 74
            echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
            // line 75
            echo ($context["error_telephone"] ?? null);
            echo "');
\t\t\t\t\t</script>
\t\t            ";
        }
        // line 78
        echo "\t\t            <input type=\"tel\" name=\"telephone\" value=\"";
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
\t\t          </div>
\t\t          ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 81
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 81) == "select")) {
                // line 82
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 82);
                echo "\">
\t\t            <label class=\"rm-control-label\" for=\"input-custom-field";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 83);
                echo "</label>
\t\t            ";
                // line 84
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null)) {
                    // line 85
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 86
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 89
                echo "\t\t            <select name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 89);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                echo "\" class=\"rm-select form-control\">
\t\t                <option value=\"\">";
                // line 90
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t                ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 92
                    echo "\t\t                ";
                    if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["register_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 92)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92) == (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null)))) {
                        // line 93
                        echo "\t\t                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 93);
                        echo "</option>
\t\t                ";
                    } else {
                        // line 95
                        echo "\t\t                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 95);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 95);
                        echo "</option>
\t\t                ";
                    }
                    // line 97
                    echo "\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "\t\t            </select>
\t\t          </div>
\t\t          ";
            }
            // line 101
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 101) == "radio")) {
                // line 102
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 102);
                echo "\">
\t\t            <label class=\"rm-control-label\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 103);
                echo "</label>
\t\t            ";
                // line 104
                if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)) {
                    // line 105
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 106
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 109
                echo "\t\t            <div>
\t\t            \t";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    echo "\t\t                <div class=\"radio\">
\t\t\t                ";
                    // line 112
                    if (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["register_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112) == (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null)))) {
                        // line 113
                        echo "\t\t\t                <label class=\"option\">
\t\t\t                    <input type=\"radio\" name=\"custom_field[";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\" checked=\"checked\" />
\t\t\t                    <span class=\"radio-box\"></span>
\t\t\t                    ";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                        echo "
\t\t\t                </label>
\t\t\t                ";
                    } else {
                        // line 119
                        echo "\t\t\t                <label class=\"option\">
\t\t\t                    <input type=\"radio\" name=\"custom_field[";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 120);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                        echo "\" />
\t\t\t                    <span class=\"radio-box\"></span>
\t\t\t                    ";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                        echo "
\t\t\t                </label>
\t\t\t                ";
                    }
                    // line 125
                    echo "\t\t                </div>
\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t            </div>
\t\t          </div>
\t\t          ";
            }
            // line 130
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "checkbox")) {
                // line 131
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 131);
                echo "\">
\t\t            <label class=\"rm-control-label\">";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                echo "</label>
\t\t            ";
                // line 133
                if ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)) {
                    // line 134
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 135
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 138
                echo "\t\t            <div class=\"form-checkbox-group\">
\t\t            \t";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 139));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 140
                    echo "\t\t                <div class=\"checkbox\">
\t\t\t                ";
                    // line 141
                    if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["register_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 141), (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["register_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null)))) {
                        // line 142
                        echo "\t\t\t                <label>
\t\t\t                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 143);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143);
                        echo "\" checked=\"checked\" class=\"rm-form-checkbox-input\" />
\t\t\t                    <span class=\"check-box\"></span>
\t\t\t                    ";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 145);
                        echo "
\t\t\t                </label>
\t\t\t                ";
                    } else {
                        // line 148
                        echo "\t\t\t                <label>
\t\t\t                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 149);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 149);
                        echo "\" class=\"rm-form-checkbox-input\" />
\t\t\t                    <span class=\"check-box\"></span>
\t\t\t                    ";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 151);
                        echo "
\t\t\t                </label>
\t\t\t                ";
                    }
                    // line 154
                    echo "\t\t                </div>
\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "\t\t            </div>
\t\t          </div>
\t\t          ";
            }
            // line 159
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "text")) {
                // line 160
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 160);
                echo "\">
\t\t            <label class=\"rm-control-label\" for=\"input-custom-field";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                echo "</label>
\t\t            ";
                // line 162
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162)] ?? null) : null)) {
                    // line 163
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 164
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["error_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 167
                echo "\t\t            <input type=\"text\" name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 167);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "]\" value=\"";
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["register_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["register_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\" class=\"form-control\" />
\t\t          </div>
\t\t          ";
            }
            // line 170
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 170) == "textarea")) {
                // line 171
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 171);
                echo "\">
\t\t            <label class=\"rm-control-label\" for=\"input-custom-field";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                echo "</label>
\t\t            ";
                // line 173
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["error_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)) {
                    // line 174
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 175
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["error_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 178
                echo "\t\t            <textarea name=\"custom_field[";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 178);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                echo "\" class=\"form-control\">";
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)) {
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["register_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 178);
                }
                echo "</textarea>
\t\t          </div>
\t\t          ";
            }
            // line 181
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 181) == "file")) {
                // line 182
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 182);
                echo "\">
\t\t            <label class=\"rm-control-label\">";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                echo "</label>
\t\t            ";
                // line 184
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null)) {
                    // line 185
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 186
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["error_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 189
                echo "\t\t            <button type=\"button\" id=\"button-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"rm-btn dark\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
\t\t              <input type=\"hidden\" name=\"custom_field[";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 190);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                echo "]\" value=\"";
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["register_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["register_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
\t\t          </div>
\t\t          ";
            }
            // line 193
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "date")) {
                // line 194
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                echo "\">
\t\t            <label class=\"rm-control-label\" for=\"input-custom-field";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "</label>
\t\t            ";
                // line 196
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) {
                    // line 197
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 198
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 201
                echo "\t\t            <div class=\"input-group date\">
\t\t                <input type=\"text\" name=\"custom_field[";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 202);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "]\" value=\"";
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["register_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["register_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 202);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 202);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "\" class=\"form-control\" />
\t\t                <span class=\"input-group-btn\">
\t\t                \t<button type=\"button\" class=\"rm-btn rm-input-with-btn\"><i class=\"fa fa-calendar\"></i></button>
\t\t                </span>
\t\t            </div>
\t\t          </div>
\t\t          ";
            }
            // line 209
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 209) == "time")) {
                // line 210
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 210);
                echo "\">
\t\t            <label class=\"rm-control-label\" for=\"input-custom-field";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 211);
                echo "</label>
\t\t            ";
                // line 212
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)) {
                    // line 213
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 214
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 217
                echo "\t\t            <div class=\"input-group time\">
\t\t                <input type=\"text\" name=\"custom_field[";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 218);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                echo "]\" value=\"";
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null)) {
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["register_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 218);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 218);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 218);
                echo "\" class=\"form-control\" />
\t\t                <span class=\"input-group-btn\">
\t\t                \t<button type=\"button\" class=\"rm-btn rm-input-with-btn\"><i class=\"fa fa-clock\"></i></button>
\t\t                </span>
\t\t            </div>
\t\t          </div>
\t\t          ";
            }
            // line 225
            echo "\t\t          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 225) == "time")) {
                // line 226
                echo "\t\t          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 226);
                echo "\">
\t\t            <label class=\"rm-control-label\" for=\"input-custom-field";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 227);
                echo "</label>
\t\t            ";
                // line 228
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["error_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null)) {
                    // line 229
                    echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
                    // line 230
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["error_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230)] ?? null) : null);
                    echo "');
\t\t\t\t\t</script>
\t\t            ";
                }
                // line 233
                echo "\t\t            <div class=\"input-group datetime\">
\t\t                <input type=\"text\" name=\"custom_field[";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 234);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "]\" value=\"";
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null)) {
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 234);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "\" class=\"form-control\" />
\t\t                <span class=\"input-group-btn\">
\t\t                \t<button type=\"button\" class=\"rm-btn rm-input-with-btn\"><i class=\"fa fa-calendar\"></i></button>
\t\t                </span>
\t\t            </div>
\t\t          </div>
\t\t          ";
            }
            // line 241
            echo "\t\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "\t\t        </fieldset>
\t\t        <fieldset class=\"rm-account-form\">
\t\t          <legend class=\"rm-content-title mt-4\">";
        // line 244
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\" for=\"input-password\"><span class=\"required\">*</span> ";
        // line 246
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t            ";
        // line 247
        if (($context["error_password"] ?? null)) {
            // line 248
            echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
            // line 249
            echo ($context["error_password"] ?? null);
            echo "');
\t\t\t\t\t</script>
\t\t            ";
        }
        // line 252
        echo "\t\t            <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t          </div>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\" for=\"input-confirm\"><span class=\"required\">*</span> ";
        // line 255
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t\t            ";
        // line 256
        if (($context["error_confirm"] ?? null)) {
            // line 257
            echo "\t\t            <script>
\t\t\t\t\trmNotify('danger', '";
            // line 258
            echo ($context["error_confirm"] ?? null);
            echo "');
\t\t\t\t\t</script>
\t\t            ";
        }
        // line 261
        echo "\t\t            <input type=\"password\" name=\"confirm\" value=\"";
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
\t\t          </div>
\t\t        </fieldset>
\t\t        <fieldset class=\"rm-account-form\">
\t\t          <legend class=\"rm-content-title mt-4\">";
        // line 265
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
\t\t          <div class=\"form-group\">
\t\t            <label class=\"rm-control-label\">";
        // line 267
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t            <div class=\"d-flex\">
\t\t\t            ";
        // line 269
        if (($context["newsletter"] ?? null)) {
            // line 270
            echo "\t\t\t            <div class=\"radio\">
\t\t\t\t            <label class=\"option\">
\t\t\t\t\t            <input type=\"radio\" name=\"newsletter\" class=\"input-radio\" id=\"CheckYes\" class=\"form-check-input\" value=\"1\" checked=\"checked\" />
\t\t\t\t            \t<span class=\"radio-box\"></span>
\t\t\t\t\t            ";
            // line 274
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t            </label>
\t\t\t            </div>
\t\t\t            <div class=\"radio\">
\t\t\t\t            <label class=\"option\">
\t\t\t\t\t            <input type=\"radio\" name=\"newsletter\" class=\"input-radio\" id=\"CheckNo\" class=\"form-check-input\" value=\"0\" />
\t\t\t\t            \t<span class=\"radio-box\"></span>
\t\t\t\t\t            ";
            // line 281
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t            </label>
\t\t\t            </div>
\t\t\t            ";
        } else {
            // line 285
            echo "\t\t\t            <div class=\"radio\">
\t\t\t                <label class=\"option\">
\t\t\t\t                <input type=\"radio\" name=\"newsletter\" class=\"input-radio\" id=\"CheckYes\" class=\"form-check-input\" value=\"1\" />
\t\t\t\t            \t<span class=\"radio-box\"></span>
\t\t\t\t                ";
            // line 289
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t                </label>
\t\t\t            </div>
\t\t\t            <div class=\"radio\">
\t\t\t                <label class=\"option\">
\t\t\t\t                <input type=\"radio\" name=\"newsletter\" class=\"input-radio\" id=\"CheckNo\" class=\"form-check-input\" value=\"0\" checked=\"checked\" />
\t\t\t\t            \t<span class=\"radio-box\"></span>
\t\t\t\t                ";
            // line 296
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t                </label>
\t\t\t            </div>
\t\t\t            ";
        }
        // line 300
        echo "\t\t            </div>
\t\t          </div>
\t\t        </fieldset>
\t\t        ";
        // line 303
        echo ($context["captcha"] ?? null);
        echo "
\t\t        ";
        // line 304
        if (($context["text_agree"] ?? null)) {
            // line 305
            echo "\t        \t<div class=\"form-checkbox-group\">
\t        \t\t<label>
\t\t\t            ";
            // line 307
            if (($context["agree"] ?? null)) {
                // line 308
                echo "\t\t\t            <input type=\"checkbox\" name=\"agree\" id=\"scales\" class=\"rm-form-checkbox-input\" value=\"1\" checked=\"checked\" />
\t\t\t            ";
            } else {
                // line 310
                echo "\t\t\t            <input type=\"checkbox\" name=\"agree\" id=\"scales\" class=\"rm-form-checkbox-input\" value=\"1\" />
\t\t\t            ";
            }
            // line 312
            echo "\t                    <span class=\"check-box\"></span>
\t\t\t            ";
            // line 313
            echo ($context["text_agree"] ?? null);
            echo "
\t\t            </label>
\t        \t</div>
\t\t\t    ";
        }
        // line 317
        echo "\t\t        <div class=\"btn-group\">
\t\t\t\t\t<button type=\"submit\" class=\"mt-4 rm-btn dark\">";
        // line 318
        echo ($context["button_continue"] ?? null);
        echo "</button>
\t\t        </div>
\t\t      </form>
\t\t    </div>
\t    </div>
\t</div>
\t";
        // line 324
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
<script>
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');

\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\tlanguage: '";
        // line 426
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 431
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 436
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
</script>
";
        // line 441
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1085 => 441,  1077 => 436,  1069 => 431,  1061 => 426,  956 => 324,  947 => 318,  944 => 317,  937 => 313,  934 => 312,  930 => 310,  926 => 308,  924 => 307,  920 => 305,  918 => 304,  914 => 303,  909 => 300,  902 => 296,  892 => 289,  886 => 285,  879 => 281,  869 => 274,  863 => 270,  861 => 269,  856 => 267,  851 => 265,  841 => 261,  835 => 258,  832 => 257,  830 => 256,  826 => 255,  817 => 252,  811 => 249,  808 => 248,  806 => 247,  802 => 246,  797 => 244,  793 => 242,  787 => 241,  765 => 234,  762 => 233,  756 => 230,  753 => 229,  751 => 228,  745 => 227,  738 => 226,  735 => 225,  713 => 218,  710 => 217,  704 => 214,  701 => 213,  699 => 212,  693 => 211,  686 => 210,  683 => 209,  661 => 202,  658 => 201,  652 => 198,  649 => 197,  647 => 196,  641 => 195,  634 => 194,  631 => 193,  617 => 190,  608 => 189,  602 => 186,  599 => 185,  597 => 184,  593 => 183,  586 => 182,  583 => 181,  564 => 178,  558 => 175,  555 => 174,  553 => 173,  547 => 172,  540 => 171,  537 => 170,  518 => 167,  512 => 164,  509 => 163,  507 => 162,  501 => 161,  494 => 160,  491 => 159,  486 => 156,  479 => 154,  473 => 151,  464 => 149,  461 => 148,  455 => 145,  446 => 143,  443 => 142,  441 => 141,  438 => 140,  434 => 139,  431 => 138,  425 => 135,  422 => 134,  420 => 133,  416 => 132,  409 => 131,  406 => 130,  401 => 127,  394 => 125,  388 => 122,  379 => 120,  376 => 119,  370 => 116,  361 => 114,  358 => 113,  356 => 112,  353 => 111,  349 => 110,  346 => 109,  340 => 106,  337 => 105,  335 => 104,  331 => 103,  324 => 102,  321 => 101,  316 => 98,  310 => 97,  302 => 95,  294 => 93,  291 => 92,  287 => 91,  283 => 90,  274 => 89,  268 => 86,  265 => 85,  263 => 84,  257 => 83,  250 => 82,  247 => 81,  243 => 80,  235 => 78,  229 => 75,  226 => 74,  224 => 73,  220 => 72,  211 => 69,  205 => 66,  202 => 65,  200 => 64,  196 => 63,  187 => 60,  181 => 57,  178 => 56,  176 => 55,  172 => 54,  163 => 51,  157 => 48,  154 => 47,  152 => 46,  148 => 45,  144 => 43,  138 => 42,  131 => 38,  126 => 36,  122 => 34,  115 => 30,  110 => 28,  106 => 26,  103 => 25,  99 => 24,  95 => 23,  87 => 22,  83 => 21,  78 => 19,  74 => 18,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/register.twig", "");
    }
}
