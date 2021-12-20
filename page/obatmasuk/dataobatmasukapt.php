<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">OBAT MASUK</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    OBAT MASUK
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga Beli</th>
                                                    <th>Tgl Pembelian</th>
													<th>Subtotal</th>
													<th>Pemasok</th>
                                                </tr>
                                            </thead>
                                            <tbody>
								<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from obat_masuk");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['nama'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['harga_beli'] ?></td>
											<td><?php echo $data['tgl_pembelian'] ?></td>
											<td><?php echo $data['subtotal'] ?></td>
											<td><?php echo $data['Pemasok'] ?></td>
											<td>
											</td>
                                        </tr>
									<?php }?>

			
		</tbody>
		
	</table>
</body>
</html>