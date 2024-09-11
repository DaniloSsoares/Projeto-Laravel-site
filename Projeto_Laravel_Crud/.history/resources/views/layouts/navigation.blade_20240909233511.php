<!-- A tag <nav> define um contêiner de navegação. A diretiva x-data="{ open: false }" inicializa uma propriedade 'open' com o valor false, usada para controlar a abertura/fechamento do menu. -->




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
        <a href="{{ route('jogo.listar') }}"class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Listar Jogos</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Editar</a>
      </li>
      
      <div class="flex space-x-4">
                @auth
               

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                          <!-- Componente de dropdown alinhado à direita com largura de 48 -->
                           <x-dropdown align="right" width="48">
                              
                              <!-- Trigger para abrir o dropdown -->
                              <x-slot name="trigger">
                                  <!-- Botão que mostra o nome do usuário autenticado e um ícone de seta -->
                                  <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                      <div>{{ Auth::user()->name }}</div>
                                      <div class="ms-1">
                                          <!-- Ícone de seta para baixo -->
                                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                          </svg>
                                      </div>
                                  </button>
                              </x-slot>
                              <x-slot name="content">
          
                                  <!-- Autenticação - Logout -->
                                  <form method="POST" action="{{ route('logout') }}">
                                      @csrf
                                      <!-- Link que, ao ser clicado, impede o comportamento padrão do link e envia o formulário para efetuar o logout -->
                                      <x-dropdown-link :href="route('logout')"
                                              onclick="event.preventDefault();
                                                          this.closest('form').submit();">
                                          {{ __('Sair') }}
                                      </x-dropdown-link>
                                  </form>
                              </x-slot>
                          </x-dropdown>
                     </div>
                          
                          @endauth
                 </div>
    </ul>
  </div>
  </div>
</nav>
    <!-- Contêiner principal da navegação -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between h-16 items-center">

            <!-- Botão do Hamburger para menu responsivo -->
            <div class="-me-2 flex items-center sm:hidden">
                <!-- Botão que alterna a variável 'open' entre true e false ao ser clicado -->
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <!-- Ícone de menu Hamburger. Dependendo do estado de 'open', um ícone ou outro é exibido -->
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu de navegação responsivo, mostrado apenas em telas menores -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <!-- Link de navegação responsivo para o Dashboard -->
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Opções de configurações responsivas -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <!-- Exibe o nome e o e-mail do usuário autenticado -->
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Link responsivo para editar o perfil -->
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <!-- Autenticação - Logout responsivo -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <!-- Link de logout que submete o formulário -->
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
