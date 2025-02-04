<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ইভেন্টাস | পরিচিতি</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.nav')


    <div class="container mx-auto bg-white p-5 mt-10">
        <!-- Title -->
        <h2 class="text-2xl md:text-3xl  text-gray-800 pb-2">পরিচিতি</h2>
        <hr class="w-18 h-1  bg-red-500 border-0 rounded-sm  dark:bg-gray-700" style=" width: 103px;
    height: 3px;">
        <hr class="border-t-2 border-dotted border-gray-200 ">

        <!-- Image -->
        <img src="https://imgix-prod.sgs.com/-/media/sgscorp/images/temporary/golden-wheat-grass.cdn.en-BD.1.jpg?fit=crop&auto=format&crop=focalpoint&fp-x=0.35&fp-y=0.6&fp-z=1&w=645&h=403"
            alt="Agriculture Image" class="w-full max-h-64 object-cover mt-4">

        <!-- Content -->
        <p class="text-gray-700 mt-4 text-sm md:text-base leading-relaxed">
            বাংলাদেশের কৃষি খাত সারাবিশ্বে কৃষি উৎপাদনের ক্ষেত্রে একটি গুরুত্বপূর্ণ স্থান অধিকার করে আছে। ১৯৭০ দশকের পর
            থেকে বিভিন্ন উন্নয়ন কর্মসূচির মাধ্যমে বাংলাদেশের কৃষি উৎপাদন বৃদ্ধি পেয়েছে এবং খাদ্য উৎপাদনে স্বনির্ভরতা
            অর্জন সম্ভব হয়েছে।
        </p>

        <p class="text-gray-700 mt-3 text-sm md:text-base leading-relaxed">
            সাম্প্রতিক সময়ে নতুন প্রযুক্তি ও উদ্ভাবনী কার্যক্রমের মাধ্যমে কৃষির উন্নয়ন আরও বেগবান হচ্ছে। কৃষিতে আধুনিক
            যন্ত্রপাতির ব্যবহার, নতুন জাতের উদ্ভাবন এবং ডিজিটাল প্রযুক্তির সংযোজন বাংলাদেশের কৃষির এক নতুন দিগন্ত
            উন্মোচন করেছে।
        </p>

        <p class="text-gray-700 mt-3 text-sm md:text-base leading-relaxed">
            দেশের কৃষি উন্নয়নের পাশাপাশি কৃষকের জীবনমান উন্নয়নের জন্য নানামুখী উদ্যোগ গ্রহণ করা হচ্ছে। সরকারি ও বেসরকারি
            পর্যায়ে প্রশিক্ষণ ও সহায়তার মাধ্যমে কৃষকদের আধুনিক কৃষি ব্যবস্থার সাথে সংযুক্ত করা হচ্ছে।
        </p>
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
