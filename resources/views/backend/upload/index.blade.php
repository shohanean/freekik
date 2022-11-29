@extends('layouts.dashboard')

@section('upload.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'files' => 'upload.index'
        ]
    ])
@endsection

@section('content')
<div id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>
                        Upload Files
                    </h2>
                    <span class="ms-3 badge badge-success">{{ $files->count() }}</span>
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
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th class="rounded-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                <tr>
                                    <td>
                                        <img width="80" src="{{ Storage::disk('s3')->url($file->thumbnail) }}" alt="not found">
                                    </td>
                                    <td>{{ $file->title }}</td>
                                    <td>
                                        {{ $file->category->name }}
                                    </td>
                                    <td>{{ $file->status }}</td>
                                    <td>{{ $file->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <a href="{{ route('upload.show', $file->id) }}" class="btn btn-primary btn-icon"><i class="fa fa-file"></i></a>
                                                {{-- <a download href="{{ Storage::disk('s3')->url($file->main) }}" class="btn btn-info btn-icon"><i class="fa fa-download"></i></a> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
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

