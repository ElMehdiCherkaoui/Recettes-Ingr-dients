<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes - RecipeHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
                </svg>
                <h1 class="text-2xl font-bold">RecipeHub</h1>
            </div>
            <div class="flex items-center space-x-6">
                <a href="recipes" class="hover:text-green-200 transition font-semibold">Recipes</a>
                <a href="profile" class="hover:text-green-200 transition">Profile</a>
                <a href="comments" class="hover:text-green-200 transition">Comments</a>
                <button class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Logout</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-50 to-white py-12">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Discover Amazing Recipes</h1>
            <p class="text-gray-600 text-lg">Explore thousands of recipes from our community of passionate cooks</p>
        </div>
    </section>

    <!-- Search & Filter -->
    <section class="bg-white border-b border-gray-200 sticky top-0 z-20">
        <div class="max-w-7xl mx-auto px-6 py-6">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <!-- Search -->
                <div class="md:col-span-2">
                    <div class="relative">
                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="Search recipes, ingredients..." class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                </div>

                <!-- Category Filter -->
                <div>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        <option value="">All Categories</option>
                        <option value="italian">Italian</option>
                        <option value="asian">Asian</option>
                        <option value="american">American</option>
                        <option value="desserts">Desserts</option>
                        <option value="salads">Salads</option>
                        <option value="seafood">Seafood</option>
                    </select>
                </div>

                <!-- Difficulty Filter -->
                <div>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        <option value="">All Levels</option>
                        <option value="easy">Easy</option>
                        <option value="medium">Medium</option>
                        <option value="hard">Hard</option>
                    </select>
                </div>

                <!-- Time Filter -->
                <div>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        <option value="">All Times</option>
                        <option value="15">Under 15 mins</option>
                        <option value="30">Under 30 mins</option>
                        <option value="60">Under 1 hour</option>
                        <option value="120">Over 1 hour</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Results Count -->
        <div class="mb-8 flex items-center justify-between">
            <p class="text-gray-600">Showing <span class="font-bold">1-12</span> of <span class="font-bold">456</span> recipes</p>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                <option value="">Sort by Newest</option>
                <option value="">Sort by Popular</option>
                <option value="">Sort by Rating</option>
                <option value="">Sort by Trending</option>
            </select>
        </div>

        <!-- Recipes Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Recipe Card 1 -->
            <a href="recipes-show" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400&h=300&fit=crop" alt="Pasta Carbonara" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Featured</div>
                    <div class="absolute bottom-3 left-3 space-y-1">
                        <span class="inline-block bg-white text-gray-900 px-2 py-1 rounded text-xs font-semibold">Italian</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">Pasta Carbonara</h3>
                    <p class="text-gray-600 text-sm mt-1">By John Doe</p>
                    
                    <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            4.8
                        </span>
                        <span>⏱️ 30 mins</span>
                        <span>👨‍🍳 Medium</span>
                    </div>

                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-200">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="text-xs">124</span>
                        </button>
                        <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="text-xs">23</span>
                        </button>
                    </div>
                </div>
            </a>

            <!-- Recipe Card 2 -->
            <a href="recipes-show" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" alt="Thai Green Curry" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <div class="absolute bottom-3 left-3 space-y-1">
                        <span class="inline-block bg-white text-gray-900 px-2 py-1 rounded text-xs font-semibold">Asian</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">Thai Green Curry</h3>
                    <p class="text-gray-600 text-sm mt-1">By Jane Smith</p>
                    
                    <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            4.9
                        </span>
                        <span>⏱️ 45 mins</span>
                        <span>👨‍🍳 Medium</span>
                    </div>

                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-200">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="text-xs">234</span>
                        </button>
                        <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="text-xs">45</span>
                        </button>
                    </div>
                </div>
            </a>

            <!-- Recipe Card 3 -->
            <a href="recipes-show" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=300&fit=crop" alt="Chocolate Cake" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <div class="absolute bottom-3 left-3 space-y-1">
                        <span class="inline-block bg-white text-gray-900 px-2 py-1 rounded text-xs font-semibold">Desserts</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">Chocolate Cake</h3>
                    <p class="text-gray-600 text-sm mt-1">By Mike Johnson</p>
                    
                    <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            4.7
                        </span>
                        <span>⏱️ 60 mins</span>
                        <span>👨‍🍳 Hard</span>
                    </div>

                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-200">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="text-xs">156</span>
                        </button>
                        <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="text-xs">34</span>
                        </button>
                    </div>
                </div>
            </a>

            <!-- Recipe Card 4 -->
            <a href="recipes-show" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=400&h=300&fit=crop" alt="Grilled Salmon" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <div class="absolute bottom-3 left-3 space-y-1">
                        <span class="inline-block bg-white text-gray-900 px-2 py-1 rounded text-xs font-semibold">Seafood</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">Grilled Salmon</h3>
                    <p class="text-gray-600 text-sm mt-1">By Robert Lee</p>
                    
                    <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            4.8
                        </span>
                        <span>⏱️ 25 mins</span>
                        <span>👨‍🍳 Easy</span>
                    </div>

                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-200">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="text-xs">189</span>
                        </button>
                        <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="text-xs">42</span>
                        </button>
                    </div>
                </div>
            </a>

            <!-- Recipe Card 5 -->
            <a href="recipes-show" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=300&fit=crop" alt="Caesar Salad" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <div class="absolute bottom-3 left-3 space-y-1">
                        <span class="inline-block bg-white text-gray-900 px-2 py-1 rounded text-xs font-semibold">Salads</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">Caesar Salad</h3>
                    <p class="text-gray-600 text-sm mt-1">By Emma Wilson</p>
                    
                    <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            4.6
                        </span>
                        <span>⏱️ 15 mins</span>
                        <span>👨‍🍳 Easy</span>
                    </div>

                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-200">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="text-xs">98</span>
                        </button>
                        <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="text-xs">18</span>
                        </button>
                    </div>
                </div>
            </a>

            <!-- Recipe Card 6 -->
            <a href="recipes-show" class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" alt="Beef Stew" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <div class="absolute bottom-3 left-3 space-y-1">
                        <span class="inline-block bg-white text-gray-900 px-2 py-1 rounded text-xs font-semibold">Main Course</span>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-600 transition">Beef Stew</h3>
                    <p class="text-gray-600 text-sm mt-1">By David Clark</p>
                    
                    <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            4.8
                        </span>
                        <span>⏱️ 120 mins</span>
                        <span>👨‍🍳 Medium</span>
                    </div>

                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-200">
                        <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span class="text-xs">167</span>
                        </button>
                        <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="text-xs">27</span>
                        </button>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex items-center justify-center gap-2">
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Previous</button>
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg">1</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">2</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">3</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">4</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Next</button>
        </div>
    </div>
</body>
</html>