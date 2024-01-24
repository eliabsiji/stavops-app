<?php echo $__env->make('website.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>
      
<?php echo $__env->make('website.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\stavops-app\resources\views/website/inc/master.blade.php ENDPATH**/ ?>