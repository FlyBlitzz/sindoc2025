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

/* fiche/liste_fichesRech.html.twig */
class __TwigTemplate_266d9cfdddc9753fa39d41e0b472e0b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/liste_fichesRech.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/liste_fichesRech.html.twig"));

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

        yield "Liste des fiches
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    Liste des fiches
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeFicheRechercher.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dataTables.css"), "html", null, true);
        yield "\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easy-pie-chart.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>
        <!-- jQuery 3.6.0 (Required for Select2) -->


        <style>
            .tooltip-link {
                position: relative;
                display: inline-block;
                text-decoration: none;
                cursor: pointer;
            }

            option {
                max-width: 200px !important;
            }

            /* Tooltip text */
            .tooltip-link::after {
                content: attr(data-tooltip); /* Use the attribute value */
                position: absolute;
                bottom: 120%; /* Position above the link */
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

    </head>
    ";
        // line 59
        yield from $this->load("breadcrumb.html.twig", 59)->unwrap()->yield(CoreExtension::merge($context, ["breadcrumbs" => (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 59, $this->source); })())]));
        // line 60
        yield "    ";
        yield from $this->load("fiche/fiche_modal.html.twig", 60)->unwrap()->yield($context);
        // line 61
        yield "    <div class=\"card-body classs\">
        <h3 style=\"text-align: center; margin-bottom: 30px; \">
            Résultat de recherche pour :
            ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["motClesSelect"]) || array_key_exists("motClesSelect", $context) ? $context["motClesSelect"] : (function () { throw new RuntimeError('Variable "motClesSelect" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "</h3>

        ";
        // line 66
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 66, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "            <div class=\"table-responsive\">
                <table class=\"table table-hover table-borderless\" id=\"fichesTable\">
                    <thead>
                    <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                        <th>#</th>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Référence</th>
                        <th scope=\"col\">Livre</th>
                        <th scope=\"col\">Dénomination</th>
                        <th scope=\"col\">Statut</th>
                        ";
            // line 77
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                            <th scope=\"col\">Visible</th>
                        ";
            }
            // line 80
            yield "                        <th scope=\"col\" style=\"display:flex;\">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 86
            yield "                    </tbody>
                </table>
            </div>

        ";
        } else {
            // line 91
            yield "            <p>Aucune fiche trouvée pour les critères de recherche.</p>
        ";
        }
        // line 93
        yield "
        ";
        // line 94
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 94, $this->source); })()), "getIndex", [], "method", false, false, false, 94), "getMotCles", [], "method", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "        <div class=\"container-fluid\">
            <div class=\"chart-container d-flex justify-content-between flex-md-row flex-sm-column align-items-md-start align-items-sm-center\">
                <div class=\"col-12 col-md-5 col-sm-12\">
                    <select name=\"pets\" id=\"pet-select\" class=\"form-select\">
                        <option value=\"\">------- Apparition des mots clés -------</option>
                        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motCleOccurrences"]) || array_key_exists("motCleOccurrences", $context) ? $context["motCleOccurrences"] : (function () { throw new RuntimeError('Variable "motCleOccurrences" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
                // line 101
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 101), "html", null, true);
                yield "\">
                                ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 102), "html", null, true);
                yield " : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 102), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "count", [], "any", false, false, false, 102), "html", null, true);
                yield ")
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                    </select>
                    <script>
                        // Assuming `fiches` is a JavaScript object or array containing your fiche data
                        \$(document).ready(function () {

                            const fichesPdf = ";
            // line 110
            yield (isset($context["fichesJSON"]) || array_key_exists("fichesJSON", $context) ? $context["fichesJSON"] : (function () { throw new RuntimeError('Variable "fichesJSON" does not exist.', 110, $this->source); })());
            yield ";

                            // Serialize the JavaScript object into a JSON string
                            const ficheDataSerializedPdf = JSON.stringify(fichesPdf);

                            // Set the value of the hidden input field with the serialized data
                            document.getElementById(\"ficheDataPdf\").value = ficheDataSerializedPdf;
                            document.getElementById(\"ficheDataWord\").value = ficheDataSerializedPdf;
                        })
                    </script>
                </div>

                ";
        }
        // line 123
        yield "

                ";
        // line 125
        $context["nbrFicheTotal"] = 0;
        // line 126
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 126, $this->source); })()), "getFiche", [], "method", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 127
            yield "                    ";
            $context["nbrFicheTotal"] = ((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 127, $this->source); })()) + 1);
            // line 128
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "                ";
        $context["nbrFiche"] = 0;
        // line 130
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 131
            yield "                    ";
            if (CoreExtension::inFilter($context["fiche"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 131, $this->source); })()), "getFiche", [], "method", false, false, false, 131))) {
                // line 132
                yield "                        ";
                $context["nbrFiche"] = ((isset($context["nbrFiche"]) || array_key_exists("nbrFiche", $context) ? $context["nbrFiche"] : (function () { throw new RuntimeError('Variable "nbrFiche" does not exist.', 132, $this->source); })()) + 1);
                // line 133
                yield "                    ";
            }
            // line 134
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "

                ";
        // line 137
        if (((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 137, $this->source); })()) != 0)) {
            // line 138
            yield "
                ";
            // line 139
            if (((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 139, $this->source); })()) != 0)) {
                // line 140
                yield "                    ";
                yield from $this->load("fiche/chart/circular_chart.html.twig", 140)->unwrap()->yield(CoreExtension::merge($context, ["nbrFiches" =>                 // line 141
(isset($context["nbrFiches"]) || array_key_exists("nbrFiches", $context) ? $context["nbrFiches"] : (function () { throw new RuntimeError('Variable "nbrFiches" does not exist.', 141, $this->source); })()), "nbrFicheTotal" =>                 // line 142
(isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 142, $this->source); })())]));
                // line 144
                yield "                ";
            }
            // line 145
            yield "            </div>
            ";
            // line 156
            yield "            ";
            // line 158
            yield "
        </div>

        <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
        <script>

            \$(\x27#pet-select\x27).select2({
                width: \x27100%\x27 // Makes it responsive
            });

            ";
            // line 173
            yield "        </script>
        <script>
            \$(document).ready(function () {
                const fiches = ";
            // line 176
            yield (isset($context["fichesJSON"]) || array_key_exists("fichesJSON", $context) ? $context["fichesJSON"] : (function () { throw new RuntimeError('Variable "fichesJSON" does not exist.', 176, $this->source); })());
            yield ";
                console.log(fiches);
                \$(\x27#fichesTable\x27).DataTable({
                    data: fiches,
                    responsive: true,
                    \"columnDefs\": [
                        {\"orderable\": false, \"targets\": [5]} // Remplace X par l\x27index de ta colonne (commence à 0)
                    ],
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
                            data: null,
                            render: function (data, type, row, meta) {
                                return `<td data-cell=\"Numéro\">\${
                                    meta.row + 1
                                }</td>`;
                            }
                        },
                        {
                            data: \x27Id\x27,
                            visible: false,
                            searchable: false
                        },
                        {
                            data: \x27refer\x27,
                            render: function (data) {
                                return `<td data-cell=\"Référence\">\${data}</td>`;
                            }
                        },
                        {
                            data: \x27livre\x27,
                            render: function (data) {
                                return `<td data-cell=\"Livre\">\${data}</td>`;
                            }
                        }, {
                            data: \x27denomination\x27,
                            render: function (data) {
                                return `<td data-cell=\"Dénomination\">\${data}</td>`;
                            }
                        }, {
                            data: \x27statut\x27,
                            render: function (data) {
                                return `<td data-cell=\"Statut\">\${data}</td>`;
                            }
                        },";
            // line 227
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 228
                yield "                        {
                            data: \x27visible\x27,
                            render: function (data) {
                                return `<td data-cell=\"Visible\">\${data}</td>`;
                            }
                        },";
            }
            // line 234
            yield "
                        {
                            data: null,
                            render: function (data, type, row, meta) {
                                const rowIndex = meta.row + 1;
                                const totalRows = fiches.length;

                                const baseUrlAfficher = \"";
            // line 241
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total_rech", ["id" => 0]);
            yield "\".replace(\x27/0\x27, \x27\x27);
                                const baseUrlEdit = \"";
            // line 242
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_rech_edit", ["id" => 0]);
            yield "\".replace(\"/0\", `/\${data.Id}`);
                                const baseUrlDupliquer = \"";
            // line 243
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_dupliquer", ["ficheID" => 0]);
            yield "\".replace(\x27/0\x27, \x27\x27);
                                const baseUrlDelete = \"";
            // line 244
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => 0]);
            yield "\".replace(\x27/0\x27, \x27\x27);

                                let actions = `
<td data-cell=\"Actions\">
    <a href=\"\${baseUrlAfficher}/\${
                                    data.Id
                                }?index=\${rowIndex}&total=\${totalRows}\"
       class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\">
        <i class=\"fas fa-eye me-1\"></i>
    </a>
    <a href=\"#\" 
       class=\"btn btn-outline-secondary btn-sm tooltip-link\" 
       data-tooltip=\"Exporter la fiche\" 
       data-toggle=\"modal\" 
       data-target=\"#exportModal\" 
       data-ficheid=\"\${
                                    data.Id
                                }\">
        <i class=\"fas fa-download me-1\"></i>
    </a>`;

                                if (isAdmin || data.canEdit) {

                                    actions += `
    <a href=\"\${baseUrlEdit}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\">
        <i class=\"fas fa-edit me-1\"></i>
    </a>
        <a href=\"\${baseUrlDupliquer}/\${data.Id}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Dupliquer la fiche\"><i class=\"fas fa-regular fa-clone\"></i></a>

    <a href=\"#\" onclick=\"return confirmDeleteFiche(\x27\${baseUrlDelete}/\${
                                        data.Id
                                    }\x27);\"
       class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\">
        <i class=\"fas fa-trash me-1\"></i>
    </a>`;
                                }

                                actions += `</td>`;
                                return actions;
                            }
                        }
                    ],
                    \"initComplete\": function () {
                        \$(\x27#fichesTable\x27).fadeIn(); // Afficher la table après chargement
                    },
                    createdRow: function (row, data, dataIndex) {
                        \$(row).find(\x27td\x27).each(function (index) {
                            const columnName = \$(\x27#fichesTable thead th\x27).eq(index).text().trim();
                            \$(this).attr(\x27data-cell\x27, columnName);
                        });
                    }
                });
            });
        </script>


        ";
            // line 300
            yield from $this->load("fiche/fiche_export_pdf_modal.html.twig", 300)->unwrap()->yield($context);
            // line 301
            yield "        ";
            yield from $this->load("fiche/fiche_export_word_modal.html.twig", 301)->unwrap()->yield($context);
            // line 302
            yield "        <div class=\"col-12 d-flex flex-column flex-sm-column flex-lg-row flex-xl-row gap-2\" style=\"display:flex; margin-bottom: 50px\">
            ";
            // line 303
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
                // line 304
                yield "                <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_new");
                yield "\" class=\"card-link btn btn-order\">Enregistrer
                    la requete</a>
            ";
            }
            // line 307
            yield "
            <button id=\"exportPDFButton\" class=\"btn btn-order mx-2\">Exporter les graphes PDF</button>
            <button id=\"exportZIPButton\" class=\"btn btn-order mx-2\"
            >Exporter les graphes ZIP
            </button>
            ";
            // line 313
            yield "            <input type=\"hidden\" id=\"ficheDataPdf\" name=\"ficheDataPdf\" value=\"\">
            ";
            // line 315
            yield "            <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#exportModalPdf\">
                Exporter vers PDF
            </button>
            <input type=\"hidden\" id=\"ficheDataWord\" name=\"ficheDataWord\" value=\"\">
            <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#exportModalword\">Exporter vers Word
            </button>
            <a href=\"#\" onclick=\"exportToExcel()\" class=\"btn btn-order\">Exporter vers Excel</a>
        </div>
        ";
            // line 326
            yield "
        ";
        } else {
            // line 328
            yield "        <p>Aucune fiche disponible pour ce livre !</p>
        ";
        }
        // line 330
        yield "
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/html-docx-js/dist/html-docx.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js\"></script>
        <canvas id=\"keywordChart1\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart2\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart3\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart4\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart5\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart6\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>

        <!-- Include jsPDF and JSZip libraries -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>

        <script>
            function generateGraph1() {
                const keywordOccurrences = {};
                const livre = \"";
        // line 350
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 350, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 350, $this->source); })()), 0, [], "array", false, false, false, 350), "livre", [], "any", false, false, false, 350), "html", null, true)) : (""));
        yield "\";";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 350, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 351
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getMotCles", [], "method", false, false, false, 351));
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                // line 352
                yield "                if (keywordOccurrences.hasOwnProperty(\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 352), "html", null, true);
                yield "\x27)) {
                    keywordOccurrences[\x27";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 353), "html", null, true);
                yield "\x27] += 1;
                } else {
                    keywordOccurrences[\x27";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 355), "html", null, true);
                yield "\x27] = 1;
                }
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        yield "
                const keywordsData = Object.keys(keywordOccurrences).map(keyword => ({
                    label: keyword,
                    value: keywordOccurrences[keyword]
                })).sort((a, b) => a.label.localeCompare(b.label));

                const labels = keywordsData.map(data => data.label);
                const values = keywordsData.map(data => data.value);

                const ctx1 = document.getElementById(\x27keywordChart1\x27).getContext(\x272d\x27);
                const chart1 = new Chart(ctx1, {
                    type: \x27bar\x27,
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: \x27Occurrences des mots-clés\x27,
                                data: values,
                                backgroundColor: \x27rgba(54, 162, 235, 0.5)\x27,
                                borderColor: \x27rgba(54, 162, 235, 1)\x27,
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Occurrences des mots-clés`,
                                font: {
                                    size: 28
                                }
                            },

                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27center\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph2() {
                const keywordStatusOccurrences = {};
                const livre = \"";
        // line 428
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 428, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 428, $this->source); })()), 0, [], "array", false, false, false, 428), "livre", [], "any", false, false, false, 428), "html", null, true)) : (""));
        yield "\";
                const fichesData = [";
        // line 429
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 429, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 430
            yield "                    {
                        statut: \"";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 431), "html", null, true);
            yield "\",
                        mots: [";
            // line 432
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 432));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                yield "\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 432), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 432)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 433
                yield "                            ";
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
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "]
                    }
                    ";
            // line 435
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 436
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];

                const keywordColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.5)`;
                };

// Group data by statut and count keywords
                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!keywordStatusOccurrences[statut]) {
                        keywordStatusOccurrences[statut] = {};
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordColors[mot]) {
                            keywordColors[mot] = getRandomColor();
                        }

                        if (!keywordStatusOccurrences[statut][mot]) {
                            keywordStatusOccurrences[statut][mot] = 0;
                        }
                        keywordStatusOccurrences[statut][mot] += 1;
                    });
                });

