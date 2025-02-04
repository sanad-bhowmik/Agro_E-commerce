<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @vite('resources/css/app.css') -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ইভেন্টাস</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    @include('partials.nav')

    <div class="">
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50"
            style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    @include('components.slider')

    <section class="w-full  text-center  py-12 ">
        <h2 class="text-xl md:text-3xl  text-red-400 mb-4">পরিচয়</h2>
        <p class="text-gray-700 text-sm md:text-base leading-relaxed " id="intro">
            ইভেন্টাস, বাংলাদেশের প্রথম সারির কৃষি বানিজ্যিক প্রতিষ্ঠানের মধ্যে অন্যতম একটি নাম। ২০০৪ সালে যাত্রা শুরু
            আমাদের।
            কৃষকের সেবা ও কৃষির উন্নয়নে সুদূর প্রসারি মানসম্পন্ন পণ্য সরবারহ করে ইতোমধ্যে কৃষকের হৃদয়ে জায়গা করে
            নিয়েছে ইভেন্টাস
            কল্যাণে অঙ্গীকারবদ্ধ - এই মূলমন্ত্রে উদ্বুদ্ধিত হয়ে বাংলাদেশের কৃষকের উন্নতির জন্য প্রতিনিয়ত কাজ করে যাচ্ছে
            ইভেন্টাস
            আমাদের লক্ষ্য আধুনিক ও মানসম্পন্ন পরিবেশবান্ধব পণ্য সরবারহের মাধ্যমে কৃষক ভাইদের আশানুরূপ ফলন নিশ্চিত করা।
        </p>
        <div class="mt-6">
            <a href="#"
                class="px-6 py-2 border border-red-600 text-black font-semibold rounded-lg hover:bg-red-600 hover:text-white transition">
                সম্পূর্ণ পড়ুন
            </a>
        </div>
    </section>
    @include('partials.cards')

    <section class="relative bg-[#474747] text-white text-center py-20 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl  mb-4">কল্যাণে অঙ্গীকারবদ্ধ</h2>
            <p class="text-sm md:text-lg" id="kollan">
                সর্বোচ্চ সেরা প্রদানের উদ্দেশ্য নিয়ে আমাদের যাত্রা চলছে অবিরত। আমাদের সক্ষমতার পেছনে রয়েছেন ইনটেকের
                পরিবারের সদস্য হিসেবে কঠোর কাঠি মিলিয়ে কাজ করা কর্মজীবী,
                স্টাফ, রিটেইলার এবং চাষীদের নিরলস প্রচেষ্টা।
            </p>
        </div>

        <!-- Bottom Arrow Shape -->
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-6 bg-white clip-triangle"></div>
    </section>

    <style>
        .clip-triangle {
            clip-path: polygon(50% 100%, 0% 0%, 100% 0%);
            transform: rotate(180deg);
            width: 27vh;
            height: 9vh;
            margin-left: -9vh;
        }
    </style>



    <section class="max-w-6xl mx-auto p-6 mt-16">
        <h2 class="text-2xl md:text-4xl text-red-400 mb-8 text-center">ইভেন্টাস বার্তা</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://businessbangladesh.com.bd/wp-content/uploads/2021/11/4-9.jpg" alt="ধান ক্ষেত"
                    class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2" style="line-height: 32px;">
                        জলবায়ু পরিবর্তন, বৃষ্টিপাতের খেলাধুলা ও আমন ধান উৎপাদনে করণীয়
                    </h3>
                    <p class="text-gray-600 text-sm">
                        জলবায়ু পরিবর্তনের ফলে, বৃষ্টিপাতের বিচ্যুতি আমন উৎপাদনকে প্রভাবিত করছে। কৃষকদের জন্য নতুন
                        পরিকল্পনার প্রয়োজন...
                    </p>
                    <a href="#" class="text-red-500 text-sm mt-2 inline-block">সম্পূর্ণ সংবাদ...</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://media.prothomalo.com/prothomalo-bangla/2024-11-25/gdz7ow2v/MYMENSINGHDH169420241124WHATSAPP-IMAGE-2024-11-24-AT-6.14.26-PM.JPG.JPG?w=1200&h=675&auto=format%2Ccompress&fit=max" alt="সেমিনার" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2" style="line-height: 32px;">
                        ইভেন্টাস এবং বাংলাদেশ কৃষি গবেষণা ইনস্টিটিউট-এর মধ্যে সমঝোতা স্মারক স্বাক্ষর
                    </h3>
                    <p class="text-gray-600 text-sm">
                        তৈরি সার হলো মাটির প্রাণ। মাটির স্বাস্থ্য ভালো রাখতে তৈরি সারই প্রধান বিকল্প...
                    </p>
                    <a href="#" class="text-red-500 text-sm mt-2 inline-block">সম্পূর্ণ সংবাদ...</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/03/W%26Asunflower.jpg" alt="সূর্যমুখী ফুল" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2" style="line-height: 32px;">
                        ভোজ্য তেলের চাহিদা পূরণে সম্ভাবনাময় সূর্যমুখী-এর উৎপাদন কৌশল
                    </h3>
                    <p class="text-gray-600 text-sm">
                        সূর্যমুখী একবর্ষী ফসল যার চাহিদা দিনে দিনে বাড়ছে। গবেষণার মাধ্যমে উৎপাদনশীলতা বাড়ানোর চেষ্টা
                        চলছে...
                    </p>
                    <a href="#" class="text-red-500 text-sm mt-2 inline-block">সম্পূর্ণ সংবাদ...</a>
                </div>
            </div>
        </div>

        <!-- Read More Button -->
        <div class="text-center mt-6">
            <button class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                আরো পড়ুন...
            </button>
        </div>
    </section>
    @include('partials.footer')

</body>

</html>

<script>
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
