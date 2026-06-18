<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* breadcrumb.html.twig */
class __TwigTemplate_7e7685e976d720163033be5e3af8793a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "breadcrumb.html.twig"));

        // line 1
        yield "<style>
.breadcrumb {
    background: none;
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: \x27>\x27;
    margin: 0 5px;
    color: #6c757d;
}

.breadcrumb-item a {
    text-decoration: none;
    color: #007bff;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

\tnav[aria-label=\"breadcrumb\"] {
\t\tdisplay: inline;
\t\tfont-size: 14px;
\t\tcolor: #007bff;
\t\tpadding:1em;
\t}

\tnav[aria-label=\"breadcrumb\"] a {
\t\ttext-decoration: none;
\t\tcolor: #007bff;
\t}

\tnav[aria-label=\"breadcrumb\"] a:hover {
\t\ttext-decoration: underline;
\t}

\tnav[aria-label=\"breadcrumb\"] span {
\t\tcolor: #6c757d;
\t\tfont-size:1.1em;
\t}
</style>
<nav aria-label=\"breadcrumb\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 47, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 48
            yield "\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "route", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "route", [], "any", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "routeParams", [], "any", false, false, false, 49)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 49), "html", null, true);
                yield "</a>
\t\t";
            } else {
                // line 51
                yield "\t\t\t<span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 51), "html", null, true);
                yield "</span>
\t\t";
            }
            // line 53
            yield "
\t\t";
            // line 54
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "\t\t\t>
\t\t\t<!-- Séparateur entre les liens -->
\t\t";
            }
            // line 58
            yield "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  154 => 59,  140 => 58,  135 => 55,  133 => 54,  130 => 53,  124 => 51,  116 => 49,  113 => 48,  96 => 47,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
.breadcrumb {
    background: none;
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: \x27>\x27;
    margin: 0 5px;
    color: #6c757d;
}

.breadcrumb-item a {
    text-decoration: none;
    color: #007bff;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

\tnav[aria-label=\"breadcrumb\"] {
\t\tdisplay: inline;
\t\tfont-size: 14px;
\t\tcolor: #007bff;
\t\tpadding:1em;
\t}

\tnav[aria-label=\"breadcrumb\"] a {
\t\ttext-decoration: none;
\t\tcolor: #007bff;
\t}

\tnav[aria-label=\"breadcrumb\"] a:hover {
\t\ttext-decoration: underline;
\t}

\tnav[aria-label=\"breadcrumb\"] span {
\t\tcolor: #6c757d;
\t\tfont-size:1.1em;
\t}
</style>
<nav aria-label=\"breadcrumb\">
\t{% for breadcrumb in breadcrumbs %}
\t\t{% if breadcrumb.route %}
\t\t\t<a href=\"{{ path(breadcrumb.route, breadcrumb.routeParams) }}\">{{ breadcrumb.label }}</a>
\t\t{% else %}
\t\t\t<span>{{ breadcrumb.label }}</span>
\t\t{% endif %}

\t\t{% if not loop.last %}
\t\t\t>
\t\t\t<!-- Séparateur entre les liens -->
\t\t{% endif %}
\t{% endfor %}
</nav>
", "breadcrumb.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\breadcrumb.html.twig");
    }
}
