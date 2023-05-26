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

/* oct_remarket/template/common/cart.twig */
class __TwigTemplate_6088b6a86d87a2d2089c24c278c97b68c232cde6de26131b417408e1b645f03d extends \Twig\Template
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
        if ((array_key_exists("oct_popup_cart_status", $context) && ($context["oct_popup_cart_status"] ?? null))) {
            // line 2
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" class=\"rm-header-cart d-flex flex-column align-items-center\" type=\"button\" onclick=\"octPopupCart();\">
";
        } else {
            // line 4
            echo "<button title=\"";
            echo ($context["oct_cart"] ?? null);
            echo "\" id=\"cart\" type=\"button\" class=\"rm-header-cart d-flex flex-column align-items-center\" onclick=\"location = '";
            echo ($context["cart"] ?? null);
            echo "';\">
";
        }
        // line 6
        echo "<span class=\"rm-header-cart-icon position-relative\">
    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--header-cart-icon\" alt=\"cart-icon\" width=\"21\" height=\"21\">
    <span class=\"rm-header-cart-quantity\">";
        // line 8
        echo ($context["total_products"] ?? null);
        echo "</span>
</span>
<span class=\"rm-header-cart-text\">";
        // line 10
        echo ($context["total_amount"] ?? null);
        echo "</span>
</button>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  57 => 8,  53 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/cart.twig", "");
    }
}
