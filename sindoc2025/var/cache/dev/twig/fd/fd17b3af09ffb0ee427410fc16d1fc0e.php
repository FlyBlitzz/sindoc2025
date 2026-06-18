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

/* index/keywords.html.twig */
class __TwigTemplate_8c7a03b56df667f9fdbfcb8bfbc27240 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/keywords.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/keywords.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mots Clés - Index ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexId"]) || array_key_exists("indexId", $context) ? $context["indexId"] : (function () { throw new RuntimeError('Variable "indexId" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        yield "<div class=\"container mb-5 pb-5\">
    <h1>Liste des mots clés</h1>
    <div style=\"width: 80%; margin: 20px auto; margin-top: 100px; text-align: center;\">
        <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_pdf", ["indexId" => (isset($context["indexId"]) || array_key_exists("indexId", $context) ? $context["indexId"] : (function () { throw new RuntimeError('Variable "indexId" does not exist.', 21, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">Exporter PDF</a>
        <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_word", ["indexId" => (isset($context["indexId"]) || array_key_exists("indexId", $context) ? $context["indexId"] : (function () { throw new RuntimeError('Variable "indexId" does not exist.', 22, $this->source); })())]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Exporter Word</a>
    </div>

    <table id=\"mytable\" class=\"table table-bordered\" style=\"width:100%; margin: 40px auto 0; margin-top: 0px;margin-bottom: 0px;\">
        <thead>
            <tr>
                <th scope=\"col\">Mot-clé</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motsClesSorted"]) || array_key_exists("motsClesSorted", $context) ? $context["motsClesSorted"] : (function () { throw new RuntimeError('Variable "motsClesSorted" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
            // line 34
            yield "                <tr>
                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 35), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "Denomination", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("motCle_app_mot_cle_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "idMotCle", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Supprimer</a>
                        <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("motCle_app_mot_cle_edit_un_mot", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "idMotCle", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 20px;\">
        <strong><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_index");
        yield "\">Retour à la liste</a></strong>
    </div>
</div>
    <script>
        \$(document).ready(function() {
            \$(\x27#mytable\x27).DataTable({
                language: {
                    url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
                },
                responsive: true,
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index/keywords.html.twig";
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
        return array (  220 => 45,  215 => 42,  205 => 38,  201 => 37,  194 => 35,  191 => 34,  187 => 33,  173 => 22,  169 => 21,  164 => 18,  151 => 17,  135 => 12,  122 => 11,  108 => 7,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Mots Clés - Index {{ indexId }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
{% endblock %}

{% block body %}
<div class=\"container mb-5 pb-5\">
    <h1>Liste des mots clés</h1>
    <div style=\"width: 80%; margin: 20px auto; margin-top: 100px; text-align: center;\">
        <a href=\"{{ path(\x27export_pdf\x27, {\x27indexId\x27: indexId}) }}\" class=\"btn btn-primary\" style=\"margin-right: 10px;\">Exporter PDF</a>
        <a href=\"{{ path(\x27export_word\x27, {\x27indexId\x27: indexId}) }}\" class=\"btn btn-secondary\">Exporter Word</a>
    </div>

    <table id=\"mytable\" class=\"table table-bordered\" style=\"width:100%; margin: 40px auto 0; margin-top: 0px;margin-bottom: 0px;\">
        <thead>
            <tr>
                <th scope=\"col\">Mot-clé</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for motCle in motsClesSorted %}
                <tr>
                    <td>{{ motCle.reference }}:{{ motCle.Denomination }}</td>
                    <td>
                        <a href=\"{{ path(\x27motCle_app_mot_cle_delete\x27, {\x27id\x27: motCle.idMotCle}) }}\" class=\"btn btn-secondary\">Supprimer</a>
                        <a href=\"{{ path(\x27motCle_app_mot_cle_edit_un_mot\x27, {\x27id\x27: motCle.idMotCle}) }}\" class=\"btn btn-secondary\">Modifier</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div style=\"text-align: center; margin-top: 20px;\">
        <strong><a href=\"{{ path(\x27index_app_index_index\x27) }}\">Retour à la liste</a></strong>
    </div>
</div>
    <script>
        \$(document).ready(function() {
            \$(\x27#mytable\x27).DataTable({
                language: {
                    url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
                },
                responsive: true,
            });
        });
    </script>
{% endblock %}", "index/keywords.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\index\\keywords.html.twig");
    }
}
