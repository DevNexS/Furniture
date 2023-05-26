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

/* oct_remarket/template/common/footer.twig */
class __TwigTemplate_a05f4529708c83c730f610ce2faf4a7b2caaf1af25d3487d89274c764ccc8de1 extends \Twig\Template
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
        echo "<footer>
\t<div class=\"rm-footer\">
\t\t<div class=\"container\">
\t        <div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-6 col-lg-4 text-center text-lg-left rm-footer-first\">
\t\t\t\t\t<div class=\"rm-footer-mobile-inner\">
\t\t\t\t\t\t";
        // line 7
        if (array_key_exists("oct_subscribe", $context)) {
            // line 8
            echo "\t\t\t\t\t\t\t";
            echo ($context["oct_subscribe"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_address", [], "any", false, true, false, 10), ($context["oct_lang_id"] ?? null), [], "array", true, true, false, 10) && (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_address", [], "any", false, false, false, 10)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["oct_lang_id"] ?? null)] ?? null) : null))) {
            // line 11
            echo "\t\t\t\t\t\t\t<div class=\"rm-footer-title\">";
            echo ($context["oct_our_address"] ?? null);
            echo ":</div>
\t\t\t\t\t\t\t<div class=\"rm-footer-text rm-footer-address\">";
            // line 12
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_address", [], "any", false, false, false, 12)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["oct_lang_id"] ?? null)] ?? null) : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("oct_contact_telephones", $context) &&  !twig_test_empty(($context["oct_contact_telephones"] ?? null)))) {
            // line 15
            echo "\t\t\t\t\t\t\t<div class=\"rm-footer-title\">";
            echo ($context["oct_our_call"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled rm-footer-phones\">
\t\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_contact_telephones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_telephone"]) {
                // line 18
                echo "\t\t\t\t\t\t\t\t<li class=\"d-flex align-items-center justify-content-center justify-content-lg-start\">
\t\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--phone-icon\" alt=\"\" width=\"14\" height=\"16\" />
\t\t\t\t\t\t\t\t\t<a href=\"tel:";
                // line 20
                echo twig_replace_filter($context["oct_contact_telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                echo "\">";
                echo $context["oct_contact_telephone"];
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_telephone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("oct_popup_call_phone_status", $context) && ($context["oct_popup_call_phone_status"] ?? null))) {
            // line 26
            echo "\t\t\t\t\t\t\t<span onclick=\"octPopupCallPhone()\" class=\"rm-footer-phones-link rm-phone-link\">";
            echo ($context["oct_our_recall"] ?? null);
            echo "</span>
\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t<div class=\"rm-footer-contacts-btn d-md-none\">
\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo ($context["contact"] ?? null);
        echo "\" class=\"rm-btn secondary\"><span class=\"rm-btn-text\">";
        echo ($context["oct_go_contact_text"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-6 col-lg-3 text-center text-lg-left rm-footer-second\">
\t\t\t\t\t<div class=\"rm-footer-mobile-inner\">
\t\t\t\t\t\t";
        // line 35
        if ((array_key_exists("oct_contact_opens", $context) &&  !twig_test_empty(($context["oct_contact_opens"] ?? null)))) {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"rm-footer-title\">";
            echo ($context["oct_working_hours"] ?? null);
            echo "</div>
\t\t\t\t\t\t<ul class=\"rm-footer-text rm-footer-shedule-list list-unstyled\">
\t\t\t\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_contact_opens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_contact_open"]) {
                // line 39
                echo "\t\t\t\t\t\t\t<li class=\"rm-footer-shedule-list-item\">";
                echo $context["oct_contact_open"];
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_contact_open'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "socials", [], "any", true, true, false, 43) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "socials", [], "any", false, false, false, 43)))) {
            // line 44
            echo "\t                        <div class=\"rm-footer-title\">";
            echo ($context["oct_footer_social_tex"] ?? null);
            echo "</div>
\t                        <ul class=\"rm-social list-unstyled d-flex flex-wrap justify-content-center justify-content-lg-start\">
\t                        \t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "socials", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 47
                echo "\t                            <li class=\"rm-social-item\"><a rel=\"noopener noreferrer\" href=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 47) == "#") || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 47)))) ? ("javascript:;") : (twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 47)));
                echo "\" class=\"rm-social-";
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 47), ["fa " => "", "fab " => "", "far " => "", "fas " => ""]);
                echo " d-flex align-items-center justify-content-center\" target=\"_blank\"><i class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "icone", [], "any", false, false, false, 47);
                echo "\"></i>";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 47);
                echo "</a></li>
\t                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t                        </ul>
\t                    ";
        }
        // line 51
        echo "\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", true, true, false, 51) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 51))) {
            // line 52
            echo "\t\t\t\t\t\t<a href=\"mailto:";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 52);
            echo "\" class=\"rm-footer-mail-link\">";
            echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 52);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t<ul class=\"rm-footer-payments-list list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start\">
