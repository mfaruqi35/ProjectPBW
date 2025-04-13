<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col bg-[#F1F2F4]">
    <header class="bg-white grid grid-rows-1 grid-cols-3 shadow-2xl fixed w-full z-999 px-5">
        <div class="flex items-center">
            <h1 class="font-[Kanit] font-bold text-[3rem] text-[#1868DB]">Notudo</h1>
        </div>
        <div class="flex justify-center items-center gap-20">
            <a href="#features">
                <h1 class="font-[Kanit] font-light text-[20px] text-black">Features</h1>
            </a>
            <a href="#about">
                <h1 class="font-[Kanit] font-light text-[20px] text-black">About</h1>
            </a>
        </div>
        <div class="flex items-center justify-end">
            <a href="{{ route('login') }}">
                <button class="rounded-md w-[8vw] h-[5vh] bg-[#1868DB] text-white font-[Kanit] font-light hover:bg-[#1846db]">Sign In</button>
            </a>
        </div>
    </header>
    <section>
        <div class="absolute bg-[url(/public/assets/banner4.jpg)] h-[80vh] w-full z-[-1] bg-center bg-no-repeat opacity-30">
        </div>
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="h-[80vh] flex justify-center flex-col items-center gap-3">
                <div class="text-5xl">
                    <h1 class="font-[Kanit]">Welcome to <span class="font-[Kanit] font-bold text-[#1868DB]">Notudo</span></h1>
                </div>
                <div class="w-[30vw] text-center">
                    <h1 class="font-[Kanit] font-light">Simplify your project with style and ease.</h1>
                </div>
                <a href="{{ route('register') }}">
                    <button class="btn-mulai">
                        Get Started
                    </button>
                </a>
            </div>
        </div>
      <div class="h-[80vh]" id="features">
        <div class="flex w-full h-[70vh] p-1 pt-5 flex-col">
            <div class="h-[15vh] w-full py-5 px-10 flex justify-center">
                <h1 class="font-[Kanit] font-bold text-4xl">What You Can Do with <span class="text-[#1868DB]">Notudo</span></h1>
            </div>
            <div class="py-5 px-3 flex flex-row justify-center gap-5 h-full flex-1">
                <div class="border-1 border-gray-300 group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300">
                    <h1 class="font-[Kanit] font-medium text-xl">Smart Notes</h1>
                    <p class="text-gray-600 py-1 font-[Kanit] font-light opacity-0 group-hover:opacity-100 transition">Organize your thoughts, ideas, and plans in one place with clean and simple notes.</p>
                    <img src="assets/feature_note.png" alt="">
                </div>
                <div class="border-1 border-gray-300  group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300">
                    <h1 class="font-[Kanit] font-medium text-xl">Collaboration Tools</h1>
                    <p class="text-gray-600 py-1 font-[Kanit] font-light opacity-0 group-hover:opacity-100 transition">Enhance teamwork and communication with powerful collaboration features.</p>
                    <img src="assets/feature_team.png" alt="">
                </div>
                <div class="border-1 border-gray-300 group w-[30vw] h-full shadow-md rounded-2xl bg-white p-6 hover:shadow-2xl hover:-translate-y-1 transition transform duration-300 flex flex-col">
                    <h1 class="font-[Kanit] font-medium text-xl">Project Tracking</h1>
                    <p class="text-gray-600 py-1 font-[Kanit] font-light opacity-0 group-hover:opacity-100 transition">Track progress, milestones, and deadlines with precision for successful project management.</p>
                    <img src="assets/feature_todo.png" alt="">
                </div>
            </div>
        </div>
      </div>
    </section>
    <section class="bg-white py-10 px-4 md:px-10">
        <div class="max-w-6xl mx-auto text-center">
          <h2 class="text-3xl md:text-4xl font-bold font-[Kanit] text-[#1846db] mb-12">
            How It <span class="text-gray-800">Works</span>
          </h2>
      
          <div class="grid md:grid-cols-3 gap-10 text-left">
            <!-- Step 1 -->
            <div class="bg-blue-50 rounded-lg shadow-md p-6 transition hover:-translate-y-1 hover:shadow-xl duration-300">
              <div class="text-4xl text-blue-700 font-bold mb-4">1</div>
              <h3 class="text-xl font-semibold font-[Kanit] mb-2">Sign up & Login</h3>
              <p class="text-gray-600">Create your Notudo account to kickstart your project management journey. It's fast, simple, and free!</p>
            </div>
      
            <!-- Step 2 -->
            <div class="bg-blue-50 rounded-lg shadow-md p-6 transition hover:-translate-y-1 hover:shadow-xl duration-300">
              <div class="text-4xl text-blue-700 font-bold mb-4">2</div>
              <h3 class="text-xl font-semibold font-[Kanit] mb-2">Create Your Project</h3>
              <p class="text-gray-600">Start organizing by creating a new project. Set up your to-do list and invite team members to collaborate.</p>
            </div>
      
            <!-- Step 3 -->
            <div class="bg-blue-50 rounded-lg shadow-md p-6 transition hover:-translate-y-1 hover:shadow-xl duration-300">
              <div class="text-4xl text-blue-700 font-bold mb-4">3</div>
              <h3 class="text-xl font-semibold font-[Kanit] mb-2">Manage & Track Progress</h3>
              <p class="text-gray-600">Easily track tasks, schedules, and your team’s progress in one visual and efficient dashboard.</p>
            </div>
          </div>
        </div>
      </section>
      
    <footer class="bg-gray-900 text-white p-6 text-sm font-[Kanit]" id="about">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-6">
          <div>
            <h3 class="font-bold mb-2">About Us</h3>
            <p>Made by Affan & Faruqi</p>
            <p class="mt-1">Syiah Kuala University Informatics Students 2025</p>
          </div>
          <div>
            <h3 class="font-bold mb-2">Contact</h3>
            <ul>
              <li><a href="mailto:yanuar@example.com">affan@example.com</a></li>
              <li><a href="mfaruqi23@mhs.usk.ac.id">mfaruqi23@mhs.usk.ac.id</a></li>
            </ul>
          </div>
          <div>
            <h3 class="font-bold mb-2">Made with</h3>
            <ul>
              <li>Laravel + TailwindCSS</li>
              <li>MySQL + Blade</li>
            </ul>
          </div>
        </div>
        <div class="mt-6 text-center border-t border-gray-700 pt-4 text-xs">
          © 2025 Affan & Faruqi. All rights reserved.
        </div>
      </footer>
</body>
</html>