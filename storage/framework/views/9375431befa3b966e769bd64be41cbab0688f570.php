
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center">
      <span class="brand-text font-weight-bold"><?php echo e(Auth::user()->role_id == 1 ? 'Admin Panel' : 'User Panel'); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href="<?php echo e(Auth::user()->role_id == 1 ? route('admin.profile.show') : route('user.profile.show')); ?>">
            <img src="<?php echo e(Auth::user()->image != 'default.png' ?  asset('storage/profile_photo/' . Auth::user()->image ) :  asset('assets/admin/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
          </a>
          
        </div>
        <div class="info">
          <a href="<?php echo e(Auth::user()->role_id == 1 ? route('admin.profile.show') : route('user.profile.show')); ?>" class="d-block font-weight-bold"><?php echo e(Auth::user()->name); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          

          <?php if(Request::is('admin*')): ?>
          <li class="nav-item has-treeview active">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(Request::is('admin/dashboard') ? 'active' : ''); ?>">
              <i class="fas fa-tachometer-alt"></i>

              <p class="ml-2">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo e(route('admin.district.index')); ?>" class="nav-link <?php echo e(Request::is('admin/district*') ? 'active' : ''); ?>">
              <i class="fas fa-chart-area"></i>
              <p class="ml-2">
                District
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo e(route('admin.type.index')); ?>" class="nav-link <?php echo e(Request::is('admin/type*') ? 'active' : ''); ?>">
              <i class="fas fa-atlas"></i>
              <p class="ml-2">
                Place Type
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo e(route('admin.about.index')); ?>" class="nav-link <?php echo e(Request::is('admin/about*') ? 'active' : ''); ?>">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
              <p class="ml-2">
                About
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo e(route('admin.place.index')); ?>" class="nav-link <?php echo e(Request::is('admin/place*') ? 'active' : ''); ?>">
              <i class="fa fa-info-circle" aria-hidden="true"></i>
              <p class="ml-2">
                Places
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo e(route('admin.guide.index')); ?>" class="nav-link <?php echo e(Request::is('admin/guide*') ? 'active' : ''); ?>">
              <i class="fa fa-user" aria-hidden="true"></i>
              <p class="ml-2">
                Guides
              </p>
            </a>
          </li>
        <?php if(Auth::id() == 1): ?>
        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.users.index')); ?>" class="nav-link <?php echo e(Request::is('admin/users*') ? 'active' : ''); ?>">
            <i class="fa fa-users" aria-hidden="true"></i>
            <p class="ml-2">
              Users
            </p>
          </a>
        </li>
        <?php endif; ?>


        <?php if(Auth::id() == 1): ?>
        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.list')); ?>" class="nav-link <?php echo e(Request::is('admin/list') ? 'active' : ''); ?>">
            <i class="fa fa-list" aria-hidden="true"></i>
              <p class="ml-2">
              Admin List
            </p>
          </a>
        </li>
        <?php endif; ?>


        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.package.index')); ?>" class="nav-link <?php echo e(Request::is('admin/package*') ? 'active' : ''); ?>">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <p class="ml-2">
                  Packages
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.profile.show')); ?>" class="nav-link <?php echo e(Request::is('admin/profile-info*') ? 'active' : ''); ?>">
            <i class="far fa-id-badge"></i>
              <p class="ml-2">
                  Your Profile
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.pending.booking')); ?>" class="nav-link <?php echo e(Request::is('admin/booking-request/list') ? 'active' : ''); ?>">
            <i class="fas fa-chalkboard"></i>
              <p class="ml-2">
                  Booking Request
            </p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.package.running')); ?>" class="nav-link <?php echo e(Request::is('admin/running/package*') ? 'active' : ''); ?>">
            <i class="fas fa-box"></i>
              <p class="ml-2">
                  Running Package
            </p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="<?php echo e(route('admin.tour.history')); ?>" class="nav-link <?php echo e(Request::is('admin/tour-history/list') ? 'active' : ''); ?>">
            <i class="fas fa-history"></i>
              <p class="ml-2">
                  Tour History
            </p>
          </a>
        </li>
        



          <?php endif; ?>

          <?php if(Request::is('user*')): ?>
            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link <?php echo e(Request::is('user/dashboard') ? 'active' : ''); ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p class="pl-2">
                  Dashboard
                 
                </p>
              </a>
            </li>


            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.district')); ?>" class="nav-link <?php echo e(Request::is('user/districts') ? 'active' : ''); ?>">
                <i class="fas fa-chart-area"></i>
                <p class="ml-2">
                  District
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.placetype')); ?>" class="nav-link <?php echo e(Request::is('user/placetypes') ? 'active' : ''); ?>">
                <i class="fas fa-atlas"></i>
                <p class="ml-2">
                  Place Type
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.place')); ?>" class="nav-link <?php echo e(Request::is('user/places*') ? 'active' : ''); ?>">
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <p class="ml-2">
                  Places
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.guide')); ?>" class="nav-link <?php echo e(Request::is('user/guide*') ? 'active' : ''); ?>">
                <i class="fa fa-user" aria-hidden="true"></i>
                <p class="ml-2">
                  Guides
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.package')); ?>" class="nav-link <?php echo e(Request::is('user/package*') ? 'active' : ''); ?>">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <p class="ml-2">
                      Packages
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.profile.show')); ?>" class="nav-link <?php echo e(Request::is('user/profile-info*') ? 'active' : ''); ?>">
                <i class="far fa-id-badge"></i>
                  <p class="ml-2">
                      Your Profile
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.pending.booking')); ?>" class="nav-link <?php echo e(Request::is('user/booking-request/list') ? 'active' : ''); ?>">
                <i class="fas fa-chalkboard"></i>
                  <p class="ml-2">
                      Pending Request
                </p>
              </a>
            </li>
    

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('user.tour.history')); ?>" class="nav-link <?php echo e(Request::is('user/tour-history/list') ? 'active' : ''); ?>">
                <i class="fas fa-history"></i>
                  <p class="ml-2">
                      Tour History
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="<?php echo e(route('welcome')); ?>" class="nav-link">
                <i class="fas fa-pager"></i>
                  <p class="ml-2">
                      Home Page
                </p>
              </a>
            </li>


          <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\xampp\htdocs\Online Tours and Travels Management\resources\views/layouts/backend/inc/sidebar.blade.php ENDPATH**/ ?>