<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMVS|Manufacturer Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.4.4/build/qrcode.min.js"></script>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 hidden md:block">
            <div class="p-6 flex items-center space-x-3 border-b border-gray-200">
                <i class="fas fa-pills text-blue-600 text-2xl"></i>
                <h1 class="text-xl font-bold text-blue-600">DMVS</h1>
            </div>

            <nav class="mt-6 px-3">
                <a href="#"
                    class="flex items-center px-4 py-3 text-blue-600 bg-blue-50 rounded-md mb-1 border-l-4 border-blue-600">
                    <i class="fas fa-chart-line w-5 h-5 mr-3"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-md mb-1">
                    <i class="fas fa-capsules w-5 h-5 mr-3"></i>
                    <span class="font-medium">Products</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-md mb-1">
                    <i class="fas fa-barcode w-5 h-5 mr-3"></i>
                    <span class="font-medium">Batches</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-md mb-1">
                    <i class="fas fa-cog w-5 h-5 mr-3"></i>
                    <span class="font-medium">Settings</span>
                </a>
            </nav>
        </aside>

        <!-- Mobile sidebar button -->
        <div class="md:hidden fixed bottom-4 right-4 z-50">
            <button class="bg-blue-600 text-white p-3 rounded-full shadow-lg">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <div class="p-6">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Manufacturer Dashboard</h1>
                    <div class="flex items-center">
                        <div class="relative">
                            <button id="profileButton"
                                class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold mr-3">
                                PM
                            </button>
                            <div id="profileDropdown"
                                class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user mr-2"></i>Profile
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-cog mr-2"></i>Settings
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-bell mr-2"></i>Notifications
                                </a>
                                <hr class="my-1">
                                <a href="/Login.html" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                </a>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-600">Welcome,</p>
                            <p class="font-medium text-blue-600">PharmaMed Inc.</p>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm relative overflow-hidden">
                        <h3 class="text-gray-500 text-sm font-medium mb-2">TOTAL PRODUCTS</h3>
                        <p class="text-3xl font-bold mb-1">37</p>
                        <p class="text-green-600 text-sm flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> 2 new this month
                        </p>
                        <i class="fas fa-capsules text-3xl text-blue-100 absolute top-6 right-6"></i>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm relative overflow-hidden">
                        <h3 class="text-gray-500 text-sm font-medium mb-2">ACTIVE BATCHES</h3>
                        <p class="text-3xl font-bold mb-1">218</p>
                        <p class="text-green-600 text-sm flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> 15 new this month
                        </p>
                        <i class="fas fa-boxes text-3xl text-blue-100 absolute top-6 right-6"></i>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm relative overflow-hidden">
                        <h3 class="text-gray-500 text-sm font-medium mb-2">VERIFICATION SCANS</h3>
                        <p class="text-3xl font-bold mb-1">1,842</p>
                        <p class="text-green-600 text-sm flex items-center">
                            <i class="fas fa-arrow-up mr-1"></i> 23% from last month
                        </p>
                        <i class="fas fa-qrcode text-3xl text-blue-100 absolute top-6 right-6"></i>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm relative overflow-hidden">
                        <h3 class="text-gray-500 text-sm font-medium mb-2">ALERTS</h3>
                        <p class="text-3xl font-bold mb-1">3</p>
                        <p class="text-red-600 text-sm flex items-center">
                            <i class="fas fa-arrow-down mr-1"></i> 2 resolved this month
                        </p>
                        <i class="fas fa-exclamation-triangle text-3xl text-yellow-500 absolute top-6 right-6"></i>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mb-6">
                    <button id="registerDrugBtn"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md flex items-center">
                        <i class="fas fa-plus mr-2"></i> Register New Drug
                    </button>
                </div>

                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <div class="flex">
                        <button id="productsTab"
                            class="px-6 py-3 font-medium text-blue-600 border-b-2 border-blue-600 -mb-px">
                            Products
                        </button>
                        <button id="batchesTab" class="px-6 py-3 font-medium text-gray-500 hover:text-gray-700">
                            Batch Tracking
                        </button>
                        <button id="registerTab" class="px-6 py-3 font-medium text-gray-500 hover:text-gray-700">
                            Registration
                        </button>
                    </div>
                </div>

                <!-- Products Table Section -->
                <div id="productsSection" class="mb-8 bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold">Registered Products</h2>
                        <div class="flex bg-gray-100 px-3 py-2 rounded-md">
                            <i class="fas fa-search text-gray-400 mr-2 mt-1"></i>
                            <input type="text" placeholder="Search products..."
                                class="bg-transparent border-none focus:outline-none text-sm">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Drug Name</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NDA Number</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Dosage Form</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Registration Date</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Amoxicillin</td>
                                    <td class="px-6 py-4 whitespace-nowrap">A4-0142</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Antibiotic</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Capsule</td>
                                    <td class="px-6 py-4 whitespace-nowrap">12 Jan 2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2">
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-qrcode"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Paracetamol</td>
                                    <td class="px-6 py-4 whitespace-nowrap">A4-1853</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Analgesic</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Tablet</td>
                                    <td class="px-6 py-4 whitespace-nowrap">23 Nov 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2">
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-qrcode"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Ciprofloxacin</td>
                                    <td class="px-6 py-4 whitespace-nowrap">A4-2241</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Antibiotic</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Tablet</td>
                                    <td class="px-6 py-4 whitespace-nowrap">07 Feb 2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2">
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-qrcode"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Metformin</td>
                                    <td class="px-6 py-4 whitespace-nowrap">A4-1922</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Antidiabetic</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Tablet</td>
                                    <td class="px-6 py-4 whitespace-nowrap">15 Dec 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Expired</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2">
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-qrcode"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">Diazepam</td>
                                    <td class="px-6 py-4 whitespace-nowrap">A4-3110</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Sedative</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Tablet</td>
                                    <td class="px-6 py-4 whitespace-nowrap">03 Sep 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Expired</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2">
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-gray-500 hover:text-gray-700">
                                                <i class="fas fa-redo"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Batch Tracking Section (hidden by default) -->
                <div id="batchesSection" class="hidden mb-8 bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold">Batch Tracking</h2>
                        <div class="flex space-x-3">
                            <select class="bg-gray-100 border-none rounded px-3 py-2 text-sm">
                                <option>All Products</option>
                                <option>Amoxicillin</option>
                                <option>Paracetamol</option>
                                <option>Ciprofloxacin</option>
                                <option>Metformin</option>
                            </select>
                            <select class="bg-gray-100 border-none rounded px-3 py-2 text-sm">
                                <option>All Statuses</option>
                                <option>Manufacturing</option>
                                <option>QA Testing</option>
                                <option>Packaging</option>
                                <option>Distribution</option>
                                <option>Retail</option>
                            </select>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Timeline Item 1 -->
                        <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                            <div
                                class="absolute left-0 -translate-x-1/2 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="ml-6">
                                <p class="text-sm text-gray-500">Today, 10:32 AM</p>
                                <p class="font-medium mb-1">Batch #B-2025-021 - Amoxicillin 500mg</p>
                                <p class="text-gray-600">Batch released from manufacturing to quality control. 10,000
                                    units produced.</p>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                            <div
                                class="absolute left-0 -translate-x-1/2 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-vial"></i>
                            </div>
                            <div class="ml-6">
                                <p class="text-sm text-gray-500">Yesterday, 3:45 PM</p>
                                <p class="font-medium mb-1">Batch #B-2025-019 - Paracetamol 500mg</p>
                                <p class="text-gray-600">Quality testing completed. Batch approved for packaging.</p>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                            <div
                                class="absolute left-0 -translate-x-1/2 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="ml-6">
                                <p class="text-sm text-gray-500">Feb 23, 2025, 9:15 AM</p>
                                <p class="font-medium mb-1">Batch #B-2025-017 - Metformin 850mg</p>
                                <p class="text-gray-600">Batch shipped to distributor. 25,000 units en route to Lagos
                                    distribution center.</p>
                            </div>
                        </div>

                        <!-- Timeline Item 4 -->
                        <div class="relative pl-8 pb-8 border-l-2 border-gray-200">
                            <div
                                class="absolute left-0 -translate-x-1/2 w-8 h-8 bg-red-600 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <div class="ml-6">
                                <p class="text-sm text-gray-500">Feb 22, 2025, 2:10 PM</p>
                                <p class="font-medium text-red-600 mb-1">ALERT: Batch #B-2025-015 - Ciprofloxacin 500mg
                                </p>
                                <p class="text-gray-600">Verification anomaly detected. 3 scans reported from
                                    unauthorized location. Investigation initiated.</p>
                            </div>
                        </div>

                        <!-- Timeline Item 5 -->
                        <div class="relative pl-8 border-l-2 border-gray-200">
                            <div
                                class="absolute left-0 -translate-x-1/2 w-8 h-8 bg-green-600 rounded-full flex items-center justify-center text-white">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="ml-6">
                                <p class="text-sm text-gray-500">Feb 20, 2025, 11:30 AM</p>
                                <p class="font-medium mb-1">Batch #B-2025-014 - Amoxicillin 250mg</p>
                                <p class="text-gray-600">All quality checks passed. Batch cleared for market
                                    distribution. 15,000 units packaged.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Section -->
                <div id="registrationSection" class="hidden mb-8 bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold">Recent Registrations</h2>
                    </div>

                    <div class="p-6">
                        <!-- Registration Stats -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h3 class="text-sm text-gray-600">Pending Approvals</h3>
                                <p class="text-2xl font-bold text-blue-600">12</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h3 class="text-sm text-gray-600">Approved This Month</h3>
                                <p class="text-2xl font-bold text-green-600">28</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h3 class="text-sm text-gray-600">Total Registrations</h3>
                                <p class="text-2xl font-bold text-purple-600">156</p>
                            </div>
                        </div>

                        <!-- Recent Registration Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Registration ID</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Drug
                                        Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                        Submission Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4">REG-2025-042</td>
                                    <td class="px-6 py-4">Amoxicillin 500mg</td>
                                    <td class="px-6 py-4">Mar 15, 2025</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Pending</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-blue-600 hover:text-blue-800">View Details</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">REG-2025-041</td>
                                    <td class="px-6 py-4">Metformin 850mg</td>
                                    <td class="px-6 py-4">Mar 12, 2025</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Approved</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-blue-600 hover:text-blue-800">View Details</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">REG-2025-040</td>
                                    <td class="px-6 py-4">Ciprofloxacin 500mg</td>
                                    <td class="px-6 py-4">Mar 10, 2025</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Rejected</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-blue-600 hover:text-blue-800">View Details</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Drug Registration Form (hidden by default) -->
                <div id="registerForm" class="hidden mb-8 bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold">Register New Drug Product</h2>
                    </div>

                    <div class="p-6">
                        <form id="drugRegistrationForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="drugName" class="block text-sm font-medium text-gray-700 mb-1">Drug Name
                                        *</label>
                                    <input type="text" id="drugName"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="genericName"
                                        class="block text-sm font-medium text-gray-700 mb-1">Generic Name *</label>
                                    <input type="text" id="genericName"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="nafdacNumber" class="block text-sm font-medium text-gray-700 mb-1">NDA
                                        Registration
                                        Number</label>
                                    <input type="text" id="nafdacNumber" placeholder="If already approved"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Drug
                                        Category *</label>
                                    <select id="category"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                        <option value="">Select category</option>
                                        <option value="antibiotic">Antibiotic</option>
                                        <option value="analgesic">Analgesic</option>
                                        <option value="antiviral">Antiviral</option>
                                        <option value="antidiabetic">Antidiabetic</option>
                                        <option value="antihistamine">Antihistamine</option>
                                        <option value="antihypertensive">Antihypertensive</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="dosageForm" class="block text-sm font-medium text-gray-700 mb-1">Dosage
                                        Form *</label>
                                    <select id="dosageForm"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                        <option value="">Select dosage form</option>
                                        <option value="tablet">Tablet</option>
                                        <option value="capsule">Capsule</option>
                                        <option value="syrup">Syrup</option>
                                        <option value="injection">Injection</option>
                                        <option value="cream">Cream</option>
                                        <option value="ointment">Ointment</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="strength" class="block text-sm font-medium text-gray-700 mb-1">Strength
                                        *</label>
                                    <input type="text" id="strength" placeholder="e.g. 500mg"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="composition" class="block text-sm font-medium text-gray-700 mb-1">Active
                                        Ingredients *</label>
                                    <textarea id="composition" rows="4"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required></textarea>
                                </div>

                                <div>
                                    <label for="manufactureDate"
                                        class="block text-sm font-medium text-gray-700 mb-1">Manufacturing Date
                                        *</label>
                                    <input type="date" id="manufactureDate"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="expiryDate" class="block text-sm font-medium text-gray-700 mb-1">Expiry
                                        Date *</label>
                                    <input type="date" id="expiryDate"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="storageConditions"
                                        class="block text-sm font-medium text-gray-700 mb-1">Storage Conditions</label>
                                    <input type="text" id="storageConditions"
                                        placeholder="e.g. Store in a cool, dry place"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="manufacturer"
                                        class="block text-sm font-medium text-gray-700 mb-1">Manufacturer *</label>
                                    <input type="text" id="manufacturer"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="countryOfOrigin"
                                        class="block text-sm font-medium text-gray-700 mb-1">Country of Origin *</label>
                                    <input type="text" id="countryOfOrigin"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="indication"
                                        class="block text-sm font-medium text-gray-700 mb-1">Indication</label>
                                    <textarea id="indication" rows="3"
                                        placeholder="What conditions does this drug treat?"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="sideEffects" class="block text-sm font-medium text-gray-700 mb-1">Side
                                        Effects</label>
                                    <textarea id="sideEffects" rows="3"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>

                                <div class="mt-8 flex items-center">
                                    <button type="submit" class="bg-green-600 rounded-lg p-2 text-white">Generate QR
                                        Code</button>
                                </div>
                            </div>

                            <div class="mt-8 flex justify-end">
                                <button type="button" id="cancelRegistration"
                                    class="mr-3 px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Register Drug
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </main>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const registerDrugBtn = document.getElementById('registerDrugBtn');
                const registerSection = document.getElementById('registerForm');

                registerDrugBtn.addEventListener('click', function () {
                    registerSection.classList.remove('hidden');
                    registerSection.scrollIntoView({ behavior: 'smooth' });
                });

                const cancelButton = document.getElementById('cancelRegistration');
                cancelButton.addEventListener('click', function () {
                    registerSection.classList.add('hidden');
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            });

            //Drop down 
            document.addEventListener('DOMContentLoaded', function () {
                const profileButton = document.getElementById('profileButton');
                const profileDropdown = document.getElementById('profileDropdown');

                profileButton.addEventListener('click', () => {
                    profileDropdown.classList.toggle('hidden');
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', (e) => {
                    if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                        profileDropdown.classList.add('hidden');
                    }
                });
            });


            //Tabs
            // Get the batch tracking tab and section
            const batchesTab = document.getElementById('batchesTab');
            const productsTab = document.getElementById('productsTab');
            const registerTab = document.getElementById('registerTab');
            const batchesSection = document.getElementById('batchesSection');
            const productsSection = document.getElementById('productsSection');
            const registerSection = document.getElementById('registerSection');

            // Function to show batch tracking section
            function showBatches() {
                // Show batches section, hide products
                batchesSection.classList.remove('hidden');
                productsSection.classList.add('hidden');

                // Update tab styling
                batchesTab.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
                batchesTab.classList.remove('text-gray-500');
                productsTab.classList.add('text-gray-500');
                productsTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
                registerTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
            }

            //Funtion to show products section
            function showProducts() {
                productsSection.classList.remove('hidden');
                batchesSection.classList.add('hidden');

                productsTab.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
                productsTab.classList.remove('text-gray-500');
                batchesTab.classList.add('text-gray-500');
                batchesTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
            }

            //function to show registration section
            function showRegistration() {
                productsSection.classList.add('hidden');
                batchesSection.classList.add('hidden');
                registrationSection.classList.remove('hidden');

                registerTab.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
                registerTab.classList.remove('text-gray-500');
                productsTab.classList.add('text-gray-500');
                productsTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
                batchesTab.classList.add('text-gray-500');
                batchesTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
            }


            // Add click event listener
            batchesTab.addEventListener('click', showBatches);
            productsTab.addEventListener('click', showProducts);
            registerTab.addEventListener('click', showRegistration);

            const form = document.getElementById('drug-registration-form');
            let qrCode;

            function generateQrCode(drugData) {
                // Clear previous QR code
                document.getElementById('qr-code').innerHTML = '';

                // Generate new QR code
                return new QRCode("qr-code", {
                    text: JSON.stringify(drugData),
                    width: 256,
                    height: 256,
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    correctLevel: QRCode.CorrectLevel.H,
                });
            }

            form.addEventListener("submit", function (event) {
                event.preventDefault();

                const drugData = {
                    drugName: document.getElementById('drugName').value,
                    manufacturer: document.getElementById('manufacturer').value,
                    manufactureDate: document.getElementById('manufactureDate').value,
                    expiryDate: document.getElementById('expiryDate').value,
                    batchId: 'BTH-' + Date.now()
                };

                if (qrCode == null) {
                    qrCode = generateQrCode(drugData);
                } else {
                    qrCode.makeCode(JSON.stringify(drugData));
                }
            });
        </script>


</body>

</html>