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

/* oct_remarket/template/octemplates/menu/oct_sidebar_mobile.twig */
class __TwigTemplate_5fad486c3de86b0dca29f40868fdd6c0d1cc48411782ecfde40eecb7ddbdcd6e extends \Twig\Template
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
        echo "<nav id=\"rm_mobile_nav\" class=\"d-lg-none fixed-top d-flex align-items-center justify-content-between\">
    <button type=\"button\" id=\"rm_mobile_menu_button\" class=\"rm-btn primary rm_mobile_sidebar_toggle\" onclick=\"rmSidebar('";
        // line 2
        echo ($context["oct_menu"] ?? null);
        echo "', 'menu');\" aria-label=\"Menu\">
        <span class=\"rm-btn-icon\">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>
    <div class=\"rm-mobile-nav-buttons d-flex\">
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_address", [], "any", false, true, false, 10), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 10) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_address", [], "any", false, false, false, 10)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
            // line 11
            echo "        <button type=\"button\"  class=\"rm-mobile-nav-buttons-btn rm-mobile-locatons-btn\" onclick=\"rmSidebar('";
            echo ($context["oct_our_address"] ?? null);
            echo "', 'locations');\" aria-label=\"Locations\">
            <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--mobile-locations-icon\" alt=\"\" width=\"20\" height=\"20\">
        </button>
        ";
        }
        // line 15
        echo "        ";
        if ((((((((((array_key_exists("oct_contact_telephones", $context) && ($context["oct_contact_telephones"] ?? null)) || (array_key_exists("oct_contact_opens", $context) && ($context["oct_contact_opens"] ?? null))) || (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_messenger", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_messenger", [], "any", false, false, false, 15))) || (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_viber", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_viber", [], "any", false, false, false, 15))) || (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_telegram", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_telegram", [], "any", false, false, false, 15))) || (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_skype", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_skype", [], "any", false, false, false, 15))) || (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_whatsapp", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 15))) || (array_key_exists("socials", $context) &&  !twig_test_empty(($context["socials"] ?? null)))) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, true, false, 15), "email", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "mobile_menu", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", true, true, false, 15) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 15)))))) {
            // line 16
            echo "        <button type=\"button\" class=\"rm-mobile-nav-buttons-btn rm-mobile-contacts-btn\" onclick=\"rmSidebar('";
            echo ($context["oct_menu_contacts"] ?? null);
            echo "', 'contacts');\" aria-label=\"Contacts\">
            <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--mobile-contacts-icon\" alt=\"\" width=\"21\" height=\"21\">
        </button>
        ";
        }
        // line 20
        echo "    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/menu/oct_sidebar_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  64 => 16,  61 => 15,  53 => 11,  51 => 10,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/menu/oct_sidebar_mobile.twig", "");
    }
}
