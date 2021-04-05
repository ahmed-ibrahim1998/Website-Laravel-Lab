<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HomePage</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
        <div class="container"><a href='/posts' class="navbar-brand d-flex align-items-center"> <i
                    class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong>Ahmed Ibrahim</strong></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/home" class="nav-link font-italic"> Home </a></li>
                    <li class="nav-item active"><a href="/about" class="nav-link font-italic"> About </a></li>
                    <li class="nav-item active"><a href="#" class="nav-link font-italic"> Services </a></li>
                    <li class="nav-item active"><a href="/contact" class="nav-link font-italic"> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-danger text-center">
        @yield('danger')
    </h1>

    <h1 class="text-info text-center">
        @yield('Home')
    </h1>

    <h1 class="text-warning text-center">
        @yield('warning')
    </h1>

    <div class="text-warning container">
        @yield('post')
    </div>

    <div>
        @yield('add')
    </div>
    <h1>
        @yield('show')
    </h1>
    <div>
        @yield('edit')
    </div>
    <div class="container">
        @yield('postspage')
    </div>
    <div>
        @yield('book')
    </div>
    <div class="container">
        @yield('POST')
    </div>
    <div>
        @yield('auth')
    </div>
    <footer class="bg-light pb-5">
        <div class="container text-center">
            <p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
