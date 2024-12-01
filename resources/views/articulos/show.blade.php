<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver Articulo
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Codigo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Denominacion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                </tr>
            </thead>
            <tbody>
                
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $articulo->codigo }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $articulo->denominacion }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $articulo->precio }}
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>

    </div>
    </div>
</x-app-layout>
