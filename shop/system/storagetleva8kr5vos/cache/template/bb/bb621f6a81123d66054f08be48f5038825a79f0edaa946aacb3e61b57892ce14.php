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

/* oct_remarket/template/account/address_list.twig */
class __TwigTemplate_910dfd9b87ba9e0c84cf8bb278c3002a44fbc516c90df77db30ac354aece6a0e extends \Twig\Template
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
<div id=\"account-address\" class=\"container account-container\">
\t";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 class=\"rm-page-title\">";
        // line 6
        echo ($context["text_address_book"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"content-top-box\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "</div>
\t";
        // line 10
        if (($context["success"] ?? null)) {
            // line 11
            echo "\t<script>
\trmNotify('success', '";
            // line 12
            echo ($context["success"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 15
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "\t<script>
\trmNotify('warning', '";
            // line 17
            echo ($context["error_warning"] ?? null);
            echo "');
\t</script>
\t";
        }
        // line 20
        echo "\t<div id=\"content\" class=\"row\">
\t\t";
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
        echo "\t    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"rm-content h-100\">
\t\t      ";
        // line 31
        if (($context["addresses"] ?? null)) {
            // line 32
            echo "\t\t      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "\t\t      <div class=\"rm-acc-address-list-item\">
\t\t      \t<div class=\"mb-3 d-flex justify-content-between align-items-center\">
\t\t      \t\t<a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 35);
                echo "\">";
                echo ($context["button_edit"] ?? null);
                echo "</a>
\t\t      \t\t<a href=\"";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 36);
                echo "\" class=\"d-flex align-items-center red\"><i class=\"fas fa-times\"></i><span class=\"ml-2\">";
                echo ($context["button_delete"] ?? null);
                echo "</span></a>
\t\t      \t</div>
      \t\t\t<div>";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 38);
                echo "</div>
\t\t      </div>
\t\t      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t      ";
        } else {
            // line 42
            echo "\t\t      <div class=\"rm-content-text\">";
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t\t      ";
        }
        // line 44
        echo "\t          <a href=\"";
        echo ($context["add"] ?? null);
        echo "\" class=\"rm-btn dark\"><span class=\"rm-btn-text\">+ ";
        echo ($context["button_new_address"] ?? null);
        echo "</span></a>
\t\t    </div>
\t    </div>
\t    ";
        // line 47
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 49
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 51
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  170 => 49,  165 => 47,  156 => 44,  150 => 42,  147 => 41,  138 => 38,  131 => 36,  125 => 35,  121 => 33,  116 => 32,  114 => 31,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  81 => 20,  75 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/address_list.twig", "");
    }
}
