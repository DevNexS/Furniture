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

/* oct_remarket/template/common/header.twig */
class __TwigTemplate_000f4b23d11208a14ce935199c7c9a812af0fdc0322a0efd55ff140db885f7b6 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"";
        if (($context["body_class"] ?? null)) {
            echo " class=\"body-product\"";
        }
        echo ">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <link rel=\"stylesheet\" href=\"https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css\" />
  <script src=\"https://cdn.tailwindcss.com\"></script>
  <script src=\"https://unpkg.com/flowbite@1.5.5/dist/flowbite.js\"></script>
<title>";
        // line 15
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 16
        if (((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "open_graph", [], "any", true, true, false, 16) && twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "open_graph", [], "any", false, false, false, 16)) &&  !twig_test_empty(($context["octOpenGraphs"] ?? null)))) {
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["octOpenGraphs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["octOpenGraph"]) {
                // line 18
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "content", [], "any", false, false, false, 18))) {
                    // line 19
                    echo "<meta property=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "property", [], "any", false, false, false, 19);
                    echo "\" content=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octOpenGraph"], "content", [], "any", false, false, false, 19);
                    echo "\" />
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octOpenGraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        if ((array_key_exists("oct_analytics_google_webmaster_code", $context) &&  !twig_test_empty(($context["oct_analytics_google_webmaster_code"] ?? null)))) {
            // line 24
            echo "<meta name=\"google-site-verification\" content=\"";
            echo ($context["oct_analytics_google_webmaster_code"] ?? null);
            echo "\" />
";
        }
        // line 26
        if ((array_key_exists("oct_analytics_yandex_webmaster_code", $context) &&  !twig_test_empty(($context["oct_analytics_yandex_webmaster_code"] ?? null)))) {
            // line 27
            echo "<meta name=\"yandex-verification\" content=\"";
            echo ($context["oct_analytics_yandex_webmaster_code"] ?? null);
            echo "\" />
";
        }
        // line 29
        if ((array_key_exists("oct_analytics_googletm_code", $context) &&  !twig_test_empty(($context["oct_analytics_googletm_code"] ?? null)))) {
            // line 30
            echo "<!-- Google Tag Manager -->
<script id=\"octGtm\">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','";
            // line 35
            echo ($context["oct_analytics_googletm_code"] ?? null);
            echo "');</script>
<!-- End Google Tag Manager -->
";
        }
        // line 38
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 39
        if (($context["robots"] ?? null)) {
            // line 40
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 42
        if (($context["description"] ?? null)) {
            // line 43
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 45
        if (($context["keywords"] ?? null)) {
            // line 46
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 48
        if (($context["oct_preloads"] ?? null)) {
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_preloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oct_preload"]) {
                // line 50
                echo "<link rel=\"preload\" as=\"image\" href=\"";
                echo $context["oct_preload"];
                echo "\">
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_preload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 54
            if ((array_key_exists("oct_preload_styles", $context) && ($context["oct_preload_styles"] ?? null))) {
                // line 55
                echo "<link rel=\"preload\" as=\"style\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 55);
                echo "\">
";
            }
            // line 57
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 57);
            echo "\" rel=\"stylesheet\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 57);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 60
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 63
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 63);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 63);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 66
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "<script";
        if ((((array_key_exists("oct_footer_scripts", $context) && ($context["oct_footer_scripts"] ?? null)) && array_key_exists("oct_minify", $context)) && ($context["oct_minify"] ?? null))) {
            echo " id=\"dataFonts\"";
        }
        echo ">
    let octFonts = localStorage.getItem('octFonts');
    if (octFonts !== null) {
        var octHead  = document.getElementsByTagName('head')[0];
        var octLink  = document.createElement('link');
        octLink.rel  = 'stylesheet';
        octLink.type = 'text/css';
        octLink.href = location.protocol + '//' + location.host + '/catalog/view/theme/oct_remarket/stylesheet/oct-fonts.css';
        octLink.media = 'all';
        octHead.appendChild(octLink);
    }
</script>
<style>
@import url('https://fonts.cdnfonts.com/css/formular');

.hover-image-scale {
  overflow: hidden;
}
.hover-image-scale img {
  transition: 1s;
  display: block; 
}
.hover-image-scale img:hover {
  transform: scale(1.2); 
}
.sticky {
  position: sticky;
  top: 0;
  min-height: 2em;
  background: white;
}

#centerLayer {
    margin-left: 23%; 
    width: 15%; 
    margin-top: 22%;
    font-size: 40px;
    font-weight: 300;
}

