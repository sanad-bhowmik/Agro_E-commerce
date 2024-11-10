<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>View | Evintas</title>
    <link rel="icon" type="image/x-icon" href="https://png.pngtree.com/png-vector/20230212/ourmid/pngtree-organic-fair-and-agro-garden-logo-design-png-image_6593571.png">

</head>
<style>
    .custom-toast {
        display: none;
        position: fixed;
        top: 20px;
        right: 20px;
        /* From https://css.glass */
        background: rgba(0, 249, 71, 0.4);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.2px);
        -webkit-backdrop-filter: blur(6.2px);
        color: #fff;
        padding: 16px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.5s ease;
        z-index: 1000;
    }

    .custom-toast.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .scroller {
        scrollbar-color: #a0aec0 #141b2a;
        scrollbar-width: none !important;
    }

    .scroller::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    .scroller::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #141b2a;
    }

    .scroller::-webkit-scrollbar-thumb {
        background: #181818;
        border-radius: 100vh;
        border: 1px solid #181818;
    }

    .scroller::-webkit-scrollbar-thumb:hover {
        background: #a0aec0;
    }

    .scrollerlight {
        scrollbar-color: #cfcfcf #ffffff;
        scrollbar-width: none !important;
    }

    .scrollerlight::-webkit-scrollbar {
        width: 2px;
        height: 6px;
    }

    .scrollerlight::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #ffffff;
    }

    .scrollerlight::-webkit-scrollbar-thumb {
        background: #cecece;
        border-radius: 100vh;
        border: 1px solid #cecece;
    }

    .scrollerlight::-webkit-scrollbar-thumb:hover {
        background: #cecece;
    }
</style>

