//slider
const sliderItem = document.querySelectorAll(".slider-item");
for (let index = 0; index < sliderItem.length; index++) {
  sliderItem[index].style.left = index * 100 + "%";
}

const sliderItems = document.querySelector(".slider-items");
const arrowRight = document.querySelector(".ri-arrow-right-fill");
const arrowLeft = document.querySelector(".ri-arrow-left-fill");
let i = 0;

arrowRight.addEventListener("click", () => {
  i++;
  if (i < sliderItem.length) {
    sliderItems.style.left = -i * 100 + "%";
  } else {
    return false;
  }
});

arrowLeft.addEventListener("click", () => {
  if (i <= 0) {
    return false;
  } else {
    i--;
    sliderItems.style.left = -i * 100 + "%";
  }
});
