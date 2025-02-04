<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @vite('resources/css/app.css') -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ইভেন্টাস | Gallery</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


</head>
<style>
    .agro-text {
        font-family: Arial, sans-serif;
        font-size: 150px;
        font-weight: bold;
        background-image: url('https://imgix-prod.sgs.com/-/media/sgscorp/images/temporary/golden-wheat-grass.cdn.en-PH.1.jpg?fit=crop&auto=format&crop=focalpoint&fp-x=0.35&fp-y=0.6&fp-z=1&w=645&h=403');
        /* Use the path of your image here */
        background-size: cover;
        background-position: center;
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        text-align: center;
        line-height: 1;
        margin-bottom: 10px;
    }

    .hero-video {
        transition: opacity 1.5s ease-in-out;
    }

    .opacity-100 {
        opacity: 1 !important;
    }

    .component {
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    }

    blockquote {
        background:
            linear-gradient(to right, #039be5 6px, transparent 4px) 0 100%,
            linear-gradient(to left, #039be5 6px, transparent 4px) 100% 0,
            linear-gradient(to bottom, #039be5 6px, transparent 4px) 100% 0,
            linear-gradient(to top, #039be5 6px, transparent 4px) 0 100%;
        background-repeat: no-repeat;
        background-size: 20px 20px;
    }

    blockquote:before,
    blockquote:after {
        font-family: FontAwesome;
        position: absolute;
        color: #039be5;
        font-size: 34px;
    }

    blockquote:before {
        content: "\f10d";
        top: -12px;
        margin-right: -20px;
        right: 100%;
    }

    blockquote:after {
        content: "\f10e";
        margin-left: -20px;
        left: 100%;
        top: auto;
        bottom: -20px;
    }
</style>

<body>
    <div class="">
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50"
            style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    @include('partials.nav')

    <section
        class="relative h-96 md:h-[500px] lg:h-[600px] mt-2 w-full flex items-center justify-start bg-black text-white overflow-hidden"
        style="display: none;">
        <!-- Video Container -->
        <div class="absolute inset-0 h-full w-full overflow-hidden z-0">
            <!-- Videos -->
            <video class="hero-video absolute top-0 left-0 h-full w-full object-cover opacity-0" autoplay muted loop>
                <source src="/vid/vid2.mp4" type="video/mp4">
            </video>
            <video class="hero-video absolute top-0 left-0 h-full w-full object-cover opacity-0" autoplay muted loop>
                <source src="/vid/vid3.mp4" type="video/mp4">
            </video>
            <video class="hero-video absolute top-0 left-0 h-full w-full object-cover opacity-0" autoplay muted loop>
                <source src="/vid/vid1.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Text Content -->
        <div class="relative z-10 text-left ml-6 md:ml-10 lg:ml-20 p-5 md:p-8 lg:p-12 bg-opacity-25 rounded-xl backdrop-blur-sm"
            style="background: rgb(0 0 0 / 62%);border: 1px solid rgba(0, 0, 0, 0.3);">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Plant Tour: The <br> Journey
                from molecule to field</h1>
            <a href="/about"
                class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 md:py-3 md:px-6 rounded-lg text-lg md:text-xl">Learn
                More</a>
        </div>
    </section>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6 mb-6">
        @foreach($galleryImages as $image)
            <div class="relative">
                <img class="w-full h-64 object-contain rounded-lg cursor-pointer"
                    src="{{ asset('img/gallery/' . $image->img) }}" alt="Image"
                    data-image="{{ asset('img/gallery/' . $image->img) }}" onclick="openModal(this)">
            </div>
        @endforeach
    </div>


    <!-- Modal for displaying larger image -->
    <div id="imageModal" class="fixed inset-0 bg-gray-700 bg-opacity-75 hidden justify-center items-center z-50"
        onclick="closeModal()">
        <div class="flex justify-center items-center h-full">
            <img id="modalImage" class="max-w-full max-h-full object-contain" src="" alt="Modal Image">
        </div>
    </div>

    <!-- Content -->

    @include('partials.footer')

</body>

</html>


<script>
    function openModal(imageElement) {
        var imageSrc = imageElement.getAttribute("data-image");
        var modalImage = document.getElementById("modalImage");
        modalImage.src = imageSrc;
        document.getElementById("imageModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("imageModal").classList.add("hidden");
    }
    const videos = document.querySelectorAll('.hero-video');
    let currentVideo = 0;

    function switchVideo() {
        videos.forEach((video, index) => {
            video.classList.add('opacity-0');
            video.classList.remove('opacity-100');
        });

        videos[currentVideo].classList.remove('opacity-0');
        videos[currentVideo].classList.add('opacity-100');

        currentVideo = (currentVideo + 1) % videos.length;
    }

    switchVideo();
    setInterval(switchVideo, 5000);

    document.addEventListener('DOMContentLoaded', function () {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function () {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function () {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function () {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
    window.onscroll = function () {
        const scrollButton = document.getElementById('scrollUpBtn');
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollButton.classList.remove('hidden'); // Show button
        } else {
            scrollButton.classList.add('hidden'); // Hide button
        }
    };

    // Scroll to the top function
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scrolling
        });
    }
    const aboutLink = document.getElementById('about-link');
    const submenu = document.getElementById('submenu');

    aboutLink.addEventListener('mouseover', () => {
        submenu.classList.remove('hidden');
    });

    aboutLink.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!submenu.matches(':hover')) {
                submenu.classList.add('hidden');
            }
        }, 100);
    });

    submenu.addEventListener('mouseover', () => {
        submenu.classList.remove('hidden');
    });

    submenu.addEventListener('mouseleave', () => {
        submenu.classList.add('hidden');
    });
</script>
