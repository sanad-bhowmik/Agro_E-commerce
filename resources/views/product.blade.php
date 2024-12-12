<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Eventas | Product</title>
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



    <div class="container mx-auto p-8 bg-gray-100">
        <!-- Main Content Wrapper -->
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center gap-y-16 gap-x-10 mt-10 mb-20">
            @foreach($products as $product)
                <div
                    class="w-80 bg-white shadow-lg duration-500 hover:scale-105 hover:shadow-2xl transform transition-all rounded-xl overflow-hidden">
                    <a href="{{ route('product.details', $product->id) }}" class="block">
                        <!-- Image Section -->
                        <div class="relative h-80 w-full">
                            <img src="{{ asset('img/product/' . $product->image) }}" alt="{{ $product->name }}"
                                class="h-full w-full object-cover rounded-t-xl transition-transform duration-300 transform hover:scale-110">
                            <div
                                class="absolute top-3 right-3 bg-gradient-to-r from-blue-400 to-green-500 text-white px-2 py-1 rounded-full shadow-lg">
                                <span class="text-xs font-bold">{{ $product->rating }}★</span>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-5 bg-gradient-to-b from-white to-gray-50 rounded-b-xl shadow-lg">
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="text-indigo-500 font-semibold uppercase text-sm tracking-wider">{{ $product->brand }}</span>
                                <span
                                    class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-semibold shadow">{{ $product->price }}
                                    BDT</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 truncate capitalize">{{ $product->name }}</h3>
                            <p class="text-gray-600 mt-3 text-sm leading-tight">
                                {{ Str::limit($product->details, 80, '...') }}
                            </p>

                        </div>
                    </a>
                </div>
            @endforeach
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
<!-- <aside class="w-full lg:w-1/3 bg-gray-50 p-4 rounded-md shadow-md">
                <h3 class="text-lg font-bold mb-4 border-b-2 border-orange-600">Product Categories</h3>
                <div class="p-4 bg-white shadow-md rounded-md">
                    <div class="mb-4">
                        <input type="text" placeholder="Search products..." class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
                    </div>

                    <h3 class="text-xl font-semibold mb-2 relative">
                        <span class="pb-1 border-b-2 border-red-600">পণ্য তালিকা</span>
                    </h3>

                    <ul class="text-gray-700">
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">ক্রপ প্রোটেকশন (84)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">হীটিশাক (30)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">ছত্রাকনাশক (18)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">আবাগাছানাশক (18)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">সার (18)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">পিএটিপি, এআইটি অ্যাড ফিলারিজ (22)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">পারসনিক হেলথ প্রোডাক্টস (0)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">অ্যানিমেল হেলথ (0)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">ফার্মাসিউটিক্যাল (20)</a>
                        </li>
                        <li class="mb-1 flex items-center hover:text-red-600 transition-colors">
                            <svg class="w-3 h-3 text-red-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="#" class="flex-1">ইকুইপমেন্ট (2)</a>
                        </li>
                    </ul>

                    <h3 class="text-lg font-bold mb-4 border-b-2 border-orange-600 mt-10">Related Products</h3>
                    <ul>
                        <li class="mb-2">
                            <a href="#" class="flex items-center text-blue-600 hover:underline justify-between">
                                <span>Related Product 1</span>
                                <img src="https://img.freepik.com/free-photo/green-plant-leaves_53876-92104.jpg" alt="Related Product 1" class="w-10 h-10 object-cover rounded-md ml-3">
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="flex items-center text-blue-600 hover:underline justify-between">
                                <span>Related Product 2</span>
                                <img src="https://img.freepik.com/free-photo/sunflower-yellow-petals_1048-11552.jpg" alt="Related Product 2" class="w-10 h-10 object-cover rounded-md ml-3">
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="flex items-center text-blue-600 hover:underline justify-between">
                                <span>Related Product 3</span>
                                <img src="https://img.freepik.com/free-photo/sunset-over-cornfield_53876-109908.jpg" alt="Related Product 3" class="w-10 h-10 object-cover rounded-md ml-3">
                            </a>
                        </li>
                    </ul>
                </div>


            </aside> -->
