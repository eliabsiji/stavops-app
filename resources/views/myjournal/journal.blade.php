
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

        </h1>
<!--end::Title-->



    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->
<!--begin::Actions-->
<div class="d-flex align-items-center gap-2 gap-lg-3">

    <!--end::Filter menu-->


<!--begin::Secondary button-->
    <!--end::Secondary button-->

<!--begin::Primary button-->

        <a href="{{ route('authors.show',$user->id) }}" class="btn btn-sm fw-bold btn-warning" >
             <<  Back
        </a>


    <!--end::Primary button-->
</div>
<!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Inbox App - View & Reply -->
<div class="d-flex flex-column flex-lg-row">


@include('journalauthors.inc.journal_nav')




@foreach ($journals  as $journal )


<!--begin::Content-->
<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

<!--begin::Card-->
        <div class="card">
            <div class="card-header align-items-center py-5 gap-5">
                <!--begin::Heading-->
                <h2 class="fw-semibold me-3 my-1">TITLE: {{ $journal->title }}</h2>
                <!--begin::Heading-->
        </div>

            <div class="card-body">

      <!--begin::Title-->
      <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
        <div class="d-flex align-items-center flex-wrap gap-2">
            <span class="badge badge-primary my-1 me-2">inbox</span>
            <span class="badge badge-danger my-1">important</span>
            <!--end::Badges-->
        </div>


        <div class="d-flex">
            <!--begin::Print-->
            <p class="fw-bold">    <span class="badge badge-light-primary my-1 me-2">Paper ID :</span><span class="badge badge-light-primary my-1 me-2">{{ $journal->paperid }}</span></p>
            <a href="{{ route('author.viewpaper',$journal->paperid) }}" target="_blank" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"  data-bs-toggle="tooltip" data-bs-placement="top" title="View Journal Paper">
                <i class="ki-duotone ki-printer fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
             </a>
            <!--end::Print-->
        </div>
    </div>
<!--end::Title-->



    <!--begin::Message accordion-->
    <div data-kt-inbox-message="message_wrapper">
        <!--begin::Message header-->
                <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                    <!--begin::Author-->
                <div class="d-flex align-items-center">
                     <!--begin::Avatar-->
                     <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                        <div class="symbol-label ">
                        <?php $image = "";?>
                                <?php
                                if ($user->avatar == NULL || !isset($user->avatar) ){
                                    $image =  'unnamed.png';
                                }else {
                                $image =  $user->avatar;
                                }
                        ?>
                    <img src="{{ Storage::url('images/staffavatar/'.$image)}}" alt="{{ $user->name }}" class="w-100" />
                    </div>
                </div>
                                    <!--end::Avatar-->


                    <div class="pe-5">
                        <!--begin::Author details-->
                        <div class="d-flex align-items-center flex-wrap gap-1">
                            <a href="#" class="fw-bold text-dark text-hover-primary">{{ $user->name }}</a>
                            <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3"><span class="path1"></span><span class="path2"></span></i>
                                             <span class="text-muted fw-bold">{{ $journal->updated_at->diffForHumans() }}</span>
                        </div>
                        <!--end::Author details-->





        </div>
    </div>
    <!--end::Author-->

                    <!--begin::Actions-->
            <div class="d-flex align-items-center flex-wrap gap-2">
                <!--begin::Date-->
                <span class="fw-semibold text-muted text-end me-3">{{ $journal->updated_at->toDayDateTimeString() }}</span>
                <!--end::Date-->


            </div>
            <!--end::Actions-->
</div>
<!--end::Message header-->

                <!--begin::Message content-->
                <div class="collapse fade show" data-kt-inbox-message="message">
                    <div class="py-5">

                        <p>
                           {{$journal->abtract}}
                        </p>

                    </div>
                </div>
                <!--end::Message content-->
</div>
<!--end::Message accordion-->

<div class="separator my-6"></div>






<div class="separator my-6"></div></div>


       

</div>
<!--end::Card-->




</div>
<!--end::Content-->
@endforeach


</div>
<!--end::Content-->
@endsection

