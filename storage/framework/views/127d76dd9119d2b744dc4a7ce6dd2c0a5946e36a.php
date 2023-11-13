<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Tours and Travels </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="<?php echo e(asset('backend/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/custom.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
    <?php echo $__env->make('layouts.backend.inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
    <?php echo $__env->make('layouts.backend.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <!-- Control Sidebar -->
  <?php echo $__env->make('layouts.backend.inc.control-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
  setTimeout(function() {
      $('#alert').fadeOut('fast');
  }, 6000);
</script>
<script src="<?php echo e(asset('backend/app.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>



<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/layouts/backend/master.blade.php ENDPATH**/ ?>