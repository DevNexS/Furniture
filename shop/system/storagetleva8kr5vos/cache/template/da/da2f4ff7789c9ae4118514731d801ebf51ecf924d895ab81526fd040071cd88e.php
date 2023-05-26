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

/* oct_remarket/template/octemplates/menu/oct_menu.twig */
class __TwigTemplate_506557f87bed2dee1ea00c7b9dcba614d251da72722c221cca4369bea9353d38 extends \Twig\Template
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
        if (($context["oct_menu"] ?? null)) {
            // line 2
            echo "<div id=\"rm-menu\" class=\"rm-menu d-flex\">
    <nav>
        <ul class=\"rm-menu-list list-unstyled\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_category"]) {
                // line 6
                echo "            <li class=\"rm-menu-list-item\">
                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "href", [], "any", false, false, false, 8);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "target", [], "any", false, false, false, 8);
                echo " class=\"rm-menu-list-item-link d-flex align-items-center\">
                        ";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                            <img class=\"rm-menu-list-item-icon\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_image", [], "any", false, false, false, 10);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 10);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "width", [], "any", false, false, false, 10);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "height", [], "any", false, false, false, 10);
                    echo "\">
                        ";
                }
                // line 12
                echo "                        <span class=\"rm-menu-list-item-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 12);
                echo "</span>
                    </a>
                    ";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 14) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "                        <span class=\"rm-menu-list-item-chevron\"></span>
                    ";
                }
                // line 17
                echo "                </div>
                ";
                // line 18
                if (((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 18) || twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 18)) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 18) == "standard"))) {
                    // line 19
                    echo "                <div class=\"rm-menu-list-item-child\">
                    ";
                    // line 20
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 20) == "1")) {
                        // line 21
                        echo "                        <ul class=\"rm-menu-list list-unstyled\">
                            ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 23
                            echo "                            <li class=\"rm-menu-list-item\">
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <a href=\"";
                            // line 25
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 25);
                            echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                        <span class=\"rm-menu-list-item-name\">";
                            // line 26
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 26);
                            echo "</span>
                                    </a>
                                    ";
                            // line 28
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 28) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 28))) {
                                // line 29
                                echo "                                        <span class=\"rm-menu-list-item-chevron\"></span>
                                    ";
                            }
                            // line 31
                            echo "                                </div>
                                ";
                            // line 32
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 32) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 32))) {
                                // line 33
                                echo "                                <div class=\"rm-menu-list-item-child rm-menu-list-item-child-2\">
                                    <ul class=\"rm-menu-list list-unstyled\">
                                        ";
                                // line 35
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 35));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 36
                                    echo "                                        <li class=\"rm-menu-list-item\">
                                            <div class=\"d-flex align-items-center justify-content-between\">
                                                <a href=\"";
                                    // line 38
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 38);
                                    echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                                    <span class=\"rm-menu-list-item-name\">";
                                    // line 39
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 39);
                                    echo "</span>
                                                </a>
                                                ";
                                    // line 41
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 41) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 41))) {
                                        // line 42
                                        echo "                                                    <span class=\"rm-menu-list-item-chevron\"></span>
    \t\t\t                                ";
                                    }
                                    // line 44
                                    echo "                                            </div>
                                            ";
                                    // line 45
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 45) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 45))) {
                                        // line 46
                                        echo "    \t\t\t\t\t\t\t\t\t\t<div class=\"rm-menu-list-item-child rm-menu-list-item-child-2\">
    \t\t\t\t\t\t\t\t\t\t\t<ul class=\"rm-menu-list list-unstyled\">
    \t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 48
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 48));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 49
                                            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"rm-menu-list-item\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                            // line 50
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 50);
                                            echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
    \t\t\t                                            <span class=\"rm-menu-list-item-name\">";
                                            // line 51
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 51);
                                            echo "</span>
    \t\t\t                                        </a>
    \t\t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 55
                                        echo "                                                    ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 55)) {
                                            // line 56
                                            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"rm-menu-list-landings\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 58
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 58));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 59
                                                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 59))) {
                                                    // line 60
                                                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                                                    // line 61
                                                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 61)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</strong>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    // line 62
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 62));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 63
                                                        echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["page_link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 63);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["page_link"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 63);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page_link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 63);
                                                        echo "</a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 65
                                                    echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 67
                                                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 68
                                            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 71
                                        echo "    \t\t\t                                </ul>
    \t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 74
                                    echo "                                        </li>
                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 76
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 76)) {
                                    // line 77
                                    echo "    \t\t\t\t\t\t\t\t\t<li class=\"rm-menu-list-landings\">
    \t\t\t\t\t\t\t\t\t\t<ul>
    \t\t\t\t\t\t\t\t\t\t\t";
                                    // line 79
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 79));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 80
                                        echo "    \t\t\t\t\t\t\t\t\t\t\t\t";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 80))) {
                                            // line 81
                                            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                                            // line 82
                                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 82)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</strong>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 83
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 83));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 84
                                                echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["page_link"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 84);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page_link"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 84);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page_link"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 84);
                                                echo "</a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 86
                                            echo "    \t\t\t\t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 88
                                        echo "    \t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 89
                                    echo "    \t\t\t\t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t";
                                }
                                // line 92
                                echo "                                    </ul>
                                </div>
                                ";
                            }
                            // line 95
                            echo "                            </li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 97
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 97)) {
                            // line 98
                            echo "    \t\t\t\t\t\t<li class=\"rm-menu-list-landings\">
    \t\t\t\t\t\t\t<ul>
    \t\t\t\t\t\t\t\t";
                            // line 100
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 100));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 101
                                echo "    \t\t\t\t\t\t\t\t\t";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 101))) {
                                    // line 102
                                    echo "    \t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
    \t\t\t\t\t\t\t\t\t\t<strong>";
                                    // line 103
                                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 103)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</strong>
    \t\t\t\t\t\t\t\t\t\t";
                                    // line 104
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 104));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 105
                                        echo "    \t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page_link"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 105);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page_link"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 105);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["page_link"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 105);
                                        echo "</a>
    \t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 107
                                    echo "    \t\t\t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t\t\t";
                                }
                                // line 109
                                echo "    \t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 110
                            echo "    \t\t\t\t\t\t\t</ul>
    \t\t\t\t\t\t</li>
    \t\t\t\t\t\t";
                        }
                        // line 113
                        echo "                        </ul>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 114
