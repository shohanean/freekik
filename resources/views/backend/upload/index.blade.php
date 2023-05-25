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
                    <span class="ms-3 badge badge-success">{{ $files->total() }}</span>
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
                                <th>First Submission</th>
                                <th class="rounded-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($files as $file)
                                <tr class="border-bottom align-middle">
                                    <td>
                                        <img width="80" src="{{ Storage::disk('s3')->url($file->thumbnail) }}" alt="not found">
                                    </td>
                                    <td>
                                        <b>{{ $file->title }}</b>
                                    </td>
                                    <td>
                                        <a href="{{ route('category.details', $file->category->slug) }}" target="_black">{{ $file->category->name }}</a>
                                    </td>
                                    <td>
                                        @if ($file->status == 'approved')
                                            <i class="fa fa-check-circle text-success"></i>
                                        @else
                                            <i class="fa fa-exclamation-circle text-warning"></i>
                                        @endif
                                        {{ $file->status }}
                                    </td>
                                    <td>{{ $file->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <a href="{{ route('upload.show', $file->id) }}" class="btn btn-primary btn-icon"><i class="fa fa-file"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            <tr class="text-center text-danger">
                                <td colspan="50">No Data to Show</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $files->links() }}
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
