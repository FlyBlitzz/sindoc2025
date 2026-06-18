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

/* fiche/liste_fichesRech_SavReq.html.twig */
class __TwigTemplate_68e44b4ed7defb458e5b81efe9cf03d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/liste_fichesRech_SavReq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/liste_fichesRech_SavReq.html.twig"));

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
        yield "<head>
       <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeFicheRechercher.css"), "html", null, true);
        yield "\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easy-pie-chart.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>


</head>
<style>
/* Tooltip container */
        .tooltip-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
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
.actions-td {
    display: flex;
    gap: 10px;  /* Adjust the gap between the action links as needed */
    justify-content: flex-start; /* Align the actions to the left (you can change it to \x27center\x27 or \x27space-between\x27 if needed) */
    flex-wrap: wrap;  /* Ensures that the actions wrap to the next line if there\x27s not enough space */
}
</style>
";
        // line 58
        yield " ";
        yield from $this->load("fiche/fiche_modal.html.twig", 58)->unwrap()->yield($context);
        // line 59
        yield "<div class=\"card-body classs\">
<h3 style=\"text-align: center; margin-bottom: 30px; \"> Résultat de recherche pour : ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["motClesSelect"]) || array_key_exists("motClesSelect", $context) ? $context["motClesSelect"] : (function () { throw new RuntimeError('Variable "motClesSelect" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "</h3>

 ";
        // line 62
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 62, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield " <div class=\"table-responsive\">
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
            // line 73
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                   <th scope=\"col\">Visible</th>
                   ";
            }
            // line 76
            yield "                   <th scope=\"col\" style=\"display:flex;\">Action</th>
                  
               </tr>
           </thead>
           <tbody>
            ";
            // line 82
            yield "           </tbody>
       </table>
       </div>
        ";
        } else {
            // line 86
            yield "        <p>Aucune fiche trouvée pour les critères de recherche.</p>
    ";
        }
        // line 89
        yield "<div class=\"chart-container d-flex justify-content-between flex-md-row flex-sm-column align-items-md-start align-items-sm-center\">
<div class=\"col-12 col-md-5 col-sm-12 mt-3 mb-3\">
<select name=\"pets\" id=\"pet-select\" class=\"form-select\">
    <option value=\"\">------- Apparition des mots clés -------</option>
    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motCleOccurrences"]) || array_key_exists("motCleOccurrences", $context) ? $context["motCleOccurrences"] : (function () { throw new RuntimeError('Variable "motCleOccurrences" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["motCle"]) {
            // line 94
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 94), "html", null, true);
            yield "\">
            ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "reference", [], "any", false, false, false, 95), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "denomination", [], "any", false, false, false, 95), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["motCle"], "count", [], "any", false, false, false, 95), "html", null, true);
            yield ")
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['motCle'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "</select>
</div>


";
        // line 102
        if (((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 102, $this->source); })()) != 0)) {
            // line 103
            yield "
   ";
            // line 104
            if (((isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 104, $this->source); })()) != 0)) {
                // line 105
                yield "    ";
                yield from $this->load("fiche/chart/circular_chart.html.twig", 105)->unwrap()->yield(CoreExtension::merge($context, ["nbrFiches" =>                 // line 106
(isset($context["nbrFiches"]) || array_key_exists("nbrFiches", $context) ? $context["nbrFiches"] : (function () { throw new RuntimeError('Variable "nbrFiches" does not exist.', 106, $this->source); })()), "nbrFicheTotal" =>                 // line 107
(isset($context["nbrFicheTotal"]) || array_key_exists("nbrFicheTotal", $context) ? $context["nbrFicheTotal"] : (function () { throw new RuntimeError('Variable "nbrFicheTotal" does not exist.', 107, $this->source); })())]));
            }
            // line 110
            yield "</div>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
        <script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
        <script>
          
           \$(\x27#pet-select\x27).select2({
          width: \x27100%\x27 // Makes it responsive
      });
    ";
            // line 125
            yield "</script>
