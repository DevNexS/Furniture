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

/* oct_remarket/template/checkout/oct_fastorder/shipping_method.twig */
class __TwigTemplate_7335f54642373f11069997fd42e2bb5163cb8381db8481ef3204de4de8ab2fce extends \Twig\Template
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
        echo "<div class=\"shipping-method\">
\t<div class=\"oct-checkout-block-title d-flex align-items-center mb-3\">
\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite-fastorder.svg#include--delivery-icon\" alt=\"\" width=\"24\" height=\"24\">
\t\t<span class=\"text-uppercase ps-3\">";
        // line 4
        echo ($context["heading_shipping_block"] ?? null);
        echo "</span>
\t</div>
\t";
        // line 6
        if (($context["error_warning"] ?? null)) {
            // line 7
            echo "\t<div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 9
        echo "\t";
        if (($context["shipping_methods"] ?? null)) {
            // line 10
            echo "\t<p class=\"mb-3\">";
            echo ($context["text_shipping_method"] ?? null);
            echo "</p>
\t<div class=\"shipping-method-box\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 13
                echo "\t\t\t<p class=\"mb-2\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 13);
                echo "</strong></p>
\t\t\t";
                // line 14
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["shipping_method"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["quote"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 16
                        echo "\t\t\t\t<div class=\"mb-3 radio\">
\t\t\t\t\t<label class=\"ml-0\">
\t\t\t\t\t";
                        // line 18
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 18) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 19
                            echo "\t\t\t\t\t";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 19);
                            // line 20
                            echo "\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 20);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 20);
                            echo "\" checked=\"checked\" />
\t\t\t\t\t";
                        } else {
                            // line 21
                            echo " 
\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            // line 22
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 22);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 22);
                            echo "\" />
\t\t\t\t\t";
                        }
                        // line 24
                        echo "\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 24);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 24);
                        echo "</label>
\t\t\t\t</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t\t";
                } else {
                    echo " 
\t\t\t\t<div class=\"alert alert-danger\">";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 28);
                    echo "</div>
\t\t\t";
                }
                // line 30
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</div>
\t";
        }
        // line 33
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/checkout/oct_fastorder/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  135 => 31,  129 => 30,  124 => 28,  119 => 27,  107 => 24,  100 => 22,  97 => 21,  89 => 20,  86 => 19,  84 => 18,  80 => 16,  75 => 15,  73 => 14,  68 => 13,  64 => 12,  58 => 10,  55 => 9,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/checkout/oct_fastorder/shipping_method.twig", "");
    }
}
