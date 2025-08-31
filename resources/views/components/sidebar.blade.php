<nav class="navbar-vertical navbar">
  <div id="myScrollableElement" class="h-screen" data-simplebar>
    <a class="navbar-brand" href="./index.html">
      <div class="flex flex-row gap-x-2 items-center justify-center">
        <img src="{{asset('assets/images/logo/logo1.png')}}" class="w-7 h-7" alt="" />
        <span class="text-red-600 text-shadow-md text-md font-extrabold uppercase">Sistem Penjualan</span>
      </div>
    </a>

    <ul class="navbar-nav flex-col" id="sideNavbar">
      {{-- Dashboard --}}
      <li class="nav-item px-2">
        <a class="nav-link active" href="./index.html">
          <i class="bx bxs-dashboard w-4 h-4 mr-2"></i>
          Dashboard
        </a>
      </li>

      {{-- Master Data --}}
      <li class="nav-item">
        <div class="navbar-heading">Master Data</div>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-category w-4 h-4 mr-2"></i>
          Kategori Produk
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-cube w-4 h-4 mr-2"></i>
          Produk
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-group w-4 h-4 mr-2"></i>
          Konsumen
        </a>
      </li>

      {{-- Pengguna --}}
      <li class="nav-item">
        <div class="navbar-heading">Pengguna</div>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-user-circle w-4 h-4 mr-2"></i>
          Administrator
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-id-card w-4 h-4 mr-2"></i>
          Kasir
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-user w-4 h-4 mr-2"></i>
          Pelanggan
        </a>
      </li>

      {{-- Penjualan --}}
      <li class="nav-item">
        <div class="navbar-heading">Penjualan</div>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-cart-add w-4 h-4 mr-2"></i>
          Input Penjualan
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-receipt w-4 h-4 mr-2"></i>
          Data Penjualan
        </a>
      </li>

      {{-- Menu Lainnya --}}
      <li class="nav-item">
        <div class="navbar-heading">Menu Lainnya</div>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-store w-4 h-4 mr-2"></i>
          Penjualan
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-bar-chart-alt-2 w-4 h-4 mr-2"></i>
          Laporan
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link" href="#">
          <i class="bx bx-lock-alt w-4 h-4 mr-2"></i>
          Ganti Password
        </a>
      </li>
    </ul>
  </div>
</nav>
