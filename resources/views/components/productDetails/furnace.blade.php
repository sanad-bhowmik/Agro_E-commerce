<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | ফার্নেস</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.nav')

    <div class="">
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50"
            style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-1">
                <img src="./img/product2.png" alt="Radi 20 Drip" class="w-full max-w-sm mx-auto md:mx-0">
                <div class="mt-4 flex justify-center md:justify-start">
                    <img src="./img/product2.png" alt="Thumbnail" class="w-16 h-16 border cursor-pointer">
                </div>
            </div>
            <div class="flex-1">
                <h1 class="text-2xl font-bold text-red-600">রাদি ২০ ড্রিপিপি</h1>
                <p class="text-gray-500 mt-2">বিশ্বস্ততার প্রতিশ্রুতি ১০০%</p>

                <div class="mt-4 border-b pb-3">
                    <nav class="flex space-x-4 text-gray-700">
                        <a href="#" class="font-semibold border-b-2 border-red-600 pb-2">পরিচিতি</a>
                        <a href="#" class="hover:text-red-600">উপাদান</a>
                        <a href="#" class="hover:text-red-600">প্রয়োগমাত্রা</a>
                        <a href="#" class="hover:text-red-600">কার্যকারিতা</a>
                        <a href="#" class="hover:text-red-600">ব্যবহারের নির্দেশনা</a>
                        <a href="#" class="hover:text-red-600">নির্দেশনা</a>
                    </nav>
                </div>

                <div class="mt-4 text-gray-700">
                    <p><strong>ফর্মুলেশন:</strong> গ্যাস্ট্রো ইমালশন</p>
                    <p><strong>বিভাগ:</strong> উদ্ভিদ</p>
                    <p><strong>নেট ওজন:</strong> ১০০ গ্রাম</p>
                    <p><strong>ব্যাচ নং:</strong> RF2102</p>
                </div>

                <div class="mt-6 flex space-x-4">
                    <button class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700">ক্রয়
                        করুন</button>
                    <button
                        class="px-6 py-2 border border-red-600 text-red-600 font-semibold rounded-lg hover:bg-red-600 hover:text-white">পণ্য
                        সম্পর্কে জানুন</button>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</body>

</html>


<script>
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
</script>
