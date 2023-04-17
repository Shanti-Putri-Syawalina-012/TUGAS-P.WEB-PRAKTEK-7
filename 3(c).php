<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//Check connection
	if (!$conn) {
		die("connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT kode, negara, champion FROM liga";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "kode: " . $row["kode"]."-Negara: ".$row["negara"]." ".$row["champion"]."<br>";
		}
	} else {
		echo "0 result";
	}

	// menutup koneksi ke database
	mysqli_close($conn);
  ?>
</body>
</html>