$context["oct_category"], "view", [], "any", false, false, false, 114) == "2")) {
                        // line 115
                        echo "                        <div class=\"rm-menu-list-item-child-links d-flex h-100\">
                            ";
                        // line 116
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 116)) {
                            // line 117
                            echo "                            <div class=\"rm-menu-list-item-child-links-landings\">
                                <ul>
                                    ";
                            // line 119
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 119));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 120
                                echo "        \t\t\t\t\t\t\t\t";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 120))) {
                                    // line 121
                                    echo "        \t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
        \t\t\t\t\t\t\t\t\t<strong>";
                                    // line 122
                                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 122)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</strong>
        \t\t\t\t\t\t\t\t\t";
                                    // line 123
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 123));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 124
                                        echo "    \t                                       <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["page_link"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 124);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["page_link"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 124);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["page_link"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 124);
                                        echo "</a>
        \t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 126
                                    echo "        \t\t\t\t\t\t\t\t</li>
        \t\t\t\t\t\t\t\t";
                                }
                                // line 128
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 129
                            echo "                                </ul>
                            </div>
                            ";
                        }
                        // line 132
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 132)) {
                            // line 133
                            echo "                            <div class=\"rm-menu-list-item-child-links-categories row w-100\">
                                ";
                            // line 134
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 134));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 135
                                echo "                                <div class=\"rm-menu-list-item-child-links-categories-item ";
                                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 135)) {
                                    echo "col-4";
                                } else {
                                    echo "col-3";
                                }
                                echo " d-flex flex-column align-items-start\">
                                    <a href=\"";
                                // line 136
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 136);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 136);
                                echo "\" class=\"rm-menu-list-item-child-links-categories-item-title\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 136);
                                echo "</a>
                                    ";
                                // line 137
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 137)) {
                                    // line 138
                                    echo "                                        ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 138));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 139
                                        echo "                                            <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 139);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 139);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 139);
                                        echo "</a>
                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 141
                                    echo "                                        <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 141);
                                    echo "\" class=\"see-all\" title=\"";
                                    echo ($context["text_see_all_links"] ?? null);
                                    echo "\">";
                                    echo ($context["text_see_all_links"] ?? null);
                                    echo "</a>
                                    ";
                                }
                                // line 143
                                echo "                                </div>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 145
                            echo "                            </div>
                            ";
                        }
                        // line 147
                        echo "                        </div>
                    ";
                    }
                    // line 149
                    echo "                </div>
                ";
                }
                // line 151
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 151) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 151) == "category"))) {
                    // line 152
                    echo "                <div class=\"rm-menu-list-item-child\">
                    ";
                    // line 153
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_category"], "view", [], "any", false, false, false, 153) == "1")) {
                        // line 154
                        echo "                    <ul class=\"rm-menu-list list-unstyled\">
                        ";
                        // line 155
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 155));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 156
                            echo "                        <li class=\"rm-menu-list-item\">
                            <div class=\"d-flex align-items-center justify-content-between\">
                                <a href=\"";
                            // line 158
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 158);
                            echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                    <span class=\"rm-menu-list-item-name\">";
                            // line 159
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 159);
                            echo "</span>
                                </a>
                                ";
                            // line 161
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 161) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 161))) {
                                // line 162
                                echo "                                    <span class=\"rm-menu-list-item-chevron\"></span>
                                ";
                            }
                            // line 164
                            echo "                            </div>
                            ";
                            // line 165
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 165) || twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 165))) {
                                // line 166
                                echo "                            <div class=\"rm-menu-list-item-child rm-menu-list-item-child-2\">
                                <ul class=\"rm-menu-list list-unstyled\">
                                    ";
                                // line 168
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 168));
                                foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                    // line 169
                                    echo "                                    <li class=\"rm-menu-list-item\">
                                        <div class=\"d-flex align-items-center justify-content-between\">
                                            <a href=\"";
                                    // line 171
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 171);
                                    echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                                <span class=\"rm-menu-list-item-name\">";
                                    // line 172
                                    echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 172);
                                    echo "</span>
                                            </a>
                                            ";
                                    // line 174
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 174) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 174))) {
                                        // line 175
                                        echo "                                                <span class=\"rm-menu-list-item-chevron\"></span>
                                            ";
                                    }
                                    // line 177
                                    echo "                                        </div>
                                        ";
                                    // line 178
                                    if ((twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 178) || twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 178))) {
                                        // line 179
                                        echo "                                        <div class=\"rm-menu-list-item-child rm-menu-list-item-child-2\">
                                            <ul class=\"rm-menu-list list-unstyled\">
                                                ";
                                        // line 181
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "children", [], "any", false, false, false, 181));
                                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                            // line 182
                                            echo "                                                <li class=\"rm-menu-list-item\">
                                                    <a href=\"";
                                            // line 183
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 183);
                                            echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                                        <span class=\"rm-menu-list-item-name\">";
                                            // line 184
                                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 184);
                                            echo "</span>
                                                    </a>
                                                </li>
                                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 188
                                        echo "                                                ";
                                        if (twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 188)) {
                                            // line 189
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"rm-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 191
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ch"], "oct_pages", [], "any", false, false, false, 191));
                                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                                // line 192
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 192))) {
                                                    // line 193
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                                                    // line 194
                                                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 194)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[($context["language_id"] ?? null)] ?? null) : null);
                                                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    // line 195
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 195));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                        // line 196
                                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["page_link"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 196);
                                                        echo "\" title=\"";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["page_link"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 196);
                                                        echo "\">";
                                                        echo twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["page_link"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 196);
                                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 198
                                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                }
                                                // line 200
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 201
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 204
                                        echo "                                            </ul>
                                        </div>
                                        ";
                                    }
                                    // line 207
                                    echo "                                    </li>
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 209
                                echo "                                    ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 209)) {
                                    // line 210
                                    echo "\t\t\t\t\t\t\t\t\t<li class=\"rm-menu-list-landings\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 212
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "oct_pages", [], "any", false, false, false, 212));
                                    foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                        // line 213
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 213))) {
                                            // line 214
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                                            // line 215
                                            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 215)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[($context["language_id"] ?? null)] ?? null) : null);
                                            echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 216
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 216));
                                            foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                                // line 217
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["page_link"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 217);
                                                echo "\" title=\"";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["page_link"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 217);
                                                echo "\">";
                                                echo twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["page_link"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 217);
                                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 219
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 221
                                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 222
                                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 225
                                echo "                                </ul>
                            </div>
                            ";
                            }
                            // line 228
                            echo "                        </li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 230
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 230)) {
                            // line 231
                            echo "\t\t\t\t\t\t<li class=\"rm-menu-list-landings\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                            // line 233
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 233));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                // line 234
                                echo "\t\t\t\t\t\t\t\t\t";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 234))) {
                                    // line 235
                                    echo "\t\t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
\t\t\t\t\t\t\t\t\t\t<strong>";
                                    // line 236
                                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 236)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[($context["language_id"] ?? null)] ?? null) : null);
                                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t";
                                    // line 237
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 237));
                                    foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                        // line 238
                                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["page_link"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 238);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["page_link"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 238);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["page_link"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 238);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 240
                                    echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 242
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 243
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                        }
                        // line 246
                        echo "                    </ul>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 247
