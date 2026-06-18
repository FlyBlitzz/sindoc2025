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

/* fiche/liste_fiches.html.twig */
class __TwigTemplate_d640928339f407309b70527ea449f823 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/liste_fiches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/liste_fiches.html.twig"));

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

        yield "Liste des fiches";
        
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
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeFicheRechercher.css"), "html", null, true);
        yield "\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    </head>
    <div class=\"classs\" style=\"width: 80%; margin: 150px auto; margin-top: 0px;\">
        <div class=\"row\">
            ";
        // line 16
        yield from $this->load("_partials/_adminnav.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "            <main class=\"col-12 container border border-light bg-white\">
                <h1> Liste des fiches </h1>
                <form method=\"GET\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_list");
        yield "\" class=\"row g-2 align-items-center\">
                    <div class=\"col-12 col-md-auto\">
                        <select id=\"livre\" name=\"livre\" class=\"form-select\">
                            <option value=\"0\">Tous les livres</option>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 24
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 24), "html", null, true);
            yield "\"
                                        ";
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 25) == (isset($context["selectedLivre"]) || array_key_exists("selectedLivre", $context) ? $context["selectedLivre"] : (function () { throw new RuntimeError('Variable "selectedLivre" does not exist.', 25, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                                    ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                        </select>
                    </div>
                    <div class=\"col-12 col-md-auto\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                    </div>
                </form>

                ";
        // line 36
        yield from $this->load("fiche/fiche_modal.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "                <div class=\"card-body my-4 table-responsive\">
                    ";
        // line 38
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 38, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                        <table class=\"table table-striped table-bordered w-100 pt-2 \" id=\"fichesTable\">
                            <thead>
                            <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                                <th scope=\"col\">Id</th>
                                <th scope=\"col\">Référence</th>
                                <th scope=\"col\">Livre</th>
                                <th scope=\"col\">Dénomination</th>
                                <th scope=\"col\">Statut</th>
                                ";
            // line 47
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                                    <th scope=\"col\">Visibilité</th>
                                ";
            }
            // line 50
            yield "
                                <th scope=\"col\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    ";
        } else {
            // line 58
            yield "                        <h4 style=\"text-align: center\">Aucune fiche trouvée !</h4>
                    ";
        }
        // line 60
        yield "                </div>
            </main>
        </div>

    </div>



    <script>
        function confirmDeleteFiche(url) {
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
                window.location.href = url;
            }
            return false;
        }
    </script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
    <script>
        const isAdmin = ";
        // line 79
        yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";
    </script>
    <script>
        \$(document).ready(function () {

            const fiches = ";
        // line 84
        yield (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 84, $this->source); })());
        yield ";

            \$(\x27#fichesTable\x27).DataTable({
                data: fiches,
                responsive: true,
                language: {
                    paginate: {
                        next: \"Suivant\",
                        previous: \"Précédent\"
                    },
                    info: \x27Page _PAGE_ de _PAGES_\x27,
                    lengthMenu: \x27Afficher _MENU_ fiches\x27
                },
                columns: [
                    {
                        data: \x27Id\x27
                    },
                    {data: \x27refer\x27},
                    {data: \x27livre\x27},
                    {data: \x27denomination\x27},
                    {data: \x27statut\x27},
                    ";
        // line 105
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                    {data: \x27visible\x27}, // Add the visible column only for admins
                    ";
        }
        // line 108
        yield "                    {
                        data: null,
                        render: function (data, type, row, meta) {
                            const rowIndex = meta.row + 1; // Row index (1-based)

                            const totalRows = fiches.length
                            const maxId = fiches.reduce((max, fiche) => fiche.Id > max ? fiche.Id : max, -Infinity);

                            const baseUrlAfficher = \"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total", ["id" => 0]);
        yield "\".replace(\x27/0\x27, \x27\x27);
                            const baseUrlEdit = \"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit", ["id" => 0]);
        yield "\".replace(\"/0\", `/\${data.Id}`);
                            const baseUrlDupliquer = \"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_dupliquer", ["ficheID" => 0]);
        yield "\".replace(\x27/0\x27, \x27\x27);
                            const baseUrlDelete = \"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => 0]);
        yield "\".replace(\x27/0\x27, \x27\x27);



                            let actions = `
        <a href=\"\${baseUrlAfficher}/\${data.Id}?index=\${data.Id}&total=\${maxId}\"
       class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\">
        <i class=\"fas fa-eye me-1\"></i>
    </a>
        <a href=\"#\" 
            class=\"btn btn-outline-secondary btn-sm tooltip-link\" data-tooltip=\"Exporter la fiche\"
            data-toggle=\"modal\" 
            data-target=\"#exportModal\" 
            data-ficheid=\"\${data.Id}\">
                <i class=\"fas fa-download me-1\"></i>
        </a>

`;

                            // Check if the user is an admin or has permission based on their ID
                            if (isAdmin || data.canEdit) {
                                actions += `
                <a href=\"\${baseUrlEdit}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\">
                    <i class=\"fas fa-edit me-1\"></i>
                </a>
        <a href=\"\${baseUrlDupliquer}/\${data.Id}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Dupliquer la fiche\"><i <i class=\"fas fa-regular fa-clone\"></i></a>
               <a href=\"#\" onclick=\"return confirmDeleteFiche(\x27\${baseUrlDelete}/\${data.Id}\x27);\"
                class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\">
                <i class=\"fas fa-trash me-1\"></i>
               </a>
            `;
                            }

                            return `<td class=\"actions-td\">\${actions}</td>`;
                        }
                    }
                ]
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
        return "fiche/liste_fiches.html.twig";
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
        return array (  303 => 119,  299 => 118,  295 => 117,  291 => 116,  281 => 108,  277 => 106,  275 => 105,  251 => 84,  243 => 79,  222 => 60,  218 => 58,  208 => 50,  204 => 48,  202 => 47,  192 => 39,  190 => 38,  187 => 37,  185 => 36,  176 => 29,  167 => 26,  161 => 25,  156 => 24,  152 => 23,  145 => 19,  141 => 17,  139 => 16,  129 => 9,  126 => 8,  113 => 7,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des fiches{% endblock %}
{% block Pagetitle %}
    Liste des fiches
{% endblock %}
{% block body %}
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeFicheRechercher.css\x27) }}\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    </head>
    <div class=\"classs\" style=\"width: 80%; margin: 150px auto; margin-top: 0px;\">
        <div class=\"row\">
            {% include \"_partials/_adminnav.html.twig\" %}
            <main class=\"col-12 container border border-light bg-white\">
                <h1> Liste des fiches </h1>
                <form method=\"GET\" action=\"{{ path(\x27fiche_list\x27) }}\" class=\"row g-2 align-items-center\">
                    <div class=\"col-12 col-md-auto\">
                        <select id=\"livre\" name=\"livre\" class=\"form-select\">
                            <option value=\"0\">Tous les livres</option>
                            {% for livre in livres %}
                                <option value=\"{{ livre.idlivre }}\"
                                        {% if livre.idlivre == selectedLivre %}selected{% endif %}>
                                    {{ livre.nom }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-12 col-md-auto\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                    </div>
                </form>

                {% include \x27fiche/fiche_modal.html.twig\x27 %}
                <div class=\"card-body my-4 table-responsive\">
                    {% if fiches is not empty %}
                        <table class=\"table table-striped table-bordered w-100 pt-2 \" id=\"fichesTable\">
                            <thead>
                            <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                                <th scope=\"col\">Id</th>
                                <th scope=\"col\">Référence</th>
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
                            </tbody>
                        </table>
                    {% else %}
                        <h4 style=\"text-align: center\">Aucune fiche trouvée !</h4>
                    {% endif %}
                </div>
            </main>
        </div>

    </div>



    <script>
        function confirmDeleteFiche(url) {
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
                window.location.href = url;
            }
            return false;
        }
    </script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
    <script>
        const isAdmin = {{ is_granted(\x27ROLE_ADMIN\x27) ? \x27true\x27 : \x27false\x27 }};
    </script>
    <script>
        \$(document).ready(function () {

            const fiches = {{ fiches|raw }};

            \$(\x27#fichesTable\x27).DataTable({
                data: fiches,
                responsive: true,
                language: {
                    paginate: {
                        next: \"Suivant\",
                        previous: \"Précédent\"
                    },
                    info: \x27Page _PAGE_ de _PAGES_\x27,
                    lengthMenu: \x27Afficher _MENU_ fiches\x27
                },
                columns: [
                    {
                        data: \x27Id\x27
                    },
                    {data: \x27refer\x27},
                    {data: \x27livre\x27},
                    {data: \x27denomination\x27},
                    {data: \x27statut\x27},
                    {% if is_granted(\x27ROLE_ADMIN\x27) %}
                    {data: \x27visible\x27}, // Add the visible column only for admins
                    {% endif %}
                    {
                        data: null,
                        render: function (data, type, row, meta) {
                            const rowIndex = meta.row + 1; // Row index (1-based)

                            const totalRows = fiches.length
                            const maxId = fiches.reduce((max, fiche) => fiche.Id > max ? fiche.Id : max, -Infinity);

                            const baseUrlAfficher = \"{{ path(\x27detail_fiche_total\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
                            const baseUrlEdit = \"{{ path(\x27app_fiche_edit\x27, {\x27id\x27: 0}) }}\".replace(\"/0\", `/\${data.Id}`);
                            const baseUrlDupliquer = \"{{ path(\x27fiche_dupliquer\x27, {\x27ficheID\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
                            const baseUrlDelete = \"{{ path(\x27delete_fiche\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);



                            let actions = `
        <a href=\"\${baseUrlAfficher}/\${data.Id}?index=\${data.Id}&total=\${maxId}\"
       class=\"btn btn-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\">
        <i class=\"fas fa-eye me-1\"></i>
    </a>
        <a href=\"#\" 
            class=\"btn btn-outline-secondary btn-sm tooltip-link\" data-tooltip=\"Exporter la fiche\"
            data-toggle=\"modal\" 
            data-target=\"#exportModal\" 
            data-ficheid=\"\${data.Id}\">
                <i class=\"fas fa-download me-1\"></i>
        </a>

`;

                            // Check if the user is an admin or has permission based on their ID
                            if (isAdmin || data.canEdit) {
                                actions += `
                <a href=\"\${baseUrlEdit}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\">
                    <i class=\"fas fa-edit me-1\"></i>
                </a>
        <a href=\"\${baseUrlDupliquer}/\${data.Id}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Dupliquer la fiche\"><i <i class=\"fas fa-regular fa-clone\"></i></a>
               <a href=\"#\" onclick=\"return confirmDeleteFiche(\x27\${baseUrlDelete}/\${data.Id}\x27);\"
                class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\">
                <i class=\"fas fa-trash me-1\"></i>
               </a>
            `;
                            }

                            return `<td class=\"actions-td\">\${actions}</td>`;
                        }
                    }
                ]
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
{% endblock %}", "fiche/liste_fiches.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\liste_fiches.html.twig");
    }
}
