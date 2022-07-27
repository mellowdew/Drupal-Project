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

/* modules/basket/templates/basket-admin-header.html.twig */
class __TwigTemplate_009b259ecdd3676225fbba9bb790ca224d59ee9242c651673b103ada9cf376f6 extends \Twig\Template
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
        echo "<div class=\"basket_header\">
\t<div class=\"breadcrumbs_wrap\">
\t\t";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "breadcrumbs", [], "any", false, false, true, 3), 3, $this->source), "<span class=\"arrow\"></span>"));
        echo "
\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "CreateLink", [], "any", false, false, true, 4)) {
            // line 5
            echo "\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "CreateLink", [], "any", false, false, true, 5), 5, $this->source));
            echo "
\t\t";
        }
        // line 7
        echo "\t</div>
\t<ul class=\"menu_header\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "items", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "\t\t\t<li class=\"item\">
\t\t\t\t";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["item"], 11, $this->source));
            echo "
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/basket/templates/basket-admin-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  66 => 11,  63 => 10,  59 => 9,  55 => 7,  49 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/basket/templates/basket-admin-header.html.twig", "/var/www/13.student.d8c.ru/data/www/13.student.d8c.ru/web/modules/basket/templates/basket-admin-header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "for" => 9);
        static $filters = array("raw" => 3, "join" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['raw', 'join'],
                []
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
