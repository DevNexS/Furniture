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

/* oct_remarket/template/information/sitemap.twig */
class __TwigTemplate_a84ba413cf7beb3d425154230af300722c570cb1dd143720d7f42394a0d9ed18 extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
\t";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 rm-page-title\">
\t\t\t<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t</div>
\t</div>
\t<div class=\"content-top-box\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "</div>
\t<div id=\"content\" class=\"row no-gutters\">
\t\t";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
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
\t\t\t<div class=\"rm-content h-100\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 25
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 26);
            echo "</a>
\t\t\t\t\t\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 31);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 31);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 32)) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 34));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 35);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 35);
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 37
                        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 48
        if (($context["blog_categories"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t<ul class=\"mb-0\">
\t\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_category_1"]) {
                // line 51
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["blog_category_1"], "href", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog_category_1"], "name", [], "any", false, false, false, 52);
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["blog_category_1"], "children", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog_category_1"], "children", [], "any", false, false, false, 55));
                    foreach ($context['_seq'] as $context["_key"] => $context["blog_category_2"]) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 57
                        echo twig_get_attribute($this->env, $this->source, $context["blog_category_2"], "href", [], "any", false, false, false, 57);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["blog_category_2"], "name", [], "any", false, false, false, 57);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 58
                        if (twig_get_attribute($this->env, $this->source, $context["blog_category_2"], "children", [], "any", false, false, false, 58)) {
                            // line 59
                            echo "\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 60
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog_category_2"], "children", [], "any", false, false, false, 60));
                            foreach ($context['_seq'] as $context["_key"] => $context["blog_category_3"]) {
                                // line 61
                                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["blog_category_3"], "href", [], "any", false, false, false, 61);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["blog_category_3"], "name", [], "any", false, false, false, 61);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_3'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 63
                            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_2'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_category_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 74
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 78
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 79
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 80
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 81
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 82
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 85
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 86
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 87
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 89
        echo ($context["text_information"] ?? null);
        echo "
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 92);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 92);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 102
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 104
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 106
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 106,  359 => 104,  354 => 102,  340 => 94,  329 => 92,  325 => 91,  320 => 89,  313 => 87,  307 => 86,  301 => 85,  293 => 82,  287 => 81,  281 => 80,  275 => 79,  269 => 78,  262 => 76,  255 => 74,  252 => 73,  248 => 71,  241 => 69,  237 => 67,  230 => 65,  226 => 63,  215 => 61,  211 => 60,  208 => 59,  206 => 58,  200 => 57,  197 => 56,  193 => 55,  190 => 54,  188 => 53,  182 => 52,  179 => 51,  175 => 50,  172 => 49,  170 => 48,  165 => 45,  158 => 43,  154 => 41,  147 => 39,  143 => 37,  132 => 35,  128 => 34,  125 => 33,  123 => 32,  117 => 31,  114 => 30,  110 => 29,  107 => 28,  105 => 27,  99 => 26,  96 => 25,  92 => 24,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/information/sitemap.twig", "");
    }
}
