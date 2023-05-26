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

/* oct_remarket/template/extension/total/shipping.twig */
class __TwigTemplate_aae129118422b1d4227c3642da34751e20712ccc93ee08ed11791befd9519e37 extends \Twig\Template
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
        echo "<div class=\"rm-cart-block\">
    <div class=\"rm-content-title rm-cart-block-title d-flex align-items-center justify-content-between justify-content-md-start\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
    <div class=\"row rm-cart-block-row\">
        <div class=\"col-lg-7\">
            <div id=\"collapse-shipping\" class=\"rm-cart-block-group\">
                <p class=\"mb-4\">";
        // line 6
        echo ($context["text_shipping"] ?? null);
        echo "</p>
                <div class=\"form-horizontal\">
                    <div class=\"form-group d-md-flex align-items-center justify-content-between mb-4\">
                        <label for=\"input-country\"><span class=\"required\">*</span> ";
        // line 9
        echo ($context["entry_country"] ?? null);
        echo "</label>
                        <select name=\"country_id\" id=\"input-country\" class=\"rm-select form-control\">
                            <option value=\"\">";
        // line 11
        echo ($context["text_select"] ?? null);
        echo "</option>
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 13
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 13) == ($context["country_id"] ?? null))) {
                // line 14
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 14);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 14);
                echo "</option>
                                ";
            } else {
                // line 16
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 16);
                echo "</option>
                                ";
            }
            // line 18
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                        </select>
                    </div>
                    <div class=\"form-group d-md-flex align-items-center justify-content-between mb-4\">
                        <label for=\"input-zone\"><span class=\"required\">*</span> ";
        // line 22
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                        <select name=\"zone_id\" id=\"input-zone\" class=\"rm-select form-control\"></select>
                    </div>
                    <div class=\"form-group d-md-flex align-items-center justify-content-between mb-4\">
                        <label for=\"input-postcode\"><span class=\"required\">*</span> ";
        // line 26
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
                        <input type=\"text\" name=\"postcode\" value=\"";
        // line 27
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
                    </div>
                    <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 29
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"rm-btn dark\">";
        echo ($context["button_quote"] ?? null);
        echo "</button>
                </div>
                <script>
                    \$('#button-quote').on('click', function () {
                        \$.ajax({
                            url: 'index.php?route=extension/total/shipping/quote',
                            type: 'post',
                            data: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
                            dataType: 'json',
                            cache: false,
                            beforeSend: function () {
                                \$('#button-quote').button('loading');
                            },
                            complete: function () {
                                \$('#button-quote').button('reset');
                            },
                            success: function (json) {
                                \$('.alert-dismissible, .text-danger').remove();

                                if (json['error']) {
                                    if (json['error']['warning']) {
                                        rmNotify('danger', json['error']['warning']);
                                    }

                                    if (json['error']['country']) {
                                        \$('select[name=\\'country_id\\']');
                                        rmNotify('danger', json['error']['country']);
                                    }

                                    if (json['error']['zone']) {
                                        \$('select[name=\\'zone_id\\']');
                                        rmNotify('danger', json['error']['zone']);
                                    }

                                    if (json['error']['postcode']) {
                                        \$('input[name=\\'postcode\\']');
                                        rmNotify('danger', json['error']['postcode']);
                                    }
                                }

                                if (json['shipping_method']) {
                                    \$('#modal-shipping').remove();

                                    html = '<div id=\"modal-shipping\" class=\"modal\">';
                                    html += '  <div class=\"modal-dialog modal-dialog-centered\">';
                                    html += '    <div class=\"modal-content\">';
                                    html += '      <div class=\"modal-header\">';
                                    html += '        <h5 class=\"modal-title\">";
        // line 76
        echo ($context["text_shipping_method"] ?? null);
        echo "</h5>';
                                    html += '      </div>';
                                    html += '      <div class=\"modal-body\">';

                                    let oct_i = 1;

                                    for (i in json['shipping_method']) {
                                        html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

                                        if (!json['shipping_method'][i]['error']) {
                                            let oct_i_i = 1;

                                            for (j in json['shipping_method'][i]['quote']) {
                                                html += '<div class=\"form-group\">';
\t                                                html += '<div class=\"radio mt-2\">';
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '  <label class=\"option\" for=\"shipping_method_input' + oct_i + oct_i_i + '\" >';
\t                                                if (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 92
        echo ($context["shipping_method"] ?? null);
        echo "') {
\t                                                    html += '<input type=\"radio\" id=\"shipping_method_input' + oct_i + oct_i_i + '\" class=\"input-radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" />';
\t                                                } else {
\t                                                    html += '<input type=\"radio\" id=\"shipping_method_input' + oct_i + oct_i_i + '\" class=\"input-radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" />';
\t                                                }
\t\t\t\t\t\t\t\t\t\t\t\t\thtml += '<span class=\"radio-box\"></span>';

\t                                            html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div></div>';
                                                oct_i_i++;
                                            }
                                        } else {
                                            html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
                                        }

                                        oct_i++;
                                    }
                                    html += '      <div class=\"btn-group d-flex flex-column flex-md-row justify-content-between\">';
                                    html += '        <button type=\"button\" class=\"rm-btn dark order-1 order-md-0\" data-dismiss=\"modal\">";
        // line 109
        echo ($context["button_cancel"] ?? null);
        echo "</button>';

                                    ";
        // line 111
        if (($context["shipping_method"] ?? null)) {
            // line 112
            echo "                                        html += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"rm-btn dark order-0 order-md-1 mb-4 mb-md-0\" />';
                                    ";
        } else {
            // line 114
            echo "                                        html += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"rm-btn dark order-0 order-md-1 mb-4 mb-md-0\" disabled=\"disabled\" />';
                                    ";
        }
        // line 116
        echo "
                                    html += '      </div>';

                                    html += '      </div>';
                                    html += '    </div>';
                                    html += '  </div>';
                                    html += '</div> ';

                                    \$('body').append(html);

                                    \$('#modal-shipping').modal('show');

                                    \$('input[name=\\'shipping_method\\']').on('change', function () {
                                        \$('#button-shipping').prop('disabled', false);
                                    });
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });

                    \$(document).delegate('#button-shipping', 'click', function () {
                        \$.ajax({
                            url: 'index.php?route=extension/total/shipping/shipping',
                            type: 'post',
                            data: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
                            dataType: 'json',
                            cache: false,
                            beforeSend: function () {
                                \$('#button-shipping').button('loading');
                            },
                            complete: function () {
                                \$('#button-shipping').button('reset');
                            },
                            success: function (json) {
                                \$('.alert-dismissible').remove();

                                if (json['error']) {
                                    rmNotify('danger', json['error']);
                                }

                                if (json['redirect']) {
                                    location = json['redirect'];
                                }
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                </script>
                <script>
                    \$('select[name=\\'country_id\\']').on('change', function () {
                        \$.ajax({
                            url: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
                            dataType: 'json',
                            cache: false,
                            beforeSend: function () {
                                \$('select[name=\\'country_id\\']').prop('disabled', true);
                            },
                            complete: function () {
                                \$('select[name=\\'country_id\\']').prop('disabled', false);
                            },
                            success: function (json) {
                                if (json['postcode_required'] == '1') {
                                    \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
                                } else {
                                    \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
                                }

                                html = '<option value=\"\">";
        // line 188
        echo ($context["text_select"] ?? null);
        echo "</option>';

                                if (json['zone'] && json['zone'] != '') {
                                    for (i = 0; i < json['zone'].length; i++) {
                                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                                        if (json['zone'][i]['zone_id'] == '";
        // line 194
        echo ($context["zone_id"] ?? null);
        echo "') {
                                            html += ' selected=\"selected\"';
                                        }

                                        html += '>' + json['zone'][i]['name'] + '</option>';
                                    }
                                } else {
                                    html += '<option value=\"0\" selected=\"selected\">";
        // line 201
        echo ($context["text_none"] ?? null);
        echo "</option>';
                                }

                                \$('select[name=\\'zone_id\\']').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });

                    \$('select[name=\\'country_id\\']').trigger('change');
                </script>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/extension/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 201,  311 => 194,  302 => 188,  228 => 116,  220 => 114,  212 => 112,  210 => 111,  205 => 109,  185 => 92,  166 => 76,  114 => 29,  107 => 27,  103 => 26,  96 => 22,  91 => 19,  85 => 18,  77 => 16,  69 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/extension/total/shipping.twig", "");
    }
}
