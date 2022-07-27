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

/* modules/basket/templates/basket-admin-menu.html.twig */
class __TwigTemplate_3be01f474cadf28e46a6827b43818bcaef28ee1030b6faf310f757c10badebdf extends \Twig\Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [(($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "menu", [], "any", false, false, true, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), ($context["attributes"] ?? null), 0], 3, $context, $this->getSourceContext()));
        echo "

";
        // line 37
        echo "
";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "logo", [], "any", false, false, true, 38)) {
            // line 39
            echo "  <div class=\"logo_wrap\">
    ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "logo", [], "any", false, false, true, 40), 40, $this->source));
            echo "
  </div>
";
        }
    }

    // line 5
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "  ";
            $macros["menus"] = $this;
            // line 7
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 8
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 9
                    echo "      <ul class=\"basket_menu\">
    ";
                } else {
                    // line 11
                    echo "      <ul>
    ";
                }
                // line 13
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "        ";
                    if ((($context["menu_level"] ?? null) == 0)) {
                        // line 15
                        echo "            ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 15)) {
                            // line 16
                            echo "              <li class=\"level_0\">
                  <div class=\"group_title\">";
                            // line 17
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                            echo "</div>
                  ";
                            // line 18
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 18), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 18, $context, $this->getSourceContext()));
                            echo "
              </li>
            ";
                        }
                        // line 21
                        echo "        ";
                    } else {
                        // line 22
                        echo "            ";
                        $context["attributes"] = twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 22);
                        // line 23
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 23) && (($context["menu_level"] ?? null) == 1))) {
                            // line 24
                            echo "                ";
                            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "active-trail"], "method", false, false, true, 24);
                            // line 25
                            echo "            ";
                        }
                        // line 26
                        echo "            <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 26, $this->source), "html", null, true);
                        echo ">
            ";
                        // line 27
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 27), 27, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 27), 27, $this->source)), "html", null, true);
                        echo "
            ";
                        // line 28
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 28)) {
                            // line 29
                            echo "              ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 29), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 29, $context, $this->getSourceContext()));
                            echo "
            ";
                        }
                        // line 31
                        echo "        </li>
      ";
                    }
                    // line 33
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "modules/basket/templates/basket-admin-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 34,  157 => 33,  153 => 31,  147 => 29,  145 => 28,  141 => 27,  136 => 26,  133 => 25,  130 => 24,  127 => 23,  124 => 22,  121 => 21,  115 => 18,  111 => 17,  108 => 16,  105 => 15,  102 => 14,  97 => 13,  93 => 11,  89 => 9,  86 => 8,  83 => 7,  80 => 6,  65 => 5,  57 => 40,  54 => 39,  52 => 38,  49 => 37,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/basket/templates/basket-admin-menu.html.twig", "/var/www/13.student.d8c.ru/data/www/13.student.d8c.ru/web/modules/basket/templates/basket-admin-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 2, "if" => 38, "macro" => 5, "for" => 13, "set" => 22);
        static $filters = array("raw" => 40, "escape" => 17);
        static $functions = array("link" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for', 'set'],
                ['raw', 'escape'],
                ['link']
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
