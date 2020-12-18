<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_keg = $_POST['id_keg'];
$judul_keg = $_POST['judul_keg'];
$kat_keg = $_POST['kat_keg'];
$des_keg = $_POST['des_keg'];
$tgl_keg = $_POST['tgl_keg'];
$tempat_keg = $_POST['tempat_keg'];
$email_keg = $_POST['email_keg'];
$nama_file = $_POST['nama_file'];
 
// update data ke database
mysqli_query($connect,"update tb_kegiatan set judul_keg='$judul_keg', kat_keg='$kat_keg', des_keg='$des_keg', tgl_keg='$tgl_keg', tempat_keg='$tempat_keg', email_keg='$email_keg' where id_keg='$id_keg'");
 
// mengalihkan halaman kembali ke halaman_admin.php
header("location:datakegiatan.php");
 
?>