<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - RecipeHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .sidebar-active { @apply bg-orange-500 text-white; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 p-6 flex flex-col">
            <div class="mb-12">
                <h1 class="text-2xl font-bold text-gray-900">RecipeHub</h1>
                <p class="text-sm text-gray-500">Admin Panel</p>
            </div>

            <nav class="flex-1 space-y-2">
                <a href="dashboard" class="sidebar-active flex items-center px-4 py-3 rounded-lg transition-all">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 11l4-4m-4 4l-4-4"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="recipes" class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100 transition-all">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
                    </svg>
                    Recipes
                </a>
                <a href="recipe-of-the-day" class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100 transition-all">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Recipe of the Day
                </a>
            </nav>

            <div class="pt-6 border-t border-gray-200">
                <button class="w-full bg-red-50 text-red-600 font-medium py-2 px-4 rounded-lg hover:bg-red-100 transition-all">
                    Logout
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-auto">
            <div class="p-8">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Dashboard</h2>
                    <p class="text-gray-600 mt-1">Welcome back! Here's what's happening today.</p>
                </div>

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                    <!-- Total Recipes -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-600 font-medium">Total Recipes</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">245</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm text-green-600 font-medium">+12 this month</p>
                    </div>

                    <!-- Published -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-600 font-medium">Published</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">210</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm text-green-600 font-medium">86% of total</p>
                    </div>

                    <!-- Pending -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-600 font-medium">Pending Review</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">23</p>
                            </div>
                            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm text-yellow-600 font-medium">Needs attention</p>
                    </div>

                    <!-- Comments -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-sm text-gray-600 font-medium">Total Comments</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">1,245</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-sm text-green-600 font-medium">+145 this week</p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Recipe Status Chart -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">Recipe Status</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-600">Published</span>
                                    <span class="text-sm font-bold text-gray-900">210 (86%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 86%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-600">Pending</span>
                                    <span class="text-sm font-bold text-gray-900">23 (9%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 9%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm text-gray-600">Rejected</span>
                                    <span class="text-sm font-bold text-gray-900">12 (5%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-500 h-2 rounded-full" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Recipes -->
                    <div class="lg:col-span-2 bg-white rounded-lg border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">Recent Recipes</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                                <div>
                                    <p class="font-medium text-gray-900">Pasta Carbonara</p>
                                    <p class="text-sm text-gray-500">by John Doe • 2 hours ago</p>
                                </div>
                                <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Published</span>
                            </div>
                            <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                                <div>
                                    <p class="font-medium text-gray-900">Thai Green Curry</p>
                                    <p class="text-sm text-gray-500">by Jane Smith • 5 hours ago</p>
                                </div>
                                <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-bold rounded-full">Pending</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Chocolate Cookies</p>
                                    <p class="text-sm text-gray-500">by Mike Johnson • 1 day ago</p>
                                </div>
                                <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Published</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>