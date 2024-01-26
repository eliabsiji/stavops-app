  
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
                                    <h2>Mission and Vission</h2>
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
                            <h3>Mission and Vission</h3>
                            <p>Directorate of Academic Planning's mission is to promote the Academic growth of the Institution. It is meant to improve the achivement of all staff of the institution through its open door policy toward their overall development as laid down by TETFUND. Specificall, its mission are:</p>

    <p class="text1">I. Strenghten the professional and academic commitments of staff through their fields.</p>
    <p class="text1">II. Provide members of staff equall opportunity to get involved in varios professional and academics activities including leadership services, presentations, publications and workshops.</p>
    <p class="text1">III. Encourage increased involment of academics activities ad programmes.</p>
    <p class="text1">IV. Provide allm memberrs of staff equal development opportunities as provided by TETFUND.The Directorate of Academic Planning is headed by a Director who oversees its activities. The Directorate is prensently headed by Dr. Oziegbe Temitope Rufus.</p>

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

<?php echo $__env->make('website.inc.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/website/missionvission.blade.php ENDPATH**/ ?>