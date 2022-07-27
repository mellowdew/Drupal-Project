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

/* modules/basket/templates/basket-views-cart-data.html.twig */
class __TwigTemplate_cbabca373925ac22de3e919bb462f23f3beec5b8631f145cbb6b680fddf9aa97 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["totalSumNotDiscountDelivery"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 2), "getTotalSum", [0 => true, 1 => true], "method", false, false, true, 2);
        // line 3
        $context["totalSumNotDiscount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 3), "getTotalSum", [0 => false, 1 => false], "method", false, false, true, 3);
        // line 4
        $context["payInfo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 4), "getPayInfo", [], "method", false, false, true, 4);
        // line 5
        echo "
";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 6), "getCount", [], "any", false, false, true, 6)) {
            // line 7
            echo "\t<div class=\"bot_line\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td class=\"label\">
\t\t\t\t\t";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Order price:"));
            echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"value\">
\t\t\t\t\t";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketNumberFormat($this->sandbox->ensureToStringAllowed(($context["totalSumNotDiscountDelivery"] ?? null), 14, $this->source), 2, ",", " "), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 14), "getCurrencyName", [], "method", false, false, true, 14), 14, $this->source)));
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "delivery", [], "any", false, false, true, 17), "sum", [], "any", false, false, true, 17)) {
                // line 18
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"label\">
\t\t\t\t\t\t";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cost of delivery:"));
                echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"value\">
\t\t\t\t\t\t";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketNumberFormat($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "delivery", [], "any", false, false, true, 23), "sum", [], "any", false, false, true, 23), 23, $this->source), 2, ",", " "), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 24
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "delivery", [], "any", false, false, true, 24), "currency", [], "any", false, false, true, 24)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "delivery", [], "any", false, false, true, 25), "currency", [], "any", false, false, true, 25), 25, $this->source)));
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t\t\t";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 27), "getCurrencyName", [], "method", false, false, true, 27), 27, $this->source)));
                    echo "
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "delivery", [], "any", false, false, true, 29), "description", [], "any", false, false, true, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<span class=\"tooltip\" data-voc=\"delivery\">i</span>
\t\t\t\t\t\t\t<div class=\"desc_delivery\" style=\"display:none;\">";
                    // line 31
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "delivery", [], "any", false, false, true, 31), "description", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 36
            echo "\t\t\t";
            if ((($context["totalSumNotDiscount"] ?? null) < ($context["totalSumNotDiscountDelivery"] ?? null))) {
                // line 37
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"label\">
\t\t\t\t\t\t";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A discount:"));
                echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"value\">
\t\t\t\t\t\t";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketNumberFormat((($context["totalSumNotDiscountDelivery"] ?? null) - ($context["totalSumNotDiscount"] ?? null)), 2, ",", " "), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 42), "getCurrencyName", [], "method", false, false, true, 42), 42, $this->source)));
                echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 46
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"label\">
\t\t\t\t\t";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("To pay:"));
            echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"value\">
\t\t\t\t\t<span class=\"total\">";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketNumberFormat($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 51), "getTotalSum", [], "method", false, false, true, 51), 51, $this->source), 2, ",", " "), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 51), "getCurrencyName", [], "method", false, false, true, 51), 51, $this->source)));
            echo "</span>
\t\t\t\t\t";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["payInfo"] ?? null), "price", [], "any", false, false, true, 52) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "Cart", [], "any", false, false, true, 52), "getTotalSum", [], "method", false, false, true, 52))) {
                // line 53
                echo "\t\t\t\t\t\t<br/><span class=\"total\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketNumberFormat($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["payInfo"] ?? null), "price", [], "any", false, false, true, 53), 53, $this->source), 2, ",", " "), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["payInfo"] ?? null), "currency", [], "any", false, false, true, 53), "name", [], "any", false, false, true, 53), 53, $this->source)));
                echo "</span>
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<div class=\"buttons\">
\t\t\t<a class=\"button button-order\" href=\"";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("basket.pages", ["page_type" => "order"]));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT("Checkout"));
            echo "</a>
\t\t\t<a class=\"button button-back\" href=\"javascript:history.back();\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT("Continue shopping"));
            echo "</a>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/basket/templates/basket-views-cart-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 60,  173 => 59,  167 => 55,  159 => 53,  157 => 52,  151 => 51,  145 => 48,  141 => 46,  132 => 42,  126 => 39,  122 => 37,  119 => 36,  114 => 33,  109 => 31,  106 => 30,  103 => 29,  97 => 27,  91 => 25,  89 => 24,  85 => 23,  79 => 20,  75 => 18,  73 => 17,  65 => 14,  59 => 11,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/basket/templates/basket-views-cart-data.html.twig", "/var/www/13.student.d8c.ru/data/www/13.student.d8c.ru/web/modules/basket/templates/basket-views-cart-data.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 6);
        static $filters = array("t" => 11, "escape" => 14, "basket_number_format" => 14);
        static $functions = array("basket_t" => 14, "url" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'basket_number_format'],
                ['basket_t', 'url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
