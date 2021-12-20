
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">TAMBAH RESEP</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Input Untuk Menambahkan RESEP
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Pasien</label>
                                                <div class="form-group">
                                                    <input name="namapasien" type="text" class="form-control">
                                                </div>
												<label>Nama Penyakit</label>
												<div class="form-group">
                                                    <input name="namapenyakit" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Obat</label>
                                                    <input name="obat" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Konsumsi</label>
                                                    <input name="konsumsi" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input name="tanggal" type="text" class="form-control">
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
								
								$sql = $koneksi->query("insert into tbl_resep (nama_pasien, nama_penyakit, obat, konsumsi, tanggal) values('$np','$npy','$obt','$kms','$tgl')");
								
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=resep";
										</script>
										
										<?php
								}
								
							
							}
							?>
										
										