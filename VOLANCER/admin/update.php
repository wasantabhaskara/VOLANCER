<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$level = $_POST['level'];
 
// update data ke database
mysqli_query($connect,"update tb_user set username='$username', email='$email', no_hp='$no_hp', password='$password', level='$level' where id='$id'");
 
// mengalihkan halaman kembali ke halaman_admin.php
header("location:datapengguna.php");
 
?>