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

/* index/auth.html.twig */
class __TwigTemplate_f91f0aa30910ea1e6343a705dbe8181a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/auth.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/auth.html.twig"));

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

        yield "Index";
        
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
<div class=\"container mb-5 pb-5\">
    <h1>Donner des autorisations</h1>
    <h3>Vous êtes sur l\x27index: <i>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</i></h3>
    <p>Veuillez sélectionner un ou plusieurs utilisateurs</p>
    <form action=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_auth_save", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 16, $this->source); })()), "idindex", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" method=\"post\" id=\"authForm\">
        <div class=\"d-flex justify-content-end mb-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Donner Autorisations</button>
        </div>
        <table id=\"userTable\" class=\"table text-center\">
            <thead>
                <tr>
                    <th>ID Utilisateur</th>
                    <th>Username</th>
                    <th>Autorisation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            yield "                    <tr class=\"user-row ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["auths"]) || array_key_exists("auths", $context) ? $context["auths"] : (function () { throw new RuntimeError('Variable "auths" does not exist.', 31, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), [], "array", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "disabled";
            }
            yield "\" data-user-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 35
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["auths"]) || array_key_exists("auths", $context) ? $context["auths"] : (function () { throw new RuntimeError('Variable "auths" does not exist.', 35, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), [], "array", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "                                <span>Oui</span>
                            ";
            } else {
                // line 38
                yield "                                <span>Non</span>
                            ";
            }
            // line 40
            yield "                        </td>
                        <td>
                            ";
            // line 42
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["auths"]) || array_key_exists("auths", $context) ? $context["auths"] : (function () { throw new RuntimeError('Variable "auths" does not exist.', 42, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42), [], "array", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_auth_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 43, $this->source); })()), "idindex", [], "any", false, false, false, 43), "userId" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-danger\" 
                                   onclick=\"return confirm(\x27Etes-vous sûr de vouloir supprimer cette autorisation?\x27);\">
                                   Supprimer Autorisation
                                </a>
                            ";
            }
            // line 49
            yield "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </tbody>
        </table>
        <!-- Hidden input to hold selected user IDs -->
        <input type=\"hidden\" name=\"users\" id=\"selectedUsers\" value=\"\">
    </form>
</div>

<style>
.user-row {
    cursor: pointer;
}
.user-row:hover {
    background: #f5f5f5;
}

.user-row.selected {
    background-color: #d3d3d3; 
}

.user-row.disabled {
    pointer-events: none;
    color: gray;
    background-color: #f9f9f9;
}

.user-row.disabled .btn-danger {
    pointer-events: auto; /* Ensure the delete button remains active */
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
</style>
<script>
document.addEventListener(\x27DOMContentLoaded\x27, () => {
    const userTable = document.getElementById(\x27userTable\x27);
    const selectedUsersInput = document.getElementById(\x27selectedUsers\x27);
    let selectedUsers = [];

    userTable.addEventListener(\x27click\x27, (event) => {
        const row = event.target.closest(\x27.user-row\x27);

        // Ignore disabled rows
        if (row && !row.classList.contains(\x27disabled\x27)) {
            const userId = row.dataset.userId;

            // Toggle selection
            if (row.classList.contains(\x27selected\x27)) {
                row.classList.remove(\x27selected\x27);
                selectedUsers = selectedUsers.filter(id => id !== userId);
            } else {
                row.classList.add(\x27selected\x27);
                selectedUsers.push(userId);
            }

            // Update hidden input value
            selectedUsersInput.value = JSON.stringify(selectedUsers);
        }
    });
});

\$(document).ready(function() {
    \$(\x27#userTable\x27).DataTable({
        language: {
            url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
        }
    });
});

