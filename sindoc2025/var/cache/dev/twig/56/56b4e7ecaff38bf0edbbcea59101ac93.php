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

/* _partials/_adminnav.html.twig */
class __TwigTemplate_f5c8adbb233e3e53880facf9048485fa extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_adminnav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_adminnav.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    <style>
        #leftMenu {
            position: fixed;
            top: 0px;
            left: 0;
            height: 100%;
            width: 170px; 
            background-color: rgb(51 ,51 ,51, 0.5);
            padding: 2px;
            padding-top: 160px;
            overflow-y: auto;
            z-index: 1000;
            transition: width 0.3s ease-in-out, padding 0.3s ease-in-out;
            overflow: hidden;
        }

        #leftMenu .card {
            border: none;
            background-color: transparent;
        }

        #leftMenu .card-header {
            display: none; 
        }

        #leftMenu .card-body {
            padding: 0.1rem;
            
        }

        #leftMenu .card-body h6 {
            margin: 0;
        }

        #leftMenu .card-body a {
            display: block;
            text-align: center;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            padding-top: 9px;
            padding-bottom: 12px;
        }

        #leftMenu .card-body a:hover {
            color: #007bff;
        }

        #leftMenu .card-body i {
            font-size: 1.5rem;
            
        }

        .main-content {
            margin-left: 60px;
            padding: 20px;
        }
        .bg {
            color: white;
        }
        #leftMenu.collapsed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }
        #toggleMenuBtn {
            width: 70px;
            margin-left: 20px;
        }
        @media (max-width: 1100px) {
        #toggleMenuBtn {
            width: 50px; 
            margin-left: 200px; 
        }
}

    </style>
</head>
<body>
    <button id=\"toggleMenuBtn\" class=\"btn btn-sm \">
        <i class=\"fas fa-bars fa-2x\"></i> 
    </button>
    <aside id=\"leftMenu\">
        <article class=\"card mb-3\">
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_list");
        yield "\" title=\"Liste des fiches\"><i class=\"fas fa-list bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Liste des fiches</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_list_double");
        yield "\" title=\"Consulter les fiches en double\"><i class=\"fas fa-copy bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Fiches en double</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_list_cachee");
        yield "\" title=\"Consulter les fiches non visibles\"><i class=\"fas fa-eye-slash bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Fiches non visibles</a></h6>
            </div>
        </article>
        <article class=\"card mb-3\">
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_index");
        yield "\" title=\"Liste des utilisateurs\"><i class=\"fas fa-users bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Liste des utilisateurs</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_app_users_validerInsc");
        yield "\" title=\"Consulter les demandes d\x27inscriptions\"><i class=\"fas fa-user-check bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Demandes d\x27inscriptions</a></h6>
            </div>
        </article>
        <article class=\"card mb-3\">
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livre_app_livre_index");
        yield "\" title=\"Gestion des Livres\"><i class=\"fas fa-book bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des livres</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_app_index_index");
        yield "\" title=\"Gestion des Index\"><i class=\"fas fa-indent bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des index</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mot_cle_app_mot_cle_index");
        yield "\" title=\"Gestion des Mots clés\"><i class=\"fas fa-key bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des mots clés</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statut_app_statut_index");
        yield "\" title=\"Gestion des Statuts\"><i class=\"fas fa-tag bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des statuts</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historique_app_historique_index");
        yield "\" title=\"Gestion de l\x27historique\"><i class=\"fas fa-history bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion de l\x27historique</a></h6>
            </div>
        </article>
    </aside>

    <!-- Main Content -->
    <div class=\"main-content\">
        ";
        // line 132
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 133
        yield "    </div>
   
