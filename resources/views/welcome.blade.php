<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center flex-col">
    <div>
        <h1 class="text-[1rem]">header</h1>
    </div>
    <section class="border-3 px-1 py-1">
        <div class="grid grid-cols-1 grid-rows-1 gap-20">
            <div class="border-1 border-black h-[50vh] flex justify-center flex-col items-center gap-3">
                <div class="border-1 text-3xl">
                    <h1>salam</h1>
                </div>
                <div class="text-center border-1 w-[50vw] ">
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nostrum delectus cupiditate! Molestias placeat dicta perferendis veritatis, saepe deleniti. Modi repudiandae et voluptates quae facilis ratione accusantium debitis quasi magni.</h1>
                </div>
                <a href="{{ route('login') }}">
                    <button class="bg-blue-600 text-white px-6 py-3 rounded-4xl w-[10rem] hover:bg-blue-700 transition">
                        Mulai
                    </button>
                </a>
            </div>
        </div>
        <div class="h-[100vh] border-1">
            <h1></h1>
        </div>
    </section>
</body>
</html>