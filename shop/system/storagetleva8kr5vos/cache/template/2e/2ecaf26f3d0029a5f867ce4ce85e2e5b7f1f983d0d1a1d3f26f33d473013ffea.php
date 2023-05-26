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

/* oct_remarket/template/account/password.twig */
class __TwigTemplate_d62a842e1821d9cdbd09f7483064396a8c18f23df6100a75e90c17e069256f03 extends \Twig\Template
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
<div id=\"account-password\" class=\"container account-container\">
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
    <div id=\"content\" class=\"row\">
        ";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "            ";
            $context["class"] = "col-lg-6";
            // line 14
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "            ";
            $context["class"] = "col-lg-9";
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            ";
            $context["class"] = "col-lg-12";
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"rm-content h-100\">
                <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                    <fieldset class=\"rm-account-form\">
                        <legend class=\"rm-content-title\">";
        // line 23
        echo ($context["text_password"] ?? null);
        echo "</legend>
                        <div class=\"form-group\">
                            <label class=\"rm-control-label\" for=\"input-password\">
                                <span class=\"required\">*</span>
                                ";
        // line 27
        echo ($context["entry_password"] ?? null);
        echo "</label>
                            ";
        // line 28
        if (($context["error_password"] ?? null)) {
            // line 29
            echo "                                <script>
                                    rmNotify('warning', '";
            // line 30
            echo ($context["error_password"] ?? null);
            echo "');
                                </script>
                            ";
        }
        // line 33
        echo "                            <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"rm-control-label\" for=\"input-confirm\">
                                <span class=\"required\">*</span>
                                ";
        // line 38
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                            ";
        // line 39
        if (($context["error_confirm"] ?? null)) {
            // line 40
            echo "                                <script>
                                    rmNotify('warning', '";
            // line 41
            echo ($context["error_confirm"] ?? null);
            echo "');
                                </script>
                            ";
        }
        // line 44
        echo "                            <input type=\"password\" name=\"confirm\" value=\"";
        echo ($context["confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                        </div>
                    </fieldset>
                    <button type=\"submit\" class=\"mt-4 rm-btn dark\">";
        // line 47
        echo ($context["button_continue"] ?? null);
        echo "</button>
                </form>
            </div>
        </div>
        ";
        // line 51
        echo ($context["column_right"] ?? null);
        echo "
    </div>
    ";
        // line 53
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 55
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  159 => 53,  154 => 51,  147 => 47,  140 => 44,  134 => 41,  131 => 40,  129 => 39,  125 => 38,  116 => 33,  110 => 30,  107 => 29,  105 => 28,  101 => 27,  94 => 23,  89 => 21,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/password.twig", "");
    }
}
