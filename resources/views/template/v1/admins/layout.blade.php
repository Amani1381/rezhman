<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head><base href="../"/>
    <title>مدیریت ریژمان</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, حالت تیره, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="مترونیک - پنل ادمین بوت استراپ Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, روبی روی ریل, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin داشبورد Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="مدیریت ریژمان" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('assets/v1/admins/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/v1/admins/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/v1/admins/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/v1/admins/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
ph
<!--begin::اپلیکیشن-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
            <!--begin::Header container-->
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="مشاهده">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!--end::Sidebar mobile toggle-->
                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="#" class="d-lg-none">
                        <img alt="Logo" src="{{asset('assets/v1/admins/media/logos/default-small.svg')}}" class="h-30px" />
                    </a>
                </div>
                <!--end::Mobile logo-->
                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                    <!--begin::Menu wrapper-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link">
											<span class="menu-title">ریژمان</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
													<span class="menu-icon">
														<i class="ki-duotone ki-handcart fs-2"></i>
													</span>
													<span class="menu-title">فروشگاه</span>
													<span class="menu-arrow"></span>
												</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="left-start" class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">کاتالوگ</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">محصولات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">دسته بندی ها</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">افزودن محصولات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title"> محصولات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">افزودن دسته بندی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">دسته بندی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">فروش</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">لیست سفارشات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">جزییات سفارش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">افزودن سفارش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title"> سفارش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">مشتریان</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">لیست مشتریان</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">مشتریان جزییات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link-->
                                                <span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">گزارشات</span>
															<span class="menu-arrow"></span>
														</span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">محصولات نشان داد</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/sales.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">فروش</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/returns.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">برگشتی ها</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">مشتری سفارشات</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                            <span class="menu-title">حمل دریایی</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                                    <span class="menu-title">تنظیمات</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="#">
                        <img alt="Logo" src="{{asset('assets/v1/admins/media/logos/default-dark.svg')}}" class="h-25px app-sidebar-logo-default" />
                        <img alt="Logo" src="{{asset('assets/v1/admins/media/logos/default-small.svg')}}" class="h-20px app-sidebar-logo-minimize" />
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Sidebar toggle-->
                    <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                        <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                        <!--begin::Scroll wrapper-->
                        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-user fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">احراز هویت</span>
												<span class="menu-arrow"></span>
											</span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title"> قالب بندی</span>
														<span class="menu-arrow"></span>
													</span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">ورود</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">ثبت نام</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/two-factor.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">دو مرحله ای</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">ریست کلمه عبور</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
                                                        <span class="menu-title">کلمه عبور جدید</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/authentication/general/error-500.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">خطایی 500</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Scroll wrapper-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::sidebar menu-->
            </div>
            <!--end::Sidebar-->
@yield('content')
            <!--end::Modal - Users جستجو-->
            <!--end::Modals-->
            <!--begin::Javascript-->
            @yield('script-ckeditor')
            <script>var hostUrl = "{{asset('assets/')}}";</script>
            <!--begin::Global Javascript Bundle(mandatory for all pages)-->
            <script src="{{asset('assets/v1/admins/plugins/global/plugins.bundle.js')}}"></script>
            <script src="{{asset('assets/v1/admins/js/scripts.bundle.js')}}"></script>
            <!--end::Global Javascript Bundle-->
            <!--begin::Vendors Javascript(used for this page only)-->
            <script src="{{asset('assets/v1/admins/plugins/custom/datatables/datatables.bundle.js')}}"></script>
            <!--end::Vendors Javascript-->
            <!--begin::سفارشی Javascript(used for this page only)-->
            <script src="{{asset('assets/v1/admins/js/widgets.bundle.js')}}"></script>
            <script src="{{asset('assets/v1/admins/js/custom/widgets.js')}}"></script>
            <script src="{{asset('assets/v1/admins/js/custom/apps/chat/chat.js')}}"></script>
            <script src="{{asset('assets/v1/admins/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
            <script src="{{asset('assets/v1/admins/js/custom/utilities/modals/create-app.js')}}"></script>
            <script src="{{asset('assets/v1/admins/js/custom/utilities/modals/users-search.js')}}"></script>
            @yield('script-ckeditor')
            <!--end::سفارشی Javascript-->
            <!--end::Javascript-->
</body>
<!--end::Body-->
</html>

