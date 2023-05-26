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

/* oct_remarket/template/extension/total/coupon.twig */
class __TwigTemplate_fab9dd5720484829412bb449e78c6c9151fc98b1fe86c020d0f15283318dd883 extends \Twig\Template
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
\t\t\t<div id=\"collapse-coupon\" class=\"form-group rm-cart-block-group\">
\t\t    \t<label for=\"input-coupon\" class=\"rm-control-label\">";
        // line 6
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
\t\t    \t<div class=\"input-group flex-column flex-md-row\">
\t\t\t    \t<input type=\"text\" name=\"coupon\" value=\"";
        // line 8
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
\t\t\t    \t<span class=\"input-group-btn\">
\t\t\t        \t<button type=\"button\" id=\"button-coupon\" data-loading-text=\"";
        // line 10
        echo ($context["text_loading"] ?? null);
        echo "\"  class=\"rm-btn rm-input-with-btn dark\" />";
        echo ($context["button_coupon"] ?? null);
        echo "</button>
\t\t\t    \t</span>
\t\t    \t</div>
\t\t\t\t<script>
\t\t\t\t\$('#button-coupon').on('click', function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tcache: false,
\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\$('#button-coupon').button('loading');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$('#button-coupon').button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\trmNotify('danger', json['error']);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/extension/total/coupon.twig", "");
    }
}
