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

/* header.html.twig */
class __TwigTemplate_16800153ffd087a17dc21769e1e5bc96 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 395
        yield "
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const hamburger = document.getElementById(\"hamburger\");
    const navMenu = document.getElementById(\"nav-menu\");

    hamburger.addEventListener(\"click\", function () {
        navMenu.classList.toggle(\"active\");
    });
});

";
        // line 406
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 406, $this->source); })()), "session", [], "any", false, false, false, 406), "get", ["openLivrePopup"], "method", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 407
            yield "    // Ouvre automatiquement le pop-up de sélection de livre
    setTimeout(function() {
        const livreModal = new bootstrap.Modal(document.getElementById(\x27livreModal\x27));
        livreModal.show();
    }, 800); // Délai pour laisser le fetch des livres se terminer
    ";
            // line 412
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 412, $this->source); })()), "session", [], "any", false, false, false, 412), "remove", ["openLivrePopup"], "method", false, false, false, 412);
        }
        // line 414
        yield "</script>

";
        // line 416
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 416, $this->source); })()), "request", [], "any", false, false, false, 416), "attributes", [], "any", false, false, false, 416), "get", ["_route"], "method", false, false, false, 416), ["app_login"])) {
            // line 417
            yield "<script>
 const isAdmin = ";
            // line 418
            yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield ";
 let canEdit = false; 
  document.addEventListener(\"DOMContentLoaded\", function () {
        // Fetch books from backend
        fetch(\"";
            // line 422
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_get_livre_dropdown");
            yield "\")
            .then(response => response.json())
            .then(data => {
                let select = document.getElementById(\"livreSelect\");
                select.innerHTML = \x27<option value=\"\">Sélectionner un livre</option>\x27;
                // alert(data);
                if (data.length > 0) {
                    //canEdit = true; // User has authorized books
                    data.forEach(livre => {
                    let option = document.createElement(\"option\");
                    option.value = livre.id;
                    option.textContent = livre.nom; // Ensure \x27nom\x27 is the correct field
                    select.appendChild(option);
                });
                }
                
            })
            .catch(error => console.error(\"Erreur de chargement des livres:\", error));
  

function toggleButtonVisibility() {
    let buttons = document.querySelectorAll(\"#canEditUser\"); // Select all elements with the class
    console.log(buttons)
    buttons.forEach(button => {
        if (isAdmin) {
            button.style.display = \"block\";
        } else{
            button.style.display = canEdit ? \"block\" : \"none\";
        }
    });
}


// Handle form submission
document.getElementById(\"livreFormSelect\").addEventListener(\"submit\", function (event) {
    event.preventDefault();

    let livreSelect = document.getElementById(\"livreSelect\");
    let livreId = livreSelect.value;
    let livreNom = livreSelect.selectedOptions[0]?.textContent; // Added optional chaining for safety

    if (!livreId) {
        alert(\"Veuillez sélectionner un livre !\");
        return;
    }

    let submitButton = document.getElementById(\"submitButton\");
    let buttonText = document.getElementById(\"buttonText\");
    let loadingSpinner = document.getElementById(\"loadingSpinner\");

    submitButton.disabled = true;
    buttonText.textContent = \"Validation en cours...\";
    loadingSpinner.classList.remove(\"d-none\");

    fetch(this.action, {
        method: this.method,
        body: JSON.stringify({ \"livreId\": livreId, \"livreNom\": livreNom }),
        headers: {
            \"Content-Type\": \"application/json\"
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = \"";
            // line 486
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\";
        } else {
            alert(\"Erreur: \" + data.message);
        }
    })
    .catch(error => console.error(\"Erreur:\", error))
    .finally(() => {
        // Re-enable the button and hide the loading spinner
        submitButton.disabled = false;
        buttonText.textContent = \"Valider\";
        loadingSpinner.classList.add(\"d-none\");
    });
});
  });
</script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "\t\t<div class=\"modal fade\" id=\"livreModal\" tabindex=\"-1\" aria-labelledby=\"livreModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"livreModalLabel\">Sélectionner un Livre</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form id=\"livreFormSelect\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_set_livre_session");
        yield "\" method=\"POST\">
\t\t\t\t\t\t\t<label for=\"livre\">Veuillez choisir un livre</label>
\t\t\t\t\t\t\t<select id=\"livreSelect\" name=\"livre\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"\">Chargement...</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-3\" id=\"submitButton\">
\t\t\t\t\t\t\t\t<span id=\"buttonText\">Valider</span>
\t\t\t\t\t\t\t\t<span id=\"loadingSpinner\" class=\"spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

        <nav class=\"navbar\">
            <div class=\"nav-left\">
                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-logo\">
                    <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo-ista.png"), "html", null, true);
        yield "\" alt=\"ISTA Logo\" class=\"logo-image\">
                </a>

                ";
        // line 31
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                    <span class=\"livre-badge\">
                        ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "get", ["livreName"], "method", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                            Vous travaillez sur le livre : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "get", ["livreName"], "method", false, false, false, 34), "html", null, true);
                yield "
                        ";
            } else {
                // line 36
                yield "                            Aucun livre n\x27est sélectionné
                        ";
            }
            // line 38
            yield "                    </span>
                ";
        }
        // line 40
        yield "            </div>

            <div class=\"nav-container\">
            
                <div class=\"hamburger\" id=\"hamburger\" style=\"font-size:3em;\">
                    ";
        // line 48
        yield "                    <i class=\"fa-solid fa-bars\"></i>
                </div>

                <ul class=\"nav-menu\" id=\"nav-menu\">
                    ";
        // line 52
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 53
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                            ";
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) || (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 54, $this->source); })()))) {
                    // line 55
                    yield "                                <li id=\"canEditUser\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#livreModal\">Livre</a></li>
                            ";
                }
                // line 57
                yield "                            <li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
                yield "\" class=\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57), ["fiche_recherche", "deuxieme_fiche_recherche", "fiche_recherche_resultat"])) {
                    yield "active";
                }
                yield "\">Rechercher une fiche</a></li>
                            <li><a href=\"";
                // line 58
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_index");
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58) == "savreq_app_sav_requete_index")) {
                    yield "active";
                }
                yield "\">Requêtes enregistrées</a></li>
                            <li><a href=\"";
                // line 59
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_recherche");
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59) == "savreq_app_recherche")) {
                    yield "active";
                }
                yield "\">Recherche multicritères</a></li>
                            ";
                // line 60
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 60, $this->source); })()))) {
                    // line 61
                    yield "                                <li id=\"canEditUser\"><a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_fiche");
                    yield "\" class=\"";
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61), ["add_fiche", "deuxieme_formulaire_route"])) {
                        yield "active";
                    }
                    yield "\">Ajouter une Fiche</a></li>
                            ";
                }
                // line 63
                yield "                            ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "                                <li><a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                    yield "\" class=\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "admin_index")) {
                        yield "active";
                    }
                    yield "\">ADMINISTRATION</a></li>
                            ";
                }
                // line 66
                yield "                            <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "getId", [], "method", false, false, false, 66)]), "html", null, true);
                yield "\" 
                            class=\"";
                // line 67
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67) == "app_admin_app_users_show")) {
                    yield "active";
                }
                yield "\">
                                <i class=\"fas fa-user\"></i> ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "getUsername", [], "method", false, false, false, 68), "html", null, true);
                yield "</a></li>
                            <li>
                                <a href=\"";
                // line 70
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\" >
                                    <i class=\"fas fa-sign-out-alt\"></i> Me déconnecter
                                </a>
                            </li>

                        ";
            } else {
                // line 76
                yield "                            <li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\">Connexion</a></li>
                            <li><a href=\"";
                // line 77
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                yield "\">Inscription</a></li>
                            <li><a href=\"";
                // line 78
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
                yield "\" class=\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "attributes", [], "any", false, false, false, 78), "get", ["_route"], "method", false, false, false, 78), ["fiche_recherche", "deuxieme_fiche_recherche"])) {
                    yield "active";
                }
                yield "\">Rechercher une fiche</a></li>
                            <li><a href=\"";
                // line 79
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_index");
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "request", [], "any", false, false, false, 79), "attributes", [], "any", false, false, false, 79), "get", ["_route"], "method", false, false, false, 79) == "savreq_app_sav_requete_index")) {
                    yield "active";
                }
                yield "\">Recherche multicritères</a></li>
                        ";
            }
            // line 81
            yield "                    ";
        } else {
            // line 82
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82), ["app_login"])) {
                yield "active";
            }
            yield "\">Connexion</a></li>
                        <li><a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", ["_route"], "method", false, false, false, 83), ["app_register"])) {
                yield "active";
            }
            yield "\">Inscription</a></li>
                        ";
            // line 85
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
            yield "\" class=\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85), ["fiche_recherche", "deuxieme_fiche_recherche"])) {
                yield "active";
            }
            yield "\">Rechercher une fiche</a></li>
                        <li><a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur_multi_requetes");
            yield "\">Recherche multicritères</a></li>
                    ";
        }
        // line 88
        yield "                </ul>
            </div>
        </nav>


