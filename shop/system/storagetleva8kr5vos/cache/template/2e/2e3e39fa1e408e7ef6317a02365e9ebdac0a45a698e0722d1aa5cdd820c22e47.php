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

/* oct_remarket/template/account/login.twig */
class __TwigTemplate_f58832b0d46c43b40335df6c65b02cdd359ae9575dc138c772a33eb9f8cb0f49 extends \Twig\Template
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
<div id=\"account-login\" class=\"container account-container\">
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
        echo "    <div class=\"row\">
        ";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 22
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 23
            echo "\t    ";
            $context["class"] = "col-lg-6";
            // line 24
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "\t    ";
            $context["class"] = "col-lg-9";
            // line 26
            echo "\t    ";
        } else {
            // line 27
            echo "\t    ";
            $context["class"] = "col-lg-12";
            // line 28
            echo "\t    ";
        }
        // line 29
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"rm-content rm-account-login h-100\">
                <div class=\"rm-account-login-enter\">
                    <div class=\"rm-account-login-title text-center\">";
        // line 32
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</div>
                    <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"rm-account-login-form\">
                        <div class=\"form-group\">
                            <label class=\"rm-control-label\" for=\"input-email\">
                                <span class=\"required\">*</span>
                                ";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
                            <input type=\"email\" name=\"email\" value=\"";
        // line 38
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"rm-control-label\" for=\"input-password\">
                                <span class=\"required\">*</span>
                                ";
        // line 43
        echo ($context["entry_password"] ?? null);
        echo "</label>
                            <input type=\"password\" name=\"password\" value=\"";
        // line 44
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                        </div>
                        <div class=\"rm-account-login-forgotten\">
                            <a href=\"";
        // line 47
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"rm-btn dark\">
                                <span class=\"rm-btn-text\">";
        // line 51
        echo ($context["button_login"] ?? null);
        echo "</span></button>
\t\t\t\t\t\t\t\t";
        // line 52
        if (($context["redirect"] ?? null)) {
            // line 53
            echo "                                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
\t                            ";
        }
        // line 55
        echo "                        </div>
                    </form>
                </div>
                <div class=\"rm-account-login-register\">
                    <div class=\"rm-account-login-title text-center\">";
        // line 59
        echo ($context["text_register"] ?? null);
        echo "</div>
                    <div class=\"rm-account-login-text\">";
        // line 60
        echo ($context["text_register_account"] ?? null);
        echo "</div>
                    <div class=\"text-center\">
                        <a href=\"";
        // line 62
        echo ($context["register"] ?? null);
        echo "\" class=\"rm-btn dark\"><span class=\"rm-btn-text\">";
        echo ($context["button_continue"] ?? null);
        echo "</span></a>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 67
        echo ($context["column_right"] ?? null);
        echo "
    </div>
    ";
        // line 69
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 71
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 71,  203 => 69,  198 => 67,  188 => 62,  183 => 60,  179 => 59,  173 => 55,  167 => 53,  165 => 52,  161 => 51,  152 => 47,  144 => 44,  140 => 43,  130 => 38,  126 => 37,  119 => 33,  115 => 32,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  81 => 20,  75 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/login.twig", "");
    }
}
