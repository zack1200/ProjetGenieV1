const sliderContainer = document.querySelector('.slider-container');
const prevBtn = document.querySelector('.prevBtn');
const nextBtn = document.querySelector('.nextBtn');
const slides = sliderContainer.querySelectorAll('img');
const totalSlides = slides.length;
let slideIndex = 0;
let autoSlideInterval;

// Afficher l'image actuelle
function showSlide(index) {
  sliderContainer.style.transform = `translateX(-${index * 25}%)`;
}

// Fonction pour faire défiler l'image suivante
function nextSlide() {
  slideIndex++;
  if (slideIndex === totalSlides) {
    slideIndex = 0;
  }
  showSlide(slideIndex);
}

// Fonction pour faire défiler l'image précédente
function prevSlide() {
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = totalSlides - 1;
  }
  showSlide(slideIndex);
}

// Écouter les clics sur les boutons
nextBtn.addEventListener('click', () => {
  nextSlide();
  clearInterval(autoSlideInterval);
});

prevBtn.addEventListener('click', () => {
  prevSlide();
  clearInterval(autoSlideInterval);
});

// Faire défiler automatiquement toutes les 5 secondes
autoSlideInterval = setInterval(() => {
  nextSlide();
}, 5000);

 // Récupérer les éléments de l'interface utilisateur
 var colorOptions = document.querySelectorAll('.color-option');
 var sizeOptions = document.querySelectorAll('.size-option');
 var form = document.getElementById('shirt-form');

 // Ajouter des écouteurs d'événements aux éléments de l'interface utilisateur
 colorOptions.forEach(function(colorOption) {
   colorOption.addEventListener('click', function(event) {
     colorOptions.forEach(function(colorOption) {
       colorOption.classList.remove('selected');
     });
     event.target.classList.add('selected');
   });
 });

 sizeOptions.forEach(function(sizeOption) {
   sizeOption.addEventListener('click', function(event) {
     sizeOptions.forEach(function(sizeOption) {
       sizeOption.classList.remove('selected');
     });
     event.target.classList.add('selected');
   });
 });

 form.addEventListener('submit', function(event) {
   event.preventDefault();
   var color = document.querySelector('.color-option.selected').id;
   var size = document.querySelector('.size-option.selected').textContent;
   console.log('Couleur sélectionnée:', color);
   console.log('Taille sélectionnée:', size);
 });






  
  

