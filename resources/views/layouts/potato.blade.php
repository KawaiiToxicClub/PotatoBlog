<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title', 'POTATOBLOG')</title>
</head>
<body>
    <!-- Potato Kun -->
    <div class="position-fixed bottom-0 end-0 mb-3 me-0">
        <div class="d-flex flex-wrap justify-content-center m-auto">
            <img src="{{ asset('img/potatokun.jpg') }}" alt="Potato Kun" style="width: 80px; height: auto;"/>
            <div class="w-100"></div>
            <img src="{{ asset('img/potatokun-name.jpg') }}" alt="Potato Kun Name" style="width: 150px; height: auto;">
        </div>
    </div>
    <!-- Potato Kun End -->

    <!-- Header -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-primary">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">Potato BLOG</span>
        </a>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                <li><a href="{{ route('register') }}" class="dropdown-item">Sign Up</a></li>
            </ul>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
