<?php
	include "../config/koneksi.php";
	$idh = $_GET["hapus_id"];

	$sql = $koneksi->query("delete from obat_masuk where id_pembelian = '$idh'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=obatmasuk";
	</script>
	
 <?php
 
 }
 
 ?>