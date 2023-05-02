// Récupérer tous les boutons de couleur
let colorButtons = document.querySelectorAll('.color-sample-btn');

// Ajouter un gestionnaire d'événements de clic à chaque bouton de couleur
colorButtons.forEach(button => {
  button.addEventListener('click', function() {
    // Supprimer la classe active de tous les boutons de couleur
    colorButtons.forEach(btn => btn.classList.remove('active'));

    // Ajouter la classe active au bouton cliqué
    this.classList.add('active');
  });
});
$(document).ready(function() {
  $('.taille-sample-btn').click(function() {
    // Désactive toutes les tailles
    $('.taille-sample-btn').removeClass('active');
    // Active la taille sélectionnée
    $(this).addClass('active');
    // Met à jour la valeur sélectionnée
    $('#selected-taille').val($(this).data('value'));
  });
});


