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
        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #548c82">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-3">
                <!--begin::Icon-->
                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(0, 0, 0, 0.4);background-color: #548c82">
                    <i class="fa fa-arrow-down fa-2x text-black lh-0"></i>
                </div>
                <!--end::Icon-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex align-items-end mb-3">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                    <span class="fs-4hx fw-bold me-6 d-block">
                        {{ $todaysdownloads->count() }}
                    </span>
                    <div class="fw-bold fs-6">
                        <span class="d-block">Today's</span>
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
                        {{ $downloads->count() }}
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
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Top 3 Downloaded File Of Yours
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 rounded-start">Rank</th>
                                <th>File Name</th>
                                <th class="rounded-end"># of Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tops as $top)
                                <tr class="border-bottom align-middle">
                                    <td>
                                        @if ($loop->index == 0)
                                            <img src="{{ asset('dashboard_assets/media/badges/1.png') }}" alt="not found" width="40">
                                        @elseif ($loop->index == 1)
                                            <img src="{{ asset('dashboard_assets/media/badges/2.png') }}" alt="not found" width="40">
                                        @else
                                            <img src="{{ asset('dashboard_assets/media/badges/3.png') }}" alt="not found" width="40">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('item.details', App\Models\File::find($top->file_id)->slug) }}" target="_blank">{{ App\Models\File::find($top->file_id)->title }}</a>
                                    </td>
                                    <td>{{ $top->total }}</td>

                                </tr>
                            @empty
                                <tr class="text-center border-bottom align-middle text-danger">
                                    <td colspan="50">Nothing to show here</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Top 3 Downloader Of Your Files
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 rounded-start">Downloader Name</th>
                                <th># of Download</th>
                                <th class="rounded-end">Rank</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($tops as $top)
                                <tr class="border-bottom align-middle">
                                    <td>
                                        <a href="{{ route('item.details', App\Models\File::find($top->file_id)->slug) }}" target="_blank">{{ App\Models\File::find($top->file_id)->title }}</a>
                                    </td>
                                    <td>{{ $top->total }}</td>
                                    <td>{{ $loop->index + 1 }}</td>
                                </tr>
                            @empty
                                <tr class="text-center border-bottom align-middle text-danger">
                                    <td colspan="50">Nothing to show here</td>
                                </tr>
                            @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
