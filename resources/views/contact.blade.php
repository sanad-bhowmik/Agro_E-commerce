<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Eventas | Contact</title>
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

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" style="border: 1px solid #f9f9f9;padding: 29px;">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-24">
                <div class="flex items-center lg:mb-0 mb-10">
                    <div class="">
                        <h4 class="text-indigo-600 text-base font-medium leading-6 mb-4 lg:text-left text-center">
                            Contact Us</h4>
                        <h2
                            class="text-gray-900 font-manrope text-4xl font-semibold leading-10 mb-9 lg:text-left text-center">
                            Reach Out To Us</h2>
                        <form action="">
                            <input type="text"
                                class="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8"
                                placeholder="Name">
                            <input type="email"
                                class="w-full h-14 shadow-sm text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none py-2 px-4 mb-8"
                                placeholder="Email">
                            <textarea name="" id="text"
                                class="w-full h-48 shadow-sm resize-none text-gray-600 placeholder-text-400 text-lg font-normal leading-7 rounded-2xl border border-gray-200 focus:outline-none px-4 py-4 mb-8"
                                placeholder="Phone"></textarea>
                            <button
                                class="w-full h-12 text-center text-white text-base font-semibold leading-6 rounded-full bg-indigo-600 shadow transition-all duration-700 hover:bg-indigo-800">Submit</button>
                        </form>
                    </div>
                </div>
                <div
                    class="lg:max-w-xl w-full h-[600px] flex items-center justify-center  bg-cover bg-no-repeat bg-[url('https://pagedone.io/asset/uploads/1696245837.png')] ">
                    <div class="">
                        <div class="lg:w-96 w-auto h-auto bg-white shadow-xl lg:p-6 p-4">
                            <a href="javascript:;" class="flex items-center mb-6">
                                <img src="/img/telephone.png" alt="">
                                <h5 class="text-black text-base font-normal leading-6 ml-5"> {{ $contact->number }}</h5>
                            </a>
                            <a href="javascript:;" class="flex items-center mb-6">
                                <img src="/img/gmail.png" alt="">
                                <h5 class="text-black text-base font-normal leading-6 ml-5">{{ $contact->email }}</h5>
                            </a>
                            <a href="javascript:;" class="flex items-center mb-6">
                                <img src="/img/location-pin.png" alt="">
                                <h5 class="text-black text-base font-normal leading-6 ml-5">{{ $contact->address }}</h5>
                            </a>
                            <div class="flex items-center justify-center border-t border-gray-100 pt-6">
                                <a href="https://www.facebook.com/p/Eventas-Crop-Care-Ltd-100094254862757/"
                                    class="mr-6">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.0683594" width="30" height="30" rx="15" fill="#337FFF"></rect>
                                        <path
                                            d="M18.5094 15.937L18.9369 13.2236H16.3038V11.4599C16.3038 10.7179 16.6714 9.99293 17.8469 9.99293H19.0608V7.68231C18.3539 7.56968 17.6396 7.50874 16.9236 7.5C14.7565 7.5 13.3417 8.80158 13.3417 11.1546V13.2236H10.9395V15.937H13.3417V22.5H16.3038V15.937H18.5094Z"
                                            fill="white"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
