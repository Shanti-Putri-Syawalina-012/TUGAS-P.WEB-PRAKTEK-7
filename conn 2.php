<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Koneksi Database MySQL</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","db_pegawai");

	//melakukan join antara tabel department dengan pegawai
	$join = "select * from pegawai join department on department.id_department = pegawai.id_department";
	$select = mysqli_query($conn, $join);

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: ". mysqli_connect_error();
			exit();
	}
	?>
</body>
</html>