#centerLayer3 {
    margin-left: 23%; 
    width: 15%; 
    margin-top: 30%;
    font-size: 40px;
    font-weight: 300;
}

#font-banner {
    font-size: 35px;
    font-weight: 400;
}
</style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'Alpha': ['Alpha', 'sans-serif'],
            'Formular': ['Formular', 'sans-serif'],
          },
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>

<body>
";
        // line 139
        if ((array_key_exists("oct_analytics_googletm_code", $context) &&  !twig_test_empty(($context["oct_analytics_googletm_code"] ?? null)))) {
            // line 140
            echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 141
            echo ($context["oct_analytics_googletm_code"] ?? null);
            echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
";
        }
        // line 144
        if ((twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "status", [], "any", true, true, false, 144) && twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "status", [], "any", false, false, false, 144))) {
            // line 145
            echo "<div class=\"oct-fixed-bar fixed-";
            echo ($context["bar_position"] ?? null);
            echo " d-none d-lg-block\">
    ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_cart", [], "any", true, true, false, 146) && twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_cart", [], "any", false, false, false, 146))) {
                // line 147
                echo "    <div onclick=\"";
                if ((array_key_exists("oct_popup_cart_status", $context) && ($context["oct_popup_cart_status"] ?? null))) {
                    echo "octPopupCart();";
                } else {
                    echo "location = '";
                    echo ($context["shopping_cart"] ?? null);
                    echo "';";
                }
                echo "\" class=\"oct-fixed-bar-item oct-fixed-bar-item-cart\" title=\"";
                echo ($context["fixed_bar_cart"] ?? null);
                echo "\">
        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-bar-cart\" alt=\"";
                // line 148
                echo ($context["fixed_bar_cart"] ?? null);
                echo "\" width=\"24\" height=\"24\">
        <span class=\"oct-fixed-bar-quantity oct-fixed-bar-quantity-cart\">";
                // line 149
                echo ($context["cart_total_bar"] ?? null);
                echo "</span>
    </div>
    ";
            }
            // line 152
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_compare", [], "any", true, true, false, 152) && twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_compare", [], "any", false, false, false, 152))) {
                // line 153
                echo "    <a href=\"";
                echo ($context["compare_link"] ?? null);
                echo "\" class=\"oct-fixed-bar-item oct-fixed-bar-item-compare\" title=\"";
                echo ($context["fixed_bar_compare"] ?? null);
                echo "\">
        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-bar-compare\" alt=\"";
                // line 154
                echo ($context["fixed_bar_compare"] ?? null);
                echo "\" width=\"24\" height=\"24\">
        <span class=\"oct-fixed-bar-quantity oct-fixed-bar-compare-quantity\">";
                // line 155
                echo ($context["compare_total"] ?? null);
                echo "</span>
    </a>
    ";
            }
            // line 158
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_wishlist", [], "any", true, true, false, 158) && twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_wishlist", [], "any", false, false, false, 158))) {
                // line 159
                echo "    <a href=\"";
                echo ($context["wishlist_link"] ?? null);
                echo "\" class=\"oct-fixed-bar-item oct-fixed-bar-item-wishlist\" title=\"";
                echo ($context["fixed_bar_wishlist"] ?? null);
                echo "\">
        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-bar-wishlist\" alt=\"";
                // line 160
                echo ($context["fixed_bar_wishlist"] ?? null);
                echo "\" width=\"24\" height=\"20\">
        <span class=\"oct-fixed-bar-quantity oct-fixed-bar-wishlist-quantity\">";
                // line 161
                echo ($context["wishlist_total"] ?? null);
                echo "</span>
    </a>
    ";
            }
            // line 164
            echo "    ";
            if ((array_key_exists("product_views_count", $context) && ($context["product_views_count"] ?? null))) {
                // line 165
                echo "    <div onclick=\"rmSidebar('";
                echo ($context["oct_product_views"] ?? null);
                echo "', 'viewed');\" class=\"oct-fixed-bar-item oct-fixed-bar-item-viewed\" title=\"";
                echo ($context["oct_product_views"] ?? null);
                echo "\">
        <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-bar-viewed\" alt=\"";
                // line 166
                echo ($context["oct_product_views"] ?? null);
                echo "\" width=\"24\" height=\"24\">
        <span class=\"oct-fixed-bar-quantity\">";
                // line 167
                echo ($context["product_views_count"] ?? null);
                echo "</span>
    </div>
    ";
            }
            // line 170
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_account", [], "any", true, true, false, 170) && twig_get_attribute($this->env, $this->source, ($context["oct_bar_data"] ?? null), "show_account", [], "any", false, false, false, 170))) {
                // line 171
                echo "        ";
                if (($context["account_link"] ?? null)) {
                    // line 172
                    echo "        <a href=\"";
                    echo ($context["account_link"] ?? null);
                    echo "\" class=\"oct-fixed-bar-item oct-fixed-bar-item-viewed\" title=\"";
                    echo ($context["text_account"] ?? null);
                    echo "\">
            <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-bar-account\" alt=\"";
                    // line 173
                    echo ($context["text_account"] ?? null);
                    echo "\" width=\"20\" height=\"22\">
        </a>
        ";
                } else {
                    // line 176
                    echo "        <div onclick=\"octPopupLogin();\" class=\"oct-fixed-bar-item oct-fixed-bar-item-viewed\" title=\"";
                    echo ($context["text_account"] ?? null);
                    echo "\">
            <img src=\"catalog/view/theme/oct_remarket/img/sprite.svg#include--fixed-bar-account\" alt=\"";
                    // line 177
                    echo ($context["text_account"] ?? null);
                    echo "\" width=\"20\" height=\"22\">
        </div>
        ";
                }
                // line 180
                echo "    ";
            }
            // line 181
            echo "</div>
