<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | Contact</title>
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

    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white shadow-lg rounded-lg p-6">
            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold text-red-500 mb-4">যোগাযোগ করুন</h2>
                <div class="text-sm space-y-4">
                    <div>
                        <h3 class="font-semibold">কর্মধারী অফিস</h3>
                        <p>স্ট্রীট নাম্বার<br>১০৬-১১৬, পথ অ্যালেক্স, ঢাকা-১২১৭<br>বাংলাদেশ</p>
                        <p>Email: <a href="mailto:info@infaltd.com.bd" class="text-blue-500">info@infaltd.com.bd</a></p>
                        <p>Phone: +880-2-222295218, +880-2-8319469</p>
                    </div>

                    <div>
                        <h3 class="font-semibold">রেজিস্টার্ড অফিস</h3>
                        <p>৩৯৯, পঞ্চশীল আবাসিক এলাকা,<br>ঢাকা-১২১৭</p>
                    </div>

                    <div>
                        <h3 class="font-semibold">ইউরোপিয়ান নম্বর</h3>
                        <p>+880-1308-479882 (কৃষি বিভাগ সহযোগিতা)<br>+880-1308-479883 (বাণিজ্যিক সহযোগিতা)</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-red-500 mb-4">* চিহ্নিত অংশ অবশ্যই পূরণ করতে হবে</h2>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium">নাম (Name) *</label>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-red-500"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium">ই-মেইল (Email) *</label>
                        <input type="email" id="email" name="email"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-red-500"
                            required>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium">ফোন/মোবাইল (Phone/Mobile) *</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-red-500"
                            required>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium">বিষয় (Subject) *</label>
                        <input type="text" id="subject" name="subject"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-red-500"
                            required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium">বার্তা (Message)</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-red-500"></textarea>
                    </div>
                    <button type="submit"
                        class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 focus:outline-none">পাঠান</button>
                </form>
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
