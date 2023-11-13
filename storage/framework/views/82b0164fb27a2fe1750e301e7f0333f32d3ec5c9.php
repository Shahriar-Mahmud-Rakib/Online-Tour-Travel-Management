<?php $__env->startSection('title'); ?>
    Tourist Guide - About
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
             
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

                <div class="card my-5 mx-4">
                    <div class="card-header bg-dark">
                      <h3 class="card-title float-left"><strong>About Us</strong></h3>
                      
                      <?php if(!$abouts->count() > 0): ?>
                      <a href="<?php echo e(route('admin.about.create')); ?>" class="btn btn-success btn-md float-right c-white">Add New <i class="fa fa-plus"></i></a>
                      <?php endif; ?>

                    </div>
                    <!-- /.card-header -->
                    <?php if($abouts->count() > 0): ?>

                     <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="card-body" style="text-align: justify;">
                         <?php echo $about->content; ?>

                      </div>
                    <div class="card-footer">
                          <a href="<?php echo e(route('admin.about.edit', $about->id)); ?>"  class="btn btn-info">Edit Content</a>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <h2 class="text-center text-info font-weight-bold m-3">No Content Found</h2>
                     <?php endif; ?>
                       
            </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/about/index.blade.php ENDPATH**/ ?>