@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gradient-to-br from-green-50 to-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">

        <!-- Text -->
        <div>
            <span class="inline-block mb-4 text-sm font-semibold text-green-600 bg-green-100 px-3 py-1 rounded-full">
                Share • Discover • Inspire
            </span>

            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                Share Your Passion for <span class="text-green-600">Cooking</span>
            </h1>

            <p class="text-gray-600 text-lg mb-8">
                RecipeHub is a collaborative platform where cooking lovers share their
                best recipes, discover new flavors, and exchange culinary tips
                in a friendly community.
            </p>

            <div class="flex items-center space-x-4">
                <a href="/login"
                   class="bg-green-600 text-white px-6 py-3 rounded-full font-semibold
                          hover:bg-green-700 transition">
                    Login to Explore
                </a>

                <a href="/register"
                   class="text-green-600 font-semibold hover:underline">
                    Create an account
                </a>
            </div>
        </div>

        <!-- Image -->
        <div class="hidden md:block">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836"
                 alt="Cooking"
                 class="rounded-2xl shadow-lg">
        </div>

    </div>
</section>

<!-- FEATURES -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Everything You Need to Cook Better
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                RecipeHub gives you all the tools to share, discover, and improve
                your cooking experience.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Card -->
            <div class="p-8 border rounded-2xl hover:shadow-lg transition">
                <div class="text-green-600 text-3xl mb-4">🍳</div>
                <h3 class="text-xl font-semibold mb-2">Share Recipes</h3>
                <p class="text-gray-600">
                    Publish your recipes with ingredients, steps, and images
                    to inspire other members.
                </p>
            </div>

            <div class="p-8 border rounded-2xl hover:shadow-lg transition">
                <div class="text-green-600 text-3xl mb-4">🔍</div>
                <h3 class="text-xl font-semibold mb-2">Discover & Search</h3>
                <p class="text-gray-600">
                    Browse recipes by category or search by keywords to find
                    the perfect dish.
                </p>
            </div>

            <div class="p-8 border rounded-2xl hover:shadow-lg transition">
                <div class="text-green-600 text-3xl mb-4">💬</div>
                <h3 class="text-xl font-semibold mb-2">Interact</h3>
                <p class="text-gray-600">
                    Comment, share tips, and connect with a community of
                    passionate cooks.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- STATISTICS PREVIEW -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">

        <div>
            <p class="text-4xl font-bold text-green-600">500+</p>
            <p class="text-gray-600 mt-2">Recipes Shared</p>
        </div>

        <div>
            <p class="text-4xl font-bold text-green-600">1K+</p>
            <p class="text-gray-600 mt-2">Active Members</p>
        </div>

        <div>
            <p class="text-4xl font-bold text-green-600">Daily</p>
            <p class="text-gray-600 mt-2">Recipe of the Day</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-green-600 text-white">
    <div class="max-w-3xl mx-auto text-center px-6">
        <h2 class="text-3xl font-bold mb-4">
            Ready to Join the Community?
        </h2>
        <p class="mb-8 text-green-100">
            Log in now and start sharing your favorite recipes with people
            who love cooking as much as you do.
        </p>

        <a href="/login"
           class="inline-block bg-white text-green-600 px-8 py-3 rounded-full
                  font-semibold hover:bg-gray-100 transition">
            Login Now
        </a>
    </div>
</section>

@endsection
