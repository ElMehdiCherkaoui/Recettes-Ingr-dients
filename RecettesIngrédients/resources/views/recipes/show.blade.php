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
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <style media="print">
        body {
            background: white;
        }

        .no-print {
            display: none !important;
        }

        section {
            page-break-inside: avoid;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-50 to-slate-100 min-h-screen">

    <!-- HERO SECTION -->
    <section class="relative h-[65vh] overflow-hidden group">
        <!-- Background Image -->
        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}"
            class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>

        <!-- Top Right Actions -->
        <div class="absolute top-6 right-6 z-50 flex gap-3">
            <a href="{{ route('recipes.pdf', $recipe->id) }}"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-full font-semibold transition flex items-center gap-2 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 19l9 2-9-18-9 18 9-2m0 0v-8m0 8l-6-4m6 4l6-4"></path>
                </svg>
                PDF
            </a>
        </div>

        <!-- Hero Content -->
        <div class="relative max-w-7xl mx-auto px-6 h-full flex items-end pb-12">
            <div class="text-white w-full">
                <!-- Category Badge -->
                <div
                    class="inline-flex items-center gap-2 bg-green-600/90 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-green-400/50">
                    <span class="text-sm font-semibold">{{ $recipe->category->name }}</span>
                </div>

                <!-- Title -->
                <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight max-w-4xl drop-shadow-lg">
                    {{ $recipe->title }}
                </h1>

                <!-- Description -->
                <p class="text-lg opacity-95 max-w-2xl leading-relaxed drop-shadow-md">
                    {{ Str::limit($recipe->description, 200) }}
                </p>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-6 mt-8 text-sm opacity-90">
                    <div class="flex items-center gap-2">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $recipe->user->id }}"
                            alt="{{ $recipe->user->name }}" class="w-8 h-8 rounded-full border border-white/50">
                        <span class="font-medium">{{ $recipe->user->name }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                            </path>
                        </svg>
                        <span>{{ $recipe->created_at->format('M d, Y') }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <span>4.8 <span class="opacity-75">(124 reviews)</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- LEFT COLUMN -->
            <div class="lg:col-span-2 space-y-8">

                <!-- QUICK STATS -->
                <div class="grid grid-cols-3 gap-4 bg-white rounded-2xl p-6 shadow-sm">
                    <div class="text-center">
                        <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide mb-2">Prep Time</p>
                        <p class="text-3xl font-bold text-green-600">
                            {{ $recipe->prep_time ?? '10' }}
                        </p>
                        <p class="text-gray-500 text-xs">minutes</p>
                    </div>
                    <div class="text-center border-l border-r border-gray-200">
                        <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide mb-2">Cook Time</p>
                        <p class="text-3xl font-bold text-green-600">
                            {{ $recipe->cook_time ?? '20' }}
                        </p>
                        <p class="text-gray-500 text-xs">minutes</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide mb-2">Servings</p>
                        <p class="text-3xl font-bold text-green-600">
                            {{ $recipe->servings ?? '4' }}
                        </p>
                        <p class="text-gray-500 text-xs">people</p>
                    </div>
                </div>

                <!-- INGREDIENTS -->
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                        <h2 class="text-3xl font-bold text-gray-900">Ingredients</h2>
                    </div>

                    <div class="space-y-3">
                        @if ($recipe->ingredients && is_array($recipe->ingredients))
                            @foreach ($recipe->ingredients as $ingredient)
                                <label
                                    class="flex items-center p-4 bg-gradient-to-r from-green-50 to-transparent rounded-xl hover:shadow-md transition cursor-pointer group">
                                    <input type="checkbox" class="w-6 h-6 text-green-600 rounded-lg cursor-pointer">
                                    <span class="ml-4 text-gray-800 group-hover:text-green-700 transition">
                                        {{ $ingredient }}
                                    </span>
                                </label>
                            @endforeach
                        @elseif($recipe->ingredient)
                            <label
                                class="flex items-center p-4 bg-gradient-to-r from-green-50 to-transparent rounded-xl hover:shadow-md transition cursor-pointer group">
                                <input type="checkbox" class="w-6 h-6 text-green-600 rounded-lg cursor-pointer">
                                <span class="ml-4 text-gray-800 group-hover:text-green-700 transition">
                                    {{ $recipe->ingredient->name ?? 'Ingredient' }}
                                </span>
                            </label>
                        @else
                            <p class="text-gray-500 italic">No ingredients listed yet</p>
                        @endif
                    </div>
                </div>

                <!-- INSTRUCTIONS -->
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                        <h2 class="text-3xl font-bold text-gray-900">Instructions</h2>
                    </div>

                    @if ($recipe->steps && is_array($recipe->steps))
                        <div class="space-y-6">
                            @foreach ($recipe->steps as $index => $step)
                                <div class="flex gap-6">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-center w-10 h-10 rounded-full bg-green-600 text-white font-bold text-lg shadow-md">
                                            {{ $index + 1 }}
                                        </div>
                                    </div>
                                    <div class="pt-1">
                                        <p class="text-gray-700 leading-relaxed">{{ $step }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="prose prose-sm max-w-none text-gray-700 leading-relaxed">
                            {{ nl2br($recipe->steps) }}
                        </div>
                    @endif
                </div>

            </div>

            <!-- RIGHT SIDEBAR -->
            <aside class="space-y-8">

                <!-- RECIPE INFO CARD -->
                <div class="bg-white rounded-2xl p-8 shadow-sm top-24">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Recipe Info
                    </h3>

                    <div class="space-y-5">
                        <!-- Category -->
                        <div class="flex items-start justify-between pb-5 border-b border-gray-100">
                            <span class="text-gray-600 font-semibold">Category</span>
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $recipe->category->name }}
                            </span>
                        </div>

                        <!-- Author -->
                        <div class="flex items-start justify-between pb-5 border-b border-gray-100">
                            <span class="text-gray-600 font-semibold">Author</span>
                            <span class="text-gray-900 font-medium">{{ $recipe->user->name }}</span>
                        </div>

                        <!-- Published -->
                        <div class="flex items-start justify-between pb-5 border-b border-gray-100">
                            <span class="text-gray-600 font-semibold">Published</span>
                            <span class="text-gray-900 font-medium">{{ $recipe->created_at->diffForHumans() }}</span>
                        </div>

                        <!-- Rating -->
                        <div class="flex items-start justify-between pb-5 border-b border-gray-100">
                            <span class="text-gray-600 font-semibold">Rating</span>
                            <div class="flex items-center gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 {{ $i < 4 ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                        </path>
                                    </svg>
                                @endfor
                                <span class="text-sm text-gray-600 ml-1">4.8</span>
                            </div>
                        </div>

                        <!-- Difficulty -->
                        <div class="flex items-start justify-between">
                            <span class="text-gray-600 font-semibold">Difficulty</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                Medium
                            </span>
                        </div>
                    </div>
                </div>

                <!-- AUTHOR CARD -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-green-200">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">About the Author</h3>
                    <div class="text-center">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ $recipe->user->id }}"
                            alt="{{ $recipe->user->name }}"
                            class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white shadow-md">
                        <h4 class="font-bold text-gray-900 text-lg">{{ $recipe->user->name }}</h4>
                        <p class="text-sm text-gray-600 mt-2">Food enthusiast & home chef</p>
                        <button
                            class="w-full mt-6 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition shadow-md hover:shadow-lg">
                            Follow Author
                        </button>
                    </div>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="space-y-3">
                    <button
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg transition shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                        Save Recipe
                    </button>
                    <button
                        class="w-full border-2 border-green-600 text-green-600 hover:bg-green-50 font-semibold py-3 px-4 rounded-lg transition flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.684 13.342C9.589 12.43 10 11.129 10 9.5 10 5.91 7.612 3 4.5 3S-1 5.91-1 9.5 1.388 16 4.5 16c1.747 0 3.238.571 4.5 1.53m0 0l6 4m0 0l4-2.757M14.5 17.5L20.5 22">
                            </path>
                        </svg>
                        Share
                    </button>
                </div>

            </aside>

        </div>
    </section>


    <!-- COMMENTS SECTION -->
    <section class="max-w-7xl mx-auto px-6 py-16 border-t border-gray-200">
        <h2 class="text-3xl font-bold text-gray-900 mb-12">Comments (5)</h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            <!-- Comments List -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Comment 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=sarah" alt="Sarah Johnson"
                            class="w-12 h-12 rounded-full border-2 border-gray-100">

                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                <span class="text-sm text-gray-600">2 days ago</span>
                            </div>

                            <p class="text-gray-700 leading-relaxed mb-4">
                                Absolutely delicious! Made this last night and my family loved it. The creamy sauce is
                                just perfect. Will definitely make it again!
                            </p>

                            <div class="flex items-center gap-4 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4">
                                        </path>
                                    </svg>
                                    <span>12</span>
                                </button>
                                <button
                                    class="text-green-600 hover:text-green-700 font-semibold transition">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=michael" alt="Michael Chen"
                            class="w-12 h-12 rounded-full border-2 border-gray-100">

                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                <span class="text-sm text-gray-600">4 days ago</span>
                            </div>

                            <p class="text-gray-700 leading-relaxed mb-4">
                                Great recipe! I couldn't find guanciale at my local store, so I used pancetta instead
                                and it still turned out delicious. Thanks for sharing!
                            </p>

                            <div class="flex items-center gap-4 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4">
                                        </path>
                                    </svg>
                                    <span>8</span>
                                </button>
                                <button
                                    class="text-green-600 hover:text-green-700 font-semibold transition">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=emma" alt="Emma Wilson"
                            class="w-12 h-12 rounded-full border-2 border-gray-100">

                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="font-bold text-gray-900">Emma Wilson</h4>
                                <span class="text-sm text-gray-600">1 week ago</span>
                            </div>

                            <p class="text-gray-700 leading-relaxed mb-4">
                                This is my go-to recipe now! So easy to make and tastes just like the restaurants. My
                                date was impressed!
                            </p>

                            <div class="flex items-center gap-4 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4">
                                        </path>
                                    </svg>
                                    <span>23</span>
                                </button>
                                <button
                                    class="text-green-600 hover:text-green-700 font-semibold transition">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment 4 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=david" alt="David Martinez"
                            class="w-12 h-12 rounded-full border-2 border-gray-100">

                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="font-bold text-gray-900">David Martinez</h4>
                                <span class="text-sm text-gray-600">10 days ago</span>
                            </div>

                            <p class="text-gray-700 leading-relaxed mb-4">
                                Pro tip: Cook your pasta one minute less than the package says for the perfect al dente
                                texture. This recipe is a game-changer!
                            </p>

                            <div class="flex items-center gap-4 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4">
                                        </path>
                                    </svg>
                                    <span>31</span>
                                </button>
                                <button
                                    class="text-green-600 hover:text-green-700 font-semibold transition">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment 5 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
                    <div class="flex gap-4">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=jessica" alt="Jessica Lee"
                            class="w-12 h-12 rounded-full border-2 border-gray-100">

                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="font-bold text-gray-900">Jessica Lee</h4>
                                <span class="text-sm text-gray-600">2 weeks ago</span>
                            </div>

                            <p class="text-gray-700 leading-relaxed mb-4">
                                Made this for dinner party last weekend. Everyone asked for the recipe! This is now my
                                favorite pasta dish ever.
                            </p>

                            <div class="flex items-center gap-4 text-sm text-gray-600">
                                <button class="flex items-center gap-1 hover:text-red-600 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.646 7.23a2 2 0 01-1.788 1.106H2a2 2 0 01-2-2V8a2 2 0 012-2h1.657a2 2 0 011.414.586l2.828 2.829a2 2 0 001.414.586h2.328a2 2 0 012 2v1m-9-8v8m9-4h4">
                                        </path>
                                    </svg>
                                    <span>45</span>
                                </button>
                                <button
                                    class="text-green-600 hover:text-green-700 font-semibold transition">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="flex justify-center pt-6">
                    <button
                        class="border-2 border-green-600 text-green-600 hover:bg-green-50 font-semibold py-3 px-8 rounded-xl transition">
                        Load More Comments
                    </button>
                </div>

            </div>

            <!-- Add Comment Form Sidebar -->
            <div
                class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-green-200 h-fit sticky top-24">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    Add a Comment
                </h3>

                <form class="space-y-4">

                    <div>
                        <label class="block text-sm font-semibold text-gray-900 mb-2">Your Comment</label>
                        <textarea placeholder="Share your thoughts about this recipe..." rows="5"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-xl transition shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2m0 0v-8m0 8l-6-4m6 4l6-4"></path>
                        </svg>
                        Post Comment
                    </button>

                    <!-- Info Text -->
                    <p class="text-xs text-gray-600 text-center">
                        Be respectful and helpful. Comments help others!
                    </p>
                </form>
            </div>

        </div>
    </section>

    </div>
    </section>

</body>

</html>
