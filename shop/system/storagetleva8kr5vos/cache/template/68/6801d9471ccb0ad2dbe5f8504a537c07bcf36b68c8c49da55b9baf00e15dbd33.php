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

/* oct_remarket/template/octemplates/module/oct_popup_login.twig */
class __TwigTemplate_4c00495db88020f386d6e73f492875b3fb8c69814837c0ac26a1493d074a96c1 extends \Twig\Template
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
        echo "<div class=\"modal\" id=\"rm-popup-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModalTitle\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered narrow\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<div class=\"modal-title\" id=\"loginModalTitle\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t\t<button type=\"button\" class=\"modal-close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\" class=\"modal-close-icon modal-close-left\"></span>
                    <span aria-hidden=\"true\" class=\"modal-close-icon modal-close-right\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"popup-login-form\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"rm-control-label\" for=\"emailLoginInput\"><span class=\"required\">* </span>";
        // line 14
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"emailLoginInput\" aria-describedby=\"emailHelp\" placeholder=\"";
        // line 15
        echo ($context["entry_email"] ?? null);
        echo "\" name=\"email\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"rm-control-label\" for=\"passwordLoginInput\"><span class=\"required\">* </span>";
        // line 18
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passwordLoginInput\" placeholder=\"";
        // line 19
        echo ($context["entry_password"] ?? null);
        echo "\" name=\"password\" />
\t\t\t\t\t\t";
        // line 20
        if (($context["redirect"] ?? null)) {
            // line 21
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"login-popup-links d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t<a class=\"login-popup-forgotten\" href=\"";
        // line 25
        echo ($context["forgotten_url"] ?? null);
        echo "\">";
        echo ($context["button_forgotten"] ?? null);
        echo "</a>
\t\t\t\t\t\t<a class=\"login-popup-register\" href=\"";
        // line 26
        echo ($context["register_url"] ?? null);
        echo "\">";
        echo ($context["button_register"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<button id=\"popup-login-button\" type=\"button\" class=\"rm-btn dark\">";
        // line 28
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\$('#popup-login-button').on('click', function() {
    \$.ajax({
\t\ttype: 'post',
\t\turl:  'index.php?route=octemplates/module/oct_popup_login/login',
\t\tdataType: 'json',
\t\tcache: false,
\t\tdata: \$('#popup-login-form').serialize(),
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
        // line 56
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

    public function getTemplateName()
    {
        return "oct_remarket/template/octemplates/module/oct_popup_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 56,  98 => 28,  91 => 26,  85 => 25,  81 => 23,  75 => 21,  73 => 20,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/octemplates/module/oct_popup_login.twig", "");
    }
}
