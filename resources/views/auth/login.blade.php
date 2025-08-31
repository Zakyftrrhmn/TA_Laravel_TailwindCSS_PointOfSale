<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penjualan Login</title>

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
            background: #F6F8FD;
            overflow: hidden;
        }

        .glass-card {
            background: #ffffff;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        }

        .gradient-button {
            background: linear-gradient(to right, #6d28d9, #8b5cf6);
        }

        .gradient-button:hover {
            background: linear-gradient(to right, #5b21b6, #7c3aed);
        }
    </style>
</head>
<body class="flex sm:items-center justify-center min-h-screen cloud-bg">
    
    <!-- Logo Sistem Penjualan di pojok kiri atas -->
    <div class="absolute top-8 left-8 flex items-center z-20">
        <img src="{{asset('assets/images/logo/logo1.png')}}" class="w-8 h-8" alt="logo">
        <span class="text-md font-semibold ml-2 text-red-600 filter drop-shadow-md">Sistem Penjualan</span>
    </div>

    <!-- Bagian kiri: Form Login -->
    <div class="w-4/6 flex items-center justify-center">
        <div class="w-full max-w-sm p-6 sm:p-8 rounded-3xl glass-card text-center relative z-10">

            <!-- Ikon -->
            <div class="flex justify-center mb-6">
                <div class="p-3 bg-white/20 rounded-full glass-card border-none">
                    <img src="{{asset('assets/images/logo/logo1.png')}}" class="w-8 h-8" alt="logo">
                </div>
            </div>
            
            <div class="flex flex-col gap-y-6 items-center justify-center text-center">
                <span class="font-semibold uppercase text-xs  py-1 px-3 rounded-full text-blue-600 bg-blue-200 w-fit">
                    Mulai Transaksi
                </span>
                <div>
                    <h2 class="text-xl font-bold text-gray-800 tracking-tight">
                        Selamat Datang
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Transaksi lebih mudah, cepat, dan teratur dengan sistem penjualan Sarana Paraga.
                    </p>
                </div>
            </div>


            
            <!-- Formulir Login -->
            <form class="mt-6 space-y-4">
                <!-- Email -->
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                        <i class='bx bx-envelope w-5 h-5'></i>
                    </span>
                    <input type="email" placeholder="Email" 
                        class="w-full pl-12 pr-4 py-3 bg-white/50 text-sm rounded-lg text-gray-800 
                        placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 
                        transition-colors border border-gray-200">
                </div>

                <!-- Password -->
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                        <i class='bx bxs-lock w-5 h-5'></i>
                    </span>
                    <input id="password" type="password" placeholder="Password"
                        class="w-full pl-12 pr-12 py-3 bg-white/50 rounded-lg text-gray-800 
                        placeholder-gray-500 text-sm focus:outline-none focus:ring-2 
                        focus:ring-gray-500 transition-colors border border-gray-200">

                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer text-gray-400"
                        onclick="togglePassword()">
                        <i id="eyeOpen" class='bx bx-show w-5 h-5'></i>
                        <i id="eyeClosed" class='bx bxs-low-vision w-5 h-5 hidden'></i>
                    </span>
                </div>

                <!-- Tombol -->
                <button type="submit" 
                    class="w-full py-3 mt-4 rounded-lg text-white bg-black 
                    transition-all duration-200 transform hover:scale-105">
                    Login
                </button>
            </form>
            
        </div>
    </div>

    <!-- Bagian kanan: Ilustrasi -->
    <div class="w-2/6 h-screen md:block hidden rounded-l-[10px] overflow-hidden drop-shadow-md">
        <img src="{{asset('assets/images/bg-login.png')}}" 
             alt="Ilustrasi" 
             class="w-full h-full object-cover ">
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
