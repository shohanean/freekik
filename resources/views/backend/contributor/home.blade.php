@extends('layouts.dashboard')

@section('home')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
        ]
    ])
@endsection

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fa fa-file fa-2x text-white lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6 d-block">
                        {{ $files->count() }}
                    </span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Total</span>
                        <span class="">Submissions</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #80f4b0">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(0, 0, 0, 0.4);background-color: #80f4b0">
                    <i class="fas fa-clipboard-check fa-2x text-black lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold me-6 d-block">
                        {{ $files->where('status', 'approved')->count() }}
                    </span>
                    <div class="fw-bold fs-6">
                        <span class="d-block">Total</span>
                        <span class="">Approved</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #eaf761">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(0, 0, 0, 0.4);background-color: #eaf761">
                    <i class="fas fa-exclamation-circle fa-2x text-black lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold me-6 d-block">
                        {{ $files->where('status', 'soft rejected')->count() }}
                    </span>
                    <div class="fw-bold fs-6">
                        <span class="d-block">Total</span>
                        <span class="">Soft Rejected</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #fd884e">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(0, 0, 0, 0.4);background-color: #fd884e">
                    <i class="fas fa-file-excel fa-2x text-black lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold me-6 d-block">
                        {{ $files->where('status', 'hard rejected')->count() }}
                    </span>
                    <div class="fw-bold fs-6">
                        <span class="d-block">Total</span>
                        <span class="">Hard Rejected</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #565555">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(250, 245, 245, 0.4);background-color: #565555">
                    <i class="fas fa-share-square fa-2x text-white lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold text-white me-6 d-block">
                        {{ $files->where('status', 'sent to review')->count() }}
                    </span>
                    <div class="fw-bold text-white fs-6">
                        <span class="d-block">Total</span>
                        <span class="">Sent to Review</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #fd4e4e">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(0, 0, 0, 0.4);background-color: #fd4e4e">
                    <i class="fa fa-trash fa-2x text-black lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold me-6 d-block">
                        {{ $trashed_files->count() }}
                    </span>
                    <div class="fw-bold fs-6">
                        <span class="d-block">Total</span>
                        <span class="">Deleted</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #4efddd">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(0, 0, 0, 0.4);background-color: #4efddd">
                    <i class="fa fa-download fa-2x text-black lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold me-6 d-block">
                        -
                    </span>
                    <div class="fw-bold fs-6">
                        <span class="d-block">Total</span>
                        <span class="">Download</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
</div>
@endsection
