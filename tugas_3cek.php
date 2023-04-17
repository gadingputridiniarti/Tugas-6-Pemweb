<?php
if(isset($_POST['nama']) and isset($_POST['tempatlhr']) and isset($_POST['tgllahir']) and isset($_POST['gender']) and isset($_POST['agama'])  and isset($_POST['tlp'])and isset($_POST['email'])and isset($_POST['hobi'])and isset($_POST['alamat']) ){

	$nama = $_POST['nama'];
	$tempatlhr = $_POST['tempatlhr'];
	$tanggallhr = $_POST['tanggallhr'];
	$gender = $_POST['gender'];
	$agama = $_POST['agama'];
	$tlp = $_POST['tlp'];
	$email = $_POST['email'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];
}
	if (empty($nama) or empty($tempatlhr) or empty($tanggalhr) or empty($gender) or empty($agama) or empty($tlp) or empty($email)  or empty($hobi) or empty($alamat) ){
		echo "<script> alert ('Periksa kembali kelengkapan data anda dan Mohon untuk mengisi semua data anda..')</script>";
	}
	else{
		include('tugas_3hasil.php');
	}
?>