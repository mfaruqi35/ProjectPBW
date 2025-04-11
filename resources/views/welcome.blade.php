<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center flex-col overflow-x-hidden bg-[#F1F2F4]">
    <x-header/>
    <section class="px-1 py-1">
        <div class="grid grid-cols-1 grid-rows-1 gap-20">
            <div class="border-1 h-[60vh] flex justify-center flex-col items-center gap-3">
                <div class="text-5xl">
                    <h1 class="font-[Kanit] font-bold">Notudo</h1>
                </div>
                <div class="text-center w-[50vw] ">
                    <h1 class="font-[Kanit]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nostrum delectus cupiditate! Molestias placeat dicta perferendis veritatis, saepe deleniti. Modi repudiandae et voluptates quae facilis ratione accusantium debitis quasi magni.</h1>
                </div>
                <a href="{{ route('login') }}">
                    <button class="bg-blue-600 text-white text-lg px-6 py-2 rounded-4xl w-[15rem] font-[Kanit] font-bold hover:bg-blue-700 transition">
                        Mulai
                    </button>
                </a>
            </div>
        </div>
      <div class="h-[80vh]">
        <div class="grid w-full h-[50vh] p-1">
            <div class="py-2 px-3 flex flex-row justify-center gap-5">
                <div class="group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300">
                    <h1 class="font-bold text-xl">Task Board Interaktif</h1>
                    <p class="text-gray-600 opacity-0 group-hover:opacity-100 transition">Seret tugas antar kolom dengan mudah</p>
                </div>
                <div class="group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300">
                    <h1 class="font-bold text-xl">Kolaborasi Tim</h1>
                    <p class="text-gray-600 opacity-0 group-hover:opacity-100 transition">Kerjakan proyek bersama dalam satu ruangr</p>
                </div>
                <div class="group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300 flex flex-col">
                    <h1 class="font-bold text-xl">Pengingat dan Notifikasi Otomatis</h1>
                    <p class="text-gray-600 opacity-0 group-hover:opacity-100 transition">Ingatkan tugas & deadline tepat waktu.</p>
                </div>
            </div>
        </div>
      </div>
    </section>
    <x-footer/>
</body>
</html>