\t\t\t\t\t\t\t";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 55), "privat24", [], "any", true, true, false, 55) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 55), "privat24", [], "any", false, false, false, 55))) {
            // line 56
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item privat24\"></li>
\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 58), "visa", [], "any", true, true, false, 58) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 58), "visa", [], "any", false, false, false, 58))) {
            // line 59
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item visa\"></li>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 61), "skrill", [], "any", true, true, false, 61) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 61), "skrill", [], "any", false, false, false, 61))) {
            // line 62
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item skrill\"></li>
\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 64), "lp", [], "any", true, true, false, 64) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 64), "lp", [], "any", false, false, false, 64))) {
            // line 65
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item liqpay\"></li>
\t\t\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 67), "pp", [], "any", true, true, false, 67) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 67), "pp", [], "any", false, false, false, 67))) {
            // line 68
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item paypal\"></li>
\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 70), "mc", [], "any", true, true, false, 70) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 70), "mc", [], "any", false, false, false, 70))) {
            // line 71
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item mastercard\"></li>
\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, true, false, 73), "maestro", [], "any", true, true, false, 73) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "payments", [], "any", false, false, false, 73), "maestro", [], "any", false, false, false, 73))) {
            // line 74
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item maestro\"></li>
\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oct_customer_paymets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_customer"]) {
            // line 77
            echo "\t\t\t\t\t\t\t<li class=\"rm-footer-payments-item custom-payment\"><img src=\"";
            echo $context["payment_customer"];
            echo "\" alt=\"\"></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 82
        if ((array_key_exists("categories", $context) && ($context["categories"] ?? null))) {
            // line 83
            echo "\t            <div class=\"col-12 col-md-6 col-lg-3 text-md-center text-lg-left rm-footer-third\">
\t\t\t\t\t<div class=\"rm-footer-mobile-inner white\">
\t\t            \t<div class=\"rm-footer-title rm-footer-title-toggle d-flex align-items-center justify-content-md-center justify-content-lg-start\">
\t\t\t\t\t\t\t<span class=\"rm-footer-title-toggle-icon d-md-none\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--footer-categories-icon\" alt=\"\" width=\"14\" height=\"14\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"rm-footer-title-toggle-text\">";
            // line 89
            echo ($context["oct_footer_category"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"rm-footer-title-toggle-btn d-md-none\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--footer-toggle-icon\" alt=\"\" width=\"18\" height=\"12\" />
\t\t\t\t\t\t\t</span>
\t\t\t            </div>
\t\t                <ul class=\"rm-footer-links-list list-unstyled\">
\t\t                \t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 96
                echo "\t\t                    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 96);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 96);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 96);
                echo "</a></li>
\t\t                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t                </ul>
\t\t            </div>
\t\t\t\t</div>
\t            ";
        }
        // line 102
        echo "\t            ";
        if (($context["informations"] ?? null)) {
            // line 103
            echo "\t            <div class=\"col-12 col-md-6 col-lg-2 text-md-center text-lg-left rm-footer-fourth\">
\t\t\t\t\t<div class=\"rm-footer-mobile-inner white\">
\t\t\t\t\t\t<div class=\"rm-footer-title rm-footer-title-toggle d-flex align-items-center justify-content-md-center justify-content-lg-start\">
\t\t\t\t\t\t\t<span class=\"rm-footer-title-toggle-icon d-md-none\"><img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--footer-information-icon\" alt=\"\" width=\"16\" height=\"16\" /></span>
\t\t\t\t\t\t\t<span class=\"rm-footer-title-toggle-text\">";
            // line 107
            echo ($context["text_information"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"rm-footer-title-toggle-btn d-md-none\">
\t\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--footer-toggle-icon\" alt=\"\" width=\"18\" height=\"12\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t                <ul class=\"rm-footer-links-list list-unstyled\">
\t\t                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 114
                echo "\t\t                    <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 114);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 114);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 114);
                echo "</a></li>
\t\t                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t                </ul>
\t\t            </div>
\t\t\t\t</div>
\t            ";
        }
        // line 120
        echo "\t        </div>
\t\t\t<div class=\"row d-md-none\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<button type=\"button\" class=\"rm-btn primary rm-footer-catalog-btn w-100\" onclick=\"rmSidebar('";
        // line 123
        echo ($context["oct_menu"] ?? null);
        echo "', 'menu', 1);\">
\t\t\t\t\t\t<span class=\"rm-btn-icon\">
\t\t\t\t\t\t\t<img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--footer-catalog-icon\" alt=\"\" width=\"14\" height=\"14\">
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"rm-btn-text\">";
        // line 127
        echo ($context["oct_menu_catalog"] ?? null);
        echo "</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t            <div class=\"col-lg-12\">
\t                <div class=\"rm-footer-credits text-center\">RPGroup © 2023</div>
\t            </div>
\t        </div>
\t    </div>
\t</div>
\t";
        // line 138
        if ((array_key_exists("oct_feedback_data", $context) && ($context["oct_feedback_data"] ?? null))) {
            // line 139
            echo "\t<div id=\"rm_fixed_contact_substrate\"></div>
\t<div id=\"rm_fixed_contact_button\" class=\"d-flex align-items-center justify-content-center\">
\t\t<div class=\"rm-fixed-contact-pulsation\"></div>
\t\t<div class=\"rm-fixed-contact-icon text-center d-flex align-items-center justify-content-center\"><i class=\"fas fa-envelope\"></i><span class=\"rm-fixed-contact-text d-none\">";
            // line 142
            echo ($context["oct_feedback_text"] ?? null);
            echo "</span></div>
\t\t<div class=\"rm-fixed-contact-dropdown d-flex flex-column align-items-start\">
\t\t\t";
            // line 144
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_messenger", [], "any", true, true, false, 144) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_messenger", [], "any", false, false, false, 144)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_messenger", [], "any", true, true, false, 144) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_messenger", [], "any", false, false, false, 144)))) {
                // line 145
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://m.me/";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_messenger", [], "any", false, false, false, 145);
                echo "\" target=\"_blank\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-messenger d-flex align-items-center justify-content-center\"><i class=\"fab fa-facebook-messenger\"></i></span><span>Messenger</span></a>
\t\t\t";
            }
            // line 147
            echo "
\t\t\t";
            // line 148
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_viber", [], "any", true, true, false, 148) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_viber", [], "any", false, false, false, 148)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_viber", [], "any", true, true, false, 148) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_viber", [], "any", false, false, false, 148)))) {
                // line 149
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://chat?number=+";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_viber", [], "any", false, false, false, 149);
                echo "\" target=\"_blank\" class=\"rm-fixed-contact-item d-flex align-items-center rm-fixed-contact-viber-desktop\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-viber d-flex align-items-center justify-content-center\"><i class=\"fab fa-viber\"></i></span><span>Viber</span></a>
\t\t\t<a rel=\"noopener noreferrer\" href=\"viber://add?number=";
                // line 150
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_viber", [], "any", false, false, false, 150);
                echo "\" target=\"_blank\" class=\"rm-fixed-contact-item d-flex align-items-center rm-fixed-contact-viber-mobile\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-viber d-flex align-items-center justify-content-center\"><i class=\"fab fa-viber\"></i></span><span>Viber</span></a>
\t\t\t";
            }
            // line 152
            echo "
