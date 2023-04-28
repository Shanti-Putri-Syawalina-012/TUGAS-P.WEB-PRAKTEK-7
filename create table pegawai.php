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
$sql = "CREATE TABLE pegawai (
id_pegawai INT (5) DEFAULT NULL ,
nama VARCHAR (30) DEFAULT NULL,
jenis_kelamin ENUM('L','P') DEFAULT NULL,
alamat VARCHAR (100) DEFAULT NULL,
id_department INT (3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
divisi VARCHAR (30) DEFAULT NULL,
jabatan VARCHAR(20) DEFAULT NULL,
gaji INT(10) DEFAULT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel pegawai berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>