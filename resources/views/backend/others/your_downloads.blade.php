@extends('layouts.dashboard')

@section('your.downloads')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'Your Downloads' => '',
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
                        Your Downloads
                    </h2>
                    <span class="ms-3 badge badge-success">{{ $downloads->total() }}</span>
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
                                <th class="rounded-end">Download Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($downloads as $download)
                                <tr class="border-bottom align-middle">
                                    <td>
                                        <img width="80" src="{{ Storage::disk('s3')->url($download->file->thumbnail) }}" alt="not found">
                                    </td>
                                    <td>
                                        <a href="{{ route('item.details', $download->file->slug) }}" target="_blank">{{ $download->file->title }} <i class="fas fa-external-link-alt"></i></a>
                                    </td>
                                    <td>{{ $download->created_at->diffForHumans() }}</td>
                                </tr>
                            @empty
                            <tr class="text-center text-danger">
                                <td colspan="50">No Data to Show</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $downloads->links() }}
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