\t\t\t";
            // line 153
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_telegram", [], "any", true, true, false, 153) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_telegram", [], "any", false, false, false, 153)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_telegram", [], "any", true, true, false, 153) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_telegram", [], "any", false, false, false, 153)))) {
                // line 154
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://t.me/";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_telegram", [], "any", false, false, false, 154);
                echo "\" target=\"_blank\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-telegram d-flex align-items-center justify-content-center\"><i class=\"fab fa-telegram\"></i></span><span>Telegram</span></a>
\t\t\t";
            }
            // line 156
            echo "
\t\t\t";
            // line 157
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_skype", [], "any", true, true, false, 157) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_skype", [], "any", false, false, false, 157)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_skype", [], "any", true, true, false, 157) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_skype", [], "any", false, false, false, 157)))) {
                // line 158
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"skype:";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_skype", [], "any", false, false, false, 158);
                echo "?chat\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-skype d-flex align-items-center justify-content-center\"><i class=\"fab fa-skype\"></i></span><span>Skype</span></a>
\t\t\t";
            }
            // line 160
            echo "
\t\t\t";
            // line 161
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_whatsapp", [], "any", true, true, false, 161) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_whatsapp", [], "any", false, false, false, 161)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_whatsapp", [], "any", true, true, false, 161) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 161)))) {
                // line 162
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"https://api.whatsapp.com/send?phone=";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_whatsapp", [], "any", false, false, false, 162);
                echo "\" target=\"_blank\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-whatsapp d-flex align-items-center justify-content-center\"><i class=\"fab fa-whatsapp\"></i></span><span>WhatsApp</span></a>
