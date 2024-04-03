@extends('layouts.master')
@section('content')

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
       Dashboard
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                             <li class="breadcrumb-item text-muted">
                                 <a href="/dashboard" class="text-muted text-hover-primary">Home </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Dashboards </li>
                                <!--end::Item-->

                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->

        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Row-->
<div class="row gy-5 g-xl-10">
<!--begin::Col-->
<div class="col-sm-6 col-xl-2 mb-xl-10">
    <!--begin::Card widget 2-->
<div class="card h-lg-100">
<!--begin::Body-->
<div class="card-body d-flex justify-content-between align-items-start flex-column">
    <!--begin::Icon-->
    <div class="m-0">
                        <i class="ki-duotone ki-compass fs-2hx text-gray-600"><span class="path1"></span><span class="path2"></span></i>

    </div>
    <!--end::Icon-->

    <!--begin::Section-->
    <div class="d-flex flex-column my-7">
        <!--begin::Number-->
        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $users }}</span>
        <!--end::Number-->

        {{-- <!--begin::Follower-->
        <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">
                   USERS                    </span>

        </div>
        <!--end::Follower--> --}}
    </div>
    <!--end::Section-->

    <!--begin::Badge-->
    <span class="badge badge-light-success fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

       Toal Users
    </span>
    <!--end::Badge-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 2-->


 </div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-sm-6 col-xl-2 mb-xl-10">

<!--begin::Card widget 2-->
<div class="card h-lg-100">
<!--begin::Body-->
<div class="card-body d-flex justify-content-between align-items-start flex-column">
    <!--begin::Icon-->
    <div class="m-0  ">
                       <marquee speed="5"><i class="ki-duotone ki-chart-simple fs-2  badge badge-light-primary">Total Journals:
                            {{ $journals }}
                        </i> </marquee>

    </div>
    <!--end::Icon-->

    <!--begin::Section-->
    <div class="d-flex flex-column my-7">
        <!--begin::Number-->
        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $published }}</span>
        <!--end::Number-->

        <!--begin::Follower-->
        {{-- <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">
                   Published Journals
                </span>

        </div> --}}
        <!--end::Follower-->
    </div>
    <!--end::Section-->

    <!--begin::Badge-->
    <span class="badge badge-light-success ">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

        Published Journals
    </span>
    <!--end::Badge-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 2-->


 </div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-sm-6 col-xl-2 mb-xl-10">

<!--begin::Card widget 2-->
<div class="card h-lg-100">
<!--begin::Body-->
<div class="card-body d-flex justify-content-between align-items-start flex-column">
    <!--begin::Icon-->
    <div class="m-0">
                        <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600"><span class="path1"></span><span class="path2"></span></i>

    </div>
    <!--end::Icon-->

    <!--begin::Section-->
    <div class="d-flex flex-column my-7">
        <!--begin::Number-->
        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">0</span>
        <!--end::Number-->

        <!--begin::Follower-->
        <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">
                    Editors                    </span>

        </div>
        <!--end::Follower-->
    </div>
    <!--end::Section-->

    {{-- <!--begin::Badge-->
    <span class="badge badge-light-danger fs-base">
                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>

       New Editors
    </span>
    <!--end::Badge--> --}}
</div>
<!--end::Body-->
</div>
<!--end::Card widget 2-->


 </div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-sm-6 col-xl-2 mb-xl-10">

<!--begin::Card widget 2-->
<div class="card h-lg-100">
<!--begin::Body-->
<div class="card-body d-flex justify-content-between align-items-start flex-column">
    <!--begin::Icon-->
    <div class="m-0">
                        <i class="ki-duotone ki-map fs-2hx text-gray-600"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>

    </div>
    <!--end::Icon-->

    <!--begin::Section-->
    <div class="d-flex flex-column my-7">
        <!--begin::Number-->
        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $authors }}</span>
        <!--end::Number-->

        <!--begin::Follower-->
        {{-- <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">
                    Authors                   </span>

        </div> --}}
        <!--end::Follower-->
    </div>
    <!--end::Section-->

    <!--begin::Badge-->
    <span class="badge badge-light-success fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>

         Authors
    </span>
    <!--end::Badge-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 2-->


 </div>
<!--end::Col-->

 <!--begin::Col-->
 <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">

