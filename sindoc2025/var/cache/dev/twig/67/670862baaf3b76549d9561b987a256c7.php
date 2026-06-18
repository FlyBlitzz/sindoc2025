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
        // line 358
        yield "
<script>
document.addEventListener(\"DOMContentLoaded\", function () {
    const hamburger = document.getElementById(\"hamburger\");
    const navMenu = document.getElementById(\"nav-menu\");

    hamburger.addEventListener(\"click\", function () {
        navMenu.classList.toggle(\"active\");
    });
});
</script>
";
        // line 369
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 369, $this->source); })()), "request", [], "any", false, false, false, 369), "attributes", [], "any", false, false, false, 369), "get", ["_route"], "method", false, false, false, 369), ["app_login"])) {
            // line 370
            yield "<script>
 const isAdmin = ";
            // line 371
            yield (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield ";
 let canEdit = false; 
  document.addEventListener(\"DOMContentLoaded\", function () {
        // Fetch books from backend
        fetch(\"";
            // line 375
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
            alert(\"Livre sélectionné avec succès !\");
            window.location.href = \"";
            // line 446
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
        yield "

\t
\t\t<div class=\"modal fade\" id=\"livreModal\" tabindex=\"-1\" aria-labelledby=\"livreModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"livreModalLabel\">Sélectionner un Livre</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<form id=\"livreFormSelect\" action=\"";
        // line 13
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
         <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-logo\">
            <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo-ista.png"), "html", null, true);
        yield "\" style=\"width:40%; margin-left: 60px; \" alt=\"ISTA Logo\" class=\"logo-image \">
        </a>
    <div class=\"nav-container\">
       
        
        <div class=\"hamburger\" id=\"hamburger\" style=\"font-size:3em;\">
            ";
        // line 38
        yield "            <i class=\"fa-solid fa-bars\"></i>
        </div>

        <ul class=\"nav-menu\" id=\"nav-menu\">
            ";
        // line 42
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 43
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "                    ";
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) || (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 44, $this->source); })()))) {
                    // line 45
                    yield "                        <li id=\"canEditUser\"><a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#livreModal\">Livre</a></li>
                    ";
                }
                // line 47
                yield "                    <li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
                yield "\" class=\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47), ["fiche_recherche", "deuxieme_fiche_recherche", "fiche_recherche_resultat"])) {
                    yield "active";
                }
                yield "\">Rechercher une fiche</a></li>
                    <li><a href=\"";
                // line 48
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_index");
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "attributes", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48) == "savreq_app_sav_requete_index")) {
                    yield "active";
                }
                yield "\">Requêtes enregistrées</a></li>
                    <li><a href=\"";
                // line 49
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_recherche");
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) == "savreq_app_recherche")) {
                    yield "active";
                }
                yield "\">Recherche multicritères</a></li>
                    ";
                // line 50
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 50, $this->source); })()))) {
                    // line 51
                    yield "                        <li id=\"canEditUser\"><a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_fiche");
                    yield "\" class=\"";
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", ["_route"], "method", false, false, false, 51), ["add_fiche", "deuxieme_formulaire_route"])) {
                        yield "active";
                    }
                    yield "\">Ajouter une Fiche</a></li>
                    ";
                }
                // line 53
                yield "                    ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "                        <li><a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                    yield "\" class=\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54) == "admin_index")) {
                        yield "active";
                    }
                    yield "\">ADMINISTRATION</a></li>
                    ";
                }
                // line 56
                yield "                    <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "getId", [], "method", false, false, false, 56)]), "html", null, true);
                yield "\" 
                    class=\"";
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57) == "app_admin_app_users_show")) {
                    yield "active";
                }
                yield "\">
                        <i class=\"fas fa-user\"></i> ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "getUsername", [], "method", false, false, false, 58), "html", null, true);
                yield "</a></li>
                    <li>
    <a href=\"";
                // line 60
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                yield "\" >
        <i class=\"fas fa-sign-out-alt\"></i> Me déconnecter
    </a>
