<!-- resources/views/images/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Image List</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($images as $image)
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="w-full h-48 object-cover rounded-md">
                    <p class="mt-2 text-sm text-gray-600">{{ $image->path }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
