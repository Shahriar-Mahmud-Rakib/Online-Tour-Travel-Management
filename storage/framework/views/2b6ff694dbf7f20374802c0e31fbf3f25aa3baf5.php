<?php $__env->startSection('title'); ?>
    Tourist Guide - Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row pt-5">
        <h2 class="m-auto" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif"><strong>Admin Dashboard</strong></h2>
    </div>
</div>
<div class="main-section">
    <div class="dashbord">
        <div class="icon-section">
            <i class="fas fa-chart-area"></i><br>
            Districts
            <p><?php echo e($districts->count()); ?></p>
        </div>
        <div class="detail-section">
            <a href="<?php echo e(route('admin.district.index')); ?>">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-green">
        <div class="icon-section">
            <i class="fas fa-atlas"></i><br>
            Placetype
            <p><?php echo e($placetypes->count()); ?></p>
        </div>
        <div class="detail-section">
            <a href="<?php echo e(route('admin.type.index')); ?>">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-orange">
        <div class="icon-section">
            <i class="fa fa-info-circle" aria-hidden="true"></i><br>
                Places
                <p><?php echo e($places->count()); ?></p>
        </div>
        <div class="detail-section">
            <a href="<?php echo e(route('admin.place.index')); ?>">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-blue">
        <div class="icon-section">
            <i class="fa fa-user" aria-hidden="true"></i><br>
            Guides
            <p><?php echo e($guides->count()); ?></p>
        </div>
        <div class="detail-section">
            <a href="<?php echo e(route('admin.guide.index')); ?>">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-red">
        <div class="icon-section">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
            Package
            <p><?php echo e($packages->count()); ?></p>
        </div>
        <div class="detail-section">
            <a href="<?php echo e(route('admin.package.index')); ?>">More Info </a>
        </div>
    </div>
    <div class="dashbord dashbord-skyblue">
        <div class="icon-section">
            <i class="fa fa-users" aria-hidden="true"></i><br>
            Users
            <p><?php echo e($users->count()); ?></p>
        </div>
        <div class="detail-section">
            <a href="<?php echo e(route('admin.users.index')); ?>">More Info </a>
        </div>
    </div>
</div>
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>