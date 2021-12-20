
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Obat</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Input Untuk Menamahkan Data Obat
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Obat</label>
                                                <div class="form-group">
                                                    <input name="nama" type="text" class="form-control">
                                                </div>
												<label>Jenis Obat</label>
												<div class="form-group">
                                                    <input name="jenis" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Stok</label>
                                                    <input name="stok" type="number" value="<?php echo $tampil["stok"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Kategori</label>
                                                    <input name="kategori" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Harga Beli</label>
                                                    <input name="hargabeli" type="number" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Harga Jual</label>
                                                    <input name="hargajual" type="number" class="form-control">
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
								
								$sql = $koneksi->query("insert into tabel_obat (nama, jenis, stok, kategori, harga_beli, harga_jual) values('$nm','$jns','$stk','$ktg','$hb','$hj')");
								
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=dataobat";
										</script>
										
										<?php
								}
								
							
							}
							?>
										
										