
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>GLS Fes</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <x-app-layout>
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/courses">
                    <i class="bi bi-journal-text"></i>
                        <span>Courses</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/profile">
                    <i class="bi bi-person"></i>
                        <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="create">
                    <i class="bi bi-plus"></i>
                        <span>Add New</span>
                </a>
            </li>
            </ul>

        </aside>
        <div class="container">
            @yield('content')
        </div>

        <div class="create">
            @yield('create')
        </div>

    </x-app-layout>


