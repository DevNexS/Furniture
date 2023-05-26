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

/* oct_remarket/template/account/forgotten.twig */
class __TwigTemplate_1d01b361ec9da8e95b0437d36058b2b21255fbf6ca36a221fcde58e474a74110 extends \Twig\Template
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
<div id=\"account-forgotten\" class=\"container account-container\">
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
\trmNotify('warning', '";
            // line 12
            echo ($context["error_warning"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 15
        echo "\t<div id=\"content\" class=\"row\">
\t\t";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "\t    ";
            $context["class"] = "col-lg-6";
            // line 19
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "\t    ";
            $context["class"] = "col-lg-9";
            // line 21
            echo "\t    ";
        } else {
            // line 22
            echo "\t    ";
            $context["class"] = "col-lg-12";
            // line 23
            echo "\t    ";
        }
        // line 24
        echo "\t    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"rm-content h-100\">
\t\t      <div class=\"rm-account-text mb-3\">";
        // line 26
        echo ($context["text_email"] ?? null);
        echo "</div>
\t\t      <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t        <fieldset class=\"rm-account-form\">
\t\t\t        <div class=\"form-group\">
\t\t\t            <label class=\"rm-control-label\" for=\"input-email\"><span class=\"required\">*</span> ";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t            <input type=\"text\" name=\"email\" value=\"";
        // line 31
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t        </div>
\t\t        </fieldset>
\t\t        <div class=\"btn-group mt-4\">
\t\t        \t<button type=\"submit\" class=\"rm-btn dark\"><span class=\"rm-btn-text\">";
        // line 35
        echo ($context["button_continue"] ?? null);
        echo "</span></button>
\t\t        </div>
\t\t      </form>
\t\t    </div>
\t    </div>
\t    ";
        // line 40
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  138 => 42,  133 => 40,  125 => 35,  116 => 31,  112 => 30,  106 => 27,  102 => 26,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/forgotten.twig", "");
    }
}
