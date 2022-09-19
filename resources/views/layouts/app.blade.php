
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeWeek</title>
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
                        <a href="" class="text-white me-4"><i class="fa-regular fa-bell"></i></a>
                        <div class="btn-group">
                            <button type="button" class="text-white border-0 bg-transparent dropdown-toggle"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img src="{{ asset('app_assets') }}/images/suzayet.jpg" class="rounded-circle" alt=""
                                    style="width: 30px; height: 30px;">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('app_assets') }}/images/suzayet.jpg" class="rounded-circle" alt="suzayet" style="width: 70px; height: 70px;">
                                    <div class="info_user ps-3">
                                        <a href="" class="text-secondary text-decoration-none">mdsuzayet377</a>
                                        <a href=""
                                            class="text-secondary fw-light text-decoration-none">md.suzayet.377@gmail.com</a>
                                        <button type="button" class="btn btn-primary fw-light mt-2">Edit
                                            profile</button>
                                    </div>
                                </div>
                                <hr>
                                <li class="d-flex align-items-center fw-lighter my-2"><i
                                        class="fa-regular fa-heart"></i><button
                                        class="border-0 bg-transparent ps-2 fw-light fs-6"
                                        type="button">FAVORITES</button>
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
                                <li class="d-flex align-items-center my-2"><i class="fa-solid fa-power-off"></i><button
                                        class="border-0 bg-transparent ps-2 text-primary" type="button">LOGOUT</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
        <header id="header-banner"
            style="background: linear-gradient(#7531FA, hsl(215, 90%, 63%)); padding: 120px 0 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-8 m-auto text-center">
                        <h1 class="text-white fw-semibold fs-2">All the assets you need, in one place</h1>
                        <h5 class="text-white mt-3 fw-normal">Find and download the best high-quality photos, designs
                            and mockups
                        </h5>
                        <div class="input-group mt-5 bg-white py-2 rounded">
                            <div class="input-group-prepend w-25">
                                <button class="btn border-0 dropdown-toggle px-4 d-none d-md-block"
                                    id="header-dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Images,
                                    Free</button>
                                <div class="dropdown-menu mt-3 w-25" id="header-dropdown-menus">
                                    <div class="px-3">
                                        <div class="form-check">
                                            <input class="form-check-input shadow-none" type="radio"
                                                name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Images
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input shadow-none" type="radio"
                                                name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Collections
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="px-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Free
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label text-warning" for="flexCheckChecked">
                                                <i class="fa-solid fa-crown"></i> Primium
                                            </label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="px-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Vectors
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Photos
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Psd
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Icons
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="web-search d-flex align-items-center">
                                <input type="text" class="form-control border-0 shadow-none bg-transparent"
                                    aria-label="Text input with dropdown button" placeholder="Search all images"
                                    style="width: 80%;">
                                <i class="fa-solid fa-magnifying-glass web-gray fs-5" style="width: 20%;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-auto text-center mt-4">
                    <div class="col m-auto text-center">
                        <button type="button" class="btn text-white  px-3 py-1 rounded btn-sm mb-2"
                            style="background-color: #5ea1ff;"><i
                                class="fa-solid fa-magnifying-glass pe-2"></i>Mockup</button>
                        <button type="button" class="btn text-white  px-3 py-1 rounded btn-sm mb-2"
                            style="background-color: #5ea1ff;"><i class="fa-solid fa-magnifying-glass pe-2"></i>Business
                            card</button>
                        <button type="button" class="btn text-white  px-3 py-1 rounded btn-sm mb-2"
                            style="background-color: #5ea1ff;"><i class="fa-solid fa-magnifying-glass pe-2"></i>3d logo
                            mockup</button>
                    </div>
                </div>
                <!-- header image part start here -->
                <div class="row  mt-4 banner-slider-main">
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-1.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-2.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-4.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-3.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-5.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-4.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="header-img-hover">
                            <figure class="d-flex justify-content-center align-content-center mb-0"><img
                                    src="{{ asset('app_assets') }}/images/h-9.webp" class="mx-auto d-block rounded-2 p-1" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!-- header image part end here -->
            </div>
        </header>
        <section class="py-4" style="background-color: #bfddfe;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-7 d-flex align-items-center mb-3 mb-md-0">
                        <h5 class="m-0 text-center text-md-start">Create an account to enjoy more free downloads</h5>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 text-center text-md-end">
                        <button type="button" class="btn border-0 web-btn text-white px-4 py-2">Sign up for
                            free</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery start here -->
        <section id="gallery" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2><span class="web-text-color">Explore</span> trending categories on Freepik</h2>
                        <p>Check what’s popular on Freepik and make your project look trendy and professional.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <figure class="position-relative gallery-overly">
                            <img src="{{ asset('app_assets') }}/images/pexels-lisa-fotios-1090638.jpg" class="img-fluid w-100"
                                style="height: 447px;" alt="">
                            <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                <span class="fw-semibold text-white p-2">Camra</span>
                            </p>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <figure class="position-relative gallery-overly">
                                    <img src="{{ asset('app_assets') }}/images/g-7.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                                    <p
                                        class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                        <span class="fw-semibold text-white p-2">Banner</span>
                                    </p>
                                </figure>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <figure class="position-relative gallery-overly">
                                    <img src="{{ asset('app_assets') }}/images/g-23.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                                    <p
                                        class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                        <span class="fw-semibold text-white p-2">Ice cream</span>
                                    </p>
                                </figure>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <figure class="position-relative gallery-overly">
                                    <img src="{{ asset('app_assets') }}/images/g-10.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                                    <p
                                        class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                        <span class="fw-semibold text-white p-2">Recycling</span>
                                    </p>
                                </figure>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <figure class="position-relative gallery-overly">
                                    <img src="{{ asset('app_assets') }}/images/g-8.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                                    <p
                                        class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                        <span class="fw-semibold text-white p-2">Recycling</span>
                                    </p>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    <div class="col">
                        <figure class="position-relative gallery-overly">
                            <img src="{{ asset('app_assets') }}/images/g-9.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                            <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                <span class="fw-semibold text-white p-2">Party portraits</span>
                            </p>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="position-relative gallery-overly">
                            <img src="{{ asset('app_assets') }}/images/g-6.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                            <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                <span class="fw-semibold text-white p-2">Camra</span>
                            </p>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="position-relative gallery-overly">
                            <img src="{{ asset('app_assets') }}/images/g-5.jpg" class="img-fluid w-100" style="height: 215px;" alt="">
                            <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                <span class="fw-semibold text-white p-2">Party portraits</span>
                            </p>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="position-relative gallery-overly">
                            <img src="{{ asset('app_assets') }}/images/g-4.webp" class="img-fluid w-100" style="height: 215px;" alt="">
                            <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                <span class="fw-semibold text-white p-2">Instagram mockup</span>
                            </p>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery end here -->
        <section id="inner" class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Unlock your inner creator</h2>
                        <p class="d-flex flex-column flex-lg-row align-items-center justify-content-between">Get the
                            inspiration you need with
                            these collections carefully selected to boost your
                            project’s engagement. <a href=""
                                class="text-decoration-none text-start text-lg-end me-auto me-lg-0 fw-semibold mt-3 mt-lg-0">Explore<i
                                    class="fa-solid fa-arrow-right ps-2"></i>
                            </a></p>
                    </div>
                </div>

                <div class="row pt-4">

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="https://picsum.photos/id/1015/200/300" alt="">
                                <div class="box__title">
                                    <h6>Nature</h6>
                                    <p>6 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-1.jpg" alt="">
                                <div class="box__title">
                                    <h6>Sport</h6>
                                    <p>3 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-2.jpg" alt="">
                                <div class="box__title">
                                    <h6>Architecture</h6>
                                    <p>2 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-3.jpg" alt="">
                                <div class="box__title">
                                    <h6>Technology</h6>
                                    <p>7 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-4.jpg" alt="">
                                <div class="box__title">
                                    <h6>People</h6>
                                    <p>1 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-5.jpg" alt="">
                                <div class="box__title">
                                    <h6>Meal</h6>
                                    <p>8 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-6.jpg" alt="">
                                <div class="box__title">
                                    <h6>Cars</h6>
                                    <p>12 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <a href="#">
                                <img src="{{ asset('app_assets') }}/images/i-7.jpg" alt="">
                                <div class="box__title">
                                    <h6>Cars</h6>
                                    <p>12 photos</p>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <section id="choice" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="fw-semibold fs-2">The smartest choice for <a href=""
                                class="text-decoration-none web-text-color">creatives like you</a></h2>
                        <p class="mt-3 fw-normal">Find and download the best high-quality photos, designs
                            and mockups
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 mt-4">
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('app_assets') }}/images/h-9.webp" alt="" class="img-fluid w-100 rounded-2"
                                            style="height: 192px;">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <img src="{{ asset('app_assets') }}/images/h-2.webp" alt="" class="img-fluid w-100 rounded-2"
                                            style="height: 192px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-4 mt-md-0">
                                <img src="{{ asset('app_assets') }}/images/lamp.jpg" class="img-fluid w-100 rounded-2" style="height: 400px;"
                                    alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <img src="{{ asset('app_assets') }}/images/last.jpg" class="img-fluid w-100 rounded-2" style="height: 170px;"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center mt-4 mt-lg-0">
                        <ul>
                            <li class="d-flex mt-2"><span><i class="fa-solid fa-star choice-icon fs-5 me-4"></i></span>
                                <h6 class="fs-5 fw-semibold">High-quality stock content <br>
                                    <p class="fs-6 fw-light mt-2 web-gray lh-base pe-4">Download scroll-stopping images
                                        of
                                        the best
                                        quality to
                                        make
                                        your
                                        projects look
                                        professional.</p>
                                </h6>
                            </li>
                            <li class="d-flex mt-2"><span><i
                                        class="fa-solid fa-thumbs-up choice-icon fs-5 me-4"></i></span>
                                <h6 class="fs-5 fw-semibold">High-quality stock content <br>
                                    <p class="fs-6 fw-light mt-2 web-gray lh-base pe-4">Access thousands of images and
                                        designs ready-to-publish and get your project ready double quick.</p>
                                </h6>
                            </li>
                            <li class="d-flex mt-2"><span><i
                                        class="fa-solid fa-magnifying-glass choice-icon fs-5 me-4"></i></span>
                                <h6 class="fs-5 fw-semibold">Guaranteed search results<br>
                                    <p class="fs-6 fw-light mt-2 web-gray lh-base pe-4">There’s an image and style for
                                        every project, whatever your needs are.</p>
                                </h6>
                            </li>
                            <li class="d-flex mt-2"><span><i
                                        class="fa-solid fa-rotate choice-icon fs-5 me-4"></i></span>
                                <h6 class="fs-5 fw-semibold">Fresh content everyday<br>
                                    <p class="fs-6 fw-light mt-2 web-gray lh-base pe-4">Our library is updated on a
                                        daily basis so you can find the newest and trendiest photos and designs.</p>
                                </h6>
                            </li>
                            <li class="position-relative">
                                <button type="button"
                                    class="btn btn-shadow web-download fw-semibold border-0 bg-white web-text-color">Download<i
                                        class="fa-solid fa-download ms-3"></i> <span
                                        class="position-absolute web-pointer"><i
                                            class="fa-solid fa-arrow-pointer fs-2"></i></span></button>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container rounded-3 py-4 py-lg-0" style="background-color: #dbebfe">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                    <div class="col d-flex align-items-center">
                        <div class="ps-5">
                            <h4 class="fw-semibold web-text-black">Join FreeWeek's <span style="color: #4c92f6;">creator
                                    community</span></h4>
                            <p>Behind every stock image there’s a creative mind. You can also create content and sell it
                                on
                                FreeWeek</p>
                            <button type="button" class="btn border-0 web-btn text-white px-4 py-2">Sign up for
                                free</button>
                        </div>
                    </div>
                    <div class="col ms-auto text-center text-md-start">
                        <img src="{{ asset('app_assets') }}/images/team.webp" class="img-fluid w-75" alt="">
                    </div>
                </div>
            </div>
        </section>
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
