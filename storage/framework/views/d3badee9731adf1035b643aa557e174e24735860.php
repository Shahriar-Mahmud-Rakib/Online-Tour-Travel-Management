<?php $__env->startSection('title'); ?>
    Tourist Guide - Place Add
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left"><strong>Add New Place</strong></h3>
                  
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    
                  <?php echo $__env->make('partial.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form action="<?php echo e(route('admin.place.store')); ?>" method="POST" enctype="multipart/form-data">
					        <?php echo csrf_field(); ?>
					        <div class="form-group">
					          <label for="name"> Name: </label>
					          <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" placeholder="Enter Name" id="name" name="name">
					        </div>
					        <div class="form-group">
                                <label for="name"> District: </label>
                              <select name="district_id" id="district" class="form-control">
                                  <option value="">select any district</option>
                                     <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($district->id); ?>" <?php echo e(old('district_id') == $district->id ? "selected" : ""); ?>>
                                            <?php echo e($district->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                             
                            </div>
                            <div class="form-group">
                                <label for="name"> Place Type: </label>
                                <select name="placetype_id" id="type" class="form-control">
                                    <option value="">select any place type</option>
                                    <?php $__currentLoopData = $placetypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $placetype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  value="<?php echo e($placetype->id); ?>" <?php echo e(old('placetype_id') == $placetype->id ? "selected" : ""); ?>>
                                            <?php echo e($placetype->name); ?>

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
					          <label for="image"> Image: </label>
                              <input type="file" id="file" class="form-control" onchange="loadPreview(this);" name="image">
                              <img id="preview_img">
                            </div>
                            
                            

                  <div class="form-group">
                        <button type="submit" class="btn btn-success">Create</button>
                        <a href="<?php echo e(route('admin.place.index')); ?>" class="btn btn-danger wave-effect" >Back</a>
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
<script>
    function loadPreview(input, id) {
      id = id || '#preview_img';
      if (input.files && input.files[0]) {
          var reader = new FileReader();
   
          reader.onload = function (e) {
              $(id)
                      .attr('src', e.target.result)
                      .width(200)
                      .height(150);
          };
   
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/trix.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/place/create.blade.php ENDPATH**/ ?>