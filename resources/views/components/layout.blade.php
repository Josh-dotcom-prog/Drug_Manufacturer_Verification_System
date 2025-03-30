<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Manufacturer Verification System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://unpkg.com/qr-scanner/qr-scanner.umd.min.js"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Navigation -->
    <nav class="bg-green-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!--Logo-->
            <div class="flex items-center space-x-2">
                <i class="fas fa-pills text-white text-2xl"></i>
                <span class="text-xl font-bold">DMVS</span>
            </div>


            <!--Login Button-->
            <div>
                <a href="/login">
                    <button
                        class="bg-white text-green-800 px-4 py-2 rounded-md font-medium hover:bg-green-100">Login</button>
                </a>
            </div>

        </div>
    </nav>
    {{ $slot }}
</body>

</html>