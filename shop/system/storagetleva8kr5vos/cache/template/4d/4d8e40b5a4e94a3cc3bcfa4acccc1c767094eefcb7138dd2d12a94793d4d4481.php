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

/* oct_remarket/template/octemplates/faq/oct_product_faq.twig */
class __TwigTemplate_983acd5ffa61290cbc1def52f23d6fddb04f3e12198397a1b0ae9551b87dc857 extends \Twig\Template
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
        if ((($context["page"] ?? null) == 1)) {
            // line 2
            echo "<div class=\"tab-pane rm-content p-0 rm-product-tabs-questions\" id=\"";
            echo ($context["oct_id_div"] ?? null);
            echo "\">
    ";
            // line 3
            if (($context["poup_is_not"] ?? null)) {
                // line 4
                echo "        <div class=\"rm-product-tabs-questions-top\">
            <button type=\"button\" class=\"rm-btn dark mb-3\" data-toggle=\"modal\" data-target=\"#rm-popup-faq\">";
                // line 5
                echo ($context["text_faq_button"] ?? null);
                echo "</button>
            ";
                // line 6
                if (twig_test_empty(($context["oct_faqs"] ?? null))) {
                    // line 7
                    echo "                <p class=\"my-3 text-center text-sm-left\"><b>";
                    echo ($context["text_faq_title"] ?? null);
                    echo "</b></p>
        \t\t<img src=\"catalog/view/theme/oct_remarket/img/answers-empty.svg\" alt=\"\" class=\"img-fluid d-block d-md-none my-4 mx-auto\" width=\"360\" height=\"199\" />
            ";
                }
                // line 10
                echo "            <div class=\"modal\" id=\"rm-popup-faq\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered narrow\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <div class=\"modal-title\">";
                // line 14
                echo ($context["text_faq"] ?? null);
                echo "</div>
                            <button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                                <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"form-faq\" enctype=\"multipart/form-data\" method=\"post\">
                                <div class=\"pb-4\">";
                // line 22
                echo ($context["text_faq_text"] ?? null);
                echo "</div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" ";
                // line 24
                if (($context["firstname"] ?? null)) {
                    echo "value=\"";
                    echo ($context["firstname"] ?? null);
                    echo "\"";
                }
                echo " class=\"form-control\" id=\"faqInputName\" placeholder=\"";
                echo ($context["entry_name"] ?? null);
                echo "\">
                                </div>
                                <div class=\"form-group pb-3\">
                                    <label for=\"faqInputEmail\" class=\"fsz-14 dark-text fw-500 pb-1\">";
                // line 27
                echo ($context["text_faq_email"] ?? null);
                echo "</label>
                                    <span class=\"small\">";
                // line 28
                echo ($context["text_faq_email_detail"] ?? null);
                echo "</span>
                                    <input type=\"text\" name=\"email\" ";
                // line 29
                if (($context["email_user"] ?? null)) {
                    echo "value=\"";
                    echo ($context["email_user"] ?? null);
                    echo "\"";
                }
                echo " class=\"form-control\" id=\"faqInputEmail\" placeholder=\"";
                echo ($context["text_faq_email"] ?? null);
                echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <textarea id=\"faqText\" name=\"text\" class=\"form-control\" placeholder=\"";
                // line 32
                echo ($context["text_faq_textarea"] ?? null);
                echo "\"></textarea>
                                </div>
                                <div class=\"form-group\">
                                    ";
                // line 35
                echo ($context["captcha"] ?? null);
                echo "
                                </div>
                                <button type=\"button\" id=\"button-oct_faq\" class=\"rm-btn dark\">";
                // line 37
                echo ($context["button_continue"] ?? null);
                echo "</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            // line 45
            echo "    ";
            if (($context["oct_faqs"] ?? null)) {
                // line 46
                echo "        <div id=\"";
                echo ($context["oct_faqs_id"] ?? null);
                echo "\">
            ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_faqs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_faq"]) {
                    // line 48
                    echo "            <div class=\"rm-product-tabs-questions-item\">
                <div class=\"rm-product-tabs-questions-item-info d-flex justify-content-between d-md-block\">
                    <span class=\"rm-product-tabs-questions-item-author\">";
                    // line 50
                    echo ($context["text_faq_autor"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "author", [], "any", false, false, false, 50);
                    echo "</span>
                    <span class=\"rm-product-tabs-questions-item-date\">";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "date_added", [], "any", false, false, false, 51);
                    echo "</span>
                </div>
                <div class=\"rm-product-tabs-questions-item-text\">
                    <p>";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "text", [], "any", false, false, false, 54);
                    echo "</p>
                </div>
                ";
                    // line 56
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", true, true, false, 56) && twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 56))) {
                        // line 57
                        echo "                <div class=\"rm-product-tabs-questions-item-answer\">
                    <div class=\"rm-product-tabs-questions-item-answer-title\">";
                        // line 58
                        echo ($context["text_faq_answer"] ?? null);
                        echo "</div>
                    <div class=\"rm-product-tabs-questions-item-answer-text\">
                        <p>";
                        // line 60
                        echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 60);
                        echo "</p>
                    </div>
                </div>
                ";
                    }
                    // line 64
                    echo "            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_faq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "            <div class=\"text-right\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
        </div>
    ";
            }
            // line 69
            echo "</div>
