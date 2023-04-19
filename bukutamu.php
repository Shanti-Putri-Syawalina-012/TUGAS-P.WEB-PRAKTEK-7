<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body background="bckg.jpg" style="background-size: cover;">
	<center><h1 ><font style="color:white">ISI DATA BUKU TAMU</h1></center></font>
	<form method="POST" action="proses.php" name="input">
		<table cellpadding="2" cellspacing="4">
			<tr>
				<td>
					<strong><font style="color:white">ID</font></strong>
				</td>
				<td>
					<input type="text" name="id" size="20" >
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">NAMA</font></strong>
				</td>
				<td>
					<input type="text" name="nama" size="20">
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">EMAIL</font></strong>
				</td>
				<td>
					<input type="text" name="email" size="20">
				</td>
			</tr>

			<tr>
				<td>
					<strong><font style="color:white">ISI</font></strong>
				</td>
				<td>
					<textarea cols="20" rows="5" name="isi"></textarea>
				</td>
			</tr>

			<tr>
				<td><input type="submit" name="btnkirim" value="upload"></td>
				<td><input type="reset" name="btnreset" value="reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>