$context["oct_category"], "view", [], "any", false, false, false, 247) == "2")) {
                        // line 248
                        echo "                    <div class=\"rm-menu-list-item-child-links d-flex h-100\">
                        ";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 249)) {
                            // line 250
                            echo "                        <div class=\"rm-menu-list-item-child-links-landings\">
                            <ul>
                                ";
                            // line 252
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 252));
                            foreach ($context['_seq'] as $context["_key"] => $context["oct_pages"]) {
                                // line 253
                                echo "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["oct_pages"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["oct_page"]) {
                                    // line 254
                                    echo "        \t\t\t\t\t\t\t\t";
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 254))) {
                                        // line 255
                                        echo "        \t\t\t\t\t\t\t\t<li class=\"d-flex flex-column align-items-start\">
        \t\t\t\t\t\t\t\t\t<strong>";
                                        // line 256
                                        echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_group", [], "any", false, false, false, 256)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[($context["language_id"] ?? null)] ?? null) : null);
                                        echo "</strong>
        \t\t\t\t\t\t\t\t\t";
                                        // line 257
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_page"], "page_links", [], "any", false, false, false, 257));
                                        foreach ($context['_seq'] as $context["_key"] => $context["page_link"]) {
                                            // line 258
                                            echo "                                                <a href=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["page_link"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[($context["language_id"] ?? null)] ?? null) : null), "link", [], "any", false, false, false, 258);
                                            echo "\" title=\"";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["page_link"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 258);
                                            echo "\">";
                                            echo twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["page_link"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[($context["language_id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 258);
                                            echo "</a>
        \t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page_link'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 260
                                        echo "        \t\t\t\t\t\t\t\t</li>
        \t\t\t\t\t\t\t\t";
                                    }
                                    // line 262
                                    echo "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_page'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 263
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_pages'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 264
                            echo "                            </ul>
                        </div>
                        ";
                        }
                        // line 267
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 267)) {
                            // line 268
                            echo "                        <div class=\"rm-menu-list-item-child-links-categories row w-100\">
                            ";
                            // line 269
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 269));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 270
                                echo "                            <div class=\"rm-menu-list-item-child-links-categories-item ";
                                if (twig_get_attribute($this->env, $this->source, $context["oct_category"], "oct_pages", [], "any", false, false, false, 270)) {
                                    echo "col-4";
                                } else {
                                    echo "col-3";
                                }
                                echo " d-flex flex-column align-items-start\">
                                <a href=\"";
                                // line 271
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 271);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 271);
                                echo "\" class=\"rm-menu-list-item-child-links-categories-item-title";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 271)) {
                                    echo " d-flex flex-column w-100 text-center align-items-center";
                                }
                                echo "\">
                                    ";
                                // line 272
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 272)) {
                                    // line 273
                                    echo "                                        <img class=\"mb-4\" src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 273);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "name", [], "any", false, false, false, 273);
                                    echo "\" width=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "width", [], "any", false, false, false, 273);
                                    echo "\" height=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["oct_category"], "height", [], "any", false, false, false, 273);
                                    echo "\" />
                                    ";
                                }
                                // line 275
                                echo "                                    <span>";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 275);
                                echo "</span>
                                </a>
                                ";
                                // line 277
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 277)) {
                                    // line 278
                                    echo "                                    ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 278));
                                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                        // line 279
                                        echo "                                        <a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 279);
                                        echo "\" title=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 279);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 279);
                                        echo "</a>
                                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 281
                                    echo "                                    <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 281);
                                    echo "\" class=\"see-all\" title=\"";
                                    echo ($context["text_see_all_links"] ?? null);
                                    echo "\">";
                                    echo ($context["text_see_all_links"] ?? null);
                                    echo "</a>
                                ";
                                }
                                // line 283
                                echo "                            </div>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 285
                            echo "                        </div>
                        ";
                        }
                        // line 287
                        echo "                    </div>
                    ";
                    }
                    // line 289
                    echo "                </div>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 290
