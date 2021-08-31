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

/* core/themes/bartik/templates/classy/media-library/views-view-unformatted--media-library.html.twig */
class __TwigTemplate_81aba16df6331c5e02e9bdf2ee4583651321b03116334e7a72bb27a9eb82e8af extends \Twig\Template
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
        if (($context["title"] ?? null)) {
            // line 22
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 22, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "  ";
            // line 26
            $context["row_classes"] = [0 => ((            // line 27
($context["default_row_class"] ?? null)) ? ("views-row") : ("")), 1 => "media-library-item", 2 => "media-library-item--grid"];
            // line 32
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 32), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            // line 34
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/classy/media-library/views-view-unformatted--media-library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 34,  60 => 33,  56 => 32,  54 => 27,  53 => 26,  51 => 25,  47 => 24,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/classy/media-library/views-view-unformatted--media-library.html.twig", "C:\\Users\\Kevin\\Desktop\\proyectoING\\PlantillaCentroInvestigacion\\web\\core\\themes\\bartik\\templates\\classy\\media-library\\views-view-unformatted--media-library.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 24, "set" => 26);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
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
