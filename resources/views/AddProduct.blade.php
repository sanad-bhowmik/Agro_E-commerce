<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Add Product | Evintas</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
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
        @include('partials.sidebar')


        <!-- content -->
        <div class="flex-1 flex-col flex">
            @include('partials.navDash')


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
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md"
                                        style="border: 1px solid #cbc2c2e3;">
                                        <svg id="Layer_1" height="1rem" width="1rem" data-name="Layer 1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 114.58">
                                            <title>product</title>
                                            <path
                                                d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                        </svg>
                                        <input type="text" id="product_name" name="name"
                                            class="flex-1 focus:outline-none" placeholder="Product Name" />
                                    </div>
                                </div>

                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md"
                                        style="border: 1px solid #cbc2c2e3;">
                                        <svg version="1.1" id="Layer_1" height="1rem" width="1rem"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.406px"
                                            height="122.881px" viewBox="0 0 122.406 122.881"
                                            enable-background="new 0 0 122.406 122.881" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M72.041,44.723c1.405,0.187,2.665,0.835,3.62,1.791c1.141,1.14,1.846,2.716,1.846,4.456c0,1.74-0.705,3.315-1.846,4.456 c-1.141,1.141-2.716,1.846-4.456,1.846s-3.315-0.706-4.456-1.846c-1.14-1.14-1.846-2.716-1.846-4.456 c0-1.671,0.65-3.19,1.712-4.318c0.914-3.399,1.889-6.579,2.911-9.549H50.868L5.128,82.842l34.908,34.91l45.719-45.719 l-1.149-34.931H74.501C73.648,39.487,72.826,42.024,72.041,44.723L72.041,44.723z M43.321,85.219 c0.979-0.979,1.507-1.99,1.577-3.027c0.077-1.043-0.248-2.424-0.967-4.135c-0.725-1.717-1.348-3.346-1.87-4.885 s-0.814-3.014-0.897-4.432c-0.07-1.42,0.134-2.768,0.624-4.045c0.477-1.279,1.348-2.545,2.607-3.804 c2.099-2.099,4.535-3.123,7.314-3.065c2.773,0.063,5.457,1.158,8.04,3.294l2.881,3.034c1.946,2.607,2.799,5.33,2.557,8.166 c-0.235,2.83-1.532,5.426-3.893,7.785l-6.296-6.297c1.291-1.291,2.035-2.531,2.238-3.727c0.191-1.197-0.165-2.252-1.081-3.168 c-0.821-0.82-1.717-1.195-2.69-1.139c-0.967,0.064-1.908,0.547-2.817,1.457c-0.922,0.922-1.393,1.914-1.412,2.977 c-0.019,1.063,0.306,2.416,0.973,4.064c0.661,1.652,1.24,3.25,1.736,4.801c0.496,1.553,0.782,3.035,0.858,4.445 c0.076,1.426-0.127,2.787-0.591,4.104c-0.477,1.316-1.336,2.596-2.588,3.848c-2.125,2.125-4.522,3.186-7.212,3.18 s-5.311-1.063-7.855-3.16l-3.747,3.746l-2.964-2.965l3.766-3.764c-2.423-2.996-3.568-5.998-3.447-9.02 c0.127-3.014,1.476-5.813,4.045-8.383l6.278,6.277c-1.412,1.412-2.175,2.799-2.277,4.16c-0.108,1.367,0.414,2.627,1.571,3.783 c0.839,0.84,1.755,1.26,2.741,1.242C41.508,86.549,42.443,86.096,43.321,85.219L43.321,85.219z M71.077,32.853 c7.116-18.397,16.244-27.775,24.729-31.22c8.027-3.258,15.521-1.369,20.513,3.258c4.963,4.602,7.403,11.919,5.367,19.555 c-2.478,9.289-11.631,19.046-31.114,24.54c-0.456,0.128-0.918,0.112-1.339-0.021l0.785,23.858c0.019,0.609-0.221,1.164-0.619,1.564 l0.005,0.004l-47.865,47.865c-0.83,0.83-2.175,0.83-3.004,0L0.622,84.346c-0.83-0.83-0.83-2.176,0-3.006l47.865-47.864 c0.415-0.415,0.958-0.622,1.502-0.622v0H71.077L71.077,32.853z M89.088,44.53c0.069-0.027,0.142-0.051,0.215-0.072 c17.59-4.96,25.738-13.337,27.837-21.208c1.563-5.859-0.271-11.437-4.023-14.917c-3.726-3.454-9.394-4.833-15.542-2.337 c-7.226,2.933-15.051,11.011-21.457,26.856h10.538c1.173,0,2.124,0.951,2.124,2.125c0,0.035-0.001,0.071-0.003,0.106L89.088,44.53 L89.088,44.53z" />
                                            </g>
                                        </svg>
                                        <input type="number" id="price" name="price" step="0.01"
                                            class="flex-1 focus:outline-none" placeholder="Price" />
                                    </div>

                                </div>
                            </div>

                            <!-- Brand and Product Image in the Same Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                                <!-- Product Brand -->
                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md"
                                        style="border: 1px solid #cbc2c2e3;">
                                        <svg version="1.1" id="Layer_1" height="1rem" width="1rem"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 71.69 122.88" style="enable-background:new 0 0 71.69 122.88"
                                            xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0"
                                                    d="M1.19,0.02h25.91l23.34,42.45c0.5,0.9,1.23,1.61,2.06,2.06H17.66L1.19,0V0.02L1.19,0.02z M35.85,51.19 c19.8,0,35.85,16.05,35.85,35.85s-16.05,35.85-35.85,35.85C16.05,122.88,0,106.83,0,87.03S16.05,51.19,35.85,51.19L35.85,51.19z M35.85,66.34l5.99,14.62l15.77,1.19L45.54,92.39l3.75,15.34L35.85,99.4l-13.44,8.33l3.75-15.34L14.08,82.14l15.77-1.19 L35.85,66.34L35.85,66.34L35.85,66.34z M39.03,0.02h30.32L57.15,33L39.03,0.02L39.03,0.02z" />
                                            </g>
                                        </svg>
                                        <input type="text" id="brand" name="brand" class="flex-1 focus:outline-none"
                                            placeholder="Brand" />
                                    </div>
                                </div>


                                <!-- Product Image -->
                                <div>
                                    <div>
                                        <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md"
                                            style="border: 1px solid #cbc2c2e3;">
                                            <svg version="1.1" height="1rem" width="1rem" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 102.55 122.88"
                                                style="enable-background:new 0 0 102.55 122.88" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill-rule: evenodd;
                                                        clip-rule: evenodd;
                                                    }
                                                </style>
                                                <g>
                                                    <path class="st0"
                                                        d="M102.55,122.88H0V0h77.66l24.89,26.44L102.55,122.88L102.55,122.88z M29.82,45.51c4.33,0,7.84,3.5,7.84,7.83 c0,4.32-3.51,7.83-7.84,7.83c-4.32,0-7.83-3.51-7.83-7.83C21.99,49.01,25.5,45.51,29.82,45.51L29.82,45.51z M62.71,75.27 l14.02-24.24l2.07-3.57l1.52,3.84l9.45,44.84h-75.3v-9.12l2.87-0.1l5.26-0.27l6.06-14.81l3.77,0.2l2.84,9.98l6.92,0l8-20.59 l1.43-3.69l2.12,3.33L62.71,75.27L62.71,75.27L62.71,75.27z M96.13,115.98V32.36H73.45V5.91H6.51v110.07H96.13L96.13,115.98 L96.13,115.98z" />
                                                </g>
                                            </svg>
                                            <input type="file" id="image" name="image" class="flex-1 focus:outline-none"
                                                placeholder="Brand" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Product Details Field Below Brand and Image Row -->
                            <div class="mb-4">
                                <div>
                                    <div class="shadow-lg flex gap-2 items-center bg-white p-2 hover:shadow-xl duration-300 hover:border-2 border-gray-400 group delay-200 rounded-md"
                                        style="border: 1px solid #cbc2c2e3;">

                                        <textarea id="details" name="details" rows="4" class="flex-1 focus:outline-none"
                                            placeholder="Details"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-center">
                                <button type="submit"
                                    class="bg-blue-600 text-white font-semibold text-lg px-8 py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none transition duration-200">Submit</button>
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
    document.addEventListener("DOMContentLoaded", function () {
        var toast = document.getElementById("custom-toast");

        // Show the toast if it exists (meaning session has 'success' message)
        if (toast) {
            // Add the show class to display the toast with animation
            toast.classList.add("show");

            // Set timeout to hide the toast after 5 seconds
            setTimeout(function () {
                toast.classList.remove("show");
            }, 3000); // 5000 ms = 5 seconds
        }
    });
</script>
