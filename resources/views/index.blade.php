<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>POTATOBLOG</title>
</head>
<body>
    <!--potato kun start-->
    <div class="position-fixed bottom-0 end-0 mb-3 me-0">
        <div class="d-flex flex-wrap justify-content-center m-auto">
            <img src="./img/potatokun.jpg" alt="" style="width: 80px; height: auto;"/>
            <div class="w-100"></div>
            <img src="./img/potatokun-name.jpg" alt="" style="width: 150px; height: auto;">
        </div>
    </div>
    <!--potato kun end-->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-primary">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Potato BLOG</span>
        </a>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                  </svg>
              </button>
            <ul class="dropdown-menu">
                <li><a href="./login.html" class="dropdown-item">login</a></li>
                <li><a href="./signup.html" class="dropdown-item">signup</a></li>
                <li><a href="#" class="dropdown-item">u</a></li>
                <li><a href="#" class="dropdown-item">e</a></li>
                <li><a href="#" class="dropdown-item">o</a></li>
            </ul>
        </div>
    </header>
    
    <div class="Container d-flex justify-content-center py-3 mb-4">
        <h2 class="text-align-center border-bottom border-secondary">
            Welcome to Potato!
        </h2>
    </div>
    <div class="Container d-flex flex-wrap justify-content-center py-3 mb-4">
        <a href="{{ route('login') }}" class="btn btn-outline-primary mb-4 py-auto" style="width: 110px;">Logn</a>
        <div class="w-100"></div>
        <a href="{{ route('register') }}" class="btn btn-outline-primary mb-4 py-auto" style="width: 110px;">Sign Up</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>