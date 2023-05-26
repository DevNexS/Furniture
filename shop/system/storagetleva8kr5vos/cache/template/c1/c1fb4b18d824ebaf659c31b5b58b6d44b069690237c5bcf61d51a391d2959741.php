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

/* oct_remarket/template/common/language.twig */
class __TwigTemplate_5973655663effaec1474f2b86017de0d611e5f944d6db3d5f1c2b12bc827bee1 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"oct_desktop_language\" class=\"top-nav-account-links-item rm-dropdown-box\">
\t<div id=\"language\" class=\"language\">
\t\t<button class=\"btn-lang rm-dropdown-toggle d-flex align-items-center\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    // line 7
                    echo "\t\t\t<img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                    echo "\" class=\"lang\" width=\"16\" height=\"11\" />
\t\t\t<span>";
                    // line 8
                    echo ($context["text_language"] ?? null);
                    echo "</span>
\t\t\t";
                }
                // line 10
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t</button>
\t\t<form action=\"";
            // line 12
            echo ($context["action"] ?? null);
            echo "\" class=\"h-100\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
\t\t\t<div class=\"rm-dropdown\">
\t\t\t\t<ul class=\"rm-dropdown-inner list-unstyled\">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 16
                echo "\t\t\t\t\t<li>
\t\t\t          <button class=\"btn-block language-select";
                // line 17
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17) == ($context["code"] ?? null))) {
                    echo " active-item";
                }
                echo "\" type=\"button\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17);
                echo "\"><img src=\"catalog/language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17);
                echo ".png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 17);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 17);
                echo "\" width=\"16\" height=\"11\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 17);
                echo "</button>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t    <input type=\"hidden\" name=\"code\" value=\"\" />
\t\t    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 23
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  112 => 20,  89 => 17,  86 => 16,  82 => 15,  76 => 12,  73 => 11,  67 => 10,  62 => 8,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/language.twig", "");
    }
}
