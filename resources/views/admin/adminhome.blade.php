
@include('head')
<body>
    <x-app-layout>
        <div class="mt-5">
            <h2 style="margin-left: 290px;font-family: Poppins, sans-serif;margin-bottom: -120px"> Dashboard Admin</h2>
        </div>
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/profile">
                    <i class="bi bi-person"></i>
                        <span>Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/courses">
                    <i class="bi bi-journal-text"></i>
                        <span>Courses</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="create">
                    <i class="bi bi-plus"></i>
                        <span>Add New</span>
                </a>
            </li>
            </ul>

        </aside>
    </x-app-layout>
        <div class="container">
            @yield('content')
        </div>

        <div class="create">
            @yield('create')
        </div>




