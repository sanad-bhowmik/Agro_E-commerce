<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                    Mission
                    <span class="block text-xs font-normal text-gray-300 mt-2">
                        <a href="#">Home</a> &raquo;
                        <a href="#">Front</a> &raquo;
                        <a href="#">Mission</a> &raquo;
                    </span>
                </div>
                <div class="bg-gray-100 min-h-screen flex justify-center items-center p-6">
                    <div class="bg-white p-8 rounded-lg shadow-md" style="width: 98%;">
                        <!-- Product Upload Form -->
                        <form action="{{ route('mission.store') }}" id="missionForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Product Name and Image -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <!-- Hero Title Input -->
                                <div
                                    class="shadow-lg flex items-center bg-white p-4 border border-gray-300 rounded-lg hover:shadow-xl transition duration-300">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" height="1.25rem"
                                        width="1.25rem" viewBox="0 0 512 512">
                                        <!-- SVG Path -->
                                    </svg>
                                    <input type="text" name="name"
                                        class="flex-1 pl-3 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md font-medium"
                                        placeholder="Enter the Product Title" required />
                                </div>

                                <!-- Image Upload Input -->
                                <div
                                    class="shadow-lg flex items-center bg-white p-4 border border-gray-300 rounded-lg hover:shadow-xl transition duration-300">
                                    <svg version="1.1" height="1.25rem" width="1.25rem"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102.55 122.88">
                                        <!-- SVG Path -->
                                    </svg>
                                    <input type="file" name="image"
                                        class="flex-1 pl-3 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md font-medium"
                                        required />
                                </div>
                            </div>

                            <!-- Product Details -->
                            <div
                                class="mb-6 shadow-lg bg-white p-4 border border-gray-300 rounded-lg hover:shadow-xl transition duration-300">
                                <textarea name="details" rows="5"
                                    class="w-full text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md font-medium"
                                    placeholder="Provide detailed description of the product" required></textarea>
                            </div>

                            <!-- Card Levels -->
                            <div class="space-y-6">
                                @for($i = 1; $i <= 3; $i++)
                                    <div
                                        class="shadow-lg p-6 rounded-lg bg-white border border-gray-300 hover:shadow-2xl transition duration-300">
                                        <span class="text-xl font-semibold text-gray-800">Card Level {{ $i }}</span>
                                        <div class="flex gap-4 mt-4">
                                            <input type="text" name="cardOnetitle{{ $i }}"
                                                class="w-1/2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 font-medium"
                                                placeholder="Enter Card {{ $i }} Title" required />
                                            <textarea name="cardOnedescription{{ $i }}" rows="3"
                                                class="w-1/2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 font-medium"
                                                placeholder="Enter Card {{ $i }} Description" required></textarea>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-center mt-8">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-8 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-400">
                                    Save
                                </button>
                            </div>
                        </form>

                        <div id="toast" class="custom-toast">
                            Your custom toast message goes here!
                        </div>
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
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('missionForm');

        function showToast(message) {
            const toast = document.getElementById("toast");
            toast.textContent = message;
            toast.classList.add("show");

            setTimeout(function () {
                toast.classList.remove("show");
            }, 3000);
        }
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken,
                },
            })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(errorData => {
                            console.error('Error Details:', errorData);
                            showToast('Form submission failed. Check the console for details.');
                            throw new Error('Form submission failed');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Form submitted successfully:', data);
                    showToast('Mission details saved successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('An error occurred. Check the console for details.');
                });
        });
    });
</script>
