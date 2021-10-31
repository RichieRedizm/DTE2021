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

/* themes/freelancer_zymphonies_theme/templates/content/links--node.html.twig */
class __TwigTemplate_3f536c1994004db52ab47ed6860de82f9aace3e5c8398509555ec579c714f607 extends \Twig\Template
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
        // line 21
        echo " ";
        if (($context["links"] ?? null)) {
            // line 22
            echo "  <div class=\"node__links\">
    ";
            // line 23
            $this->loadTemplate("links.html.twig", "themes/freelancer_zymphonies_theme/templates/content/links--node.html.twig", 23)->display($context);
            // line 24
            echo "  </div>
  ";
        }
        // line 26
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "themes/freelancer_zymphonies_theme/templates/content/links--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 26,  47 => 24,  45 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/freelancer_zymphonies_theme/templates/content/links--node.html.twig", "/var/www/html/docroot/themes/freelancer_zymphonies_theme/templates/content/links--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "include" => 23);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
