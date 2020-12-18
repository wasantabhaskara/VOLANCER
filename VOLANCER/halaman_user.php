<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <title>Volancer</title>
  </head>
  <body>
	  <?php

    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "uploadberhasil"){
        echo "<script>alert('UPLOAD BERHASIL!');</script>";
      }
    }

	  session_start();
	  if($_SESSION['level']==""){
      header("location:masuk.php?pesan=gagal");
    }
   ?>
    <nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-transparent text-dark">
      <div class="container">
      <a class="navbar-brand mb-0 h1" href="halaman_user.php">VOLANCER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user/carirelawan_user.php">Cari Relawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jadi Relawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user/kontak_user.php">Hubungi Kami</a>
          </li>
        </ul>
      </div> 
    </div>
    </nav> 

    <div class="jumbotron">
      <div class="container">
	  <h1 class="display-4">Selamat Datang <?php echo $_SESSION['username']; ?></h1>
      <hr class="my-4">
      <p class="text1">mulai langkahmu dari sini</p>
      <a class="btn btn-warning btn-lg" href="user/carirelawan_user.php" role="button">Cari Relawan</a>
      <a class="btn btn-warning btn-lg" href="#" role="button">Jadi Relawan</a>
      <p class="lead"><i> Tidak semua dari kita bisa melakukan hal-hal besar <br> Tapi kita bisa melakukan hal-hal kecil dengan cinta kasih yang besar<br>-Mother Theresa-</i></p>
    </div>
    </div>
    
    <section class="about" id="about">
      <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">Tentang Kami</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p>Lahirnya ide Volancer ini yaitu pada akhir bulan Oktober tahun 2020, yang berawal dari tugas mata kuliah Praktikum Pemrograman Berbasis Web disalah satu Universitas Negeri di Bali. Setelah itu dibentuklah kelompok kecil yang berjumlah 3 orang untuk merumuskan, memperkuat dan mempersatukan gagasan.</p>
            </div>
            <div class="col-sm-6">
                <p>Volancer adalah jembatan yang akan menghubungkan anda dengan kegiatan-kegiatan yang sangat membutuhkan bantuan anda. Kami percaya bahwa masyarakat terutama generasi milenial sangat peduli akan sesama. Sehingga, Volancer hadir untuk menjadi tempat berbagi informasi seputar kegiatan-kegiatan bermanfaat yang membutuhkan relawan.</p>
            </div>
        </div>
    </div>
    </section>

    <footer class="page-footer font-small bg-warning">
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href=#>VOLANCER</a>
      </div>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>