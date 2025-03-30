<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMVS-Manufacturer Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">
    <!-- Navigation -->
    <nav class="bg-blue-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-shield-alt text-2xl"></i>
                <span class="text-xl font-bold">DMVS</span>
                <span class="hidden md:inline-block text-sm bg-blue-600 px-2 py-1 rounded ml-2">Manufacturer
                    Portal</span>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="/" class="hover:text-blue-200">Verify Drug</a>
                <a href="/about" class="hover:text-blue-200">About</a>
                <a href="/contact" class="hover:text-blue-200">Contact</a>
            </div>
            <div>
                <a href="/login-register">
                    <button
                        class="bg-white text-blue-800 px-4 py-2 rounded-md font-medium hover:bg-blue-100">Login</button>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Page Tabs -->
        <div class="max-w-md mx-auto mb-8">
            <div class="flex">
                <button id="loginTabBtn"
                    class="w-1/2 py-3 font-medium text-center border-b-2 border-blue-600 text-blue-600">Login</button>
                <button id="signupTabBtn"
                    class="w-1/2 py-3 font-medium text-center border-b-2 border-gray-200 text-gray-500">Sign Up</button>
            </div>
        </div>

        <!-- Login Form -->
        <div id="loginForm" class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-blue-700 text-white py-4 px-6">
                <h2 class="text-xl font-semibold">Manufacturer Login</h2>
                <p class="text-sm text-blue-100">Access your verification dashboard</p>
            </div>
            <div class="p-6">
                <form>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2 font-medium">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" placeholder="company@example.com"
                                class="w-full pl-10 px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-gray-700 font-medium">Password</label>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" placeholder="••••••••"
                                class="w-full pl-10 px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                    </div>
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="remember"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Log In
                    </button>
                </form>
                <div class="mt-4 text-center text-gray-500 text-sm">
                    <p>Don't have a manufacturer account? <button id="showSignupBtn"
                            class="text-blue-600 hover:underline">Sign up</button></p>
                </div>
            </div>
        </div>

        <!-- Signup Form -->
        <div id="signupForm" class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden hidden">
            <div class="bg-blue-700 text-white py-4 px-6">
                <h2 class="text-xl font-semibold">Manufacturer Registration</h2>
                <p class="text-sm text-blue-100">Join our verification platform</p>
            </div>
            <div class="p-6">
                <form method="#" action="#">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Company Information</label>
                        <input type="text" placeholder="Company Name" id="companyName"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3">
                        <input type="text" placeholder="Pharmaceutical License Number"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Contact Information</label>
                        <input type="email" placeholder="Email Address"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3">
                        <input type="tel" placeholder="Phone Number"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Company Address</label>
                        <input type="text" placeholder="Street Address"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3">
                        <div class="grid grid-cols-2 gap-3">
                            <input type="text" placeholder="City"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <input type="text" placeholder="State/Province"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-3 mt-3">
                            <input type="text" placeholder="Postal Code"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <select
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white">
                                <option value="" disabled selected>District</option>
                                <option value="kla">Kampala</option>
                                <option value="msk">Masaka</option>
                                <option value="jja">Jinja</option>
                                <option value="srt">Soroti</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Account Security</label>
                        <input type="password" placeholder="Password"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none mb-3">
                        <input type="password" placeholder="Confirm Password"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div class="mb-6">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms"
                                class="h-4 w-4 mt-1 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">Terms of Service</a>
                                and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Create Account
                    </button>
                </form>
                <div class="mt-4 text-center text-gray-500 text-sm">
                    <p>Already registered? <button id="showLoginBtn" class="text-blue-600 hover:underline">Log
                            in</button></p>
                </div>

                <div class="mt-6 bg-blue-50 p-4 rounded-md border border-blue-200">
                    <h3 class="font-medium text-blue-800 mb-2 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i> Verification Process
                    </h3>
                    <p class="text-sm text-blue-700">
                        After signing up, we'll verify your pharmaceutical license and company information before
                        activating your account. This process typically takes 1-2 business days.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4"><i class="fas fa-pills text-white text-2xl"></i>DMVS</h3>
                    <p class="text-gray-400">Ensuring medication safety through advanced verification technology.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Home</a></li>
                        <li><a href="#" class="hover:text-white">Verify Drug</a></li>
                        <li><a href="#" class="hover:text-white">For Manufacturers</a></li>
                        <li><a href="#" class="hover:text-white">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i> info@dvms.com</li>
                        <li><i class="fas fa-phone mr-2"></i> +256 394 727 476</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i>PortBell Road, Nakawa-Kampala(U)</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i
                                class="fab fa-linkedin-in text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; 2025 DMVS. All rights reserved.</p>
            </div>
        </div>
    </footer>



    <script src="js/script.js"></script>
</body>

</html>