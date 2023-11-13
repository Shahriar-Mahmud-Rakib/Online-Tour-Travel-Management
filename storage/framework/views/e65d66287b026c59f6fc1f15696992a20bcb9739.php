<?php $__env->startSection('title'); ?>
    Package Add
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left"><strong>Add New Package</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    
                  <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('admin.package.store')); ?>" method="POST" enctype="multipart/form-data">
					        <?php echo csrf_field(); ?>
					        <div class="form-group">
					          <label for="name"> Name: </label>
					          <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" placeholder="Enter Name" id="name" name="name">
                            </div>
                            
                            <div class="form-group">
                                <label for="price"> Price: </label>
                                <input type="text" class="form-control" value="<?php echo e(old('price')); ?>" placeholder="Enter Price" id="price" name="price">
                            </div>

                            <div class="form-group">
                                <label for="people"> People: </label>
                                <input type="text" class="form-control" value="<?php echo e(old('people')); ?>" placeholder="Number of People" id="people" name="people">
                            </div>

                            <div class="form-group">
                                <label for="day"> Day: </label>
                                <input type="text" class="form-control" value="<?php echo e(old('day')); ?>" placeholder="Number of days" id="day" name="day">
                            </div>



                            



                            <div class="form-group">
                                <label>Choose Places</label>
                                <select class="form-control select-tags" data-placeholder="Choose places" name="places[]" multiple>
                                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($place->id); ?>">
                                            <?php echo e($place->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input id="description" type="hidden" name="description" value="<?php echo e(old('description')); ?>">
                                <trix-editor input="description"></trix-editor>
                            </div>

					        <div class="form-group">
					          <label for="package_image"> Image: </label>
                              <input type="file" id="package_image" class="form-control"name="package_image">
                            </div>
                            
                           

                    <div class="form-group">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="<?php echo e(route('admin.package.index')); ?>" class="btn btn-danger wave-effect" >Back</a>
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


 <?php $__env->startSection('scripts'); ?>
 <script src="<?php echo e(asset('js/trix.js')); ?>"></script>
 <script src="<?php echo e(asset('js/jquery-1.12.4.min.js')); ?>"></script>
 <script src="<?php echo e(asset('js/chosen.jquery.min.js')); ?>"></script>
 <script>
     $(document).ready(function() {
         $('.select-tags').chosen();
     })
 </script>
 <?php $__env->stopSection(); ?>
 
 <?php $__env->startSection('css'); ?>
 <link href="<?php echo e(asset('css/trix.css')); ?>" rel="stylesheet">
 <link href="<?php echo e(asset('css/chosen.min.css')); ?>" rel="stylesheet">
 <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/package/create.blade.php ENDPATH**/ ?>