// Prepare datasets for each keyword
                const allKeywords = Object.keys(keywordColors);
                const labels = Object.keys(keywordStatusOccurrences).sort(); // Sort statuts alphabetically
                const datasets = allKeywords.map(keyword => {
                    const data = labels.map(statut => keywordStatusOccurrences[statut][keyword] || 0); // Default to 0 if no data
                    return {
                        label: `\${keyword}`,
                        data: data,
                        backgroundColor: keywordColors[keyword],
                        borderColor: keywordColors[keyword].replace(\x270.5\x27, \x271\x27),
                        borderWidth: 1
                    };
                });

// Create the chart
                const ctx2 = document.getElementById(\x27keywordChart2\x27).getContext(\x272d\x27);
                const keywordChart2 = new Chart(ctx2, {
                    type: \x27bar\x27,
                    data: {
                        labels: labels, // Statuts on the x-axis (sorted)
                        datasets: datasets // Grouped by keywords
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Statut des mots-clés`,
                                font: {
                                    size: 28
                                }
                            },
// Configure the datalabels plugin
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27center\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph3() {
                const keywordStatusOccurrences = {};
                const livre = \"";
        // line 533
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 533, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 533, $this->source); })()), 0, [], "array", false, false, false, 533), "livre", [], "any", false, false, false, 533), "html", null, true)) : (""));
        yield "\";
                const fichesData = [";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 534, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 535
            yield "                    {
                        statut: \"";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 536), "html", null, true);
            yield "\",
                        mots: [";
            // line 537
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 537));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                yield "\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 537), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 538
                yield "                            ";
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
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "]
                    }
                    ";
            // line 540
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 540)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 541
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];

                const statutColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.5)`;
                };

// Organize occurrences by keyword and statut
                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!statutColors[statut]) {
                        statutColors[statut] = getRandomColor();
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordStatusOccurrences[mot]) {
                            keywordStatusOccurrences[mot] = {};
                        }

                        if (!keywordStatusOccurrences[mot][statut]) {
                            keywordStatusOccurrences[mot][statut] = 0;
                        }
                        keywordStatusOccurrences[mot][statut] += 1;
                    });
                });

