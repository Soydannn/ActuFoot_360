<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Actualités - ActuFoot360</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow p-6 text-center">
      <div class="flex justify-center mb-4">
        <img src="{{ asset('images/actufoot.png') }}" alt="Logo" class="h-24 w-auto">
    </div>
        <nav class="mt-4 space-x-6">
            <a href="/" class="text-black hover:text-green-600  font-sans uppercase">ACTUALITÉS</a>
            <a href="/transfert" class="text-black hover:text-green-600  font-sans uppercase">TRANSFERT</a>
            <a href="/champions-league" class="text-black hover:text-green-600 font-sans uppercase">LIGUE DES CHAMPIONS</a>
            <a href="/palmares" class="text-black hover:text-green-600 font-sans uppercase">PALMARÈS</a>
            <a href="/nations-league" class="text-black hover:text-green-600  font-sans uppercase">LIGUE DES NATIONS</a>
            <a href="/videos" class="text-black hover:text-green-600  font-sans uppercase">VIDÉOS</a>
        </nav>
    </header>

    <main class="max-w-6xl mx-auto p-6">

        <!-- Dernière Actualité -->
        @if ($lastArticle)
        <section class="mb-12">
        <h2 class="text-2xl font-bold text-green-600 mb-4">À la une</h2>
        <a href="/actualites" class="text-green-600 hover:underline text-sm">Voir tout →</a>
        <div class="bg-white shadow p-6 rounded-lg">
        @if (!empty($lastArticle->image))
            <img src="{{ $lastArticle->image }}" alt="{{ $lastArticle->titre }}" class="w-full h-64 object-cover mb-4 rounded" />
        @endif
        <h3 class="text-xl font-bold mb-2">{{ $lastArticle->titre }}</h3>
        @if (!empty($lastArticle->categorie))
            <p class="text-sm text-gray-600 mb-2">Catégorie : {{ $lastArticle->categorie }}</p>
        @endif
        {{-- Certains modèles ont 'contenu', d'autres 'description' --}}
        <p class="mb-4">
            {{ Str::limit(strip_tags(html_entity_decode($lastArticle->contenu ?? $lastArticle->description ?? ''), 150)) }}
        </p>
        <button type="button" class="text-green-600  px-4 py-2 rounded hover:underline">
          En savoir plus
      </button>
    </div>
</section>
@endif

        
        <!-- Les 3 derniers transferts -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Les derniers transferts →</h2>
            <a href="/actualites" class="text-green-600 hover:underline text-sm">Voir tout →</a>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($transferts as $transfert)
                    <div class="bg-white border border-gray-300 rounded p-4 shadow hover:shadow-lg transition">
                        @if ($transfert->image)
                            <img src="{{ $transfert->image }}" alt="{{ $transfert->titre }}" class="w-full h-40 object-cover rounded mb-4" />
                        @endif
                        <p class="text-gray-700">
                          {{ Str::limit(strip_tags(html_entity_decode($transfert->description)), 100) }}
                        </p>
                        <button type="button" class="text-green-600  px-4 py-2 rounded hover:underline">
                          En savoir plus
                      </button>
                    </div>
                @endforeach
            </div>
        </section>


        <!-- Les dernières infos de la Ligue des Champions -->
      <section class="max-w-6xl mx-auto px-4 py-8 bg-white rounded shadow mt-8">
       <h2 class="text-2xl font-semibold text-green-600 mb-6">Les dernières infos de la Ligue des Champions →</h2>
       <a href="/actualites" class="text-green-600 hover:underline text-sm">Voir tout →</a>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($champions as $champion)
              <div class="border border-gray-300 rounded p-4 shadow hover:shadow-lg transition">
              @if ($champion->image)
                  <img src="{{ $champion->image }}" alt="{{ $champion->titre }}" class="w-full h-40 object-cover rounded mb-4">
              @endif
              <h3 class="text-xl font-bold mb-2">{{ $champion->titre }}</h3>
              {{ Str::limit(strip_tags(html_entity_decode($champion->contenu)), 100) }}
              <button type="button" class="text-green-600  px-4 py-2 rounded hover:underline">
                En savoir plus
            </button>
            </div>
          @endforeach
        </div>
      </section>

      <!-- Les dernières infos concernant le Palmarès -->
        <section class="max-w-6xl mx-auto px-4 py-8 bg-white rounded shadow mt-8">
          <h2 class="text-2xl font-semibold text-green-600 mb-6">Les dernières infos concernant les Palmarès →</h2>
          <a href="/actualites" class="text-green-600 hover:underline text-sm">Voir tout →</a>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              @foreach ($palmares as $info)
                  <div class="border border-gray-300 rounded p-4 shadow hover:shadow-lg transition">
                      @if ($info->image)
                          <img src="{{ $info->image }}" alt="{{ $info->titre }}" class="w-full h-40 object-cover rounded mb-4">
                      @endif
                      <p class="text-gray-700 mb-4"> {{ Str::limit(strip_tags(html_entity_decode($info->description)), 100) }}</p>
                      <button type="button" class="text-green-600  px-4 py-2 rounded hover:underline">
                        En savoir plus
                    </button>
                  </div>
              @endforeach
          </div>
        </section>

        <!-- Les dernières infos concernant la Ligues des Nations -->
        <section class="max-w-6xl mx-auto px-4 py-8 bg-white rounded shadow mt-8">
          <h2 class="text-2xl font-semibold text-green-600 mb-6">Les dernières infos concernant la ligue des Nations →</h2>
          <a href="/actualites" class="text-green-600 hover:underline text-sm">Voir tout →</a>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              @foreach ($nations as $nation)
                  <div class="border border-gray-300 rounded p-4 shadow hover:shadow-lg transition">
                      @if ($nation->image)
                          <img src="{{ $nation->image }}" alt="{{ $nation->titre }}" class="w-full h-40 object-cover rounded mb-4">
                      @endif
                      <p class="text-gray-700 mb-4"> {{ Str::limit(strip_tags(html_entity_decode($nation->contenu)), 100) }}</p>
                      <button type="button" class="text-green-600  px-4 py-2 rounded hover:underline">
                        En savoir plus
                    </button>
                  </div>
              @endforeach
          </div>
        </section>


        <!-- Vidéos -->
            <section class="max-w-6xl mx-auto px-4 py-8 bg-white rounded shadow mt-8">
              <h2 class="text-2xl font-semibold mb-6">Vidéos de Matchs →</h2>
              <a href="/actualites" class="text-green-600 hover:underline text-sm">Voir tout →</a>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                  @foreach ($videos as $video)
                      <div class="border border-gray-300 rounded p-4 shadow hover:shadow-lg transition">
                          <h3 class="text-xl font-bold mb-2">{{ $video->titre }}</h3>
                          <div class="aspect-w-16 aspect-h-9">
                              <iframe
                                  src="{{ $video->url }}"
                                  class="w-full h-48 rounded"
                                  frameborder="0"
                                  allowfullscreen
                              ></iframe>
                          </div>
                      </div>
                  @endforeach
              </div>
            </section>



    </main>
</body>
</html>
