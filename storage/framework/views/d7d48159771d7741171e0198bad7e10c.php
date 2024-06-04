 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Medic</div>
     </a>

     <hr class="sidebar-divider my-0">


     <li class="nav-item <?php echo e(request()->is('dashboard*') ? 'active' : ''); ?>">
         <a class="nav-link" href="/dashboard">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <li class="nav-item <?php echo e(request()->is('dokter*') ? 'active' : ''); ?>">
         <a class="nav-link" href="<?php echo e(route('dokter.index')); ?>">
             <i class="fas fa-fw fa-user"></i>
             <span>Dokter</span>
         </a>
     </li>

     <li class="nav-item <?php echo e(request()->is('perawat*') ? 'active' : ''); ?>">
         <a class="nav-link" href="<?php echo e(route('perawat.index')); ?>">
             <i class="fas fa-fw fa-user-nurse"></i>
             <span>Perawat</span>
         </a>
     </li>

     <li class="nav-item <?php echo e(request()->is('pasien*') ? 'active' : ''); ?>">
         <a class="nav-link" href="<?php echo e(route('pasien.index')); ?>">
             <i class="fas fa-fw fa-user-injured"></i>
             <span>Pasien</span>
         </a>
     </li>

     <li class="nav-item <?php echo e(request()->is('ruangan*') ? 'active' : ''); ?>">
         <a class="nav-link" href="<?php echo e(route('ruangan.index')); ?>">
             <i class="fas fa-fw fa-hospital"></i>
             <span>Ruangan</span>
         </a>
     </li>




 </ul>
<?php /**PATH /Users/xrafff/Desktop/dilesin/Konsultasi Student/Projek1-main/resources/views/includes/sidebar.blade.php ENDPATH**/ ?>