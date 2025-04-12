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
    <section>
        <div class="absolute bg-[url(/public/assets/background.png)] h-[60vh] w-full z-[-1] bg-center bg-no-repeat opacity-40">
        </div>
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="h-[60vh] flex justify-center flex-col items-center gap-3">
                <div class="text-5xl">
                    <h1 class="font-[Kanit]">Welcome to <span class="font-[Kanit] font-bold text-[#1868DB]">Notudo</span></h1>
                </div>
                <div class="w-[30vw] text-center">
                    <h1 class="font-[Kanit] font-light">Simplify your project with style and ease.</h1>
                </div>
                <a href="{{ route('login') }}">
                    <button class="btn-mulai">
                        Get Started
                    </button>
                </a>
            </div>
        </div>
      <div class="h-[80vh]">
        <div class="flex w-full h-[70vh] p-1 flex-col">
            <div class="h-[15vh] w-full pl-10">
                <h1 class="font-[Kanit] font-bold text-[50px]">Key Features</h1>
                <p class="font-[Kanit] font-light">Explore the essential features that make Notudo the ultimate project management tool.</p>
            </div>
            <div class="py-2 px-3 flex flex-row justify-center gap-5 h-full flex-1">
                <div class="border-1 border-gray-300 group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300">
                    <h1 class="font-[Kanit] font-medium text-xl">Task Management</h1>
                    <p class="text-gray-600 py-1 font-[Kanit] font-light opacity-0 group-hover:opacity-100 transition">Effortlessly organize and prioritize tasks for seamless project execution.</p>
                </div>
                <div class="border-1 border-gray-300  group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300">
                    <h1 class="font-[Kanit] font-medium text-xl">Collaboration Tools</h1>
                    <p class="text-gray-600 py-1 font-[Kanit] font-light opacity-0 group-hover:opacity-100 transition">Enhance teamwork and communication with powerful collaboration features.</p>
                </div>
                <div class="border-1 border-gray-300 group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300 flex flex-col">
                    <h1 class="font-[Kanit] font-medium text-xl">Project Tracking</h1>
                    <p class="text-gray-600 py-1 font-[Kanit] font-light opacity-0 group-hover:opacity-100 transition">Track progress, milestones, and deadlines with precision for successful project management.</p>
                </div>
            </div>
        </div>
      </div>
    </section>
    <x-footer/>
</body>
</html>