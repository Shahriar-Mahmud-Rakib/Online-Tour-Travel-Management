<?php $__env->startSection('title'); ?>
    Tourist Guide - <?php echo e($package->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="container my-5" style="padding-top: 120px">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                        <h2><strong>Package Details: </strong></h2>
                        <a href="<?php echo e(route('welcome')); ?>" class="btn btn-danger">Back to home</a> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <table class="table my-3">
            <tr>
                <th>Package Name</th>
                <td><?php echo e($package->name); ?></td>
            </tr>
            <tr>
                <th>Package Added By</th>
                <td><?php echo e($package->added_by); ?></td>
            </tr>
            <tr>
                <th>Places</th>
                <td>
                    <?php $__currentLoopData = $package->places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span style="background: orange; color:black" class="px-3 py-2 m-2">
                            <strong><?php echo e($place->name); ?></strong>
                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
            <tr>
                <th>Package Price</th>
                <td><?php echo e($package->price); ?></td>
            </tr>
            <tr>
                <th>People</th>
                <td><?php echo e($package->people); ?></td>
            </tr>
            <tr>
                <th>Day</th>
                <td><?php echo e($package->day); ?></td>
            </tr>
        </table>
        <br>
        <h3 class="my-5" style="color: whitesmoke; background-color: black; padding:12px;">Description & rules: </h3>
       <div style="text-align: justify">  <?php echo $package->description; ?></div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/packageDetails.blade.php ENDPATH**/ ?>