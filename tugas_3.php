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
	<form method="POST" action="tugas_3hasil.php">
		<table width="500" cellpadding="8" cellspacing="3" bgcolor="LightSteelBlue" align="center">
			<tr>
				<h1><center>B I O D A T A</center></h1>
			</tr>
			<tr>
				<td width="200">Nama</td>
				<td><input type="text" name="nama" ></td>
			</tr>
			<tr>
				<td width="200">Tempat Lahir</td>
				<td><input type="text" name="tempatlhr"></td>
			</tr>
			<tr>
				<td width="200">Tanggal Lahir</td>
				<td><input type="date" name="tanggallhr"></td>
			</tr>
			<tr>
				<td width="200">Jenis Kelamin</td>
				<td><input type="radio" name="gender" value="Laki-laki"> Laki-laki  <input type="radio" name="gender" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td valign="top" width="200">Agama</td>
				<td><input type="radio" name="agama" value="Islam"> Islam <br><input type="radio" name="agama" value="Protestan"> Protestan <br><input type="radio" name="agama" value="Katolik"> Katolik <br><input type="radio" name="agama" value="Hindu"> Hindu <br><input type="radio" name="agama" value="Buddha"> Buddha</td>
			</tr>
			<tr>
				<td width="200">Telepon</td>
				<td><input type="tel" name="tlp"></td>
			</tr>
			<tr>
				<td width="200">Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td width="200">Hobi</td>
				<td><input type="textarea" name="hobi"></td>
			</tr>
			<tr>
				<td width="200">Alamat</td>
				<td><textarea name="alamat" cols="20" rows="3" align="center"></textarea></td>
			</tr>
			<tr>
				<td width="200">Upload Foto</td>
				<td><input type="file" name="foto" accept="image/png, image/jpg, image/jpeg"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnLogin" value="Save">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>