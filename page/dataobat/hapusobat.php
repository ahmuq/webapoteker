<?php
	include "../config/koneksi.php";
	$idh = $_GET["hapus_id"];

	$sql = $koneksi->query("delete from tabel_obat where id_obat = '$idh'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=dataobat";
	</script>
	
 <?php
 
 }
 
 ?>