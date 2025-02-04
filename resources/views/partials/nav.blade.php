<nav class="p-4 bg-white text-gray-200" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
    <div class="flex justify-between items-center">
        <div class="flex items-center pl-8">
            <img src="/img/images.png" class="h-10 w-10" alt="">
        </div>

        <!-- MOBILE NAV ICON -->
        <div class="md:hidden block absolute top-4 right-8 fixed">
            <button aria-label="navigation" type="button"
                class="md:hidden text-gray-200 transition duration-300 focus:outline-none focus:text-white hover:text-white">
                <i class="fas fa-bars text-3xl" id="bars"></i>
            </button>
        </div>

        <!-- NAVIGATION - LARGE SCREENS -->
        <div class="hidden md:flex">
            <ul class="hidden md:flex relative">
                <li class="text-lg pr-8">
                    <a href="/"
                        class="transition text-black duration-300 focus:outline-none focus:text-yellow-500 focus:underline hover:underline hover:text-yellow-500"
                        style="text-underline-offset: 8px;">মূল পাতা</a>
                </li>
                <li class="text-lg pr-8">
                    <a href="/about"
                        class="transition text-black duration-300 focus:outline-none focus:text-yellow-500 focus:underline hover:underline hover:text-yellow-500"
                        style="text-underline-offset: 8px;">পরিচিতি</a>
                </li>
                <li class="text-lg pr-8 group relative">
                    <a href="/product"
                        class="transition text-black duration-300 focus:outline-none focus:text-yellow-500 focus:underline hover:underline hover:text-yellow-500"
                        style="text-underline-offset: 8px;">পণ্যতালিকা</a>
                    <!-- SUBMENU -->
                    <ul
                        class="absolute left-0 top-full hidden bg-white shadow-lg group-hover:block transition-all duration-300 transform opacity-0 group-hover:opacity-100 group-hover:translate-y-2">
                        <li class="px-4 py-2"><a href="/kitnasok"
                                class="block text-black hover:text-yellow-500">কীটনাশক</a>
                        <li class="px-4 py-2"><a href="/cropProtection" class="block text-black hover:text-yellow-500">ক্রপ
                                প্রোটেকশন</a></li>
                </li>
            </ul>
            </li>
            <li class="text-lg pr-8">
                <a href="#"
                    class="transition text-black duration-300 focus:outline-none focus:text-yellow-500 focus:underline hover:underline hover:text-yellow-500"
                    style="text-underline-offset: 8px;">তথ্য ভান্ডার</a>
            </li>
            <li class="text-lg pr-8">
                <a href="/contact"
                    class="transition text-black duration-300 focus:outline-none focus:text-yellow-500 focus:underline hover:underline hover:text-yellow-500"
                    style="text-underline-offset: 8px;">যোগাযোগ</a>
            </li>
            </ul>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden flex flex-col w-full py-8 text-center">
        <a href="/" class="block text-gray-200 py-3">মূল পাতা</a>
        <a href="/about" class="block text-gray-200 py-3">পরিচিতি</a>
        <div>
            <a href="/product" class="block text-gray-200 py-3">পণ্যতালিকা</a>
            <!-- MOBILE SUBMENU -->
            <div class="hidden flex-col bg-gray-800 pl-4" id="mobileSubMenu">
                <a href="#" class="block text-gray-300 py-2">উপমেনু ১</a>
                <a href="#" class="block text-gray-300 py-2">উপমেনু ২</a>
                <a href="#" class="block text-gray-300 py-2">উপমেনু ৩</a>
                <a href="#" class="block text-gray-300 py-2">উপমেনু ৪</a>
            </div>
        </div>
        <a href="#" class="block text-gray-200 py-3">তথ্য ভান্ডার</a>
        <a href="/contact" class="block text-gray-200 py-3">যোগাযোগ</a>
    </div>
</nav>

<!-- SCRIPT FOR MOBILE SUBMENU -->
<script>
    // Gets the Mobile Nav icon by its ID
    let bars = document.getElementById('bars');
    let mobileMenu = document.getElementById('mobileMenu');

    // Mobile Nav toggle
    bars.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
        bars.classList.toggle('fa-times');
    });

    // Mobile Submenu toggle
    const mobileSubMenuTrigger = document.querySelector('#mobileMenu a[href="#"]');
    const mobileSubMenu = document.getElementById('mobileSubMenu');

    mobileSubMenuTrigger.addEventListener('click', function () {
        mobileSubMenu.classList.toggle('hidden');
    });
</script>

<!-- STYLES -->
<style>
    /* For the desktop submenu */
    .group:hover .group-hover\:block {
        display: block;
    }

    /* Submenu styles with animation */
    ul li ul {
        min-width: 160px;
        z-index: 10;
    }

    ul li ul li {
        border-bottom: 1px solid #eee;
    }

    ul li ul li:last-child {
        border-bottom: none;
    }

    ul li ul {
        transition: all 0.3s ease-in-out;
    }

    .group:hover ul {
        transform: translateY(0);
        opacity: 1;
    }
</style>
