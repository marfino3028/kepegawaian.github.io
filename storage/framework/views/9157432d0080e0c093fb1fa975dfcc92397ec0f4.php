<!-- Topbar -->
<?php
$ar_profile = App\User::all();
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
<div class="text-center d-none d-md-inline">
              <button class="" id="sidebarToggle"><i class="fas fa-bars fa-md"></i></button>
            </div>
    <!-- Topbar Search -->
    <!--form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form-->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 
           small"><?php echo e(Auth::user()->name); ?></span>


           <?php if(!empty(Auth::user()->foto)): ?>
                  <img src="<?php echo e(asset('img')); ?>/<?php echo e(Auth::user()->foto); ?>" class="img-profile rounded-circle"
                       width="25%" />
                <?php else: ?>
                  <img src="<?php echo e(asset('img/no-photo.png')); ?>" class="img-profile rounded-circle"
                       width="25%" />    
                <?php endif; ?> 
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item"  href="<?php echo e(url('profile')); ?>" >
            <i class="fas fa-user"></i>
            Profile
          </a>
          <a class="dropdown-item"  href="<?php echo e(route('profile.edit', Auth::user()->id)); ?>" >
            <i class="fas fa-pen"></i>
            Edit Profil
          </a>
          <?php if(Auth::user()->role == 'administrator'): ?>
          <a class="dropdown-item" href="<?php echo e(url('/user')); ?>">
            <i class="fas fa-users"></i>
            Kelola User
          </a>
          <?php endif; ?>
           

          <div class="dropdown-divider"></div>

          <!--a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            Logout
          </a-->
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <?php echo e(__('Logout')); ?>

          </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" 
           method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
          </form>

        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar --><?php /**PATH C:\xampp2\htdocs\Ta\pegawai\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>