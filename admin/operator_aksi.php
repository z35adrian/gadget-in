<?php 
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];
// menginput data ke database
mysqli_query($koneksi,"insert into data_operator values('','$nama','$jenis_kelamin','$username','$password')");
// mengalihkan halaman kembali ke index.php
header("location:tabel_operator.php");
?>