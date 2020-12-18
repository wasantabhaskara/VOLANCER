<?php
//menghubungkan dengan koneksi
include 'koneksi.php';

//setelah klik
if(isset($_POST['register'])){

    //menampung value
    $username = mysqli_real_escape_string($connect, trim($_POST['username']));
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
    $no_hp = mysqli_real_escape_string($connect, trim($_POST['nohp']));
    $password = mysqli_real_escape_string($connect, trim($_POST['password']));
    $pwconfirm = mysqli_real_escape_string($connect, trim($_POST['pwconfirm']));

    // cek apakah konfirmasi password benar?
    if($password != $pwconfirm){
        //redirect
        header("location:daftar.php?pesan=konfirm_gagal");
    } else{
        // cek username yang sudah digunakan
        $data = mysqli_query($connect,"select * from tb_user where username='$username'");
        $cek = mysqli_num_rows($data);

        if($cek > 0){
            header("location:daftar.php?pesan=gagal");
        }else{
            // proses insert ke database
            $sql = '
            insert into tb_user
            values(
                "",
                "'.$username.'",
                "'.$email.'",
                "'.$no_hp.'",
                "'.$password.'",
                "user"
                )';
            mysqli_query($connect, $sql);
            header("location:masuk.php?pesan=berhasil");
        }
    }
  }
?>