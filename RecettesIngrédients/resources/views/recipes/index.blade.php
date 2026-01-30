<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes - RecipeHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* Smooth animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .animate-slide-down {
            animation: slideDown 0.4s ease-out;
        }

        /* Gradient text effect */
        .gradient-text {
            background: linear-gradient(135deg, #059669 0%, #0d9488 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Smooth hover effects */
        .recipe-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .recipe-card:hover {
            transform: translateY(-8px);
        }

        /* Glow effect on hover */
        .glow-on-hover {
            position: relative;
            transition: all 0.3s ease;
        }

        .glow-on-hover:hover {
            box-shadow: 0 20px 25px -5px rgba(16, 185, 129, 0.15), 0 10px 10px -5px rgba(16, 185, 129, 0.1);
        }
    </style>
</head>

<body class="bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <!-- Header -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-50 backdrop-blur-sm bg-white/95">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-3 group cursor-pointer">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-emerald-400 to-teal-500 rounded-lg opacity-75 group-hover:opacity-100 blur transition-opacity duration-300">
                    </div>
                    <div class="relative bg-white rounded-lg p-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17c0 5.523 4.477 10 10 10s10-4.477 10-10c0-6.002-4.5-10.747-10-10.747z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h1 class="text-2xl font-bold text-gray-900">RecipeHub</h1>
            </div>
            <div class="flex items-center space-x-8">
                <a href="#"
                    class="text-gray-700 hover:text-emerald-600 transition font-medium text-sm">Recipes</a>
                <a href="profile"
                    class="text-gray-600 hover:text-emerald-600 transition font-medium text-sm">Profile</a>
                <a href="comments"
                    class="text-gray-600 hover:text-emerald-600 transition font-medium text-sm">Comments</a>
                <button
                    class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white px-6 py-2.5 rounded-lg font-semibold hover:shadow-lg transition-all duration-300 hover:from-emerald-700 hover:to-teal-700 text-sm">Logout</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative py-16 overflow-hidden">
        <!-- Decorative background elements -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-100 rounded-full blur-3xl opacity-30 -z-10"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-teal-100 rounded-full blur-3xl opacity-30 -z-10"></div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="animate-fade-up">
                <h1 class="font-display text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Discover <span class="gradient-text">Amazing Recipes</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
                    Explore thousands of delicious recipes from our passionate community of home chefs and culinary
                    enthusiasts
                </p>
            </div>
        </div>
    </section>

    <!-- Search & Filter -->
    <form method="POST" action="{{ route('recipes.filter') }}">
        @csrf

        <section class="bg-white border-b border-gray-100 sticky top-16 z-40 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 py-8">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">

                    <!-- Search -->
                    <div class="md:col-span-2">
                        <input type="text" name="search" value="{{ old('search') }}"
                            placeholder="Search recipes, ingredients..."
                            class="w-full px-4 py-3 border rounded-xl focus:ring-emerald-500">
                    </div>

                    <!-- Category -->
                    <div class="md:col-span-2">
                        <select name="category" onchange="this.form.submit()"
                            class="w-full px-4 py-3 border rounded-xl">
                            <option value="">All Categories</option>

                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">
                                    {{ $categorie->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <!-- Filter Button -->
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-xl transition duration-200">
                            Filter
                        </button>
                    </div>

                </div>
            </div>
        </section>
    </form>


    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-2xl font-bold text-gray-900 pb-4">
            Recipes ({{ $recipes->count() }})
        </h2>

        <!-- Recipes Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($recipes as $recipe)
                <a href="{{ route('recipes.show', $recipe) }}"
                    class="group relative h-full bg-white rounded-2xl overflow-hidden transition-all duration-500 hover:shadow-2xl">

                    <!-- GRADIENT OVERLAY BACKGROUND -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-50 via-white to-amber-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- IMAGE CONTAINER -->
                    <div class="relative h-56 bg-gradient-to-br from-gray-100 to-gray-200 overflow-hidden">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">

                        <!-- RECIPE OF THE DAY BADGE -->
                        @if ($recipe->isRecipeOfDay)
                            <div
                                class="absolute top-4 right-4 backdrop-blur-md bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-4 py-2 rounded-full text-xs font-bold tracking-wide shadow-lg transform group-hover:scale-105 transition-transform duration-300">
                                ⭐ Recipe of the Day
                            </div>
                        @endif

                        @if ($recipe->comments_count >= 5)
                            <div
                                class="absolute top-4 left-4 bg-emerald-600 text-white px-3 py-1 rounded-full text-xs font-bold shadow">
                                🔥 Popular
                            </div>
                        @endif


                        <!-- CATEGORY TAG -->
                        <div
                            class="absolute bottom-4 left-4 backdrop-blur-sm bg-white/90 text-gray-900 px-3 py-1.5 rounded-lg text-xs font-semibold tracking-wide shadow-md">
                            {{ $recipe->category->name }}
                        </div>

                        <!-- DECORATIVE ACCENT -->
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-amber-300/20 to-transparent rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                        </div>
                    </div>

                    <!-- CONTENT SECTION -->
                    <div class="relative p-6 space-y-4">

                        <!-- TITLE -->
                        <h3
                            class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors duration-300 line-clamp-2">
                            {{ $recipe->title }}
                        </h3>

                        <!-- AUTHOR -->
                        <div class="flex items-center gap-2 text-sm text-gray-600">
                            <span
                                class="inline-block w-6 h-6 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500"></span>
                            <span>By <span class="font-semibold text-gray-900">{{ $recipe->user->name }}</span></span>
                        </div>

                        <!-- DESCRIPTION -->
                        <p class="text-gray-600 text-sm leading-relaxed line-clamp-2">
                            {{ $recipe->description }}
                        </p>

                        <!-- METADATA -->
                        <div class="space-y-2 pt-3">
                            <div class="flex items-center gap-3 text-sm text-gray-500">
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-amber-100 text-amber-700">
                                    🍽️
                                </span>
                                <span class="truncate">{{ $recipe->ingredient->name }}</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-gray-500">
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-blue-100 text-blue-700">
                                    🕒
                                </span>
                                <span>{{ $recipe->created_at->diffForHumans() }}</span>
                            </div>


                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-500">
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-green-100 text-green-700">
                                💬
                            </span>
                            <span>{{ $recipe->comments_count }} comments</span>
                        </div>

                        <!-- CTA BUTTON -->
                        <div class="pt-3 border-t border-gray-200/50">
                            <div
                                class="flex items-center justify-between text-sm font-semibold text-emerald-600 group-hover:text-emerald-700 transition-colors duration-300">
                                <span>Explore Recipe</span>
                                <span class="group-hover:translate-x-1 transition-transform duration-300">→</span>
                            </div>
                        </div>
                    </div>

                    <!-- DECORATIVE BORDER ACCENT -->
                    <div
                        class="absolute inset-0 rounded-2xl border border-emerald-200/0 group-hover:border-emerald-200/50 transition-colors duration-500 pointer-events-none">
                    </div>
                </a>
            @endforeach
        </div>


        <!-- Pagination -->
        <div class="mt-16 flex items-center justify-center gap-2">
            <button
                class="px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-emerald-200 transition font-medium text-gray-700 text-sm">
                ← Previous
            </button>
            <button
                class="px-4 py-2.5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white rounded-lg font-semibold hover:shadow-lg transition-all duration-300 text-sm">1</button>
            <button
                class="px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-emerald-200 transition font-medium text-gray-700 text-sm">2</button>
            <button
                class="px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-emerald-200 transition font-medium text-gray-700 text-sm">3</button>
            <button
                class="px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-emerald-200 transition font-medium text-gray-700 text-sm">4</button>
            <button
                class="px-4 py-2.5 border border-gray-200 rounded-lg hover:bg-gray-50 hover:border-emerald-200 transition font-medium text-gray-700 text-sm">
                Next →
            </button>
        </div>
    </div>
</body>

</html>
