<x-app-layout title="Jogadores">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Jogadores
        </h2>

        <a href="jogadores/create" class="px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" style="max-width:fit-content;justify-self:end">
            Adicionar
        </a>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">avatar</th>
                            <th class="px-4 py-3">nome</th>
                            <th class="px-4 py-3">email</th>
                            <th class="px-4 py-3">pontos</th>
                            <th class="px-4 py-3">joga desde</th>
                            <th class="px-4 py-3">ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($players as $p)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                <img class="w-16 h-16 p-2 rounded-full mx-auto bg-gray-300" src="{{$p->avatar}}" alt="">
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->name}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->email}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->points}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->created_at}}
                            </td>
                            <td class="px-4 py-3 text-xs flex flex-row">
                                <a href="/jogadores/{{$p->id}}/edit" class="flex align-center justify-center px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-md active:bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow" style="max-width:fit-content">
                                    Editar
                                </a>
                                <form method="post" action="/jogadores/{{$p->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="Apagar" class="cursor-pointer ml-1 px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-500 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    A mostrar {{$players->count()}} de {{$players->total()}}.
                </span>
                <span class="col-span-2"></span>
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        {{$players->links()}}
                    </nav>
                </span>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</x-app-layout>