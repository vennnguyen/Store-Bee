const menuLi = document.querySelectorAll(
  ".admin-sidebar-content > ul > li > a"
);
const subMenu = document.querySelectorAll(".sub-menu");
for (let index = 0; index < menuLi.length; index++) {
  menuLi[index].addEventListener("click", (e) => {
    e.preventDefault(); //bỏ sự kiện mặc định
    for (let i = 0; i < subMenu.length; i++) {
      subMenu[i].setAttribute("style", "height: 0px");
    }
    const heightMenu =
      menuLi[index].parentNode.querySelector("ul .sub-menu-items").offsetHeight;
    menuLi[index].parentNode
      .querySelector("ul")
      .setAttribute("style", "height:" + heightMenu + "px");
  });
}
