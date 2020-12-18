<?php 
    include '../koneksi.php';
    
		if(isset($_POST['upload'])){

      //menampung value
      $judul = mysqli_real_escape_string($connect, trim($_POST['judul']));
      $kategori = mysqli_real_escape_string($connect, trim($_POST['kategori']));
      $deskripsi = mysqli_real_escape_string($connect, trim($_POST['deskripsi']));
      $tanggal = mysqli_real_escape_string($connect, trim($_POST['tanggal']));
      $tempat = mysqli_real_escape_string($connect, trim($_POST['tempat']));
      $email = mysqli_real_escape_string($connect, trim($_POST['email']));
      
      //upload gambar
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
          $sql = '
          insert into tb_kegiatan
          values(
              "",
              "'.$judul.'",
              "'.$kategori.'",
              "'.$deskripsi.'",
              "'.$tanggal.'",
              "'.$tempat.'",
              "'.$email.'",
              "'.$nama.'"
              )';
          mysqli_query($connect, $sql);
					if($sql){
            header("location:../halaman_user.php?pesan=uploadberhasil");
					}else{
            header("location:carirelawan_user.php?pesan=uploadgagal");
          }
				}else{
					header("location:carirelawan_user.php?pesan=sizebesar");
				}
			}else{
        header("location:carirelawan_user.php?pesan=ekstensisalah");
      }
    }
    
		?>