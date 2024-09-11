<!-- Layout principal da aplicação usando um componente chamado x-app-layout -->
<x-app-layout>


    <!-- Seção principal da página -->
    <div class="py-12 ">
        <!-- Contêiner principal centralizado com espaçamentos ajustáveis -->
        <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Primeira caixa de conteúdo para atualização de informações do perfil -->
            <div class="p-4 sm:p-8 bg-white shadow rounded ">
                <div class="max-w-xl">
                    <!-- Inclui o formulário para atualização das informações do perfil -->
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Segunda caixa de conteúdo para atualização da senha -->
            <div class="p-4 sm:p-8 bg-white dark:bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <!-- Inclui o formulário para atualização da senha -->
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Terceira caixa de conteúdo para exclusão do usuário -->
            <div class="p-4 sm:p-8 bg-white dark:bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <!-- Inclui o formulário para exclusão do usuário -->
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
