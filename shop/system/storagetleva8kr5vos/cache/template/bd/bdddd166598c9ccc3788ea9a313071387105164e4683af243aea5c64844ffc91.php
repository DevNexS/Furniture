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

/* oct_remarket/template/octemplates/module/oct_breadcrumbs.twig */
class __TwigTemplate_364734098ac2ef8203f5cca97272cce1c6bc4cec51b897564e9d929ddcb7c6cc extends \Twig\Template
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
        echo "<nav aria-label=\"breadcrumb\">
\t<ul class=\"breadcrumb rm-breadcrumb\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t\t\t<li class=\"breadcrumb-item rm-breadcrumb-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
                echo "</li>
\t\t";
            } else {
                // line 7
                echo "\t\t\t<li class=\"breadcrumb-item rm-breadcrumb-item\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "</a></li>
\t\t";
            }
            // line 9
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
</nav>
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "micro", [], "any", true, true, false, 12) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "micro", [], "any", false, false, false, 12))) {
            // line 13
            echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\":
\t[
\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 20
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                    // line 24
                    echo (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24) - 1);
                    echo ",
\t\t\t\t\"item\":
\t\t\t\t{
\t\t\t\t\t\"@id\": \"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
                    echo "\",
\t\t\t\t\t\"name\": \"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
                    echo "\"
\t\t\t\t}
\t\t\t}";
                    // line 30
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                        echo ",";
                    }
                    // line 31
                    echo "\t\t\t";
                }
                // line 32
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t]
}
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/module/oct_breadcrumbs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 33,  152 => 32,  149 => 31,  145 => 30,  140 => 28,  136 => 27,  130 => 24,  126 => 22,  123 => 21,  120 => 20,  103 => 19,  95 => 13,  93 => 12,  89 => 10,  75 => 9,  67 => 7,  61 => 5,  58 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/module/oct_breadcrumbs.twig", "");
    }
}
