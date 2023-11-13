<?php $__env->startSection('title'); ?>
    Tourist Guide - Place Type Edit
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left"><strong>Update Place Type</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('admin.type.update',$type->id)); ?>" method="POST" >
					        <?php echo csrf_field(); ?>
					        <?php echo method_field('PUT'); ?>

					        <div class="form-group">
					          <label for="name"> Name: </label>
					          <input type="text" class="form-control" placeholder="Enter District Name" id="name" name="name" value="<?php echo e(old('name',$type->name)); ?>">
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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/placeType/edit.blade.php ENDPATH**/ ?>