// Event global
document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.getElementById("burgerButton");
    const mobileMenu = document.getElementById("mobileMenu");
    const rectTop = document.getElementById("rect-top");
    const rectBot = document.getElementById("rect-bottom");
    let click = 0;
    const accordions = document.querySelector(".faqs-accordions");

    burgerMenu.addEventListener("click", () => {
        if (click % 2 == 0) {
            rectTop.setAttribute(
                "style",
                "transform:translateX(0.5rem) rotate(45deg)"
            );
            mobileMenu.classList.toggle("-translate-y-72");
            rectBot.setAttribute(
                "style",
                "transform:translateY(0.75rem) rotate(-45deg) translateX(-0.2rem);"
            );
        } else {
            rectTop.removeAttribute("style");
            rectBot.removeAttribute("style");
            mobileMenu.classList.toggle("-translate-y-72");
        }
        click++;

        // rectBot.classList.toggle("-translate-x-1");
        // rectBot.classList.toggle("-rotate-45");
    });

    accordions.addEventListener("click", (e) => {
        if (e.target.tagName === "BUTTON") {
            e.target.classList.toggle("dark:bg-[#445147]");
            e.target.classList.toggle("bg-[#445147]");
            e.target.classList.toggle("text-white");
            e.target.classList.toggle("bg-white");
            e.target.classList.toggle("bg-gray-100");
            e.target.classList.toggle("text-gray-900");
            e.target.classList.toggle("dark:bg-gray-800");
            e.target.classList.toggle("dark:text-black");
            e.target.classList.toggle("dark:text-gray-400");
        }
    });
});

const carouselData = document.querySelectorAll("[data-carousel-item]");
carouselData.forEach((element) => {
    console.log(element);
});
