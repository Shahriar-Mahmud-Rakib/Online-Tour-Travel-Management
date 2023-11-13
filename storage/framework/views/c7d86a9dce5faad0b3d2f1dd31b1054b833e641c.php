<?php $__env->startSection('title'); ?>
    Tourist Guide - Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 m-5">
			<div class="card">
				<div class="card-header bg-info"><strong>Your Profile</strong></div>
				<div class="card-body">
					<table class="table">
						<tr>
							<th></th>
							<td><img class="img-fluid" height="260px" width="180px"  style="border-radius: 10%;border:2px solid rgb(110, 110, 110);" src="<?php echo e(Auth::user()->image != 'default.png' ?  asset('storage/profile_photo/' . Auth::user()->image ) :  asset('assets/admin/img/user2-160x160.jpg')); ?>" alt="image"></td>
						</tr>
						<tr>
							<th>Name</th>
							<td><?php echo e($user->name); ?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><?php echo e($user->email); ?></td>
						</tr>
						<tr>
							<th>Contact</th>
							<td><?php echo e($user->contact); ?></td>
						</tr>
					</table>
				</div>
				<div class="card-footer">
					<a href="<?php echo e(route('admin.profile.edit', $user->id)); ?>" class="btn btn-info">Edit</a>
				</div>
			</div>
		</div>	
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>