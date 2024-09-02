<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Kominfo-Grob</title>

  <link rel="icon" href="<?= base_url("assets/images/logo.png") ?>" type="image/jpeg">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css") ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css") ?>">
  <!-- jQuery -->
  <script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
  <script src="<?= base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js") ?>"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/dist/css/adminlte.min.css") ?>">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/sweetalert2/dark.css' ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/toastr/toastr.min.css' ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-white">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary  elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>" class="brand-link navbar-light">
        <img src="<?= base_url("assets/images/logo.png") ?>" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text text-secondary font-weight-bold">Manajemen Aset TIK</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3  d-flex">
          <div class="image">
            <img src="<?= base_url('assets/images/user.jpg') ?>" class="img-circle mt-3" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= ucwords($this->session->userdata('nama_lengkap')) ?> </a>
            <p><span class="mb-0 badge badge-light"><?= ucwords($this->session->userdata('role')) ?></span>
              <span class="mb-0 badge badge-light"><?= $this->session->userdata('departemen') ?></span>
            </p>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?><?= $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <!-- permintaan dan perbaikan
            <li class="nav-item">
              <a href="<?php echo base_url('permintaan') ?>" class="nav-link <?= $this->uri->segment(1) == 'permintaan' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-paper-plane"></i>
                <p>
                  Pengajuan Aset
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('perbaikan') ?>" class="nav-link <?= $this->uri->segment(1) == 'perbaikan' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-wrench"></i>
                <p>
                  Pemusnahan Aset
                </p>
              </a>
            </li>
            

            <li class="nav-item">
              <a href="<?php echo base_url('data_sdm') ?>" class="nav-link <?= $this->uri->segment(1) == 'data_sdm' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-paper-plane"></i>
                <p>
                  SDM SPBE
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('data_pengetahuan') ?>" class="nav-link <?= $this->uri->segment(1) == 'data_pengetahuan' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-paper-plane"></i>
                <p>
                  Pengetahuan SPBE
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('data_layanan') ?>" class="nav-link <?= $this->uri->segment(1) == 'data_layanan' ? 'active' : '' ?>">
                <i class="nav-icon fa fa-paper-plane"></i>
                <p>
                  Layanan SPBE
                </p>
              </a>
            </li>
            -->

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link 
                  <?= $this->uri->segment(1) == 'aplikasi' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'aplikasi_usul' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'plikasi_hapus' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Aplikasi SPBE
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('aplikasi') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'aplikasi' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Aplikasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('aplikasi_usul') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'aplikasi_usul' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengajuan Aplikasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('aplikasi_hapus') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'aplikasi_hapus' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penghapusan Aplikasi</p>
                    </a>
                  </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link 
                  <?= $this->uri->segment(1) == 'aset' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'permintaan' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'perbaikan' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Infrastruktur SPBE
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('aset') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'aset' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Aset TIK</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('permintaan') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'permintaan' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengajuan Aset TIK</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('perbaikan') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'perbaikan' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemusnahan Aset TIK</p>
                    </a>
                  </li>
                </ul>
            </li>

            <?php if ($this->session->userdata('role') == 'admin') { ?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link 
                  <?= $this->uri->segment(1) == 'aset' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'kategori' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'opd' ? 'active' : '' ?>
                  <?= $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Data Master
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('aset') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'aset' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Aset</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('kategori') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'kategori' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Kategori</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('opd') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'opd' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Perangkat Daerah</p>
                    </a>
                  </li>
                  <!--
                  <li class="nav-item">
                    <a href="<?= base_url('departemen') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'departemen' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Departemen</p>
                    </a>
                  </li>
                  -->
                  <li class="nav-item">
                    <a href="<?= base_url('user') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data User</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php } ?>
            <li class="nav-item">
              <a href="<?= base_url('setting') ?>" class="nav-link <?= $this->uri->segment(1) == 'setting' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Setting
                </p>
              </a>
            </li>
            <li class="nav-item">
              <hr>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-logout">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
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
          <?= $contents ?>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- /.DISINI KONTEN UTAMA -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">

      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <?= date('Y') ?> <a href="https://gisaka.net/" target="_blank">GisakaNet</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->


  <!-- Bootstrap 4 -->
  <script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url("assets/dist/js/adminlte.min.js") ?>"></script>
  <!-- Sweetalert -->
  <script src="<?= base_url() . 'assets/plugins/sweetalert2/sweetalert2.min.js' ?>"></script>
  <!-- Toastr -->
  <script src="<?= base_url() . 'assets/plugins/toastr/toastr.min.js' ?>"></script>
</body>

</html>

<!-- modal-logout -->
<div class="modal fade" id="modal-logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <b class="h4">Apakah anda yakin ingin logout?</b>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Batal</button>
        <a type="button" class="btn  btn-danger" href="<?= site_url('auth/logout') ?>">Logout</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Alert Config -->
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 10000
    });
    <?php if ($this->session->flashdata('success')) { ?>
      Toast.fire({
        icon: 'success',
        title: '<?= $this->session->flashdata('success'); ?>'
      });
    <?php } else if ($this->session->flashdata('error')) {  ?>
      Toast.fire({
        icon: 'error',
        title: '<?= $this->session->flashdata('error'); ?>'
      });
    <?php } else if ($this->session->flashdata('warning')) {  ?>
      Toast.fire({
        icon: 'warning',
        title: '<?= $this->session->flashdata('warning'); ?>'
      });
    <?php } else if ($this->session->flashdata('info')) {  ?>
      Toast.fire({
        icon: 'info',
        title: '<?= $this->session->flashdata('info'); ?>'
      });
    <?php } ?>
  });
</script>