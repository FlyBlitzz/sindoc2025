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

/* fiche/Fiche_cachee.html.twig */
class __TwigTemplate_c593ef7af9ab237f2ccc37937b3306dd extends Template
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
            'Pagetitle' => [$this, 'block_Pagetitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/Fiche_cachee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/Fiche_cachee.html.twig"));

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

        yield "Liste des fiches non visibles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_Pagetitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Pagetitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Pagetitle"));

        // line 5
        yield "    Liste des fiches
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/showUser.css"), "html", null, true);
        yield "\">
        <!-- Lien vers Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">
    </head>

    ";
        // line 19
        yield "    <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\" >
            ";
        // line 22
        yield from $this->load("_partials/_adminnav.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "            <main class=\"col-9 container border border-light bg-white p-2\">
                ";
        // line 24
        if (((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 24, $this->source); })()) != [])) {
            // line 25
            yield "                    <h4>Fiches non visibles :</h4>
                    <table class=\"table table-bordered\" >
                        <thead>
                        <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                            <th scope=\"col\">Reference</th>
                            <th scope=\"col\">Livre</th>
                            <th scope=\"col\">Dénomination</th>
                            <th scope=\"col\">Statut</th>
                            ";
            // line 33
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                                <th scope=\"col\">Visibilité</th>
                            ";
            }
            // line 36
            yield "
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
                // line 42
                yield "                            <tr class=\"table-light\">
                                <th scope=\"row\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "refer", [], "any", false, false, false, 43), "html", null, true);
                yield "</th>
                                <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "livre", [], "any", false, false, false, 44), "getNom", [], "method", false, false, false, 44), "html", null, true);
                yield "</td>
                                <td>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "denomination", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                                <td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 46), "getDenomination", [], "method", false, false, false, 46), "html", null, true);
                yield "</td>
                                ";
                // line 47
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                                    <td style=\"text-align: center\">
                                        <form method=\"POST\" action=\"";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_hide", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 49)]), "html", null, true);
                    yield "\" id=\"form_desactive_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 49), "html", null, true);
                    yield "\" class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                            <label class=\"switch\">
                                                <input type=\"checkbox\" name=\"desactive\" ";
                    // line 52
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "visible", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " checked ";
                    }
                    // line 53
                    yield "                                                       onchange=\"document.getElementById(\x27form_desactive_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 53), "html", null, true);
                    yield "\x27).submit()\">
                                                <span class=\"slider round\"></span>
                                            </label>
                                        </form>
                                    </td>
                                ";
                }
                // line 59
                yield "
                                <td>
                                    <a href=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 61)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher l\x27utilisateur\"><i class=\"fas fa-eye me-1\"></i></a>
                                    ";
                // line 62
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "getId", [], "method", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getLivre", [], "method", false, false, false, 62), "getIdLivreAuto", [], "method", false, false, false, 62)))) {
                    // line 63
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit_total", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 63)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier l\x27utilisateur\"><i class=\"fas fa-edit me-1\"></i></a>
                                        <a href=\"#\" onclick=\"return confirmDeleteFiche(\x27";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 64)]), "html", null, true);
                    yield "\x27);\" class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer l\x27utilisateur\"><i class=\"fas fa-trash me-1\"></i></a>
                                    ";
                }
                // line 66
                yield "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 72
            yield "                    <h4 style=\"text-align: center\">Aucune fiche n\x27est non visible !</h4>
                ";
        }
        // line 74
        yield "            </main>
        </div>
    </div>

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
        return "fiche/Fiche_cachee.html.twig";
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
        return array (  269 => 74,  265 => 72,  260 => 69,  252 => 66,  247 => 64,  242 => 63,  240 => 62,  236 => 61,  232 => 59,  222 => 53,  218 => 52,  210 => 49,  207 => 48,  205 => 47,  201 => 46,  197 => 45,  193 => 44,  189 => 43,  186 => 42,  182 => 41,  175 => 36,  171 => 34,  169 => 33,  159 => 25,  157 => 24,  154 => 23,  152 => 22,  147 => 19,  141 => 15,  135 => 12,  131 => 11,  126 => 8,  113 => 7,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des fiches non visibles{% endblock %}
{% block Pagetitle %}
    Liste des fiches
{% endblock %}
{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/showUser.css\x27) }}\">
        <!-- Lien vers Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeUsers.css\x27) }}\">
    </head>

    {#Vérifier si la list de fiches transmise est vide #}
    <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\" >
            {% include \"_partials/_adminnav.html.twig\"%}
            <main class=\"col-9 container border border-light bg-white p-2\">
                {% if fiches != [] %}
                    <h4>Fiches non visibles :</h4>
                    <table class=\"table table-bordered\" >
                        <thead>
                        <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                            <th scope=\"col\">Reference</th>
                            <th scope=\"col\">Livre</th>
                            <th scope=\"col\">Dénomination</th>
                            <th scope=\"col\">Statut</th>
                            {% if is_granted(\x27ROLE_ADMIN\x27) %}
                                <th scope=\"col\">Visibilité</th>
                            {% endif %}

                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for fiche in fiches %}
                            <tr class=\"table-light\">
                                <th scope=\"row\">{{ fiche.refer }}</th>
                                <td>{{ fiche.livre.getNom() }}</td>
                                <td>{{ fiche.denomination }}</td>
                                <td>{{ fiche.statut.getDenomination() }}</td>
                                {% if is_granted(\x27ROLE_ADMIN\x27) %}
                                    <td style=\"text-align: center\">
                                        <form method=\"POST\" action=\"{{ path(\x27app_fiche_hide\x27, {\x27id\x27: fiche.getIdFiche()}) }}\" id=\"form_desactive_{{ fiche.getIdFiche()}}\" class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                            <label class=\"switch\">
                                                <input type=\"checkbox\" name=\"desactive\" {% if fiche.visible %} checked {% endif %}
                                                       onchange=\"document.getElementById(\x27form_desactive_{{ fiche.getIdFiche() }}\x27).submit()\">
                                                <span class=\"slider round\"></span>
                                            </label>
                                        </form>
                                    </td>
                                {% endif %}

                                <td>
                                    <a href=\"{{ path(\x27detail_fiche_total\x27, {id: fiche.getIdFiche()}) }}\" class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher l\x27utilisateur\"><i class=\"fas fa-eye me-1\"></i></a>
                                    {% if is_granted(\x27ROLE_ADMIN\x27)  or app.user.getId() in fiche.getLivre().getIdLivreAuto()%}
                                        <a href=\"{{ path(\x27app_fiche_edit_total\x27, {id: fiche.getIdFiche()}) }}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier l\x27utilisateur\"><i class=\"fas fa-edit me-1\"></i></a>
                                        <a href=\"#\" onclick=\"return confirmDeleteFiche(\x27{{ path(\x27delete_fiche\x27, {id: fiche.getIdFiche()}) }}\x27);\" class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer l\x27utilisateur\"><i class=\"fas fa-trash me-1\"></i></a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <h4 style=\"text-align: center\">Aucune fiche n\x27est non visible !</h4>
                {% endif %}
            </main>
        </div>
    </div>

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

{% endblock %}", "fiche/Fiche_cachee.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\Fiche_cachee.html.twig");
    }
}
