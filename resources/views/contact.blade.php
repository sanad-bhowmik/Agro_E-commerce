<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="https://png.pngtree.com/png-vector/20230212/ourmid/pngtree-organic-fair-and-agro-garden-logo-design-png-image_6593571.png">
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
        <button id="scrollUpBtn" class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50" style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>



    <!-- Navbar -->
    <nav class="sticky top-0 z-50 relative px-4 py-4 flex justify-between items-center bg-white " style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <a class="text-3xl font-bold leading-none" href="#">
            <svg class="h-10" alt="logo" viewBox="0 0 10240 10240">
                <path xmlns="http://www.w3.org/2000/svg" d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"></path>
            </svg>
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm  hover:text-gray-500 text-gray-400" href="/">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li class="relative">
                <a class="text-sm text-gray-400 hover:text-gray-500" href="/about" id="about-link">About Us</a>
                <!-- Dropdown Arrow SVG -->
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>

            <!-- Submenu -->
            <ul id="submenu" class="absolute left-0 mt-2 space-y-2 p-3 hidden" style="margin-top: 29%;margin-left: 21%;width: 27%;border-radius: 6px;background: rgba(255, 255, 255, 0.7);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);border: 1px solid rgba(255, 255, 255, 0.3);">
                <li><a href="/mission" class="block text-sm hover:text-white hover:bg-black" style="height: 17%;font-size: 15px;font-family: monospace;width: 119%;margin-left: -10px;padding: 10px;text-align: center;">Mission</a></li>
            </ul>
            </li>


            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/product">Products</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-gray-400 hover:text-gray-500" href="/price">Pricing</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-blue-600 font-bold hover:text-gray-500" href="/contact">Contact</a></li>
        </ul>
        <ul class="hidden lg:flex space-x-6 items-center">
            <li><a class="text-sm text-blue-600 font-bold uppercase hover:underline" href="/login"><i class="fas fa-sign-in-alt"></i></a></li>
        </ul>
    </nav>


    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <svg class="h-12" alt="logo" viewBox="0 0 10240 10240">
                        <path xmlns="http://www.w3.org/2000/svg" d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"></path>
                    </svg>
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/about">About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/product">product</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/price">Pricing</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2024</span>
                </p>
            </div>
        </nav>
    </div>
    <!-- Navbar -->

    <br><br>
    <br>
    <br>

    <div class="max-w-screen-lg mx-auto p-5">
        <div class="grid grid-cols-1 md:grid-cols-12 border">
            <div class="bg-gray-900 md:col-span-4 p-10 text-white">
                <p class="mt-4 text-sm leading-7 font-regular uppercase">
                    Contact
                </p>
                <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
                    Get In <span class="text-indigo-600">Touch</span>
                </h3>
                <p class="mt-4 leading-7 text-gray-200">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <div class="flex items-center mt-5">
                    <svg class="h-6 mr-2 text-indigo-600" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489.536 489.536" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 489.536 489.536">
                        <g>
                            <g>
                                <path d="m488.554,476l-99-280.2c-1-4.2-5.2-7.3-9.4-7.3h-45.6c12.9-31.1 19.6-54.9 19.6-70.8 0-64.6-50-117.7-112.5-117.7-61.5,0-112.5,52.1-112.5,117.7 0,17.6 8.2,43.1 19.9,70.8h-39.7c-4.2,0-8.3,3.1-9.4,7.3l-99,280.2c-3.2,10.3 6.3,13.5 9.4,13.5h468.8c4.2,0.5 12.5-4.2 9.4-13.5zm-246.9-455.3c51,1.06581e-14 91.7,43.7 91.7,96.9 0,56.5-79.2,182.3-91.7,203.1-31.3-53.1-91.7-161.5-91.7-203.1 0-53.1 40.6-96.9 91.7-96.9zm-216.7,448l91.7-259.4h41.7c29.9,64.1 83.3,151 83.3,151s81.4-145.7 83.8-151h47.4l91.7,259.4h-439.6z" />
                                <rect width="136.5" x="177.054" y="379.1" height="20.8" />
                                <path d="m289.554,108.2c0-26-21.9-47.9-47.9-47.9s-47.9,21.9-47.9,47.9 20.8,47.9 47.9,47.9c27.1,0 47.9-21.8 47.9-47.9zm-75-1c0-14.6 11.5-27.1 27.1-27.1s27.1,12.5 27.1,27.1-11.5,27.1-27.1,27.1c-14.6,2.84217e-14-27.1-12.5-27.1-27.1z" />
                            </g>
                        </g>
                    </svg>
                    <span class="text-sm">{{ $contact->address }}</span>
                </div>
                <div class="flex items-center mt-5">
                    <svg class="h-6 mr-2 text-indigo-600" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 60.002 60.002" style="enable-background:new 0 0 60.002 60.002;" xml:space="preserve">
                        <g>
                            <path d="M59.002,37.992c-3.69,0-6.693-3.003-6.693-6.693c0-0.553-0.447-1-1-1s-1,0.447-1,1c0,4.794,3.899,8.693,8.693,8.693
		c0.553,0,1-0.447,1-1S59.554,37.992,59.002,37.992z" />
                            <path d="M58.256,35.65c0.553,0,1-0.447,1-1s-0.447-1-1-1c-0.886,0-1.605-0.72-1.605-1.605c0-0.553-0.447-1-1-1s-1,0.447-1,1
		C54.65,34.033,56.267,35.65,58.256,35.65z" />
                            <path d="M20.002,2.992c3.691,0,6.693,3.003,6.693,6.693c0,0.553,0.448,1,1,1s1-0.447,1-1c0-4.794-3.9-8.693-8.693-8.693
		c-0.552,0-1,0.447-1,1S19.449,2.992,20.002,2.992z" />
                            <path d="M19.748,6.334c0,0.553,0.448,1,1,1c0.885,0,1.604,0.72,1.604,1.605c0,0.553,0.448,1,1,1s1-0.447,1-1
		c0-1.988-1.617-3.605-3.604-3.605C20.196,5.334,19.748,5.781,19.748,6.334z" />
                            <path d="M44.076,37.889c-1.276-0.728-2.597-0.958-3.721-0.646c-0.844,0.234-1.532,0.768-1.996,1.546
		c-1.02,1.22-2.286,2.646-2.592,2.867c-2.367,1.604-4.25,1.415-6.294-0.629L17.987,29.542c-2.045-2.045-2.233-3.928-0.631-6.291
		c0.224-0.31,1.65-1.575,2.87-2.596c0.778-0.464,1.312-1.152,1.546-1.996c0.311-1.123,0.082-2.444-0.652-3.731
		c-0.173-0.296-4.291-7.27-8.085-9.277c-1.926-1.019-4.255-0.669-5.796,0.872L4.7,9.059c-4.014,4.014-5.467,8.563-4.321,13.52
		c0.956,4.132,3.742,8.529,8.282,13.068l14.705,14.706c5.762,5.762,11.258,8.656,16.298,8.656c3.701,0,7.157-1.562,10.291-4.695
		l2.537-2.537c1.541-1.541,1.892-3.87,0.872-5.796C51.356,42.186,44.383,38.069,44.076,37.889z M51.078,50.363L48.541,52.9
		c-6.569,6.567-14.563,5.235-23.76-3.961L10.075,34.233c-4.271-4.271-6.877-8.344-7.747-12.104
		c-0.995-4.301,0.244-8.112,3.786-11.655l2.537-2.537c0.567-0.566,1.313-0.862,2.07-0.862c0.467,0,0.939,0.112,1.376,0.344
		c3.293,1.743,7.256,8.454,7.29,8.511c0.449,0.787,0.62,1.608,0.457,2.196c-0.1,0.36-0.324,0.634-0.684,0.836l-0.15,0.104
		c-0.853,0.712-2.883,2.434-3.308,3.061c-0.612,0.904-1.018,1.792-1.231,2.665c-0.711-1.418-1.286-3.06-1.475-4.881
		c-0.057-0.548-0.549-0.935-1.098-0.892c-0.549,0.058-0.949,0.549-0.892,1.099c0.722,6.953,6.129,11.479,6.359,11.668
		c0.025,0.02,0.054,0.028,0.08,0.045l10.613,10.613c0.045,0.045,0.092,0.085,0.137,0.129c0.035,0.051,0.058,0.108,0.104,0.154
		c0.189,0.187,4.704,4.567,11.599,5.283c0.035,0.003,0.07,0.005,0.104,0.005c0.506,0,0.94-0.383,0.994-0.896
		c0.057-0.55-0.342-1.041-0.892-1.099c-2.114-0.219-3.987-0.839-5.548-1.558c0.765-0.23,1.543-0.612,2.332-1.146
		c0.628-0.426,2.35-2.455,3.061-3.308l0.104-0.151c0.202-0.359,0.476-0.583,0.836-0.684c0.588-0.159,1.409,0.008,2.186,0.45
		c0.067,0.04,6.778,4.003,8.521,7.296C52.202,48.062,51.994,49.447,51.078,50.363z" />
                        </g>
                    </svg>
                    <span class="text-sm">{{ $contact->number }}</span>
                </div>
                <div class="flex items-center mt-5">
                    <svg class="h-6 mr-2 text-indigo-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#5a67d8"></path>
                        </g>
                    </svg>
                    <span class="text-sm">{{ $contact->email }}</span>
                </div>
                <div class="flex items-center mt-5">
                    <svg class="h-6 mr-2 text-indigo-600" fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 300.988 300.988" style="enable-background:new 0 0 300.988 300.988;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493
                S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001
                s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z" />
                                <polygon points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		" />
                            </g>
                    </svg>
                    <span class="text-sm">24/7</span>
                </div>

            </div>
            <form class="md:col-span-8 p-10">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            First Name
                        </label>
                        <input class="appearance-none bg-transparent border-b border-red-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" placeholder="Jane" aria-label="Full name">
                        <p class="text-red-500 text-xs italic mt-1">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Last Name
                        </label>
                        <input class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" placeholder="Doe" aria-label="Full name">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Email Address
                        </label>
                        <input class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="email" placeholder="jane@exp.com" aria-label="Full name">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Your Message
                        </label>
                        <textarea rows="10" class="appearance-none bg-transparent border-b border-indigo-500 w-full text-gray-700 mr-3 p-4 focus:bg-gray-200 leading-tight focus:outline-none" type="email" placeholder="jane@exp.com" aria-label="Full name">

      </textarea>
                    </div>
                    <div class="flex justify-between w-full px-3">
                        <div class="md:flex md:items-center">
                            <label class="block text-gray-500 font-bold">
                                <input class="mr-2 leading-tight" type="checkbox">
                                <span class="text-sm">
                                    Send me your newsletter!
                                </span>
                            </label>
                        </div>
                        <button class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
                            Send Message
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>









    <footer class="text-gray-400 bg-black body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
                <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
</body>

</html>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
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
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
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
