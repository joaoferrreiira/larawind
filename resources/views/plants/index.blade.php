<x-app-layout title="Plantas">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Plantas
        </h2>

        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        </h4>
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Nome</th>
                            <th class="px-4 py-3">Nome científico</th>
                            <th class="px-4 py-3">Images</th>
                            <th class="px-4 py-3">Altura</th>
                            <th class="px-4 py-3">Legenda</th>
                            <th class="px-4 py-3">Localização</th>
                            <th class="px-4 py-3">História</th>
                            <th class="px-4 py-3">Idade</th>
                            <th class="px-4 py-3">Características</th>
                            <th class="px-4 py-3">Tipo PLanta</th>
                            <th class="px-4 py-3">Tipo Folha</th>
                            <th class="px-4 py-3">Tipo Flor</th>
                            <th class="px-4 py-3">Tipo Fruto</th>
                            <th class="px-4 py-3">Tipo Habitat</th>
                            <th class="px-4 py-3">Adicionada a</th>
                            <th class="px-4 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($plants as $p)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    {{$p->name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->scientific_name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->images}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->height}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->legend}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->location}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->history}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->age}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->characteristics}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->id_tipo_planta}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->id_tipo_folha}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->id_tipo_flor}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->id_tipo_fruto}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->id_tipo_habitat}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$p->created_at}}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <button class="px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-yellow-500 border border-transparent rounded-md active:bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow">
                                        Editar
                                    </button>
                                    <button class="px-2 py-px text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-500 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                                        Apagar
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>