@extends('template.v1.admins.layout')
@section('content')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Post card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-15 pb-lg-0">
                    <!--begin::قالب بندی-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15">
                            <!--begin::Post content-->
                            <div class="mb-17">
                                <!--begin::Wrapper-->
                                <div class="mb-8">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap mb-6">
                                        <!--begin::item-->
                                        <div class="me-9 my-1">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-element-11 text-primary fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Tags-->
                                            <span class="fw-bold text-gray-400">{{\Hekmatinasser\Verta\Verta::instance($blog->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</span>
                                            <!--end::Tags-->
                                        </div>
                                        <!--end::item-->
                                        <!--begin::item-->
                                        <div class="me-9 my-1">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-briefcase text-primary fs-2 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::item-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Title-->
                                    <a href="#" class="text-dark text-hover-primary fs-2 fw-bold">{{$blog->title}}
                                        <span class="fw-bold text-muted fs-5 ps-1">مطالعه در 5 دقیقه</span></a>
                                    <!--end::Title-->
                                    <!--begin::Container-->
                                    <div class="overlay mt-8">
                                        <!--begin::Image-->
                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url({{asset('assets/v1/admins/media/stock/1600x800/img-1.jpg')}})"></div>
                                        <!--end::Image-->
                                        <!--begin::Links-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <a href="#" class="btn btn-primary">درباره ما</a>
                                            <a href="#" class="btn btn-light-primary ms-3">به ما بپوندید</a>
                                        </div>
                                        <!--end::Links-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::توضیحات-->
                                <div class="fs-5 fw-semibold text-gray-600">
                                    <!--begin::Text-->
                                    <p class="mb-8">{!! $blog->body !!}</p>
                                    <!--end::Text-->
                                </div>
                                <!--end::توضیحات-->
                                <!--begin::Icons-->
                                <div class="d-flex flex-center">
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/facebook-4.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/instagram-2-1.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/github.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/behance.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/pinterest-p.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/twitter.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                    <!--begin::Icon-->
                                    <a href="#" class="mx-4">
                                        <img src="{{asset('assets/v1/admins/media/svg/brand-logos/dribbble-icon-1.svg')}}" class="h-20px my-2" alt="" />
                                    </a>
                                    <!--end::Icon-->
                                </div>
                                <!--end::Icons-->
                            </div>
                            <!--end::Post content-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::قالب بندی-->
                    <!--begin::Section-->
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-dark">خبرها</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="{{route('blogs.index')}}" class="fs-6 fw-semibold link-primary">نمایش همه خبرها</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-4">
                                <!--begin::Feature post-->
                                @foreach($blogs as $row)
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btیاnGtLwIo">
                                            <img src="{{asset('assets/v1/admins/media/svg/misc/video-play.svg')}}" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{substr($row->title,0,20)}}</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">{!! substr($row->body,0,50) !!}</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bold">

                                                <!--begin::تاریخ-->
                                                <span class="text-muted">{{\Hekmatinasser\Verta\Verta::instance($row->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</span>
                                                <!--end::تاریخ-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                @endforeach
                                <!--end::Feature post-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Post card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection
