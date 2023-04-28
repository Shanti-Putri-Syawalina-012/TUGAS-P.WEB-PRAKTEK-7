<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE liga (
kode CHAR(3) NOT NULL,
negara VARCHAR(30) NULL,
champion INT(3)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel liga berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>
