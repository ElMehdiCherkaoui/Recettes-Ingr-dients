<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }} - RecipeHub</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: white;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px;
        }

        .header {
            border-bottom: 3px solid #16a34a;
            margin-bottom: 30px;
            padding-bottom: 20px;
        }

        .header h1 {
            color: #16a34a;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .meta-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px 0;
            font-size: 0.95em;
        }

        .meta-item {
            display: flex;
            align-items: center;
            margin: 5px 15px 5px 0;
        }

        .meta-item strong {
            margin-right: 5px;
            color: #16a34a;
        }

        .description {
            background: #f0fdf4;
            padding: 20px;
            border-left: 4px solid #16a34a;
            margin: 20px 0;
            font-size: 1em;
            line-height: 1.8;
        }

        section {
            margin-bottom: 40px;
        }

        section h2 {
            color: #16a34a;
            font-size: 1.8em;
            border-bottom: 2px solid #16a34a;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .ingredients-list {
            list-style: none;
        }

        .ingredients-list li {
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
        }

        .ingredients-list li:before {
            content: "✓";
            color: #16a34a;
            font-weight: bold;
            margin-right: 10px;
            font-size: 1.2em;
        }

        .instructions-list {
            list-style: none;
        }

        .instructions-list li {
            margin-bottom: 20px;
            padding-left: 35px;
            position: relative;
        }

        .instructions-list li:before {
            content: attr(data-step);
            position: absolute;
            left: 0;
            top: 0;
            background: #16a34a;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9em;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }

        .tag {
            background: #dcfce7;
            color: #15803d;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #666;
            font-size: 0.9em;
        }

        .timing-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }

        .timing-item {
            background: #f9fafb;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #e5e7eb;
        }

        .timing-item strong {
            display: block;
            color: #16a34a;
            font-size: 1.4em;
            margin: 10px 0 5px 0;
        }

        .timing-item span {
            color: #666;
            font-size: 0.9em;
        }

        .category-badge {
            display: inline-block;
            background: #16a34a;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
            margin-right: 10px;
        }

        @media print {
            body {
                background: white;
            }
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div>
                <span class="category-badge">{{ ucfirst($recipe->category) }}</span>
                <span class="category-badge">{{ ucfirst($recipe->difficulty) }}</span>
            </div>
            <h1>{{ $recipe->title }}</h1>
            <p style="color: #666; margin-top: 5px;">By {{ $recipe->author_name }}</p>
        </div>

        <!-- Meta Info -->
        <div class="timing-grid">
            <div class="timing-item">
                <span>Prep Time</span>
                <strong>{{ $recipe->prep_time }} mins</strong>
            </div>
            <div class="timing-item">
                <span>Cook Time</span>
                <strong>{{ $recipe->cook_time }} mins</strong>
            </div>
            <div class="timing-item">
                <span>Servings</span>
                <strong>{{ $recipe->servings }} people</strong>
            </div>
        </div>

        <!-- Description -->
        <div class="description">
            {{ $recipe->description }}
        </div>

        <!-- Ingredients Section -->
        <section>
            <h2>Ingredients</h2>
            <ul class="ingredients-list">
                @forelse($recipe->ingredients as $ingredient)
                    <li>{{ $ingredient }}</li>
                @empty
                    <li>No ingredients listed</li>
                @endforelse
            </ul>
        </section>

        <!-- Instructions Section -->
        <section>
            <h2>Instructions</h2>
            <ol class="instructions-list">
                @forelse($recipe->instructions as $index => $instruction)
                    <li data-step="{{ $index + 1 }}">{{ $instruction }}</li>
                @empty
                    <li data-step="1">No instructions available</li>
                @endforelse
            </ol>
        </section>

        <!-- Tags Section -->
        @if($recipe->tags && count($recipe->tags) > 0)
        <section>
            <h2>Tags</h2>
            <div class="tags">
                @foreach($recipe->tags as $tag)
                    <span class="tag">{{ $tag }}</span>
                @endforeach
            </div>
        </section>
        @endif

        <!-- Footer -->
        <div class="footer">
            <p>Recipe from RecipeHub - {{ date('Y-m-d') }}</p>
            <p>Visit us at www.recipehub.com</p>
        </div>
    </div>
</body>
</html>