<body>
    <div class="md:flex">

        <!-- sidebar -->
        <div class="sidebar max-h-screen top-0 h-screen bg-gray-800 text-blue-100 w-64 fixed inset-y-0 left-0 transform transition duration-200 ease-in-out z-50"
            x-data="{ open: true }" x-on:togglesidebar.window=" open = !open" x-show="true"
            :class="open === true ? 'md:translate-x-0 md:sticky ':'-translate-x-full' ">


            <header class=" h-[64px] py-2 shadow-lg px-4 md:sticky top-0 bg-gray-800 z-40">
                <!-- logo -->
                <a href="#" class="text-white flex items-center space-x-2 group hover:text-white">
                    <div>
                        <svg height="44px" width="44px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 504.125 504.125" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#3A7F0D;" d="M339.772,0c0,0,44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193 c7.877-70.357,41.653-225.485,186.888-260.884c0,0-135.176,50.546-147.117,279.347c69.459,9.752,232.361,16.305,280.726-125.062 C489.536,187.817,339.772,0,339.772,0z"></path>
                                <path style="fill:#49A010;" d="M145.007,498.704c147.456-58.849,254.748-196.71,269.556-361.283C384.418,56.107,339.772,0,339.772,0 s44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193c7.877-70.357,41.653-225.485,186.888-260.884 C292.053,220.31,157.279,270.73,145.007,498.704z"></path>
                                <circle style="fill:#3A7F0D;" cx="90.459" cy="171.985" r="13.785"></circle>
                                <g>
                                    <circle style="fill:#49A010;" cx="133.782" cy="158.2" r="9.846"></circle>
                                    <circle style="fill:#49A010;" cx="124.921" cy="64.662" r="24.615"></circle>
                                    <circle style="fill:#49A010;" cx="200.736" cy="120.785" r="7.877"></circle>
                                    <circle style="fill:#49A010;" cx="266.713" cy="76.477" r="22.646"></circle>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div>
                        <span class="text-2xl font-extrabold">Evintas</span>
                    </div>
                </a>
            </header>


            <!-- nav -->
            <nav class="px-4 pt-4 scroller overflow-y-scroll max-h-[calc(100vh-64px)]" x-data="{selected:'Tasks'}" style="margin-top: 10%;">
                <ul class="flex flex-col space-y-2">

                    <!-- ITEM -->
                    <li class="text-sm text-gray-500">
                        <a href="/dashboard"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700">
                            <div class="pr-2">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>Dashboard</div>
                        </a>
                    </li>


                    <!-- Section Devider -->
                    <div class="section border-b pt-4 mb-4 text-xs text-gray-600 border-gray-700 pb-1 pl-3">
                        Managment
                    </div>

                    <!-- ITEM -->
                    <li class="text-sm text-gray-500 ">
                        <a href="/AddProduct"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700  ">
                            <div class="pr-2">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                            <div>Product</div>
                        </a>
                    </li>

                    <!-- ITEM -->
                    <li class="text-sm text-gray-500 ">
                        <a href="/AllProducts"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 {{ Request::is('AllProducts') ? 'bg-gray-700 text-white' : '' }}">
                            <div class="pr-2">
                                <svg fill="#6b7280" class="h-4 w-4" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 467.2 467.2" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path d="M455.146,120.9l-91.7-116.3c-2.3-2.9-5.7-4.6-9.4-4.6h-240.8c-3.7,0-7.1,1.7-9.4,4.6l-91.7,116.3 c-1.7,2.1-2.6,4.7-2.6,7.4v326.9c0,6.6,5.4,12,12,12h424.1c6.6,0,12-5.4,12-12V128.3C457.746,125.6,456.846,123,455.146,120.9z M422.546,118.3h-176.9V24h102.6L422.546,118.3z M119.046,24h102.6v94.3h-176.9L119.046,24z M33.546,443.2V142.3h400.1v300.9 L33.546,443.2L33.546,443.2z"></path>
                                                <path d="M313.146,214.1c-4.7-4.7-12.3-4.7-17,0L154.246,356c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5 l141.9-141.9C317.846,226.4,317.846,218.8,313.146,214.1z"></path>
                                                <path d="M287.046,298.8c-11.2,0-21.7,4.3-29.6,12.2c-16.3,16.3-16.3,42.8,0,59.1c7.9,7.9,18.4,12.2,29.6,12.2s21.7-4.3,29.6-12.2 s12.2-18.4,12.2-29.6s-4.3-21.7-12.2-29.6S298.146,298.8,287.046,298.8z M299.646,353.2c-3.4,3.4-7.8,5.2-12.6,5.2 c-4.8,0-9.2-1.9-12.6-5.2c-6.9-6.9-6.9-18.2,0-25.2c3.4-3.4,7.8-5.2,12.6-5.2c4.8,0,9.2,1.9,12.6,5.2s5.2,7.8,5.2,12.6 C304.846,345.4,302.946,349.8,299.646,353.2z"></path>
                                                <path d="M209.846,276.5c16.3-16.3,16.3-42.8,0-59.1c-7.9-7.9-18.4-12.2-29.6-12.2s-21.7,4.3-29.6,12.2 c-16.3,16.3-16.3,42.8,0,59.1c7.9,7.9,18.4,12.2,29.6,12.2S201.946,284.4,209.846,276.5z M167.646,234.3c3.4-3.4,7.8-5.2,12.6-5.2 s9.2,1.9,12.6,5.2c6.9,6.9,6.9,18.2,0,25.2c-3.4,3.4-7.8,5.2-12.6,5.2s-9.2-1.9-12.6-5.2 C160.746,252.6,160.746,241.3,167.646,234.3z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>View Product</div>
                        </a>
                    </li>


                </ul>
            </nav>


        </div>
        <!-- End sidebar -->


        <!-- content -->
        <div class="flex-1 flex-col flex">

            <!-- Top navbar -->
            <nav class="bg-gray-800 shadow-xl sticky w-full top-0 text-black z-50" x-data="{ mobilemenue: false }">
                <div class="mx-auto ">
                    <div class="flex items-stretch justify-between h-16">

                        <div class="flex items-center md:hidden">
                            <div class="-mr-2 flex" x-data>
                                <!-- Mobile menu button -->
                                <button type="button" @click="$dispatch('togglesidebar')"
                                    class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>

                                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>

                                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center pl-6">
                            <div class="flex-shrink-0 md:hidden">

                                <a href="#" class="text-white flex items-center space-x-2 group">
                                    <div>
                                        <svg height="44px" width="44px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 504.125 504.125" xml:space="preserve" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path style="fill:#3A7F0D;" d="M339.772,0c0,0,44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193 c7.877-70.357,41.653-225.485,186.888-260.884c0,0-135.176,50.546-147.117,279.347c69.459,9.752,232.361,16.305,280.726-125.062 C489.536,187.817,339.772,0,339.772,0z"></path>
                                                <path style="fill:#49A010;" d="M145.007,498.704c147.456-58.849,254.748-196.71,269.556-361.283C384.418,56.107,339.772,0,339.772,0 s44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193c7.877-70.357,41.653-225.485,186.888-260.884 C292.053,220.31,157.279,270.73,145.007,498.704z"></path>
                                                <circle style="fill:#3A7F0D;" cx="90.459" cy="171.985" r="13.785"></circle>
                                                <g>
                                                    <circle style="fill:#49A010;" cx="133.782" cy="158.2" r="9.846"></circle>
                                                    <circle style="fill:#49A010;" cx="124.921" cy="64.662" r="24.615"></circle>
                                                    <circle style="fill:#49A010;" cx="200.736" cy="120.785" r="7.877"></circle>
                                                    <circle style="fill:#49A010;" cx="266.713" cy="76.477" r="22.646"></circle>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>

                                    <div>
                                        <span class="text-2xl font-extrabold">Evintas</span>
                                    </div>
                                </a>
                            </div>

                            <!-- toggel sidebar -->
                            <div class="text-white cursor-pointer hidden md:block" @click="$dispatch('togglesidebar')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                            </div>



                        </div>
                        <div class="hidden md:flex items-stretch">
                            <!-- Profile Menu DT -->
                            <div class="ml-4 flex md:ml-6 ">
                                <div class="relative flex justify-center items-center mr-4">
                                    <a href="/">
                                        <div class="bg-gray-700 block hover:text-white p-1 rounded-full text-gray-400">
                                            <span class="sr-only">View notifications</span>
                                            <svg fill="#9ca3af" class="h-6 w-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <g>
                                                        <g>
                                                            <path d="M256,0C114.62,0,0,114.62,0,256s114.62,256,256,256s256-114.62,256-256S397.38,0,256,0z M172.211,41.609 c-24.934,27.119-44.68,66.125-56.755,111.992H49.749C75.179,102.741,118.869,62.524,172.211,41.609z M25.6,256 c0-26.999,5.077-52.727,13.662-76.8h70.494c-4.608,24.294-7.356,49.963-7.356,76.8s2.748,52.506,7.347,76.8H39.262 C30.677,308.727,25.6,283,25.6,256z M49.749,358.4h65.707c12.083,45.867,31.821,84.872,56.755,111.991 C118.869,449.476,75.179,409.259,49.749,358.4z M243.2,485.188c-43.81-8.252-81.877-58.24-101.359-126.788H243.2V485.188z M243.2,332.8H135.74c-4.924-24.166-7.74-49.997-7.74-76.8s2.816-52.634,7.74-76.8H243.2V332.8z M243.2,153.6H141.841 C161.323,85.052,199.39,35.063,243.2,26.812V153.6z M462.251,153.6h-65.707c-12.083-45.867-31.821-84.873-56.755-111.992 C393.131,62.524,436.821,102.741,462.251,153.6z M268.8,26.812c43.81,8.252,81.877,58.24,101.359,126.788H268.8V26.812z M268.8,179.2h107.46c4.924,24.166,7.74,49.997,7.74,76.8s-2.816,52.634-7.74,76.8H268.8V179.2z M268.8,485.188V358.4h101.359 C350.677,426.948,312.61,476.937,268.8,485.188z M339.789,470.391c24.934-27.127,44.672-66.125,56.755-111.991h65.707 C436.821,409.259,393.131,449.476,339.789,470.391z M402.244,332.8c4.608-24.294,7.356-49.963,7.356-76.8 s-2.748-52.506-7.347-76.8h70.494c8.576,24.073,13.653,49.801,13.653,76.8c0,27-5.077,52.727-13.662,76.8H402.244z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>
                                </div>


                                <!-- Profile dropdown -->
                                <div class="relative bg-gray-700 px-4 text-gray-400 hover:text-white text-sm cursor-pointer" x-data="{ open: false }">
                                    <div class="flex items-center min-h-full" @click="open = !open">
                                        <div class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full"
                                                src="https://cdn3d.iconscout.com/3d/premium/thumb/man-avatar-3d-icon-download-in-png-blend-fbx-gltf-file-formats--men-people-male-pack-avatars-icons-5187871.png?f=webp"
                                                alt="">
                                        </div>
                                        <div class="flex flex-col ml-4">
                                            <span>Super Admin</span>
                                        </div>
                                    </div>

                                    <!-- Dropdown content for logout -->
                                    <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20">
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded">
                                            Logout
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="-mr-2 flex md:hidden">
                            <!-- Mobile menu button -->
                            <button type="button" @click="mobilemenue = !mobilemenue"
                                class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>

                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="md:hidden absolute bg-gray-800 w-full" id="mobile-menu" x-show="mobilemenue"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95" @click.away="mobilemenue = false

                ">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                            aria-current="page">Dashboard</a>

                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
                    </div>

                    <div class="pt-4 pb-3 border-t border-gray-700">
                        <!-- profile menue for mobile -->
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="https://assets.codepen.io/3321250/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1646800353&width=512"
                                    alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                            </div>
                            <button type="button"
                                class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>

                        </div>
                        <div class="mt-3 px-2 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your
                                Profile</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign
                                out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Top navbar -->



            <main class="bg-[#f3f3f9] mb-auto flex-grow">
                <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 mt-10 mb-10">
                    <table class="w-full table-fixed">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="w-1/12 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">#</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Image</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Name</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Price</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Brand</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Status</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-sm">
                            @foreach($products as $index => $product)
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    @if($product->image)
                                    <img src="{{ asset('img/product/' . $product->image) }}" alt="{{ $product->name }}" class="w-12 h-12 object-cover rounded">
                                    @else
                                    <span class="text-gray-500">No Image</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $product->name }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $product->price }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">{{ $product->brand }}</td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <span class="bg-{{ $product->status ? 'green' : 'red' }}-500 text-white py-1 px-2 rounded-full text-xs">
                                        {{ $product->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                    <select class="status-dropdown border rounded px-2 py-1" data-id="{{ $product->id }}">
                                        <option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ !$product->status ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    <button class="save-btn hidden text-white bg-blue-500 px-2 py-1 rounded text-xs" data-id="{{ $product->id }}">Save</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="mt-4 px-4">
                        {{ $products->links() }}
                    </div>
                </div>

                <!-- Toast Notification -->
                <div id="toast" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow hidden">Status updated successfully!</div>

            </main>
            <footer class="border-t p-4 pb-3 text-xs bg-gray-100">
                2024 © Design & Develop by PlayOn24.
            </footer>
        </div>

    </div>


</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toast = document.getElementById("custom-toast");

        // Show the toast if it exists (meaning session has 'success' message)
        if (toast) {
            // Add the show class to display the toast with animation
            toast.classList.add("show");

            // Set timeout to hide the toast after 5 seconds
            setTimeout(function() {
                toast.classList.remove("show");
            }, 3000); // 5000 ms = 5 seconds
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusDropdowns = document.querySelectorAll('.status-dropdown');
        const toast = document.getElementById('toast');

        statusDropdowns.forEach(dropdown => {
            dropdown.addEventListener('change', function() {
                const saveBtn = this.nextElementSibling;
                saveBtn.classList.remove('hidden');
            });
        });

        document.querySelectorAll('.save-btn').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const newStatus = this.previousElementSibling.value;

                fetch(`/update-product-status/${productId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            status: newStatus
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast();
                            location.reload();
                        }
                    });
            });
        });

        function showToast() {
            toast.classList.remove('hidden');
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 3000);
        }
    });
</script>
