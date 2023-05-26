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

/* oct_remarket/template/common/currency.twig */
class __TwigTemplate_9dda0bc9eac4bf3fc5ee02f9d7f60c5d89eadcce73eacd130b04cbf2ac926227 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"oct_desktop_currency\" class=\"top-nav-account-links-item rm-dropdown-box\">
    <div id=\"currency\" class=\"curency\">
        <button class=\"btn-currency rm-dropdown-toggle d-flex align-items-center\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6);
                    echo " ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 6);
                    echo " ";
                }
                // line 7
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span>";
            echo ($context["text_currency"] ?? null);
            echo "</span></button>
        <form action=\"";
            // line 8
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\" class=\"h-100\">
            <div class=\"rm-dropdown\">
                <ul class=\"rm-dropdown-inner list-unstyled\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 12
                echo "                    <li>
                    ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                    <button class=\"currency-select btn-block";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 14) == ($context["code"] ?? null))) {
                        echo " active-item";
                    }
                    echo "\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 14);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 14);
                    echo "</button>
                    ";
                } else {
                    // line 16
                    echo "                    <button class=\"currency-select btn-block";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16) == ($context["code"] ?? null))) {
                        echo " active-item";
                    }
                    echo "\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 16);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 16);
                    echo "</button>
                    ";
                }
                // line 18
                echo "                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </ul>
            </div>
            <input type=\"hidden\" name=\"code\" value=\"\" />
            <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 23
            echo ($context["redirect"] ?? null);
            echo "\" />
        </form>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 23,  119 => 20,  112 => 18,  98 => 16,  84 => 14,  82 => 13,  79 => 12,  75 => 11,  69 => 8,  59 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/currency.twig", "");
    }
}