<!--begin::Card widget 2-->
<div class="card h-lg-100">
<!--begin::Body-->
<div class="card-body d-flex justify-content-between align-items-start flex-column">
    <!--begin::Icon-->
    <div class="m-0">
                        <i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600"><span class="path1"></span><span class="path2"></span></i>

    </div>
    <!--end::Icon-->

    <!--begin::Section-->
    <div class="d-flex flex-column my-7">
        <!--begin::Number-->
        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $rejected }}</span>
        <!--end::Number-->

        <!--begin::Follower-->
        {{-- <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">
                    Rejected Journals                    </span>

        </div> --}}
        <!--end::Follower-->
    </div>
    <!--end::Section-->

    <!--begin::Badge-->
    <span class="badge badge-light-danger fs-base">
         <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
        Rejected Journals
    </span>
    <!--end::Badge-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 2-->


 </div>
<!--end::Col-->

<!--begin::Col-->
<div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">

<!--begin::Card widget 2-->
<div class="card h-lg-100">
<!--begin::Body-->
<div class="card-body d-flex justify-content-between align-items-start flex-column">
    <!--begin::Icon-->
    <div class="m-0">
                        <i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600"><span class="path1"></span><span class="path2"></span></i>

    </div>
    <!--end::Icon-->

    <!--begin::Section-->
    <div class="d-flex flex-column my-7">
        <!--begin::Number-->
        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $review }}</span>
        <!--end::Number-->

        <!--begin::Follower-->
        <div class="m-0">
            <span class="fw-semibold fs-6 text-gray-400">Under Review </span>
        </div>
        <!--end::Follower-->
    </div>
    <!--end::Section-->

    <!--begin::Badge-->
    <span class="badge badge-light-warning fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-warning ms-n1"><span class="path1"></span><span class="path2"></span></i>

 Under Review
    </span>
    <!--end::Badge-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 2-->


 </div>
<!--end::Col-->
</div>
<!--end::Row-->



<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4">

<!--begin::Chart widget 19-->
<div class="card card-flush h-100 mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-dark">Leading Journal Categories</span>

			<span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
		</h3>
        <!--end::Title-->

        {{-- <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Nav-->
            <ul class="nav" id="kt_chart_widget_19_tabs">
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4 me-1" data-bs-toggle="tab"
                    id="kt_chart_widget_19_tab_1" href="#kt_chart_widget_19_tab_content_1">2023</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4" data-bs-toggle="tab"
                    id="kt_chart_widget_19_tab_2" href="#kt_chart_widget_19_tab_content_2">Month</a>
                </li>
            </ul>
        </div>
        <!--end::Toolbar--> --}}
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-0">
        <!--begin::Tab Content (ishlamayabdi)-->
        <div class="tab-content">
                                            <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_chart_widget_19_tab_content_1">
                    <!--begin::Chart container-->
                    <div id="kt_charts_widget_19_chart_1" class="w-100 h-400px mb-13 mt-n4"></div>
                    <!--end::Chart container-->

                    <!--begin::Items-->
                    <div class="m-0">

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                2.6%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                0.4%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                0.2%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                4.1%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                8.3%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                1.9%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->


                                            </div>
                    <!--end::Items-->
                </div>
                <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                <div class="tab-pane fade " id="kt_chart_widget_19_tab_content_2">
                    <!--begin::Chart container-->
                    <div id="kt_charts_widget_19_chart_2" class="w-100 h-400px mb-13 mt-n4"></div>
                    <!--end::Chart container-->

                    <!--begin::Items-->
                    <div class="m-0">

                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                2.6%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-danger fs-base">
                                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                0.4%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                0.2%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                4.1%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                8.3%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->

                                                            <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                                <!--end::Separator-->


                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Flag-->
                                    <img src="../assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt=""/>
                                    <!--end::Flag-->

                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
                                        <!--end::Title-->

                                        <!--begin::Desc-->
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                    <!--end::Number-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                                                                    <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span class="path2"></span></i>
                                                1.9%
                                            </span>
                                            <!--end::Label-->

                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->


                                            </div>
                    <!--end::Items-->
                </div>
                <!--end::Tap pane-->

        </div>
        <!--end::Tab Content-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 19-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10">
        <!--begin::Chart widget 38-->
<div class="card card-flush h-xl-50 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">LOI Issued by Departments</span>
			<span class="text-gray-400 mt-1 fw-semibold fs-6">Counted in Millions</span>
		</h3>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                <!--begin::Display range-->
                <div class="text-gray-600 fw-bold">
                    Loading date range...
                </div>
                <!--end::Display range-->

                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
            </div>
            <!--end::Daterangepicker-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
        <!--begin::Chart-->
        <div id="kt_charts_widget_38_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
        <!--end::Chart-->
    </div>
    <!--end: Card Body-->
</div>
<!--end::Chart widget 38-->




     </div>
    <!--end::Col-->
</div>
<!--end::Row-->







</div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection

