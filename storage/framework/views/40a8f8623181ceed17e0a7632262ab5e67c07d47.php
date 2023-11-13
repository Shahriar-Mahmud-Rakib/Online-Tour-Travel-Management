<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Tours and Travels</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">

  <?php echo $__env->yieldContent('css'); ?>
</head>
<body>


  <!-- Navbar -->
    <?php echo $__env->make('layouts.frontend.inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Main content -->
    <?php echo $__env->yieldContent('content'); ?>
  

    
    <?php echo $__env->make('layouts.frontend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('frontend/js/jquery-1.12.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>

<script>
  setTimeout(function() {
      $('#alert').fadeOut('fast');
  }, 6000);
</script>


<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\tourist-guide-using-laravel-master\resources\views/layouts/frontend/master.blade.php ENDPATH**/ ?>