</body>
 <script>
        const toggleMenuBtn = document.getElementById(\x27toggleMenuBtn\x27);
        const leftMenu = document.getElementById(\x27leftMenu\x27);

        toggleMenuBtn.addEventListener(\x27click\x27, () => {
            leftMenu.classList.toggle(\x27collapsed\x27);
            const icon = toggleMenuBtn.querySelector(\x27i\x27);
            if (leftMenu.classList.contains(\x27collapsed\x27)) {
                icon.classList.remove(\x27fa-bars\x27);
                icon.classList.add(\x27fa-chevron-right\x27);
            } else {
                icon.classList.remove(\x27fa-chevron-right\x27);
                icon.classList.add(\x27fa-bars\x27);
            }
        });
    </script>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_adminnav.html.twig";
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
        return array (  244 => 132,  214 => 133,  212 => 132,  202 => 125,  196 => 122,  190 => 119,  184 => 116,  178 => 113,  170 => 108,  164 => 105,  156 => 100,  150 => 97,  144 => 94,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    <style>
        #leftMenu {
            position: fixed;
            top: 0px;
            left: 0;
            height: 100%;
            width: 170px; 
            background-color: rgb(51 ,51 ,51, 0.5);
            padding: 2px;
            padding-top: 160px;
            overflow-y: auto;
            z-index: 1000;
            transition: width 0.3s ease-in-out, padding 0.3s ease-in-out;
            overflow: hidden;
        }

        #leftMenu .card {
            border: none;
            background-color: transparent;
        }

        #leftMenu .card-header {
            display: none; 
        }

        #leftMenu .card-body {
            padding: 0.1rem;
            
        }

        #leftMenu .card-body h6 {
            margin: 0;
        }

        #leftMenu .card-body a {
            display: block;
            text-align: center;
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            padding-top: 9px;
            padding-bottom: 12px;
        }

        #leftMenu .card-body a:hover {
            color: #007bff;
        }

        #leftMenu .card-body i {
            font-size: 1.5rem;
            
        }

        .main-content {
            margin-left: 60px;
            padding: 20px;
        }
        .bg {
            color: white;
        }
        #leftMenu.collapsed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }
        #toggleMenuBtn {
            width: 70px;
            margin-left: 20px;
        }
        @media (max-width: 1100px) {
        #toggleMenuBtn {
            width: 50px; 
            margin-left: 200px; 
        }
}

    </style>
</head>
<body>
    <button id=\"toggleMenuBtn\" class=\"btn btn-sm \">
        <i class=\"fas fa-bars fa-2x\"></i> 
    </button>
    <aside id=\"leftMenu\">
        <article class=\"card mb-3\">
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27fiche_list\x27) }}\" title=\"Liste des fiches\"><i class=\"fas fa-list bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Liste des fiches</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27fiche_list_double\x27) }}\" title=\"Consulter les fiches en double\"><i class=\"fas fa-copy bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Fiches en double</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27fiche_list_cachee\x27) }}\" title=\"Consulter les fiches non visibles\"><i class=\"fas fa-eye-slash bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Fiches non visibles</a></h6>
            </div>
        </article>
        <article class=\"card mb-3\">
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27app_admin_app_users_index\x27) }}\" title=\"Liste des utilisateurs\"><i class=\"fas fa-users bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Liste des utilisateurs</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27app_admin_app_users_validerInsc\x27) }}\" title=\"Consulter les demandes d\x27inscriptions\"><i class=\"fas fa-user-check bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Demandes d\x27inscriptions</a></h6>
            </div>
        </article>
        <article class=\"card mb-3\">
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27app_livre_app_livre_index\x27) }}\" title=\"Gestion des Livres\"><i class=\"fas fa-book bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des livres</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27index_app_index_index\x27) }}\" title=\"Gestion des Index\"><i class=\"fas fa-indent bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des index</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27mot_cle_app_mot_cle_index\x27) }}\" title=\"Gestion des Mots clés\"><i class=\"fas fa-key bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des mots clés</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27statut_app_statut_index\x27) }}\" title=\"Gestion des Statuts\"><i class=\"fas fa-tag bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion des statuts</a></h6>
            </div>
            <div class=\"card-body\">
                <h6><a href=\"{{ path(\x27historique_app_historique_index\x27) }}\" title=\"Gestion de l\x27historique\"><i class=\"fas fa-history bg\" style=\"font-size: clamp(1rem, 3vw, 1.5rem); float: left;\"></i>Gestion de l\x27historique</a></h6>
            </div>
        </article>
    </aside>

    <!-- Main Content -->
    <div class=\"main-content\">
        {% block content %}{% endblock %}
    </div>
   
</body>
 <script>
        const toggleMenuBtn = document.getElementById(\x27toggleMenuBtn\x27);
        const leftMenu = document.getElementById(\x27leftMenu\x27);

        toggleMenuBtn.addEventListener(\x27click\x27, () => {
            leftMenu.classList.toggle(\x27collapsed\x27);
            const icon = toggleMenuBtn.querySelector(\x27i\x27);
            if (leftMenu.classList.contains(\x27collapsed\x27)) {
                icon.classList.remove(\x27fa-bars\x27);
                icon.classList.add(\x27fa-chevron-right\x27);
            } else {
                icon.classList.remove(\x27fa-chevron-right\x27);
                icon.classList.add(\x27fa-bars\x27);
            }
        });
    </script>
</html>", "_partials/_adminnav.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\_partials\\_adminnav.html.twig");
    }
}
