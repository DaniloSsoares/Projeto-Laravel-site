<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel PHP Breeze Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 dark:bg-zinc-900 text-black dark:text-white">

    <!-- Header -->
  
    @if (Route::has('login'))
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="/img/logoDan.png" class="h-16" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Projeto Danilo</span>
  </a>

  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
     

  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="{{ url('/dashboard') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
       <a href="{{ route('jogo.cadastrar') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Cadastrar Jogo</a>

      </li>
     

      
      <div class="flex space-x-4">
                @auth
                <a href="{{ url('/profile') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Perfil</a>

                <div>{{ Auth::user()->name }}</div>
                
                @endauth
            </div>
    </ul>
  </div>
  </div>
</nav>
  

<div class="w-full">
  <!-- Header com gradiente -->
  <div class="bg-gradient-to-b from-red-600 to-black h-80 flex justify-center items-center">
    <h1 class="text-white text-5xl font-bold">Listar Jogos</h1>
  </div>

  <!-- Conteúdo principal -->
  <div class="max-w-6xl mx-auto px-6 sm:px-6 lg:px-8 mb-12 mt-8">
    <div class="bg-white shadow-lg rounded-lg p-8 sm:p-12">
      <!-- Título da seção -->
      <p class="text-3xl font-semibold text-center mb-6">Lista de Jogos</p>

      <!-- Container dos jogos -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Verifica se existem jogos -->
        @if (count($jogos) > 0)
          @foreach ($jogos as $fill)
          <!-- Card de jogo -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
            <!-- Imagem e detalhes do jogo -->
            <div class="flex items-start space-x-4">
              <img src="{{ asset('storage/' . $fill->capa) }}" alt="Capa do jogo" class="w-24 h-32 object-cover rounded-md bg-slate-100">
              <div class="flex-1">
                <!-- Título do jogo -->
                <h3 class="font-bold text-lg text-gray-900 mb-2">{{ $fill->titulo }}</h3>
                <!-- Informações adicionais -->
                <p class="text-sm text-gray-500">Ano: {{ $fill->anolanc }}</p>
                <p class="text-sm text-gray-500">Gênero: {{ $fill->genero }}</p>
                <p class="text-sm text-gray-500">Plataforma: {{ $fill->plataforma }}</p>
                <p class="text-sm text-gray-500">Classificação: {{ $fill->classi }}</p>
              </div>
            </div>

            <!-- Empresa e pontuação -->
            <div class="flex justify-between items-center mt-4">
              <div class="text-gray-600">
                <p class="text-sm">Empresa: {{ $fill->empresa }}</p>
              </div>
              <!-- Pontuação com ícone de estrela -->
              <div class="flex items-center text-yellow-500">
                <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 17.27l6.18 4.73-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 5.73L5.82 22z"/>
                </svg>
                <span class="font-bold">{{ $fill->pontuacao }}</span>
              </div>
            </div>

            <!-- Botões de ação -->
            <div class="mt-6 flex justify-between">
              <a href="/editar/{{ $fill->id }}" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-800 transition-colors">Editar</a>
              <a href="/excluir/{{ $fill->id }}" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition-colors">Excluir</a>
            </div>
          </div>
          @endforeach
        @else
          <!-- Caso não haja registros -->
          <p class="text-center text-gray-500 col-span-full">Sem registros!</p>
        @endif
        @endif
      </div>
    </div>
  </div>
</div>


</body>
</html>