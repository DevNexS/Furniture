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

/* octemplates/theme/oct_remarket.twig */
class __TwigTemplate_e617ce529bb189fe9c5f72599bb3568b9f47fc74d202c2f474d2f979dddf7c58 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 6
        if (($context["update"] ?? null)) {
            // line 7
            echo "\t\t\t\t<a href=\"";
            echo ($context["update"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t";
            if ((array_key_exists("quick_start", $context) && ($context["quick_start"] ?? null))) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo ($context["quick_start"] ?? null);
                echo "\" data-toggle=\"tooltip\" title=\"Quick Start\" class=\"btn btn-danger\"><i class=\"fa fa-quora\"></i></a>
\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t<a href=\"";
            echo ($context["clear_modification"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_refresh"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t<button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
            // line 13
            echo ($context["button_save"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
            // line 14
            echo ($context["cache_delete"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_clear_cache"] ?? null);
            echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a>
\t\t\t\t";
            // line 15
            if ((twig_length_filter($this->env, ($context["stores"] ?? null)) > 1)) {
                // line 16
                echo "\t\t\t\t<div class=\"dropdown\" style=\"display:inline-block;\">
\t\t\t\t\t<a href=\"javascript:;\" data-toggle=\"dropdown\" title=\"";
                // line 17
                echo ($context["button_multistore"] ?? null);
                echo "\" class=\"dropdown-toggle btn btn-info\"><i class=\"fas fa-store\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 20
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 20);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t<a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 31
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 31);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 37
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t<script>
\t\t\tusNotify('warning', '";
            // line 39
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t</script>
\t\t";
        }
        // line 42
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 43
            echo "\t    <script>
\t\t\tusNotify('success', '";
            // line 44
            echo ($context["success"] ?? null);
            echo "');
\t\t</script>
\t    ";
        }
        // line 47
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 49
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t\t<div class=\"pull-right oct-version\">v.<span>";
        // line 50
        echo ($context["theme_oct_remarket_version"] ?? null);
        echo "</span></div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 53
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 55
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\"><i class=\"fa fa-picture-o fw\"></i> ";
        // line 56
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-widgets\" data-toggle=\"tab\"><i class=\"fa fa-cog fw\"></i> ";
        // line 57
        echo ($context["tab_widgets"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-seo_title\" data-toggle=\"tab\"><i class=\"fa fa-info fw\"></i> ";
        // line 58
        echo ($context["text_seo_title"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-help\" data-toggle=\"tab\"><i class=\"fas fa-info-circle\"></i> ";
        // line 59
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
\t\t            </ul>
\t\t            <div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 65
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 66
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-down fw\"></i> ";
        // line 67
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-users fw\"></i> ";
        // line 68
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fab fa-medium-m fw\"></i> ";
        // line 69
        echo ($context["tab_menu"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-category\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-folder-open fw\"></i> ";
        // line 70
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-tv fw\"></i> ";
        // line 71
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-orders\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"far fa-check-circle fw\"></i> ";
        // line 72
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"code_mir\" href=\"#tab-css_js\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 73
        echo ($context["tab_css_js"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings-main\" data-toggle=\"tab\">";
        // line 80
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-optimization\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 81
        echo ($context["text_optimization"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-settings-colors\" data-toggle=\"tab\">";
        // line 82
        echo ($context["text_main_color_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings-main\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 87
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_directory\" value=\"";
        // line 88
        echo ($context["theme_oct_remarket_directory"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"theme_oct_remarket_status\">";
        // line 90
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_status\" ";
        // line 93
        if (($context["theme_oct_remarket_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_remarket_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_remarket_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-license\">";
        // line 105
        echo ($context["entry_license"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-license\" name=\"theme_oct_remarket_license\" value=\"";
        // line 107
        echo ($context["theme_oct_remarket_license"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX-XXXXX\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        if (($context["error_license"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 111
            echo ($context["error_license"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-micro\">";
        // line 119
        echo ($context["entry_micro"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[micro]\" ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "micro", [], "any", false, false, false, 122)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-micro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-micro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-open_graph\">";
        // line 134
        echo ($context["entry_open_graph"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[open_graph]\" ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "open_graph", [], "any", false, false, false, 137)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-open_graph\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-open_graph\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-no_quantity_grayscale\">";
        // line 151
        echo ($context["entry_no_quantity_grayscale"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_no_quantity_grayscale\" ";
        // line 154
        if (($context["theme_oct_remarket_no_quantity_grayscale"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_grayscale\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-no_quantity_grayscale\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-compare\">";
        // line 168
        echo ($context["entry_header_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data_colors[compare]\" ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "compare", [], "any", false, false, false, 171)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-compare\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-compare\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-wishlist\">";
        // line 183
        echo ($context["entry_header_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data_colors[wishlist]\" ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "wishlist", [], "any", false, false, false, 186)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-wishlist\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-wishlist\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-optimization\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 202
        echo ($context["text_optimization"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-minify\">";
        // line 205
        echo ($context["entry_minify"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[minify]\" ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "minify", [], "any", false, false, false, 208)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-minify\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-minify\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-webp\">";
        // line 220
        echo ($context["entry_webp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_webp\" ";
        // line 223
        if (($context["theme_oct_remarket_webp"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-webp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-webp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer-scripts\">";
        // line 237
        echo ($context["entry_footer_scripts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_scripts]\" ";
        // line 240
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_scripts", [], "any", false, false, false, 240)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer-scripts\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer-scripts\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 253
        echo ($context["entry_preload_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-preload_images\">";
        // line 256
        echo ($context["entry_preload_images"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[preload_images]\" ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "preload_images", [], "any", false, false, false, 259)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-preload_images\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-preload_images\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-preload_styles\">";
        // line 271
        echo ($context["entry_preload_styles"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[preload_styles]\" ";
        // line 274
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "preload_styles", [], "any", false, false, false, 274)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-preload_styles\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-preload_styles\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 288
        echo ($context["entry_lazyload"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_mobile\">";
        // line 291
        echo ($context["entry_lazyload_mobile"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_lazyload_mobile\" ";
        // line 294
        if (($context["theme_oct_remarket_lazyload_mobile"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-lazyload_mobile\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-lazyload_mobile\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_tablet\">";
        // line 306
        echo ($context["entry_lazyload_tablet"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_lazyload_tablet\" ";
        // line 309
        if (($context["theme_oct_remarket_lazyload_tablet"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-lazyload_tablet\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-lazyload_tablet\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_desktop\">";
        // line 323
        echo ($context["entry_lazyload_desktop"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_lazyload_desktop\" ";
        // line 326
        if (($context["theme_oct_remarket_lazyload_desktop"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-lazyload_desktop\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-lazyload_desktop\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-lazyload_image\">";
        // line 338
        echo ($context["entry_lazyload_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img style=\"width:30px;height:30px;\" src=\"";
        // line 341
        echo ($context["thumb_lazy"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_lazyload_image\" value=\"";
        // line 343
        echo ($context["image_lazy"] ?? null);
        echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 352
        echo ($context["text_main_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-main_color\">";
        // line 356
        echo ($context["entry_main_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[main_color]\" value=\"";
        // line 358
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "main_color", [], "any", false, false, false, 358);
        echo "\" placeholder=\"";
        echo ($context["entry_main_color"] ?? null);
        echo "\" id=\"input-main_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 362
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[fon_color]\" value=\"";
        // line 364
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "fon_color", [], "any", false, false, false, 364);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-main_link_color\">";
        // line 370
        echo ($context["entry_main_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[main_link_color]\" value=\"";
        // line 372
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "main_link_color", [], "any", true, true, false, 372) && twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 372))) {
            echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "main_link_color", [], "any", false, false, false, 372);
        } else {
            echo "rgb(24, 164, 225)";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_main_link_color"] ?? null);
        echo "\" id=\"input-main_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 379
        echo ($context["entry_buttons_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_color_main\">";
        // line 383
        echo ($context["entry_buttons_main"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[button_color_main]\" value=\"";
        // line 385
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "button_color_main", [], "any", false, false, false, 385);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_main"] ?? null);
        echo "\" id=\"input-button_color_main\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_color_text\">";
        // line 389
        echo ($context["entry_buttons_text"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[button_color_text]\" value=\"";
        // line 391
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "button_color_text", [], "any", false, false, false, 391);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_text"] ?? null);
        echo "\" id=\"input-button_color_text\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_fon_dark\">";
        // line 397
        echo ($context["entry_buttons_fon_dark"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[button_fon_dark]\" value=\"";
        // line 399
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "button_fon_dark", [], "any", false, false, false, 399);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_fon_dark"] ?? null);
        echo "\" id=\"input-button_fon_dark\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_text_dark\">";
        // line 403
        echo ($context["entry_buttons_text_dark"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[button_text_dark]\" value=\"";
        // line 405
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "button_text_dark", [], "any", false, false, false, 405);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_text_dark"] ?? null);
        echo "\" id=\"input-button_text_dark\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_fon_light\">";
        // line 411
        echo ($context["entry_buttons_fon_light"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[button_fon_light]\" value=\"";
        // line 413
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "button_fon_light", [], "any", false, false, false, 413);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_fon_light"] ?? null);
        echo "\" id=\"input-button_fon_light\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-button_text_light\">";
        // line 417
        echo ($context["entry_buttons_text_light"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[button_text_light]\" value=\"";
        // line 419
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "button_text_light", [], "any", false, false, false, 419);
        echo "\" placeholder=\"";
        echo ($context["entry_buttons_text_light"] ?? null);
        echo "\" id=\"input-button_text_light\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 426
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-top_fon_color\">";
        // line 430
        echo ($context["entry_top_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[top_fon_color]\" value=\"";
        // line 432
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "top_fon_color", [], "any", false, false, false, 432);
        echo "\" placeholder=\"";
        echo ($context["entry_top_fon_color"] ?? null);
        echo "\" id=\"input-top_fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-top_link_color\">";
        // line 438
        echo ($context["entry_top_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[top_link_color]\" value=\"";
        // line 440
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "top_link_color", [], "any", false, false, false, 440);
        echo "\" placeholder=\"";
        echo ($context["entry_top_link_color"] ?? null);
        echo "\" id=\"input-top_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-top_link_color_hover\">";
        // line 444
        echo ($context["entry_top_link_color_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[top_link_color_hover]\" value=\"";
        // line 446
        echo ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "top_link_color_hover", [], "any", false, false, false, 446)) ? (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "top_link_color_hover", [], "any", false, false, false, 446)) : ("#e5e5e5"));
        echo "\" placeholder=\"";
        echo ($context["entry_top_link_color_hover"] ?? null);
        echo "\" id=\"input-top_link_color_hover\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 453
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_fon_color\">";
        // line 457
        echo ($context["entry_footer_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[footer_fon_color]\" value=\"";
        // line 459
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "footer_fon_color", [], "any", false, false, false, 459);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_fon_color"] ?? null);
        echo "\" id=\"input-footer_fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_text_color\">";
        // line 463
        echo ($context["entry_footer_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[footer_text_color]\" value=\"";
        // line 465
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "footer_text_color", [], "any", false, false, false, 465);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_text_color"] ?? null);
        echo "\" id=\"input-footer_text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_color\">";
        // line 471
        echo ($context["entry_footer_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[footer_link_color]\" value=\"";
        // line 473
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "footer_link_color", [], "any", false, false, false, 473);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_link_color"] ?? null);
        echo "\" id=\"input-footer_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_hover_color\">";
        // line 477
        echo ($context["entry_footer_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[footer_link_hover_color]\" value=\"";
        // line 479
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "footer_link_hover_color", [], "any", false, false, false, 479);
        echo "\" placeholder=\"";
        echo ($context["entry_footer_link_hover_color"] ?? null);
        echo "\" id=\"input-footer_link_hover_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 486
        echo ($context["text_category_module_color"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_module_fon_color\">";
        // line 490
        echo ($context["entry_category_module_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[category_module_fon_color]\" value=\"";
        // line 492
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "category_module_fon_color", [], "any", false, false, false, 492);
        echo "\" placeholder=\"";
        echo ($context["entry_category_module_fon_color"] ?? null);
        echo "\" id=\"input-mobile_fon_top_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_module_link_color\">";
        // line 496
        echo ($context["entry_category_module_link_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[category_module_link_color]\" value=\"";
        // line 498
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "category_module_link_color", [], "any", false, false, false, 498);
        echo "\" placeholder=\"";
        echo ($context["entry_category_module_link_color"] ?? null);
        echo "\" id=\"input-category_module_link_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-category_module_link_hover_color\">";
        // line 503
        echo ($context["entry_category_module_link_hover_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[category_module_link_hover_color]\" value=\"";
        // line 505
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "category_module_link_hover_color", [], "any", false, false, false, 505);
        echo "\" placeholder=\"";
        echo ($context["entry_category_module_link_hover_color"] ?? null);
        echo "\" id=\"input-category_module_link_hover_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 511
        echo ($context["tab_mobile"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_fon_top_color\">";
        // line 515
        echo ($context["entry_mobile_fon_top_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[mobile_fon_top_color]\" value=\"";
        // line 517
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "mobile_fon_top_color", [], "any", false, false, false, 517);
        echo "\" placeholder=\"";
        echo ($context["entry_mobile_fon_top_color"] ?? null);
        echo "\" id=\"input-mobile_fon_top_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 524
        echo ($context["tab_modal"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"color_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-modal_fon_title_color\">";
        // line 528
        echo ($context["entry_modal_fon_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[modal_fon_title_color]\" value=\"";
        // line 530
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "modal_fon_title_color", [], "any", false, false, false, 530);
        echo "\" placeholder=\"";
        echo ($context["entry_modal_fon_title_color"] ?? null);
        echo "\" id=\"input-modal_fon_title_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-modal_text_title_color\">";
        // line 534
        echo ($context["entry_modal_text_title_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[modal_text_title_color]\" value=\"";
        // line 536
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "modal_text_title_color", [], "any", false, false, false, 536);
        echo "\" placeholder=\"";
        echo ($context["entry_modal_text_title_color"] ?? null);
        echo "\" id=\"input-modal_text_title_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-modal_fon_icon_color\">";
        // line 541
        echo ($context["entry_modal_fon_icon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_colors[modal_fon_icon_color]\" value=\"";
        // line 543
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_colors"] ?? null), "modal_fon_icon_color", [], "any", false, false, false, 543);
        echo "\" placeholder=\"";
        echo ($context["entry_modal_fon_icon_color"] ?? null);
        echo "\" id=\"input-modal_fon_icon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 553
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_menu\">";
        // line 556
        echo ($context["entry_header_menu"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[header_menu]\" ";
        // line 559
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "header_menu", [], "any", false, false, false, 559)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_menu\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_menu\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_lang\">";
        // line 571
        echo ($context["entry_header_lang"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[header_lang]\" ";
        // line 574
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "header_lang", [], "any", false, false, false, 574)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_lang\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_lang\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_cur\">";
        // line 588
        echo ($context["entry_header_cur"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[header_cur]\" ";
        // line 591
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "header_cur", [], "any", false, false, false, 591)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_cur\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_cur\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-header_account\">";
        // line 603
        echo ($context["entry_header_account"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[header_account]\" ";
        // line 606
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "header_account", [], "any", false, false, false, 606)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-header_account\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-header_account\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-footer-settings\" data-toggle=\"tab\">";
        // line 622
        echo ($context["tab_main_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-payments-settings\" data-toggle=\"tab\">";
        // line 623
        echo ($context["text_paymant_systems"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-footer-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_totop\">";
        // line 630
        echo ($context["entry_footer_totop"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_totop]\" ";
        // line 633
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_totop", [], "any", false, false, false, 633)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_totop\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_totop\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_subscribe\">";
        // line 645
        echo ($context["entry_footer_subscribe"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_subscribe]\" ";
        // line 648
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_subscribe", [], "any", false, false, false, 648)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_subscribe\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_subscribe\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payments-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 664
        echo ($context["text_paymant_systems"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_privat24\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/privat.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][privat24]\" ";
        // line 672
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 672), "privat24", [], "any", false, false, false, 672)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_privat24\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_privat24\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_visa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/visa.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][visa]\" ";
        // line 689
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 689), "visa", [], "any", false, false, false, 689)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_visa\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_visa\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_skrill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/skrill.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][skrill]\" ";
        // line 706
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 706), "skrill", [], "any", false, false, false, 706)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_skrill\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_skrill\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_lp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/liqpay.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][lp]\" ";
        // line 723
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 723), "lp", [], "any", false, false, false, 723)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_lp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_lp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_pp\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/paypal.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][pp]\" ";
        // line 740
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 740), "pp", [], "any", false, false, false, 740)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_pp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_pp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_mc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/mastercard.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][mc]\" ";
        // line 757
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 757), "mc", [], "any", false, false, false, 757)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_mc\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_mc\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_maestro\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"view/image/pay/maestro.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][maestro]\" ";
        // line 774
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 774), "maestro", [], "any", false, false, false, 774)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-payments_maestro\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_maestro\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 785
        $context["payment_row"] = 0;
        // line 786
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 786), "customers", [], "any", false, false, false, 786));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 787
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"payments-row-";
            echo ($context["payment_row"] ?? null);
            echo "\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btnr\" href=\"javascript:;\" onclick=\"\$('#payments-row-";
            // line 788
            echo ($context["payment_row"] ?? null);
            echo "').remove()\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_";
            // line 789
            echo ($context["payment_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
            // line 790
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "thumb_image", [], "any", false, false, false, 790);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 791
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "image", [], "any", false, false, false, 791);
            echo "\" name=\"theme_oct_remarket_data[payments][customers][";
            echo ($context["payment_row"] ?? null);
            echo "][image]\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][customers][";
            // line 795
            echo ($context["payment_row"] ?? null);
            echo "][status]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 795), "customers", [], "any", false, false, false, 795)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["payment_row"] ?? null)] ?? null) : null), "status", [], "any", false, false, false, 795)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-payments_customers_";
            echo ($context["payment_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-payments_customers_";
            // line 796
            echo ($context["payment_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 806
            $context["payment_row"] = (($context["payment_row"] ?? null) + 1);
            // line 807
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 808
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"add_new_block\" class=\"col-sm-2 payments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add_block_in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"addPayment();\" data-toggle=\"tooltip\" title=\"";
        // line 810
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-contacts-settings\" data-toggle=\"tab\">";
        // line 820
        echo ($context["tab_contacts"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-contacts-page\" data-toggle=\"tab\">";
        // line 821
        echo ($context["tab_contacts_page"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-locations-settings\" data-toggle=\"tab\">";
        // line 822
        echo ($context["text_locations"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-socials-settings\" data-toggle=\"tab\">";
        // line 823
        echo ($context["text_socials"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t                    \t<div class=\"tab-pane active\" id=\"tab-contacts-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 828
        echo ($context["tab_contacts"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_address\">";
        // line 830
        echo ($context["entry_contact_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"address-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 834
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 834);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 834);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 834);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 834);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 834);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 836
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 838
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 839
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"address-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 839);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_remarket_data[contact_address][";
            // line 840
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 840);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_address", [], "any", false, false, false, 840)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 840)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 843
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_telephone\">";
        // line 847
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_telephone\" name=\"theme_oct_remarket_data[contact_telephone]\" rows=\"5\" class=\"form-control\">";
        // line 849
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_telephone", [], "any", false, false, false, 849);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_open\">";
        // line 853
        echo ($context["entry_contact_open"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"open-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 856
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 857
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 857);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 857);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 857);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 857);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 857);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 859
        echo "\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t                        \t";
        // line 861
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 862
            echo "\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"open-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 862);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_address\" name=\"theme_oct_remarket_data[contact_open][";
            // line 863
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 863);
            echo "]\" rows=\"5\" class=\"form-control\">";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_open", [], "any", false, false, false, 863)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 863)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 866
        echo "\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_map\">";
        // line 870
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"contact_map\" name=\"theme_oct_remarket_data[contact_map]\" rows=\"5\" class=\"form-control\">";
        // line 872
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_map", [], "any", false, false, false, 872);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-contact_image\">";
        // line 876
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_image\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 879
        echo ($context["contact_image_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_data[contact_image]\" value=\"";
        // line 881
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_image", [], "any", false, false, false, 881);
        echo "\" id=\"input-contact_image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_email\">";
        // line 886
        echo ($context["entry_contact_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"contact_email\" name=\"theme_oct_remarket_data[contact_email]\" value=\"";
        // line 888
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 888);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_skype\">";
        // line 892
        echo ($context["entry_contact_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_skype\" name=\"theme_oct_remarket_data[contact_skype]\" value=\"";
        // line 894
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_skype", [], "any", false, false, false, 894);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_whatsapp\">";
        // line 900
        echo ($context["entry_contact_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_whatsapp\" name=\"theme_oct_remarket_data[contact_whatsapp]\" value=\"";
        // line 902
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 902);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_viber\">";
        // line 906
        echo ($context["entry_contact_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_viber\" name=\"theme_oct_remarket_data[contact_viber]\" value=\"";
        // line 908
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_viber", [], "any", false, false, false, 908);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_telegram\">";
        // line 914
        echo ($context["entry_contact_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_telegram\" name=\"theme_oct_remarket_data[contact_telegram]\" value=\"";
        // line 916
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_telegram", [], "any", false, false, false, 916);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_messenger\">";
        // line 920
        echo ($context["entry_contact_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_messenger\" name=\"theme_oct_remarket_data[contact_messenger]\" value=\"";
        // line 922
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_messenger", [], "any", false, false, false, 922);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contacts-page\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 930
        echo ($context["tab_contacts_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_address\">";
        // line 933
        echo ($context["entry_contact_view_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[contact_view_address]\" ";
        // line 936
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_view_address", [], "any", false, false, false, 936)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_address\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_address\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_phone\">";
        // line 948
        echo ($context["entry_contact_view_phone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[contact_view_phone]\" ";
        // line 951
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_view_phone", [], "any", false, false, false, 951)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_phone\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_phone\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_time\">";
        // line 965
        echo ($context["entry_contact_view_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[contact_view_time]\" ";
        // line 968
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_view_time", [], "any", false, false, false, 968)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_time\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_time\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_map\">";
        // line 980
        echo ($context["entry_contact_view_map"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[contact_view_map]\" ";
        // line 983
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_view_map", [], "any", false, false, false, 983)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_map\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_map\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_socials\">";
        // line 997
        echo ($context["entry_contact_view_socials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[contact_view_socials]\" ";
        // line 1000
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_view_socials", [], "any", false, false, false, 1000)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_socials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_socials\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-contact_view_locations\">";
        // line 1012
        echo ($context["entry_contact_view_locations"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[contact_view_locations]\" ";
        // line 1015
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "contact_view_locations", [], "any", false, false, false, 1015)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-contact_view_locations\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-contact_view_locations\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-locations-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1031
        echo ($context["text_locations"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"site_locations\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1034
        $context["location_id"] = 1;
        // line 1035
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_locations"] ?? null)) {
            // line 1036
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_location"]) {
                // line 1037
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"locations-";
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> ";
                // line 1039
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "title", [], "any", false, false, false, 1039);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-";
                // line 1040
                echo ($context["location_id"] ?? null);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1046
                echo ($context["text_locations_descr"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-";
                // line 1047
                echo ($context["location_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1048
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1049
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1049);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1049);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1049);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1049);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1049);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1051
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t                        \t";
                // line 1053
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1054
                    echo "\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"locations-language";
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1054);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title";
                    // line 1056
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1056);
                    echo "\">";
                    echo ($context["entry_location_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title";
                    // line 1058
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1058);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1058);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1058)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1058)] ?? null) : null), "title", [], "any", false, false, false, 1058);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address";
                    // line 1062
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1062);
                    echo "\">";
                    echo ($context["entry_location_address"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_address";
                    // line 1064
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064);
                    echo "][address]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1064)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064)] ?? null) : null), "address", [], "any", false, false, false, 1064);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open";
                    // line 1068
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1068);
                    echo "\">";
                    echo ($context["entry_contact_open"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descr_open";
                    // line 1070
                    echo ($context["location_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070);
                    echo "\" name=\"oct_locations[";
                    echo ($context["location_id"] ?? null);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070);
                    echo "][open]\" rows=\"5\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["oct_location"], "description", [], "any", false, false, false, 1070)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1070)] ?? null) : null), "open", [], "any", false, false, false, 1070);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1075
                echo "\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1078
                echo ($context["text_locations_info"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone";
                // line 1080
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_telephone"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_phone";
                // line 1082
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][phone]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "phone", [], "any", false, false, false, 1082);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map";
                // line 1086
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_contact_map"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"location_map";
                // line 1088
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][map]\" rows=\"5\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "map", [], "any", false, false, false, 1088);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link";
                // line 1092
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_link"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"location_link";
                // line 1094
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "link", [], "any", false, false, false, 1094);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image";
                // line 1098
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image";
                // line 1100
                echo ($context["location_id"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 1101
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "thumb", [], "any", false, false, false, 1101);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo ($context["contact_placeholder"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t                  \t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[";
                // line 1103
                echo ($context["location_id"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "image", [], "any", false, false, false, 1103);
                echo "\" id=\"input-contact_location_image";
                echo ($context["location_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort";
                // line 1107
                echo ($context["location_id"] ?? null);
                echo "\">";
                echo ($context["entry_location_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"location_sort";
                // line 1109
                echo ($context["location_id"] ?? null);
                echo "\" name=\"oct_locations[";
                echo ($context["location_id"] ?? null);
                echo "][sort]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_location"], "sort", [], "any", false, false, false, 1109);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1115
                $context["location_id"] = (($context["location_id"] ?? null) + 1);
                // line 1116
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1117
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_locations_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1120
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"locations_add\" onclick=\"addNewLocation();\">";
        // line 1122
        echo ($context["text_add_location"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <div class=\"tab-pane\" id=\"tab-socials-settings\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1127
        echo ($context["text_socials"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1131
        $context["social_row"] = 0;
        // line 1132
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "socials", [], "any", false, false, false, 1132));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 1133
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"social-row";
            echo ($context["social_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<button onClick=\"fontIcons('social_icone-";
            // line 1137
            echo ($context["social_row"] ?? null);
            echo "', 'social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "');\" class=\"btn btn-default social_icone\" type=\"button\"><i id=\"social_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1137);
            echo "\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_remarket_data[socials][";
            // line 1138
            echo ($context["social_row"] ?? null);
            echo "][icone]\" id=\"social_input_icone-";
            echo ($context["social_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 1138);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <input type=\"text\" name=\"theme_oct_remarket_data[socials][";
            // line 1140
            echo ($context["social_row"] ?? null);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 1140);
            echo "\" placeholder=\"";
            echo ($context["entry_social_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data[socials][";
            // line 1144
            echo ($context["social_row"] ?? null);
            echo "][link]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 1144);
            echo "\" placeholder=\"";
            echo ($context["entry_social_link"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#social-row";
            // line 1146
            echo ($context["social_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1148
            $context["social_row"] = (($context["social_row"] ?? null) + 1);
            // line 1149
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1150
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addSocial();\" data-toggle=\"tooltip\" title=\"";
        // line 1154
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t                    \t</div>
\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-main-menu\" data-toggle=\"tab\">";
        // line 1165
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-header-menu\" data-toggle=\"tab\">";
        // line 1166
        echo ($context["tab_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer-menu\" data-toggle=\"tab\">";
        // line 1167
        echo ($context["tab_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-mobile-menu\" data-toggle=\"tab\">";
        // line 1168
        echo ($context["tab_mobile"] ?? null);
        echo "</a></li>
\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-main-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1173
        echo ($context["text_megamenu_settings"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-megamenu_status\">";
        // line 1176
        echo ($context["text_megamenu_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[megamenu][status]\" ";
        // line 1179
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1179), "status", [], "any", false, false, false, 1179)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-megamenu_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-megamenu_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language-megamenu\">
\t\t\t\t\t\t\t\t                      ";
        // line 1192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1193
            echo "\t\t\t\t\t\t\t\t                      <li><a href=\"#language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1193);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1193);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1193);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1193);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1193);
            echo "</a></li>
\t\t\t\t\t\t\t\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1195
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t                        ";
        // line 1197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1198
            echo "\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"language-megamenu";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1198);
            echo "\">
\t\t\t\t\t\t\t\t                                <div class=\"form-group\">
\t\t\t\t\t\t\t\t                                  <label class=\"col-sm-2 control-label\" for=\"input-dtitle";
            // line 1200
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1200);
            echo "\">";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t                                  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                                    <input type=\"text\" name=\"theme_oct_remarket_data[megamenu][dtitle][";
            // line 1202
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1202);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, true, false, 1202), "dtitle", [], "any", false, true, false, 1202), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1202), [], "array", true, true, false, 1202)) ? ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1202), "dtitle", [], "any", false, false, false, 1202)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1202)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "\" id=\"input-dtitle";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1202);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                                  </div>
\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1207
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories\">";
        // line 1210
        echo ($context["entry_megamenu_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[megamenu][dcategories]\" ";
        // line 1213
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1213), "dcategories", [], "any", false, false, false, 1213)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories_limit\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 1225
        echo ($context["help_megamenu_categories_limit"] ?? null);
        echo "\">";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data[megamenu][limit]\" value=\"";
        // line 1227
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1227), "limit", [], "any", false, false, false, 1227);
        echo "\" placeholder=\"";
        echo ($context["entry_megamenu_categories_limit"] ?? null);
        echo "\" id=\"oct_megamenu_categories_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 1233
        echo ($context["entry_menu_cat_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_remarket_data[megamenu][view]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1236
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1236), "view", [], "any", false, false, false, 1236) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1237
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1237), "view", [], "any", false, false, false, 1237) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_cat_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 1242
        echo ($context["entry_menu_sort_view"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_oct_remarket_data[megamenu][sort]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1245
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1245), "sort", [], "any", false, false, false, 1245) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1246
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1246), "sort", [], "any", false, false, false, 1246) == "2")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1247
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1247), "sort", [], "any", false, false, false, 1247) == "3")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo ($context["entry_menu_sort_view_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories_icon\">";
        // line 1254
        echo ($context["entry_megamenu_categories_icon"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[megamenu][icon]\" ";
        // line 1257
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1257), "icon", [], "any", false, false, false, 1257)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_icon\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_icon\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_categories_page\">";
        // line 1269
        echo ($context["entry_megamenu_categories_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[megamenu][page]\" ";
        // line 1272
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "megamenu", [], "any", false, false, false, 1272), "page", [], "any", false, false, false, 1272)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_categories_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_categories_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1286
        echo ($context["text_megamenu_items"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"megamenu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1288
        $context["menu_id"] = 1000;
        // line 1289
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["oct_megamenu"] ?? null)) {
            // line 1290
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_megamenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_menu"]) {
                // line 1291
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\" id=\"megamenu-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1291);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> ";
                // line 1293
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "title", [], "any", false, false, false, 1293);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-";
                // line 1294
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1294);
                echo "').remove();return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_general";
                // line 1300
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1300);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_general"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_language";
                // line 1301
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1301);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_language"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-menu_links";
                // line 1302
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1302);
                echo "\" data-toggle=\"tab\">";
                echo ($context["tab_menu_links"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general";
                // line 1305
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1305);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1307
                echo ($context["text_menu_type"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"oct_megamenu[";
                // line 1309
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1309);
                echo "][type]\" class=\"form-control menu_type\" id=\"menu_type-";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1309);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
                // line 1310
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1310) == "")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"category\" ";
                // line 1311
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1311) == "category")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_1"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"manufacturer\" ";
                // line 1312
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1312) == "manufacturer")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_2"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\" ";
                // line 1313
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1313) == "oct_blogcategory")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_3"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"link\" ";
                // line 1314
                echo (((twig_get_attribute($this->env, $this->source, $context["oct_menu"], "type", [], "any", false, false, false, 1314) == "link")) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo ($context["text_menu_type_4"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_megamenu[";
                // line 1318
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1318);
                echo "][setting]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1318);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"menu_settings-";
                // line 1319
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1319);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language";
                // line 1321
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1321);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
                // line 1322
                echo ($context["tab_menu_language"] ?? null);
                echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language";
                // line 1323
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1323);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1324
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1325
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1325);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1325);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1325);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1325);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1325);
                    echo "\" />  ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1325);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1327
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1329
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1330
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1330);
                    echo "_";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1330);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
                    // line 1332
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1332);
                    echo "\">";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1334
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1334);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1334);
                    echo "][title]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1334), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1334), [], "array", true, true, false, 1334)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1334)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1334)] ?? null) : null), "title", [], "any", false, false, false, 1334)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_title"] ?? null);
                    echo "\" id=\"input-title";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1334);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
                    // line 1338
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1338);
                    echo "\">";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[";
                    // line 1340
                    echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1340);
                    echo "][description][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1340);
                    echo "][link]\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, true, false, 1340), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1340), [], "array", true, true, false, 1340)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_menu"], "description", [], "any", false, false, false, 1340)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1340)] ?? null) : null), "link", [], "any", false, false, false, 1340)) : (""));
                    echo "\" placeholder=\"";
                    echo ($context["entry_menu_link"] ?? null);
                    echo "\" id=\"input-link";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1340);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1345
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links";
                // line 1347
                echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1347);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 1349
                echo ($context["entry_menu_store"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1352
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1353
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1355
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1355), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "stories", [], "any", false, false, false, 1355))) {
                        // line 1356
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1356);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1356);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1357
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["store"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1359
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1359);
                        echo "][stories][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1359);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1360
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["store"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1362
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1365
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
                // line 1369
                echo ($context["entry_menu_customers"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1372
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 1373
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1375
                    if (twig_in_filter(0, twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1375))) {
                        // line 1376
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                        echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1376);
                        echo "][customers][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1376);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 1377
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["customer_group"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 1379
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1379), twig_get_attribute($this->env, $this->source, $context["oct_menu"], "customers", [], "any", false, false, false, 1379))) {
                            // line 1380
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1380);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1380);
                            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1381
                            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["customer_group"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 1383
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[";
                            echo twig_get_attribute($this->env, $this->source, $context["oct_menu"], "oct_menu_id", [], "any", false, false, false, 1383);
                            echo "][customers][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1383);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 1384
                            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["customer_group"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 1386
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 1387
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1390
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1397
                $context["menu_id"] = (($context["menu_id"] ?? null) + 1);
                // line 1398
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1399
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1400
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"empty_locations\">";
            echo ($context["text_menuitems_empty"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1402
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-primary\" id=\"menuitem_add\" onclick=\"addNewMenuItem();\">";
        // line 1404
        echo ($context["text_add_menuitem"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-header-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1410
        echo ($context["tab_header"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-header_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1412
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header_advantages\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1419
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1420
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 1424
        $context["header_advantages_row"] = 0;
        // line 1425
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "header_links", [], "any", false, false, false, 1425));
        foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
            // line 1426
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr id=\"header_advantage-row";
            echo ($context["header_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
            // line 1429
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"header_advantage-";
            echo ($context["header_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1432
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1433
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1435
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1435);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1435);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1435);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[header_links][";
                // line 1437
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1437);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["header_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1437)] ?? null) : null), "title", [], "any", false, false, false, 1437);
                echo "\" id=\"header_advantages_row-title-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1437);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1440
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1442
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1443
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1445
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1445);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1445);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1445);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[header_links][";
                // line 1447
                echo ($context["header_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["header_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447)] ?? null) : null), "link", [], "any", false, false, false, 1447);
                echo "\" id=\"header_advantages_row-href-";
                echo ($context["header_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1447);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1450
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <button type=\"button\" onclick=\"\$('#header_advantage-row";
            // line 1453
            echo ($context["header_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
            // line 1456
            $context["header_advantages_row"] = (($context["header_advantages_row"] ?? null) + 1);
            // line 1457
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1458
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addHeaderAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1462
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1474
        echo ($context["tab_footer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-footer_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1476
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"footer_advantages\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1483
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1484
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 1488
        $context["footer_advantages_row"] = 0;
        // line 1489
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_links", [], "any", false, false, false, 1489));
        foreach ($context['_seq'] as $context["_key"] => $context["footer_link"]) {
            // line 1490
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr id=\"footer_advantage-row";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
            // line 1493
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"footer_advantage-";
            echo ($context["footer_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1497
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1499
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1499);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1499);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1499);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[footer_links][";
                // line 1501
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1501);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["footer_link"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1501)] ?? null) : null), "title", [], "any", false, false, false, 1501);
                echo "\" id=\"footer_advantages_row-title-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1501);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1504
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1506
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1507
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1509
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1509);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1509);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1509);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[footer_links][";
                // line 1511
                echo ($context["footer_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1511);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["footer_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1511)] ?? null) : null), "link", [], "any", false, false, false, 1511);
                echo "\" id=\"footer_advantages_row-href-";
                echo ($context["footer_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1511);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1514
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <button type=\"button\" onclick=\"\$('#footer_advantage-row";
            // line 1517
            echo ($context["footer_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
            // line 1520
            $context["footer_advantages_row"] = (($context["footer_advantages_row"] ?? null) + 1);
            // line 1521
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footer_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1522
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addFooterAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1526
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_contact\">";
        // line 1536
        echo ($context["entry_footer_link_contact"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_link_contact]\" ";
        // line 1539
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_link_contact", [], "any", false, false, false, 1539)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_contact\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_contact\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_return\">";
        // line 1551
        echo ($context["entry_footer_link_return"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_link_return]\" ";
        // line 1554
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_link_return", [], "any", false, false, false, 1554)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_return\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_return\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_sitemap\">";
        // line 1568
        echo ($context["entry_footer_link_sitemap"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_link_sitemap]\" ";
        // line 1571
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_link_sitemap", [], "any", false, false, false, 1571)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_sitemap\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_sitemap\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_man\">";
        // line 1583
        echo ($context["entry_footer_link_man"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_link_man]\" ";
        // line 1586
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_link_man", [], "any", false, false, false, 1586)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_man\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_man\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_cert\">";
        // line 1600
        echo ($context["entry_footer_link_cert"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_link_cert]\" ";
        // line 1603
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_link_cert", [], "any", false, false, false, 1603)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_cert\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_cert\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-footer_link_specials\">";
        // line 1615
        echo ($context["entry_footer_link_specials"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[footer_link_specials]\" ";
        // line 1618
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "footer_link_specials", [], "any", false, false, false, 1618)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-footer_link_specials\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-footer_link_specials\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 1631
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_category_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 1633
        echo ($context["entry_footer_category_links"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1635
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1636
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, ($context["product_category"] ?? null), "category_id", [], "any", false, false, false, 1636);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1636);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_data[footer_category_links][]\" value=\"";
            // line 1637
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1637);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1640
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-mobile-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 1647
        echo ($context["tab_mobile"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language_mobile\">
\t\t\t\t\t\t\t\t                      ";
        // line 1649
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1650
            echo "\t\t\t\t\t\t\t\t                      <li><a href=\"#language_mobile";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1650);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1650);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1650);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1650);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1650);
            echo "</a></li>
\t\t\t\t\t\t\t\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1652
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t                        ";
        // line 1654
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1655
            echo "\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"language_mobile";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1655);
            echo "\">
\t\t\t\t\t\t\t\t                                <div class=\"form-group\">
\t\t\t\t\t\t\t\t                                  <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 1657
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1657);
            echo "\">";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t                                  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                                    <input type=\"text\" name=\"theme_oct_remarket_data[mobile_menu][title][";
            // line 1659
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1659);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, true, false, 1659), "title", [], "any", false, true, false, 1659), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1659), [], "array", true, true, false, 1659)) ? ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1659), "title", [], "any", false, false, false, 1659)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1659)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_oct_megamenu_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1659);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                                  </div>
\t\t\t\t\t\t\t\t                                </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1664
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_mobile_st_categories\">";
        // line 1667
        echo ($context["entry_megamenu_mobile_st_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][st_cats]\" ";
        // line 1670
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1670), "st_cats", [], "any", false, false, false, 1670)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_mobile_st_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_mobile_st_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_mobile_categories\">";
        // line 1682
        echo ($context["entry_megamenu_mobile_categories"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][t_cats]\" ";
        // line 1685
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1685), "t_cats", [], "any", false, false, false, 1685)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_mobile_categories\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_mobile_categories\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_mobile_categories_icon\">";
        // line 1699
        echo ($context["entry_megamenu_categories_icon"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][icon]\" ";
        // line 1702
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1702), "icon", [], "any", false, false, false, 1702)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_mobile_categories_icon\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_mobile_categories_icon\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_links\">";
        // line 1714
        echo ($context["entry_megamenu_links"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][links]\" ";
        // line 1717
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1717), "links", [], "any", false, false, false, 1717)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_links\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_links\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_brands\">";
        // line 1731
        echo ($context["entry_megamenu_brands"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][brands]\" ";
        // line 1734
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1734), "brands", [], "any", false, false, false, 1734)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_brands\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_brands\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"oct_megamenu_blog\">";
        // line 1746
        echo ($context["entry_megamenu_blog"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][blog]\" ";
        // line 1749
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1749), "blog", [], "any", false, false, false, 1749)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_megamenu_blog\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"oct_megamenu_blog\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_time\">";
        // line 1763
        echo ($context["entry_mobile_menu_time"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][time]\" ";
        // line 1766
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1766), "time", [], "any", false, false, false, 1766)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_time\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_time\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_currency\">";
        // line 1778
        echo ($context["entry_mobile_menu_currency"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][currency]\" ";
        // line 1781
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1781), "currency", [], "any", false, false, false, 1781)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_currency\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_currency\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_address\">";
        // line 1795
        echo ($context["entry_mobile_menu_address"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][address]\" ";
        // line 1798
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1798), "address", [], "any", false, false, false, 1798)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_address\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_address\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_languages\">";
        // line 1810
        echo ($context["entry_mobile_menu_languages"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][languages]\" ";
        // line 1813
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1813), "languages", [], "any", false, false, false, 1813)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_languages\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_languages\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_phones\">";
        // line 1827
        echo ($context["entry_mobile_menu_phones"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][phones]\" ";
        // line 1830
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1830), "phones", [], "any", false, false, false, 1830)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_phones\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_phones\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_email\">";
        // line 1844
        echo ($context["entry_mobile_menu_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][email]\" ";
        // line 1847
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1847), "email", [], "any", false, false, false, 1847)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_email\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_telegram\">";
        // line 1859
        echo ($context["entry_mobile_menu_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][telegram]\" ";
        // line 1862
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1862), "telegram", [], "any", false, false, false, 1862)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_telegram\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_telegram\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_viber\">";
        // line 1876
        echo ($context["entry_mobile_menu_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][viber]\" ";
        // line 1879
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1879), "viber", [], "any", false, false, false, 1879)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_viber\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_viber\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_skype\">";
        // line 1891
        echo ($context["entry_mobile_menu_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][skype]\" ";
        // line 1894
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1894), "skype", [], "any", false, false, false, 1894)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_skype\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_skype\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_whatsapp\">";
        // line 1908
        echo ($context["entry_mobile_menu_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][whatsapp]\" ";
        // line 1911
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1911), "whatsapp", [], "any", false, false, false, 1911)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_whatsapp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_whatsapp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-mobile_menu_messenger\">";
        // line 1923
        echo ($context["entry_mobile_menu_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[mobile_menu][messenger]\" ";
        // line 1926
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 1926), "messenger", [], "any", false, false, false, 1926)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-mobile_menu_messenger\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-mobile_menu_messenger\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-mobile_information_links\"><span data-toggle=\"tooltip\" title=\"";
        // line 1939
        echo ($context["help_links"] ?? null);
        echo "\">";
        echo ($context["entry_footer_information_links"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"mobile_advantages\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1946
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1947
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        // line 1951
        $context["mobile_advantages_row"] = 0;
        // line 1952
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "mobile_links", [], "any", false, false, false, 1952));
        foreach ($context['_seq'] as $context["_key"] => $context["mobile_link"]) {
            // line 1953
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr id=\"mobile_advantage-row";
            echo ($context["mobile_advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <input type=\"text\" name=\"mobile_advantage_link\" value=\"\" placeholder=\"";
            // line 1956
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"mobile_advantage-";
            echo ($context["mobile_advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1959
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1960
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1962
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1962);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1962);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1962);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[mobile_links][";
                // line 1964
                echo ($context["mobile_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1964);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["mobile_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1964)] ?? null) : null), "title", [], "any", false, false, false, 1964);
                echo "\" id=\"mobile_advantages_row-title-";
                echo ($context["mobile_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1964);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1967
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            // line 1969
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1970
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <img src=\"language/";
                // line 1972
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1972);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1972);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1972);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                <input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[mobile_links][";
                // line 1974
                echo ($context["mobile_advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1974);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["mobile_link"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1974)] ?? null) : null), "link", [], "any", false, false, false, 1974);
                echo "\" id=\"mobile_advantages_row-href-";
                echo ($context["mobile_advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1974);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1977
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        <button type=\"button\" onclick=\"\$('#mobile_advantage-row";
            // line 1980
            echo ($context["mobile_advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
            // line 1983
            $context["mobile_advantages_row"] = (($context["mobile_advantages_row"] ?? null) + 1);
            // line 1984
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mobile_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1985
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addMobileAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 1989
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-category\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2003
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_product_desc\">";
        // line 2006
        echo ($context["entry_category_product_desc"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_product_desc]\" ";
        // line 2009
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_product_desc", [], "any", false, false, false, 2009)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_product_desc\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_product_desc\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_model\">";
        // line 2021
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data_model\" ";
        // line 2024
        if (($context["theme_oct_remarket_data_model"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-atributes_category\">";
        // line 2038
        echo ($context["text_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data_atributes\" ";
        // line 2041
        if (($context["theme_oct_remarket_data_atributes"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-atributes_category\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-atributes_category\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-atributes_category_limit\">";
        // line 2053
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_category_limit\" name=\"theme_oct_remarket_data_cat_atr_limit\" value=\"";
        // line 2055
        echo ($context["theme_oct_remarket_data_cat_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_view_sort_oder\">";
        // line 2061
        echo ($context["entry_category_view_sort_oder"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_view_sort_oder]\" ";
        // line 2064
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_view_sort_oder", [], "any", false, false, false, 2064)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_sort_oder\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_sort_oder\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_view_quantity\">";
        // line 2076
        echo ($context["entry_category_view_quantity"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_view_quantity]\" ";
        // line 2079
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_view_quantity", [], "any", false, false, false, 2079)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_quantity\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_quantity\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_show_more\">";
        // line 2093
        echo ($context["entry_category_show_more"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_show_more]\" ";
        // line 2096
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_show_more", [], "any", false, false, false, 2096)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_show_more\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_show_more\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"select-category_show_type\">";
        // line 2108
        echo ($context["entry_category_show_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_show_type\" name=\"theme_oct_remarket_data[category_show_type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" ";
        // line 2111
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_show_type", [], "any", false, false, false, 2111) == "")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_deff"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-100\" ";
        // line 2112
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_show_type", [], "any", false, false, false, 2112) == "width-100")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_100"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"width-50\" ";
        // line 2113
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_show_type", [], "any", false, false, false, 2113) == "width-50")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_show_type_50"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t    <label class=\"col-sm-4 control-label\" for=\"input-no_quantity_last\">";
        // line 2120
        echo ($context["entry_no_quantity_last"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t        <div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t            <input type=\"checkbox\" name=\"theme_oct_remarket_no_quantity_last\" ";
        // line 2123
        if (($context["theme_oct_remarket_no_quantity_last"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-no_quantity_last\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t            <label for=\"input-no_quantity_last\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t            <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t                <div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-category_view_sort_oder\">";
        // line 2136
        echo ($context["entry_category_sorts"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 2142
        echo ($context["col_status_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 2143
        echo ($context["col_status_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 2144
        echo ($context["col_status_deff"] ?? null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.sort_order-ASC\" ";
        // line 2150
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2150) && twig_in_filter("p.sort_order-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2150)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2153
        echo ($context["text_p_sort_order_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.sort_order-ASC\" ";
        // line 2156
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2156) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2156) == "p.sort_order-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.sort_order-DESC\" ";
        // line 2161
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2161) && twig_in_filter("p.sort_order-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2161)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_sort_order-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2164
        echo ($context["text_p_sort_order_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.sort_order-DESC\" ";
        // line 2167
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2167) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2167) == "p.sort_order-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"pd.name-ASC\" ";
        // line 2172
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2172) && twig_in_filter("pd.name-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2172)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2175
        echo ($context["text_pd_name_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"pd.name-ASC\" ";
        // line 2178
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2178) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2178) == "pd.name-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"pd.name-DESC\" ";
        // line 2183
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2183) && twig_in_filter("pd.name-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2183)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-pd_name-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2186
        echo ($context["text_pd_name_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"pd.name-DESC\" ";
        // line 2189
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2189) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2189) == "pd.name-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.price-ASC\" ";
        // line 2194
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2194) && twig_in_filter("p.price-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2194)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2197
        echo ($context["text_p_price_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.price-ASC\" ";
        // line 2200
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2200) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2200) == "p.price-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.price-DESC\" ";
        // line 2205
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2205) && twig_in_filter("p.price-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2205)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_price-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2208
        echo ($context["text_p_price_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.price-DESC\" ";
        // line 2211
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2211) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2211) == "p.price-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.model-ASC\" ";
        // line 2216
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2216) && twig_in_filter("p.model-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2216)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2219
        echo ($context["text_p_model_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.model-ASC\" ";
        // line 2222
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2222) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2222) == "p.model-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.model-DESC\" ";
        // line 2227
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2227) && twig_in_filter("p.model-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2227)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_model-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2230
        echo ($context["text_p_model_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.model-DESC\" ";
        // line 2233
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2233) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2233) == "p.model-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.quantity-ASC\" ";
        // line 2238
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2238) && twig_in_filter("p.quantity-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2238)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2241
        echo ($context["text_p_quantity_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.quantity-ASC\" ";
        // line 2244
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2244) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2244) == "p.quantity-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.quantity-DESC\" ";
        // line 2249
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2249) && twig_in_filter("p.quantity-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2249)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_quantity-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2252
        echo ($context["text_p_quantity_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.quantity-DESC\" ";
        // line 2255
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2255) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2255) == "p.quantity-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.viewed-ASC\" ";
        // line 2260
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2260) && twig_in_filter("p.viewed-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2260)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2263
        echo ($context["text_p_viewed_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.viewed-ASC\" ";
        // line 2266
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2266) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2266) == "p.viewed-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.viewed-DESC\" ";
        // line 2271
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2271) && twig_in_filter("p.viewed-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2271)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_viewed-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2274
        echo ($context["text_p_viewed_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.viewed-DESC\" ";
        // line 2277
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2277) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2277) == "p.viewed-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.date_added-ASC\" ";
        // line 2282
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2282) && twig_in_filter("p.date_added-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2282)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2285
        echo ($context["text_p_date_added_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.date_added-ASC\" ";
        // line 2288
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2288) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2288) == "p.date_added-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"p.date_added-DESC\" ";
        // line 2293
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2293) && twig_in_filter("p.date_added-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2293)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-p_date_added-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2296
        echo ($context["text_p_date_added_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"p.date_added-DESC\" ";
        // line 2299
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2299) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2299) == "p.date_added-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"rating-ASC\" ";
        // line 2304
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2304) && twig_in_filter("rating-ASC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2304)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-ASC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2307
        echo ($context["text_rating_ASC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"rating-ASC\" ";
        // line 2310
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2310) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2310) == "rating-ASC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_sort_data[sort][]\" value=\"rating-DESC\" ";
        // line 2315
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", true, true, false, 2315) && twig_in_filter("rating-DESC", twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "sort", [], "any", false, false, false, 2315)))) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-rating-DESC\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2318
        echo ($context["text_rating_DESC"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"theme_oct_remarket_sort_data[deff_sort]\" value=\"rating-DESC\" ";
        // line 2321
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", true, true, false, 2321) && (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_sort_data"] ?? null), "deff_sort", [], "any", false, false, false, 2321) == "rating-DESC"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\"\$(this).prev().find(':checkbox').attr('checked', true);\">";
        // line 2326
        echo ($context["text_all_select"] ?? null);
        echo "</a> / <a href=\"javascript:;\" onclick=\"\$(this).prev().prev().find(':checkbox').attr('checked', false);\">";
        echo ($context["text_remove_select"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t    <legend>";
        // line 2332
        echo ($context["text_product_limits"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t    <div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 2335
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t                <input type=\"text\" name=\"theme_oct_remarket_product_limit\" value=\"";
        // line 2337
        echo ($context["theme_oct_remarket_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t                ";
        // line 2338
        if (($context["error_product_limit"] ?? null)) {
            // line 2339
            echo "\t\t\t\t\t\t\t\t\t\t                <div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t                    <script>
\t\t\t\t\t\t\t\t\t\t                        usNotify('warning', '";
            // line 2341
            echo ($context["error_product_limit"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t                    </script>
\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t                ";
        }
        // line 2345
        echo "\t\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t        <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t            <label class=\"col-sm-4 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 2348
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t                <input type=\"text\" name=\"theme_oct_remarket_product_description_length\" value=\"";
        // line 2350
        echo ($context["theme_oct_remarket_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t                ";
        // line 2351
        if (($context["error_product_description_length"] ?? null)) {
            // line 2352
            echo "\t\t\t\t\t\t\t\t\t\t                <div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t                    <script>
\t\t\t\t\t\t\t\t\t\t                        usNotify('warning', '";
            // line 2354
            echo ($context["error_product_description_length"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t                    </script>
\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t                ";
        }
        // line 2358
        echo "\t\t\t\t\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2363
        echo ($context["text_categoty_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_desc_in_page\">";
        // line 2366
        echo ($context["entry_category_desc_in_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_desc_in_page]\" ";
        // line 2369
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_desc_in_page", [], "any", false, false, false, 2369)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_in_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_in_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"select-category_desc_position\">";
        // line 2381
        echo ($context["entry_category_desc_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-category_desc_position\" name=\"theme_oct_remarket_data[category_desc_position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"top\" ";
        // line 2384
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_desc_position", [], "any", false, false, false, 2384) == "top")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_top"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"bottom\" ";
        // line 2385
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_desc_position", [], "any", false, false, false, 2385) == "bottom")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_category_desc_position_bottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_desc_up\">";
        // line 2392
        echo ($context["entry_category_desc_up"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_desc_up]\" ";
        // line 2395
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_desc_up", [], "any", false, false, false, 2395)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_desc_up\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_desc_up\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_view_subcats\">";
        // line 2409
        echo ($context["entry_category_view_subcats"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_view_subcats]\" ";
        // line 2412
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_view_subcats", [], "any", false, false, false, 2412)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_view_subcats\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_view_subcats\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_subcat_products\">";
        // line 2424
        echo ($context["entry_category_subcat_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_subcat_products]\" ";
        // line 2427
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_subcat_products", [], "any", false, false, false, 2427)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_subcat_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_subcat_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_cat_image\">";
        // line 2441
        echo ($context["entry_category_cat_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_cat_image]\" ";
        // line 2444
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_cat_image", [], "any", false, false, false, 2444)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_cat_image\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_cat_image\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category_cat_image\">";
        // line 2456
        echo ($context["entry_category_page"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[category_page]\" ";
        // line 2459
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "category_page", [], "any", false, false, false, 2459)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-category_page\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-category_page\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2473
        echo ($context["text_manufacture_page"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-man_logo\">";
        // line 2475
        echo ($context["entry_man_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[man_logo]\" ";
        // line 2478
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "man_logo", [], "any", false, false, false, 2478)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-man_logo\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-man_logo\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2493
        echo ($context["tab_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_model\">";
        // line 2496
        echo ($context["entry_product_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_model]\" ";
        // line 2499
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_model", [], "any", false, false, false, 2499)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2510
        if (($context["hasblog"] ?? null)) {
            // line 2511
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_blog_related\">";
            // line 2512
            echo ($context["entry_product_blog_related"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_blog_related]\" ";
            // line 2515
            if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_blog_related", [], "any", false, false, false, 2515)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_blog_related\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_blog_related\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2527
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_atributes\">";
        // line 2530
        echo ($context["entry_product_atributes"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_atributes]\" ";
        // line 2533
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_atributes", [], "any", false, false, false, 2533)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_atributes\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_atributes\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-atributes_product_limit\">";
        // line 2545
        echo ($context["text_atributes_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-atributes_product_limit\" name=\"theme_oct_remarket_data_pr_atr_limit\" value=\"";
        // line 2547
        echo ($context["theme_oct_remarket_data_pr_atr_limit"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["text_atributes_limit"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_zoom\">";
        // line 2553
        echo ($context["entry_product_zoom"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_zoom]\" ";
        // line 2556
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_zoom", [], "any", false, false, false, 2556)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_zoom\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_zoom\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_faq\">";
        // line 2568
        echo ($context["entry_product_faq"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_faq]\" ";
        // line 2571
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_faq", [], "any", false, false, false, 2571)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_faq\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_faq\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_dop_tab\">";
        // line 2585
        echo ($context["entry_product_dop_tab"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_dop_tab]\" ";
        // line 2588
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2588)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_dop_tab\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_dop_tab\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_gallery\"><span data-toggle=\"tooltip\" title=\"";
        // line 2600
        echo ($context["help_product_gallery"] ?? null);
        echo "\">";
        echo ($context["entry_product_gallery"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_gallery]\" ";
        // line 2603
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_gallery", [], "any", false, false, false, 2603)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_gallery\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_gallery\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product_timer\">";
        // line 2617
        echo ($context["entry_product_timer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_timer]\" ";
        // line 2620
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_timer", [], "any", false, false, false, 2620)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_timer\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_timer\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_dop_tabs_text\" class=\"form-group\"";
        // line 2632
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2632) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab", [], "any", true, true, false, 2632) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab", [], "any", false, false, false, 2632)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_dop_tab_ttt\">";
        // line 2633
        echo ($context["entry_product_dop_tab_ttt"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"product_dop_tab-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2636
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2637
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2637);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2637);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2637);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2637);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2637);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2639
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t                        \t";
        // line 2641
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2642
            echo "\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"product_dop_tab-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2642);
            echo "\">
\t\t\t\t\t\t\t                            \t<div class=\"form-group\">
\t\t\t\t\t\t\t                            \t\t<input type=\"text\" name=\"theme_oct_remarket_data[product_dop_tab_title][";
            // line 2644
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2644);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab_title", [], "any", false, true, false, 2644), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2644), [], "array", true, true, false, 2644)) ? ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab_title", [], "any", false, false, false, 2644)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2644)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_product_dop_tab_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            \t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"product_dop_tab";
            // line 2647
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2647);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_remarket_data[product_dop_tab_text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2647);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab_text", [], "any", false, true, false, 2647), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2647), [], "array", true, true, false, 2647)) ? ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_dop_tab_text", [], "any", false, false, false, 2647)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2647)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t                            \t</div>
\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2651
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_js_button\">";
        // line 2655
        echo ($context["entry_product_js_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" name=\"theme_oct_remarket_data[product_js_button]\" placeholder=\"";
        // line 2657
        echo ($context["entry_product_js_button"] ?? null);
        echo "\" id=\"input-product_js_button\" class=\"form-control\">";
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_js_button", [], "any", false, false, false, 2657);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2660
        echo ($context["entry_product_garantii"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product_advantage\">";
        // line 2662
        echo ($context["entry_product_advantages"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_advantage]\" ";
        // line 2665
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_advantage", [], "any", false, false, false, 2665)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-product_advantage\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"product_advantages\" class=\"form-group\"";
        // line 2676
        if (( !twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_advantage", [], "any", true, true, false, 2676) || (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_advantage", [], "any", true, true, false, 2676) &&  !twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_advantage", [], "any", false, false, false, 2676)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\" style=\"padding-bottom: 16px;\"><b>";
        // line 2677
        echo ($context["advantage_help_text"] ?? null);
        echo "</b></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2683
        echo ($context["column_name_link"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 2684
        echo ($context["column_action"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2690
        $context["advantages_row"] = 0;
        // line 2691
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_advantages", [], "any", false, false, false, 2691));
        foreach ($context['_seq'] as $context["_key"] => $context["advantage"]) {
            // line 2692
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"advantage-row";
            echo ($context["advantages_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<button onClick=\"fontIcons('advantages_icone-";
            // line 2696
            echo ($context["advantages_row"] ?? null);
            echo "', 'advantages_input_icone-";
            echo ($context["advantages_row"] ?? null);
            echo "');\" class=\"btn btn-default social_icone\" type=\"button\"><i id=\"advantages_icone-";
            echo ($context["advantages_row"] ?? null);
            echo "\" class=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2696);
            echo "\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_remarket_data[product_advantages][";
            // line 2697
            echo ($context["advantages_row"] ?? null);
            echo "][icone]\" id=\"advantages_input_icone-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "icone", [], "any", false, false, false, 2697);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<input type=\"hidden\" name=\"theme_oct_remarket_data[product_advantages][";
            // line 2698
            echo ($context["advantages_row"] ?? null);
            echo "][information_id]\" id=\"advantages_id-";
            echo ($context["advantages_row"] ?? null);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["advantage"], "information_id", [], "any", false, false, false, 2698);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
            // line 2704
            echo ($context["entry_footer_information_links"] ?? null);
            echo "\" id=\"advantage_link-";
            echo ($context["advantages_row"] ?? null);
            echo "\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2707
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2708
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2710
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2710);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2710);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2710);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data[product_advantages][";
                // line 2712
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2712);
                echo "][title]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["advantage"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2712)] ?? null) : null), "title", [], "any", false, false, false, 2712);
                echo "\" id=\"advantage-title-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2712);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2715
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2717
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2718
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2720
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2720);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2720);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2720);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data[product_advantages][";
                // line 2722
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2722);
                echo "][link]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["advantage"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2722)] ?? null) : null), "link", [], "any", false, false, false, 2722);
                echo "\" id=\"advantage-href-";
                echo ($context["advantages_row"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2722);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2725
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2728
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 2729
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
                // line 2731
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2731);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2731);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2731);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_remarket_data[product_advantages][";
                // line 2733
                echo ($context["advantages_row"] ?? null);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2733);
                echo "][text]\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["advantage"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2733)] ?? null) : null), "text", [], "any", false, false, false, 2733);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2736
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-";
            // line 2738
            echo ($context["advantages_row"] ?? null);
            echo "\">";
            echo ($context["entry_product_advantage_popup"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_advantages][";
            // line 2741
            echo ($context["advantages_row"] ?? null);
            echo "][popup]\" ";
            if (twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data"] ?? null), "product_advantages", [], "any", false, false, false, 2741)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["advantages_row"] ?? null)] ?? null) : null), "popup", [], "any", false, false, false, 2741)) {
                echo "checked=\"checked\"";
            }
            echo " id=\"input-product_advantage_popup-";
            echo ($context["advantages_row"] ?? null);
            echo "\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-product_advantage_popup-";
            // line 2742
            echo ($context["advantages_row"] ?? null);
            echo "\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row";
            // line 2753
            echo ($context["advantages_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2756
            $context["advantages_row"] = (($context["advantages_row"] ?? null) + 1);
            // line 2757
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advantage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2758
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width:5%;\"><button type=\"button\" onclick=\"addAdvantage();\" data-toggle=\"tooltip\" title=\"";
        // line 2762
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-orders\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2772
        echo ($context["tab_order"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"theme_oct_remarket_data_osucsess_status\">";
        // line 2774
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data_osucsess[status]\" ";
        // line 2777
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "status", [], "any", false, false, false, 2777)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"theme_oct_remarket_data_osucsess_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"theme_oct_remarket_data_osucsess_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2790
        echo ($context["text_order_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2792
        echo ($context["entry_order_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2797
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2798
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2798);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2798);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2798);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2798);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2798);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2800
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2803
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2804
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2804);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 2807
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_osucsess[reg][title][";
            // line 2808
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2808);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 2808), "title", [], "any", false, true, false, 2808), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2808), [], "array", true, true, false, 2808)) ? ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 2808), "title", [], "any", false, false, false, 2808)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2808)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_register_account";
            // line 2812
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_remarket_data_osucsess[reg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "reg", [], "any", false, true, false, 2812), "text", [], "any", false, true, false, 2812), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812), [], "array", true, true, false, 2812)) ? ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "reg", [], "any", false, false, false, 2812), "text", [], "any", false, false, false, 2812)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2812)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2816
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2820
        echo ($context["text_order_no_register_account"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" style=\"padding-top:80px;text-align:left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2822
        echo ($context["entry_order_no_register_dop"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;padding-bottom:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"order_no_register_account-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2827
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2828
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2828);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2828);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 2828);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2828);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 2828);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2830
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2833
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 2834
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"order_no_register_account-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2834);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">";
            // line 2837
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data_osucsess[noreg][title][";
            // line 2838
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2838);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 2838), "title", [], "any", false, true, false, 2838), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2838), [], "array", true, true, false, 2838)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 2838), "title", [], "any", false, false, false, 2838)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2838)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_order_register_account_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"order_no_register_account";
            // line 2842
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2842);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" name=\"theme_oct_remarket_data_osucsess[noreg][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2842);
            echo "]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_product_dop_tab_text"] ?? null);
            echo "\" class=\"form-control\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "noreg", [], "any", false, true, false, 2842), "text", [], "any", false, true, false, 2842), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2842), [], "array", true, true, false, 2842)) ? ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_data_osucsess"] ?? null), "noreg", [], "any", false, false, false, 2842), "text", [], "any", false, false, false, 2842)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 2842)] ?? null) : null)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2846
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-css_js\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 2852
        echo ($context["tab_css_js"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-css_code\">";
        // line 2854
        echo ($context["entry_css_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"css_code\" name=\"theme_oct_remarket_css_code\" rows=\"15\" class=\"form-control\">";
        // line 2856
        echo ($context["theme_oct_remarket_css_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-js_code\">";
        // line 2860
        echo ($context["entry_js_code"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"js_code\" name=\"theme_oct_remarket_js_code\" rows=\"15\" class=\"form-control\">";
        // line 2862
        echo ($context["theme_oct_remarket_js_code"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 2872
        echo ($context["text_image"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-logo-width\">";
        // line 2874
        echo ($context["entry_image_logo"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_logo_width\" value=\"";
        // line 2879
        echo ($context["theme_oct_remarket_image_logo_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-logo-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_logo_height\" value=\"";
        // line 2885
        echo ($context["theme_oct_remarket_image_logo_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2890
        if (($context["error_image_category"] ?? null)) {
            // line 2891
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2893
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2897
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2900
        echo ($context["entry_image_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_sub_category_width\" value=\"";
        // line 2905
        echo ($context["theme_oct_remarket_image_sub_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_sub_category_height\" value=\"";
        // line 2911
        echo ($context["theme_oct_remarket_image_sub_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2916
        if (($context["error_image_category"] ?? null)) {
            // line 2917
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2919
            echo ($context["error_image_sub_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2923
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2926
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_category_width\" value=\"";
        // line 2931
        echo ($context["theme_oct_remarket_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_category_height\" value=\"";
        // line 2937
        echo ($context["theme_oct_remarket_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2942
        if (($context["error_image_category"] ?? null)) {
            // line 2943
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2945
            echo ($context["error_image_category"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2949
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 2952
        echo ($context["entry_image_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_manufacturer_width\" value=\"";
        // line 2957
        echo ($context["theme_oct_remarket_image_manufacturer_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_manufacturer_height\" value=\"";
        // line 2963
        echo ($context["theme_oct_remarket_image_manufacturer_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2968
        if (($context["error_image_category"] ?? null)) {
            // line 2969
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2971
            echo ($context["error_image_manufacturer"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2975
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 2978
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_thumb_width\" value=\"";
        // line 2983
        echo ($context["theme_oct_remarket_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_image_popup_width\" value=\"";
        // line 2984
        echo ($context["theme_oct_remarket_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_thumb_height\" value=\"";
        // line 2990
        echo ($context["theme_oct_remarket_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_image_popup_height\" value=\"";
        // line 2991
        echo ($context["theme_oct_remarket_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 2996
        if (($context["error_image_thumb"] ?? null)) {
            // line 2997
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 2999
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3003
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 3006
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_popup_width\" value=\"";
        // line 3011
        echo ($context["theme_oct_remarket_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_popup_height\" value=\"";
        // line 3017
        echo ($context["theme_oct_remarket_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3022
        if (($context["error_image_popup"] ?? null)) {
            // line 3023
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3025
            echo ($context["error_image_thumb"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3029
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 3032
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_product_width\" value=\"";
        // line 3037
        echo ($context["theme_oct_remarket_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_product_height\" value=\"";
        // line 3043
        echo ($context["theme_oct_remarket_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3048
        if (($context["error_image_product"] ?? null)) {
            // line 3049
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3051
            echo ($context["error_image_product"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3055
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 3058
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_additional_width\" value=\"";
        // line 3063
        echo ($context["theme_oct_remarket_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_additional_height\" value=\"";
        // line 3069
        echo ($context["theme_oct_remarket_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3074
        if (($context["error_image_additional"] ?? null)) {
            // line 3075
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3077
            echo ($context["error_image_additional"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3081
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 3084
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_related_width\" value=\"";
        // line 3089
        echo ($context["theme_oct_remarket_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_related_height\" value=\"";
        // line 3095
        echo ($context["theme_oct_remarket_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3100
        if (($context["error_image_related"] ?? null)) {
            // line 3101
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3103
            echo ($context["error_image_related"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3107
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 3110
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_compare_width\" value=\"";
        // line 3115
        echo ($context["theme_oct_remarket_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_compare_height\" value=\"";
        // line 3121
        echo ($context["theme_oct_remarket_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3126
        if (($context["error_image_compare"] ?? null)) {
            // line 3127
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3129
            echo ($context["error_image_compare"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3133
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 3136
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_wishlist_width\" value=\"";
        // line 3141
        echo ($context["theme_oct_remarket_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_wishlist_height\" value=\"";
        // line 3147
        echo ($context["theme_oct_remarket_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3152
        if (($context["error_image_wishlist"] ?? null)) {
            // line 3153
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3155
            echo ($context["error_image_wishlist"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3159
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 3162
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_cart_width\" value=\"";
        // line 3167
        echo ($context["theme_oct_remarket_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_cart_height\" value=\"";
        // line 3173
        echo ($context["theme_oct_remarket_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3178
        if (($context["error_image_cart"] ?? null)) {
            // line 3179
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3181
            echo ($context["error_image_cart"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3185
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 3188
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_location_width\" value=\"";
        // line 3193
        echo ($context["theme_oct_remarket_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_image_location_height\" value=\"";
        // line 3199
        echo ($context["theme_oct_remarket_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">px</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 3204
        if (($context["error_image_location"] ?? null)) {
            // line 3205
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\tusNotify('warning', '";
            // line 3207
            echo ($context["error_image_location"] ?? null);
            echo "');
\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 3211
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-widgets\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"widgets\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-page_bar\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-cog fw\"></i> ";
        // line 3218
        echo ($context["text_page_bar"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-popup_cart\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-arrow-up fw\"></i> ";
        // line 3219
        echo ($context["text_popup_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-live_search\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-search fw\"></i> ";
        // line 3220
        echo ($context["text_live_search"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-feedback\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-phone-square fw\"></i> ";
        // line 3221
        echo ($context["text_feedback"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-alert\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-bell fw\"></i> ";
        // line 3222
        echo ($context["text_alert"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-page_bar\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3229
        echo ($context["text_page_bar"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page_bar_status\">";
        // line 3231
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_bar_data[status]\" ";
        // line 3234
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "status", [], "any", false, false, false, 3234)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-page_bar_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-page_bar_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"select-page_bar_position\">";
        // line 3247
        echo ($context["entry_page_bar_position"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select id=\"select-page_bar_position\" name=\"theme_oct_remarket_bar_data[position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left\" ";
        // line 3250
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "position", [], "any", false, false, false, 3250) == "left")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_page_bar_position_left"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right\" ";
        // line 3251
        if ((twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "position", [], "any", false, false, false, 3251) == "right")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["entry_page_bar_position_right"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-page_bar_show_wishlist\">";
        // line 3256
        echo ($context["entry_show_wishlist_bar"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_bar_data[show_wishlist]\" ";
        // line 3259
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "show_wishlist", [], "any", false, false, false, 3259)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-page_bar_show_wishlist\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-page_bar_show_wishlist\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-page_bar_show_compare\">";
        // line 3273
        echo ($context["entry_show_compare_bar"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_bar_data[show_compare]\" ";
        // line 3276
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "show_compare", [], "any", false, false, false, 3276)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-page_bar_show_compare\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-page_bar_show_compare\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-page_bar_show_cart\">";
        // line 3288
        echo ($context["entry_show_cart_bar"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_bar_data[show_cart]\" ";
        // line 3291
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "show_cart", [], "any", false, false, false, 3291)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-page_bar_show_cart\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-page_bar_show_cart\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-page_bar_show_views\">";
        // line 3305
        echo ($context["entry_show_product_views"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_bar_data[show_views]\" ";
        // line 3308
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "show_views", [], "any", false, false, false, 3308)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-page_bar_show_views\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-page_bar_show_views\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-page_bar_show_account\">";
        // line 3320
        echo ($context["entry_show_account"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_bar_data[show_account]\" ";
        // line 3323
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_bar_data"] ?? null), "show_account", [], "any", false, false, false, 3323)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-page_bar_show_account\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-page_bar_show_account\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-popup_cart\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3339
        echo ($context["text_popup_cart"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-popupcart-status\">";
        // line 3341
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_popup_cart_status\" ";
        // line 3344
        if (($context["theme_oct_remarket_popup_cart_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-popupcart-is\">";
        // line 3356
        echo ($context["entry_popup_is"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_isPopup\" ";
        // line 3359
        if (($context["theme_oct_remarket_isPopup"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popupcart-is\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popupcart-is\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-alert\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3374
        echo ($context["text_alert"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-alert_status\">";
        // line 3376
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_alert_status\" ";
        // line 3379
        if (($context["theme_oct_remarket_alert_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-alert_products\">";
        // line 3392
        echo ($context["entry_show_alert_products"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_alert_data[products]\" ";
        // line 3395
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_alert_data"] ?? null), "products", [], "any", false, false, false, 3395)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_products\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_products\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-alert_orders\">";
        // line 3407
        echo ($context["entry_show_alert_orders"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_alert_data[orders]\" ";
        // line 3410
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_alert_data"] ?? null), "orders", [], "any", false, false, false, 3410)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_orders\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_orders\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-alert_oct_modules\">";
        // line 3424
        echo ($context["entry_show_alert_octemplates"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_alert_data[oct_modules]\" ";
        // line 3427
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 3427)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-alert_oct_modules\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-alert_oct_modules\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-feedback\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3443
        echo ($context["text_feedback"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback-status\">";
        // line 3445
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_status\" ";
        // line 3448
        if (($context["theme_oct_remarket_feedback_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback-status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_messenger\">";
        // line 3460
        echo ($context["entry_show_feedback_messenger"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_messenger]\" ";
        // line 3463
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 3463)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_messenger\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_messenger\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_viber\">";
        // line 3475
        echo ($context["entry_show_feedback_viber"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_viber]\" ";
        // line 3478
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 3478)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_viber\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_viber\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_telegram\">";
        // line 3490
        echo ($context["entry_show_feedback_telegram"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_telegram]\" ";
        // line 3493
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 3493)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_telegram\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_telegram\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_skype\">";
        // line 3505
        echo ($context["entry_show_feedback_skype"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_skype]\" ";
        // line 3508
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_skype", [], "any", false, false, false, 3508)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_skype\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_skype\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_whatsapp\">";
        // line 3520
        echo ($context["entry_show_feedback_whatsapp"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_whatsapp]\" ";
        // line 3523
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 3523)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_whatsapp\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_whatsapp\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_email\">";
        // line 3535
        echo ($context["entry_show_feedback_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_email]\" ";
        // line 3538
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 3538)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_email\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_email\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_callback\">";
        // line 3550
        echo ($context["entry_show_feedback_callback"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_callback]\" ";
        // line 3553
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 3553)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_callback\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_callback\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-feedback_contact_link\">";
        // line 3565
        echo ($context["entry_show_feedback_contact_link"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_feedback_data[feedback_contact_link]\" ";
        // line 3568
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 3568)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-feedback_contact_link\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-feedback_contact_link\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-live_search\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 3583
        echo ($context["text_live_search"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_status\">";
        // line 3585
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_live_search_status\" ";
        // line 3588
        if (($context["theme_oct_remarket_live_search_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_price\">";
        // line 3600
        echo ($context["entry_show_live_price"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_live_search_data[price]\" ";
        // line 3603
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_live_search_data"] ?? null), "price", [], "any", false, false, false, 3603)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_price\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_price\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_model\">";
        // line 3615
        echo ($context["entry_show_live_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_live_search_data[model]\" ";
        // line 3618
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_live_search_data"] ?? null), "model", [], "any", false, false, false, 3618)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_model\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_model\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_sku\">";
        // line 3630
        echo ($context["entry_show_live_sku"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_live_search_data[sku]\" ";
        // line 3633
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_live_search_data"] ?? null), "sku", [], "any", false, false, false, 3633)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-live_search_sku\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-live_search_sku\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-show_live_descr\">";
        // line 3645
        echo ($context["entry_show_live_descr"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_live_search_data[description]\" ";
        // line 3648
        if (twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_live_search_data"] ?? null), "description", [], "any", false, false, false, 3648)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-show_live_descr\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-show_live_descr\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_sku\">";
        // line 3660
        echo ($context["entry_live_search_delay"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_live_search_data[delay]\" value=\"";
        // line 3662
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_live_search_data"] ?? null), "delay", [], "any", false, false, false, 3662);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_delay"] ?? null);
        echo "\" id=\"input-live_search_delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live_search_sku\">";
        // line 3666
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_live_search_data[count_symbol]\" value=\"";
        // line 3668
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_live_search_data"] ?? null), "count_symbol", [], "any", false, false, false, 3668);
        echo "\" placeholder=\"";
        echo ($context["entry_live_search_symbols"] ?? null);
        echo "\" id=\"input-live_search_delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_titles\" data-toggle=\"tab\"  aria-expanded=\"true\">SEO Titles</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_urls\" data-toggle=\"tab\"  aria-expanded=\"true\">";
        // line 3680
        echo ($context["text_seo_url"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_home\" data-toggle=\"tab\"  aria-expanded=\"true\">Home page (title/description/OG-image)</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_titles\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Titles</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_title_status\">";
        // line 3690
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_status\" ";
        // line 3693
        if (($context["theme_oct_remarket_seo_title_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin-left:0;margin-right:0;\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"seo_title-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-seo_title-product\" data-toggle=\"tab\">";
        // line 3706
        echo ($context["text_seo_title_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-category\" data-toggle=\"tab\">";
        // line 3707
        echo ($context["text_seo_title_category"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-seo_title-manufacturer\" data-toggle=\"tab\">";
        // line 3708
        echo ($context["text_seo_title_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-seo_title-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_status\">";
        // line 3715
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[product][title_status]\" ";
        // line 3718
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3718), "title_status", [], "any", false, false, false, 3718)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 3732
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[product][title_empty]\" ";
        // line 3735
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3735), "title_empty", [], "any", false, false, false, 3735)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3748
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3750
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3751
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3753
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3753);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3753);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3753);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_title_data[product][title][";
            // line 3755
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3755);
            echo "]\" value=\"";
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3755), "title", [], "any", false, false, false, 3755)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3755)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3758
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3759
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_status\">";
        // line 3765
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[product][description_status]\" ";
        // line 3768
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3768), "description_status", [], "any", false, false, false, 3768)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_product_description_empty\">";
        // line 3782
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[product][description_empty]\" ";
        // line 3785
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3785), "description_empty", [], "any", false, false, false, 3785)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_product_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_product_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3798
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3800
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3801
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3803
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3803);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3803);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3803);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_title_data[product][description][";
            // line 3805
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3805);
            echo "]\" value=\"";
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "product", [], "any", false, false, false, 3805), "description", [], "any", false, false, false, 3805)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3805)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3808
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3809
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[price]<br />[model]<br />[sku]<br />[store]<br />[category]<br />[manufacturer]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-category\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_status\">";
        // line 3817
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[category][title_status]\" ";
        // line 3820
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3820), "title_status", [], "any", false, false, false, 3820)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_title_empty\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 3834
        echo ($context["help_seo_title_empty"] ?? null);
        echo "\">";
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[category][title_empty]\" ";
        // line 3837
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3837), "title_empty", [], "any", false, false, false, 3837)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_title_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_title_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3850
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3852
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3853
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3855
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3855);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3855);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3855);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_title_data[category][title][";
            // line 3857
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3857);
            echo "]\" value=\"";
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3857), "title", [], "any", false, false, false, 3857)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3857)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3860
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3861
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_status\">";
        // line 3867
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[category][description_status]\" ";
        // line 3870
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3870), "description_status", [], "any", false, false, false, 3870)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-seo_category_description_empty\">";
        // line 3884
        echo ($context["entry_seo_title_empty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[category][description_empty]\" ";
        // line 3887
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3887), "description_empty", [], "any", false, false, false, 3887)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_category_description_empty\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_category_description_empty\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3900
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3903
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3905
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3905);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3905);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3905);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_title_data[category][description][";
            // line 3907
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3907);
            echo "]\" value=\"";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "category", [], "any", false, false, false, 3907), "description", [], "any", false, false, false, 3907)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3907)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3910
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3911
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_title-manufacturer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_title_status\">";
        // line 3918
        echo ($context["entry_seo_title_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[manufacturer][title_status]\" ";
        // line 3921
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3921), "title_status", [], "any", false, false, false, 3921)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_title_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_title_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3933
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 3935
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3936
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3938
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3938);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3938);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3938);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_title_data[manufacturer][title][";
            // line 3940
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3940);
            echo "]\" value=\"";
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3940), "title", [], "any", false, false, false, 3940)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3940)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3943
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3944
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_manufacturer_description_status\">";
        // line 3949
        echo ($context["entry_seo_description_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_title_data[manufacturer][description_status]\" ";
        // line 3952
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3952), "description_status", [], "any", false, false, false, 3952)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_manufacturer_description_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_manufacturer_description_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 3964
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 3966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3967
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 3969
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3969);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 3969);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 3969);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_title_data[manufacturer][description][";
            // line 3971
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3971);
            echo "]\" value=\"";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_title_data"] ?? null), "manufacturer", [], "any", false, false, false, 3971), "description", [], "any", false, false, false, 3971)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 3971)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3974
        echo "\t\t\t\t\t\t\t\t                            <div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3975
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[store]<br />[address]<br />[phone]<br />[time]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_urls\">
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO URL</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group text_seo_url_danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 3989
        echo ($context["text_seo_url_danger"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 3994
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_url_status\" ";
        // line 3997
        if (($context["theme_oct_remarket_seo_url_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_url_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_url_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_status\">";
        // line 4009
        echo ($context["entry_seo_url_lang_prefix"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4011
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4012
            echo "\t\t\t\t\t\t\t                    \t<div class=\"input-group\">
\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4014
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4014);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4014);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4014);
            echo "\" />
\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[lang_prefix][";
            // line 4016
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4016);
            echo "]\" value=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "lang_prefix", [], "any", false, false, false, 4016)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4016)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4019
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t\t<fildset>
\t\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 4023
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_product\">";
        // line 4025
        echo ($context["entry_seo_url_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[product]\" value=\"";
        // line 4027
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "product", [], "any", false, false, false, 4027);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4029
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[model]<br />[sku]<br />[brand]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_category\">";
        // line 4034
        echo ($context["entry_seo_url_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[category]\" value=\"";
        // line 4036
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "category", [], "any", false, false, false, 4036);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4038
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_manufacturer\">";
        // line 4043
        echo ($context["entry_seo_url_manufacturer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[manufacturer]\" value=\"";
        // line 4045
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "manufacturer", [], "any", false, false, false, 4045);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4047
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_information\">";
        // line 4052
        echo ($context["entry_seo_url_information"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[information]\" value=\"";
        // line 4054
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "information", [], "any", false, false, false, 4054);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4056
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_category\">";
        // line 4061
        echo ($context["entry_seo_url_blog_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[blog_category]\" value=\"";
        // line 4063
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "blog_category", [], "any", false, false, false, 4063);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4065
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_url_blog_article\">";
        // line 4070
        echo ($context["entry_seo_url_blog_article"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_url_data[blog_article]\" value=\"";
        // line 4072
        echo twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_url_data"] ?? null), "blog_article", [], "any", false, false, false, 4072);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"seo-variant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4074
        echo ($context["entry_seo_variants"] ?? null);
        echo ":<br />[name]<br />[lang_prefix]
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fildset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo_home\">
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t<legend>SEO Home page (title/description)</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_status\">";
        // line 4084
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_home_status\" ";
        // line 4087
        if (($context["theme_oct_remarket_seo_home_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4101
        echo ($context["entry_seo_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4104
            echo "\t\t\t\t\t\t\t\t                            <div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4106
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4106);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4106);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4106);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"theme_oct_remarket_seo_home_data[title][";
            // line 4108
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4108);
            echo "]\" value=\"";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_home_data"] ?? null), "title", [], "any", false, false, false, 4108)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4108)] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4111
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4115
        echo ($context["entry_seo_description"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                        \t";
        // line 4117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4118
            echo "\t\t\t\t\t\t\t\t                        \t<div class=\"input-group\" style=\"margin-bottom: 12px;\" >
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4120
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4120);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4120);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4120);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_oct_remarket_seo_home_data[description][";
            // line 4122
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4122);
            echo "]\" class=\"form-control\" />";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_home_data"] ?? null), "description", [], "any", false, false, false, 4122)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4122)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4125
        echo "\t\t\t\t\t\t\t\t                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<legend>Home page Open Graph main image</legend>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-seo_home_image_status\">";
        // line 4132
        echo ($context["entry_show_widget_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_seo_home_image_status\" ";
        // line 4135
        if (($context["theme_oct_remarket_seo_home_image_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-seo_home_image_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-seo_home_image_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4149
        echo ($context["entry_og_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t                    ";
        // line 4151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4152
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4152);
            echo "
\t\t\t\t\t\t\t\t                            <div class=\"input-group\" style=\"margin-bottom: 12px;\">
\t\t\t\t\t\t\t\t\t\t                        <span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t                        \t<img src=\"language/";
            // line 4155
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4155);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4155);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4155);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t                        </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"home-images-data-";
            // line 4157
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4157);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-placeholder=\"";
            // line 4158
            echo ($context["thumb"] ?? null);
            echo "\" src=\"";
            if ((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4158)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4158)] ?? null) : null)) {
                echo "/image/";
                echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4158)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4158)] ?? null) : null);
            } else {
                echo ($context["thumb"] ?? null);
            }
            echo "\" alt=\"\" title=\"\" width=\"100\" height=\"100\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"home-image-data-";
            // line 4160
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4160);
            echo "\" type=\"hidden\" name=\"theme_oct_remarket_seo_home_image_data[image][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4160);
            echo "]\" value=\"";
            if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4160)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4160)] ?? null) : null)) {
                echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = twig_get_attribute($this->env, $this->source, ($context["theme_oct_remarket_seo_home_image_data"] ?? null), "image", [], "any", false, false, false, 4160)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4160)] ?? null) : null);
            }
            echo "\" />
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4163
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-help\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 4174
        echo ($context["tab_help"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
        // line 4176
        echo ($context["entry_help_text"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_version\" value=\"";
        // line 4179
        echo ($context["theme_oct_remarket_version"] ?? null);
        echo "\" />
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('input[name=\\'advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4189
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'advantage_link\\']').val('');
\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4214
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4223
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4245
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4254
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4276
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

\$('input[name=\\'mobile_advantage_link\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4285
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\$('input[name=\\'mobile_advantage_link\\']').val('');

\t\t\$.each(item.descr, function(i, val) {
\t\t\t\$('#mobile_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t});

\t\t\$.each(item.href[";
        // line 4307
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\$('#mobile_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t});
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 4317
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append(`<div id=\"product-category\${ item['value'] }\"><i class=\"fa fa-minus-circle\"></i> \${ item['label'] }<input type=\"hidden\" name=\"theme_oct_remarket_data[footer_category_links][]\" value=\"\${ item['value'] }\" /></div>`);
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

\$(\".spectrum\").spectrum({
\tpreferredFormat: \"rgb\",
\tshowInitial: true,
\tshowInput: true,
\tshowAlpha: true,
\tshowPalette: true,
\tpalette: [[\"red\", \"rgba(0, 255, 0, .5)\", \"rgb(0, 0, 255)\"]]
});
</script>
<script>
const codemirror = CodeMirror.fromTextArea(document.getElementById('css_code'), {
\tmode : 'css',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

const codemirror2 = CodeMirror.fromTextArea(document.getElementById('js_code'), {
\tmode : 'javascript',
\theight: '100%',
\tlineNumbers: true,
\tautofocus: true,
\tlineWrapping: true
});

\$('a#code_mir').on('shown.bs.tab', function () {
\t\$('.CodeMirror').each(function(i, el){
\t\tel.CodeMirror.refresh();
\t});
});

\$('#input-product_dop_tab').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_dop_tabs_text\").slideDown('slow');
    } else {
        \$(\"#product_dop_tabs_text\").slideUp('slow');
    }
});

\$('#input-product_advantage').change(function() {
    let \$input = \$(this);

    if (\$input.is(\":checked\")) {
        \$(\"#product_advantages\").slideDown('slow');
    } else {
        \$(\"#product_advantages\").slideUp('slow');
    }
});

\$('#address-language a:first,#language-megamenu a:first,#language_mobile a:first,#open-language a:first,#contact_view_html-language a:first,#product_dop_tab-language a:first,#order_register_account-language a:first,#order_no_register_account-language a:first').tab('show');
</script>
<script>
let social_row = ";
        // line 4398
        echo ($context["social_row"] ?? null);
        echo ";

function addSocial() {
\tconst html = `
\t<tr id=\"social-row\${ social_row }\">
\t\t<td class=\"left\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button onClick=\"fontIcons('social_icone-\${ social_row }', 'social_input_icone-\${ social_row }');\" class=\"btn btn-default\" type=\"button\"><i id=\"social_icone-\${ social_row }\" class=\"fas fa-asterisk\"></i></button>
\t\t\t\t<input type=\"hidden\" name=\"theme_oct_remarket_data[socials][\${ social_row }][icone]\" id=\"social_input_icone-\${ social_row }\" value=\"\" />
\t\t\t\t</span>
\t\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data[socials][\${ social_row }][title]\" value=\"\" placeholder=\"";
        // line 4409
        echo ($context["entry_social_title"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t</div>
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<input type=\"text\" name=\"theme_oct_remarket_data[socials][\${ social_row }][link]\" value=\"\" placeholder=\"";
        // line 4413
        echo ($context["entry_social_link"] ?? null);
        echo "\" class=\"form-control\" />
\t\t</td>
\t\t<td class=\"left\">
\t\t\t<a onclick=\"\$('#social-row\${ social_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4416
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t</td>
\t</tr>
\t`;

\t\$('#tab-socials-settings table tbody').append(html);

\tsocial_row++;
}
</script>
<script>
let header_advantages_row = ";
        // line 4427
        echo ($context["header_advantages_row"] ?? null);
        echo ";

function addHeaderAdvantage() {
\tconst html = `
\t<tr id=\"header_advantage-row\${ header_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"header_advantage_link\" value=\"\" placeholder=\"";
        // line 4434
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ header_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4438
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4440
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4440);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4440);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4440);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[header_links][\${ header_advantages_row }][";
            // line 4442
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4442);
            echo "][title]\" value=\"\" id=\"header_advantage-title-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4442);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4445
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4448
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4450
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4450);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4450);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4450);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[header_links][\${ header_advantages_row }][";
            // line 4452
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4452);
            echo "][link]\" value=\"\" id=\"header_advantage-href-\${ header_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4452);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4455
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#header_advantage-row\${ header_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4458
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#header_advantages table tbody').append(html);

\theader_advantages_row++;

\t\$('input[name=\\'header_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4470
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'header_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#header_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4494
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#header_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let footer_advantages_row = ";
        // line 4502
        echo ($context["footer_advantages_row"] ?? null);
        echo ";

function addFooterAdvantage() {
\tconst html = `
\t<tr id=\"footer_advantage-row\${ footer_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"footer_advantage_link\" value=\"\" placeholder=\"";
        // line 4509
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ footer_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4512
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4513
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4515
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4515);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4515);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4515);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[footer_links][\${ footer_advantages_row }][";
            // line 4517
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4517);
            echo "][title]\" value=\"\" id=\"footer_advantage-title-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4517);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4520
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4522
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4523
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4525
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4525);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4525);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4525);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[footer_links][\${ footer_advantages_row }][";
            // line 4527
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4527);
            echo "][link]\" value=\"\" id=\"footer_advantage-href-\${ footer_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4527);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4530
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#footer_advantage-row\${ footer_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4533
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#footer_advantages table tbody').append(html);

\tfooter_advantages_row++;

\t\$('input[name=\\'footer_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4545
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'footer_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#footer_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4569
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#footer_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let mobile_advantages_row = ";
        // line 4577
        echo ($context["mobile_advantages_row"] ?? null);
        echo ";

function addMobileAdvantage() {
\tconst html = `
\t<tr id=\"mobile_advantage-row\${ mobile_advantages_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"mobile_advantage_link\" value=\"\" placeholder=\"";
        // line 4584
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"mobile_advantage_link-\${ mobile_advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4588
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4590
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4590);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4590);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4590);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[mobile_links][\${ mobile_advantages_row }][";
            // line 4592
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4592);
            echo "][title]\" value=\"\" id=\"mobile_advantage-title-\${ mobile_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4592);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4595
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4597
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4598
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4600
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4600);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4600);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4600);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[mobile_links][\${ mobile_advantages_row }][";
            // line 4602
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4602);
            echo "][link]\" value=\"\" id=\"mobile_advantage-href-\${ mobile_advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4602);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4605
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#mobile_advantage-row\${ mobile_advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4608
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#mobile_advantages table tbody').append(html);

\tmobile_advantages_row++;

\t\$('input[name=\\'mobile_advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4620
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'mobile_advantage_link\\']').val('');

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#mobile_advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4644
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#mobile_advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let advantages_row = ";
        // line 4652
        echo ($context["advantages_row"] ?? null);
        echo ";

function addAdvantage() {
\tconst html = `
\t<tr id=\"advantage-row\${ advantages_row }\">
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-btn\">
\t            \t<button onClick=\"fontIcons('advantages_icone-\${ advantages_row }', 'advantages_input_icone-\${ advantages_row }');\" class=\"btn btn-default social_icone\" type=\"button\"><i id=\"advantages_icone-\${ advantages_row }\" class=\"fas fa-asterisk\"></i></button>
\t            \t<input type=\"hidden\" name=\"theme_oct_remarket_data[product_advantages][\${ advantages_row }][icone]\" id=\"advantages_input_icone-\${ advantages_row }\" value=\"\" />
\t            \t<input type=\"hidden\" name=\"theme_oct_remarket_data[product_advantages][\${ advantages_row }][information_id]\" id=\"advantages_id-\${ advantages_row }\" value=\"\" />
\t            </span>
\t       </div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<input type=\"text\" name=\"advantage_link\" value=\"\" placeholder=\"";
        // line 4668
        echo ($context["entry_footer_information_links"] ?? null);
        echo "\" id=\"advantage_link-\${ advantages_row }\" class=\"form-control\" autocomplete=\"off\" /><hr />
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4671
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4672
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4674
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4674);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4674);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4674);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Title\" name=\"theme_oct_remarket_data[product_advantages][\${ advantages_row }][";
            // line 4676
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4676);
            echo "][title]\" value=\"\" id=\"advantage-title-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4676);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4679
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 4681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4682
            echo "\t\t\t\t<div class=\"input-group\">
\t                <span class=\"input-group-addon\">
\t                \t<img src=\"language/";
            // line 4684
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4684);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4684);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4684);
            echo "\" />
\t                </span>
\t\t\t\t\t<input type=\"text\" placeholder=\"Link\" name=\"theme_oct_remarket_data[product_advantages][\${ advantages_row }][";
            // line 4686
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4686);
            echo "][link]\" value=\"\" id=\"advantage-href-\${ advantages_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4686);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4689
        echo "\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\">
\t\t\t";
        // line 4692
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4693
            echo "\t\t\t<div class=\"input-group\">
\t            <span class=\"input-group-addon\">
\t            \t<img src=\"language/";
            // line 4695
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4695);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4695);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4695);
            echo "\" />
\t            </span>
\t\t\t\t<textarea name=\"theme_oct_remarket_data[product_advantages][\${ advantages_row }][";
            // line 4697
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4697);
            echo "][text]\" class=\"form-control\"></textarea>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4700
        echo "\t\t</td>
\t\t<td class=\"text-left\" style=\"width:10%;\">
\t\t\t<label class=\"col-sm-12\" for=\"input-product_advantage_popup-\${ advantages_row }\">";
        // line 4702
        echo ($context["entry_product_advantage_popup"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[product_advantages][\${ advantages_row }][popup]\" id=\"input-product_advantage_popup-\${ advantages_row }\" tabindex=\"1\">
\t\t\t\t\t<label for=\"input-product_advantage_popup-\${ advantages_row }\"></label>
\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t\t<td class=\"text-left\" style=\"width:5%;\">
\t\t\t<button type=\"button\" onclick=\"\$('#advantage-row\${ advantages_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4717
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t</td>
\t</tr>
\t`;

\t\$('#product_advantages table tbody').append(html);

\tadvantages_row++;

\t\$('input[name=\\'advantage_link\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/information/octAutocomplete&user_token=";
        // line 4729
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tcache: false,
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['information_id'],
\t\t\t\t\t\t\tdescr: item['description'],
\t\t\t\t\t\t\thref: item['href'],
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tlet in_id = \$(this).attr('id').split('-');

\t\t\t\$('input[name=\\'advantage_link\\']').val('');

\t\t\t\$('#advantages_id-' + in_id[1]).val(item.value);

\t\t\t\$.each(item.descr, function(i, val) {
\t\t\t\t\$('#advantage-title-' + in_id[1] + i).val(val['title']);
\t\t\t});

\t\t\t\$.each(item.href[";
        // line 4755
        echo ($context["store_id"] ?? null);
        echo "], function(i, val) {
\t\t\t\t\$('#advantage-href-' + in_id[1] + i).val('/'+ val);
\t\t\t});
\t\t}
\t});
}
</script>
<script>
let payment_row = ";
        // line 4763
        echo ($context["payment_row"] ?? null);
        echo ";

function addPayment(){
\tconst html = `
\t<div id=\"payments-row-\${ payment_row }\" class=\"col-sm-2 payments\">
\t\t<a href=\"javascript:;\" onclick=\"\$('#payments-row-\${ payment_row }').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 4768
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btnr\"><i class=\"fa fa-minus-circle\"></i></a>
\t\t<label class=\"col-sm-12 control-label\" for=\"input-payments_customers_\${ payment_row }\">
\t\t\t<a href=\"\" id=\"thumb-image\${ payment_row }\" data-toggle=\"image\">
\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 4771
        echo ($context["placeholder"] ?? null);
        echo "\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t</a>
\t\t\t<input type=\"hidden\" value=\"\" name=\"theme_oct_remarket_data[payments][customers][\${ payment_row }][image]\" id=\"input-image\${ payment_row }\" />
\t\t</label>
\t\t<div class=\"col-sm-6\">
\t\t\t<div class=\"toggle-group\">
\t\t\t\t<input type=\"checkbox\" name=\"theme_oct_remarket_data[payments][customers][\${ payment_row }][status]\" id=\"input-payments_customers_\${ payment_row }\" tabindex=\"1\">
\t\t\t\t<label for=\"input-payments_customers_\${ payment_row }\"></label>
\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$(\"#add_new_block\").before(html);

\tpayment_row++;
}
</script>

<script>
\$(document).delegate('[id^=megamenu-] .panel-heading', 'click', function() {
\tlet id_menu = \$(this).parent().attr('id');
\tlet m_id = id_menu.split('-');

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 4802
        echo ($context["user_token"] ?? null);
        echo "&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});

\t\$(this).siblings('.panel-body').find('.main_menu_block a:first').tab('show');
\t\$(this).siblings('.panel-body').find('.menu_lang_block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

\$(document).delegate('.menu_type', 'change', function() {
\tlet m_id = \$(this).attr(\"id\").split('-');
\tlet val = \$(this).val();

\t\$.ajax({
\t\turl: 'index.php?route=octemplates/menu/oct_menu/getMenu&user_token=";
        // line 4823
        echo ($context["user_token"] ?? null);
        echo "&type='+ val +'&menu_id=' + m_id[1],
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tif (data.length > 1) {
\t\t\t\t\$('#menu_settings-'+ m_id[1]).html(data);
\t\t\t}
\t\t}
\t});
});

let menu_id = ";
        // line 4835
        echo ($context["menu_id"] ?? null);
        echo ";

function addNewMenuItem() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"megamenu-\${ menu_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> New Menu Item</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#megamenu-\${ menu_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<ul class=\"nav nav-tabs main_menu_block\">
\t\t\t\t<li><a href=\"#tab-menu_general\${ menu_id }\" data-toggle=\"tab\">";
        // line 4848
        echo ($context["tab_menu_general"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-menu_language\${ menu_id }\" data-toggle=\"tab\">";
        // line 4849
        echo ($context["tab_menu_language"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-menu_links\${ menu_id }\" data-toggle=\"tab\">";
        // line 4850
        echo ($context["tab_menu_links"] ?? null);
        echo "</a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_general\${ menu_id }\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4855
        echo ($context["text_menu_type"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"oct_megamenu[\${ menu_id }][type]\" class=\"form-control menu_type\" id=\"menu_type-\${ menu_id }\">
\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
        // line 4858
        echo ($context["text_menu_select"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"category\">";
        // line 4859
        echo ($context["text_menu_type_1"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"manufacturer\">";
        // line 4860
        echo ($context["text_menu_type_2"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"oct_blogcategory\">";
        // line 4861
        echo ($context["text_menu_type_3"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"link\">";
        // line 4862
        echo ($context["text_menu_type_4"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"menu_settings-\${ menu_id }\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_language\${ menu_id }\">
\t\t\t\t\t<legend>";
        // line 4869
        echo ($context["tab_menu_language"] ?? null);
        echo "</legend>
\t\t\t\t\t<ul class=\"nav nav-tabs menu_lang_block\" id=\"menu_item_language\${ menu_id }\">
\t\t\t\t\t\t";
        // line 4871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4872
            echo "\t\t\t\t\t\t<li><a href=\"#menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4872);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4872);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4872);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4872);
            echo "\" />  ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4872);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4874
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t";
        // line 4876
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4877
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"menu_item_language\${ menu_id }_";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4877);
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 4879
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4879);
            echo "\">";
            echo ($context["entry_menu_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 4881
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4881);
            echo "][title]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4881);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link";
            // line 4885
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4885);
            echo "\">";
            echo ($context["entry_menu_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_megamenu[\${ menu_id }][description][";
            // line 4887
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4887);
            echo "][link]\" value=\"\" placeholder=\"";
            echo ($context["entry_menu_link"] ?? null);
            echo "\" id=\"input-link";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4887);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4892
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-menu_links\${ menu_id }\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 4896
        echo ($context["entry_menu_store"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 4899
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 4900
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"oct_megamenu[\${ menu_id }][stories][]\" value=\"";
            // line 4902
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 4902);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
            // line 4903
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["store"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4907
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-priority\">";
        // line 4911
        echo ($context["entry_menu_customers"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 4914
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 4915
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_megamenu[\${ menu_id }][customers][]\" value=\"";
            // line 4917
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 4917);
            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 4918
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["customer_group"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4922
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t`;

\t\$('#megamenu_block .empty_locations').hide();
\t\$(\"#megamenu_block\").append(html);

\tmenu_id++;
}

\$(document).delegate('[id^=locations-] .panel-heading', 'click', function() {
\t\$(this).siblings('.panel-body').find('.location-block a:first').tab('show');
\t\$(this).siblings('.panel-body').toggle();
});

let location_id = ";
        // line 4942
        echo ($context["location_id"] ?? null);
        echo ";

function addNewLocation() {
\tconst html = `
\t<div class=\"panel panel-default\" id=\"locations-\${ location_id }\">
\t\t<div class=\"panel-heading\">
\t\t\t<span><i class=\"fa fa-address-card\" aria-hidden=\"true\"></i> Title</span>
\t\t\t<a href=\"javascript:;\" class=\"btn btn-danger pull-right\" onclick=\"\$('#locations-\${ location_id }').remove();return false;\">
\t\t\t\t<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 4955
        echo ($context["text_locations_descr"] ?? null);
        echo "</legend>
\t\t\t\t<ul class=\"nav nav-tabs location-block\" id=\"locations-language-\${ location_id }\">
\t\t\t\t\t";
        // line 4957
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4958
            echo "\t\t\t\t\t\t<li><a href=\"#locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4958);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4958);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 4958);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4958);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 4958);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4960
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 4962
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 4963
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"locations-language\${ location_id }-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4963);
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_title\${ location_id }-";
            // line 4965
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4965);
            echo "\">";
            echo ($context["entry_location_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"descr_title\${ location_id }-";
            // line 4967
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4967);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4967);
            echo "][title]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_address\${ location_id }-";
            // line 4971
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4971);
            echo "\">";
            echo ($context["entry_location_address"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_address\${ location_id }-";
            // line 4973
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4973);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4973);
            echo "][address]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"descr_open\${ location_id }-";
            // line 4977
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4977);
            echo "\">";
            echo ($context["entry_contact_open"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<textarea id=\"descr_open\${ location_id }-";
            // line 4979
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4979);
            echo "\" name=\"oct_locations[\${ location_id }][description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 4979);
            echo "][open]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4984
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset>
\t\t\t\t<legend>";
        // line 4987
        echo ($context["text_locations_info"] ?? null);
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_phone\">";
        // line 4989
        echo ($context["entry_contact_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_phone\" name=\"oct_locations[\${ location_id }][phone]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_map\${ location_id }\">";
        // line 4995
        echo ($context["entry_contact_map"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea id=\"location_map\${ location_id }\" name=\"oct_locations[\${ location_id }][map]\" rows=\"5\" class=\"form-control\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_link\${ location_id }\">";
        // line 5001
        echo ($context["entry_location_link"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" id=\"location_link\${ location_id }\" name=\"oct_locations[\${ location_id }][link]\" value=\"\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_image\${ location_id }\">";
        // line 5007
        echo ($context["entry_location_image"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<a href=\"\" id=\"thumb-contact_location_image\${ location_id }\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 5010
        echo ($context["contact_placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["contact_placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<input type=\"hidden\" name=\"oct_locations[\${ location_id }][image]\" value=\"\" id=\"input-contact_location_image\${ location_id }\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"location_sort\${ location_id }\">";
        // line 5016
        echo ($context["entry_location_sort"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"number\" id=\"location_sort\${ location_id }\" name=\"oct_locations[\${ location_id }][sort]\" value=\"0\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t`;

\t\$(\"#site_locations\").append(html);

\tlocation_id++;
}
</script>

<script>
function fontIcons(icone_id, input_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/theme/oct_remarket/getIcons&user_token=";
        // line 5035
        echo ($context["user_token"] ?? null);
        echo "&icone_id=' + icone_id + '&input_id=' + input_id,
\t\ttype: 'get',
\t\tcache: false,
\t\tdataType: 'html',
\t\tsuccess: function(data) {
\t\t\tconst html = `
\t\t\t<div id=\"modal-icons\" class=\"modal\">
\t\t\t  <div class=\"modal-dialog\" style=\"width:55%;\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t        <h4 class=\"modal-title\">Font Awesome Icons</h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\">\${ data }</div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t`;

\t\t\t\$('body').append(html);

\t\t\t\$('#modal-icons').modal('show');
\t\t}
\t});
}
</script>
<script>
\tif ('";
        // line 5062
        echo ($context["success"] ?? null);
        echo "' == '";
        echo ($context["text_success"] ?? null);
        echo "'){
\t\tsetTimeout(function() {
\t\t\tif(confirm(\"";
        // line 5064
        echo ($context["auto_clear_cache"] ?? null);
        echo "\")){
\t\t\t\t\$('.fa.fa-trash-o').click();
\t\t\t}
\t\t}, 500);
\t}
</script>
";
        // line 5070
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "octemplates/theme/oct_remarket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9650 => 5070,  9641 => 5064,  9634 => 5062,  9604 => 5035,  9582 => 5016,  9571 => 5010,  9565 => 5007,  9556 => 5001,  9547 => 4995,  9538 => 4989,  9533 => 4987,  9528 => 4984,  9515 => 4979,  9508 => 4977,  9499 => 4973,  9492 => 4971,  9483 => 4967,  9476 => 4965,  9470 => 4963,  9466 => 4962,  9462 => 4960,  9445 => 4958,  9441 => 4957,  9436 => 4955,  9420 => 4942,  9398 => 4922,  9388 => 4918,  9384 => 4917,  9380 => 4915,  9376 => 4914,  9370 => 4911,  9364 => 4907,  9354 => 4903,  9350 => 4902,  9346 => 4900,  9342 => 4899,  9336 => 4896,  9330 => 4892,  9315 => 4887,  9308 => 4885,  9297 => 4881,  9290 => 4879,  9284 => 4877,  9280 => 4876,  9276 => 4874,  9259 => 4872,  9255 => 4871,  9250 => 4869,  9240 => 4862,  9236 => 4861,  9232 => 4860,  9228 => 4859,  9224 => 4858,  9218 => 4855,  9210 => 4850,  9206 => 4849,  9202 => 4848,  9186 => 4835,  9171 => 4823,  9147 => 4802,  9111 => 4771,  9105 => 4768,  9097 => 4763,  9086 => 4755,  9057 => 4729,  9042 => 4717,  9024 => 4702,  9020 => 4700,  9011 => 4697,  9002 => 4695,  8998 => 4693,  8994 => 4692,  8989 => 4689,  8978 => 4686,  8969 => 4684,  8965 => 4682,  8961 => 4681,  8957 => 4679,  8946 => 4676,  8937 => 4674,  8933 => 4672,  8929 => 4671,  8923 => 4668,  8904 => 4652,  8893 => 4644,  8866 => 4620,  8851 => 4608,  8846 => 4605,  8835 => 4602,  8826 => 4600,  8822 => 4598,  8818 => 4597,  8814 => 4595,  8803 => 4592,  8794 => 4590,  8790 => 4588,  8786 => 4587,  8780 => 4584,  8770 => 4577,  8759 => 4569,  8732 => 4545,  8717 => 4533,  8712 => 4530,  8701 => 4527,  8692 => 4525,  8688 => 4523,  8684 => 4522,  8680 => 4520,  8669 => 4517,  8660 => 4515,  8656 => 4513,  8652 => 4512,  8646 => 4509,  8636 => 4502,  8625 => 4494,  8598 => 4470,  8583 => 4458,  8578 => 4455,  8567 => 4452,  8558 => 4450,  8554 => 4448,  8550 => 4447,  8546 => 4445,  8535 => 4442,  8526 => 4440,  8522 => 4438,  8518 => 4437,  8512 => 4434,  8502 => 4427,  8488 => 4416,  8482 => 4413,  8475 => 4409,  8461 => 4398,  8377 => 4317,  8364 => 4307,  8339 => 4285,  8327 => 4276,  8302 => 4254,  8290 => 4245,  8265 => 4223,  8253 => 4214,  8225 => 4189,  8212 => 4179,  8206 => 4176,  8201 => 4174,  8188 => 4163,  8173 => 4160,  8161 => 4158,  8157 => 4157,  8148 => 4155,  8141 => 4152,  8137 => 4151,  8132 => 4149,  8113 => 4135,  8107 => 4132,  8098 => 4125,  8087 => 4122,  8078 => 4120,  8074 => 4118,  8070 => 4117,  8065 => 4115,  8059 => 4111,  8048 => 4108,  8039 => 4106,  8035 => 4104,  8031 => 4103,  8026 => 4101,  8007 => 4087,  8001 => 4084,  7988 => 4074,  7983 => 4072,  7978 => 4070,  7970 => 4065,  7965 => 4063,  7960 => 4061,  7952 => 4056,  7947 => 4054,  7942 => 4052,  7934 => 4047,  7929 => 4045,  7924 => 4043,  7916 => 4038,  7911 => 4036,  7906 => 4034,  7898 => 4029,  7893 => 4027,  7888 => 4025,  7883 => 4023,  7877 => 4019,  7866 => 4016,  7857 => 4014,  7853 => 4012,  7849 => 4011,  7844 => 4009,  7827 => 3997,  7821 => 3994,  7813 => 3989,  7796 => 3975,  7793 => 3974,  7782 => 3971,  7773 => 3969,  7769 => 3967,  7765 => 3966,  7760 => 3964,  7743 => 3952,  7737 => 3949,  7729 => 3944,  7726 => 3943,  7715 => 3940,  7706 => 3938,  7702 => 3936,  7698 => 3935,  7693 => 3933,  7676 => 3921,  7670 => 3918,  7660 => 3911,  7657 => 3910,  7646 => 3907,  7637 => 3905,  7633 => 3903,  7629 => 3902,  7624 => 3900,  7606 => 3887,  7600 => 3884,  7581 => 3870,  7575 => 3867,  7566 => 3861,  7563 => 3860,  7552 => 3857,  7543 => 3855,  7539 => 3853,  7535 => 3852,  7530 => 3850,  7512 => 3837,  7504 => 3834,  7485 => 3820,  7479 => 3817,  7468 => 3809,  7465 => 3808,  7454 => 3805,  7445 => 3803,  7441 => 3801,  7437 => 3800,  7432 => 3798,  7414 => 3785,  7408 => 3782,  7389 => 3768,  7383 => 3765,  7374 => 3759,  7371 => 3758,  7360 => 3755,  7351 => 3753,  7347 => 3751,  7343 => 3750,  7338 => 3748,  7320 => 3735,  7312 => 3732,  7293 => 3718,  7287 => 3715,  7277 => 3708,  7273 => 3707,  7269 => 3706,  7251 => 3693,  7245 => 3690,  7232 => 3680,  7215 => 3668,  7210 => 3666,  7201 => 3662,  7196 => 3660,  7179 => 3648,  7173 => 3645,  7156 => 3633,  7150 => 3630,  7133 => 3618,  7127 => 3615,  7110 => 3603,  7104 => 3600,  7087 => 3588,  7081 => 3585,  7076 => 3583,  7056 => 3568,  7050 => 3565,  7033 => 3553,  7027 => 3550,  7010 => 3538,  7004 => 3535,  6987 => 3523,  6981 => 3520,  6964 => 3508,  6958 => 3505,  6941 => 3493,  6935 => 3490,  6918 => 3478,  6912 => 3475,  6895 => 3463,  6889 => 3460,  6872 => 3448,  6866 => 3445,  6861 => 3443,  6840 => 3427,  6834 => 3424,  6815 => 3410,  6809 => 3407,  6792 => 3395,  6786 => 3392,  6768 => 3379,  6762 => 3376,  6757 => 3374,  6737 => 3359,  6731 => 3356,  6714 => 3344,  6708 => 3341,  6703 => 3339,  6682 => 3323,  6676 => 3320,  6659 => 3308,  6653 => 3305,  6634 => 3291,  6628 => 3288,  6611 => 3276,  6605 => 3273,  6586 => 3259,  6580 => 3256,  6568 => 3251,  6560 => 3250,  6554 => 3247,  6536 => 3234,  6530 => 3231,  6525 => 3229,  6515 => 3222,  6511 => 3221,  6507 => 3220,  6503 => 3219,  6499 => 3218,  6490 => 3211,  6483 => 3207,  6479 => 3205,  6477 => 3204,  6467 => 3199,  6456 => 3193,  6448 => 3188,  6443 => 3185,  6436 => 3181,  6432 => 3179,  6430 => 3178,  6420 => 3173,  6409 => 3167,  6401 => 3162,  6396 => 3159,  6389 => 3155,  6385 => 3153,  6383 => 3152,  6373 => 3147,  6362 => 3141,  6354 => 3136,  6349 => 3133,  6342 => 3129,  6338 => 3127,  6336 => 3126,  6326 => 3121,  6315 => 3115,  6307 => 3110,  6302 => 3107,  6295 => 3103,  6291 => 3101,  6289 => 3100,  6279 => 3095,  6268 => 3089,  6260 => 3084,  6255 => 3081,  6248 => 3077,  6244 => 3075,  6242 => 3074,  6232 => 3069,  6221 => 3063,  6213 => 3058,  6208 => 3055,  6201 => 3051,  6197 => 3049,  6195 => 3048,  6185 => 3043,  6174 => 3037,  6166 => 3032,  6161 => 3029,  6154 => 3025,  6150 => 3023,  6148 => 3022,  6138 => 3017,  6127 => 3011,  6119 => 3006,  6114 => 3003,  6107 => 2999,  6103 => 2997,  6101 => 2996,  6091 => 2991,  6085 => 2990,  6074 => 2984,  6068 => 2983,  6060 => 2978,  6055 => 2975,  6048 => 2971,  6044 => 2969,  6042 => 2968,  6032 => 2963,  6021 => 2957,  6013 => 2952,  6008 => 2949,  6001 => 2945,  5997 => 2943,  5995 => 2942,  5985 => 2937,  5974 => 2931,  5966 => 2926,  5961 => 2923,  5954 => 2919,  5950 => 2917,  5948 => 2916,  5938 => 2911,  5927 => 2905,  5919 => 2900,  5914 => 2897,  5907 => 2893,  5903 => 2891,  5901 => 2890,  5891 => 2885,  5880 => 2879,  5872 => 2874,  5867 => 2872,  5854 => 2862,  5849 => 2860,  5842 => 2856,  5837 => 2854,  5832 => 2852,  5824 => 2846,  5806 => 2842,  5795 => 2838,  5791 => 2837,  5784 => 2834,  5780 => 2833,  5775 => 2830,  5758 => 2828,  5754 => 2827,  5746 => 2822,  5741 => 2820,  5735 => 2816,  5717 => 2812,  5706 => 2808,  5702 => 2807,  5695 => 2804,  5691 => 2803,  5686 => 2800,  5669 => 2798,  5665 => 2797,  5657 => 2792,  5652 => 2790,  5634 => 2777,  5628 => 2774,  5623 => 2772,  5610 => 2762,  5604 => 2758,  5598 => 2757,  5596 => 2756,  5588 => 2753,  5574 => 2742,  5564 => 2741,  5556 => 2738,  5552 => 2736,  5539 => 2733,  5530 => 2731,  5526 => 2729,  5522 => 2728,  5517 => 2725,  5501 => 2722,  5492 => 2720,  5488 => 2718,  5484 => 2717,  5480 => 2715,  5464 => 2712,  5455 => 2710,  5451 => 2708,  5447 => 2707,  5439 => 2704,  5426 => 2698,  5418 => 2697,  5408 => 2696,  5400 => 2692,  5395 => 2691,  5393 => 2690,  5384 => 2684,  5380 => 2683,  5371 => 2677,  5365 => 2676,  5349 => 2665,  5343 => 2662,  5338 => 2660,  5330 => 2657,  5325 => 2655,  5319 => 2651,  5301 => 2647,  5291 => 2644,  5285 => 2642,  5281 => 2641,  5277 => 2639,  5260 => 2637,  5256 => 2636,  5250 => 2633,  5244 => 2632,  5227 => 2620,  5221 => 2617,  5202 => 2603,  5194 => 2600,  5177 => 2588,  5171 => 2585,  5152 => 2571,  5146 => 2568,  5129 => 2556,  5123 => 2553,  5112 => 2547,  5107 => 2545,  5090 => 2533,  5084 => 2530,  5079 => 2527,  5062 => 2515,  5056 => 2512,  5053 => 2511,  5051 => 2510,  5035 => 2499,  5029 => 2496,  5023 => 2493,  5003 => 2478,  4997 => 2475,  4992 => 2473,  4973 => 2459,  4967 => 2456,  4950 => 2444,  4944 => 2441,  4925 => 2427,  4919 => 2424,  4902 => 2412,  4896 => 2409,  4877 => 2395,  4871 => 2392,  4857 => 2385,  4849 => 2384,  4843 => 2381,  4826 => 2369,  4820 => 2366,  4814 => 2363,  4807 => 2358,  4800 => 2354,  4796 => 2352,  4794 => 2351,  4788 => 2350,  4781 => 2348,  4776 => 2345,  4769 => 2341,  4765 => 2339,  4763 => 2338,  4757 => 2337,  4750 => 2335,  4744 => 2332,  4733 => 2326,  4723 => 2321,  4717 => 2318,  4709 => 2315,  4699 => 2310,  4693 => 2307,  4685 => 2304,  4675 => 2299,  4669 => 2296,  4661 => 2293,  4651 => 2288,  4645 => 2285,  4637 => 2282,  4627 => 2277,  4621 => 2274,  4613 => 2271,  4603 => 2266,  4597 => 2263,  4589 => 2260,  4579 => 2255,  4573 => 2252,  4565 => 2249,  4555 => 2244,  4549 => 2241,  4541 => 2238,  4531 => 2233,  4525 => 2230,  4517 => 2227,  4507 => 2222,  4501 => 2219,  4493 => 2216,  4483 => 2211,  4477 => 2208,  4469 => 2205,  4459 => 2200,  4453 => 2197,  4445 => 2194,  4435 => 2189,  4429 => 2186,  4421 => 2183,  4411 => 2178,  4405 => 2175,  4397 => 2172,  4387 => 2167,  4381 => 2164,  4373 => 2161,  4363 => 2156,  4357 => 2153,  4349 => 2150,  4340 => 2144,  4336 => 2143,  4332 => 2142,  4323 => 2136,  4305 => 2123,  4299 => 2120,  4285 => 2113,  4277 => 2112,  4269 => 2111,  4263 => 2108,  4246 => 2096,  4240 => 2093,  4221 => 2079,  4215 => 2076,  4198 => 2064,  4192 => 2061,  4181 => 2055,  4176 => 2053,  4159 => 2041,  4153 => 2038,  4134 => 2024,  4128 => 2021,  4111 => 2009,  4105 => 2006,  4099 => 2003,  4082 => 1989,  4076 => 1985,  4070 => 1984,  4068 => 1983,  4060 => 1980,  4055 => 1977,  4039 => 1974,  4030 => 1972,  4026 => 1970,  4022 => 1969,  4018 => 1967,  4002 => 1964,  3993 => 1962,  3989 => 1960,  3985 => 1959,  3977 => 1956,  3970 => 1953,  3965 => 1952,  3963 => 1951,  3956 => 1947,  3952 => 1946,  3940 => 1939,  3922 => 1926,  3916 => 1923,  3899 => 1911,  3893 => 1908,  3874 => 1894,  3868 => 1891,  3851 => 1879,  3845 => 1876,  3826 => 1862,  3820 => 1859,  3803 => 1847,  3797 => 1844,  3778 => 1830,  3772 => 1827,  3753 => 1813,  3747 => 1810,  3730 => 1798,  3724 => 1795,  3705 => 1781,  3699 => 1778,  3682 => 1766,  3676 => 1763,  3657 => 1749,  3651 => 1746,  3634 => 1734,  3628 => 1731,  3609 => 1717,  3603 => 1714,  3586 => 1702,  3580 => 1699,  3561 => 1685,  3555 => 1682,  3538 => 1670,  3532 => 1667,  3527 => 1664,  3510 => 1659,  3503 => 1657,  3497 => 1655,  3493 => 1654,  3489 => 1652,  3472 => 1650,  3468 => 1649,  3463 => 1647,  3454 => 1640,  3445 => 1637,  3438 => 1636,  3434 => 1635,  3429 => 1633,  3422 => 1631,  3404 => 1618,  3398 => 1615,  3381 => 1603,  3375 => 1600,  3356 => 1586,  3350 => 1583,  3333 => 1571,  3327 => 1568,  3308 => 1554,  3302 => 1551,  3285 => 1539,  3279 => 1536,  3266 => 1526,  3260 => 1522,  3254 => 1521,  3252 => 1520,  3244 => 1517,  3239 => 1514,  3223 => 1511,  3214 => 1509,  3210 => 1507,  3206 => 1506,  3202 => 1504,  3186 => 1501,  3177 => 1499,  3173 => 1497,  3169 => 1496,  3161 => 1493,  3154 => 1490,  3149 => 1489,  3147 => 1488,  3140 => 1484,  3136 => 1483,  3124 => 1476,  3119 => 1474,  3104 => 1462,  3098 => 1458,  3092 => 1457,  3090 => 1456,  3082 => 1453,  3077 => 1450,  3061 => 1447,  3052 => 1445,  3048 => 1443,  3044 => 1442,  3040 => 1440,  3024 => 1437,  3015 => 1435,  3011 => 1433,  3007 => 1432,  2999 => 1429,  2992 => 1426,  2987 => 1425,  2985 => 1424,  2978 => 1420,  2974 => 1419,  2962 => 1412,  2957 => 1410,  2948 => 1404,  2944 => 1402,  2938 => 1400,  2935 => 1399,  2929 => 1398,  2927 => 1397,  2918 => 1390,  2910 => 1387,  2907 => 1386,  2902 => 1384,  2895 => 1383,  2890 => 1381,  2883 => 1380,  2880 => 1379,  2875 => 1377,  2868 => 1376,  2866 => 1375,  2862 => 1373,  2858 => 1372,  2852 => 1369,  2846 => 1365,  2838 => 1362,  2833 => 1360,  2826 => 1359,  2821 => 1357,  2814 => 1356,  2812 => 1355,  2808 => 1353,  2804 => 1352,  2798 => 1349,  2793 => 1347,  2789 => 1345,  2770 => 1340,  2763 => 1338,  2748 => 1334,  2741 => 1332,  2733 => 1330,  2729 => 1329,  2725 => 1327,  2706 => 1325,  2702 => 1324,  2698 => 1323,  2694 => 1322,  2690 => 1321,  2685 => 1319,  2679 => 1318,  2670 => 1314,  2664 => 1313,  2658 => 1312,  2652 => 1311,  2646 => 1310,  2640 => 1309,  2635 => 1307,  2630 => 1305,  2622 => 1302,  2616 => 1301,  2610 => 1300,  2601 => 1294,  2597 => 1293,  2591 => 1291,  2586 => 1290,  2583 => 1289,  2581 => 1288,  2576 => 1286,  2557 => 1272,  2551 => 1269,  2534 => 1257,  2528 => 1254,  2516 => 1247,  2510 => 1246,  2504 => 1245,  2498 => 1242,  2488 => 1237,  2482 => 1236,  2476 => 1233,  2465 => 1227,  2458 => 1225,  2441 => 1213,  2435 => 1210,  2430 => 1207,  2413 => 1202,  2406 => 1200,  2400 => 1198,  2396 => 1197,  2392 => 1195,  2375 => 1193,  2371 => 1192,  2353 => 1179,  2347 => 1176,  2341 => 1173,  2333 => 1168,  2329 => 1167,  2325 => 1166,  2321 => 1165,  2307 => 1154,  2301 => 1150,  2295 => 1149,  2293 => 1148,  2286 => 1146,  2277 => 1144,  2266 => 1140,  2257 => 1138,  2247 => 1137,  2239 => 1133,  2234 => 1132,  2232 => 1131,  2225 => 1127,  2217 => 1122,  2213 => 1120,  2207 => 1118,  2204 => 1117,  2198 => 1116,  2196 => 1115,  2183 => 1109,  2176 => 1107,  2165 => 1103,  2158 => 1101,  2154 => 1100,  2147 => 1098,  2136 => 1094,  2129 => 1092,  2118 => 1088,  2111 => 1086,  2100 => 1082,  2093 => 1080,  2088 => 1078,  2083 => 1075,  2064 => 1070,  2055 => 1068,  2040 => 1064,  2031 => 1062,  2016 => 1058,  2007 => 1056,  1999 => 1054,  1995 => 1053,  1991 => 1051,  1972 => 1049,  1968 => 1048,  1964 => 1047,  1960 => 1046,  1951 => 1040,  1947 => 1039,  1941 => 1037,  1936 => 1036,  1933 => 1035,  1931 => 1034,  1925 => 1031,  1904 => 1015,  1898 => 1012,  1881 => 1000,  1875 => 997,  1856 => 983,  1850 => 980,  1833 => 968,  1827 => 965,  1808 => 951,  1802 => 948,  1785 => 936,  1779 => 933,  1773 => 930,  1762 => 922,  1757 => 920,  1750 => 916,  1745 => 914,  1736 => 908,  1731 => 906,  1724 => 902,  1719 => 900,  1710 => 894,  1705 => 892,  1698 => 888,  1693 => 886,  1685 => 881,  1678 => 879,  1672 => 876,  1665 => 872,  1660 => 870,  1654 => 866,  1643 => 863,  1638 => 862,  1634 => 861,  1630 => 859,  1613 => 857,  1609 => 856,  1603 => 853,  1596 => 849,  1591 => 847,  1585 => 843,  1574 => 840,  1569 => 839,  1565 => 838,  1561 => 836,  1544 => 834,  1540 => 833,  1534 => 830,  1529 => 828,  1521 => 823,  1517 => 822,  1513 => 821,  1509 => 820,  1496 => 810,  1492 => 808,  1486 => 807,  1484 => 806,  1471 => 796,  1461 => 795,  1452 => 791,  1448 => 790,  1444 => 789,  1440 => 788,  1435 => 787,  1430 => 786,  1428 => 785,  1412 => 774,  1390 => 757,  1368 => 740,  1346 => 723,  1324 => 706,  1302 => 689,  1280 => 672,  1269 => 664,  1248 => 648,  1242 => 645,  1225 => 633,  1219 => 630,  1209 => 623,  1205 => 622,  1184 => 606,  1178 => 603,  1161 => 591,  1155 => 588,  1136 => 574,  1130 => 571,  1113 => 559,  1107 => 556,  1101 => 553,  1086 => 543,  1081 => 541,  1071 => 536,  1066 => 534,  1057 => 530,  1052 => 528,  1045 => 524,  1033 => 517,  1028 => 515,  1021 => 511,  1010 => 505,  1005 => 503,  995 => 498,  990 => 496,  981 => 492,  976 => 490,  969 => 486,  957 => 479,  952 => 477,  943 => 473,  938 => 471,  927 => 465,  922 => 463,  913 => 459,  908 => 457,  901 => 453,  889 => 446,  884 => 444,  875 => 440,  870 => 438,  859 => 432,  854 => 430,  847 => 426,  835 => 419,  830 => 417,  821 => 413,  816 => 411,  805 => 405,  800 => 403,  791 => 399,  786 => 397,  775 => 391,  770 => 389,  761 => 385,  756 => 383,  749 => 379,  733 => 372,  728 => 370,  717 => 364,  712 => 362,  703 => 358,  698 => 356,  691 => 352,  679 => 343,  672 => 341,  666 => 338,  649 => 326,  643 => 323,  624 => 309,  618 => 306,  601 => 294,  595 => 291,  589 => 288,  570 => 274,  564 => 271,  547 => 259,  541 => 256,  535 => 253,  517 => 240,  511 => 237,  492 => 223,  486 => 220,  469 => 208,  463 => 205,  457 => 202,  436 => 186,  430 => 183,  413 => 171,  407 => 168,  388 => 154,  382 => 151,  363 => 137,  357 => 134,  340 => 122,  334 => 119,  328 => 115,  321 => 111,  317 => 109,  315 => 108,  311 => 107,  306 => 105,  289 => 93,  283 => 90,  278 => 88,  274 => 87,  266 => 82,  262 => 81,  258 => 80,  248 => 73,  244 => 72,  240 => 71,  236 => 70,  232 => 69,  228 => 68,  224 => 67,  220 => 66,  216 => 65,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  186 => 53,  180 => 50,  176 => 49,  172 => 47,  166 => 44,  163 => 43,  160 => 42,  154 => 39,  151 => 38,  149 => 37,  143 => 33,  132 => 31,  128 => 30,  123 => 28,  115 => 26,  112 => 25,  107 => 22,  96 => 20,  92 => 19,  87 => 17,  84 => 16,  82 => 15,  76 => 14,  72 => 13,  65 => 12,  59 => 10,  56 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/theme/oct_remarket.twig", "");
    }
}
