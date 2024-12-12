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
                    Contact
                    <span class="block text-xs font-normal text-gray-300 mt-2">
                        <a href="#">Home</a> &raquo;
                        <a href="#">Front</a> &raquo;
                        <a href="#">Contact</a>
                    </span>
                </div>
                <div class="bg-gray-100 min-h-screen flex justify-center items-center p-6">
                    <div class="bg-white p-8 rounded-lg shadow-md" style="width: 98%;margin-top: -9%;">
                        <!-- Contact Form -->
                        <form action="{{ route('updateContact') }}" id="contactForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Name and Email -->
                            <div class="mb-8">
                                <!-- Email Input -->
                                <div
                                    class="shadow-lg flex items-center bg-white p-4 border border-gray-300 rounded-lg hover:shadow-xl transition duration-300 mb-6">
                                    <input type="email" name="email"
                                        class="flex-1 pl-3 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md font-medium"
                                        placeholder="Enter Your Email" value="{{ old('email', $contact->email ?? '') }}"
                                        required />
                                </div>
                            </div>

                            <!-- Phone Number and Address -->
                            <div class="mb-8">
                                <!-- Phone Number Input -->
                                <div
                                    class="shadow-lg flex items-center bg-white p-4 border border-gray-300 rounded-lg hover:shadow-xl transition duration-300 mb-6">
                                    <input type="tel" name="number"
                                        class="flex-1 pl-3 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md font-medium"
                                        placeholder="Enter Your Phone Number"
                                        value="{{ old('number', $contact->number ?? '') }}" required />
                                </div>

                                <!-- Address Input -->
                                <div
                                    class="shadow-lg flex items-center bg-white p-4 border border-gray-300 rounded-lg hover:shadow-xl transition duration-300 mb-6">
                                    <input type="text" name="address"
                                        class="flex-1 pl-3 py-3 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 rounded-md font-medium"
                                        placeholder="Enter Your Address"
                                        value="{{ old('address', $contact->address ?? '') }}" required />
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-center">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-8 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-400">
                                    Change
                                </button>
                            </div>
                        </form>

                        <div id="toast" class="custom-toast">
                            Your custom toast message goes here!
                        </div>
                    </div>
                </div>

                </d>
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
