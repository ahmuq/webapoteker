
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tambah User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Input Untuk Menambahkan Data user
                                </div>
                                <div class="panel-body">


									<form method="POST" enctype="multipart/form-data">
											<label for="">Username</label>
                                                <div class="form-group">
                                                    <input name="username" type="text" class="form-control">
                                                </div>
												<label>Password</label>
												<div class="form-group">
                                                    <input name="password" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Nama</label>
                                                    <input name="nama" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Alamat</label>
                                                    <input name="alamat" type="text" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>No Telepon</label>
                                                    <input name="notelepon" type="number" class="form-control">
                                                </div>
												<label for="">Level</label>
												<div class="form-group">
												<div class="form-line">
														<select name="level" class="form-control show-tick">
															<option value="">-- Pilih Level --</option>
															<option value="admin">Admin</option>
															<option value="apoteker">Apoteker</option>
															<option value="dokter">Dokter</option>
															<option value="gudang">Gudang</option>
															<option value="kasir">Kasir</option>
														</select>
												</div>
												</div>
												<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
											</form>

							<?php
							
							if (isset($_POST['simpan'])) {
								
								$us= $_POST['username'];
								$pwd= $_POST['password'];
								$nm= $_POST['nama'];
								$am= $_POST['alamat'];
								$no= $_POST['notelepon'];
								$lvl= $_POST['level'];
								
								$sql = $koneksi->query("insert into tbl_user (username, password, nama_user, alamat, no_telepon, level) values('$us','$pwd','$nm','$am','$no','$lvl')");
								
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=datauser";
										</script>
										
										<?php
								}
								
							
							}
							?>
										
										