<?php

		$ide = $_GET["id"];

		$sql2 = $koneksi->query("select * from tbl_user where id = '$ide'");
 		$tampil = $sql2->fetch_assoc();
		 
 
	?>
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ubah User</h1>
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
											<label for="">Username</label>
                                                <div class="form-group">
                                                    <input name="username" value="<?php echo $tampil["username"];?>" class="form-control">
                                                </div>
												<label>Password</label>
												<div class="form-group">
                                                    <input name="password" value="<?php echo $tampil["password"];?>" class="form-control">
                                                </div>
												<div class="form-group">
                                                    <label>Nama</label>
                                                    <input name="nama" type="text" value="<?php echo $tampil["nama_user"];?>" class="form-control">
                                                </div>

												<div class="form-group">
                                                    <label>Alamat</label>
                                                    <input name="alamat" value="<?php echo $tampil["alamat"];?>" class="form-control">
                                                </div>
												
												<div class="form-group">
                                                    <label>No telepon</label>
                                                    <input name="notelepon" value="<?php echo $tampil["no_telepon"];?>" class="form-control">
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
								
								$sql = $koneksi->query("update tbl_user set username='$us', password='$pwd', nama_user='$nm', alamat='$am', no_telepon='$no', level='$lvl' where id='$ide'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=datauser";
										</script>
										
										<?php
								}
							
								
								
								else {
									
									$sql = $koneksi->query("update tbl_user set username='$us', password='$pwd', nama_user='$nm', alamat='$am', no_telepon='$no', level='$lvl' where id='$ide'");  
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=datauser";
										</script>
										
										<?php
								}
							
								}
							
							}
							?>