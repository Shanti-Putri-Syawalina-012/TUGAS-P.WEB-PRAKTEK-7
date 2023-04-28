<!DOCTYPE html>
<html>
<head>
	<title>DATA PEGAWAI</title>
</head>
<body>
	<h2>DATA PEGAWAI</h2>
	<a href="tambah.php">TAMBAH DATA</a>
	<br>
	<br>
	<table border="1">
		<tr>
			<th>Id_Pegawai</th>
			<th>Nama</th>
			<th>Jk</th>
			<th>Alamat</th>
			<th>Id_Department</th>
			<th>Divisi</th>
			<th>Jabatan</th>
			<th>Gaji</th>
			<th>Opsi</th>
		</tr>

		<?php
		$conn = mysqli_connect("localhost","root","","db_pegawai"); 
		$sql = "SELECT pegawai. id_pegawai, pegawai. nama, pegawai. jenis_kelamin, pegawai. alamat, department. id_department, pegawai. divisi, pegawai. jabatan, pegawai. gaji
		FROM department INNER JOIN pegawai
		WHERE department. id_department = pegawai. id_department";
		$data = mysqli_query($conn, $sql);
		while ($d = mysqli_fetch_array($data)){
		?>

		<tr>
			<td><?php echo $d['id_pegawai']?></td>
			<td><?php echo $d['nama']?></td>
			<td><?php echo $d['jenis_kelamin']?></td>
			<td><?php echo $d['alamat']?></td>
			<td><?php echo $d['id_department']?></td>
			<td><?php echo $d['divisi']?></td>
			<td><?php echo $d['jabatan']?></td>
			<td><?php echo $d['gaji']?></td>
			<td>
				<a href="edit.php?id_pegawai=<?php echo $d['id_pegawai']; ?>">EDIT</a>
				<a href="hapus.php?id_pegawai=<?php echo $d['id_pegawai']; ?>">HAPUS</a>
			</td>
		</tr>
		
		<?php
		}
		?>
	</table>
</body>
</html>