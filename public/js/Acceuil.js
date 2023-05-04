// Récupérer tous les boutons de couleur
let colorButtons = document.querySelectorAll('.color-sample-btn');
let tailleButtons = document.querySelectorAll('.taille-sample-btn');

// Ajouter un gestionnaire d'événements de clic à chaque bouton de couleur
colorButtons.forEach(button => {
  button.addEventListener('click', function() {
    // Supprimer la classe active de tous les boutons de couleur
    colorButtons.forEach(btn => btn.classList.remove('active'));

    // Ajouter la classe active au bouton cliqué
    this.classList.add('active');
  });
});

// Ajouter un gestionnaire d'événements de clic à chaque bouton de couleur
tailleButtons.forEach(button => {
  button.addEventListener('click', function() {
    // Supprimer la classe active de tous les boutons de couleur
    tailleButtons.forEach(btn => btn.classList.remove('active'));

    // Ajouter la classe active au bouton cliqué
    this.classList.add('active');
  });
});

function increment() {
  var input = document.getElementById("max_items");
  var currentValue = parseInt(input.value);

  if (currentValue < parseInt(input.max)) {
    input.value = currentValue + 1;
  }
}

function decrement() {
  var input = document.getElementById("max_items");
  var currentValue = parseInt(input.value);

  if (currentValue > parseInt(input.min)) {
    input.value = currentValue - 1;
  }
}




