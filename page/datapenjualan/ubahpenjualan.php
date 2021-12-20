<?php

		$ide = $_GET["id"];

		$sql2 = $koneksi->query("select * from tbl_penjualan where id_penjualan = '$ide'");
 		$tampil = $sql2->fetch_assoc();
		 
 
	?>
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ubah Data Penjualan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Ubah Data Penjualan
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Obat</label>
                                                <div class="form-group">
                                                    <input name="namaobat" value="<?php echo $tampil["nama_obat"];?>" class="form-control">
                                                </div>
												<label>Harga Jual</label>
												<div class="form-group">
                                                    <input name="hargajual" value="<?php echo $tampil["harga_jual"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input name="jumlah" type="text" value="<?php echo $tampil["jumlah"];?>" class="form-control">
                                                </div>

												<div class="form-group">
                                                    <label>Subtotal</label>
                                                    <input name="subtotal" value="<?php echo $tampil["subtotal"];?>" class="form-control">
                                                </div>
												
												<div class="form-group">
                                                    <label>Nama Pembeli</label>
                                                    <input name="namapembeli" value="<?php echo $tampil["nama_pembeli"];?>" class="form-control">
                                                </div>

												<div class="form-group">
                                                    <label>Tanggal Pembelian</label>
                                                    <input name="tglpembelian" value="<?php echo $tampil["tgl_pembelian"];?>" class="form-control">
                                                </div>
								
												<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
											</form>

							<?php
							
							if (isset($_POST['simpan'])) {
								
								$nm= $_POST['namaobat'];
								$hj= $_POST['hargajual'];
								$jml= $_POST['jumlah'];
								$st= $_POST['subtotal'];
								$np= $_POST['namapembeli'];
								$tgl= $_POST['tglpembelian'];
								
								$sql = $koneksi->query("update tbl_penjualan set nama_obat='$nm', harga_jual='$hj', jumlah='$jml', subtotal='$st', nama_pembeli='$np', tgl_pembelian='$tgl' where id_penjualan='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=datapenjualan";
										</script>
										
										<?php
								}
							
								
								
								else {
									
									$sql = $koneksi->query("update tbl_penjualan set nama_obat='$nm', harga_jual='$hj', jumlah='$jml', subtotal='$st', nama_pembeli='$np', tgl_pembelian='$tgl' where id_penjualan='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=datapenjualan";
										</script>
										
										<?php
								}
							
								}
							
							}
							?>