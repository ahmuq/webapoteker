<?php
	include "../config/koneksi.php";
	$idh = $_GET["hapus_id"];

	$sql = $koneksi->query("delete from tbl_user where id = '$idh'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=datauser";
	</script>
	
 <?php
 
 }
 
 ?>