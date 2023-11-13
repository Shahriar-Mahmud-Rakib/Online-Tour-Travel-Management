<?php $__env->startSection('title'); ?>
    Tourist Guide - Profile Edit
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header bg-dark">
                      <h3 class="card-title float-left"><strong>Update Profile Informaion</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST" enctype="multipart/form-data">
					        <?php echo csrf_field(); ?>

					        <div class="form-group">
						          <label for="name"> Name: </label>
						          <input type="text" class="form-control" placeholder="Enter Guide Name" id="name" name="name" 
						          value="<?php echo e(old('name',$user->name)); ?>">
					        </div>

					   
					         

					         <div class="form-group">
						          <label for="email"> Email: </label>
						          <input type="text" class="form-control" placeholder="Enter Email " id="email" name="email" 
						          value="<?php echo e(old('email',$user->email)); ?>">
					        </div>

					          <div class="form-group">
						          <label for="contact"> Contact: </label>
						          <input type="text" class="form-control" placeholder="Enter Contact" id="contact" name="contact"
						           value="<?php echo e(old('contact',$user->contact)); ?>">
					        </div>

					       

					         <div class="form-group">
						          <label for="image"> Image: </label>
						          <input type="file" class="form-control" id="image" name="image">
					        </div>

					        
					      

                 <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="<?php echo e(route('admin.profile.show')); ?>" class="btn btn-danger wave-effect" >Back</a>
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
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tourist-guide-using-laravel-master\resources\views/admin/profile/edit.blade.php ENDPATH**/ ?>