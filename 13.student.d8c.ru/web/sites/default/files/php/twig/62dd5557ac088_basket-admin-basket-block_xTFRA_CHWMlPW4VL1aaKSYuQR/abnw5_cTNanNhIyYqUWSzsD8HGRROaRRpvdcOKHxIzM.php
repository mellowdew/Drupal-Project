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

/* modules/basket/templates/basket-admin-basket-block-caption.html.twig */
class __TwigTemplate_7601fc44b4a7e2d61fa0574ea56969943a5b3d5d2ff1c6084dc723c8f5f54c0f extends \Twig\Template
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
        echo "<div class=\"basket_caption_block\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "combo", [], "any", false, false, true, 2)) {
            // line 3
            echo "\t\t<div class=\"combo_field\">
\t\t\t<b>";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT("Combined filter"));
            echo ":</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "combo", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo " <a href=\"javascript:void(0);\" onclick=\"basket_set_combo_status(this)\" data-post=\"\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\basket\Plugins\Twig\BasketTwigExtension']->basketT("Cancel"));
            echo "</a>
\t\t</div>
\t";
        }
        // line 7
        echo "\t<div class=\"items\">
\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "items", [], "any", false, false, true, 8)) {
            // line 9
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "items", [], "any", false, false, true, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 10)) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                } else {
                    echo "javascript:void(0);";
                }
                echo "\" target=\"";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, true, 10)) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "target", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                } else {
                    echo "_self";
                }
                echo "\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, true, 10), 10, $this->source), " "), "html", null, true);
                echo "\" onclick=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "onclick", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" data-post=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "post", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "edit_tab", [], "any", false, false, true, 13), 13, $this->source));
        echo "
\t</div>
\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "export", [], "any", false, false, true, 15), 15, $this->source));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/basket/templates/basket-admin-basket-block-caption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  97 => 13,  94 => 12,  67 => 10,  62 => 9,  60 => 8,  57 => 7,  47 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/basket/templates/basket-admin-basket-block-caption.html.twig", "/var/www/13.student.d8c.ru/data/www/13.student.d8c.ru/web/modules/basket/templates/basket-admin-basket-block-caption.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 9);
        static $filters = array("escape" => 4, "join" => 10, "raw" => 13);
        static $functions = array("basket_t" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'join', 'raw'],
                ['basket_t']
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
