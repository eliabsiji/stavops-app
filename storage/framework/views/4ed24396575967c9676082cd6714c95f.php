  
  <?php $__env->startSection('content'); ?>
  <!--Start Services Details-->
  <section class="services-details">
    <div class="container">
        <div class="row">

            <!--Start Sidebar-->
            <div class="col-xl-4">
                <div class="sidebar">
                    <!--Start Sidebar Single-->
                    <div class="sidebar__single sidebar__services wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="title-box">
                            <div class="inner">
                                <div class="shape"><img src="<?php echo e(asset('dapafue/assets/images/shapes/sidebar-title-shape.png ')); ?>"
                                        alt="#"></div>
                                <h3>Conferences</h3>
                            </div>
                        </div>

                        <div class="sidebar__services-box">
                            <ul class="sidebar__services-box-list clearfix">
                                <li><a href="<?php echo e(route('mission')); ?>">Mission and vission<span
                                            class="icon-right-arrow2"></span></a>
                                </li>
                                <li><a href="<?php echo e(route('conference')); ?>">Conference<span
                                            class="icon-right-arrow2"></span></a>
                                </li>
                                <li><a href="<?php echo e(route('journals')); ?>">About the Journal<span
                                            class="icon-right-arrow2"></span></a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <!--End Sidebar-->

            <!--Start Services Details Content-->
            <div class="col-xl-8">
                <div class="services-details__content">
                    <div class="services-details__content-text1">
                        <h3>Conferences</h3>
                        <p>The Directorate of Academic Planning's has development opportunities for researchers, academicians, professionals and practioners within the Institution. This is encouraged and organized in line with TETFUND mandate. </p>
                        <h3>Grants</h3>
                        <p>The Directoriate offers recognition and grant opportunitiesfor reseachers, academicians and professionals who are staff of the institutionthrough TETFUND  </p>
                    </ul>
                    </div>

                </div>
            </div>
            <!--End Services Details Content-->
        </div>
    </div>
</section>
<!--End Services Details-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/website/conference.blade.php ENDPATH**/ ?>