<script>
   \$(document).ready(function () {
        
        const fiches = ";
            // line 129
            yield (isset($context["fichesJSON"]) || array_key_exists("fichesJSON", $context) ? $context["fichesJSON"] : (function () { throw new RuntimeError('Variable "fichesJSON" does not exist.', 129, $this->source); })());
            yield ";
      
        \$(\x27#fichesTable\x27).DataTable({
            data: fiches,
            language: {
                paginate:{
                    next: \"Suivant\",
                    previous: \"Précédent\"
                },
                info: \x27Page _PAGE_ de _PAGES_\x27,
                lengthMenu: \x27Afficher _MENU_ fiches\x27
            },
            columns: [
                {
                data: null,  // Not bound to any data source
                render: function (data, type, row, meta) {
                    // meta.row gives the index of the row, so we add 1 for line number
                    return meta.row + 1;  // This will provide line numbers starting from 1
                }
            },
                {data: \x27Id\x27
                ,visible: false, // Hide the ID column
                    searchable: false},
                { data: \x27refer\x27 },
                { data: \x27livre\x27 },
                { data: \x27denomination\x27 },
                { data: \x27statut\x27 },
                
                ";
            // line 157
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "            { data: \x27visible\x27 }, // Add the visible column only for admins
            ";
            }
            // line 160
            yield "                {
    data: null,
    render: function (data, type, row, meta) {
        const rowIndex = meta.row + 1; // Row index (1-based)
        const totalRows = fiches.length;

        const baseUrlAfficher = \"";
            // line 166
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche_total_sav_req", ["id" => 0]);
            yield "\".replace(\x27/0\x27, \x27\x27);
        const reqId = \"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ReqId"]) || array_key_exists("ReqId", $context) ? $context["ReqId"] : (function () { throw new RuntimeError('Variable "ReqId" does not exist.', 167, $this->source); })()), "html", null, true);
            yield "\"; 
        const baseUrlEdit = \"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_requete_edit", ["id" => 0, "reqId" => 0]), "html", null, true);
            yield "\"
            .replace(\"/0/0\", `/\${data.Id}/\${reqId}`);
        const baseUrlDupliquer = \"";
            // line 170
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_dupliquer", ["ficheID" => 0]);
            yield "\".replace(\x27/0\x27, \x27\x27);
        const baseUrlDelete = \"";
            // line 171
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => 0]);
            yield "\".replace(\x27/0\x27, \x27\x27);

        let actions = `
    <a href=\"\${baseUrlAfficher}/\${data.Id}?index=\${rowIndex}&total=\${totalRows}\"
       class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\">
        <i class=\"fas fa-eye me-1\"></i>
    </a>
    <a href=\"#\" 
       class=\"btn btn-outline-secondary btn-sm tooltip-link\" 
       data-toggle=\"modal\" 
       data-tooltip=\"Exporter la fiche\"
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

";
            // line 211
            yield from $this->load("fiche/fiche_export_pdf_modal.html.twig", 211)->unwrap()->yield($context);
            // line 212
            yield from $this->load("fiche/fiche_export_word_modal.html.twig", 212)->unwrap()->yield($context);
            // line 213
            yield "<div class=\"col-12 d-flex flex-column flex-sm-column flex-lg-row flex-xl-row gap-2 my-5\" style=\"display:flex;\">
<a href=\"#\" id=\"exportButton\"  class=\"card-link btn btn-order\">Exporter le graphe</a>

    <input type=\"hidden\" id=\"ficheDataPdf\" name=\"ficheDataPdf\" value=\"\">
    ";
            // line 218
            yield "    <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\" data-bs-target=\"#exportModalPdf\">
    Exporter vers PDF
</button>
    <button id=\"exportPDFButton\" class=\"btn btn-order mx-2\">Exporter les graphes PDF</button>
    <button id=\"exportZIPButton\" class=\"btn btn-order mx-2\">Exporter les graphes ZIP</button>

    <input type=\"hidden\" id=\"ficheDataWord\" name=\"ficheDataWord\" value=\"\">
    <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\" data-bs-target=\"#exportModalword\">Exporter vers Word</button>
    <a href=\"#\" onclick=\"exportToExcel()\" class=\"btn btn-order\">Exporter vers Excel</a>
</div>

";
            // line 239
            yield "<script>
    // Assuming `fiches` is a JavaScript object or array containing your fiche data
    const fichesPdf = ";
            // line 241
            yield (isset($context["fichesJSON"]) || array_key_exists("fichesJSON", $context) ? $context["fichesJSON"] : (function () { throw new RuntimeError('Variable "fichesJSON" does not exist.', 241, $this->source); })());
            yield ";
    // Serialize the JavaScript object into a JSON string
    const ficheDataSerializedPdf = JSON.stringify(fichesPdf);
    // Set the value of the hidden input field with the serialized data
    document.getElementById(\"ficheDataPdf\").value = ficheDataSerializedPdf;
    document.getElementById(\"ficheDataWord\").value = ficheDataSerializedPdf;
</script>
";
            // line 249
            yield " 
";
        } else {
            // line 251
            yield "    <p>Aucune fiche disponible pour ce livre !</p>
";
        }
        // line 253
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
        // line 273
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 273, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 273, $this->source); })()), 0, [], "array", false, false, false, 273), "livre", [], "any", false, false, false, 273), "html", null, true)) : (""));
        yield "\";
        ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 274, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 275
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getMotCles", [], "method", false, false, false, 275));
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                // line 276
                yield "                if (keywordOccurrences.hasOwnProperty(\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 276), "html", null, true);
                yield "\x27)) {
                    keywordOccurrences[\x27";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 277), "html", null, true);
                yield "\x27] += 1;
                } else {
                    keywordOccurrences[\x27";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 279), "html", null, true);
                yield "\x27] = 1;
                }
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "
        const keywordsData = Object.keys(keywordOccurrences)
            .map(keyword => ({
                label: keyword,
                value: keywordOccurrences[keyword]
            }))
            .sort((a, b) => a.label.localeCompare(b.label)); 

        const labels = keywordsData.map(data => data.label);
        const values = keywordsData.map(data => data.value);

        const ctx1 = document.getElementById(\x27keywordChart1\x27).getContext(\x272d\x27);
        const chart1 = new Chart(ctx1, {
            type: \x27bar\x27,
            data: {
                labels: labels,
                datasets: [{
                    label: \x27Occurrences des mots-clés\x27,
                    data: values,
                    backgroundColor: \x27rgba(54, 162, 235, 0.5)\x27,
                    borderColor: \x27rgba(54, 162, 235, 1)\x27,
                    borderWidth: 1
                }]
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
        // line 352
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 352, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 352, $this->source); })()), 0, [], "array", false, false, false, 352), "livre", [], "any", false, false, false, 352), "html", null, true)) : (""));
        yield "\";
        const fichesData = [
            ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 354, $this->source); })()));
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
            // line 355
            yield "            {
                statut: \"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 356), "html", null, true);
            yield "\",
                mots: [";
            // line 357
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 357));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 357), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 357)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
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
            }";
            // line 358
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 359
            yield "            ";
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
        // line 360
        yield "        ];

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
        // line 457
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 457, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 457, $this->source); })()), 0, [], "array", false, false, false, 457), "livre", [], "any", false, false, false, 457), "html", null, true)) : (""));
        yield "\";
        const fichesData = [
            ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 459, $this->source); })()));
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
            // line 460
            yield "            {
                statut: \"";
            // line 461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 461), "html", null, true);
            yield "\",
                mots: [";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 462));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 462), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
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
            }";
            // line 463
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 464
            yield "            ";
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
        // line 465
        yield "        ];

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
        // line 570
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 570, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 570, $this->source); })()), 0, [], "array", false, false, false, 570), "livre", [], "any", false, false, false, 570), "html", null, true)) : (""));
        yield "\";
        const fichesData = [
            ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 572, $this->source); })()));
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
            // line 573
            yield "            {
                statut: \"";
            // line 574
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 574), "html", null, true);
            yield "\",
                mots: [";
            // line 575
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 575));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 575), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 575)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
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
            }";
            // line 576
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 576)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 577
            yield "            ";
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
        // line 578
        yield "        ];

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
        // line 679
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 679, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 679, $this->source); })()), 0, [], "array", false, false, false, 679), "livre", [], "any", false, false, false, 679), "html", null, true)) : (""));
        yield "\";
    const fichesData = [
        ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 681, $this->source); })()));
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
            // line 682
            yield "        {
            statut: \"";
            // line 683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 683), "html", null, true);
            yield "\",
            mots: [";
            // line 684
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 684));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 684), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 684)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                }
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
        }";
            // line 685
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
            }
            // line 686
            yield "        ";
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
        // line 687
        yield "    ];

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
                    font: { size: 28 }
                },
                datalabels: {
                    anchor: \x27center\x27,
                    align: \x27top\x27,
                    color: \x27black\x27,
                    font: { size: 16, weight: \x27bold\x27 },
                    formatter: (value) => value > 0 ? value : \x27\x27
                }
            },
            responsive: true,
            scales: {
                x: {
                    ticks: {
                        font: { size: 22 } // Consistent font size with generateGraph4
                    },
                    title: {
                        display: true,
                        text: \"Mots-clés\", // X-axis title
                        font: { size: 22 }
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: { font: { size: 22 } }, // Consistent font size with generateGraph4
                    title: {
                        display: true,
                        text: \"Occurrences\", // Y-axis title
                        font: { size: 22 }
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
        // line 785
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 785, $this->source); })())) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 785, $this->source); })()), 0, [], "array", false, false, false, 785), "livre", [], "any", false, false, false, 785), "html", null, true)) : (""));
        yield "\";
            const fichesData = [";
        // line 786
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 786, $this->source); })()));
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
            // line 787
            yield "                {
                    statut: \"";
            // line 788
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getStatut", [], "method", false, false, false, 788), "html", null, true);
            yield "\",
                    mots: [";
            // line 789
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "motCles", [], "any", false, false, false, 789));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "reference", [], "any", false, false, false, 789), "html", null, true);
                yield "\"";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 789)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ",";
                }
                // line 790
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
            // line 792
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 792)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ",";
            }
            // line 793
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
        const { jsPDF } = window.jspdf;
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
        zip.file(\"graphe1.png\", imgData1, { base64: true });

        // Capture the second graph as a PNG
        const canvas2 = document.getElementById(\x27keywordChart2\x27);
        const imgData2 = canvas2.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        // Add the second graph to the ZIP
        zip.file(\"graphe2.png\", imgData2, { base64: true });

        const canvas3 = document.getElementById(\x27keywordChart3\x27);
        const imgData3 = canvas3.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        zip.file(\"graphe3.png\", imgData3, { base64: true });

        const canvas4 = document.getElementById(\x27keywordChart4\x27);
        const imgData4 = canvas4.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        zip.file(\"graphe4.png\", imgData4, { base64: true });

        const canvas5 = document.getElementById(\x27keywordChart5\x27);
        const imgData5 = canvas5.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        zip.file(\"graphe5.png\", imgData5, { base64: true });

        const canvas6 = document.getElementById(\x27keywordChart6\x27);
        const imgData6 = canvas6.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

        zip.file(\"graphe6.png\", imgData6, {base64: true});

        // Generate and download the ZIP file
        zip.generateAsync({ type: \"blob\" }).then(function(content) {
            const downloadLink = document.createElement(\x27a\x27);
            downloadLink.href = URL.createObjectURL(content);
            downloadLink.download = \x27graphes.zip\x27;
            downloadLink.click();
        });
    }

    // Call the functions when the content is loaded
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
       
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
function confirmDeleteFiche(url) {
    // Afficher une boîte de dialogue de confirmation
    if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
        // Si l\x27utilisateur clique sur OK, naviguer vers l\x27URL de suppression
        window.location.href = url;
    }
    // Retourner false pour empêcher le lien par défaut de se déclencher
    return false;
}
</script>
<script>
function exportToExcel() {
    // Créer une nouvelle feuille de calcul
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
        // line 1028
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 1028, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 1029
            yield "        statusList.push(\x27";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 1029), "html", null, true);
            yield "\x27);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1031
        yield "    statusList = [...new Set(statusList)]; // Remove duplicates
    statusList.sort(); // Trie les statuts par ordre alphabétique

    // Pour chaque fiche, compter les occurrences de chaque mot-clé
    ";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fiches"]) || array_key_exists("fiches", $context) ? $context["fiches"] : (function () { throw new RuntimeError('Variable "fiches" does not exist.', 1035, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 1036
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getMotCles", [], "method", false, false, false, 1036));
            foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
                // line 1037
                yield "            if (!keywordOccurrences[\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1037), "html", null, true);
                yield "\x27]) {
                keywordOccurrences[\x27";
                // line 1038
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1038), "html", null, true);
                yield "\x27] = {
                    reference: \x27";
                // line 1039
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1039), "html", null, true);
                yield "\x27,
                    denomination: \x27";
                // line 1040
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getDenomination", [], "method", false, false, false, 1040), "html", null, true);
                yield "\x27,
                    count: 1,
                    statusCounts: Object.fromEntries(statusList.map(status => [status, 0])),
                    ficheIds: [\x27";
                // line 1043
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 1043), "html", null, true);
                yield "\x27] // Initialize with the current fiche ID
                };
            } else {
                keywordOccurrences[\x27";
                // line 1046
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1046), "html", null, true);
                yield "\x27].count++;
                keywordOccurrences[\x27";
                // line 1047
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1047), "html", null, true);
                yield "\x27].ficheIds.push(\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 1047), "html", null, true);
                yield "\x27); // Add the fiche ID
            }
            keywordOccurrences[\x27";
                // line 1049
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mot"], "getReference", [], "method", false, false, false, 1049), "html", null, true);
                yield "\x27].statusCounts[\x27";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "statut", [], "any", false, false, false, 1049), "html", null, true);
                yield "\x27]++;
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1051
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1052
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
    headers.push(\x27Liste des fiches\x27); // Add a new column header for fiche IDs

    // Pour chaque mot-clé, ajouter les données pertinentes au tableau
    sortedKeywords.forEach(function(keyword) {
        var row = [
            keywordOccurrences[keyword].reference,
            keywordOccurrences[keyword].denomination,
            keywordOccurrences[keyword].count,
            ...statusList.map(status => keywordOccurrences[keyword].statusCounts[status]),
            keywordOccurrences[keyword].ficheIds.join(\x27, \x27) // Join fiche IDs into a comma-separated string
        ];
        data.push(row);
    });

    // Créer une nouvelle feuille de calcul à partir des données
    var ws = XLSX.utils.aoa_to_sheet([headers, ...data]);

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
        return "fiche/liste_fichesRech_SavReq.html.twig";
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
        return array (  1728 => 1052,  1722 => 1051,  1712 => 1049,  1705 => 1047,  1701 => 1046,  1695 => 1043,  1689 => 1040,  1685 => 1039,  1681 => 1038,  1676 => 1037,  1671 => 1036,  1667 => 1035,  1661 => 1031,  1652 => 1029,  1648 => 1028,  1398 => 793,  1394 => 792,  1377 => 790,  1354 => 789,  1350 => 788,  1347 => 787,  1330 => 786,  1326 => 785,  1226 => 687,  1212 => 686,  1208 => 685,  1171 => 684,  1167 => 683,  1164 => 682,  1147 => 681,  1142 => 679,  1039 => 578,  1025 => 577,  1021 => 576,  984 => 575,  980 => 574,  977 => 573,  960 => 572,  955 => 570,  848 => 465,  834 => 464,  830 => 463,  793 => 462,  789 => 461,  786 => 460,  769 => 459,  764 => 457,  665 => 360,  651 => 359,  647 => 358,  610 => 357,  606 => 356,  603 => 355,  586 => 354,  581 => 352,  510 => 283,  504 => 282,  495 => 279,  490 => 277,  485 => 276,  480 => 275,  476 => 274,  472 => 273,  450 => 253,  446 => 251,  442 => 249,  432 => 241,  428 => 239,  415 => 218,  409 => 213,  407 => 212,  405 => 211,  362 => 171,  358 => 170,  353 => 168,  349 => 167,  345 => 166,  337 => 160,  333 => 158,  331 => 157,  300 => 129,  294 => 125,  278 => 110,  275 => 107,  274 => 106,  272 => 105,  270 => 104,  267 => 103,  265 => 102,  259 => 98,  246 => 95,  241 => 94,  237 => 93,  231 => 89,  227 => 86,  221 => 82,  214 => 76,  210 => 74,  208 => 73,  196 => 63,  194 => 62,  189 => 60,  186 => 59,  183 => 58,  134 => 11,  129 => 9,  126 => 8,  113 => 7,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
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
<script src=\"{{ asset(\x27js/jquery.easy-pie-chart.js\x27) }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>


</head>
<style>
/* Tooltip container */
        .tooltip-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
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
.actions-td {
    display: flex;
    gap: 10px;  /* Adjust the gap between the action links as needed */
    justify-content: flex-start; /* Align the actions to the left (you can change it to \x27center\x27 or \x27space-between\x27 if needed) */
    flex-wrap: wrap;  /* Ensures that the actions wrap to the next line if there\x27s not enough space */
}
</style>
{# {% include \x27breadcrumb.html.twig\x27 with { breadcrumbs: breadcrumbs } %} #}
 {% include \x27fiche/fiche_modal.html.twig\x27 %}
<div class=\"card-body classs\">
<h3 style=\"text-align: center; margin-bottom: 30px; \"> Résultat de recherche pour : {{motClesSelect}}</h3>

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
{# {% if true %} #}
<div class=\"chart-container d-flex justify-content-between flex-md-row flex-sm-column align-items-md-start align-items-sm-center\">
<div class=\"col-12 col-md-5 col-sm-12 mt-3 mb-3\">
<select name=\"pets\" id=\"pet-select\" class=\"form-select\">
    <option value=\"\">------- Apparition des mots clés -------</option>
    {% for motCle in motCleOccurrences %}
        <option value=\"{{ motCle.denomination }}\">
            {{ motCle.reference }} : {{ motCle.denomination }} ({{ motCle.count }})
        </option>
    {% endfor %}
</select>
</div>


{% if nbrFicheTotal != 0 %}

   {% if nbrFicheTotal != 0 %}
    {% include \x27fiche/chart/circular_chart.html.twig\x27 with { 
        nbrFiches: nbrFiches, 
        nbrFicheTotal: nbrFicheTotal 
    } %}
{% endif %}
</div>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>

        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
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
      
        \$(\x27#fichesTable\x27).DataTable({
            data: fiches,
            language: {
                paginate:{
                    next: \"Suivant\",
                    previous: \"Précédent\"
                },
                info: \x27Page _PAGE_ de _PAGES_\x27,
                lengthMenu: \x27Afficher _MENU_ fiches\x27
            },
            columns: [
                {
                data: null,  // Not bound to any data source
                render: function (data, type, row, meta) {
                    // meta.row gives the index of the row, so we add 1 for line number
                    return meta.row + 1;  // This will provide line numbers starting from 1
                }
            },
                {data: \x27Id\x27
                ,visible: false, // Hide the ID column
                    searchable: false},
                { data: \x27refer\x27 },
                { data: \x27livre\x27 },
                { data: \x27denomination\x27 },
                { data: \x27statut\x27 },
                
                {% if is_granted(\x27ROLE_ADMIN\x27) %}
            { data: \x27visible\x27 }, // Add the visible column only for admins
            {% endif %}
                {
    data: null,
    render: function (data, type, row, meta) {
        const rowIndex = meta.row + 1; // Row index (1-based)
        const totalRows = fiches.length;

        const baseUrlAfficher = \"{{ path(\x27detail_fiche_total_sav_req\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
        const reqId = \"{{ ReqId }}\"; 
        const baseUrlEdit = \"{{ path(\x27app_fiche_requete_edit\x27, {\x27id\x27: 0, \x27reqId\x27: 0}) }}\"
            .replace(\"/0/0\", `/\${data.Id}/\${reqId}`);
        const baseUrlDupliquer = \"{{ path(\x27fiche_dupliquer\x27, {\x27ficheID\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);
        const baseUrlDelete = \"{{ path(\x27delete_fiche\x27, {\x27id\x27: 0}) }}\".replace(\x27/0\x27, \x27\x27);

        let actions = `
    <a href=\"\${baseUrlAfficher}/\${data.Id}?index=\${rowIndex}&total=\${totalRows}\"
       class=\"btn btn-outline-primary btn-sm me-2 tooltip-link\" data-tooltip=\"Afficher la fiche\">
        <i class=\"fas fa-eye me-1\"></i>
    </a>
    <a href=\"#\" 
       class=\"btn btn-outline-secondary btn-sm tooltip-link\" 
       data-toggle=\"modal\" 
       data-tooltip=\"Exporter la fiche\"
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

