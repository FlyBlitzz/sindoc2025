<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélection de la liste déroulante
        var select = document.getElementById('pet-select');
        var select1 = document.getElementById('add-item-button');

        // Écouter les changements de sélection
        select.addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var selectedItemValue = selectedOption.value;
            var selectedItemText = selectedOption.textContent.trim();

            // Vérifier si l'option sélectionnée n'est pas l'option par défaut
            if (selectedItemValue !== '') {
                // Créer un nouvel élément pour afficher l'élément sélectionné
                var newItem = document.createElement('div');
                newItem.textContent = selectedItemText;
                newItem.classList.add('selected-item');

                // Ajouter l'élément au conteneur des éléments sélectionnés
                document.getElementById('selected-items').appendChild(newItem);
            }
        });
           // Sélection du bouton 'ET'
              var button = document.getElementById('add-item-button');

              // Écouter les clics sur le bouton
              button.addEventListener('click', function() {
                  // Récupérer la valeur et le texte du bouton
                  var selectedItemValue = this.value;
                  var selectedItemText = this.textContent.trim();

                  // Créer un nouvel élément pour afficher l'élément sélectionné
                  var newItem = document.createElement('div');
                  newItem.textContent = selectedItemText;
                  newItem.classList.add('selected-item');

                  // Ajouter l'élément au conteneur des éléments sélectionnés
                  document.getElementById('selected-items').appendChild(newItem);
              });

            // Sélection du bouton 'ou'
             var button = document.getElementById('add-item-buttonOU');

             // Écouter les clics sur le bouton
             button.addEventListener('click', function() {
                 // Récupérer la valeur et le texte du bouton
                 var selectedItemValue = this.value;
                 var selectedItemText = this.textContent.trim();

                 // Créer un nouvel élément pour afficher l'élément sélectionné
                 var newItem = document.createElement('div');
                 newItem.textContent = selectedItemText;
                 newItem.classList.add('selected-item');

                 // Ajouter l'élément au conteneur des éléments sélectionnés
                 document.getElementById('selected-items').appendChild(newItem);
             });
                 // Sélection du bouton "SUPPRIMER"
                     var deleteButton = document.getElementById('add-item-buttonSupp');

                     // Écouter les clics sur le bouton "SUPPRIMER"
                     deleteButton.addEventListener('click', function() {
                         // Supprimer tous les éléments enfants du conteneur des éléments sélectionnés
                         var selectedItemsContainer = document.getElementById('selected-items');
                         selectedItemsContainer.innerHTML = '';
                     });
    });
</script>
