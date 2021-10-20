<div class="py-4 text-gray-500 dark:text-gray-400">

    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200 transition-colors duration-150 hover:text-green-500" href="/dashboard">
        {{ config('app.name') }}
    </a>

    <ul class="mt-6">

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'dashboard' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/dashboard">
                <span>Dashboard</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'jogadores' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/jogadores">
                <span>Jogadores</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'avatares' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/avatares">
                <span>Avatares</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'plantas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/plantas">
                <span>Plantas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'coordenadas-plantas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/coordenadas-plantas">
                <span>Coordenadas Plantas Encontradas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'categorias-tipos-plantas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/categorias-tipos-plantas">
                <span>Categorias Tipos Plantas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'tipos-plantas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/tipos-plantas">
                <span>Tipos Plantas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'jornadas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/jornadas">
                <span>Jornadas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'desafios-jornadas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/desafios-jornadas">
                <span>Desafios Jornadas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'dicas' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/dicas">
                <span>Dicas</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'premios' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/premios">
                <span>Prémios</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'categorias-desafios' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/categorias-desafios">
                <span>Categorias Desafios</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'desafios' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/desafios">
                <span>Desafios</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'glossario' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/glossario">
                <span>Glossário</span>
            </a>
        </li>

        <li class="relative px-6 py-3">
            {!! explode('/',url()->current())[3] == 'definicoes' ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-green-500 dark:hover:text-gray-200 dark:text-gray-100" href="/definicoes">
                <span>Definições</span>
            </a>
        </li>

    </ul>

</div>