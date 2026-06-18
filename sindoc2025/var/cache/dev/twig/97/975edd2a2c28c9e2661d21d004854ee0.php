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

/* profileuser/authorized.html.twig */
class __TwigTemplate_e84b30c5baafff38c3be1e2ebe43bf8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profileuser/authorized.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profileuser/authorized.html.twig"));

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

        yield "User";
        
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
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
</head>
<body>

    <div class=\"container mb-5 pb-5\">
        <h1 class=\"text-center mb-4\">Mes index Autorisés</h1>
        <table class=\"table\" id=\"Table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authorizedIndexes"]) || array_key_exists("authorizedIndexes", $context) ? $context["authorizedIndexes"] : (function () { throw new RuntimeError('Variable "authorizedIndexes" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 30
            yield "                   <tr>
    <td class=\"pt-3\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
    <td>
        <div style=\"display: flex; align-items: center; justify-content: space-between; width: 100%;\">
            <span class=\"mx-lg-5\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            <div style=\"display: flex; gap: 10px;\">
                <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["index"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-md\">Modifier</a>
                <button class=\"btn btn-danger open-modal\" data-id=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["index"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield "\">
                    Supprimer
                </button>
            </div>
        </div>
    </td>
</tr>

                ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                    <tr>
                        <td colspan=\"2\" class=\"text-center\">Aucun index autorisé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "            </tbody>
        </table>
    </div>
<div id=\"modal\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 9999;\">
    <div style=\"background: white; padding: 20px; border-radius: 10px; width: 800px; min-height: 300px; overflow-y: auto;\">
        <span id=\"close\" style=\"cursor: pointer; float: right;\">❌</span>
        <div id=\"modal-body\">
            <!-- Le contenu du popup s\x27affichera ici -->
        </div>
        <button id=\"confirmDelete\" type=\"submit\" class=\"btn btn-danger\">Confirmer</button>

    </div>
</div>


</div>

</div>

</body>
<script>
    const modal = document.getElementById(\"modal\");
    const modalBody = document.getElementById(\"modal-body\");
    const closeModal = document.getElementById(\"close\");
    const confirmDelete = document.getElementById(\"confirmDelete\");

    let currentIndexId = null; 

    document.querySelectorAll(\".open-modal\").forEach(button => {
        button.addEventListener(\"click\", function () {
            const indexId = this.getAttribute(\"data-id\");
            currentIndexId = indexId; // Store the current index ID
            const url = \"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_livres", ["id" => "ID_PLACEHOLDER"]);
        yield "\".replace(\"ID_PLACEHOLDER\", indexId);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    let content = \"<h2>Cet index a les livres suivants associés. Êtes-vous sûr de vouloir le supprimer ?</h2>\";

                    if (data.length === 0) {
                        content += \"<p>Aucun livre associé.</p>\";
                    } else {
                        content += \"<ul>\";
                        data.forEach(livre => {
                            content += `<li><strong>\${livre.nom}</strong> (ID \${livre.id})</li>`;
                        });
                        content += \"</ul>\";
                    }

                    modalBody.innerHTML = content;
                    modal.style.display = \"flex\"; // Show the modal
                })
                .catch(error => console.error(\"Erreur lors de la récupération des livres:\", error));
        });
    });

    // Close the Modal when clicking the close button
    closeModal.addEventListener(\"click\", () => {
        modal.style.display = \"none\";
    });

    // Close the Modal when clicking outside
    window.addEventListener(\"click\", (e) => {
        if (e.target === modal) {
            modal.style.display = \"none\";
        }
    });

    confirmDelete.addEventListener(\"click\", function() {
        if (currentIndexId) {
            const url = \"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_invisible", ["id" => "ID_PLACEHOLDER"]);
        yield "\".replace(\"ID_PLACEHOLDER\", currentIndexId);
            // Send a POST request to make the index invisible
            fetch(url, {
                method: \x27POST\x27,
                headers: {
                    \x27Content-Type\x27: \x27application/json\x27,
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === \"Index and its associated books have been made invisible\") {
                    
                    modal.style.display = \"none\";
                    window.location.href = \"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index_authorized_user");
        yield "\";
                }
            })
            .catch(error => console.error(\"Erreur lors de la demande:\", error));
        }
    });

    \$(document).ready(function() {
        \$(\x27#Table\x27).DataTable({
            language: {
                url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
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
        return "profileuser/authorized.html.twig";
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
        return array (  269 => 133,  253 => 120,  212 => 82,  178 => 50,  169 => 46,  167 => 45,  154 => 37,  150 => 36,  145 => 34,  139 => 31,  136 => 30,  131 => 29,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}User{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/showUser.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
</head>
<body>

    <div class=\"container mb-5 pb-5\">
        <h1 class=\"text-center mb-4\">Mes index Autorisés</h1>
        <table class=\"table\" id=\"Table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                {% for index in authorizedIndexes %}
                   <tr>
    <td class=\"pt-3\">{{ index.id }}</td>
    <td>
        <div style=\"display: flex; align-items: center; justify-content: space-between; width: 100%;\">
            <span class=\"mx-lg-5\">{{ index.nom }}</span>
            <div style=\"display: flex; gap: 10px;\">
                <a href=\"{{ path(\x27index_app_index_edit\x27, {id: index.id}) }}\" class=\"btn btn-primary btn-md\">Modifier</a>
                <button class=\"btn btn-danger open-modal\" data-id=\"{{ index.id }}\">
                    Supprimer
                </button>
            </div>
        </div>
    </td>
</tr>

                {% else %}
                    <tr>
                        <td colspan=\"2\" class=\"text-center\">Aucun index autorisé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
<div id=\"modal\" style=\"display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 9999;\">
    <div style=\"background: white; padding: 20px; border-radius: 10px; width: 800px; min-height: 300px; overflow-y: auto;\">
        <span id=\"close\" style=\"cursor: pointer; float: right;\">❌</span>
        <div id=\"modal-body\">
            <!-- Le contenu du popup s\x27affichera ici -->
        </div>
        <button id=\"confirmDelete\" type=\"submit\" class=\"btn btn-danger\">Confirmer</button>

    </div>
</div>


</div>

</div>

</body>
<script>
    const modal = document.getElementById(\"modal\");
    const modalBody = document.getElementById(\"modal-body\");
    const closeModal = document.getElementById(\"close\");
    const confirmDelete = document.getElementById(\"confirmDelete\");

    let currentIndexId = null; 

    document.querySelectorAll(\".open-modal\").forEach(button => {
        button.addEventListener(\"click\", function () {
            const indexId = this.getAttribute(\"data-id\");
            currentIndexId = indexId; // Store the current index ID
            const url = \"{{ path(\x27app_index_livres\x27, {\x27id\x27: \x27ID_PLACEHOLDER\x27}) }}\".replace(\"ID_PLACEHOLDER\", indexId);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    let content = \"<h2>Cet index a les livres suivants associés. Êtes-vous sûr de vouloir le supprimer ?</h2>\";

                    if (data.length === 0) {
                        content += \"<p>Aucun livre associé.</p>\";
                    } else {
                        content += \"<ul>\";
                        data.forEach(livre => {
                            content += `<li><strong>\${livre.nom}</strong> (ID \${livre.id})</li>`;
                        });
                        content += \"</ul>\";
                    }

                    modalBody.innerHTML = content;
                    modal.style.display = \"flex\"; // Show the modal
                })
                .catch(error => console.error(\"Erreur lors de la récupération des livres:\", error));
        });
    });

    // Close the Modal when clicking the close button
    closeModal.addEventListener(\"click\", () => {
        modal.style.display = \"none\";
    });

    // Close the Modal when clicking outside
    window.addEventListener(\"click\", (e) => {
        if (e.target === modal) {
            modal.style.display = \"none\";
        }
    });

    confirmDelete.addEventListener(\"click\", function() {
        if (currentIndexId) {
            const url = \"{{ path(\x27app_index_invisible\x27, {\x27id\x27: \x27ID_PLACEHOLDER\x27}) }}\".replace(\"ID_PLACEHOLDER\", currentIndexId);
            // Send a POST request to make the index invisible
            fetch(url, {
                method: \x27POST\x27,
                headers: {
                    \x27Content-Type\x27: \x27application/json\x27,
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === \"Index and its associated books have been made invisible\") {
                    
                    modal.style.display = \"none\";
                    window.location.href = \"{{path(\x27app_index_authorized_user\x27)}}\";
                }
            })
            .catch(error => console.error(\"Erreur lors de la demande:\", error));
        }
    });

    \$(document).ready(function() {
        \$(\x27#Table\x27).DataTable({
            language: {
                url: \x27//cdn.datatables.net/plug-ins/1.13.6/i18n/French.json\x27
            }
        });
    });
</script>


{% endblock %}", "profileuser/authorized.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\profileuser\\authorized.html.twig");
    }
}
