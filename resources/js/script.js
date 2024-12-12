const videos = document.querySelectorAll(".hero-video");
let currentVideo = 0;

function switchVideo() {
    videos.forEach((video, index) => {
        video.classList.add("opacity-0");
        video.classList.remove("opacity-100");
    });

    videos[currentVideo].classList.remove("opacity-0");
    videos[currentVideo].classList.add("opacity-100");

    currentVideo = (currentVideo + 1) % videos.length;
}

switchVideo();
setInterval(switchVideo, 5000);

document.addEventListener("DOMContentLoaded", function () {
    // open
    const burger = document.querySelectorAll(".navbar-burger");
    const menu = document.querySelectorAll(".navbar-menu");

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll(".navbar-close");
    const backdrop = document.querySelectorAll(".navbar-backdrop");

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }
});
window.onscroll = function () {
    const scrollButton = document.getElementById("scrollUpBtn");
    if (
        document.body.scrollTop > 100 ||
        document.documentElement.scrollTop > 100
    ) {
        scrollButton.classList.remove("hidden"); // Show button
    } else {
        scrollButton.classList.add("hidden"); // Hide button
    }
};

// Scroll to the top function
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth", // Smooth scrolling
    });
}
const aboutLink = document.getElementById("about-link");
const submenu = document.getElementById("submenu");

aboutLink.addEventListener("mouseover", () => {
    submenu.classList.remove("hidden");
});

aboutLink.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!submenu.matches(":hover")) {
            submenu.classList.add("hidden");
        }
    }, 100);
});

submenu.addEventListener("mouseover", () => {
    submenu.classList.remove("hidden");
});

submenu.addEventListener("mouseleave", () => {
    submenu.classList.add("hidden");
});
