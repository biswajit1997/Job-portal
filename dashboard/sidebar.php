    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">JOBS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<?php
if($_SESSION["role"] == 'user'){
?>
<li class="nav-item">
    <a class="nav-link collapsed" href="index.php" >
        <span>View Profile</span>
    </a>
   
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="apply_jobs.php" >
        <span>Apply Jobs</span>
    </a>
   
</li>
<?php
    
}else if($_SESSION["role"] == 'admin'){
?>
<li class="nav-item">
    <a class="nav-link collapsed" href="index.php" >
        <span>Registration Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="index.php" >
        <span>Apply Job Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="jobs.php" >
        <span>Jobs List</span>
    </a>
</li>
<?php
}
?>




</ul>
<!-- End of Sidebar -->