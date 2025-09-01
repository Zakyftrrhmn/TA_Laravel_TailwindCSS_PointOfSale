<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Penjualan - Login</title>

  {{-- icon --}}
  <link rel="icon" type="image/png" href="{{asset('assets/images/logo/favicon.png')}}">

  <!-- Font Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- Boxicons --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url("{{asset('assets/images/bg-login2.png')}}") no-repeat center center;
      background-size: cover;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.15);
    }
    .btn-gradient {
      background: linear-gradient(to right, #6d28d9, #8b5cf6);
    }
    .btn-gradient:hover {
      background: linear-gradient(to right, #5b21b6, #7c3aed);
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen relative">

  <!-- Logo pojok kiri atas -->
  <div class="absolute md:top-6 top-3 md:left-6 left-3 flex items-center z-20">
    <img src="{{asset('assets/images/logo/logo1.png')}}" class="w-9 h-9" alt="logo">
    <span class="ml-2 md:text-xl text-lg font-bold text-red-600 drop-shadow-white uppercase">Sistem Penjualan</span>
  </div>

  <!-- Card Login -->
  <div class="w-full max-w-md px-8 py-10 rounded-3xl glass-card z-10">

    <!-- Ikon/logo tengah -->
    <div class="flex justify-center mb-6">
      <div class="p-3 bg-white/80 rounded-full shadow">
        <img src="{{asset('assets/images/logo/logo1.png')}}" class="w-10 h-10" alt="logo">
      </div>
    </div>

    <!-- Judul -->
    <div class="text-center mb-6">
      <span class="font-semibold uppercase text-xs py-1 px-3 rounded-full text-indigo-800 bg-indigo-300">
        Mulai Transaksi
      </span>
      <h2 class="text-2xl font-bold text-gray-800 mt-4">Selamat Datang</h2>
      <p class="mt-2 text-sm text-gray-600">
        Transaksi lebih mudah, cepat, dan teratur dengan sistem penjualan Sarana Paraga.
      </p>
    </div>

    <!-- Form Login -->
    <form class="space-y-5">
      <!-- Email -->
      <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
          <i class='bx bx-envelope text-lg'></i>
        </span>
        <input type="email" placeholder="Email" 
          class="w-full pl-12 pr-4 py-3 bg-white/70 text-sm rounded-lg text-gray-800 
          placeholder-gray-500 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
      </div>

      <!-- Password -->
      <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
          <i class='bx bxs-lock text-lg'></i>
        </span>
        <input id="password" type="password" placeholder="Password"
          class="w-full pl-12 pr-12 py-3 bg-white/70 rounded-lg text-gray-800 
          placeholder-gray-500 text-sm border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        
        <span class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer text-gray-400"
          onclick="togglePassword()">
          <i id="eyeOpen" class='bx bx-show text-lg'></i>
          <i id="eyeClosed" class='bx bxs-low-vision text-lg hidden'></i>
        </span>
      </div>

      <!-- Tombol -->
      <button type="submit" 
        class="w-full py-3 mt-2 rounded-lg text-white font-medium btn-gradient 
        transition-transform duration-200 transform hover:scale-105">
        Sign In
      </button>
    </form>
  </div>

  <script>
    function togglePassword() {
      const password = document.getElementById("password");
      const eyeOpen = document.getElementById("eyeOpen");
      const eyeClosed = document.getElementById("eyeClosed");

      if (password.type === "password") {
        password.type = "text";
        eyeOpen.classList.add("hidden");
        eyeClosed.classList.remove("hidden");
      } else {
        password.type = "password";
        eyeOpen.classList.remove("hidden");
        eyeClosed.classList.add("hidden");
      }
    }
  </script>
</body>
</html>
