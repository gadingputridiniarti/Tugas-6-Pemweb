<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3</title>
</head>
<style type="text/css">
	body{
		font-family: times new roman;
	}
	table{
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		border-color: black;
	}
</style>
<body>
<?php
	$nama = $_POST['nama'];
	$tempatlhr = $_POST['tempatlhr'];
	$tanggallhr = $_POST['tanggallhr'];
	$gender = $_POST['gender'];
	$agama = $_POST['agama'];
	$tlp = $_POST['tlp'];
	$email = $_POST['email'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];
	$foto = $_POST['foto'];
?>
<table width="400" cellpadding="8" cellspacing="3" bgcolor="LightSteelBlue" align="center" >
	<tr>
		<h1><center>B I O D A T A</center></h1>
	</tr>
	<tr>
	<td colspan="2" align="center">
		<?php if ($foto) { ?>
			<img src="<?php echo htmlspecialchars($foto); ?>" width="100">
		<?php } else { ?>
			<img src="028.png" width="100">
		<?php } ?>
	</td>
	</tr>
			
	<tr>
		<td width="200">Nama</td>
		<td><?php echo $nama?></td>
	</tr>
	<tr>
		<td width="200">Tempat Lahir</td>
		<td><?php echo $tempatlhr?></td>
	</tr>
	<tr>
		<td width="200">Tanggal Lahir</td>
		<td><?php echo $tanggallhr?></td>
	</tr>
	<tr>
		<td width="200">Jenis Kelamin</td>
		<td><?php echo $gender?></td>
	</tr>
	<tr>
		<td width="200">Agama</td>
		<td><?php echo $agama?></td>
	</tr>
	<tr>
		<td width="200">Telepon</td>
		<td><?php echo $tlp?></td>
	</tr>
	<tr>
		<td width="200">Email</td>
		<td><?php echo $email?></td>
	</tr>
	<tr>
		<td width="200">Hobi</td>
		<td><?php echo $hobi?></td>
	</tr>
	<tr>
		<td width="200">Alamat</td>
		<td><?php echo $alamat?></td>
	</tr>

	
</table>
</body>
</html>