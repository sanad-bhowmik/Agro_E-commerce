<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Eventas | About</title>
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

    <div class="">
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50"
            style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>
    <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
        <div
            class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
            <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block"
                viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                <path d="M50 0H100L50 100H0L50 0Z"></path>
            </svg>
            <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                src="https://www.shafiagro.com/wp-content/uploads/2024/05/about-image.png" alt="" />
        </div>
        <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
            <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
                <p
                    class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                    AGRO
                </p>
                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    About Us<br class="hidden md:block" />
                    Your Trusted
                    <span class="inline-block text-deep-purple-accent-400">Partner</span>
                </h2>
                At Eventas Crop Care Limited, we are a modern Bangladeshi agro e-commerce company dedicated to offering
                natural, healthy, and eco-friendly food products. Our mission is to deliver the highest quality
                agricultural goods and food items that are safe, sustainable, and proudly rooted in Bangladesh's rich
                agricultural heritage.
                <div class="flex items-center ">

                    <a href="/" aria-label=""
                        class="inline-flex learnm items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn
                        more</a>
                </div>
            </div>
        </div>
    </div>



    <style>
        .learnm {
            border: 1px solid gold;
            padding: 10px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .learnm:hover {
            background-image: linear-gradient(107.7deg, rgba(235, 230, 44, 0.55) 8.4%, rgba(252, 152, 15, 1) 90.3%);
            border: 1px solid white;
            color: white;
        }
    </style>

    <section class="text-gray-700 body-font border-t border-gray-200"
        style="background-image: url(https://cdn.pixabay.com/photo/2016/01/11/16/15/wheat-1133859_640.png);background-repeat: no-repeat;background-color: #faf6f3;">
        <div class="container px-5 py-24 mx-auto" style="">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">OUR SERVICES</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Delivering Freshness,
                    Sustainability, and Quality</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Farm-Fresh Products</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">We bring farm-fresh, organic, and locally sourced
                                products right to your doorstep. Our partnerships with farmers ensure you get the best,
                                straight from the source.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Sustainability Focused</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Our products support sustainable farming practices,
                                ensuring that you contribute to the environment while enjoying fresh, healthy food. We
                                believe in eco-friendly solutions for future generations.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <circle cx="6" cy="6" r="3"></circle>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Customer-Centric Approach</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">We prioritize our customers' needs by ensuring timely
                                deliveries, fresh products, and exceptional customer service. Your satisfaction is our
                                success.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden"
            style="height: 455px;">
            <div class="absolute inset-0 bg-fixed bg-cover bg-center"
                style="background-image: url('https://sikkoindia.in/wp-content/uploads/2022/01/Slide-1-1.bk.jpg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>


            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 items-center h-full text-center text-white">
                <!-- Mission Card -->
                <div class="p-6 bg-opacity-50" style="width: 570px;height: 331px;">
                    <div class="flex flex-col justify-center items-center">
                        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/s_mission.png" alt="Mission Icon"
                            class="mb-4" style="height: 191px;">
                        <h2 class="font-bold mb-4" style="font-size: 32px;">OUR MISSION</h2>
                        <p class="text-lg" style="font-size: 17px;font-weight: 600;font-family: ui-monospace;">The best
                            agrochemical company, in constant pursuit <br> of improving the quality of agri produce.</p>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="p-6 bg-opacity-50" style="width: 570px;height: 331px;">
                    <div class="flex flex-col justify-center items-center">
                        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/s_vision.png" alt="Vision Icon"
                            class="mb-4" style="height: 191px;">
                        <h2 class="font-bold mb-4" style="font-size: 32px;">OUR VISION</h2>
                        <p class="text-lg" style="font-size: 17px;font-weight: 600;font-family: ui-monospace;">Earn
                            trust of each farmer.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="text-gray-700 body-font border-t border-gray-200" style="display:none;">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                <img alt="feature" class="object-cover object-center h-full w-full"
                    src="https://img.freepik.com/premium-vector/agro-industry-isometric-illustration-with-text-template_119121-27.jpg">
            </div>
            <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Organic Farming Practices</h2>
                        <p class="leading-relaxed text-base">We partner with farmers who use organic and sustainable
                            farming methods to bring you the healthiest and most natural products. No chemicals, just
                            pure, fresh produce from the earth.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Sustainable Supply Chain</h2>
                        <p class="leading-relaxed text-base">Our supply chain is built around sustainability, ensuring
                            every step — from planting to packaging — minimizes environmental impact. We’re committed to
                            a greener planet.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col mb-10 lg:items-start items-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Farm-to-Table Freshness</h2>
                        <p class="leading-relaxed text-base">Our farm-to-table approach ensures that you receive the
                            freshest products directly from farms, preserving nutrition and taste. Experience the true
                            essence of natural food.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-700 body-font border-t border-gray-200" style="display:none;">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50.322" viewBox="0 0 50 50.322">
                    <g transform="translate(-0.394 0.03)">
                        <path
                            d="M.787,61.568A.393.393,0,0,1,.509,60.9L42.743,18.663a.393.393,0,1,1,.556.556L1.065,61.453a.393.393,0,0,1-.277.115Z"
                            transform="translate(0 -11.276)" fill="#2f3a5a"></path>
                        <path d="M35.072,105.43a10.493,10.493,0,0,0-16.066,2.2A10.491,10.491,0,0,0,35.072,105.43Z"
                            transform="translate(-11.296 -62.316)" fill="#ffc943"></path>
                        <path
                            d="M19.01,109.944a11.351,11.351,0,0,1,1.393-1.734,10.312,10.312,0,0,0,12.862-1.764,11.351,11.351,0,0,1,1.808,1.295A10.492,10.492,0,0,1,19.01,109.944Z"
                            transform="translate(-11.299 -64.627)" fill="#fea401"></path>
                        <path
                            d="M25.561,110.227a11.284,11.284,0,0,1-7.419-2.887.393.393,0,0,1-.07-.513,10.884,10.884,0,0,1,16.652-2.28.393.393,0,0,1,.07.513,11.116,11.116,0,0,1-7.787,5.07A10.663,10.663,0,0,1,25.561,110.227Zm-6.637-3.256a10.069,10.069,0,0,0,15.017-2.059,10.069,10.069,0,0,0-15.017,2.059Z"
                            transform="translate(-10.69 -61.726)" fill="#2f3a5a"></path>
                        <path
                            d="M11.451,115.521a.393.393,0,0,1-.055-.782l2.731-.39a.393.393,0,0,1,.111.778l-2.731.39a.4.4,0,0,1-.056,0Z"
                            transform="translate(-6.472 -69.421)" fill="#2f3a5a"></path>
                        <path d="M57.314,83.19a10.491,10.491,0,0,0-16.066,2.2A10.492,10.492,0,0,0,57.314,83.19Z"
                            transform="translate(-24.796 -48.817)" fill="#ffc943"></path>
                        <path
                            d="M41.252,87.7a11.35,11.35,0,0,1,1.395-1.732,10.312,10.312,0,0,0,12.862-1.764A11.35,11.35,0,0,1,57.317,85.5a10.493,10.493,0,0,1-16.065,2.2Z"
                            transform="translate(-24.799 -51.128)" fill="#fea401"></path>
                        <path
                            d="M47.8,87.96a11.283,11.283,0,0,1-7.419-2.888.393.393,0,0,1-.07-.513,10.884,10.884,0,0,1,16.652-2.283.393.393,0,0,1,.07.513,11.115,11.115,0,0,1-7.787,5.07A10.627,10.627,0,0,1,47.8,87.96ZM41.165,84.7a10.069,10.069,0,0,0,15.018-2.059A10.069,10.069,0,0,0,41.165,84.7Z"
                            transform="translate(-24.189 -48.202)" fill="#2f3a5a"></path>
                        <path
                            d="M33.694,93.275a.393.393,0,0,1-.055-.782l2.731-.39a.393.393,0,1,1,.111.778l-2.731.39a.4.4,0,0,1-.056,0Z"
                            transform="translate(-19.973 -55.917)" fill="#2f3a5a"></path>
                        <path d="M79.555,60.948a10.492,10.492,0,0,0-16.066,2.2A10.491,10.491,0,0,0,79.555,60.948Z"
                            transform="translate(-38.296 -35.317)" fill="#ffc943"></path>
                        <path
                            d="M63.493,65.461a11.352,11.352,0,0,1,1.393-1.734,10.312,10.312,0,0,0,12.862-1.764,11.351,11.351,0,0,1,1.808,1.295A10.492,10.492,0,0,1,63.493,65.461Z"
                            transform="translate(-38.298 -37.628)" fill="#fea401"></path>
                        <path
                            d="M70.043,65.721a11.284,11.284,0,0,1-7.42-2.888.393.393,0,0,1-.07-.513,10.885,10.885,0,0,1,16.652-2.283.393.393,0,0,1,.07.513,11.114,11.114,0,0,1-7.787,5.07A10.629,10.629,0,0,1,70.043,65.721Zm-6.637-3.256a10.069,10.069,0,0,0,15.018-2.059,10.069,10.069,0,0,0-15.018,2.059Z"
                            transform="translate(-37.688 -34.704)" fill="#2f3a5a"></path>
                        <path
                            d="M55.934,71.034a.393.393,0,0,1-.055-.782l2.73-.39a.393.393,0,1,1,.111.778l-2.73.39A.4.4,0,0,1,55.934,71.034Z"
                            transform="translate(-33.472 -42.417)" fill="#2f3a5a"></path>
                        <path d="M101.8,38.706a10.493,10.493,0,0,0-16.066,2.2A10.491,10.491,0,0,0,101.8,38.706Z"
                            transform="translate(-51.795 -21.818)" fill="#ffc943"></path>
                        <path
                            d="M85.735,43.221a11.351,11.351,0,0,1,1.393-1.734,10.312,10.312,0,0,0,12.861-1.763,11.351,11.351,0,0,1,1.808,1.295A10.491,10.491,0,0,1,85.735,43.221Z"
                            transform="translate(-51.798 -24.129)" fill="#fea401"></path>
                        <path
                            d="M92.285,43.481a11.283,11.283,0,0,1-7.419-2.888.393.393,0,0,1-.07-.513A10.884,10.884,0,0,1,101.447,37.8a.393.393,0,0,1,.07.513,11.115,11.115,0,0,1-7.787,5.07,10.628,10.628,0,0,1-1.446.1Zm-6.637-3.256a10.069,10.069,0,0,0,15.018-2.058,10.069,10.069,0,0,0-15.018,2.059Z"
                            transform="translate(-51.188 -21.205)" fill="#2f3a5a"></path>
                        <path
                            d="M78.175,48.8a.393.393,0,0,1-.055-.782l2.731-.39a.393.393,0,0,1,.111.778l-2.731.39A.4.4,0,0,1,78.175,48.8Z"
                            transform="translate(-46.971 -28.923)" fill="#2f3a5a"></path>
                        <path d="M108.973,1.015A10.493,10.493,0,0,0,97.7,12.674,10.494,10.494,0,0,0,108.973,1.015Z"
                            transform="translate(-59.033 -0.626)" fill="#ffc943"></path>
                        <path
                            d="M97.7,12.672a11.35,11.35,0,0,1,.025-2.224,10.312,10.312,0,0,0,9.027-9.332,11.35,11.35,0,0,1,2.222-.1A10.494,10.494,0,0,1,97.7,12.672Z"
                            transform="translate(-59.036 -0.626)" fill="#fea401"></path>
                        <path
                            d="M97.687,12.455q-.318,0-.639-.016a.393.393,0,0,1-.372-.36,11.115,11.115,0,0,1,2.991-8.8A11.111,11.111,0,0,1,108.362,0a.393.393,0,0,1,.372.36,11.115,11.115,0,0,1-2.991,8.8,11.023,11.023,0,0,1-8.056,3.3Zm-.252-.788a10.277,10.277,0,0,0,7.743-3.056,10.285,10.285,0,0,0,2.8-7.839,10.31,10.31,0,0,0-7.743,3.056A10.286,10.286,0,0,0,97.435,11.666Z"
                            transform="translate(-58.402)" fill="#2f3a5a"></path>
                        <path d="M10.992,68.561a10.493,10.493,0,0,1-2.2,16.066A10.493,10.493,0,0,1,10.992,68.561Z"
                            transform="translate(-3.403 -41.632)" fill="#ffc943"></path>
                        <path
                            d="M8.793,84.627a11.35,11.35,0,0,0,1.734-1.393,10.312,10.312,0,0,1,1.764-12.862A11.351,11.351,0,0,0,11,68.564a10.491,10.491,0,0,0-2.2,16.063Z"
                            transform="translate(-3.405 -41.634)" fill="#fea401"></path>
                        <path
                            d="M8.179,84.414a.393.393,0,0,1-.3-.135,10.885,10.885,0,0,1,2.283-16.652.393.393,0,0,1,.513.07,11.115,11.115,0,0,1,2.791,8.865A11.116,11.116,0,0,1,8.4,84.349a.393.393,0,0,1-.22.065ZM10.31,68.481A10.069,10.069,0,0,0,8.251,83.5a10.286,10.286,0,0,0,4.437-7.041A10.286,10.286,0,0,0,10.31,68.481Z"
                            transform="translate(-2.791 -41.025)" fill="#2f3a5a"></path>
                        <path
                            d="M11.5,111.937a.4.4,0,0,1-.056,0,.393.393,0,0,1-.333-.445l.39-2.731a.393.393,0,1,1,.778.111l-.39,2.731A.393.393,0,0,1,11.5,111.937Z"
                            transform="translate(-6.503 -65.817)" fill="#2f3a5a"></path>
                        <path d="M33.237,46.32a10.493,10.493,0,0,1-2.2,16.066A10.491,10.491,0,0,1,33.237,46.32Z"
                            transform="translate(-16.904 -28.133)" fill="#ffc943"></path>
                        <path
                            d="M31.034,62.386a11.351,11.351,0,0,0,1.734-1.393,10.312,10.312,0,0,1,1.764-12.862,11.351,11.351,0,0,0-1.295-1.808A10.492,10.492,0,0,0,31.034,62.386Z"
                            transform="translate(-16.904 -28.134)" fill="#fea401"></path>
                        <path
                            d="M30.42,62.174a.393.393,0,0,1-.3-.135,10.885,10.885,0,0,1,2.285-16.654.393.393,0,0,1,.513.07,10.884,10.884,0,0,1-2.285,16.652A.393.393,0,0,1,30.42,62.174Zm2.131-15.935a10.069,10.069,0,0,0-2.059,15.018,10.069,10.069,0,0,0,2.059-15.018Z"
                            transform="translate(-16.29 -27.525)" fill="#2f3a5a"></path>
                        <path
                            d="M33.743,89.729a.4.4,0,0,1-.056,0,.393.393,0,0,1-.333-.446l.39-2.731a.393.393,0,0,1,.778.111l-.39,2.731A.393.393,0,0,1,33.743,89.729Z"
                            transform="translate(-20.002 -52.351)" fill="#2f3a5a"></path>
                        <path d="M55.478,24.079a10.493,10.493,0,0,1-2.2,16.066A10.491,10.491,0,0,1,55.478,24.079Z"
                            transform="translate(-30.403 -14.633)" fill="#ffc943"></path>
                        <path
                            d="M53.275,40.144a11.351,11.351,0,0,0,1.734-1.393,10.312,10.312,0,0,1,1.764-12.862,11.35,11.35,0,0,0-1.295-1.808,10.492,10.492,0,0,0-2.2,16.063Z"
                            transform="translate(-30.404 -14.634)" fill="#fea401"></path>
                        <path
                            d="M52.68,39.932a.393.393,0,0,1-.3-.135,10.884,10.884,0,0,1,2.28-16.652.393.393,0,0,1,.513.07A10.884,10.884,0,0,1,52.9,39.867.393.393,0,0,1,52.68,39.932ZM54.808,24a10.07,10.07,0,0,0-2.057,15.018A10.067,10.067,0,0,0,54.808,24Z"
                            transform="translate(-29.807 -14.027)" fill="#2f3a5a"></path>
                        <path
                            d="M55.984,67.487a.4.4,0,0,1-.056,0,.393.393,0,0,1-.333-.445l.39-2.731a.393.393,0,0,1,.778.111l-.39,2.731A.393.393,0,0,1,55.984,67.487Z"
                            transform="translate(-33.502 -38.852)" fill="#2f3a5a"></path>
                        <path d="M77.72,1.837a10.493,10.493,0,0,1-2.2,16.066,10.491,10.491,0,0,1,2.2-16.066Z"
                            transform="translate(-43.903 -1.133)" fill="#ffc943"></path>
                        <path
                            d="M75.516,17.9A11.351,11.351,0,0,0,77.25,16.51,10.312,10.312,0,0,1,79.013,3.648,11.351,11.351,0,0,0,77.719,1.84a10.492,10.492,0,0,0-2.2,16.063Z"
                            transform="translate(-43.903 -1.135)" fill="#fea401"></path>
                        <g transform="translate(28.438 0.31)">
                            <path
                                d="M74.92,17.688a.393.393,0,0,1-.3-.135,11.115,11.115,0,0,1-2.791-8.865A11.115,11.115,0,0,1,76.906.9a.393.393,0,0,1,.513.07A11.116,11.116,0,0,1,80.21,9.835a11.116,11.116,0,0,1-5.07,7.787A.393.393,0,0,1,74.92,17.688ZM77.051,1.753a10.286,10.286,0,0,0-4.437,7.041,10.285,10.285,0,0,0,2.379,7.976,10.287,10.287,0,0,0,4.438-7.041,10.286,10.286,0,0,0-2.38-7.976Z"
                                transform="translate(-71.744 -0.835)" fill="#2f3a5a"></path>
                            <path
                                d="M78.226,45.248a.4.4,0,0,1-.056,0,.393.393,0,0,1-.333-.445l.39-2.731A.393.393,0,0,1,79,42.18l-.39,2.73A.393.393,0,0,1,78.226,45.248Z"
                                transform="translate(-75.44 -25.664)" fill="#2f3a5a"></path>
                        </g>
                    </g>
                </svg>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900 mt-6">Our Sustainable
                    Agriculture Solutions</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">We bring you eco-friendly and sustainable
                    agricultural solutions, providing farmers and consumers with top-quality, organic, and natural
                    products that are good for your health and the planet.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Organic Farming Support</h2>
                        <p class="leading-relaxed text-base">Offering expert guidance and resources for organic farming,
                            ensuring sustainable agriculture practices that help both the environment and your yield.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Farm-to-Table Products</h2>
                        <p class="leading-relaxed text-base">Delivering fresh, organic, and natural produce directly
                            from the farm to your table, promoting healthy eating and sustainable practices.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Agricultural Tools & Supplies</h2>
                        <p class="leading-relaxed text-base">Providing innovative tools and supplies to farmers,
                            enhancing productivity while promoting eco-friendly farming methods.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Sustainable Packaging</h2>
                        <p class="leading-relaxed text-base">Utilizing eco-friendly packaging for all our products,
                            ensuring a minimal environmental footprint in the delivery process.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Community Support</h2>
                        <p class="leading-relaxed text-base">Empowering local farmers and communities by providing
                            access to markets, resources, and training for sustainable growth.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div
                            class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Agro-Technology</h2>
                        <p class="leading-relaxed text-base">Incorporating advanced technologies in agriculture to boost
                            efficiency, reduce waste, and support sustainable farming practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-700 body-font border-t border-gray-200" style="display:none;">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Success Stories</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Explore some of the incredible transformations
                    we've enabled, from small-scale farms to global agricultural ventures. Each story reflects our
                    dedication to innovation and growth.</p>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="success"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://static.wixstatic.com/media/080b07_db40b6f4bf554ec69135b3ce4099246d~mv2.png/v1/fill/w_96,h_96,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/GVF_Logo_edited.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Green Valley Farm</h2>
                            <p class="text-gray-500">Increased crop yield by 30% using smart irrigation systems.</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="success"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmgb5ijiJjv8EVMh0eyABireofuF5mNMlySQ&s">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Sunny Orchards</h2>
                            <p class="text-gray-500">Adopted eco-friendly pest management, saving costs and protecting
                                crops.</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="success"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr_cICgIMkJ3gq2nxOnhSu6e6KtaMrrswPvw&s">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Riverbend Farms</h2>
                            <p class="text-gray-500">Diversified their crops and entered new markets with our guidance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="success"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaGb37O4C7yd-AeLC_NqlI3pW4nLCA5Hsp1g&s">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Blue Sky Ranch</h2>
                            <p class="text-gray-500">Reduced water usage by 40% with our advanced water management
                                solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="success"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://www.goldengrain.co.th/images/webclip.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Golden Grain Enterprises</h2>
                            <p class="text-gray-500">Scaled operations to supply regional markets with our digital
                                tools.</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="success"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://r2.erweima.ai/imgcompressed/compressed_04deb999e1533f1a9a4c74118d996f7c.webp">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Harvest Haven</h2>
                            <p class="text-gray-500">Increased their harvest efficiency by implementing drone
                                technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-700 body-font border-t border-gray-200" style="display:none;">
        <div class="container px-5 py-24 mx-auto">
            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">What Our Clients Say</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Hear from our satisfied clients about how we
                    helped them achieve their goals. Their success stories motivate us to keep pushing boundaries!</p>
                <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="h-full bg-gray-100 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="inline-block w-8 h-8 text-indigo-500 mb-4" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                        </svg>
                        <p class="leading-relaxed mb-6">“The team was incredibly supportive and helped us streamline our
                            processes. We saw a 50% increase in efficiency!”</p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Sarah Johnson</h2>
                        <p class="text-gray-500">CEO of Tech Innovations</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full bg-gray-100 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="inline-block w-8 h-8 text-indigo-500 mb-4" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                        </svg>
                        <p class="leading-relaxed mb-6">“Their innovative solutions transformed our operations and
                            increased customer satisfaction. Highly recommended!”</p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Michael Smith</h2>
                        <p class="text-gray-500">Operations Manager at Green Solutions</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="h-full bg-gray-100 p-8 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="inline-block w-8 h-8 text-indigo-500 mb-4" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                        </svg>
                        <p class="leading-relaxed mb-6">“Working with this team was a game-changer for us. Their
                            expertise made all the difference!”</p>
                        <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Emily Davis</h2>
                        <p class="text-gray-500">Marketing Director at Future Tech</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-700 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.3265198827221!2d90.35121111760908!3d23.78750888053714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0eb582efb6b%3A0x532c268a5b3ef5a9!2sB%2F1%2C%20100%20Vashantek%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1733315059102!5m2!1sen!2sbd"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 md:w-1/2 w-full bg-white rounded-lg p-8 flex flex-col md:mr-4">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Our Core Services</h2>
                <p class="leading-relaxed mb-5 text-gray-600">We provide a range of innovative solutions designed to
                    meet your needs. Explore what we offer:</p>
                <div class="flex items-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-indigo-500 mr-3"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z" />
                    </svg>
                    <div>
                        <h3 class="text-gray-900 font-medium">Custom Software Development</h3>
                        <p class="text-gray-600">Tailored software solutions to fit your business requirements.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-indigo-500 mr-3"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z" />
                    </svg>
                    <div>
                        <h3 class="text-gray-900 font-medium">UI/UX Design</h3>
                        <p class="text-gray-600">Creating user-friendly interfaces that enhance user experience.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-indigo-500 mr-3"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z" />
                    </svg>
                    <div>
                        <h3 class="text-gray-900 font-medium">Digital Marketing</h3>
                        <p class="text-gray-600">Strategies that help you reach and engage your target audience.</p>
                    </div>
                </div>
                <div class="flex items-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 text-indigo-500 mr-3"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10 5.52 0 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z" />
                    </svg>
                    <div>
                        <h3 class="text-gray-900 font-medium">E-commerce Solutions</h3>
                        <p class="text-gray-600">End-to-end e-commerce development to boost your online sales.</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 md:w-1/2 w-full bg-white rounded-lg p-8 flex flex-col md:ml-4">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Why Choose Us?</h2>
                <p class="leading-relaxed mb-5 text-gray-600">We are dedicated to delivering the best results for our
                    clients. Here’s what sets us apart:</p>
                <ul class="list-disc list-inside text-gray-600">
                    <li>✔️ Experienced team with diverse skill sets</li>
                    <li>✔️ Client-centric approach for tailored solutions</li>
                    <li>✔️ Proven track record of successful projects</li>
                    <li>✔️ Commitment to quality and timely delivery</li>
                    <li>✔️ Continuous support and maintenance</li>
                </ul>
            </div>
        </div>
    </section>

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
