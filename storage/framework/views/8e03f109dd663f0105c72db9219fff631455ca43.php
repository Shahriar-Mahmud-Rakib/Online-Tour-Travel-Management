<?php $__env->startSection('title'); ?>
    Tourist Guide - Admins List 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

              	<?php echo $__env->make('partial.successMessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card my-5 mx-4">
                    <div class="card-header  bg-dark">
                      <h3 class="card-title float-left p-0 m-0"><strong>Manage Users (<?php echo e($admins->count()); ?>)</strong></h3>
                    </div>
                    <!-- card-header -->
                    <?php if($admins->count() > 0): ?>
                    <div class="card-body">
                    <div class="table-responsive">
                      <table id="dataTableId" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Photo</th>
                          <th>Member Since</th>
                          <th width="25%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($user->name); ?></td>
                          <td><?php echo e($user->email); ?></td>
                          <td><?php echo e($user->contact); ?></td>
                         <td><img height="70" width="70" src="<?php echo e($user->image != 'default.png' ?  asset('storage/profile_photo/' . $user->image ) :  asset('assets/admin/img/user2-160x160.jpg')); ?>" alt="photo"></td>
                          <td><?php echo e($user->created_at->diffForHumans()); ?></td>
                          <td> 
                                <button type="submit" class="btn btn-danger" onclick="changeRole(<?php echo e($user->id); ?>)">Make as User</button>
                         </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        </tbody>
                      </table>
                    </div>

                     <!-- Modal -->
                <div class="modal fade" id="changeRoleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <form action="" id="changeRoleForm" method="POST">
                          <?php echo csrf_field(); ?> 
                          <?php echo method_field('PUT'); ?>
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Manage Admins</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="text-center">Are you sure to make him/her User?</div>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">No, Go Back</button>
                                  <button type="submit" class="btn btn-success">Yes, Change It</button>
                                  </div>
                              </div>
                      </form>
                  </div>
              </div>
                      
                    </div>
                    <?php else: ?> 
                      <h2 class="text-center text-info font-weight-bold m-3">No Admin Found</h2>
                    <?php endif; ?>
                    <div class="pagination">
                      <?php echo e($admins->links()); ?>

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
       function changeRole(id){

          var form = document.getElementById('changeRoleForm')
          form.action = 'users/' + id 
          $('#changeRoleModal').modal('show')
          //console.log(form)
       }
   </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/users/adminList.blade.php ENDPATH**/ ?>