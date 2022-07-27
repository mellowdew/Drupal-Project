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

/* modules/basket/templates/views-view-table-lk-orders.html.twig */
class __TwigTemplate_eed2252ad4f6acfb7ceabf93994889e943d277f6f8398970348046c84f8ffbca extends \Twig\Template
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
        // line 36
        $context["classes"] = [0 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 37
($context["header"] ?? null), 37, $this->source))), 1 => ((        // line 38
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 2 => ((        // line 39
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 42
        echo "<table";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ">
  ";
        // line 43
        if (($context["caption_needed"] ?? null)) {
            // line 44
            echo "    <caption>
    ";
            // line 45
            if (($context["caption"] ?? null)) {
                // line 46
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 46, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 48
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 50
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 51
                echo "      <details>
        ";
                // line 52
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 53
                    echo "          <summary>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 53, $this->source), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 55
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 56
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 56, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 58
                echo "      </details>
    ";
            }
            // line 60
            echo "    </caption>
  ";
        }
        // line 62
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 63
            echo "    <thead>
      <tr>
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 66
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 66)) {
                    // line 67
                    echo "            ";
                    // line 68
                    $context["column_classes"] = [0 => "views-field", 1 => ("views-field-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =                     // line 70
($context["fields"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 70, $this->source))];
                    // line 73
                    echo "          ";
                }
                // line 74
                echo "          <th";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 74), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 74), "setAttribute", [0 => "scope", 1 => "col"], "method", false, false, true, 74), 74, $this->source), "html", null, true);
                echo ">";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 75)) {
                    // line 76
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                    echo ">";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 77)) {
                        // line 78
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 80
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                    }
                    // line 82
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 84
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 84)) {
                        // line 85
                        echo "<a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "url", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 87
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "sort_indicator", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    }
                }
                // line 90
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "result", [], "any", false, false, true, 92)) {
                // line 93
                echo "          <th class=\"change_view\"></th>
        ";
            }
            // line 95
            echo "      </tr>
    </thead>
  ";
        }
        // line 98
        echo "  <tbody>
    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key_row"] => $context["row"]) {
            // line 100
            echo "      <tr";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo ">
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 101));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 102
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "default_classes", [], "any", false, false, true, 102)) {
                    // line 103
                    echo "            ";
                    // line 104
                    $context["column_classes"] = [0 => "views-field"];
                    // line 108
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "fields", [], "any", false, false, true, 108));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 109
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null), 109, $this->source), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"], 109, $this->source))]);
                        // line 110
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "          ";
                }
                // line 112
                echo "          <td";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 112), "addClass", [0 => ($context["column_classes"] ?? null)], "method", false, false, true, 112), 112, $this->source), "html", null, true);
                echo ">";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 113)) {
                    // line 114
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
                    echo ">
              ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 115));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 116
                        echo "                ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "              </";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "wrapper_element", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 120));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 121
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "separator", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["content"], "field_output", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 124
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "result", [], "any", false, false, true, 126)) {
                // line 127
                echo "          <td class=\"change_view\">
          \t<a href=\"javascript:void(0);\" class=\"toggle_view_info button\" onclick=\"basket_orders_toggle_info(this, '";
                // line 128
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key_row"], 128, $this->source), "html", null, true);
                echo "')\">+</a>
          </td>
        ";
            }
            // line 131
            echo "      </tr>
      ";
            // line 132
            if (twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "result", [], "any", false, false, true, 132)) {
                // line 133
                echo "        <tr class=\"order_line_info_tr order_line_info_";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key_row"], 133, $this->source), "html", null, true);
                echo "\" style=\"display:none;\">
        \t<td colspan=\"";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "columns", [], "any", false, false, true, 134), 134, $this->source)) + 1), "html", null, true);
                echo "\">
            ";
                // line 135
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["result"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key_row"]] ?? null) : null), "botttomFields", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
                echo "
        \t</td>
        </tr>
      ";
            }
            // line 139
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key_row'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/basket/templates/views-view-table-lk-orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 140,  310 => 139,  303 => 135,  299 => 134,  294 => 133,  292 => 132,  289 => 131,  283 => 128,  280 => 127,  277 => 126,  270 => 124,  262 => 121,  258 => 120,  253 => 118,  243 => 116,  239 => 115,  234 => 114,  232 => 113,  228 => 112,  225 => 111,  219 => 110,  216 => 109,  211 => 108,  209 => 104,  207 => 103,  204 => 102,  200 => 101,  195 => 100,  191 => 99,  188 => 98,  183 => 95,  179 => 93,  176 => 92,  169 => 90,  164 => 87,  154 => 85,  152 => 84,  147 => 82,  143 => 80,  133 => 78,  131 => 77,  127 => 76,  125 => 75,  121 => 74,  118 => 73,  116 => 70,  115 => 68,  113 => 67,  110 => 66,  106 => 65,  102 => 63,  99 => 62,  95 => 60,  91 => 58,  85 => 56,  82 => 55,  76 => 53,  74 => 52,  71 => 51,  68 => 50,  62 => 48,  56 => 46,  54 => 45,  51 => 44,  49 => 43,  44 => 42,  42 => 39,  41 => 38,  40 => 37,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/basket/templates/views-view-table-lk-orders.html.twig", "/var/www/13.student.d8c.ru/data/www/13.student.d8c.ru/web/modules/basket/templates/views-view-table-lk-orders.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 43, "for" => 65);
        static $filters = array("length" => 37, "escape" => 42, "merge" => 109);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
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
