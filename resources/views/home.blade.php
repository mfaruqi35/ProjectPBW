@extends('components.layouts.app-layout')
@section('title', 'dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Notudo Home</title>
    </head>
    <body>
        <div class="bg-white p-6 rounded-lg shadow 
        hover:shadow-2xl hover:-translate-y-2 
        hover:scale-100 transform transition duration-300">
<h3 class="text-xl font-bold">Fitur Keren</h3>
<p>Notudo membuat manajemen kerja jadi lebih mudah.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md 
            hover:shadow-xl hover:-translate-y-1 
            transition transform duration-300">
    <h2 class="text-lg font-semibold">Card Title</h2>
    <p class="text-gray-600">Deskripsi kontennya di sini.</p>
</div>

<div class="group bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
    <h2 class="text-xl font-bold text-gray-800">Fitur Keren</h2>
    <p class="text-gray-600 opacity-0 group-hover:opacity-100 transition">
        Deskripsi ini hanya muncul saat hover!
    </p>
</div>


        
    </body>
    </html>
@endsection