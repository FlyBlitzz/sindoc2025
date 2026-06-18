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

/* index/index.html.twig */
class __TwigTemplate_28065607bad02f7b50afb50e03b04064 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

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

        yield "Liste des index";
        
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
   <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
          ";
        // line 15
        yield from $this->load("_partials/_adminnav.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "          <main class=\"col-9 container border border-light bg-white \">
            <h1> Liste des index</h1>
              <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_new");
        yield "\" class=\"btn btn-primary my-4\">+ Créer un nouveau</a>
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"userTable\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
                <th>Visibilité</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["indices"]) || array_key_exists("indices", $context) ? $context["indices"] : (function () { throw new RuntimeError('Variable "indices" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 31
            yield "            <tr>
                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "nom", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>
    <div class=\"d-flex flex-wrap gap-2\">
        <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Afficher l\x27index\">
            <i class=\"fas fa-eye\"></i>
        </a>
        <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Modifier l\x27index\">
            <i class=\"fas fa-pencil\"></i>
        </a>
        <form method=\"post\" action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer cet index?\x27);\" class=\"d-inline\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 43))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-outline-danger rounded mx-2 tooltip-link\" data-tooltip=\"Supprimer l\x27index\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </form>
        <a href=\"#\"  onclick=\"afficherMotsCles(\x27";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 48), "html", null, true);
            yield "\x27); return false;\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Voir les mots clés\">
            <i class=\"fas fa-key\"></i>
        </a>
        <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_auth", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary rounded mx-2 tooltip-link\" data-tooltip=\"Donner des autorisations\">
            <i class=\"fas fa-user-shield\"></i>
        </a>
    </div>
    </td>
                 <td>
                 <form method=\"post\" action=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_toggle_visibility", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" >
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_visibility" . CoreExtension::getAttribute($this->env, $this->source, $context["index"], "idindex", [], "any", false, false, false, 58))), "html", null, true);
            yield "\">
                        <label class=\"switch\">
                            <input type=\"checkbox\" ";
            // line 60
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["index"], "visible", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield " onchange=\"this.form.submit()\">
                            <span class=\"slider round\"></span>
                        </label>
                     </form>
                     </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 66
        if (!$context['_iterated']) {
            // line 67
            yield "            <tr>
                <td colspan=\"3\">Aucun index trouvé ! </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "        </tbody>
    </table>
</div>
    </div>
    </div>


<script>

    function fetchBaseHTML(callback) {
        fetch(\x27get_base_html\x27)
            .then(response => response.text())
            .then(html => callback(html))
            .catch(error => console.error(\x27Erreur lors de la récupération du fichier base.html.twig : \x27, error));
    }

    function afficherMotsCles(indexId) {

        window.location.href = \"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mots_cles", ["indexId" => "INDEX_ID"]);
        yield "\".replace(\x27INDEX_ID\x27, indexId);
    }

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
        return "index/index.html.twig";
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
        return array (  243 => 89,  223 => 71,  214 => 67,  212 => 66,  201 => 60,  196 => 58,  192 => 57,  183 => 51,  177 => 48,  169 => 43,  165 => 42,  159 => 39,  153 => 36,  147 => 33,  143 => 32,  140 => 31,  135 => 30,  120 => 18,  116 => 16,  114 => 15,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des index{% endblock %}

{% block body %}
<head>
       <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
</head>
   <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
          {% include \"_partials/_adminnav.html.twig\"%}
          <main class=\"col-9 container border border-light bg-white \">
            <h1> Liste des index</h1>
              <a href=\"{{ path(\x27index_app_index_new\x27) }}\" class=\"btn btn-primary my-4\">+ Créer un nouveau</a>
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"userTable\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
                <th>Visibilité</th>
            </tr>
        </thead>
        <tbody>
        {% for index in indices %}
            <tr>
                <td>{{ index.idindex }}</td>
                <td>{{ index.nom }}</td>
                <td>
    <div class=\"d-flex flex-wrap gap-2\">
        <a href=\"{{ path(\x27index_app_index_show\x27, {\x27id\x27: index.idindex}) }}\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Afficher l\x27index\">
            <i class=\"fas fa-eye\"></i>
        </a>
        <a href=\"{{ path(\x27index_app_index_edit\x27, {\x27id\x27: index.idindex}) }}\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Modifier l\x27index\">
            <i class=\"fas fa-pencil\"></i>
        </a>
        <form method=\"post\" action=\"{{ path(\x27index_app_index_delete\x27, {\x27id\x27: index.idindex}) }}\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer cet index?\x27);\" class=\"d-inline\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ index.idindex) }}\">
            <button type=\"submit\" class=\"btn btn-outline-danger rounded mx-2 tooltip-link\" data-tooltip=\"Supprimer l\x27index\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </form>
        <a href=\"#\"  onclick=\"afficherMotsCles(\x27{{ index.idindex }}\x27); return false;\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Voir les mots clés\">
            <i class=\"fas fa-key\"></i>
        </a>
        <a href=\"{{ path(\x27app_index_auth\x27, { id: index.idindex }) }}\" class=\"btn btn-outline-secondary rounded mx-2 tooltip-link\" data-tooltip=\"Donner des autorisations\">
            <i class=\"fas fa-user-shield\"></i>
        </a>
    </div>
    </td>
                 <td>
                 <form method=\"post\" action=\"{{ path(\x27app_index_toggle_visibility\x27, {\x27id\x27: index.idindex}) }}\" >
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27toggle_visibility\x27 ~ index.idindex) }}\">
                        <label class=\"switch\">
                            <input type=\"checkbox\" {{ index.visible ? \x27checked\x27 : \x27\x27 }} onchange=\"this.form.submit()\">
                            <span class=\"slider round\"></span>
                        </label>
                     </form>
                     </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Aucun index trouvé ! </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    </div>
    </div>


<script>

    function fetchBaseHTML(callback) {
        fetch(\x27get_base_html\x27)
            .then(response => response.text())
            .then(html => callback(html))
            .catch(error => console.error(\x27Erreur lors de la récupération du fichier base.html.twig : \x27, error));
    }

    function afficherMotsCles(indexId) {

        window.location.href = \"{{ path(\x27app_mots_cles\x27, {\x27indexId\x27: \x27INDEX_ID\x27}) }}\".replace(\x27INDEX_ID\x27, indexId);
    }

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
", "index/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\index\\index.html.twig");
    }
}
