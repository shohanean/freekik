@extends('layouts.app')

@section('content')
<header id="header-banner" style="background: linear-gradient(#FEEACA, #EBECEC); padding: 120px 0 30px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-8 m-auto text-center text-dark">
                <h1 class="fw-semibold fs-2" style="color: #EE3129">All the assets you need, <span class="text-dark">in one place</span></h1>
                <h5 class=" mt-3 fw-normal">Find and download the best high-quality photos, designs
                    and mockups
                </h5>
                <div class="input-group mt-5 bg-gray py-2 rounded">
                    <div class="input-group-prepend w-25">
                        <button class="btn border-0 dropdown-toggle px-4 d-none d-md-block"
                            id="header-dropdown-btn" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Categories
                        </button>
                        <div class="dropdown-menu mt-3 w-25" id="header-dropdown-menus">
                            <div class="px-3">
                                @foreach ($categories as $cate)
                                    <div class="form-check">
                                        <input class="form-check-input shadow-none" type="radio" name="search_dropdown" id="search_dropdown_{{ $cate->id }}">
                                        <label class="form-check-label" for="search_dropdown_{{ $cate->id }}">
                                            {{ $cate->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <hr>
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
                                        <i class="fa-solid fa-crown"></i> Premium
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
                            </div> --}}
                        </div>
                    </div>
                    <div class="web-search d-flex align-items-center">
                        <input type="text" class="form-control border-0 shadow-none bg-transparent"
                            aria-label="Text input with dropdown button" placeholder="Search all files"
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
                        <a href="{{ route('category.details', $category->slug) }}" class="btn text-dark  px-3 py-1 rounded btn-sm mb-2" style="background-color: #E6E6E6;">
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
            <a href="{{ route('category.details', $category->slug) }}" class="text-decoration-none">
                <div class="col mb-4">
                    <div>
                        <figure class="d-flex justify-content-center align-content-center mb-0">
                            {{-- <img src="{{ asset('app_assets') }}/images/h-2.webp" class="mx-auto d-block rounded-2 p-1" alt="not found"> --}}
                            <img src="{{ Storage::disk('s3')->url($category->category_image) }}" class="mx-auto d-block p-1 rounded-circle"  alt="not found">
                        </figure>
                    </div>
                    <p class="text-center text-dark p-2">{{ $category->name }}</p>
                </div>
            </a>
            @endforeach
        </div>
        <!-- header image part end here -->
    </div>
</header>
<section class="py-4" style="background-color: #EF4123;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 d-flex align-items-center mb-3 mb-md-0">
                <h5 class="m-0 text-center text-md-start text-white">
                    @auth
                    Now you are the member, you can download more
                    @else
                    Create an account to enjoy more free downloads
                    @endauth
                </h5>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 text-center text-md-end">
                @auth
                <a href="{{ route('home') }}" type="button" class="btn border-0 web-btn text-white px-4 py-2">Go To Dashboard</a>
                @else
                <a href="{{ route('register') }}" type="button" class="btn border-0 web-btn text-white px-4 py-2">Sign up for free</a>
                @endauth
            </div>
        </div>
    </div>
</section>
<!-- gallery start here -->
<section id="gallery" class="py-5" style="background: rgba(51, 49, 50, 0.103)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto text-center">
                <h2><span class="web-text-color" id="s_counter">{{ $file_count }} </span> <span class="web-text-color">trending</span>  categories on Freekik</h2>
                <p>Check what’s popular on Freepik and make your project look trendy and professional.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 ">
                <figure class="position-relative gallery-overly ">
                    <img src="{{ Storage::disk('s3')->url($files->first()->thumbnail) }}" class="img-fluid w-100" style="height: 447px;" alt="">
                    <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                        <span class="fw-semibold text-white p-2">{{ $files->first()->category->name }}</span>
                    </p>
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    @foreach ($files->slice(1,4) as $file)
                        <div class="col-md-6 col-lg-6">
                            <figure class="position-relative gallery-overly">
                                <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid w-100" style="height: 215px;" alt="">
                                <p
                                    class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                                    <span class="fw-semibold text-white p-2">{{ $file->category->name }}</span>
                                </p>
                            </figure>
                        </div>
                    @endforeach
                </div>
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
                        class="text-decoration-none text-start text-lg-end me-auto me-lg-0 fw-semibold mt-3 mt-lg-0" style="color: #EF4123">Explore<i
                            class="fa-solid fa-arrow-right ps-2"></i>
                    </a></p>
            </div>
        </div>

        <div class="row pt-4">
            @forelse ($categories as $category)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="box">
                        <a href="{{ route('category.details', $category->slug) }}">
                            <img src="{{ Storage::disk('s3')->url($category->category_image) }}" alt="not found">
                            <div class="box__title">
                                <h6 class="text-dark">{{ $category->name }}</h6>
                                {{-- <p>{{ $category->file->where('status', 'approved')->count() }} files</p> --}}
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    Nothing to show
                </div>
            @endforelse
        </div>
    </div>
