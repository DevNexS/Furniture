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

/* octemplates/stickers/oct_stickers_settings.twig */
class __TwigTemplate_fd689f14035670ebd2b9fd58db18dd93f4fff04f5cb63911fc8634d78c11fe34 extends \Twig\Template
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
\t\t\t\t<button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<script>
\t\t\tusNotify('warning', '";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "');
\t\t</script>
\t\t";
        }
        // line 23
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 24
            echo "\t    <script>
\t\t\tusNotify('success', '";
            // line 25
            echo ($context["success"] ?? null);
            echo "');
\t\t</script>
\t    ";
        }
        // line 28
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stickers\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_stickers"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_status\" ";
        // line 44
        if (($context["oct_stickers_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-status\"></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-stickers\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-new\" data-toggle=\"tab\">";
        // line 58
        echo ($context["entry_sticker_new"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-bestseller\" data-toggle=\"tab\">";
        // line 59
        echo ($context["entry_sticker_bestseller"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-popular\" data-toggle=\"tab\">";
        // line 60
        echo ($context["entry_sticker_popular"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-sold\" data-toggle=\"tab\">";
        // line 61
        echo ($context["entry_sticker_sold"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-ends\" data-toggle=\"tab\">";
        // line 62
        echo ($context["entry_sticker_ends"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 63
        echo ($context["entry_sticker_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-featured\" data-toggle=\"tab\">";
        // line 64
        echo ($context["entry_sticker_featured"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 65
        echo ($context["entry_customer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-new\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 70
        echo ($context["entry_sticker_new"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-new_status\">";
        // line 73
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][new][status]\" ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 76), "new", [], "any", false, false, false, 76), "status", [], "any", false, false, false, 76)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-new_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-new_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-new_auto\">";
        // line 88
        echo ($context["entry_auto"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][new][auto]\" ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 91), "new", [], "any", false, false, false, 91), "auto", [], "any", false, false, false, 91)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-new_auto\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-new_auto\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-count_days\">";
        // line 105
        echo ($context["entry_count_days"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-new_sort\" name=\"oct_stickers_data[stickers][new][count]\" value=\"";
        // line 107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 107), "new", [], "any", false, false, false, 107), "count", [], "any", false, false, false, 107);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_count_days"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-new_sort\">";
        // line 111
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-new_sort\" name=\"oct_stickers_data[stickers][new][sort]\" value=\"";
        // line 113
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 113), "new", [], "any", false, false, false, 113), "sort", [], "any", false, false, false, 113);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 119
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][new][text_color]\" value=\"";
        // line 121
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 121), "new", [], "any", false, false, false, 121), "text_color", [], "any", false, false, false, 121);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 125
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][new][fon_color]\" value=\"";
        // line 127
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 127), "new", [], "any", false, false, false, 127), "fon_color", [], "any", false, false, false, 127);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"new-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#new-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 135);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 135);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 135);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 135);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 139
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t                        \t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 143
            echo "\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"new-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][new][title][";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 144), "new", [], "any", false, false, false, 144), "title", [], "any", false, false, false, 144)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-bestseller\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 154
        echo ($context["entry_sticker_bestseller"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-bestseller_status\">";
        // line 157
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][bestseller][status]\" ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 160), "bestseller", [], "any", false, false, false, 160), "status", [], "any", false, false, false, 160)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-bestseller_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-bestseller_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-bestseller_auto\">";
        // line 172
        echo ($context["entry_auto"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][bestseller][auto]\" ";
        // line 175
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 175), "bestseller", [], "any", false, false, false, 175), "auto", [], "any", false, false, false, 175)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-bestseller_auto\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-bestseller_auto\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-count_order\">";
        // line 189
        echo ($context["entry_count_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-bestseller_sort\" name=\"oct_stickers_data[stickers][bestseller][count]\" value=\"";
        // line 191
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 191), "bestseller", [], "any", false, false, false, 191), "count", [], "any", false, false, false, 191);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_count_order"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-bestseller_sort\">";
        // line 195
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-bestseller_sort\" name=\"oct_stickers_data[stickers][bestseller][sort]\" value=\"";
        // line 197
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 197), "bestseller", [], "any", false, false, false, 197), "sort", [], "any", false, false, false, 197);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 203
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][bestseller][text_color]\" value=\"";
        // line 205
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 205), "bestseller", [], "any", false, false, false, 205), "text_color", [], "any", false, false, false, 205);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 209
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][bestseller][fon_color]\" value=\"";
        // line 211
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 211), "bestseller", [], "any", false, false, false, 211), "fon_color", [], "any", false, false, false, 211);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"bestseller-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#bestseller-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 219);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 219);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 219);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 219);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 219);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 223
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t                        \t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 227
            echo "\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"bestseller-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][bestseller][title][";
            // line 228
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 228);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 228), "bestseller", [], "any", false, false, false, 228), "title", [], "any", false, false, false, 228)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 228)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-popular\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 238
        echo ($context["entry_sticker_popular"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-popular_status\">";
        // line 241
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][popular][status]\" ";
        // line 244
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 244), "popular", [], "any", false, false, false, 244), "status", [], "any", false, false, false, 244)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popular_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popular_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-popular_auto\">";
        // line 256
        echo ($context["entry_auto"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][popular][auto]\" ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 259), "popular", [], "any", false, false, false, 259), "auto", [], "any", false, false, false, 259)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-popular_auto\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-popular_auto\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-popular_count_views\">";
        // line 273
        echo ($context["entry_count_views"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-popular_count_views\" name=\"oct_stickers_data[stickers][popular][count]\" value=\"";
        // line 275
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 275), "popular", [], "any", false, false, false, 275), "count", [], "any", false, false, false, 275);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_count_views"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-popular_sort\">";
        // line 279
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-popular_sort\" name=\"oct_stickers_data[stickers][popular][sort]\" value=\"";
        // line 281
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 281), "popular", [], "any", false, false, false, 281), "sort", [], "any", false, false, false, 281);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 287
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][popular][text_color]\" value=\"";
        // line 289
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 289), "popular", [], "any", false, false, false, 289), "text_color", [], "any", false, false, false, 289);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 293
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][popular][fon_color]\" value=\"";
        // line 295
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 295), "popular", [], "any", false, false, false, 295), "fon_color", [], "any", false, false, false, 295);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"popular-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 303
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#popular-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 303);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 303);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 303);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 303);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 303);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 307
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t                        \t";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 311
            echo "\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"popular-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 311);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][popular][title][";
            // line 312
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 312);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 312), "popular", [], "any", false, false, false, 312), "title", [], "any", false, false, false, 312)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 312)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-sold\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 322
        echo ($context["entry_sticker_sold"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-sold_status\">";
        // line 325
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][sold][status]\" ";
        // line 328
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 328), "sold", [], "any", false, false, false, 328), "status", [], "any", false, false, false, 328)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-sold_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-sold_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-sold_auto\">";
        // line 340
        echo ($context["entry_auto"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][sold][auto]\" ";
        // line 343
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 343), "sold", [], "any", false, false, false, 343), "auto", [], "any", false, false, false, 343)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-sold_auto\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-sold_auto\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-count_sold\">";
        // line 357
        echo ($context["entry_count_sold"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-count_sold\" name=\"oct_stickers_data[stickers][sold][count]\" value=\"";
        // line 359
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 359), "sold", [], "any", false, false, false, 359), "count", [], "any", false, false, false, 359);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_count_sold"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-sold_sort\">";
        // line 363
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-sold_sort\" name=\"oct_stickers_data[stickers][sold][sort]\" value=\"";
        // line 365
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 365), "sold", [], "any", false, false, false, 365), "sort", [], "any", false, false, false, 365);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 371
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][sold][text_color]\" value=\"";
        // line 373
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 373), "sold", [], "any", false, false, false, 373), "text_color", [], "any", false, false, false, 373);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 377
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][sold][fon_color]\" value=\"";
        // line 379
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 379), "sold", [], "any", false, false, false, 379), "fon_color", [], "any", false, false, false, 379);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"sold-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 387
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#sold-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 387);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 387);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 387);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 387);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 387);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 391
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t                        \t";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 395
            echo "\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"sold-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 395);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][sold][title][";
            // line 396
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 396);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 396), "sold", [], "any", false, false, false, 396), "title", [], "any", false, false, false, 396)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 396)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-ends\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 406
        echo ($context["entry_sticker_ends"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-ends_status\">";
        // line 409
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][ends][status]\" ";
        // line 412
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 412), "ends", [], "any", false, false, false, 412), "status", [], "any", false, false, false, 412)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-ends_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-ends_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-ends_auto\">";
        // line 424
        echo ($context["entry_auto"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][ends][auto]\" ";
        // line 427
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 427), "ends", [], "any", false, false, false, 427), "auto", [], "any", false, false, false, 427)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-ends_auto\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-ends_auto\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-count_ends\">";
        // line 441
        echo ($context["entry_count_ends"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-sold_sort\" name=\"oct_stickers_data[stickers][ends][count]\" value=\"";
        // line 443
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 443), "ends", [], "any", false, false, false, 443), "count", [], "any", false, false, false, 443);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_count_ends"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-ends_sort\">";
        // line 447
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-ends_sort\" name=\"oct_stickers_data[stickers][ends][sort]\" value=\"";
        // line 449
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 449), "ends", [], "any", false, false, false, 449), "sort", [], "any", false, false, false, 449);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 455
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][ends][text_color]\" value=\"";
        // line 457
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 457), "ends", [], "any", false, false, false, 457), "text_color", [], "any", false, false, false, 457);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 461
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][ends][fon_color]\" value=\"";
        // line 463
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 463), "ends", [], "any", false, false, false, 463), "fon_color", [], "any", false, false, false, 463);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"ends-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 471
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#ends-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 471);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 471);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 471);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 471);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 471);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 475
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t                        \t";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 479
            echo "\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"ends-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 479);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][ends][title][";
            // line 480
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 480);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 480), "ends", [], "any", false, false, false, 480), "title", [], "any", false, false, false, 480)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 480)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        echo "\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-special\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 490
        echo ($context["entry_sticker_special"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-special_status\">";
        // line 493
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][special][status]\" ";
        // line 496
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 496), "special", [], "any", false, false, false, 496), "status", [], "any", false, false, false, 496)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-special_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-special_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-special_auto\">";
        // line 508
        echo ($context["entry_auto"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][special][auto]\" ";
        // line 511
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 511), "special", [], "any", false, false, false, 511), "auto", [], "any", false, false, false, 511)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-special_auto\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-special_auto\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-special_sort\">";
        // line 524
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-special_sort\" name=\"oct_stickers_data[stickers][special][sort]\" value=\"";
        // line 526
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 526), "special", [], "any", false, false, false, 526), "sort", [], "any", false, false, false, 526);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 531
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][special][text_color]\" value=\"";
        // line 533
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 533), "special", [], "any", false, false, false, 533), "text_color", [], "any", false, false, false, 533);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 537
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][special][fon_color]\" value=\"";
        // line 539
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 539), "special", [], "any", false, false, false, 539), "fon_color", [], "any", false, false, false, 539);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-special_persent\">";
        // line 545
        echo ($context["entry_view_percent"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][special][persent]\" ";
        // line 548
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 548), "special", [], "any", false, false, false, 548), "persent", [], "any", false, false, false, 548)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-special_persent\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-special_persent\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-special_title\">";
        // line 560
        echo ($context["entry_view_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][special][view_title]\" ";
        // line 563
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 563), "special", [], "any", false, false, false, 563), "view_title", [], "any", false, false, false, 563)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-special_title\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-special_title\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"special-langs\"";
        // line 575
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, true, false, 575), "special", [], "any", false, true, false, 575), "view_title", [], "any", true, true, false, 575)) {
            echo " style=\"display:none;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"special-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 580
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#special-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 580);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 580);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 580);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 580);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 580);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 582
        echo "\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 584
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t                        \t";
        // line 587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 588
            echo "\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"special-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 588);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][special][title][";
            // line 589
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 589);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 589), "special", [], "any", false, false, false, 589), "title", [], "any", false, false, false, 589)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 589)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        echo "\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-featured\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 600
        echo ($context["entry_sticker_featured"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-featured_status\">";
        // line 602
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[stickers][featured][status]\" ";
        // line 605
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 605), "featured", [], "any", false, false, false, 605), "status", [], "any", false, false, false, 605)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"input-featured_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-featured_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-featured_sort\">";
        // line 617
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-featured_sort\" name=\"oct_stickers_data[stickers][featured][sort]\" value=\"";
        // line 619
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 619), "featured", [], "any", false, false, false, 619), "sort", [], "any", false, false, false, 619);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 624
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][featured][text_color]\" value=\"";
        // line 626
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 626), "featured", [], "any", false, false, false, 626), "text_color", [], "any", false, false, false, 626);
        echo "\" placeholder=\"";
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 630
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[stickers][featured][fon_color]\" value=\"";
        // line 632
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 632), "featured", [], "any", false, false, false, 632), "fon_color", [], "any", false, false, false, 632);
        echo "\" placeholder=\"";
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"featured-language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 640
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#featured-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 640);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 640);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 640);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 640);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 640);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
        // line 644
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t                        \t";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 648
            echo "\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"featured-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 648);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[stickers][featured][title][";
            // line 649
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "stickers", [], "any", false, false, false, 649), "featured", [], "any", false, false, false, 649), "title", [], "any", false, false, false, 649)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 649)] ?? null) : null);
            echo "\" />
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 652
        echo "\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-customer\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 659
        echo ($context["entry_customer"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"settings\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 662
        $context["sticker_li_row"] = 0;
        // line 663
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "customer", [], "any", false, false, false, 663));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_sticker"]) {
            // line 664
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"customer-li";
            echo ($context["sticker_li_row"] ?? null);
            echo "\"><a href=\"#customer-row";
            echo ($context["sticker_li_row"] ?? null);
            echo "\" data-toggle=\"tab\"><span class=\"delete-block-in\" onclick=\"removeSticker(";
            echo ($context["sticker_li_row"] ?? null);
            echo ");\"><i class=\"fa fa-minus-circle\"></i></span> ";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["customer_sticker"], "title", [], "any", false, false, false, 664)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 665
            $context["sticker_li_row"] = (($context["sticker_li_row"] ?? null) + 1);
            // line 666
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_sticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\" onclick=\"addSticker();updateActive(); return false;\" id=\"add_sticker\"><i class=\"fa fa-plus-circle\"></i> ";
        // line 669
        echo ($context["entry_add_new_sticker"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"customer-stickers-block\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 674
        $context["sticker_row"] = 0;
        // line 675
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "customer", [], "any", false, false, false, 675))) {
            // line 676
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_stickers_data"] ?? null), "customer", [], "any", false, false, false, 676));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_sticker"]) {
                // line 677
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"customer-row";
                echo ($context["sticker_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer_";
                // line 679
                echo ($context["sticker_row"] ?? null);
                echo "_status\">";
                echo ($context["entry_status"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[customer][";
                // line 682
                echo ($context["sticker_row"] ?? null);
                echo "][status]\" ";
                if (twig_get_attribute($this->env, $this->source, $context["customer_sticker"], "status", [], "any", false, false, false, 682)) {
                    echo "checked=\"checked\"";
                }
                echo " id=\"input-customer_";
                echo ($context["sticker_row"] ?? null);
                echo "_status\" tabindex=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-customer_";
                // line 683
                echo ($context["sticker_row"] ?? null);
                echo "_status\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" stule=\"display:none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer_";
                // line 694
                echo ($context["sticker_row"] ?? null);
                echo "_sort\">";
                echo ($context["entry_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"input-customer_";
                // line 696
                echo ($context["sticker_row"] ?? null);
                echo "_sort\" name=\"oct_stickers_data[customer][";
                echo ($context["sticker_row"] ?? null);
                echo "][sort]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_sticker"], "sort", [], "any", false, false, false, 696);
                echo "\" class=\"form-control\" placeholder=\"";
                echo ($context["entry_sort"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
                // line 701
                echo ($context["entry_text_color"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[customer][";
                // line 703
                echo ($context["sticker_row"] ?? null);
                echo "][text_color]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_sticker"], "text_color", [], "any", false, false, false, 703);
                echo "\" placeholder=\"";
                echo ($context["entry_text_color"] ?? null);
                echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
                // line 707
                echo ($context["entry_fon_color"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[customer][";
                // line 709
                echo ($context["sticker_row"] ?? null);
                echo "][fon_color]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_sticker"], "fon_color", [], "any", false, false, false, 709);
                echo "\" placeholder=\"";
                echo ($context["entry_fon_color"] ?? null);
                echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"customer-language_";
                // line 715
                echo ($context["sticker_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 716
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 717
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#customer-language_";
                    echo ($context["sticker_row"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 717);
                    echo "\" data-toggle=\"tab\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 717);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 717);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 717);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 717);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 719
                echo "\t\t\t\t\t\t\t\t\t\t\t                    </ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t                    <label class=\"col-sm-2 control-label\">";
                // line 721
                echo ($context["entry_title"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t                        \t";
                // line 724
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 725
                    echo "\t\t\t\t\t\t\t\t\t\t                            <div class=\"tab-pane\" id=\"customer-language_";
                    echo ($context["sticker_row"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 725);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"oct_stickers_data[customer][";
                    // line 726
                    echo ($context["sticker_row"] ?? null);
                    echo "][title][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 726);
                    echo "]\" rows=\"5\" class=\"form-control\" value=\"";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["customer_sticker"], "title", [], "any", false, false, false, 726)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 726)] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 729
                echo "\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 733
                $context["sticker_row"] = (($context["sticker_row"] ?? null) + 1);
                // line 734
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 735
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 736
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"no_sc\">";
            echo ($context["entry_no_stickers"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 738
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('#input-special_title').change(function() {
    let \$input = \$(this);

\tconsole.log(\$input);

    if (\$input.is(\":checked\")) {
        \$(\"#special-langs\").slideDown('slow');
    } else {
        \$(\"#special-langs\").slideUp('slow');
    }
});

function initSpectrum() {
\t\$(\".spectrum\").spectrum({
\t\tpreferredFormat: \"rgb\",
\t\tshowInitial: true,
\t\tshowInput: true,
\t\tshowAlpha: true,
\t\tshowPalette: true,
\t\tpalette: [[\"red\", \"rgba(0, 255, 0, .5)\", \"rgb(0, 0, 255)\"]]
\t});
}

initSpectrum();

\$('#new-language a:first').tab('show');
\$('#bestseller-language a:first').tab('show');
\$('#popular-language a:first').tab('show');
\$('#sold-language a:first').tab('show');
\$('#ends-language a:first').tab('show');
\$('#special-language a:first').tab('show');
\$('#featured-language a:first').tab('show');
\$('#settings a:first').tab('show');

\$('#customer-stickers-block .tab-pane').each(function(){
\t\$(this).find('a:first').tab('show');
});

let sticker_row = ";
        // line 789
        echo ($context["sticker_row"] ?? null);
        echo ";

function addSticker() {
\tconst html = `
\t<div class=\"tab-pane\" id=\"customer-row\${ sticker_row }\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer_\${ sticker_row }_status\">";
        // line 795
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"toggle-group\">
\t\t\t\t\t<input type=\"checkbox\" name=\"oct_stickers_data[customer][\${ sticker_row }][status]\" id=\"input-customer_\${ sticker_row }_status\" tabindex=\"1\">
\t\t\t\t\t<label for=\"input-customer_\${ sticker_row }_status\"></label>
\t\t\t\t\t<div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t<div class=\"onoffswitch-label\">
\t\t\t\t\t\t\t<div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t\t<div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer_\${ sticker_row }_sort\">";
        // line 810
        echo ($context["entry_sort"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" id=\"input-customer_\${ sticker_row }_sort\" name=\"oct_stickers_data[customer][\${ sticker_row }][sort]\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 812
        echo ($context["entry_sort"] ?? null);
        echo "\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-text_color\">";
        // line 817
        echo ($context["entry_text_color"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[customer][\${ sticker_row }][text_color]\" value=\"\" placeholder=\"";
        // line 819
        echo ($context["entry_text_color"] ?? null);
        echo "\" id=\"input-text_color\" class=\"form-control spectrum\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-fon_color\">";
        // line 823
        echo ($context["entry_fon_color"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t<input type=\"text\" name=\"oct_stickers_data[customer][\${ sticker_row }][fon_color]\" value=\"\" placeholder=\"";
        // line 825
        echo ($context["entry_fon_color"] ?? null);
        echo "\" id=\"input-fon_color\" class=\"form-control spectrum\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ul class=\"nav nav-tabs\" id=\"customer-language_\${ sticker_row }\">
\t\t\t\t\t";
        // line 832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 833
            echo "\t\t\t\t\t\t<li><a href=\"#customer-language_\${ sticker_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 833);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 833);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 833);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 833);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 833);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 835
        echo "                </ul>
\t\t\t</div>
            <label class=\"col-sm-2 control-label\">";
        // line 837
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <div class=\"tab-content\">
                \t\t";
        // line 840
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 841
            echo "                    <div class=\"tab-pane\" id=\"customer-language_\${ sticker_row }";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 841);
            echo "\">
\t\t\t\t\t\t<input name=\"oct_stickers_data[customer][\${ sticker_row }][title][";
            // line 842
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 842);
            echo "]\" rows=\"5\" class=\"form-control\" value=\"\" />
                    </div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 845
        echo "                </div>
            </div>
\t\t</div>
\t</div>
\t`;

\tconst html2 = `<li class='customer-li\${ sticker_row }'><a href='#customer-row\${ sticker_row }' data-toggle='tab'><span class='delete-block-in' onclick='removeSticker(\${ sticker_row });'><i class='fa fa-minus-circle'></i></span> ";
        // line 851
        echo ($context["entry_new_sticker"] ?? null);
        echo "</a></li>`;

\t\$('#customer-stickers-block').append(html);
\t\$('#settings').append(html2);

\t\$('#settings li').removeClass('active');

\t\$(\"#settings .customer-li\" + sticker_row + \" a\").tab('show');

\tsticker_row++;

\tinitSpectrum();

\t\$('.no_sc').hide();
}

function removeSticker(sticker_row) {
\t\$(\"#customer-row\" + sticker_row).remove();
\t\$(\".customer-li\" + sticker_row).remove();

\t\$('#settings a:first').tab('show');
}

function updateActive() {
\t\$('#tab-customer .nav.nav-tabs').each(function () {
\t\t\$(this).children().children().first().tab('show');
\t});
}
</script>
";
        // line 880
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "octemplates/stickers/oct_stickers_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1855 => 880,  1823 => 851,  1815 => 845,  1806 => 842,  1801 => 841,  1797 => 840,  1791 => 837,  1787 => 835,  1770 => 833,  1766 => 832,  1756 => 825,  1751 => 823,  1744 => 819,  1739 => 817,  1731 => 812,  1726 => 810,  1708 => 795,  1699 => 789,  1646 => 738,  1640 => 736,  1637 => 735,  1631 => 734,  1629 => 733,  1623 => 729,  1610 => 726,  1604 => 725,  1600 => 724,  1594 => 721,  1590 => 719,  1572 => 717,  1568 => 716,  1564 => 715,  1551 => 709,  1546 => 707,  1535 => 703,  1530 => 701,  1516 => 696,  1509 => 694,  1495 => 683,  1485 => 682,  1477 => 679,  1471 => 677,  1466 => 676,  1463 => 675,  1461 => 674,  1453 => 669,  1449 => 667,  1443 => 666,  1441 => 665,  1430 => 664,  1425 => 663,  1423 => 662,  1417 => 659,  1408 => 652,  1397 => 649,  1392 => 648,  1388 => 647,  1382 => 644,  1378 => 642,  1361 => 640,  1357 => 639,  1345 => 632,  1340 => 630,  1331 => 626,  1326 => 624,  1316 => 619,  1311 => 617,  1294 => 605,  1288 => 602,  1283 => 600,  1273 => 592,  1262 => 589,  1257 => 588,  1253 => 587,  1247 => 584,  1243 => 582,  1226 => 580,  1222 => 579,  1213 => 575,  1196 => 563,  1190 => 560,  1173 => 548,  1167 => 545,  1156 => 539,  1151 => 537,  1142 => 533,  1137 => 531,  1127 => 526,  1122 => 524,  1104 => 511,  1098 => 508,  1081 => 496,  1075 => 493,  1069 => 490,  1060 => 483,  1049 => 480,  1044 => 479,  1040 => 478,  1034 => 475,  1030 => 473,  1013 => 471,  1009 => 470,  997 => 463,  992 => 461,  983 => 457,  978 => 455,  967 => 449,  962 => 447,  953 => 443,  948 => 441,  929 => 427,  923 => 424,  906 => 412,  900 => 409,  894 => 406,  885 => 399,  874 => 396,  869 => 395,  865 => 394,  859 => 391,  855 => 389,  838 => 387,  834 => 386,  822 => 379,  817 => 377,  808 => 373,  803 => 371,  792 => 365,  787 => 363,  778 => 359,  773 => 357,  754 => 343,  748 => 340,  731 => 328,  725 => 325,  719 => 322,  710 => 315,  699 => 312,  694 => 311,  690 => 310,  684 => 307,  680 => 305,  663 => 303,  659 => 302,  647 => 295,  642 => 293,  633 => 289,  628 => 287,  617 => 281,  612 => 279,  603 => 275,  598 => 273,  579 => 259,  573 => 256,  556 => 244,  550 => 241,  544 => 238,  535 => 231,  524 => 228,  519 => 227,  515 => 226,  509 => 223,  505 => 221,  488 => 219,  484 => 218,  472 => 211,  467 => 209,  458 => 205,  453 => 203,  442 => 197,  437 => 195,  428 => 191,  423 => 189,  404 => 175,  398 => 172,  381 => 160,  375 => 157,  369 => 154,  360 => 147,  349 => 144,  344 => 143,  340 => 142,  334 => 139,  330 => 137,  313 => 135,  309 => 134,  297 => 127,  292 => 125,  283 => 121,  278 => 119,  267 => 113,  262 => 111,  253 => 107,  248 => 105,  229 => 91,  223 => 88,  206 => 76,  200 => 73,  194 => 70,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  139 => 44,  133 => 41,  125 => 36,  121 => 35,  116 => 33,  110 => 30,  106 => 28,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/stickers/oct_stickers_settings.twig", "");
    }
}
