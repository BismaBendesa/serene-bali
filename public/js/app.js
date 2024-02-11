// Event global
document.addEventListener("DOMContentLoaded", () => {
    const burgerMenu = document.getElementById("burgerButton");
    const mobileMenu = document.getElementById("mobileMenu");
    const rectTop = document.getElementById("rect-top");
    const rectBot = document.getElementById("rect-bottom");
    let click = 0;

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
});
