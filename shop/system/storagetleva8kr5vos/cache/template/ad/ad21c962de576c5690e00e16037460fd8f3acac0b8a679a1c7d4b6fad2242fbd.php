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

/* oct_remarket/template/common/search.twig */
class __TwigTemplate_2acecc9d51c8118ca4988c8788ff95b1522b05ff9b8c21617daae6404d86cde4 extends \Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if (($context["oct_live_search_status"] ?? null)) {
            // line 9
            echo "<script>
function clearLiveSearch() {
\t\$('#rm_livesearch_close').removeClass('visible');
    \$('#rm_overlay').removeClass('active');
\t\$('#rm_livesearch').removeClass('expanded');
\t\$('#rm_livesearch').html('');
\t\$('#input_search').val('').removeClass('active');
}

\$(document).ready(function() {
\tlet timer, delay = ";
            // line 19
            echo ($context["delay_setting"] ?? null);
            echo ";

    \$('#input_search').keyup(function(event) {
\t    switch(event.keyCode) {
\t\t\tcase 37:
\t\t\tcase 39:
\t\t\tcase 38:
\t\t\tcase 40:
\t\t\t\treturn;
\t\t\tcase 27:
\t\t\t\tclearLiveSearch();
\t\t\t\treturn;
\t\t  }

\t    clearTimeout(timer);

\t    timer = setTimeout(function() {
\t        let value = \$('#search input[name=\\'search\\']').val();

\t\t\tif (value.length >= ";
            // line 38
            echo ($context["count_symbol"] ?? null);
            echo ") {
\t\t\t\tlet key = encodeURIComponent(value);
\t\t\t\toctsearch.search(key, 'desktop');
\t\t\t} else if (value.length === 0) {
\t\t\t\tclearLiveSearch();
\t\t\t}

\t    }, delay );
\t});
});

var octsearch = {
\t'search': function(key, type) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=octemplates/module/oct_live_search',
\t\t\ttype: 'post',
\t\t\tdata: 'key=' + key,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tsuccess: function(data) {
\t\t\t\t\$('#rm_livesearch').html(data).addClass('expanded');

\t\t\t\tif(data = data.match(/livesearch/g)) {
\t\t\t\t\t\$('#rm_livesearch_close').addClass('visible');
\t                \$('#input_search, #rm_overlay').addClass('active');
                    \$('#rm_overlay').addClass('transparent');

\t\t\t\t} else {
\t\t\t\t\t\$('#rm_livesearch_close').removeClass('visible');
\t                \$('#input_search, #rm_overlay').removeClass('active');
\t\t\t\t}
\t\t\t}
\t\t});
\t}
}
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 38,  54 => 19,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/common/search.twig", "");
    }
}
