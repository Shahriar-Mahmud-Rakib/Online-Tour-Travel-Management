<?php $__env->startSection('title'); ?>
    Tourist Guide - All Places
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    .places{
        margin-top: 60px;
        margin-bottom: 60px;
    }
</style>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


<div class="container all-places">
    <div class="row justify-content-center py-5">
        <h1><strong>All Places</strong></h1>
    </div>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 my-3">
                <div class="card">
                    <div class="card-header">
                        <img  src="<?php echo e(asset('storage/place/'. $place->image)); ?>" alt="" srcset="" class="img-fluid" style="height: 190px; border-radius: 5%">
                    </div>
                    <div class="card-body">
                        <h2><strong><?php echo e($place->name); ?></strong></h2>
                        <p>District: <strong><?php echo e($place->district->name); ?></strong></p>
                        <p>Place Type: <strong><?php echo e($place->placetype->name); ?></strong></p>
                        <a href="<?php echo e(route('place.details', $place->id)); ?>" class="btn btn-success">Details</a>
                    </div>
                </div>
            </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h2 class="my-5 bg-info text-white text-center p-3">No Place Found. Please add some place.</h2>
        <?php endif; ?>
    </div>
    
    
    <div class="d-flex justify-content-between">
        <div>
            <a href="<?php echo e(route('welcome')); ?>" class="btn btn-danger my-5">Back to home</a>
        </div>
        <div class="my-5">
            <?php echo e($places->links()); ?>

        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/allPlaces.blade.php ENDPATH**/ ?>