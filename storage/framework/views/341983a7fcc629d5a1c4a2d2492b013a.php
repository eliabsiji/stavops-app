<?php $__env->startSection('content'); ?>

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 " >

            <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



<!--begin::Page title-->
<div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
       Edit Category
            </h1>
    <!--end::Title-->


        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                    <a href="../index.html" class="text-muted text-hover-primary">
                                Home                            </a>
                                            </li>
                                <!--end::Item-->
                                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                            <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                                 Journal Managemnent                                           </li>
                                <!--end::Item-->

                    </ul>
        <!--end::Breadcrumb-->
    </div>
<!--end::Page title-->
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<?php if(\Session::has('status')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?php echo e(\Session::get('status')); ?>

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php if(\Session::has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?php echo e(\Session::get('success')); ?>

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >

        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">


<!--end::Navbar-->
<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Edit Details</h3>
        </div>
        <!--end::Card title-->
    </div>

 <!--begin::Toolbar-->
 <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
    <!--begin::Filter-->
    <a href="<?php echo e(route('journalcategory.index')); ?>" type="button" class="btn btn-light-primary me-3" >
        <i class="ki-duotone fs-2"><span class="path1"></span><span class="path2"></span></i>   << Back
    </a>
    <!--begin::Menu 1-->
    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <a href="" class="fs-5 text-dark fw-bold"> </a>
    </div>
    <!--end::Header-->

    <!--begin::Separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Separator-->


    </div>
    <!--end::Menu 1-->    <!--end::Filter-->




    </div>
    <!--end::Toolbar-->



    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <div class="modal-body scroll-y mx-5 my-7">
            <!--begin::Form-->

                <?php echo Form::model($jcat, ['route' => ['journalcategory.update', $jcat->id],
                'method' => 'PATCH','class' => 'form','id'=>'kt_modal_update_role_form']); ?>


                <!--begin::Scroll-->
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                    <!--begin::Input group-->
                    <div class="fv-row mb-6">
                        <!--begin::Label-->
                        <label class="fs-5 fw-bold form-label mb-2">
                            <span class="required">Category  Name </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input class="form-control form-control-solid" placeholder="Enter a role name" name="journal_category" value="<?php echo e($jcat->journal_category); ?>" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->


                </div>
                <!--end::Scroll-->

                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">
                        Discard
                    </button>

                    <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                        <span class="indicator-label">
                            Submit
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
                <!--end::Actions-->
                <?php echo Form::close(); ?>

            <!--end::Form-->
        </div>

    </div>
    <!--end::Content-->
</div>
<!--end::Basic info-->



    </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/journalcategory/edit.blade.php ENDPATH**/ ?>