<x-layout>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Signup Form -->
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="bg-green-700 text-white py-4 px-6">
                <h2 class="text-xl font-semibold">Manufacturer Registration</h2>
                <p class="text-sm text-green-100">Join our verification platform</p>
            </div>
            <div class="p-6">
                <form method="POST" action="{{ route('registers.custom')}}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Company Information</label>
                        <input type="text" placeholder="Company Name" id="companyName" name="companyName"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none mb-3"
                            required>
                        <input type="text" placeholder="Pharmaceutical License Number" name="licenseNumber"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Contact Information</label>
                        <input type="email" placeholder="Email Address" name="email"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none mb-3"
                            required>
                        <input type="tel" placeholder="Phone Number" name="phone"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2 font-bold">Company Address</label>
                        <input type="text" placeholder="Street Address" name="street"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none mb-3"
                            required>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="text" placeholder="City" name="city"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none"
                                required>
                        </div>
                        <div class="grid grid-cols-2 gap-3 mt-3">
                            <input type="text" placeholder="Postal Code"
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none">
                            <select
                                class="px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none bg-white">
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
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none mb-3">
                        <input type="password" placeholder="Confirm Password"
                            class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-green-500 focus:outline-none">
                    </div>

                    <div class="mb-6">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms"
                                class="h-4 w-4 mt-1 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                I agree to the <a href="#" class="text-green-600 hover:underline">Terms of Service</a>
                                and <a href="#" class="text-green-600 hover:underline">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Create Account
                    </button>
                </form>
                <div class="mt-4 text-center text-gray-500 text-sm">
                    <p>Already registered? <a href="login.html" class="text-green-600 hover:underline">Log in</a></p>
                </div>

                <div class="mt-6 bg-green-50 p-4 rounded-md border border-green-200">
                    <h3 class="font-medium text-green-800 mb-2 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i> Verification Process
                    </h3>
                    <p class="text-sm text-green-700">
                        After signing up, we'll verify your pharmaceutical license and company information before
                        activating your account. This process typically takes 1-2 business days.
                    </p>
                </div>
            </div>
        </div>
    </main>
</x-layout>