document.addEventListener(\"DOMContentLoaded\", function () {
    document.getElementById(\"authForm\").addEventListener(\"submit\", function (event) {
        let selectedUsers = document.getElementById(\"selectedUsers\").value;
        
        if (!selectedUsers.trim()) {
            alert(\"Veuillez sélectionner au moins un utilisateur avant de soumettre.\");
            event.preventDefault(); // Prevent form submission
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
        return "index/auth.html.twig";
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
        return array (  191 => 52,  183 => 49,  173 => 43,  171 => 42,  167 => 40,  163 => 38,  159 => 36,  157 => 35,  152 => 33,  148 => 32,  139 => 31,  135 => 30,  118 => 16,  113 => 14,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Index{% endblock %}

{% block body %}
<head>
       <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
</head>
<div class=\"container mb-5 pb-5\">
    <h1>Donner des autorisations</h1>
    <h3>Vous êtes sur l\x27index: <i>{{ index.nom }}</i></h3>
    <p>Veuillez sélectionner un ou plusieurs utilisateurs</p>
    <form action=\"{{ path(\x27app_index_auth_save\x27, {id: index.idindex}) }}\" method=\"post\" id=\"authForm\">
        <div class=\"d-flex justify-content-end mb-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Donner Autorisations</button>
        </div>
        <table id=\"userTable\" class=\"table text-center\">
            <thead>
                <tr>
                    <th>ID Utilisateur</th>
                    <th>Username</th>
                    <th>Autorisation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr class=\"user-row {% if auths[user.id] %}disabled{% endif %}\" data-user-id=\"{{ user.id }}\">
                        <td>{{ user.id }}</td>
                        <td>{{ user.username }}</td>
                        <td>
                            {% if auths[user.id] %}
                                <span>Oui</span>
                            {% else %}
                                <span>Non</span>
                            {% endif %}
                        </td>
                        <td>
                            {% if auths[user.id] %}
                                <a href=\"{{ path(\x27app_index_auth_remove\x27, {id: index.idindex, userId: user.id}) }}\" 
                                   class=\"btn btn-danger\" 
                                   onclick=\"return confirm(\x27Etes-vous sûr de vouloir supprimer cette autorisation?\x27);\">
                                   Supprimer Autorisation
                                </a>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <!-- Hidden input to hold selected user IDs -->
        <input type=\"hidden\" name=\"users\" id=\"selectedUsers\" value=\"\">
    </form>
</div>

<style>
.user-row {
    cursor: pointer;
}
.user-row:hover {
    background: #f5f5f5;
}

.user-row.selected {
    background-color: #d3d3d3; 
}

.user-row.disabled {
    pointer-events: none;
    color: gray;
    background-color: #f9f9f9;
}

.user-row.disabled .btn-danger {
    pointer-events: auto; /* Ensure the delete button remains active */
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
</style>
<script>
document.addEventListener(\x27DOMContentLoaded\x27, () => {
    const userTable = document.getElementById(\x27userTable\x27);
    const selectedUsersInput = document.getElementById(\x27selectedUsers\x27);
    let selectedUsers = [];

    userTable.addEventListener(\x27click\x27, (event) => {
        const row = event.target.closest(\x27.user-row\x27);

        // Ignore disabled rows
        if (row && !row.classList.contains(\x27disabled\x27)) {
            const userId = row.dataset.userId;

            // Toggle selection
            if (row.classList.contains(\x27selected\x27)) {
                row.classList.remove(\x27selected\x27);
                selectedUsers = selectedUsers.filter(id => id !== userId);
            } else {
                row.classList.add(\x27selected\x27);
                selectedUsers.push(userId);
            }

            // Update hidden input value
            selectedUsersInput.value = JSON.stringify(selectedUsers);
        }
    });
});

\$(document).ready(function() {
    \$(\x27#userTable\x27).DataTable({
        language: {
            url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
        }
    });
});

document.addEventListener(\"DOMContentLoaded\", function () {
    document.getElementById(\"authForm\").addEventListener(\"submit\", function (event) {
        let selectedUsers = document.getElementById(\"selectedUsers\").value;
        
        if (!selectedUsers.trim()) {
            alert(\"Veuillez sélectionner au moins un utilisateur avant de soumettre.\");
            event.preventDefault(); // Prevent form submission
        }
    });
});

</script>
{% endblock %}
", "index/auth.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\index\\auth.html.twig");
    }
}
