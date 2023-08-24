<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-md shadow-md w-full md:w-1/2 lg:w-1/3">
        <h2 class="text-2xl font-semibold mb-4 text-center">Add News</h2>
        <form action="{{ route('events.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">News Title</label>
                <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" accept="image/*" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-500">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
