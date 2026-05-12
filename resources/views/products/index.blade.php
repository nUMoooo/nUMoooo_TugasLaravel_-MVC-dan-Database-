<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-2">Nama Produk</th>
                            <th class="text-left p-2">Harga</th>
                            <th class="text-left p-2">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product) [cite: 453, 998]
                        <tr class="border-b">
                            <td class="p-2">{{ $product->name }}</td> [cite: 454, 1001]
                            <td class="p-2">Rp {{ number_format($product->price) }}</td>
                            <td class="p-2">{{ $product->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>