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

/* oct_remarket/template/extension/module/account.twig */
class __TwigTemplate_29721ab13c24ba952a1d7c5a98000b3f7e5b50dbefba4c89c8e3f5ea646c2651 extends \Twig\Template
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
        echo "<div class=\"rm-column-title\">";
        echo ($context["heading_title"] ?? null);
        echo "</div>
<ul class=\"rm-account-list list-unstyled\">
    ";
        // line 3
        if (($context["logged"] ?? null)) {
            // line 4
            echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 5
            echo ($context["account"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-001\" alt=\"\">
                <span>";
            // line 7
            echo ($context["text_account"] ?? null);
            echo "</span>
            </a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 11
            echo ($context["edit"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-014\" alt=\"\">
                <span>";
            // line 13
            echo ($context["text_edit"] ?? null);
            echo "</span>
            </a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 17
            echo ($context["password"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-002\" alt=\"\">
                <span>";
            // line 19
            echo ($context["text_password"] ?? null);
            echo "</span>
            </a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 23
            echo ($context["address"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-003\" alt=\"\">
                <span>";
            // line 25
            echo ($context["text_address"] ?? null);
            echo "</span>
            </a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 29
            echo ($context["wishlist"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-004\" alt=\"\">
                <span>";
            // line 31
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 34
            echo ($context["order"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-006\" alt=\"\">
                <span>";
            // line 36
            echo ($context["text_order"] ?? null);
            echo "</span></a>
        </li>
        ";
            // line 38
            if ((array_key_exists("download_view", $context) && ($context["download_view"] ?? null))) {
                // line 39
                echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 40
                echo ($context["download"] ?? null);
                echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-007\" alt=\"\">
                <span>";
                // line 42
                echo ($context["text_download"] ?? null);
                echo "</span></a>
        </li>
        ";
            }
            // line 45
            echo "        ";
            if ((array_key_exists("recurring_view", $context) && ($context["recurring_view"] ?? null))) {
                // line 46
                echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 47
                echo ($context["recurring"] ?? null);
                echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-012\" alt=\"\">
                <span>";
                // line 49
                echo ($context["text_recurring"] ?? null);
                echo "</span></a>
        </li>
        ";
            }
            // line 52
            echo "        ";
            if ((array_key_exists("reward_view", $context) && ($context["reward_view"] ?? null))) {
                // line 53
                echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 54
                echo ($context["reward"] ?? null);
                echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-008\" alt=\"\">
                <span>";
                // line 56
                echo ($context["text_reward"] ?? null);
                echo "</span></a>
        </li>
        ";
            }
            // line 59
            echo "        ";
            if ((array_key_exists("return_view", $context) && ($context["return_view"] ?? null))) {
                // line 60
                echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 61
                echo ($context["return"] ?? null);
                echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-009\" alt=\"\">
                <span>";
                // line 63
                echo ($context["text_return"] ?? null);
                echo "</span></a>
        </li>
        ";
            }
            // line 66
            echo "        ";
            if ((array_key_exists("transaction_view", $context) && ($context["transaction_view"] ?? null))) {
                // line 67
                echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 68
                echo ($context["transaction"] ?? null);
                echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-011\" alt=\"\">
                <span>";
                // line 70
                echo ($context["text_transaction"] ?? null);
                echo "</span></a>
        </li>
        ";
            }
            // line 73
            echo "        ";
            if ((array_key_exists("newsletter_view", $context) && ($context["newsletter_view"] ?? null))) {
                // line 74
                echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                // line 75
                echo ($context["newsletter"] ?? null);
                echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-005\" alt=\"\">
                <span>";
                // line 77
                echo ($context["text_newsletter"] ?? null);
                echo "</span></a>
        </li>
        ";
            }
            // line 80
            echo "        ";
            if ((array_key_exists("affiliate_view", $context) && ($context["affiliate_view"] ?? null))) {
                // line 81
                echo "        ";
                if ( !($context["tracking"] ?? null)) {
                    // line 82
                    echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                    // line 83
                    echo ($context["affiliate"] ?? null);
                    echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-010\" alt=\"\">
                    <span>";
                    // line 85
                    echo ($context["text_oct_affiliate"] ?? null);
                    echo "</span></a>
            </li>
        ";
                } else {
                    // line 88
                    echo "            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                    // line 89
                    echo ($context["affiliate"] ?? null);
                    echo "\">
                    <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-010\" alt=\"\">
                    <span>";
                    // line 91
                    echo ($context["text_oct_affiliate"] ?? null);
                    echo "</span></a>
            </li>
            <li class=\"rm-account-list-item\">
                <a class=\"rm-account-link d-flex align-items-center\" href=\"";
                    // line 94
                    echo ($context["tracking"] ?? null);
                    echo "\">
                    <i class=\"fas fa-code\"></i>
                    <span>";
                    // line 96
                    echo ($context["text_oct_tracking"] ?? null);
                    echo "</span></a>
            </li>
        ";
                }
                // line 99
                echo "        ";
            }
            // line 100
            echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 101
            echo ($context["logout"] ?? null);
            echo "\">
                <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--account-icon-013\" alt=\"\">
                <span>";
            // line 103
            echo ($context["text_logout"] ?? null);
            echo "</span></a>
        </li>
    ";
        } else {
            // line 106
            echo "        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 107
            echo ($context["login"] ?? null);
            echo "\">
                <span>";
            // line 108
            echo ($context["text_login"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 111
            echo ($context["register"] ?? null);
            echo "\">
                <span>";
            // line 112
            echo ($context["text_register"] ?? null);
            echo "</span></a>
        </li>
        <li class=\"rm-account-list-item\">
            <a class=\"rm-account-link d-flex align-items-center\" href=\"";
            // line 115
            echo ($context["forgotten"] ?? null);
            echo "\">
                <span>";
            // line 116
            echo ($context["text_forgotten"] ?? null);
            echo "</span></a>
        </li>
    ";
        }
        // line 119
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 119,  307 => 116,  303 => 115,  297 => 112,  293 => 111,  287 => 108,  283 => 107,  280 => 106,  274 => 103,  269 => 101,  266 => 100,  263 => 99,  257 => 96,  252 => 94,  246 => 91,  241 => 89,  238 => 88,  232 => 85,  227 => 83,  224 => 82,  221 => 81,  218 => 80,  212 => 77,  207 => 75,  204 => 74,  201 => 73,  195 => 70,  190 => 68,  187 => 67,  184 => 66,  178 => 63,  173 => 61,  170 => 60,  167 => 59,  161 => 56,  156 => 54,  153 => 53,  150 => 52,  144 => 49,  139 => 47,  136 => 46,  133 => 45,  127 => 42,  122 => 40,  119 => 39,  117 => 38,  112 => 36,  107 => 34,  101 => 31,  96 => 29,  89 => 25,  84 => 23,  77 => 19,  72 => 17,  65 => 13,  60 => 11,  53 => 7,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/extension/module/account.twig", "");
    }
}
