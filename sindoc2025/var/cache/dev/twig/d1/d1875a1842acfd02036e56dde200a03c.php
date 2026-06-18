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

/* sav_requete/index.html.twig */
class __TwigTemplate_2428ac1eddcb25669f38e380acf590fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sav_requete/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sav_requete/index.html.twig"));

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

        yield "SavRequete index";
        
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
       ";
        // line 8
        yield "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <style>
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
            bottom: 50%; /* Position above the link */
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
            z-index:9999;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        .tooltip-link:hover::after {
            opacity: 1;
            visibility: visible;
        }
        /* Ensure table allows overflow */
#savRequeteTable {
    position: relative;
    overflow: visible !important;
}
thead{
    z-index:-1;
}
        </style>
</head>
       <div class=\"card-body classs w-75\">
    <div class=\"table-responsive\">
    <h1>Liste des requêtes</h1>
    <table id=\"savRequeteTable\" class=\"table table-hover table-borderless\" >
    <thead>
        <tr>
            <th>Nom de la requête</th>
            <th>Date de création</th>
            <th>Heure de création</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>
</div>
</div>
<script>
\$(document).ready(function () {
    \$(\x27#savRequeteTable\x27).DataTable({
        responsive: true,
       language: {
        \"sProcessing\": \"Traitement en cours...\",
        \"sSearch\": \"Rechercher :\",
        \"sLengthMenu\": \"Afficher _MENU_ éléments\",
        \"sInfo\": \"Affichage de _START_ à _END_ sur _TOTAL_ éléments\",
        \"sInfoEmpty\": \"Affichage de 0 à 0 sur 0 élément\",
        \"sInfoFiltered\": \"(filtré de _MAX_ éléments au total)\",
        \"sLoadingRecords\": \"Chargement en cours...\",
        \"sZeroRecords\": \"Aucun élément correspondant trouvé\",
        \"sEmptyTable\": \"Aucune donnée disponible dans le tableau\",
        \"oPaginate\": {
            \"sFirst\": \"Premier\",
            \"sPrevious\": \"Précédent\",
            \"sNext\": \"Suivant\",
            \"sLast\": \"Dernier\"
        },
        \"oAria\": {
            \"sSortAscending\": \": activer pour trier la colonne par ordre croissant\",
            \"sSortDescending\": \": activer pour trier la colonne par ordre décroissant\"
        }
    },
         scrollX: true, // Enables horizontal scrolling
    autoWidth: false, // Prevents automatic width adjustment
        ajax: \"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("savreq_app_sav_requete_index");
        yield "\", // Fetch data from Symfony controller
        columns: [
            { data: \x27nomRequete\x27, title: \x27Nom Requête\x27 },
            { data: \x27createDate\x27, title: \x27Date de Création\x27 },
            { data: \x27heure\x27, title: \x27Heure\x27 },
            { data: \x27actions\x27, title: \x27Actions\x27, orderable: false, searchable: false }
        ]
    });
});

</script>
    <script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        var flashMessage = document.querySelector(\x27.alert\x27);
        // console.log(flashMessage)
        if (flashMessage) {

            setTimeout(function() {
                flashMessage.style.display = \x27none\x27;
            }, 2000); 
        }
    });
