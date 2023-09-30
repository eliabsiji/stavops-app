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
     Journal Volume & Number
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                             <li class="breadcrumb-item text-muted">
                                 <a href="{{ route('journalvolume.index') }}" class="text-muted text-hover-primary">Users </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Volume & Number list </li>
                                <!--end::Item-->

                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (\Session::has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{ \Session::get('danger') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ \Session::get('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->


<div id="kt_app_content" class="app-content  flex-column-fluid " >


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">





<!--begin::Toolbar-->
<div class="d-flex flex-wrap flex-stack my-5">
    <!--begin::Heading-->
    <h2 class="fs-2 fw-semibold my-2">
        Journal Volume & Number
        <span class="fs-6 text-gray-400 ms-1">List</span>
    </h2>
    <!--end::Heading-->


</div>
<!--end::Toolbar-->


        <!--begin::Card-->
<div class="card">
<!--begin::Card header-->
<div class="card-header border-0 pt-6">
    <!--begin::Card title-->
    <div class="card-title">
        <!--begin::Search-->
        <div class="d-flex align-items-center position-relative my-1">
            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
             <input type="text" data-kt-user-table-filter="search"
              class="form-control form-control-solid w-250px ps-13" placeholder="Search Volume & Number" />
        </div>
        <!--end::Search-->
    </div>
    <!--begin::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
        <!--begin::Toolbar-->
<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
<!--begin::Filter-->
<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>        Filter
</button>
<!--begin::Menu 1-->
<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
<!--begin::Header-->
<div class="px-7 py-5">
    <div class="fs-5 text-dark fw-bold">Filter Options</div>
</div>
<!--end::Header-->

<!--begin::Separator-->
<div class="separator border-gray-200"></div>
<!--end::Separator-->

<!--begin::Content-->
<div class="px-7 py-5" data-kt-user-table-filter="form">
    <!--begin::Input group-->
    <div class="mb-10">

    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-10">

    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
        <button type="submit" class="btn btn-primary fw-semibold px-6"
        data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
    </div>
    <!--end::Actions-->
</div>
<!--end::Content-->
</div>
<!--end::Menu 1-->
<!--end::Filter-->



<!--begin::Add user-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
    <i class="ki-duotone ki-plus fs-2"></i>        Add Volume & Number
</button>
<!--end::Add user-->
</div>
<!--end::Toolbar-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
<div class="fw-bold me-5">
    <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
</div>

<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
    Delete Selected
</button>
</div>
<!--end::Group actions-->



<!--end::Modal - New Card-->

<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
<!--begin::Modal dialog-->
<div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_user_header">
            <!--begin::Modal title-->
            <h2 class="fw-bold">Create Volume & Number</h2>
            <!--end::Modal title-->

            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>                </div>
            <!--end::Close-->
        </div>
        <!--end::Modal header-->


        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form id="kt_modal_add_user_form" class="form" action="{{ route('journalvolume.store') }}" method="POST">
                @csrf
                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Journal Volume</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" name="journal_volume" id="name2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Journal Volume"  />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="fv-row mb-7">

                        <!--begin::Input-->
                        <input type="hidden" name="createdBy"  value="{{Auth::user()->name}}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name"  />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Scroll-->

                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                        Discard
                    </button>

                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                        <span class="indicator-label">
                            Submit
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
</div>
<!--end::Modal dialog-->
</div>
<!--end::Modal - Add task-->
 </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->

@if (count($errors) > 0)
<div class="row animated fadeInUp">
      @if (count($errors) > 0)
<div class="alert alert-warning fade in">
<a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 </div>
 @endif
</div>
   @endif
<!--begin::Card body-->
<div class="card-body py-4">


<!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                            data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">SN</th>
                    <th class="min-w-125px">Volumes</th>
                    <th class="min-w-125px">Date Created</th>
                    <th class="min-w-125px">Created By</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                <?php $i = 1; ?>
                    @foreach ($data as $key => $jvol)
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>

                        <td>{{ $i++ }}</td>
                        <td class="d-flex align-items-center">

                            <div class="d-flex flex-column">

                                <span class="text-gray-800 text-hover-primary mb-1">{{ $jvol->journal_volume}}</span>
                            </div>
                            <!--begin::User details-->
                        </td>


                        <td>
                            {{  $jvol->created_at }}
                        </td>
                        <td>
                            {{  $jvol->createdBy }}
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>                    </a>
                            <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">

                                    @can('journalvolume-edit')
                                            <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('journalvolume.edit',$jvol->id) }}" class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    @endcan
                                    @can('journalvolume-delete')
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" id="del_user">
                                            {!! Form::open(['id'=>'kt_modal_del_user_form','method' => 'DELETE','route' => ['journalvolume.destroy', $jvol->id],]) !!}
                                                <input type="hidden"  value="{{ $jvol->journal_volume }}">
                                            {!! Form::submit('Delete', ['class' => "menu-link px-3"]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                        <!--end::Menu item-->
                                        @endcan

                                </div>
                                    <!--end::Menu-->
                        </td>
                    </tr>
                @endforeach



                    </tbody>
                </table>
            <!--end::Table-->
    </div>
<!--end::Card body-->







   </div>
<!--end::Card-->
  </div>

    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection


