<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">DATA PENJUALAN</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    BERIKUT DATA PENJUALAn
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Obat</th>
                                                    <th>Harga Jual</th>
                                                    <th>Jumlah</th>
                                                    <th>Subtotal</th>
													<th>Nama Pembeli</th>
													<th>Tgl Pembelian</th>
                                                </tr>
                                            </thead>
                                            <tbody>
								<?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from tbl_penjualan");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['nama_obat'] ?></td>
											<td><?php echo $data['harga_jual'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['subtotal'] ?></td>
											<td><?php echo $data['nama_pembeli'] ?></td>
											<td><?php echo $data['tgl_pembelian'] ?></td>
											<td>
											</td>
                                        </tr>
									<?php }?>

			
		</tbody>
		
	</table>
</body>
</html>