<script>
\$(\"#faqInputName, faqInputEmail, #faqText\").on(\"change paste keyup\", function() {
  \$(this).removeClass('error_style');
});
\$('body').on('click', '#";
            // line 74
            echo ($context["oct_faqs_id"] ?? null);
            echo " .pagination a', function(e){
    e.preventDefault();

    \$('#";
            // line 77
            echo ($context["oct_faqs_id"] ?? null);
            echo "').html();

    \$('#";
            // line 79
            echo ($context["oct_faqs_id"] ?? null);
            echo "').load(this.href);

    scrollToElement('#product_questions');
});

\$('#button-oct_faq').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=octemplates/faq/oct_product_faq/write&faqp_id=";
            // line 86
            echo ($context["product_id"] ?? null);
            echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-faq\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-oct_faq').button('loading');
            \$('#rm-popup-faq input, #rm-popup-faq textarea').removeClass('error_style');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-oct_faq').button('reset');
\t\t},
\t\tsuccess: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                let errorOption = '';

                \$.each(json['error'], function(i, val) {
                    \$('#rm-popup-faq [name=\"' + i + '\"]').addClass('error_style');
                    errorOption += '<div class=\"alert-text-item\">' + val + '</div>';
                });

                rmNotify('danger', errorOption);
            }

\t\t\tif (json['success']) {
                rmNotify('success', json['success']);

                \$('#rm-popup-faq').modal('hide');
                \$('#form-faq input[name=\\'name\\']').val('');
                \$('#form-faq textarea[name=\\'text\\']').val('');
\t\t\t}
\t\t}
\t});
});
</script>
";
        } else {
            // line 123
            if (($context["oct_faqs"] ?? null)) {
                // line 124
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["oct_faqs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oct_faq"]) {
                    // line 125
                    echo "    <div class=\"rm-product-tabs-questions-item\">
        <div class=\"rm-product-tabs-questions-item-info d-flex justify-content-between d-md-block\">
            <span class=\"rm-product-tabs-questions-item-author\">";
                    // line 127
                    echo ($context["text_faq_autor"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "author", [], "any", false, false, false, 127);
                    echo "</span>
            <span class=\"rm-product-tabs-questions-item-date\">";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "date_added", [], "any", false, false, false, 128);
                    echo "</span>
        </div>
        <div class=\"rm-product-tabs-questions-item-text\">
            <p>";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "text", [], "any", false, false, false, 131);
                    echo "</p>
        </div>
        ";
                    // line 133
                    if ((twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", true, true, false, 133) && twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 133))) {
                        // line 134
                        echo "        <div class=\"rm-product-tabs-questions-item-answer\">
            <div class=\"rm-product-tabs-questions-item-answer-title\">";
                        // line 135
                        echo ($context["text_faq_answer"] ?? null);
                        echo "</div>
            <div class=\"rm-product-tabs-questions-item-answer-text\">
                <p>";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["oct_faq"], "answer", [], "any", false, false, false, 137);
                        echo "</p>
            </div>
        </div>
        ";
                    }
                    // line 141
                    echo "    </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oct_faq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "    <div class=\"text-right\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/faq/oct_product_faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 143,  313 => 141,  306 => 137,  301 => 135,  298 => 134,  296 => 133,  291 => 131,  285 => 128,  280 => 127,  276 => 125,  271 => 124,  269 => 123,  229 => 86,  219 => 79,  214 => 77,  208 => 74,  201 => 69,  194 => 66,  187 => 64,  180 => 60,  175 => 58,  172 => 57,  170 => 56,  165 => 54,  159 => 51,  154 => 50,  150 => 48,  146 => 47,  141 => 46,  138 => 45,  127 => 37,  122 => 35,  116 => 32,  104 => 29,  100 => 28,  96 => 27,  84 => 24,  79 => 22,  68 => 14,  62 => 10,  55 => 7,  53 => 6,  49 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/faq/oct_product_faq.twig", "");
    }
}
