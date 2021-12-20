<?php

		$ide = $_GET["id"];

		$sql2 = $koneksi->query("select * from tabel_obat where id_obat = '$ide'");
 		$tampil = $sql2->fetch_assoc();
		 
 
	?>
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ubah Obat</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Ubah Data
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Obat</label>
                                                <div class="form-group">
                                                    <input name="nama" value="<?php echo $tampil["nama"];?>" class="form-control">
                                                </div>
												<label>Jenis Obat</label>
												<div class="form-group">
                                                    <input name="jenis" value="<?php echo $tampil["jenis"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Stok</label>
                                                    <input name="stok" type="number" value="<?php echo $tampil["stok"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Kategori</label>
                                                    <input name="kategori" value="<?php echo $tampil["kategori"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Harga Beli</label>
                                                    <input name="hargabeli" value="<?php echo $tampil["harga_beli"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Harga Jual</label>
                                                    <input name="hargajual" value="<?php echo $tampil["harga_jual"];?>" class="form-control">
                                                </div>
												<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
											</form>

							<?php
							
							if (isset($_POST['simpan'])) {
								
								$nm= $_POST['nama'];
								$jns= $_POST['jenis'];
								$stk= $_POST['stok'];
								$ktg= $_POST['kategori'];
								$hb= $_POST['hargabeli'];
								$hj= $_POST['hargajual'];
								
								$sql = $koneksi->query("update tabel_obat set nama='$nm', jenis='$jns', stok='$stk', kategori='$ktg', harga_beli='$hb', harga_jual='$hj' where id_obat='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=dataobat";
										</script>
										
										<?php
								}
							
								
								
								else {
									
									$sql = $koneksi->query("update tabel_obat set nama='$nm', jenis='$jns', stok='$stk', kategori='$ktg', harga_beli='$hb', harga_jual='$hj' where id_obat='$ide'");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=dataobat";
										</script>
										
										<?php
								}
							
								}
							
							}
							?>