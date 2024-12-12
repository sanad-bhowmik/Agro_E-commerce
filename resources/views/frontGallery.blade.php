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
        href="https://png.pngtree.com/png-vector/20230212/ourmid/pngtree-organic-fair-and-agro-garden-logo-design-png-image_6593571.png">

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
                    Gallery
                    <span class="block text-xs font-normal text-gray-300 mt-2">
                        <a href="#">Home</a> &raquo;
                        <a href="#">Front</a> &raquo;
                        <a href="#">Gallery</a>
                    </span>
                </div>
                <div class="bg-gray-100 min-h-screen flex justify-center items-center p-6">
                    <div class="bg-white p-8 rounded-lg shadow-md" style="width: 103%;margin-top: -28%;">
                        <!-- Product Upload Form -->
                        <form action="{{ route('storePricing') }}" id="priceCardForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div id="inputContainer">
                                <!-- Initial Picture Input -->
                                <div class="input-group flex w-full max-w-xs items-center gap-1.5"
                                    style="margin-bottom: 23px;">
                                    <label class="text-sm text-gray-400 font-medium leading-none">Picture</label>
                                    <input name="pictures[]" type="file"
                                        class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
                                    <!-- Cross (remove) button, hidden initially -->
                                    <button type="button" class="remove-btn text-red-500 ml-2 hidden">X</button>
                                </div>
                            </div>

                            <div class="flex gap-6 mt-4">
                                <button type="button" id="addMoreBtn"
                                    class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                    Add More
                                </button>
                                <button type="submit"
                                    class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
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
<style>
    .remove-btn {
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        border: none;
        background-color: transparent;
    }

    .remove-btn:hover {
        color: red;
    }
</style>

</html>
<script>
    document.getElementById('addMoreBtn').addEventListener('click', function () {
        const container = document.getElementById('inputContainer');

        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('input-group', 'flex', 'w-full', 'max-w-xs', 'items-center', 'gap-1.5');
        newInputGroup.style.marginBottom = '23px'; // Adding bottom margin for spacing

        const newLabel = document.createElement('label');
        newLabel.classList.add('text-sm', 'text-gray-400', 'font-medium', 'leading-none');
        newLabel.textContent = 'Picture';

        const newInput = document.createElement('input');
        newInput.name = 'pictures[]';
        newInput.type = 'file';
        newInput.classList.add('flex', 'h-10', 'w-full', 'rounded-md', 'border', 'border-input', 'bg-white', 'px-3', 'py-2', 'text-sm', 'text-gray-400', 'file:border-0', 'file:bg-transparent', 'file:text-gray-600', 'file:text-sm', 'file:font-medium');

        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.classList.add('remove-btn', 'text-red-500', 'ml-2');
        removeButton.textContent = 'X';

        // Show cross button after the input is added
        removeButton.classList.remove('hidden');

        removeButton.addEventListener('click', function () {
            container.removeChild(newInputGroup);
        });

        newInputGroup.appendChild(newLabel);
        newInputGroup.appendChild(newInput);
        newInputGroup.appendChild(removeButton);

        container.appendChild(newInputGroup);
    });

    function addFeature(event, cardIndex) {
        if (event.key === 'Enter') {
            event.preventDefault();

            const input = document.getElementById(`featureInput${cardIndex}`);
            const tagContainer = document.getElementById(`featureTags${cardIndex}`);
            const hiddenInput = document.getElementById(`hiddenFeatures${cardIndex}`);

            const featureText = input.value.trim();
            if (featureText) {
                // Check if the feature is already added
                const currentFeatures = hiddenInput.value ? JSON.parse(hiddenInput.value) : [];
                if (currentFeatures.includes(featureText)) {
                    alert("Feature already added!");
                    input.value = '';
                    return;
                }

                // Create tag element
                const tag = document.createElement('span');
                tag.className = 'bg-blue-500 text-white px-2 py-1 rounded-full flex items-center gap-2';
                tag.innerHTML = `
                <span>${featureText}</span>
                <button type="button" onclick="removeFeature(this, ${cardIndex}, '${featureText}')" class="text-white font-bold hover:text-red-500">×</button>
            `;

                // Add tag to the container
                tagContainer.appendChild(tag);

                // Add feature to hidden input
                currentFeatures.push(featureText);
                hiddenInput.value = JSON.stringify(currentFeatures);

                // Clear the input field
                input.value = '';
            }
        }
    }

    function removeFeature(button, cardIndex, featureText) {
        const tagContainer = document.getElementById(`featureTags${cardIndex}`);
        const hiddenInput = document.getElementById(`hiddenFeatures${cardIndex}`);

        // Remove the tag from the container
        const tag = button.parentElement;
        tagContainer.removeChild(tag);

        // Update the hidden input value
        let currentFeatures = hiddenInput.value ? JSON.parse(hiddenInput.value) : [];
        currentFeatures = currentFeatures.filter(feature => feature !== featureText);
        hiddenInput.value = JSON.stringify(currentFeatures);
    }


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
