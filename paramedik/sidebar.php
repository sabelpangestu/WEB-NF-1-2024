<?php
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../login.php");
    exit();
}

$home = '../login.php';

// if ($_SESSION['role'] === 'Admin') {
//     $home = 'index.php';
// } elseif ($_SESSION['role'] === 'Teknik Informatika') {
//     $home = 'ti.php';
// } elseif ($_SESSION['role'] === 'Sistem Informasi') {
//     $home = 'si.php';
// } elseif ($_SESSION['role'] === 'Bisnis Digital') {
//     $home = 'bd.php';
// }
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/webpuskesmas/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Satria Abbel Pangesty</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'Admin') { ?>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin</p>
                                </a>
                            </li>
                        <?php }
                        if (isset($_SESSION['role']) && ($_SESSION['role'] === 'Admin' || $_SESSION['role'] === 'Teknik Informatika')) { ?>
                            <li class="nav-item">
                                <a href="/webpuskesmas/ti.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teknik Informatika</p>
                                </a>
                            </li>
                        <?php }
                        if (isset($_SESSION['role']) && ($_SESSION['role'] === 'Admin' || $_SESSION['role'] === 'Sistem Informasi')) { ?>
                            <li class="nav-item">
                                <a href="/webpuskesmas/si.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sistem Informasi</p>
                                </a>
                            </li>
                        <?php }
                        if (isset($_SESSION['role']) && ($_SESSION['role'] === 'Admin' || $_SESSION['role'] === 'Bisnis Digital')) { ?>
                            <li class="nav-item">
                                <a href="/webpuskesmas/bd.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bisnis Digital</p>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/webpuskesmas/profile.php" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-header">PRAKTIKUM</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Praktikum 1
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="array_buah.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Array Buah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="data_pasien.php" class="nav-link">
                        <i class="nav-icon fas fa-eye"></i>
                        <p>Data Pasien</p>
                    </a>
                </li>
                <li class="nav-header">AUTENTIKASI</li>
                <li class="nav-item">
                    <a href=".../index.html" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>