<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta Carbonara - RecipeHub</title>
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
                <a href="#" class="hover:text-green-200 transition">Profile</a>
                <a href="comments" class="hover:text-green-200 transition">Comments</a>
                <button class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Logout</button>
            </div>
        </div>
    </header>

    <!-- Hero Image -->
    <div class="relative h-96 bg-gray-300 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=1200&h=400&fit=crop" alt="Pasta Carbonara" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        <button class="absolute top-6 right-6 bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
            </svg>
            Print / PDF
        </button>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-12">
            <!-- Left Column -->
            <div class="md:col-span-2">
                <!-- Title & Author -->
                <div class="mb-8">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">Italian</span>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-3">Homemade Pasta Carbonara</h1>
                    <div class="flex items-center gap-6 text-gray-600">
                        <div class="flex items-center gap-2">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="John Doe" class="w-8 h-8 rounded-full">
                            <span>By John Doe</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span class="font-bold">4.8</span>
                            <span>(124 reviews)</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Info -->
                <div class="grid grid-cols-3 gap-4 mb-8 pb-8 border-b border-gray-200">
                    <div class="text-center">
                        <p class="text-gray-600 text-sm">Prep Time</p>
                        <p class="text-2xl font-bold text-green-600">10 mins</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 text-sm">Cook Time</p>
                        <p class="text-2xl font-bold text-green-600">20 mins</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 text-sm">Servings</p>
                        <p class="text-2xl font-bold text-green-600">4 people</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">About This Recipe</h2>
                    <p class="text-gray-600 leading-relaxed">A classic Roman pasta dish made with eggs, cheese, and guanciale. This authentic Carbonara recipe is simple yet delicious, with creamy sauce that coats every strand of spaghetti. Perfect for a quick weeknight dinner or special occasion!</p>
                </div>

                <!-- Ingredients -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Ingredients</h2>
                    <div class="space-y-3">
                        <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-50 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded">
                            <span class="ml-3 text-gray-700">400g spaghetti</span>
                        </label>
                        <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-50 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded">
                            <span class="ml-3 text-gray-700">200g guanciale, diced</span>
                        </label>
                        <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-50 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded">
                            <span class="ml-3 text-gray-700">4 large eggs</span>
                        </label>
                        <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-50 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded">
                            <span class="ml-3 text-gray-700">100g Pecorino Romano cheese, grated</span>
                        </label>
                        <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-50 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded">
                            <span class="ml-3 text-gray-700">Black pepper to taste</span>
                        </label>
                        <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-green-50 cursor-pointer">
                            <input type="checkbox" class="w-5 h-5 text-green-600 rounded">
                            <span class="ml-3 text-gray-700">Salt for pasta water</span>
                        </label>
                    </div>
                </div>

                <!-- Instructions -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Instructions</h2>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-600 text-white font-bold">1</div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Cook the pasta</h3>
                                <p class="text-gray-600">Bring a large pot of salted water to boil and cook spaghetti until al dente, about 9-10 minutes. Reserve 1 cup of pasta water before draining.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-600 text-white font-bold">2</div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Cook the guanciale</h3>
                                <p class="text-gray-600">While pasta cooks, fry diced guanciale in a large skillet over medium heat until crispy, about 5-7 minutes. Do not drain the fat.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-600 text-white font-bold">3</div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Prepare the egg mixture</h3>
                                <p class="text-gray-600">In a bowl, whisk together eggs, grated Pecorino Romano, and plenty of black pepper. Set aside.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-600 text-white font-bold">4</div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Combine everything</h3>
                                <p class="text-gray-600">Add hot drained pasta to the skillet with guanciale. Remove from heat and quickly add egg mixture while tossing constantly. Add pasta water as needed for creamy sauce.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-8 w-8 rounded-full bg-green-600 text-white font-bold">5</div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Serve immediately</h3>
                                <p class="text-gray-600">Divide among plates and serve immediately while hot. Garnish with additional cheese and black pepper if desired.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tips -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-8">
                    <h3 class="font-bold text-blue-900 mb-3">💡 Pro Tips</h3>
                    <ul class="text-blue-800 space-y-2">
                        <li>• Never use bacon as a substitute - authentic Carbonara requires guanciale</li>
                        <li>• The heat of the pasta cooks the eggs - work quickly to avoid scrambled eggs</li>
                        <li>• Use whole eggs, not just yolks, for the best creamy texture</li>
                    </ul>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div>
                <!-- Action Buttons -->
                <div class="space-y-3 mb-8 top-6">
                    <button class="w-full bg-green-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-green-700 transition flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                        Save to Favorites
                    </button>
                    <button class="w-full border-2 border-green-600 text-green-600 font-bold py-3 px-4 rounded-lg hover:bg-green-50 transition flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Print / PDF
                    </button>
                    <button class="w-full border-2 border-gray-300 text-gray-700 font-bold py-3 px-4 rounded-lg hover:bg-gray-50 transition flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C9.589 12.430 10 11.129 10 9.5 10 5.91 7.612 3 4.5 3S-1 5.91-1 9.5 1.388 16 4.5 16c1.747 0 3.238.571 4.5 1.53m0 0l6 4m0 0l4-2.757M14.5 17.5L20.5 22"></path>
                        </svg>
                        Share Recipe
                    </button>
                </div>

                <!-- Stats -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
                    <h3 class="font-bold text-gray-900 mb-4">Stats</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">❤️ Favorites</span>
                            <span class="font-bold text-gray-900">1.2k</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">👁️ Views</span>
                            <span class="font-bold text-gray-900">5.8k</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">💬 Comments</span>
                            <span class="font-bold text-gray-900">234</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">⭐ Rating</span>
                            <span class="font-bold text-gray-900">4.8/5</span>
                        </div>
                    </div>
                </div>

                <!-- Author Card -->
                <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
                    <h3 class="font-bold text-gray-900 mb-4">About The Author</h3>
                    <div class="text-center">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="John Doe" class="w-16 h-16 rounded-full mx-auto mb-3">
                        <h4 class="font-bold text-gray-900">John Doe</h4>
                        <p class="text-sm text-gray-600">Food blogger & home chef</p>
                        <p class="text-sm text-gray-600 mt-2">Sharing authentic Italian recipes and cooking tips</p>
                        <button class="w-full mt-4 bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition">Follow Author</button>
                    </div>
                </div>

                <!-- Tags -->
                <div class="bg-white rounded-lg border border-gray-200 p-6">
                    <h3 class="font-bold text-gray-900 mb-4">Tags</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">Pasta</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">Italian</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">Quick Dinner</span>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">Easy</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="mt-16 pt-12 border-t border-gray-200">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Comments (45)</h2>
            
            <div class="space-y-6">
                <!-- Comment 1 -->
                <div class="bg-white rounded-lg border border-gray-200 p-6">
                    <div class="flex items-start gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=user1" alt="User" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                <span class="text-sm text-gray-600">2 hours ago</span>
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <span class="text-sm font-semibold">5</span>
                            </div>
                            <p class="text-gray-700">This is absolutely amazing! I made this for dinner last night and my family loved it. The creamy sauce is just perfect.</p>
                            <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                                    </svg>
                                    <span>12</span>
                                </button>
                                <button class="text-green-600 hover:text-green-700 font-semibold">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment 2 -->
                <div class="bg-white rounded-lg border border-gray-200 p-6">
                    <div class="flex items-start gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=user2" alt="User" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                <span class="text-sm text-gray-600">4 hours ago</span>
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <span class="text-sm font-semibold">4.5</span>
                            </div>
                            <p class="text-gray-700">Great recipe! I couldn't find guanciale so I used pancetta instead and it still turned out delicious.</p>
                            <div class="flex items-center gap-4 mt-3 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4"></path>
                                    </svg>
                                    <span>8</span>
                                </button>
                                <button class="text-green-600 hover:text-green-700 font-semibold">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Comment -->
            <div class="mt-8 bg-white rounded-lg border border-gray-200 p-6">
                <h3 class="font-bold text-gray-900 mb-4">Leave a Comment</h3>
                <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600 mb-3" rows="4" placeholder="Share your thoughts about this recipe..."></textarea>
                <button class="bg-green-600 text-white font-bold py-2 px-6 rounded-lg hover:bg-green-700 transition">Post Comment</button>
            </div>
        </div>
    </div>
</body>
</html>