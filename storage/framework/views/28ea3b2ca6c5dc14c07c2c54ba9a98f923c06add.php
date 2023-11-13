<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">Online Tours and Travels</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="background-color:  #fff;"></span>
    </button>
  
     <div class="collapse navbar-collapse"></div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item a">
          <a class="nav-link" href="<?php echo e(route('welcome')); ?>">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('about')); ?>">About Us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('all.place')); ?>">Places</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('all.package')); ?>">Packages</a>
        </li>
        
              <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
              </li>
                <form class="form-inline my-2 my-lg-0">
                  <a class="btn btn-info my-2 px-4 py-2" href="<?php echo e(route('register')); ?>" type="submit"><b>Sign Up</b></a>
                </form>
                <?php else: ?>
                    <?php if(Auth::user()->role_id == 1): ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                        </li>
                    <?php endif; ?>
                    <?php if(Auth::user()->role_id == 2): ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                    </li>                    <?php endif; ?>
                <?php endif; ?>
      </ul>
      
    </div>
  </nav>
  </section><?php /**PATH C:\xampp\htdocs\tourist-guide-using-laravel-master\resources\views/layouts/frontend/inc/nav.blade.php ENDPATH**/ ?>