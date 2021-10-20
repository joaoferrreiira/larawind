<x-app-layout title="Prémios">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Adicionar Prémio
        </h2>

        <form method="POST" action="/premios" autocomplete="off" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Nome</span>
                    <input value="" name="name" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nome" autocomplete="off" />
                </label>

                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Imagem</span>
                    <input value="" name="image" required type="file" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Imagem" autocomplete="off" />
                </label>

                <label class="block text-sm mb-4">
                    <span class="text-gray-700 dark:text-gray-400">Descrição</span>
                    <input value="" name="description" required type="text" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Descrição" autocomplete="off" />
                </label>

                <input type="submit" value="Adicionar" class="cursor-pointer px-3 py-1 mt-2 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-md active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray" style="max-width:fit-content;justify-self:end" />

            </div>
        </form>

    </div>
</x-app-layout>