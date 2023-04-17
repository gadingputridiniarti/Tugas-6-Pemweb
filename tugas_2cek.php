<?php
if(isset($_GET['nama'])and isset($_GET['email'])){
	$nama = $_GET['nama'];
	$email = $_GET['email'];
}
	if (empty($nama) and empty($email)){
		echo "<script> alert ('Periksa kembali kelengkapan data anda dan Mohon untuk mengisi semua data anda..')</script>";
	}
	else if(empty($nama)) {
		echo "<script> alert ('Mohon untuk mengisi nama anda..')</script>";
	}
	else if(empty($email)){
		echo "<script> alert ('Mohon untuk mengisi email anda..')</script>";
	}
	else{
		include('tugas_2hasil.php');
	}
?>