<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Go Campus
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font/font-awesome.min.css') }}">
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fixedColumns.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/file-upload.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body class="">

    <div class="wrapper ">
        <div class="sidebar" data-color="green" data-background-color="white">
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
          Go Campus
        </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?php if(!isset($_GET['halaman']) || $_GET['halaman']=='dashboard'){ ?><?php }?>  ">
                        <a class="nav-link" href="admin_dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(isset($_GET['halaman']) &&
		  ($_GET['halaman']=='data_siswa'
		   || $_GET['halaman']=='form_siswa'
		   || $_GET['halaman']=='rincian_siswa'
		   || $_GET['halaman']=='form_rapor')){ ?>active<?php }?>active">
                        <a class="nav-link" href="#">
                            <i class="material-icons">person</i>
                            <p>Data Siswa</p>
                        </a>
                    </li>
                    <li class="nav-item  <?php if(isset($_GET['halaman']) &&
		  ($_GET['halaman']=='data_prestasi'
		   || $_GET['halaman']=='form_prestasi'
		   || $_GET['halaman']=='rincian_gambar')){ ?>active<?php }?>">
                        <a class="nav-link" href="#">
                            <i class="material-icons">library_books</i>
                            <p>Data Prestasi Siswa</p>
                        </a>
                    </li>
                    <li class="nav-item  <?php if(isset($_GET['halaman']) &&
		  ($_GET['halaman']=='rekomendasi'
		   || $_GET['halaman']=='form_ptn'
		   || $_GET['halaman']=='form_mapel'
		   || $_GET['halaman']=='form_grading'
		   || $_GET['halaman']=='form_prodi'
		   || $_GET['halaman']=='forrm_hobi')){ ?>active<?php }?>">
                        <a class="nav-link" href="#">
                            <i class="material-icons">account_balance</i>
                            <p>Rekomendasi Jurusan</p>
                        </a>
                    </li>
                    <li class="nav-item   <?php if(isset($_GET['halaman']) &&
		  ($_GET['halaman']=='data_snmptn'
		   || $_GET['halaman']=='form_snmptn')){ ?>active<?php }?>">
                        <a class="nav-link" href="#">
                            <i class="material-icons">history</i>
                            <p>Riwayat SNMPTN</p>
                        </a>
                    </li>
                    <li class="nav-item   <?php if(isset($_GET['halaman']) &&
		  ($_GET['halaman']=='data_alumni'
		   || $_GET['halaman']=='form_alumni')){ ?>active<?php }?>">
                        <a class="nav-link" href="#">
                            <i class="material-icons">person</i>
                            <p>Data Alumni</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php
function getDatetimeNow() {
  $tz_object = new DateTimeZone('Europe/Belgrade');
  $datetime = new DateTime();
  $datetime->setTimezone($tz_object);
  return $datetime->format('m');
}

$Bulansekarang = getDatetimeNow();
?>
            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="#pablo">Dashboard Admin</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <form class="navbar-form">
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person </i>
                                        <p>ADMIN</p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="admin_dashboard.php?halaman=ubahpassword">Ubah Password</a>
                                        <a class="dropdown-item" href="index.php">Kembali ke Web</a>
                                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-success">
                                        <h4 class="card-title ">Form Input Data Siswa</h4>
                                        <p class="card-category">Isi data dengan baik dan benar!</p>
                                    </div>
                                    <div class="card-body">
                                        @foreach($siswa as $p)
                                        <form action="/siswa/update" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-12">
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nama Siswa</label>
                                                        <input type="text" name="nama" required="required" class="form-control" value="{{ $p->nama }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Kelas</label>
                                                        <input type="text" name="kelas" required="required" class="form-control" value="{{ $p->kelas }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <input type="text" name="jenkel" required="required" class="form-control" value="{{ $p->jenkel }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Umur</label>
                                                        <input type="text" name="umur" required="required" class="form-control" value="{{ $p->umur }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat
                                                            <label>
                                                                <input type="text" name="alamat" required="required" class="form-control" value="{{ $p->alamat }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="simpan" value="simpan" class="btn btn-success pull-right">Simpan</button>
                                            <a href="/siswa">
                                                <button type="button" class="btn btn-secondary pull-right">Batal</button>
                                            </a>
                                        </form>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="" target="blank">
					Portal Informasi
                </a>
                                </li>
                                <li>
                                    <a href="" target="blank">
					Go SNMPTN
                </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right">
                            Go Campus &copy; 2018. T.Informatika Unesa
                        </div>
                    </div>
                </footer>
            </div>
    </div>

    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/plugins/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/dataTables.fixedColumns.min.js"></script>
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script>
        jQuery.datetimepicker.setLocale('id');
        jQuery('#datetimepicker').datetimepicker({
            i18n: {
                id: {
                    months: [
                        'Januari', 'Februari', 'Maret', 'April',
                        'Mei', 'Juni', 'Juli', 'Agustus',
                        'September', 'Oktober', 'November', 'Desember',
                    ],
                    dayOfWeek: [
                        "Minggu.", "Senin", "Selasa", "Rabu",
                        "Kamis", "Jumat", "Sabtu",
                    ]
                }
            },
            timepicker: false,
            format: 'Y-m-d'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.file-upload').file_upload();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tabel-alumni').DataTable({
                scrollY: "500px",
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: {
                    leftColumns: 3,
                    rightColumns: 2
                }
            });
            $('#tabel-siswa').DataTable({
                scrollY: "500px",
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: {
                    leftColumns: 4,
                    rightColumns: 1
                }
            });
            $('#tabel-jurusan').DataTable({
                scrollY: "500px",
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: {
                    leftColumns: 3,
                    rightColumns: 1
                }
            });
            $('#tabel-rama').DataTable({
                scrollY: "500px",
                scrollX: false,
                scrollCollapse: true
            });
            $('#tabel-rama').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</body>

</html>