"use strict";

const fieldContainers = document.querySelectorAll(".field-container");
const fields = document.querySelectorAll(".field");
const container = document.querySelector(".container");
const titles = document.querySelectorAll(".title");
const navBar = document.querySelector(".navbar");
const subNavBar = document.querySelector(".sub-navbar");
const infos = document.querySelectorAll(".info");
const sectionTitle = document.querySelectorAll(".section-title");
const successMsg = document.querySelector(".success-msg");

setTimeout(function () {
  subNavBar.style.left = "0";
  navBar.style.right = "0";

  subNavBar.style.opacity = "1";
  navBar.style.opacity = "0.75";

  titles.forEach((title) => {
    title.style.left = "8rem";
    title.style.opacity = "1";
  });

  sectionTitle.forEach((title) => {
    title.style.left = "5rem";
    title.style.opacity = "1";
  });

  infos.forEach((info) => {
    info.style.left = "8rem";
    info.style.opacity = "1";
  });

  successMsg.style.left = "5rem";
  successMsg.style.opacity = "1";
  
}, 1);
