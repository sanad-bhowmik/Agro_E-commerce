<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Eventas</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="lg:flex">
        <div class="lg:w-1/2 xl:max-w-screen-sm">
            <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                <div class="cursor-pointer flex items-center">
                    <div>
                        <svg height="34px" width="34px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 504.125 504.125" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#3A7F0D;" d="M339.772,0c0,0,44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193 c7.877-70.357,41.653-225.485,186.888-260.884c0,0-135.176,50.546-147.117,279.347c69.459,9.752,232.361,16.305,280.726-125.062 C489.536,187.817,339.772,0,339.772,0z"></path>
                                <path style="fill:#49A010;" d="M145.007,498.704c147.456-58.849,254.748-196.71,269.556-361.283C384.418,56.107,339.772,0,339.772,0 s44.536,108.954-146.337,182.138C89.719,221.893,10.059,323.789,105.173,481.193c7.877-70.357,41.653-225.485,186.888-260.884 C292.053,220.31,157.279,270.73,145.007,498.704z"></path>
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
                    <div class="text-2xl text-green-800 tracking-wide ml-2 font-semibold">Eventas</div>
                </div>
            </div>
            <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                <h2 class="text-center text-4xl text-green-800 font-display font-semibold lg:text-left xl:text-5xl xl:text-bold">Log in</h2>
                <div class="mt-12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>
                            <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" style="padding: 10px; type=" email" name="email" value="{{ old('email') }}" placeholder="mike@gmail.com" required>
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Password</div>

                            </div>
                            <div class="relative">
                                <input
                                    id="password"
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="password"
                                    name="password"
                                    placeholder="Enter your password"
                                    required
                                    style="padding: 10px;">
                                <span
                                    id="togglePassword"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg id="eyeSlashIcon" xmlns="http://www.w3.org/2000/svg" class="hidden h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.98 8.793A9.929 9.929 0 002.458 12c1.274 4.057 5.065 7 9.542 7 2.615 0 5.007-.93 6.868-2.465M3.98 8.793l15.034 15.034M9 12a3 3 0 003 3m0-6a3 3 0 013 3m0 0a3 3 0 01-3 3m0 0a3 3 0 01-3-3" />
                                    </svg>
                                </span>
                            </div>
                            <div>
                                <a class="text-xs font-display font-semibold text-indigo-600 hover:text-indigo-800 cursor-pointer">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>

                        <script>
                            const passwordInput = document.getElementById("password");
                            const togglePassword = document.getElementById("togglePassword");
                            const eyeIcon = document.getElementById("eyeIcon");
                            const eyeSlashIcon = document.getElementById("eyeSlashIcon");

                            togglePassword.addEventListener("click", () => {
                                // Toggle password visibility
                                const isPasswordVisible = passwordInput.type === "password";
                                passwordInput.type = isPasswordVisible ? "text" : "password";

                                // Toggle icons
                                eyeIcon.classList.toggle("hidden", !isPasswordVisible);
                                eyeSlashIcon.classList.toggle("hidden", isPasswordVisible);
                            });
                        </script>

                        <div class="mt-10">
                            <button class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg" type="submit">
                                Log In
                            </button>
                        </div>
                    </form>
                    <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
                        Don't have an account? <a class="cursor-pointer text-indigo-600 hover:text-indigo-800">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex items-center justify-center bg-indigo-100 flex-1 h-screen">
            <div class="max-w-xs transform duration-200 hover:scale-110 cursor-pointer">
                <svg class="w-5/6 mx-auto" xmlns="http://www.w3.org/2000/svg" id="f080dbb7-9b2b-439b-a118-60b91c514f72" data-name="Layer 1" viewBox="0 0 528.71721 699.76785">
                    <title>Login</title>
                    <rect y="17.06342" width="444" height="657" fill="#535461" />
                    <polygon points="323 691.063 0 674.063 0 17.063 323 0.063 323 691.063" fill="#7f9cf5" />
                    <circle cx="296" cy="377.06342" r="4" fill="#535461" />
                    <polygon points="296 377.66 298.773 382.463 301.545 387.265 296 387.265 290.455 387.265 293.227 382.463 296 377.66" fill="#535461" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Add JS for logging errors in the console -->
    @if ($errors->any())
    <script>
        console.error("Login failed: {{ $errors->first() }}");
    </script>
    @endif
</body>

</html>
