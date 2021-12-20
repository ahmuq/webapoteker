<!DOCTYPE html>
<html>
<head>
	<title>APOTEKER PANGGOI COMPANY</title>
</head>
<body>

	<center>

		<h2>CETAK LAPORAN PENJUALAN APOTEK PGC</h2>

	</center>

	<?php 
	include '../config/koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
            <th>Nama Obat</th>
            <th>Harga Jual</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
			<th>Nama Pembeli</th>
			<th>Tgl Pembelian</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tbl_penjualan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama_obat'] ?></td>
			<td><?php echo $data['harga_jual'] ?></td>
			<td><?php echo $data['jumlah'] ?></td>
			<td><?php echo $data['subtotal'] ?></td>
		    <td><?php echo $data['nama_pembeli'] ?></td>
			<td><?php echo $data['tgl_pembelian'] ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>