<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do Lijst</title>
    <style>
        body {
            position: relative; 
            min-height: 100vh; 
            margin: 0; 
            padding-bottom: 100px; 
        }

        footer {
            position: absolute; 
            bottom: 0; 
            left: 0; 
            right: 0; 
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">Mijn To-Do Lijst</h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-6">
        @yield('inhoud')
    </main>

    <footer class="bg-white shadow mt-6">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <p class="text-center text-gray-600">&copy; {{ date('Y') }} Mijn To-Do Lijst</p>
        </div>
    </footer>
</body>
</html>
