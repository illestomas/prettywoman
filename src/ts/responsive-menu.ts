import $ from "jquery";

const menuButton = $(".responsive-menu-button button");
const closeMenuButton = $(".responsive-menu-close");
const menu = $(".responsive-menu");
let opened = true;
const menuWidth = menu.width();
const html = $("body");
const main = $(".main");

main.on("click", function (event) {
  if (
    !$(event.target).is(".responsive-menu-button button") &&
    !$(event.target).is(".responsive-menu-button i")
  ) {
    html.animate({ left: 0 }, 300);
    opened = !opened;
  }
});

menuButton.on("click", function () {
  html.animate({ left: opened ? menuWidth : 0 }, 300);
  opened = !opened;
});

closeMenuButton.on("click", function () {
  opened = !opened;
  html.animate({ left: 0 }, 300);
});

$(function () {
  const header = $(".header");

  $(window).scroll(function () {
    const scrollTop = $(window).scrollTop();
    const logoWrapper = $(".logo");
    if (scrollTop && scrollTop > 200) {
      header.addClass("other");
      logoWrapper.addClass("logo-small");
    } else {
      header.removeClass("other");
      logoWrapper.removeClass("logo-small");
    }
  });
});
