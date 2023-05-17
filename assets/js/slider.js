var index = 1;
show_image(index);

function plusSlides(n) {
    show_image(index += n);
  }
  // Thumbnail image controls
  function currentSlide(n) {
    show_image(index = n);
  }
  function show_image(n) {
    let i;
    let slides = document.getElementsByClassName("image");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {index = 1}
    if (n < 1) {index = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";
    dots[index-1].className += " active";
  }
  
  
