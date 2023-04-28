<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<h2>FORM EDIT DATA PEGAWAI</h2>
	<a href="tampilan.php">BACK</a>

	<?php
	$conn = mysqli_connect("localhost","root","","db_pegawai");
	$id_pegawai = $_GET['id_pegawai']; // ambil dari ID_PEGAWAI
	$data = mysqli_query($conn, "select * from department inner join pegawai where id_pegawai='$id_pegawai'");
	$d = mysqli_fetch_array($data);
	?>
	<form method="post" action="update.php" >
		<table>
			<tr>
				<td>Id_Pegawai</td>
				<td>
				<input type="hidden" name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>">
				<input type="number" name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
				<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jk</td>
				<td>
					<input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<textarea cols="20" rows="5" name="alamat" value="<?php echo $d['alamat']; ?>"></textarea>
				</td>
			</tr>
			<tr>
				<td>Id_Department</td>
				<td>
					<input type="number" name="id_department" value="<?php echo $d['id_department']; ?>">
				</td>
			</tr>
			<tr>
				<td>Divisi</td>
				<td>
					<input type="text" name="divisi" value="<?php echo $d['divisi']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>
					<input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>">
				</td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td>
					<input type="number" name="gaji" value="<?php echo $d['gaji']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="SIMPAN">
				</td>
			</tr>		
		</table>
	</form>
	<?php
	?>
</body>
</html>