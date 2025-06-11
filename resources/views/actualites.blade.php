<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ActuFoot360 - Actualités</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header class="bg-red-600 h-16 flex items-center">
  <div class="container mx-auto flex items-center justify-between px-4">
    <div class="text-white text-2xl font-semibold font-sans">
      ActuFoot360
    </div>

    <nav class="hidden md:flex space-x-8 text-white font-medium font-sans">
      <a href="#" class="hover:underline">Actualités</a>
      <a href="#" class="hover:underline">Transferts</a>
      <a href="#" class="hover:underline">League des champions</a>
      <a href="#" class="hover:underline">Palmarès</a>
      <a href="#" class="hover:underline">Nations Leagues</a>
    </nav>

    <button id="menu-btn" class="md:hidden text-white focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" 
        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" 
          d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>
</header>

<main class="container mx-auto px-4 py-8">
  <h1 class="text-3xl font-bold mb-6">Liste des actualités</h1>

  @foreach ($actualites as $actu)
    <div class="border border-gray-300 rounded-md p-4 mb-6 bg-white shadow-sm">
      
      {{-- Image --}}
      @if ($actu->image)
        <img src="{{ $actu->image }}" alt="{{ $actu->titre }}" class="w-full h-auto mb-4 rounded" />
      @endif

      {{-- Titre --}}
      <h2 class="text-xl font-semibold mb-2">{{ $actu->titre }}</h2>

      {{-- Catégorie --}}
      @if ($actu->categorie)
        <p class="text-gray-700 font-medium">Catégorie : <span class="font-normal">{{ $actu->categorie }}</span></p>
      @endif

    </div>
  @endforeach

</main>

<script>
  const btn = document.getElementById('menu-btn');
  const nav = document.querySelector('nav');

  btn.addEventListener('click', () => {
    nav.classList.toggle('hidden');
  });
</script>

</body>
</html>
