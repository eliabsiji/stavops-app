<?php $__env->startSection('content'); ?>
<section class="shop-page">
    <div class="container">
        <div class="shop-page__top">
            <div class="shop-page__top-inner">
                <div class="shop-page__top-left">
                    <p>ACE  Journal</p>
                </div>

            </div>
        </div>

        <div class="row">

            <?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <!--Start Shop Page Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="shop-page__single">
                            <div class="shop-page__single-img">


                            </div>
                            <div class="shop-page__single-content">

                                <div class="bottom-text">
                                    <div class="text-box text-center">
                                        <h4><a href="<?php echo e(route('journalcategory',$journal->id)); ?>"><?php echo e($journal->journal_category); ?></a></h4>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Shop Page Single-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        </div>
        
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/website/journals.blade.php ENDPATH**/ ?>