// Sort keywords alphabetically for X-axis
                const labels = Object.keys(keywordStatusOccurrences).sort(); // ✅ Sorted X-axis (keywords)
                const allStatuts = Object.keys(statutColors);

// Prepare datasets for each statut
                const datasets = allStatuts.map(statut => {
                    const data = labels.map(keyword => keywordStatusOccurrences[keyword][statut] || 0); // Default to 0 if no data
                    return {
                        label: `Statut: \${statut}`,
                        data: data,
                        backgroundColor: statutColors[statut],
                        borderColor: statutColors[statut].replace(\x270.5\x27, \x271\x27),
                        borderWidth: 1
                    };
                });

// Create the chart
                const ctx3 = document.getElementById(\x27keywordChart3\x27).getContext(\x272d\x27);
                const keywordChart3 = new Chart(ctx3, {
                    type: \x27bar\x27,
                    data: {
                        labels: labels, // Keywords on the x-axis (Sorted)
                        datasets: datasets // Grouped by statut
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Distribution des statuts par mots-clés`,
                                font: {
                                    size: 28
                                }
                            },
                            tooltip: {
                                mode: \x27index\x27,
                                intersect: false
                            },
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27center\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        responsive: true,
                        scales: {
                            x: {
                                stacked: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                stacked: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph4() {
                const keywordStatusOccurrences = {};
                const livre = \"";
        // line 646
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 646, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 646, $this->source); })()), 0, [], "array", false, false, false, 646), "livre", [], "any", false, false, false, 646), "html", null, true)) : (""));
        yield "\";
                const fichesData = [";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 647, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 648
            yield "                    {
                        statut: \"";
            // line 649
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 649), "html", null, true);
            yield "\",
                        mots: [";
            // line 650
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 650));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                yield "\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 650), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 650)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 651
                yield "                            ";
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
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "]
                    }
                    ";
            // line 653
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 653)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 654
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];

                const statutColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.7)`;
                };

                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!statutColors[statut]) {
                        statutColors[statut] = getRandomColor();
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordStatusOccurrences[mot]) {
                            keywordStatusOccurrences[mot] = {};
                        }

                        if (!keywordStatusOccurrences[mot][statut]) {
                            keywordStatusOccurrences[mot][statut] = 0;
                        }
                        keywordStatusOccurrences[mot][statut] += 1;
                    });
                });

// Sort keywords alphabetically for X-axis
                const labels = Object.keys(keywordStatusOccurrences).sort();
                const allStatuts = Object.keys(statutColors);

// Prepare datasets for each statut
                const datasets = allStatuts.map(statut => {
                    const data = labels.map(keyword => keywordStatusOccurrences[keyword][statut] || 0);
                    return {
                        label: `Statut: \${statut}`,
                        data: data,
                        backgroundColor: statutColors[statut],
                        borderColor: statutColors[statut].replace(\x270.7\x27, \x271\x27),
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    };
                });


                const ctx4 = document.getElementById(\x27keywordChart4\x27).getContext(\x272d\x27);
                const keywordChart4 = new Chart(ctx4, {
                    type: \x27line\x27,
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Évolution des statuts par mots-clés`,
                                font: {
                                    size: 28
                                }
                            },
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27top\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        responsive: true,
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                stacked: true,
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph5() {
                const keywordStatusOccurrences = {};
                const livre = \"";
        // line 755
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 755, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 755, $this->source); })()), 0, [], "array", false, false, false, 755), "livre", [], "any", false, false, false, 755), "html", null, true)) : (""));
        yield "\";
                const fichesData = [";
        // line 756
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 756, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 757
            yield "                    {
                        statut: \"";
            // line 758
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 758), "html", null, true);
            yield "\",
                        mots: [";
            // line 759
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 759));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                yield "\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 759), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 759)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 760
                yield "                            ";
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
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "]
                    }
                    ";
            // line 762
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 762)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 763
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];

                const statutColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.4)`; // Semi-transparent color for fill
                };

                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!statutColors[statut]) {
                        statutColors[statut] = getRandomColor();
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordStatusOccurrences[mot]) {
                            keywordStatusOccurrences[mot] = {};
                        }

                        if (!keywordStatusOccurrences[mot][statut]) {
                            keywordStatusOccurrences[mot][statut] = 0;
                        }
                        keywordStatusOccurrences[mot][statut] += 1;
                    });
                });

// Sort keywords alphabetically for X-axis (same as generateGraph4)
                const labels = Object.keys(keywordStatusOccurrences).sort();
                const allStatuts = Object.keys(statutColors);

