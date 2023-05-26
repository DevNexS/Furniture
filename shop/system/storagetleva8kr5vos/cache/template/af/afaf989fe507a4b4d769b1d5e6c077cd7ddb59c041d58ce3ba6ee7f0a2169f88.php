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

/* octemplates/module/oct_404_page.twig */
class __TwigTemplate_e7aa4193cac7c84c439c975a6f46517c3c9dbe247315606bf28ae3f63487a492 extends \Twig\Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t<script>
\t\tusNotify('warning', '";
            // line 19
            echo ($context["error_warning"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 22
        echo "\t";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <script>
\t\tusNotify('success', '";
            // line 24
            echo ($context["success"] ?? null);
            echo "');
\t</script>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
            <ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-layout\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_layout"] ?? null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                      \t<div class=\"toggle-group\">
\t\t\t\t\t\t    <input type=\"checkbox\" name=\"oct_404_page_status\" ";
        // line 44
        if (($context["oct_404_page_status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " id=\"oct_404_page_status\" tabindex=\"1\">
\t\t\t\t\t\t    <label for=\"oct_404_page_status\"></label>
\t\t\t\t\t\t    <div class=\"onoffswitch pull-left\" aria-hidden=\"true\">
\t\t\t\t\t\t        <div class=\"onoffswitch-label\">
\t\t\t\t\t\t            <div class=\"onoffswitch-inner\"></div>
\t\t\t\t\t\t            <div class=\"onoffswitch-switch\"></div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
                      </div>
                    </div>
                    <div id=\"all_settings\" ";
        // line 55
        if (( !array_key_exists("oct_404_page_status", $context) || (array_key_exists("oct_404_page_status", $context) &&  !($context["oct_404_page_status"] ?? null)))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t                    <ul class=\"nav nav-tabs\" id=\"language\">
\t                      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t                      <li><a href=\"#language";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 58);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 58);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 58);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 58);
            echo "</a></li>
\t                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo " 
\t                    </ul>
\t                    <div class=\"tab-content\">
\t                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t                            <div class=\"tab-pane\" id=\"language";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "\">
\t                                <div class=\"form-group\">
\t                                  <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
\t                                  <div class=\"col-sm-10\">
\t                                    <input type=\"text\" name=\"oct_404_page_data[module_text][";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "][title]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_404_page_data"] ?? null), "module_text", [], "any", false, true, false, 67), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67), [], "array", true, true, false, 67)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["oct_404_page_data"] ?? null), "module_text", [], "any", false, false, false, 67)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null), "title", [], "any", false, false, false, 67)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\" class=\"form-control\" />
\t                                  </div>
\t                                </div>
\t                                <div class=\"form-group\">
\t                                  <label class=\"col-sm-2 control-label\" for=\"input-text";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71);
            echo "\">";
            echo ($context["entry_text"] ?? null);
            echo "</label>
\t                                  <div class=\"col-sm-10\">
\t                                      <textarea name=\"oct_404_page_data[module_text][";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "][text]\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" id=\"input-text";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_404_page_data"] ?? null), "module_text", [], "any", false, true, false, 73), twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73), [], "array", true, true, false, 73)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["oct_404_page_data"] ?? null), "module_text", [], "any", false, false, false, 73)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null), "text", [], "any", false, false, false, 73)) : (""));
            echo "</textarea>
\t                                  </div>
\t                                </div>
\t                            </div>
\t                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t                    </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-image\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 83
        echo ($context["entry_image"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                          <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 85
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"oct_404_page_data[image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["oct_404_page_data"] ?? null), "image", [], "any", false, false, false, 85);
        echo "\" id=\"input-image\" />
                      </div>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-layout\">
                    <fieldset style=\"display:none;\">
                    \t<input type=\"hidden\" value=\"";
        // line 91
        echo ($context["layout_id"] ?? null);
        echo "\" name=\"layout_id\" />
\t\t\t            <legend>";
        // line 92
        echo ($context["text_route"] ?? null);
        echo "</legend>
\t\t\t            <div class=\"form-group required\">
\t\t\t              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 94
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t              <div class=\"col-sm-10\">
\t\t\t                <input type=\"text\" name=\"name\" value=\"";
        // line 96
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t              </div>
\t\t\t            </div>
\t\t\t            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
\t\t\t              <thead>
\t\t\t                <tr>
\t\t\t                  <td class=\"text-left\">";
        // line 102
        echo ($context["entry_store"] ?? null);
        echo "</td>
\t\t\t                  <td class=\"text-left\">";
        // line 103
        echo ($context["entry_route"] ?? null);
        echo "</td>
\t\t\t                  <td></td>
\t\t\t                </tr>
\t\t\t              </thead>
\t\t\t              <tbody>
\t\t\t                ";
        // line 108
        $context["route_row"] = 0;
        // line 109
        echo "\t\t\t                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 110
            echo "\t\t\t                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
\t\t\t                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 111
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
\t\t\t                      <option value=\"0\">";
            // line 112
            echo ($context["text_default"] ?? null);
            echo "</option>
\t\t\t                      ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 114
                echo "\t\t\t                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 114) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 114))) {
                    // line 115
                    echo "\t\t\t                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 115);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 115);
                    echo "</option>
\t\t\t                      ";
                } else {
                    // line 117
                    echo "\t\t\t                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 117);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 117);
                    echo "</option>
\t\t\t                      ";
                }
                // line 119
                echo "\t\t\t                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t                    </select></td>
\t\t\t                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 121
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 121);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
\t\t\t                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 122
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t                </tr>
\t\t\t                ";
            // line 124
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 125
            echo "\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t              </tbody>
