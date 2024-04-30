@extends('template.v1.admins.layout')
@section('styles')
    <link rel="stylesheet" href="{{asset('/admin/dist/css/dropzone.css')}}">
@endsection
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
                                <a href="#" class="text-muted text-hover-primary">خبرها</a>
                            </li>
                            <!--end::item-->
                            <!--begin::item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::item-->
                            <!--begin::item-->
                            <li class="breadcrumb-item text-muted">افزودن</li>
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
                    <!--begin::مخاطبین اپلیکیشن- افزودن مخاطب جدید-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Content-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::مخاطبین-->
                            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                                <!--begin::کارت header-->
                                <div class="card-header pt-7" id="kt_chat_contacts_header">
                                    <!--begin::کارت title-->
                                    <div class="card-title">
                                        <i class="ki-duotone ki-badge fs-1 me-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                        <h2>افزودن خبر جدید</h2>
                                    </div>
                                    <!--end::کارت title-->
                                </div>
                                <!--end::کارت header-->
                                <!--begin::کارت body-->
                                <div class="card-body pt-5">
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <!--begin::Form-->
                                        <form action="{{route('blogs.store')}}" method="post">
                                            @csrf
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">عنوان</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="title" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">عنوان</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <textarea  id="description" name="body">{{old('body')}}</textarea>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-7">
                                            <!--begin::Tags-->
                                            <label class="fs-6 fw-semibold mb-3">
                                                <span>بروزرسانی آواتار</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title=" file types: png, jpg, jpeg.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Image input wrapper-->
                                            <div class="mt-1">
                                                <!--begin::Image placeholder-->
                                                <style>.image-input-placeholder { background-image:url({{asset('assets/v1/admins/media/svg/files/blank-image.svg')}}); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url({{asset('assets/v1/admins/media/svg/files/blank-image.svg')}}); }</style>
                                                <!--end::Image placeholder-->
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                                    <!--begin::نمایش existing avatar-->
                                                    <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                                    <!--end::نمایش existing avatar-->
                                                    <!--begin::-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::-->
                                                    <!--begin::انصراف-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="انصراف avatar">
																		<i class="ki-duotone ki-cross fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    <!--end::انصراف-->
                                                    <!--begin::حذف-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف آواتار">
																		<i class="ki-duotone ki-cross fs-2">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    <!--end::حذف-->
                                                </div>
                                                <!--end::Image input-->
                                            </div>
                                            <!--end::Image input wrapper-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Row-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Tags-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">وضعیت</span>
                                                    </label>
                                                    <!--end::Tags-->
                                                    <div class="w-100">
                                                        <!--begin::انتخاب2-->
                                                        <select id="kt_ecommerce_select2_country" class="form-select form-select-solid" name="status" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="وضعیت">
                                                            <option value="">انتخاب کنید</option>
                                                            <option value="1">فعال</option>
                                                            <option value="0">غیرفعال</option>
                                                        </select>
                                                        <!--end::انتخاب2-->
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Separator-->
                                        <div class="separator mb-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::عملیات buttons-->
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Button-->
                                            <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">انصراف</button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                                <span class="indicator-label">ذخیره</span>
                                                <span class="indicator-progress">لطفا صبر کنید...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::عملیات buttons-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::کارت body-->
                            </div>
                            <!--end::مخاطبین-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::مخاطبین اپلیکیشن- افزودن مخاطب جدید-->
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
@section('script-ckeditor')
    <script type="text/javascript" src="{{asset('assets/v1/admins/plugins/custom/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description',{
            customConfig:'config.js',
            toolbar:'simple',
            language:'fa',
            removePlugins:'cloudservices, easyimage'
        });
    </script>

@endsection