// Prepare datasets for each statut (same as generateGraph4)
                const datasets = allStatuts.map(statut => {
                    const data = labels.map(keyword => keywordStatusOccurrences[keyword][statut] || 0);
                    return {
                        label: `Statut: \${statut}`,
                        data: data,
                        backgroundColor: statutColors[statut], // Fill color
                        borderColor: statutColors[statut].replace(\x270.4\x27, \x271\x27), // Border color
                        borderWidth: 2,
                        fill: true, // Enable fill (same as generateGraph4)
                        tension: 0.4 // Smooth lines (same as generateGraph4)
                    };
                });

                const ctx5 = document.getElementById(\x27keywordChart5\x27).getContext(\x272d\x27);
                new Chart(ctx5, {
                    type: \x27line\x27,
                    data: {
                        labels: labels, // Sorted keywords on X-axis (same as generateGraph4)
                        datasets: datasets
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Statuts par mots-clés (non cumulé)`,
                                font: {
                                    size: 28
                                }
                            },
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27top\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        responsive: true,
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    } // Consistent font size with generateGraph4
                                },
                                title: {
                                    display: true,
                                    text: \"Mots-clés\", // X-axis title
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }, // Consistent font size with generateGraph4
                                title: {
                                    display: true,
                                    text: \"Occurrences\", // Y-axis title
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

        function generateGraph6() {
            const keywordStatusOccurrences = {};
            const livre = \"";
        // line 876
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 876, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 876, $this->source); })()), 0, [], "array", false, false, false, 876), "livre", [], "any", false, false, false, 876), "html", null, true)) : (""));
        yield "\";
            const fichesData = [";
        // line 877
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 877, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 878
            yield "                {
                    statut: \"";
            // line 879
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 879), "html", null, true);
            yield "\",
                    mots: [";
            // line 880
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 880));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                yield "\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 880), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 880)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 881
                yield "                        ";
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
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "]
                }
                ";
            // line 883
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 883)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 884
            yield "                ";
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
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];

            const statutColors = {};
            const getRandomColor = () => {
                const r = Math.floor(Math.random() * 256);
                const g = Math.floor(Math.random() * 256);
                const b = Math.floor(Math.random() * 256);
                return `rgba(\${r}, \${g}, \${b}, 0.8)`; // Couleur semi-transparente
            };

            // Compter les occurrences des statuts
            const statutOccurrences = {};
            let totalKeywords = 0; // Variable to store the total number of keywords

            fichesData.forEach(fiche => {
                const statut = fiche.statut;
                if (!statutOccurrences[statut]) {
                    statutOccurrences[statut] = 0;
                }
                statutOccurrences[statut] += fiche.mots.length; // Nombre de mots-clés par statut
                totalKeywords += fiche.mots.length; // Add to the total count
            });

            // Préparer les données pour le pie chart
            const labels = Object.keys(statutOccurrences);
            const data = labels.map(statut => statutOccurrences[statut]);
            const backgroundColors = labels.map(statut => {
                if (!statutColors[statut]) {
                    statutColors[statut] = getRandomColor();
                }
                return statutColors[statut];
            });

            // Créer le pie chart avec Chart.js
            const ctx6 = document.getElementById(\x27keywordChart6\x27).getContext(\x272d\x27);
            new Chart(ctx6, {
                type: \x27pie\x27,
                data: {
                    labels: labels, // Étiquettes simples (statuts)
                    datasets: [{
                        label: \x27Occurrences par statut\x27,
                        data: data,
                        backgroundColor: backgroundColors,
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: [
                                `\${livre}: Répartition des statuts`,
                                `Total des mots-clés: \${totalKeywords}` // Add the total number of keywords here
                            ],
                            font: {
                                size: 28
                            }
                        },
                        legend: {
                            position: \x27bottom\x27,
                            labels: {
                                font: {
                                    size: 16
                                }
                            }
                        },
                        datalabels: {
                            anchor: \x27center\x27,
                            align: \x27center\x27,
                            color: \x27white\x27,
                            font: {
                                size: 16,
                                weight: \x27bold\x27
                            },
                            rotation: 0,
                            clip: false,
                            formatter: (value, context) => {
                                const statut = context.chart.data.labels[context.dataIndex];
                                return ` \${value}`;
                            }
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        }
            // Function to export the graphs as a PDF (one per page)
            function exportAsPDF() {
                const {jsPDF} = window.jspdf;
                const doc = new jsPDF();

// Capture the first graph as a PNG
                const canvas1 = document.getElementById(\x27keywordChart1\x27);
                const imgData1 = canvas1.toDataURL(\x27image/png\x27);

// Add the first graph to the PDF
                doc.addImage(imgData1, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

// Capture the second graph as a PNG
                const canvas2 = document.getElementById(\x27keywordChart2\x27);
                const imgData2 = canvas2.toDataURL(\x27image/png\x27);

// Add the second graph to the PDF
                doc.addImage(imgData2, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas3 = document.getElementById(\x27keywordChart3\x27);
                const imgData3 = canvas3.toDataURL(\x27image/png\x27);

                doc.addImage(imgData3, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas4 = document.getElementById(\x27keywordChart4\x27);
                const imgData4 = canvas4.toDataURL(\x27image/png\x27);

                doc.addImage(imgData4, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas5 = document.getElementById(\x27keywordChart5\x27);
                const imgData5 = canvas5.toDataURL(\x27image/png\x27);
                doc.addImage(imgData5, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas6 = document.getElementById(\x27keywordChart6\x27);
                const imgData6 = canvas6.toDataURL(\x27image/png\x27);

                doc.addImage(imgData6, \x27PNG\x27, 10, 10, 120, 120);

// Save the PDF
                doc.save(\x27graphes.pdf\x27);
            }


            function exportAsZIP() {
                const zip = new JSZip();

// Capture the first graph as a PNG
                const canvas1 = document.getElementById(\x27keywordChart1\x27);
                const imgData1 = canvas1.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

// Add the first graph to the ZIP
                zip.file(\"graphe1.png\", imgData1, {base64: true});

// Capture the second graph as a PNG
                const canvas2 = document.getElementById(\x27keywordChart2\x27);
                const imgData2 = canvas2.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

// Add the second graph to the ZIP
                zip.file(\"graphe2.png\", imgData2, {base64: true});

                const canvas3 = document.getElementById(\x27keywordChart3\x27);
                const imgData3 = canvas3.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe3.png\", imgData3, {base64: true});

                const canvas4 = document.getElementById(\x27keywordChart4\x27);
                const imgData4 = canvas4.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe4.png\", imgData4, {base64: true});

                const canvas5 = document.getElementById(\x27keywordChart5\x27);
                const imgData5 = canvas5.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe5.png\", imgData5, {base64: true});

                const canvas6 = document.getElementById(\x27keywordChart6\x27);
                const imgData6 = canvas6.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe6.png\", imgData6, {base64: true});

// Generate and download the ZIP file
                zip.generateAsync({type: \"blob\"}).then(function (content) {
                    const downloadLink = document.createElement(\x27a\x27);
                    downloadLink.href = URL.createObjectURL(content);
                    downloadLink.download = \x27graphes.zip\x27;
                    downloadLink.click();
                });
            }

            // Call the functions when the content is loaded
            document.addEventListener(\x27DOMContentLoaded\x27, function () {

                generateGraph1();
                generateGraph2();
                generateGraph3();
                generateGraph4();
                generateGraph5();
                generateGraph6();

// Add event listeners for export buttons
                document.getElementById(\x27exportPDFButton\x27).addEventListener(\x27click\x27, exportAsPDF);
                document.getElementById(\x27exportZIPButton\x27).addEventListener(\x27click\x27, exportAsZIP);
            });
        </script>
    </div>
    <script>
        function confirmDeleteFiche(url) { // Afficher une boîte de dialogue de confirmation
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) { // Si l\x27utilisateur clique sur OK, naviguer vers l\x27URL de suppression
                window.location.href = url;
            }
// Retourner false pour empêcher le lien par défaut de se déclencher
            return false;
        }
    </script>
    <script>
        function exportToExcel() { // Créer une nouvelle feuille de calcul
            var wb = XLSX.utils.book_new();

// Convertir les données des fiches en format de tableau pour SheetJS
            var data = [];

// Créer un dictionnaire pour stocker les occurrences de chaque mot-clé
            var keywordOccurrences = {};

// Créer un dictionnaire pour stocker le nombre de fiches par statut pour chaque mot-clé
            var keywordStatusCounts = {};

// Collecter les différents statuts des fiches
            var statusList = [];
            ";
        // line 1105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 1105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            yield "statusList.push(\x27";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 1105), "html", null, true);
            yield "\x27);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1106
        yield "statusList = [...new Set(statusList)]; // Remove duplicates
            statusList.sort();
// Trie les statuts par ordre alphabétique

// Pour chaque fiche, compter les occurrences de chaque mot-clé
            ";
        // line 1111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 1111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 1112
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getMotCles", [], "method", false, false, false, 1112));
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                // line 1113
                yield "            if (!keywordOccurrences[\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1113), "html", null, true);
                yield "\x27]) {
                keywordOccurrences[\x27";
                // line 1114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1114), "html", null, true);
                yield "\x27] = {
                    reference: \x27";
                // line 1115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1115), "html", null, true);
                yield "\x27,
                    denomination: \x27";
                // line 1116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getDenomination", [], "method", false, false, false, 1116), "html", null, true);
                yield "\x27,
                    count: 1,
                    statusCounts: Object.fromEntries(statusList.map(status => [status, 0])),
                    ficheIds: [\x27";
                // line 1119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 1119), "html", null, true);
                yield "\x27] // Initialize with the current fiche ID
                };
            } else {
                keywordOccurrences[\x27";
                // line 1122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1122), "html", null, true);
                yield "\x27].count++;
                keywordOccurrences[\x27";
                // line 1123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1123), "html", null, true);
                yield "\x27].ficheIds.push(\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 1123), "html", null, true);
                yield "\x27); // Add the fiche ID
            }
            keywordOccurrences[\x27";
                // line 1125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1125), "html", null, true);
                yield "\x27].statusCounts[\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 1125), "html", null, true);
                yield "\x27]++;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1126
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1127
        yield "
// Trie les clés du dictionnaire par ordre alphabétique avec les chiffres en premier et par ordre croissant de référence
            var sortedKeywords = Object.keys(keywordOccurrences).sort((a, b) => {
                if (a.match(/^\\d/) && !b.match(/^\\d/)) {
                    return -1;
                } else if (!a.match(/^\\d/) && b.match(/^\\d/)) {
                    return 1;
                } else {
                    return a.localeCompare(b, \x27fr\x27, {numeric: true});
                }
            });

// Ajouter les en-têtes de colonnes
            var headers = [\x27Référence des mot-clés\x27, \x27Dénomination des mot-clés\x27, \x27Nombre de fiches\x27];
            headers.push(...statusList.map(status => `\${status}`));
            headers.push(\x27Liste des fiches\x27);
// Add a new column header for fiche IDs

// Pour chaque mot-clé, ajouter les données pertinentes au tableau
            sortedKeywords.forEach(function (keyword) {
                var row = [
                    keywordOccurrences[keyword].reference,
                    keywordOccurrences[keyword].denomination,
                    keywordOccurrences[keyword].count,
                    ...statusList.map(status => keywordOccurrences[keyword].statusCounts[status]),
                    keywordOccurrences[keyword].ficheIds.sort(
                        (a, b) => a - b
                    ).join(\x27, \x27)
                ];
                data.push(row);
            });

// Créer une nouvelle feuille de calcul à partir des données
            var ws = XLSX.utils.aoa_to_sheet([
                headers,
                ...data
            ]);

// Ajouter la feuille de calcul au classeur
            XLSX.utils.book_append_sheet(wb, ws, \"Mot-cles\");

// Sauvegarder le classeur au format Excel
            XLSX.writeFile(wb, \"mon_tableau.xlsx\");
        }
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
        return "fiche/liste_fichesRech.html.twig";
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
        return array (  1860 => 1127,  1854 => 1126,  1845 => 1125,  1838 => 1123,  1834 => 1122,  1828 => 1119,  1822 => 1116,  1818 => 1115,  1814 => 1114,  1809 => 1113,  1804 => 1112,  1800 => 1111,  1793 => 1106,  1781 => 1105,  1545 => 884,  1541 => 883,  1524 => 881,  1501 => 880,  1497 => 879,  1494 => 878,  1477 => 877,  1473 => 876,  1345 => 763,  1341 => 762,  1324 => 760,  1301 => 759,  1297 => 758,  1294 => 757,  1277 => 756,  1273 => 755,  1157 => 654,  1153 => 653,  1136 => 651,  1113 => 650,  1109 => 649,  1106 => 648,  1089 => 647,  1085 => 646,  965 => 541,  961 => 540,  944 => 538,  921 => 537,  917 => 536,  914 => 535,  897 => 534,  893 => 533,  781 => 436,  777 => 435,  760 => 433,  737 => 432,  733 => 431,  730 => 430,  713 => 429,  709 => 428,  638 => 359,  632 => 358,  623 => 355,  618 => 353,  613 => 352,  608 => 351,  602 => 350,  580 => 330,  576 => 328,  572 => 326,  560 => 315,  557 => 313,  550 => 307,  543 => 304,  541 => 303,  538 => 302,  535 => 301,  533 => 300,  474 => 244,  470 => 243,  466 => 242,  462 => 241,  453 => 234,  445 => 228,  443 => 227,  389 => 176,  384 => 173,  368 => 158,  366 => 156,  363 => 145,  360 => 144,  358 => 142,  357 => 141,  355 => 140,  353 => 139,  350 => 138,  348 => 137,  344 => 135,  338 => 134,  335 => 133,  332 => 132,  329 => 131,  324 => 130,  321 => 129,  315 => 128,  312 => 127,  307 => 126,  305 => 125,  301 => 123,  285 => 110,  278 => 105,  265 => 102,  260 => 101,  256 => 100,  249 => 95,  247 => 94,  244 => 93,  240 => 91,  233 => 86,  226 => 80,  222 => 78,  220 => 77,  208 => 67,  206 => 66,  201 => 64,  196 => 61,  193 => 60,  191 => 59,  143 => 14,  138 => 12,  134 => 11,  130 => 10,  127 => 9,  114 => 8,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des fiches
{% endblock %}
{% block Pagetitle %}
    Liste des fiches
{% endblock %}
{% block body %}
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeFicheRechercher.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/header.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/dataTables.css\x27) }}\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"{{ asset(\x27js/jquery.easy-pie-chart.js\x27) }}\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>
        <!-- jQuery 3.6.0 (Required for Select2) -->


        <style>
            .tooltip-link {
                position: relative;
                display: inline-block;
                text-decoration: none;
                cursor: pointer;
            }

            option {
                max-width: 200px !important;
            }

            /* Tooltip text */
            .tooltip-link::after {
                content: attr(data-tooltip); /* Use the attribute value */
                position: absolute;
                bottom: 120%; /* Position above the link */
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

    </head>
    {% include \x27breadcrumb.html.twig\x27 with { breadcrumbs: breadcrumbs } %}
    {% include \x27fiche/fiche_modal.html.twig\x27 %}
    <div class=\"card-body classs\">
        <h3 style=\"text-align: center; margin-bottom: 30px; \">
            Résultat de recherche pour :
            {{ motClesSelect }}</h3>

        {% if fiches is not empty %}
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-borderless\" id=\"fichesTable\">
                    <thead>
                    <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                        <th>#</th>
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Référence</th>
                        <th scope=\"col\">Livre</th>
                        <th scope=\"col\">Dénomination</th>
                        <th scope=\"col\">Statut</th>
                        {% if is_granted(\x27ROLE_ADMIN\x27) %}
                            <th scope=\"col\">Visible</th>
                        {% endif %}
                        <th scope=\"col\" style=\"display:flex;\">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    {# <td scope=\"col\"></td> #}
                    </tbody>
                </table>
            </div>

        {% else %}
            <p>Aucune fiche trouvée pour les critères de recherche.</p>
        {% endif %}

        {% if livre.getIndex().getMotCles() is not empty %}
        <div class=\"container-fluid\">
            <div class=\"chart-container d-flex justify-content-between flex-md-row flex-sm-column align-items-md-start align-items-sm-center\">
                <div class=\"col-12 col-md-5 col-sm-12\">
                    <select name=\"pets\" id=\"pet-select\" class=\"form-select\">
                        <option value=\"\">------- Apparition des mots clés -------</option>
                        {% for motCle in motCleOccurrences %}
                            <option value=\"{{ motCle.denomination }}\">
                                {{ motCle.reference }} : {{ motCle.denomination }} ({{ motCle.count }})
                            </option>
                        {% endfor %}
                    </select>
                    <script>
                        // Assuming `fiches` is a JavaScript object or array containing your fiche data
                        \$(document).ready(function () {

                            const fichesPdf = {{ fichesJSON|raw }};

                            // Serialize the JavaScript object into a JSON string
                            const ficheDataSerializedPdf = JSON.stringify(fichesPdf);

                            // Set the value of the hidden input field with the serialized data
                            document.getElementById(\"ficheDataPdf\").value = ficheDataSerializedPdf;
                            document.getElementById(\"ficheDataWord\").value = ficheDataSerializedPdf;
                        })
                    </script>
                </div>

                {% endif %}


                {% set nbrFicheTotal = 0 %}
                {% for fiche in livre.getFiche() %}
                    {% set nbrFicheTotal = nbrFicheTotal + 1 %}
                {% endfor %}
                {% set nbrFiche = 0 %}
                {% for fiche in fiches %}
                    {% if fiche in livre.getFiche() %}
                        {% set nbrFiche = nbrFiche + 1 %}
                    {% endif %}
                {% endfor %}


                {% if nbrFicheTotal != 0 %}

                {% if nbrFicheTotal != 0 %}
                    {% include \x27fiche/chart/circular_chart.html.twig\x27 with {
                        nbrFiches: nbrFiches,
                        nbrFicheTotal: nbrFicheTotal
                    } %}
                {% endif %}
            </div>
            {# <div class=\"d-flex flex-wrap flex-column flex-md-row gap-2\">
                    {% if is_granted(\x27ROLE_ADMIN\x27) or is_granted(\x27ROLE_USER\x27) %}
                        <a href=\"{{ path(\x27savreq_app_sav_requete_new\x27) }}\" class=\"card-link btn btn-order\">Enregistrer
                            la requete</a>
                    {% endif %}
                   
                    <button id=\"exportPDFButton\" class=\"btn btn-order mx-2\">Exporter les graphes PDF</button>
                    <button id=\"exportZIPButton\" class=\"btn btn-order mx-2\">Exporter les graphes ZIP</button>
                    <a href=\"#\" onclick=\"exportToExcel()\" class=\"btn btn-order\">Exporter vers Excel</a>
                </div> #}
            {# {% include \x27fiche/fiche_export_pdf_modal.html.twig\x27 %}
                {% include \x27fiche/fiche_export_word_modal.html.twig\x27 %} #}

        </div>

        <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
        <script>

            \$(\x27#pet-select\x27).select2({
                width: \x27100%\x27 // Makes it responsive
            });

            {# const isAdmin = {{ is_granted(\x27ROLE_ADMIN\x27) ? \x27true\x27 : \x27false\x27 }}; #}
        </script>
        <script>
            \$(document).ready(function () {
                const fiches = {{ fichesJSON|raw }};
                console.log(fiches);
                \$(\x27#fichesTable\x27).DataTable({
                    data: fiches,
                    responsive: true,
                    \"columnDefs\": [
                        {\"orderable\": false, \"targets\": [5]} // Remplace X par l\x27index de ta colonne (commence à 0)
                    ],
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
                            data: null,
                            render: function (data, type, row, meta) {
                                return `<td data-cell=\"Numéro\">\${
                                    meta.row + 1
                                }</td>`;
                            }
                        },
                        {
                            data: \x27Id\x27,
                            visible: false,
                            searchable: false
                        },
                        {
                            data: \x27refer\x27,
                            render: function (data) {
                                return `<td data-cell=\"Référence\">\${data}</td>`;
                            }
                        },
                        {
                            data: \x27livre\x27,
                            render: function (data) {
                                return `<td data-cell=\"Livre\">\${data}</td>`;
                            }
                        }, {
                            data: \x27denomination\x27,
                            render: function (data) {
                                return `<td data-cell=\"Dénomination\">\${data}</td>`;
                            }
                        }, {
                            data: \x27statut\x27,
                            render: function (data) {
                                return `<td data-cell=\"Statut\">\${data}</td>`;
                            }
                        },{% if is_granted(\x27ROLE_ADMIN\x27) %}
                        {
                            data: \x27visible\x27,
                            render: function (data) {
                                return `<td data-cell=\"Visible\">\${data}</td>`;
                            }
                        },{% endif %}

                        {
                            data: null,
                            render: function (data, type, row, meta) {
                                const rowIndex = meta.row + 1;
                                const totalRows = fiches.length;

                                const baseUrlAfficher = \"{{ path(\x27detail_fiche_total_rech\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
                                const baseUrlEdit = \"{{ path(\x27app_fiche_rech_edit\x27, {\x27id\x27: 0}) }}\".replace(\"/0\", `/\${data.Id}`);
                                const baseUrlDupliquer = \"{{ path(\x27fiche_dupliquer\x27, {\x27ficheID\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
                                const baseUrlDelete = \"{{ path(\x27delete_fiche\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);

                                let actions = `
<td data-cell=\"Actions\">
    <a href=\"\${baseUrlAfficher}/\${
                                    data.Id
                                }?index=\${rowIndex}&total=\${totalRows}\"
       class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\">
        <i class=\"fas fa-eye me-1\"></i>
    </a>
    <a href=\"#\" 
       class=\"btn btn-outline-secondary btn-sm tooltip-link\" 
       data-tooltip=\"Exporter la fiche\" 
       data-toggle=\"modal\" 
       data-target=\"#exportModal\" 
       data-ficheid=\"\${
                                    data.Id
                                }\">
        <i class=\"fas fa-download me-1\"></i>
    </a>`;

                                if (isAdmin || data.canEdit) {

                                    actions += `
    <a href=\"\${baseUrlEdit}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Modifier la fiche\">
        <i class=\"fas fa-edit me-1\"></i>
    </a>
        <a href=\"\${baseUrlDupliquer}/\${data.Id}\" class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Dupliquer la fiche\"><i class=\"fas fa-regular fa-clone\"></i></a>

    <a href=\"#\" onclick=\"return confirmDeleteFiche(\x27\${baseUrlDelete}/\${
                                        data.Id
                                    }\x27);\"
       class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la fiche\">
        <i class=\"fas fa-trash me-1\"></i>
    </a>`;
                                }

                                actions += `</td>`;
                                return actions;
                            }
                        }
                    ],
                    \"initComplete\": function () {
                        \$(\x27#fichesTable\x27).fadeIn(); // Afficher la table après chargement
                    },
                    createdRow: function (row, data, dataIndex) {
                        \$(row).find(\x27td\x27).each(function (index) {
                            const columnName = \$(\x27#fichesTable thead th\x27).eq(index).text().trim();
                            \$(this).attr(\x27data-cell\x27, columnName);
                        });
                    }
                });
            });
        </script>


        {% include \x27fiche/fiche_export_pdf_modal.html.twig\x27 %}
        {% include \x27fiche/fiche_export_word_modal.html.twig\x27 %}
        <div class=\"col-12 d-flex flex-column flex-sm-column flex-lg-row flex-xl-row gap-2\" style=\"display:flex; margin-bottom: 50px\">
            {% if is_granted(\x27ROLE_ADMIN\x27) or is_granted(\x27ROLE_USER\x27) %}
                <a href=\"{{ path(\x27savreq_app_sav_requete_new\x27) }}\" class=\"card-link btn btn-order\">Enregistrer
                    la requete</a>
            {% endif %}

            <button id=\"exportPDFButton\" class=\"btn btn-order mx-2\">Exporter les graphes PDF</button>
            <button id=\"exportZIPButton\" class=\"btn btn-order mx-2\"
            >Exporter les graphes ZIP
            </button>
            {# <a href=\"#\" onclick=\"exportToExcel()\" class=\"btn btn-order\">Exporter vers Excel</a> #}
            <input type=\"hidden\" id=\"ficheDataPdf\" name=\"ficheDataPdf\" value=\"\">
            {# <button type=\"submit\" class=\"card-link btn btn-order\">Export to PDF</button> #}
            <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#exportModalPdf\">
                Exporter vers PDF
            </button>
            <input type=\"hidden\" id=\"ficheDataWord\" name=\"ficheDataWord\" value=\"\">
            <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\"
                    data-bs-target=\"#exportModalword\">Exporter vers Word
            </button>
            <a href=\"#\" onclick=\"exportToExcel()\" class=\"btn btn-order\">Exporter vers Excel</a>
        </div>
        {# {# <a href=\"#\" id=\"generateWordBtn\"  >Exporter les fiches en Word</a> #}

        {% else %}
        <p>Aucune fiche disponible pour ce livre !</p>
        {% endif %}

        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/html-docx-js/dist/html-docx.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js\"></script>
        <canvas id=\"keywordChart1\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart2\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart3\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart4\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart5\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>
        <canvas id=\"keywordChart6\" width=\"400\" height=\"200\" style=\"display: none;\"></canvas>

        <!-- Include jsPDF and JSZip libraries -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>

        <script>
            function generateGraph1() {
                const keywordOccurrences = {};
                const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";{% for fiche in fiches %}
                {% for mot in fiche.getMotCles() %}
                if (keywordOccurrences.hasOwnProperty(\x27{{ mot.reference }}\x27)) {
                    keywordOccurrences[\x27{{ mot.reference }}\x27] += 1;
                } else {
                    keywordOccurrences[\x27{{ mot.reference }}\x27] = 1;
                }
                {% endfor %}
                {% endfor %}

                const keywordsData = Object.keys(keywordOccurrences).map(keyword => ({
                    label: keyword,
                    value: keywordOccurrences[keyword]
                })).sort((a, b) => a.label.localeCompare(b.label));

                const labels = keywordsData.map(data => data.label);
                const values = keywordsData.map(data => data.value);

                const ctx1 = document.getElementById(\x27keywordChart1\x27).getContext(\x272d\x27);
                const chart1 = new Chart(ctx1, {
                    type: \x27bar\x27,
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: \x27Occurrences des mots-clés\x27,
                                data: values,
                                backgroundColor: \x27rgba(54, 162, 235, 0.5)\x27,
                                borderColor: \x27rgba(54, 162, 235, 1)\x27,
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Occurrences des mots-clés`,
                                font: {
                                    size: 28
                                }
                            },

                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27center\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph2() {
                const keywordStatusOccurrences = {};
                const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";
                const fichesData = [{% for fiche in fiches %}
                    {
                        statut: \"{{ fiche.getStatut() }}\",
                        mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %},{% endif %}
                            {% endfor %}]
                    }
                    {% if not loop.last %},{% endif %}
                    {% endfor %}];

                const keywordColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.5)`;
                };

// Group data by statut and count keywords
                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!keywordStatusOccurrences[statut]) {
                        keywordStatusOccurrences[statut] = {};
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordColors[mot]) {
                            keywordColors[mot] = getRandomColor();
                        }

                        if (!keywordStatusOccurrences[statut][mot]) {
                            keywordStatusOccurrences[statut][mot] = 0;
                        }
                        keywordStatusOccurrences[statut][mot] += 1;
                    });
                });

