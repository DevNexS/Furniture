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

/* oct_remarket/template/octemplates/menu/oct_menu_mobile.twig */
class __TwigTemplate_70c7201830a9cd9d3458413b7f8cf3390fb49706889842551f376781918b0dc4 extends \Twig\Template
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
        echo "<div class=\"rm_mobile_menu_first\">
    <div id=\"rm_mobile_menu_toggle_button\" class=\"rm_mobile_menu-list-item d-flex align-items-center rm_mobile_menu_first-item\">
        <span>";
        // line 3
        echo ($context["oct_menu_title"] ?? null);
        echo "</span>
        <span class=\"rm_mobile_menu_first-toggle\"></span>
    </div>
    <div id=\"rm_mobile_account_toggle_button\" class=\"rm_mobile_menu-list-item d-flex align-items-center rm_mobile_menu_first-item\">
        <span>";
        // line 7
        echo ($context["oct_account"] ?? null);
        echo "</span>
        <span class=\"rm_mobile_menu_first-toggle\"></span>
    </div>
    ";
        // line 10
        if (($context["product_views_count"] ?? null)) {
            // line 11
            echo "    <div id=\"rm_mobile_viewed_toggle_button\" class=\"rm_mobile_menu-list-item d-flex align-items-center rm_mobile_menu_first-item\">
        <span>";
            // line 12
            echo ($context["oct_product_views"] ?? null);
            echo "</span>
        <span class=\"rm_mobile_menu_first-toggle\"></span>
    </div>
    ";
        }
        // line 16
        echo "    <a id=\"rm_mobile_wishlist\" href=\"";
        echo ($context["wishlist_link"] ?? null);
        echo "\" class=\"rm_mobile_menu-list-item d-flex align-items-center rm_mobile_menu_first-item\">
        <span>";
        // line 17
        echo ($context["fixed_bar_wishlist"] ?? null);
        echo "</span>
        <span class=\"rm_mobile_menu-list-item-status";
        // line 18
        if (($context["wishlist_total"] ?? null)) {
            echo " has-child";
        }
        echo "\"></span>
    </a>
    <a id=\"rm_mobile_compare\" href=\"";
        // line 20
        echo ($context["compare_link"] ?? null);
        echo "\" class=\"rm_mobile_menu-list-item d-flex align-items-center rm_mobile_menu_first-item\">
        <span>";
        // line 21
        echo ($context["fixed_bar_compare"] ?? null);
        echo "</span>
        <span class=\"rm_mobile_menu-list-item-status";
        // line 22
        if (($context["compare_total"] ?? null)) {
            echo " has-child";
        }
        echo "\"></span>
    </a>
    ";
        // line 24
        if ((array_key_exists("mobile_informations", $context) && ($context["mobile_informations"] ?? null))) {
            // line 25
            echo "    <div class=\"rm_mobile_menu_first-item rm_mobile_menu_info\">
        <ul class=\"list-unstyled\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mobile_informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 28
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["info"], "href", [], "any", false, false, false, 28);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["info"], "title", [], "any", false, false, false, 28);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </ul>
    </div>
    ";
        }
        // line 33
        echo "    ";
        if (((array_key_exists("language", $context) && ($context["language"] ?? null)) || (array_key_exists("currency", $context) && ($context["currency"] ?? null)))) {
            // line 34
            echo "    <div id=\"rm_sidebar_switcher\">
        ";
            // line 35
            if ((array_key_exists("language", $context) && ($context["language"] ?? null))) {
                // line 36
                echo "        <div id=\"oct_mobile_language\"></div>
        ";
            }
            // line 38
            echo "        ";
            if ((array_key_exists("currency", $context) && ($context["currency"] ?? null))) {
                // line 39
                echo "        <div id=\"oct_mobile_currency\"></div>
        ";
            }
            // line 41
            echo "    </div>
    ";
        }
        // line 43
        echo "</div>
