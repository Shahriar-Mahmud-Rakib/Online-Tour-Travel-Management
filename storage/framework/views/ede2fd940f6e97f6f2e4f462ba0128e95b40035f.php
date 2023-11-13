<?php $__env->startSection('title'); ?>
    Tourist Guide - <?php echo e($place->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


<div class="container">
	<div class="row justify-content-center" style="margin-top: 120px">
		<div class="col-md-12">
			<div class="card mt-5 mb-5 ml-3 mr-3">
                <div class="card-header bg-success text-white"><strong>Place Details</strong></div>
				<div class="card-body pl-5">
                    <div class="row mb-4">
                        <img  class="img-fluid" src="<?php echo e(asset('storage/place/'.$place->image)); ?>" alt="image">
                    </div>
                    <div class="row">
                        <h4>Place: <strong><?php echo e($place->name); ?></strong></h4>  <span style="color: grey"> - Added By <span style="color: rgb(60, 43, 158); font-weight: bold"><?php echo e($place->addedBy); ?></span> on <?php echo e($place->created_at->diffForHumans()); ?></span>
                    </div>
                    <div class="row">
                        <p>District: <strong><?php echo e($place->district->name); ?></strong></p>
                    </div>

                    <div class="row">
                        <p>Place Type: <strong><?php echo e($place->placetype->name); ?></strong></p>
                    </div>

                    <div class="row mt-3 mb-2">
                        <p style="text-align: justify"><?php echo $place->description; ?></p>
                    </div>
				</div>
				<div class="card-footer">
					<a href="<?php echo e(URL::previous()); ?>" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>	
	</div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/placeDetails.blade.php ENDPATH**/ ?>