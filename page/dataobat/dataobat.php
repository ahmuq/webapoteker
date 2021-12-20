<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">DATA OBAT</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    BERIKUT DATA OBAT YANG TERSEDIA
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Obat</th>
                                                    <th>Jenis Obat</th>
                                                    <th>Stok Obat</th>
                                                    <th>Kategori Obat</th>
													<th>Harga Beli</th>
													<th>Harga Jual</th>
													<th>Pengaturan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
								<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tabel_obat");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['nama'] ?></td>
											<td><?php echo $data['jenis'] ?></td>
											<td><?php echo $data['stok'] ?></td>
											<td><?php echo $data['kategori'] ?></td>
											<td><?php echo $data['harga_beli'] ?></td>
											<td><?php echo $data['harga_jual'] ?></td>
											<td>
											<a href="?page=dataobat&aksi=ubahobat&id=<?php echo $data['id_obat'] ?>" class="btn btn-success" >Ubah</a>
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=dataobat&aksi=hapusobat&hapus_id=<?php echo $data['id_obat'] ?>" class="btn btn-danger" >Hapus</a>
											</td>
                                        </tr>
									<?php }?>

			
		</tbody>
		
	</table>
	<a href="?page=dataobat&aksi=tambahdataobat" class="btn btn-primary" >Tambah</a>
</body>
</html>