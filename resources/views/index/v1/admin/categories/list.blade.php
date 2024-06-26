@extends('template.v1.admins.layout')
@section('content')
    <!--begin::اصلی-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">جداول</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted text-hover-primary">دسته بندی ها</a>
                            </li>
                            <!--end::item-->
                            <!--begin::item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::item-->
                            <!--begin::item-->
                            <li class="breadcrumb-item text-muted">لیست</li>
                            <!--end::item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::جداول Widget 11-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">دسته بندی ها</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-2"></i>افزودن</a>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4 min-w-125px rounded-start">ردیف</th>
                                        <th class="min-w-125px">نام</th>
                                        <th class="min-w-125px">دسته والد</th>
                                        <th class="min-w-200px text-end rounded-end"></th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">1</a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">دسته بندی 1</a>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">والد</a>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::جداول Widget 11-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::اصلی-->
    </div>
    <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::اپلیکیشن-->
@endsection