\t\t\t";
            }
            // line 164
            echo "
\t\t\t";
            // line 165
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_email", [], "any", true, true, false, 165) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_email", [], "any", false, false, false, 165)) && (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", true, true, false, 165) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 165)))) {
                // line 166
                echo "\t\t\t<a rel=\"noopener noreferrer\" href=\"mailto:";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 166);
                echo "\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-email d-flex align-items-center justify-content-center\"><i class=\"far fa-envelope\"></i></span><span>";
                echo twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "contact_email", [], "any", false, false, false, 166);
                echo "</span></a>
\t\t\t";
            }
            // line 168
            echo "
\t\t\t";
            // line 169
            if (((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_callback", [], "any", true, true, false, 169) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_callback", [], "any", false, false, false, 169)) && (array_key_exists("oct_popup_call_phone_status", $context) && ($context["oct_popup_call_phone_status"] ?? null)))) {
                // line 170
                echo "\t\t\t<div id=\"uptocall-mini\" onclick=\"octPopupCallPhone()\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-call d-flex align-items-center justify-content-center\"><i class=\"fas fa-phone\"></i></span><span>";
                echo ($context["oct_call_phone"] ?? null);
                echo "</span></div>
\t\t\t";
            }
            // line 172
            echo "
\t\t\t";
            // line 173
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_contact_link", [], "any", true, true, false, 173) && twig_get_attribute($this->env, $this->source, ($context["oct_feedback_data"] ?? null), "feedback_contact_link", [], "any", false, false, false, 173))) {
                // line 174
                echo "\t\t\t<a href=\"";
                echo ($context["contact"] ?? null);
                echo "\" class=\"rm-fixed-contact-item d-flex align-items-center\"><span class=\"rm-fixed-contact-item-icon rm-fixed-contact-contacts d-flex align-items-center justify-content-center\"><i class=\"fas fa-address-book\"></i></span><span>";
                echo ($context["text_contact"] ?? null);
                echo "</span></a>
\t\t\t";
            }
            // line 176
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 179
        echo "</footer>
";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "footer_totop", [], "any", true, true, false, 180) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "footer_totop", [], "any", false, false, false, 180))) {
            // line 181
            echo "\t<div id=\"back-top\">
\t\t<button type=\"button\" onclick=\"scrollToElement('#top');\"><i class=\"fas fa-chevron-up\"></i></button>
\t</div>
";
        }
        // line 185
        echo "<div id=\"rm_overlay\"></div>
