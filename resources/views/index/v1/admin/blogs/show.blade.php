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
                                            <span class="fw-bold text-gray-400">6 فروردین 1400</span>
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
                                    <a href="#" class="text-dark text-hover-primary fs-2 fw-bold">پنل مدیریت -  ساختن یک ساس قابل تنظیم برنامه ها و راه حل های مبتنی بر
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
                                    <p class="mb-8">اول ، انکار مسئولیت - کل مراحل نوشتن پست وبلاگ اغلب بیش از دو ساعت طول می کشد ، حتی اگر بتوانید هشتاد کلمه در دقیقه تایپ کنید و مهارت نوشتن شما تیز باشد. از نطفه ایده گرفته تا ضربه نهایی به "انتشار" ، ممکن است چندین روز یا شاید حتی یک هفته "نوشتن" یک پست وبلاگ را سپری کنید ، اما مهم است که آن ساعت های حیاتی را برای برنامه ریزی پست خود و حتی فکر کردن صرف کنید.
                                        <a href="#" class="link-primary pe-1">پست شما</a>(بله، اگر وبلاگ نویس هستید، فکر کردن به حساب می آید) قبل از اینکه واقعاً آن را بنویسید.</p>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <p class="mb-8">یک جمله قدیمی وجود دارد که می گوید ،
                                        <span class="text-gray-800 pe-1">"هیچ لذت برای نویسنده ، هیچ سرگرم کننده ای برای خواننده."</span>مهم نیست که در کدام صنعت کار می کنید ، به عنوان یک وبلاگ نویس ، باید با این گفته زندگی کنید و بمیرید.</p>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    <a href="#" class="link-primary pe-1">منظورم هیچ چیز نیست</a>- یک پست وبلاگ را موثرتر از عدم اشتیاق نویسنده از بین می برد. شما می توانید بفهمید که نویسنده با موضوع خود چه زمانی طرفدار می شود، و این خیلی ترسناک است که کمی شرم آور است.</p>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <p class="mb-17">من می توانم اعتراض شما را از قبل بشنوم. "اما دن، من باید برای یک شرکت تولید جعبه مقوایی وبلاگ بنویسم." من درد تو را احساس می کنم، واقعاً احساس می کنم. در طول حرفه‌ام، برای ده‌ها مشتری در برخی از صنایع کمتر هیجان‌انگیز (مانند رعایت مقررات مالی و مسکن شرکت‌ها) محتوا نوشته‌ام، اما ویژگی بارز یک وبلاگ نویس حرفه‌ای توانایی نوشتن خوب در مورد هر یک است. موضوع، مهم نیست که چقدر خشک است. با این حال، اگر بتوانید حداقل کمی برای موضوع مورد نظر اشتیاق داشته باشید، نوشتن مقالات بسیار ساده تر است.</p>
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
                            <a href="#" class="fs-6 fw-semibold link-primary">نمایش همه خبرها</a>
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
                                <div class="card-xl-stretch me-md-6">
                                    <!--begin::Image-->
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btیاnGtLwIo">
                                        <img src="{{asset('assets/v1/admins/media/svg/misc/video-play.svg')}}" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                    </a>
                                    <!--end::Image-->
                                    <!--begin::Body-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="#" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">نحوه ی شروع کار با پنل ادمین مترونیک</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">ما تمرکز خود را بر این گذاشته ایم که از هیچ چیز نترسیم و از ایجاد تمرکز چشم دور شویم</div>
                                        <!--end::Text-->
                                        <!--begin::Content-->
                                        <div class="fs-6 fw-bold">
                                            <!--begin::نویسنده-->
                                            <a href="#" class="text-gray-700 text-hover-primary">رضا غلی ابادی</a>
                                            <!--end::نویسنده-->
                                            <!--begin::تاریخ-->
                                            <span class="text-muted">2021</span>
                                            <!--end::تاریخ-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Body-->
                                </div>
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
