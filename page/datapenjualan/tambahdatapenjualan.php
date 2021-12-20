
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah Data Penjualan</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Input Untuk Menambahkan Data Penjualan
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Nama Obat</label>
                                                <div class="form-group">
                                                    <input name="namaobat" type="text" class="form-control">
                                                </div>
												<label>Harga Jual</label>
												<div class="form-group">
                                                    <input name="hargajual" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input name="jumlah" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Subtotal</label>
                                                    <input name="subtotal" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Nama Pembeli</label>
                                                    <input name="namapembeli" type="text" class="form-control">
                                                </div>
									
												<div class="form-group">
                                                    <label>Tgl Pembelian</label>
                                                    <input name="tglpembelian" type="text" class="form-control">
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
								
								$sql = $koneksi->query("insert into tbl_penjualan (nama_obat, harga_jual, jumlah, subtotal, nama_pembeli, tgl_pembelian) values('$nm','$hj','$jml','$st','$np','$tgl')");
								
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=datapenjualan";
										</script>
										
										<?php
								}
								
							
							}
							?>
										
										