import Splide from "@splidejs/splide";

// new Splide(".splide").mount();

var elms = document.getElementsByClassName("splide");
for (var i = 0, len = elms.length; i < len; i++) {
    new Splide(elms[i], {
        type: "loop",
        fade: 1,
        speed: 800,
        autoplay: true,
        interval: 3000,
        easing: "ease",
        pauseOnHover: true,
        lazyLoad: "nearby",
    }).mount();
}

const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav");

    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");

        //Burger Animation
        burger.classList.toggle("toggle");
    });
};

navSlide();

let btn = $("#button");

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass("show");
    } else {
        btn.removeClass("show");
    }
});

btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "100");
});

// quiz functions
