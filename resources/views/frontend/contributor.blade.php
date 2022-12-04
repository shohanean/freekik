@extends('layouts.app')

@section('content')
    <section style="padding-top: 130px" class="" id="view-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="text-center">
                        {{-- <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid" alt="thumbnail not found"> --}}
                    </div>
                    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                        <div class="col">
                            <div class="d-flex align-items-center mt-4">
                                <a href="https://www.figma.com/"
                                    class="d-block d-flex my-2 align-items-center text-decoration-none web-gray">
                                    {{-- <img src="{{ ($file->user->avatar) ? asset($file->user->avatar) : Avatar::create($file->user->name)->toBase64() }}" class="rounded-circle me-2" alt="author photo missing" style="width: 30px; height: 30px;">
                                    <p class="web-text-color mb-0 fw-semibold">{{ $file->user->name }} <br><span class="fw-light web-gray">{{ $other_files->count() }} files</span></p> --}}
                                </a>
                                <button type="button" class="btn btn-sm my-2 ms-5 web-follow-btn fw-semibold px-5 py-2">
                                    <i class="fa-solid fa-user-plus pe-2"></i> Follow
                                </button>

                            </div>

                        </div>
                        <div class="col">
                            <div class="mt-4">
                                <a style="background: #0D8CF1" href="http://www.facebook.com/sharer.php?u={{ url()->full() }}" target="_blank" class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-facebook pe-2"></i> fb
                                </a>

                                <a style="background: #1C96E8" href="" target="_blank" class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-twitter pe-2"></i> tw
                                </a>

                                <a style="background: #0C61BF" href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}" target="_blank" class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-linkedin pe-2"></i> ln
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <h5 class="fw-semibold web-text-black">
                                {{-- {{ Str::title($file->title) }} --}}
                            </h5>
                            <hr>
                            <p>
                                {{-- {{ $file->description }} --}}
                            </p>
                            <div class="card-body bg-light py-2 rounded">
                                <h6 class="fw-semibold web-text-black">Related tags</h6>
                                {{-- @foreach (explode(',', $file->tags) as $tag)
                                    <button type="button" class="btn view-keyword-btn me-2 mb-2"><i class="fa-solid fa-tag pe-2"></i>{{ $tag }}</button>
                                @endforeach --}}
                            </div>
                            <h6 class="fw-semibold web-text-black mt-4">You might also like</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card m-auto ms-md-auto mb-4" style="width: 22rem;">
                        <div class="card-body">
                            <h5>Contributor Profile</h5>
                            <h6 class="card-title">
                                Contributor Name
                            </h6>
                            <p class="card-text">
                                {{ $contributor->name }}
                            </p>
                            <h6 class="card-title">
                                Contributor Email
                            </h6>
                            <p class="card-text">
                                {{ $contributor->email }}
                            </p>
                            <h6 class="card-title">
                                Contributor Email
                            </h6>
                            <p class="card-text">
                                {{ $contributor->email_verified_at }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4" id="related-item">
                @forelse ($contributor->file as $other_file)
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
                    <div class="alert alert-danger">
                        Nothing to show
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection