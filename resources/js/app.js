import "./bootstrap";

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".menu ul");
const navLinks = document.querySelectorAll(".menu a");
const year = document.querySelector("#year");

allEventListeners();

// Mobile menu
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

// Image slider
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

// Get current year
const getCurrentYear = () => {
    let currentYear = new Date();
    let date = currentYear.getFullYear();
    return (year.innerHTML = `<p class="mt-8 text-xs text-gray-500">© ${date} arch project </p>`);
};

getCurrentYear();
