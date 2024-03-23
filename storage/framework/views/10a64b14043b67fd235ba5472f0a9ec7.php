    
    <?php $__env->startSection('content'); ?>

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
Published Journals
</h1>
<!--end::Title-->


<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                        <a href="<?php echo e(route('authors.index')); ?>" class="text-muted text-hover-primary">
                   Journal Management                           </a>
                                </li>
                    <!--end::Item-->
                        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->

                <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                                       Published Papers                                         </li>
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
            <!--begin::Inbox App - Messages -->
<div class="d-flex flex-column flex-lg-row">


    <?php echo $__env->make('journalauthors.inc.journal_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

    <!--begin::Card-->
    <div class="card">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Actions-->
<div class="d-flex flex-wrap gap-2">
    <!--begin::Checkbox-->
    <div class="form-check form-check-sm form-check-custom form-check-solid me-4 me-lg-7">
        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_inbox_listing .form-check-input" value="1" />
    </div>
    <!--end::Checkbox-->


</div>
<!--end::Actions-->

<!--begin::Actions-->
<div class="d-flex align-items-center flex-wrap gap-2">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative">
        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>        <input type="text" data-kt-inbox-listing-filter="search" class="form-control form-control-sm form-control-solid mw-100 min-w-125px min-w-lg-150px min-w-xxl-200px ps-11" placeholder="Search inbox" />
    </div>
    <!--end::Search-->

    <!--begin::Toggle-->
    <a href="#" class="btn btn-sm btn-icon btn-color-primary btn btn-active-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
        <i class="ki-duotone ki-burger-menu-2 fs-3 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    </a>
    <!--end::Toggle-->
</div>
<!--end::Actions-->        </div>

        <div class="card-body p-0">

<!--begin::Table-->
<table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
    <thead>
        <tr class="fw-bold">
            <th></th>
            <th>Author</th>
            <th>Title</th>
            <th>Updated Date</th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                                            <td class="ps-9">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            
                                            <td class="w-150px w-md-300px">
                                                <a href="#" class="d-flex align-items-center text-dark">
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
                                                            <img src="<?php echo e(Storage::url('images/staffavatar/'.$image)); ?>" alt="<?php echo e($user->name); ?>" class="w-100" />
                                                            </div>
                                                        </div>
                                                                            <!--end::Avatar-->

                                                    <!--begin::Name-->
                                                    <span class="fw-semibold"><?php echo e($user->name); ?></span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td>
                                                    <div class="text-dark ">
                                                            <!--begin::Heading-->
                                                            <a href="<?php echo e(route('author.journal',$journal->jid)); ?>" class="text-dark">
                                                                <span class="fw-bold"><?php echo e($journal->title); ?></span>

                                                            </a>
                                                            <!--end::Heading-->
                                                      </div>

                                                                            <!--begin::Badges-->
                                                                                    <div class="badge badge-warning">Pending</div>
                                                                                    <div class="badge badge-info">Under Review</div>
                                                                                    <div class="badge badge-danger">Rejected</div>
                                                                                   <div class="badge badge-primary">Accepted</div>
                                                                                    <div class="badge badge-success">Published</div>
                                                                                <!--end::Badges-->
                                            </td>
                                            <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold">
                                                                        <?php echo e($journal->updated_at); ?>

                                                                    </span>
                                             </td>

                            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
</table>
<!--end::Table-->        </div>
    </div>
    <!--end::Card-->

    </div>
    <!--end::Content-->
</div>
<!--end::Inbox App - Messages -->




        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/journalauthors/journallists.blade.php ENDPATH**/ ?>