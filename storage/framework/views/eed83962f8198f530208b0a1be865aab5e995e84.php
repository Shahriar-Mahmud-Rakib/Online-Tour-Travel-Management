<?php $__env->startSection('title'); ?>
    Tourist Guide - Type
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
             
               <?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

                <div class="card mt-5">
                    <div class="card-header bg-dark">
                      <h3 class="card-title float-left"><strong>Manage Place Type (<?php echo e($typescount); ?>)</strong></h3>
                      
                    <a href="<?php echo e(route('admin.type.create')); ?>" class="btn btn-success btn-md float-right c-white">Add New <i class="fa fa-plus"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <?php if($types->count() > 0): ?>
                    <div class="card-body">
                    <div class="table-responsive">

                      <table id="dataTableId" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Added</th>
                          <th>Place Count</th>
                          <th width="25%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($type->name); ?></td>
                          <td><?php echo e($type->created_at->toFormattedDateString()); ?></td>
                          <td><?php echo e($type->places->count()); ?></td>
                          <td>
                          
                              <a href="<?php echo e(route('admin.type.edit', $type->id)); ?>"  class="btn btn-info">Edit</a>
                              <button type="submit" onclick="handleDeleteType(<?php echo e($type->id); ?>)" class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>
                      

                     <!-- Modal -->
                <div class="modal fade" id="deleteTypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="deleteTypeForm" method="POST">
                          <?php echo csrf_field(); ?> 
                          <?php echo method_field('DELETE'); ?>
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">District Placetype</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to delete this place type?</div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Go Back</button>
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                  </div>
                              </div>
                      </form>
                  </div>
              </div>
            </div> <!-- /.card-body -->
              <?php else: ?> 
                 <h2 class="text-center text-info font-weight-bold m-3">No Place Type Found</h2>
              <?php endif; ?>

               <div class="pagination">
                  <?php echo e($types->links()); ?>

                </div>
                   
            </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('scripts'); ?>
   <script>
       function handleDeleteType(id){
          var form = document.getElementById('deleteTypeForm')
          form.action = 'type/' + id 
          $('#deleteTypeModal').modal('show')
          //console.log(form)
       }
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/placeType/index.blade.php ENDPATH**/ ?>