{% include \x27fiche/fiche_export_pdf_modal.html.twig\x27 %}
{% include \x27fiche/fiche_export_word_modal.html.twig\x27 %}
<div class=\"col-12 d-flex flex-column flex-sm-column flex-lg-row flex-xl-row gap-2 my-5\" style=\"display:flex;\">
<a href=\"#\" id=\"exportButton\"  class=\"card-link btn btn-order\">Exporter le graphe</a>

    <input type=\"hidden\" id=\"ficheDataPdf\" name=\"ficheDataPdf\" value=\"\">
    {# <button type=\"submit\" class=\"card-link btn btn-order\">Export to PDF</button> #}
    <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\" data-bs-target=\"#exportModalPdf\">
    Exporter vers PDF
</button>
    <button id=\"exportPDFButton\" class=\"btn btn-order mx-2\">Exporter les graphes PDF</button>
    <button id=\"exportZIPButton\" class=\"btn btn-order mx-2\">Exporter les graphes ZIP</button>

    <input type=\"hidden\" id=\"ficheDataWord\" name=\"ficheDataWord\" value=\"\">
    <button type=\"button\" class=\"card-link btn btn-order\" data-bs-toggle=\"modal\" data-bs-target=\"#exportModalword\">Exporter vers Word</button>
    <a href=\"#\" onclick=\"exportToExcel()\" class=\"btn btn-order\">Exporter vers Excel</a>
</div>

{# <script>
    // Assuming `fiches` is a JavaScript object or array containing your fiche data
    const fiches = {{ fichesJSON|raw }};

    // Serialize the JavaScript object into a JSON string
    const ficheDataSerialized = JSON.stringify(fiches);

    // Set the value of the hidden input field with the serialized data
    document.getElementById(\"ficheData\").value = ficheDataSerialized;
</script> #}
<script>
    // Assuming `fiches` is a JavaScript object or array containing your fiche data
    const fichesPdf = {{ fichesJSON|raw }};
    // Serialize the JavaScript object into a JSON string
    const ficheDataSerializedPdf = JSON.stringify(fichesPdf);
    // Set the value of the hidden input field with the serialized data
    document.getElementById(\"ficheDataPdf\").value = ficheDataSerializedPdf;
    document.getElementById(\"ficheDataWord\").value = ficheDataSerializedPdf;
</script>
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
        const livre = \"{{ fiches|length > 0 ? fiches[0].livre : \x27\x27 }}\";
        {% for fiche in fiches %}
            {% for mot in fiche.getMotCles() %}
                if (keywordOccurrences.hasOwnProperty(\x27{{ mot.reference }}\x27)) {
                    keywordOccurrences[\x27{{ mot.reference }}\x27] += 1;
                } else {
                    keywordOccurrences[\x27{{ mot.reference }}\x27] = 1;
                }
            {% endfor %}
        {% endfor %}

        const keywordsData = Object.keys(keywordOccurrences)
            .map(keyword => ({
                label: keyword,
                value: keywordOccurrences[keyword]
            }))
            .sort((a, b) => a.label.localeCompare(b.label)); 

        const labels = keywordsData.map(data => data.label);
        const values = keywordsData.map(data => data.value);

        const ctx1 = document.getElementById(\x27keywordChart1\x27).getContext(\x272d\x27);
        const chart1 = new Chart(ctx1, {
            type: \x27bar\x27,
            data: {
                labels: labels,
                datasets: [{
                    label: \x27Occurrences des mots-clés\x27,
                    data: values,
                    backgroundColor: \x27rgba(54, 162, 235, 0.5)\x27,
                    borderColor: \x27rgba(54, 162, 235, 1)\x27,
                    borderWidth: 1
                }]
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
        const fichesData = [
            {% for fiche in fiches %}
            {
                statut: \"{{ fiche.getStatut() }}\",
                mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %}, {% endif %}{% endfor %}]
            }{% if not loop.last %}, {% endif %}
            {% endfor %}
        ];

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
        const fichesData = [
            {% for fiche in fiches %}
            {
                statut: \"{{ fiche.getStatut() }}\",
                mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %}, {% endif %}{% endfor %}]
            }{% if not loop.last %}, {% endif %}
            {% endfor %}
        ];

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
        const fichesData = [
            {% for fiche in fiches %}
            {
                statut: \"{{ fiche.getStatut() }}\",
                mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %}, {% endif %}{% endfor %}]
            }{% if not loop.last %}, {% endif %}
            {% endfor %}
        ];

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
    const fichesData = [
        {% for fiche in fiches %}
        {
            statut: \"{{ fiche.getStatut() }}\",
            mots: [{% for mot in fiche.motCles %}\"{{ mot.reference }}\"{% if not loop.last %}, {% endif %}{% endfor %}]
        }{% if not loop.last %}, {% endif %}
        {% endfor %}
    ];

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
                    font: { size: 28 }
                },
                datalabels: {
                    anchor: \x27center\x27,
                    align: \x27top\x27,
                    color: \x27black\x27,
                    font: { size: 16, weight: \x27bold\x27 },
                    formatter: (value) => value > 0 ? value : \x27\x27
                }
            },
            responsive: true,
            scales: {
                x: {
                    ticks: {
                        font: { size: 22 } // Consistent font size with generateGraph4
                    },
                    title: {
                        display: true,
                        text: \"Mots-clés\", // X-axis title
                        font: { size: 22 }
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: { font: { size: 22 } }, // Consistent font size with generateGraph4
                    title: {
                        display: true,
                        text: \"Occurrences\", // Y-axis title
                        font: { size: 22 }
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
        const { jsPDF } = window.jspdf;
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
        zip.file(\"graphe1.png\", imgData1, { base64: true });

        // Capture the second graph as a PNG
        const canvas2 = document.getElementById(\x27keywordChart2\x27);
        const imgData2 = canvas2.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        // Add the second graph to the ZIP
        zip.file(\"graphe2.png\", imgData2, { base64: true });

        const canvas3 = document.getElementById(\x27keywordChart3\x27);
        const imgData3 = canvas3.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        zip.file(\"graphe3.png\", imgData3, { base64: true });

        const canvas4 = document.getElementById(\x27keywordChart4\x27);
        const imgData4 = canvas4.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        zip.file(\"graphe4.png\", imgData4, { base64: true });

        const canvas5 = document.getElementById(\x27keywordChart5\x27);
        const imgData5 = canvas5.toDataURL(\x27image/png\x27).split(\x27,\x27)[1]; 

        zip.file(\"graphe5.png\", imgData5, { base64: true });

        const canvas6 = document.getElementById(\x27keywordChart6\x27);
        const imgData6 = canvas6.toDataURL(\x27image/png\x27).split(\x27,\x27)[1];

        zip.file(\"graphe6.png\", imgData6, {base64: true});

        // Generate and download the ZIP file
        zip.generateAsync({ type: \"blob\" }).then(function(content) {
            const downloadLink = document.createElement(\x27a\x27);
            downloadLink.href = URL.createObjectURL(content);
            downloadLink.download = \x27graphes.zip\x27;
            downloadLink.click();
        });
    }

    // Call the functions when the content is loaded
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
       
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
function confirmDeleteFiche(url) {
    // Afficher une boîte de dialogue de confirmation
    if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
        // Si l\x27utilisateur clique sur OK, naviguer vers l\x27URL de suppression
        window.location.href = url;
    }
    // Retourner false pour empêcher le lien par défaut de se déclencher
    return false;
}
</script>
<script>
function exportToExcel() {
    // Créer une nouvelle feuille de calcul
    var wb = XLSX.utils.book_new();

    // Convertir les données des fiches en format de tableau pour SheetJS
    var data = [];

    // Créer un dictionnaire pour stocker les occurrences de chaque mot-clé
    var keywordOccurrences = {};

    // Créer un dictionnaire pour stocker le nombre de fiches par statut pour chaque mot-clé
    var keywordStatusCounts = {};

    // Collecter les différents statuts des fiches
    var statusList = [];
    {% for fiche in fiches %}
        statusList.push(\x27{{ fiche.statut }}\x27);
    {% endfor %}
    statusList = [...new Set(statusList)]; // Remove duplicates
    statusList.sort(); // Trie les statuts par ordre alphabétique

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
            keywordOccurrences[\x27{{ mot.getReference() }}\x27].statusCounts[\x27{{ fiche.statut }}\x27]++;
        {% endfor %}
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
    headers.push(\x27Liste des fiches\x27); // Add a new column header for fiche IDs

    // Pour chaque mot-clé, ajouter les données pertinentes au tableau
    sortedKeywords.forEach(function(keyword) {
        var row = [
            keywordOccurrences[keyword].reference,
            keywordOccurrences[keyword].denomination,
            keywordOccurrences[keyword].count,
            ...statusList.map(status => keywordOccurrences[keyword].statusCounts[status]),
            keywordOccurrences[keyword].ficheIds.join(\x27, \x27) // Join fiche IDs into a comma-separated string
        ];
        data.push(row);
    });

    // Créer une nouvelle feuille de calcul à partir des données
    var ws = XLSX.utils.aoa_to_sheet([headers, ...data]);

    // Ajouter la feuille de calcul au classeur
    XLSX.utils.book_append_sheet(wb, ws, \"Mot-cles\");

    // Sauvegarder le classeur au format Excel
    XLSX.writeFile(wb, \"mon_tableau.xlsx\");
}
</script>

 
{% endblock %}", "fiche/liste_fichesRech_SavReq.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\liste_fichesRech_SavReq.html.twig");
    }
}