\t\t";
        // line 234
        yield "
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-left {
    display: flex;
    align-items: center;
}

";
        // line 264
        yield "
.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-logo {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    display: inline-block;
    margin-left: 20px;
}

.logo-image {
    height: 50px;
    width: auto;
    display: block;
}

.nav-menu {
    list-style: none;
    display: flex;
}

.nav-menu li {
    margin-left: 20px;
}

.nav-menu a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    padding: 10px;
    transition: 0.3s;
}
.nav-menu li a.active {
    background-color: #3667f8 !important;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
.nav-menu a:hover {
    background-color: #555;
    border-radius: 5px;
    color:white;
}

/* Hamburger menu styles */
.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.bar {
    width: 25px;
    height: 3px;
    background-color: white;
    margin: 5px 0;
}

/* Responsive Design */
@media screen and (max-width: 1594px) {
    .hamburger {
        display: flex;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-menu li {
        margin: 10px 0;
    }
}
@media screen and (max-width: 768px) {
    .hamburger {
        display: flex;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-menu li {
        margin: 10px 0;
    }
}

.livre-badge {
    margin-left: 20px;
    background-color: #3667f8;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: 500;
    color: white;
}

</style>

<script src=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

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
        return "header.html.twig";
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
        return array (  587 => 392,  457 => 264,  428 => 234,  421 => 88,  416 => 86,  407 => 85,  399 => 83,  390 => 82,  387 => 81,  378 => 79,  370 => 78,  366 => 77,  361 => 76,  352 => 70,  347 => 68,  341 => 67,  336 => 66,  326 => 64,  323 => 63,  313 => 61,  311 => 60,  303 => 59,  295 => 58,  286 => 57,  282 => 55,  279 => 54,  276 => 53,  274 => 52,  268 => 48,  261 => 40,  257 => 38,  253 => 36,  247 => 34,  245 => 33,  242 => 32,  240 => 31,  234 => 28,  230 => 27,  210 => 10,  200 => 2,  187 => 1,  159 => 486,  92 => 422,  85 => 418,  82 => 417,  80 => 416,  76 => 414,  73 => 412,  66 => 407,  64 => 406,  51 => 395,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
\t\t<div class=\"modal fade\" id=\"livreModal\" tabindex=\"-1\" aria-labelledby=\"livreModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"livreModalLabel\">Sélectionner un Livre</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form id=\"livreFormSelect\" action=\"{{ path(\x27app_livre_app_livre_set_livre_session\x27) }}\" method=\"POST\">
\t\t\t\t\t\t\t<label for=\"livre\">Veuillez choisir un livre</label>
\t\t\t\t\t\t\t<select id=\"livreSelect\" name=\"livre\" class=\"form-select\">
\t\t\t\t\t\t\t\t<option value=\"\">Chargement...</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-3\" id=\"submitButton\">
\t\t\t\t\t\t\t\t<span id=\"buttonText\">Valider</span>
\t\t\t\t\t\t\t\t<span id=\"loadingSpinner\" class=\"spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

        <nav class=\"navbar\">
            <div class=\"nav-left\">
                <a href=\"{{ path(\x27app_home\x27) }}\" class=\"nav-logo\">
                    <img src=\"{{ asset(\x27images/Logo-ista.png\x27) }}\" alt=\"ISTA Logo\" class=\"logo-image\">
                </a>

                {% if app.user %}
                    <span class=\"livre-badge\">
                        {% if app.session.get(\x27livreName\x27) %}
                            Vous travaillez sur le livre : {{ app.session.get(\x27livreName\x27) }}
                        {% else %}
                            Aucun livre n\x27est sélectionné
                        {% endif %}
                    </span>
                {% endif %}
            </div>

            <div class=\"nav-container\">
            
                <div class=\"hamburger\" id=\"hamburger\" style=\"font-size:3em;\">
                    {# <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div> #}
                    <i class=\"fa-solid fa-bars\"></i>
                </div>

                <ul class=\"nav-menu\" id=\"nav-menu\">
                    {% if is_granted(\x27ROLE_ADMIN\x27) or is_granted(\x27ROLE_USER\x27) %}
                        {% if app.user %}
                            {% if is_granted(\x27ROLE_ADMIN\x27) or is_granted(\x27ROLE_USER\x27) or canEdit %}
                                <li id=\"canEditUser\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#livreModal\">Livre</a></li>
                            {% endif %}
                            <li><a href=\"{{ path(\x27fiche_recherche\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) in [\x27fiche_recherche\x27, \x27deuxieme_fiche_recherche\x27, \x27fiche_recherche_resultat\x27] %}active{% endif %}\">Rechercher une fiche</a></li>
                            <li><a href=\"{{ path(\x27savreq_app_sav_requete_index\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) == \x27savreq_app_sav_requete_index\x27 %}active{% endif %}\">Requêtes enregistrées</a></li>
                            <li><a href=\"{{ path(\x27savreq_app_recherche\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) == \x27savreq_app_recherche\x27 %}active{% endif %}\">Recherche multicritères</a></li>
                            {% if is_granted(\x27ROLE_ADMIN\x27) or canEdit %}
                                <li id=\"canEditUser\"><a href=\"{{ path(\x27add_fiche\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) in [\x27add_fiche\x27, \x27deuxieme_formulaire_route\x27] %}active{% endif %}\">Ajouter une Fiche</a></li>
                            {% endif %}
                            {% if is_granted(\x27ROLE_ADMIN\x27) %}
                                <li><a href=\"{{ path(\x27admin_index\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) == \x27admin_index\x27 %}active{% endif %}\">ADMINISTRATION</a></li>
                            {% endif %}
                            <li><a href=\"{{ path(\x27app_admin_app_users_show\x27, {id: app.user.getId()}) }}\" 
                            class=\"{% if app.request.attributes.get(\x27_route\x27) == \x27app_admin_app_users_show\x27 %}active{% endif %}\">
                                <i class=\"fas fa-user\"></i> {{ app.user.getUsername() }}</a></li>
                            <li>
                                <a href=\"{{ path(\x27app_logout\x27) }}\" >
                                    <i class=\"fas fa-sign-out-alt\"></i> Me déconnecter
                                </a>
                            </li>

                        {% else %}
                            <li><a href=\"{{ path(\x27app_login\x27) }}\">Connexion</a></li>
                            <li><a href=\"{{ path(\x27app_register\x27) }}\">Inscription</a></li>
                            <li><a href=\"{{ path(\x27fiche_recherche\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) in [\x27fiche_recherche\x27, \x27deuxieme_fiche_recherche\x27] %}active{% endif %}\">Rechercher une fiche</a></li>
                            <li><a href=\"{{ path(\x27savreq_app_sav_requete_index\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) == \x27savreq_app_sav_requete_index\x27 %}active{% endif %}\">Recherche multicritères</a></li>
                        {% endif %}
                    {% else %}
                        <li><a href=\"{{ path(\x27app_login\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) in [\x27app_login\x27] %}active{% endif %}\">Connexion</a></li>
                        <li><a href=\"{{ path(\x27app_register\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) in [\x27app_register\x27] %}active{% endif %}\">Inscription</a></li>
                        {# <li><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#livreModal\">Livre</a></li> #}
                        <li><a href=\"{{ path(\x27fiche_recherche\x27) }}\" class=\"{% if app.request.attributes.get(\x27_route\x27) in [\x27fiche_recherche\x27, \x27deuxieme_fiche_recherche\x27] %}active{% endif %}\">Rechercher une fiche</a></li>
                        <li><a href=\"{{ path(\x27visiteur_multi_requetes\x27) }}\">Recherche multicritères</a></li>
                    {% endif %}
                </ul>
            </div>
        </nav>


\t\t{# <nav class=\"cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100\" style=\"flex-direction:column;\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-uppercase fw-bolder mx-4 py-3\" href=\"{{ path(\x27app_home\x27) }}\">ISTA</a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                        {% if is_granted(\x27ROLE_ADMIN\x27) or is_granted(\x27ROLE_USER\x27) %}
                            {% if app.user %}
                                {% if is_granted(\x27ROLE_ADMIN\x27) %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{ path(\x27admin_index\x27)}}\">ADMINISTRATION</a>
                                    </li>
                                {% endif %}

                                <li class=\"nav-item\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text bg-transparent border-0\">
                                            <i class=\"fas fa-user\"></i>
                                        </span>
                                        <a class=\"nav-link\" href=\"{{ path(\x27app_admin_app_users_show\x27, {id: app.user.getId()})}}\">
                                            {{ app.user.getUsername() }}
                                        </a>
                                    </div>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path(\x27app_logout\x27) }}\">Me déconnecter</a>
                                </li>

                                <li class=\"nav-item pe-1\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#livreModal\">
                                        Livre
                                    </a>
                                </li>

                                <li class=\"nav-item pe-1\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27fiche_recherche\x27) }}\">
                                        Rechercher une fiche
                                    </a>
                                </li>

                                <li class=\"nav-item pe-1\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27savreq_app_sav_requete_index\x27) }}\">
                                        Requêtes enregistrées
                                    </a>
                                </li>

                                <li class=\"nav-item pe-1\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27savreq_app_recherche\x27) }}\">
                                        Recherche multicritères
                                    </a>
                                </li>
                            {% if is_granted(\x27ROLE_ADMIN\x27) %}
                                <li class=\"nav-item\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27add_fiche\x27) }}\">
                                        Ajouter une Fiche
                                    </a>
                                </li>
                                {% endif %}
                            {% else %}
                                <li class=\"nav-item pe-4\">
                                    <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\x27app_home\x27) }}\">Accueil</a>
                                </li>
                                <li class=\"nav-item pe-4\">
                                    <a class=\"nav-link\" href=\"{{ path(\x27app_login\x27)}}\">Connexion</a>
                                </li>
                                <li class=\"nav-item pe-4\">
                                    <a class=\"nav-link\" href=\"{{ path(\x27app_register\x27) }}\">Inscription</a>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27fiche_recherche\x27) }}\">
                                        Rechercher une fiche
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27savreq_app_sav_requete_index\x27) }}\">
                                        Recherche multicritères
                                    </a>
                                </li>
                            {% endif %}
                        {% else %}
                            <li class=\"nav-item pe-4\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\x27app_home\x27) }}\">Accueil</a>
                            </li>
                            <li class=\"nav-item pe-4\">
                                <a class=\"nav-link\" href=\"{{ path(\x27app_login\x27)}}\">Connexion</a>
                            </li>
                            <li class=\"nav-item pe-4\">
                                <a class=\"nav-link\" href=\"{{ path(\x27app_register\x27) }}\">Inscription</a>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"btn btn-order w-100 text-center\" data-bs-toggle=\"modal\" data-bs-target=\"#livreModal\">
                                    Livre
                                </button>
                            </li>

                            <li class=\"nav-item pe-1\">
                                <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27fiche_recherche\x27) }}\">
                                    Rechercher une fiche
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27visiteur_multi_requetes\x27) }}\">
                                    Recherche multicritères
                                </a>
                            </li>
                        {% endif %}
                    </ul>
