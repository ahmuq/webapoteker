<?php 
error_reporting(0);
    include 'config/koneksi.php';
	session_start();

    if($_SESSION['user']==""){
		header("location:login.php?logindahulu");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>APOTEKER PANGGOI COMPANY

        </title>

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">APOTEK PGC</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['user']; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                                <!-- /.nav-second-level -->
                            </li>

                            
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> Menu<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                <?php if ($_SESSION['admin'] || $_SESSION['apoteker'] || $_SESSION['gudang'] ) {
                                ?>
                                <li>
                                    <a href="?page=dataobat">Data Obat</a>
                                </li>
                                <?php } ?>

                                <?php if ($_SESSION['kasir'] ) {
                                ?>
                                <li>
                                    <a href="?page=dataobat2">Data Obat</a>
                                </li>
                                <?php } ?>

                                <?php if ($_SESSION['admin'] || $_SESSION['kasir']) {
                                ?>
                                <li>
                                    <a href="?page=datapenjualan">Data Penjualan</a>
                                </li>
                                <?php } ?>


                                <?php if ($_SESSION['gudang'] || $_SESSION['admin'] ) {
                                ?>
                                <li>
                                    <a href="?page=obatmasuk">Obat Masuk</a>
                                </li>
                                <?php } ?>

                                

                                <?php if ($_SESSION['apoteker']) {
                                ?>
                                <li>
                                    <a href="?page=obatmasuk2">Obat Masuk</a>
                                </li>
                                <?php } ?>

                                <?php if ($_SESSION['kasir']) {
                                ?>
                                <li>
                                    <a href="?page=resep2">Resep</a>
                                </li>
                                <?php } ?>

                                <?php if ($_SESSION['owner']) {
                                ?>
                                <li>
                                    <a href="?page=laporan">Cetak Laporan Penjualan</a>
                                </li>
                                <?php } ?>

                                <?php if ($_SESSION['dokter']) {
                                ?>
                                <li>
                                    <a href="?page=datapenjualan2">Data Penjualan</a>
                                </li>
                                <?php } ?>

                                <?php if ($_SESSION['dokter'] || $_SESSION['admin'] ) {
                                ?>
                                    <li>
                                    <a href="?page=resep">Resep</a>
                                    </li>
                                <?php } ?>
                                </li>
                            </ul>
    

                            <?php if ($_SESSION['admin'] ) {
                                ?>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> Management User<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?page=datauser">Data User</a>
                                    </li>
                                </ul>

                            <?php } ?>
                            
                            <li>
                                <a onclick="return confirm('Apakah anda yakin akan logout?')" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                            </li>

                                <!-- /.nav-second-level -->
                            </li>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                <section class="content">
	
	
    <?php
     $page = $_GET['page'];
     $aksi = $_GET['aksi'];
     
     
    
     
     
     if ($page == "datauser") {
         if ($aksi == "") {
             include "page/datauser/datauser.php";
         }
          if ($aksi == "ubahuser") {
             include "page/datauser/ubahuser.php";
         }
          if ($aksi == "tambahdatauser") {
             include "page/datauser/tambahdatauser.php";
         }
         
          if ($aksi == "hapususer") {
             include "page/datauser/hapususer.php";
         }
     }
     
      
     if ($page == "datapenjualan") {
         if ($aksi == "") {
             include "page/datapenjualan/datapenjualan.php";
         }
          if ($aksi == "ubahpenjualan") {
             include "page/datapenjualan/ubahpenjualan.php";
         }
          if ($aksi == "tambahdatapenjualan") {
             include "page/datapenjualan/tambahdatapenjualan.php";
         }
         
          if ($aksi == "hapuspenjualan") {
             include "page/datapenjualan/hapuspenjualan.php";
         }
     }
     
       if ($page == "obatmasuk") {
         if ($aksi == "") {
             include "page/obatmasuk/dataobatmasuk.php";
         }
          if ($aksi == "ubahobatmasuk") {
             include "page/obatmasuk/ubahobatmasuk.php";
         }
          if ($aksi == "tambahdataobatmasuk") {
             include "page/obatmasuk/tambahdataobatmasuk.php";
         }
         
          if ($aksi == "hapusobatmasuk") {
             include "page/obatmasuk/hapusobatmasuk.php";
         }
     }

     if ($page == "obatmasuk2") {
        if ($aksi == "") {
            include "page/obatmasuk/dataobatmasukapt.php";
        }
     }

     if ($page == "resep2") {
        if ($aksi == "") {
            include "page/resep/resepapt.php";
        }
     }

     if ($page == "datapenjualan2") {
        if ($aksi == "") {
            include "page/datapenjualan/datapenjualandkt.php";
        }
     }

     if ($page == "dataobat2") {
        if ($aksi == "") {
            include "page/dataobat/dataobatksr.php";
        }
     }


         if ($page == "dataobat") {
         if ($aksi == "") {
             include "page/dataobat/dataobat.php";
         }
          if ($aksi == "tambahdataobat") {
             include "page/dataobat/tambahdataobat.php";
         }
          if ($aksi == "ubahobat") {
             include "page/dataobat/ubahobat.php";
         }
         
          if ($aksi == "hapusobat") {
             include "page/dataobat/hapusobat.php";
         }
     }


      if ($page == "resep") {
         if ($aksi == "") {
             include "page/resep/resep.php";
         }
          if ($aksi == "ubahresep") {
             include "page/resep/ubahresep.php";
         }
          if ($aksi == "tambahresep") {
             include "page/resep/tambahresep.php";
         }
         
          if ($aksi == "hapusresep") {
             include "page/resep/hapusresep.php";
         }
         
      }
      
      if ($page == "laporan") {
        if ($aksi == "") {
            include "page/laporan/laporanpenjualan.php";
        }
        if ($aksi == "cetakpenjualan") {
            include "page/laporan/cetakpenjualan.php";
        }
        
     }
      
      
      

     
       
     if ($page == "") {
         include "home.php";
     }
     if ($page == "home") {
         include "home.php";
     }
     ?>


</section>


</div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="assets/js/startmin.js"></script>

    </body>
</html>