</section>
<!-- suggested_files start here -->
{{-- @if ($suggested_files->count() > 0)
<section id="gallery" class="mt-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-10 m-auto text-center">
                <h2><span class="web-text-color">Files you might like to see</span></h2>
                <p>Check what you have liked so far.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($suggested_files as $file)
            <div class="col-lg-2">
                <a href="{{ route('item.details', $file->slug) }}">
                    <figure class="position-relative gallery-overly">
                        <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid w-100" style="height: 215px;" alt="">
                        <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                            <span class="badge bg-dark fw-semibold text-white p-2">{{ Str::limit($file->title, 20) }}</span>
                        </p>
                    </figure>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif --}}
<!-- suggested_files end here -->
{{-- <section id="choice" class="mt-5">
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
                <div class="row mt-3">download
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
</section> --}}

<!-- recent_view_files start here -->
{{-- @if ($recent_view_files->count() > 0)
<section id="gallery" class="mt-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-10 m-auto text-center">
                <h2><span class="web-text-color">Your recently viewed files</span></h2>
                <p>Great! your choice is good</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($recent_view_files as $file)
            <div class="col-lg-2">
                <a href="{{ route('item.details', $file->slug) }}">
                    <figure class="position-relative gallery-overly">
                        <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid w-100" style="height: 215px;" alt="">
                        <p class="position-absolute position-absolute bottom-0 start-0 p-3 m-0 gallery-item-title">
                            <span class="badge bg-dark fw-semibold text-white p-2">{{ Str::limit($file->title, 20) }}</span>
                        </p>
                    </figure>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif --}}
<!-- recent_view_files end here -->
<section class="mt-5">
    <div class=" rounded-3 py-4 py-lg-0" style="background: linear-gradient(#01000E, #333132);">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 py-5">
            <div class="col d-flex align-items-center">
                <div class="ps-5">
                    <h4 class="fw-semibold text-white">Welcome to the new  <span style="font-weight: bold">Cresets calendar</span></h4>
                    <p style="color: #FAA61A">All celebrations and events <p class="text-white" style="font-weight: bold">are at your fingertips</p> </p>
                    <button type="button" class="btn border border-white text-white px-4 py-2">Sign up for
                        free</button>
                </div>
            </div>
            <div class="col ms-auto text-center text-md-start">
                <img src="{{ asset('app_assets') }}/images/banner.png" class="img-fluid w-75" alt="">
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="container rounded-3 py-4 py-lg-0" style="background-color: #D9D9D9">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 py-4">
            <div class="col d-flex align-items-center">
                <div class="ps-5">
                    <h4 class="fw-semibold web-text-black">Join FreeWeek's <span style="color: #EF4123;">creator
                            community</span></h4>
                    <p>Behind every stock image there’s a creative mind. You can also create content and sell it
                        on
                        FreeWeek</p>
                    <button type="button" class="btn border-0 web-btn text-white px-4 py-2">Sign up for
                        free</button>
                </div>
            </div>
            <div class="col ms-auto text-center text-md-start">
                <img src="{{ asset('app_assets') }}/images/banner2.png" class="img-fluid w-75" alt="">
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('app_assets') }}/js/custom.js"></script>
@endpush