\t\t\t\t</div>
\t\t\t</div>
\t</body>
    
\t{% if app.user %}
        <div class=\"row\">

        <p class=\"ps-4 mt-3\" style=\"float:left;\">
            {% if app.session.get(\x27livreName\x27) %}
                <span class=\"navbar-text\">
                    <span class=\"bg-white text-dark p-2 rounded\">
                        Livre actuel:
                        {{ app.session.get(\x27livreName\x27) }}
                    </span>
                </span>
            {% else %}
                <span class=\"navbar-text\">
                    <span class=\"bg-white text-dark p-2 rounded\">
                        Aucun livre sélectionné
                    </span>
                </span>
\t\t{% endif %}
\t</p>
\t</div>
\t{% endif %}
</nav> #}

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-left {
    display: flex;
    align-items: center;
}

{# #canEditUser{
    display:none;
} #}

.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-logo {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    display: inline-block;
    margin-left: 20px;
}

.logo-image {
    height: 50px;
    width: auto;
    display: block;
}

.nav-menu {
    list-style: none;
    display: flex;
}

.nav-menu li {
    margin-left: 20px;
}

.nav-menu a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    padding: 10px;
    transition: 0.3s;
}
.nav-menu li a.active {
    background-color: #3667f8 !important;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
.nav-menu a:hover {
    background-color: #555;
    border-radius: 5px;
    color:white;
}

/* Hamburger menu styles */
.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.bar {
    width: 25px;
    height: 3px;
    background-color: white;
    margin: 5px 0;
}

/* Responsive Design */
@media screen and (max-width: 1594px) {
    .hamburger {
        display: flex;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-menu li {
        margin: 10px 0;
    }
}
@media screen and (max-width: 768px) {
    .hamburger {
        display: flex;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-menu li {
        margin: 10px 0;
    }
}

.livre-badge {
    margin-left: 20px;
    background-color: #3667f8;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: 500;
    color: white;
}

</style>

<script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>

{% endblock %}

<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const hamburger = document.getElementById(\"hamburger\");
    const navMenu = document.getElementById(\"nav-menu\");

    hamburger.addEventListener(\"click\", function () {
        navMenu.classList.toggle(\"active\");
    });
});

{% if app.session.get(\x27openLivrePopup\x27) %}
    // Ouvre automatiquement le pop-up de sélection de livre
    setTimeout(function() {
        const livreModal = new bootstrap.Modal(document.getElementById(\x27livreModal\x27));
        livreModal.show();
    }, 800); // Délai pour laisser le fetch des livres se terminer
    {% do app.session.remove(\x27openLivrePopup\x27) %}
{% endif %}
</script>

{% if app.request.attributes.get(\x27_route\x27) not in [\x27app_login\x27]%}
<script>
 const isAdmin = {{ is_granted(\x27ROLE_ADMIN\x27) ? \x27true\x27 : \x27false\x27 }};
 let canEdit = false; 
  document.addEventListener(\"DOMContentLoaded\", function () {
        // Fetch books from backend
        fetch(\"{{ path(\x27app_livre_app_livre_get_livre_dropdown\x27) }}\")
            .then(response => response.json())
            .then(data => {
                let select = document.getElementById(\"livreSelect\");
                select.innerHTML = \x27<option value=\"\">Sélectionner un livre</option>\x27;
                // alert(data);
                if (data.length > 0) {
                    //canEdit = true; // User has authorized books
                    data.forEach(livre => {
                    let option = document.createElement(\"option\");
                    option.value = livre.id;
                    option.textContent = livre.nom; // Ensure \x27nom\x27 is the correct field
                    select.appendChild(option);
                });
                }
                
            })
            .catch(error => console.error(\"Erreur de chargement des livres:\", error));
  

function toggleButtonVisibility() {
    let buttons = document.querySelectorAll(\"#canEditUser\"); // Select all elements with the class
    console.log(buttons)
    buttons.forEach(button => {
        if (isAdmin) {
            button.style.display = \"block\";
        } else{
            button.style.display = canEdit ? \"block\" : \"none\";
        }
    });
}


// Handle form submission
document.getElementById(\"livreFormSelect\").addEventListener(\"submit\", function (event) {
    event.preventDefault();

    let livreSelect = document.getElementById(\"livreSelect\");
    let livreId = livreSelect.value;
    let livreNom = livreSelect.selectedOptions[0]?.textContent; // Added optional chaining for safety

    if (!livreId) {
        alert(\"Veuillez sélectionner un livre !\");
        return;
    }

    let submitButton = document.getElementById(\"submitButton\");
    let buttonText = document.getElementById(\"buttonText\");
    let loadingSpinner = document.getElementById(\"loadingSpinner\");

    submitButton.disabled = true;
    buttonText.textContent = \"Validation en cours...\";
    loadingSpinner.classList.remove(\"d-none\");

    fetch(this.action, {
        method: this.method,
        body: JSON.stringify({ \"livreId\": livreId, \"livreNom\": livreNom }),
        headers: {
            \"Content-Type\": \"application/json\"
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = \"{{ path(\"app_home\") }}\";
        } else {
            alert(\"Erreur: \" + data.message);
        }
    })
    .catch(error => console.error(\"Erreur:\", error))
    .finally(() => {
        // Re-enable the button and hide the loading spinner
        submitButton.disabled = false;
        buttonText.textContent = \"Valider\";
        loadingSpinner.classList.add(\"d-none\");
    });
});
  });
</script>
{% endif %}", "header.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\header.html.twig");
    }
}
