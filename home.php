<?php 
    include 'config/koneksi.php';

    $data_penjualan = mysqli_query($koneksi,"SELECT * FROM tbl_penjualan");
    $jumlah_penjualan = mysqli_num_rows($data_penjualan);

    $data_user = mysqli_query($koneksi,"SELECT * FROM tbl_user");
    $jumlah_user = mysqli_num_rows($data_user);

    $data_obat = mysqli_query($koneksi,"SELECT * FROM tabel_obat");
    $jumlah_obat = mysqli_num_rows($data_obat);

    $obat_masuk = mysqli_query($koneksi,"SELECT * FROM obat_masuk");
    $jumlahobatmasuk = mysqli_num_rows($obat_masuk);
?>
 ?>
<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><b><?php echo $jumlah_obat; ?></div>
                                            <div>Data Obat</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $jumlah_user; ?></div>
                                            <div>Jumlah User</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $jumlah_penjualan; ?></div>
                                            <div>Total Penjualan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $jumlahobatmasuk; ?></div>
                                            <div>Total Obat Masuk</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>