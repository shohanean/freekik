@extends('layouts.dashboard')

@section('upload.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'file for review' => 'file.for.review',
            $file->title => ''
        ]
    ])
@endsection

@section('content')
<div id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="row">
            <div class="col-xl-8">
                <!--begin::Engage Widget 14-->
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-body p-15 pb-20">
                        <div class="row mb-17">
                            <div class="col-xxl-5 mb-11 mb-xxl-0">
                                <!--begin::Image-->
                                <div class="card card-custom card-stretch">
                                    <div class="card-body p-0 rounded px-10 py-15 d-flex align-items-center justify-content-center">
                                        <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="mw-100 w-200px">
                                        {{-- <img src="{{ Storage::disk('s3')->url($file->thumbnail) }}" class="mw-100 w-200px" style="transform: scale(1.6);"> --}}
                                    </div>
                                </div>
                                <!--end::Image-->
                            </div>
                            <div class="col-xxl-7 pl-xxl-11">
                                <h2 class="font-weight-bolder text-dark mb-7" style="font-size: 32px;">
                                    {{ $file->title }}
                                </h2>
                                <div class="font-size-h2 mb-7 text-dark-50">From
                                <span class="text-info font-weight-boldest ml-2">{{ $file->category->name }}</span></div>
                                <div class="line-height-xl">
                                    {{ $file->description }}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <!--begin::Info-->
                            <div class="col-6 col-md-3">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Thumbnail Size</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ Storage::disk('s3')->size($file->thumbnail) }} bytes</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Main File Size</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ Storage::disk('s3')->size($file->main) }} bytes</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Current Status</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $file->status }}</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Uploaded</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $file->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <h2 class="text-center mb-5 py-5 bg-light-success">This product is uploaded by you</h2>
                            <div class="col-6 col-md-4">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Uploader Name</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $file->user->name }}</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Uploader Email</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $file->user->email }}</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="mb-8 d-flex flex-column">
                                    <span class="text-dark font-weight-bold mb-4">#Uploader Account Opened</span>
                                    <span class="text-muted font-weight-bolder font-size-lg">{{ $file->user->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--begin::Buttons-->
                        <div class="d-flex">
                            <a download href="{{ Storage::disk('s3')->url($file->main) }}" class="btn btn-sm btn-primary font-weight-bolder mr-6 px-6 font-size-sm">
                                <i class="fa fa-download"></i> Download Your Uploaded File
                            </a>
                            @if ($file->status == 'sent to review')
                                &nbsp;
                                <form action="{{ route('upload.destroy', $file->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger font-weight-bolder mr-6 px-6 font-size-sm" type="submit">
                                        <i class="fa fa-trash"></i> Delete Your Submission
                                    </button>
                                </form>
                            @endif
                        </div>
                        <!--end::Buttons-->
                    </div>
                </div>
                <!--end::Engage Widget 14-->
            </div>
            <div class="col-xl-4">
                @if ($file->status != 'sent to review')
                <!--begin::Engage Widget 14-->
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-body p-15 pb-20">
                        <form action="{{ route('upload.update', $file->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <!--begin::Info-->
                                <div class="col-12 col-md-12">
                                    <div class="mb-3 d-flex flex-column">
                                        <h3>Resubmit</h3>
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label class="required form-label">File Thumbnail</label>
                                        <input type="file" name="thumbnail" class="form-control mb-4">
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label class="required form-label">Main File (.zip)</label>
                                        <input type="file" name="main" class="form-control mb-4">
                                    </div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--begin::Buttons-->
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary font-weight-bolder mr-6 px-6 font-size-sm">
                                    Resubmit
                                </button>
                            </div>
                            <!--end::Buttons-->
                        </form>
                    </div>
                </div>
                <!--end::Engage Widget 14-->
                @endif
                @include('backend.parts.timeline')
            </div>
        </div>
        <!--end::General options-->
    </div>
    <!--end::Main column-->
<div>

</div>
</div>
@endsection
