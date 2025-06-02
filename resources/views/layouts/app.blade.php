<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <x-aside />
    
    <div>
        @yield('content')
    </div>
    
</body>
</html>
