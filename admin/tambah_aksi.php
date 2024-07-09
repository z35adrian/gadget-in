<?php 
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$jenis = $_POST['jenis'];
$mrek = $_POST['merk'];
$seri = $_POST['seri'];
$tahun_produksi = $_POST['tahun_produksi'];
$ram = $_POST['ram'];
$processor = $_POST['processor'];
$os = $_POST['os'];
$ssd_hdd = $_POST['ssd_hdd'];
// menginput data ke database
mysqli_query($koneksi,"insert into inpo_gadget values('','$jenis','$mrek','$seri','$tahun_produksi','$ram','$processor','$os', '$ssd_hdd')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>