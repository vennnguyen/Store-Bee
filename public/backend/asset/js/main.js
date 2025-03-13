//slider
const sliderItem = document.querySelectorAll(".slider-item");
for (let index = 0; index < sliderItem.length; index++) {
  sliderItem[index].style.left = index * 100 + "%";
}

const sliderItems = document.querySelector(".slider-items");
const arrowRight = document.querySelector(".ri-arrow-right-fill");
const arrowLeft = document.querySelector(".ri-arrow-left-fill");
let i = 0;
if (arrowRight != null && arrowLeft != null) {
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
}

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

//click product img
const imgSmall = document.querySelectorAll(".product-detail__left-img img");
const mainImg = document.querySelector("#main-img");
for (let index = 0; index < imgSmall.length; index++) {
  imgSmall[index].addEventListener("click", () => {
    for (let a = 0; a < imgSmall.length; a++) {
      imgSmall[a].classList.remove("active");
    }
    mainImg.src = imgSmall[index].src;
    imgSmall[index].classList.add("active");
  });
}
//add-minus quality
const btnMinus = document.querySelector(".ri-subtract-line");
const btnAdd = document.querySelector(".ri-add-line");
const value = document.querySelector(".right-quantity__min-max input");
btnAdd.addEventListener("click", () => {
  value.value++;
});

btnMinus.addEventListener("click", () => {
  if (value.value < 0) {
    return false;
  } else {
    value.value--;
  }
});
