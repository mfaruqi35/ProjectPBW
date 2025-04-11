<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <x-navbar />
    <x-aside />
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
