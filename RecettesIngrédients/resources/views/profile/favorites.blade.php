<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Recipes - RecipeHub</title>
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
                <a href="#" class="hover:text-green-200 transition font-semibold">Profile</a>
                <a href="comments" class="hover:text-green-200 transition">Comments</a>
                             <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
        Logout
    </button>
</form>
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
                <a href="profile-recipes" class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    My Recipes
                </a>
                <a href="profile-favorites" class="py-4 px-1 border-b-2 border-green-600 text-green-600 font-semibold">
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
            <h2 class="text-2xl font-bold text-gray-900">Favorite Recipes (18)</h2>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                <option>All Categories</option>
                <option>Italian</option>
                <option>Asian</option>
                <option>Desserts</option>
            </select>
        </div>

        <!-- Favorite Recipes Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Recipe Card 1 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400&h=300&fit=crop" alt="Pasta Carbonara" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <button class="absolute top-3 right-3 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Pasta Carbonara</h3>
                    <p class="text-gray-600 text-sm mt-1">By John Doe • Italian</p>
                    <p class="text-gray-600 text-sm mt-2">A classic Roman pasta with creamy sauce and crispy guanciale</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span>4.8</span>
                        </div>
                        <div class="flex-1 text-right text-sm">
                            <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" alt="Thai Green Curry" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <button class="absolute top-3 right-3 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Thai Green Curry</h3>
                    <p class="text-gray-600 text-sm mt-1">By Jane Smith • Asian</p>
                    <p class="text-gray-600 text-sm mt-2">Aromatic Thai curry with green peppers and basil</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span>4.9</span>
                        </div>
                        <div class="flex-1 text-right text-sm">
                            <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400&h=300&fit=crop" alt="Chocolate Cake" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <button class="absolute top-3 right-3 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Chocolate Cake</h3>
                    <p class="text-gray-600 text-sm mt-1">By Mike Brown • Desserts</p>
                    <p class="text-gray-600 text-sm mt-2">Rich and fudgy chocolate cake with buttercream</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span>4.7</span>
                        </div>
                        <div class="flex-1 text-right text-sm">
                            <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 4 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=400&h=300&fit=crop" alt="Grilled Salmon" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <button class="absolute top-3 right-3 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Grilled Salmon</h3>
                    <p class="text-gray-600 text-sm mt-1">By Robert Lee • Seafood</p>
                    <p class="text-gray-600 text-sm mt-2">Perfectly grilled salmon with lemon and herbs</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span>4.6</span>
                        </div>
                        <div class="flex-1 text-right text-sm">
                            <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 5 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=300&fit=crop" alt="Caesar Salad" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <button class="absolute top-3 right-3 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Caesar Salad</h3>
                    <p class="text-gray-600 text-sm mt-1">By Emma Wilson • Salads</p>
                    <p class="text-gray-600 text-sm mt-2">Classic Caesar salad with homemade dressing</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span>4.5</span>
                        </div>
                        <div class="flex-1 text-right text-sm">
                            <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Card 6 -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-300 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" alt="Beef Stew" class="w-full h-full object-cover group-hover:scale-105 transition">
                    <button class="absolute top-3 right-3 bg-red-600 text-white p-2 rounded-full hover:bg-red-700 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900">Beef Stew</h3>
                    <p class="text-gray-600 text-sm mt-1">By David Clark • Main Course</p>
                    <p class="text-gray-600 text-sm mt-2">Hearty beef stew with vegetables and rich gravy</p>
                    <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                        <div class="flex items-center gap-1 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span>4.8</span>
                        </div>
                        <div class="flex-1 text-right text-sm">
                            <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>