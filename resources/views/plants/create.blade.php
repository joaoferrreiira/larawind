<x-app-layout title="Plantas">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Adicionar Planta
        </h2>

        <form method="POST" action="/plantas" autocomplete="off" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Nome</span>
                    <input value="" name="name" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nome" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Nome Científico</span>
                    <input value="" name="scientific_name" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nome Científico" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Imagens</span>
                    <input value="" name="images" type="file" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" multiple placeholder="Imagens" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Legenda</span>
                    <input value="" name="legend" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Legenda" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Origem</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" required name="origin" value="Autóctone">
                            <span class="ml-2">Autóctone</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" required name="origin" value="Introduzida">
                            <span class="ml-2">Introduzida</span>
                        </label>
                    </div>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Duração Folhagem</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" required name="foliage_duration" value="Persistente">
                            <span class="ml-2">Persistente</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" required name="foliage_duration" value="Caduca">
                            <span class="ml-2">Caduca</span>
                        </label>
                    </div>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Tipo Planta</span>
                    <select name="plant_type" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                        @foreach ($plants_type as $pt)
                        <option value="{{$pt->id}}">{{$pt->name}}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Tipo Folha</span>
                    <select name="leaf_type" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                        @foreach ($leaf_type as $lt)
                        <option value="{{$lt->id}}">{{$lt->name}}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Tipo Flor</span>
                    <select name="flower_type" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                        @foreach ($flower_type as $ft)
                        <option value="{{$ft->id}}">{{$ft->name}}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Tipo Fruto</span>
                    <select name="fruit_type" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                        @foreach ($fruit_type as $ft)
                        <option value="{{$ft->id}}">{{$ft->name}}</option>
                        @endforeach
                    </select>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Tipo Habitat</span>
                    <select name="habitat_type" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                        @foreach ($habitat_type as $ht)
                        <option value="{{$ht->id}}">{{$ht->name}}</option>
                        @endforeach
                    </select>
                </label>

                @php $months = ['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez']; @endphp

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Época Floração</span>
                    <div class="mt-2">
                        <span class="text-gray-700 dark:text-gray-400">De</span>
                        <div class="mt-2">
                            @foreach ($months as $m)
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" class="form-radio" required name="flowering_season_from" value="{{$m}}">
                                <span class="ml-2">{{$m}}</span>
                            </label>
                            @endforeach
                        </div>
                        <span class="text-gray-700 dark:text-gray-400 mt-2">A</span>
                        <div class="mt-2">
                            @foreach ($months as $m)
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" class="form-radio" name="flowering_season_to" value="{{$m}}">
                                <span class="ml-2">{{$m}}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Época Frutificação</span>
                    <div class="mt-2">
                        <span class="text-gray-700 dark:text-gray-400">De</span>
                        <div class="mt-2">
                            @foreach ($months as $m)
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" class="form-radio" required name="fruit_season_from" value="{{$m}}">
                                <span class="ml-2">{{$m}}</span>
                            </label>
                            @endforeach
                        </div>
                        <span class="text-gray-700 dark:text-gray-400 mt-2">A</span>
                        <div class="mt-2">
                            @foreach ($months as $m)
                            <label class="inline-flex items-center mr-4">
                                <input type="radio" class="form-radio" name="fruit_season_to" value="{{$m}}">
                                <span class="ml-2">{{$m}}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Altura (Até x)</span>
                    <input value="" name="height" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Altura (Até x)" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Área nativa</span>
                    <input value="" name="native_area" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Área nativa" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Longevidade</span>
                    <input value="" name="longevity" type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Longevidade" autocomplete="off" />
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Outras caracterísitcas</span>
                    <textarea rows="7" name="characteristics" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Outras caracterísitcas" autocomplete="off"></textarea>
                </label>

                <label class="block text-sm mb-5">
                    <span class="text-gray-700 dark:text-gray-400">Curiosidades</span>
                    <textarea rows="7" name="curiosities" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Curiosidades" autocomplete="off"></textarea>
                </label>

                <input type="submit" value="Adicionar" class="cursor-pointer px-3 py-1 mt-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-md active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray" style="max-width:fit-content;justify-self:end" />

            </div>
        </form>

    </div>
</x-app-layout>