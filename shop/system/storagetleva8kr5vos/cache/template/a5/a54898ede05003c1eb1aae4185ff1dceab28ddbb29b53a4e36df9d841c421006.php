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

/* oct_remarket/template/common/success.twig */
class __TwigTemplate_d04159cd190fa8770c6f8f2096ea841a113b6d32cd4d55e381d6884695589a42 extends \Twig\Template
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
<div id=\"common-success\" class=\"container flex-container\">
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
\t\t      <div class=\"rm-inform-content-text\">
\t\t      ";
        // line 22
        echo ($context["text_message"] ?? null);
        echo "
\t\t      </div>
\t\t    </div>
\t    </div>
\t    ";
        // line 26
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 28
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 30
        if ((((array_key_exists("oct_analytics_yandex_ecommerce", $context) && ($context["oct_analytics_yandex_ecommerce"] ?? null)) && (array_key_exists("oct_analytics_yandex_container", $context) && ($context["oct_analytics_yandex_container"] ?? null))) && (array_key_exists("oct_analytics_order_id", $context) && ($context["oct_analytics_order_id"] ?? null)))) {
            // line 31
            echo "<script>
window.";
            // line 32
            echo ($context["oct_analytics_yandex_container"] ?? null);
            echo " = window.";
            echo ($context["oct_analytics_yandex_container"] ?? null);
            echo " || [];
if(typeof ";
            // line 33
            echo ($context["oct_analytics_yandex_container"] ?? null);
            echo " != 'undefined') {
";
            // line 34
            echo ($context["oct_analytics_yandex_container"] ?? null);
            echo ".push({
\"ecommerce\": {
\t\"purchase\": {
\t\t\"actionField\": {
\t\t\t\"id\" : \"";
            // line 38
            echo ($context["oct_analytics_order_id"] ?? null);
            echo "\"
\t\t},
\t\t\"products\": [
\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_analytics_order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "\t\t\t{
\t\t\t\t\"id\": \"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 43);
                echo "\",
\t\t\t\t\"name\": \"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                echo "\",
\t\t\t\t\"price\": ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45);
                echo ",
\t\t\t\t\"quantity\": ";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46);
                echo ",
\t\t\t\t";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", true, true, false, 47) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 47)))) {
                    // line 48
                    echo "\t\t\t\t\"brand\": \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 48);
                    echo "\",
\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", true, true, false, 50) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 50)))) {
                    // line 51
                    echo "\t\t\t\t\"category\": \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 51);
                    echo "\",
\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", true, true, false, 53) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 53)))) {
                    // line 54
                    echo "\t\t\t\t\"variant\": \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "variant", [], "any", false, false, false, 54);
                    echo "\"
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t},
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t]
\t}
}
});
}
</script>
";
        }
        // line 65
        echo "
";
        // line 66
        if (((array_key_exists("oct_analytics_google_ecommerce", $context) && ($context["oct_analytics_google_ecommerce"] ?? null)) && (array_key_exists("oct_analytics_order_id", $context) && ($context["oct_analytics_order_id"] ?? null)))) {
            // line 67
            echo "<script>
window.dataGoogleLayer = window.dataGoogleLayer || [];
dataGoogleLayer = ";
            // line 69
            echo ($context["toGoogle"] ?? null);
            echo ";
if(typeof dataGoogleLayer != 'undefined') {
gtag('event', 'purchase', dataGoogleLayer);
}
</script>
";
        }
        // line 75
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  209 => 69,  205 => 67,  203 => 66,  200 => 65,  191 => 58,  184 => 56,  178 => 54,  175 => 53,  169 => 51,  166 => 50,  160 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  139 => 42,  135 => 41,  129 => 38,  122 => 34,  118 => 33,  112 => 32,  109 => 31,  107 => 30,  102 => 28,  97 => 26,  90 => 22,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/success.twig", "");
    }
}
