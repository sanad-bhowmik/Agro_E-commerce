<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | SOIL BORON-15</title>
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
                <div class="max-w-5xl mx-auto bg-white p-6 mt-10">
                    <div class="flex flex-col md:flex-row gap-6">
                        <style>
                            .zoom-container {
                                position: relative;
                                display: inline-block;
                                overflow: hidden;
                                width: 100%;
                                max-width: 300px;
                                border: 2px solid #ddd;
                                border-radius: 10px;
                            }

                            .zoom-image {
                                width: 100%;
                                transition: transform 0.1s ease-out;
                            }

                            .thumbnail {
                                width: 80px;
                                /* Small preview size */
                                height: auto;
                                border: 2px solid #ddd;
                                border-radius: 5px;
                                margin-top: 10px;
                                cursor: pointer;
                                transition: transform 0.2s;
                            }

                            .thumbnail:hover {
                                transform: scale(1.1);
                            }
                        </style>

                        <div class="zoom-container">
                            <img id="mainImage" src="./img/product12.png" alt="Radi 20 Drip" class="zoom-image">
                        </div>

                        <div class="flex-1">
                            <h1 class="text-2xl text-red-400">SOIL BORON-15 (Disodium Tetraborate Pentahydrate)</h1>
                            <p class="text-gray-500 mt-2"> <span class="text-red-400">⦿</span>Boron-15%</p>
                        </div>
                    </div>

                    <!-- Small Thumbnail Below -->
                    <div class="flex mt-4">
                        <img id="thumbnail" src="./img/product12.png" alt="Radi 20 Drip Thumbnail" class="thumbnail">
                    </div>
                </div>
                <div class="w-full max-w-3xl bg-white shadow-md rounded-lg p-6">
                    <!-- Tab Buttons -->
                    <div class="flex overflow-x-auto border-b border-red-500 scrollbar-hide">
                        <button
                            class="tab-link px-4 py-2 text-gray-600 border border-transparent hover:text-red-600 hover:border-red-500 active-tab"
                            data-tab="tab1">পরিচিতি</button>
                        <button
                            class="tab-link px-4 py-2 text-gray-600 border border-transparent hover:text-red-600 hover:border-red-500"
                            data-tab="tab2">উপাদান</button>
                        <button
                            class="tab-link px-4 py-2 text-gray-600 border border-transparent hover:text-red-600 hover:border-red-500"
                            data-tab="tab3">প্রয়োগক্ষেত্র</button>
                        <button
                            class="tab-link px-4 py-2 text-gray-600 border border-transparent hover:text-red-600 hover:border-red-500"
                            data-tab="tab4">কার্যকারিতা</button>
                        <button
                            class="tab-link px-4 py-2 text-gray-600 border border-transparent hover:text-red-600 hover:border-red-500"
                            data-tab="tab5">ব্যবহারবিধি</button>
                        <button
                            class="tab-link px-4 py-2 text-gray-600 border border-transparent hover:text-red-600 hover:border-red-500"
                            data-tab="tab6">নির্দেশনা</button>
                    </div>

                    <!-- Tab Content -->
                    <div class="mt-4">
                        <div id="tab1" class="tab-content ">সয়েল বোরন-১৫ ধান ও শাক-সবজিসহ বিভিন্ন ফসলের জন্য অতি উন্নত
                            মানসম্পন্ন বোরন সার
                        </div>
                        <div id="tab2" class="tab-content ">বোরন (B) ১৫%
                        </div>
                        <div id="tab3" class="tab-content">ফসল বা উদ্ভিদের জন্য ১৬ টি অত্যাবশ্যক পুষ্টি উপাদানের মধ্যে
                            বোরন (B) একটি অন্যতম পুষ্টি
                            উপাদান; যার অভাবে উদ্ভিদ তার বৃদ্ধি, বিকাশ ও জীবনচক্রু সম্পূর্ণ করতে পারে না। একই জমিতে
                            প্রতি বছর
                            একাধিক ফসল চাষ করার ফলে বর্তমানে প্রায় সব ধরনের মাটিতেই বোরনের অভাব দেখা যায়। বোরন সারের
                            অভাবে গাছের পাতা সাদা হয়, পাতা কুঁকড়ে যায়, ছোট হয় ও গাছে বন্ধ্যাত্ব রোগ সৃষ্টি হয়। কখনও
                            কখনও
                            পাতার বৌটা ও কান্ড ফেটে যায় এবং গাছের বাড়ন্ত অংশ মারা যায়। ফলে গাছের স্বাভাবিক বৃদ্ধি
                            বাধাপ্রাপ্ত হয়।
                        </div>
                        <div id="tab4" class="tab-content ">
                            সয়েল বোরন-১৫ ধান, গম, ভূট্টা, আলু, তরমুজ, আনারস, পান, কলা, পেপে, পেয়াজ, রসুন, বিভিন্ন
                            শাক-সবজি, ডাল ও তেল জাতীয় ফসলে বোরনের অভাব পূরণের জন্য একটি উৎকৃষ্ট সার । সয়েল বোরন-১৫
                            ব্যবহারে গাছের পাতা সবুজ ও সতেজ হয় । দানাদার ফসলের দানা ও বীজ পুষ্ট হয়। শিকড়ের বৃদ্ধি ভাল
                            হয়
                            হরমোনের কার্যকারিতা বৃদ্ধি পায়। উদ্ভিদের বন্ধ্যাতু রোধ করে। ক্যালসিয়াম, ফসফরাস ও
                            নাইট্রোজেন গ্রহণে
                            সহায়তা করে। ফলশ্রুতিতে ফসলের গুণগতমান ভাল হয় এবং ফলন বৃদ্ধি পায়।

                        </div>
                        <div id="tab5" class="tab-content ">
                            ধান, গম, ভূট্টা, আলু পেঁয়াজ, রসুন, সরিষা ও সব রকমের শাক-সবজি বা অন্যান্য ফসলে
                            জমি তৈরির শেষ চাষের সময় বিঘা প্রতি (৩৩ শতক) ৮০০ গ্রাম থেকে ১ কেজি সয়েল বোরন-১৫ ব্যবহার
                            করতে হবে । তবে জমির উর্বরতার তারতম্য ভেদে প্রয়োগ মাত্রা কম বেশি হতে পারে।
                            বিষক্রিয়া: সয়েল বোরন-১৫ একটি অতি উন্নত মানের পরিবেশ বান্ধব বোরন সার । এর স্বাভাবিক
                            ব্যবহারে
                            পরিবেশের উপর কোন বিরূপ প্রতিক্রিয়া নেই ।
                        </div>
                        <div id="tab6" class="tab-content ">
                        </div>
                    </div>
                </div>

                <style>
                    /* Hide scrollbar for tabs */
                    .scrollbar-hide::-webkit-scrollbar {
                        display: none;
                    }

                    .tab-link {
                        white-space: nowrap;
                        flex-shrink: 0;
                        font-size: 14px;
                        transition: all 0.3s ease-in-out;
                    }

                    .tab-content {
                        display: none;
                        animation: fadeIn 0.3s ease-in-out;
                    }

                    .tab-content.active {
                        display: block;
                    }

                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                        }

                        to {
                            opacity: 1;
                        }
                    }
                </style>


            </main>
            <!-- Left Sidebar -->
            @include('partials.aside')

            <!-- Main Content -->

        </div>
    </div>


    @include('partials.footer')

