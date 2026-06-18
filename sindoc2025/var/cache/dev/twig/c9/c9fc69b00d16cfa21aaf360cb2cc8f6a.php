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

/* profileuser/show.html.twig */
class __TwigTemplate_0a01f58e0ef28a0d1819a35d7ce6988a extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profileuser/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profileuser/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
<style>
    .button-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 colonnes */
        gap: 10px; /* Espacement entre les boutons */
        max-width: 400px; /* Largeur maximale du conteneur */
        margin: 0 auto; /* Centrer le conteneur horizontalement */
    }

    .my-button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
        text-decoration: none;
        color: black;
    }

    .my-button:hover {
        background-color: #ddd; /* Changement de couleur au survol */
    }
</style>

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/showUser.css"), "html", null, true);
        yield "\">
</head>

<section style=\"margin-bottom: 150px;\" >
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\" style=\"background-color: rgba(0, 0, 0, 0.55); color: white;\">
                        <h3 class=\"mb-0\">Votre profil</h3>
                    </div>
                    <div class=\"card-body\">
                        <hr>
                        <h6>Informations personnelles</h6>
                        <hr>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <h6>Nom utilisateur:</h6>
                                <h5>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "username", [], "any", false, false, false, 58), "html", null, true);
        yield "</h5>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Rôle:</h6>
                                <p>
                                    ";
        // line 63
        if ((CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63)) && CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63)))) {
            // line 64
            yield "                                        Utilisateur / Administrateur
                                    ";
        } elseif (CoreExtension::inFilter("ROLE_USER", CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "roles", [], "any", false, false, false, 65))) {
            // line 66
            yield "                                        Utilisateur
                                    ";
        } elseif (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "roles", [], "any", false, false, false, 67))) {
            // line 68
            yield "                                        Administrateur
                                    ";
        }
        // line 70
        yield "                                </p>
                            </div>
                        </div>
                        <hr>
                        <h6>Gestion du compte</h6>
                        <hr>
                        <div class=\"container\">
                           <div class=\"btn-container\">
                           ";
        // line 79
        yield " 
                               <div class=\"container\">
                               <div class=\"row mx-auto w-75\">
                               ";
        // line 82
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                                <a href=\"#\" class=\"btn btn-delete col btn-danger\" onclick=\"return confirmDesactiverUser(\x27";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactiver_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\x27);\">
                                    Désactiver le compte
                                </a>
                                ";
        }
        // line 87
        yield "                                ";
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                                <a href=\"#\" class=\"btn btn-delete col btn-danger\" onclick=\"return confirmDesactiverUser(\x27";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactiver_simple_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\x27);\">
                                    Désactiver le compte
                                </a>
                                ";
        }
        // line 92
        yield "                               <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_edit_user_password", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "getId", [], "method", false, false, false, 92)]), "html", null, true);
        yield "\" type=\"button\" class=\"btn btn-deactivate col btn-info\">Réinitialiser le mot de passe?</a>
                            </div>
                            </div>
                           </div>
                        </div>
                        <hr>
                        <h6>Activités</h6>
                        <hr>
                        <div class=\"btn-container\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a href=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_auth_fiche_list", ["userId" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 102, $this->source); })())]), "html", null, true);
        yield "\" class=\"my-button\">Consulter mes fiches</a>
                        </div>
                            <ul style=\"display: none;\" class=\"user-details\">
                                <table class=\"table table-hover\" style=\"width: 900px; margin: 0 auto;\">
                                    <tr style=\" background-color: #a9a9a9; \">
                                        <td class=\"table-active\">Numéro fiche</td>
                                        <td class=\"table-active\">Afficher fiche</td>
                                        <td class=\"table-active\">Supprimer fiche</td>
                                        <td class=\"table-active\">Modifier fiche</td>
                                    </tr>

                                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "getFiche", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 114
            yield "                                        <tr>
                                            <td > <strong>Fiche numéro:</strong> ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "any", false, false, false, 115), "html", null, true);
            yield "<br></td>
                                            <td > <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_fiche", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 116)]), "html", null, true);
            yield "\" type=\"button\" class=\"btn btn-secondary  \" style=\" margin-right: 10px; background-color: #a9a9a9;\">Voir</a></td>
                                            <td > <a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_fiche", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 117)]), "html", null, true);
            yield "\" type=\"button\"  class=\"btn btn-secondary  \" style=\"margin-right: 10px;\">Supprimer</a></td>
                                            <td > <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fiche"], "getIdFiche", [], "method", false, false, false, 118)]), "html", null, true);
            yield "\" type=\"button\"  class=\"btn btn-secondary  \" style=\" margin-right: 10px; background-color: #a9a9a9;\">Modifier</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fiche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                                </table>
                            </ul>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_index");
        yield "\" class=\"my-button\"   onclick=\"toggleDetails(this)\">Consulter mes requêtes</a>
                            </div>
                            ";
        // line 126
        if ((($tmp =  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 127
            yield "                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_authorized", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" class=\"my-button\" onclick=\"toggleDetails(this)\">Voir mes index</a>
                            </div>

                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_authorized", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)]), "html", null, true);
            yield "\" class=\"my-button\" onclick=\"toggleDetails(this)\">
                                    Voir mes livres
                                </a>
                            </div>
                            ";
        }
        // line 137
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function confirmDeleteUser(url) {
        if (confirm(\"Êtes-vous sûr de vouloir supprimer votre compte ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>
<script>
    function confirmDesactiverUser(url) {
        if (confirm(\"Êtes-vous sûr de vouloir desactiver votre compte ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>
<script>
    function confirmDeleteFiche(url) {
        if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>

<script>
    function upload() {
        var input = document.getElementById(\x27avatar\x27);
        var preview = document.getElementById(\x27preview\x27);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = \x27block\x27;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    function toggleDetails(button) {
        const userDetails = button.parentElement.nextElementSibling;
        userDetails.style.display = userDetails.style.display === \x27none\x27 ? \x27block\x27 : \x27none\x27;

        if (userDetails.style.display === \x27block\x27) {
            const detailsWindow = window.open(\x27\x27, \x27_self\x27);

            detailsWindow.document.write(\x27<html><head><title>Détails</title>\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">\x27);
            detailsWindow.document.write(\x27</head><body>\x27);
            detailsWindow.document.write(\x27<h1 style=\"text-align: center;margin-bottom: 30px;margin-top: 30px;\">Liste des fiches</h1>\x27);
            detailsWindow.document.write(userDetails.innerHTML);
            detailsWindow.document.write(\x27</body></html>\x27);

            userDetails.style.display = \x27none\x27;

            detailsWindow.addEventListener(\x27popstate\x27, function(event) {
                if (event.state === null) {
                    detailsWindow.close();
                }
            });

            // Mettre un état initial dans l\x27historique
            detailsWindow.history.replaceState({ page: 1 }, \x27Détails\x27, \x27\x27);

            // Gérer les liens internes pour les ajouter à l\x27historique
            const internalLinks = detailsWindow.document.querySelectorAll(\x27a\x27);
            internalLinks.forEach(function(link) {
                link.addEventListener(\x27click\x27, function(e) {
                    e.preventDefault();
                    detailsWindow.history.pushState({ page: 2 }, \x27Détails\x27, link.href);
                    detailsWindow.location.reload();
                });
            });
        }
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
        return "profileuser/show.html.twig";
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
        return array (  372 => 199,  366 => 196,  305 => 137,  297 => 132,  290 => 128,  287 => 127,  285 => 126,  280 => 124,  275 => 121,  266 => 118,  262 => 117,  258 => 116,  254 => 115,  251 => 114,  247 => 113,  233 => 102,  219 => 92,  211 => 88,  208 => 87,  200 => 83,  198 => 82,  193 => 79,  183 => 70,  179 => 68,  177 => 67,  174 => 66,  172 => 65,  169 => 64,  167 => 63,  159 => 58,  138 => 40,  134 => 39,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends \x27base.html.twig\x27 %}

{% block title %}User{% endblock %}

{% block body %}

<style>
    .button-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 colonnes */
        gap: 10px; /* Espacement entre les boutons */
        max-width: 400px; /* Largeur maximale du conteneur */
        margin: 0 auto; /* Centrer le conteneur horizontalement */
    }

    .my-button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
        text-decoration: none;
        color: black;
    }

    .my-button:hover {
        background-color: #ddd; /* Changement de couleur au survol */
    }
</style>

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/showUser.css\x27) }}\">
</head>

<section style=\"margin-bottom: 150px;\" >
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card\">
                    <div class=\"card-header\" style=\"background-color: rgba(0, 0, 0, 0.55); color: white;\">
                        <h3 class=\"mb-0\">Votre profil</h3>
                    </div>
                    <div class=\"card-body\">
                        <hr>
                        <h6>Informations personnelles</h6>
                        <hr>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <h6>Nom utilisateur:</h6>
                                <h5>{{ user.username }}</h5>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Rôle:</h6>
                                <p>
                                    {% if \x27ROLE_USER\x27 in user.roles and \x27ROLE_ADMIN\x27 in user.roles %}
                                        Utilisateur / Administrateur
                                    {% elseif \x27ROLE_USER\x27 in user.roles %}
                                        Utilisateur
                                    {% elseif \x27ROLE_ADMIN\x27 in user.roles %}
                                        Administrateur
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <h6>Gestion du compte</h6>
                        <hr>
                        <div class=\"container\">
                           <div class=\"btn-container\">
                           {# 
                               <li><a href=\"#\" onclick=\"return confirmDeleteUser(\x27{{ path(\x27delete_user\x27, {\x27id\x27: user.id}) }}\x27);\" class=\"btn btn-delete\">Supprimer le compte</a> </li> #} 
                               <div class=\"container\">
                               <div class=\"row mx-auto w-75\">
                               {% if is_granted(\x27ROLE_ADMIN\x27)%}
                                <a href=\"#\" class=\"btn btn-delete col btn-danger\" onclick=\"return confirmDesactiverUser(\x27{{ path(\x27desactiver_user\x27, {\x27id\x27: user.id}) }}\x27);\">
                                    Désactiver le compte
                                </a>
                                {% endif %}
                                {% if not is_granted(\x27ROLE_ADMIN\x27)%}
                                <a href=\"#\" class=\"btn btn-delete col btn-danger\" onclick=\"return confirmDesactiverUser(\x27{{ path(\x27desactiver_simple_user\x27, {\x27id\x27: user.id}) }}\x27);\">
                                    Désactiver le compte
                                </a>
                                {% endif %}
                               <a href=\"{{ path(\x27app_admin_app_users_edit_user_password\x27, {id: user.getId()}) }}\" type=\"button\" class=\"btn btn-deactivate col btn-info\">Réinitialiser le mot de passe?</a>
                            </div>
                            </div>
                           </div>
                        </div>
                        <hr>
                        <h6>Activités</h6>
                        <hr>
                        <div class=\"btn-container\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a href=\"{{ path(\x27user_auth_fiche_list\x27, { \x27userId\x27: userId }) }}\" class=\"my-button\">Consulter mes fiches</a>
                        </div>
                            <ul style=\"display: none;\" class=\"user-details\">
                                <table class=\"table table-hover\" style=\"width: 900px; margin: 0 auto;\">
                                    <tr style=\" background-color: #a9a9a9; \">
                                        <td class=\"table-active\">Numéro fiche</td>
                                        <td class=\"table-active\">Afficher fiche</td>
                                        <td class=\"table-active\">Supprimer fiche</td>
                                        <td class=\"table-active\">Modifier fiche</td>
                                    </tr>

                                    {% for fiche in user.getFiche %}
                                        <tr>
                                            <td > <strong>Fiche numéro:</strong> {{ fiche.getIdFiche }}<br></td>
                                            <td > <a href=\"{{ path(\x27detail_fiche\x27, {id: fiche.getIdFiche()}) }}\" type=\"button\" class=\"btn btn-secondary  \" style=\" margin-right: 10px; background-color: #a9a9a9;\">Voir</a></td>
                                            <td > <a href=\"{{ path(\x27delete_fiche\x27, {id: fiche.getIdFiche()}) }}\" type=\"button\"  class=\"btn btn-secondary  \" style=\"margin-right: 10px;\">Supprimer</a></td>
                                            <td > <a href=\"{{ path(\x27app_fiche_edit\x27, {id: fiche.getIdFiche()}) }}\" type=\"button\"  class=\"btn btn-secondary  \" style=\" margin-right: 10px; background-color: #a9a9a9;\">Modifier</a></td>
                                        </tr>
                                    {% endfor %}
                                </table>
                            </ul>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"{{ path(\x27savreq_app_sav_requete_index\x27) }}\" class=\"my-button\"   onclick=\"toggleDetails(this)\">Consulter mes requêtes</a>
                            </div>
                            {% if not is_granted(\x27ROLE_ADMIN\x27)%}
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"{{ path(\x27app_index_authorized\x27, {\x27id\x27: user.id}) }}\" class=\"my-button\" onclick=\"toggleDetails(this)\">Voir mes index</a>
                            </div>

                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                <a href=\"{{ path(\x27app_livre_app_livre_authorized\x27, {\x27id\x27: user.id}) }}\" class=\"my-button\" onclick=\"toggleDetails(this)\">
                                    Voir mes livres
                                </a>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function confirmDeleteUser(url) {
        if (confirm(\"Êtes-vous sûr de vouloir supprimer votre compte ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>
<script>
    function confirmDesactiverUser(url) {
        if (confirm(\"Êtes-vous sûr de vouloir desactiver votre compte ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>
<script>
    function confirmDeleteFiche(url) {
        if (confirm(\"Êtes-vous sûr de vouloir supprimer cette fiche ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>

<script>
    function upload() {
        var input = document.getElementById(\x27avatar\x27);
        var preview = document.getElementById(\x27preview\x27);

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = \x27block\x27;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    function toggleDetails(button) {
        const userDetails = button.parentElement.nextElementSibling;
        userDetails.style.display = userDetails.style.display === \x27none\x27 ? \x27block\x27 : \x27none\x27;

        if (userDetails.style.display === \x27block\x27) {
            const detailsWindow = window.open(\x27\x27, \x27_self\x27);

            detailsWindow.document.write(\x27<html><head><title>Détails</title>\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeUsers.css\x27) }}\">\x27);
            detailsWindow.document.write(\x27</head><body>\x27);
            detailsWindow.document.write(\x27<h1 style=\"text-align: center;margin-bottom: 30px;margin-top: 30px;\">Liste des fiches</h1>\x27);
            detailsWindow.document.write(userDetails.innerHTML);
            detailsWindow.document.write(\x27</body></html>\x27);

            userDetails.style.display = \x27none\x27;

            detailsWindow.addEventListener(\x27popstate\x27, function(event) {
                if (event.state === null) {
                    detailsWindow.close();
                }
            });

            // Mettre un état initial dans l\x27historique
            detailsWindow.history.replaceState({ page: 1 }, \x27Détails\x27, \x27\x27);

            // Gérer les liens internes pour les ajouter à l\x27historique
            const internalLinks = detailsWindow.document.querySelectorAll(\x27a\x27);
            internalLinks.forEach(function(link) {
                link.addEventListener(\x27click\x27, function(e) {
                    e.preventDefault();
                    detailsWindow.history.pushState({ page: 2 }, \x27Détails\x27, link.href);
                    detailsWindow.location.reload();
                });
            });
        }
    }
</script>

{% endblock %}
", "profileuser/show.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\profileuser\\show.html.twig");
    }
}
