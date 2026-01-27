<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Recipes - RecipeHub Admin</title>
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
                <a href="recipes" class="sidebar-active flex items-center px-4 py-3 rounded-lg transition-all">
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
                <div class="mb-8 flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Recipes</h2>
                        <p class="text-gray-600 mt-1">Manage all recipes in your platform</p>
                    </div>
                    <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition-all font-medium flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Add Recipe
                    </button>
                </div>

                <!-- Search & Filter -->
                <div class="bg-white rounded-lg border border-gray-200 p-4 mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <input type="text" placeholder="Search recipes..." class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="">All Status</option>
                            <option value="published">Published</option>
                            <option value="pending">Pending</option>
                            <option value="rejected">Rejected</option>
                        </select>
                        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="">All Categories</option>
                            <option value="italian">Italian</option>
                            <option value="asian">Asian</option>
                            <option value="desserts">Desserts</option>
                        </select>
                        <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-all font-medium">
                            Filter
                        </button>
                    </div>
                </div>

                <!-- Recipes Table -->
                <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">
                                    <input type="checkbox" class="rounded">
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Recipe Name</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Author</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Category</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Status</th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900">Created</th>
                                <th class="px-6 py-4 text-right text-sm font-bold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Recipe Row 1 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <input type="checkbox" class="rounded">
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-medium text-gray-900">Homemade Pasta Carbonara</p>
                                    <p class="text-sm text-gray-500">Updated 2 hours ago</p>
                                </td>
                                <td class="px-6 py-4 text-gray-900">John Doe</td>
                                <td class="px-6 py-4 text-gray-900">Italian</td>
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Published</span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">Jan 15, 2024</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-orange-500 hover:text-orange-700 font-medium text-sm">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 font-medium text-sm ml-4">Delete</button>
                                </td>
                            </tr>

                            <!-- Recipe Row 2 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <input type="checkbox" class="rounded">
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-medium text-gray-900">Thai Green Curry</p>
                                    <p class="text-sm text-gray-500">Updated 4 hours ago</p>
                                </td>
                                <td class="px-6 py-4 text-gray-900">Jane Smith</td>
                                <td class="px-6 py-4 text-gray-900">Asian</td>
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-bold rounded-full">Pending</span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">Jan 20, 2024</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-orange-500 hover:text-orange-700 font-medium text-sm">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 font-medium text-sm ml-4">Delete</button>
                                </td>
                            </tr>

                            <!-- Recipe Row 3 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <input type="checkbox" class="rounded">
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-medium text-gray-900">Chocolate Chip Cookies</p>
                                    <p class="text-sm text-gray-500">Updated 1 day ago</p>
                                </td>
                                <td class="px-6 py-4 text-gray-900">Mike Johnson</td>
                                <td class="px-6 py-4 text-gray-900">Desserts</td>
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Published</span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">Jan 10, 2024</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-orange-500 hover:text-orange-700 font-medium text-sm">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 font-medium text-sm ml-4">Delete</button>
                                </td>
                            </tr>

                            <!-- Recipe Row 4 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <input type="checkbox" class="rounded">
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-medium text-gray-900">Vegetarian Buddha Bowl</p>
                                    <p class="text-sm text-gray-500">Updated 3 days ago</p>
                                </td>
                                <td class="px-6 py-4 text-gray-900">Sarah Wilson</td>
                                <td class="px-6 py-4 text-gray-900">Vegetarian</td>
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 bg-red-100 text-red-700 text-xs font-bold rounded-full">Rejected</span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">Jan 5, 2024</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-orange-500 hover:text-orange-700 font-medium text-sm">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 font-medium text-sm ml-4">Delete</button>
                                </td>
                            </tr>

                            <!-- Recipe Row 5 -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <input type="checkbox" class="rounded">
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-medium text-gray-900">Margherita Pizza</p>
                                    <p class="text-sm text-gray-500">Updated 2 days ago</p>
                                </td>
                                <td class="px-6 py-4 text-gray-900">Marco Rossi</td>
                                <td class="px-6 py-4 text-gray-900">Italian</td>
                                <td class="px-6 py-4">
                                    <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Published</span>
                                </td>
                                <td class="px-6 py-4 text-gray-500">Dec 28, 2023</td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-orange-500 hover:text-orange-700 font-medium text-sm">Edit</button>
                                    <button class="text-red-500 hover:text-red-700 font-medium text-sm ml-4">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                        <p class="text-sm text-gray-600">Showing <span class="font-bold">1</span> to <span class="font-bold">5</span> of <span class="font-bold">245</span> recipes</p>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-all">Previous</button>
                            <button class="px-4 py-2 bg-orange-500 text-white rounded-lg">1</button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-all">2</button>
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-all">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>