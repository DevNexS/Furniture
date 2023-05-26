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

/* oct_remarket/template/account/order_list.twig */
class __TwigTemplate_44da0ef5eef8db571d97187553a638f15d94958872250dcb04364efa45e5aec9 extends \Twig\Template
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
<div id=\"account-order\" class=\"container account-container\">
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
\t<div id=\"content\" class=\"row\">
\t\t";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "\t    ";
            $context["class"] = "col-lg-6";
            // line 14
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "\t    ";
            $context["class"] = "col-lg-9";
            // line 16
            echo "\t    ";
        } else {
            // line 17
            echo "\t    ";
            $context["class"] = "col-lg-12";
            // line 18
            echo "\t    ";
        }
        // line 19
        echo "\t    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"rm-content h-100\">
\t\t      ";
        // line 21
        if (($context["orders"] ?? null)) {
            // line 22
            echo "\t\t      <div class=\"table-responsive-sm rm-table-box\">
\t\t        <table class=\"table table-hover\">
\t\t          <thead class=\"thead-dark\">
\t\t            <tr>
\t\t              <th>";
            // line 26
            echo ($context["column_order_id"] ?? null);
            echo "</th>
\t\t              <th>";
            // line 27
            echo ($context["column_customer"] ?? null);
            echo "</th>
\t\t              <th>";
            // line 28
            echo ($context["column_product"] ?? null);
            echo "</th>
\t\t              <th>";
            // line 29
            echo ($context["column_status"] ?? null);
            echo "</th>
\t\t              <th>";
            // line 30
            echo ($context["column_total"] ?? null);
            echo "</th>
\t\t              <th>";
            // line 31
            echo ($context["column_date_added"] ?? null);
            echo "</th>
\t\t            </tr>
\t\t          </thead>
\t\t          <tbody>
\t\t           ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 36
                echo "\t\t            <tr>
\t\t              <td><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 37);
                echo "\">#";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 37);
                echo "</a></td>
\t\t              <td>";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 38);
                echo "</td>
\t\t              <td>";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 39);
                echo "</td>
\t\t              <td>";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 40);
                echo "</td>
\t\t              <td>";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 41);
                echo "</td>
\t\t              <td>";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 42);
                echo "</td>
\t\t            </tr>
\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t          </tbody>
\t\t        </table>
\t\t      </div>
\t\t      <div class=\"row\">
\t\t        <div class=\"col-sm-6 text-left\">";
            // line 49
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t        <div class=\"col-sm-6 text-right\">";
            // line 50
            echo ($context["results"] ?? null);
            echo "</div>
\t\t      </div>
\t\t      ";
        } else {
            // line 53
            echo "\t\t      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t      ";
        }
        // line 55
        echo "\t\t      <div class=\"buttons\">
\t\t        <a href=\"";
        // line 56
        echo ($context["continue"] ?? null);
        echo "\" class=\"rm-btn dark\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t      </div>
\t\t    </div>
\t    </div>
\t    ";
        // line 60
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 62
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 64
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 64,  201 => 62,  196 => 60,  187 => 56,  184 => 55,  178 => 53,  172 => 50,  168 => 49,  162 => 45,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  137 => 38,  131 => 37,  128 => 36,  124 => 35,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  91 => 22,  89 => 21,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/account/order_list.twig", "");
    }
}
