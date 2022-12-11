@extends('layouts.dashboard')

@section('upload.create')
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

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Great!</strong> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <!--begin::Input group-->
                            <div class="mb-4 fv-row fv-plugins-icon-container">
                                <label class="required form-label">File Type</label>
                                <select name="file_type" class="form-control mb-4">
                                    <option value=""> - Select One File Type - </option>
                                    <option value="1">Free</option>
                                    <option value="2">Premium</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-6">
                            <!--begin::Input group-->
                            <div class="mb-4 fv-row fv-plugins-icon-container">
                                <label class="required form-label">Category Name</label>
                                <select name="category_id" class="form-control mb-4">
                                    <option value=""> - Select One Category - </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>


                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Title</label>
                        <input type="text" name="title" class="form-control mb-4">
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Description</label>
                        <textarea id="description" name="description" class="mb-4"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">File Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control mb-4">
                        {{-- <small>240*150</small>
                        <div class="fv-plugins-message-container invalid-feedback">Error Message Here</div> --}}
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Main File (.zip)</label>
                        <input type="file" name="main" class="form-control mb-4">
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-4 fv-row fv-plugins-icon-container">
                        <label class="required form-label">Tags (Maximum five tags)</label>
                        <input type="text" name="tags" id="tags" class="mb-4">
                    </div>
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                        Send To Review
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

@section('footer_scripts')
<script>
    $(document).ready(function() {
        // ClassicEditor
        // .create( document.querySelector( '#summernote' ) )
        // .catch( error => {
        //     console.error( error );
        // } );
        // $('#summernote').summernote();


        tinymce.init({
            selector: 'textarea#description',
            menu: {
                file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
                edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
                view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
                insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
                format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
                tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
                table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
                help: { title: 'Help', items: 'help' }
            }
        });
        $('#tags').selectize({
            delimiter: ',',
            maxItems: 5,
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });
    });
</script>
@endsection

