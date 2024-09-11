<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://unpkg.com/flowbite@1.5.0/dist/flowbite.js"></script>
    <title>Editar</title>
</head>
<body>
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

    <div class="w-full">
    <div class="bg-gradient-to-b from-red-600 to-black h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
    <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
        <p class="text-3xl font-bold leading-7 text-center">Editar</p>
        <form method="POST" action="/atualizar.jogo/{{$jogo->id}}" enctype="multipart/form-data">
            @csrf
            <!-- Primeira linha de inputs -->
            <div class="md:flex items-center mt-12">
                <div class="w-full md:w-1/2 flex flex-col mt-4">
                    <label class="font-semibold leading-none">Título</label>
                    <input type="text" value="{{$jogo->titulo}}" name="titulo" placeholder="Título" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col mt-4 md:ml-4">
                    <label class="font-semibold leading-none">Lançamento</label>
                    <input type="date" name="anolanc" value="{{$jogo->anolanc}}" placeholder="Ex: 2024/05/10" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
            </div>
            
            <!-- Segunda linha de inputs -->
            <div class="md:flex items-center mt-6">
                <div class="w-full md:w-1/2 flex flex-col mt-4">
                    <label class="font-semibold leading-none">Classificação</label>
                    <input type="text" name="classi" value="{{$jogo->classi}}" placeholder="Ex: A10" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col mt-4 md:ml-4">
                    <label class="font-semibold leading-none">Gênero Jogo</label>
                    <input type="text" name="genero" value="{{$jogo->genero}}" placeholder="Ficção" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
            </div>

            <!-- Terceira linha de inputs -->
            <div class="md:flex items-center mt-6">
                <div class="w-full md:w-1/3 flex flex-col mt-4">
                    <label class="font-semibold leading-none">Pontuação</label>
                    <input type="text" name="pontuacao" value="{{$jogo->pontuacao}}" placeholder="Ex: 4,2" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
                <div class="w-full md:w-1/3 flex flex-col mt-4 md:ml-4">
                    <label class="font-semibold leading-none">Plataforma</label>
                    <input type="text" name="plataforma" value="{{$jogo->plataforma}}" placeholder="Nome da plataforma" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
                <div class="w-full md:w-1/3 flex flex-col mt-4 md:ml-4">
                    <label class="font-semibold leading-none">Empresa</label>
                    <input type="text" name="empresa" value="{{$jogo->empresa}}" placeholder="Empresa" class="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
            </div>

            <!-- Input de arquivo -->
            <div class="md:flex items-center mt-6">
                <div class="w-full md:w-1/2 flex flex-col mt-4">
                    <label class="font-semibold leading-none">Capa</label>
                    <input type="file" name="capa"  capaclass="leading-none text-gray-900 p-2 focus:outline-none focus:border-blue-700 mt-3 bg-gray-200 border rounded border-gray-200" />
                </div>
            </div>

            <!-- Botão de enviar -->
            <div class="flex items-center justify-center w-full mt-9">
                <button type="submit" class="font-semibold leading-none text-white py-3 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                    Confirmar
                </button>
            </div>
        </form>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <!-- Footer -->
 <footer class="mt-16 p-6 bg-white dark:bg-zinc-800 shadow-inner">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400">
            © 2024 Laravel Breeze. Todos os direitos reservados.
        </div>
    </footer>
</body>
</html>