<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel PHP Breeze Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://unpkg.com/flowbite@1.5.0/dist/flowbite.js"></script>

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
      <li>
        <a href="{{ route('jogo.listar') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Listar Jogos</a>
      </li>
      <li>
        <a href="{{route()}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Editar</a>
      </li>
      
      <div class="flex space-x-4">
                @auth
                <a href="{{ url('/profile') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Perfil</a>

                <div class="justify-end">{{ Auth::user()->name }}</div>
                
                @endauth
            </div>    
         </ul>
      </div>
  </div>
</nav>
        @endif
    </header>


    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-96 overflow-hidden rounded-lg">

    <div class="duration-700 ease-in-out" data-carousel-item="active">
      <img src="/img/Kratos.jpg" class="absolute block w-full h-full" alt="...">
   </div>
    <div class="duration-700 ease-in-out" data-carousel-item>
      <img src="/img/cammy.jpg" class="absolute block w-full h-full" alt="...">
   </div>
   <div class="duration-700 ease-in-out" data-carousel-item>
      <img src="/img/batman.jpg" class="absolute block w-full h-full" alt="...">
   </div>
   <div class="duration-700 ease-in-out" data-carousel-item>
      <img src="/img/Assa.jpg" class="absolute block w-full h-full" alt="...">
   </div>



    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
   <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1L1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <!-- Next button -->
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 9l4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


    <!-- Main Content -->
    <main class="mt-10 container mx-auto px-6">


        <h1 class="text-3xl font-bold text-center mb-10">Bem-vindo <div>{{Auth::user()->name}}</div></h1>


        <div class="grid gap-8 lg:grid-cols-3">
            <a href="https://laravel.com/docs"
                class="block bg-white p-8 rounded-lg shadow-lg dark:bg-zinc-800 hover:bg-gray-100 dark:hover:bg-zinc-700 transition transform hover:-translate-y-1">
                <h2 class="text-2xl font-semibold mb-3">Documentação</h2>
                <p class="text-sm">O Laravel tem uma documentação maravilhosa cobrindo todos os aspectos do framework.
                    Seja você um novato ou tenha experiência anterior com o Laravel, recomendamos ler nossa documentação
                    do começo ao fim.</p>
            </a>
            <a href="https://laracasts.com"
                class="block bg-white p-8 rounded-lg shadow-lg dark:bg-zinc-800 hover:bg-gray-100 dark:hover:bg-zinc-700 transition transform hover:-translate-y-1">
                <h2 class="text-2xl font-semibold mb-3">Laracasts</h2>
                <p class="text-sm">Laracasts oferece milhares de tutoriais em vídeo sobre desenvolvimento em Laravel, PHP
                    e JavaScript. Confira, veja você mesmo e melhore muito suas habilidades de desenvolvimento no
                    processo.</p>
            </a>
            <a href="https://laravel-news.com"
                class="block bg-white p-8 rounded-lg shadow-lg dark:bg-zinc-800 hover:bg-gray-100 dark:hover:bg-zinc-700 transition transform hover:-translate-y-1">
                <h2 class="text-2xl font-semibold mb-3">Novidades do Laravel</h2>
                <p class="text-sm">O Laravel News é um portal e boletim informativo conduzido pela comunidade que reúne
                    todas as notícias mais recentes e importantes do ecossistema Laravel, incluindo novos lançamentos de
                    pacotes e tutoriais.</p>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-16 p-6 bg-white dark:bg-zinc-800 shadow-inner">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400">
            © 2024 Laravel Breeze. Todos os direitos reservados.
        </div>
    </footer>

</body>

</html>
