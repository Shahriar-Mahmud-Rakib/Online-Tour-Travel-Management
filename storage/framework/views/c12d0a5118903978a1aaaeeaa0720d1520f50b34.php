<?php $__env->startSection('title'); ?>
    Tourist Guide - District
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">

              	<?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card mt-5">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left p-0 m-0"><strong>Manage District (<?php echo e($districtcount); ?>)</strong></h3>
                    <a href="<?php echo e(route('admin.district.create')); ?>" class="btn btn-success btn-md float-right c-white">Add New <i class="fa fa-plus"></i></a>
                    </div>
                    <!-- card-header -->
                    <?php if($districts->count() > 0): ?>
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
                        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($district->name); ?></td>
                          <td><?php echo e($district->created_at->toFormattedDateString()); ?></td>
                          <td><?php echo e($district->places->count()); ?></td>
                          <td> 
                            <a href="<?php echo e(route('admin.district.edit', $district->id)); ?>" class="btn btn-info">Edit</a>
                             <button type="submit" onclick="handleDeleteDistrict( <?php echo e($district->id); ?>) " class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>

                     <!-- Modal -->
                <div class="modal fade" id="deleteDistrictModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="deleteDistrictForm" method="POST">
                          <?php echo csrf_field(); ?> 
                          <?php echo method_field('DELETE'); ?>
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">District Delete</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to delete this district?</div>
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
                      <h2 class="text-center text-info font-weight-bold m-3">No District Found</h2>
                    <?php endif; ?>
                    <div class="pagination">
                      <?php echo e($districts->links()); ?>

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
       function handleDeleteDistrict(id){

          var form = document.getElementById('deleteDistrictForm')
          form.action = 'district/' + id 
          $('#deleteDistrictModal').modal('show')
          //console.log(form)
       }
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/district/index.blade.php ENDPATH**/ ?>