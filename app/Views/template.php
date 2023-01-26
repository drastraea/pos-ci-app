<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harmonis 1 | Toko Emas</title>
    <!-- Icon Web -->
    <link rel="icon" type="image/x-icon" href="<?= base_url()?>/harmonis.ico">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/fontawesome-free/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/dist/css/adminlte.min.css">

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <!--<script src="</?= base_url('AdminLTE')?>/plugins/jquery/jquery.min.js"></script>-->
    <script src="<?= base_url('AdminLTE')?>/plugins/jquery/jquery-3.6.3.min.js"></script>
    <!-- SweetAlert2 -->
    <!--<script src="</?= base_url('AdminLTE')?>/plugins/sweetalert2/sweetalert2.all.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet"></link>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('AdminLTE')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('AdminLTE')?>/plugins/chart.js/Chart.min.js"></script>
    <!-- autoNumeric -->
    <!--<script src="</?= base_url('autoNumeric')?>/src/AutoNumeric.js"></script>-->
    <!-- ChartJs -->
    <script src="<?= base_url('AdminLTE')?>/dist/js/adminlte.min.js"></script>

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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="kasir" class="nav-link bg-warning">Mode Kasir</a>
                </li>
                <!--<li class="nav-item d-none d-sm-inline-block">-->
                <!--    <a href="#" class="nav-link">Contact</a>-->
                <!--</li>-->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Home/Logout')?>">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('admin')?>" class="brand-link">
                <img src="<?= base_url('AdminLTE')?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= $judul ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!--<div class="image">-->
                    <!--    <img src="<?= base_url('AdminLTE')?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"-->
                    <!--        alt="User Image">-->
                    <!--</div>-->
                    <span><i class="bg-green fas fa-laugh-wink img-circle ml-5"></i> |</span>
                        <a href="#" class="d-block"> | <?= session()->get('nama_user')?></a>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('/admin')?>"
                                class="nav-link <?= $menu=='dashboard' ? 'active': '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/penjualan')?>"
                                class="nav-link <?= $menu=='Penjualan' ? 'active': '' ?>">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>
                                    Penjualan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/pembelian')?>"
                                class="nav-link <?= $menu=='pembelian' ? 'active': '' ?>">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Pembelian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/Admin/stok')?>"
                                class="nav-link <?= $submenu=='stok' ? 'active': '' ?>">
                               <i class="nav-icon fas fa-database"></i>
                                    <p>Stok</p>
                            </a>
                        </li>
                        <!-- Laporan Harian -->
                        <li class="nav-item <?= $menu=='Laporan' ? 'active': '' ?>">
                            <a href="#" class="nav-link <?= $menu=='laporan' ? 'active': '' ?>">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Laporan Harian
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!--Laporan Penjualan-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-folder"></i>
                                      <p>
                                        Laporan Penjualan
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporan/laporanharianjual')?>"
                                                class="nav-link <?= $submenu=='Penjualan-Harian' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon"></i>
                                                <p>Penjualan Emas 75%</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporan/laporanharianjualmurni')?>"
                                                class="nav-link <?= $submenu=='Penjualan-Murni' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon"></i>
                                                <p>Penjualan Emas 75%+</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--End of Laporan Penjualan-->
                                <!--Laporan Pembelian-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-folder"></i>
                                      <p>
                                        Laporan Pembelian
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporan/laporanharianbeli')?>"
                                                class="nav-link <?= $submenu=='Pembelian-Harian' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon ms-1"></i>
                                                <p>Pembelian Emas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporan/laporanharianbeli99')?>"
                                                class="nav-link <?= $submenu=='Pembelian-Murni' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon ms-1"></i>
                                                <p>Pembelian Emas 99%</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporan/laporanharianbelihancuran')?>"
                                                class="nav-link <?= $submenu=='Pembelian-Hancuran' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon ms-1"></i>
                                                <p>Pembelian Hancuran</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--End of Laporan Pembelian-->
                                <li class="nav-item">
                                    <a href="<?= base_url('/laporan/stokakhir')?>"
                                        class="nav-link <?= $submenu=='Stok Akhir' ? 'active': '' ?>">
                                        <i class="fas fa-money-check nav-icon"></i>
                                        <p>Laporan Stok</p>
                                    </a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a href="</?= base_url('/laporan/laporanbulananbeli')?>"-->
                                <!--        class="nav-link </?= $submenu=='Laporan Bulanan' ? 'active': '' ?>">-->
                                <!--        <i class="fas fa-money-check nav-icon"></i>-->
                                <!--        <p>Pembelian Bulanan</p>-->
                                <!--    </a>-->
                                <!--</li>-->
                            </ul>
                        </li>
                        <!-- End of Laporan Harian -->
                        <!-- Laporan Bulanan -->
                        <li class="nav-item <?= $menu=='Laporan Bulanan' ? 'active': '' ?>">
                            <a href="#" class="nav-link <?= $menu=='laporan' ? 'active': '' ?>">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>
                                    Laporan Bulanan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!--Laporan Penjualan-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-folder"></i>
                                      <p>
                                        Laporan Penjualan
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporanbulanan/laporanjual')?>"
                                                class="nav-link <?= $submenu=='Laporan Penjualan' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon"></i>
                                                <p>Penjualan Emas 75%</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporanbulanan/laporanjualmurni')?>"
                                                class="nav-link <?= $submenu=='Laporan Penjualan Emas Murni' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon"></i>
                                                <p>Penjualan Emas 75%+</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--End of Laporan Penjualan-->
                                <!--Laporan Pembelian-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-folder"></i>
                                      <p>
                                        Laporan Pembelian
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporanbulanan/laporanbeli')?>"
                                                class="nav-link <?= $submenu=='Laporan Pembelian Emas Bulanan' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon ms-1"></i>
                                                <p>Pembelian Emas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporanbulanan/laporanbelimurni')?>"
                                                class="nav-link <?= $submenu=='Pembelian Emas Murni' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon ms-1"></i>
                                                <p>Pembelian Emas 99%</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('/laporanbulanan/laporanbelihancuran')?>"
                                                class="nav-link <?= $submenu=='Pembelian Bulanan Hancuran' ? 'active': '' ?>">
                                                <i class="fas fa-calendar-day nav-icon ms-1"></i>
                                                <p>Pembelian Hancuran</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!--End of Laporan Pembelian-->
                                <li class="nav-item">
                                    <a href="<?= base_url('/laporanbulanan/stokakhir')?>"
                                        class="nav-link <?= $submenu=='Stok Akhir' ? 'active': '' ?>">
                                        <i class="fas fa-money-check nav-icon"></i>
                                        <p>Laporan Stok</p>
                                    </a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a href="</?= base_url('/laporan/laporanbulananbeli')?>"-->
                                <!--        class="nav-link </?= $submenu=='Laporan Bulanan' ? 'active': '' ?>">-->
                                <!--        <i class="fas fa-money-check nav-icon"></i>-->
                                <!--        <p>Pembelian Bulanan</p>-->
                                <!--    </a>-->
                                <!--</li>-->
                            </ul>
                        </li>
                        <li class="nav-item <?= $menu=='dashboard' ? 'active': '' ?>">
                            <a href="#" class="nav-link <?= $menu=='admin' ? 'active': '' ?>">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/user')?>"
                                        class="nav-link <?= $submenu=='user' ? 'active': '' ?>">
                                        <i class="fas fa-user"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/Admin/setting')?>"
                                        class="nav-link <?= $submenu=='setting' ? 'active': '' ?>">
                                        <i class="fas fa-cog"></i>
                                        <p>Pengaturan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $subjudul ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('/admin')?>"><?= $judul ?></a></li>
                                <li class="breadcrumb-item active"><?= $subjudul ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- isi konten -->
                        <?php  
        if ($page) {
            echo view($page);
        } 
        ?>


                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Your personal advisory
            </div>
            <!-- Default to the left -->
            <strong>Dibuat oleh <a href="https://mayicu.id">Mayicu</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
</body>

</html>