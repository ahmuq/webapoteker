<?php 

session_start();

include 'config/koneksi.php';

$us = $_POST['username'];
$pw = $_POST['password'];


$login = mysqli_query($koneksi,"select * from tbl_user where username='$us' and password='$pw'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['user'] = $data['username'];
		$_SESSION['admin'] = $data['id'];
		header("location:index.php");

	}else if($data['level']=="apoteker"){
		$_SESSION['user'] = $data['username'];
		$_SESSION['apoteker'] = $data['id'];
		header("location:index.php");

	}else if($data['level']=="gudang"){
		$_SESSION['user'] = $data['username'];
		$_SESSION['gudang'] = $data['id'];
		header("location:index.php");

	}else if($data['level']=="dokter"){
		$_SESSION['user'] = $data['username'];
		$_SESSION['dokter'] = $data['id'];
		header("location:index.php");

	}else if($data['level']=="kasir"){
		$_SESSION['user'] = $data['username'];
		$_SESSION['kasir'] = $data['id'];
		header("location:index.php");

	}else if($data['level']=="owner"){
		$_SESSION['user'] = $data['username'];
		$_SESSION['owner'] = $data['id'];
		header("location:index.php");

	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>