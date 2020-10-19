let header = document.querySelector("header")
let headerBtn = document.querySelector(".header-btn")
let celSwapLogo = document.querySelector(".celswap-logo")

let prevScrollpos = window.pageYOffset
window.addEventListener("scroll", function () {
    let currentScrollPos = window.pageYOffset
    if (currentScrollPos > 50) {
        header.style.paddingTop = "0";
        header.style.background = "#fff";
        header.style.transition = ".5s";

        headerBtn.style.background = "#0f1e6c";
        headerBtn.style.color = "#fff";
        headerBtn.style.transition = ".5s";

        celSwapLogo.classList.remove("celswap-logo");
        celSwapLogo.classList.add("celswap-logo-onscroll");
    }
    else {
        header.style.paddingTop = "47px";
        header.style.background = "transparent";

        headerBtn.style.background = "transparent";
        headerBtn.style.color = "#0f1e6c";

        celSwapLogo.classList.add("celswap-logo");
        celSwapLogo.classList.remove("celswap-logo-onscroll");
    }
})