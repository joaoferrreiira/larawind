<x-app-layout title="Plantas">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Plantas
        </h2>

        <a href="plantas/create" class="px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" style="max-width:fit-content;justify-self:end">
            Adicionar
        </a>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">nome</th>
                            <th class="px-4 py-3">nome científico</th>
                            <th class="px-4 py-3">imagens</th>
                            <th class="px-4 py-3">legenda</th>
                            <th class="px-4 py-3">origem</th>
                            <th class="px-4 py-3">duração folhagem</th>
                            <th class="px-4 py-3">tipo planta</th>
                            <th class="px-4 py-3">tipo folha</th>
                            <th class="px-4 py-3">tipo flor</th>
                            <th class="px-4 py-3">tipo fruto</th>
                            <th class="px-4 py-3">tipo habitat</th>
                            <th class="px-4 py-3">época floração</th>
                            <th class="px-4 py-3">época frutificação</th>
                            <th class="px-4 py-3">altura (até x)</th>
                            <th class="px-4 py-3">área nativa</th>
                            <th class="px-4 py-3">longevidade</th>
                            <th class="px-4 py-3">outras características</th>
                            <th class="px-4 py-3">curiosidades</th>
                            <th class="px-4 py-3">ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($plants as $p)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->name ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->scientific_name ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->images ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->legend ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->origin ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->foliage_duration ?? '-'}}
                            </td>
                            @foreach ($p->types()->orderBy('id', 'asc')->where('plants_id', $p->id)->get() as $types)
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$types->name}}
                            </td>
                            @endforeach
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->flowering_season ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->fruit_season ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                até {{$p->height ?? '-'}}m
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->native_area ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->longevity ?? '-'}} @if($p->longevity != null) anos @endif
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->characteristics ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                {{$p->curiosities ?? '-'}}
                            </td>
                            <td class="px-4 py-3 text-xs flex flex-row">
                                <a href="/plantas/{{$p->id}}/edit" class="flex align-center justify-center px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-md active:bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow" style="max-width:fit-content">
                                    Editar
                                </a>
                                <form method="post" action="/plantas/{{$p->id}}">
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
                    A mostrar {{$plants->count()}} de {{$plants->total()}}.
                </span>
                <span class="col-span-2"></span>
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        {{$plants->links()}}
                    </nav>
                </span>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</x-app-layout>