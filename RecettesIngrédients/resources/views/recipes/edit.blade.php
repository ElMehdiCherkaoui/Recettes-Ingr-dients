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
            <a href="recipes" class="hover:text-green-200 transition font-semibold">Recipes</a>
            <a href="profile" class="hover:text-green-200 transition">Profile</a>
            <a href="comments" class="hover:text-green-200 transition">Comments</a>
            <button class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">Logout</button>
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

    <form action="" method="POST" enctype="multipart/form-data" class="space-y-8">


  
        <div class="bg-white rounded-lg border border-gray-200 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Basic Information</h2>
            
            <div class="space-y-6">
         
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-900 mb-2">Recipe Title *</label>
                    <input type="text" id="title" name="title" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        value="" required>
               
                        <span class="text-red-600 text-sm mt-1"></span>
            
                </div>

           
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-900 mb-2">Description *</label>
                    <textarea id="description" name="description" rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        required></textarea>
                
                        <span class="text-red-600 text-sm mt-1"></span>
             
                </div>

                <!-- Image Upload -->
                <div>
                    <label for="image" class="block text-sm font-semibold text-gray-900 mb-2">Recipe Image</label>
                
                        <div class="mb-4">
                            <img src="" alt="" class="h-48 w-48 object-cover rounded-lg">
                            <label class="flex items-center gap-2 mt-3">
                                <input type="checkbox" name="remove_image" value="1" class="w-4 h-4 text-red-600">
                                <span class="text-sm text-gray-600">Remove current image</span>
                            </label>
                        </div>
          
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-green-600 transition cursor-pointer"
                        id="image-drop-zone">
                        <svg class="w-12 h-12 mx-auto text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <input type="file" id="image" name="image" accept="image/*" class="hidden">
                        <p class="text-gray-600 mb-2">Drag and drop your image, or <span class="text-green-600 font-semibold">click to select</span></p>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
              
                        <span class="text-red-600 text-sm mt-1"></span>
                 
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-semibold text-gray-900 mb-2">Category *</label>
                        <select id="category" name="category" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" required>
                            <option value="italian" >Italian</option>
                            <option value="asian" >Asian</option>
                            <option value="american" >American</option>
                            <option value="desserts" >Desserts</option>
                            <option value="salads">Salads</option>
                            <option value="seafood" >Seafood</option>
                        </select>
                    
                            <span class="text-red-600 text-sm mt-1"></span>
          
                    </div>

                    <!-- Difficulty Level -->
                    <div>
                        <label for="difficulty" class="block text-sm font-semibold text-gray-900 mb-2">Difficulty Level *</label>
                        <select id="difficulty" name="difficulty" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600" required>
                            <option value="easy" >Easy</option>
                            <option value="medium" >Medium</option>
                            <option value="hard" >Hard</option>
                        </select>
           
                            <span class="text-red-600 text-sm mt-1"></span>
                      
                    </div>
                </div>
            </div>
        </div>

        <!-- Timing & Servings -->
        <div class="bg-white rounded-lg border border-gray-200 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Timing & Servings</h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Prep Time -->
                <div>
                    <label for="prep_time" class="block text-sm font-semibold text-gray-900 mb-2">Prep Time (minutes) *</label>
                    <input type="number" id="prep_time" name="prep_time" min="0"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        value="" required>
                 
                        <span class="text-red-600 text-sm mt-1"></span>
                
                </div>

                <!-- Cook Time -->
                <div>
                    <label for="cook_time" class="block text-sm font-semibold text-gray-900 mb-2">Cook Time (minutes) *</label>
                    <input type="number" id="cook_time" name="cook_time" min="0"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        value="" required>
              
                        <span class="text-red-600 text-sm mt-1"></span>
                 
                </div>

                <!-- Servings -->
                <div>
                    <label for="servings" class="block text-sm font-semibold text-gray-900 mb-2">Servings *</label>
                    <input type="number" id="servings" name="servings" min="1"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                        value="" required>
 
                        <span class="text-red-600 text-sm mt-1"></span>
           
                </div>
            </div>
        </div>

        <!-- Ingredients -->
        <div class="bg-white rounded-lg border border-gray-200 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Ingredients</h2>
            
            <div id="ingredients-container" class="space-y-4 mb-6">

                    <div class="ingredient-item flex gap-3">
                        <input type="text" name="ingredients[]" 
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                            value="">
                        <button type="button" onclick="removeIngredient(this)" class="text-red-600 hover:text-red-700 font-semibold">Remove</button>
                    </div>
 
                    <div class="ingredient-item flex gap-3">
                        <input type="text" name="ingredients[]" placeholder="e.g., 400g spaghetti"
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                        <button type="button" onclick="removeIngredient(this)" class="text-red-600 hover:text-red-700 font-semibold">Remove</button>
                    </div>
          
            </div>

            <button type="button" onclick="addIngredient()" class="text-green-600 hover:text-green-700 font-semibold flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 5v14m7-7H5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                Add Ingredient
            </button>
        </div>

        <!-- Instructions -->
        <div class="bg-white rounded-lg border border-gray-200 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Instructions</h2>
            
            <div id="instructions-container" class="space-y-4 mb-6">

                    <div class="instruction-item flex gap-3">
                        <textarea name="instructions[]" rows="3"
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                        <button type="button" onclick="removeInstruction(this)" class="text-red-600 hover:text-red-700 font-semibold">Remove</button>
                    </div>
  
                    <div class="instruction-item flex gap-3">
                        <textarea name="instructions[]" rows="3" placeholder="Step 1: ..."
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                        <button type="button" onclick="removeInstruction(this)" class="text-red-600 hover:text-red-700 font-semibold">Remove</button>
                    </div>
       
            </div>

            <button type="button" onclick="addInstruction()" class="text-green-600 hover:text-green-700 font-semibold flex items-center gap-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 5v14m7-7H5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                Add Step
            </button>
        </div>

        <!-- Tags -->
        <div class="bg-white rounded-lg border border-gray-200 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tags</h2>
            
            <input type="text" name="tags" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600"
                value="">
            <p class="text-gray-500 text-sm mt-2">Add up to 5 tags to help others find your recipe</p>
        </div>

        <!-- Submit Section -->
        <div class="flex gap-4 justify-between items-center bg-white rounded-lg border border-gray-200 p-8">
            <div class="flex gap-4">
                <a href="" class="text-gray-600 hover:text-gray-900 font-semibold">Cancel</a>
                <button type="button" onclick="if(confirm('Are you sure?')) document.getElementById('delete-form').submit();" 
                    class="text-red-600 hover:text-red-700 font-semibold">Delete Recipe</button>
            </div>
            <button type="submit" class="bg-green-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-green-700 transition">
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

