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
    @for ($i=0; $i < 7; $i++)
    <!--begin::Col-->
    <div class="col-xl-3">
        <!--begin::Card widget 3-->
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                    <i class="fas fa-user-check fa-2x text-white lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx text-white fw-bold me-6 d-block">
                        23
                    </span>
                    <div class="fw-bold fs-6 text-white">
                        <span class="d-block">Verified</span>
                        <span class="">Users</span>
                    </div>
                </div>
                <!--end::Info-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card widget 3-->
    </div>
    <!--end::Col-->
    @endfor
</div>
@endsection
