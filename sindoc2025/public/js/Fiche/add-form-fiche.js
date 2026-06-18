$(document).ready(function (e) {
    $('.add_item_link').click(function (e) {
        e.preventDefault();
        const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
        const item = document.createElement("div");
        item.innerHTML = collectionHolder
        .dataset
        .prototype
        .replace(
          /__name__/g,
          collectionHolder.dataset.index
        );

        const deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.style.cssText = "margin-bottom:1em;float:right;"
        deleteButton.className = 'btn btn-danger remove-mot-cle';
        const minusIcon = document.createElement('i');
        minusIcon.className = 'fas fa-minus'; // Font Awesome minus icon

        // Append the icon to the button
        deleteButton.appendChild(minusIcon);
        deleteButton.addEventListener('click', (e) => {
            e.preventDefault();
            // remove the li for the tag form
            item.remove();
        })
        // Add the delete button to the item
        item.appendChild(deleteButton);
      collectionHolder.appendChild(item);
    
      collectionHolder.dataset.index++;
    });

    function handleRemoveMotCle(event) {
        const button = event.currentTarget; // Get the button that was clicked
        const parentGroup = button.closest('.motClesGroup'); // Find the closest parent with the class 'motClesGroup'

        if (parentGroup) {
            parentGroup.remove(); // Remove the parent element from the DOM
        }
    }

    // Attach event listeners to all existing remove buttons
    document.querySelectorAll('.remove-mot-cle').forEach(function (button) {
        button.addEventListener('click', handleRemoveMotCle);
    });


});