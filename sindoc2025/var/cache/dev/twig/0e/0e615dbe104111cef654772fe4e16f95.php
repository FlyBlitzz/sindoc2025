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

/* sav_requete/liste.html.twig */
class __TwigTemplate_9c9e63b5defa1e17a57ba882528acb96 extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sav_requete/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sav_requete/liste.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ajoutFiche.css"), "html", null, true);
        yield "\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <style>
        .inline-button {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "    <body>
        <div class=\"card-body classs w-50\">
            <h1>Faire une recherche multi critères</h1>
            ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"], "id" => "myForm"]);
        yield "
            ";
        // line 22
        yield "            ";
        // line 23
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        yield "
        </div>

        <script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script>
            \$(document).ready(function() {
                
                // Fonction pour mettre à jour la valeur du champ requeteRechercher
                function mettreAJourMotCles(nouveauMot) {
                    // Récupérer la valeur actuelle du champ
                    var ancienMot = \$(\x27#";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
        yield "_requeteRechercher\x27).val();
                    // Mettre à jour la valeur avec le nouveau mot et les séparateurs
                    var separateur = (ancienMot !== \x27\x27) ? \x27 \x27 : \x27\x27;
                    var nouveauMotCles = ancienMot + separateur + nouveauMot;
                    // Mettre à jour la valeur du champ
                    \$(\x27#";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
        yield "_requeteRechercher\x27).val(nouveauMotCles);
                  
                }

                // Lorsque le bouton \"ET\" est cliqué
                \$(\x27.buttonET\x27).click(function() {
                    mettreAJourMotCles(\x27ET\x27);
                });

                // Lorsque le bouton \"OU\" est cliqué
                \$(\x27.buttonOU\x27).click(function() {
                    mettreAJourMotCles(\x27OU\x27);
                });
                \$(\x27.buttonNOT\x27).click(function() {
                    mettreAJourMotCles(\x27NOT\x27);
                });
              // Lorsque la requête est sélectionnée
                \$(\x27.select2\x27).change(function() {
                    var nomRequete = \$(\x27.select2 option:selected\x27).text();
                    mettreAJourMotCles(nomRequete);
                });
             // Lorsque le bouton \"Supprimer\" est cliqué
                \$(\x27.supprimer-btn\x27).click(function() {
                    \$(\x27.select2\x27).val(\x27\x27);
                    // Effacer le contenu du champ requeteRechercher
                    \$(\x27#";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "_requeteRechercher\x27).val(\x27\x27);
                });
            });
        </script>
    </body>
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
        return "sav_requete/liste.html.twig";
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
        return array (  182 => 63,  154 => 38,  146 => 33,  136 => 26,  129 => 23,  127 => 22,  123 => 20,  118 => 17,  105 => 16,  84 => 6,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block head %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\">
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <style>
        .inline-button {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
{% endblock %}
{% block body %}
    <body>
        <div class=\"card-body classs w-50\">
            <h1>Faire une recherche multi critères</h1>
            {{ form_start(form, {\x27attr\x27: {\x27novalidate\x27: \x27novalidate\x27}, \x27id\x27: \x27myForm\x27}) }}
            {# {{ form_row(form.requeteRechercher) }} #}
            {# {{ form_errors(form.requeteRechercher) }} #}
            {{ form_end(form) }}
        </div>

        <script src=\"{{ asset(\x27js/bootstrap.bundle.min.js\x27) }}\"></script>
        <script>
            \$(document).ready(function() {
                
                // Fonction pour mettre à jour la valeur du champ requeteRechercher
                function mettreAJourMotCles(nouveauMot) {
                    // Récupérer la valeur actuelle du champ
                    var ancienMot = \$(\x27#{{ form.vars.id }}_requeteRechercher\x27).val();
                    // Mettre à jour la valeur avec le nouveau mot et les séparateurs
                    var separateur = (ancienMot !== \x27\x27) ? \x27 \x27 : \x27\x27;
                    var nouveauMotCles = ancienMot + separateur + nouveauMot;
                    // Mettre à jour la valeur du champ
                    \$(\x27#{{ form.vars.id }}_requeteRechercher\x27).val(nouveauMotCles);
                  
                }

                // Lorsque le bouton \"ET\" est cliqué
                \$(\x27.buttonET\x27).click(function() {
                    mettreAJourMotCles(\x27ET\x27);
                });

                // Lorsque le bouton \"OU\" est cliqué
                \$(\x27.buttonOU\x27).click(function() {
                    mettreAJourMotCles(\x27OU\x27);
                });
                \$(\x27.buttonNOT\x27).click(function() {
                    mettreAJourMotCles(\x27NOT\x27);
                });
              // Lorsque la requête est sélectionnée
                \$(\x27.select2\x27).change(function() {
                    var nomRequete = \$(\x27.select2 option:selected\x27).text();
                    mettreAJourMotCles(nomRequete);
                });
             // Lorsque le bouton \"Supprimer\" est cliqué
                \$(\x27.supprimer-btn\x27).click(function() {
                    \$(\x27.select2\x27).val(\x27\x27);
                    // Effacer le contenu du champ requeteRechercher
                    \$(\x27#{{ form.vars.id }}_requeteRechercher\x27).val(\x27\x27);
                });
            });
        </script>
    </body>
{% endblock %}
", "sav_requete/liste.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\sav_requete\\liste.html.twig");
    }
}
