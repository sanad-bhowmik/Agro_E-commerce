<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | তথ্য ভান্ডার</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<style>
    #map-section {
        position: relative;
        width: 100%;
        height: 400px;
    }

    @media (max-width: 1024px) {
        #map-section {
            height: 300px;
        }
    }

    @media (max-width: 768px) {
        #map-section {
            height: 250px;
        }
    }

    @media (max-width: 480px) {
        #map-section {
            height: 200px;
        }
    }
</style>

<body>
    <div class="">
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50"
            style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>

    @include('partials.nav')

    <div class="max-w-7xl mx-auto p-4">
        <div class="bg-white overflow-hidden">
            <!-- Image Section -->
            <img src="https://amaderorthoneeti.com/new/wp-content/uploads/2021/05/sunamgong-210615-400x221.jpg"
                alt="বাংলাদেশের ধান চাষ" class="w-full h-64 object-cover" />

            <!-- Content Section -->
            <div class="p-4">
                <h2 class="text-xl font-bold text-gray-900 mb-2">
                    বাংলাদেশের ধান চাষ
                </h2>
                <p class="text-gray-700 text-sm">
                    ধান বাংলাদেশের প্রধান খাদ্যশস্য এবং এটি দেশের কৃষির অন্যতম প্রধান খাত। তিনটি মৌসুমে ধান চাষ করা হয়:
                    আমন, বোরো ও আউশ। আধুনিক প্রযুক্তি ও উন্নত জাতের ধান চাষের ফলে কৃষকরা এখন আগের চেয়ে বেশি ফলন
                    পাচ্ছেন। তবে জলবায়ু পরিবর্তন, বন্যা ও পোকার আক্রমণ ধান চাষে বড় চ্যালেঞ্জ সৃষ্টি করছে।
                </p>
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="max-w-7xl mx-auto p-4 grid gap-6">

            <!-- Card 1: ধান চাষ -->
            <div class="bg-white  overflow-hidden">
                <img src="https://samakal.com/media/imgAll/2024October/untitled-11-1729269459.jpg" alt="ধান চাষ" class="w-full h-64 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">বাংলাদেশের ধান চাষ</h2>
                    <p class="text-gray-700 text-sm">ধান বাংলাদেশের প্রধান খাদ্যশস্য। তিনটি মৌসুমে ধান চাষ করা হয়: আমন,
                        বোরো ও আউশ।</p>
                </div>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <!-- Card 2: গম চাষ -->
            <div class="bg-white  overflow-hidden">
                <img src="https://d2u0ktu8omkpf6.cloudfront.net/c3574930a0a67e87f95e90050d9603ed701631c737b84d5a.jpg" alt="গম চাষ" class="w-full h-64 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">গম চাষের সম্ভাবনা</h2>
                    <p class="text-gray-700 text-sm">শীতকালীন গম চাষ বাংলাদেশের কৃষকদের জন্য একটি লাভজনক ফসল। উন্নত জাত
                        ও চাষ পদ্ধতি উৎপাদন বাড়াচ্ছে।</p>
                </div>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <!-- Card 3: পাট চাষ -->
            <div class="bg-white  overflow-hidden">
                <img src="https://agrobangla.com/wp-content/uploads/2020/03/jute-cultivation.jpg" alt="পাট চাষ" class="w-full h-64 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">বাংলাদেশের পাট চাষ</h2>
                    <p class="text-gray-700 text-sm">পাট বাংলাদেশের অন্যতম রপ্তানি ফসল। এটি পরিবেশবান্ধব এবং বহুমুখী
                        ব্যবহার রয়েছে।</p>
                </div>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <!-- Card 4: আলু চাষ -->
            <div class="bg-white  overflow-hidden">
                <img src="https://cdn.bdnews24.com/bdnews24/media/bdnews24-english/import/media/2022/03/23/gopalganj-potato-230322-01.jpg" alt="আলু চাষ" class="w-full h-64 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">আলু চাষের উন্নতি</h2>
                    <p class="text-gray-700 text-sm">বাংলাদেশে আলু চাষ দিন দিন জনপ্রিয় হচ্ছে। এটি কৃষকদের জন্য একটি
                        লাভজনক ফসল।</p>
                </div>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <!-- Card 5: সরিষা চাষ -->
            <div class="bg-white  overflow-hidden">
                <img src="https://lh6.googleusercontent.com/proxy/rT2Z19L-IGo6r0dY7Tt366jOVOYI8xGT9cWnuKd5lwpHwn7ieTPXJQhmKFIPP_S2gLlINM1a34JHMabi1Y44qE9TWfYqaf-eq42Xgrx-1Oo1XLyABCvtYYy-BXLuMp_gQqZ9zhbgTUkZIZDkqw2fuk7-Ywa-v0SBm9zHE1ep1Fb9Th6wYzFdIcXwLPhq" alt="সরিষা চাষ" class="w-full h-64 object-cover" />
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-900 mb-2">সরিষা চাষের গুরুত্ব</h2>
                    <p class="text-gray-700 text-sm">সরিষা তেল উৎপাদনের প্রধান উৎস। এটি মাটির উর্বরতা বৃদ্ধি করতেও
                        সাহায্য করে।</p>
                </div>
            </div>

        </div>
    </div>
    @include('partials.footer')
</body>

</html>


<script>
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
