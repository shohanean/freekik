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
                    <span class="badge badge-success">{{ $files->count() }}</span>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">-</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                <tr>
                                    <td>
                                        <p>{{ $file->thumbnail }}</p>
                                        <p>{{ $file->main }}</p>
                                    </td>
                                    <td>
                                        {{ $file->category->name }}
                                        <img width="40" src="{{ Storage::disk('s3')->url($file->category->category_image) }}" alt="not found">
                                    </td>
                                    <td>{{ $file->title }}</td>
                                    <td>{{ $file->description }}</td>
                                    <td>{{ $file->status }}</td>
                                    <td>{{ $file->created_at->diffForHumans() }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info">-</button>
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

