<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">RESEP</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    RESEP
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pasien</th>
                                                    <th>Nama Penyakit</th>
                                                    <th>Obat</th>
                                                    <th>Konsumsi</th>
													<th>Tanggal</th>
													<th>Pengaturan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
								<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tbl_resep");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['nama_pasien'] ?></td>
											<td><?php echo $data['nama_penyakit'] ?></td>
											<td><?php echo $data['obat'] ?></td>
											<td><?php echo $data['konsumsi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td>
											<a href="?page=resep&aksi=ubahresep&id=<?php echo $data['id_resep'] ?>" class="btn btn-success" >Ubah</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=resep&aksi=hapusresep&hapus_id=<?php echo $data['id_resep'] ?>" class="btn btn-danger" >Hapus</a>
											</td>
                                        </tr>
									<?php }?>

			
		</tbody>
		
	</table>
	<a href="?page=resep&aksi=tambahresep" class="btn btn-primary" >Tambah</a>
</body>
</html>