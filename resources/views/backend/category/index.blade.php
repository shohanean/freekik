@extends('layouts.dashboard')

@section('category.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'category manager' => 'category.index'
        ]
    ])
@endsection

@section('content')
<div id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
    <!--begin::Aside column-->
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-600px mb-7 me-lg-10">
        <!--begin::Template settings-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>All Category List</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr>
                                <th>SL. No.</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Featured</th>
                                <th>Added By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <img width="50" src="{{ Storage::disk('s3')->url($category->category_image) }}" alt="not found at aws">
                                    </td>
                                    <td>{{ ($category->featured) ? 'Yes':'No' }}</td>
                                    <td>{{ $category->user->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Template settings-->
    </div>
    <!--end::Aside column-->
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>General</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Category Name</label>
                        <input type="text" name="name" class="form-control mb-4" placeholder="Category Name">
                        {{-- <div class="fv-plugins-message-container invalid-feedback">Error Message Here</div> --}}
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Category Description</label>
                        <textarea name="description" class="form-control mb-4"rows="4"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Category Image</label>
                        <input type="file" name="category_image" class="form-control mb-4">
                        <small>240*150</small>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5 fv-row fv-plugins-icon-container">
                        <label class="form-label">Featured Category?</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="featured">
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                        Add Category
                    </button>
                    <!--end::Button-->
                </form>
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

