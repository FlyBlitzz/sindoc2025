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

/* fiche/recherche_fiche.html.twig */
class __TwigTemplate_32eb33002ca80fdca632c9ae83310c78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/recherche_fiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fiche/recherche_fiche.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<head>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
<style>
.inline-button {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 10px;
}

</style>
</head>
";
        // line 17
        yield from $this->load("breadcrumb.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["breadcrumbs" => (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 17, $this->source); })())]));
        // line 18
        yield "
<body>
    <div class=\"card-body classs\">
        <h1>Rechercher une fiche</h1>
        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "classe" => "inline-button"]]);
        yield "
        ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        yield "
    </div>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script>
\$(document).ready(function() {
    // Variable pour stocker les parenthèses et les mots-clés sélectionnés
    var elementsSelectionnes = [];

    // Détecter le changement dans le champ motClesSelect
    \$(\x27.motClesSelect\x27).change(function() {
        // Récupérer les mots-clés sélectionnés
        var motsClesSelectionnes = \$(\x27.motClesSelect option:selected\x27);

        // Ajouter les nouveaux mots-clés sélectionnés à la liste sans doublons
        motsClesSelectionnes.each(function() {
            var reference = \$(this).data(\x27reference\x27);
            if (!elementsSelectionnes.includes(reference)) {
                elementsSelectionnes.push(reference);
            }
        });

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour la parenthèse droite
    \$(\x27.ajouter-parenthese-droite-btn\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter une parenthèse droite à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27)\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour la parenthèse gauche
    \$(\x27.ajouter-parenthese-gauche-btn\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter une parenthèse gauche à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27(\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour le ET
    \$(\x27.buttonET\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter \x27ET\x27 à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27ET\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });
    // Détecter le clic sur le bouton pour le NOT
    \$(\x27.buttonNOT\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter \x27NOT\x27 à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27NOT\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour le OU
    \$(\x27.buttonOU\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter \x27OU\x27 à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27OU\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });
     // Détecter le clic sur le bouton de suppression
        \$(\x27.supprimerContenu\x27).click(function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du bouton

            // Vider la liste des éléments sélectionnés
            elementsSelectionnes = [];
            \$(\x27.motClesSelect\x27).val([]).trigger(\x27change\x27); // Vider le champ EntityType

            // Mettre à jour la valeur du champ motClesRechercher
            updateMotClesRechercher();
        });
   // Détecter le clic sur le bouton de suppression
        \$(\x27.supprimerContenu\x27).click(function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du bouton
            \$(\x27.motClesSelect\x27).val([]).trigger(\x27change\x27); // Vider la liste des éléments sélectionnés
               // Vider la liste des éléments sélectionnés
                       elementsSelectionnes = [];
            // Mettre à jour la valeur du champ motClesRechercher
            updateMotClesRechercher();
        });
    // Fonction pour mettre à jour la valeur du champ motClesRechercher
    function updateMotClesRechercher() {
        
        // Mettre à jour la valeur du champ motClesRechercher en joignant tous les éléments sélectionnés
        \$(\x27#recherche_fiche_motClesRechercher\x27).val(elementsSelectionnes.join(\x27 \x27));
    }
});

</script>

<script>
\$(document).ready(function() {
    \$(\x27.select2\x27).select2();
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
        return "fiche/recherche_fiche.html.twig";
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
        return array (  116 => 26,  110 => 23,  106 => 22,  100 => 18,  98 => 17,  85 => 7,  81 => 6,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}
{% block body %}
<head>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
<style>
.inline-button {
    display: inline-block;
    margin-right: 10px;
    margin-bottom: 10px;
}

</style>
</head>
{% include \x27breadcrumb.html.twig\x27 with { breadcrumbs: breadcrumbs } %}

<body>
    <div class=\"card-body classs\">
        <h1>Rechercher une fiche</h1>
        {{ form_start(form, {\x27attr\x27: {\x27novalidate\x27: \x27novalidate\x27, \x27classe\x27: \x27inline-button\x27}}) }}
        {{ form_end(form) }}
    </div>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>
<script>
\$(document).ready(function() {
    // Variable pour stocker les parenthèses et les mots-clés sélectionnés
    var elementsSelectionnes = [];

    // Détecter le changement dans le champ motClesSelect
    \$(\x27.motClesSelect\x27).change(function() {
        // Récupérer les mots-clés sélectionnés
        var motsClesSelectionnes = \$(\x27.motClesSelect option:selected\x27);

        // Ajouter les nouveaux mots-clés sélectionnés à la liste sans doublons
        motsClesSelectionnes.each(function() {
            var reference = \$(this).data(\x27reference\x27);
            if (!elementsSelectionnes.includes(reference)) {
                elementsSelectionnes.push(reference);
            }
        });

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour la parenthèse droite
    \$(\x27.ajouter-parenthese-droite-btn\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter une parenthèse droite à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27)\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour la parenthèse gauche
    \$(\x27.ajouter-parenthese-gauche-btn\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter une parenthèse gauche à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27(\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour le ET
    \$(\x27.buttonET\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter \x27ET\x27 à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27ET\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });
    // Détecter le clic sur le bouton pour le NOT
    \$(\x27.buttonNOT\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter \x27NOT\x27 à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27NOT\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });

    // Détecter le clic sur le bouton pour le OU
    \$(\x27.buttonOU\x27).click(function(event) {
        event.preventDefault(); // Empêcher le comportement par défaut du bouton

        // Ajouter \x27OU\x27 à la liste des éléments sélectionnés
        elementsSelectionnes.push(\x27OU\x27);

        // Mettre à jour la valeur du champ motClesRechercher
        updateMotClesRechercher();
    });
     // Détecter le clic sur le bouton de suppression
        \$(\x27.supprimerContenu\x27).click(function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du bouton

            // Vider la liste des éléments sélectionnés
            elementsSelectionnes = [];
            \$(\x27.motClesSelect\x27).val([]).trigger(\x27change\x27); // Vider le champ EntityType

            // Mettre à jour la valeur du champ motClesRechercher
            updateMotClesRechercher();
        });
   // Détecter le clic sur le bouton de suppression
        \$(\x27.supprimerContenu\x27).click(function(event) {
            event.preventDefault(); // Empêcher le comportement par défaut du bouton
            \$(\x27.motClesSelect\x27).val([]).trigger(\x27change\x27); // Vider la liste des éléments sélectionnés
               // Vider la liste des éléments sélectionnés
                       elementsSelectionnes = [];
            // Mettre à jour la valeur du champ motClesRechercher
            updateMotClesRechercher();
        });
    // Fonction pour mettre à jour la valeur du champ motClesRechercher
    function updateMotClesRechercher() {
        
        // Mettre à jour la valeur du champ motClesRechercher en joignant tous les éléments sélectionnés
        \$(\x27#recherche_fiche_motClesRechercher\x27).val(elementsSelectionnes.join(\x27 \x27));
    }
});

</script>

<script>
\$(document).ready(function() {
    \$(\x27.select2\x27).select2();
});
</script>
{% endblock %}

", "fiche/recherche_fiche.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\fiche\\recherche_fiche.html.twig");
    }
}
