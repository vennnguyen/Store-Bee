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
  if (i < sliderItem.length - 1) {
    i++;
    sliderMove(i);
    return false;
  }
});

arrowLeft.addEventListener("click", () => {
  if (i <= 0) {
    return false;
  } else {
    i--;
    sliderMove(i);
  }
});

// slider auto
function autoSlider() {
  if (i < sliderItem.length - 1) {
    i++;
    sliderMove(i);
  } else {
    i = 0;
    sliderMove(i);
  }
}
function sliderMove(i) {
  sliderItems.style.left = -i * 100 + "%";
}
setInterval(autoSlider, 5000);

// menubar responsive
const menuBar = document.querySelector(".header-bar-icon");
const headerNav = document.querySelector(".header__nav");
menuBar.addEventListener("click", () => {
  headerNav.classList.toggle("active");
});
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".group-img").forEach((group) => {
    let firstImg = group.querySelector("img:first-child");
    if (firstImg) {
      let imgSrc = firstImg.getAttribute("src");
      let link = document.createElement("a");
      link.setAttribute("href", imgSrc);
      link.appendChild(firstImg.cloneNode(true));
      firstImg.replaceWith(link);
    }
  });
});

//sticky header
window.addEventListener("scroll", () => {
  if (scrollY > 70) {
    const header = document.querySelector("#header");
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});
