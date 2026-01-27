<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard - RecipeHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<header class="bg-gradient-to-r from-green-600 to-green-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
            </svg>
            <h1 class="text-2xl font-bold">RecipeHub</h1>
        </div>
        <div class="flex items-center space-x-6">
            <a href="/recipes" class="hover:text-green-200 transition font-semibold">Recipes</a>
            <a href="/profile" class="hover:text-green-200 transition">Profile</a>
            <a href="/comments" class="hover:text-green-200 transition font-semibold">Comments</a>
            <button class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Logout</button>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-50 to-white py-12">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">My Comments</h1>
        <p class="text-gray-600 text-lg">View and manage all your recipe comments</p>
    </div>
</section>

<!-- Search & Filter -->
<section class="bg-white border-b border-gray-200 sticky top-0 z-20">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Search -->
            <div class="md:col-span-2">
                <div class="relative">
                    <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" placeholder="Search comments..." class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </div>

            <!-- Filter -->
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                    <option value="">All Comments</option>
                    <option value="recent">Most Recent</option>
                    <option value="oldest">Oldest</option>
                    <option value="liked">Most Liked</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<div class="max-w-5xl mx-auto px-6 py-12">
    <!-- Comments List -->
    <div class="space-y-6">
        
        <!-- Comment 1 -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-start gap-4 flex-1">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=user1" alt="User" class="w-10 h-10 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <h4 class="font-bold text-gray-900">On: Pasta Carbonara</h4>
                            <span class="text-sm text-gray-600">2 hours ago</span>
                        </div>
                        <p class="text-gray-600 text-sm">By Sarah Johnson</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="text-gray-400 hover:text-green-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <p class="text-gray-700">This is absolutely amazing! I made this for dinner last night and my family loved it. The creamy sauce is just perfect.</p>
            </div>

            <div class="flex items-center gap-4 text-sm text-gray-600">
                <button class="flex items-center gap-1 hover:text-red-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                    </svg>
                    <span>12</span>
                </button>
                <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
            </div>
        </div>

        <!-- Comment 2 -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-start gap-4 flex-1">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=user2" alt="User" class="w-10 h-10 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <h4 class="font-bold text-gray-900">On: Thai Green Curry</h4>
                            <span class="text-sm text-gray-600">4 hours ago</span>
                        </div>
                        <p class="text-gray-600 text-sm">By Michael Chen</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="text-gray-400 hover:text-green-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <p class="text-gray-700">Great recipe! I couldn't find guanciale so I used pancetta instead and it still turned out delicious.</p>
            </div>

            <div class="flex items-center gap-4 text-sm text-gray-600">
                <button class="flex items-center gap-1 hover:text-red-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                    </svg>
                    <span>8</span>
                </button>
                <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
            </div>
        </div>

        <!-- Comment 3 -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-start gap-4 flex-1">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=user3" alt="User" class="w-10 h-10 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <h4 class="font-bold text-gray-900">On: Chocolate Cake</h4>
                            <span class="text-sm text-gray-600">1 day ago</span>
                        </div>
                        <p class="text-gray-600 text-sm">By Emma Wilson</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button class="text-gray-400 hover:text-green-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <p class="text-gray-700">Followed the recipe exactly and it turned out perfect! My friends are asking for the recipe already.</p>
            </div>

            <div class="flex items-center gap-4 text-sm text-gray-600">
                <button class="flex items-center gap-1 hover:text-red-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                    </svg>
                    <span>15</span>
                </button>
                <button class="text-green-600 hover:text-green-700 font-semibold">View Recipe</button>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex items-center justify-center gap-2">
        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Previous</button>
        <button class="px-4 py-2 bg-green-600 text-white rounded-lg">1</button>
        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">2</button>
        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">3</button>
        <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Next</button>
    </div>
</div>
