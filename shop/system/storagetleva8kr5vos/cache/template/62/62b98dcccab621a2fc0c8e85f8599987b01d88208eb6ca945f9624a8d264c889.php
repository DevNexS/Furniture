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

/* oct_remarket/template/product/manufacturer_list.twig */
class __TwigTemplate_4ca8f53a990387d85970cebf6ab4d78468b47fd2ccdc43f7fb0877fd247cb469 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
    ";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
    <div class=\"row\">
        <div class=\"col-12 rm-page-title\">
            <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        </div>
    </div>
    <div class=\"content-top-box\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "</div>
    <div class=\"row no-gutters\">
        ";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "            ";
            $context["class"] = "col-lg-6 is-cols";
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
            $context["class"] = "col-lg-12 no-col";
            // line 18
            echo "        ";
        }
        // line 19
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 20
        if (($context["categories"] ?? null)) {
            // line 21
            echo "                <div class=\"rm-content rm-manufacturer h-100\">
                    <div class=\"rm-content-title\">
                        <span>";
            // line 23
            echo ($context["text_index"] ?? null);
            echo "</span>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"scrollToElement('#rm-to-go-";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                echo "');\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </div>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 28
                echo "                        <div id=\"rm-to-go-";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28), [" " => ""]);
                echo "\" class=\"rm-manufacturer-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                echo "</div>
                        ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 30), 6));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 31
                        echo "                                <div class=\"rm-manufacturer-item\">
                                    <div class=\"row\">
                                        ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 34
                            echo "                                            <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 34);
                            echo "\" class=\"col-6 col-md-4 col-lg-2 d-flex flex-column align-items-center\">
                                                ";
                            // line 35
                            if ((twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", true, true, false, 35) && twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 35))) {
                                // line 36
                                echo "                                                <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 36);
                                echo "\" ";
                                if ((array_key_exists("oct_lazyload", $context) && ($context["oct_lazyload"] ?? null))) {
                                    echo " data-srcset=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 36);
                                    echo " 100w\" srcset=\"";
                                    echo ($context["oct_lazy_image"] ?? null);
                                    echo " 100w\" sizes=\"100vw\" class=\"oct-lazy\" ";
                                }
                                echo " alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 36);
                                echo "\" width=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "width", [], "any", false, false, false, 36);
                                echo "\" height=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "height", [], "any", false, false, false, 36);
                                echo "\" />
                                                ";
                            }
                            // line 38
                            echo "                                                <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 38);
                            echo "</span>
                                            </a>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                                    </div>
                                </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                        ";
                }
                // line 45
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                </div>
            ";
        } else {
            // line 48
            echo "                <div class=\"p-4\">
                    <p>";
            // line 49
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    <a href=\"";
            // line 50
            echo ($context["continue"] ?? null);
            echo "\" class=\"rm-btn dark mt-3 d-inline-block\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
                </div>
            ";
        }
        // line 53
        echo "        </div>
        ";
        // line 54
        echo ($context["column_right"] ?? null);
        echo "
    </div>
    ";
        // line 56
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 58
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 58,  222 => 56,  217 => 54,  214 => 53,  206 => 50,  202 => 49,  199 => 48,  195 => 46,  189 => 45,  186 => 44,  178 => 41,  168 => 38,  148 => 36,  146 => 35,  141 => 34,  137 => 33,  133 => 31,  128 => 30,  126 => 29,  119 => 28,  115 => 27,  112 => 26,  98 => 24,  94 => 23,  90 => 21,  88 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  48 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/product/manufacturer_list.twig", "");
    }
}
