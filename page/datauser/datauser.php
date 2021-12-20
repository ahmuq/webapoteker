<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">DATA USER</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    BERIKUT DATA USER
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Nama</th>
                                                    <th>Level</th>
													<th>Alamat</th>
													<th>No Telepon</th>
													<th>Pengaturan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
								<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tbl_user");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['username'] ?></td>
											<td><?php echo $data['password'] ?></td>
											<td><?php echo $data['nama_user'] ?></td>
											<td><?php echo $data['level'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<td><?php echo $data['no_telepon'] ?></td>
											<td>
											<a href="?page=datauser&aksi=ubahuser&id=<?php echo $data['id'] ?>" class="btn btn-success" >Ubah</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=datauser&aksi=hapususer&hapus_id=<?php echo $data['id'] ?>" class="btn btn-danger" >Hapus</a>
											</td>
                                        </tr>
									<?php }?>

			
		</tbody>
		
	</table>
	<a href="?page=datauser&aksi=tambahdatauser" class="btn btn-primary" >Tambah</a>
</body>
</html>