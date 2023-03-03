let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function updateItemsNum() {
  var num = 0

  const cart = JSON.parse(localStorage.getItem('xcart'));

  for (var i = 0; i < cart.length; i++) {
      if (cart[i] != null)
          num += cart[i];
  }

  document.getElementById('cartItems').innerHTML = '' + num;
  if (num > 0) {
      document.getElementById('cartItems').style.opacity = 1;
  }
}

updateItemsNum();