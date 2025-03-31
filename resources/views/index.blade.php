<x-layout>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="text-center py-8 mb-12">
            <h3 class="text-4xl font-bold text-gray-800 mb-4">Drug Manufacturer Verification System</h3>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Verify Your Medication</h3>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Ensure your medicines are authentic, safe, and from
                legitimate manufacturers.</p>
        </section>

        <!-- Verification Box -->
        <section class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden mb-12">
            <div class="bg-green-700 text-white py-3 px-4">
                <h2 class="text-xl font-semibold">Drug Verification</h2>
            </div>
            <div class="p-6">
                <div class="pt-4">
                    <div class="flex items-center justify-center flex-col">
                        <div
                            class="border-2 border-dashed border-gray-300 p-8 rounded-lg text-center mb-4 w-64 h-64 flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-camera text-4xl text-gray-400 mb-2"></i>
                                <p class="text-gray-500">Click button below to activate camera</p>
                            </div>
                        </div>
                        <button class="bg-gray-200 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-300"
                            id="scanQrButton">
                            <i class="fas fa-camera mr-2"></i> Scan QR Code
                        </button>
                    </div>
                </div>
            </div>
        </section>



        <!-- Results Section (Initially Hidden) -->
        {{-- <section class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden mb-12">
            <div class="bg-green-600 text-white py-3 px-4 flex items-center">
                <i class="fas fa-check-circle text-2xl mr-2"></i>
                <h2 class="text-xl font-semibold">Verification Successful</h2>
            </div>
            <div class="p-6">
                <div class="bg-green-50 p-4 rounded-md mb-6 border border-green-200">
                    <p class="text-green-800">This medication has been verified as authentic.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold text-lg mb-3">Product Information</h3>
                        <ul class="space-y-2">
                            <li class="flex">
                                <span class="font-medium w-32 text-gray-600">Name:</span>
                                <span>Amoxicillin 500mg</span>
                            </li>
                            <li class="flex">
                                <span class="font-medium w-32 text-gray-600">Manufacturer:</span>
                                <span>PharmaCo Ltd.</span>
                            </li>
                            <li class="flex">
                                <span class="font-medium w-32 text-gray-600">Batch Number:</span>
                                <span>BT20240125</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-3">Dates</h3>
                        <ul class="space-y-2">
                            <li class="flex">
                                <span class="font-medium w-32 text-gray-600">Manufactured:</span>
                                <span>Jan 25, 2024</span>
                            </li>
                            <li class="flex">
                                <span class="font-medium w-32 text-gray-600">Expiry Date:</span>
                                <span>Jan 25, 2026</span>
                            </li>
                            <li class="flex">
                                <span class="font-medium w-32 text-gray-600">Verified On:</span>
                                <span>Feb 25, 2025</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section> --}}

        <!-- About Hero Section -->
        <section class="text-center py-8 mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">About Drug Manufacturer Verification System</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Protecting public health through innovative drug
                verification technology</p>
        </section>

        <!-- Mission & Vision -->
        <section class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8 mb-16">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-bullseye text-green-600 text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-600">To ensure the safety and authenticity of pharmaceutical products through
                    advanced verification technology, protecting consumers from counterfeit medications.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-eye text-green-600 text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h2>
                <p class="text-gray-600">To become the leading global platform for drug verification, creating a safer
                    pharmaceutical ecosystem for everyone.</p>
            </div>
        </section>

        <!-- Key Features -->
        <section class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Key Features of the System</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Secure Verification</h3>
                    <p class="text-gray-600">Advanced encryption and blockchain technology ensure tamper-proof
                        verification results.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-bolt text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Real-time Results</h3>
                    <p class="text-gray-600">Instant verification results with detailed product information and
                        authenticity status.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-database text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Comprehensive Database</h3>
                    <p class="text-gray-600">Connected with major pharmaceutical manufacturers for accurate
                        verification.</p>
                </div>
            </div>
        </section>

        {{-- <!-- How It Works -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">How It Works</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!--Scan QR Code card-->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-barcode text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Scan QR Code</h3>
                    <p class="text-gray-600">Locate the QR code on your medication packaging.</p>
                </div>
                <!--Verification card-->
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-database text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Instant Verification</h3>
                    <p class="text-gray-600">Our system checks the authenticity against manufacturer databases.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check-circle text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">View Results</h3>
                    <p class="text-gray-600">Get instant confirmation of your medication's authenticity and details.</p>
                </div>
            </div>
        </section> --}}
    </main>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const scanButton = document.getElementById('scanQrButton');
            scanButton.addEventListener('click', function () {
                // Check if browser supports getUserMedia
                if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                    // Start video stream
                    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
                        .then(function (stream) {
                            const scannerModal = `
                        <div class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
                            <div class="bg-white p-4 rounded-lg w-full max-w-md">
                                <div class="relative">
                                    <video id="qr-video" class="w-full"></video>
                                    <div class="absolute inset-0 border-2 border-green-500 opacity-50"></div>
                                </div>
                                <button id="close-scanner" class="mt-4 w-full bg-red-500 text-white px-4 py-2 rounded">
                                    Close Scanner
                                </button>
                            </div>
                        </div>
                    `;

                            document.body.insertAdjacentHTML('beforeend', scannerModal);

                            const video = document.getElementById('qr-video');
                            video.srcObject = stream;
                            video.play();

                            // Initialize QR scanner
                            const qrScanner = new QrScanner(video, result => {
                                alert('QR Code detected: ' + result);
                                qrScanner.stop();
                                stream.getTracks().forEach(track => track.stop());
                                document.querySelector('.fixed').remove();
                            });

                            qrScanner.start();

                            // Handle close button
                            document.getElementById('close-scanner').addEventListener('click', () => {
                                qrScanner.stop();
                                stream.getTracks().forEach(track => track.stop());
                                document.querySelector('.fixed').remove();
                            });
                        });
                } else {
                    alert('Sorry, your browser does not support camera access');
                }
            });
        });

    </script>
</x-layout>