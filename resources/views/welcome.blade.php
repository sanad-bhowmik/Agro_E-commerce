<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @vite('resources/css/app.css') -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Eventas | Crop Care</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<style>
    .agro-text {
        font-family: Arial, sans-serif;
        font-size: 150px;
        font-weight: bold;
        background-image: url('https://imgix-prod.sgs.com/-/media/sgscorp/images/temporary/golden-wheat-grass.cdn.en-PH.1.jpg?fit=crop&auto=format&crop=focalpoint&fp-x=0.35&fp-y=0.6&fp-z=1&w=645&h=403');
        /* Use the path of your image here */
        background-size: cover;
        background-position: center;
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        text-align: center;
        line-height: 1;
        margin-bottom: 10px;
    }

    .hero-video {
        transition: opacity 1.5s ease-in-out;
    }

    .opacity-100 {
        opacity: 1 !important;
    }

    .component {
        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    }

    blockquote {
        background:
            linear-gradient(to right, #039be5 6px, transparent 4px) 0 100%,
            linear-gradient(to left, #039be5 6px, transparent 4px) 100% 0,
            linear-gradient(to bottom, #039be5 6px, transparent 4px) 100% 0,
            linear-gradient(to top, #039be5 6px, transparent 4px) 0 100%;
        background-repeat: no-repeat;
        background-size: 20px 20px;
    }

    blockquote:before,
    blockquote:after {
        font-family: FontAwesome;
        position: absolute;
        color: #039be5;
        font-size: 34px;
    }

    blockquote:before {
        content: "\f10d";
        top: -12px;
        margin-right: -20px;
        right: 100%;
    }

    blockquote:after {
        content: "\f10e";
        margin-left: -20px;
        left: 100%;
        top: auto;
        bottom: -20px;
    }
</style>

<body>
    @include('partials.nav')

    <div class="">
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-opacity duration-300 z-50"
            style="opacity: 0.8;" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
    </div>


    <section
        class="relative h-96 md:h-[500px] lg:h-[600px] mt-2 w-full flex items-center justify-start bg-black text-white overflow-hidden">
        <!-- Video Container -->
        <div class="absolute inset-0 h-full w-full overflow-hidden z-0">
            <!-- Videos -->
            @if($banner)
                @if($banner->firstVideo)
                    <video class="hero-video absolute top-0 left-0 h-full w-full object-cover opacity-0" autoplay muted loop>
                        <source src="{{ asset('vid/' . $banner->firstVideo) }}" type="video/mp4">
                    </video>
                @endif
                @if($banner->secondVideo)
                    <video class="hero-video absolute top-0 left-0 h-full w-full object-cover opacity-0" autoplay muted loop>
                        <source src="{{ asset('vid/' . $banner->secondVideo) }}" type="video/mp4">
                    </video>
                @endif
                @if($banner->thirdVideo)
                    <video class="hero-video absolute top-0 left-0 h-full w-full object-cover opacity-0" autoplay muted loop>
                        <source src="{{ asset('vid/' . $banner->thirdVideo) }}" type="video/mp4">
                    </video>
                @endif
            @endif
        </div>

        <!-- Text Content -->
        <div class="relative z-10 text-left ml-6 md:ml-10 lg:ml-20 p-5 md:p-8 lg:p-12 bg-opacity-25 rounded-xl backdrop-blur-sm"
            style="background: rgb(0 0 0 / 62%);border: 1px solid rgba(0, 0, 0, 0.3);">
            @if($banner)
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">{{ $banner->title }}</h1>
            @else
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Default Hero Title</h1>
            @endif
            <a href="/about"
                class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 md:py-3 md:px-6 rounded-lg text-lg md:text-xl">Learn
                More</a>
        </div>
    </section>



    <section class="mb-10">
        <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">
            <div class="w-full h-64 lg:w-1/2 lg:h-auto">
                <!-- Display video dynamically from the frontAbout table -->
                @if($frontAbout && $frontAbout->video)
                    <video class="h-full w-full object-cover" autoplay loop muted>
                        <source src="{{ asset('vid/' . $frontAbout->video) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                @else
                    <!-- Default video or empty content if no video available -->
                    <p>No video available.</p>
                @endif
            </div>
            <div
                class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
                <div class="flex flex-col p-12 md:px-16">
                    <p class="font-bold text-3xl">
                        About the
                        <span class="text-green-500 mx-1 font-extrabold text-4xl relative inline-block stroke-current">
                            Company
                            <svg class="absolute -bottom-0.5 w-full max-h-1.5" viewBox="0 0 55 5"
                                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002"
                                    stroke-width="2"></path>
                            </svg>
                        </span>
                    </p>
                    <p class="mt-4">
                        @if($frontAbout)
                            {{ $frontAbout->description }}
                        @else
                            At Eventas Crop Care Limited, we are committed to revolutionizing agriculture by providing
                            innovative solutions that empower farmers and promote sustainable farming. Our mission is to
                            offer top-quality products, expert advice, and technology to help farmers increase productivity
                            and achieve long-term success. We are dedicated to improving farming practices, making
                            agriculture more efficient, and contributing to a sustainable future for all.
                        @endif
                    </p>
                    <div class="mt-8">
                        <a href="/about"
                            class="inline-block w-full text-center text-lg font-medium text-gray-100 bg-green-600 border-solid border-2 border-gray-600 py-4 px-10 hover:bg-green-800 hover:shadow-md md:w-48">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #f6f6f6;">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20"
            style="margin-top: 15%;">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-fullsm:w-12 sm:h-12">
                        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/Manufacturing-Plant.png" alt="">
                    </div>
                    <h6 class="text-4xl font-bold text-deep-purple-accent-400"
                        style="color: #2f2766;font-size: 38px;font-family: math;">2</h6>
                    <p style="color: #585757;font-size: 18px;font-weight: 700;font-family: math;">
                        Manufacturing Plants
                    </p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-fullsm:w-12 sm:h-12">
                        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/Product-4.png" alt="">
                    </div>
                    <h6 class="text-4xl font-bold text-deep-purple-accent-400"
                        style="color: #2f2766;font-size: 38px;font-family: math;">20+</h6>
                    <p style="color: #585757;font-size: 18px;font-weight: 700;font-family: math;">
                        Agro Input Products
                    </p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-fullsm:w-12 sm:h-12">
                        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/Office.png" alt="">
                    </div>
                    <h6 class="text-4xl font-bold text-deep-purple-accent-400"
                        style="color: #2f2766;font-size: 38px;font-family: math;">2</h6>
                    <p style="color: #585757;font-size: 18px;font-weight: 700;font-family: math;">
                        Branch offices
                    </p>
                </div>

                <div class="text-center">
                    <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-fullsm:w-12 sm:h-12">
                        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/Distributor.png" alt="">
                    </div>
                    <h6 class="text-4xl font-bold text-deep-purple-accent-400"
                        style="color: #2f2766;font-size: 38px;font-family: math;">100+</h6>
                    <p style="color: #585757;font-size: 18px;font-weight: 700;font-family: math;">
                        Nationwide Distributors
                    </p>
                </div>

                <!--<div class="text-center">-->
                <!--    <div class="flex items-center justify-center w-20 h-20 mx-auto mb-8 rounded-fullsm:w-12 sm:h-12">-->
                <!--        <img src="https://sikkoindia.in/wp-content/uploads/2022/04/Export_sikko.png" alt="">-->
                <!--    </div>-->
                <!--    <h6 class="text-4xl font-bold text-deep-purple-accent-400" style="color: #2f2766;font-size: 38px;font-family: math;">15+</h6>-->
                <!--    <p style="color: #585757;font-size: 18px;font-weight: 700;font-family: math;">-->
                <!--        Exporting countries-->
                <!--    </p>-->
                <!--</div>-->
            </div>
        </div>
    </section>


    <div class="text-center p-10 mt-4">
        <h1 class="font-bold text-4xl mb-4">OUR PRODUCTS</h1>
    </div>

    <!-- âœ… Grid Section - Starts Here ðŸ‘‡ -->
    <section id="Projects"
        class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mt-10 mb-5 px-4">
        @foreach($products->take(6) as $product) <!-- Showing only the first 6 products -->
            <div
                class="w-full sm:w-64 md:w-72 lg:w-80 bg-white shadow-md rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg hover:translate-y-[-5px]">
                <a href="{{ route('product.details', $product->id) }}">
                    <!-- Product Image -->
                    <img src="{{ asset('img/product/' . $product->image) }}" alt="{{ $product->name }}"
                        class="w-full h-48 object-cover object-center" />

                    <div class="p-4">
                        <!-- Status Tag -->
                        <div class="flex items-baseline">
                            <span
                                class="inline-block bg-red-200 text-teal-800 py-1 px-4 text-xs rounded-full uppercase font-semibold tracking-wide">
                                New
                            </span>
                            <div class="ml-2 text-gray-600 text-xs uppercase font-semibold tracking-wide">
                                {{ $product->brand }}
                            </div>
                        </div>

                        <!-- Product Name -->
                        <h4 class="mt-2 font-semibold text-base leading-tight truncate">{{ $product->name }}</h4>

                        <!-- Price in Taka -->
                        <div class="mt-1">
                            <span class="text-lg font-bold text-gray-800">{{ number_format($product->price, 2) }}৳</span>
                            <span class="text-gray-600 text-sm">/ each</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </section>


    <style>
        @media (min-width: 1280px) {
            #Projects {
                grid-template-columns: repeat(3, 1fr);
                gap: 36px;
            }
        }
    </style>

    <!-- âœ… Grid Section - Ends Here ðŸ‘† -->

    <!-- âœ… Show More Button - Starts Here ðŸ‘‡ -->
    <div class="text-center mt-10 mb-20">
        <a href="/product">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Show More
            </button>
        </a>
    </div>

    <!-- component -->
    <div class="z-30 relative items-center justify-center w-full h-full overflow-auto">
        <div class="inset-0 h-screen bg-cover bg-center" style="
        background-image:
        url('https://wallpapercave.com/wp/wp6689710.jpg');background-attachment: fixed;">
        </div>
        <div class="absolute inset-0 z-20 flex items-center justify-center h-screen w-full bg-gray-900 bg-opacity-75">
        </div>
        <div class="absolute inset-0  z-30  flex flex-col items-center justify-center">
            <div class="shadow-2xl rounded-lg w-4/5 h-96 bg-cover bg-center" style="
            background-image:
            url('https://wallpapercave.com/wp/wp6689710.jpg');background-attachment: fixed;">

                <div class="grid grid-cols-12 gap-1">
                    <div
                        class="relative my-6 px-8 col-span-12 sm:col-span-12 md:col-span-7 lg:col-span-7 xxl:col-span-7">
                        <div class="border-l-4 border-gray-400 py-20 px-5 mx-2 absolute left-0">
                            <p
                                class="italic text-white text-xl md:text-4xl lg:text-6xl uppercase text-center  font-semibold ">
                                The Future of Sustainable Farming
                            </p>
                        </div>
                        <div class="absolute border-gray-400 border-t-4 bottom-0 py-1 px-4 w-4/5"></div>
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-5 lg:col-span-5 xxl:col-span-5">
                        <div
                            class="relative bg-pink-900 h-full md:h-96 w-full bg-opacity-50 rounded-tr-lg rounded-br-lg">
                            <div class="p-8">
                                <p class="text-white text-xs md:text-sm lg:text-xl mb-4">
                                    Agriculture is the backbone of our society. Sustainable farming practices ensure a
                                    healthy future for generations to come.
                                    Discover eco-friendly methods and the latest in agro products, helping you cultivate
                                    the best crops with less environmental impact.
                                </p>
                                <div class="bottom-0 absolute p-2 right-0">
                                    <button
                                        class="opacity-75 bg-gray-100 hover:bg-pink-900 hover:text-white text-sm font-bold py-2 px-4 rounded inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>LEARN MORE</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-[#e9f1ee] py-12 sm:py-16 lg:py-20 xl:py-24" style="display:none;">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">The Openfield
                    Timeline
                </h2>
            </div>
            <ul class="mx-auto mt-12 grid max-w-md grid-cols-1 gap-10 sm:mt-16 lg:mt-20 lg:max-w-5xl lg:grid-cols-4">
                <li class="flex-start group relative flex lg:flex-col">
                    <span
                        style="position: absolute; left: 18px; top: 43px; height: calc(21% - 32px); width: 1px; background-color: #7771715e; z-index: 10;"
                        aria-hidden="true"></span>
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                        class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 ">
                        <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M800.3741 715.205382l-26.369787 44.840142a25.935191 25.935191 0 0 0-3.579031 13.140156v14.520639a45.364215 45.364215 0 0 0 5.611409 21.84487l13.485277 24.529143 31.175914-66.467714 5.867054-64.588723a1.712822 1.712822 0 0 0-1.70004-1.866209 28.402165 28.402165 0 0 0-24.490796 14.047696zM183.962749 302.798783h-7.043021l-14.060478 16.335719 10.570923 31.482688 0.677459 2.096289a12.386003 12.386003 0 0 0 17.153783 7.362578 19.927532 19.927532 0 0 0 11.043866-21.090717l-3.195563-20.068137zM169.352634 731.247109h24.452449a16.616928 16.616928 0 0 1 15.965034 11.900277l3.553466 11.887495A20.643338 20.643338 0 0 0 229.454786 769.491609c7.413707 1.278225 15.696606 2.735402 17.42221 2.735402s12.501043 7.963343 21.72983 15.134187a17.217694 17.217694 0 0 1 2.466975 24.938175l-2.083508 2.403064q-0.268427 0.306774-0.562419 0.600765l-22.113297 22.35616L193.012584 801.447241l-29.309706-61.226991a6.263304 6.263304 0 0 1 5.649756-8.973141zM315.862814 146.484615l-30.089423 37.375307a11.248382 11.248382 0 0 1-0.805282 0.894758L265.193964 204.516042a11.248382 11.248382 0 0 0-1.112056 1.278226l-18.930516 25.807368a11.248382 11.248382 0 0 0-2.070725 8.244553l3.834676 26.676561a11.248382 11.248382 0 0 1 0 3.323386l-0.102258 0.62633a11.248382 11.248382 0 0 0 18.010194 10.634834l72.526502-56.114089a11.248382 11.248382 0 0 0 4.37153-9.062617c-0.153387-10.507012-0.421814-32.28797 0.089476-34.320348s25.82015-21.576442 36.250468-29.527004a11.2356 11.2356 0 0 0 4.42266-8.947577v-15.006365a11.248382 11.248382 0 0 0-16.616929-9.880681l-46.565746 25.411118a11.248382 11.248382 0 0 0-3.438426 2.824878z"
                                    fill="#2FA65B"></path>
                                <path
                                    d="M509.194385 93.374356a5.483586 5.483586 0 0 0-0.703024 4.831691c3.208345 9.791206 13.804833 44.520586 5.176812 50.553809-10.072415 7.043021-27.187851 21.359144-16.105638 31.214261s-45.300303-27.622448-60.408926 9.855117-34.21809 46.425142-33.233857 64.537594 15.09584 0 21.141846 0 6.966328 32.262406-17.115436 42.33482-73.497953-23.161442-66.467714 14.060478 26.178053 56.587032 6.046006 64.435336-20.132048 58.38933 2.019596 51.346309 34.307566-3.016612 34.307566-13.089027 11.00552-58.38933 24.081764-51.346309 29.194665 1.278225 32.211276 11.069431-18.125234 23.161442 3.016612 25.168255c14.418381 1.367701 19.467371-18.32975 21.231322-30.996962a5.483586 5.483586 0 0 1 8.947576-3.425644c9.100964 7.669352 25.359989 7.669352 26.676562 7.4904 10.826568-1.546653 31.712769-29.399181 32.722566-32.466922 0.383468-1.150403 2.671491-6.109917 5.355764-11.798019 6.135481-13.012333 12.015317-20.886201 25.564506-25.564505l9.714512-1.81508a15.172534 15.172534 0 0 0 2.876006-0.140605 5.496369 5.496369 0 0 1 2.901572 0.447379l28.721721 15.236445a5.496369 5.496369 0 0 1 1.086492 9.369391c-9.484431 7.26032-25.564505 19.556847-31.840591 24.375756-9.177657 7.043021-26.293094 0.217298-29.309706 17.115436s-2.019596 19.173379 9.062617 26.178054c7.988908 5.112901 25.423901-1.994031 34.512083-6.391127a5.483586 5.483586 0 0 1 7.669351 3.425644l6.570078 22.458418a5.496369 5.496369 0 0 1-4.077539 6.902417l-37.822685 8.449069-43.843127 8.321246a68.257229 68.257229 0 0 1-32.224059-1.648911l-21.934345-6.544513a5.496369 5.496369 0 0 0-0.830847-0.178951l-27.699141-3.834676a82.995166 82.995166 0 0 0-52.931308 10.455882l-37.324178 21.72983a5.509151 5.509151 0 0 0-0.805282 0.562419l-1.431612 1.278225a198.124916 198.124916 0 0 0-56.587033 79.697345l-0.306774 0.805282a71.209929 71.209929 0 0 0-1.955684 45.786029l7.388142 25.181038a99.062458 99.062458 0 0 0 29.143536 46.01611l0.715806 0.639112a100.979796 100.979796 0 0 0 56.996064 25.065998l25.845715 2.55645a36.173775 36.173775 0 0 0 31.508253-12.93564 5.496369 5.496369 0 0 1 4.333184-1.994031l14.201082 0.268427a46.75748 46.75748 0 0 1 44.367199 35.061719l6.889634 26.702126a5.496369 5.496369 0 0 0 1.278226 2.364717l21.44862 23.174224a32.224059 32.224059 0 0 1 7.004674 31.840591l-1.393266 4.665522a40.583652 40.583652 0 0 0 10.302496 41.619015L600.613056 887.088333a5.496369 5.496369 0 0 0 1.482741 1.022581l37.899379 17.895153a5.496369 5.496369 0 0 0 3.476773 0.409032l35.176759-7.375359a5.496369 5.496369 0 0 0 4.115886-3.745201l23.340393-75.082952 17.294388-48.649253a172.113032 172.113032 0 0 0 9.177657-73.868638l-1.201532-12.782253a116.535797 116.535797 0 0 1 5.04899-46.540182L754.153475 583.139148a5.496369 5.496369 0 0 1 0.383467-0.894758l28.721722-54.068929a5.496369 5.496369 0 0 0-5.803143-7.988908L740.617069 526.628809a42.462643 42.462643 0 0 1-18.764347-0.933105L674.750121 512.568331a5.496369 5.496369 0 0 1-3.131652-2.313588L641.771909 463.995771l-0.217298-0.357903a5.496369 5.496369 0 0 1 8.385158-6.800159l37.96329 32.364664a5.496369 5.496369 0 0 0 2.121854 1.124838l37.196355 10.085198a5.496369 5.496369 0 0 0 5.112901-1.278226L759.266376 474.860686a5.496369 5.496369 0 0 0 1.469959-2.185766l16.847009-45.84994a5.496369 5.496369 0 0 0-0.230081-4.320401l-5.534715-11.286729a5.496369 5.496369 0 0 0-4.320402-3.042176L718.056393 402.640958a5.496369 5.496369 0 0 1-3.400079-1.700039l-10.813786-11.504028a5.496369 5.496369 0 0 1 2.313588-8.947577l12.322092-3.988062a5.496369 5.496369 0 0 1 1.188749-0.242863l72.718235-6.697901a5.496369 5.496369 0 0 1 5.023426 2.339153L821.899414 407.280916a5.496369 5.496369 0 0 0 2.198547 1.853427L867.711007 429.483689a5.406893 5.406893 0 0 1 0.651895 0.357903c3.272257 2.109072 31.073656 20.170395 31.073656 23.953941V425.265545a5.44524 5.44524 0 0 0-0.153387-1.278225l-11.2356-46.016109a122.581803 122.581803 0 0 1-3.400079-23.902813L883.254226 320.834541a5.496369 5.496369 0 0 0-1.13762-3.118869L752.325613 149.130542a5.496369 5.496369 0 0 0-2.697056-1.891774L525.594015 76.489a5.496369 5.496369 0 0 0-6.173828 2.109071z"
                                    fill="#178E3B"></path>
                                <path
                                    d="M511.993698 965.558582a453.233114 453.233114 0 0 1-176.395086-870.637574 453.233114 453.233114 0 0 1 352.790173 835.013436 450.318761 450.318761 0 0 1-176.395087 35.624138z m0-852.576251c-220.250995 0-399.445395 179.1944-399.445395 399.445395s179.1944 399.445395 399.445395 399.445395 399.445395-179.1944 399.445395-399.445395-179.181618-399.445395-399.445395-399.445395z"
                                    fill="#203529"></path>
                                <path
                                    d="M642.359893 920.002634a19.019992 19.019992 0 0 1-8.11673-1.81508l-37.899379-17.895154a18.866605 18.866605 0 0 1-5.112902-3.540684l-54.733605-53.238082A53.685461 53.685461 0 0 1 522.794702 788.077004l1.469959-4.512135a18.828258 18.828258 0 0 0-4.090321-18.585395l-21.44862-23.174224a18.968863 18.968863 0 0 1-4.435442-8.103948l-6.889634-26.702126a33.438373 33.438373 0 0 0-31.636075-24.989304l-10.583705-0.204516a49.505664 49.505664 0 0 1-40.558088 14.827413l-25.845715-2.556451a113.65979 113.65979 0 0 1-64.57594-28.402165l-0.715806-0.639113a112.381565 112.381565 0 0 1-33.093252-52.304977l-7.388142-25.181038a84.107222 84.107222 0 0 1 2.313587-54.52909l0.306775-0.805282a212.1087 212.1087 0 0 1 60.43449-85.104238l1.431612-1.278225a18.956081 18.956081 0 0 1 2.748185-1.942903l5.598626-3.246692c-10.622052 0.140605-19.735798-6.672336-23.928377-18.534266-6.391126-17.895154-1.278225-50.809454 20.783943-59.41191l0.332339-0.140605c-0.447379-3.23391-2.812096-9.778423-4.614394-14.75072a215.866683 215.866683 0 0 1-10.085197-34.512082c-2.249676-11.913059-0.242863-21.065152 5.982094-27.200633 10.225802-10.110762 25.98632-6.915199 41.184418-3.834676 9.637818 1.968467 21.627571 4.409877 27.277328 2.04516a18.917734 18.917734 0 0 0 9.497213-8.845319 16.847009 16.847009 0 0 1-11.35064-1.380483c-6.391126-3.182781-9.867899-9.573907-10.391971-18.994427-0.7925-14.201083 6.391126-24.28628 13.958219-34.882768 6.058788-8.500198 13.613099-19.083903 20.221524-35.483533 6.902416-17.115436 21.461402-26.139707 41.005467-25.411118a79.249966 79.249966 0 0 1 17.166565 2.735402c3.310603-7.439271 10.149109-14.916889 20.681685-22.63737 0.319556-5.112901-1.70004-18.406444-7.822739-37.068532a19.019992 19.019992 0 0 1 2.415846-16.616929l10.225802-14.776284a18.828258 18.828258 0 0 1 21.244104-7.273102l224.034542 70.749769a18.828258 18.828258 0 0 1 9.292697 6.493384l129.778212 168.649041a18.815476 18.815476 0 0 1 3.911369 10.72431l1.41883 33.233857a109.4033 109.4033 0 0 0 3.016611 21.244104l11.235601 46.01611a18.892169 18.892169 0 0 1 0.536854 4.48657v28.887891a13.421365 13.421365 0 0 1-25.628416 5.573062c-3.706853-3.374515-14.277776-10.928826-25.679546-18.304185l-43.114538-20.119266a18.943298 18.943298 0 0 1-7.554311-6.391126l-21.870435-31.597729L722.197843 389.475238l0.191734 0.204516 46.591311 5.112901a18.828258 18.828258 0 0 1 14.891324 10.468665l5.534715 11.286729a19.00721 19.00721 0 0 1 0.779718 14.852978l-16.847009 45.84994a18.981645 18.981645 0 0 1-5.112901 7.503182L741.371222 509.193816a18.866605 18.866605 0 0 1-9.561125 4.627176 29.105189 29.105189 0 0 0 6.506167-0.39625l36.825669-6.455038A18.917734 18.917734 0 0 1 795.056683 534.46433l-28.389383 53.442598-17.511686 54.631348a102.539231 102.539231 0 0 0-4.461006 41.184418l1.201531 12.782252a186.787058 186.787058 0 0 1-9.893463 79.620652L718.836111 824.455295l-23.2637 74.827307a18.930516 18.930516 0 0 1-14.175518 12.897293l-35.17676 7.37536a18.815476 18.815476 0 0 1-3.86024 0.447379z m-33.336115-43.459659l34.294784 16.246243 28.005916-5.867054 21.95991-70.634728 0.166169-0.51129L710.693816 767.126892a159.778158 159.778158 0 0 0 8.461851-68.103842l-1.201532-12.782252a129.241356 129.241356 0 0 1 5.624191-51.908728L741.371222 579.036045a18.968863 18.968863 0 0 1 1.278225-3.093305l21.116282-39.740024-20.835072 3.655724a56.241912 56.241912 0 0 1-24.695312-1.278225l-47.115384-13.16572a18.892169 18.892169 0 0 1-10.801003-7.950561l-29.84656-46.195061c-0.255645-0.39625-0.498508-0.805282-0.728588-1.278226a18.917734 18.917734 0 0 1 28.887891-23.429869l36.608371 31.214261 31.303737 8.487416 22.305031-20.157612 15.006364-40.839298-2.134636-4.345966-45.172481-5.010643a18.930516 18.930516 0 0 1-11.721325-5.867054l-10.813786-11.504027a18.917734 18.917734 0 0 1 7.988908-30.933051l12.322091-3.988063a18.930516 18.930516 0 0 1 4.077539-0.843629l72.718235-6.6979a18.943298 18.943298 0 0 1 17.30717 8.218988l23.289265 33.642889 41.670143 19.441806a18.956081 18.956081 0 0 1 2.262459 1.278226c1.060927 0.677459 5.189595 3.361732 10.149109 6.736247l-10.788222-44.137118a136.335507 136.335507 0 0 1-3.757982-26.472046l-1.278225-30.7541-126.7616-164.750454-216.020069-68.231664-4.665522 6.749029c13.919873 44.367199 6.800158 56.446428-1.086492 61.955579s-11.580721 9.612254-13.152938 11.887494c6.97911 7.669352 3.527902 14.840195 2.21133 16.974832-0.945887 1.559435-6.237739 9.113746-17.064307 5.509151-1.124838-0.370685-2.377499-0.869193-3.962499-1.482741-29.552568-11.504027-36.582807-5.752014-39.791152 2.185765-7.797174 19.35233-16.731969 31.878938-23.2637 41.031031-1.41883 1.994031-2.658709 3.7452-3.732418 5.317417a16.962049 16.962049 0 0 1 2.466975-0.178952c6.391126 0 14.060478 4.090321 16.335719 15.556002 3.131652 15.619913-3.566248 42.258127-28.274343 52.586187-13.267978 5.547498-29.05406 2.32637-42.986716-0.51129a124.575834 124.575834 0 0 0-15.786082-2.556451c0.063911 0.62633 0.178952 1.380483 0.345121 2.288024a190.596169 190.596169 0 0 0 8.947577 30.408979c3.489555 9.650601 6.237739 17.281606 6.276086 24.848699 0 6.46782-2.224112 18.21471-17.498904 24.17124-1.278225 0.485726-3.757982 3.438426-5.253506 9.30548-1.751169 6.889634-1.073709 13.191285 0 16.220678a148.031268 148.031268 0 0 1 20.720032-4.499353l2.978265-0.485725c1.776733-14.060478 9.049835-48.201875 24.51636-57.430661a18.764347 18.764347 0 0 1 18.904952-0.511291c3.34895 1.802298 7.797174 2.236894 12.501043 2.709838 7.26032 0.715806 18.853823 1.853427 24.40132 11.964188a18.904952 18.904952 0 0 1 30.843576-11.273946c3.655724 3.093305 11.887495 4.269272 15.88834 4.37153 5.534715-2.927136 19.032774-18.674871 22.535111-24.490796 0.549637-1.380483 1.840644-4.307619 5.521934-12.130358 7.298666-15.49209 15.415397-26.344223 33.336114-32.56918a13.459712 13.459712 0 0 1 1.942903-0.51129l9.714512-1.81508a13.408583 13.408583 0 0 1 3.157216-0.204516l0.613548-0.063911a18.904952 18.904952 0 0 1 9.970157 1.53387l0.7925 0.383468 28.440512 15.09584a18.917734 18.917734 0 0 1 3.23391 32.032326c-9.471649 7.247537-25.564505 19.544064-31.815027 24.362973-6.07157 4.665522-12.871728 5.752014-18.316968 6.621207a36.493331 36.493331 0 0 0-5.700884 1.188749 7.298666 7.298666 0 0 0-0.242863 1.009798 68.346705 68.346705 0 0 0-1.278225 9.522779 44.622844 44.622844 0 0 0 3.834675 2.55645c1.955685 0.217298 9.088182-0.562419 22.074951-6.774594a18.904952 18.904952 0 0 1 26.293093 11.772455l6.570078 22.458418a18.917734 18.917734 0 0 1-14.060478 23.762207l-37.822685 8.449069-0.421815 0.089476-43.843126 8.321247a82.023715 82.023715 0 0 1-38.564056-1.981249l-21.359145-6.391127-27.085593-3.706853a69.90614 69.90614 0 0 0-44.367199 8.768625l-36.838452 21.384709-0.894758 0.754153a185.189276 185.189276 0 0 0-52.752356 74.290452l-0.306774 0.805282a57.520137 57.520137 0 0 0-1.610564 37.183573l7.388142 25.181038a85.564399 85.564399 0 0 0 25.19382 39.829499l0.715806 0.639113a86.919318 86.919318 0 0 0 49.416189 21.729829l25.845714 2.556451a22.714063 22.714063 0 0 0 19.825274-8.129513 18.815476 18.815476 0 0 1 14.942454-6.851287l14.201082 0.268427a60.357797 60.357797 0 0 1 57.111105 45.121352l6.391126 24.759223 20.093702 21.72983a45.683771 45.683771 0 0 1 9.919028 45.108569L548.359207 796.33434a26.983335 26.983335 0 0 0 6.889634 27.852528zM449.13058 411.588535l17.626726 2.415846a18.994427 18.994427 0 0 1 2.83766 0.613548l21.934346 6.544513a55.065944 55.065944 0 0 0 25.884061 1.278226l43.638611-8.295682 29.399181-6.557296-1.661693-5.67532c-17.243259 6.902416-30.051076 7.4904-38.98587 1.802297-17.038743-10.852132-18.713218-19.467371-15.070276-39.855063a33.233857 33.233857 0 0 1 1.981249-6.915199c-3.285039 4.154232-6.263304 7.515965-6.518949 7.797174-14.610115 16.450759-23.071966 19.326766-28.120956 20.055355A61.661587 61.661587 0 0 1 475.500367 380.655484c-5.803143 22.790756-17.562815 29.360834-26.369787 30.933051z m-41.567886-34.908332c-4.76778 8.819754-10.225802 30.677406-10.225802 36.915146v0.102258a97.068427 97.068427 0 0 1 34.333131-4.218144 18.470355 18.470355 0 0 1-9.394956-8.346811c-4.358748-8.270117-0.600766-16.143985 2.198548-21.256886h-0.242863a69.561019 69.561019 0 0 1-16.668058-3.246692z m153.923887-9.356609z m-217.374989-5.176812z m201.346044-18.559831a23.37874 23.37874 0 0 1-1.968467 3.834676c6.391126-5.470804 14.46951-6.774594 19.339548-7.554312 2.134636-0.345121 5.368546-0.856411 6.237739-1.41883l22.011039-16.859791-15.760517-8.423504h-0.703024l-7.337013 1.367701c-7.912214 2.939918-11.670197 7.068586-16.987614 18.342532-3.86024 8.308464-4.691087 10.276931-4.831691 10.660399z m0.089476-0.242863l-0.076694 0.217298z m-24.810353-10.034068z m53.685461-46.821392zM520.238251 100.979796zM259.352475 296.944511A24.733659 24.733659 0 0 1 234.951155 268.427305v-0.306774l-3.770765-26.357005a24.541925 24.541925 0 0 1 4.576047-18.074105l18.930516-25.807368a24.759223 24.759223 0 0 1 2.454192-2.850442l19.684669-19.684669L306.838543 138.048329a24.554707 24.554707 0 0 1 7.400925-6.186611l46.565746-25.411118a24.669748 24.669748 0 0 1 36.493331 21.653136V143.16123a24.810352 24.810352 0 0 1-9.714512 19.620757c-17.652291 13.44693-27.021682 21.026806-31.239825 24.644183 0 4.780562 0 13.830397 0.178951 28.325472a24.784788 24.784788 0 0 1-9.573907 19.876403l-72.526501 56.114089a24.605836 24.605836 0 0 1-15.070276 5.202377z m-1.41883-58.082556l3.681289 25.807368a24.68253 24.68253 0 0 1 0.242862 2.876007l67.822633-52.407236c-0.472943-32.748131 0-34.665469 0.51129-36.685065 1.278225-5.112901 1.725604-6.889634 40.276878-36.288815v-10.379189l-42.986716 23.455433-29.820995 37.068533a24.861481 24.861481 0 0 1-1.776733 1.968467l-19.646322 19.646322z m69.816664-83.966617zM246.378488 851.055163a13.383019 13.383019 0 0 1-7.541529-2.313588l-53.353122-36.237686a13.421365 13.421365 0 0 1-4.563264-5.304635l-29.322488-61.175861a19.684669 19.684669 0 0 1 17.754549-28.184867h24.452449a30.268374 30.268374 0 0 1 28.82398 21.486967l3.553466 11.887495a7.183626 7.183626 0 0 0 5.636974 5.04899c11.504027 2.057943 14.699591 2.454193 15.440961 2.55645 4.93395 0.076694 8.730279 1.802298 29.616479 17.895154a30.677406 30.677406 0 0 1 4.333184 44.367199l-2.083507 2.403063c-0.370685 0.421814-0.754153 0.830846-1.150403 1.278225l-22.113297 22.35616a13.408583 13.408583 0 0 1-9.484432 3.936934z m-42.820546-58.734451l41.133289 27.929222 14.264994-14.418381 2.070725-2.377499a3.834676 3.834676 0 0 0-0.549637-5.509151c-10.519794-8.129513-15.249227-11.376205-17.204912-12.628865-2.556451-0.332339-7.26032-1.060927-16.182332-2.658709a33.898534 33.898534 0 0 1-26.638214-23.787772l-3.553467-11.887495a3.259474 3.259474 0 0 0-3.106087-2.313588h-13.063462z m43.319054-6.710682z m0-26.842731z"
                                    fill="#203529"></path>
                                <path
                                    d="M789.637008 839.793999a13.421365 13.421365 0 0 1-11.759672-6.953546L764.379277 808.324093a58.938967 58.938967 0 0 1-7.273102-28.31269v-14.520639a39.38212 39.38212 0 0 1 5.432457-19.953096l26.369788-44.840143A41.9897 41.9897 0 0 1 824.979937 680.015841a15.134187 15.134187 0 0 1 15.070275 16.616928l-5.867054 64.57594a13.421365 13.421365 0 0 1-1.278225 4.486571l-31.175914 66.467714a13.421365 13.421365 0 0 1-11.721326 7.669351z m21.729829-124.332972l-25.679545 43.676957a12.526608 12.526608 0 0 0-1.725604 6.391127v14.520639a32.032325 32.032325 0 0 0 3.949716 15.338703l0.779717 1.406048 18.968863-40.430265zM185.854522 374.711736a25.807368 25.807368 0 0 1-24.554707-17.895154l-0.651895-2.019595-10.545358-31.405995a13.421365 13.421365 0 0 1 2.55645-13.037898l14.060478-16.335719a13.421365 13.421365 0 0 1 10.161891-4.65274h7.043021a13.421365 13.421365 0 0 1 9.791206 4.243708l15.09584 16.105638a13.421365 13.421365 0 0 1 3.46399 7.068586l3.195564 20.068137a33.553413 33.553413 0 0 1-18.483138 35.304582 25.794586 25.794586 0 0 1-11.133342 2.55645zM177.980655 322.112767l8.142295 24.28628v0.153387l0.281209 0.856411a6.557296 6.557296 0 0 0 2.556451-6.263304l-2.556451-16.003381-5.752014-6.135481z"
                                    fill="#203529"></path>
                                <path
                                    d="M511.993698 1023.999041A511.584097 511.584097 0 0 1 0.000569 511.99313a13.421365 13.421365 0 0 1 26.84273 0C26.843299 779.512895 244.486715 997.143529 511.993698 997.143529s485.163181-217.630633 485.163182-485.150399S779.513464 26.842731 511.993698 26.842731a13.421365 13.421365 0 0 1 0-26.842731 512.133734 512.133734 0 0 1 199.300884 983.76051 508.797566 508.797566 0 0 1-199.300884 40.238531z"
                                    fill="#203529"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3 style="font-family: math;font-size: 60px;"
                            class="text-3xl font-bold text-[#4a8b71] before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                            1907
                        </h3>
                        <h3 class="text-xl font-bold text-gray-900 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500"
                            style="margin-top: 21px; margin-bottom: 17px; font-family: math;font-weight: 800;color: #4a8b71;font-size: 18px;">
                            Smells Racy Free <br> Announcing
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700" style="font-size: 14px;font-family: math;">Vast a real
                            proven works discount secure care. Market invigorate a awesome handcrafted bigger comes</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col">
                    <span
                        style="position: absolute; left: 18px; top: 43px; height: calc(21% - 32px); width: 1px; background-color: #7771715e; z-index: 10;"
                        aria-hidden="true"></span>
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                        class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 ">
                        <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M621.05316 292.412052S350.590068 467.760703 511.112597 698.020115s79.346807 290.895004 79.346807 290.895004 585.599347-335.113642 30.593756-696.503067z"
                                    fill="#178E3B"></path>
                                <path
                                    d="M592.537225 1023.523833a22.639596 22.639596 0 0 1-19.631084-10.681301c-6.255108-10.497327-3.874271-23.494533 6.287575-30.117589 4.447837-4.729208 52.735541-63.849722-83.956973-259.976588-47.248794-67.723993-64.152737-137.828823-50.343883-208.366533 11.211578-57.226666 43.623429-115.048541 93.729227-167.221339 37.379142-38.959152 71.425113-61.133403 72.821149-62.064094a22.726172 22.726172 0 0 1 24.760706 0c169.006967 110.070427 252.844898 230.205302 249.197889 357.093096C883.930041 693.583101 867.881034 745.636857 837.644403 797.062938c-23.656863 40.236147-56.036247 80.082702-96.229106 118.576509-67.843035 64.931921-134.116882 103.133534-136.908954 104.735187a24.122208 24.122208 0 0 1-11.969118 3.149199z m-12.91063-41.12355z m44.683984-650.693597c-31.524447 23.808371-116.109096 95.320059-134.852777 191.603275-11.27651 57.897629 3.246596 116.23896 43.071507 173.400694 69.260715 99.41077 104.269842 181.809377 103.945183 244.90156v2.759606a755.710157 755.710157 0 0 0 74.325405-62.334643c57.35653-55.083913 126.411627-141.670629 129.214521-241.330305C842.990465 533.92633 770.483154 430.002791 624.310579 331.749973z"
                                    fill="#203529"></path>
                                <path
                                    d="M468.106022 607.981185a11.373908 11.373908 0 0 1-11.211579-13.267755c16.23298-95.406635 145.728874-173.00028 151.237265-176.257699a11.363086 11.363086 0 1 1 11.568704 19.55533c-1.450146 0.865759-125.93546 75.569933-140.404456 160.52253a11.363086 11.363086 0 0 1-11.189934 9.447594zM528.07065 736.654608a11.373908 11.373908 0 0 1-11.200756-13.365154c14.198447-79.606535 103.360795-144.873937 107.137669-147.611899A11.363086 11.363086 0 0 1 637.372717 594.129042c-0.854937 0.616853-85.493695 62.680947-98.090488 133.186191A11.363086 11.363086 0 0 1 528.07065 736.654608zM588.42487 850.220537a11.363086 11.363086 0 0 1-7.055935-20.280403c65.74357-51.999646 81.500382-137.882933 81.65189-138.737871a11.363086 11.363086 0 0 1 22.390691 3.885094c-0.670963 3.863449-17.185315 95.179373-89.952354 152.698233a11.308976 11.308976 0 0 1-7.034292 2.434947z"
                                    fill="#203529"></path>
                                <path
                                    d="M528.655038 608.197625a11.363086 11.363086 0 0 1-11.103359-9.014715c-8.938961-42.335612 15.334755-91.467432 16.373666-93.534431a11.363086 11.363086 0 0 1 20.323691 10.172667c-0.21644 0.432879-21.741371 44.17535-14.458174 78.675844A11.373908 11.373908 0 0 1 528.655038 608.197625zM589.07419 727.737291A11.373908 11.373908 0 0 1 577.851789 714.556111l11.135825-68.74126a11.363086 11.363086 0 0 1 22.412334 3.636188l-11.135824 68.741259a11.363086 11.363086 0 0 1-11.189934 9.544993zM704.642186 849.949987a11.373908 11.373908 0 0 1-11.200756-13.332688c6.568946-37.325032-7.575391-60.808744-7.726899-61.046827a11.363086 11.363086 0 1 1 19.338891-11.904185c0.768361 1.25535 18.830257 31.178144 10.821986 76.922682a11.363086 11.363086 0 0 1-11.233222 9.361018zM753.925514 663.617019h-0.205618a11.363086 11.363086 0 0 1-11.157468-11.568704c0.703429-39.240524-21.925345-82.138879-22.152607-82.560937a11.363086 11.363086 0 0 1 20.053141-10.692122c1.082199 1.95878 25.626465 48.590721 24.825638 93.664295a11.363086 11.363086 0 0 1-11.363086 11.157468zM659.114088 489.772624a11.363086 11.363086 0 0 1-6.179355-20.908078c2.445769-1.58001 60.603126-38.363943 114.594018-1.536723a11.363086 11.363086 0 1 1-12.80241 18.776148c-41.707937-28.418537-88.978375 1.5259-89.454543 1.839737a11.308976 11.308976 0 0 1-6.15771 1.828916z"
                                    fill="#2FA65B"></path>
                                <path
                                    d="M706.059866 373.587774s79.087079 104.129157 71.587443 220.259897c-14.393242 222.846351-106.466706 290.743496-146.85436 299.530949-2.434947-11.319798-5.410993-20.377801-5.410994-20.377801z"
                                    fill="#2FA65B"></path>
                                <path
                                    d="M618.975339 983.720565a11.363086 11.363086 0 0 1-10.086092-16.590105c0.259728-0.497811 26.156742-51.058133 42.833424-119.518022 15.150781-62.36711 25.626465-152.882207-10.821987-229.945575-31.513625-66.566041-36.686535-144.495167-35.46365-198.150577 1.30946-57.832697 9.880474-99.562278 10.248421-101.358728a11.363086 11.363086 0 0 1 22.250005 4.620988c-0.086576 0.411235-8.560192 41.848623-9.739788 97.711719-1.082199 51.068955 3.744407 125.037235 33.288431 187.447632 17.488331 36.924619 26.600443 79.465849 27.054967 126.444094 0.389592 37.216812-4.588522 77.290629-14.8153 119.12843-17.315179 70.970589-43.493565 121.920503-44.597407 124.052434A11.363086 11.363086 0 0 1 618.975339 983.720565z"
                                    fill="#203529"></path>
                                <path
                                    d="M751.403991 871.258479a11.373908 11.373908 0 0 1-10.821987-14.804478c15.453797-48.69894 6.233464-97.473635-27.412092-144.852293-25.550711-35.972284-55.906384-57.280776-56.209399-57.497215a11.363086 11.363086 0 1 1 12.986384-18.657105c1.374392 0.952335 33.93775 23.808371 61.761078 62.994785 37.465718 52.746363 48.027977 109.767412 30.550469 164.88379a11.363086 11.363086 0 0 1-10.854453 7.932516zM847.21104 711.839792a11.373908 11.373908 0 0 1-10.692123-7.521281c-36.578315-101.618456-94.064709-149.981914-135.859222-172.664798-44.716449-24.273716-80.623801-24.998789-80.980927-24.99879a11.363086 11.363086 0 0 1 0.281372-22.726172c1.68823 0 41.935199 0.833293 91.543186 27.747574 28.916349 15.691881 55.138022 37.086949 77.918304 63.579172 28.277851 32.866374 51.317861 73.69773 68.470711 121.368582a11.373908 11.373908 0 0 1-10.692123 15.215713z"
                                    fill="#203529"></path>
                                <path
                                    d="M635.208319 211.182219S217.566206 242.468583 257.001526 605.037605s-90.904689 381.117907-90.904689 381.117907S1042.645298 969.219103 635.208319 211.182219z"
                                    fill="#178E3B"></path>
                                <path
                                    d="M161.908729 1024c-12.109803 0-22.812748-9.415128-23.397136-21.535754s7.802652-22.531376 19.87999-23.656863c3.246596-0.833293 26.47058-8.051558 47.17304-49.359081 21.752193-43.417811 43.699183-131.865909 24.663308-306.835791-11.395552-104.74601 12.488573-193.518767 70.981411-263.850859 26.719485-32.119657 60.743812-60.289288 101.131466-83.697245 31.892395-18.494775 67.832213-34.10008 106.802187-46.372213 66.133161-20.821503 117.959656-24.89057 120.188985-25.0529a22.726172 22.726172 0 0 1 21.719728 11.904186c122.862016 228.592826 143.58612 415.564291 61.598748 555.784773-33.147745 56.674745-83.145324 105.254643-148.629166 144.386948-51.523479 30.799374-112.721814 55.852274-181.917597 74.46609C265.096372 1021.673273 166.497251 1023.913424 162.363252 1023.989178z m456.298249-773.382461a584.322353 584.322353 0 0 0-96.564588 21.795481c-55.527614 17.618194-132.796599 51.945536-185.640361 115.600463-50.203197 60.46244-70.59182 137.742247-60.603125 229.685846 16.871477 155.111536 5.649077 269.46747-33.364186 339.983536q-4.512768 8.148956-9.187866 14.988452a998.025262 998.025262 0 0 0 138.456498-26.654554c101.109822-27.336339 235.605474-83.837931 302.160692-197.750163 71.825526-122.916126 53.222531-290.299795-55.257064-497.649061z"
                                    fill="#203529"></path>
                                <path
                                    d="M624.159071 243.496672a22.726172 22.726172 0 0 1-20.713283-32.043903l89.010841-198.042358A22.726172 22.726172 0 0 1 714.923074 0.066902a169.169297 169.169297 0 0 1 23.494533 3.744407c20.128895 4.718386 33.548159 12.315421 40.853 23.234805a34.944195 34.944195 0 0 1 4.263863 30.701977c-1.95878 6.15771-6.038669 18.970943-72.864437 101.31544-31.859929 39.251346-63.211225 76.067745-63.51424 76.435692a22.726172 22.726172 0 0 1-20.139718 7.813475 22.66124 22.66124 0 0 1-2.857004 0.183974z m102.67901-195.715631l-18.527241 41.23177c15.951608-20.626707 24.024811-32.184589 28.137165-38.537095a86.900554 86.900554 0 0 0-9.609924-2.694675z"
                                    fill="#203529"></path>
                                <path
                                    d="M208.886973 996.447222a11.363086 11.363086 0 0 1-6.363328-20.789037c0.606031-0.411235 61.901764-42.043419 123.846816-109.962207 56.609813-62.064094 125.459292-159.483619 131.963307-271.144878 5.530035-94.876358 48.006333-186.419544 82.658335-246.514036 37.400786-64.845345 73.015945-106.899585 74.5202-108.663569a11.363086 11.363086 0 1 1 17.315179 14.739546c-0.465345 0.541099-36.037216 42.616984-72.366625 105.6767-33.331719 57.865163-74.173897 145.793806-79.433383 236.081641-3.062622 52.497458-19.057519 106.2178-47.55181 159.656771-22.617952 42.422188-53.125133 84.779444-90.677427 125.88135C279.045913 951.254605 217.80429 992.778568 215.228657 994.542552a11.308976 11.308976 0 0 1-6.341684 1.90467z"
                                    fill="#203529"></path>
                                <path
                                    d="M271.167507 474.004989a11.363086 11.363086 0 0 1-8.906495-18.397377c32.606646-41.23177 89.82249-71.500866 169.980946-89.963176a636.008161 636.008161 0 0 1 109.778233-15.442975 11.363086 11.363086 0 1 1 0.768361 22.726172c-2.099465 0.075754-192.230951 7.651145-262.703728 96.759384a11.341442 11.341442 0 0 1-8.917317 4.317972zM259.306609 658.076162a11.363086 11.363086 0 0 1-8.852385-18.494775c27.45538-34.165012 71.57662-61.436419 131.130014-81.035037a475.36659 475.36659 0 0 1 80.829419-19.198205 11.363086 11.363086 0 0 1 2.88947 22.542199c-1.374392 0.173152-137.926221 18.29998-197.100845 91.932777a11.341442 11.341442 0 0 1-8.895673 4.253041zM257.29372 825.189281a11.363086 11.363086 0 0 1-1.937136-22.563842c56.620635-9.631568 102.884628-38.472163 131.714401-60.971073 31.567735-24.641664 49.781139-47.313726 49.975935-47.530166a11.363086 11.363086 0 0 1 17.780524 14.155159c-0.790005 0.995623-19.728482 24.641664-53.244175 50.863337-30.99417 24.273716-80.861885 55.419394-142.417345 65.884256a11.43884 11.43884 0 0 1-1.872204 0.162329z"
                                    fill="#203529"></path>
                                <path
                                    d="M430.012628 950.78926a11.363086 11.363086 0 0 1-7.856762-19.576974c48.817982-46.707695 69.033453-108.988229 60.08367-185.055974-6.763742-57.51886-28.353605-101.272152-28.570045-101.726675a11.363086 11.363086 0 1 1 20.291226-10.172668c0.963157 1.926314 23.581109 47.779072 30.799374 109.204668 4.328795 36.361875 2.218507 70.624286-6.114423 101.845718-10.497327 39.316278-30.961704 73.75184-60.830387 102.332706a11.319798 11.319798 0 0 1-7.802653 3.149199zM638.649711 828.760537a11.373908 11.373908 0 0 1-11.244044-13.116248c21.871235-139.722671-13.917075-231.525585-47.735784-283.925644-36.296944-56.274331-77.517891-79.877084-77.918304-80.082702A11.363086 11.363086 0 0 1 512.919869 431.799241c1.883026 1.082199 46.534543 26.676197 85.872465 87.593161 22.953434 35.57187 39.348744 75.916237 48.69894 119.940079 11.65528 54.683499 12.456107 115.189227 2.359193 179.818132a11.363086 11.363086 0 0 1-11.200756 9.609924z"
                                    fill="#203529"></path>
                                <path
                                    d="M340.09274 512.011807a11.373908 11.373908 0 0 1-10.886918-14.642148c15.875855-52.713897 73.232384-92.9284 75.667331-94.61663a11.363086 11.363086 0 0 1 12.986384 18.678749c-0.530277 0.367948-53.287463 37.454896-66.858234 82.496005a11.363086 11.363086 0 0 1-10.908563 8.084024zM334.357087 685.931956a11.363086 11.363086 0 0 1-8.960605-18.343268l55.549258-71.425112a11.363086 11.363086 0 1 1 17.942854 13.949541l-55.549258 71.425112a11.341442 11.341442 0 0 1-8.982249 4.393727zM389.960455 897.328645a11.363086 11.363086 0 0 1-8.863207-18.462309c31.178144-39.078194 29.998547-76.403226 29.987726-76.771174a11.363086 11.363086 0 0 1 22.726172-1.136309c0.097398 1.85056 1.969602 45.9718-34.944195 92.105929a11.341442 11.341442 0 0 1-8.906496 4.263863zM562.33306 715.627488a11.363086 11.363086 0 0 1-9.85883-16.99052c25.702219-45.062753 26.665375-108.955763 26.665376-109.59426a11.363086 11.363086 0 1 1 22.726172 0.238084c0 2.857005-1.082199 70.4836-29.652244 120.611043a11.363086 11.363086 0 0 1-9.880474 5.735653zM680.000522 519.998433a11.363086 11.363086 0 0 1-10.129379-6.200998c-12.7483-24.977145-34.251588-41.902733-63.849722-50.300595a139.00842 139.00842 0 0 0-42.519586-5.216197 11.363086 11.363086 0 0 1-1.655764-22.661241 159.332111 159.332111 0 0 1 49.553877 5.789763c35.874886 9.956228 63.103005 31.383762 78.751598 62.053272a11.363086 11.363086 0 0 1-10.107736 16.535996z"
                                    fill="#2FA65B"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3 style="font-family: math;font-size: 60px;"
                            class="text-3xl font-bold text-[#4a8b71] before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                            1994
                        </h3>
                        <h3 class="text-xl font-bold text-gray-900 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500"
                            style="margin-top: 21px; margin-bottom: 17px; font-family: math;font-weight: 800;color: #4a8b71;font-size: 18px;">
                            Grainfarmers<br> Formed
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700" style="font-size: 14px;font-family: math;">Market
                            invigorate a awesome handcrafted bigger comes newer recommended lifetime</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <span
                        style="position: absolute; left: 18px; top: 43px; height: calc(21% - 32px); width: 1px; background-color: #7771715e; z-index: 10;"
                        aria-hidden="true"></span>

                    <div
                        class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 ">
                        <svg width="30px" height="30px" viewBox="0 -12 1048 1048" class="icon" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M1030.447595 997.346554c0-79.160734-222.645117-143.319385-497.289836-143.319385S35.880615 918.185821 35.880615 997.346554z"
                                    fill="#178E3B"></path>
                                <path d="M54.626872 949.83996h939.127813v37.492514H54.626872z" fill="#2FA65B"></path>
                                <path
                                    d="M1021.220426 1024H26.653446a26.653446 26.653446 0 0 1-26.653446-26.653446c0-28.696877 17.070897-54.880714 50.768468-77.815369 27.389588-18.657412 65.808627-35.19524 114.229053-49.143877 96.257015-27.744968 223.762023-43.026277 359.021914-43.026277s262.726822 15.23054 359.021914 43.026277c48.395042 13.961329 86.81408 30.461081 114.229053 49.143877 33.659494 22.934655 50.768468 49.118493 50.768468 77.815369a26.653446 26.653446 0 0 1-26.653446 26.653446z m-950.08111-53.306891h905.582548c-19.330094-15.89053-54.791869-33.596034-108.542984-49.080417-91.599008-26.399603-213.849479-40.932077-344.24829-40.932077s-252.661973 14.532474-344.24829 40.932077c-53.738423 15.484383-89.21289 33.189886-108.530292 49.080417z"
                                    fill="#203529"></path>
                                <path
                                    d="M81.914923 952.340307a26.653446 26.653446 0 0 1-26.653446-26.653445V167.142489a26.653446 26.653446 0 0 1 26.653446-26.653446h178.628855V26.653446a26.653446 26.653446 0 0 1 26.653446-26.653446h379.722756a26.653446 26.653446 0 0 1 26.653446 26.653446v827.373723a26.653446 26.653446 0 0 1-53.306892 0V53.306891H313.850669v113.835598a26.653446 26.653446 0 0 1-26.653445 26.653446H108.568369v731.890927a26.653446 26.653446 0 0 1-26.653446 26.653445zM993.792762 976.493406a26.653446 26.653446 0 0 1-26.653446-26.653446V238.205652H820.723054v626.241745a26.653446 26.653446 0 0 1-53.306891 0V211.552206a26.653446 26.653446 0 0 1 26.653445-26.653445H993.792762a26.653446 26.653446 0 0 1 26.653445 26.653445v738.287754a26.653446 26.653446 0 0 1-26.653445 26.653446z"
                                    fill="#203529"></path>
                                <path
                                    d="M244.48825 430.833912H155.732276A13.326723 13.326723 0 0 1 142.405553 417.570649V251.456222a13.326723 13.326723 0 0 1 13.326723-13.326723h88.755974a13.326723 13.326723 0 0 1 13.326723 13.326723V417.570649a13.326723 13.326723 0 0 1-13.326723 13.263263z m-75.429251-26.653446h62.102528V264.782945H169.058999zM244.48825 675.817154H155.732276A13.326723 13.326723 0 0 1 142.405553 662.528508V496.426772a13.326723 13.326723 0 0 1 13.326723-13.326722h88.755974a13.326723 13.326723 0 0 1 13.326723 13.326722V662.528508a13.326723 13.326723 0 0 1-13.326723 13.288646z m-75.429251-26.653446h62.102528V509.753495H169.058999zM452.1059 221.274368h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723V107.514923a13.326723 13.326723 0 0 1 13.326723-13.326723h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326723v100.42003a13.326723 13.326723 0 0 1-13.339415 13.339415z m-87.093307-26.653446h73.779276V120.841646h-73.779276zM599.740605 221.274368h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723V107.514923a13.326723 13.326723 0 0 1 13.326723-13.326723h100.432722A13.326723 13.326723 0 0 1 613.029251 107.514923v100.42003a13.326723 13.326723 0 0 1-13.288646 13.339415z m-87.093307-26.653446H586.375806V120.841646h-73.728508zM452.1059 408.686168h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723v-100.369262a13.326723 13.326723 0 0 1 13.326723-13.326722h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326722v100.42003A13.326723 13.326723 0 0 1 452.1059 408.686168z m-87.093307-26.653446h73.779276v-73.715816h-73.779276zM599.740605 408.686168h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723v-100.369262a13.326723 13.326723 0 0 1 13.326723-13.326722h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326722v100.42003A13.326723 13.326723 0 0 1 599.740605 408.686168z m-87.093307-26.653446H586.375806v-73.715816h-73.728508zM452.1059 783.687457h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723v-100.432722a13.326723 13.326723 0 0 1 13.326723-13.326723h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326723V770.411502a13.326723 13.326723 0 0 1-13.339415 13.275955z m-87.093307-26.653446h73.779276v-73.779276h-73.779276zM599.740605 783.687457h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723v-100.432722a13.326723 13.326723 0 0 1 13.326723-13.326723h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326723V770.411502a13.326723 13.326723 0 0 1-13.339415 13.275955z m-87.093307-26.653446H586.375806v-73.779276h-73.728508zM452.1059 596.212196h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723v-100.420029a13.326723 13.326723 0 0 1 13.326723-13.326723h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326723v100.420029a13.326723 13.326723 0 0 1-13.339415 13.326723z m-87.093307-26.653445h73.779276v-73.766584h-73.779276zM599.740605 596.212196h-100.42003a13.326723 13.326723 0 0 1-13.326723-13.326723v-100.420029a13.326723 13.326723 0 0 1 13.326723-13.326723h100.432722a13.326723 13.326723 0 0 1 13.326723 13.326723v100.420029a13.326723 13.326723 0 0 1-13.339415 13.326723z m-87.093307-26.653445H586.375806v-73.766584h-73.728508zM920.10233 509.753495h-57.647595a13.326723 13.326723 0 0 1-13.326723-13.326723V298.721666a13.326723 13.326723 0 0 1 13.326723-13.326723h57.660287a13.326723 13.326723 0 0 1 13.326723 13.326723v197.705106a13.326723 13.326723 0 0 1-13.339415 13.326723z m-44.333565-26.653445h31.006842V312.048389H875.756073zM920.10233 787.406247h-57.647595a13.326723 13.326723 0 0 1-13.326723-13.326723V576.374417a13.326723 13.326723 0 0 1 13.326723-13.326722h57.660287a13.326723 13.326723 0 0 1 13.326723 13.326722v197.705107a13.326723 13.326723 0 0 1-13.339415 13.326723z m-44.333565-26.653446h31.006842V589.70114H875.756073zM222.112048 886.861676a13.326723 13.326723 0 0 1-13.161726-11.295984c-6.587209-42.950124-48.56004-78.335746-48.978879-78.691126a13.326723 13.326723 0 1 1 17.058205-20.472385 206.741894 206.741894 0 0 1 36.807139 42.366287c5.076847-17.312048 13.542489-28.582647 25.384234-33.596034a13.326723 13.326723 0 0 1 10.458305 24.584631c-11.740208 4.962618-15.82707 39.739018-14.26594 62.927516a13.326723 13.326723 0 0 1-11.841745 14.151711 13.466336 13.466336 0 0 1-1.459593 0.025384z"
                                    fill="#203529"></path>
                                <path
                                    d="M222.175508 890.808924a13.326723 13.326723 0 0 1-12.984036-10.369459c-3.909172-17.172434-38.406346-25.320773-54.49995-26.577293a13.326723 13.326723 0 0 1 2.068815-26.577293c7.044125 0.545761 69.146653 6.549132 78.411899 47.227367a13.339415 13.339415 0 0 1-13.00942 16.296678z"
                                    fill="#203529"></path>
                                <path
                                    d="M666.91998 932.781755H354.110064a13.326723 13.326723 0 0 1 0-26.653446h312.809916a13.326723 13.326723 0 0 1 0 26.653446z"
                                    fill="#2FA65B"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3 style="font-family: math;font-size: 60px;"
                            class="text-3xl font-bold text-[#4a8b71] before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                            2001
                        </h3>
                        <h3 class="text-xl font-bold text-gray-900 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500"
                            style="margin-top: 21px; margin-bottom: 17px; font-family: math;font-weight: 800;color: #4a8b71;font-size: 18px;">
                            Group Cereals and <br>Lingrain Merge
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700" style="font-size: 14px;font-family: math;">Odor to
                            yummy high racy bonus soaking mouthwatering. First superior full-bodied drink.</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col">
                    <span
                        style="position: absolute; left: 18px; top: 43px; height: calc(21% - 32px); width: 1px; background-color: #7771715e; z-index: 10;"
                        aria-hidden="true"></span>
                    <div
                        class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-gray-900 ">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint0_linear)"></path>
                                <path
                                    d="M3.56575 17.7261C2.16575 18.2861 3.06861 19.4632 2.46289 20.0689C2.46289 20.0689 3.26861 19.6289 3.25718 18.7661C3.24575 18.0632 3.56575 17.7261 3.56575 17.7261Z"
                                    fill="url(#paint1_linear)"></path>
                                <path
                                    d="M3.89136 21.8117C4.25136 21.7717 4.85707 20.726 5.67993 20.8974C5.67993 20.8974 4.94279 21.9717 3.89136 21.8117Z"
                                    fill="url(#paint2_linear)"></path>
                                <path opacity="0.5"
                                    d="M8.31995 19.7144C8.75995 19.5487 9.50852 19.183 10.2971 18.3887C11.1828 17.503 11.92 14.9887 10.4685 13.543C9.05138 12.1259 6.56567 12.4116 5.37138 13.6059C4.94281 14.0344 4.48567 14.6802 4.30281 15.2744C4.55995 15.0459 4.94281 14.7602 5.26281 14.7259C5.42852 14.7087 5.55995 14.7659 5.65138 14.8802L5.74281 14.9944L5.58281 15.0916C5.56567 15.103 4.17138 15.9544 3.6971 16.823C4.02281 16.6573 4.46852 16.4744 4.65138 16.623L4.75424 16.7087L4.63424 16.8287C4.1371 17.3144 4.10852 17.8116 4.08567 18.3887C4.04567 19.2173 3.99995 20.1487 2.59424 21.2287C3.07424 21.2916 4.16567 21.263 5.19995 19.9659C5.71424 19.3144 6.30852 19.0402 6.33138 19.0287L6.39995 19.0002L6.45138 19.0287C6.54852 19.0859 6.59424 19.2116 6.5771 19.3773C6.55424 19.6059 6.40567 19.9316 6.08567 20.263C6.43995 20.2173 6.99424 20.0859 7.38852 19.6916C8.03424 19.0459 8.47995 18.1087 8.48567 18.0973L8.61138 17.8287L8.73138 18.0402C9.03995 18.5887 8.69709 19.2573 8.31995 19.7144Z"
                                    fill="url(#paint3_linear)"></path>
                                <path
                                    d="M2.46289 20.0689C2.85718 19.7489 3.26289 19.1204 3.25718 18.7661C3.25146 18.4404 3.34289 17.9832 3.56575 17.7261C2.58289 18.1432 2.72003 18.8004 2.84575 19.1261C2.90289 19.2689 2.8286 19.6918 2.46289 20.0689Z"
                                    fill="url(#paint4_radial)"></path>
                                <path
                                    d="M3.2229 21.0346C5.08576 20.4232 5.5829 18.3089 6.77719 17.9432C7.97719 17.5775 7.67433 18.7204 7.21147 19.2404C7.21147 19.2404 8.79433 17.6518 8.80004 16.4118C8.81147 15.1718 10.4743 17.1089 9.96004 18.1146C9.96004 18.1146 12.5029 15.5718 10.4686 13.5432C8.43433 11.5146 5.73147 13.5375 5.73147 13.5375C5.73147 13.5375 7.27433 13.4746 7.13719 14.5946C7.13719 14.5946 5.94861 15.0461 5.01147 15.7946C5.01147 15.7946 5.46862 15.8461 5.7829 16.3146C5.7829 16.3146 4.3829 17.2804 4.44004 18.1089C4.52004 19.1775 3.8229 20.8404 3.2229 21.0346Z"
                                    fill="url(#paint5_linear)"></path>
                                <path
                                    d="M4.52563 19.4287C5.39421 19.2115 6.15992 17.1772 7.38278 17.2915C8.05706 17.3544 7.90278 17.9372 7.90278 17.9372C7.90278 17.9372 8.37135 17.2687 8.47992 16.3715C8.58849 15.4744 10.2628 15.7772 10.1885 17.4687C10.1885 17.4687 12.0285 15.0744 9.79421 13.5487C7.33135 11.8687 5.52564 13.9772 5.52564 13.9772C5.52564 13.9772 7.21135 13.4172 7.47421 14.7544C7.47421 14.7544 6.07992 15.1429 5.56564 15.6572C5.56564 15.6572 6.15992 15.7429 6.30278 16.3772C6.30278 16.3772 4.93135 17.3829 4.97135 17.7829C5.06849 18.7372 4.52563 19.4287 4.52563 19.4287Z"
                                    fill="url(#paint6_linear)"></path>
                                <path opacity="0.5"
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint7_radial)"></path>
                                <path opacity="0.5"
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint8_radial)"></path>
                                <path
                                    d="M9.62281 18.8174C10.9257 17.4288 11.6628 14.9488 10.3028 13.5888C8.94281 12.2288 6.43995 13.3717 5.33138 14.3945C5.33138 14.3945 6.21709 14.0231 6.91424 14.4688C7.61138 14.9145 5.61709 15.686 5.19995 16.9088C5.19995 16.9088 6.9771 15.8402 7.5371 16.2917C8.0971 16.7431 7.53138 18.166 6.99424 18.7031C6.99424 18.7031 8.26852 18.0517 8.95424 17.2117C9.99995 15.926 9.62281 18.8174 9.62281 18.8174Z"
                                    fill="url(#paint9_radial)"></path>
                                <path opacity="0.5"
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint10_radial)"></path>
                                <path opacity="0.5"
                                    d="M3.56575 17.7261C2.16575 18.2861 3.06861 19.4632 2.46289 20.0689C2.46289 20.0689 3.26861 19.6289 3.25718 18.7661C3.24575 18.0632 3.56575 17.7261 3.56575 17.7261Z"
                                    fill="url(#paint11_radial)"></path>
                                <path
                                    d="M3.89136 21.8113C4.25136 21.7713 4.77707 21.0341 5.67993 20.897C5.67993 20.897 4.94279 21.9713 3.89136 21.8113Z"
                                    fill="url(#paint12_radial)"></path>
                                <path opacity="0.5"
                                    d="M3.89136 21.8117C4.25136 21.7717 4.85707 20.726 5.67993 20.8974C5.67993 20.8974 4.94279 21.9717 3.89136 21.8117Z"
                                    fill="url(#paint13_radial)"></path>
                                <path opacity="0.5"
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint14_radial)"></path>
                                <path opacity="0.25"
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint15_radial)"></path>
                                <path opacity="0.75"
                                    d="M4.55993 16.7373C3.22279 18.0344 4.97707 19.423 2.28564 21.3087C2.28564 21.3087 3.8685 21.8401 5.30279 20.0344C5.79422 19.4116 6.36564 19.1544 6.36564 19.1544C6.55993 19.2687 6.41136 19.903 5.71993 20.423C5.71993 20.423 6.79993 20.4516 7.47422 19.7773C8.1485 19.103 8.60564 18.1316 8.60564 18.1316C9.0685 18.943 7.9085 19.9716 7.9085 19.9716C7.9085 19.9716 8.99993 19.6859 10.2971 18.3887C11.3028 17.383 12.0228 14.8744 10.5771 13.4344C9.13136 11.9944 6.55422 12.2516 5.29136 13.5201C4.73707 14.0744 4.17136 14.9373 4.09707 15.6459C4.09707 15.6459 5.15993 14.4973 5.53707 14.983C5.53707 14.983 3.73707 16.0687 3.44564 17.103C3.45136 17.103 4.3485 16.5659 4.55993 16.7373Z"
                                    fill="url(#paint16_radial)"></path>
                                <path
                                    d="M15.3541 15.4631C15.2226 14.1889 15.5198 12.8346 16.1941 11.6117L16.4055 11.2231L13.1083 13.3774L12.8341 15.3603L11.5483 16.5946C11.8226 17.6689 11.8341 18.7203 11.8341 18.7203C14.0226 17.4117 15.3541 15.4631 15.3541 15.4631Z"
                                    fill="url(#paint17_linear)"></path>
                                <path
                                    d="M11.8399 18.7258C11.8399 18.7258 11.8342 17.6629 11.5542 16.6001L12.0971 16.0801C12.2628 16.4458 12.5885 17.2687 12.6685 18.1772C12.4056 18.3601 12.1313 18.5544 11.8399 18.7258Z"
                                    fill="url(#paint18_linear)"></path>
                                <path opacity="0.75"
                                    d="M15.3541 15.4631C15.2226 14.1889 15.5198 12.8346 16.1941 11.6117L16.4055 11.2231L13.1083 13.3774L12.8341 15.3603L11.5483 16.5946C11.8226 17.6689 11.8341 18.7203 11.8341 18.7203C14.0226 17.4117 15.3541 15.4631 15.3541 15.4631Z"
                                    fill="url(#paint19_radial)"></path>
                                <path
                                    d="M15.6741 12.7942C15.8113 12.3942 15.9827 11.9942 16.1941 11.6113L16.3141 11.3942C16.2855 11.3771 16.257 11.3599 16.2284 11.3428L13.1141 13.3828L12.9255 14.7199C13.6341 14.4285 14.6398 13.8342 15.6741 12.7942Z"
                                    fill="url(#paint20_linear)"></path>
                                <path
                                    d="M12.097 7.82862C12.0627 7.74862 12.0455 7.69147 12.017 7.61719C10.7884 8.20004 9.39983 8.36576 8.06269 8.11433C8.06269 8.11433 6.08555 9.41147 4.86841 11.7086C4.86841 11.7086 5.99984 11.8172 7.18841 12.2229L8.40555 10.9143L10.3713 10.8C10.8113 9.81147 11.3427 8.75433 12.097 7.82862Z"
                                    fill="url(#paint21_linear)"></path>
                                <path
                                    d="M4.86841 11.7028C4.86841 11.7028 5.99984 11.8114 7.18841 12.2171L7.70841 11.6571C7.29127 11.44 6.38841 11.0228 5.38841 10.8457C5.20555 11.1143 5.02841 11.4 4.86841 11.7028Z"
                                    fill="url(#paint22_linear)"></path>
                                <path opacity="0.75"
                                    d="M12.097 7.82862C12.0627 7.74862 12.0455 7.69147 12.017 7.61719C10.7884 8.20004 9.39983 8.36576 8.06269 8.11433C8.06269 8.11433 6.08555 9.41147 4.86841 11.7086C4.86841 11.7086 5.99984 11.8172 7.18841 12.2229L8.40555 10.9143L10.3713 10.8C10.8113 9.81147 11.3427 8.75433 12.097 7.82862Z"
                                    fill="url(#paint23_radial)"></path>
                                <path
                                    d="M12.0171 7.61133C11.5371 7.97704 10.0343 9.42847 9.50854 10.8399L10.3657 10.7885C10.8057 9.81133 11.4743 8.73133 12.2285 7.80561L12.0171 7.61133Z"
                                    fill="url(#paint24_linear)"></path>
                                <path
                                    d="M12.5371 7.33182C13.0457 8.16039 13.72 8.98325 14.4685 9.71468C14.5028 9.74896 14.5428 9.78325 14.5771 9.81753C15.2114 10.4232 15.8971 10.9604 16.5943 11.389C16.6571 11.3261 16.72 11.269 16.7828 11.2061C18.5828 9.40611 19.6285 8.05182 20.5257 6.33182C19.8857 5.09182 18.8343 4.04039 17.5943 3.40039C15.8743 4.29753 14.5257 5.33753 12.72 7.14325C12.6571 7.20611 12.5943 7.26896 12.5371 7.33182Z"
                                    fill="url(#paint25_linear)"></path>
                                <path
                                    d="M20.5198 6.33157C21.7369 3.99443 21.5827 2.73728 21.3827 2.53728C21.1827 2.33728 19.9312 2.183 17.5884 3.40014C18.8284 4.04014 19.8798 5.09157 20.5198 6.33157Z"
                                    fill="url(#paint26_linear)"></path>
                                <path
                                    d="M10.4742 13.4515C11.12 14.0973 11.7142 14.5715 11.8742 14.5715C13.3257 13.9373 15.0571 12.8744 16.5943 11.3887C15.9028 10.9601 15.2114 10.423 14.5771 9.81726C14.5428 9.78297 14.5028 9.74869 14.4685 9.7144C13.72 8.98297 13.0457 8.16011 12.5371 7.33154C11.0514 8.86869 9.98853 10.6115 9.35425 12.063C9.37711 12.2401 9.83996 12.823 10.4742 13.4515Z"
                                    fill="url(#paint27_linear)"></path>
                                <path opacity="0.75"
                                    d="M10.4742 13.4515C11.12 14.0973 11.7142 14.5715 11.8742 14.5715C13.3257 13.9373 15.0571 12.8744 16.5943 11.3887C15.9028 10.9601 15.2114 10.423 14.5771 9.81726C14.5428 9.78297 14.5028 9.74869 14.4685 9.7144C13.72 8.98297 13.0457 8.16011 12.5371 7.33154C11.0514 8.86869 9.98853 10.6115 9.35425 12.063C9.37711 12.2401 9.83996 12.823 10.4742 13.4515Z"
                                    fill="url(#paint28_radial)"></path>
                                <path opacity="0.5"
                                    d="M14.5771 9.81726C14.5428 9.78297 14.5028 9.74869 14.4685 9.7144C13.72 8.98297 13.0457 8.16011 12.5371 7.33154C12.4971 7.37154 12.4628 7.41154 12.4285 7.45154C13.4685 9.41726 16.6457 11.2915 14.2228 12.2801C12.6343 12.9315 11.92 13.703 11.5371 14.3887C11.6971 14.5087 11.8228 14.5715 11.88 14.5715C13.3314 13.9373 15.0628 12.8744 16.6 11.3887C15.8971 10.9601 15.2114 10.423 14.5771 9.81726Z"
                                    fill="url(#paint29_radial)"></path>
                                <path
                                    d="M10.4741 13.4516C9.84555 12.823 9.38269 12.2401 9.35412 12.063L8.46269 12.4573C8.35983 12.5601 8.94269 13.3201 9.77698 14.1487C10.6055 14.9773 11.3655 15.5658 11.4684 15.463L11.8741 14.5716C11.7141 14.5716 11.1198 14.0973 10.4741 13.4516Z"
                                    fill="url(#paint30_linear)"></path>
                                <path
                                    d="M10.4741 13.4516C9.84555 12.823 9.38269 12.2401 9.35412 12.063L8.46269 12.4573C8.35983 12.5601 8.94269 13.3201 9.77698 14.1487C10.6055 14.9773 11.3655 15.5658 11.4684 15.463L11.8741 14.5716C11.7141 14.5716 11.1198 14.0973 10.4741 13.4516Z"
                                    fill="url(#paint31_linear)"></path>
                                <path
                                    d="M20.2743 6.78896C20.2857 6.77182 20.5143 6.34896 20.52 6.33182C19.88 5.09182 18.8285 4.04039 17.5885 3.40039C17.5714 3.41182 17.5543 3.41753 17.5371 3.42896C18.7543 4.12039 20.1314 5.67468 20.2743 6.78896Z"
                                    fill="url(#paint32_linear)"></path>
                                <path opacity="0.75"
                                    d="M21.3829 2.53728C21.1829 2.33728 19.9315 2.183 17.5886 3.40014C15.8686 4.29728 14.5201 5.33729 12.7143 7.143C12.6515 7.20586 12.5943 7.26871 12.5315 7.33157C11.0458 8.86871 9.98292 10.6116 9.34863 12.063C9.3772 12.2401 9.84006 12.823 10.4686 13.4516C11.1143 14.0973 11.7086 14.5716 11.8686 14.5716C13.3201 13.9373 15.0515 12.8744 16.5886 11.3887C16.6515 11.3259 16.7144 11.2687 16.7772 11.2059C18.5772 9.40586 19.6229 8.05157 20.5201 6.33157C21.7429 3.99443 21.5886 2.73728 21.3829 2.53728Z"
                                    fill="url(#paint33_radial)"></path>
                                <path
                                    d="M9.09132 16.3662C11.0113 14.8176 12.5142 13.0919 12.5542 13.0462L12.257 12.749C12.257 12.749 10.6913 14.4576 8.82275 16.0976L9.09132 16.3662Z"
                                    fill="url(#paint34_linear)"></path>
                                <path
                                    d="M12.2513 12.7489C12.5999 12.0861 13.1884 11.2518 13.9427 10.3547C13.9256 10.3375 13.9084 10.3204 13.8856 10.3032C13.0684 11.0804 12.257 11.7832 11.5313 12.4004L10.6856 13.6404L9.41128 14.8918C9.18842 15.4518 8.81128 16.0975 8.81128 16.0975C10.6856 14.4575 12.2513 12.7489 12.2513 12.7489Z"
                                    fill="url(#paint35_linear)"></path>
                                <path
                                    d="M9.47975 15.5031C9.47975 15.5031 9.92547 14.6974 9.88547 14.4346L9.41689 14.8974C9.19404 15.4574 8.81689 16.1031 8.81689 16.1031C9.04547 15.8974 9.26261 15.6974 9.47975 15.5031Z"
                                    fill="url(#paint36_linear)"></path>
                                <path
                                    d="M12.5542 13.0464C12.8056 12.2807 13.3713 11.4236 14.097 10.4921C14.0456 10.4464 13.9999 10.4007 13.9485 10.355C13.1942 11.2521 12.6056 12.0864 12.257 12.7493C12.257 12.7493 10.6913 14.4578 8.82275 16.0978L9.09704 16.3664C11.0342 14.8007 12.5542 13.0464 12.5542 13.0464Z"
                                    fill="url(#paint37_linear)"></path>
                                <path
                                    d="M9.09132 16.3662C11.0113 14.8176 12.5142 13.0919 12.5542 13.0462L12.257 12.749C12.257 12.749 10.6913 14.4576 8.82275 16.0976L9.09132 16.3662Z"
                                    fill="url(#paint38_linear)"></path>
                                <path opacity="0.75"
                                    d="M12.2513 12.7489C12.5999 12.0861 13.1884 11.2518 13.9427 10.3547C13.9256 10.3375 13.9084 10.3204 13.8856 10.3032C13.0684 11.0804 12.257 11.7832 11.5313 12.4004L10.6856 13.6404L9.41128 14.8918C9.18842 15.4518 8.81128 16.0975 8.81128 16.0975C10.6856 14.4575 12.2513 12.7489 12.2513 12.7489Z"
                                    fill="url(#paint39_radial)"></path>
                                <path opacity="0.75"
                                    d="M21.3829 2.53728C21.1829 2.33728 19.9315 2.183 17.5886 3.40014C15.8686 4.29728 14.5201 5.33729 12.7143 7.143C12.6515 7.20586 12.5943 7.26871 12.5315 7.33157C11.0458 8.86871 9.98292 10.6116 9.34863 12.063C9.3772 12.2401 9.84006 12.823 10.4686 13.4516C11.1143 14.0973 11.7086 14.5716 11.8686 14.5716C13.3201 13.9373 15.0515 12.8744 16.5886 11.3887C16.6515 11.3259 16.7144 11.2687 16.7772 11.2059C18.5772 9.40586 19.6229 8.05157 20.5201 6.33157C21.7429 3.99443 21.5886 2.73728 21.3829 2.53728Z"
                                    fill="url(#paint40_radial)"></path>
                                <g opacity="0.16">
                                    <path opacity="0.16"
                                        d="M17.2971 10.6916C16.5428 10.2459 15.7599 9.64019 15.0171 8.90305C14.2799 8.16591 13.6742 7.38305 13.2285 6.62305"
                                        stroke="#000000" stroke-width="0.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path opacity="0.16"
                                        d="M19.5371 6.61768C19.7085 6.8291 19.8628 7.03482 20.0114 7.24053"
                                        stroke="#000000" stroke-width="0.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <g opacity="0.16">
                                        <path opacity="0.16"
                                            d="M18.6112 4.03467C18.5369 4.0861 18.4626 4.14324 18.3884 4.20038C16.8912 5.32038 15.6226 6.4461 13.8226 8.2461C13.7598 8.30896 13.6969 8.37181 13.6398 8.43467C13.5826 8.49753 13.5198 8.55467 13.4626 8.61753"
                                            stroke="#000000" stroke-width="0.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <path opacity="0.16"
                                        d="M16.5027 10.1719C18.0855 8.56047 19.097 7.33761 20.0512 5.86332C20.0912 5.80618 20.1255 5.74904 20.1598 5.69189"
                                        stroke="#000000" stroke-width="0.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                                <path opacity="0.75" d="M11.4685 14.1657C12.7828 13.4 14.4114 12.2229 15.9371 10.7314Z"
                                    fill="url(#paint41_radial)"></path>
                                <path
                                    d="M17.3598 7.48588C16.6284 8.16016 15.5427 8.16588 14.9369 7.4973C14.3312 6.82873 14.4398 5.7373 15.1712 5.06302C15.9027 4.38873 16.9884 4.38302 17.5941 5.05159C18.1998 5.72016 18.0912 6.81159 17.3598 7.48588Z"
                                    fill="url(#paint42_linear)"></path>
                                <path
                                    d="M17.0455 7.10857C16.4455 7.66285 15.5541 7.66857 15.057 7.11999C14.5598 6.57142 14.6455 5.67428 15.2512 5.11999C15.8513 4.56571 16.7427 4.55999 17.2398 5.10857C17.7313 5.65714 17.6455 6.55428 17.0455 7.10857Z"
                                    fill="url(#paint43_linear)"></path>
                                <path
                                    d="M16.9027 6.96018C16.3655 7.45732 15.5712 7.45732 15.1312 6.9716C14.6912 6.48018 14.7655 5.68589 15.3026 5.18875C15.8398 4.69161 16.6341 4.69161 17.0741 5.17732C17.5141 5.66304 17.4398 6.46303 16.9027 6.96018Z"
                                    fill="url(#paint44_radial)"></path>
                                <path opacity="0.5"
                                    d="M16.9027 6.96018C16.3655 7.45732 15.5712 7.45732 15.1312 6.9716C14.6912 6.48018 14.7655 5.68589 15.3026 5.18875C15.8398 4.69161 16.6341 4.69161 17.0741 5.17732C17.5141 5.66304 17.4398 6.46303 16.9027 6.96018Z"
                                    fill="url(#paint45_radial)"></path>
                                <path opacity="0.5"
                                    d="M16.9712 5.54324C17.1712 5.7661 17.2798 6.0461 17.3026 6.33753C17.4283 5.93181 17.3598 5.49181 17.0741 5.17753C16.6341 4.6861 15.8398 4.69181 15.3026 5.18896C15.2512 5.24039 15.1998 5.29181 15.1541 5.34896C15.7655 4.97753 16.5198 5.0461 16.9712 5.54324Z"
                                    fill="#000000"></path>
                                <path
                                    d="M17.0741 5.17753C16.6341 4.6861 15.8398 4.69181 15.3026 5.18896C14.7655 5.6861 14.6912 6.48038 15.1312 6.97181C15.1769 7.02324 15.2226 7.05753 15.1941 7.03467C14.7998 6.64038 14.9198 5.82896 15.4284 5.32038C15.8398 4.90896 16.6284 4.76039 17.0741 5.17753Z"
                                    fill="url(#paint46_linear)"></path>
                                <path opacity="0.5"
                                    d="M17.0742 5.17732C16.6285 4.75447 15.8342 4.90875 15.4285 5.31447C14.9428 5.80018 14.8114 6.56589 15.1428 6.97732C15.1942 7.00589 15.2171 7.05732 15.1885 7.03447C15.1714 7.01732 15.1542 7.00018 15.1428 6.97732C15.1371 6.97732 15.1314 6.97161 15.1256 6.97161C15.5656 7.46304 16.3599 7.45732 16.8971 6.96018C17.4399 6.46304 17.5199 5.66875 17.0742 5.17732Z"
                                    fill="url(#paint47_radial)"></path>
                                <path d="M20.5313 6.31439C19.8913 5.07439 18.8513 4.02867 17.6113 3.38867"
                                    stroke="#008EE6" stroke-width="0.75" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M16.5943 11.3887C15.9028 10.9601 15.2114 10.423 14.5771 9.81726C14.5428 9.78297 14.5028 9.74869 14.4685 9.7144C13.72 8.98297 13.0457 8.16011 12.5371 7.33154"
                                    stroke="#008EE6" stroke-width="0.75" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <defs>
                                    <linearGradient id="paint0_linear" x1="10.2589" y1="12.687" x2="1.15966"
                                        y2="24.6995" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF0000"></stop>
                                        <stop offset="0.2317" stop-color="#FF1500"></stop>
                                        <stop offset="0.7367" stop-color="#FF3D00"></stop>
                                        <stop offset="0.9987" stop-color="#FF4C00"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="8.51118" y1="11.5569" x2="-0.47839"
                                        y2="23.4246" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF0000"></stop>
                                        <stop offset="0.2317" stop-color="#FF1500"></stop>
                                        <stop offset="0.7367" stop-color="#FF3D00"></stop>
                                        <stop offset="0.9987" stop-color="#FF4C00"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear" x1="11.0782" y1="13.0501" x2="1.85678"
                                        y2="25.2237" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF0000"></stop>
                                        <stop offset="0.2317" stop-color="#FF1500"></stop>
                                        <stop offset="0.7367" stop-color="#FF3D00"></stop>
                                        <stop offset="0.9987" stop-color="#FF4C00"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear" x1="8.45606" y1="14.5703" x2="2.59621"
                                        y2="26.7449" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8000"></stop>
                                        <stop offset="0.6388" stop-color="#FF5B00"></stop>
                                        <stop offset="0.9987" stop-color="#FF4C00"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint4_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(0.0871973 20.9423) rotate(-135) scale(4.72606 6.00135)">
                                        <stop offset="0.00134333" stop-color="#FFED1C" stop-opacity="0.6"></stop>
                                        <stop offset="0.9477" stop-color="#FFED1C" stop-opacity="0.0264782"></stop>
                                        <stop offset="0.9914" stop-color="#FFED1C" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint5_linear" x1="3.70411" y1="21.8225" x2="8.99203"
                                        y2="14.2401" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8000"></stop>
                                        <stop offset="0.022669" stop-color="#FE7F02" stop-opacity="0.9773"></stop>
                                        <stop offset="0.6663" stop-color="#ED582A" stop-opacity="0.3337"></stop>
                                        <stop offset="1" stop-color="#E74939" stop-opacity="0"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint6_linear" x1="9.7793" y1="13.9798" x2="4.99737"
                                        y2="18.2642" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFBC47"></stop>
                                        <stop offset="0.1869" stop-color="#FFB137" stop-opacity="0.8131"></stop>
                                        <stop offset="0.7223" stop-color="#FF940F" stop-opacity="0.2777"></stop>
                                        <stop offset="1" stop-color="#FF8900" stop-opacity="0"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint7_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.56496 15.249) rotate(-135) scale(3.65587 3.7683)">
                                        <stop offset="0.00134333" stop-color="#FFBC47"></stop>
                                        <stop offset="0.2941" stop-color="#FFBF4B" stop-opacity="0.7068"></stop>
                                        <stop offset="0.5624" stop-color="#FEC656" stop-opacity="0.4382"></stop>
                                        <stop offset="0.8201" stop-color="#FCD368" stop-opacity="0.1801"></stop>
                                        <stop offset="1" stop-color="#FBE07A" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint8_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.43003 15.384) rotate(-135) scale(3.54322 3.65218)">
                                        <stop offset="0.00134333" stop-color="white"></stop>
                                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint9_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(10.1423 15.869) rotate(-135) scale(4.35259 6.43605)">
                                        <stop offset="0.00134333" stop-color="#FFED1C" stop-opacity="0.6"></stop>
                                        <stop offset="0.9477" stop-color="#FFED1C" stop-opacity="0.0264782"></stop>
                                        <stop offset="0.9914" stop-color="#FFED1C" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint10_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.48378 15.3551) rotate(-42.7273) scale(1.74655 1.11729)">
                                        <stop offset="0.00134333" stop-color="white"></stop>
                                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint11_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(2.54239 20.1962) rotate(-135) scale(1.56145 1.98279)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint12_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(5.06149 21.3239) rotate(162.598) scale(1.51008 0.305545)">
                                        <stop offset="0.00134333" stop-color="#FFED1C" stop-opacity="0.6"></stop>
                                        <stop offset="0.9477" stop-color="#FFED1C" stop-opacity="0.0264782"></stop>
                                        <stop offset="0.9914" stop-color="#FFED1C" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint13_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(3.99226 22.0321) rotate(-41.019) scale(1.4413 0.457928)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint14_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(2.60771 20.6213) rotate(-135) scale(4.87219 6.1869)">
                                        <stop offset="0.00134333" stop-color="#FF4C00"></stop>
                                        <stop offset="0.135" stop-color="#FF5B0C" stop-opacity="0.8661"></stop>
                                        <stop offset="0.3941" stop-color="#FF842C" stop-opacity="0.6067"></stop>
                                        <stop offset="0.7491" stop-color="#FFC45F" stop-opacity="0.2512"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint15_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(4.58504 15.5101) rotate(-135) scale(2.58608 3.28391)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint16_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.4275 15.6293) rotate(-135) scale(5.40781 6.86706)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint17_linear" x1="9.80373" y1="19.2642" x2="15.664"
                                        y2="12.9443" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint18_linear" x1="13.2109" y1="16.3029" x2="11.3724"
                                        y2="18.1086" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FC8D41"></stop>
                                        <stop offset="0.0900324" stop-color="#FC7837"></stop>
                                        <stop offset="0.294" stop-color="#FD4D24"></stop>
                                        <stop offset="0.4922" stop-color="#FE2C14"></stop>
                                        <stop offset="0.6802" stop-color="#FF1409"></stop>
                                        <stop offset="0.854" stop-color="#FF0502"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint19_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.95846 18.4661) rotate(45) scale(7.92842)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint20_linear" x1="13.348" y1="14.3002" x2="22.4311"
                                        y2="3.77241" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint21_linear" x1="4.16584" y1="11.9278" x2="9.70004"
                                        y2="9.21178" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint22_linear" x1="7.32509" y1="10.3243" x2="5.58505"
                                        y2="12.3926" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FC8D41"></stop>
                                        <stop offset="0.0900324" stop-color="#FC7837"></stop>
                                        <stop offset="0.294" stop-color="#FD4D24"></stop>
                                        <stop offset="0.4922" stop-color="#FE2C14"></stop>
                                        <stop offset="0.6802" stop-color="#FF1409"></stop>
                                        <stop offset="0.854" stop-color="#FF0502"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint23_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.17058 15.3141) rotate(45) scale(8.5278)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint24_linear" x1="11.8189" y1="9.17714" x2="2.89342"
                                        y2="9.59452" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint25_linear" x1="15.0481" y1="5.35093" x2="18.64"
                                        y2="8.94283" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BBCACC"></stop>
                                        <stop offset="0.3717" stop-color="white"></stop>
                                        <stop offset="1" stop-color="#99AFB3"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint26_linear" x1="21.1365" y1="5.10762" x2="19.1811"
                                        y2="2.56991" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#008EE6"></stop>
                                        <stop offset="0.688" stop-color="#80DAFE"></stop>
                                        <stop offset="0.7325" stop-color="#76D5FB"></stop>
                                        <stop offset="0.8071" stop-color="#5CC8F3"></stop>
                                        <stop offset="0.9026" stop-color="#32B2E6"></stop>
                                        <stop offset="1" stop-color="#0099D6"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint27_linear" x1="14.2566" y1="13.1281" x2="10.1747"
                                        y2="9.06808" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#008EE6"></stop>
                                        <stop offset="0.688" stop-color="#80DAFE"></stop>
                                        <stop offset="0.7325" stop-color="#76D5FB"></stop>
                                        <stop offset="0.8071" stop-color="#5CC8F3"></stop>
                                        <stop offset="0.9026" stop-color="#32B2E6"></stop>
                                        <stop offset="1" stop-color="#0099D6"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint28_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(11.4855 14.4744) rotate(45) scale(3.88398 7.10881)">
                                        <stop stop-opacity="0.75"></stop>
                                        <stop offset="1" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint29_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(16.0118 13.5594) rotate(45) scale(3.88398 7.10881)">
                                        <stop stop-opacity="0.75"></stop>
                                        <stop offset="1" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint30_linear" x1="8.9706" y1="12.0284" x2="11.5309"
                                        y2="15.3902" gradientUnits="userSpaceOnUse">
                                        <stop></stop>
                                        <stop offset="0.1962" stop-color="#4D4D4C"></stop>
                                        <stop offset="0.7655"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint31_linear" x1="8.9706" y1="12.0284" x2="11.5309"
                                        y2="15.3902" gradientUnits="userSpaceOnUse">
                                        <stop stop-opacity="0"></stop>
                                        <stop offset="0.1975" stop-color="#CFDCDE" stop-opacity="0.5"></stop>
                                        <stop offset="0.7655" stop-opacity="0"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint32_linear" x1="14.3333" y1="4.04492" x2="20.2046"
                                        y2="5.38551" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BBCACC"></stop>
                                        <stop offset="0.3717" stop-color="white"></stop>
                                        <stop offset="1" stop-color="#99AFB3"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint33_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(16.076 11.4008) rotate(44.2342) scale(2.50596 8.11509)">
                                        <stop stop-color="#440063" stop-opacity="0.75"></stop>
                                        <stop offset="1" stop-color="#420061" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint34_linear" x1="8.66073" y1="15.8565" x2="15.4075"
                                        y2="11.5064" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint35_linear" x1="7.56475" y1="16.0858" x2="11.0444"
                                        y2="13.4365" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint36_linear" x1="10.8746" y1="13.8555" x2="8.88284"
                                        y2="15.7159" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FC8D41"></stop>
                                        <stop offset="0.0900324" stop-color="#FC7837"></stop>
                                        <stop offset="0.294" stop-color="#FD4D24"></stop>
                                        <stop offset="0.4922" stop-color="#FE2C14"></stop>
                                        <stop offset="0.6802" stop-color="#FF1409"></stop>
                                        <stop offset="0.854" stop-color="#FF0502"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint37_linear" x1="10.8094" y1="15.1451" x2="13.1698"
                                        y2="8.39036" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint38_linear" x1="8.66073" y1="15.8565" x2="15.4075"
                                        y2="11.5064" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint39_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(8.60239 15.2652) rotate(-39.0499) scale(5.97524 2.00375)">
                                        <stop offset="0.00134333" stop-color="#FFED1C"></stop>
                                        <stop offset="0.1997" stop-color="#FFEE2B" stop-opacity="0.8013"></stop>
                                        <stop offset="0.5839" stop-color="#FFF254" stop-opacity="0.4167"></stop>
                                        <stop offset="1" stop-color="#FFF686" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint40_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(14.3426 7.31489) rotate(44.2342) scale(2.50596 8.11509)">
                                        <stop stop-color="white" stop-opacity="0.5"></stop>
                                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint41_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(13.7872 13.0483) rotate(43.8644) scale(0.608449 2.92153)">
                                        <stop stop-color="#440063" stop-opacity="0.75"></stop>
                                        <stop offset="1" stop-color="#420061" stop-opacity="0"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint42_linear" x1="15.3192" y1="8.31134" x2="17.2033"
                                        y2="4.25406" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.2151" stop-color="#D41A10"></stop>
                                        <stop offset="0.5049" stop-color="#EC0C07"></stop>
                                        <stop offset="0.774" stop-color="#FA0302"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint43_linear" x1="16.6621" y1="4.40303" x2="15.6361"
                                        y2="7.80922" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FC8D41"></stop>
                                        <stop offset="0.0900324" stop-color="#FC7837"></stop>
                                        <stop offset="0.294" stop-color="#FD4D24"></stop>
                                        <stop offset="0.4922" stop-color="#FE2C14"></stop>
                                        <stop offset="0.6802" stop-color="#FF1409"></stop>
                                        <stop offset="0.854" stop-color="#FF0502"></stop>
                                        <stop offset="1" stop-color="#FF0000"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint44_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(15.6207 6.12733) rotate(44.996) scale(3.31364 3.31341)">
                                        <stop stop-color="#512D00"></stop>
                                        <stop offset="1"></stop>
                                    </radialGradient>
                                    <radialGradient id="paint45_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(16.2658 5.47137) scale(2.90715)">
                                        <stop offset="0.4873" stop-color="#F5CBC0" stop-opacity="0"></stop>
                                        <stop offset="1" stop-color="#E67E62"></stop>
                                    </radialGradient>
                                    <linearGradient id="paint46_linear" x1="15.9966" y1="5.06274" x2="16.1204"
                                        y2="2.86505" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#BD2719"></stop>
                                        <stop offset="0.0422031" stop-color="#B42717"></stop>
                                        <stop offset="0.257" stop-color="#89250F"></stop>
                                        <stop offset="0.4654" stop-color="#682408"></stop>
                                        <stop offset="0.6634" stop-color="#502304"></stop>
                                        <stop offset="0.8464" stop-color="#412201"></stop>
                                        <stop offset="1" stop-color="#3C2200"></stop>
                                    </linearGradient>
                                    <radialGradient id="paint47_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(12.1646 4.75945) scale(3.94219)">
                                        <stop stop-color="white" stop-opacity="0.5"></stop>
                                        <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                    </radialGradient>
                                </defs>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3 style="font-family: math;font-size: 60px;"
                            class="text-3xl font-bold text-[#4a8b71] before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                            2017
                        </h3>
                        <h3 class="text-xl font-bold text-gray-900 before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500"
                            style="margin-top: 21px; margin-bottom: 17px; font-family: math;font-weight: 800;color: #4a8b71;font-size: 18px;">
                            Aquired Countrywide <br> Farmers
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700" style="font-size: 14px;font-family: math;">First
                            superior full-bodied drink. Like outstanding odor economical deal clinically</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <div class="flex flex-wrap mt-20">
        <!-- Left Side Content (Cards Container) -->
        <div class="w-full sm:w-8/12 mb-10">
            <div class="container mx-auto h-full sm:p-10">
                <div class="agro-text">
                    AGRO
                </div>
                <!-- Cards Row 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-[#eef6f9] shadow-md rounded-lg p-6 relative transition-transform duration-300 hover:scale-105 hover:shadow-xl"
                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                        <!-- Red Number Badge -->
                        <div
                            class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-yellow-500 text-white text-sm font-bold rounded-full w-8 h-8 flex items-center justify-center">
                            1
                        </div>
                        <!-- Card Content -->
                        <div class="flex items-center mb-4">
                            <img src="/img/tea.png" alt="Icon" class="mr-2 w-10 h-10">
                            <!-- Added width and height for responsiveness -->
                            <h2 class="text-xl font-semibold" style="font-family: monospace; margin-top: 10px;">
                                Expertise in Agriculture</h2>
                        </div>
                        <p class="text-gray-700 mb-4">Cultivating innovation and growth for a thriving future</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#eef6f9] shadow-md rounded-lg p-6 relative transition-transform duration-300 hover:scale-105 hover:shadow-xl"
                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                        <!-- Red Number Badge -->
                        <div
                            class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-sm font-bold rounded-full w-8 h-8 flex items-center justify-center">
                            2
                        </div>
                        <!-- Card Content -->
                        <div class="flex items-center mb-4">
                            <img src="/img/leaf.png" alt="Icon" class="mr-2 w-10 h-10">
                            <!-- Added width and height for responsiveness -->
                            <h2 class="text-xl font-semibold">Innovative Solutions</h2>
                        </div>
                        <p class="text-gray-700 mb-4">Empowering Bangladesh's agriculture for a <br> sustainable and
                            prosperous tomorrow. </p>
                    </div>
                </div>

                <!-- Cards Row 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                    <!-- Card 3 -->
                    <div class="bg-[#eef6f9] shadow-md rounded-lg p-6 relative transition-transform duration-300 hover:scale-105 hover:shadow-xl"
                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                        <!-- Red Number Badge -->
                        <div
                            class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-blue-500 text-white text-sm font-bold rounded-full w-8 h-8 flex items-center justify-center">
                            3
                        </div>
                        <!-- Card Content -->
                        <div class="flex items-center mb-4">
                            <img src="/img/grape.png" alt="Icon" class="mr-2 w-10 h-10">
                            <!-- Added width and height for responsiveness -->
                            <h2 class="text-xl font-semibold">Cost-Effectiveness</h2>
                        </div>
                        <p class="text-gray-700 mb-4">Transforming Bangladesh's agriculture with<br> affordable and
                            impactful solutions. </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-[#eef6f9] shadow-md rounded-lg p-6 relative transition-transform duration-300 hover:scale-105 hover:shadow-xl"
                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">
                        <!-- Red Number Badge -->
                        <div
                            class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-purple-800 text-white text-sm font-bold rounded-full w-8 h-8 flex items-center justify-center">
                            4
                        </div>
                        <!-- Card Content -->
                        <div class="flex items-center mb-4">
                            <img src="/img/fruit-salad.png" alt="Icon" class="mr-2 w-10 h-10">
                            <!-- Added width and height for responsiveness -->
                            <h2 class="text-xl font-semibold">Customer Satisfaction</h2>
                        </div>
                        <p class="text-gray-700 mb-4"> Committed to exceeding expectations in <br>Bangladesh's
                            agricultural growth.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side Image -->
        <img src="https://theme.creativemox.com/farmica/wp-content/uploads/sites/30/2024/03/tuscany-landscape-at-sunrise-tuscan-farm-house-vineyard-hills-.jpg"
            alt="Leafs" class="w-full sm:w-4/12 h-auto object-cover" style="max-height: 100vh; object-fit: cover;">
    </div>



    <section class="mb-32">
        <div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.3265198827221!2d90.35121111760908!3d23.78750888053714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0eb582efb6b%3A0x532c268a5b3ef5a9!2sB%2F1%2C%20100%20Vashantek%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1733315059102!5m2!1sen!2sbd"
                width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="container px-6 md:px-12">
            <div
                class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px] border border-gray-300">
                <div class="flex flex-wrap">
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                        <form>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input type="text"
                                    class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                    id="exampleInput90" />
                                <label
                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none "
                                    for="exampleInput90">Name
                                </label>
                            </div>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <input type="email"
                                    class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                    id="exampleInput91" />
                                <label
                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none "
                                    for="exampleInput91">Email address
                                </label>
                            </div>
                            <div class="relative mb-6" data-te-input-wrapper-init>
                                <textarea
                                    class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                <label for="exampleFormControlTextarea1"
                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none ">Message</label>
                            </div>
                            <button type="button"
                                class="mb-6 w-full rounded bg-green-500 text-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal   lg:mb-0">
                                Send
                            </button>
                        </form>
                    </div>
                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                        <div class="flex flex-wrap">
                            <div
                                class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                <a href="mailto:{{ $contact->email }}" class="block">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-sky-200 p-4 text-primary">
                                                <img src="/img/gmail.png" alt="">
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold">
                                                Email
                                            </p>
                                            <p class="text-sm text-neutral-500">
                                                {{ $contact->email }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div
                                class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                <div class="flex items-start">
                                    <div class="srink-0">
                                        <div class="inline-block rounded-md bg-sky-200  text-primary">
                                            <img src="/img/location-pin.png" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold ">
                                            {{ $contact->address }}

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:mb-12 xl:w-6/12">
                                <div class="align-start flex">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-sky-200 p-4 text-primary">
                                            <img src="/img/telephone.png" alt="">
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold ">Mobile</p>
                                        <p class="text-neutral-500"> {{ $contact->number }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:mb-12 xl:w-6/12">
                                <a href="https://www.facebook.com/p/Eventas-Crop-Care-Ltd-100094254862757/">
                                    <div class="align-start flex">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-sky-200 p-4 text-primary">
                                                <img src="/img/facebook.png" alt="">
                                            </div>
                                        </div>
                                        <div class="grow">
                                            <p class="font-bold " style="margin-top: 20px;color: #507dd2;">
                                                @EventasCropCare</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

</body>

</html>

<script>
    const videos = document.querySelectorAll('.hero-video');
    let currentVideo = 0;

    function switchVideo() {
        videos.forEach((video, index) => {
            video.classList.add('opacity-0');
            video.classList.remove('opacity-100');
        });

        videos[currentVideo].classList.remove('opacity-0');
        videos[currentVideo].classList.add('opacity-100');

        currentVideo = (currentVideo + 1) % videos.length;
    }

    switchVideo();
    setInterval(switchVideo, 5000);

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
</script>
