<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>
        <h1>YOG's Website UHUYY</h1>
    </header>
    
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    
    <footer>
        <p>&copy; 2024 YOG's Website. All rights reserved.</p>
    </footer>
</body>
</html>
