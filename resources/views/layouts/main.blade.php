<!DOCTYPE html>
<html lang="en">
  <head>

  @include('components.head')

  @vite('resources/css/app.css')

  <style>
      .navbar-vertical {
        background-color: white; /* Sidebar menjadi putih */
        border-right: 1px solid #e5e7eb; /* Garis pemisah yang lebih halus */
      }
      .navbar-brand {
        padding: 1.5rem 1rem; /* Ruang lebih pada logo */
        border-bottom: 1px solid #f3f4f6;
      }
      .navbar-nav .nav-item .nav-link {
        color: #4b5563; /* Warna teks default yang lebih gelap */
        font-weight: 500;
        transition: all 0.2s ease;
      }
      .navbar-nav .nav-item .nav-link:hover {
        background-color: #f3f4f6; /* Latar belakang hover abu-abu */
        color: #1f2937; /* Teks hover lebih gelap */
        border-radius: 0.5rem;
      }
      .navbar-nav .nav-item .nav-link.active {
        background-color: #d1d5db; /* Latar belakang untuk item aktif */
        color: #1f2937;
        font-weight: 600;
        border-radius: 0.5rem;
      }
      .navbar-heading {
        color: #9ca3af; /* Warna abu-abu untuk judul grup */
        font-weight: 600;
        padding: 1rem 1.5rem 0.5rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        font-size: 0.75rem;
      }
      .header {
        background-color: #ffffff; /* Header menjadi putih */
        border-bottom: 1px solid #e5e7eb;
      }
      .search-input {
        background-color: #f9fafb; /* Latar belakang input search */
        border-color: #e5e7eb;
        color: #1f2937;
      }
      .user-avatar-status {
        border: 2px solid white; /* Status online dengan border putih */
      }

      .dataTable-wrapper {
    font-size: 0.875rem; /* text-sm */
    }

    .dataTable-table th, .dataTable-table td {
        padding: 0.75rem 1rem; /* px-4 py-3 */
        border-bottom: 1px solid #e5e7eb; /* border-gray-200 */
    }

    .dataTable-table thead {
        background-color: #f9fafb; /* bg-gray-50 */
    }

    .dataTable-pagination .active a {
        background-color: #2563eb; /* bg-blue-600 */
        color: white;
        border-radius: 0.375rem;
    }
  </style>

    <title>@yield('title') | Sistem Penjualan</title>

  </head>
  <body>
    <main>
      <div id="app-layout" class="overflow-x-hidden flex">

      @include('components.sidebar')

      <div id="app-layout-content" class="min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
            
            @include('components.navbar')

            <div class="main-content p-6">
              @yield('content')


              {{-- Modal --}}
              <div 
                  x-data="{ show: false, id: null }" 
                  x-on:open-delete-modal.window="show = true; id = $event.detail.id" 
                  x-on:close-delete-modal.window="show = false"
                  x-show="show" 
                  class="fixed inset-0 z-50 flex items-center justify-center p-4"
                  style="display: none;"
              >
                  <div x-show="show" x-transition.opacity.duration.300ms class="fixed inset-0 bg-gray-900 opacity-50"></div>

                  <div x-show="show" x-transition.opacity.duration.300ms.scale.95 class="bg-white rounded-lg shadow-xl transform transition-all max-w-lg w-full p-6 relative">
                      <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500" x-on:click="show = false">
                          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                      </button>
                      <div class="md:flex md:items-start">
                          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 md:mx-0 md:h-10 md:w-10">
                              <i class='bx bxs-trash text-2xl text-red-600'></i>
                          </div>
                          <div class="mt-3 text-center md:mt-0 md:ml-4 md:text-left">
                              <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                  Hapus Data @yield('title')
                              </h3>
                              <div class="mt-2">
                                  <p class="text-sm text-gray-500">
                                      Apakah Anda yakin ingin menghapus data ini? Aksi ini tidak dapat dibatalkan.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="mt-5 md:mt-4 md:flex md:flex-row-reverse md:space-x-0 md:space-x-reverse">
                          <form id="delete-form" method="POST" class="w-full md:w-auto">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 md:ml-3 md:w-auto md:text-sm">
                                  Hapus
                              </button>
                          </form>
                          <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 md:mt-0 md:w-auto md:text-sm" x-on:click="show = false">
                              Batal
                          </button>
                      </div>
                  </div>
              </div>
              {{-- end modal --}}
            </div>
        </div>
      </div>
    </main>

  @include('components.scripts')

  @vite('resources/js/app.js')
  </body>
</html>