<div class="card card-custom card-stretch gutter-b mt-5" style="height: 370px; overflow-y:scroll">
    <div class="card-body">
        <h1 class="mb-5">Timeline</h1>
        <div class="timeline-label">
            @foreach ($timelines as $timeline)
                <!--begin::Item-->
                <div class="timeline-item">
                    <!--begin::Label-->
                    <div class="timeline-label fw-bolder text-gray-800 fs-8">
                        {{ $timeline->created_at->format('d/m/Y') }}
                        <br>
                        {{ $timeline->created_at->format('h:i A') }}
                    </div>
                    <!--end::Label-->
                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        <i class="fa fa-genderless text-{{ $timeline->alert }} fs-1"></i>
                    </div>
                    <!--end::Badge-->
                    <!--begin::Content-->
                    <div class="timeline-content d-flex">
                        <span class="fw-bolder text-gray-600 ps-3">
                            <span class="badge badge-{{ $timeline->alert }}">{{ Str::title($timeline->details) }}</span>
                            by
                            <a href="">{{ $timeline->user->name }}</a>
                            <br>
                            <span>{{ $timeline->comment }}</span>
                        </span>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Item-->
            @endforeach
        </div>
    </div>
</div>
