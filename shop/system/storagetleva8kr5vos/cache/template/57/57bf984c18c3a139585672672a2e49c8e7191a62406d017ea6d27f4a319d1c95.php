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

/* oct_remarket/template/account/account.twig */
class __TwigTemplate_5a7aae01809f7b6e3af65893791e2439a4db003e6af3bfb7bc2437dc09d20ce0 extends \Twig\Template
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
<div id=\"account-account\" class=\"container account-container\">
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
\t\t    <div class=\"rm-content rm-account-content h-100\">
\t\t    <div class=\"rm-content-title\">";
        // line 26
        echo ($context["text_my_account"] ?? null);
        echo "</div>
\t\t      <div class=\"rm-account-text\">
\t\t\t\t\t<p>";
        // line 28
        echo ($context["oct_account_main_text"] ?? null);
        echo "</p>
\t\t\t\t\t<p>";
        // line 29
        echo ($context["oct_account_main_text_contact"] ?? null);
        echo " <a href=\"";
        echo ($context["url_contacts"] ?? null);
        echo "\">\"";
        echo ($context["oct_account_main_contacts"] ?? null);
        echo "\"</a>.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"rm-content-title\">";
        // line 31
        echo ($context["oct_account_main_info"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"table-responsive-sm rm-table-box\">
\t\t\t\t    <table class=\"table table-hover\">
\t\t\t\t       \t<thead class=\"thead-dark\">
\t\t\t\t         \t<tr>
\t\t\t\t\t            <th scope=\"col\">";
        // line 36
        echo ($context["oct_account_name"] ?? null);
        echo "</th>
\t\t\t\t\t            <th scope=\"col\">";
        // line 37
        echo ($context["oct_account_email"] ?? null);
        echo "</th>
\t\t\t\t            </tr>
\t\t\t\t        </thead>
\t\t\t\t        <tbody>
\t\t\t\t            <tr>
\t\t\t\t                <td>";
        // line 42
        echo ($context["firstname"] ?? null);
        echo "</td>
\t\t\t\t            \t<td class=\"d-flex justify-content-between\">
\t\t\t\t            \t\t<span>";
        // line 44
        echo ($context["email"] ?? null);
        echo "</span>&nbsp;<a href=\"";
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["oct_account_edit"] ?? null);
        echo "</a>
\t\t\t\t            \t</td>
\t\t\t\t          \t</tr>
\t\t\t\t        </tbody>
\t\t\t\t    </table>
\t\t\t\t</div>
\t\t\t\t<div class=\"rm-content-title\">";
        // line 50
        echo ($context["text_order"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"table-responsive-sm\">
\t\t\t\t    <table class=\"table table-hover\">
\t\t\t\t       \t<thead class=\"thead-dark\">
\t\t\t\t         \t<tr>
\t\t\t\t\t            <th scope=\"col\">";
        // line 55
        echo ($context["oct_account_n_order"] ?? null);
        echo "</th>
\t\t\t\t\t            <th scope=\"col\">";
        // line 56
        echo ($context["oct_account_order_status"] ?? null);
        echo "</th>
\t\t\t\t\t            <th scope=\"col\">";
        // line 57
        echo ($context["oct_account_order_date"] ?? null);
        echo "</th>
\t\t\t\t\t            <th scope=\"col\">";
        // line 58
        echo ($context["oct_account_order_amount"] ?? null);
        echo "</th>
\t\t\t\t            </tr>
\t\t\t\t        </thead>
\t\t\t\t        <tbody>
\t\t\t\t\t\t\t";
        // line 62
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) >= 1)) {
            // line 63
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 64
                echo "\t\t\t\t            <tr>
\t\t\t\t                <td><a href=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["order"], "href", [], "any", false, false, false, 65);
                echo "\">#";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 65);
                echo "</a></td>
\t\t\t\t            \t<td>";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 66);
                echo "</td>
\t\t\t\t            \t<td>";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 67);
                echo "</td>
\t\t\t\t            \t<td>";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 68);
                echo "</td>
\t\t\t\t          \t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 72
            echo "\t\t\t\t            <tr>
\t\t\t\t            \t<td>";
            // line 73
            echo ($context["oct_account_no_orders"] ?? null);
            echo "</td>
\t\t\t\t          \t</tr>
\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t        </tbody>
\t\t\t\t    </table>
\t\t\t\t</div>
\t\t    </div>
\t    </div>
\t    ";
        // line 81
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 83
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 85
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 85,  242 => 83,  237 => 81,  230 => 76,  224 => 73,  221 => 72,  218 => 71,  209 => 68,  205 => 67,  201 => 66,  195 => 65,  192 => 64,  187 => 63,  185 => 62,  178 => 58,  174 => 57,  170 => 56,  166 => 55,  158 => 50,  145 => 44,  140 => 42,  132 => 37,  128 => 36,  120 => 31,  111 => 29,  107 => 28,  102 => 26,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  72 => 16,  69 => 15,  63 => 12,  60 => 11,  58 => 10,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/account.twig", "");
    }
}
