<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | NAVA ROOT</title>
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
                            <img id="mainImage" src="./img/product7.png" alt="Radi 20 Drip" class="zoom-image">
                        </div>

                        <div class="flex-1">
                            <h1 class="text-2xl text-red-400">NAVA ROOT</h1>
                            <p class="text-gray-500 mt-2"> <span class="text-red-400">⦿</span>NAA(Naphthoic Acetic
                                Acid-98%)</p>
                        </div>
                    </div>

                    <!-- Small Thumbnail Below -->
                    <div class="flex mt-4">
                        <img id="thumbnail" src="./img/product7.png" alt="Radi 20 Drip Thumbnail" class="thumbnail">
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
                        <div id="tab1" class="tab-content ">NAVA ROOT হল NAA (Naphthoic Acetic Acid-98%) সমৃদ্ধ
                            একটি উদ্ভিদ বৃদ্ধিবর্ধক যা শিকড় ও ফলনের উন্নতি সাধন করে।
                        </div>
                        <div id="tab2" class="tab-content ">NAA (Naphthoic Acetic Acid - 98%) – এটি একটি শক্তিশালী
                            উদ্ভিদ বৃদ্ধিবর্ধক হরমোন, যা মূল গঠনে সহায়তা করে এবং উদ্ভিদের বৃদ্ধি ও ফলন বৃদ্ধি করে।
                        </div>
                        <div id="tab3" class="tab-content">মূলত উদ্ভিদের শিকড় গঠনে সহায়তা করে, চারা প্রতিস্থাপন, ফলন
                            বৃদ্ধির জন্য এবং পাতা ঝরা রোধে ব্যবহৃত হয়।
                        </div>
                        <div id="tab4" class="tab-content ">
                            ১। নাভা রুট জমি তৈরির সময় শেষ চাষের আগে ছিটিয়ে
                            দিয়ে বীজ বপন বা চারা রোপন করলে বীজের অংকুরোদরগম
                            ও শিকড়ের বৃদ্ধি তৃরাস্বিত হয়। প্রতিটি জীবিত বীজ থেকে ব্যবহার বিধি :
                            সুস্থ, সবল বলিষ্ঠ চারা দ্রুত গজায়, তাই ফলন বাড়ে । শেষ চাষের সময় অন্যান্য সারের সঙ্গে নাভা
                            রুট মিশিয়ে
                            <br>
                            ২। নাভা রুট ব্যবহারে চারাগুলো শুরুতেই খুব শক্তিশালী হয়ে নিম্নলিখিত মন্ত্রায় প্রয়োগ করতে
                            হবে তবে ফল গাছের
                            গজায় এবং শিকড়ের সংখ্যা স্বাভাবিক অপেক্ষা অনেকগুলো ক্ষেত্রে অন্যান্য সারের সঙ্গে নাভা রুট
                            মিশিয়ে গাছের গোড়ায়
                            বেশি ও দীর্ঘ হয় ফলে ফসল মাটি থেকে অধিক খাদ্য গ্রহন বা গর্তে প্রয়োগ করতে হবে । উল্লেখ্য
                            যে, নাভা রুট কোন
                            করতে পারে, তাই ফলন বৃদ্ধি পায়। অবস্থাতেই স্প্রে করা উচিত নয়।
                            <br>
                            ৩। নাভা রুট ব্যবহারে বীজের উষ্ণতা বৃদ্ধি করে সুপ্ততা ভেঙ্গে
                            ফেলে ৷ ফলে মাটিতে ঠান্ডা আবহাওয়াতেও শীতকালে যে ফসলের নাম য় টমেটো ।
                            সকল বীজ গজাতে অনেক সময় লাগে এঁ সকল বীজ থেকেও
                            চারা অল্প সময়ে বেরিয়ে আসতে সাহয্য করে প্রয়োগমাত্রা বিঘা প্রতি ১ কেজি
                            <br>
                            ৪ । নাভা রুট ব্যবহারে রূপান্তরিত কান্ড যেমন, টমেটো কোষ
                            বিভাজন তৃরান্বিত করে। ফলে এ সকল ফসলের ফলন
                            অনেকাংশে বৃদ্ধি পায় ।
                            <br>
                            ৫। নাভা রুট এ আছে বিশ্বস্বীকৃত রুট হরমোন এনএএ, ফলে প্রতিকূল কৃষিজ পরিবেশ (অতি শীত বা অতি
                            খরা) গাছের খাদ্য গ্রহনের উপযোগী শিকড় বিস্তারে সাহায্য
                            করে তাই সহজে গাছ মরে না।
                            <br>
                            ৬। নাভা রুট ব্যবহারে ফসল/গাছ দৃঢ়ভাবে বেড়ে উঠে । ফলে
                            ঝড় বৃষ্টিতে সহজেই গাছ হেলে বা ভেঙ্গে পড়ে না।
                            <br>
                            ৭। নাভা রুট ফসলের আগাম পরিপকৃতা আনতে সহায়তা
                            করে।
                        </div>
                        <div id="tab5" class="tab-content ">
                            শেষ চাষের সময় অন্যান্য সারের সঙ্গে নাভা রুট মিশিয়ে
                            নিম্নলিখিত মন্রায় প্রয়োগ করতে হবে । তবে ফল গাছের
                            ক্ষেত্রে অন্যান্য সারের সঙ্গে নাভা রুট মিশিয়ে গাছের গোড়ায়
                            বা গর্তে প্রয়োগ করতে হবে ৷ উল্লেখ্য যে, নাভা রুট কোন
                            অবস্থাতেই স্প্রে করা উচিত নয়।
                        </div>
                        <div id="tab6" class="tab-content "></div>
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
