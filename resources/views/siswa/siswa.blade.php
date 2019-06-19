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
                        <?php if(isset($_GET['status'])){ ?>
                            <div class="alert alert-success" style="padding-top:10px; padding-bottom: 10px; margin-bottom: 50px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>
                    <?php if($_GET['status']=='diubah'){ ?>
                      Data berhasil diubah !
                     <?php }else if($_GET['status']=='ditambah'){?>
					  Data berhasil ditambah !
					 <?php }else{?>
					  Data berhasil dihapus !
					 <?php }?>
					</span>
                            </div>
                            <?php }?>
                                <a href="/siswa/tambah">
                                    <button type="button" class="btn btn-success">Tambah Data</button>
                                </a>
                                <button type="button" class="btn btn-info"><i class="material-icons">print</i> Cetak Data</button>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header card-header-success">
                                                <h4 class="card-title ">Data Siswa</h4>
                                                <p class="card-category">Data siswa meliputi NIS, nama, kelas, dan kontak yang dapat dihubungi</p>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table" id="tabel-siswa">

                                                        <thead class=" text-success">
                                                            <th class="text-center">
                                                                Id.
                                                            </th>
                                                            <th>Nama</th>
                                                            <th>Kelas</th>
                                                            <th>Alamat</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Umur</th>
                                                            <th class="text-center">Aksi</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach($siswa as $p)
                                                            <tr>
                                                                <td class="text-center">{{ $p->id }}</td>
                                                                <td>{{ $p->nama }}</td>
                                                                <td class="text-center">{{ $p->kelas }}</td>
                                                                <td>{{ $p->alamat }}</td>
                                                                <td>{{ $p->jenkel }}</td>
                                                                <td>{{ $p->umur }}</td>
                                                                <td>
                                                                    <td class="td-actions text-right">
                                                                        <a href="#" class="btn waves-effect waves-light btn-success"> <i class="material-icons">visibility</i></a>
                                                                        <button type="button" rel="tooltip" class="btn btn-success" onclick="window.location.href='/siswa/ubah/{{ $p->id }}'">
                                                                            <i class="material-icons">edit</i>
                                                                        </button>
                                                                        <a class="btn waves-effect waves-light btn-danger " href="/siswa/hapus/{{ $p->id }}" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="material-icons">close</i></a>
                                                                    </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
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

    <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js') }}?v=2.1.0" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
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