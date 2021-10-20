<x-app-layout title="{{$pag->name}}">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{$pag->name}}
        </h2>

        @if(Str::contains($pag->crud, 'create'))
            <a href="{{$pag->slug}}/create" class="px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-green-500 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" style="max-width:fit-content;justify-self:end">
                Adicionar
            </a>
        @endif

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            @foreach($fields as $f)
                                <th class="px-4 py-3">{{Str::replace('ID ', '', Str::upper(Str::replace('_', ' ', $f)))}}</th>
                            @endforeach
                            @if(Str::contains($pag->crud, 'edit') || Str::contains($pag->crud, 'delete'))
                                <th class="px-4 py-3">Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($values as $v)
                            <tr class="text-gray-700 dark:text-gray-400">
                                @for ($i = 0; $i < count($fields); $i++)
                                    <td class="px-4 py-3 text-sm overflow-ellipsis overflow-hidden truncate max-w-xl">
                                        {{$v[$fields[$i]]}}
                                    </td>
                                @endfor
                                <td class="px-4 py-3 text-xs flex flex-row">
                                    @if(Str::contains($pag->crud, 'edit'))
                                        <a href="{{$pag->slug}}/{{$v->id}}/edit" class="flex align-center justify-center px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-md active:bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow" style="max-width:fit-content">
                                            Editar
                                        </a>
                                    @endif
                                    @if(Str::contains($pag->crud, 'delete'))
                                        <form method="post" action="{{$pag->slug}}/{{$v->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="Apagar" class="cursor-pointer ml-1 px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-500 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"/>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <style>
                .pagination{display:inline-flex!important;align-items:center!important;}
                .page-item{padding-left:0.75rem!important;padding-right:0.75rem!important;padding-top:0.25rem!important;padding-bottom:0.25rem!important;border-radius:0.375rem!important;}
                .page-item:focus{outline:0;box-shadow:0 0 0 3px rgba(132, 225, 188, 0.45)!important;}
                .active{background-color:#057a55!important;color:#fff!important;}
                .active:hover{cursor: default!important;}
                .disabled:hover{cursor:not-allowed!important;}
            </style>

            <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                    A mostrar {{$values->count()}} de {{$values->total()}}.
                </span>
                <span class="col-span-2"></span>
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                        {{$values->links()}}
                    </nav>
                </span>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</x-app-layout>