<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actualités - ActuFoot360</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow p-6 text-center">
        <h1 class="text-3xl font-bold text-green-600">ActuFoot360</h1>
        <nav class="mt-4 space-x-4">
            <a href="/" class="text-black hover:text-green-600">ACTUALITÉS</a>
            <a href="/transfert" class="text-black hover:text-green-600">TRANSFERT</a>
            <a href="/champions-league" class="text-black hover:text-green-600">LIGUE DES CHAMPIONS</a>
            <a href="/palmares" class="text-black hover:text-green-600">PALMARÈS</a>
            <a href="/nations-league" class="text-black hover:text-green-600">NATIONS LEAGUE</a>
            <a href="/nations-league" class="text-black hover:text-green-600">VIDÉOS </a>
        </nav>
    </header>

    <main class="max-w-6xl mx-auto p-6">

        <!-- Dernière Actualité -->
        @if ($lastActu)
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-green-600 mb-4">À la une</h2>
            <div class="bg-white shadow p-6 rounded-lg">
                @if ($lastActu->image)
                    <img src="{{ $lastActu->image }}" alt="{{ $lastActu->titre }}" class="w-full h-64 object-cover mb-4 rounded">
                @endif
                <h3 class="text-xl font-bold mb-2">{{ $lastActu->titre }}</h3>
                <p class="text-sm text-gray-600 mb-2">Catégorie : {{ $lastActu->categorie }}</p>
                <p class="mb-4">{{ Str::limit(strip_tags($lastActu->contenu), 150) }}</p>
                <a href="{{ route('actualites.show', $lastActu->id) }}" class="text-green-600 hover:underline">En savoir plus</a>
            </div>
        </section>
        @endif

        <!-- Les dernières actualités -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Les dernières actualités →</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($recentActus as $actu)
                    <div class="bg-white shadow p-4 rounded-lg">
                        @if ($actu->image)
                            <img src="{{ $actu->image }}" alt="{{ $actu->titre }}" class="w-full h-40 object-cover mb-3 rounded ">
                        @endif
                        <h3 class="text-lg font-bold">{{ $actu->titre }}</h3>
                        <p class="text-sm text-gray-600">Catégorie : {{ $actu->categorie }}</p>
                        <p class="text-sm mt-2 mb-3">{{ Str::limit(strip_tags($actu->contenu), 100) }}</p>
                        <a href="{{ route('actualites.show', $actu->id) }}" class="text-green-600 hover:underline text-sm">En savoir plus</a>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
</body>
</html>