// Prepare datasets for each keyword
                const allKeywords = Object.keys(keywordColors);
                const labels = Object.keys(keywordStatusOccurrences).sort(); // Sort statuts alphabetically
                const datasets = allKeywords.map(keyword => {
                    const data = labels.map(statut => keywordStatusOccurrences[statut][keyword] || 0); // Default to 0 if no data
                    return {
                        label: `\${keyword}`,
                        data: data,
                        backgroundColor: keywordColors[keyword],
                        borderColor: keywordColors[keyword].replace(\x270.5\x27, \x271\x27),
                        borderWidth: 1
                    };
                });

// Create the chart
                const ctx2 = document.getElementById(\x27keywordChart2\x27).getContext(\x272d\x27);
                const keywordChart2 = new Chart(ctx2, {
                    type: \x27bar\x27,
                    data: {
                        labels: labels, // Statuts on the x-axis (sorted)
                        datasets: datasets // Grouped by keywords
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Statut des mots-clés`,
                                font: {
                                    size: 28
                                }
                            },
// Configure the datalabels plugin
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27center\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph3() {
                const keywordStatusOccurrences = {};
                const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";
                const fichesData = [{% for fiche in fiches %}
                    {
                        statut: \"{{ fiche.getStatut() }}\",
                        mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %},{% endif %}
                            {% endfor %}]
                    }
                    {% if not loop.last %},{% endif %}
                    {% endfor %}];

                const statutColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.5)`;
                };

// Organize occurrences by keyword and statut
                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!statutColors[statut]) {
                        statutColors[statut] = getRandomColor();
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordStatusOccurrences[mot]) {
                            keywordStatusOccurrences[mot] = {};
                        }

                        if (!keywordStatusOccurrences[mot][statut]) {
                            keywordStatusOccurrences[mot][statut] = 0;
                        }
                        keywordStatusOccurrences[mot][statut] += 1;
                    });
                });

