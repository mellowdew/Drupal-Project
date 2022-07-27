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

/* modules/basket/templates/basket-admin-page.html.twig */
class __TwigTemplate_07ad6f5be9da175901462ab997ad8a739de08ceb000824f58adc7b58ea03b327 extends \Twig\Template
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
        echo "<div id=\"basket_admin_page\">
\t<div class=\"basket_toolbar\">
\t\t<div class=\"basket_toolbar_menu\">
\t\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "menu", [], "any", false, false, true, 4), 4, $this->source));
        echo "
\t\t</div>
\t</div>
\t<div class=\"basket_page_content\">
\t\t";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "header", [], "any", false, false, true, 8), 8, $this->source));
        echo "
\t\t<div id=\"basket_page_content_ajax\">
\t\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "content", [], "any", false, false, true, 10), 10, $this->source));
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/basket/templates/basket-admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/basket/templates/basket-admin-page.html.twig", "/var/www/13.student.d8c.ru/data/www/13.student.d8c.ru/web/modules/basket/templates/basket-admin-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("raw" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw'],
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
