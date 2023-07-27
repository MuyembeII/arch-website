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

document.addEventListener("alpine:init", () => {
    Alpine.data("imageSlider", () => ({
        currentIndex: 1,
        images: [
            "/images/img1.jpg",
            "/images/img2.jpg",
            "/images/img3.jpg",
            "/images/img4.jpg",
        ],
        previous() {
            if (this.currentIndex > 1) {
                this.currentIndex = this.currentIndex - 1;
            }
        },
        forward() {
            if (this.currentIndex < this.images.length) {
                this.currentIndex = this.currentIndex + 1;
            }
        },
    }));
});
