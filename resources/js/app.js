import "./bootstrap";

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu ul");
const navLinks = document.querySelectorAll(".menu a");

allEventListeners();

function allEventListeners() {
    if (hamburger) {
        hamburger.addEventListener("click", togglerClick);
    }
    if (navLinks) {
        navLinks.forEach((elem) =>
            elem.addEventListener("click", navLinkClick)
        );
    }
}

function togglerClick() {
    hamburger.classList.toggle("hamburger-open");
    navMenu.classList.toggle("open");
    console.log("hamburger");
}

function navLinkClick() {
    if (navMenu.classList.contains("open")) {
        hamburger.click();
    }
}
