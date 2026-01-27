<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe of the Day - RecipeHub Admin</title>
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
                <a href="dashboard" class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100 transition-all">
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
                <a href="recipe-of-the-day" class="sidebar-active flex items-center px-4 py-3 rounded-lg transition-all">
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
                    <h2 class="text-3xl font-bold text-gray-900">Recipe of the Day</h2>
                    <p class="text-gray-600 mt-1">Select and manage the featured recipe</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content Area -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Currently Featured -->
                        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h3 class="text-lg font-bold text-gray-900">Currently Featured</h3>
                            </div>

                            <div class="p-6">
                                <div class="relative w-full h-64 bg-gray-200 rounded-lg overflow-hidden mb-6">
                                    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=600&h=400&fit=crop" alt="Recipe" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                                        <div>
                                            <h4 class="text-2xl font-bold text-white">Homemade Pasta Carbonara</h4>
                                            <p class="text-gray-200 mt-1">By John Doe</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div>
                                        <p class="text-sm font-bold text-gray-600 mb-1">Category</p>
                                        <p class="text-gray-900">Italian</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-600 mb-1">Featured Since</p>
                                        <p class="text-gray-900">January 25, 2024</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-600 mb-1">Description</p>
                                        <p class="text-gray-700">A classic Roman pasta dish made with eggs, cheese, and guanciale. Simple yet delicious.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Select New Recipe -->
                        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                                <h3 class="text-lg font-bold text-gray-900">Select New Recipe</h3>
                            </div>

                            <div class="p-6">
                                <input type="text" placeholder="Search recipes..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 mb-4">

                                <div class="space-y-2 max-h-80 overflow-y-auto">
                                    <!-- Recipe Option 1 -->
                                    <label class="flex items-start p-4 border border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 cursor-pointer transition-all">
                                        <input type="radio" name="recipe" value="1" class="mt-1 mr-4">
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900">Thai Green Curry</h4>
                                            <p class="text-sm text-gray-600 mt-1">By Jane Smith • Asian</p>
                                            <div class="flex items-center space-x-4 mt-2 text-xs text-gray-500">
                                                <span>⭐ 4.8 (245 reviews)</span>
                                                <span>👁️ 1.2k views</span>
                                            </div>
                                        </div>
                                    </label>

                                    <!-- Recipe Option 2 -->
                                    <label class="flex items-start p-4 border border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 cursor-pointer transition-all">
                                        <input type="radio" name="recipe" value="2" class="mt-1 mr-4">
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900">Chocolate Chip Cookies</h4>
                                            <p class="text-sm text-gray-600 mt-1">By Mike Johnson • Desserts</p>
                                            <div class="flex items-center space-x-4 mt-2 text-xs text-gray-500">
                                                <span>⭐ 4.9 (567 reviews)</span>
                                                <span>👁️ 3.4k views</span>
                                            </div>
                                        </div>
                                    </label>

                                    <!-- Recipe Option 3 -->
                                    <label class="flex items-start p-4 border border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 cursor-pointer transition-all">
                                        <input type="radio" name="recipe" value="3" class="mt-1 mr-4">
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900">Sushi Rolls Assortment</h4>
                                            <p class="text-sm text-gray-600 mt-1">By Sarah Lee • Asian</p>
                                            <div class="flex items-center space-x-4 mt-2 text-xs text-gray-500">
                                                <span>⭐ 4.7 (432 reviews)</span>
                                                <span>👁️ 2.1k views</span>
                                            </div>
                                        </div>
                                    </label>

                                    <!-- Recipe Option 4 -->
                                    <label class="flex items-start p-4 border border-gray-200 rounded-lg hover:border-orange-500 hover:bg-orange-50 cursor-pointer transition-all">
                                        <input type="radio" name="recipe" value="4" class="mt-1 mr-4">
                                        <div class="flex-1">
                                            <h4 class="font-bold text-gray-900">Beef Tacos Al Pastor</h4>
                                            <p class="text-sm text-gray-600 mt-1">By Carlos Martinez • Mexican</p>
                                            <div class="flex items-center space-x-4 mt-2 text-xs text-gray-500">
                                                <span>⭐ 4.6 (298 reviews)</span>
                                                <span>👁️ 1.8k views</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>

                                <button class="w-full bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600 transition-all mt-6">
                                    Update Recipe of the Day
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Today's Stats -->
                        <div class="bg-white rounded-lg border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-6">Today's Stats</h3>
                            <div class="space-y-6">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-gray-600">Views</span>
                                        <span class="text-2xl font-bold text-gray-900">2.4k</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-500 h-2 rounded-full" style="width: 65%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-gray-600">Clicks</span>
                                        <span class="text-2xl font-bold text-gray-900">892</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 55%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-gray-600">Favorites</span>
                                        <span class="text-2xl font-bold text-gray-900">156</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-red-500 h-2 rounded-full" style="width: 35%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Changes -->
                        <div class="bg-white rounded-lg border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-6">Recent Changes</h3>
                            <div class="space-y-4">
                                <div class="pb-4 border-b border-gray-200">
                                    <p class="font-medium text-gray-900">Homemade Pasta Carbonara</p>
                                    <p class="text-xs text-gray-500 mt-1">Featured by Admin • 2 days ago</p>
                                </div>
                                <div class="pb-4 border-b border-gray-200">
                                    <p class="font-medium text-gray-900">Classic Margherita Pizza</p>
                                    <p class="text-xs text-gray-500 mt-1">Featured by Admin • 5 days ago</p>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Thai Pad See Ew</p>
                                    <p class="text-xs text-gray-500 mt-1">Featured by Admin • 8 days ago</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tips -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1a1 1 0 100 2h2a1 1 0 100-2H7zm4 0a1 1 0 100 2h2a1 1 0 100-2h-2zm4 0a1 1 0 100 2h.01a1 1 0 100-2H15z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <h4 class="font-bold text-blue-900 mb-1">Tip</h4>
                                    <p class="text-sm text-blue-800">Choose recipes with high engagement and ratings for best results. Update daily for consistent traffic.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>