<?php 
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];
// update data ke database
mysqli_query($koneksi,"update data_operator set nama='$nama', jenis_kelamin='$jenis_kelamin', username ='$username', password='$password' where id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:tabel_operator.php");
?>