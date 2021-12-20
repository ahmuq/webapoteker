<?php

		$ide = $_GET["id"];

		$sql2 = $koneksi->query("select * from obat_masuk where id_pembelian = '$ide'");
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
                                                    <input name="namaobat" value="<?php echo $tampil["nama"];?>" class="form-control">
                                                </div>
												<label>Jumlah</label>
												<div class="form-group">
                                                    <input name="jumlah" value="<?php echo $tampil["jumlah"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Harga Beli</label>
                                                    <input name="hargabeli" type="text" value="<?php echo $tampil["harga_beli"];?>" class="form-control">
                                                </div>

												<div class="form-group">
                                                    <label>Tgl Pembelian</label>
                                                    <input name="tglpembelian" value="<?php echo $tampil["tgl_pembelian"];?>" class="form-control">
                                                </div>
												
												<div class="form-group">
                                                    <label>Subtotal</label>
                                                    <input name="subtotal" value="<?php echo $tampil["subtotal"];?>" class="form-control">
                                                </div>

												<div class="form-group">
                                                    <label>Pemasok</label>
                                                    <input name="pemasok" value="<?php echo $tampil["Pemasok"];?>" class="form-control">
                                                </div>
								
												<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
											</form>

							<?php
							
							if (isset($_POST['simpan'])) {
								
								$nm= $_POST['namaobat'];
								$jml= $_POST['jumlah'];
								$hb= $_POST['hargabeli'];
								$tgl= $_POST['tglpembelian'];
								$st= $_POST['subtotal'];
								$pm= $_POST['pemasok'];
								
								$sql = $koneksi->query("update obat_masuk set nama='$nm', jumlah='$jml', harga_beli='$hb', tgl_pembelian='$tgl', subtotal='$st', Pemasok='$pm' where id_pembelian='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=obatmasuk";
										</script>
										
										<?php
								}
							
								
								
								else {
									
									$sql = $koneksi->query("update obat_masuk set nama='$nm', jumlah='$jml', harga_beli='$hb', tgl_pembelian='$tgl', subtotal='$st', Pemasok='$pm' where id_pembelian='$ide'"); 
								
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