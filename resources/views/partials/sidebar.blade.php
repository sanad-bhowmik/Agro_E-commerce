 <!-- sidebar -->
 <div class="sidebar max-h-screen top-0 h-screen bg-gray-800 text-blue-100 w-64 fixed inset-y-0 left-0 transform transition duration-200 ease-in-out z-50"
            x-data="{ open: true }" x-on:togglesidebar.window=" open = !open" x-show="true" :class="open === true ? 'md:translate-x-0 md:sticky ' : '-translate-x-full' ">


            <header class=" h-[64px] py-2 shadow-lg px-4 md:sticky top-0 bg-gray-800 z-40">
                <!-- logo -->
                <a href="#" class="text-white flex items-center space-x-2 group hover:text-white">
                    <div>
                        <svg height="44px" width="44px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 504.125 504.125"
                            xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#3A7F0D;"
                                    d="M339.772,0c0,0,44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193 c7.877-70.357,41.653-225.485,186.888-260.884c0,0-135.176,50.546-147.117,279.347c69.459,9.752,232.361,16.305,280.726-125.062 C489.536,187.817,339.772,0,339.772,0z">
                                </path>
                                <path style="fill:#49A010;"
                                    d="M145.007,498.704c147.456-58.849,254.748-196.71,269.556-361.283C384.418,56.107,339.772,0,339.772,0 s44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193c7.877-70.357,41.653-225.485,186.888-260.884 C292.053,220.31,157.279,270.73,145.007,498.704z">
                                </path>
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
            <nav class="px-4 pt-4 scroller overflow-y-scroll max-h-[calc(100vh-64px)]" x-data="{selected:'Tasks'}"
                style="margin-top: 10%;">
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
                                        <path
                                            d="M19.6471 15.5357V8C19.6471 6.11438 19.6471 5.17157 19.0613 4.58579C18.4755 4 17.5327 4 15.6471 4H12M19.6471 15.5357L21.3911 17.3358C21.4356 17.3818 21.4579 17.4048 21.4787 17.4276C21.7998 17.7802 21.9843 18.2358 21.999 18.7124C22 18.7433 22 18.7753 22 18.8393C22 18.9885 22 19.0631 21.996 19.1261C21.9325 20.1314 21.1314 20.9325 20.1261 20.996C20.0631 21 19.9885 21 19.8393 21H4.16068C4.01148 21 3.93688 21 3.87388 20.996C2.86865 20.9325 2.06749 20.1314 2.00398 19.1261C2 19.0631 2 18.9885 2 18.8393C2 18.7753 2 18.7433 2.00096 18.7124C2.01569 18.2358 2.20022 17.7802 2.52127 17.4276C2.54208 17.4048 2.56438 17.3818 2.60888 17.3358L4.35294 15.5357M19.6471 15.5357H17.0357M4.35294 15.5357V8C4.35294 6.11438 4.35294 5.17157 4.93873 4.58579C5.52451 4 6.46732 4 8.35294 4M4.35294 15.5357H13"
                                            stroke="#6b7280" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M9.5 18.5H14.5" stroke="#6b7280" stroke-width="1.5"
                                            stroke-linecap="round"></path>
                                        <path
                                            d="M12.75 6.75C12.75 7.16421 12.4142 7.5 12 7.5C11.5858 7.5 11.25 7.16421 11.25 6.75C11.25 6.33579 11.5858 6 12 6C12.4142 6 12.75 6.33579 12.75 6.75Z"
                                            fill="#6b7280"></path>
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
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
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
                                <svg fill="#6b7280" class="h-4 w-4" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 467.2 467.2" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path
                                                    d="M455.146,120.9l-91.7-116.3c-2.3-2.9-5.7-4.6-9.4-4.6h-240.8c-3.7,0-7.1,1.7-9.4,4.6l-91.7,116.3 c-1.7,2.1-2.6,4.7-2.6,7.4v326.9c0,6.6,5.4,12,12,12h424.1c6.6,0,12-5.4,12-12V128.3C457.746,125.6,456.846,123,455.146,120.9z M422.546,118.3h-176.9V24h102.6L422.546,118.3z M119.046,24h102.6v94.3h-176.9L119.046,24z M33.546,443.2V142.3h400.1v300.9 L33.546,443.2L33.546,443.2z">
                                                </path>
                                                <path
                                                    d="M313.146,214.1c-4.7-4.7-12.3-4.7-17,0L154.246,356c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5 l141.9-141.9C317.846,226.4,317.846,218.8,313.146,214.1z">
                                                </path>
                                                <path
                                                    d="M287.046,298.8c-11.2,0-21.7,4.3-29.6,12.2c-16.3,16.3-16.3,42.8,0,59.1c7.9,7.9,18.4,12.2,29.6,12.2s21.7-4.3,29.6-12.2 s12.2-18.4,12.2-29.6s-4.3-21.7-12.2-29.6S298.146,298.8,287.046,298.8z M299.646,353.2c-3.4,3.4-7.8,5.2-12.6,5.2 c-4.8,0-9.2-1.9-12.6-5.2c-6.9-6.9-6.9-18.2,0-25.2c3.4-3.4,7.8-5.2,12.6-5.2c4.8,0,9.2,1.9,12.6,5.2s5.2,7.8,5.2,12.6 C304.846,345.4,302.946,349.8,299.646,353.2z">
                                                </path>
                                                <path
                                                    d="M209.846,276.5c16.3-16.3,16.3-42.8,0-59.1c-7.9-7.9-18.4-12.2-29.6-12.2s-21.7,4.3-29.6,12.2 c-16.3,16.3-16.3,42.8,0,59.1c7.9,7.9,18.4,12.2,29.6,12.2S201.946,284.4,209.846,276.5z M167.646,234.3c3.4-3.4,7.8-5.2,12.6-5.2 s9.2,1.9,12.6,5.2c6.9,6.9,6.9,18.2,0,25.2c-3.4,3.4-7.8,5.2-12.6,5.2s-9.2-1.9-12.6-5.2 C160.746,252.6,160.746,241.3,167.646,234.3z">
                                                </path>
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
                                <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"
                                    class="h-4 w-4" fill="#9ca3af">
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
                                        <path class="st0"
                                            d="M27,9c1.3,2,2,4.4,2,7c0,7.2-5.8,13-13,13S3,23.2,3,16S8.8,3,16,3c2.6,0,5,0.7,7,2">
                                        </path>
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
                                <svg fill="#9ca3af" version="1.1" id="Layer_1" class="h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 337.559 337.559" xml:space="preserve" width="64px" height="64px">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M337.559,67.704v-28.33c0-17.506-14.242-31.748-31.748-31.748h-54.572c-4.932-3.021-10.727-4.765-16.922-4.765H32.5 C14.58,2.86,0,17.44,0,35.36v266.838c0,17.921,14.58,32.5,32.5,32.5h201.816c6.196,0,11.992-1.745,16.925-4.767h54.569 c17.506,0,31.748-14.242,31.748-31.748v-28.33c0-9.715-4.391-18.42-11.287-24.248c6.896-5.828,11.287-14.533,11.287-24.248 v-28.331c0-9.715-4.391-18.42-11.287-24.248c6.896-5.828,11.287-14.533,11.287-24.248V116.2c0-9.715-4.391-18.42-11.287-24.248 C333.168,86.123,337.559,77.418,337.559,67.704z M251.816,302.198c0,9.649-7.851,17.5-17.5,17.5H32.5 c-9.649,0-17.5-7.851-17.5-17.5V35.36c0-9.649,7.851-17.5,17.5-17.5h201.816c9.649,0,17.5,7.851,17.5,17.5V302.198z M322.559,298.184c0,9.235-7.513,16.748-16.748,16.748h-41.595c1.673-3.912,2.601-8.216,2.601-12.733v-49.093h38.994 c9.235,0,16.748,7.513,16.748,16.748V298.184z M322.559,221.357c0,9.235-7.513,16.748-16.748,16.748h-38.994v-61.827h38.994 c9.235,0,16.748,7.513,16.748,16.748V221.357z M322.559,144.53c0,9.235-7.513,16.748-16.748,16.748h-38.994V99.451h38.994 c9.235,0,16.748,7.513,16.748,16.748V144.53z M322.559,67.704c0,9.235-7.513,16.748-16.748,16.748h-38.994V35.36 c0-4.518-0.929-8.822-2.602-12.735h41.596c9.235,0,16.748,7.513,16.748,16.748V67.704z">
                                                    </path>
                                                    <rect x="40.413" y="230.024" width="185.991" height="15"></rect>
                                                    <path
                                                        d="M66.891,206.201h133.035c2.263,0,4.405-1.021,5.829-2.78c1.424-1.759,1.978-4.066,1.507-6.279 c-3.595-16.907-13.071-32.176-26.474-43.02c8.782-10.818,13.689-24.438,13.689-38.522c0-33.674-27.396-61.07-61.07-61.07 s-61.07,27.396-61.07,61.07c0,14.084,4.908,27.704,13.689,38.522c-13.402,10.844-22.878,26.112-26.472,43.02 c-0.471,2.213,0.083,4.521,1.507,6.279C62.486,205.18,64.628,206.201,66.891,206.201z M101.343,161.584 c1.988-1.245,3.279-3.35,3.488-5.687c0.209-2.337-0.687-4.637-2.422-6.216c-9.579-8.718-15.072-21.14-15.072-34.081 c0-25.403,20.667-46.07,46.07-46.07c25.403,0,46.07,20.667,46.07,46.07c0,12.941-5.494,25.363-15.072,34.081 c-1.735,1.579-2.631,3.879-2.422,6.216c0.209,2.337,1.5,4.441,3.488,5.687c11.154,6.989,19.735,17.49,24.42,29.618H76.923 C81.608,179.074,90.189,168.571,101.343,161.584z">
                                                    </path>
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

                    <li class="text-sm text-gray-500 ">
                        <a href="/frontGallery"
                            class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
                            <div class="pr-2">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M2 12.5001L3.75159 10.9675C4.66286 10.1702 6.03628 10.2159 6.89249 11.0721L11.1822 15.3618C11.8694 16.0491 12.9512 16.1428 13.7464 15.5839L14.0446 15.3744C15.1888 14.5702 16.7369 14.6634 17.7765 15.599L21 18.5001"
                                            stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M17 2V11M17 2L20 5M17 2L14 5" stroke="#9ca3af" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 10.8717 2 9.87835 2.02008 9M12 2C7.28595 2 4.92893 2 3.46447 3.46447C3.03965 3.88929 2.73806 4.38921 2.52396 5"
                                            stroke="#9ca3af" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div>Gallery</div>
                        </a>
                    </li>

                </ul>
            </nav>


        </div>
        <!-- End sidebar -->
