<?php $__env->startSection('title'); ?>
    Tourist Guide - All Packages
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


<div class="container all-places">
    <div class="row justify-content-center py-5">
        <h1><strong>All Packages</strong></h1>
    </div>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4">
                    <div class="card mx-2 my-3" style="border: 2px solid black">
                        <div class="card-header">
                            <img src="<?php echo e(asset('storage/packageImage/'.$package->package_image)); ?>" alt="" class="img-fluid p-0 m-0">
                        </div>
                        <div class="card-body package-details">
                            <p>Package Name: <?php echo e($package->name); ?></p>
                            <p>Price: <?php echo e($package->price); ?></p>
                            <p>People: <?php echo e($package->people); ?></p>
                        </div>
                        <div class="card-footer bg-dark" >
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="<?php echo e(route('package.details', $package->id)); ?>" class="btn btn-info">Details</a>
                                </div>
                                <div>
                                    <?php if(auth()->guard()->check()): ?>
                                        <?php if(Auth::user()->role_id == 2): ?>
                                            <a href="<?php echo e(route('package.booking', $package->id)); ?>" class="btn btn-success">Book Now</a>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if(auth()->guard()->guest()): ?>
                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-success">Book Now</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h2 class="my-5 bg-info text-white text-center p-3">No Package Found. Please add some place.</h2>
                <?php endif; ?>
    </div>
    <div class="d-flex justify-content-between">
        <div>
            <a href="<?php echo e(route('welcome')); ?>" class="btn btn-danger my-5">Back to home</a>
        </div>
        <div class="my-5">
            <?php echo e($packages->links()); ?>

        </div>
    </div>


</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/allPackages.blade.php ENDPATH**/ ?>