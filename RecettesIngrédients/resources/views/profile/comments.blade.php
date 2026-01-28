<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Comments - RecipeHub</title>
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
                <a href="profile-favorites" class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Favorites
                </a>
                <a href="profile-comments" class="py-4 px-1 border-b-2 border-green-600 text-green-600 font-semibold">
                    Comments
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header -->
        <h2 class="text-2xl font-bold text-gray-900 mb-8">My Comments (42)</h2>

        <!-- Comments List -->
        <div class="space-y-6">
            
            <!-- Comment 1 -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="font-bold text-gray-900">On "Pasta Carbonara"</h3>
                        <p class="text-sm text-gray-600 mt-1">Posted 2 hours ago</p>
                    </div>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <p class="text-gray-700">"This is absolutely amazing! I made this for dinner last night and my family loved it. The creamy sauce is just perfect. Will definitely make this again!"</p>
                </div>

                <div class="flex items-center gap-4 text-sm">
                    <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                        </svg>
                        <span>12</span>
                    </button>
                    <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <span>3</span>
                    </button>
                    <button class="text-green-600 hover:text-green-700 font-semibold ml-auto">Edit</button>
                </div>
            </div>

            <!-- Comment 2 -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="font-bold text-gray-900">On "Thai Green Curry"</h3>
                        <p class="text-sm text-gray-600 mt-1">Posted 5 hours ago</p>
                    </div>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <p class="text-gray-700">"Do you have suggestions for making this less spicy? I want to make it for my kids but they don't handle heat well."</p>
                </div>

                <div class="flex items-center gap-4 text-sm">
                    <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                        </svg>
                        <span>5</span>
                    </button>
                    <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <span>1</span>
                    </button>
                    <button class="text-green-600 hover:text-green-700 font-semibold ml-auto">Edit</button>
                </div>
            </div>

            <!-- Comment 3 -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="font-bold text-gray-900">On "Chocolate Cake"</h3>
                        <p class="text-sm text-gray-600 mt-1">Posted 1 day ago</p>
                    </div>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <p class="text-gray-700">"The best chocolate cake recipe I've found! Moist, fudgy, and rich. I made it 3 times already. ⭐⭐⭐⭐⭐"</p>
                </div>

                <div class="flex items-center gap-4 text-sm">
                    <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                        </svg>
                        <span>34</span>
                    </button>
                    <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <span>8</span>
                    </button>
                    <button class="text-green-600 hover:text-green-700 font-semibold ml-auto">Edit</button>
                </div>
            </div>

            <!-- Comment 4 -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="font-bold text-gray-900">On "Grilled Salmon"</h3>
                        <p class="text-sm text-gray-600 mt-1">Posted 2 days ago</p>
                    </div>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <p class="text-gray-700">"Great recipe! I used wild salmon and added some garlic butter. Turned out perfectly. Thanks for sharing!"</p>
                </div>

                <div class="flex items-center gap-4 text-sm">
                    <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                        </svg>
                        <span>18</span>
                    </button>
                    <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <span>4</span>
                    </button>
                    <button class="text-green-600 hover:text-green-700 font-semibold ml-auto">Edit</button>
                </div>
            </div>

            <!-- Comment 5 -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 hover:shadow-lg transition">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="font-bold text-gray-900">On "Caesar Salad"</h3>
                        <p class="text-sm text-gray-600 mt-1">Posted 3 days ago</p>
                    </div>
                    <button class="text-gray-400 hover:text-red-600 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <p class="text-gray-700">"Love this! The homemade dressing is so much better than store-bought. Will be using this recipe regularly."</p>
                </div>

                <div class="flex items-center gap-4 text-sm">
                    <button class="flex items-center gap-1 text-gray-600 hover:text-red-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                        </svg>
                        <span>7</span>
                    </button>
                    <button class="flex items-center gap-1 text-gray-600 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <span>2</span>
                    </button>
                    <button class="text-green-600 hover:text-green-700 font-semibold ml-auto">Edit</button>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex items-center justify-between">
            <p class="text-gray-600">Showing 1-5 of 42 comments</p>
            <div class="flex items-center gap-2">
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Previous</button>
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg">1</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">2</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">3</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">Next</button>
            </div>
        </div>
    </div>
</body>
</html>