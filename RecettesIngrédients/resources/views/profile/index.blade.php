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

    <!-- Profile Section -->
    <section class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="flex items-end gap-6 mb-8">
                <!-- Avatar -->
                <div class="relative">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="Profile" class="w-32 h-32 rounded-full border-4 border-green-600 shadow-lg">
                    <button class="absolute bottom-0 right-0 bg-green-600 text-white p-2 rounded-full hover:bg-green-700 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Info -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Sarah Johnson</h2>
                    <p class="text-gray-600 mt-1">@sarahjohnson • Joined March 2023</p>
                    <p class="text-gray-600 mt-2">🏠 San Francisco, CA</p>
                    <p class="text-gray-600">Love cooking Italian and fusion cuisine!</p>
                </div>
            </div>

            <!-- Edit Profile Button -->
            <button class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                Edit Profile
            </button>
        </div>
    </section>

    <!-- Navigation Tabs -->
    <div class="bg-white border-b border-gray-200 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex space-x-8">
                <a href="profile" class="py-4 px-1 border-b-2 border-green-600 text-green-600 font-semibold">
                    Overview
                </a>
                <a href="profile-recipes" class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
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
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Stats Cards -->
            <div class="col-span-3">
                <div class="grid md:grid-cols-4 gap-6 mb-12">
                    <!-- Recipes Count -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Recipes Published</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">24</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Followers -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Followers</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">342</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM6 20H1v-2a6 6 0 016-6v0a6 6 0 016 6v2H6z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Total Likes -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Total Likes</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">1.2k</p>
                            </div>
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Views -->
                    <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Total Views</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">5.8k</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg border border-gray-200 p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-6">Recent Activity</h3>
                    
                    <div class="space-y-4">
                        <!-- Activity Item 1 -->
                        <div class="flex items-start gap-4 pb-4 border-b border-gray-200">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Published "Perfect Margherita Pizza"</p>
                                <p class="text-gray-600 text-sm">2 hours ago</p>
                            </div>
                        </div>

                        <!-- Activity Item 2 -->
                        <div class="flex items-start gap-4 pb-4 border-b border-gray-200">
                            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Liked "Thai Green Curry"</p>
                                <p class="text-gray-600 text-sm">4 hours ago</p>
                            </div>
                        </div>

                        <!-- Activity Item 3 -->
                        <div class="flex items-start gap-4 pb-4 border-b border-gray-200">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Commented on "Chocolate Cake"</p>
                                <p class="text-gray-600 text-sm">1 day ago</p>
                            </div>
                        </div>

                        <!-- Activity Item 4 -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM6 20H1v-2a6 6 0 016-6v0a6 6 0 016 6v2H6z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Gained 5 new followers</p>
                                <p class="text-gray-600 text-sm">3 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Badges & Achievements -->
            <div>
                <div class="bg-white rounded-lg border border-gray-200 p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-6">Achievements</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                            <div class="text-2xl">🏆</div>
                            <div>
                                <p class="font-semibold text-gray-900">Top Chef</p>
                                <p class="text-xs text-gray-600">10+ recipes published</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-yellow-50 rounded-lg">
                            <div class="text-2xl">⭐</div>
                            <div>
                                <p class="font-semibold text-gray-900">Popular</p>
                                <p class="text-xs text-gray-600">1k+ total likes</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg">
                            <div class="text-2xl">💬</div>
                            <div>
                                <p class="font-semibold text-gray-900">Conversationalist</p>
                                <p class="text-xs text-gray-600">Active commenter</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg opacity-50">
                            <div class="text-2xl">🎯</div>
                            <div>
                                <p class="font-semibold text-gray-900">Locked</p>
                                <p class="text-xs text-gray-600">More to unlock</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>