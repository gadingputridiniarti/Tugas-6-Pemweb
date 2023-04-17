<html>
<head>
	<title>Tugas 1</title>
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
	<form method="GET" action="tugas_1get.php">
		<table width="400" cellpadding="10" cellspacing="10" bgcolor="PowderBlue" align="center" >
			<tr>
				<br> <br> <br> <br> <br> <br> 
			</tr>
			<tr>
				<h1><center>Form Login</center></h1>
			</tr>
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>