";
        }
        // line 183
        echo ($context["oct_mobile_sidebar"] ?? null);
        echo "
<div id=\"rm_sidebar\" class=\"rm-sidebar\">
    <div class=\"rm-sidebar-content\">
        <div class=\"rm-sidebar-title d-flex alig-items-center justify-content-between\">
            <span class=\"rm-sidebar-title-text\">";
        // line 187
        echo ($context["oct_menu"] ?? null);
        echo "</span>
            <span class=\"rm-sidebar-title-close modal-close\">
                <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
            </span>
        </div>
        <div id=\"rm_sidebar_content\"></div>
    </div>
</div>
";
        // line 196
        if (((array_key_exists("oct_information_bar_value", $context) &&  !twig_test_empty(($context["oct_information_bar_value"] ?? null))) && ($context["oct_information_bar_value"] ?? null))) {
            // line 197
            echo "<div id=\"oct-infobar\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 d-flex align-items-center justify-content-between flex-column flex-md-row\">
                <div class=\"oct-infobar-text\">";
            // line 201
            echo ($context["text_oct_information_bar"] ?? null);
            echo "</div>
                <button type=\"button\" aria-label=\"Information\" id=\"oct-infobar-btn\" class=\"mt-3 mt-md-0\">";
            // line 202
            echo ($context["oct_info_bar_close"] ?? null);
            echo "</button>
            </div>
        </div>
    </div>
</div>

<script>
\$('#oct-infobar-btn').on('click', function () {
    \$('#oct-infobar').addClass('hidden');
    const date = new Date('";
            // line 211
            echo ($context["oct_information_bar_day_now"] ?? null);
            echo "'.replace(/-/g, \"/\"));
    date.setTime(date.getTime() + (";
            // line 212
            echo ($context["oct_info_max_day"] ?? null);
            echo " * 24 * 60 * 60 * 1000));
    document.cookie = '";
            // line 213
            echo ($context["oct_information_bar_value"] ?? null);
            echo "=1; path=/; expires=' + date.toUTCString();
});
</script>

<style>
#oct-infobar {background:";
            // line 218
            echo ($context["oct_information_bar_background"] ?? null);
            echo ";}
.oct-infobar-text {color:";
            // line 219
            echo ($context["oct_information_bar_color_text"] ?? null);
            echo ";}
.oct-infobar-text a {color:";
            // line 220
            echo ($context["oct_information_bar_color_url"] ?? null);
            echo ";}
#oct-infobar-btn {background:";
            // line 221
            echo ($context["oct_information_bar_background_button"] ?? null);
            echo ";color:";
            echo ($context["oct_information_bar_color_text_button"] ?? null);
            echo ";}
#oct-infobar-btn:hover {background:";
            // line 222
            echo ($context["oct_information_bar_background_button_hover"] ?? null);
            echo ";color:";
            echo ($context["oct_information_bar_color_text_button_hover"] ?? null);
            echo ";}
</style>
";
        }
        // line 225
        if ((((twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "header_cur", [], "any", true, true, false, 225) || twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "header_lang", [], "any", true, true, false, 225)) || twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "header_account", [], "any", true, true, false, 225)) || twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "header_menu", [], "any", true, true, false, 225))) {
            // line 226
            echo "<nav id=\"top\" class=\"top-nav d-none d-lg-block\">
\t<div class=\"container d-flex justify-content-between\">
\t  \t";
            // line 228
            if ((array_key_exists("header_informations", $context) &&  !twig_test_empty(($context["header_informations"] ?? null)))) {
                // line 229
                echo "\t\t<ul class=\"top-nav-info-list list-unstyled d-flex align-items-center text-uppercase\">
\t\t\t";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_informations"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
                    // line 231
                    echo "\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["header_link"], "href", [], "any", false, false, false, 231);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["header_link"], "title", [], "any", false, false, false, 231);
                    echo "</a></li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "\t\t</ul>
\t\t";
            }
            // line 235
            echo "\t\t<div class=\"top-nav-account-links list-unstyled d-flex\">
\t\t\t";
            // line 236
            echo ($context["language"] ?? null);
            echo "
\t\t\t";
            // line 237
            echo ($context["currency"] ?? null);
            echo "
            ";
            // line 238
            if (twig_get_attribute($this->env, $this->source, ($context["oct_remarket_data"] ?? null), "header_account", [], "any", true, true, false, 238)) {
                // line 239
                echo "\t\t\t<div class=\"top-nav-account-links-item rm-dropdown-box\">
\t\t\t\t";
                // line 240
                if (($context["logged"] ?? null)) {
                    // line 241
                    echo "\t\t\t\t<span title=\"";
                    echo ($context["text_account"] ?? null);
                    echo "\" class=\"rm-dropdown-toggle d-flex align-items-center\">";
                    echo ($context["text_account"] ?? null);
                    echo "</span>
                <div class=\"rm-dropdown\">
                    <div class=\"rm-dropdown-inner\">
                        <ul class=\"list-unstyled\">
        \t\t            <li><a href=\"";
                    // line 245
                    echo ($context["account"] ?? null);
                    echo "\">";
                    echo ($context["text_account"] ?? null);
                    echo "</a></li>
        \t\t            <li><a href=\"";
                    // line 246
                    echo ($context["order"] ?? null);
                    echo "\">";
                    echo ($context["text_order"] ?? null);
                    echo "</a></li>
        \t\t            <li><a href=\"";
                    // line 247
                    echo ($context["logout"] ?? null);
                    echo "\">";
                    echo ($context["text_logout"] ?? null);
                    echo "</a></li>
        \t\t\t\t</ul>
                    </div>
                </div>
\t\t\t\t";
                } else {
                    // line 252
                    echo "\t\t\t\t<span onclick=\"octPopupLogin();\" title=\"";
                    echo ($context["text_account"] ?? null);
                    echo "\" class=\"d-flex align-items-center\" role=\"button\" aria-haspopup=\"true\">";
                    echo ($context["text_account"] ?? null);
                    echo "</span>
\t\t\t\t";
                }
                // line 254
                echo "\t        </div>
            ";
            }
            // line 256
            echo "\t\t</div>
\t</div>
</nav>

";
        }
        // line 261
        echo "<header class=\"bg-white text-gray-600 work-sans leading-normal text-base tracking-normal mb-2\">
  ";
        // line 263
        echo "  <div class=\"w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-2.5 md:py-0 \">
      <a class=\"flex items-center tracking-wide no-underline hover:no-underline font-bold text-black text-xl \" href=\"#\">
         RPGROUP
      </a>
      <div class=\"flex items-center md:order-1\">
          <button data-collapse-toggle=\"mega-menu\" type=\"button\" class=\"inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200\" aria-controls=\"mega-menu\" aria-expanded=\"false\">
              <span class=\"sr-only\">Open main menu</span>
              <svg aria-hidden=\"true\" class=\"w-6 h-6\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z\" clip-rule=\"evenodd\"></path></svg>
          </button>
      </div>
      <div id=\"mega-menu\" class=\"hidden justify-between items-center w-full text-sm md:flex md:w-auto md:order-1\">
          <ul class=\"flex flex-col mt-1 font-medium md:flex-row md:space-x-8 md:mt-0\">
              <li>
                  <a href=\"/\" class=\"font-Formular text-[16px] block py-2 pr-3 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800\" aria-current=\"page\">Main</a>
              </li>
              <li>
                  <button id=\"mega-menu-dropdown-button\" data-dropdown-toggle=\"mega-menu-dropdown\" class=\"font-Formular flex text-[16px] justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800\">
                      Furniture <svg aria-hidden=\"true\" class=\"ml-1 w-5 h-5 md:w-4 md:h-4\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>
                  </button>
                  <div id=\"mega-menu-dropdown\" class=\"grid hidden absolute z-10 grid-cols-3 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md md:grid-cols-3\">
                      <div class=\"p-4 pb-0 text-gray-900 md:pb-4 dark:text-white\">
                          <ul class=\"space-y-4\" aria-labelledby=\"mega-menu-dropdown-button\">
                              <li>
                                  <a href=\"/business.html\" class=\"font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                      For business
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"p-4 pb-0 text-gray-900 md:pb-4 dark:text-white\">
                          <ul class=\"space-y-4\">
                              <li>
                                  <a href=\"/turnkey.html\" class=\"font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                      Turnkey 
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"p-4 text-gray-900 dark:text-white\">
                          <ul class=\"space-y-4\">
                              <li>
                                  <a href=\"/modular.html\" class=\"font-Formular text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                      Doors
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </li>
              <li>
                  <a href=\"/services.html\" class=\"font-Formular text-[16px] block py-2 pr-3 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800\">Services</a>
              </li>
              <li>
                  <a href=\"/services.html\" class=\"font-Formular block py-2 text-[16px] pr-3 pl-3 text-rose-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-rose-800 md:dark:hover:text-rose-800\">Shop</a>
              </li>
              <li>
                  <a href=\"/info.html\" class=\"font-Formular text-[16px] block py-2 pr-3 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800\">Contact</a>
              </li>
              <li>
                <a href=\"/rules.html\" class=\"font-Formular text-[16px] block py-2 pr-3 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-rose-800 md:p-0 dark:text-gray-400 md:dark:hover:text-rose-800 dark:hover:text-rose-800\">Operating Instructions</a>
              </li>

              <div id=\"mega-menu\" class=\"justify-between items-center w-full text-sm md:flex md:w-auto md:order-1\">
                <ul class=\"flex flex-col font-medium md:flex-row md:space-x-8 md:mt-0\">
                    <li>
                        ";
        // line 329
        echo "                        ";
        // line 330
        echo "                        ";
        // line 331
        echo "                        <div id=\"mega-menu-dropdown-2\" class=\"grid hidden absolute z-10 grid-cols-1 w-auto text-sm bg-white rounded-lg border border-gray-100 shadow-md md:grid-cols-1\">
                            <div class=\"p-4 pb-0 text-gray-900 md:pb-4 dark:text-white\">
                                <ul class=\"space-y-4\" aria-labelledby=\"mega-menu-dropdown-button\">
                                    <li>
                                      <a href=\"/lv/index.html\" class=\"text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                            LV
                                     </a>                              
                                   </li>
                                   <li>
                                    <a href=\"/ru/index.html\" class=\"text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                          RU
                                   </a>                              
                                 </li>
                                 <li>
                                  <a href=\"/de/index.html\" class=\"text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                        DE
                                 </a>                              
                               </li>
                               <li>
                                <a href=\"/fr/index.html\" class=\"text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                      FR
                               </a>                              
                             </li>
                             <!-- <li>
                              <a href=\"#\" class=\"text-[15px] text-gray-500 dark:text-gray-400 hover:text-rose-800 dark:hover:text-rose-800\">
                                    FIN
                             </a>                              
                           </li> -->
                        </ul>
                </div>  
          </ul>
      </div>
  </div>
  <li class=\"col-md-2 d-lg-flex justify-content-center order-2 block\">
      ";
        // line 365
        echo ($context["cart"] ?? null);
        echo "
  </li>
</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 365,  711 => 331,  709 => 330,  707 => 329,  640 => 263,  637 => 261,  630 => 256,  626 => 254,  618 => 252,  608 => 247,  602 => 246,  596 => 245,  586 => 241,  584 => 240,  581 => 239,  579 => 238,  575 => 237,  571 => 236,  568 => 235,  564 => 233,  553 => 231,  549 => 230,  546 => 229,  544 => 228,  540 => 226,  538 => 225,  530 => 222,  524 => 221,  520 => 220,  516 => 219,  512 => 218,  504 => 213,  500 => 212,  496 => 211,  484 => 202,  480 => 201,  474 => 197,  472 => 196,  460 => 187,  453 => 183,  449 => 181,  446 => 180,  440 => 177,  435 => 176,  429 => 173,  422 => 172,  419 => 171,  416 => 170,  410 => 167,  406 => 166,  399 => 165,  396 => 164,  390 => 161,  386 => 160,  379 => 159,  376 => 158,  370 => 155,  366 => 154,  359 => 153,  356 => 152,  350 => 149,  346 => 148,  333 => 147,  331 => 146,  326 => 145,  324 => 144,  318 => 141,  315 => 140,  313 => 139,  236 => 68,  228 => 66,  224 => 65,  213 => 63,  209 => 62,  200 => 60,  196 => 59,  185 => 57,  179 => 55,  177 => 54,  173 => 53,  163 => 50,  159 => 49,  157 => 48,  151 => 46,  149 => 45,  143 => 43,  141 => 42,  135 => 40,  133 => 39,  128 => 38,  122 => 35,  115 => 30,  113 => 29,  107 => 27,  105 => 26,  99 => 24,  97 => 23,  84 => 19,  82 => 18,  78 => 17,  76 => 16,  72 => 15,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/header.twig", "");
    }
}
