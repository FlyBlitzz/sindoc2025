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

/* statut/index.html.twig */
class __TwigTemplate_92053b84139a332b1f4326fde6531d63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statut/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statut/index.html.twig"));

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

        yield "Statut index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
</head>

<div class=\"classs\" style=\"width: 95%; margin: 150px auto; margin-top: 0px;\">
    <div class=\"row\">
        ";
        // line 15
        yield from $this->load("_partials/_adminnav.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "        <main class=\"col-9 container border border-light bg-white\">
            <h1>Liste des Statuts</h1>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut_app_statut_new");
        yield "\" class=\"btn btn-primary mb-3\"> + Créer un nouveau</a>
            <div class=\"table-responsive\">
                <table class=\"table\" id=\"userTable\">
                    <thead>
                        <tr>
                            <th>Dénomination</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 29
            yield "                            <tr>
                                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "denomination", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"d-flex flex-wrap gap-2\">
                                        <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut_app_statut_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "idstatut", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded tooltip-link\" data-tooltip=\"Afficher le statut\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut_app_statut_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "idstatut", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded tooltip-link\" data-tooltip=\"Modifier le statut\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut_app_statut_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "idstatut", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce statut ?\x27);\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "idstatut", [], "any", false, false, false, 40))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger rounded tooltip-link\" data-tooltip=\"Supprimer le statut\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                            <tr>
                                <td colspan=\"2\">Aucun statut trouvé!</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$(\x27#userTable\x27).DataTable({
            language: {
                url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
            },
            responsive: true,
        });
    });
</script>
    <style>

        .tooltip-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }


        .tooltip-link::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 120%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            white-space: nowrap;
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        .tooltip-link:hover::after {
            opacity: 1;
            visibility: visible;
        }
    </style>
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
        return "statut/index.html.twig";
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
        return array (  187 => 53,  178 => 49,  176 => 48,  163 => 40,  159 => 39,  153 => 36,  147 => 33,  141 => 30,  138 => 29,  133 => 28,  120 => 18,  116 => 16,  114 => 15,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Statut index{% endblock %}

{% block body %}
<head>
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
</head>

<div class=\"classs\" style=\"width: 95%; margin: 150px auto; margin-top: 0px;\">
    <div class=\"row\">
        {% include \"_partials/_adminnav.html.twig\" %}
        <main class=\"col-9 container border border-light bg-white\">
            <h1>Liste des Statuts</h1>
            <a href=\"{{ path(\x27statut_app_statut_new\x27) }}\" class=\"btn btn-primary mb-3\"> + Créer un nouveau</a>
            <div class=\"table-responsive\">
                <table class=\"table\" id=\"userTable\">
                    <thead>
                        <tr>
                            <th>Dénomination</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for statut in statuts %}
                            <tr>
                                <td>{{ statut.denomination }}</td>
                                <td>
                                    <div class=\"d-flex flex-wrap gap-2\">
                                        <a href=\"{{ path(\x27statut_app_statut_show\x27, {\x27id\x27: statut.idstatut}) }}\" class=\"btn btn-outline-primary rounded tooltip-link\" data-tooltip=\"Afficher le statut\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path(\x27statut_app_statut_edit\x27, {\x27id\x27: statut.idstatut}) }}\" class=\"btn btn-outline-primary rounded tooltip-link\" data-tooltip=\"Modifier le statut\">
                                            <i class=\"fas fa-pencil\"></i>
                                        </a>
                                        <form method=\"post\" action=\"{{ path(\x27statut_app_statut_delete\x27, {\x27id\x27: statut.idstatut}) }}\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce statut ?\x27);\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ statut.idstatut) }}\">
                                            <button type=\"submit\" class=\"btn btn-outline-danger rounded tooltip-link\" data-tooltip=\"Supprimer le statut\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">Aucun statut trouvé!</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script>
    \$(document).ready(function() {
        \$(\x27#userTable\x27).DataTable({
            language: {
                url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
            },
            responsive: true,
        });
    });
</script>
    <style>

        .tooltip-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }


        .tooltip-link::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 120%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            white-space: nowrap;
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        .tooltip-link:hover::after {
            opacity: 1;
            visibility: visible;
        }
    </style>
{% endblock %}", "statut/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\statut\\index.html.twig");
    }
}
