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

/* sav_requete/js/index.js */
class __TwigTemplate_47dfcae318feb2bca93258ce29d5adf3 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sav_requete/js/index.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sav_requete/js/index.js"));

        // line 1
        yield "<script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        // Sélection de la liste déroulante
        var select = document.getElementById(\x27pet-select\x27);
        var select1 = document.getElementById(\x27add-item-button\x27);

        // Écouter les changements de sélection
        select.addEventListener(\x27change\x27, function() {
            var selectedOption = this.options[this.selectedIndex];
            var selectedItemValue = selectedOption.value;
            var selectedItemText = selectedOption.textContent.trim();

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sav_requete/js/index.js";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
    document.addEventListener(\x27DOMContentLoaded\x27, function() {
        // Sélection de la liste déroulante
        var select = document.getElementById(\x27pet-select\x27);
        var select1 = document.getElementById(\x27add-item-button\x27);

        // Écouter les changements de sélection
        select.addEventListener(\x27change\x27, function() {
            var selectedOption = this.options[this.selectedIndex];
            var selectedItemValue = selectedOption.value;
            var selectedItemText = selectedOption.textContent.trim();

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
", "sav_requete/js/index.js", "D:\\nvillard\\Mes documents\\sindoc2025\\sindoc2025\\templates\\sav_requete\\js\\index.js");
    }
}
