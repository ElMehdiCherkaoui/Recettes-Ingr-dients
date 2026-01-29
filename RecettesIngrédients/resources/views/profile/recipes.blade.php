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
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z">
                    </path>
                </svg>
                <h1 class="text-2xl font-bold">RecipeHub</h1>
            </div>
            <div class="flex items-center space-x-6">
                <a href="recipes" class="hover:text-green-200 transition">Recipes</a>
                <a href="#" class="hover:text-green-200 transition font-semibold">Profile</a>
                <a href="comments" class="hover:text-green-200 transition">Comments</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
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
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="Profile"
                    class="w-24 h-24 rounded-full border-4 border-green-600">
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
                <a href="profile"
                    class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Overview
                </a>
                <a href="profile-recipes" class="py-4 px-1 border-b-2 border-green-600 text-green-600 font-semibold">
                    My Recipes
                </a>
                <a href="profile-favorites"
                    class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Favorites
                </a>
                <a href="profile-comments"
                    class="py-4 px-1 border-b-2 border-transparent text-gray-600 hover:text-gray-900 hover:border-gray-300 transition">
                    Comments
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header with Filter -->
        <div class="mb-8 flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900">
                My Recipes ({{ $recipes->count() }})
            </h2>

            <div class="flex items-center gap-4">
       
                <a href="recipes-create"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                    + Add Recipe
                </a>
            </div>
        </div>

        <!-- Recipes Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse ($recipes as $recipe)
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition">
            
            <div class="relative h-48 bg-gray-300">
                <img
                    src="{{ asset('storage/' . $recipe->image) }}"
                    alt="{{ $recipe->title }}"
                    class="w-full h-full object-cover"
                >

                <div class="absolute top-3 right-3
                    {{ $recipe->isRecipeOfDay ? 'bg-orange-600' : 'bg-green-600' }}
                    text-white px-3 py-1 rounded-full text-xs font-semibold">
                    {{ $recipe->isRecipeOfDay ? 'Recipe of the Day' : 'Published' }}
                </div>
            </div>

            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-900">
                    {{ $recipe->title }}
                </h3>

                <p class="text-gray-600 text-sm mt-1">
                    {{ $recipe->category->name }}
                </p>

                <div class="flex items-center gap-4 mt-4 pt-4 border-t border-gray-200">
                    <div class="flex-1 text-right flex gap-3 justify-end">

                        <a
                            href="{{ route('recipes.edit', $recipe) }}"
                            class="text-green-600 hover:text-green-700 font-semibold text-sm">
                            Edit
                        </a>

                        <form
                            method="POST"
                            action="{{ route('recipes.destroy', $recipe) }}"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')

                            <button
                                class="text-red-600 hover:text-red-700 font-semibold text-sm">
                                Delete
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="text-gray-500 col-span-full text-center">
            You haven’t added any recipes yet.
        </p>
    @endforelse
</div>

    </div>
</body>

</html>
