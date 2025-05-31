<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notudo Register</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="w-screen h-screen bg-[url(/public/assets/background.png)] flex justify-center items-center">
        <div class="shadow-lg p-20 rounded-3xl flex justify-center items-center flex-col bg-white">
            <div class="flex flex-col">
                <h1 class="font-bold font-[Kanit] text-[3rem] text-center text-[#1868DB]">Notudo</h1>
                <p class="pb-[1rem] text-center">Sign up to continue</p>
            </div>

            <div class="flex flex-col gap-5">
                <form action="" class="pb-[1rem]">
                <input type="email" class="border-b-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:border-b-1 focus:border-[#1868DB] focus:outline-none" placeholder="Username" >
                </form>
                <form action="" class="pb-[1rem]">
                <input type="email" class="border-b-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:border-b-1 focus:border-[#1868DB] focus:outline-none" placeholder="Email" >
                </form>
                <form action="" class="pb-[1rem]">
                <input type="email" class="border-b-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:border-b-1 focus:border-[#1868DB] focus:outline-none" placeholder="Password" >
                </form>
                <form action="" class="pb-[1rem]">
                    <button class=" rounded-sm bg-[#1868DB] hover:bg-[#2518db] duration-[0.1s] w-[25vw] h-[6vh] focus:outline-2 focus:outline-offset-2 focus:outline-[#1868DB]">
                        <a href="{{ route('welcome') }}" class="text-white">Sign up</a>
                    </button>
                </form>

            </div>
        
            <a href="/login" class="w-[25vw] flex justify-end">
                <h1 class="flex justify-end w-[100%] text-sky-600 font-semibold hover:underline text-1xl text-left">Already have a Notudo account? Log in</h1>
            </a>
        </div>
    </div>
</body>
</html>