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

/* livre/index.html.twig */
class __TwigTemplate_4b1953166c601cc020ca92c103252595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/index.html.twig"));

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

        yield "Liste des livres";
        
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
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>
</head>
   <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
          ";
        // line 18
        yield from $this->load("_partials/_adminnav.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
          <main class=\"col-9 container border border-light bg-white\">
    <h1>Liste des livres</h1>
    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_new");
        yield "\" class=\"btn btn-primary my-4\"> + Créer un nouveau</a>
   <div class=\"table-responsive\">
    <table class=\"table \" id=\"userTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
                <th>Visibilité</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 35
            yield "
            <tr>
                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>
    <div class=\"d-flex flex-wrap gap-2\">
        <!-- View Button -->
        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Afficher le livre\">
            <i class=\"fas fa-eye\"></i>
        </a>

        <!-- Edit Button -->
        <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Modifier le livre\">
            <i class=\"fas fa-pencil\"></i>
        </a>
        <form method=\"post\" action=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce livre ?\x27);\" class=\"d-inline\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 51))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-outline-danger rounded mx-2 tooltip-link\" data-tooltip=\"Supprimer le livre\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </form>

        <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_auth", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary rounded  mx-2 tooltip-link\" data-tooltip=\"Donner des autorisations\">
            <i class=\"fas fa-user-shield\"></i> 
        </a>
    </div>
</td>
                <td>
                 <form method=\"post\" action=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_toggle_visibility", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" >
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_visibility" . CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "idlivre", [], "any", false, false, false, 64))), "html", null, true);
            yield "\">
                        <label class=\"switch\">
                            <input type=\"checkbox\" ";
            // line 66
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["livre"], "visible", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield " onchange=\"this.form.submit()\">
                            <span class=\"slider round\"></span>
                        </label>
                     </form>
                     </td>
            </tr>
            
        ";
            $context['_iterated'] = true;
        }
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "            <tr>
                <td colspan=\"3\">Aucun livre trouvé!</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['livre'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "        </tbody>
    </table>
  </div>
    
     </div >
     </div >



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


</style>

<script>
\$(document).ready(function() {
    \$(\x27#userTable\x27).DataTable({
        language: {
            url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
        },
        responsive: true,
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
        return "livre/index.html.twig";
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
        return array (  227 => 78,  218 => 74,  216 => 73,  204 => 66,  199 => 64,  195 => 63,  186 => 57,  177 => 51,  173 => 50,  167 => 47,  159 => 42,  152 => 38,  148 => 37,  144 => 35,  139 => 34,  124 => 22,  119 => 19,  117 => 18,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Liste des livres{% endblock %}

{% block body %}
<head>
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.8.0/jszip.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels\"></script>
</head>
   <div class=\"classs\" style=\"width: 84%;     margin: 150px auto; margin-top: 0px;\">

        <div class=\"row\">
          {% include \"_partials/_adminnav.html.twig\"%}

          <main class=\"col-9 container border border-light bg-white\">
    <h1>Liste des livres</h1>
    <a href=\"{{ path(\x27app_livre_app_livre_new\x27) }}\" class=\"btn btn-primary my-4\"> + Créer un nouveau</a>
   <div class=\"table-responsive\">
    <table class=\"table \" id=\"userTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
                <th>Visibilité</th>
            </tr>
        </thead>
        <tbody>
        {% for livre in livres %}

            <tr>
                <td>{{ livre.idlivre }}</td>
                <td>{{ livre.nom }}</td>
                <td>
    <div class=\"d-flex flex-wrap gap-2\">
        <!-- View Button -->
        <a href=\"{{ path(\x27app_livre_app_livre_show\x27, {\x27id\x27: livre.idlivre}) }}\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Afficher le livre\">
            <i class=\"fas fa-eye\"></i>
        </a>

        <!-- Edit Button -->
        <a href=\"{{ path(\x27app_livre_app_livre_edit\x27, {\x27id\x27: livre.idlivre}) }}\" class=\"btn btn-outline-primary rounded mx-2 tooltip-link\" data-tooltip=\"Modifier le livre\">
            <i class=\"fas fa-pencil\"></i>
        </a>
        <form method=\"post\" action=\"{{ path(\x27app_livre_app_livre_delete\x27, {\x27id\x27: livre.idlivre}) }}\" onsubmit=\"return confirm(\x27Êtes-vous sûr de vouloir supprimer ce livre ?\x27);\" class=\"d-inline\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete\x27 ~ livre.idlivre) }}\">
            <button type=\"submit\" class=\"btn btn-outline-danger rounded mx-2 tooltip-link\" data-tooltip=\"Supprimer le livre\">
                <i class=\"fas fa-trash\"></i>
            </button>
        </form>

        <a href=\"{{ path(\x27app_livre_app_livre_auth\x27, { id: livre.idlivre }) }}\" class=\"btn btn-outline-secondary rounded  mx-2 tooltip-link\" data-tooltip=\"Donner des autorisations\">
            <i class=\"fas fa-user-shield\"></i> 
        </a>
    </div>
</td>
                <td>
                 <form method=\"post\" action=\"{{ path(\x27app_livre_toggle_visibility\x27, {\x27id\x27: livre.idlivre}) }}\" >
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27toggle_visibility\x27 ~ livre.idlivre) }}\">
                        <label class=\"switch\">
                            <input type=\"checkbox\" {{ livre.visible ? \x27checked\x27 : \x27\x27 }} onchange=\"this.form.submit()\">
                            <span class=\"slider round\"></span>
                        </label>
                     </form>
                     </td>
            </tr>
            
        {% else %}
            <tr>
                <td colspan=\"3\">Aucun livre trouvé!</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
  </div>
    
     </div >
     </div >



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


</style>

<script>
\$(document).ready(function() {
    \$(\x27#userTable\x27).DataTable({
        language: {
            url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
        },
        responsive: true,
    });
});
</script>
{% endblock %}", "livre/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\livre\\index.html.twig");
    }
}
