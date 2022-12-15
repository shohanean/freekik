@extends('layouts.app')

@section('content')
    <section style="padding-top: 130px" class="" id="view-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div style="position:relative">
                        <img class="rounded" width="100%" height="250px"
                            src="https://amdmediccentar.rs/wp-content/plugins/uix-page-builder/includes/uixpbform/images/default-cover-6.jpg"
                            alt="">
                        <img style="position: absolute;bottom: -68px;left: 34px;"
                            src="{{ $contributor->avatar ? asset($contributor->avatar) : Avatar::create($contributor->name)->setShape('square') }}"
                            class="img-fluid img-thumbnail rounded" alt="photo not found">
                    </div>
                    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                        <div class="col">
                            <div class="d-flex align-items-center mt-2" style="padding-left: 160px">
                                <p class="text-dark mb-0 fw-semibold">{{ Str::title($contributor->name) }} <br>
                                    <span class="fw-light web-gray">
                                        {{ $contributor->file->count() }} {{ ($contributor->file->count() > 1) ? Str::plural('File'):'File' }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mt-2">
                                <a style="background: #0D8CF1"
                                    href="http://www.facebook.com/sharer.php?u={{ url()->full() }}" target="_blank"
                                    class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-facebook pe-2"></i> fb
                                </a>

                                <a style="background: #1C96E8" href="" target="_blank"
                                    class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-twitter pe-2"></i> tw
                                </a>

                                <a style="background: #0C61BF"
                                    href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}"
                                    target="_blank"
                                    class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-linkedin pe-2"></i> ln
                                </a>
                                <a style="background: #ebeef2"
                                    href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}"
                                    target="_blank"
                                    class="text-dark btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-solid fa-user-plus pe-2"></i> Follow
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card m-auto ms-md-auto mb-4" style="width: 22rem;">
                        <div class="card-body">
                            <h5 class="text-center">Contributor Profile</h5>
                            <hr>
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
                                @if ($contributor->email_verified_at)
                                    <i class="fa fa-check-circle text-success"></i>
                                @endif
                            </p>
                            <h6 class="card-title">
                                Contributor Since
                            </h6>
                            <p class="card-text">
                                {{ $contributor->created_at->format('d, F Y') }}
                            </p>
                            <h6 class="card-title">
                                Total Downloads
                            </h6>
                            <p class="card-text">
                                <i class="fa fa-download"></i>
                                {{ App\Models\Download::where('contributor_id', $contributor->id)->count() }}
                            </p>
                            <h6 class="card-title">
                                Your Achievements
                            </h6>
                            <p class="card-text">
                                <img data-toggle="tooltip" data-placement="top" title="Exclusive Contributor" width="30" src="{{ asset('app_assets/images/badge/exclusive.png') }}" alt="not found">
                                <img data-toggle="tooltip" data-placement="top" title="Holding One Star" width="30" src="{{ asset('app_assets/images/badge/one_star.png') }}" alt="not found">
                                <img data-toggle="tooltip" data-placement="top" title="Student of Creative IT Institute" width="30" src="{{ asset('app_assets/images/badge/cit.png') }}" alt="not found">
                                <img data-toggle="tooltip" data-placement="top" title="Holding Black Star" width="30" src="{{ asset('app_assets/images/badge/black_star.png') }}" alt="not found">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-2" id="related-item">
                <div class="col-12 mb-4">
                    <div class="card-body bg-light py-2 rounded">
                        <h5 class="fw-semibold web-text-black m-0 p-0">Your Approved Files</h5>
                    </div>
                </div>
                @forelse ($contributor->file as $other_file)
                    <div class="col">
                        <figure class="position-relative" id="image-item">
                            <img src="{{ Storage::disk('s3')->url($other_file->thumbnail) }}" class="img-fluid"
                                alt="">
                            <div class="item-overlay position-absolute p-4">
                                <div class="overlay-content d-flex">
                                    <div class="">
                                        <a href="{{ route('item.details', $other_file->slug) }}" target="_black">
                                            <p class="d-inline-block text-truncate mb-0 text-white"
                                                style="max-width: 300px;">
                                                {{ $other_file->title }}
                                            </p>
                                        </a>
                                        <a href="https://www.figma.com/" class="d-block text-decoration-none text-white">
                                            <img src="{{ $other_file->user->avatar ? asset($other_file->user->avatar) : Avatar::create($other_file->user->name)->toBase64() }}"
                                                class="rounded-circle me-2" alt="suzayet"
                                                style="width: 30px; height: 30px;">{{ $other_file->user->name }}
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column overlay-social ps-1">
                                        <a href="" class=""><i
                                                class="fa-solid fa-heart text-center bg-white fs-5 mb-1"
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
                    <div class="col-12">
                        <div class="alert alert-danger">
                            You have have not approved any file yet.
                            <a href="{{ route('upload.create') }}">Upload your file to approve</a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
