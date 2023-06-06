const sliderItems = document.querySelectorAll('.slider-item');
let currentIndex = 0;

function showSliderItem(index) {
  sliderItems.forEach((item, i) => {
    if (i === index) {
      item.classList.add('active');
    } else {
      item.classList.remove('active');
    }
  });
}

function startSlider() {
  setInterval(() => {
    currentIndex = (currentIndex + 1) % sliderItems.length;
    showSliderItem(currentIndex);
  }, 6000);
}

startSlider();
