<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notudo - Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5KwQ/BMPRjW7tz8J6pgep/brh" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang di Notudo!</h1>

            {{-- **Cara menampilkan nama user yang sedang login** --}}
            @auth
                <p class="text-xl">Halo, <span class="font-semibold text-[#1868DB]">{{ Auth::user()->name }}</span>!</p>
                <p class="text-gray-600">Email Anda: {{ Auth::user()->email }}</p>
            @endauth

            <p class="mt-4 text-gray-700">Ini adalah halaman Notudo Anda. Anda bisa menambahkan konten dan fitur di sini.</p>

            <div class="mt-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Logout
                    </button>
                </form>

                <button onclick="window.history.back()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center ml-2">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </button>
            </div>
        </div>
    </div>
</body>
</html>