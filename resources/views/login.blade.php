<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notudo Login</title>
    @vite('resources/css/app.css')  
</head>
<body>
    <div class="w-screen h-screen bg-[url(/public/assets/background.png)] flex justify-center items-center">
        <div class="shadow-lg p-20 rounded-3xl flex justify-center items-center flex-col bg-white relative">

        <div class="absolute top-[80px] left-[80px] cursor-pointer">
            <a href="/">
                <img class="w-[3rem] h-[3rem]" src="assets/arrow-left-solid.svg">
            </a>
        </div>

            <div class="flex flex-col">
                <h1 class="font-bold text-[3.5rem] text-center font-[Kanit] text-[#1868DB]">Notudo</h1>
                <p class="pb-[1.5rem] text-center">Log in to continue</p>
            </div>

            <div class="flex flex-col gap-5 mb-5">

                <form action="" class="pb-[1rem]">
                <input type="email" class="border-b-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:border-b-1 focus:border-[#1868DB] focus:outline-none" placeholder="Email" >
                </form>

                <form action="" class="pb-[1rem]">
                    <input type="password" class="border-b-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:border-b-1 focus:border-[#1868DB] focus:outline-none" placeholder="Password" minlength={18}>
                </form>

                <form action="" class="pb-[1rem]">
                <a href="/dashboard" class="rounded-sm bg-[#1868DB] hover:bg-[#2518db] duration-[0.1s] w-[25vw] h-[6vh] focus:outline-2 focus:outline-offset-2 focus:outline-[#1868DB] cursor-pointer text-[#fff] flex items-center justify-center">
    Continue
</a>
                </form>
            </div>
            
            <a href="/register" class="w-[25vw] flex justify-end">
                <h1 class="font-semibold hover:underline text-sky-600 text-1xl text-left">New here? Register</h1>
            </a>
        </div>
    </div>
</body>
</html>