\t\t\t              <tfoot>
\t\t\t                <tr>
\t\t\t                  <td colspan=\"2\"></td>
\t\t\t                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 130
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t                </tr>
\t\t\t              </tfoot>
\t\t\t            </table>
\t\t\t          </fieldset>
\t\t\t          <fieldset>
\t\t\t            <legend>";
        // line 136
        echo ($context["text_module"] ?? null);
        echo "</legend>
\t\t\t            ";
        // line 137
        $context["module_row"] = 0;
        // line 138
        echo "\t\t\t            <div class=\"row\">
\t\t\t              <div class=\"col-lg-12 col-md-12 col-sm-12\">
\t\t\t                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
\t\t\t                  <thead>
\t\t\t                    <tr>
\t\t\t                      <td class=\"text-center\">";
        // line 143
        echo ($context["text_content_top"] ?? null);
        echo "</td>
\t\t\t                    </tr>
\t\t\t                  </thead>
\t\t\t                  <tbody>
\t\t\t                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 148
            echo "\t\t\t                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 148) == "content_top")) {
                // line 149
                echo "\t\t\t                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t                      <td class=\"text-left\"><div class=\"input-group\">
\t\t\t                          <select name=\"layout_module[";
                // line 151
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t                            ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 153
                    echo "\t\t\t                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 153);
                    echo "\">
\t\t\t                            ";
                    // line 154
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 154)) {
                        // line 155
                        echo "\t\t\t                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 155) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 155))) {
                            // line 156
                            echo "\t\t\t                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 156);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 156);
                            echo "</option>
\t\t\t                            ";
                        } else {
                            // line 158
                            echo "\t\t\t                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 158);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 158);
                            echo "</option>
\t\t\t                            ";
                        }
                        // line 160
                        echo "\t\t\t                            ";
                    } else {
                        // line 161
                        echo "\t\t\t                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 161));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 162
                            echo "\t\t\t                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 162) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 162))) {
                                // line 163
                                echo "\t\t\t                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 163);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 163);
                                echo "</option>
\t\t\t                            ";
                            } else {
                                // line 165
                                echo "\t\t\t                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 165);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 165);
                                echo "</option>
\t\t\t                            ";
                            }
                            // line 167
                            echo "\t\t\t                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 168
                        echo "\t\t\t                            ";
                    }
                    // line 169
                    echo "\t\t\t                            </optgroup>
\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "\t\t\t                          </select>
\t\t\t                          <input type=\"hidden\" name=\"layout_module[";
                // line 172
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 172);
                echo "\" />
\t\t\t                          <input type=\"hidden\" name=\"layout_module[";
                // line 173
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 173);
                echo "\" />
\t\t\t                          <div class=\"input-group-btn\"> <a href=\"";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 174);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 175
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t                          </div>
\t\t\t                        </div></td>
\t\t\t                    </tr>
\t\t\t                    ";
                // line 179
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 180
                echo "\t\t\t                    ";
            }
            // line 181
            echo "\t\t\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "\t\t\t                  </tbody>
\t\t\t                  <tfoot>
\t\t\t                    <tr>
\t\t\t                      <td class=\"text-left\"><div class=\"input-group\">
\t\t\t                          <select class=\"form-control input-sm\">
\t\t\t                            <option value=\"\"></option>
\t\t\t                            ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 189
            echo "\t\t\t                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 189);
            echo "\">