$context["oct_category"], "children", [], "any", false, false, false, 290) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 290) == "oct_blogcategory"))) {
                    // line 291
                    echo "                <div class=\"rm-menu-list-item-child\">
                    <ul class=\"rm-menu-list list-unstyled\">
                        ";
                    // line 293
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 293));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 294
                        echo "                        <li class=\"rm-menu-list-item\">
                            <div class=\"d-flex align-items-center justify-content-between\">
                                <a href=\"";
                        // line 296
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 296);
                        echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                    <span class=\"rm-menu-list-item-name\">";
                        // line 297
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 297);
                        echo "</span>
                                </a>
                                ";
                        // line 299
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 299)) {
                            // line 300
                            echo "                                    <span class=\"rm-menu-list-item-chevron\"></span>
                                ";
                        }
                        // line 302
                        echo "                            </div>
                            ";
                        // line 303
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 303)) {
                            // line 304
                            echo "                            <div class=\"rm-menu-list-item-child rm-menu-list-item-child-2\">
                                <ul class=\"rm-menu-list list-unstyled\">
                                    ";
                            // line 306
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 306));
                            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                                // line 307
                                echo "                                    <li class=\"rm-menu-list-item\">
                                        <a href=\"";
                                // line 308
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "href", [], "any", false, false, false, 308);
                                echo "\" class=\"rm-menu-list-item-link d-flex align-items-center\">
                                            <span class=\"rm-menu-list-item-name\">";
                                // line 309
                                echo twig_get_attribute($this->env, $this->source, $context["ch"], "name", [], "any", false, false, false, 309);
                                echo "</span>
                                        </a>
                                    </li>
                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 313
                            echo "                                </ul>
                            </div>
                            ";
                        }
                        // line 316
                        echo "                        </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 318
                    echo "                    </ul>
                </div>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 320
