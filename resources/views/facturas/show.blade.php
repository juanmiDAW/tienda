<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver Factura
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Numero
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Usuario_ID
                    </th>
                </tr>
            </thead>
            <tbody>
                
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $factura->numero }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $factura->created_at }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $factura->user_id }}
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>

    </div>
    </div>
</x-app-layout>
