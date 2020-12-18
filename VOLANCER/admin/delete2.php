<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_keg = $_GET['id_keg'];
 
 
// menghapus data dari database
mysqli_query($connect,"delete from tb_kegiatan where id_keg='$id_keg'");
 
// mengalihkan halaman kembali ke halaman_admin.php
header("location:datakegiatan.php");
 
?>