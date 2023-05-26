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

/* oct_remarket/template/information/contact.twig */
class __TwigTemplate_73919ce68801c43b0b8842e4cbc1e138d17494e0e9756b9a958ee8144988bfaa extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
\t";
        // line 3
        echo ($context["oct_breadcrumbs"] ?? null);
        echo "
\t<div class=\"content-top-box\">";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "</div>
\t<main>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 rm-page-title\">
\t\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"content\">
\t\t";
        // line 12
        if (((((array_key_exists("oct_contact_image", $context) || array_key_exists("contact_address", $context)) || array_key_exists("contact_open", $context)) || array_key_exists("contact_telephone", $context)) || array_key_exists("contact_map", $context))) {
            // line 13
            echo "\t\t<div class=\"row no-gutters rm-contact-location\">
\t\t\t";
            // line 14
            if ((array_key_exists("oct_contact_image", $context) && ($context["oct_contact_image"] ?? null))) {
                // line 15
                echo "\t\t\t<div class=\"col-lg-6 col-xl-3\">
\t\t\t\t<img src=\"";
                // line 16
                echo ($context["oct_contact_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["store"] ?? null);
                echo "\" class=\"img-fluid d-none d-lg-block\">
\t\t\t</div>
\t\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"col-lg-6";
            if ((array_key_exists("oct_contact_image", $context) && ($context["oct_contact_image"] ?? null))) {
                echo " col-xl-4";
            } else {
                echo " col-xl-7";
            }
            echo "\">
\t\t\t\t<div class=\"rm-contact-location-info\">
\t\t\t\t\t<div class=\"rm-contact-location-store-title\">";
            // line 21
            echo ($context["store"] ?? null);
            echo "</div>
\t\t\t\t\t";
            // line 22
            if ((array_key_exists("contact_address", $context) && ($context["contact_address"] ?? null))) {
                // line 23
                echo "\t\t\t\t\t<div class=\"rm-contact-location-address\">";
                echo ($context["contact_address"] ?? null);
                echo "</div>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t";
            // line 26
            if ((array_key_exists("contact_open", $context) && ($context["contact_open"] ?? null))) {
                // line 27
                echo "\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t<div class=\"rm-contact-location-title\">";
                // line 28
                echo ($context["oct_working_hours"] ?? null);
                echo ":</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contact_open"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<li>";
                    echo $context["open"];
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t";
            if ((array_key_exists("contact_telephone", $context) && ($context["contact_telephone"] ?? null))) {
                // line 37
                echo "\t\t\t\t\t\t<div class=\"col-xl-6 mt-4 mt-xl-0\">
\t\t\t\t\t\t\t<div class=\"rm-contact-location-title\">";
                // line 38
                echo ($context["oct_telephones"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["contact_telephone"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["telephone"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<li class=\"rm-contact-location-phone\"><a href=\"tel:";
                    echo twig_replace_filter($context["telephone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                    echo "\">";
                    echo $context["telephone"];
                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['telephone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 49
            if (array_key_exists("contact_map", $context)) {
                // line 50
                echo "\t\t\t<div class=\"col-xl-5\">
\t\t\t\t";
                // line 51
                echo ($context["contact_map"] ?? null);
                echo "
\t\t\t</div>
\t\t\t";
            }
            // line 54
            echo "\t\t</div>
\t\t";
        }
        // line 56
        echo "\t\t";
        if (($context["oct_locations"] ?? null)) {
            // line 57
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 58
                echo "\t\t<div class=\"row no-gutters rm-contact-location\">
\t\t\t";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["location"], "thumb", [], "any", true, true, false, 59) && twig_get_attribute($this->env, $this->source, $context["location"], "thumb", [], "any", false, false, false, 59))) {
                    // line 60
                    echo "\t\t\t<div class=\"col-lg-6 col-xl-3\">
\t\t\t\t<img src=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "thumb", [], "any", false, false, false, 61);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "title", [], "any", false, false, false, 61);
                    echo "\" class=\"img-fluid d-none d-lg-block\">
\t\t\t</div>
\t\t\t";
                }
                // line 64
                echo "\t\t\t<div class=\"col-lg-6";
                if ((twig_get_attribute($this->env, $this->source, $context["location"], "thumb", [], "any", true, true, false, 64) && twig_get_attribute($this->env, $this->source, $context["location"], "thumb", [], "any", false, false, false, 64))) {
                    echo " col-xl-4";
                } else {
                    echo " col-xl-7";
                }
                echo "\">
\t\t\t\t<div class=\"rm-contact-location-info\">
\t\t\t\t\t<div class=\"rm-contact-location-store-title\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["location"], "title", [], "any", false, false, false, 66);
                echo "</div>
\t\t\t\t\t";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", true, true, false, 67) && twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 67))) {
                    // line 68
                    echo "\t\t\t\t\t<div class=\"rm-contact-location-address\">";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 68);
                    echo "</div>
\t\t\t\t\t";
                }
                // line 70
                echo "\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t";
                // line 71
                if ((twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", true, true, false, 71) && twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 71))) {
                    // line 72
                    echo "\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t<div class=\"rm-contact-location-title\">";
                    // line 73
                    echo ($context["oct_working_hours"] ?? null);
                    echo ":</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t<li>";
                        echo $context["open"];
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", true, true, false, 81) && twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", false, false, false, 81))) {
                    // line 82
                    echo "\t\t\t\t\t\t<div class=\"col-xl-6 mt-4 mt-xl-0\">
\t\t\t\t\t\t\t<div class=\"rm-contact-location-title\">";
                    // line 83
                    echo ($context["oct_telephones"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["location"], "phone", [], "any", false, false, false, 85));
                    foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t<li class=\"rm-contact-location-phone\"><a href=\"tel:";
                        echo twig_replace_filter($context["phone"], [" " => "", "-" => "", "(" => "", ")" => ""]);
                        echo "\">";
                        echo $context["phone"];
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["location"], "link", [], "any", true, true, false, 92) && twig_get_attribute($this->env, $this->source, $context["location"], "link", [], "any", false, false, false, 92))) {
                    // line 93
                    echo "\t\t\t\t\t<div class=\"rm-contact-location-title rm-contact-location-link\">";
                    echo ($context["oct_text_contact_site"] ?? null);
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "link", [], "any", false, false, false, 93);
                    echo "\">";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["location"], "link", [], "any", false, false, false, 93), ["https://" => "", "http://" => ""]);
                    echo "</a></div>
\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["location"], "map", [], "any", true, true, false, 97)) {
                    // line 98
                    echo "\t\t\t<div class=\"col-xl-5\">
\t\t\t\t";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "map", [], "any", false, false, false, 99);
                    echo "
\t\t\t</div>
\t\t\t";
                }
                // line 102
                echo "\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t";
        }
        // line 105
        echo "\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-12 col-lg-6 offset-lg-3\">
