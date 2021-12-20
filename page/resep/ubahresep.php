<?php

		$ide = $_GET["id"];

		$sql2 = $koneksi->query("select * from tbl_resep where id_resep = '$ide'");
 		$tampil = $sql2->fetch_assoc();
		 
 
	?>
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ubah Resep</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Ubah Resep
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Pasien</label>
                                                <div class="form-group">
                                                    <input name="namapasien" value="<?php echo $tampil["nama_pasien"];?>" class="form-control">
                                                </div>
												<label>Nama Penyakit</label>
												<div class="form-group">
                                                    <input name="namapenyakit" value="<?php echo $tampil["nama_penyakit"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Obat</label>
                                                    <input name="obat" type="text" value="<?php echo $tampil["obat"];?>" class="form-control">
                                                </div>

												<div class="form-group">
                                                    <label>Konsumsi</label>
                                                    <input name="konsumsi" value="<?php echo $tampil["konsumsi"];?>" class="form-control">
                                                </div>
												
												<div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input name="tanggal" value="<?php echo $tampil["tanggal"];?>" class="form-control">
                                                </div>

								
												<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
											</form>

							<?php
							
							if (isset($_POST['simpan'])) {
								
								$np= $_POST['namapasien'];
								$npy= $_POST['namapenyakit'];
								$obt= $_POST['obat'];
								$kms= $_POST['konsumsi'];
								$tgl= $_POST['tanggal'];

								
								$sql = $koneksi->query("update tbl_resep set nama_pasien='$np', nama_penyakit='$npy', obat='$obt', konsumsi='$kms', tanggal='$tgl' where id_resep='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=resep";
										</script>
										
										<?php
								}
							
								
								
								else {
									
									$sql = $koneksi->query("update tbl_resep set nama_pasien='$np', nama_penyakit='$npy', obat='$obt', konsumsi='$kms', tanggal='$tgl' where id_resep='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=resep";
										</script>
										
										<?php
								}
							
								}
							
							}
							?>