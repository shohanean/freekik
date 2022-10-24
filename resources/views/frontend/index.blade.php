@extends('layouts.app')

@section('content')
<header id="header-banner" style="background: linear-gradient(#7531FA, hsl(215, 90%, 63%)); padding: 120px 0 30px;">
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
                @if ($categories->count() > 3)
                    @foreach ($categories->random(3) as $category)
                        <a href="{{ route('category.details', $category->slug) }}" class="btn text-white  px-3 py-1 rounded btn-sm mb-2" style="background-color: #5ea1ff;">
                            <i class="fa-solid fa-magnifying-glass pe-2"></i> {{ $category->name }}
                        </a>
                    @endforeach
                @else
                    @foreach ($categories as $category)
                        <a href="{{ route('category.details', $category->slug) }}" class="btn text-white  px-3 py-1 rounded btn-sm mb-2" style="background-color: #5ea1ff;">
                            <i class="fa-solid fa-magnifying-glass pe-2"></i> {{ $category->name }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- header image part start here -->
        <div class="row  mt-4 banner-slider-main">
            @foreach ($categories as $category)
            <a href="{{ route('category.details', $category->slug) }}">
                <div class="col mb-4">
                    <div class="header-img-hover">
                        <figure class="d-flex justify-content-center align-content-center mb-0">
                            {{-- <img src="{{ asset('app_assets') }}/images/h-2.webp" class="mx-auto d-block rounded-2 p-1" alt="not found"> --}}
                            <img src="{{ Storage::disk('s3')->url($category->category_image) }}" class="mx-auto d-block rounded-2 p-1" alt="not found">
                        </figure>
                    </div>
                    <p class="text-center text-white p-2">{{ $category->name }}</p>
                </div>
            </a>
            @endforeach
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
                <a href="{{ route('register') }}" type="button" class="btn border-0 web-btn text-white px-4 py-2">Sign up for free</a>
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
                        <img src="{{ asset('app_assets') }}/images/i-1.jpg" alt="">
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
@endsection
