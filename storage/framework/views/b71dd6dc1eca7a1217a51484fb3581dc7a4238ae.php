<?php $__env->startSection('title'); ?>
    Tourist Guide - Places
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

              	<?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card my-5 mx-4">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left p-0 m-0"><strong>Manage Place (<?php echo e($placecount); ?>)</strong></h3>
                    <a href="<?php echo e(route('admin.place.create')); ?>" class="btn btn-success btn-md float-right c-white">Add New <i class="fa fa-plus"></i></a>
                    </div>
                    <!-- card-header -->
                    <?php if($places->count() > 0): ?>
                    <div class="card-body">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Added By</th>
                           <th>District</th>
                           <th>Type</th>
                           <th>image</th>
                          <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($place->name); ?></td> 
                          <td><?php echo e($place->addedBy); ?></td> 
                           <td><?php echo e($place->district->name); ?></td>
                           <td><?php echo e($place->placetype->name); ?></td>
                          <td>
                            <img style="height: 60px; width: 100px;" class="img-fluid" src="<?php echo e(asset('storage/place/'.$place->image)); ?>" alt="image">
                          </td>
                          <td> 
                            <a href="<?php echo e(route('admin.place.show', $place->id)); ?>" class="btn btn-success">Details</a>

                            <a href="<?php echo e(route('admin.place.edit', $place->id)); ?>" class="btn btn-info">Edit</a>

                            <button type="submit" onclick="handleDeletePlace( <?php echo e($place->id); ?>) " class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>

                     <!-- Modal -->
                <div class="modal fade" id="deletePlaceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="deletePlaceForm" method="POST">
                          <?php echo csrf_field(); ?> 
                          <?php echo method_field('DELETE'); ?>
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Place Delete</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to delete this place information?</div>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">No, Go Back</button>
                                  <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                  </div>
                              </div>
                      </form>
                  </div>
              </div>
                      
                    </div>
                    <?php else: ?> 
                      <h2 class="text-center text-info font-weight-bold m-3">No Place Found</h2>
                    <?php endif; ?>
                    <div class="pagination ml-3">
                      <?php echo e($places->links()); ?>

                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('scripts'); ?>
   <script>
       function handleDeletePlace(id){

          var form = document.getElementById('deletePlaceForm')
          form.action = 'place/' + id 
          $('#deletePlaceModal').modal('show')
       }
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tourist-guide-using-laravel-master\resources\views/admin/place/index.blade.php ENDPATH**/ ?>