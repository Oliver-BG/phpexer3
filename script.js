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

setTimeout(() => {
  //TODO
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

for (let i = 1980; 2023 > i; i++) {
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