";
        // line 44
        if (($context["oct_menu"] ?? null)) {
            // line 45
            echo "<div class=\"rm_mobile_menu_second\">
    <div class=\"rm-sidebar-title d-flex align-items-center\">
        <div class=\"rm_mobile_menu_back rm_mobile_menu_first_back d-flex align-items-center\">
            <span class=\"rm_mobile_menu_back-icon\"></span>
            <span class=\"rm_mobile_menu_back-text\">";
            // line 49
            echo ($context["oct_menu_title"] ?? null);
            echo "</span>
        </div>
        <span class=\"rm-sidebar-title-close modal-close\">
            <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
            <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
        </span>
    </div>
    <ul class=\"rm_mobile_menu-list\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 58
                echo "        <li class=\"rm_mobile_menu-list-item d-flex align-items-center justify-content-between\">
            <a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 59);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 59);
                echo " class=\"d-flex align-items-center\">
                ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                <img class=\"oct-menu-cat-icon\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 61);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 61);
                    echo "\" />
                ";
                }
                // line 63
                echo "                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 63);
                echo "</span>
            </a>
            ";
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 65) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 65))) {
                    // line 66
                    echo "            <button class=\"rm_mobile_menu_second_button\"><span class=\"rm_mobile_menu-list-item-toggle\"></span></button>
            <div class=\"rm_mobile_menu_third\">
                <div class=\"rm-sidebar-title d-flex align-items-center\">
                    <div class=\"rm_mobile_menu_back rm_mobile_menu_second_back d-flex align-items-center\">
                        <span class=\"rm_mobile_menu_back-icon\"></span>
                        <span class=\"rm_mobile_menu_back-text\">";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 71);
                    echo "</span>
                    </div>
                    <span class=\"rm-sidebar-title-close modal-close\">
                        <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                        <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
                    </span>
                </div>
                <ul class=\"rm_mobile_menu-list\">
                    ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 79));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 80
                        echo "                    <li class=\"rm_mobile_menu-list-item d-flex align-items-center justify-content-between\">
                        <a href=\"";
                        // line 81
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 81);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 81);
                        echo "</span></a>
                        ";
                        // line 82
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 82) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 82))) {
                            // line 83
                            echo "                        <button class=\"rm_mobile_menu_third_button\"><span class=\"rm_mobile_menu-list-item-toggle\"></span></button>
                        <div class=\"rm_mobile_menu_fourth\">
                            <div class=\"rm-sidebar-title d-flex align-items-center\">
                                <div class=\"rm_mobile_menu_back rm_mobile_menu_third_back d-flex align-items-center\">
                                    <span class=\"rm_mobile_menu_back-icon\"></span>
                                    <span class=\"rm_mobile_menu_back-text\">";
                            // line 88
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 88);
                            echo "</span>
                                </div>
                                <span class=\"rm-sidebar-title-close modal-close\">
                                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
                                </span>
                            </div>
                            <ul class=\"rm_mobile_menu-list\">
                                ";
                            // line 96
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 96));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 97
                                echo "                                <li class=\"rm_mobile_menu-list-item d-flex align-items-center justify-content-between\">
                                    <a href=\"";
                                // line 98
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 98);
                                echo "\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 98);
                                echo "</span></a>
                                    ";
                                // line 99
                                if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 99) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 99))) {
                                    // line 100
                                    echo "                                    <button class=\"rm_mobile_menu_fourth_button\"><span class=\"rm_mobile_menu-list-item-toggle\"></span></button>
                                    <div class=\"rm_mobile_menu_fifth\">
                                        <div class=\"rm-sidebar-title d-flex align-items-center\">
                                            <div class=\"rm_mobile_menu_back rm_mobile_menu_fourth_back d-flex align-items-center\">
                                                <span class=\"rm_mobile_menu_back-icon\"></span>
                                                <span class=\"rm_mobile_menu_back-text\">";
                                    // line 105
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 105);
                                    echo "</span>
                                            </div>
                                            <span class=\"rm-sidebar-title-close modal-close\">
                                                <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                                                <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
                                            </span>
                                        </div>
                                        <ul class=\"rm_mobile_menu-list\">
                                            ";
                                    // line 113
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 113));
                                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                                        // line 114
                                        echo "                                            <li class=\"rm_mobile_menu-list-item d-flex align-items-center justify-content-between\">
                                                <a href=\"";
                                        // line 115
                                        echo twig_get_attribute($this->env, $this->source, $context["c"], "href", [], "any", false, false, false, 115);
                                        echo "\">
                                                    <span>";
                                        // line 116
                                        echo twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 116);
                                        echo "</span>
                                                </a>
                                            </li>
                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 120
                                    echo "                                            ";
                                    if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 120)) {
                                        // line 121
                                        echo "                                                ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 121));
                                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                            // line 122
                                            echo "                                                    ";
                                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 122))) {
                                                // line 123
                                                echo "                                                    <li class=\"group-title\">
                                                        <strong>";
                                                // line 124
                                                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 124)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                                echo "</strong>
                                                        ";
                                                // line 125
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 125));
                                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                    // line 126
                                                    echo "                                                        <a href=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 126);
                                                    echo "\" title=\"";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 126);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 126);
                                                    echo "</a>
                                                        ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 128
                                                echo "                                                    </li>
                                                    ";
                                            }
                                            // line 130
                                            echo "                                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 131
                                        echo "                                            ";
                                    }
                                    // line 132
                                    echo "                                        </ul>
                                    </div>
                                    ";
                                }
                                // line 135
                                echo "                                </li>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 137
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 137)) {
                                // line 138
                                echo "                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 138));
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 139
                                    echo "                                    ";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 139))) {
                                        // line 140
                                        echo "                                    <li class=\"group-title\">
                                        <strong>";
                                        // line 141
                                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 141)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</strong>
                                        ";
                                        // line 142
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 142));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 143
                                            echo "                                        <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 143);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 143);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 143);
                                            echo "</a>
                                        ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 145
                                        echo "                                    </li>
                                    ";
                                    }
                                    // line 147
                                    echo "                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 148
                                echo "                                ";
                            }
                            // line 149
                            echo "                            </ul>
                        </div>
                        ";
                        }
                        // line 152
                        echo "                    </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 154)) {
                        // line 155
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 155));
                        foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                            // line 156
                            echo "                        ";
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 156))) {
                                // line 157
                                echo "                        <li class=\"group-title\">
                            <strong>";
                                // line 158
                                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 158)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                echo "</strong>
                            ";
                                // line 159
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 159));
                                foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                    // line 160
                                    echo "                            <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 160);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 160);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 160);
                                    echo "</a>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 162
                                echo "                        </li>
                        ";
                            }
                            // line 164
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 165
                        echo "                    ";
                    }
                    // line 166
                    echo "                </ul>
            </div>
            ";
                }
                // line 169
                echo "        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "    </ul>
