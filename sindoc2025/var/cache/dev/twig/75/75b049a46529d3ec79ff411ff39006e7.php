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

/* mentions.html.twig */
class __TwigTemplate_9b0f9f1d570ef50e9b0310bd3ef220ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions.html.twig"));

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

        yield " Mentions légales ";
        
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
        yield "    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/listeUsers.css"), "html", null, true);
        yield "\">

    </head>

    <style>
        h2 {
            font-weight: bold;
        }
    </style>

    <div style=\"width: 40%; margin: 0 auto 150px;\">
        <main class=\"col-9 container border border-light bg-white p-2\" style=\"text-align: center;\">
            <h1 style=\"text-decoration: underline;\"> Mentions légales </h1>
            <br>
            <h2>Le site web est édité par :</h2>
            <p> ISTA UR 4011
                <br>
                <br>
                30-32 rue Mégevand
                <br>
                25000 Besançon
                <br>
                03.81.66.54.73</p>
            <br>
            <h2>Directeur de la publication :</h2>
            <p>Mme Woronoff, Présidente de l\x27Université de Franche-Comté</p>
            <br>
            <h2>Directeur de la redaction :</h2>
            <p>Antonio Gonzales, directeur de l\x27ISTA</p>
            <br>
            <h2>Hébergement du site :</h2>
            <p> Université de Franche-Comté
                <br>
                Centre de ressources informatiques (CRI)
                <br>
                16 route de Gray
                <br>
                25030 Besançon cedex
                <br>
                03 81 66 66 66</p>
            <br>
            <h2>Crédits :</h2>
            <p>- Développement : Antonin Rothé, Faiza Merah, Abdelmadjid Zenine
                <br>
                - Sous la supervision de : Florian Litot</p>
            <br>
            <h2>Droits d\x27auteur :</h2>
            <p>
                L\x27ensemble de ce site relève de la législation française et internationale sur le droit d\x27auteur et la
                propriété intellectuelle. Tous les droits de reproduction et de diffusion sont réservés, y compris pour
                les représentations iconographiques et photographiques.
                <br>
                La reproduction de tout ou partie de ce site sur un support quel qu\x27il soit, est formellement interdite
                sauf autorisation expresse du directeur de la publication.
                <br>
                <br>
                La création de liens hypertextes vers ce site est autorisée sous réserve de :
            </p>
            <ul>
                <li>
                    Ne pas utiliser la technique du lien profond effectué vers des fichiers téléchargeables ou
                    exécutables ;
                </li>
                <li>
                    Ne pas utiliser ce site dans un cadre dénaturant son identité visuelle et excluant son
                    identification ;
                </li>
                <li>
                    Ne pas effectuer de lien vers une image ou photographie en l\x27incluant dans une page hors de ce site
                    ;
                </li>
                <li>
                    Ne pas utiliser les informations de ce site à des fins commerciales ou publicitaires.
                </li>
            </ul>
            <h2>Navigation :</h2>
            <p>Ce site a été conçu pour les navigateurs Internet Explorer (à partir de la version 9), Safari, Mozilla
                Firefox et Google Chrome. Pour une navigation optimisée, nous conseillons l\x27emploi de Firefox ou de
                Google Chrome.
            </p>
        </main>
    </div>
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
        return "mentions.html.twig";
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
        return array (  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Mentions légales {% endblock %}

{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/bootstrap.min.css\x27) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\x27css/listeUsers.css\x27) }}\">

    </head>

    <style>
        h2 {
            font-weight: bold;
        }
    </style>

    <div style=\"width: 40%; margin: 0 auto 150px;\">
        <main class=\"col-9 container border border-light bg-white p-2\" style=\"text-align: center;\">
            <h1 style=\"text-decoration: underline;\"> Mentions légales </h1>
            <br>
            <h2>Le site web est édité par :</h2>
            <p> ISTA UR 4011
                <br>
                <br>
                30-32 rue Mégevand
                <br>
                25000 Besançon
                <br>
                03.81.66.54.73</p>
            <br>
            <h2>Directeur de la publication :</h2>
            <p>Mme Woronoff, Présidente de l\x27Université de Franche-Comté</p>
            <br>
            <h2>Directeur de la redaction :</h2>
            <p>Antonio Gonzales, directeur de l\x27ISTA</p>
            <br>
            <h2>Hébergement du site :</h2>
            <p> Université de Franche-Comté
                <br>
                Centre de ressources informatiques (CRI)
                <br>
                16 route de Gray
                <br>
                25030 Besançon cedex
                <br>
                03 81 66 66 66</p>
            <br>
            <h2>Crédits :</h2>
            <p>- Développement : Antonin Rothé, Faiza Merah, Abdelmadjid Zenine
                <br>
                - Sous la supervision de : Florian Litot</p>
            <br>
            <h2>Droits d\x27auteur :</h2>
            <p>
                L\x27ensemble de ce site relève de la législation française et internationale sur le droit d\x27auteur et la
                propriété intellectuelle. Tous les droits de reproduction et de diffusion sont réservés, y compris pour
                les représentations iconographiques et photographiques.
                <br>
                La reproduction de tout ou partie de ce site sur un support quel qu\x27il soit, est formellement interdite
                sauf autorisation expresse du directeur de la publication.
                <br>
                <br>
                La création de liens hypertextes vers ce site est autorisée sous réserve de :
            </p>
            <ul>
                <li>
                    Ne pas utiliser la technique du lien profond effectué vers des fichiers téléchargeables ou
                    exécutables ;
                </li>
                <li>
                    Ne pas utiliser ce site dans un cadre dénaturant son identité visuelle et excluant son
                    identification ;
                </li>
                <li>
                    Ne pas effectuer de lien vers une image ou photographie en l\x27incluant dans une page hors de ce site
                    ;
                </li>
                <li>
                    Ne pas utiliser les informations de ce site à des fins commerciales ou publicitaires.
                </li>
            </ul>
            <h2>Navigation :</h2>
            <p>Ce site a été conçu pour les navigateurs Internet Explorer (à partir de la version 9), Safari, Mozilla
                Firefox et Google Chrome. Pour une navigation optimisée, nous conseillons l\x27emploi de Firefox ou de
                Google Chrome.
            </p>
        </main>
    </div>
{% endblock %}

", "mentions.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\mentions.html.twig");
    }
}
