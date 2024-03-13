
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GLS Fes</title>
    <link rel="stylesheet" href="app.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
          <x-app-layout>
            <div class="py-12 w-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 ">
                            <!-- ======= Sidebar ======= -->
                            <aside id="sidebar" class="sidebar">
                                <ul class="sidebar-nav" id="sidebar-nav">

                                <li class="nav-heading">Pages</li>

                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="/profile">
                                        <i class="bi bi-person"></i>
                                            <span>Profile</span>
                                    </a>
                                </li><!-- End Profile Page Nav -->

                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="/courses">
                                        <i class="bi bi-journal-text"></i>
                                            <span>Courses</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="{{ url('/courses/create') }}">
                                        <i class="bi bi-plus"></i>
                                            <span>Add New</span>
                                    </a>
                                </li>

                                </ul>
                            </aside>
                            <main class="text-black">
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>

</body>
</html>
