<x-app-layout title="Dicas">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            @if($edit) Editar @else Adicionar @endif jornada
        </h2>

        <form method="POST" @if($edit) action="/jornadas/{{$journeys->id}}" @else action="/jornadas" @endif autocomplete="off">
            {{ csrf_field() }}
            @if($edit) {{ method_field('PUT') }} @endif
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nome</span>
                    <input @if($edit) value="{{$journeys->name}}" @else value="" @endif name="nome" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nome" autocomplete="off"/>
                </label>
                    <span class="text-gray-700 dark:text-gray-400">Máximo Pontos</span>
                    <input @if($edit) value="{{$journeys->max_points}}" @else value="" @endif name="max_pontos" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Máximo Pontos" autocomplete="off"/>
                </label>

                <input type="submit" value="@if($edit) Editar @else Adicionar @endif" class="cursor-pointer px-3 py-1 mt-6 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-md active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray" style="max-width:fit-content;justify-self:end" />
            </div>
        </form>
    
    </div>

</x-app-layout>