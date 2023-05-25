@extends('layouts.dashboard')

@section('earnings.index')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'earnings' => 'earnings.index',
            'Send Withdraw Request' => '',
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
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>
                            Send Withdraw Request
                        </h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <form action="{{ route('earnings.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <!--begin::Input group-->
                                <div class="mb-4 fv-row fv-plugins-icon-container">
                                    <label class="required form-label">Withdraw Amount</label>
                                    <input class="form-control mb-4" type="text" value="850" readonly disabled>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-6">
                                <!--begin::Input group-->
                                <div class="mb-4 fv-row fv-plugins-icon-container">
                                    <label class="required form-label">Withdraw Method</label>
                                    <select name="withdraw_method" class="form-control mb-4">
                                        <option value=""> - Select One Withdraw Method - </option>
                                        <option value="1">Cash</option>
                                        <option value="2">Bkash</option>
                                        <option value="3">Bank</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="mb-4 fv-row fv-plugins-icon-container">
                            <label class="required form-label">Remarks</label>
                            <textarea name="withdraw_remarks" class="mb-4 form-control"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            Send Withdraw Request
                        </button>
                        <!--end::Button-->
                    </form>
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
                        {{-- <span class="ms-3 badge badge-success">{{ count($downloads) }}</span> --}}
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
                                @forelse ($withdraws as $withdraw)
                                    <tr class="border-bottom align-middle">
                                        <td>{{ $withdraw }}</td>
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
