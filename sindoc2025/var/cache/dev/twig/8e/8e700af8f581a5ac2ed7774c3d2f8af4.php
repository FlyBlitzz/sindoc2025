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

/* historique/index.html.twig */
class __TwigTemplate_295795824b701237f03962f446d30f02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

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

        yield "Historique index";
        
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
        yield "    <style>
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
        /* Styles pour le modal */
        .btn {
            max-width: 200px;
        }

        #modal, #twoModal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            overflow-y: auto; /* Permet le scroll si le contenu est trop grand */
            padding: 10px;  /* Barre de défilement verticale */

        }

        #modal-body, #old-modal-body, #new-modal-body {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 90%; /* Réduit la largeur sur mobile */
            max-width: 600px; /* Évite une taille trop grande sur desktop */
            max-height: 90vh; /* Empêche la modale de dépasser l\x27écran */
            overflow-y: auto; /* Ajoute un scroll interne si nécessaire */
            text-align: center;
        }

        #close, #closeTwoModal {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }

        #myTable {
            table-layout: auto;
            min-width: 1250px; /* Ajuste selon le besoin */
        }
    </style>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeFicheRechercher.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css\">

    </head>
    <div class=\"classs\" style=\"width: 80%; margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
            ";
        // line 89
        yield from $this->load("_partials/_adminnav.html.twig", 89)->unwrap()->yield($context);
        // line 90
        yield "
            <main class=\"col-12 container border border-light bg-white\">

                <h1>Table Historique</h1>

                <div class=\"d-flex align-items-center gap-3\">
                    <form method=\"get\" action=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique_search");
        yield "\">
                        <label for=\"nom\">Nom de l\x27utilisateur :</label>
                        <input type=\"text\" name=\"nom\" id=\"nom\" placeholder=\"Entrez le nom de l\x27utilisateur\"
                               value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "query", [], "any", false, false, false, 99), "get", ["nom"], "method", false, false, false, 99), "html", null, true);
        yield "\"/>
                        <label for=\"objet\"> Objet :</label>
                        <select id=\"objet\" name=\"objet\">
                            <option value=\"all\" selected=\"selected\">Tous les objets</option>
                            <option value=\"ficheID\"
                                    ";
        // line 104
        if (("ficheID" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "query", [], "any", false, false, false, 104), "get", ["objet"], "method", false, false, false, 104))) {
            yield "selected";
        }
        yield ">Fiche
                            </option>
                            <option value=\"indexID\"
                                    ";
        // line 107
        if (("indexID" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, false, 107), "query", [], "any", false, false, false, 107), "get", ["objet"], "method", false, false, false, 107))) {
            yield "selected";
        }
        yield ">Index
                            </option>
                            <option value=\"livreID\"
                                    ";
        // line 110
        if (("livreID" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "query", [], "any", false, false, false, 110), "get", ["objet"], "method", false, false, false, 110))) {
            yield "selected";
        }
        yield ">Livre
                            </option>
                            <option value=\"mot_cleID\"
                                    ";
        // line 113
        if (("mot_cleID" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "query", [], "any", false, false, false, 113), "get", ["objet"], "method", false, false, false, 113))) {
            yield "selected";
        }
        yield ">Mot clé
                            </option>
                            <option value=\"statutID\"
                                    ";
        // line 116
        if (("statutID" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "query", [], "any", false, false, false, 116), "get", ["objet"], "method", false, false, false, 116))) {
            yield "selected";
        }
        yield ">Statut
                            </option>
                        </select>
                        <label for=\"id\">n° </label>
                        <input type=\"number\" id=\"id\" name=\"id\" min=\"1\" value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "query", [], "any", false, false, false, 120), "get", ["id"], "method", false, false, false, 120), "html", null, true);
        yield "\">
                        <button class=\"btn\" style=\"border: 1px solid black;    padding: 5px;\" type=\"submit\">Rechercher
                        </button>
                        <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique_app_historique_index");
        yield "\" class=\"btn\"
                           style=\"border: 1px solid black;    padding: 5px;\">Réinitialiser</a>
                    </form>

                    <form method=\"post\" action=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vider_historique");
        yield "\"
                          onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir vider l\\\x27historique ?\x27);\">
                        <button class=\"btn btn-danger\" style=\"border: 1px solid black;    padding: 5px;\">Vider
                            l\x27historique
                        </button>
                    </form>
                </div>


                <table class=\"table w-100\" id=\"myTable\">
                    <thead>
                    <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                        <th>Type d\x27action</th>
                        <th>Utilisateur</th>
                        <th>Objet</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["historiques"]) || array_key_exists("historiques", $context) ? $context["historiques"] : (function () { throw new RuntimeError('Variable "historiques" does not exist.', 148, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 149
            yield "                        <tr>
                            <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "typeModif", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                            <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                            ";
            // line 152
            $context["id"] = (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 153
$context["historique"], "ficheID", [], "any", false, false, false, 153))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("Fiche n°" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "ficheID", [], "any", false, false, false, 153))) : ((((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 154
$context["historique"], "livreID", [], "any", false, false, false, 154))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("Livre n°" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "livreID", [], "any", false, false, false, 154))) : ((((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 155
$context["historique"], "indexID", [], "any", false, false, false, 155))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("Index n°" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "indexID", [], "any", false, false, false, 155))) : ((((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 156
$context["historique"], "mot_cleID", [], "any", false, false, false, 156))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("Mot clé n°" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "mot_cleID", [], "any", false, false, false, 156))) : ((((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 157
$context["historique"], "statutID", [], "any", false, false, false, 157))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("Statut n°" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "statutID", [], "any", false, false, false, 157))) : (null))))))))));
            // line 158
            yield "                            <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 158, $this->source); })()), "html", null, true);
            yield "</td>
                            <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "getCreateDate", [], "method", false, false, false, 159), "Y-m-d"), "html", null, true);
            yield "</td>
                            <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "getHeure", [], "method", false, false, false, 160), "H:i:s"), "html", null, true);
            yield " </td>
                            <td>
                                <div class=\"d-flex gap-2\">
                                    ";
            // line 163
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "typeModif", [], "any", false, false, false, 163) == "Modification")) {
                // line 164
                yield "                                        <button class=\"btn-primary btn-sm me-2 tooltip-link open-two-modal\" data-tooltip=\"Afficher la modification\"
                                                style=\"border: 1px solid black;\"
                                                data-object=\x27";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(["old" => CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "getOldData", [], "method", false, false, false, 166), "new" => CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "data", [], "any", false, false, false, 166)]), "html", null, true);
                yield "\x27>
                                            <i class=\"fas fa-eye me-1\"></i>
                                        </button>
                                    ";
            } else {
                // line 170
                yield "                                        <button class=\"btn-primary btn-sm me-2 tooltip-link open-modal\" data-tooltip=\"Afficher la modification\"
                                                data-object=\x27";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "data", [], "any", false, false, false, 171)), "html", null, true);
                yield "\x27><i
                                                    class=\"fas fa-eye me-1\"></i>
                                        </button>
                                    ";
            }
            // line 175
            yield "                                    <form method=\"post\"
                                          action=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique_app_historique_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "idHistorique", [], "any", false, false, false, 176)]), "html", null, true);
            yield "\"
                                          onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer cet élément ?\x27);\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["historique"], "idHistorique", [], "any", false, false, false, 179))), "html", null, true);
            yield "\">
                                        <button class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la ligne\"
                                                style=\"border: 1px solid red; text-align: center\"><i
                                                    class=\"fas fa-trash me-1\"></i>
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 189
        if (!$context['_iterated']) {
            // line 190
            yield "                        <tr>
                            <td colspan=\"3\">Aucun historique trouvé !</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['historique'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "                    </tbody>
                </table>
                <!-- Modal -->
                <div id=\"modal\">
                    <span id=\"close\">&times;</span>
                    <div id=\"modal-body\"></div>
                </div>
                <script>
                    // Récupérer la référence du modal et de son corps
                    const modal = document.getElementById(\"modal\");
                    const modalBody = document.getElementById(\"modal-body\");
                    const closeModal = document.getElementById(\"close\"); // Référence au bouton de fermeture

                    function escapeHTML(text) {
                        return text
                            .replace(/&/g, \"&amp;\")
                            .replace(/</g, \"&lt;\")
                            .replace(/>/g, \"&gt;\")
                            .replace(/\"/g, \"&quot;\")
                            .replace(/\x27/g, \"&#039;\");
                    }

                    document.querySelectorAll(\".open-modal\").forEach(button => {
                        button.addEventListener(\"click\", function () {
                            // Récupération de l\x27objet JSON depuis l\x27attribut data-object
                            const data = JSON.parse(this.getAttribute(\"data-object\"));


                            // Initialisation du contenu
                            let content = \"<h2>Détails de l\x27objet</h2>\";

                            // Parcours des clés de l\x27objet et génération dynamique du contenu
                            for (const [key, value] of Object.entries(data)) {
                                if (value) { // Si la valeur n\x27est pas null
                                    content += `<p><strong>\${escapeHTML(key)}:</strong> \${escapeHTML(value.toString())}</p>`;
                                }
                            }

                            // Injection dans le modal
                            modalBody.innerHTML = content;

                            // Affichage du modal
                            modal.style.display = \"flex\";
                        });
                    })


                    // Fermer le modal
                    closeModal.addEventListener(\"click\", () => {
                        modal.style.display = \"none\";
                    });

                    // Clic en dehors du modal pour le fermer
                    window.addEventListener(\"click\", (e) => {
                        if (e.target === modal) {
                            modal.style.display = \"none\";
                        }
                    });
                </script>

                <div id=\"twoModal\">
                    <span id=\"closeTwoModal\">&times;</span>
                    <div id=\"old-modal-body\"></div>
                    <div id=\"new-modal-body\"></div>
                </div>
                <script>
                    // Récupérer la référence du modal et de son corps
                    const twoModal = document.getElementById(\"twoModal\");
                    const oldModalBody = document.getElementById(\"old-modal-body\");
                    const newModalBody = document.getElementById(\"new-modal-body\");
                    const closeTwoModal = document.getElementById(\"closeTwoModal\"); // Référence au bouton de fermeture

                    function escapeHTML(text) {
                        return text
                            .replace(/&/g, \"&amp;\")
                            .replace(/</g, \"&lt;\")
                            .replace(/>/g, \"&gt;\")
                            .replace(/\"/g, \"&quot;\")
                            .replace(/\x27/g, \"&#039;\");
                    }

                    document.querySelectorAll(\".open-two-modal\").forEach(button => {
                        button.addEventListener(\"click\", function () {
                            // Récupération de l\x27objet JSON depuis l\x27attribut data-object
                            const data = JSON.parse(this.getAttribute(\"data-object\"));

                            const oldData = data.old;
                            const newData = data.new;

                            //Initialisation du contenu - Ancienne version
                            let contentOld = \"<h2>Ancienne version</h2>\";

                            // Parcours des clés de l\x27objet et génération dynamique du contenu
                            for (const [key, value] of Object.entries(oldData)) {
                                if (value) { // Si la valeur n\x27est pas null
                                    contentOld += `<p><strong>\${escapeHTML(key)}:</strong> \${escapeHTML(value.toString())}</p>`;
                                }
                            }

                            // Injection dans le modal
                            oldModalBody.innerHTML = contentOld;


                            // Initialisation du contenu - Nouvelle version
                            let contentNew = \"<h2>Nouvelle version</h2>\";

                            // Parcours des clés de l\x27objet et génération dynamique du contenu
                            for (const [key, value] of Object.entries(newData)) {
                                if (value) { // Si la valeur n\x27est pas null
                                    contentNew += `<p><strong>\${escapeHTML(key)}:</strong> \${escapeHTML(value.toString())}</p>`;
                                }
                            }

                            // Injection dans le modal
                            newModalBody.innerHTML = contentNew;

                            // Affichage du modal
                            twoModal.style.display = \"flex\";
                        });
                    })


                    // Fermer le modal
                    closeTwoModal.addEventListener(\"click\", () => {
                        twoModal.style.display = \"none\";
                    });

                    // Clic en dehors du modal pour le fermer
                    window.addEventListener(\"click\", (e) => {
                        if (e.target === twoModal) {
                            twoModal.style.display = \"none\";
                        }
                    });
                </script>
            </main>
        </div>
    </div>
    <script>
        function confirmClearHistorique(url) {
            if (confirm(\"Êtes-vous sûr de vouloir vider l\x27historique ?\")) {
                window.location.href = url;
            }
            return false;
        }
    </script>
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$(\x27#myTable\x27).DataTable({
                \"paging\": true,        // Active la pagination
                \"responsive\": true,
                \"scrollX\": true,
                \"searching\": false,     // Active la recherche
                \"ordering\": false,      // Active le tri des colonnes
                \"info\": true,          // Affiche les informations du tableau
                \"lengthMenu\": [10, 25, 50, 100], // Nombre d\x27éléments par page
                \"language\": {
                    \"lengthMenu\": \"Afficher _MENU_ entrées\",
                    \"zeroRecords\": \"Aucune donnée trouvée\",
                    \"info\": \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
                    \"infoEmpty\": \"Aucune entrée disponible\",
                    \"infoFiltered\": \"(filtré sur _MAX_ entrées au total)\",
                    \"search\": \"Rechercher :\",
                    \"paginate\": {
                        \"first\": \"Premier\",
                        \"last\": \"Dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédent\"
                    }
                }
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
        return "historique/index.html.twig";
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
        return array (  386 => 194,  377 => 190,  375 => 189,  360 => 179,  354 => 176,  351 => 175,  344 => 171,  341 => 170,  334 => 166,  330 => 164,  328 => 163,  322 => 160,  318 => 159,  313 => 158,  311 => 157,  310 => 156,  309 => 155,  308 => 154,  307 => 153,  306 => 152,  302 => 151,  298 => 150,  295 => 149,  290 => 148,  266 => 127,  259 => 123,  253 => 120,  244 => 116,  236 => 113,  228 => 110,  220 => 107,  212 => 104,  204 => 99,  198 => 96,  190 => 90,  188 => 89,  177 => 81,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Historique index{% endblock %}

{% block body %}
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
        /* Styles pour le modal */
        .btn {
            max-width: 200px;
        }

        #modal, #twoModal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            overflow-y: auto; /* Permet le scroll si le contenu est trop grand */
            padding: 10px;  /* Barre de défilement verticale */

        }

        #modal-body, #old-modal-body, #new-modal-body {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            width: 90%; /* Réduit la largeur sur mobile */
            max-width: 600px; /* Évite une taille trop grande sur desktop */
            max-height: 90vh; /* Empêche la modale de dépasser l\x27écran */
            overflow-y: auto; /* Ajoute un scroll interne si nécessaire */
            text-align: center;
        }

        #close, #closeTwoModal {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }

        #myTable {
            table-layout: auto;
            min-width: 1250px; /* Ajuste selon le besoin */
        }
    </style>
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeFicheRechercher.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css\">

    </head>
    <div class=\"classs\" style=\"width: 80%; margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
            {% include \"_partials/_adminnav.html.twig\" %}

            <main class=\"col-12 container border border-light bg-white\">

                <h1>Table Historique</h1>

                <div class=\"d-flex align-items-center gap-3\">
                    <form method=\"get\" action=\"{{ path(\x27historique_search\x27) }}\">
                        <label for=\"nom\">Nom de l\x27utilisateur :</label>
                        <input type=\"text\" name=\"nom\" id=\"nom\" placeholder=\"Entrez le nom de l\x27utilisateur\"
                               value=\"{{ app.request.query.get(\x27nom\x27) }}\"/>
                        <label for=\"objet\"> Objet :</label>
                        <select id=\"objet\" name=\"objet\">
                            <option value=\"all\" selected=\"selected\">Tous les objets</option>
                            <option value=\"ficheID\"
                                    {% if \"ficheID\" == app.request.query.get(\x27objet\x27) %}selected{% endif %}>Fiche
                            </option>
                            <option value=\"indexID\"
                                    {% if \"indexID\" == app.request.query.get(\x27objet\x27) %}selected{% endif %}>Index
                            </option>
                            <option value=\"livreID\"
                                    {% if \"livreID\" == app.request.query.get(\x27objet\x27) %}selected{% endif %}>Livre
                            </option>
                            <option value=\"mot_cleID\"
                                    {% if \"mot_cleID\" == app.request.query.get(\x27objet\x27) %}selected{% endif %}>Mot clé
                            </option>
                            <option value=\"statutID\"
                                    {% if \"statutID\" == app.request.query.get(\x27objet\x27) %}selected{% endif %}>Statut
                            </option>
                        </select>
                        <label for=\"id\">n° </label>
                        <input type=\"number\" id=\"id\" name=\"id\" min=\"1\" value=\"{{ app.request.query.get(\x27id\x27) }}\">
                        <button class=\"btn\" style=\"border: 1px solid black;    padding: 5px;\" type=\"submit\">Rechercher
                        </button>
                        <a href=\"{{ path(\x27historique_app_historique_index\x27) }}\" class=\"btn\"
                           style=\"border: 1px solid black;    padding: 5px;\">Réinitialiser</a>
                    </form>

                    <form method=\"post\" action=\"{{ path(\x27vider_historique\x27) }}\"
                          onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir vider l\\\x27historique ?\x27);\">
                        <button class=\"btn btn-danger\" style=\"border: 1px solid black;    padding: 5px;\">Vider
                            l\x27historique
                        </button>
                    </form>
                </div>


                <table class=\"table w-100\" id=\"myTable\">
                    <thead>
                    <tr style=\"background-color: rgba(0, 0, 0, 0.4); \">
                        <th>Type d\x27action</th>
                        <th>Utilisateur</th>
                        <th>Objet</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for historique in historiques %}
                        <tr>
                            <td>{{ historique.typeModif }}</td>
                            <td>{{ historique.user }}</td>
                            {% set id =
                                historique.ficheID is not null ? \"Fiche n°\" ~ historique.ficheID:
                                (historique.livreID is not null ? \"Livre n°\" ~ historique.livreID :
                                (historique.indexID is not null ? \"Index n°\" ~ historique.indexID :
                                (historique.mot_cleID is not null ? \"Mot clé n°\" ~ historique.mot_cleID :
                                (historique.statutID is not null ? \"Statut n°\" ~ historique.statutID : null)))) %}
                            <td>{{ id }}</td>
                            <td>{{ historique.getCreateDate()|date(\x27Y-m-d\x27) }}</td>
                            <td>{{ historique.getHeure()|date(\x27H:i:s\x27) }} </td>
                            <td>
                                <div class=\"d-flex gap-2\">
                                    {% if historique.typeModif == \"Modification\" %}
                                        <button class=\"btn-primary btn-sm me-2 tooltip-link open-two-modal\" data-tooltip=\"Afficher la modification\"
                                                style=\"border: 1px solid black;\"
                                                data-object=\x27{{ {old: historique.getOldData(), new: historique.data} | json_encode }}\x27>
                                            <i class=\"fas fa-eye me-1\"></i>
                                        </button>
                                    {% else %}
                                        <button class=\"btn-primary btn-sm me-2 tooltip-link open-modal\" data-tooltip=\"Afficher la modification\"
                                                data-object=\x27{{ historique.data | json_encode }}\x27><i
                                                    class=\"fas fa-eye me-1\"></i>
                                        </button>
                                    {% endif %}
                                    <form method=\"post\"
                                          action=\"{{ path(\x27historique_app_historique_delete\x27, {\x27id\x27: historique.idHistorique}) }}\"
                                          onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer cet élément ?\x27);\">
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token(\x27delete\x27 ~ historique.idHistorique) }}\">
                                        <button class=\"btn btn-outline-danger btn-sm delete-link tooltip-link\" data-tooltip=\"Supprimer la ligne\"
                                                style=\"border: 1px solid red; text-align: center\"><i
                                                    class=\"fas fa-trash me-1\"></i>
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\">Aucun historique trouvé !</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                <!-- Modal -->
                <div id=\"modal\">
                    <span id=\"close\">&times;</span>
                    <div id=\"modal-body\"></div>
                </div>
                <script>
                    // Récupérer la référence du modal et de son corps
                    const modal = document.getElementById(\"modal\");
                    const modalBody = document.getElementById(\"modal-body\");
                    const closeModal = document.getElementById(\"close\"); // Référence au bouton de fermeture

                    function escapeHTML(text) {
                        return text
                            .replace(/&/g, \"&amp;\")
                            .replace(/</g, \"&lt;\")
                            .replace(/>/g, \"&gt;\")
                            .replace(/\"/g, \"&quot;\")
                            .replace(/\x27/g, \"&#039;\");
                    }

                    document.querySelectorAll(\".open-modal\").forEach(button => {
                        button.addEventListener(\"click\", function () {
                            // Récupération de l\x27objet JSON depuis l\x27attribut data-object
                            const data = JSON.parse(this.getAttribute(\"data-object\"));


                            // Initialisation du contenu
                            let content = \"<h2>Détails de l\x27objet</h2>\";

                            // Parcours des clés de l\x27objet et génération dynamique du contenu
                            for (const [key, value] of Object.entries(data)) {
                                if (value) { // Si la valeur n\x27est pas null
                                    content += `<p><strong>\${escapeHTML(key)}:</strong> \${escapeHTML(value.toString())}</p>`;
                                }
                            }

                            // Injection dans le modal
                            modalBody.innerHTML = content;

                            // Affichage du modal
                            modal.style.display = \"flex\";
                        });
                    })


                    // Fermer le modal
                    closeModal.addEventListener(\"click\", () => {
                        modal.style.display = \"none\";
                    });

                    // Clic en dehors du modal pour le fermer
                    window.addEventListener(\"click\", (e) => {
                        if (e.target === modal) {
                            modal.style.display = \"none\";
                        }
                    });
                </script>

                <div id=\"twoModal\">
                    <span id=\"closeTwoModal\">&times;</span>
                    <div id=\"old-modal-body\"></div>
                    <div id=\"new-modal-body\"></div>
                </div>
                <script>
                    // Récupérer la référence du modal et de son corps
                    const twoModal = document.getElementById(\"twoModal\");
                    const oldModalBody = document.getElementById(\"old-modal-body\");
                    const newModalBody = document.getElementById(\"new-modal-body\");
                    const closeTwoModal = document.getElementById(\"closeTwoModal\"); // Référence au bouton de fermeture

                    function escapeHTML(text) {
                        return text
                            .replace(/&/g, \"&amp;\")
                            .replace(/</g, \"&lt;\")
                            .replace(/>/g, \"&gt;\")
                            .replace(/\"/g, \"&quot;\")
                            .replace(/\x27/g, \"&#039;\");
                    }

                    document.querySelectorAll(\".open-two-modal\").forEach(button => {
                        button.addEventListener(\"click\", function () {
                            // Récupération de l\x27objet JSON depuis l\x27attribut data-object
                            const data = JSON.parse(this.getAttribute(\"data-object\"));

                            const oldData = data.old;
                            const newData = data.new;

                            //Initialisation du contenu - Ancienne version
                            let contentOld = \"<h2>Ancienne version</h2>\";

                            // Parcours des clés de l\x27objet et génération dynamique du contenu
                            for (const [key, value] of Object.entries(oldData)) {
                                if (value) { // Si la valeur n\x27est pas null
                                    contentOld += `<p><strong>\${escapeHTML(key)}:</strong> \${escapeHTML(value.toString())}</p>`;
                                }
                            }

                            // Injection dans le modal
                            oldModalBody.innerHTML = contentOld;


                            // Initialisation du contenu - Nouvelle version
                            let contentNew = \"<h2>Nouvelle version</h2>\";

                            // Parcours des clés de l\x27objet et génération dynamique du contenu
                            for (const [key, value] of Object.entries(newData)) {
                                if (value) { // Si la valeur n\x27est pas null
                                    contentNew += `<p><strong>\${escapeHTML(key)}:</strong> \${escapeHTML(value.toString())}</p>`;
                                }
                            }

                            // Injection dans le modal
                            newModalBody.innerHTML = contentNew;

                            // Affichage du modal
                            twoModal.style.display = \"flex\";
                        });
                    })


                    // Fermer le modal
                    closeTwoModal.addEventListener(\"click\", () => {
                        twoModal.style.display = \"none\";
                    });

                    // Clic en dehors du modal pour le fermer
                    window.addEventListener(\"click\", (e) => {
                        if (e.target === twoModal) {
                            twoModal.style.display = \"none\";
                        }
                    });
                </script>
            </main>
        </div>
    </div>
    <script>
        function confirmClearHistorique(url) {
            if (confirm(\"Êtes-vous sûr de vouloir vider l\x27historique ?\")) {
                window.location.href = url;
            }
            return false;
        }
    </script>
    <script src=\"https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$(\x27#myTable\x27).DataTable({
                \"paging\": true,        // Active la pagination
                \"responsive\": true,
                \"scrollX\": true,
                \"searching\": false,     // Active la recherche
                \"ordering\": false,      // Active le tri des colonnes
                \"info\": true,          // Affiche les informations du tableau
                \"lengthMenu\": [10, 25, 50, 100], // Nombre d\x27éléments par page
                \"language\": {
                    \"lengthMenu\": \"Afficher _MENU_ entrées\",
                    \"zeroRecords\": \"Aucune donnée trouvée\",
                    \"info\": \"Affichage de _START_ à _END_ sur _TOTAL_ entrées\",
                    \"infoEmpty\": \"Aucune entrée disponible\",
                    \"infoFiltered\": \"(filtré sur _MAX_ entrées au total)\",
                    \"search\": \"Rechercher :\",
                    \"paginate\": {
                        \"first\": \"Premier\",
                        \"last\": \"Dernier\",
                        \"next\": \"Suivant\",
                        \"previous\": \"Précédent\"
                    }
                }
            });
        });
    </script>
{% endblock %}
", "historique/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\historique\\index.html.twig");
    }
}