\t\t\t                            ";
            // line 190
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 190)) {
                // line 191
                echo "\t\t\t                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 191);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 191);
                echo "</option>
\t\t\t                            ";
            } else {
                // line 193
                echo "\t\t\t                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 193));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 194
                    echo "\t\t\t                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 194);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 194);
                    echo "</option>
\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "\t\t\t                            ";
            }
            // line 197
            echo "\t\t\t                            </optgroup>
\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "\t\t\t                          </select>
\t\t\t                          <div class=\"input-group-btn\">
\t\t\t                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 201
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t                          </div>
\t\t\t                        </div></td>
\t\t\t                    </tr>
\t\t\t                  </tfoot>
\t\t\t                </table>
\t\t\t                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
\t\t\t                  <thead>
\t\t\t                    <tr>
\t\t\t                      <td class=\"text-center\">";
        // line 210
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
\t\t\t                    </tr>
\t\t\t                  </thead>
\t\t\t                  <tbody>
\t\t\t                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 215
            echo "\t\t\t                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 215) == "content_bottom")) {
                // line 216
                echo "\t\t\t                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t                      <td class=\"text-left\"><div class=\"input-group\">
\t\t\t                          <select name=\"layout_module[";
                // line 218
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t                            ";
                // line 219
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 220
                    echo "\t\t\t                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 220);
                    echo "\">
\t\t\t                            ";
                    // line 221
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 221)) {
                        // line 222
                        echo "\t\t\t                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 222) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 222))) {
                            // line 223
                            echo "\t\t\t                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 223);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 223);
                            echo "</option>
\t\t\t                            ";
                        } else {
                            // line 225
                            echo "\t\t\t                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 225);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 225);
                            echo "</option>
\t\t\t                            ";
                        }
                        // line 227
                        echo "\t\t\t                            ";
                    } else {
                        // line 228
                        echo "\t\t\t                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 228));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 229
                            echo "\t\t\t                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 229) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 229))) {
                                // line 230
                                echo "\t\t\t                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 230);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 230);
                                echo "</option>
\t\t\t                            ";
                            } else {
                                // line 232
                                echo "\t\t\t                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 232);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 232);
                                echo "</option>
\t\t\t                            ";
                            }
                            // line 234
                            echo "\t\t\t                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 235
                        echo "\t\t\t                            ";
                    }
                    // line 236
                    echo "\t\t\t                            </optgroup>
\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                echo "\t\t\t                          </select>
\t\t\t                          <input type=\"hidden\" name=\"layout_module[";
                // line 239
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 239);
                echo "\" />
\t\t\t                          <input type=\"hidden\" name=\"layout_module[";
                // line 240
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 240);
                echo "\" />
\t\t\t                          <div class=\"input-group-btn\"><a href=\"";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 241);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 242
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t                          </div>
\t\t\t                        </div></td>
\t\t\t                    </tr>
\t\t\t                    ";
                // line 246
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 247
                echo "\t\t\t                    ";
            }
            // line 248
            echo "\t\t\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "\t\t\t                  </tbody>
\t\t\t                  <tfoot>
\t\t\t                    <tr>
\t\t\t                      <td class=\"text-left\"><div class=\"input-group\">
\t\t\t                          <select class=\"form-control input-sm\">
\t\t\t                            <option value=\"\"></option>
\t\t\t                            ";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 256
            echo "\t\t\t                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 256);
            echo "\">
\t\t\t                            ";
            // line 257
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 257)) {
                // line 258
                echo "\t\t\t                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 258);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 258);
                echo "</option>
\t\t\t                            ";
            } else {
                // line 260
                echo "\t\t\t                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 260));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 261
                    echo "\t\t\t                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 261);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 261);
                    echo "</option>
\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "\t\t\t                            ";
            }
            // line 264
            echo "\t\t\t                            </optgroup>
\t\t\t                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t\t\t                          </select>
\t\t\t                          <div class=\"input-group-btn\">
\t\t\t                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 268
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t                          </div>
\t\t\t                        </div></td>
\t\t\t                    </tr>
\t\t\t                  </tfoot>
\t\t\t                </table>
\t\t\t              </div>
\t\t\t            </div>
\t\t\t          </fieldset>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
<script>
let route_row = ";
        // line 284
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\tconst html = `
\t<tr id=\"route-row\${ route_row }\">
\t\t<td class=\"text-left\">
\t\t\t<select name=\"layout_route[\${ route_row }][store_id]\" class=\"form-control\">
\t\t\t\t<option value=\"0\">";
        // line 291
        echo ($context["text_default"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 293
            echo "\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 293);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 293), "js");
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "\t\t\t</select>
\t\t</td>
\t\t<td class=\"text-left\"><input type=\"text\" name=\"layout_route[\${ route_row }][route]\" value=\"\" placeholder=\"";
        // line 297
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>
\t\t<td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row\${ route_row }').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 298
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t</tr>
\t`;
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

