<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
  
    <title>VOLANCER</title>
    <style>
        body{
            background-color: gainsboro;
            height: 100vh;
        }
  
        textarea{
            padding: 10px;
        }
      
    </style>
  </head>
  <body>
  <?php 
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../masuk.php?pesan=belum_login");
    }
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "uploadgagal"){
         echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');</script>";
      }else if($_GET['pesan'] == "sizebesar"){
          echo "<script>alert('UKURAN FILE TERLALU BESAR');</script>";
      }else if($_GET['pesan'] == "ekstensisalah"){
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');</script>";
      }
    }
	?>
    <nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-warning">
      <div class="container">
      <a class="navbar-brand mb-0 h1" href="../halaman_user.php">VOLANCER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carirelawan_user.php">Cari Relawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jadi Relawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak_user.php">Hubungi Kami</a>
          </li>
        </ul>
      </div> 
    </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Cari Relawan</h1>
        <h3>Beri tahu kami kegiatan apa yang ingin anda mulai</h3>
        <p>Temukan relawan yang berjiwa sosial tinggi dalam hitungan menit</p>
        
        <form action="aksi.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Kegiatan</label><br>
                <input type="text" name="judul" class="form-control" placeholder="cth : Relawan Aksi untuk Hutan" required="required">
            </div>
            <div class="form-group">
              <label>Kategori Kegiatan</label><br>
              <select class="form-control" name="kategori">
                <option value="administrasi">Administrasi</option>
                <option value="edukasi">Edukasi</option>
                <option value="konservasi">Konservasi</option>
                <option value="humanis">Humanis</option>
                <option value="acara">Acara</option>
              </select>
            </div>
            <div class="form-group">
                <label>Deskripsi Kegiatan</label><br>
                <textarea name="deskripsi"  cols="148" rows="10" placeholder="Jelaskan Kegiatan anda ..." required="required"></textarea>
            </div>
            <div class="form-group">
                <label>Tanggal Kegiatan</label><br>
                <input type="date" name="tanggal" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label>Tempat Kegiatan</label><br>
                <input type="text" name="tempat" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label>Email</label><br>
                <input type="text" name="email" class="form-control" placeholder="cth : xxxxxx@yyyy.com" >
            </div>
            <div class="form-group">
                <label>Upload Gambar</label><br>
                <input type="file" name="file">
	          </div>
      
            <div class="form-group">
                <button type="submit" name="upload" value="upload" class="btn btn-secondary">Kirim</button>
            </div>     
        </form>
    </div>
    </div>
    
    <footer class="page-footer font-small bg-warning fixed-bottom">
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href=#>VOLANCER</a>
      </div>
    </footer>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="../js/jquery-3.5.1.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>