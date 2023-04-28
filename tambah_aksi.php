<?php
$conn = mysqli_connect("localhost","root","","db_pegawai"); 
$id_pegawai = $_POST['id_pegawai'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$id_department=$_POST['id_department'];
$divisi=$_POST['divisi'];
$jabatan=$_POST['jabatan'];
$gaji=$_POST['gaji'];

//Proses query update
$add= "INSERT INTO pegawai SET id_pegawai='$id_pegawai', nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', id_department = '$id_department', divisi = '$divisi', jabatan = '$jabatan', gaji = '$gaji'";

if (mysqli_query($conn, $add)) {
	echo "<font color=green>OK, 1 data berhasil ditambah.</font>";
	header("location:tampilan.php");
} else {
	echo "Gagal tambah data!: " . $add . "<br>" . mysqli_error($conn);
}
?>