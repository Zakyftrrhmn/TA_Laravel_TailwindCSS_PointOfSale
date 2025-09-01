@extends('layouts.main')
@section('title', 'Kategori Produk')
@section('content')

<div class="container mx-auto px-4 py-8">

    @if(session('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
        <i class='bx bxs-message-square-check text-xl'></i>
        <div class="ms-3 text-sm md:text-md font-medium">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-300 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
    @endif

    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        
        <div class="p-6 border-b border-gray-200 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h2 class="text-lg font-semibold text-gray-800 whitespace-nowrap">Kategori Produk</h2>

            <div class="flex flex-col md:flex-row md:items-center gap-4 w-full md:w-auto">
                <div class="relative inline-block text-left">
                    <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="show-data-button" aria-haspopup="true" aria-expanded="true">
                        <span id="show-data-value">{{ request('show_data', 10) }}</span>
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                
                    <div id="show-data-menu" class="origin-top-right absolute right-0 mt-2 w-20 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-10" role="menu" aria-orientation="vertical" aria-labelledby="show-data-button">
                        <div class="py-1" role="none">
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-100" data-value="5" role="menuitem">5</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-100" data-value="10" role="menuitem">10</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-100" data-value="15" role="menuitem">15</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-100" data-value="20" role="menuitem">20</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-100" data-value="25" role="menuitem">25</a>
                        </div>
                    </div>
                </div>

                <div class="relative w-full md:w-64">
                    <input type="text" id="search" name="search" placeholder="Cari produk..." class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" value="{{ request('search') }}">
                </div>
            </div>

            <a href="{{ route('admin.kategori_produk.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 whitespace-nowrap text-center justify-center w-fit">
                Tambah Kategori Produk
            </a>
        </div>


        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                            Nama Kategori
                        </th>
                        <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody id="product-table-body" class="bg-white divide-y divide-gray-200">
                    @if ($kategori_produk->isEmpty())
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500 italic">
                                Tidak ada data kategori produk yang ditemukan.
                            </td>
                        </tr>
                    @else
                        @foreach ($kategori_produk as $kp)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ ($kategori_produk->currentPage() - 1) * $kategori_produk->perPage() + $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $kp->nama_kategori }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-1 flex items-center justify-center">
                                    <a href="{{route('admin.kategori_produk.edit', $kp->id)}}" class="text-yellow-600 hover:text-yellow-900 text-lg">
                                        <i class='bx bx-message-square-edit'></i>
                                    </a>
                                    <button 
                                        type="button" 
                                        class="text-red-600 hover:text-red-900 text-lg"
                                        x-data=""
                                        x-on:click.prevent="$dispatch('open-delete-modal', {id: {{ $kp->id }}})"
                                    >
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        <div id="pagination" class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                {{ $kategori_produk->links('vendor.pagination.simple-tailwind') }}
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Menampilkan
                        <span class="font-medium">{{ $kategori_produk->firstItem() ?? 0 }}</span>
                        sampai
                        <span class="font-medium">{{ $kategori_produk->lastItem() ?? 0 }}</span>
                        dari
                        <span class="font-medium">{{ $kategori_produk->total() }}</span>
                        hasil
                    </p>
                </div>
                <div>
                    {{ $kategori_produk->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection