<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$singleEvent->title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12 px-4">
        <a href="/" class="text-blue-500 hover:text-blue-700">&larr; Back to Home</a>
        
        <section class="mt-12 flex justify-center items-center">
            <div class="max-w-md bg-white rounded-lg shadow-lg p-6">
                <img src="assets/images/{{$singleEvent->image}}" alt="Image" class="w-full h-56 mb-2 rounded-t-xl drop-shadow-lg">
                <h1 class="text-3xl font-semibold mb-2">{{$singleEvent->title}}</h1>
                <p class="text-gray-700 mb-4">{{$singleEvent->description}}</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700"><a href="/news" class="">View other news</a></button>
            </div>
        </section>
    </div>    
</body>
</html>
