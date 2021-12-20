<?php
	include "../config/koneksi.php";
	$idh = $_GET["hapus_id"];

	$sql = $koneksi->query("delete from tbl_penjualan where id_penjualan = '$idh'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=datapenjualan";
	</script>
	
 <?php
 
 }
 
 ?>