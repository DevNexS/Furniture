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

/* oct_remarket/template/octemplates/module/oct_static_subscribe.twig */
class __TwigTemplate_7b96bc327db83212dcf2c6123d7d659bf52b9df3b53d62abb7dce9602588be26 extends \Twig\Template
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
        echo "<div class=\"rm-footer-title\">";
        echo ($context["oct_text_subscribe_title"] ?? null);
        echo "</div>
<form action=\"javascript:;\" id=\"footer-subscribe\" class=\"rm-footer-subscribe\">
\t<div class=\"input-group\">
    \t<input type=\"email\" id=\"InputSubscribeEmail\" class=\"form-control rm-input-with-btn\" name=\"email\" placeholder=\"";
        // line 4
        echo ($context["enter_email_static_subscribe"] ?? null);
        echo "\">
\t    <button type=\"submit\" id=\"footer-make-subscribe\" class=\"rm-btn dark\">";
        // line 5
        echo ($context["oct_text_subscribe_button"] ?? null);
        echo "</button>
\t</div>
    ";
        // line 7
        if (($context["text_terms"] ?? null)) {
            // line 8
            echo "    <div class=\"form-checkbox-group\">
        <label>
          <input type=\"checkbox\" class=\"rm-form-checkbox-input\" name=\"agree\" id=\"oct-scales-static\">
          <span class=\"check-box\"></span>
          ";
            // line 12
            echo ($context["text_terms"] ?? null);
            echo "
        </label>
    </div>
    ";
        }
        // line 16
        echo "</form>
<script>
\$(\"#InputSubscribeEmail, #oct-scales-static\").on(\"change paste keyup\", function() {
\t\$(this).removeClass('error_style');
});
\$('#footer-make-subscribe').on('click', function() {
\t\$.ajax({
\t\ttype: 'post',
\t\turl:  'index.php?route=octemplates/module/oct_subscribe/makeSubscribe',
\t\tdataType: 'json',
\t\tcache: false,
\t\tdata: \$('#footer-subscribe').serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#us-subscribe-modal .text-danger').remove();
\t\t\t\tlet errorOption = '';

\t\t\t\t\$.each(json['error'], function(i, val) {
\t\t\t\t\t\$('#footer-subscribe [name=\"' + i + '\"]').addClass('error_style');
\t\t\t\t\terrorOption += '<div class=\"alert-text-item\">' + val + '</div>';
\t\t\t\t});

\t\t\t\trmNotify('danger', errorOption);
\t\t\t} else {
\t\t\t\tif (json['output']) {
\t\t\t\t\t\$('#footer-subscribe [name=\"email\"]').val('');
\t\t\t\t\trmNotify('success', '<div class=\"alert-text-item\">' + json['output'] + '</div>');
\t\t\t\t}
\t\t\t}
\t\t}
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/module/oct_static_subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  61 => 12,  55 => 8,  53 => 7,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/module/oct_static_subscribe.twig", "");
    }
}
