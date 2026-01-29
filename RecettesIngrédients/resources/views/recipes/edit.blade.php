<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes - RecipeHub</title>
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
            <a href="recipes" class="hover:text-green-200 transition font-semibold">Recipes</a>
            <a href="profile" class="hover:text-green-200 transition">Profile</a>
            <a href="comments" class="hover:text-green-200 transition">Comments</a>
            <button
                class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Logout</button>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="" class="text-green-600 hover:text-green-700 font-semibold">Recipes</a>
            <span class="text-gray-400">/</span>
            <a href="" class="text-green-600 hover:text-green-700 font-semibold"></a>
            <span class="text-gray-400">/</span>
            <span class="text-gray-600">Edit</span>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-5xl mx-auto px-6 py-12">
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-900 mb-2">Edit Recipe</h1>
        <p class="text-gray-600">Update your recipe details</p>
    </div>

    <form action="{{ route('recipes.update', $recipe) }}" method="POST" enctype="multipart/form-data"
        class="space-y-8">
        @csrf
        @method('POST') <!-- Using POST route for update -->

        <!-- hidden user -->
        <input type="hidden" name="users_id" value="{{ auth()->id() }}">

        <!-- BASIC INFO -->
        <div class="bg-white rounded-lg border p-8">
            <h2 class="text-2xl font-bold mb-6">Basic Information</h2>

            <!-- Title -->
            <div class="mb-6">
                <label class="block font-semibold mb-2">Recipe Title *</label>
                <input type="text" name="title" required class="w-full px-4 py-3 border rounded-lg"
                    value="{{ old('title', $recipe->title) }}">
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block font-semibold mb-2">Description *</label>
                <textarea name="description" rows="4" required class="w-full px-4 py-3 border rounded-lg">{{ old('description', $recipe->description) }}</textarea>
            </div>

            <!-- Steps -->
            <div class="mb-6">
                <label class="block font-semibold mb-2">Steps *</label>
                <textarea name="steps" rows="5" required class="w-full px-4 py-3 border rounded-lg">{{ old('steps', $recipe->steps) }}</textarea>
            </div>

            <!-- Image -->
            <div class="mb-6">
                <label class="block font-semibold mb-2">Recipe Image</label>

                @if ($recipe->image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="Recipe Image"
                            class="h-48 w-48 object-cover rounded-lg">
                        <label class="flex items-center gap-2 mt-3">
                            <input type="checkbox" name="remove_image" value="1" class="w-4 h-4 text-red-600">
                            <span class="text-sm text-gray-600">Remove current image</span>
                        </label>
                    </div>
                @endif

                <input type="file" name="image" class="w-full px-4 py-3 border rounded-lg">
            </div>
        </div>

        <!-- RELATIONS -->
        <div class="bg-white rounded-lg border p-8">
            <h2 class="text-2xl font-bold mb-6">Relations</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Category -->
                <div>
                    <label class="block font-semibold mb-2">Category *</label>
                    <select name="categories_id" required class="w-full px-4 py-3 border rounded-lg">
                        <option value="">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $recipe->categories_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Ingredient -->
                <div>
                    <label class="block font-semibold mb-2">Main Ingredient *</label>
                    <select name="ingredients_id" required class="w-full px-4 py-3 border rounded-lg">
                        <option value="">Select ingredient</option>
                        @foreach ($ingredients as $ingredient)
                            <option value="{{ $ingredient->id }}"
                                {{ $recipe->ingredients_id == $ingredient->id ? 'selected' : '' }}>
                                {{ $ingredient->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- SUBMIT -->
        <div class="flex justify-between bg-white rounded-lg border p-8">
            <a href="{{ route('recipes.index') }}" class="text-gray-600 font-semibold">
                Cancel
            </a>

            <button type="submit" class="bg-green-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-green-700">
                Save Changes
            </button>
        </div>
    </form>




    <form id="delete-form" action="" method="POST" class="hidden">

    </form>
</div>

<script>
    function addIngredient() {
        const container = document.getElementById('ingredients-container');
        const item = document.createElement('div');
        item.className = 'ingredient-item flex gap-3';
        item.innerHTML = `
        <input type="text" name="ingredients[]" placeholder="e.g., 400g spaghetti" 
            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
        <button type="button" onclick="removeIngredient(this)" class="text-red-600 hover:text-red-700 font-semibold">Remove</button>
    `;
        container.appendChild(item);
    }

    function removeIngredient(btn) {
        btn.parentElement.remove();
    }

    function addInstruction() {
        const container = document.getElementById('instructions-container');
        const item = document.createElement('div');
        item.className = 'instruction-item flex gap-3';
        item.innerHTML = `
        <textarea name="instructions[]" rows="3" placeholder="Step..."
            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
        <button type="button" onclick="removeInstruction(this)" class="text-red-600 hover:text-red-700 font-semibold">Remove</button>
    `;
        container.appendChild(item);
    }

    function removeInstruction(btn) {
        btn.parentElement.remove();
    }

    const dropZone = document.getElementById('image-drop-zone');
    dropZone.addEventListener('click', function() {
        document.getElementById('image').click();
    });

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.style.borderColor = '#16a34a';
        dropZone.style.backgroundColor = '#f0fdf4';
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.style.borderColor = '#d1d5db';
        dropZone.style.backgroundColor = 'transparent';
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            document.getElementById('image').files = files;
        }
        dropZone.style.borderColor = '#d1d5db';
        dropZone.style.backgroundColor = 'transparent';
    });
</script>
