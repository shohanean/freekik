@extends('layouts.dashboard')

@section('category.index')
active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'upload files' => 'upload.create'
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
                    <h2>Upload Files</h2>
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
                        <select name="" class="form-control mb-4">
                            <option value=""> - Select One Category - </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        {{-- <div class="fv-plugins-message-container invalid-feedback">Error Message Here</div> --}}
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Category Image</label>
                        <input type="text" name="category_image" class="form-control mb-4">
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

