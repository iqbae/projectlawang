<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Lawang Kota - Dashboard</title>

    <!-- Custom fonts for this template-->

    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul style="background-color:#23222f;" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-door-open"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lawang Kota<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="far fa-star"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- List Import Data Laporan Dari Excel -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-folder-open"></i>
                    <span>Import</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Laporan :</h6>
                        <a class="collapse-item" href="lra.php">Data LRA</a>
                        <a class="collapse-item" href="realisasi_rek.php">Data Realisasi <br />
                            Per Rekening</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider" />

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-folder"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master :</h6>
                        <a class="collapse-item" href="skpd.php">Data SKPD</a>
                        <a class="collapse-item" href="program.php">Data Program</a>
                        <a class="collapse-item" href="kegiatan.php">Data Kegiatan</a>
                        <a class="collapse-item" href="sub_keg.php">Data Sub Kegiatan</a>
                        <a class="collapse-item" href="urusan.php">Data Urusan</a>
                        <a class="collapse-item" href="urusan_mapping.php">
                            Data Urusan Mapping</a>
                        <a class="collapse-item" href="kd_rek.php"> Data Kode Rekening</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider" />

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-map"></i>
                    <span>Cetak Laporan</span>
                </a>
                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cetak Laporan :</h6>
                        <a class="collapse-item" href="real_pem.php">Laporan Realisasi <br />
                            Anggaran Pendapatan <br />
                            Dan Belanja</a>
                        <a class="collapse-item" href="lra_pendapatan.php">Laporan Target Dan <br />
                            Realisasi Pendapatan <br />
                            Asli Daerah <br /></a>
                        <a class="collapse-item" href="rrb.php">Laporan Realisasi<br />
                            Anggaran Belanja Menurut<br />
                            Urusan Dan Fungsi</a>
                        <a class="collapse-item" href="rekap_pdn.php">Rekap Realisasi PDN</a>
                        <a class="collapse-item" href="rekap_disdik.php">Rekapitulasi Realisasi <br />
                            Pendidikan</a>
                        <a class="collapse-item" href="rekap_diskes.php">Rekapitulasi Realisasi <br />
                            Kesehatan</a>
                        <a class="collapse-item" href="rekap_publik.php">Rekapitulasi Realisasi <br />
                            Publik</a>
                        <a class="collapse-item" href="rekap_pstun.php">Rekapitulasi Realisasi <br />
                            Penurunan Stunning</a>
                        <a class="collapse-item" href="rekap_spm.php">Standar Pelayanan
                            <br />
                            Minimum</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama_pengguna']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin page Content -->
                <div class="container-fluid">

                    <h3 style="background-color:#704fb0; color:white; font-family:sans-serif" align="center">Ini Rangka
                        Awal Dari Dashboard
                    </h3>


                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>&nbsp;</h3>
                                <font color="white">
                                    <p>Upload P3DN</p>
                                </font>
                            </div>
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <a href="https://ptm.atrbpn.go.id/ptm/subjectobject/tahun_pertama" class="small-box-footer">
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>&nbsp;</h3>
                                <font color="white">
                                    <p>Upload Data LRA</p>
                                </font>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="https://ptm.atrbpn.go.id/ptm/subjectobject/tahun_kedua" class="small-box-footer">
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>&nbsp;</h3>
                                <font color="white">
                                    <p>Monitoring LRA</p>
                                </font>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="https://ptm.atrbpn.go.id/ptm/subjectobject/tahun_ketiga" class="small-box-footer">
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">

                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>&nbsp;</h3>
                                <font color="white">
                                    <p>Lawang Kota</p>
                                </font>
                            </div>
                            <div class="icon">
                                <i class="ion ion-calendar"></i>
                            </div>
                            <a href="https://ptm.atrbpn.go.id/ptm/subjectobject/tahun_ketiga" class="small-box-footer">
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Lawang Kota</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar Dari Aplikasi?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Pilih "Keluar" di bawah jika Anda ingin mengakhiri sesi Anda saat ini.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                    Batal
                                </button>
                                <a class="btn btn-primary" href="logout.php">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>
                <script src="vendor/fontawesome-free/js/all.min.js"></script>
</body>

</html>