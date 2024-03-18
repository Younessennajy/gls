<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <style>

    </style>
</head>
<body>

<header id="header">
    <div class="logo-section">
        <h1 class="text-black"><a href="/"><img src="img/logo.png" class='col-4' alt='img'></a></h1>
    </div>
    <nav class="menu-nav">
        <ul class='d-flex list-unstyled align-items-center mt-4 text-gray-800'>
            <li><a class="mx-4 bold text-decoration-none hover:text-green-500"  href="#home">Home</a></li>
            <li><a class="mx-4 bold text-decoration-none" href="#about">About</a></li>
            <li><a class="mx-4 bold text-decoration-none" href="/courses">Courses</a></li>
            <li><a class="mx-4 bold text-decoration-none"  href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="login-register-section">
        @if (Route::has('login'))
        <div class="d-flex justify-between align-items-center">
            @auth
            <a href="{{ url('/home') }} "><span style="font-size: 1.8rem;"><i class="bi bi-person"></i></span></a>
            @else
            <a href="{{ route('login') }}" class="mx-4 text-decoration-none" ><i class="bi-box-arrow-in-right"></i> Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-decoration-none"><i class="bi-person-plus"></i> Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</header>

</body>
</html>
