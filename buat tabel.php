<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_bukutamu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE buku_tamu (
ID INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR (200) NOT NULL,
EMAIL VARCHAR (50) NOT NULL,
ISI TEXT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel buku_tamu berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
?>
