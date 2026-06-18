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

/* users/listUser.html.twig */
class __TwigTemplate_b7577c583d0af94417d579e168b3efb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/listUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/listUser.html.twig"));

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

        yield "Liste des utilisateurs";
        
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
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    

</head>
       <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">
           <div class=\"row  table-responsive\">
               ";
        // line 24
        yield from $this->load("_partials/_adminnav.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "               <main class=\"container border border-light bg-white p-2\">
               <h1 style=\"  text-decoration: underline;      text-align: center;\"> Administration </h1>
                <h1>Liste des utilisateurs : </h1></br>
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_new");
        yield "\" type=\"button\" class=\"btn btn-primary\" style=\"margin-bottom: 60px;\">+ Créer un nouvel utilisateur</a>
                  <table class=\"table\" id=\"userTable\">
                       <thead>
                       <tr>
                           <th>Nom</th>
                           <th>Détails Fiche</th>
                           <th>Actions</th>
                           <th>Activer/Désactiver</th>
                       </tr>
                       </thead>
                       <tbody>
                       ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            yield "                      
                    
                       
                       
                           <tr>
                               <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                               <td>

                                   ";
            // line 51
            yield "                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                        ";
            // line 52
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getFiche", [], "method", false, false, false, 52)) > 0)) {
                // line 53
                yield "                                            ";
                $context["ficheCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "getFiche", [], "method", false, false, false, 53));
                // line 54
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_auth_fiche_list", ["userId" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\"  
                                            class=\"btn btn-info rounded mx-2 tooltip-link\"
                                           
                                            data-tooltip=\"Cet utilisateur a ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ficheCount"]) || array_key_exists("ficheCount", $context) ? $context["ficheCount"] : (function () { throw new RuntimeError('Variable "ficheCount" does not exist.', 57, $this->source); })()), "html", null, true);
                yield " fiche(s).\"
                                            style=\"background-color:#0d6efd;color:white;\">
                                                Ses fiches
                                            </a>
                                        ";
            } else {
                // line 62
                yield "                                            <a href=\"javascript:void(0);\" 
                                            class=\"btn btn-info rounded mx-2 tooltip-link\" 
                                            style=\"background-color:#0d6efd;color:white;\"
                                            data-tooltip=\"Cet utilisateur n\x27a pas de fiches.\"
                                            title=\"Cet utilisateur n\x27a pas de fiches.\">
                                                Ses fiches
                                            </a>
                                        ";
            }
            // line 70
            yield "                                    </div>

                               </td>

                               <td>

                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\" >
                                  <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_show_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Afficher l\x27utilisateur\" ><i class=\"fas fa-eye\"></i></a>
                                  <a onclick=\"return confirmDesactiverUser(\x27";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\x27);\" type=\"button\" class=\"btn btn-outline-danger tooltip-link mx-2 rounded\"  data-tooltip=\"Supprimer l\x27utilisateur\" ><i class=\"fas fa-trash\"></i></a>
                                  <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" 
                                    class=\"btn btn-outline-primary rounded mx-2 tooltip-link d-inline-block\" 
                                    data-tooltip=\"Modifier l\x27utilisateur\">
                                        <i class=\"fas fa-pencil\"></i>
                                    </a>
                              </div>
                               </td>

                               <td>
                                  <form method=\"POST\" action=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactive_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\" id=\"form_desactive_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\" class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">                      
                                <label class=\"switch\">
                                    <input type=\"checkbox\" name=\"desactive\" ";
            // line 91
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "method", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " checked ";
            }
            yield " 
                                        onchange=\"document.getElementById(\x27form_desactive_";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "\x27).submit()\">
                                    <span class=\"slider round\"></span>
                                </label>
                            </form>

                               </td>
                           </tr>
                       ";
            $context['_iterated'] = true;
        }
        // line 99
        if (!$context['_iterated']) {
            // line 100
            yield "                           <tr>
                               <td colspan=\"5\">Aucun utilisateur !</td>
                           </tr>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "                       </tbody>
                   </table>
               </main>
           </div>
<script>
 // Fonction pour récupérer le contenu de base.html.twig
    function fetchBaseHTML(callback) {
        fetch(\x27get_base_html\x27)
            .then(response => response.text())
            .then(html => callback(html))
            .catch(error => console.error(\x27Erreur lors de la récupération du fichier base.html.twig : \x27, error));
    }

    function toggleDetails(button) {
        const userDetails = button.parentElement.nextElementSibling;
        userDetails.style.display = userDetails.style.display === \x27none\x27 ? \x27block\x27 : \x27none\x27;

        if (userDetails.style.display === \x27block\x27) {

            const detailsWindow = window.open(\x27\x27, \x27_self\x27);

            detailsWindow.document.write(\x27<html><head><title>Détails</title>\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">\x27);
            detailsWindow.document.write(\x27<link rel=\"stylesheet\" href=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">\x27);
            detailsWindow.document.write(\x27</head><body>\x27);
            detailsWindow.document.write(\x27<h1 style=\"text-align: center;margin-bottom: 10px;margin-top: 150px;\">Liste des fiches</h1>\x27);
            detailsWindow.document.write(userDetails.innerHTML);
            detailsWindow.document.write(\x27</body></html>\x27);

            userDetails.style.display = \x27none\x27;

            detailsWindow.addEventListener(\x27popstate\x27, function(event) {
                if (event.state === null) {
                    detailsWindow.close();
                }
            });
            // Insérer le contenu de base.html.twig dans la fenêtre modale
                fetchBaseHTML(function(htmlContent) {
                    detailsWindow.document.write(htmlContent);
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
    \$(document).ready(function() {
    \$(\x27#userTable\x27).DataTable({
        language: {
            url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
        },
        responsive: true,
    });
});
 function confirmDesactiverUser(url) {
        if (confirm(\"Êtes-vous sûr de vouloir supprimer cet utilisateur ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>


</div>
<style>
.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 25px;
}
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
.tooltip-link.disabled {
    pointer-events: auto;
}
/* Show tooltip on hover */
.tooltip-link:hover::after {
    opacity: 1;
    visibility: visible;
}
/* Make switch size adaptive for different screen sizes */
@media (max-width: 768px) {
    .switch {
        width: 40px;
        height: 20px;
    }
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 25px;
}

.slider:before {
    position: absolute;
    content: \"\";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

/* Checked state */
input:checked + .slider {
    background-color: #0d6efd; /* Bootstrap primary color */
}

input:checked + .slider:before {
    transform: translateX(24px);
}

/* Smaller screens */
@media (max-width: 768px) {
    .slider:before {
        height: 14px;
        width: 14px;
        left: 3px;
        bottom: 3px;
    }
    
    input:checked + .slider:before {
        transform: translateX(18px);
    }
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
        return "users/listUser.html.twig";
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
        return array (  297 => 129,  291 => 126,  267 => 104,  258 => 100,  256 => 99,  244 => 92,  238 => 91,  230 => 88,  218 => 79,  214 => 78,  210 => 77,  201 => 70,  191 => 62,  183 => 57,  176 => 54,  173 => 53,  171 => 52,  168 => 51,  162 => 45,  155 => 40,  150 => 39,  136 => 28,  131 => 25,  129 => 24,  116 => 14,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/showUser.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeUsers.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    

</head>
       <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">
           <div class=\"row  table-responsive\">
               {% include \"_partials/_adminnav.html.twig\"%}
               <main class=\"container border border-light bg-white p-2\">
               <h1 style=\"  text-decoration: underline;      text-align: center;\"> Administration </h1>
                <h1>Liste des utilisateurs : </h1></br>
                <a href=\"{{ path(\x27app_admin_app_users_new\x27) }}\" type=\"button\" class=\"btn btn-primary\" style=\"margin-bottom: 60px;\">+ Créer un nouvel utilisateur</a>
                  <table class=\"table\" id=\"userTable\">
                       <thead>
                       <tr>
                           <th>Nom</th>
                           <th>Détails Fiche</th>
                           <th>Actions</th>
                           <th>Activer/Désactiver</th>
                       </tr>
                       </thead>
                       <tbody>
                       {% for user in users %}
                      
                    
                       
                       
                           <tr>
                               <td>{{ user.username }}</td>
                               <td>

                                   {# <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                        <a href=\"{{ path(\x27user_auth_fiche_list\x27, { \x27userId\x27: user.id }) }}\"  class=\"btn btn-info\" style=\"background-color:#0d6efd;color:white;\">Ses fiches</a>
                                   </div> #}
                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                                        {% if user.getFiche()|length > 0 %}
                                            {% set ficheCount = user.getFiche()|length %}
                                            <a href=\"{{ path(\x27user_auth_fiche_list\x27, { \x27userId\x27: user.id }) }}\"  
                                            class=\"btn btn-info rounded mx-2 tooltip-link\"
                                           
                                            data-tooltip=\"Cet utilisateur a {{ ficheCount }} fiche(s).\"
                                            style=\"background-color:#0d6efd;color:white;\">
                                                Ses fiches
                                            </a>
                                        {% else %}
                                            <a href=\"javascript:void(0);\" 
                                            class=\"btn btn-info rounded mx-2 tooltip-link\" 
                                            style=\"background-color:#0d6efd;color:white;\"
                                            data-tooltip=\"Cet utilisateur n\x27a pas de fiches.\"
                                            title=\"Cet utilisateur n\x27a pas de fiches.\">
                                                Ses fiches
                                            </a>
                                        {% endif %}
                                    </div>

                               </td>

                               <td>

                                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\" >
                                  <a href=\"{{ path(\x27app_admin_app_users_show_admin\x27, {\x27id\x27: user.id}) }}\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Afficher l\x27utilisateur\" ><i class=\"fas fa-eye\"></i></a>
                                  <a onclick=\"return confirmDesactiverUser(\x27{{ path(\x27delete_user\x27, {\x27id\x27: user.id}) }}\x27);\" type=\"button\" class=\"btn btn-outline-danger tooltip-link mx-2 rounded\"  data-tooltip=\"Supprimer l\x27utilisateur\" ><i class=\"fas fa-trash\"></i></a>
                                  <a href=\"{{ path(\x27app_admin_app_users_edit\x27, {\x27id\x27: user.id}) }}\" 
                                    class=\"btn btn-outline-primary rounded mx-2 tooltip-link d-inline-block\" 
                                    data-tooltip=\"Modifier l\x27utilisateur\">
                                        <i class=\"fas fa-pencil\"></i>
                                    </a>
                              </div>
                               </td>

                               <td>
                                  <form method=\"POST\" action=\"{{ path(\x27desactive_user\x27, {\x27id\x27: user.id}) }}\" id=\"form_desactive_{{ user.id }}\" class=\"d-flex align-items-center justify-content-center flex-wrap\">
                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">                      
                                <label class=\"switch\">
                                    <input type=\"checkbox\" name=\"desactive\" {% if user.isActive() %} checked {% endif %} 
                                        onchange=\"document.getElementById(\x27form_desactive_{{ user.id }}\x27).submit()\">
                                    <span class=\"slider round\"></span>
                                </label>
                            </form>

                               </td>
                           </tr>
                       {% else %}
                           <tr>
                               <td colspan=\"5\">Aucun utilisateur !</td>
                           </tr>
                       {% endfor %}
                       </tbody>
                   </table>
               </main>
           </div>
<script>
 // Fonction pour récupérer le contenu de base.html.twig
    function fetchBaseHTML(callback) {
        fetch(\x27get_base_html\x27)
            .then(response => response.text())
            .then(html => callback(html))
            .catch(error => console.error(\x27Erreur lors de la récupération du fichier base.html.twig : \x27, error));
    }

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
            detailsWindow.document.write(\x27<h1 style=\"text-align: center;margin-bottom: 10px;margin-top: 150px;\">Liste des fiches</h1>\x27);
            detailsWindow.document.write(userDetails.innerHTML);
            detailsWindow.document.write(\x27</body></html>\x27);

            userDetails.style.display = \x27none\x27;

            detailsWindow.addEventListener(\x27popstate\x27, function(event) {
                if (event.state === null) {
                    detailsWindow.close();
                }
            });
            // Insérer le contenu de base.html.twig dans la fenêtre modale
                fetchBaseHTML(function(htmlContent) {
                    detailsWindow.document.write(htmlContent);
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
    \$(document).ready(function() {
    \$(\x27#userTable\x27).DataTable({
        language: {
            url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
        },
        responsive: true,
    });
});
 function confirmDesactiverUser(url) {
        if (confirm(\"Êtes-vous sûr de vouloir supprimer cet utilisateur ?\")) {
            window.location.href = url;
        }
        return false;
    }
</script>


</div>
<style>
.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 25px;
}
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
.tooltip-link.disabled {
    pointer-events: auto;
}
/* Show tooltip on hover */
.tooltip-link:hover::after {
    opacity: 1;
    visibility: visible;
}
/* Make switch size adaptive for different screen sizes */
@media (max-width: 768px) {
    .switch {
        width: 40px;
        height: 20px;
    }
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 25px;
}

.slider:before {
    position: absolute;
    content: \"\";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

/* Checked state */
input:checked + .slider {
    background-color: #0d6efd; /* Bootstrap primary color */
}

input:checked + .slider:before {
    transform: translateX(24px);
}

/* Smaller screens */
@media (max-width: 768px) {
    .slider:before {
        height: 14px;
        width: 14px;
        left: 3px;
        bottom: 3px;
    }
    
    input:checked + .slider:before {
        transform: translateX(18px);
    }
}
</style>
{% endblock %}





", "users/listUser.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\users\\listUser.html.twig");
    }
}
