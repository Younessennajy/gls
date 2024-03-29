<body>
@include('head')
<header id="header">
    <div class="logo-section">
        <h1 class="text-black"><a href="/"><img src="img/logo.png" class='col-4' alt='img'></a></h1>
    </div>
    <nav class="menu-nav">
        <ul class='d-flex list-unstyled align-items-center mt-4 text-gray-800'>
            <li><a class="mx-4 bold text-decoration-none cursor-pointer hover:text-green-500" onclick="navigateTo('home')">@lang('public.Home')</a></li>
            <li><a class="mx-4 bold text-decoration-none cursor-pointer" onclick="navigateTo('about')">@lang('public.About')</a></li>
            <li><a class="mx-4 bold text-decoration-none cursor-pointer" href="/courses" >@lang('public.Courses')</a></li>
            <li><a class="mx-4 bold text-decoration-none cursor-pointer" onclick="navigateTo('Activities')">@lang('public.Activities')</a></li>
            <li><a class="mx-4 bold text-decoration-none cursor-pointer" onclick="navigateTo('galerie')">@lang('public.Gallery')</a></li>
            <li><a class="mx-4 bold text-decoration-none cursor-pointer" onclick="navigateTo('contact')">@lang('public.Contact')</a></li>
            <li><div class="dropdown">
                <button class="btn bold dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Language
                </button>
                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="locale/en">
                        <i class="flag-icon flag-icon-gb"></i> @lang('public.languages.English')
                    </a>
                    <a class="dropdown-item" href="locale/ar">
                        <i class="flag-icon flag-icon-eg"></i> @lang('public.languages.Arabic')
                    </a>
                    <a class="dropdown-item" href="locale/fr">
                        <i class="flag-icon flag-icon-fr"></i> @lang('public.languages.French')
                    </a>
                    <a class="dropdown-item" href="locale/de">
                        <i class="flag-icon flag-icon-de"></i> @lang('public.languages.German')
                    </a>

                </div>
              </div>

            </li>
        </ul>
    </nav>
    <div class="login-register-section">
        @if (Route::has('login'))
        <div class="d-flex justify-between align-items-center">
            @auth
            <a href="{{ url('/home') }} "><span style="font-size: 1.8rem;"><i class="bi bi-person"></i></span></a>
            @else
            <a href="{{ route('login') }}" class="mx-4 text-decoration-none" ><i class="bi-box-arrow-in-right"></i>@lang('public.Login')</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-decoration-none"><i class="bi-person-plus"></i> @lang('public.Register')</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</header>


