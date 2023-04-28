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

$sql = "INSERT INTO pegawai (id_pegawai, nama, jenis_kelamin, alamat, id_department, divisi, jabatan, gaji) VALUES 
	('101', 'Mark', 'L', 'Jl.Semangka I No.42 RT 03/RW 05', '1', 'Marketing', 'Digital Marketing', '5000000'), 
	('102', 'Lucas', 'L', 'Jl.Kenangan III No.2 RT 05/ RW 04', '2', 'Marketing', 'Digital Marketing', '5000000'), 
	('103', 'Jeno', 'L', 'Jl.Candy IV No.23 RT 04/ RW 06', '3', 'Creative', 'Software Engineer', '7000000'), 
	('104', 'Jennie', 'P', 'Jl. Coachella II No.4 RT 03/ RW 04', '4', 'Creative', 'Designer', '5000000')";
	
if (mysqli_query($conn, $sql)) {
	echo "Data berhasil dimasukkan pada tabel";
} else {
	echo "Data gagal dimasukkan pada tabel: " . $sql . "<br>" . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>