</script>
<script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        // Sélection de la liste déroulante
        var select = document.getElementById(\x27pet-select\x27);
        var select1 = document.getElementById(\x27add-item-button\x27);

        // Écouter les changements de sélection
        select.addEventListener(\x27change\x27, function() {
            var selectedOption = this.options[this.selectedIndex];
            var selectedItemValue = selectedOption.value;
            var selectedItemText = selectedOption.textContent.trim();
            alert(selectedOption)
            // Vérifier si l\x27option sélectionnée n\x27est pas l\x27option par défaut
            if (selectedItemValue !== \x27\x27) {
                // Créer un nouvel élément pour afficher l\x27élément sélectionné
                var newItem = document.createElement(\x27div\x27);
                newItem.textContent = selectedItemText;
                newItem.classList.add(\x27selected-item\x27);

                // Ajouter l\x27élément au conteneur des éléments sélectionnés
                document.getElementById(\x27selected-items\x27).appendChild(newItem);
            }
        });
           // Sélection du bouton \x27ET\x27
              var button = document.getElementById(\x27add-item-button\x27);

              // Écouter les clics sur le bouton
              button.addEventListener(\x27click\x27, function() {
                  // Récupérer la valeur et le texte du bouton
                  var selectedItemValue = this.value;
                  var selectedItemText = this.textContent.trim();

                  // Créer un nouvel élément pour afficher l\x27élément sélectionné
                  var newItem = document.createElement(\x27div\x27);
                  newItem.textContent = selectedItemText;
                  newItem.classList.add(\x27selected-item\x27);

                  // Ajouter l\x27élément au conteneur des éléments sélectionnés
                  document.getElementById(\x27selected-items\x27).appendChild(newItem);
              });

            // Sélection du bouton \x27ou\x27
             var button = document.getElementById(\x27add-item-buttonOU\x27);

             // Écouter les clics sur le bouton
             button.addEventListener(\x27click\x27, function() {
                 // Récupérer la valeur et le texte du bouton
                 var selectedItemValue = this.value;
                 var selectedItemText = this.textContent.trim();

                 // Créer un nouvel élément pour afficher l\x27élément sélectionné
                 var newItem = document.createElement(\x27div\x27);
                 newItem.textContent = selectedItemText;
                 newItem.classList.add(\x27selected-item\x27);

                 // Ajouter l\x27élément au conteneur des éléments sélectionnés
                 document.getElementById(\x27selected-items\x27).appendChild(newItem);
             });
                 // Sélection du bouton \"SUPPRIMER\"
                     var deleteButton = document.getElementById(\x27add-item-buttonSupp\x27);

                     // Écouter les clics sur le bouton \"SUPPRIMER\"
                     deleteButton.addEventListener(\x27click\x27, function() {
                         // Supprimer tous les éléments enfants du conteneur des éléments sélectionnés
                         var selectedItemsContainer = document.getElementById(\x27selected-items\x27);
                         selectedItemsContainer.innerHTML = \x27\x27;
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
        return "sav_requete/index.html.twig";
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
        return array (  191 => 94,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}SavRequete index{% endblock %}

{% block body %}
<head>
       {# <link rel=\"stylesheet\" href=\"{{ asset(\x27css/ajoutFiche.css\x27) }}\"> #}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\">
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <style>
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
            bottom: 50%; /* Position above the link */
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
            z-index:9999;
            transition: opacity 0.3s, visibility 0.3s;
        }

        /* Show tooltip on hover */
        .tooltip-link:hover::after {
            opacity: 1;
            visibility: visible;
        }
        /* Ensure table allows overflow */
#savRequeteTable {
    position: relative;
    overflow: visible !important;
}
thead{
    z-index:-1;
}
        </style>
</head>
       <div class=\"card-body classs w-75\">
    <div class=\"table-responsive\">
    <h1>Liste des requêtes</h1>
    <table id=\"savRequeteTable\" class=\"table table-hover table-borderless\" >
    <thead>
        <tr>
            <th>Nom de la requête</th>
            <th>Date de création</th>
            <th>Heure de création</th>
            <th>Actions</th>
        </tr>
    </thead>
</table>
</div>
</div>
<script>
\$(document).ready(function () {
    \$(\x27#savRequeteTable\x27).DataTable({
        responsive: true,
       language: {
        \"sProcessing\": \"Traitement en cours...\",
        \"sSearch\": \"Rechercher :\",
        \"sLengthMenu\": \"Afficher _MENU_ éléments\",
        \"sInfo\": \"Affichage de _START_ à _END_ sur _TOTAL_ éléments\",
        \"sInfoEmpty\": \"Affichage de 0 à 0 sur 0 élément\",
        \"sInfoFiltered\": \"(filtré de _MAX_ éléments au total)\",
        \"sLoadingRecords\": \"Chargement en cours...\",
        \"sZeroRecords\": \"Aucun élément correspondant trouvé\",
        \"sEmptyTable\": \"Aucune donnée disponible dans le tableau\",
        \"oPaginate\": {
            \"sFirst\": \"Premier\",
            \"sPrevious\": \"Précédent\",
            \"sNext\": \"Suivant\",
            \"sLast\": \"Dernier\"
        },
        \"oAria\": {
            \"sSortAscending\": \": activer pour trier la colonne par ordre croissant\",
            \"sSortDescending\": \": activer pour trier la colonne par ordre décroissant\"
        }
    },
         scrollX: true, // Enables horizontal scrolling
    autoWidth: false, // Prevents automatic width adjustment
        ajax: \"{{ path(\x27savreq_app_sav_requete_index\x27) }}\", // Fetch data from Symfony controller
        columns: [
            { data: \x27nomRequete\x27, title: \x27Nom Requête\x27 },
            { data: \x27createDate\x27, title: \x27Date de Création\x27 },
            { data: \x27heure\x27, title: \x27Heure\x27 },
            { data: \x27actions\x27, title: \x27Actions\x27, orderable: false, searchable: false }
        ]
    });
});

