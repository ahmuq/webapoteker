<?php
	include "../config/koneksi.php";
	$idh = $_GET["hapus_id"];

	$sql = $koneksi->query("delete from tbl_resep where id_resep = '$idh'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=resep";
	</script>
	
 <?php
 
 }
 
 ?>