// Sort keywords alphabetically for X-axis
                const labels = Object.keys(keywordStatusOccurrences).sort(); // ✅ Sorted X-axis (keywords)
                const allStatuts = Object.keys(statutColors);

// Prepare datasets for each statut
                const datasets = allStatuts.map(statut => {
                    const data = labels.map(keyword => keywordStatusOccurrences[keyword][statut] || 0); // Default to 0 if no data
                    return {
                        label: `Statut: \${statut}`,
                        data: data,
                        backgroundColor: statutColors[statut],
                        borderColor: statutColors[statut].replace(\x270.5\x27, \x271\x27),
                        borderWidth: 1
                    };
                });

// Create the chart
                const ctx3 = document.getElementById(\x27keywordChart3\x27).getContext(\x272d\x27);
                const keywordChart3 = new Chart(ctx3, {
                    type: \x27bar\x27,
                    data: {
                        labels: labels, // Keywords on the x-axis (Sorted)
                        datasets: datasets // Grouped by statut
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Distribution des statuts par mots-clés`,
                                font: {
                                    size: 28
                                }
                            },
                            tooltip: {
                                mode: \x27index\x27,
                                intersect: false
                            },
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27center\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        responsive: true,
                        scales: {
                            x: {
                                stacked: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                stacked: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph4() {
                const keywordStatusOccurrences = {};
                const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";
                const fichesData = [{% for fiche in fiches %}
                    {
                        statut: \"{{ fiche.getStatut() }}\",
                        mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %},{% endif %}
                            {% endfor %}]
                    }
                    {% if not loop.last %},{% endif %}
                    {% endfor %}];

                const statutColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.7)`;
                };

                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!statutColors[statut]) {
                        statutColors[statut] = getRandomColor();
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordStatusOccurrences[mot]) {
                            keywordStatusOccurrences[mot] = {};
                        }

                        if (!keywordStatusOccurrences[mot][statut]) {
                            keywordStatusOccurrences[mot][statut] = 0;
                        }
                        keywordStatusOccurrences[mot][statut] += 1;
                    });
                });

