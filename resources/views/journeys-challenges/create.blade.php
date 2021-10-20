<x-app-layout title="Desafios Jornadas">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Adicionar Desafio Jornadas
        </h2>

        <form method="POST" action="/desafios-jornadas" autocomplete="off">
            {{ csrf_field() }}
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                <label class="block mb-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Jornada
                    </span>
                    <select name="journeys_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:focus:shadow-outline-gray">
                        @foreach ($journeys as $j)
                        <option value="{{$j->id}}">{{$j->name}}</option>
                        @endforeach

                    </select>
                </label>

                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Desafio</span>
                    <input value="" name="challenge" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Desafio" autocomplete="off" />
                </label>

                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Pontos</span>
                    <input value="" name="points" required type="number" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Pontos" autocomplete="off" />
                </label>

                <input type="submit" value="Adicionar" class="cursor-pointer px-3 py-1 mt-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-md active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray" style="max-width:fit-content;justify-self:end" />

            </div>
        </form>

    </div>
</x-app-layout>