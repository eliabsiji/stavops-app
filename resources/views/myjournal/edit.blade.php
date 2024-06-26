@extends('layouts.master')
@section('content')


           <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

     >

        <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
<!--begin::Title-->
<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
    My Journal Management
        </h1>
<!--end::Title-->


    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                                <a href="../index.html" class="text-muted text-hover-primary">
                            My Journals                       </a>
                                        </li>
                            <!--end::Item-->
                                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                        <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">

                                </li>
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

@if (\Session::has('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ \Session::get('status') }}
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

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">




<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
<!--begin::Card header-->
<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
    <!--begin::Card title-->
    <div class="card-title m-0">
        <h3 class="fw-bold m-0">Update Journal</h3>
    </div>
    <!--end::Card title-->
</div>
<!--begin::Card header-->
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
<!--begin::Content-->
<div id="kt_account_settings_profile_details" class="collapse show">
    <!--begin::Form-->
    {{-- <form id="kt_account_profile_details_form" class="form" action="{{ route('myjournals.update',$journal->id) }}" method="PATCH"> --}}
        {!! Form::model($journal, ['route' => ['myjournals.update', $journal->id], 'method'=>'PATCH','class'=>'form']) !!}
          @csrf
        <!--begin::Card body-->
        <div class="card-body border-top p-9">

            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Title</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="Journal Title" value="{{ $journal->title }}" required />
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                    <span class="required">Abstract</span>


                    <span class="ms-1"  data-bs-toggle="tooltip" title="Phone number must be active" >
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1">
                            </span><span class="path2"></span><span class="path3"></span></i></span>
                 </label>
                            <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                  <textarea name="abtract" class="form-control form-control-lg form-control-solid"  required>
                        {{ $journal->abtract }}
                  </textarea>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->





             <!--begin::Input group-->
             <div class="row mb-6">
                <!--begin::Label-->
                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                    <span class="required">Category</span>


                    <span class="ms-1"  data-bs-toggle="tooltip" title="Phone number must be active" >
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1">
                            </span><span class="path2"></span><span class="path3"></span></i></span>
                 </label>
                            <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                     <!--begin::Input-->[PREVIOUSLY SELECTED CATEGORY: @foreach ($pre_cat as $p )
                                                                            {{ $p->pre_category }}
                                                                       @endforeach]
                     <select name ="categoryid" id="categoryid" class="form-control form-control-solid mb-3 mb-lg-0"  >
                         <option value="" selected>Select Category </option>
                            @if ($journal->categoryid == "")
                                <option value="{{ $journal->categoryid }}">Select Category </option>
                            @else
                                <option value="{{ $journal->categoryid }}">Select  Category</option>
                            @endif
                            @foreach ($category as $jcat => $name )
                            <option value="{{$name->id}}">{{ $name->journal_category}}</option>
                            @endforeach
                    </select>
                    <!--end::Input-->

                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->







        </div>
        <!--end::Card body-->

        <!--begin::Actions-->
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Content-->
</div>
<!--end::Basic info-->





<!--end::Deactivate Account-->
</div>
    <!--end::Content container-->
</div>
<!--end::Content-->
            </div>
            <!--end::Content wrapper-->

@endsection

