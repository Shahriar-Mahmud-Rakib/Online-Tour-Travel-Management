<?php $__env->startSection('title'); ?>
    Tourist Guide - Pending Booking
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

              	<?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card my-5 mx-4">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left p-0 m-0"><strong>Manage Pending Booking List (<?php echo e($pendinglists->count()); ?>)</strong></h3>
                    </div>
                    <!-- card-header -->
                    <?php if($pendinglists->count() > 0): ?>
                    <div class="card-body">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Package</th>
                          <th>Price</th>
                          <th>Tour Date</th>
                          <th>Booking Date</th>
                          <th>Guide</th>
                          <th>Tourist Name</th>
                          <th>Tourist Contact</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $pendinglists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <?php echo e($list->package_name); ?>

                          </td>
                          <td><?php echo e($list->price); ?></td>
                          <td><?php echo e($list->date); ?></td>
                          <td><?php echo e($list->created_at->format('F d, Y')); ?></td>
                          <td>
                              <?php if(isset($list->guide->name)): ?>
                                 <?php echo e($list->guide->name); ?>

                              <?php else: ?> 
                                  His info is deleted by Admin
                              <?php endif; ?>
                              
                          </td>
                          <td><?php echo e($list->tourist->name); ?></td>
                          <td><?php echo e($list->tourist->contact); ?></td>
                          <td> 
                            <button type="submit" onclick="handleApprove( <?php echo e($list->id); ?>) " class="btn btn-info btn-sm mb-1">Approve</button>

                             <button type="submit" onclick="handleDelete( <?php echo e($list->id); ?>) " class="btn btn-danger btn-sm">Remove</button>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="removeRequestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="removeRequestForm" method="POST">
                          <?php echo csrf_field(); ?> 
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Remove Request</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to remove this pending request?</div>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">No, Go Back</button>
                                  <button type="submit" class="btn btn-danger">Yes, Remove</button>
                                  </div>
                              </div>
                      </form>
                  </div>
              </div>


                <!-- Modal -->
                <div class="modal fade" id="approveRequestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="" id="approveRequestForm" method="POST">
                            <?php echo csrf_field(); ?> 
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Approve Booking Request</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">Are you sure to approve this booking request?</div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No, Go Back</button>
                                    <button type="submit" class="btn btn-success">Yes, Approve</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                      
                    </div>
                    <?php else: ?> 
                      <h2 class="text-center text-info font-weight-bold m-3">No Pending Request Found</h2>
                    <?php endif; ?>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container -->
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('scripts'); ?>
   <script>

        function handleApprove(id){
          var form = document.getElementById('approveRequestForm')
          form.action = 'approve/' + id 
          $('#approveRequestModal').modal('show')
        }

        function handleDelete(id){
          var form = document.getElementById('removeRequestForm')
          form.action = 'remove/' + id 
          $('#removeRequestModal').modal('show')
        }
       

       
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/booking/pendinglist.blade.php ENDPATH**/ ?>