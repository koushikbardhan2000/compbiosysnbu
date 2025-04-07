// Gallery Slider Script
// This script controls the functionality of a simple image gallery slider on about page.
// It allows users to navigate through images manually or automatically.
let slideIndex = 0;
let prevIndex = 0;
const slides = document.getElementsByClassName("gallery-slide");

function showSlide(index, direction = "right") {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].classList.remove("slide-left", "slide-right");
  }

  slides[index].style.display = "block";

  if (direction === "left") {
    slides[index].classList.add("slide-left");
  } else {
    slides[index].classList.add("slide-right");
  }

  prevIndex = slideIndex;
}

function changeSlide(n) {
  const newIndex = (slideIndex + n + slides.length) % slides.length;
  const direction = n > 0 ? "right" : "left";

  slideIndex = newIndex;
  showSlide(slideIndex, direction);
}

// Auto slide
function autoSlide() {
  changeSlide(1);
  setTimeout(autoSlide, 6000); // Change interval if needed
}

// Initialize
window.onload = () => {
  showSlide(slideIndex);
  autoSlide();
};
