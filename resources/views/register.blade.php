<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notudo Register</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5KwQ/BMPRjW7tz8J6pgep/brh" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="w-screen h-screen bg-[url(/assets/background.png)] flex justify-center items-center">
        <div class="shadow-lg p-20 rounded-3xl flex justify-center items-center flex-col bg-white relative"> {{-- p-30 diganti p-20 untuk konsistensi --}}

        <div class="absolute top-[80px] left-[80px] cursor-pointer">
            <a href="{{ route('home') }}"> {{-- Menggunakan route name --}}
                <img class="w-[3rem] h-[3rem]" src="/assets/arrow-left-solid.svg"> {{-- Perbaikan jalur gambar --}}
                {{-- Atau jika ingin pakai Font Awesome: <i class="fas fa-arrow-left text-gray-500 hover:text-gray-700 text-3xl"></i> --}}
            </a>
        </div>
            <div class="flex flex-col">
                <h1 class="font-bold font-[Kanit] text-[3.5rem] text-center text-[#1868DB]">Notudo</h1> {{-- Konsistenkan ukuran font --}}
                <p class="pb-[1rem] text-center">Sign up to continue</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 w-full" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="flex flex-col gap-5 w-full"> {{-- Menambah w-full untuk konsistensi --}}
                {{-- **Ini adalah SATU form untuk seluruh proses register** --}}
                <form action="{{ route('register') }}" method="POST" class="w-full">
                    @csrf {{-- **Penting: CSRF Token** --}}

                    <div class="pb-[1rem]"> {{-- Container untuk input Username --}}
                        <input type="text" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus
                               class="
                                    border-b border-[#8c8c8c]
                                    rounded-sm w-[25vw] h-[6vh] p-2
                                    focus:border-b-2 focus:border-[#1868DB] focus:outline-none
                                    @error('username') border-b-red-500 @else border-b-[#8c8c8c] @enderror
                               "
                               placeholder="Username">
                        @error('username')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pb-[1rem]"> {{-- Container untuk input Email --}}
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                               class="
                                    border-b border-[#8c8c8c]
                                    rounded-sm w-[25vw] h-[6vh] p-2 mt-5 {{-- Tambah mt-5 sesuai layout Anda --}}
                                    focus:border-b-2 focus:border-[#1868DB] focus:outline-none
                                    @error('email') border-b-red-500 @else border-b-[#8c8c8c] @enderror
                               "
                               placeholder="Email">
                        @error('email')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pb-[1rem]"> {{-- Container untuk input Password --}}
                        <input type="password" name="password" required autocomplete="new-password"
                               class="
                                    border-b border-[#8c8c8c]
                                    rounded-sm w-[25vw] h-[6vh] p-2 mt-5 {{-- Tambah mt-5 sesuai layout Anda --}}
                                    focus:border-b-2 focus:border-[#1868DB] focus:outline-none
                                    @error('password') border-b-red-500 @else border-b-[#8c8c8c] @enderror
                               "
                               placeholder="Password">
                        @error('password')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pb-[1rem]"> {{-- Container untuk input Confirm Password --}}
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                               class="
                                    border-b border-[#8c8c8c]
                                    rounded-sm w-[25vw] h-[6vh] p-2 mt-5 {{-- Tambah mt-5 sesuai layout Anda --}}
                                    focus:border-b-2 focus:border-[#1868DB] focus:outline-none
                                    @error('password_confirmation') border-b-red-500 @else border-b-[#8c8c8c] @enderror
                               "
                               placeholder="Confirm Password">
                        {{-- Pesan error untuk password_confirmation biasanya muncul di field 'password' oleh validasi 'confirmed' --}}
                        {{-- @error('password_confirmation')
                            <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                        @enderror --}}
                    </div>

                    {{-- **Tombol Submit Form Register** --}}
                    <button type="submit" class="rounded-sm bg-[#1868DB] hover:bg-[#2518db] duration-[0.1s] w-[25vw] h-[6vh] focus:outline-2 focus:outline-offset-2 focus:outline-[#1868DB] cursor-pointer text-[#fff] flex items-center justify-center mt-5">
                        Continue
                    </button>
                </form>
            </div>

            <a href="{{ route('login') }}" class="w-[25vw] flex justify-end"> {{-- Menggunakan route name --}}
                <h1 class="flex justify-end w-[100%] text-sky-600 font-semibold hover:underline text-1xl text-left">Already have a Notudo account? Log in</h1>
            </a>

        </div>
    </div>
</body>
</html>