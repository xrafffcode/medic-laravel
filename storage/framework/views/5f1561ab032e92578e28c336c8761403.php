  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
      </button>



      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">





          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                      <?php if(auth()->guard()->check()): ?>
                          <?php echo e(Auth::user()->name); ?>

                      <?php endif; ?>
                  </span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal"
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo csrf_field(); ?>
                      </form>
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                  </a>
              </div>
          </li>

      </ul>

  </nav>
<?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/includes/navbar.blade.php ENDPATH**/ ?>