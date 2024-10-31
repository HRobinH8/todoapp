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
            position: relative; /* Zorgt ervoor dat de footer relatief aan de body wordt gepositioneerd */
            min-height: 100vh; /* Zorg ervoor dat de body minimaal de hoogte van het venster heeft */
            margin: 0; /* Verwijder standaard marges */
            padding-bottom: 100px; /* Geef ruimte voor de footer */
        }

        footer {
            position: absolute; /* Maak de footer absoluut gepositioneerd */
            bottom: 0; /* Plaats de footer onderaan de body */
            left: 0; /* Zorg ervoor dat de footer de volledige breedte van de body gebruikt */
            right: 0; /* Zorg ervoor dat de footer de volledige breedte van de body gebruikt */
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
