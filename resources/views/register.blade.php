<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="w-screen h-screen bg-[url(/public/assets/background.png)] flex justify-center items-center">
        <div class="shadow-lg w-[30vw] h-[90vh] flex justify-center items-center flex-col bg-white">
            <div class="flex flex-col">
                <h1 class="font-bold font-[Arial] text-[3rem] text-center">Notudo</h1>
                <p class="pb-[1rem] text-center">Sign up to continue</p>
            </div>
            <form action="" class="pb-[1rem]">
                <input type="email" class="border-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:outline-1 focus:outline-[#1868DB]" placeholder="Email" >
            </form>
            <form action="" class="pb-[1rem]">
                <input type="password" class="border-1 border-[#8c8c8c] rounded-sm w-[25vw] h-[6vh] p-2 focus:outline-1 focus:outline-[#1868DB]" placeholder="Password" minlength={18}>
            </form>
            <form action="" class="pb-[1rem]">
                <button class=" rounded-sm bg-[#1868DB] hover:bg-[#2518db] duration-[0.1s] w-[25vw] h-[6vh] focus:outline-2 focus:outline-offset-2 focus:outline-[#1868DB]"><span class="text-white">Sign Up</span></button>
            </form>
            <h1 class="text-[15px] font-300">Or continue with:</h1>
            <div class="gap-2 flex flex-col py-2 ">
                    <button class="border-1 rounded-sm w-[25vw] border-[#8c8c8c] h-[6vh] p-1 flex justify-center items-center gap-x-1 hover:bg-[#ececec] duration-[0.1s] focus:outline-2 focus:outline-[#1868DB]">
                        <span><img src="/Google.png" alt="" width="20" height="16"></span>
                        <span>Google</span>
                    </button>
               <button class="border-1 rounded-sm w-[25vw] border-[#8c8c8c] h-[6vh] p-1 flex justify-center items-center gap-x-1 hover:bg-[#ececec] duration-[0.1s] focus:outline-2 focus:outline-[#1868DB]">
                <span><img src="Icon.jpeg" alt="" width="16" height="16"></span>
                <span>Microsoft</span>
               </button>
            </div>
            <a href="/login" class="w-[25vw] flex justify-center">
                <h1 class="text-sky-600 font-light hover:underline">Already have a Notudo account? log in</h1>
            </a>
        </div>
    </div>
</body>
</html>