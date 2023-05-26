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

/* oct_remarket/template/error/not_found.twig */
class __TwigTemplate_65c14b44d7db57f9ba59671e548e834f960722bfb21bda6f7212c6c7f157f67e extends \Twig\Template
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
<div id=\"error-not-found\" class=\"container rm-404-content\">
\t<div class=\"content-top-box\">";
        // line 3
        echo ($context["content_top"] ?? null);
        echo "</div>
\t<div class=\"rm-content text-center\">
\t\t<h1 class=\"rm-page-title rm-404-content-title text-center\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t";
        // line 6
        if ((array_key_exists("oct_404_image", $context) &&  !twig_test_empty(($context["oct_404_image"] ?? null)))) {
            // line 7
            echo "\t\t<div class=\"rm-404-content-image\"><img class=\"img-fluid\" src=\"";
            echo ($context["oct_404_image"] ?? null);
            echo "\" /></div>
\t\t";
        }
        // line 9
        echo "\t\t<div class=\"rm-404-content-text\">
\t\t\t";
        // line 10
        echo ($context["text_error"] ?? null);
        echo "
\t\t</div>
\t</div>
\t";
        // line 13
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 15
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  68 => 13,  62 => 10,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/error/not_found.twig", "");
    }
}
