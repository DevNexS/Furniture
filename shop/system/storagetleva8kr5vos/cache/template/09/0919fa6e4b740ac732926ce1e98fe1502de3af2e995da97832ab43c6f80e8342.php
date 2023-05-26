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

/* oct_remarket/template/mail/order_alert.twig */
class __TwigTemplate_92dab99a7a0bfacee08a3c8a6af9c931d6b0104df01a79c726fa0128374cfb5e extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        echo ($context["store_url"] ?? null);
        echo "\" title=\"";
        echo ($context["store_name"] ?? null);
        echo "\"><img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"";
        echo ($context["store_name"] ?? null);
        echo "\" style=\"margin-bottom: 20px; border: none; max-width: 250px; display: block; margin: 20px auto;\"/></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 9
        echo ($context["text_received"] ?? null);
        echo "</p>
  ";
        // line 10
        if (($context["customer_id"] ?? null)) {
            // line 11
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_link"] ?? null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 12
            echo ($context["link"] ?? null);
            echo "\">";
            echo ($context["link"] ?? null);
            echo "</a></p>
  ";
        }
        // line 14
        echo "  ";
        if (($context["download"] ?? null)) {
            // line 15
            echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            echo ($context["text_download"] ?? null);
            echo "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 16
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["download"] ?? null);
            echo "</a></p>
  <";
        }
        // line 18
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #E7E7E7; border-left: 1px solid #E7E7E7; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222;\" colspan=\"2\">";
        // line 21
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\"><b>";
        // line 26
        echo ($context["text_order_id"] ?? null);
        echo "</b> ";
        echo ($context["order_id"] ?? null);
        echo "<br />
          <b>";
        // line 27
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "<br />
          <b>";
        // line 28
        echo ($context["text_payment_method"] ?? null);
        echo "</b> ";
        echo ($context["payment_method"] ?? null);
        echo "<br />
          ";
        // line 29
        if (($context["shipping_method"] ?? null)) {
            echo " <b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
            echo "
          ";
        }
        // line 30
        echo "</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\"><b>";
        // line 31
        echo ($context["text_email"] ?? null);
        echo "</b> ";
        echo ($context["email"] ?? null);
        echo "<br />
          <b>";
        // line 32
        echo ($context["text_telephone"] ?? null);
        echo "</b> ";
        echo ($context["telephone"] ?? null);
        echo "<br />
          <b>";
        // line 33
        echo ($context["text_ip"] ?? null);
        echo "</b> ";
        echo ($context["ip"] ?? null);
        echo "<br />
          <b>";
        // line 34
        echo ($context["text_order_status"] ?? null);
        echo "</b> ";
        echo ($context["order_status"] ?? null);
        echo "<br /></td>
      </tr>
    </tbody>
  </table>
  ";
        // line 38
        if (($context["comment"] ?? null)) {
            // line 39
            echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #E7E7E7; border-left: 1px solid #E7E7E7; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222;\">";
            // line 42
            echo ($context["text_instruction"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\">";
            // line 47
            echo ($context["comment"] ?? null);
            echo "</td>
      </tr>
    </tbody>
  </table>
  ";
        }
        // line 52
        echo "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #E7E7E7; border-left: 1px solid #E7E7E7; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222;\">";
        // line 55
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
        ";
        // line 56
        if (($context["shipping_address"] ?? null)) {
            // line 57
            echo "        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 58
        echo " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\">";
        // line 62
        echo ($context["payment_address"] ?? null);
        echo "</td>
        ";
        // line 63
        if (($context["shipping_address"] ?? null)) {
            // line 64
            echo "        <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
        ";
        }
        // line 65
        echo " </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #E7E7E7; border-left: 1px solid #E7E7E7; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222;\">&nbsp;</td>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222; width: 40%;\">";
        // line 72
        echo ($context["text_product"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 15px 7px; color: #222222;\">";
        // line 73
        echo ($context["text_model"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 15px 7px; color: #222222;\">";
        // line 74
        echo ($context["text_quantity"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 15px 7px; color: #222222;\">";
        // line 75
        echo ($context["text_price"] ?? null);
        echo "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 15px 7px; color: #222222;\">";
        // line 76
        echo ($context["text_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 82
            echo "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\">
\t\t";
            // line 84
            if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 84)) {
                // line 85
                echo "\t\t\t<div style=\"float: left; text-align: center; margin-right: 20px;\">
\t\t\t\t<a href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 86);
                echo "\" style=\"width:65px;\"></a>
\t\t\t</div>
        ";
            }
            // line 89
            echo "      </td>
      <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px; width: 40%;\"><a href=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
            echo "</a>
        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo "<br />
        &nbsp;<small> - ";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 92);
                echo "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\">";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 93);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 94);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 96);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 100
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\">";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 101);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">1</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 104);
            echo "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 105);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "      </tbody>
    
    <tfoot>
    
    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 113
            echo "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\" colspan=\"5\"><b>";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 114);
            echo ":</b></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #E7E7E7; border-bottom: 1px solid #E7E7E7; text-align: right; padding: 7px;\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 115);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "      </tfoot>
    
  </table>
  <p style=\"margin-top: 20px; margin-bottom: 20px; text-align: center;\">";
        // line 121
        echo ($context["text_footer"] ?? null);
        echo "</p>
\t<div style=\"color: #757575; font-size: 12px; text-align: center; margin: 30px 0;\">
\t\t";
        // line 123
        if (($context["oct_remarket_contact_address"] ?? null)) {
            // line 124
            echo "\t\t";
            echo ($context["oct_remarket_contact_address"] ?? null);
            echo "
\t\t";
        }
        // line 126
        echo "\t\t<div style=\"padding: 15px 0;\">
\t\t";
        // line 127
        if (($context["oct_remarket_contact_telephone"] ?? null)) {
            // line 128
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_remarket_contact_telephone"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 129
                echo "\t\t\t\t<a style=\"font-size: 16px; line-height: 24px; font-weight: bold; color: #333333;\" href=\"tel:";
                echo $context["phone"];
                echo "\">";
                echo $context["phone"];
                echo "</a><br />
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t";
        }
        // line 132
        echo "\t\t</div>
\t\t";
        // line 133
        if (($context["oct_remarket_contact_open"] ?? null)) {
            // line 134
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_remarket_contact_open"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["contact_open"]) {
                // line 135
                echo "\t\t\t\t";
                echo $context["contact_open"];
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_open'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t";
        }
        // line 138
        echo "\t\t<div style=\"padding: 15px 0;\">
\t\t";
        // line 139
        if (($context["oct_remarket_socials"] ?? null)) {
            // line 140
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["oct_remarket_socials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 141
                echo "\t\t\t\t<a style=\"font-size: 18px; line-height: 27px; font-weight: bold; color: #000000;\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 141);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["social"], "title", [], "any", false, false, false, 141);
                echo "</a><br />
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "\t\t";
        }
        // line 144
        echo "\t\t</div>
\t</div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "oct_remarket/template/mail/order_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 144,  459 => 143,  448 => 141,  443 => 140,  441 => 139,  438 => 138,  435 => 137,  426 => 135,  421 => 134,  419 => 133,  416 => 132,  413 => 131,  402 => 129,  397 => 128,  395 => 127,  392 => 126,  386 => 124,  384 => 123,  379 => 121,  374 => 118,  365 => 115,  361 => 114,  358 => 113,  354 => 112,  348 => 108,  339 => 105,  335 => 104,  329 => 101,  326 => 100,  321 => 99,  312 => 96,  308 => 95,  304 => 94,  300 => 93,  289 => 92,  283 => 91,  277 => 90,  274 => 89,  266 => 86,  263 => 85,  261 => 84,  257 => 82,  253 => 81,  245 => 76,  241 => 75,  237 => 74,  233 => 73,  229 => 72,  220 => 65,  214 => 64,  212 => 63,  208 => 62,  202 => 58,  196 => 57,  194 => 56,  190 => 55,  185 => 52,  177 => 47,  169 => 42,  164 => 39,  162 => 38,  153 => 34,  147 => 33,  141 => 32,  135 => 31,  132 => 30,  123 => 29,  117 => 28,  111 => 27,  105 => 26,  97 => 21,  92 => 18,  85 => 16,  80 => 15,  77 => 14,  70 => 12,  65 => 11,  63 => 10,  59 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "oct_remarket/template/mail/order_alert.twig", "");
    }
}
