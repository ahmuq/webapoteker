
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Data Obat Masuk</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Input Untuk Menambahkan Data Obat Masuk
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Obat</label>
                                                <div class="form-group">
                                                    <input name="namaobat" type="text" class="form-control">
                                                </div>
												<label>Jumlah Obat</label>
												<div class="form-group">
                                                    <input name="jumlah" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Harga Pembelian</label>
                                                    <input name="hargabeli" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Tgl Pembelian</label>
                                                    <input name="tglpembelian" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Subtotal</label>
                                                    <input name="subtotal" type="text" class="form-control">
                                                </div>
									
												<div class="form-group">
                                                    <label>Pemasok</label>
                                                    <input name="pemasok" type="text" class="form-control">
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
								
								$sql = $koneksi->query("insert into obat_masuk (nama, jumlah, harga_beli, tgl_pembelian, subtotal, Pemasok) values('$nm','$jml','$hb','$tgl','$st','$pm')");
								
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=obatmasuk";
										</script>
										
										<?php
								}
								
							
							}
							?>
										
										