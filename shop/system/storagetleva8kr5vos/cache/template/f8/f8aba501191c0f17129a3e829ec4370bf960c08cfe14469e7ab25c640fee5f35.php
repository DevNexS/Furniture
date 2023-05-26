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

/* common/header.twig */
class __TwigTemplate_fc22fbdcb4c4a4b7577d8b064687c9200afb3950fb9600650a385118033edbec extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />

\t\t\t<link href=\"view/stylesheet/fontawesome-free-5.15.4-web/css/all.css\" type=\"text/css\" rel=\"stylesheet\" />
\t\t\t
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 27);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 27);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 27);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 41
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 42
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav navbar-nav navbar-right\">

\t\t\t";
            // line 45
            if ((array_key_exists("oct_alert_status", $context) && ($context["oct_alert_status"] ?? null))) {
                // line 46
                echo "\t\t\t\t";
                if ((((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", true, true, false, 46) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", false, false, false, 46)) || (twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", true, true, false, 46) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", false, false, false, 46))) || (twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", true, true, false, 46) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 46)))) {
                    // line 47
                    echo "\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding:0 20px;\">";
                    // line 48
                    if ((($context["oct_alerts"] ?? null) > 0)) {
                        echo "<span class=\"label label-danger pull-left\" style=\"position:absolute;top:10px;left:6px;\">";
                        echo ($context["oct_alerts"] ?? null);
                        echo "</span>";
                    }
                    echo " <i class=\"fa fa-bell fa-lg\"></i></a>
\t\t\t\t    <ul class=\"dropdown-menu dropdown-menu-right\" style=\"padding: 6px 10px;\">
\t\t\t\t    \t";
                    // line 50
                    if (((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", true, true, false, 50) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "oct_modules", [], "any", false, false, false, 50)) && ((array_key_exists("oct_total_reviews", $context) || array_key_exists("oct_total_found_cheaper", $context)) || array_key_exists("oct_total_calls", $context)))) {
                        // line 51
                        echo "\t\t\t\t    \t<li class=\"dropdown-header\">";
                        echo ($context["text_oct_modules"] ?? null);
                        echo "</li>
\t\t\t\t    \t";
                        // line 52
                        if ((array_key_exists("oct_popup_call_phone", $context) && ($context["oct_popup_call_phone"] ?? null))) {
                            // line 53
                            echo "\t\t\t\t        <li><a href=\"";
                            echo ($context["oct_popup_call_phone"] ?? null);
                            echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                            echo ($context["oct_total_calls"] ?? null);
                            echo "</span>";
                            echo ($context["text_oct_calls"] ?? null);
                            echo "</a></li>
\t\t\t\t        ";
                        }
                        // line 55
                        echo "\t\t\t\t        ";
                        if ((array_key_exists("oct_popup_found_cheaper", $context) && ($context["oct_popup_found_cheaper"] ?? null))) {
                            // line 56
                            echo "\t\t\t\t        <li><a href=\"";
                            echo ($context["oct_popup_found_cheaper"] ?? null);
                            echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                            echo ($context["oct_total_found_cheaper"] ?? null);
                            echo "</span>";
                            echo ($context["text_oct_found_cheaper"] ?? null);
                            echo "</a></li>
\t\t\t\t        ";
                        }
                        // line 58
                        echo "\t\t\t\t        ";
                        if ((array_key_exists("oct_reviews", $context) && ($context["oct_reviews"] ?? null))) {
                            // line 59
                            echo "\t\t\t\t        <li><a href=\"";
                            echo ($context["oct_reviews"] ?? null);
                            echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                            echo ($context["oct_total_reviews"] ?? null);
                            echo "</span>";
                            echo ($context["text_oct_reviews"] ?? null);
                            echo "</a></li>
\t\t\t\t        ";
                        }
                        // line 61
                        echo "\t\t\t\t        ";
                        if ((array_key_exists("oct_faqs", $context) && ($context["oct_faqs"] ?? null))) {
                            // line 62
                            echo "\t\t\t\t        <li><a href=\"";
                            echo ($context["oct_faqs"] ?? null);
                            echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                            echo ($context["oct_total_faqs"] ?? null);
                            echo "</span>";
                            echo ($context["text_oct_faqs"] ?? null);
                            echo "</a></li>
\t\t\t\t        <li class=\"divider\"></li>
\t\t\t\t        ";
                        }
                        // line 65
                        echo "\t\t\t\t        ";
                    }
                    // line 66
                    echo "\t\t\t\t        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", true, true, false, 66) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "orders", [], "any", false, false, false, 66))) {
                        // line 67
                        echo "\t\t\t\t        <li class=\"dropdown-header\">";
                        echo ($context["text_oct_order"] ?? null);
                        echo "</li>
\t\t\t\t        <li><a href=\"";
                        // line 68
                        echo ($context["processing_status"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-warning pull-right\">";
                        echo ($context["processing_status_total"] ?? null);
                        echo "</span>";
                        echo ($context["text_processing_status"] ?? null);
                        echo "</a></li>
\t\t\t\t        <li><a href=\"";
                        // line 69
                        echo ($context["complete_status"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-success pull-right\">";
                        echo ($context["complete_status_total"] ?? null);
                        echo "</span>";
                        echo ($context["text_complete_status"] ?? null);
                        echo "</a></li>
\t\t\t\t        <li><a href=\"";
                        // line 70
                        echo ($context["return"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-danger pull-right\">";
                        echo ($context["return_total"] ?? null);
                        echo "</span>";
                        echo ($context["text_return"] ?? null);
                        echo "</a></li>
\t\t\t\t        <li class=\"divider\"></li>
\t\t\t\t        ";
                    }
                    // line 73
                    echo "\t\t\t\t        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", true, true, false, 73) && twig_get_attribute($this->env, $this->source, ($context["oct_alert_data"] ?? null), "products", [], "any", false, false, false, 73))) {
                        // line 74
                        echo "\t\t\t\t        <li class=\"dropdown-header\">";
                        echo ($context["text_oct_product"] ?? null);
                        echo "</li>
\t\t\t\t        <li><a href=\"";
                        // line 75
                        echo ($context["product"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-danger pull-right\">";
                        echo ($context["product_total"] ?? null);
                        echo "</span>";
                        echo ($context["text_stock"] ?? null);
                        echo "</a></li>
\t\t\t\t        <li><a href=\"";
                        // line 76
                        echo ($context["review"] ?? null);
                        echo "\" style=\"padding: 5px 5px;\"><span class=\"label label-danger pull-right\">";
                        echo ($context["review_total"] ?? null);
                        echo "</span>";
                        echo ($context["text_review"] ?? null);
                        echo "</a></li>
\t\t\t\t        ";
                    }
                    // line 78
                    echo "\t\t\t\t    </ul>
\t\t\t\t</li>
\t\t\t\t";
                }
                // line 81
                echo "\t\t\t";
            }
            // line 82
            echo "\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 83
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 85
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 87
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 89
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 89);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 89);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 92
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://www.opencart.com\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 93
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 94
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://forum.opencart.com\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 95
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 98
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 100
        echo " </div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 100,  367 => 98,  361 => 95,  357 => 94,  353 => 93,  349 => 92,  346 => 91,  335 => 89,  331 => 88,  327 => 87,  320 => 85,  305 => 83,  302 => 82,  299 => 81,  294 => 78,  285 => 76,  277 => 75,  272 => 74,  269 => 73,  259 => 70,  251 => 69,  243 => 68,  238 => 67,  235 => 66,  232 => 65,  221 => 62,  218 => 61,  208 => 59,  205 => 58,  195 => 56,  192 => 55,  182 => 53,  180 => 52,  175 => 51,  173 => 50,  164 => 48,  161 => 47,  158 => 46,  156 => 45,  150 => 42,  142 => 41,  135 => 36,  126 => 34,  122 => 33,  119 => 32,  108 => 30,  104 => 29,  91 => 27,  87 => 26,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
