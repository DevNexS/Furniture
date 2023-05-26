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

/* oct_remarket/template/information/information.twig */
class __TwigTemplate_d33aa3cec8877ce256699b628527b159184cbc7fd0f759b48a0044e2c468cf96 extends \Twig\Template
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
<div id=\"information-information\" class=\"container\">
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
\t\t<div id=\"content\" class=\"row no-gutters\">
\t\t";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "\t    ";
            $context["class"] = "col-lg-6";
            // line 15
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "\t    ";
            $context["class"] = "col-lg-9";
            // line 17
            echo "\t    ";
        } else {
            // line 18
            echo "\t    ";
            $context["class"] = "col-lg-12";
            // line 19
            echo "\t    ";
        }
        // line 20
        echo "\t    <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t    <div class=\"rm-content h-100\">
\t\t\t\t";
        // line 22
        echo ($context["description"] ?? null);
        echo "
\t\t    </div>
\t    </div>
\t    ";
        // line 25
        echo ($context["column_right"] ?? null);
        echo "
    </div>
\t</main>
    ";
        // line 28
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 30
        if (($context["oct_is_youtube"] ?? null)) {
            // line 31
            echo "<script>
function findVideos() {
\tlet videos = document.querySelectorAll('.rm-video');

\tfor (let i = 0; videos.length > i; i++) {
\t\tsetupVideo(videos[i]);
\t}
}

function setupVideo(video) {
\tlet link = video.querySelector('.rm-video__link');
\tlet media = video.querySelector('.rm-video__media');
\tlet button = video.querySelector('.rm-video__button');
\tlet id = parseMediaURL(media);

\tvideo.addEventListener('click', () => {
\t\tlet iframe = createIframe(id);

\t\tlink.remove();
\t\tbutton.remove();
\t\tvideo.appendChild(iframe);
\t});

\tlink.removeAttribute('href');
\tvideo.classList.add('rm-video--enabled');
}

function parseMediaURL(media) {
\tlet regexp = /https:\\/\\/i\\.ytimg\\.com\\/vi\\/([a-zA-Z0-9_-]+)\\/maxresdefault\\.jpg/i;
\tlet url = media.src;
\tlet match = url.match(regexp);

\treturn match[1];
}

function createIframe(id) {
\tlet iframe = document.createElement('iframe');

\tiframe.setAttribute('allowfullscreen', '');
\tiframe.setAttribute('allow', 'autoplay');
\tiframe.setAttribute('src', generateURL(id));
\tiframe.classList.add('rm-video__media');

\treturn iframe;
}

function generateURL(id) {
\tlet query = '?rel=0&showinfo=0&autoplay=1';

\treturn 'https://www.youtube.com/embed/' + id + query;
}

findVideos();
</script>
";
        }
        // line 86
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 86,  109 => 31,  107 => 30,  102 => 28,  96 => 25,  90 => 22,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  64 => 13,  60 => 12,  53 => 8,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/information/information.twig", "");
    }
}
