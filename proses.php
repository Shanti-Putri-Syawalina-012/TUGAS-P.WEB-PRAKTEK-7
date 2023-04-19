<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="bckg.jpg" style="background-size: cover;">
	<div class="content">
		<header>
			<h1 class="judul" style="text-align: center;">Data Tamu</h1>
			<h2 class="judul" style="text-align: center;">Universitas Pembangunan "Nasional" Veteran Jawa Timur</h2>
		</header>
	</div>
	<table border="1">
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_bukutamu";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (isset($POST['input'])); {
		$id = $_POST['id'];
		echo "<tr><td><b>ID</b></td> <td>$id</td></tr>"."<br>";

		$nama = $_POST['nama'];
		echo "<tr><td><b>NAMA</b></td> <td>$nama</td></tr>"."<br>";

		$email = $_POST['email'];
		echo "<tr><td><b>EMAIL</b></td> <td>$email</td></tr>"."<br>";

		$isi = $_POST['isi']; 
		echo "<tr><td><b>ISI</b></td> <td>$isi</td></tr>"."<br>";
	}

		$sql = "INSERT INTO buku_tamu (ID, NAMA, EMAIL, ISI ) VALUES ('$id', '$nama', '$email', '$isi')";
	
		if (mysqli_query($conn, $sql)) {
	    echo "Success insert isi tabel";
		} else {
	    echo "Error insert isi tabel: " . mysqli_error($conn);
		}
	?>
</body>
</html>