<?php $__env->startSection('title'); ?>
    Tourist Guide - Place Type Create
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left"><strong>Create Place Type</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    


                  <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('admin.type.store')); ?>" method="POST" >
					        <?php echo csrf_field(); ?>
					        <div class="form-group">
					          <label for="name"> Name: </label>
					          <input type="text" class="form-control" placeholder="Enter PlaceType Name" id="name" name="name">
					        </div>
					      

                  <div class="form-group">
                        <button type="submit" class="btn btn-success">Create</button>
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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/placeType/create.blade.php ENDPATH**/ ?>