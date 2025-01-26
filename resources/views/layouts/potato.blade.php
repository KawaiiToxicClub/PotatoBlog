<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>@yield('title', 'POTATOBLOG')</title>
</head>
<body>
    <!-- Potato Kun Section -->
    <div class="position-fixed bottom-0 end-0 mb-3 me-0">
        <div class="d-flex flex-wrap justify-content-center m-auto">
            <img src="./img/potatokun.png" alt="" style="width: 80px; height: auto;" />
            <div class="w-100"></div>
            <img src="./img/potatokun-name.jpg" alt="" style="width: 150px; height: auto;" />
        </div>
    </div>
    <!-- End Potato Kun Section -->

    <!-- Header Section -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-primary">
        <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Potato BLOG</span>
        </a>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>
            <ul class="dropdown-menu">
                <li><a href="{{ route('dashboard') }}" class="dropdown-item">トップ</a></li>
                <li><a href="{{ route('list') }}" class="dropdown-item">一覧</a></li>
                <li><a href="{{ route('create') }}" class="dropdown-item">作成</a></li>
                <li><a href="{{ route('login') }}" class="dropdown-item">login</a></li>
                <li><a href="{{ route('register') }}" class="dropdown-item">signup</a></li>
                <li><a href="#" class="dropdown-item">o</a></li>
            </ul>
        </div>
    </header>
    <!-- End Header Section -->
    
    <!-- Main Content Section -->
    <div class="container">
        @yield('content')
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

<!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybHyE4k2M6h3pZb94J6CpJ8E9Le6o/8/poC5g7gOd7z9gk81F4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-cuD+ABkXrx6fO6Ekmnt9vLvYZFAGZtnTQyT+v4GgFnwzjftDwsLtHRGjpctkh9hb" crossorigin="anonymous"></script>
</body>
</html>
