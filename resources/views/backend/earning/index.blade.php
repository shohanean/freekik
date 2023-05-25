@extends('layouts.dashboard')

@section('earnings.index')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'earnings' => 'earnings.index',
        ],
    ])
@endsection

@section('content')
    <div id="kt_ecommerce_add_category_form"
        class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
        data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card body-->
                <div class="card-body py-3">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> You Should Upload Your National ID Card To Send Withdraw Request.
                        <a target="_blank" href="{{ route('profile.index') }}">Upload Here</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <h1>Total Earning</h1>
                                    <h3>৳{{ $downloads->sum('amount') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <h1>Your Earning</h1>
                                    <h3>৳{{ $downloads->sum('amount') * (80 / 100) }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <h1>Withdrawn</h1>
                                    <h3>৳00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-secondary">
                                <div class="card-body">
                                    <h1>Available</h1>
                                    <h3>
                                        ৳00
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="card bg-secondary">
                                <div class="card-body p-3">
                                    <span> <u>Important Links:</u> </span>
                                    <a class="btn btn-sm btn-primary" href="{{ route('earnings.create') }}">
                                        Send Withdraw Request
                                    </a>
                                    <a class="btn btn-sm btn-info" href="{{ route('earnings.create') }}">
                                        Previous Withdrawn Request
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>
                            Earnings From
                        </h2>
                        <span class="ms-3 badge badge-success">{{ count($downloads) }}</span>
                    </div>
                    <div class="card-title">
                        <h2>
                            Download
                        </h2>
                        <a href="{{ route('earnings.download') }}" class="ms-3 btn btn-sm btn-info">
                            <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="ps-4 rounded-start">Thumbnail</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Sold Amount</th>
                                    <th>Your Earning (80%)</th>
                                    <th class="rounded-end">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($downloads as $download)
                                    <tr class="border-bottom align-middle">
                                        <td>
                                            <img width="80"
                                                src="{{ Storage::disk('s3')->url($download->file->thumbnail) }}"
                                                alt="not found">
                                        </td>
                                        <td>{{ $download->file->title }}</td>
                                        <td>
                                            @if ($download->file->file_type == 1)
                                                Free
                                            @else
                                                Premium
                                            @endif
                                        </td>
                                        <td>{{ $download->amount }}</td>
                                        <td>{{ $download->amount * (80 / 100) }}</td>
                                        <td>{{ $download->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center text-danger">
                                        <td colspan="50">No Data to Show</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
        </div>
        <!--end::Main column-->
        <div>

        </div>
    </div>
@endsection
