<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Add Product | Evintas</title>
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
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 {{ Request::is('dashboard') ? 'bg-gray-700 text-white' : '' }}">
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
                        FrontEnd
                    </div>

                    <!-- ITEM -->
                    <li class="text-sm text-gray-500 ">
                        <a href="/frontBanner"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                            <div class="pr-2">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M19.6471 15.5357V8C19.6471 6.11438 19.6471 5.17157 19.0613 4.58579C18.4755 4 17.5327 4 15.6471 4H12M19.6471 15.5357L21.3911 17.3358C21.4356 17.3818 21.4579 17.4048 21.4787 17.4276C21.7998 17.7802 21.9843 18.2358 21.999 18.7124C22 18.7433 22 18.7753 22 18.8393C22 18.9885 22 19.0631 21.996 19.1261C21.9325 20.1314 21.1314 20.9325 20.1261 20.996C20.0631 21 19.9885 21 19.8393 21H4.16068C4.01148 21 3.93688 21 3.87388 20.996C2.86865 20.9325 2.06749 20.1314 2.00398 19.1261C2 19.0631 2 18.9885 2 18.8393C2 18.7753 2 18.7433 2.00096 18.7124C2.01569 18.2358 2.20022 17.7802 2.52127 17.4276C2.54208 17.4048 2.56438 17.3818 2.60888 17.3358L4.35294 15.5357M19.6471 15.5357H17.0357M4.35294 15.5357V8C4.35294 6.11438 4.35294 5.17157 4.93873 4.58579C5.52451 4 6.46732 4 8.35294 4M4.35294 15.5357H13" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M9.5 18.5H14.5" stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M12.75 6.75C12.75 7.16421 12.4142 7.5 12 7.5C11.5858 7.5 11.25 7.16421 11.25 6.75C11.25 6.33579 11.5858 6 12 6C12.4142 6 12.75 6.33579 12.75 6.75Z" fill="#6b7280"></path>
                                    </g>
                                </svg>
                            </div>
                            <div>Banner</div>
                        </a>
                    </li>

                    <!-- Section Devider -->
                    <div class="section border-b pt-4 mb-4 text-xs text-gray-600 border-gray-700 pb-1 pl-3">
                        Managment
                    </div>

                    <!-- ITEM -->
                    <li class="text-sm text-gray-500 ">
                        <a href="/AddProduct"
                            class="flex items-center w-full py-1 px-2 rounded relative text-white bg-gray-700 ">
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
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
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
                    <!-- Section Devider -->
                    <div class="section border-b pt-4 mb-4 text-xs text-gray-600 border-gray-700 pb-1 pl-3">
                        Pages
                    </div>

                    <!-- ITEM -->
                    <li class="text-sm text-gray-500 ">
                        <a href="/frontMission"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                            <div class="pr-2">
                                <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" class="h-4 w-4" fill="#9ca3af">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <style type="text/css">
                                            .st0 {
                                                fill: none;
                                                stroke: #4b6b73;
                                                stroke-width: 2;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-miterlimit: 10;
                                            }
                                        </style>
                                        <line class="st0" x1="16" y1="16" x2="22" y2="10"></line>
                                        <polygon class="st0" points="30,6 26,6 26,2 22,6 22,10 26,10 "></polygon>
                                        <circle class="st0" cx="16" cy="16" r="6"></circle>
                                        <path class="st0" d="M27,9c1.3,2,2,4.4,2,7c0,7.2-5.8,13-13,13S3,23.2,3,16S8.8,3,16,3c2.6,0,5,0.7,7,2"></path>
                                    </g>
                                </svg>
                            </div>
                            <div>Mission</div>
                        </a>
                    </li>
                    <li class="text-sm text-gray-500 ">
                        <a href="/frontContact"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                            <div class="pr-2">
                                <svg fill="#9ca3af" version="1.1" id="Layer_1" class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 337.559 337.559" xml:space="preserve" width="64px" height="64px">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M337.559,67.704v-28.33c0-17.506-14.242-31.748-31.748-31.748h-54.572c-4.932-3.021-10.727-4.765-16.922-4.765H32.5 C14.58,2.86,0,17.44,0,35.36v266.838c0,17.921,14.58,32.5,32.5,32.5h201.816c6.196,0,11.992-1.745,16.925-4.767h54.569 c17.506,0,31.748-14.242,31.748-31.748v-28.33c0-9.715-4.391-18.42-11.287-24.248c6.896-5.828,11.287-14.533,11.287-24.248 v-28.331c0-9.715-4.391-18.42-11.287-24.248c6.896-5.828,11.287-14.533,11.287-24.248V116.2c0-9.715-4.391-18.42-11.287-24.248 C333.168,86.123,337.559,77.418,337.559,67.704z M251.816,302.198c0,9.649-7.851,17.5-17.5,17.5H32.5 c-9.649,0-17.5-7.851-17.5-17.5V35.36c0-9.649,7.851-17.5,17.5-17.5h201.816c9.649,0,17.5,7.851,17.5,17.5V302.198z M322.559,298.184c0,9.235-7.513,16.748-16.748,16.748h-41.595c1.673-3.912,2.601-8.216,2.601-12.733v-49.093h38.994 c9.235,0,16.748,7.513,16.748,16.748V298.184z M322.559,221.357c0,9.235-7.513,16.748-16.748,16.748h-38.994v-61.827h38.994 c9.235,0,16.748,7.513,16.748,16.748V221.357z M322.559,144.53c0,9.235-7.513,16.748-16.748,16.748h-38.994V99.451h38.994 c9.235,0,16.748,7.513,16.748,16.748V144.53z M322.559,67.704c0,9.235-7.513,16.748-16.748,16.748h-38.994V35.36 c0-4.518-0.929-8.822-2.602-12.735h41.596c9.235,0,16.748,7.513,16.748,16.748V67.704z"></path>
                                                    <rect x="40.413" y="230.024" width="185.991" height="15"></rect>
                                                    <path d="M66.891,206.201h133.035c2.263,0,4.405-1.021,5.829-2.78c1.424-1.759,1.978-4.066,1.507-6.279 c-3.595-16.907-13.071-32.176-26.474-43.02c8.782-10.818,13.689-24.438,13.689-38.522c0-33.674-27.396-61.07-61.07-61.07 s-61.07,27.396-61.07,61.07c0,14.084,4.908,27.704,13.689,38.522c-13.402,10.844-22.878,26.112-26.472,43.02 c-0.471,2.213,0.083,4.521,1.507,6.279C62.486,205.18,64.628,206.201,66.891,206.201z M101.343,161.584 c1.988-1.245,3.279-3.35,3.488-5.687c0.209-2.337-0.687-4.637-2.422-6.216c-9.579-8.718-15.072-21.14-15.072-34.081 c0-25.403,20.667-46.07,46.07-46.07c25.403,0,46.07,20.667,46.07,46.07c0,12.941-5.494,25.363-15.072,34.081 c-1.735,1.579-2.631,3.879-2.422,6.216c0.209,2.337,1.5,4.441,3.488,5.687c11.154,6.989,19.735,17.49,24.42,29.618H76.923 C81.608,179.074,90.189,168.571,101.343,161.584z"></path>
                                                    <rect x="63.83" y="259.688"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>Contact</div>
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


                            <div class="hidden lg:block">
                                <!-- Search -->
                                <form action="" class="app-search" method="GET">
                                    <div class="relative group ">
                                        <input type="text"
                                            class="form-input rounded-md bg-gray-700 text-sm text-gray-300 pl-10 py-1.5 ml-5 border-transparent border-none outline-none focus:ring-0 focus:text-white transition-all duration-300 ease-in-out focus:w-60 w-48"
                                            placeholder="Search..." autocomplete="off">
                                        <span
                                            class="absolute left-44 bottom-2 text-gray-400 transition-all duration-300 ease-in-out group-focus-within:left-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                </form>
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
                                    <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20" style="background-color: rgb(55, 65, 81); color: white;">
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                            @csrf
                                            <button type="submit" class="block px-4 py-2 text-sm text-white  rounded w-full text-left" @click=" open=false">
                                                Logout
                                            </button>
                                        </form>
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

                        <aEvintas href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</aEvintas>
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
                <div class="border-b bg-white border-gray-300 pl-6 py-2 shadow-sm  text-xl font-bold">
                    Upload Product
                    <span class="block text-xs font-normal text-gray-300 mt-2">
                        <a href="#">Home</a> &raquo;
                        <a href="#">Projects</a> &raquo;
                        <a href="#">Active</a> &raquo;
                        <a href="#">Test</a>
                    </span>
                </div>
                <div class="bg-gray-100 min-h-screen flex justify-center items-center p-6">
                    <div class="bg-white p-8 rounded-lg shadow-md" style="width: 98%;margin-top: -11%;">
                        <!-- Product Upload Form -->
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Product Name and Price -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md" style="border: 1px solid #cbc2c2e3;">
                                        <svg id="Layer_1" height="1rem" width="1rem" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 114.58">
                                            <title>product</title>
                                            <path d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                        </svg>
                                        <input type="text" id="product_name" name="name" class="flex-1 focus:outline-none" placeholder="Product Name" />
                                    </div>
                                </div>

                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md" style="border: 1px solid #cbc2c2e3;">
                                        <svg version="1.1" id="Layer_1" height="1rem" width="1rem" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.406px" height="122.881px" viewBox="0 0 122.406 122.881" enable-background="new 0 0 122.406 122.881" xml:space="preserve">
                                            <g>
                                                <path d="M72.041,44.723c1.405,0.187,2.665,0.835,3.62,1.791c1.141,1.14,1.846,2.716,1.846,4.456c0,1.74-0.705,3.315-1.846,4.456 c-1.141,1.141-2.716,1.846-4.456,1.846s-3.315-0.706-4.456-1.846c-1.14-1.14-1.846-2.716-1.846-4.456 c0-1.671,0.65-3.19,1.712-4.318c0.914-3.399,1.889-6.579,2.911-9.549H50.868L5.128,82.842l34.908,34.91l45.719-45.719 l-1.149-34.931H74.501C73.648,39.487,72.826,42.024,72.041,44.723L72.041,44.723z M43.321,85.219 c0.979-0.979,1.507-1.99,1.577-3.027c0.077-1.043-0.248-2.424-0.967-4.135c-0.725-1.717-1.348-3.346-1.87-4.885 s-0.814-3.014-0.897-4.432c-0.07-1.42,0.134-2.768,0.624-4.045c0.477-1.279,1.348-2.545,2.607-3.804 c2.099-2.099,4.535-3.123,7.314-3.065c2.773,0.063,5.457,1.158,8.04,3.294l2.881,3.034c1.946,2.607,2.799,5.33,2.557,8.166 c-0.235,2.83-1.532,5.426-3.893,7.785l-6.296-6.297c1.291-1.291,2.035-2.531,2.238-3.727c0.191-1.197-0.165-2.252-1.081-3.168 c-0.821-0.82-1.717-1.195-2.69-1.139c-0.967,0.064-1.908,0.547-2.817,1.457c-0.922,0.922-1.393,1.914-1.412,2.977 c-0.019,1.063,0.306,2.416,0.973,4.064c0.661,1.652,1.24,3.25,1.736,4.801c0.496,1.553,0.782,3.035,0.858,4.445 c0.076,1.426-0.127,2.787-0.591,4.104c-0.477,1.316-1.336,2.596-2.588,3.848c-2.125,2.125-4.522,3.186-7.212,3.18 s-5.311-1.063-7.855-3.16l-3.747,3.746l-2.964-2.965l3.766-3.764c-2.423-2.996-3.568-5.998-3.447-9.02 c0.127-3.014,1.476-5.813,4.045-8.383l6.278,6.277c-1.412,1.412-2.175,2.799-2.277,4.16c-0.108,1.367,0.414,2.627,1.571,3.783 c0.839,0.84,1.755,1.26,2.741,1.242C41.508,86.549,42.443,86.096,43.321,85.219L43.321,85.219z M71.077,32.853 c7.116-18.397,16.244-27.775,24.729-31.22c8.027-3.258,15.521-1.369,20.513,3.258c4.963,4.602,7.403,11.919,5.367,19.555 c-2.478,9.289-11.631,19.046-31.114,24.54c-0.456,0.128-0.918,0.112-1.339-0.021l0.785,23.858c0.019,0.609-0.221,1.164-0.619,1.564 l0.005,0.004l-47.865,47.865c-0.83,0.83-2.175,0.83-3.004,0L0.622,84.346c-0.83-0.83-0.83-2.176,0-3.006l47.865-47.864 c0.415-0.415,0.958-0.622,1.502-0.622v0H71.077L71.077,32.853z M89.088,44.53c0.069-0.027,0.142-0.051,0.215-0.072 c17.59-4.96,25.738-13.337,27.837-21.208c1.563-5.859-0.271-11.437-4.023-14.917c-3.726-3.454-9.394-4.833-15.542-2.337 c-7.226,2.933-15.051,11.011-21.457,26.856h10.538c1.173,0,2.124,0.951,2.124,2.125c0,0.035-0.001,0.071-0.003,0.106L89.088,44.53 L89.088,44.53z" />
                                            </g>
                                        </svg>
                                        <input type="number" id="price" name="price" step="0.01" class="flex-1 focus:outline-none" placeholder="Price" />
                                    </div>

                                </div>
                            </div>

                            <!-- Brand and Product Image in the Same Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                                <!-- Product Brand -->
                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md" style="border: 1px solid #cbc2c2e3;">
                                        <svg version="1.1" id="Layer_1" height="1rem" width="1rem" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 71.69 122.88" style="enable-background:new 0 0 71.69 122.88" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0" d="M1.19,0.02h25.91l23.34,42.45c0.5,0.9,1.23,1.61,2.06,2.06H17.66L1.19,0V0.02L1.19,0.02z M35.85,51.19 c19.8,0,35.85,16.05,35.85,35.85s-16.05,35.85-35.85,35.85C16.05,122.88,0,106.83,0,87.03S16.05,51.19,35.85,51.19L35.85,51.19z M35.85,66.34l5.99,14.62l15.77,1.19L45.54,92.39l3.75,15.34L35.85,99.4l-13.44,8.33l3.75-15.34L14.08,82.14l15.77-1.19 L35.85,66.34L35.85,66.34L35.85,66.34z M39.03,0.02h30.32L57.15,33L39.03,0.02L39.03,0.02z" />
                                            </g>
                                        </svg>
                                        <input type="text" id="brand" name="brand" class="flex-1 focus:outline-none" placeholder="Brand" />
                                    </div>
                                </div>


                                <!-- Product Image -->
                                <div>
                                    <div>
                                        <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md" style="border: 1px solid #cbc2c2e3;">
                                            <svg version="1.1" height="1rem" width="1rem" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 102.55 122.88" style="enable-background:new 0 0 102.55 122.88" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill-rule: evenodd;
                                                        clip-rule: evenodd;
                                                    }
                                                </style>
                                                <g>
                                                    <path class="st0" d="M102.55,122.88H0V0h77.66l24.89,26.44L102.55,122.88L102.55,122.88z M29.82,45.51c4.33,0,7.84,3.5,7.84,7.83 c0,4.32-3.51,7.83-7.84,7.83c-4.32,0-7.83-3.51-7.83-7.83C21.99,49.01,25.5,45.51,29.82,45.51L29.82,45.51z M62.71,75.27 l14.02-24.24l2.07-3.57l1.52,3.84l9.45,44.84h-75.3v-9.12l2.87-0.1l5.26-0.27l6.06-14.81l3.77,0.2l2.84,9.98l6.92,0l8-20.59 l1.43-3.69l2.12,3.33L62.71,75.27L62.71,75.27L62.71,75.27z M96.13,115.98V32.36H73.45V5.91H6.51v110.07H96.13L96.13,115.98 L96.13,115.98z" />
                                                </g>
                                            </svg>
                                            <input type="file" id="image" name="image" class="flex-1 focus:outline-none" placeholder="Brand" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Product Details Field Below Brand and Image Row -->
                            <div class="mb-4">
                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md" style="border: 1px solid #cbc2c2e3;">

                                        <textarea id="details" name="details" rows="4" class="flex-1 focus:outline-none" placeholder="Details"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-600 text-white font-semibold text-lg px-8 py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none transition duration-200">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- Custom Toast Notification HTML -->
                @if(session('success'))
                <div id="custom-toast" class="custom-toast">
                    <p>{{ session('success') }}</p>
                </div>
                @endif
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
