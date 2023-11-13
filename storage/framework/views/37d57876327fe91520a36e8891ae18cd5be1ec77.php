<?php $__env->startSection('title'); ?>
    Tourist Guide - About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center" style="margin-top: 130px">
        <h1 class="about"><strong>About Us</strong></h1>
    </div>
    <div class="row">
       <?php if(isset($about)): ?>
            <div class="row my-5 text-justify px-4">
                <?php echo $about->content; ?>

            </div>
       <?php else: ?>
        
            <h2 class="my-5">Please update your about information</h2> 
       <?php endif; ?>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/about.blade.php ENDPATH**/ ?>