";
        // line 186
        if ((array_key_exists("oct_subscribe_status", $context) && ($context["oct_subscribe_status"] ?? null))) {
            // line 187
            echo "<script>
\$(function() {
\tif (getOCTCookie('oct_subscribe') == 'undefined') {
\t\tsetTimeout(function(){
\t\t\toctPopupSubscribe();
\t\t}, ";
            // line 192
            echo ((twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "seconds", [], "any", false, false, false, 192)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "seconds", [], "any", false, false, false, 192)) : ("10000"));
            echo ");

\t\tconst date = new Date('";
            // line 194
            echo ($context["oct_subscribe_day_now"] ?? null);
            echo "'.replace(/-/g, \"/\"));
\t\tdate.setTime(date.getTime() + (";
            // line 195
            echo ((twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "expire", [], "any", false, false, false, 195)) ? (twig_get_attribute($this->env, $this->source, ($context["oct_subscribe_form_data"] ?? null), "expire", [], "any", false, false, false, 195)) : ("1"));
            echo " * 24 * 60 * 60 * 1000));
\t\tdocument.cookie = 'oct_subscribe=1; path=/; expires=' + date.toUTCString();
\t}
});
</script>
";
        }
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 202
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "<div class=\"modal-holder\"></div>
";
        // line 205
        if ((array_key_exists("oct_isiOS", $context) && ($context["oct_isiOS"] ?? null))) {
            // line 206
            echo "<script>
var elementsA = document.getElementsByTagName('a');
for(var i = 0; i < elementsA.length; i++){
    elementsA[i].addEventListener('touchend',function(){});
}

var elementsB = document.getElementsByTagName('button');
for(var i = 1; i < elementsB.length; i++){
    elementsB[i].addEventListener('touchend',function(){});
}

var elementsI = document.getElementsByTagName('input');
for(var i = 0; i < elementsI.length; i++){
    elementsI[i].addEventListener('touchend',function(){});
}

var elementsS = document.getElementsByTagName('span');
for(var i = 0; i < elementsS.length; i++){
    elementsS[i].addEventListener('touchend',function(){});
}
</script>
";
        }
        // line 228
        if ((array_key_exists("oct_analytics_targets", $context) &&  !twig_test_empty(($context["oct_analytics_targets"] ?? null)))) {
            // line 229
            echo "\t<script>
\t";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_analytics_targets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                // line 231
                echo "\t \t\$('body').on('click', '";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["target"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["atribute"] ?? null) : null);
                echo "', function() {
\t\t    ";
                // line 232
                if ((twig_get_attribute($this->env, $this->source, $context["target"], "google", [], "array", true, true, false, 232) && (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["target"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["google"] ?? null) : null))) {
                    // line 233
                    echo "\t\t\tgtag('event', '";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["target"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["action"] ?? null) : null);
                    echo "', {
\t\t\t  'event_category' : '";
                    // line 234
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["target"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["category"] ?? null) : null);
                    echo "'
\t\t\t});
\t\t    ";
                }
                // line 237
                echo "\t\t\t
\t\t    ";
                // line 238
                if ((twig_get_attribute($this->env, $this->source, $context["target"], "yandex", [], "array", true, true, false, 238) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["target"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["yandex"] ?? null) : null))) {
                    // line 239
                    echo "\t\t    ym(";
                    echo ($context["oct_analytics_yandex_code"] ?? null);
                    echo ", 'reachGoal', '";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["target"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["action"] ?? null) : null);
                    echo "');