let module_row = ";
        // line 307
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\tconst position = type.replace('-', '_');
\t
\tconst html = `
\t<tr id=\"module-row\${ module_row }\">
\t\t<td class=\"text-left\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<select name=\"layout_module[\${ module_row }][code]\" class=\"form-control input-sm\">
\t\t\t\t\t";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 318
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 318), "js");
            echo "\">
\t\t\t\t\t\t";
            // line 319
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 319)) {
                // line 320
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 320);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 320), "js");
                echo "</option>
\t\t\t\t\t\t";
            } else {
                // line 322
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 322));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 323
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 323);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 323), "js");
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                echo "\t\t\t\t\t\t";
            }
            // line 326
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "\t\t\t\t</select>
\t\t\t\t<input type=\"hidden\" name=\"layout_module[\${ module_row }][position]\" value=\"\${ position }\" />
\t\t\t\t<input type=\"hidden\" name=\"layout_module[\${ module_row }][sort_order]\" value=\"\" />
\t\t\t\t<div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 331
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$('#module-row\${ module_row }').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div>
\t\t\t</div>
\t\t</td>
\t</tr>
\t`;
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 354
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 356
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
</script> 
<script>
\t\$('#oct_404_page_status').change(function() {
        var \$input = \$(this);

        if (\$input.is(\":checked\")) {
            \$(\"#all_settings\").slideDown('slow');
        } else {
            \$(\"#all_settings\").slideUp('slow');
        }
    });
    
\t\$('#language a:first').tab('show');
</script>
</div>
";
        // line 376
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "octemplates/module/oct_404_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1003 => 376,  980 => 356,  975 => 354,  947 => 331,  942 => 328,  935 => 326,  932 => 325,  921 => 323,  916 => 322,  908 => 320,  906 => 319,  901 => 318,  897 => 317,  884 => 307,  872 => 298,  868 => 297,  864 => 295,  853 => 293,  849 => 292,  845 => 291,  835 => 284,  816 => 268,  812 => 266,  805 => 264,  802 => 263,  791 => 261,  786 => 260,  778 => 258,  776 => 257,  771 => 256,  767 => 255,  759 => 249,  753 => 248,  750 => 247,  748 => 246,  739 => 242,  733 => 241,  727 => 240,  721 => 239,  718 => 238,  711 => 236,  708 => 235,  702 => 234,  694 => 232,  686 => 230,  683 => 229,  678 => 228,  675 => 227,  667 => 225,  659 => 223,  656 => 222,  654 => 221,  649 => 220,  645 => 219,  641 => 218,  635 => 216,  632 => 215,  628 => 214,  621 => 210,  609 => 201,  605 => 199,  598 => 197,  595 => 196,  584 => 194,  579 => 193,  571 => 191,  569 => 190,  564 => 189,  560 => 188,  552 => 182,  546 => 181,  543 => 180,  541 => 179,  532 => 175,  526 => 174,  520 => 173,  514 => 172,  511 => 171,  504 => 169,  501 => 168,  495 => 167,  487 => 165,  479 => 163,  476 => 162,  471 => 161,  468 => 160,  460 => 158,  452 => 156,  449 => 155,  447 => 154,  442 => 153,  438 => 152,  434 => 151,  428 => 149,  425 => 148,  421 => 147,  414 => 143,  407 => 138,  405 => 137,  401 => 136,  392 => 130,  386 => 126,  380 => 125,  378 => 124,  371 => 122,  363 => 121,  360 => 120,  354 => 119,  346 => 117,  338 => 115,  335 => 114,  331 => 113,  327 => 112,  323 => 111,  318 => 110,  313 => 109,  311 => 108,  303 => 103,  299 => 102,  288 => 96,  283 => 94,  278 => 92,  274 => 91,  261 => 85,  256 => 83,  249 => 78,  230 => 73,  223 => 71,  210 => 67,  203 => 65,  198 => 63,  192 => 62,  187 => 59,  171 => 58,  165 => 57,  158 => 55,  142 => 44,  136 => 41,  128 => 36,  124 => 35,  120 => 34,  115 => 32,  109 => 29,  105 => 27,  99 => 24,  96 => 23,  93 => 22,  87 => 19,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "octemplates/module/oct_404_page.twig", "");
    }
}
