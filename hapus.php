<?php
$conn = mysqli_connect("localhost","root","","db_pegawai"); // masukan konekasi DB

//menangkap data id yang dikirim dari url
$id_pegawai = $_GET['id_pegawai'];

// menghapus data dari database
$delete = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";
 
if (mysqli_query($conn, $delete)) {
	echo "<font color=green>OK, 1 data berhasil didelete.</font>";
	header("location:tampilan.php");
} else {
	echo "Gagal delete data!: " . $delete . "<br>" . mysqli_error($conn);
}

?>