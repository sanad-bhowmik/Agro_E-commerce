<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | ক্রপ প্রোটেকশন</title>
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

    <div class="container mx-auto px-4 py-6">
        <!-- Main Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <main class="col-span-3">
                <span class="text-gray-400 mr-3 uppercase text-xs mb-4" style="border-bottom:1px solid gainsboro">মূল
                    পাতা / ক্রপ প্রোটেকশন</span>
                <h1 class="text-2xl font-bold mb-6">ক্রপ প্রোটেকশন</h1>
                <!-- Product Grid -->

                <div class="container mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Card 1 -->
                        <a href="/evastop">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product1.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">ইভাস্টপ</h3>
                                </div>
                            </div>
                        </a>
                        <!-- Card 2 -->
                        <a href="/gaGold">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product4.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">GA GOLD</h3>
                                </div>
                            </div>
                        </a>

                        <!-- Card 3 -->
                        <a href="/navaPgr">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product5.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">NAVA PGR</h3>
                                </div>
                            </div>
                        </a>

                        <!-- Card 4 -->
                        <a href="/navaPgr">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product6.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">NAVA PGR</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                        <!-- Card 1 -->
                        <a href="/navaRoot">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product7.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">NAVA ROOT</h3>
                                </div>
                            </div>
                        </a>
                        <!-- Card 2 -->
                        <a href="/paclu">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product8.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">PECLU VITA</h3>
                                </div>
                            </div>
                        </a>

                        <!-- Card 3 -->
                        <a href="/rival">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product9.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">RIVAL</h3>
                                </div>
                            </div>
                        </a>

                        <!-- Card 4 -->
                        <a href="/soilBoronPlus">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product11.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">SOIL BORON PLUS</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                        <!-- Card 1 -->
                        <a href="/soilBoron15">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product12.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">SOIL BORON-15</h3>
                                </div>
                            </div>
                        </a>
                        <!-- Card 2 -->
                        <a href="/soilBoronPlus">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product13.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">SOIL BORON</h3>
                                </div>
                            </div>
                        </a>

                        <!-- Card 3 -->
                        <a href="/soilMag">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product14.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">SOIL MAG</h3>
                                </div>
                            </div>
                        </a>

                        <!-- Card 4 -->
                        <a href="/topsin">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product15.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">TOPSIN</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                        <a href="/gaGold">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                                <!-- Image container with fixed height -->
                                <div class="h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                                    <img src="./img/product19.png" alt="Product Image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold">GA GOLD PLUS</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </main>
            <!-- Left Sidebar -->
            <aside class="col-span-1">
                <!-- Search Bar -->
                <div class="mb-6">
                    <input type="text" placeholder="Search products..."
                        class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500" />
                </div>
                <!-- Categories -->
                <div class="mb-6">
                    <h2 class="font-bold text-lg mb-4">পণ্যতালিকা</h2>
                    <ul class="space-y-2 text-sm">
                        <li class="font-medium">⦿ কৃষি উপকরণ (4)</li>
                        <!-- <li class="pl-4">⮞ সার </li> -->
                        <li class="font-medium">⦿ ক্রপ প্রোটেকশন (14)</li>
                    </ul>
                </div>
                <!-- Popular Products -->
                <div class="mb-6">
                    <h2 class="font-bold text-lg mb-4">জনপ্রিয় পণ্য</h2>
                    <ul class="space-y-2 text-sm">
                        <li>⦿ কম্বাইন হারভেস্টার</li>
                        <li>⦿ পাওয়ার টিলার</li>
                        <li>⦿ রোটাভেটর</li>
                        <li>⦿ ট্রাক্টর</li>
                    </ul>
                </div>
                <!-- Latest News -->
                <div>
                    <h2 class="font-bold text-lg mb-4">সাম্প্রতিক সংবাদ</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <img src="https://via.placeholder.com/50" alt="News Image"
                                class="w-12 h-12 rounded object-cover" />
                            <a href="#" class="text-sm">তরুণ কৃষকদের জন্য নতুন প্রণোদনা ঘোষণা</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <img src="https://via.placeholder.com/50" alt="News Image"
                                class="w-12 h-12 rounded object-cover" />
                            <a href="#" class="text-sm">কৃষি যন্ত্রপাতি প্রদর্শনী শুরু</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Main Content -->

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