\t\t\t\t<div class=\"rm-content h-100\">
\t\t\t\t\t<div class=\"rm-contact-form\">
\t\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t\t";
        // line 110
        if ((array_key_exists("contact_socials", $context) && ($context["contact_socials"] ?? null))) {
            // line 111
            echo "\t\t\t\t\t\t\t<div class=\"rm-social-title\">";
            echo ($context["oct_footer_social_tex"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<ul class=\"rm-social list-unstyled d-flex flex-wrap justify-content-center\">
\t\t\t\t\t\t\t\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["contact_socials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact_social"]) {
                // line 114
                echo "\t\t\t\t\t\t\t\t<li class=\"rm-social-item\">
\t\t\t\t\t\t\t\t\t<a rel=\"noopener noreferrer\" href=\"";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["contact_social"], "link", [], "any", false, false, false, 115)) {
                    echo twig_get_attribute($this->env, $this->source, $context["contact_social"], "link", [], "any", false, false, false, 115);
                } else {
                    echo "javascript:;";
                }
                echo "\" class=\"rm-social-facebook d-flex align-items-center justify-content-center\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["contact_social"], "icone", [], "any", false, false, false, 116);
                echo "\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t\t\t<div class=\"rm-contact-form-text\">";
        echo ($context["oct_text_contact_form"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form action=\"";
        // line 123
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-name\"><span class=\"required\">*</span> ";
        // line 125
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 126
        if ((((($context["error_name"] ?? null) || ($context["error_email"] ?? null)) || ($context["error_enquiry"] ?? null)) || ($context["error_oct_terms"] ?? null))) {
            // line 127
            echo "\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tscrollToElement('.rm-content');
\t\t\t\t\t\t\t\t\trmNotify('danger', '";
            // line 129
            if (($context["error_name"] ?? null)) {
                echo ($context["error_name"] ?? null);
            }
            if (($context["error_email"] ?? null)) {
                echo "<br />";
                echo ($context["error_email"] ?? null);
            }
            if (($context["error_enquiry"] ?? null)) {
                echo "<br />";
                echo ($context["error_enquiry"] ?? null);
            }
            if (($context["error_oct_terms"] ?? null)) {
                echo "<br />";
                echo ($context["error_oct_terms"] ?? null);
            }
            echo "');
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control";
        if (($context["error_name"] ?? null)) {
            echo " error_style";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-email\"><span class=\"required\">*</span> ";
        // line 135
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 136
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control";
        if (($context["error_email"] ?? null)) {
            echo " error_style";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"input-enquiry\"><span class=\"required\">*</span> ";
        // line 139
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control";
        // line 140
        if (($context["error_enquiry"] ?? null)) {
            echo " error_style";
        }
        echo "\" placeholder=\"";
        echo ($context["entry_enquiry"] ?? null);
        echo "\">";
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 142
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t\t";
        // line 143
        if (($context["text_terms"] ?? null)) {
            // line 144
            echo "\t\t\t\t\t\t\t<div class=\"form-checkbox-group\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input id=\"scales\" type=\"checkbox\" class=\"rm-form-checkbox-input";
            // line 147
            if (($context["error_oct_terms"] ?? null)) {
                echo " error_style";
            }
            echo "\" name=\"scales\"";
            if ((array_key_exists("scales_in", $context) && ($context["scales_in"] ?? null))) {
                echo " checked";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<span class=\"check-box\"></span>
\t\t\t\t\t\t\t\t\t";
            // line 149
            echo ($context["text_terms"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t\t<button class=\"rm-btn dark\" type=\"submit\">";
        echo ($context["button_submit"] ?? null);
        echo "</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$(\"#input-name, #input-email, #input-enquiry, #scales\").on(\"change paste keyup\", function() {
\t\t\t\t\t\t\t\t\$(this).removeClass('error_style');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</main>
\t";
        // line 167
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 169
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 169,  505 => 167,  488 => 154,  480 => 149,  469 => 147,  464 => 144,  462 => 143,  458 => 142,  447 => 140,  443 => 139,  431 => 136,  427 => 135,  414 => 132,  394 => 129,  390 => 127,  388 => 126,  384 => 125,  379 => 123,  373 => 121,  369 => 119,  360 => 116,  352 => 115,  349 => 114,  345 => 113,  339 => 111,  337 => 110,  330 => 105,  327 => 104,  320 => 102,  314 => 99,  311 => 98,  309 => 97,  305 => 95,  295 => 93,  293 => 92,  290 => 91,  285 => 88,  274 => 86,  270 => 85,  265 => 83,  262 => 82,  259 => 81,  254 => 78,  245 => 76,  241 => 75,  236 => 73,  233 => 72,  231 => 71,  228 => 70,  222 => 68,  220 => 67,  216 => 66,  206 => 64,  198 => 61,  195 => 60,  193 => 59,  190 => 58,  185 => 57,  182 => 56,  178 => 54,  172 => 51,  169 => 50,  167 => 49,  162 => 46,  157 => 43,  146 => 41,  142 => 40,  137 => 38,  134 => 37,  131 => 36,  126 => 33,  117 => 31,  113 => 30,  108 => 28,  105 => 27,  103 => 26,  100 => 25,  94 => 23,  92 => 22,  88 => 21,  78 => 19,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  60 => 12,  53 => 8,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/information/contact.twig", "");
    }
}
