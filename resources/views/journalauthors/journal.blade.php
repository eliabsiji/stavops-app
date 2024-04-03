
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
                @if ($journal->pending == "on")
                    <span class="badge badge-warning my-1 me-2">Pending...</span>
                @endif
                @if ($journal->review == "on")
                <span class="badge badge-info my-1 me-2">Under Review</span>
                @endif
                @if ($journal->rejected == "on")
                <span class="badge badge-info my-1 me-2">Reviewed </span> but
                <span class="badge badge-danger my-1 me-2">Rejected</span>
                @endif
                @if ($journal->accepted == "on")
                <span class="badge badge-info my-1 me-2">Reviewed </span>
                <span class="badge badge-primary my-1 me-2">Accepted</span>
                @endif
                @if ($journal->published == "on")
                <span class="badge badge-info my-1 me-2">Reviewed </span>
                <span class="badge badge-primary my-1 me-2">Accepted</span>
                <span class="badge badge-success my-1 me-2">Published</span>
                @endif

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
@can('publish-store')

            <!--begin::Form-->
<form id="kt_inbox_reply_form" class="rounded border mt-10" action="{{ route('publishing.store') }}" method="POST">
    @csrf
    <!--begin::Body-->
    <div class="d-block">

        <table class="table mb-0">
            <tbody>
                <input type="hidden" name="journalid" value="{{ $journal->jid }}">
                <tr>
                    <td class="w-75px ">Pending</td>
                    <td>
                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" name="pending"
                             @if ($journal->pending =="on")
                                checked
                             @endif id="allowmarketing" />
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </td>

                    <td class="w-75px ">Under Review</td>{{ $journal->review  }}
                    <td>
                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" name="underreview"
                            @if ($journal->review =="on")
                               checked
                            @endif id="allowmarketing" />
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </td>
                    <td class="w-75px ">Rejected</td>
                    <td>
                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" name="rejected"
                            @if ($journal->rejected =="on")
                               checked
                            @endif />

                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </td>

                    <td class="w-75px ">Accepted</td>
                    <td>
                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox"  name="accepted"
                            @if ($journal->accepted =="on")
                               checked
                            @endif
                            />
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </td>

                    <td class="w-75px ">Published</td>
                    <td>
                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" name="published"
                            @if ($journal->published =="on")
                               checked
                            @endif />
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
    <!--end::Body-->

    <!--begin::Footer-->
    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
        <!--begin::Actions-->
        <div class="d-flex align-items-center me-3">
            <!--begin::Send-->
            <div class="btn-group me-4">
                <!--begin::Submit-->
                <button class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                    <span class="indicator-label">
                        Send
                    </span>

                </button>
                <!--end::Submit-->


            </div>
            <!--end::Send-->


        </div>
        <!--end::Actions-->


    </div>
    <!--end::Footer-->
</form>
<!--end::Form-->


@endcan

<div class="separator my-6"></div></div>



    </div>
    <!--end::Card-->




    </div>
    <!--end::Content-->
    @endforeach


    </div>
<!--end::Content-->
    @endsection

