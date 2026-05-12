<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <a href="{{ route('products.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded shadow-sm hover:bg-blue-700">
                    + Tambah Produk
                </a>

                <table class="w-full border-collapse border border-gray-200 mt-4">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="border p-2 text-left">Nama Produk</th>
                            <th class="border p-2 text-left">Harga</th>
                            <th class="border p-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2 text-gray-800">{{ $product->name }}</td>
                            <td class="border p-2 text-gray-800">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="border p-2 text-center">
                                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-600 font-medium hover:underline">Edit</a>
                                <span class="mx-1 text-gray-300">|</span>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 font-medium hover:underline" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="border p-4 text-center text-gray-500 italic">Belum ada data produk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>