<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('') ?>assets/dist/img/lazismu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Lazisnmu</span> </a> <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('') ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block"><?= $pegawai['nama_pegawai']; ?></a>
                    </div>
                </div>

                <!-- Sidebar -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/pemasukan" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-pencil"></i>
                                <p>
                                    Pemasukan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/pengeluaran" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-laptop"></i>
                                <p>
                                    Pengeluaran
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">CEK DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datapemasukan" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Pemasukan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datapengeluaran" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Pengeluaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/kasbesar" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-money"></i>
                                <p>
                                    Kas Besar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/kaskecil" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-book"></i>
                                <p>
                                    Kas Kecil
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">REKENING</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/tambahrekening" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Tambah Rekening
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datarekening" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Data Rekening
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">MUZAKKI</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/tambahmuzakki" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Tambah Muzakki
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datamuzakki" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Data Muzakki
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">RECORD INPUT DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/histori" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-user"></i>
                                <p>
                                    Histori
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">AKUN</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/profil" class="nav-link active">
                                <i class="nav-icon fa fa-fw fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/logout" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-power-off"></i>
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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $title; ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">





                    <?php
                    $email = $this->session->userdata('email');
                    ?>
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 pt-4 pl-5">
                                        <img class="image border border-light shadow p-2" src="<?= base_url('') ?>uploads/user/<?php echo $this->db->query("SELECT foto_pegawai FROM pegawai WHERE email = '$email'")->row()->foto_pegawai; ?>" alt="Foto User" style="height: 13vw; width: 12vw;">
                                    </div>

                                    <div class="col-md-8 border shadow mt-4 ml-4">
                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>Nomor Karyawan</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT id_pegawai FROM pegawai WHERE email = '$email'")->row()->id_pegawai; ?></div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>NIK</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT NIK_pegawai FROM pegawai WHERE email = '$email'")->row()->NIK_pegawai; ?></div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>Email</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT email FROM pegawai WHERE email = '$email'")->row()->email; ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>Nama Lengkap</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT nama_pegawai FROM pegawai WHERE email = '$email'")->row()->nama_pegawai; ?></div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>Tanggal Lahir</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT tanggal_lahir FROM pegawai WHERE email = '$email'")->row()->tanggal_lahir; ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>Alamat</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT alamat_lengkap FROM pegawai WHERE email = '$email'")->row()->alamat_lengkap; ?></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 mt-2 ml-2">
                                                <div>Jenis Kelamin</div>
                                            </div>
                                            <div class="col-md-1 pl-0 pr-0 ml-0 ml-0 mt-2 ml-2">
                                                <div>:</div>
                                            </div>
                                            <div class="col-md-7 mt-2 ml-0">
                                                <div><?php echo $this->db->query("SELECT jenis_kelamin FROM pegawai WHERE email = '$email'")->row()->jenis_kelamin; ?></div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-11 m-3 mb-3">

                                                <div class="d-flex justify-content-end">
                                                    <a class="btn btn-primary" href="<?= base_url('') ?>beranda/edit_profil?id=<?php echo $pegawai['id_pegawai'] ?>">Update Profil</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>







                </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url('') ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('') ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 -->
        <script src="<?= base_url('') ?>assets/plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="<?= base_url('') ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="<?= base_url('') ?>assets/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url('') ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <!-- date-range-picker -->
        <script src="<?= base_url('') ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="<?= base_url('') ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url('') ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="<?= base_url('') ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('') ?>assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('') ?>assets/dist/js/demo.js"></script>
        <!-- Page script -->
        <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                    }
                )

                //Timepicker
                $('#timepicker').datetimepicker({
                    format: 'LT'
                })

                //Bootstrap Duallistbox
                $('.duallistbox').bootstrapDualListbox()

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                $('.my-colorpicker2').on('colorpickerChange', function(event) {
                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                });

                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                });

            })
        </script>
</body>

</html>