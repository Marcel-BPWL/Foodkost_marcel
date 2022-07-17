<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | DataTables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <?php
                if ($user['role'] == 'User') {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= base_url('Profil/detail') ?>">
                            <i class="far fa-star text-warning"></i>
                            <span class="badge badge-danger navbar-badge">!</span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url(); ?>assets/index3.html" class="brand-link">
                <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">FoodKost</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/img/Profile/') . $user['gambar']; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $user['nama']; ?> - <?= $user['role']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <?php
                        if ($user['role'] == 'Admin') { ?>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a class="nav-link active" href="<?= site_url('Makanan/') ?>">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Data Makanan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a class="nav-link" href="<?= site_url('Auth/Logout/') ?>">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Log Out
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>

                        <?php } else {
                        ?>
                            <li class="nav-item has-treeview">
                                <a class="nav-link" href="<?= site_url('Profil/') ?>">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Profil
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a class="nav-link" href="<?= site_url('Profil/Makanan/') ?>">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        FoodKost
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a class="nav-link" href="<?= site_url('Auth/Logout/') ?>">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Log Out
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>
                        <?php
                        } ?>

                    </ul>
        </aside>