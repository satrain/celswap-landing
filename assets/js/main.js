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

let voteBtn = document.querySelector(".vote-btn")

let voteBtnFire = document.querySelector(".vote-btn-fire")
let voteBtnActive = document.querySelector(".vote-btn-fire-active")
let votedBox = document.querySelector(".voted")

voteBtn.addEventListener("click", function () {
    voteBtn.style.background = "linear-gradient(45deg, #3228b5 0%, #151a76 100%)";
    voteBtn.style.transition = ".7s";

    votedBox.classList.add("animateVoted");

    voteBtnFire.classList.remove("vote-btn-fire");
    voteBtnFire.classList.add("vote-btn-fire-active");
})


// Mobile burger

const burger = document.querySelector('.burger')
const navMobile = document.querySelector('.nav-mobile-modal')


burger.onclick = function () {
    header.classList.toggle("flex-end");
    navMobile.classList.toggle("nav-mobile-active");
    celSwapLogo.classList.toggle("hidden");
    burger.classList.toggle("open");
}



// Typography movement
var _el = document.querySelector('.about-typography');
let about = document.querySelector("#about");
_el.addEventListener("mouseover", function () {

    _el.style.top = "0";
    _el.style.left = "0";
    about.addEventListener('mousemove', nutterbutter);
    function nutterbutter(event) {
        _el.style.top = event.clientY + "px";
        _el.style.left = event.clientX + "px";
    }

})
slider = document.querySelector(".prices-slider");
slide = document.querySelectorAll(".slide");




// fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
//     .then(result => result.json()).then(data => {
//         let output = '';
//         data.forEach(function (crypto) {
//             if (crypto.name == "BTC" || crypto.name == "ETH" || crypto.name == "CEL" || crypto.name == "SNX") {
//                 output += `
//                     <li class="splide__slide">
//                     <div class="rates-slide">
//                         <div class="rates-slide-logo">
//                             <div class="btc-logo"></div>
//                             <span class="rates-slide-heading btc-heading">${crypto.name}</span>
//                         </div>
//                         <div class="rates-slide-value">
//                             <div class="rates-value-cel">
//                                 <span class="rates-value-cel-percentage">${(Math.pow(1 + (1 + 0.3) * crypto.interestRate / 52, 52) - 1).toFixed(4) * 100 + "%"}</span>
//                                 <span class="in-cel">in CEL</span>
//                             </div>
//                             <div class="rates-value-in-kind">
//                                 <span class="rates-value-in-kind-percentage">${(Math.pow(1 + (1 + 0) * crypto.interestRate / 52, 52) - 1).toFixed(4) * 100 + "%"}</span>
//                                 <span class="in-kind">in-kind</span>
//                             </div>
//                         </div>
//                     </div>
//                 </li>
//               `;
//             }
//         });
//         document.querySelector("#splide02-list").innerHTML = output;
//     })
//     .catch(err => {
//         console.log(err);
//     });



// fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
//     .then(data => data.json()).then(result => result.forEach(function (user) {
//         console.log(user.custodianTickerSymbol);
//     }))
//     .catch(err => {
//         console.log(err);
//     });


fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
    .then(result => result.json()).then(data => {
        let output = '';
        let cryptoNames = [];
        let aprValues = [];
        data.forEach(function (crypto) {
            if (crypto.name == "BTC" || crypto.name == "ETH" || crypto.name == "CEL" || crypto.name == "SNX") {
                cryptoNames.push(crypto.name);
                aprValues.push(crypto.interestRate);
            }
        });
        for (let i = 0; i < cryptoNames.length; i++) {
            document.querySelectorAll(".rates-slide-heading")[i].innerHTML = cryptoNames[i];
            console.log(cryptoNames.length);
        }
    })
    .catch(err => {
        console.log(err);
    });
