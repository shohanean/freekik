@extends('layouts.app')
@section('content')
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
                                        <a href="{{ route('item.details', $file->slug) }}">
                                            <p class="d-inline-block text-truncate mb-0 text-white" style="max-width: 280px;">
                                                {{ $file->title }}
                                            </p>
                                        </a>
                                        <a href="{{ route('contributor', $file->user->slug) }}" class="d-block text-decoration-none text-white">
                                            <img src="{{ ($file->user->avatar) ? asset($file->user->avatar) : Avatar::create($file->user->name)->toBase64() }}" class="rounded-circle me-2" alt="not found" style="width: 30px; height: 30px;">
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
                    Nothing to show
                </div>
                @endforelse
            </div>
            <!-- body or item end here -->
        </main>
    </div>
</div>
@endsection
