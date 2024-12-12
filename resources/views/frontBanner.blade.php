<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Add Banner | Evintas</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
</head>
<style>
    .tab-content {
        display: none;
    }

    .tab-content:not(.hidden) {
        display: block;
    }

    .tab-button.active-tab {
        border-bottom: 2px solid blue;
    }

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
                    Banner
                    <span class="block text-xs font-normal text-gray-300 mt-2">
                        <a href="#">Home</a> &raquo;
                        <a href="#">Front</a> &raquo;
                        <a href="#">Banner</a>
                    </span>
                </div>
                <div class="bg-gray-100 min-h-screen flex justify-center items-center p-6">
                    <div class="bg-white p-8 rounded-lg shadow-md" style="width: 98%;margin-top: -17%;">
                        <!-- Tabs -->
                        <div class="flex border-b border-gray-300 mb-6">
                            <button
                                class="tab-button active-tab px-4 py-2 text-blue-600 border-b-2 border-blue-600 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-105 hover:text-white hover:bg-blue-600"
                                onclick="showTab('bannerTab', this)">
                                Banner Form
                            </button>
                            <button
                                class="tab-button px-4 py-2 text-gray-600 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-105 hover:text-white hover:bg-blue-600"
                                onclick="showTab('demoTab', this)">
                                About US
                            </button>
                        </div>

                        <!-- Tab Content -->
                        <div id="bannerTab" class="tab-content">
                            <form action="{{ route('banner.store') }}" id="bannerForm" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Banner Title -->
                                    <div
                                        class="mb-8 shadow-md flex items-center bg-white p-3 border border-gray-300 rounded-md hover:shadow-lg transition duration-200">
                                        <input type="text" name="title"
                                            class="flex-1 pl-2 text-gray-700 placeholder-gray-400 focus:outline-none"
                                            placeholder="Banner Title" required />
                                    </div>

                                    <!-- First Video -->
                                    <div class="shadow-md flex items-center bg-white p-3 border border-gray-300 rounded-md hover:shadow-lg transition duration-200"
                                        style="height: 52px;">
                                        <input type="file" name="firstVideo"
                                            class="flex-1 pl-2 text-gray-700 placeholder-gray-400 focus:outline-none"
                                            accept="video/*" required />
                                    </div>

                                    <!-- Second Video -->
                                    <div
                                        class="shadow-md flex items-center bg-white p-3 border border-gray-300 rounded-md hover:shadow-lg transition duration-200">
                                        <input type="file" name="secondVideo"
                                            class="flex-1 pl-2 text-gray-700 placeholder-gray-400 focus:outline-none"
                                            accept="video/*" required />
                                    </div>

                                    <!-- Third Video -->
                                    <div
                                        class="shadow-md flex items-center bg-white p-3 border border-gray-300 rounded-md hover:shadow-lg transition duration-200">
                                        <input type="file" name="thirdVideo"
                                            class="flex-1 pl-2 text-gray-700 placeholder-gray-400 focus:outline-none"
                                            accept="video/*" required />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-center mt-8">
                                    <button type="submit"
                                        class="py-2.5 px-6 text-sm bg-indigo-500 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-indigo-700">Save</button>
                                </div>
                            </form>
                        </div>

                        <div id="demoTab" class="tab-content hidden">
                            <form action="{{ route('frontAbout.save') }}" id="demoForm" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Description Input -->
                                <div
                                    class="mb-8 shadow-md flex items-center bg-white p-3 border border-gray-300 rounded-md hover:shadow-lg transition duration-200">
                                    <textarea name="description"
                                        class="flex-1 pl-2 text-gray-700 placeholder-gray-400 focus:outline-none"
                                        placeholder="Enter Description" required></textarea>
                                </div>

                                <!-- Video Upload Input -->
                                <div
                                    class="shadow-md flex items-center bg-white p-3 border border-gray-300 rounded-md hover:shadow-lg transition duration-200 mb-6">
                                    <input type="file" name="video"
                                        class="flex-1 pl-2 text-gray-700 placeholder-gray-400 focus:outline-none"
                                        accept="video/*" required />
                                </div>

                                <!-- Submit Button -->
                                <div class="flex justify-center mt-8">
                                    <button type="submit"
                                        class="py-2.5 px-6 text-sm bg-indigo-500 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-indigo-700">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
    function showTab(tabId, button) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.add('hidden');
        });

        // Show the selected tab content
        const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.classList.remove('hidden');
        }

        // Remove active state from all buttons
        document.querySelectorAll('.tab-button').forEach(btn => {
            btn.classList.remove('active-tab', 'text-blue-600', 'border-blue-600');
            btn.classList.add('text-gray-600');
        });

        // Add active state to the clicked button
        button.classList.add('active-tab', 'text-blue-600', 'border-blue-600');
        button.classList.remove('text-gray-600');
    }
    document.addEventListener("DOMContentLoaded", function () {
        var toast = document.getElementById("custom-toast");

        if (toast) {
            toast.classList.add("show");

            setTimeout(function () {
                toast.classList.remove("show");
            }, 3000);
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
