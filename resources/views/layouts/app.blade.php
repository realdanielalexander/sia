<!DOCTYPE html>
<html lang="en">

<head>
    <title>@lang('menu.title')</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" charset="utf=8"></script>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">@lang('menu.title')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>


        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">@lang('menu.home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/majors">@lang('menu.majors')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/students">@lang('menu.students')</a>
                </li>
            </ul>
        </div>


        <!-- Menu pilihan bahasa -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Session::has('app_locale'))
                    {{ Str::upper(Session::get('app_locale')) }}
                    @else
                    {{ Str::upper(App::getLocale()) }}
                    @endif

















































                </a>


                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/locale/en">EN</a>
                    <a class="dropdown-item" href="/locale/id">ID</a>

                </div>
            </li>
        </ul>
    </nav>
    <!-- Biarkan yang lainnya -->
    <div class="container" style="padding-top: 80px">
        @yield('content')
    </div>
</body>

</html>