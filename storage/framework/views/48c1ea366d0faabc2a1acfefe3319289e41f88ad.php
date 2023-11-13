<?php $__env->startSection('title'); ?>
    Tourist Guide - About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left"><strong>Update About</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

						<form action="<?php echo e(route('admin.about.update',$about->id)); ?>" method="POST" >
					        <?php echo csrf_field(); ?>
					        <?php echo method_field('PUT'); ?>
					   			 <div class="form-group">

						                <label for="content">Content</label>
						                <input id="content" type="hidden" name="content" value="<?php echo e(old('content', isset($about) ? $about->content : '' )); ?>">

						                <trix-editor input="content"></trix-editor>
								</div>

							  <div class="form-group">
		                        <button type="submit" class="btn btn-success">Update</button>
		                        <a href="<?php echo e(URL::previous()); ?>" class="btn btn-danger wave-effect" >Back</a>
                  			  </div> 
                  		</form>

  					</div>
                   
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
    
 <?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/trix.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/trix.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/about/edit.blade.php ENDPATH**/ ?>