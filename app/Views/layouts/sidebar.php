 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url()?>">
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
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item"  href="<?=base_url()?>components/texteditor">texteditor</a>
            <a class="collapse-item" href="<?=base_url()?>components/explorer">explorer</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider">

<!--Manage -->
<div class="sidebar-heading">
    Manage
</div>
<!-- Users -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
        aria-expanded="true" aria-controls="collapseUsers">
        <i class="fas fa-fw fa-user"></i>
        <span>Users</span>
    </a>
    <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>user">User Table</a>
            <a class="collapse-item" href="<?= base_url()?>user/create">New User</a>
        </div>
    </div>
</li>
<!-- Pages             -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-scroll"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>page">Pages Table</a>
            <a class="collapse-item" href="<?= base_url()?>page/create">New Page</a>
        </div>
    </div>
</li>
<!-- Categories -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
        aria-expanded="true" aria-controls="collapseCategories">
        <i class="fas fa-fw fa-list"></i>
        <span>Categories</span>
    </a>
    <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>categories">Categories</a>
            <a class="collapse-item" href="<?= base_url()?>categories/add">Add</a>
        </div>
    </div>
</li>
<!-- Ads -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAds"
        aria-expanded="true" aria-controls="collapseAds">
        <i class="fas fa-fw fa-handshake"></i>
        <span>Ads</span>
    </a>
    <div id="collapseAds" class="collapse" aria-labelledby="headingAds" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url()?>ads">Ads</a>
            <a class="collapse-item" href="<?= base_url()?>ads/add">Add</a>
        </div>
    </div>
</li>







<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


<!--inner sidebar ,keep element inside-->
</ul>
