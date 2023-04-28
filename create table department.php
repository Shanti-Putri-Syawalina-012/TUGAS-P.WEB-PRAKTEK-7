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

// Create table
$sql = "CREATE TABLE department (
id_department INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
level VARCHAR (10) DEFAULT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel department berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>