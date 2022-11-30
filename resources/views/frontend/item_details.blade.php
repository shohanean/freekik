
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeWeek</title>
    <script src="https://kit.fontawesome.com/5779382e95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('app_assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('app_assets') }}/scss/style.css">
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:type" content="file" />
    <meta property="og:title" content="{{ $file->title }}" />
    <meta property="og:description" content="{{ $file->description }}" />
    <meta property="og:image" content="{{ Storage::disk('s3')->url($file->thumbnail) }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg position-static" style="background-color: #7531FA;" id="navbar"
        aria-label="Main navigation">
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
                        <!-- previous signin start here -->

                        <!-- <p class="mb-0">
                            <a href="" class="text-white me-4 text-decoration-none fw-semibold" id="login">Log in</a>
                            <a href="register.html" class="text-white me-4 text-decoration-none fw-semibold">Sign up</a>
                        </p>  -->

                        <!-- previous signin end here -->

                        <!-- after signin user profile part start here -->
                        <a href="" class="text-white me-4"><i class="fa-regular fa-bell"></i></a>
                        <div class="btn-group">
                            <button type="button" class="text-white border-0 bg-transparent dropdown-toggle"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img src="images/suzayet.jpg" class="rounded-circle" alt=""
                                    style="width: 30px; height: 30px;">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end p-3">
                                <div class="d-flex align-items-center">
                                    <img src="images/suzayet.jpg" class="rounded-circle" alt="suzayet"
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
                        <!-- after signin user profile part end here -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section class="py-4" id="view-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="text-center">
                            <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid" alt="thumbnail not found">
                        </div>
                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                            <div class="col">
                                <div class="d-flex align-items-center mt-4">
                                    <a href="https://www.figma.com/"
                                        class="d-block d-flex my-2 align-items-center text-decoration-none web-gray">
                                        <img src="{{ ($file->user->avatar) ? asset($file->user->avatar) : Avatar::create($file->user->name)->toBase64() }}" class="rounded-circle me-2" alt="author photo missing" style="width: 30px; height: 30px;">
                                        <p class="web-text-color mb-0 fw-semibold">{{ $file->user->name }} <br><span class="fw-light web-gray">{{ $other_files->count() }} files</span></p>
                                    </a>
                                    <button type="button" class="btn btn-sm my-2 ms-5 web-follow-btn fw-semibold px-5 py-2">
                                        <i class="fa-solid fa-user-plus pe-2"></i> Follow
                                    </button>

                                </div>

                            </div>
                            <div class="col">
                                <div class="mt-4">
                                    <button type="button" class="btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2">
                                        <i class="fa-solid fa-folder-plus pe-2"></i> Collect
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2"><i
                                            class="fa-solid fa-heart pe-2"></i> Like</button>
                                    {{-- <button type="button"
                                        class="btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2"><i
                                            class="fa-solid fa-share-nodes pe-2"></i> Like</button> --}}
                                    <a href="http://www.facebook.com/sharer.php?u={{ url()->full() }}" target="_blank" class="btn ms-2 my-2 web-follow-btn fw-semibold px-2 py-1">
                                        <i class="fa-brands fa-facebook text-primary text-center fs-5 mb-1"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <h5 class="fw-semibold web-text-black">
                                    {{ Str::title($file->title) }}
                                </h5>
                                <hr>
                                <p>
                                    {{ $file->description }}
                                </p>
                                <div class="card-body bg-light py-2 rounded">
                                    <h6 class="fw-semibold web-text-black">Related tags</h6>
                                    @foreach (explode(',', $file->tags) as $tag)
                                        <button type="button" class="btn view-keyword-btn me-2 mb-2"><i class="fa-solid fa-tag pe-2"></i>{{ $tag }}</button>
                                    @endforeach
                                </div>
                                <h6 class="fw-semibold web-text-black mt-4">You might also like</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card m-auto ms-md-auto mb-4" style="width: 22rem;">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Upload Date
                                </h6>
                                <p class="card-text">
                                    {{ $file->created_at->format('d F, Y') }}
                                    <small>({{ $file->created_at->diffForHumans() }})</small>
                                </p>
                                <h6 class="card-title">
                                    Current Status
                                </h6>
                                <p class="card-text">
                                    <i class="fa fa-check-circle text-success"></i>
                                    {{ Str::title($file->status) }}
                                </p>
                                <h6 class="card-title">
                                    Total Donwloads
                                </h6>
                                <p class="card-text">
                                    <i class="fa fa-download"></i>
                                    {{ $downloads->count() }}
                                </p>
                                {{-- <h6 class="card-title">
                                    Today's Donwloads
                                </h6>
                                <p class="card-text">
                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                    {{ $downloads->whereDate('created_at', \Carbon\Carbon::now())->count() }}
                                </p> --}}
                                <h6 class="card-title">
                                    Last Downloaded
                                </h6>
                                <p class="card-text">
                                    <i class="fa fa-clock"></i>
                                    {{ $downloads->last()->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <div class="card m-auto ms-md-auto" style="width: 22rem;">
                            <div class="card-body">
                                @auth
                                <h5 class="card-title"><i class="fa-solid fa-crown text-warning"></i> <span class="text-warning">Premium</span> File</h5>
                                <p class="card-text">
                                    Click below button to start downloading
                                </p>
                                <div class="download text-center">
                                    <form action="{{ route('download', $file->slug) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn bg-success fw-semibold px-5 py-3 m-auto text-white">
                                            <span class="fw-light">Download</span>
                                        </button>
                                    </form>
                                </div>
                                {{-- <hr>
                                <div class="row">
                                    <div class="col-8">
                                        <mark class="px-1 rounded">
                                            <i class="fa fa-download"></i>
                                            Total Download: {{ $downloads->count() }}
                                        </mark>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ route('home') }}" class="web-text-color text-decoration-none fw-semibold" id="login">Dashboard</a>
                                    </div>
                                </div> --}}
                                @else
                                <h5 class="card-title"><i class="fa-solid fa-crown text-warning"></i> <span class="text-warning">Premium</span> File</h5>
                                <p class="card-text">
                                    Unlock this file and get unlimited access to over {{ App\Models\File::count() }} Premium files
                                </p>
                                <div class="download text-center">
                                    <a href="{{ route('register') }}" class="btn bg-warning p-0 m-0 fw-semibold px-5 m-auto text-white">
                                        Signup<br><span class="fw-light">Go Download</span>
                                    </a>
                                </div>
                                <a href="{{ route('login') }}" class="web-text-color text-decoration-none fw-semibold" id="login">Log in</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4" id="related-item">
                    @forelse ($other_files as $other_file)
                        <div class="col">
                            <figure class="position-relative" id="image-item">
                                <img src="{{ Storage::disk('s3')->url($other_file->thumbnail) }}" class="img-fluid" alt="">
                                <div class="item-overlay position-absolute p-4">
                                    <div class="overlay-content d-flex">
                                        <div class="">
                                            <a href="{{ route('item.details', $other_file->slug) }}" target="_black">
                                                <p class="d-inline-block text-truncate mb-0 text-white" style="max-width: 300px;">
                                                    {{ $other_file->title }}
                                                </p>
                                            </a>
                                            <a href="https://www.figma.com/" class="d-block text-decoration-none text-white">
                                                <img src="{{ ($other_file->user->avatar) ? asset($other_file->user->avatar) : Avatar::create($other_file->user->name)->toBase64() }}" class="rounded-circle me-2" alt="suzayet" style="width: 30px; height: 30px;">{{ $other_file->user->name }}
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

                    @endforelse
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
    <script src="{{ asset('app_assets') }}/js/app.js"></script>
</body>

</html>
