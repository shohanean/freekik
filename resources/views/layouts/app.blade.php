<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - {{ env('APP_DESCRIPTION') }}</title>
    <link rel="shortcut icon" href="{{ env('PROJECT_FAVICON') }}" />
    <link rel="stylesheet" href="{{ asset('app_assets') }}/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/5779382e95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('app_assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('app_assets') }}/scss/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg my-3" id="navbar" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand fw-semibold text-white d-flex fs-3 align-items-center" href="index.html"><i
                    class="fa-brands fa-connectdevelop pe-2 fs-1" style="color: white;"></i>FreeWeek</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <div class="navbar-collapse container">
                    <ul class="navbar-nav mt-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="search-product.html">Vectors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Photos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#inner">PSD</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="search-product.html">Vector</a></li>
                                <li><a class="dropdown-item" href="#">Illustration</a></li>
                                <li><a class="dropdown-item" href="search-product.html">Photos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">More</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Vector</a></li>
                                <li><a class="dropdown-item" href="#">Illustration</a></li>
                                <li><a class="dropdown-item" href="#">Photos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex flex-column flex-md-row align-items-md-center ms-auto">
                        <a href="" class="text-white me-4 text-decoration-none">Sell your content</a>
                        <a href="" class="text-white me-4 text-decoration-none">Pricing</a>
                        <!-- <p class="mb-0">
                            <a href="" class="text-white me-4 text-decoration-none fw-semibold" id="login">Log in</a>
                            <a href="register.html" class="text-white me-4 text-decoration-none fw-semibold">Sign up</a>
                        </p>  -->
                        <a href="" class="text-white me-4">
                            <i class="fa-regular fa-bell"></i>
                        </a>
                        @guest
                        <div class="btn-group">
                            <button type="button" class="text-white border-0 bg-transparent dropdown-toggle"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img src="https://www.portmelbournefc.com.au/wp-content/uploads/2022/03/avatar-1.jpeg" class="rounded-circle" alt=""
                                    style="width: 30px; height: 30px;">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                                <div class="d-flex align-items-center">
                                    <div class="info_user">
                                        <a href="{{ route('register') }}" class="btn btn-primary fw-light mt-2">Register/Login</a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        @endguest
                        @auth
                        <div class="btn-group">
                            <button type="button" class="text-white border-0 bg-transparent dropdown-toggle"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img src="{{ (auth()->user()->avatar) ? asset(auth()->user()->avatar) : Avatar::create(auth()->user()->name)->toBase64() }}" alt="not found" style="width: 30px; height: 30px;">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{ (auth()->user()->avatar) ? asset(auth()->user()->avatar) : Avatar::create(auth()->user()->name)->toBase64() }}" alt="not found" style="width: 70px; height: 70px;">
                                    <div class="info_user ps-3">
                                        <a href="" class="text-secondary text-decoration-none">{{ auth()->user()->name }}</a>
                                        <a href="" class="text-secondary fw-light text-decoration-none">{{ auth()->user()->email }}</a>
                                        <a href="{{ route('profile.index') }}" class="btn btn-primary fw-light mt-2">Edit Profile</a>
                                    </div>
                                </div>
                                <hr>
                                <li class="d-flex align-items-center fw-lighter my-2">
                                    <a href="{{ route('home') }}">
                                        <button class="border-0 bg-transparent ps-2 fw-light fs-6" type="button"><i class="fa-sharp fa-solid fa-house"></i> Dashboard </button>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center fw-lighter my-2">
                                    <i class="fa-regular fa-heart"></i>
                                    <button class="border-0 bg-transparent ps-2 fw-light fs-6" type="button">FAVORITES</button>
                                </li>
                                <li class="d-flex align-items-center my-2"><i
                                        class="fa-regular fa-circle-down"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light" type="button">DOWNLOADS</button>
                                </li>
                                <li class="d-flex align-items-center my-2"><i class="fa-regular fa-user"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light fs-6"
                                        type="button">FOLLOWING</button>
                                </li>
                                <li class="d-flex align-items-center my-2"><i class="fa-solid fa-grip"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light fs-6"
                                        type="button">COLLECTIONS</button>
                                </li>
                                <hr>

                                <li class="d-flex align-items-center my-2"><i class="fa-solid fa-laptop"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light"
                                        type="button fs-6">DEVICES</button>
                                </li>
                                <li class="d-flex align-items-center my-2"><i
                                        class="fa-regular fa-credit-card"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light" type="button">MY
                                        SUBSCRIPTION</button></li>
                                <li class="d-flex align-items-center my-2"><i class="fa-solid fa-headset"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light"
                                        type="button fs-6">SUPPORT</button>
                                </li>
                                <hr>
                                <li class="d-flex align-items-center my-2">

                                    <button onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="border-0 bg-transparent ps-2 text-danger" type="button"><i class="fa-solid fa-power-off"></i> Logout </button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <footer class="py-5 mt-5" style="background-color: #1d262d;">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col text-center text-md-start mb-3 mb-lg-0">
                    <h6 class="text-white">CONTENT</h6>
                    <div class="d-flex flex-column">
                        <a href="" class="web-footer-color text-decoration-none">New images</a>
                        <a href="" class="web-footer-color text-decoration-none">The most popular content</a>
                        <a href="" class="web-footer-color text-decoration-none">Search trends</a>
                        <a href="" class="web-footer-color text-decoration-none">
                            Blog</a>
                    </div>
                </div>
                <div class="col text-center text-md-start mb-3 mb-lg-0">
                    <h6 class="text-white">INFORMATION</h6>
                    <div class="d-flex flex-column">
                        <a href="" class="web-footer-color text-decoration-none">Plans & pricing</a>
                        <a href="" class="web-footer-color text-decoration-none">About us</a>
                        <a href="" class="web-footer-color text-decoration-none">Jobs</a>
                        <a href="" class="web-footer-color text-decoration-none">Sell your content</a>
                    </div>
                </div>
                <div class="col text-center text-md-start mb-3 mb-lg-0">
                    <h6 class="text-white">LEGAL</h6>
                    <div class="d-flex flex-column">
                        <a href="" class="web-footer-color text-decoration-none">Terms & Conditions</a>
                        <a href="" class="web-footer-color text-decoration-none">License Agreement</a>
                        <a href="" class="web-footer-color text-decoration-none">Privacy policy</a>
                        <a href="" class="web-footer-color text-decoration-none">Copyright information</a>
                        <a href="" class="web-footer-color text-decoration-none">Cookies policy</a>
                    </div>
                    <h6 class="text-white mt-5">HELP</h6>
                    <div class="d-flex flex-column">
                        <a href="" class="web-footer-color text-decoration-none">Support</a>
                        <a href="" class="web-footer-color text-decoration-none">Contact</a>
                    </div>
                </div>
                <div class="col text-center text-md-start mb-3 mb-lg-0">
                    <h6 class="text-white">SOCIAL MEDIA</h6>
                    <div class="d-flex justify-content-center justify-content-md-start footer-social mt-4">
                        <a href="" class=""><i class="fa-brands fa-facebook text-white text-center fs-5 me-2"
                                style="background-color:#4267B2;"></i></a>
                        <a href="" class=""><i class="fa-brands fa-twitter text-white text-center fs-5 me-2"
                                style="background-color: #00acee;"></i></a>
                        <a href="" class=""><i class="fa-brands fa-pinterest text-white text-center fs-5 me-2"
                                style="background-color:#E60023;"></i></a>
                        <a href="" class=""><i class="fa-brands fa-instagram text-white text-center fs-5 me-2"
                                style="background: linear-gradient(29.61deg, #f38334 0%, #da2e7d 50.39%, #6b54c6 100%);"></i></a>
                        <a href="" class=""><i class="fa-brands fa-youtube text-white text-center fs-5 me-2"
                                style="background-color:#FF0000;"></i></a>
                    </div>
                    <h6 class="web-footer-color mt-4">Get exclusive images sent straight to your inbox</h6>
                    <button type="button" class="btn border-0 mt-3 web-btn text-white px-4 py-2">Sign up</button>
                </div>
            </div>
            <hr class="web-footer-color">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <a class="navbar-brand fw-semibold d-flex fs-2 align-items-center web-footer-color"
                        href="index.html"><i
                            class="fa-brands fa-connectdevelop pe-2 fs-1 web-footer-color"></i>FreeWeek</a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 d-flex align-items-center">
                    <p class="web-footer-color m-0">Copyright © 2010-2022 Freepik Company S.L. All rights reserved.</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 d-flex align-items-center">
                    <div class="dropdown ms-auto">
                        <a class="btn btn-secondary dropdown-toggle bg-transparent shadow-none"
                            style="border: 3px solid white;" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Español</a></li>
                            <li><a class="dropdown-item" href="#">
                                    Français
                                </a></li>
                            <li><a class="dropdown-item" href="#">
                                    Português
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('app_assets') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('app_assets') }}/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('app_assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('app_assets') }}/js/app.js"></script>
</body>

</html>