$context["oct_category"], "children", [], "any", false, false, false, 320) && (twig_get_attribute($this->env, $this->source, $context["oct_category"], "type", [], "any", false, false, false, 320) == "manufacturer"))) {
                    // line 321
                    echo "                <div class=\"rm-menu-list-item-child\">
                    <div class=\"rm-menu-list-item-child-brands d-flex flex-wrap\">
                        ";
                    // line 323
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["oct_category"], "children", [], "any", false, false, false, 323));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 324
                        echo "                        <div class=\"rm-menu-list-item-child-brands-item\">
                            <a href=\"";
                        // line 325
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 325);
                        echo "\" class=\"d-flex flex-column align-items-center\">
                                ";
                        // line 326
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 326)) {
                            // line 327
                            echo "                                    <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "oct_image", [], "any", false, false, false, 327);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 327);
                            echo "\" class=\"img-fluid\" width=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "width", [], "any", false, false, false, 327);
                            echo "\" height=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "height", [], "any", false, false, false, 327);
                            echo "\" />
                                ";
                        }
                        // line 329
                        echo "                                <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 329);
                        echo "</span>
                            </a>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 333
                    echo "                    </div>
                </div>
                ";
                }
                // line 336
                echo "            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "        </ul>
    </nav>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/menu/oct_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 338,  1070 => 336,  1065 => 333,  1054 => 329,  1042 => 327,  1040 => 326,  1036 => 325,  1033 => 324,  1029 => 323,  1025 => 321,  1023 => 320,  1019 => 318,  1012 => 316,  1007 => 313,  997 => 309,  993 => 308,  990 => 307,  986 => 306,  982 => 304,  980 => 303,  977 => 302,  973 => 300,  971 => 299,  966 => 297,  962 => 296,  958 => 294,  954 => 293,  950 => 291,  948 => 290,  945 => 289,  941 => 287,  937 => 285,  930 => 283,  920 => 281,  907 => 279,  902 => 278,  900 => 277,  894 => 275,  882 => 273,  880 => 272,  870 => 271,  861 => 270,  857 => 269,  854 => 268,  851 => 267,  846 => 264,  840 => 263,  834 => 262,  830 => 260,  817 => 258,  813 => 257,  809 => 256,  806 => 255,  803 => 254,  798 => 253,  794 => 252,  790 => 250,  788 => 249,  785 => 248,  783 => 247,  780 => 246,  775 => 243,  769 => 242,  765 => 240,  752 => 238,  748 => 237,  744 => 236,  741 => 235,  738 => 234,  734 => 233,  730 => 231,  727 => 230,  720 => 228,  715 => 225,  710 => 222,  704 => 221,  700 => 219,  687 => 217,  683 => 216,  679 => 215,  676 => 214,  673 => 213,  669 => 212,  665 => 210,  662 => 209,  655 => 207,  650 => 204,  645 => 201,  639 => 200,  635 => 198,  622 => 196,  618 => 195,  614 => 194,  611 => 193,  608 => 192,  604 => 191,  600 => 189,  597 => 188,  587 => 184,  583 => 183,  580 => 182,  576 => 181,  572 => 179,  570 => 178,  567 => 177,  563 => 175,  561 => 174,  556 => 172,  552 => 171,  548 => 169,  544 => 168,  540 => 166,  538 => 165,  535 => 164,  531 => 162,  529 => 161,  524 => 159,  520 => 158,  516 => 156,  512 => 155,  509 => 154,  507 => 153,  504 => 152,  501 => 151,  497 => 149,  493 => 147,  489 => 145,  482 => 143,  472 => 141,  459 => 139,  454 => 138,  452 => 137,  444 => 136,  435 => 135,  431 => 134,  428 => 133,  425 => 132,  420 => 129,  414 => 128,  410 => 126,  397 => 124,  393 => 123,  389 => 122,  386 => 121,  383 => 120,  379 => 119,  375 => 117,  373 => 116,  370 => 115,  368 => 114,  365 => 113,  360 => 110,  354 => 109,  350 => 107,  337 => 105,  333 => 104,  329 => 103,  326 => 102,  323 => 101,  319 => 100,  315 => 98,  312 => 97,  305 => 95,  300 => 92,  295 => 89,  289 => 88,  285 => 86,  272 => 84,  268 => 83,  264 => 82,  261 => 81,  258 => 80,  254 => 79,  250 => 77,  247 => 76,  240 => 74,  235 => 71,  230 => 68,  224 => 67,  220 => 65,  207 => 63,  203 => 62,  199 => 61,  196 => 60,  193 => 59,  189 => 58,  185 => 56,  182 => 55,  172 => 51,  168 => 50,  165 => 49,  161 => 48,  157 => 46,  155 => 45,  152 => 44,  148 => 42,  146 => 41,  141 => 39,  137 => 38,  133 => 36,  129 => 35,  125 => 33,  123 => 32,  120 => 31,  116 => 29,  114 => 28,  109 => 26,  105 => 25,  101 => 23,  97 => 22,  94 => 21,  92 => 20,  89 => 19,  87 => 18,  84 => 17,  80 => 15,  78 => 14,  72 => 12,  60 => 10,  58 => 9,  52 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/menu/oct_menu.twig", "");
    }
}
