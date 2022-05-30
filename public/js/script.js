// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("aside");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("-translate-x-96");
});
