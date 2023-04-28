<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}  

$sql = "INSERT INTO department (id_department, level) VALUES 
	('1', 'Manager'), 
	('2', 'Staf'), 
	('3', 'Staf'), 
	('4', 'Staf')";
	
if (mysqli_query($conn, $sql)) {
	echo "Data berhasil dimasukkan pada tabel";
} else {
	echo "Data gagal dimasukkan pada tabel: " . $sql . "<br>" . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>