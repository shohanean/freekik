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
                            aria-expanded="false">
                            Categories
                        </button>
                        <div class="dropdown-menu mt-3 w-25" id="header-dropdown-menus">
                            {{-- <div class="px-3">
                                @foreach ($categories as $cate)
                                    <div class="form-check">
                                        <input class="form-check-input shadow-none" type="radio" name="search_dropdown" id="search_dropdown_{{ $cate->id }}">
                                        <label class="form-check-label" for="search_dropdown_{{ $cate->id }}">
                                            {{ $cate->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div> --}}
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
    </div>
</header>
@endsection
