<section id="footer">
    <div class="container footer">
      <div class="row">
        <div class="col-md-4">
          <h2 class="head">Types Of Places</h2>
          <?php $__empty_1 = true; $__currentLoopData = $placetypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $placetype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <p><i class="fas fa-check"> </i>  <a href="<?php echo e(route('placetype.wise.place', $placetype->id)); ?>"><?php echo e($placetype->name); ?></a></p>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
            <p class="text-center m-auto p-3 text-white bg-dark"><strong>No Placetype found right now</strong></p>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <h2 class="head">Services</h2>
          <p><i class="fas fa-check"> </i> <a href="">Safe</a></p>
           <p><i class="fas fa-check"> </i>  <a href="">Low Cost Packages</a></p>
           <p><i class="fas fa-check"> </i> <a href="">Amazing Places</a></p>
           <p><i class="fas fa-check"> </i> <a href="">Secure</a></p>
           <p><i class="fas fa-check"> </i> <a href="">Talented Guides</a></p>
           <p><i class="fas fa-check"> </i> <a href="">24/7 Support</a></p>
        </div>

       
        <div class="col-md-4">
          <h2 class="head">Our Location</h2>
          <p> <i class="fas fa-map-marker-alt"></i>Pabna Sadar, Pabna</p>
          <p><i class="fas fa-phone"></i> +88 01772-173075</p>
          <p><i class="fas fa-envelope"></i> smrakib.170110@s.pust.ac.bd</p>
        </div>
      </div>
      <hr style="background-color: white;" class="pb-0">
      <p class="text-center p-3 mb-0"> &copy;<b>Online Tours and Travels</b></p>
    </div>
  </section><?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/layouts/frontend/inc/footer.blade.php ENDPATH**/ ?>