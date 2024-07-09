<?php 
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$jenis = $_POST['jenis'];
$mrek = $_POST['merk'];
$seri = $_POST['seri'];
$tahun_produksi = $_POST['tahun_produksi'];
$ram = $_POST['ram'];
$processor = $_POST['processor'];
$os = $_POST['os'];
$ssd_hdd = $_POST['ssd_hdd'];
// update data ke database
mysqli_query($koneksi,"update inpo_gadget set jenis='$jenis', merk='$mrek', seri ='$seri', tahun_produksi='$tahun_produksi', ram='$ram', processor='$processor', os='$os', ssd_hdd='$ssd_hdd'  where id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:tabel_gadget.php");
?>