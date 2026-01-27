<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Recipes - RecipeHub</title>
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
                <a href="recipes" class="hover:text-green-200 transition">Recipes</a>
                <a href="#" class="hover:text-green-200 transition font-semibold"">Profile</a>
                <a href="comments" class="hover:text-green-200 transition">Comments</a>
                <button class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Logout</button>
            </div>
        </div>
    </header>

    <!-- Profile Header -->
    <section class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex items-end gap-6 mb-8">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="Profile" class="w-24 h-24 rounded-full border-4 border-green-600">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Sarah Johnson</h2>
                    <p class="text-gray-600">@sarahjohnson</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Tabs -->
    <div class="bg-white border-b border-gray-200 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex space-x-8">
                <a href="profile" class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Overview
                </a>
                <a href="profile-recipes" class="py-4 px-1 border-b-2 border-green-600 text-green-600 font-semibold">
                    My Recipes
                </a>
                <a href="profile-favorites" class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Favorites
                </a>
                <a href="profile-comments" class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Comments
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header with Filter -->
        <div class="mb-8 flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900">My Recipes (24)</h2>
            <div class="flex items-center gap-4">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    <option>All Categories</option>
                    <option>Italian</option>
                    <option>Asian</option>
                    <option>Desserts</option>
                </select>
                <a href="recipes-create" class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                    + Add Recipe
                </a>
            </div>
        </div>

        <!-- Recipes Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Recipe Card 1 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-300">
                    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400&h=300&fit=crop" alt="Pasta Carbonara" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Published</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Pasta Carbonara</h3>
                    <p class="text-gray-600 text-sm mt-1">Italian • 30 mins</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span>124</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span>23</span>
                        </div>
                        <div class="flex-1 text-right">
                            <a href="recipes-edit" class="text-green-600 hover:text-green-700 font-semibold text-sm">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-300">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" alt="Thai Green Curry" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Pending</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Thai Green Curry</h3>
                    <p class="text-gray-600 text-sm mt-1">Asian • 45 mins</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span>89</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span>12</span>
                        </div>
                        <div class="flex-1 text-right">
                            <button class="text-green-600 hover:text-green-700 font-semibold text-sm">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-300">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=300&fit=crop" alt="Chocolate Cake" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Published</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Chocolate Cake</h3>
                    <p class="text-gray-600 text-sm mt-1">Desserts • 60 mins</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span>234</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span>45</span>
                        </div>
                        <div class="flex-1 text-right">
                            <button class="text-green-600 hover:text-green-700 font-semibold text-sm">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-300">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=400&h=300&fit=crop" alt="Grilled Salmon" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Published</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Grilled Salmon</h3>
                    <p class="text-gray-600 text-sm mt-1">Seafood • 25 mins</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span>156</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span>34</span>
                        </div>
                        <div class="flex-1 text-right">
                            <button class="text-green-600 hover:text-green-700 font-semibold text-sm">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 5 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-300">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=300&fit=crop" alt="Caesar Salad" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Published</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Caesar Salad</h3>
                    <p class="text-gray-600 text-sm mt-1">Salads • 15 mins</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span>98</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span>18</span>
                        </div>
                        <div class="flex-1 text-right">
                            <button class="text-green-600 hover:text-green-700 font-semibold text-sm">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 6 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
                <div class="relative h-48 bg-gray-300">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" alt="Beef Stew" class="w-full h-full object-cover">
                    <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Published</div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Beef Stew</h3>
                    <p class="text-gray-600 text-sm mt-1">Main Course • 120 mins</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <span>167</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span>27</span>
                        </div>
                        <div class="flex-1 text-right">
                            <button class="text-green-600 hover:text-green-700 font-semibold text-sm">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>