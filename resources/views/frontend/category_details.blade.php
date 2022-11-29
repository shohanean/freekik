<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeWeek - {{ $category->name }}</title>
    <link rel="stylesheet" href="{{ asset('app_assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('app_assets') }}/scss/style.css">
    <script src="https://kit.fontawesome.com/5779382e95.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- nav section start here -->
    <header>
        <!-- nav section start here -->
        <nav class="navbar navbar-expand-lg bg-dark p-0" aria-label="Main navigation" id="search-page-menu">
            <div class="container-fluid">
                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars text-white py-2"></i>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mt-0 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link serch-header-color" aria-current="page"
                                    href="search-product.html">Vectors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link serch-header-color" href="#workspace">Photos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link serch-header-color" href="#schedule">PSD</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link serch-header-color dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Vector</a></li>
                                    <li><a class="dropdown-item" href="#">Illustration</a></li>
                                    <li><a class="dropdown-item" href="#">Photos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link serch-header-color dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown" aria-expanded="false">More</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Vector</a></li>
                                    <li><a class="dropdown-item" href="#">Illustration</a></li>
                                    <li><a class="dropdown-item" href="#">Photos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link serch-header-color" href="#footer">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex align-items-center ms-auto">
                            <a href="" class="serch-header-color nav-link me-4 text-decoration-none">Sell your
                                content</a>
                            <a href="" class="serch-header-color nav-link me-4 text-decoration-none">Pricing</a>
                            <!-- <p class="mb-0">
                        <a href="register.html" class="text-white me-4 text-decoration-none fw-semibold">Log in</a>
                        <a href="register.html" class="text-white me-4 text-decoration-none fw-semibold">Sign up</a>
                    </p> -->
                            <a href="" class="serch-header-color nav-link me-4"><i class="fa-regular fa-bell"></i></a>
                            <div class="btn-group">
                                <button type="button" class="text-white border-0 bg-transparent dropdown-toggle"
                                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <img src="{{ asset('app_assets') }}/images/suzayet.jpg" class="rounded-circle" alt=""
                                        style="width: 30px; height: 30px;">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('app_assets') }}/images/suzayet.jpg" class="rounded-circle" alt="suzayet"
                                            style="width: 70px; height: 70px;">
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
                                            class="border-0 bg-transparent ps-2 fw-light"
                                            type="button">DOWNLOADS</button>
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
                                    <li class="d-flex align-items-center my-2"><i
                                            class="fa-solid fa-headset"></i><button
                                            class="border-0 bg-transparent ps-2 fw-light"
                                            type="button fs-6">SUPPORT</button>
                                    </li>
                                    <hr>
                                    <li class="d-flex align-items-center my-2"><i
                                            class="fa-solid fa-power-off"></i><button
                                            class="border-0 bg-transparent ps-2 text-primary"
                                            type="button">LOGOUT</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </header>
    <!-- nav section end here -->
    <header class="navbar sticky-top flex-md-nowrap p-0 px-2 shadow" id="search-navbar">
        <a class="fw-semibold d-flex navbar-brand col-md-3 col-lg-2 me-0 p-0 ps-2 fs-2 align-items-center web-text-color text-decoration-none"
            href="index.html"><i class="fa-brands fa-connectdevelop pe-2 fs-1 web-text-color"></i>FreeWeek</a>
        <div class="input-group" id="search-dropdown">
            <div class="input-group-prepend">
                <button class="btn border dropdown-toggle px-4 d-none d-md-block" id="header-dropdown-btn"
                    type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Images,
                    Free</button>
                <div class="dropdown-menu mt-3 w-25" id="header-dropdown-menus">
                    <div class="px-3">
                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Images
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input shadow-none" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Collections
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="px-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Free
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label text-warning" for="flexCheckChecked">
                                <i class="fa-solid fa-crown"></i> Primium
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="px-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Vectors
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Photos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Psd
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Icons
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa-solid fa-bars web-text-color"></i>
        </button>
        <input class="form-control form-control-dark w-75 rounded-0 border my-1" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav me-2">
            <div class="nav-item text-nowrap d-flex align-items-center">
                <a class="nav-link px-3" href="#"> <i class="fa-solid fa-magnifying-glass web-gray fs-5"></i></a>
            </div>
        </div>

    </header>
    <div class="container-fluid" id="search-page-container">
        <div class="row">
            <!-- sidebar part start here -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa-solid fa-grip pe-3"></i> Category
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body m-0 py-2">
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2 active">Vectors</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Photos</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Psd</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Icons</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseLicense"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa-solid fa-crown pe-3"></i> License
                                    </button>
                                </h2>
                                <div id="collapseLicense" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body m-0 py-2">
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Free</button>
                                        <button type="button" class="btn category-btn btn-sm rounded-2 me-2 mt-2"><i
                                                class="fa-solid fa-crown pe-2"></i>Premium</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa-solid fa-palette pe-3"></i> Color
                                    </button>
                                </h2>
                                <div id="collapseColor" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body m-0 py-2">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: tomato; border-color: tomato; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked" checked>
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #FCA120; border-color: #FCA120; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #FFC0CB; border-color: #FFC0CB; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #4AD295; border-color: #4AD295; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #92CDFA; border-color: #92CDFA; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #FCDB7E; border-color: #FCDB7E; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #1D262D; border-color: #1D262D; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #FC80A8; border-color: #FC80A8; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #F4CDE0; border-color: #F4CDE0; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">
                                        <input class="form-check-input rounded-circle shadow-none me-3 mb-3"
                                            style="background-color: #800029; border-color: #800029; width: 1.2rem; height: 1.2rem;"
                                            type="checkbox" value="" id="flexCheckChecked">

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFile" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa-solid fa-file pe-3"></i>File type
                                    </button>
                                </h2>
                                <div id="collapseFile" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">JPG</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">AI</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">EPS</button>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOrientation"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa-solid fa-arrow-rotate-right pe-3"></i> Orientation
                                    </button>
                                </h2>
                                <div id="collapseOrientation" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Horizontal</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Vertical</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Square</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Panoramic</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Watercolor</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseStyle" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa-solid fa-image pe-3"></i>Style
                                    </button>
                                </h2>
                                <div id="collapseStyle" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Watercolor</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Flat</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Cartoon</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Geometric</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Gradient</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">3D</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Isometric</button>
                                        <button type="button"
                                            class="btn category-btn btn-sm rounded-2 me-2 mt-2">Hand-drawn</button>
                                        <button type="button" class="btn category-btn btn-sm rounded-2 me-2 mt-2">Last 3
                                            months</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsePublish"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa-solid fa-calendar-days pe-3"></i>Publish date
                                    </button>
                                </h2>
                                <div id="collapsePublish" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <button type="button" class="btn category-btn btn-sm rounded-2 me-2 mt-2">Last 3
                                            months</button>
                                        <button type="button" class="btn category-btn btn-sm rounded-2 me-2 mt-2">Last 6
                                            months</button>
                                        <button type="button" class="btn category-btn btn-sm rounded-2 me-2 mt-2">Last
                                            year</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </nav>
            <!-- sidebar part end here -->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4" id="search-main">
                <!-- search keywords start here -->
                <div class="search-keywords mb-4">
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i class="fa-solid fa-image pe-2"></i>
                        Photos</button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i class="fa-solid fa-image pe-2"></i>
                        PSD</button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i class="fa-solid fa-image pe-2"></i>
                        All images</button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i
                            class="fa-solid fa-magnifying-glass pe-2"></i>abstract background</button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i
                            class="fa-solid fa-magnifying-glass pe-2"></i>business card</button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i
                            class="fa-solid fa-magnifying-glass pe-2"></i> infographic </button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i
                            class="fa-solid fa-magnifying-glass pe-2"></i>logo</button>
                    <button type="button" class="btn web-keyword-btn mx-2 mb-2"><i
                            class="fa-solid fa-magnifying-glass pe-2"></i>Flyer</button>
                </div>
                <!-- search keywords end here -->

                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-4 border-bottom">
                    <div class="btn-toolbar mb-2 mb-md-0 ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary mb-2 dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sort by
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- body or item start here -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @forelse ($files as $file)
                        <div class="col">
                            <figure class="position-relative image-item">
                                <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid" alt="img not found">
                                <div class="item-overlay position-absolute p-4">
                                    <div class="overlay-content d-flex">
                                        <div class="">
                                            <p class="d-inline-block text-truncate mb-0 text-white" style="max-width: 280px;">
                                                {{ $file->title }}
                                            </p>
                                            <a href="https://www.figma.com/" class="d-block text-decoration-none text-white">
                                                <img src="{{ asset('app_assets') }}/images/suzayet.jpg" class="rounded-circle me-2" alt="suzayet" style="width: 30px; height: 30px;">
                                                {{ $file->user->name }}
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column overlay-social ps-1">
                                            <a href="" class=""><i class="fa-solid fa-heart text-center bg-white fs-5 mb-1"
                                                    style="color: #C0C0C0;"></i></a>
                                            <a href="" class=""><i
                                                    class="fa-solid fa-folder-plus text-center bg-white fs-5 mb-1"
                                                    style="color: #C0C0C0;"></i></a>
                                            <a href="" class=""><i
                                                    class="fa-brands fa-pinterest text-white text-center fs-5 mb-1"
                                                    style="background-color:#E60023;"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            <h1>Nothing to show</h1>
                        </div>
                    @endforelse
                </div>
                <!-- body or item end here -->
            </main>
        </div>
    </div>

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
    <script src="{{ asset('app_assets') }}/js/app.js"></script>
</body>

</html>