// Sort keywords alphabetically for X-axis
                const labels = Object.keys(keywordStatusOccurrences).sort();
                const allStatuts = Object.keys(statutColors);

// Prepare datasets for each statut
                const datasets = allStatuts.map(statut => {
                    const data = labels.map(keyword => keywordStatusOccurrences[keyword][statut] || 0);
                    return {
                        label: `Statut: \${statut}`,
                        data: data,
                        backgroundColor: statutColors[statut],
                        borderColor: statutColors[statut].replace(\x270.7\x27, \x271\x27),
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    };
                });


                const ctx4 = document.getElementById(\x27keywordChart4\x27).getContext(\x272d\x27);
                const keywordChart4 = new Chart(ctx4, {
                    type: \x27line\x27,
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Évolution des statuts par mots-clés`,
                                font: {
                                    size: 28
                                }
                            },
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27top\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        responsive: true,
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                stacked: true,
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

            function generateGraph5() {
                const keywordStatusOccurrences = {};
                const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";
                const fichesData = [{% for fiche in fiches %}
                    {
                        statut: \"{{ fiche.getStatut() }}\",
                        mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %},{% endif %}
                            {% endfor %}]
                    }
                    {% if not loop.last %},{% endif %}
                    {% endfor %}];

                const statutColors = {};
                const getRandomColor = () => {
                    const r = Math.floor(Math.random() * 256);
                    const g = Math.floor(Math.random() * 256);
                    const b = Math.floor(Math.random() * 256);
                    return `rgba(\${r}, \${g}, \${b}, 0.4)`; // Semi-transparent color for fill
                };

                fichesData.forEach(fiche => {
                    const statut = fiche.statut;

                    if (!statutColors[statut]) {
                        statutColors[statut] = getRandomColor();
                    }

                    fiche.mots.forEach(mot => {
                        if (!keywordStatusOccurrences[mot]) {
                            keywordStatusOccurrences[mot] = {};
                        }

                        if (!keywordStatusOccurrences[mot][statut]) {
                            keywordStatusOccurrences[mot][statut] = 0;
                        }
                        keywordStatusOccurrences[mot][statut] += 1;
                    });
                });

// Sort keywords alphabetically for X-axis (same as generateGraph4)
                const labels = Object.keys(keywordStatusOccurrences).sort();
                const allStatuts = Object.keys(statutColors);

// Prepare datasets for each statut (same as generateGraph4)
                const datasets = allStatuts.map(statut => {
                    const data = labels.map(keyword => keywordStatusOccurrences[keyword][statut] || 0);
                    return {
                        label: `Statut: \${statut}`,
                        data: data,
                        backgroundColor: statutColors[statut], // Fill color
                        borderColor: statutColors[statut].replace(\x270.4\x27, \x271\x27), // Border color
                        borderWidth: 2,
                        fill: true, // Enable fill (same as generateGraph4)
                        tension: 0.4 // Smooth lines (same as generateGraph4)
                    };
                });

                const ctx5 = document.getElementById(\x27keywordChart5\x27).getContext(\x272d\x27);
                new Chart(ctx5, {
                    type: \x27line\x27,
                    data: {
                        labels: labels, // Sorted keywords on X-axis (same as generateGraph4)
                        datasets: datasets
                    },
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: `\${livre}: Statuts par mots-clés (non cumulé)`,
                                font: {
                                    size: 28
                                }
                            },
                            datalabels: {
                                anchor: \x27center\x27,
                                align: \x27top\x27,
                                color: \x27black\x27,
                                font: {
                                    size: 16,
                                    weight: \x27bold\x27
                                },
                                formatter: (value) => value > 0 ? value : \x27\x27
                            }
                        },
                        responsive: true,
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        size: 22
                                    } // Consistent font size with generateGraph4
                                },
                                title: {
                                    display: true,
                                    text: \"Mots-clés\", // X-axis title
                                    font: {
                                        size: 22
                                    }
                                }
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    font: {
                                        size: 22
                                    }
                                }, // Consistent font size with generateGraph4
                                title: {
                                    display: true,
                                    text: \"Occurrences\", // Y-axis title
                                    font: {
                                        size: 22
                                    }
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            }

        function generateGraph6() {
            const keywordStatusOccurrences = {};
            const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";
            const fichesData = [{% for fiche in fiches %}
                {
                    statut: \"{{ fiche.getStatut() }}\",
                    mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %},{% endif %}
                        {% endfor %}]
                }
                {% if not loop.last %},{% endif %}
                {% endfor %}];

            const statutColors = {};
            const getRandomColor = () => {
                const r = Math.floor(Math.random() * 256);
                const g = Math.floor(Math.random() * 256);
                const b = Math.floor(Math.random() * 256);
                return `rgba(\${r}, \${g}, \${b}, 0.8)`; // Couleur semi-transparente
            };

            // Compter les occurrences des statuts
            const statutOccurrences = {};
            let totalKeywords = 0; // Variable to store the total number of keywords

            fichesData.forEach(fiche => {
                const statut = fiche.statut;
                if (!statutOccurrences[statut]) {
                    statutOccurrences[statut] = 0;
                }
                statutOccurrences[statut] += fiche.mots.length; // Nombre de mots-clés par statut
                totalKeywords += fiche.mots.length; // Add to the total count
            });

            // Préparer les données pour le pie chart
            const labels = Object.keys(statutOccurrences);
            const data = labels.map(statut => statutOccurrences[statut]);
            const backgroundColors = labels.map(statut => {
                if (!statutColors[statut]) {
                    statutColors[statut] = getRandomColor();
                }
                return statutColors[statut];
            });

            // Créer le pie chart avec Chart.js
            const ctx6 = document.getElementById(\x27keywordChart6\x27).getContext(\x272d\x27);
            new Chart(ctx6, {
                type: \x27pie\x27,
                data: {
                    labels: labels, // Étiquettes simples (statuts)
                    datasets: [{
                        label: \x27Occurrences par statut\x27,
                        data: data,
                        backgroundColor: backgroundColors,
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: [
                                `\${livre}: Répartition des statuts`,
                                `Total des mots-clés: \${totalKeywords}` // Add the total number of keywords here
                            ],
                            font: {
                                size: 28
                            }
                        },
                        legend: {
                            position: \x27bottom\x27,
                            labels: {
                                font: {
                                    size: 16
                                }
                            }
                        },
                        datalabels: {
                            anchor: \x27center\x27,
                            align: \x27center\x27,
                            color: \x27white\x27,
                            font: {
                                size: 16,
                                weight: \x27bold\x27
                            },
                            rotation: 0,
                            clip: false,
                            formatter: (value, context) => {
                                const statut = context.chart.data.labels[context.dataIndex];
                                return ` \${value}`;
                            }
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });
        }
            // Function to export the graphs as a PDF (one per page)
            function exportAsPDF() {
                const {jsPDF} = window.jspdf;
                const doc = new jsPDF();

// Capture the first graph as a PNG
                const canvas1 = document.getElementById(\x27keywordChart1\x27);
                const imgData1 = canvas1.toDataURL(\x27image/png\x27);

// Add the first graph to the PDF
                doc.addImage(imgData1, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

// Capture the second graph as a PNG
                const canvas2 = document.getElementById(\x27keywordChart2\x27);
                const imgData2 = canvas2.toDataURL(\x27image/png\x27);

// Add the second graph to the PDF
                doc.addImage(imgData2, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas3 = document.getElementById(\x27keywordChart3\x27);
                const imgData3 = canvas3.toDataURL(\x27image/png\x27);

                doc.addImage(imgData3, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas4 = document.getElementById(\x27keywordChart4\x27);
                const imgData4 = canvas4.toDataURL(\x27image/png\x27);

                doc.addImage(imgData4, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas5 = document.getElementById(\x27keywordChart5\x27);
                const imgData5 = canvas5.toDataURL(\x27image/png\x27);
                doc.addImage(imgData5, \x27PNG\x27, 10, 10, 180, 90);
                doc.addPage();

                const canvas6 = document.getElementById(\x27keywordChart6\x27);
                const imgData6 = canvas6.toDataURL(\x27image/png\x27);

                doc.addImage(imgData6, \x27PNG\x27, 10, 10, 120, 120);

// Save the PDF
                doc.save(\x27graphes.pdf\x27);
            }


            function exportAsZIP() {
                const zip = new JSZip();

// Capture the first graph as a PNG
                const canvas1 = document.getElementById(\x27keywordChart1\x27);
                const imgData1 = canvas1.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

// Add the first graph to the ZIP
                zip.file(\"graphe1.png\", imgData1, {base64: true});

// Capture the second graph as a PNG
                const canvas2 = document.getElementById(\x27keywordChart2\x27);
                const imgData2 = canvas2.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

// Add the second graph to the ZIP
                zip.file(\"graphe2.png\", imgData2, {base64: true});

                const canvas3 = document.getElementById(\x27keywordChart3\x27);
                const imgData3 = canvas3.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe3.png\", imgData3, {base64: true});

                const canvas4 = document.getElementById(\x27keywordChart4\x27);
                const imgData4 = canvas4.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe4.png\", imgData4, {base64: true});

                const canvas5 = document.getElementById(\x27keywordChart5\x27);
                const imgData5 = canvas5.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe5.png\", imgData5, {base64: true});

                const canvas6 = document.getElementById(\x27keywordChart6\x27);
                const imgData6 = canvas6.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

                zip.file(\"graphe6.png\", imgData6, {base64: true});

// Generate and download the ZIP file
                zip.generateAsync({type: \"blob\"}).then(function (content) {
                    const downloadLink = document.createElement(\x27a\x27);
                    downloadLink.href = URL.createObjectURL(content);
                    downloadLink.download = \x27graphes.zip\x27;
                    downloadLink.click();
                });
            }

            // Call the functions when the content is loaded
            document.addEventListener(\x27DOMContentLoaded\x27, function () {

                generateGraph1();
                generateGraph2();
                generateGraph3();
                generateGraph4();
                generateGraph5();
                generateGraph6();

// Add event listeners for export buttons
                document.getElementById(\x27exportPDFButton\x27).addEventListener(\x27click\x27, exportAsPDF);
                document.getElementById(\x27exportZIPButton\x27).addEventListener(\x27click\x27, exportAsZIP);
            });
        </script>
    </div>
    <script>
        function confirmDeleteFiche(url) { // Afficher une boîte de dialogue de confirmation
            if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) { // Si l\x27utilisateur clique sur OK, naviguer vers l\x27URL de suppression
                window.location.href = url;
            }
// Retourner false pour empêcher le lien par défaut de se déclencher
            return false;
        }
    </script>
    <script>
        function exportToExcel() { // Créer une nouvelle feuille de calcul
            var wb = XLSX.utils.book_new();

// Convertir les données des fiches en format de tableau pour SheetJS
            var data = [];

// Créer un dictionnaire pour stocker les occurrences de chaque mot-clé
            var keywordOccurrences = {};

// Créer un dictionnaire pour stocker le nombre de fiches par statut pour chaque mot-clé
            var keywordStatusCounts = {};

// Collecter les différents statuts des fiches
            var statusList = [];
            {% for fiche in fiches %}statusList.push(\x27{{ fiche.statut }}\x27);
            {% endfor %}statusList = [...new Set(statusList)]; // Remove duplicates
            statusList.sort();
// Trie les statuts par ordre alphabétique

// Pour chaque fiche, compter les occurrences de chaque mot-clé
            {% for fiche in fiches %}
            {% for mot in fiche.getMotCles() %}
            if (!keywordOccurrences[\x27{{ mot.getReference() }}\x27]) {
                keywordOccurrences[\x27{{ mot.getReference() }}\x27] = {
                    reference: \x27{{ mot.getReference() }}\x27,
                    denomination: \x27{{ mot.getDenomination() }}\x27,
                    count: 1,
                    statusCounts: Object.fromEntries(statusList.map(status => [status, 0])),
                    ficheIds: [\x27{{ fiche.getIdFiche() }}\x27] // Initialize with the current fiche ID
                };
            } else {
                keywordOccurrences[\x27{{ mot.getReference() }}\x27].count++;
                keywordOccurrences[\x27{{ mot.getReference() }}\x27].ficheIds.push(\x27{{ fiche.getIdFiche() }}\x27); // Add the fiche ID
            }
            keywordOccurrences[\x27{{ mot.getReference() }}\x27].statusCounts[\x27{{ fiche.statut }}\x27]++;{% endfor %}
            {% endfor %}

// Trie les clés du dictionnaire par ordre alphabétique avec les chiffres en premier et par ordre croissant de référence
            var sortedKeywords = Object.keys(keywordOccurrences).sort((a, b) => {
                if (a.match(/^\\d/) && !b.match(/^\\d/)) {
                    return -1;
                } else if (!a.match(/^\\d/) && b.match(/^\\d/)) {
                    return 1;
                } else {
                    return a.localeCompare(b, \x27fr\x27, {numeric: true});
                }
            });

// Ajouter les en-têtes de colonnes
            var headers = [\x27Référence des mot-clés\x27, \x27Dénomination des mot-clés\x27, \x27Nombre de fiches\x27];
            headers.push(...statusList.map(status => `\${status}`));
            headers.push(\x27Liste des fiches\x27);
// Add a new column header for fiche IDs

// Pour chaque mot-clé, ajouter les données pertinentes au tableau
            sortedKeywords.forEach(function (keyword) {
                var row = [
                    keywordOccurrences[keyword].reference,
                    keywordOccurrences[keyword].denomination,
                    keywordOccurrences[keyword].count,
                    ...statusList.map(status => keywordOccurrences[keyword].statusCounts[status]),
                    keywordOccurrences[keyword].ficheIds.sort(
                        (a, b) => a - b
                    ).join(\x27, \x27)
                ];
                data.push(row);
            });

// Créer une nouvelle feuille de calcul à partir des données
            var ws = XLSX.utils.aoa_to_sheet([
                headers,
                ...data
            ]);

// Ajouter la feuille de calcul au classeur
            XLSX.utils.book_append_sheet(wb, ws, \"Mot-cles\");

// Sauvegarder le classeur au format Excel
            XLSX.writeFile(wb, \"mon_tableau.xlsx\");
        }
    </script>


{% endblock %}
", "fiche/liste_fichesRech.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\liste_fichesRech.html.twig");
    }
}
