"use strict";

const hamburger = document.querySelector("[data-hamburger]");
const nav = document.querySelector("[data-nav]");
const navList = document.querySelector("[data-nav-list]");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("open");
  nav.classList.toggle("open");
  navList.classList.toggle("open");
});

const sliderContent = document.querySelector("[data-slider-content]");
const sliderBtns = document.querySelectorAll("[data-slider-btn]");
const sliderWidth = document
  .querySelector("[data-slider]")
  ?.getBoundingClientRect().width;
const sliderContentWidth = sliderContent?.getBoundingClientRect().width;
const sliderItemWidth =
  sliderContent?.children[0].getBoundingClientRect().width;

let scrollProgress = 0;

sliderBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.dataset.sliderBtn === "rigth") {
      scrollProgress += sliderItemWidth;
      if (scrollProgress >= sliderContentWidth - sliderWidth)
        scrollProgress = sliderContentWidth - sliderWidth;
      sliderContent.style.transform = `translateX(-${scrollProgress}px)`;
    }

    if (btn.dataset.sliderBtn === "left") {
      scrollProgress -= sliderItemWidth;
      if (scrollProgress <= 0) scrollProgress = 0;
      sliderContent.style.transform = `translateX(-${scrollProgress}px)`;
    }
  });
});
