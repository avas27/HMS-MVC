<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <title>Hotel Management System</title>
</head>
<body>
    <div class="navbar nav navbar-collapse-sm bg-dark">
        <a href="#" class="navbar-brand font-weight-bold text-warning">Nav</a>
        <ul class="nav">
            <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
        </ul>
    </div>
    <div class="container d-flex flex-center">
        @yield('content')
    </div>
</body>
</html>