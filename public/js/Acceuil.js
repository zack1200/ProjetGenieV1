// Récupérer tous les boutons de couleur

let tailleButtons = document.querySelectorAll('.taille-sample-btn');


// Ajouter un gestionnaire d'événements de clic à chaque bouton de couleur
const colorBtns = document.querySelectorAll('.color-sample-btn');

colorBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const colorId = btn.value;
        const itemId = btn.getAttribute('id').replace('color-sample-btn-', '');
        const selectedColorInput = document.getElementById(`color_id_${itemId}`);
        console.log(`Article: ${itemId}, Couleur sélectionnée: ${colorId}`);
        //selectedColorInput.value = colorId;
    });
});
const tailleBtns = document.querySelectorAll('.taille-sample-btn');

tailleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const tailleId = btn.value;
        const itemId = btn.getAttribute('id').replace('taille-sample-btn-', '');
        const selectedTailleInput = document.getElementById(`taille_id_${itemId}`);
        console.log(`Article: ${itemId}, taille sélectionnée: ${tailleId}`);
        /*selectedColorInput.value = colorId;*/
    });
});
/*
tailleButtons.forEach(button => {
  button.addEventListener('click', function() {
      // Supprimer la classe active de tous les boutons de taille
      tailleButtons.forEach(btn => btn.classList.remove('active'));

      // Ajouter la classe active au bouton cliqué
      this.classList.add('active');

      // Mettre à jour la valeur de l'élément caché avec l'ID de la taille sélectionnée
      
  });
});
/*
const visibleQuantityInput = document.getElementById('qte');
        const hiddenQuantityInput = document.getElementById('hidden-quantity-input');
        visibleQuantityInput.addEventListener('change', () => {
            const selectedQuantity = visibleQuantityInput.value;
            console.log(`Quantité sélectionnée: ${selectedQuantity}`);
            hiddenQuantityInput.value = selectedQuantity;
        });
       /* const buttons = document.querySelectorAll('.taille-sample-btn');
        const selectedTailleInput = document.getElementById('selected-taille');
    
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                selectedTailleInput.value = button.value;
                console.log(`Taille sélectionnée: ${button.value}`);
            });
        });
        const colorBtns = document.querySelectorAll('.color-sample-btn');
        const selectedColorInput = document.getElementById('selected-color');
    
        colorBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const colorId = btn.dataset.value;
                console.log(`Couleur sélectionnée: ${colorId}`);
                selectedColorInput.value = colorId;
            });
        });*/

   