</li>


                ";
            } else {
                // line 67
                yield "                    <li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\">Connexion</a></li>
                    <li><a href=\"";
                // line 68
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
                yield "\">Inscription</a></li>
                    <li><a href=\"";
                // line 69
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
                yield "\" class=\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "attributes", [], "any", false, false, false, 69), "get", ["_route"], "method", false, false, false, 69), ["fiche_recherche", "deuxieme_fiche_recherche"])) {
                    yield "active";
                }
                yield "\">Rechercher une fiche</a></li>
                    <li><a href=\"";
                // line 70
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_index");
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70) == "savreq_app_sav_requete_index")) {
                    yield "active";
                }
                yield "\">Recherche multicritères</a></li>
                ";
            }
            // line 72
            yield "            ";
        } else {
            // line 73
            yield "                <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73), ["app_login"])) {
                yield "active";
            }
            yield "\">Connexion</a></li>
                <li><a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "attributes", [], "any", false, false, false, 74), "get", ["_route"], "method", false, false, false, 74), ["app_register"])) {
                yield "active";
            }
            yield "\">Inscription</a></li>
                ";
            // line 76
            yield "                <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_recherche");
            yield "\" class=\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", ["_route"], "method", false, false, false, 76), ["fiche_recherche", "deuxieme_fiche_recherche"])) {
                yield "active";
            }
            yield "\">Rechercher une fiche</a></li>
                <li><a href=\"";
            // line 77
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur_multi_requetes");
            yield "\">Recherche multicritères</a></li>
            ";
        }
        // line 79
        yield "        </ul>
    </div>
</nav>
\t\t";
        // line 223
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
    padding: 15px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
}
";
        // line 245
        yield ".nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-logo {
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
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


</style>

<script src=\"";
        // line 355
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
        return array (  530 => 355,  418 => 245,  397 => 223,  392 => 79,  387 => 77,  378 => 76,  370 => 74,  361 => 73,  358 => 72,  349 => 70,  341 => 69,  337 => 68,  332 => 67,  322 => 60,  317 => 58,  311 => 57,  306 => 56,  296 => 54,  293 => 53,  283 => 51,  281 => 50,  273 => 49,  265 => 48,  256 => 47,  252 => 45,  249 => 44,  246 => 43,  244 => 42,  238 => 38,  229 => 29,  225 => 28,  207 => 13,  194 => 2,  181 => 1,  150 => 446,  76 => 375,  69 => 371,  66 => 370,  64 => 369,  51 => 358,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}


\t
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
         <a href=\"{{ path(\x27app_home\x27) }}\" class=\"nav-logo\">
            <img src=\"{{ asset(\x27images/Logo-ista.png\x27) }}\" style=\"width:40%; margin-left: 60px; \" alt=\"ISTA Logo\" class=\"logo-image \">
        </a>
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
\t\t{% if is_granted(\x27ROLE_ADMIN\x27) %}
            <li class=\"nav-item\">
                <a class=\"btn btn-order w-100 text-center\" href=\"{{ path(\x27add_fiche\x27) }}\">
                    Ajouter une Fiche
                </a>
            </li>
\t\t\t{% endif %}
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
\t<div class=\"row\">

\t<p class=\"ps-4 mt-3\" style=\"float:left;\">
\t\t{% if app.session.get(\x27livreName\x27) %}
\t\t\t<span class=\"navbar-text\">
\t\t\t\t<span class=\"bg-white text-dark p-2 rounded\">
\t\t\t\t\tLivre actuel:
\t\t\t\t\t{{ app.session.get(\x27livreName\x27) }}
\t\t\t\t</span>
\t\t\t</span>
\t\t{% else %}
\t\t\t<span class=\"navbar-text\">
\t\t\t\t<span class=\"bg-white text-dark p-2 rounded\">
\t\t\t\t\tAucun livre sélectionné
\t\t\t\t</span>
\t\t\t</span>
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
    padding: 15px 20px;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
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
            alert(\"Livre sélectionné avec succès !\");
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



{% endif %}
", "header.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\header.html.twig");
    }
}