</div>
";
        }
        // line 174
        echo "<div class=\"rm_mobile_account\">
    <div class=\"rm-sidebar-title d-flex align-items-center\">
        <div class=\"rm_mobile_menu_back rm_mobile_menu_first_back d-flex align-items-center\">
            <span class=\"rm_mobile_menu_back-icon\"></span>
            <span class=\"rm_mobile_menu_back-text\">";
        // line 178
        echo ($context["text_heading"] ?? null);
        echo "</span>
        </div>
        <span class=\"rm-sidebar-title-close modal-close\">
            <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
            <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
        </span>
    </div>
<div class=\"rm_mobile_account-box";
        // line 185
        if (($context["isLogged"] ?? null)) {
            echo " logged";
        }
        echo "\">
        ";
        // line 186
        if (($context["isLogged"] ?? null)) {
            // line 187
            echo "        <ul class=\"rm-account-list list-unstyled\">
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 189
            echo ($context["account"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-001\" alt=\"\">
                    <span>";
            // line 191
            echo ($context["text_account"] ?? null);
            echo "</span>
                </a>
            </li>
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 195
            echo ($context["edit"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-014\" alt=\"\">
                    <span>";
            // line 197
            echo ($context["text_edit"] ?? null);
            echo "</span>
                </a>
            </li>
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 201
            echo ($context["password"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-002\" alt=\"\">
                    <span>";
            // line 203
            echo ($context["text_password"] ?? null);
            echo "</span>
                </a>
            </li>
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 207
            echo ($context["address"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-003\" alt=\"\">
                    <span>";
            // line 209
            echo ($context["text_address"] ?? null);
            echo "</span>
                </a>
            </li>
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 213
            echo ($context["wishlist"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-004\" alt=\"\">
                    <span>";
            // line 215
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a>
            </li>
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 218
            echo ($context["order"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-006\" alt=\"\">
                    <span>";
            // line 220
            echo ($context["text_order"] ?? null);
            echo "</span></a>
            </li>
            ";
            // line 222
            if ((array_key_exists("download_view", $context) && ($context["download_view"] ?? null))) {
                // line 223
                echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 224
                echo ($context["download"] ?? null);
                echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-007\" alt=\"\">
                    <span>";
                // line 226
                echo ($context["text_download"] ?? null);
                echo "</span></a>
            </li>
            ";
            }
            // line 229
            echo "            ";
            if ((array_key_exists("recurring_view", $context) && ($context["recurring_view"] ?? null))) {
                // line 230
                echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 231
                echo ($context["recurring"] ?? null);
                echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-012\" alt=\"\">
                    <span>";
                // line 233
                echo ($context["text_recurring"] ?? null);
                echo "</span></a>
            </li>
            ";
            }
            // line 236
            echo "            ";
            if ((array_key_exists("reward_view", $context) && ($context["reward_view"] ?? null))) {
                // line 237
                echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 238
                echo ($context["reward"] ?? null);
                echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-008\" alt=\"\">
                    <span>";
                // line 240
                echo ($context["text_reward"] ?? null);
                echo "</span></a>
            </li>
            ";
            }
            // line 243
            echo "            ";
            if ((array_key_exists("return_view", $context) && ($context["return_view"] ?? null))) {
                // line 244
                echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 245
                echo ($context["return"] ?? null);
                echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-009\" alt=\"\">
                    <span>";
                // line 247
                echo ($context["text_return"] ?? null);
                echo "</span></a>
            </li>
            ";
            }
            // line 250
            echo "            ";
            if ((array_key_exists("transaction_view", $context) && ($context["transaction_view"] ?? null))) {
                // line 251
                echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 252
                echo ($context["transaction"] ?? null);
                echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-011\" alt=\"\">
                    <span>";
                // line 254
                echo ($context["text_transaction"] ?? null);
                echo "</span></a>
            </li>
            ";
            }
            // line 257
            echo "            ";
            if ((array_key_exists("newsletter_view", $context) && ($context["newsletter_view"] ?? null))) {
                // line 258
                echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 259
                echo ($context["newsletter"] ?? null);
                echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-005\" alt=\"\">
                    <span>";
                // line 261
                echo ($context["text_newsletter"] ?? null);
                echo "</span></a>
            </li>
            ";
            }
            // line 264
            echo "            ";
            if ((array_key_exists("affiliate_view", $context) && ($context["affiliate_view"] ?? null))) {
                // line 265
                echo "            ";
                if ( !($context["tracking"] ?? null)) {
                    // line 266
                    echo "                <li class=\"rm-account-list-item\">
                    <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                    // line 267
                    echo ($context["affiliate"] ?? null);
                    echo "\">
                        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-010\" alt=\"\">
                        <span>";
                    // line 269
                    echo ($context["text_oct_affiliate"] ?? null);
                    echo "</span></a>
                </li>
            ";
                } else {
                    // line 272
                    echo "                <li class=\"rm-account-list-item\">
                    <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                    // line 273
                    echo ($context["affiliate"] ?? null);
                    echo "\">
                        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-010\" alt=\"\">
                        <span>";
                    // line 275
                    echo ($context["text_oct_affiliate"] ?? null);
                    echo "</span></a>
                </li>
                <li class=\"rm-account-list-item\">
                    <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                    // line 278
                    echo ($context["tracking"] ?? null);
                    echo "\">
                        <i class=\"fas fa-code\"></i>
                        <span>";
                    // line 280
                    echo ($context["text_oct_tracking"] ?? null);
                    echo "</span></a>
                </li>
            ";
                }
                // line 283
                echo "            ";
            }
            // line 284
            echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 285
            echo ($context["logout"] ?? null);
            echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-013\" alt=\"\">
                    <span>";
            // line 287
            echo ($context["text_logout"] ?? null);
            echo "</span></a>
            </li>
        </ul>
        ";
        } else {
            // line 291
            echo "        <div class=\"rm_mobile_account-login\">
            <div class=\"rm-content-title text-center\">";
            // line 292
            echo ($context["text_login_is"] ?? null);
            echo "</div>
            <form action=\"javascript:;\" id=\"rm-mobile-login\" class=\"d-flex flex-column\">
                <div class=\"form-group\">
                    <label for=\"input-email\" class=\"rm-control-label\">
                        <span class=\"required\">*</span> ";
            // line 296
            echo ($context["entry_email"] ?? null);
            echo "
                    </label>
                    <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
            // line 298
            echo ($context["entry_email"] ?? null);
            echo "\" id=\"sidebar-input-email\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"input-password\" class=\"rm-control-label\">
                        <span class=\"required\">*</span> ";
            // line 302
            echo ($context["entry_password"] ?? null);
            echo "
                    </label>
                    <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
            // line 304
            echo ($context["entry_password"] ?? null);
            echo "\" id=\"sidebar-input-password\" class=\"form-control\">
                    <input type=\"hidden\" name=\"redirect\" value=\"#\">
                </div>
                <div class=\"d-flex flex-column align-items-center\">
                    <a href=\"";
            // line 308
            echo ($context["forgotten_url"] ?? null);
            echo "\">";
            echo ($context["button_forgotten"] ?? null);
            echo "</a>
                    <input type=\"submit\" id=\"fm-mobile-login-button\" value=\"";
            // line 309
            echo ($context["button_login"] ?? null);
            echo "\" class=\"rm-btn dark\">
                </div>
            </form>
        </div>
        <div class=\"rm_mobile_account-register\">
            <div class=\"rm-content-title text-center\">";
            // line 314
            echo ($context["button_register"] ?? null);
            echo "</div>
            <div class=\"rm-account-login-text\">
                ";
            // line 316
            echo ($context["text_register"] ?? null);
            echo "
            </div>
            <div class=\"text-center\">
                <button onclick=\"location = '";
            // line 319
            echo ($context["register_url"] ?? null);
            echo "';\" type=\"button\" class=\"rm-btn primary\">
                    <span class=\"rm-btn-text\">";
            // line 320
            echo ($context["button_register"] ?? null);
            echo "</span>
                </button>
            </div>
        </div>
        <script>
        \$('#fm-mobile-login-button').on('click', function() {
            \$.ajax({
        \t\ttype: 'post',
        \t\turl:  'index.php?route=octemplates/module/oct_popup_login/login',
        \t\tdataType: 'json',
        \t\tcache: false,
        \t\tdata: \$('#rm-mobile-login').serialize(),
        \t\tbeforeSend: function() {
        \t\t\tmasked('body', true);
        \t\t},
        \t\tcomplete: function() {
        \t\t\tmasked('body', false);
        \t\t},
        \t\tsuccess: function(json) {
        \t        if (json['warning']) {
        \t\t\t\trmNotify('danger', json['warning']);
        \t        } else {

        \t\t\t\tif (json['redirect']) {
        \t\t\t\t\tlocation = json['redirect'];
        \t\t\t\t} else {
        \t\t\t\t\tlocation = '";
            // line 346
            echo ($context["account_url"] ?? null);
            echo "';
        \t\t\t\t}
        \t        }
        \t    }
            });
        });
        </script>
        ";
        }
        // line 354
        echo "    </div>
</div>

<div class=\"rm_mobile_viewed\">
    <div class=\"rm-sidebar-title d-flex align-items-center\">
        <div class=\"rm_mobile_menu_back rm_mobile_menu_first_back d-flex align-items-center\">
            <span class=\"rm_mobile_menu_back-icon\"></span>
            <span class=\"rm_mobile_menu_back-text\">";
        // line 361
        echo ($context["oct_product_views"] ?? null);
        echo "</span>
        </div>
        <span class=\"rm-sidebar-title-close modal-close\">
            <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
            <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
        </span>
    </div>
    <div id=\"oct_sidebar_viewed\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/menu/oct_menu_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  862 => 361,  853 => 354,  842 => 346,  813 => 320,  809 => 319,  803 => 316,  798 => 314,  790 => 309,  784 => 308,  777 => 304,  772 => 302,  765 => 298,  760 => 296,  753 => 292,  750 => 291,  743 => 287,  738 => 285,  735 => 284,  732 => 283,  726 => 280,  721 => 278,  715 => 275,  710 => 273,  707 => 272,  701 => 269,  696 => 267,  693 => 266,  690 => 265,  687 => 264,  681 => 261,  676 => 259,  673 => 258,  670 => 257,  664 => 254,  659 => 252,  656 => 251,  653 => 250,  647 => 247,  642 => 245,  639 => 244,  636 => 243,  630 => 240,  625 => 238,  622 => 237,  619 => 236,  613 => 233,  608 => 231,  605 => 230,  602 => 229,  596 => 226,  591 => 224,  588 => 223,  586 => 222,  581 => 220,  576 => 218,  570 => 215,  565 => 213,  558 => 209,  553 => 207,  546 => 203,  541 => 201,  534 => 197,  529 => 195,  522 => 191,  517 => 189,  513 => 187,  511 => 186,  505 => 185,  495 => 178,  489 => 174,  484 => 171,  477 => 169,  472 => 166,  469 => 165,  463 => 164,  459 => 162,  446 => 160,  442 => 159,  438 => 158,  435 => 157,  432 => 156,  427 => 155,  424 => 154,  417 => 152,  412 => 149,  409 => 148,  403 => 147,  399 => 145,  386 => 143,  382 => 142,  378 => 141,  375 => 140,  372 => 139,  367 => 138,  364 => 137,  357 => 135,  352 => 132,  349 => 131,  343 => 130,  339 => 128,  326 => 126,  322 => 125,  318 => 124,  315 => 123,  312 => 122,  307 => 121,  304 => 120,  294 => 116,  290 => 115,  287 => 114,  283 => 113,  272 => 105,  265 => 100,  263 => 99,  257 => 98,  254 => 97,  250 => 96,  239 => 88,  232 => 83,  230 => 82,  224 => 81,  221 => 80,  217 => 79,  206 => 71,  199 => 66,  197 => 65,  191 => 63,  183 => 61,  181 => 60,  175 => 59,  172 => 58,  168 => 57,  157 => 49,  151 => 45,  149 => 44,  146 => 43,  142 => 41,  138 => 39,  135 => 38,  131 => 36,  129 => 35,  126 => 34,  123 => 33,  118 => 30,  107 => 28,  103 => 27,  99 => 25,  97 => 24,  90 => 22,  86 => 21,  82 => 20,  75 => 18,  71 => 17,  66 => 16,  59 => 12,  56 => 11,  54 => 10,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/menu/oct_menu_mobile.twig", "");
    }
}
