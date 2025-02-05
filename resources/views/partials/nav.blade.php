<nav class="p-4 bg-white text-gray-200" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
    <div class="flex justify-between items-center">
        <a href="/">
            <div class="flex items-center pl-8">
                <img src="/img/images.png" class="h-10 w-10" alt="">
            </div>
        </a>

        <!-- MOBILE NAV ICON -->
        <div class="md:hidden block absolute top-4 right-8 fixed">
            <button aria-label="navigation" type="button" id="mobileNavToggle"
                class="md:hidden text-gray-200 transition duration-300 focus:outline-none focus:text-white hover:text-white">
                <i class="fas fa-bars text-3xl"></i>
            </button>
        </div>

        <!-- NAVIGATION - LARGE SCREENS -->
        <div class="hidden md:flex">
            <ul class="hidden md:flex relative">
                <li class="text-sm pr-8"><a href="/" class="nav-link">মূল পাতা</a></li>
                <li class="text-sm pr-8"><a href="/about" class="nav-link">পরিচিতি</a></li>
                <li class="text-sm pr-8 group relative">
                    <a href="#" id="mobileSubMenuTrigger" class="nav-link">পণ্যতালিকা</a>
                    <!-- SUBMENU -->
                    <ul id="desktopSubMenu" class="submenu hidden">
                        <li><a href="/kitnasok" class="submenu-item">কীটনাশক</a></li>
                        <li><a href="/cropProtection" class="submenu-item">ক্রপ প্রোটেকশন</a></li>
                    </ul>
                </li>
                <li class="text-sm pr-8"><a href="/info" class="nav-link">তথ্য ভান্ডার</a></li>
                <li class="text-sm pr-8"><a href="/contact" class="nav-link">যোগাযোগ</a></li>
            </ul>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden flex flex-col w-full py-8 text-center">
        <a href="/" class="mobile-link">মূল পাতা</a>
        <a href="/about" class="mobile-link">পরিচিতি</a>
        <a href="#" id="mobileSubMenuToggle" class="mobile-link">পণ্যতালিকা</a>
        <!-- MOBILE SUBMENU -->
        <div id="mobileSubMenu" class="hidden flex-col bg-gray-800 pl-4">
            <a href="/kitnasok" class="mobile-submenu-item">কীটনাশক</a>
            <a href="/cropProtection" class="mobile-submenu-item">ক্রপ প্রোটেকশন</a>
        </div>
        <a href="/info" class="mobile-link">তথ্য ভান্ডার</a>
        <a href="/contact" class="mobile-link">যোগাযোগ</a>
    </div>
</nav>

<!-- SCRIPT FOR NAVIGATION -->
<script>
    document.getElementById('mobileNavToggle').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    document.getElementById('mobileSubMenuToggle').addEventListener('click', function () {
        document.getElementById('mobileSubMenu').classList.toggle('hidden');
    });

    document.getElementById('mobileSubMenuTrigger').addEventListener('click', function () {
        document.getElementById('desktopSubMenu').classList.toggle('hidden');
    });
</script>

<!-- STYLES -->
<style>
    .nav-link {
        transition: color 0.3s;
        color: black;
        text-decoration: none;
    }

    .nav-link:hover,
    .nav-link:focus {
        color: #d97706;
        text-decoration: underline;
        text-underline-offset: 8px;
    }

    .submenu {
        position: absolute;
        left: 0;
        top: 100%;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        min-width: 160px;
        z-index: 10;
        transition: all 0.3s ease-in-out;
    }

    .submenu-item {
        display: block;
        padding: 10px;
        color: black;
        text-decoration: none;
        transition: color 0.3s;
    }

    .submenu-item:hover {
        color: #d97706;
    }

    .mobile-link {
        padding: 12px;
        color: black;
        text-decoration: none;
        display: block;
    }

    .mobile-link:hover {
        background: #d97706;
    }

    .mobile-submenu-item {
        padding: 10px;
        color: #ccc;
        display: block;
        transition: color 0.3s;
    }

    .mobile-submenu-item:hover {
        color: white;
    }
</style>
