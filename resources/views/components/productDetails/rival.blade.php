<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ইভেন্টাস | Rival</title>
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
                            <img id="mainImage" src="./img/product9.png" alt="Radi 20 Drip" class="zoom-image">
                        </div>

                        <div class="flex-1">
                            <h1 class="text-2xl text-red-400">Rival (Potassium Sulphate)</h1>
                            <p class="text-gray-500 mt-2"> <span class="text-red-400">⦿</span>Potassium-50%</p>
                            <p class="text-gray-500 mt-2"> <span class="text-red-400">⦿</span>Sulphur-17%</p>
                        </div>
                    </div>

                    <!-- Small Thumbnail Below -->
                    <div class="flex mt-4">
                        <img id="thumbnail" src="./img/product9.png" alt="Radi 20 Drip Thumbnail" class="thumbnail">
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
                        <div id="tab1" class="tab-content ">Rival (Potassium Sulphate) একটি উচ্চমানের সার, যার মধ্যে
                            ৫০% পটাশিয়াম ও ১৭% সালফার রয়েছে, যা ফসলের বৃদ্ধি, ফুল ও ফলের গুণগত মান উন্নত করতে
                            সহায়ক।
                        </div>
                        <div id="tab2" class="tab-content ">⦿ পটাশিয়াম (Potassium) - ৫০% <br>
                            ⦿ সালফার (Sulphur) - ১৭%
                        </div>
                        <div id="tab3" class="tab-content">রাইভাল (পটাশিয়াম সালফেট) বিভিন্ন ফল, সবজি, চা, তামাক ও
                            অন্যান্য উচ্চমূল্যের ফসলের জন্য উপযুক্ত, যা গাছের বৃদ্ধিতে সহায়তা করে এবং ফলন বৃদ্ধি করে।
                        </div>
                        <div id="tab4" class="tab-content ">
                            রাইভাল (পটাশিয়াম সালফেট) গাছের রোগ প্রতিরোধ ক্ষমতা বাড়ায়, ফল ও শস্যের গুণগত মান উন্নত করে
                            এবং সুস্বাদু ও মজবুত ফসল উৎপাদনে সহায়তা করে।
                        </div>
                        <div id="tab5" class="tab-content ">
                            রাইভাল (পটাশিয়াম সালফেট) ফসলের ধরণ ও মাটির উর্বরতা অনুযায়ী নির্ধারিত পরিমাণে প্রয়োগ করা
                            হয়। সাধারণত, এটি বীজতলা প্রস্তুত করার সময় বা বৃদ্ধির পর্যায়ে মাটিতে মিশিয়ে বা সেচের
                            মাধ্যমে ব্যবহার করা হয়।
                        </div>
                        <div id="tab6" class="tab-content ">রাইভাল (পটাশিয়াম সালফেট) ব্যবহারের আগে মাটির উর্বরতা
                            পরীক্ষা করে নির্ধারিত মাত্রায় প্রয়োগ করুন। অতিরিক্ত ব্যবহার এড়িয়ে চলুন, কারণ এটি
                            উদ্ভিদের ভারসাম্য নষ্ট করতে পারে। সংরক্ষণকালে শুকনো ও শীতল স্থানে রাখুন এবং শিশুদের নাগালের
                            বাইরে রাখুন।</div>
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
