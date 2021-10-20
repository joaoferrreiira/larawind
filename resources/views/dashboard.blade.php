<x-app-layout title="Dashboard">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>

        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

            <a href="/jogadores">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-blue-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-users w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Jogadores</p>
                    </div>
                </div>
            </a>

            <a href="/avatares">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-blue-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-user w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Avatares</p>
                    </div>
                </div>
            </a>

            <a href="/plantas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-orange-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-spa w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Plantas</p>
                    </div>
                </div>
            </a>

            <a href="/coordenadas-plantas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-orange-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-map-marker-alt w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Coordenadas Plantas Encontradas</p>
                    </div>
                </div>
            </a>

            <a href="/categorias-tipos-plantas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-pink-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-align-justify w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Categorias Tipos Plantas</p>
                    </div>
                </div>
            </a>

            <a href="/tipos-plantas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-indigo-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-align-justify w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Tipos Plantas</p>
                    </div>
                </div>
            </a>

            <a href="/jornadas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-pink-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-align-justify w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Jornadas</p>
                    </div>
                </div>
            </a>

            <a href="/desafios-jornadas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-pink-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-align-justify w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Desafios Jornadas</p>
                    </div>
                </div>
            </a>

            <a href="/dicas">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-purple-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-question w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Dicas</p>
                    </div>
                </div>
            </a>

            <a href="/premios">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-purple-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-medal w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Prémios</p>
                    </div>
                </div>
            </a>

            <a href="/categorias-desafios">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-purple-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-align-justify w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Categorias Desafios</p>
                    </div>
                </div>
            </a>

            <a href="/desafios">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-purple-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-align-justify w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Desafios</p>
                    </div>
                </div>
            </a>

            <a href="/glossario">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-yellow-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-search w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Glossário</p>
                    </div>
                </div>
            </a>

            <a href="/definicoes">
                <div class="flex items-center p-4 bg-white hover:bg-grey-200 rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="mr-4 text-black bg-green-100 rounded-full dark:text-red-100 dark:bg-black flex justify-center items-center" style='width:44px!important;height:44px!important'>
                        <i class="fas fa-cog w-5 h-5"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Definições</p>
                    </div>
                </div>
            </a>

        </div>

</x-app-layout>