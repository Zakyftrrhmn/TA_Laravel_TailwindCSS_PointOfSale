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
            </div>
        </div>
      </div>
    </main>

  @include('components.scripts')

  @vite('resources/js/app.js')
  </body>
</html>