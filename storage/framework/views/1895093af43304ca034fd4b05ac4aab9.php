 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Medic</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
    
     
     <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    
         <?php if($showdashboard): ?>
            <li class="nav-item active">
                <a class="nav-link" href="/dokter">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dokter</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/perawat">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Perawat</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/pasien">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pasien</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/ruangan">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ruangan</span></a>
            </li>
        <?php endif; ?>
       
            

        </ul><?php /**PATH C:\laragon\www\Projek1-main\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>