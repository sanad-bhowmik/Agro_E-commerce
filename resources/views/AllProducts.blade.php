<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>View | Evintas</title>
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
                <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 mt-10 mb-10">
                    <table class="w-full table-fixed">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="w-1/12 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">#</th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Image
                                </th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Name
                                </th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Price
                                </th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Brand
                                </th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Status
                                </th>
                                <th class="w-1/5 py-2 px-4 text-left text-gray-600 font-bold uppercase text-xs">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-sm">
                            @foreach($products as $index => $product)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        @if($product->image)
                                            <img src="{{ asset('img/product/' . $product->image) }}" alt="{{ $product->name }}"
                                                class="w-12 h-12 object-cover rounded">
                                        @else
                                            <span class="text-gray-500">No Image</span>
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $product->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $product->price }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $product->brand }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <span
                                            class="bg-{{ $product->status ? 'green' : 'red' }}-500 text-white py-1 px-2 rounded-full text-xs">
                                            {{ $product->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <select class="status-dropdown border rounded px-2 py-1"
                                            data-id="{{ $product->id }}">
                                            <option value="1" {{ $product->status ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$product->status ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        <button class="save-btn hidden text-white bg-blue-500 px-2 py-1 rounded text-xs"
                                            data-id="{{ $product->id }}">Save</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="mt-4 px-4">
                        {{ $products->links() }}
                    </div>
                </div>

                <!-- Toast Notification -->
                <div id="toast" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow hidden">
                    Status updated successfully!</div>

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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const statusDropdowns = document.querySelectorAll('.status-dropdown');
        const toast = document.getElementById('toast');

        statusDropdowns.forEach(dropdown => {
            dropdown.addEventListener('change', function () {
                const saveBtn = this.nextElementSibling;
                saveBtn.classList.remove('hidden');
            });
        });

        document.querySelectorAll('.save-btn').forEach(button => {
            button.addEventListener('click', function () {
                const productId = this.getAttribute('data-id');
                const newStatus = this.previousElementSibling.value;

                fetch(`/update-product-status/${productId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        status: newStatus
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast();
                            location.reload();
                        }
                    });
            });
        });

        function showToast() {
            toast.classList.remove('hidden');
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 3000);
        }
    });
</script>