</script>
    <script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        var flashMessage = document.querySelector(\x27.alert\x27);
        // console.log(flashMessage)
        if (flashMessage) {

            setTimeout(function() {
                flashMessage.style.display = \x27none\x27;
            }, 2000); 
        }
    });
</script>
<script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        // Sélection de la liste déroulante
        var select = document.getElementById(\x27pet-select\x27);
        var select1 = document.getElementById(\x27add-item-button\x27);

        // Écouter les changements de sélection
        select.addEventListener(\x27change\x27, function() {
            var selectedOption = this.options[this.selectedIndex];
            var selectedItemValue = selectedOption.value;
            var selectedItemText = selectedOption.textContent.trim();
            alert(selectedOption)
            // Vérifier si l\x27option sélectionnée n\x27est pas l\x27option par défaut
            if (selectedItemValue !== \x27\x27) {
                // Créer un nouvel élément pour afficher l\x27élément sélectionné
                var newItem = document.createElement(\x27div\x27);
                newItem.textContent = selectedItemText;
                newItem.classList.add(\x27selected-item\x27);

                // Ajouter l\x27élément au conteneur des éléments sélectionnés
                document.getElementById(\x27selected-items\x27).appendChild(newItem);
            }
        });
           // Sélection du bouton \x27ET\x27
              var button = document.getElementById(\x27add-item-button\x27);

              // Écouter les clics sur le bouton
              button.addEventListener(\x27click\x27, function() {
                  // Récupérer la valeur et le texte du bouton
                  var selectedItemValue = this.value;
                  var selectedItemText = this.textContent.trim();

                  // Créer un nouvel élément pour afficher l\x27élément sélectionné
                  var newItem = document.createElement(\x27div\x27);
                  newItem.textContent = selectedItemText;
                  newItem.classList.add(\x27selected-item\x27);

                  // Ajouter l\x27élément au conteneur des éléments sélectionnés
                  document.getElementById(\x27selected-items\x27).appendChild(newItem);
              });

            // Sélection du bouton \x27ou\x27
             var button = document.getElementById(\x27add-item-buttonOU\x27);

             // Écouter les clics sur le bouton
             button.addEventListener(\x27click\x27, function() {
                 // Récupérer la valeur et le texte du bouton
                 var selectedItemValue = this.value;
                 var selectedItemText = this.textContent.trim();

                 // Créer un nouvel élément pour afficher l\x27élément sélectionné
                 var newItem = document.createElement(\x27div\x27);
                 newItem.textContent = selectedItemText;
                 newItem.classList.add(\x27selected-item\x27);

                 // Ajouter l\x27élément au conteneur des éléments sélectionnés
                 document.getElementById(\x27selected-items\x27).appendChild(newItem);
             });
                 // Sélection du bouton \"SUPPRIMER\"
                     var deleteButton = document.getElementById(\x27add-item-buttonSupp\x27);

                     // Écouter les clics sur le bouton \"SUPPRIMER\"
                     deleteButton.addEventListener(\x27click\x27, function() {
                         // Supprimer tous les éléments enfants du conteneur des éléments sélectionnés
                         var selectedItemsContainer = document.getElementById(\x27selected-items\x27);
                         selectedItemsContainer.innerHTML = \x27\x27;
                     });
    });
</script>

{% endblock%}", "sav_requete/index.html.twig", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\sav_requete\\index.html.twig");
    }
}