</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".tab-link");
        const contents = document.querySelectorAll(".tab-content");

        // Set the first tab as active by default
        tabs[0].classList.add("text-red-600", "border-b-2", "border-red-500", "font-bold");
        contents[0].classList.add("active");

        tabs.forEach(tab => {
            tab.addEventListener("click", function () {
                // Remove active class from all tabs and contents
                tabs.forEach(t => t.classList.remove("text-red-600", "border-b-2", "border-red-500", "font-bold"));
                contents.forEach(content => content.classList.remove("active"));

                // Activate the clicked tab and its content
                this.classList.add("text-red-600", "border-b-2", "border-red-500", "font-bold");
                document.getElementById(this.getAttribute("data-tab")).classList.add("active");
            });
        });
    });

    document.getElementById('thumbnail').addEventListener('click', function () {
        document.getElementById('mainImage').src = this.src;
    });
    document.querySelector('.zoom-container').addEventListener('mousemove', function (e) {
        const img = this.querySelector('.zoom-image');
        const { left, top, width, height } = this.getBoundingClientRect();
        const xPercent = ((e.clientX - left) / width) * 100;
        const yPercent = ((e.clientY - top) / height) * 100;

        img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
        img.style.transform = "scale(2)"; /* Adjust zoom level */
    });

    document.querySelector('.zoom-container').addEventListener('mouseleave', function () {
        this.querySelector('.zoom-image').style.transform = "scale(1)";
    });
    document.querySelectorAll('.tab-link').forEach(button => {
        button.addEventListener('click', function () {
            // Remove active styles from all tabs
            document.querySelectorAll('.tab-link').forEach(btn => {
                btn.classList.remove('text-red-600', 'border-b-2', 'border-red-500', 'font-bold');
                btn.classList.add('text-gray-600');
            });

            // Add active styles to clicked tab
            this.classList.add('text-red-600', 'border-b-2', 'border-red-500', 'font-bold');

            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));

            // Show the corresponding tab content
            document.getElementById(this.dataset.tab).classList.remove('hidden');
        });
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
