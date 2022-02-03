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

/* themes/custom/exam/templates/page.html.twig */
class __TwigTemplate_b4759cf9d129ee27b028de0ab012ae370ce42b631c171e0c764a849aa6cb7715 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 101
        echo "
";
        // line 103
        $this->displayBlock('main', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 169)) {
            // line 170
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62), 62, $this->source)))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 66)) {
            // line 67
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 67, $this->source), "html", null, true));
            echo "\">
      ";
        }
        // line 69
        echo "          <div class=\"navbar-wrapper\">
            <div class=\"navbar-header\">
              ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 71), 71, $this->source), "html", null, true));
        echo "
              ";
        // line 73
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 73)) {
            // line 74
            echo "                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                  <span class=\"sr-only\">";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation")));
            echo "</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
              ";
        }
        // line 81
        echo "            </div>
      ";
        // line 83
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 83)) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">

          ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 86), 86, $this->source), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 89
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 89)) {
            // line 90
            echo "        </div>
      ";
        }
        // line 92
        echo "        </div>
      <div class=\"block-for-title-header\">
        <p class=\"big-title-header\">creativity</p>
        <p class=\"dark-title-header\">is our life style</p>
        <p class=\"small-title-header\">lorem ipsum is simply dummy text of the print-</br>ing and typesetting industry</p>
      </div>
    </header>
  ";
    }

    // line 103
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 104, $this->source), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 108
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 108)) {
            // line 109
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 114
            echo "      ";
        }
        // line 115
        echo "
      ";
        // line 117
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117)) {
            // line 118
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 123
            echo "      ";
        }
        // line 124
        echo "
      ";
        // line 126
        echo "      ";
        // line 127
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 128
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 129
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 129) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 129)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 130
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 130) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 131
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 131)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 131)))) ? ("col-sm-12") : (""))];
        // line 134
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 134), 134, $this->source), "html", null, true));
        echo ">

        ";
        // line 137
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 137)) {
            // line 138
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 144)) {
            // line 145
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        ";
        // line 151
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 155
        echo "      </section>

      ";
        // line 158
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 158)) {
            // line 159
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 164
            echo "      ";
        }
        // line 165
        echo "    </div>
  </div>
";
    }

    // line 109
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 118
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 138
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 139), 139, $this->source), "html", null, true));
        echo "</div>
          ";
    }

    // line 145
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 146), 146, $this->source), "html", null, true));
        echo "
          ";
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "          <a id=\"main-content\"></a>
          ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 153), 153, $this->source), "html", null, true));
        echo "
        ";
    }

    // line 159
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 161), 161, $this->source), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 170
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 171, $this->source), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 172
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 172), 172, $this->source), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 172,  328 => 171,  324 => 170,  317 => 161,  314 => 160,  310 => 159,  304 => 153,  301 => 152,  297 => 151,  290 => 146,  286 => 145,  279 => 139,  275 => 138,  268 => 120,  265 => 119,  261 => 118,  254 => 111,  251 => 110,  247 => 109,  241 => 165,  238 => 164,  235 => 159,  232 => 158,  228 => 155,  225 => 151,  222 => 149,  219 => 148,  216 => 145,  213 => 144,  210 => 142,  207 => 141,  204 => 138,  201 => 137,  195 => 134,  193 => 131,  192 => 130,  191 => 129,  190 => 128,  189 => 127,  187 => 126,  184 => 124,  181 => 123,  178 => 118,  175 => 117,  172 => 115,  169 => 114,  166 => 109,  163 => 108,  156 => 104,  152 => 103,  141 => 92,  137 => 90,  134 => 89,  128 => 86,  124 => 84,  121 => 83,  118 => 81,  109 => 75,  106 => 74,  103 => 73,  99 => 71,  95 => 69,  89 => 67,  87 => 66,  82 => 65,  80 => 62,  79 => 61,  78 => 59,  76 => 58,  72 => 57,  66 => 170,  64 => 169,  61 => 168,  59 => 103,  56 => 101,  52 => 57,  50 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
          <div class=\"navbar-wrapper\">
            <div class=\"navbar-header\">
              {{ page.navigation }}
              {# .btn-navbar is used as the toggle for collapsed navbar content #}
              {% if page.navigation_collapsible %}
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                  <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
              {% endif %}
            </div>
      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">

          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
        </div>
      <div class=\"block-for-title-header\">
        <p class=\"big-title-header\">creativity</p>
        <p class=\"dark-title-header\">is our life style</p>
        <p class=\"small-title-header\">lorem ipsum is simply dummy text of the print-</br>ing and typesetting industry</p>
      </div>
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/custom/exam/templates/page.html.twig", "/var/www/web/themes/custom/exam/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("clean_class" => 62, "escape" => 65, "t" => 75);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
