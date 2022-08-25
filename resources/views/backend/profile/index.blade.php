@extends('layouts.dashboard')

@section('content')

@include('backend.profile.parts.nav')

<!--begin::details View-->
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a href="../../demo1/dist/account/settings.html" class="btn btn-primary align-self-center">Edit Profile</a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">{{ auth()->user()->name }}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Company</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">Keenthemes</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Contact Phone
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-kt-initialized="1"></i></label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
                <span class="badge badge-success">Verified</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Company Site</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Country
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Country of origination" data-kt-initialized="1"></i></label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">Germany</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Communication</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-10">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>
            <!--begin::Label-->
            <!--begin::Label-->
            <div class="col-lg-8">
                <span class="fw-semibold fs-6 text-gray-800">Yes</span>
            </div>
            <!--begin::Label-->
        </div>
        <!--end::Input group-->
        <!--begin::Notice-->
        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1">
                <!--begin::Content-->
                <div class="fw-semibold">
                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                    <div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please
                    <a class="fw-bold" href="../../demo1/dist/account/billing.html">Add Payment Method</a>.</div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Card body-->
</div>
<!--end::details View-->
<!--begin::Row-->
<div class="row g-5 g-xxl-8">
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::List Widget 5-->
        <div class="card mb-5 mb-xxl-8">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bold mb-2 text-dark">Activities</span>
                    <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfa2c3b5134">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfa2c3b5134" data-allow-clear="true" data-select2-id="select2-data-13-kl56" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option data-select2-id="select2-data-15-4kx9"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-3sdw" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pmtg-container" aria-controls="select2-pmtg-container"><span class="select2-selection__rendered" id="select2-pmtg-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
                <!--begin::Timeline-->
                <div class="timeline-label">
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-warning fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-success fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Content-->
                        <div class="timeline-content d-flex">
                            <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                        <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-primary fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-primary fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Desc-->
                        <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                        <!--end::Desc-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="timeline-item mb-9">
                        <!--begin::Label-->
                        <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                        <!--end::Label-->
                        <!--begin::Badge-->
                        <div class="timeline-badge">
                            <i class="fa fa-genderless text-success fs-1"></i>
                        </div>
                        <!--end::Badge-->
                        <!--begin::Text-->
                        <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Timeline-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end: List Widget 5-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
@endsection