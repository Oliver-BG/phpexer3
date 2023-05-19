"use strict";

import countryList from "./country.js";

const month = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const btnAgree = document.getElementById("btn-agree");
const bdayDD = document.querySelectorAll(".dd-bday-dd");
const bdayMM = document.querySelectorAll(".dd-bday-mm");
const bdayYYYY = document.querySelectorAll(".dd-bday-yyyy");
const countryDD = document.querySelector(".dd-country");
const fieldContainers = document.querySelectorAll(".field-container");
const depTitles = document.querySelectorAll(".dep-title");
const fieldTitles = document.querySelectorAll(".field-title");
const container = document.querySelector(".container");
const subTitles = document.querySelectorAll(".subtitle");
const navBar = document.querySelector(".navbar");
const subNavBar = document.querySelector(".sub-navbar");

setTimeout(() => {
  fieldContainers.forEach((fc) => {
    fc.style.opacity = "1";
  });

  navBar.style.right = "0";
  subNavBar.style.left = "0";

  navBar.style.opacity = "0.75";
  subNavBar.style.opacity = "1";

  subTitles.forEach((st) => {
    st.style.left = "0";
  });

  depTitles.forEach((h) => {
    h.style.left = "8rem";
    h.style.opacity = "1";
  });

  fieldTitles.forEach((title) => {
    title.style.right = "0";
  });
}, 1);

for (let i = 0; 30 > i; i++) {
  let option = `<option value = ${i + 1}> ${i + 1} </option>`;
  bdayDD.forEach((d) => {
    d.innerHTML += option;
  });
}

month.forEach((m) => {
  let option = `<option value = ${m}> ${m} </option>`;
  bdayMM.forEach((mm) => {
    mm.innerHTML += option;
  });
});

for (let i = 1950; 2023 > i; i++) {
  let option = `<option value = ${i + 1}> ${i + 1} </option>`;
  bdayYYYY.forEach((yyyy) => {
    yyyy.innerHTML += option;
  });
}

countryList.forEach((c) => {
  let name = c.replace("(the)", "");
  let option = `<option value = ${name}> ${name} </option>`;
  countryDD.innerHTML += option;
});
