@extends('layouts.app')

@section('content')
    <section style="padding-top: 130px" class="" id="view-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="text-center">
                        <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="img-fluid" alt="thumbnail not found">
                    </div>
                    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                        <div class="col">
                            <div class="d-flex align-items-center mt-4">
                                <a href="{{ route('contributor', $file->user->slug) }}" target="_blank" class="d-block d-flex my-2 align-items-center text-decoration-none web-gray">
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
                                {{-- <button type="button" class="btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2">
                                    <i class="fa-solid fa-folder-plus pe-2"></i> Collect
                                </button> --}}
                                <a style="background: #0D8CF1" href="http://www.facebook.com/sharer.php?u={{ url()->full() }}" target="_blank" class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-facebook pe-2"></i> fb
                                </a>

                                <a style="background: #1C96E8" href="" target="_blank" class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-twitter pe-2"></i> tw
                                </a>

                                <a style="background: #0C61BF" href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}" target="_blank" class="text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-linkedin pe-2"></i> ln
                                </a>
                                {{-- <a href="http://www.facebook.com/sharer.php?u={{ url()->full() }}" target="_blank" class="bg-primary text-light btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2 float-end">
                                    <i class="fa-brands fa-facebook pe-2"></i> Share
                                </a> --}}

                                {{-- <button type="button"
                                    class="btn btn-sm me-2 my-2 web-follow-btn fw-semibold px-4 py-2"><i
                                        class="fa-solid fa-share-nodes pe-2"></i> Like</button> --}}
                                {{-- <a  class="">
                                    <i class="fa-brands fa-facebook text-primary text-center fs-5"></i>
                                </a> --}}

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
                                {!! $file->description !!}
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
                                Category Name
                            </h6>
                            <p class="card-text">
                                <span class="badge bg-secondary">{{ $file->category->name }}</span>
                            </p>
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
                                @if ($downloads->last())
                                    {{ $downloads->last()->created_at->diffForHumans() }}
                                @else
                                    N/A
                                @endif
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
                                <a href="{{ route('register') }}" class="btn bg-warning m-0 fw-semibold px-5 m-auto text-white">
                                    Signup<br><span class="fw-light">To Download</span>
                                </a>
                            </div>
                            <hr>
                            Already our member?
                            <a href="{{ route('login') }}" class="web-text-color text-decoration-none fw-semibold" id="login">Login</a>
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
                                        <a href="{{ route('contributor', $file->user->slug) }}" target="_blank" class="d-block text-decoration-none text-white">
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
@endsection
