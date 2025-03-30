<x-layout>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Login Form -->
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-green-700 text-white py-4 px-6">
                <h2 class="text-xl font-semibold">Manufacturer Login</h2>
                <p class="text-sm text-green-100">Access your verification dashboard</p>
            </div>
            <div class="p-6">
                <form method="POST" action="{{ route('login.custom')}}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2 font-medium">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" placeholder="company@example.com" name="email"
                                class="w-full pl-10 px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none"
                                required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-gray-700 font-medium">Password</label>
                            <a href="#" class="text-sm text-green-600 hover:underline">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" placeholder="••••••••" name="password"
                                class="w-full pl-10 px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none"
                                required>
                        </div>
                    </div>
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="remember"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <button type="submit"
                        class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Log In
                    </button>
                </form>
                <div class="mt-4 text-center text-gray-500 text-sm">
                    <p>Don't have a manufacturer account? <a href="/register"
                            class="text-green-600 hover:underline">Register</a></p>
                </div>
            </div>
        </div>
    </main>
</x-layout>