@extends('layouts.main')
@section('title', 'Tambah Kategori Produk')

@section('content')

<div class="container mx-auto px-4 py-8">
<div class="bg-white shadow-lg rounded-xl overflow-hidden">

    <div class="p-6 border-b border-gray-200 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <h2 class="text-lg font-semibold text-gray-800">Tambah Kategori Produk</h2>
        <a href="{{ route('admin.kategori_produk.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-gray-600 hover:bg-gray-700 transition-all duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Kembali
        </a>
    </div>

    <form action="{{route('admin.kategori_produk.store')}}" method="POST" enctype="multipart/form-data" class="p-6">
        @csrf
        
        <div class="mb-4">
            <label for="nama_kategori" class="block text-sm font-medium text-gray-700">
                Nama Kategori
            </label>

            <input  
                type="text" 
                id="nama_kategori" 
                name="nama_kategori" 
                value="{{ old('nama_kategori') }}" 
                class="mt-1 block w-full md:text-xl rounded-md shadow-sm text-sm
                    border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                    @error('nama_kategori') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror" 
                required
            >

            @error('nama_kategori')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        
        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Simpan Kategori
            </button>
        </div>
    </form>

</div>

</div>
@endsection