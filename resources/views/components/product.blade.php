<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | পণ্যতালিকা</title>
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
                <h1 class="text-2xl font-bold mb-6">পণ্যতালিকা</h1>
                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-6">

                    <!-- Card 1 -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="/kitnasok">
                            <img alt="Placeholder" class="block w-full h-48 object-cover"
                                src="https://ruralindiaonline.org/media/images/01-narayan-JH-Lethal_pests_deadly_sprays.width-1400.jpg">
                        </a>
                        <header class="p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    কীটনাশক
                                </a>
                            </h1>
                        </header>
                    </article>

                    <!-- Card 2 -->
                    <!-- <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block w-full h-48 object-cover"
                                src="https://i.pinimg.com/736x/98/98/58/9898587b451d4bdeeeb42e8832550587.jpg">
                        </a>
                        <header class="p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    জনস্বার্থে ব্যবহার্য, পোলট্রি ও ডেইরীতে ব্যবহার্য ও মৎস্যচাষে ব্যবহার্য পণ্যসমূহ
                                </a>
                            </h1>
                        </header>
                    </article> -->

                    <!-- Card 3 -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="/cropProtection">
                            <img alt="Placeholder" class="block w-full h-48 object-cover"
                                src="https://media.geeksforgeeks.org/wp-content/uploads/20240229093847/Crop-protection-before-and-during-the-cultivation.png">
                        </a>
                        <header class="p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    ক্রপ প্রোটেকশন
                                </a>
                            </h1>
                        </header>
                    </article>

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
                        <li>⦿ ফ্লাই শুট</li>
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