\t\t    ";
                }
                // line 241
                echo "\t\t});
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "\t</script>
";
        }
        // line 245
        if (((array_key_exists("oct_policy_value", $context) &&  !twig_test_empty(($context["oct_policy_value"] ?? null))) && ($context["oct_policy_value"] ?? null))) {
            // line 246
            echo "<script>
function get_oct_policy() {
\t\$.ajax({
\t\turl: \"index.php?route=octemplates/main/oct_functions/getOctPolicy\",
\t\ttype: \"post\",
\t\tdataType: \"json\",
\t\tcache: false,
\t\tsuccess: function(t) {
\t\t\tif (t['text_oct_policy']) {
\t\t\t\tvar html = '<div id=\"oct-policy\" class=\"fixed-bottom\"><div class=\"container\"><div class=\"row\"><div class=\"col-lg-12 d-flex align-items-center justify-content-between flex-column flex-md-row\"><div class=\"oct-policy-text\">'+ t['text_oct_policy'] +'</div><button type=\"button\" id=\"oct-policy-btn\">'+ t['oct_policy_accept'] +'</button></div></div></div></div>';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#oct-policy-btn').on('click', function () {
\t\t\t\t\t\$('#oct-policy').addClass('hidden');
\t\t\t\t\tconst date = new Date(t['oct_policy_day_now'].replace(/-/g, \"/\"));
\t\t\t\t\tdate.setTime(date.getTime() + (t['oct_max_day'] * 24 * 60 * 60 * 1000));
\t\t\t\t\tdocument.cookie = t['oct_policy_value']+'=1; path=/; expires=' + date.toUTCString();
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(e, t, i) {
\t\t\talert(i + \"\\r\\n\" + e.statusText + \"\\r\\n\" + e.responseText)
\t\t}
\t});
}

\$(function() {
\tif (getOCTCookie('";
            // line 274
            echo ($context["oct_policy_value"] ?? null);
            echo "') == 'undefined') {
\t\tget_oct_policy();
\t}
});
</script>
";
        }
        // line 280
        if ((array_key_exists("oct_jscode", $context) && ($context["oct_jscode"] ?? null))) {
            // line 281
            echo "\t<script>
\t";
            // line 282
            echo ($context["oct_jscode"] ?? null);
            echo "
\t</script>
";
        }
        // line 285
        echo "<script async src=\"catalog/view/theme/oct_remarket/js/oct-fonts.js\"></script>
<link rel=\"stylesheet\" href=\"catalog/view/theme/oct_remarket/stylesheet/all.css\"";
        // line 286
        if (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "minify", [], "any", true, true, false, 286)) {
            echo " media=\"print\" onload=\"this.media='all'\"";
        } else {
            echo " media=\"all\"";
        }
        echo ">
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  667 => 286,  664 => 285,  658 => 282,  655 => 281,  653 => 280,  644 => 274,  614 => 246,  612 => 245,  608 => 243,  601 => 241,  593 => 239,  591 => 238,  588 => 237,  582 => 234,  577 => 233,  575 => 232,  570 => 231,  566 => 230,  563 => 229,  561 => 228,  537 => 206,  535 => 205,  532 => 204,  523 => 202,  519 => 201,  510 => 195,  506 => 194,  501 => 192,  494 => 187,  492 => 186,  489 => 185,  483 => 181,  481 => 180,  478 => 179,  473 => 176,  465 => 174,  463 => 173,  460 => 172,  454 => 170,  452 => 169,  449 => 168,  441 => 166,  439 => 165,  436 => 164,  430 => 162,  428 => 161,  425 => 160,  419 => 158,  417 => 157,  414 => 156,  408 => 154,  406 => 153,  403 => 152,  398 => 150,  393 => 149,  391 => 148,  388 => 147,  382 => 145,  380 => 144,  375 => 142,  370 => 139,  368 => 138,  354 => 127,  347 => 123,  342 => 120,  336 => 116,  323 => 114,  319 => 113,  310 => 107,  304 => 103,  301 => 102,  295 => 98,  282 => 96,  278 => 95,  269 => 89,  261 => 83,  259 => 82,  254 => 79,  245 => 77,  240 => 76,  236 => 74,  233 => 73,  229 => 71,  226 => 70,  222 => 68,  219 => 67,  215 => 65,  212 => 64,  208 => 62,  205 => 61,  201 => 59,  198 => 58,  194 => 56,  192 => 55,  189 => 54,  181 => 52,  178 => 51,  174 => 49,  159 => 47,  155 => 46,  149 => 44,  146 => 43,  142 => 41,  133 => 39,  129 => 38,  123 => 36,  121 => 35,  110 => 29,  107 => 28,  101 => 26,  98 => 25,  94 => 23,  83 => 20,  79 => 18,  75 => 17,  69 => 15,  66 => 14,  61 => 12,  56 => 11,  53 => 10,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/footer.twig", "");
    }
}
