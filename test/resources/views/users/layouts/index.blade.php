<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!--google incon-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <header class="bg-success p-2 text-white fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link linkActive text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Link</a>
                        </li>
                    </ul>
                    @yield('search')
                    <ul class="navbar-nav  mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Login / Register
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <img src="assets/ammar.jpg" alt="Avatar" style="width:50px; height: 50px;"
                                        class="rounded-pill">
                                </a>
                                <!--logout btn in form -->
                                <form class="d-inline-block" action="logout.php" method="post">
                                    <button class="btn btn-outline-light" type="submit">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--end header-->
    <div class="clean-top"></div>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 fixed-top margin-top-5">
                <nav class="navbar">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
                <div class="collapse w-50" id="navbarToggleExternalContent">
                    <ul class="list-group text-black">
                        <li class="list-group-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="list-group-item">
                            <a href="about.php">About</a>
                        </li>
                        <li class="list-group-item">
                            <a href="contact.php">Contact</a>
                        </li>
                        <li class="list-group-item">
                            <a href="login.php">Login</a>
                        </li>
                        <li class="list-group-item">
                            <a href="register.php">Register</a>
                        </li>
                    </ul>
                </div>
            </aside>
            @yield('posts')
            @yield('content')

            <footer>

            </footer>
            <script src="{{ asset('assets/js/app.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
