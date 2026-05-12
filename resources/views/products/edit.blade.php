<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Produk</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Nama Produk</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Harga</label>
                        <input type="number" name="price" value="{{ $product->price }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Deskripsi</label>
                        <textarea name="description" rows="3" class="w-full border-gray-300 rounded-md shadow-sm">{{ $product->description }}</textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600 transition">Update Produk</button>
                        <a href="{{ route('products.index') }}" class="text-gray-600 hover:underline">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>