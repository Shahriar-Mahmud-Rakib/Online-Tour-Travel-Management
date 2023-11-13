<?php $__env->startSection('title'); ?>
    Tourist Guide - Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    .places{
        margin-top: 60px;
        margin-bottom: 60px;
    }
</style>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="promo-title">TRAVEL SPOTLIGHT</p>
				<p class="text-justify lead"> Bangladesh Tourism Guide is the place to discover the stunning beauty that resides in the tourism spots
                     of Bangladesh. Our objective is to make it easier for you to enjoy all these amazing places.
                     If you are the kind of person who loves to travel, then make sure to regularly check our posts so that you don’t miss the best tourism spots. </p>
				<a href="<?php echo e(route('about')); ?>" class="btn btn-info py-2 px-3"><strong>Details</strong></a>
			</div>
			<div class="col-md-6 text-center">

			</div>
		</div>
	</div>
</section>



<div class="container places">
    <div class="row justify-content-center">
        <h1><strong>Amazing Places</strong></h1>
    </div>
    <?php $__empty_1 = true; $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="row my-5">
                    <div class="col-md-3">
                        <img  src="<?php echo e(asset('storage/place/'. $place->image)); ?>" alt="" srcset="" class="img-fluid" style="height: 190px; border-radius: 5%">
                    </div>
                    <div class="col-md-9">
                        <h2><strong><?php echo e($place->name); ?></strong></h2>
                        <p>District: <strong><?php echo e($place->district->name); ?></strong></p>
                        <p>Place Type: <strong><?php echo e($place->placetype->name); ?></strong></p>
                        <a href="<?php echo e(route('place.details', $place->id)); ?>" class="btn btn-success">Details</a>
                        <hr>
                    </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h2 class="my-5 bg-info text-white text-center p-3">No Place Found. Please add some place.</h2>
     <?php endif; ?>
     <a href="<?php echo e(route('all.place')); ?>" class="btn view-more">View More Place</a>
</div>



<div class="container-fluid plan">
    <div class="row text-center">
        <h1  class="m-auto"><strong>Plan Your Tour Easly</strong></h1>
    </div>
    <div class="row">
        <p style="color: rgb(192, 174, 174)" class="lead m-auto">If you find the best tour, we provided the best.</p>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <h3>24/7 Support</h3>
            <p>Our team always support you. Customer satisfaction is our main goal.Call or Direct message please.</p>
        </div>

        <div class="col-md-4">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <h3>Room and food included</h3>
            <p>Our packages provided you all things..</p>
        </div>

        <div class="col-md-4">
            <i class="fa fa-sitemap" aria-hidden="true"></i>
            <h3>Everything organized</h3>
            <p>We organized all packages. Our team is very responsible. </p>
        </div>
    </div>
</div>



<div class="container places">
    <div class="row justify-content-center">
        <h1><strong>Our All Amazing Packages</strong></h1>
    </div>
    <div class="row my-5">
        <?php $__empty_1 = true; $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4">
                    <div class="card mx-2 my-3" style="border: 2px solid black">
                        <div class="card-header">
                            <img src="<?php echo e(asset('storage/packageImage/'.$package->package_image)); ?>" alt="" class="img-fluid p-0 m-0">
                        </div>
                        <div class="card-body package-details">
                            <p>Package Name: <?php echo e($package->name); ?></p>
                            <p>Price: <?php echo e($package->price); ?></p>
                            <p>People: <?php echo e($package->people); ?></p>
                        </div>
                        <div class="card-footer bg-dark" >
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="<?php echo e(route('package.details', $package->id)); ?>" class="btn btn-info">Details</a>
                                </div>
                                <div>
                                    <?php if(auth()->guard()->check()): ?>
                                        <?php if(Auth::user()->role_id == 2): ?>
                                            <a href="<?php echo e(route('package.booking', $package->id)); ?>" class="btn btn-success">Book Now</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                        
                                    <?php if(auth()->guard()->guest()): ?>
                                        <a href="<?php echo e(route('login')); ?>" class="btn btn-success">Book Now</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
    
                    </div>    
                </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h2 class="m-auto my-5 bg-info text-white text-center p-3">No Package Found. Please add some place.</h2>
                <?php endif; ?>
    </div>    
    
    <div class="row">
        <div class="d-flex justify-content-center m-auto">
            <div>
                <a href="<?php echo e(route('all.package')); ?>" class="btn view-more">View More Package</a>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid district-show text-center">
    <div class="row">
        <h1 class="m-auto "><strong>Show District Wise Amazing Places</strong></h1>
    </div>
    <div class="row px-3 justify-content-center my-5">
        <?php $__empty_1 = true; $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-sm-2">
                <a href="<?php echo e(route('district.wise.place', $district->id)); ?>" class="btn btn-district my-3">
                    <strong><?php echo e($district->name); ?> (<?php echo e($district->places->count()); ?>)</strong>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h2 class="m-auto p-3 text-white bg-dark">No Districts Found Right Now. Please Add Some Areas</h2>
        <?php endif; ?>
    </div>
</div>





<section id="social-media">
	<div class="container text-center">
		<p>	Find us on Social Media</p>
		<div class="social-icon">
            <a target="_blank" href="https://www.facebook.com/"><img src="<?php echo e(asset('frontend/img/facebook.png')); ?>"></a>
			<a target="_blank" href="https://twitter.com/"><img src="<?php echo e(asset('frontend/img/twitter.png')); ?>"></a>
			<a target="_blank" href="https://www.instagram.com/"><img src="<?php echo e(asset('frontend/img/instagram.png')); ?>"></a>
			<a target="_blank" href="https://www.linkedin.com/"><img src="<?php echo e(asset('frontend/img/linkedin.png')); ?>">
            </a>
			
			
		</div>
	</div>
</section>







<div class="container-fluid search-section text-center">
    <div class="row">
        <h1 class="m-auto "><strong>You Can Search Our Amazing Places</strong></h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <form action="<?php echo e(route('search')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center">
                    <?php if(session('search')): ?>
                        <div class="alert alert-danger mt-3" id="alert" roles="alert">
                            <?php echo e(session('search')); ?> 
                        </div> 
                    <?php endif; ?> 
                </div> 
                <div class="d-flex flex-row  justify-content-center py-5">
                    <div class="form-group" style="width: 60%">
                        <input type="text" placeholder="search a place" class="form-control" name="query">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success float-left ml-1">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tourist-guide-using-laravel-master\resources\views/welcome.blade.php ENDPATH**/ ?>