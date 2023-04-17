<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
<?php
	$nama = $_GET['nama'];
	$email = $_GET['email'];
?>
<table width="300" cellpadding="5" cellspacing="5" bgcolor="Beige" align="center" valign="middle" >
	<tr>
				<br> <br> <br> <br> <br> <br> 
			</tr>
	<tr>
		<h1><center>L O G I N</center></h1>
	</tr>
	<tr>
		<td width="100">Nama</td>
		<td><?php echo $nama?></td>
	</tr>
	<tr>
		<td width="100">email</td>
		<td><?php echo $email?></td>
	</tr>
	<tr>
		<br>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<?php
			date_default_timezone_set('Asia/Jakarta');
			echo date ("D, d M Y -  h:i:s a");			
		?>
		</td>
	</tr>
</table>
	
</body>
</html>