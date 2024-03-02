//Carrusel Ofertas
const carousel = document.getElementById('product-carousel');
let currentIndex = 0;
const itemWidth = document.querySelector('.product-item').offsetWidth;

function nextSlide() {
  currentIndex = (currentIndex + 4) % 8;
  updateCarousel();
}

function prevSlide() {
  currentIndex = (currentIndex - 4 + 8) % 8;
  updateCarousel();
}

function updateCarousel() {
  const translateXValue = -currentIndex * itemWidth;
  carousel.style.transform = `translateX(${translateXValue}px)`;
}


//Promociones
function expandirDescripcion(elemento) {
  var descripcion = elemento.querySelector('.descripcionPromocion');
  descripcion.style.display = (descripcion.style.display === 'none' || descripcion.style.display === '') ? 'block' : 'none';
}

function deshabilitaRetroceso() {
  window.location.hash="no-back-button";
  window.location.hash="Again-No-back-button"; // Para Chrome
  window.onhashchange = function() {
      window.location.hash="no-back-button";
  }
}