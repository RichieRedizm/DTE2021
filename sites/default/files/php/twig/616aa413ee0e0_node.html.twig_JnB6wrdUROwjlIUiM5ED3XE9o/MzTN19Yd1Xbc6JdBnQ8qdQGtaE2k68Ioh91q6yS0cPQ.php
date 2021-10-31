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

/* themes/freelancer_zymphonies_theme/templates/content/node.html.twig */
class __TwigTemplate_4f2b8267fa7120105c600a89ecfc829193ac479f06d87a70980d3bbe0b8e9664 extends \Twig\Template
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
        // line 66
        echo "
";
        // line 68
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "bundle", [], "any", false, false, true, 70), 70, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 71)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 72)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 73)) ? ("node--unpublished") : ("")), 5 => ((        // line 74
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 74, $this->source)))) : (""))];
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true));
        echo "
<article";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true));
        echo ">

  ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 80, $this->source), "html", null, true));
        echo "
  ";
        // line 81
        if ( !($context["page"] ?? null)) {
            // line 82
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 82, $this->source), "html", null, true));
            echo ">
      <a href=\"";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 83, $this->source), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 83, $this->source), "html", null, true));
            echo "</a>
    </h2>
  ";
        }
        // line 86
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 86, $this->source), "html", null, true));
        echo "

  ";
        // line 88
        if (($context["display_submitted"] ?? null)) {
            // line 89
            echo "    <footer class=\"comment-submitted\">
      <div";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted"], "method", false, false, true, 90), 90, $this->source), "html", null, true));
            echo ">
        ";
            // line 91
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 92
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 92, $this->source), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 96
        echo "
  <div";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 97), 97, $this->source), "html", null, true));
        echo ">
    ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 98, $this->source), "html", null, true));
        echo "
  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/freelancer_zymphonies_theme/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 98,  105 => 97,  102 => 96,  94 => 92,  92 => 91,  88 => 90,  85 => 89,  83 => 88,  77 => 86,  69 => 83,  64 => 82,  62 => 81,  58 => 80,  53 => 78,  49 => 77,  47 => 74,  46 => 73,  45 => 72,  44 => 71,  43 => 70,  42 => 68,  39 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/freelancer_zymphonies_theme/templates/content/node.html.twig", "/var/www/html/docroot/themes/freelancer_zymphonies_theme/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 81, "trans" => 91);
        static $filters = array("clean_class" => 70, "escape" => 77);
        static $functions = array("attach_library" => 77);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
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
