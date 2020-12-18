<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">
    <title>Halaman Admin</title>
	<style>
        #body-row{
            margin-left:0;
            margin-right:0;
		}
        #sidebar-container {
            min-height: 100vh;   
            background-color: #333;
            padding: 0;
        }


        .sidebar-expanded {
            width: 230px;
        }
        .sidebar-collapsed {
            width: 60px;
        }


        #sidebar-container .list-group a {
            height: 50px;
            color: white;
        }


        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }
        .sidebar-submenu {
            font-size: 0.9rem;
        }


        .sidebar-separator-title {
            background-color: #333;
            height: 35px;
        }
        .sidebar-separator {
            background-color: #333;
            height: 25px;
        }
        .logo-separator {
            background-color: #333;    
            height: 60px;
        }


        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
        content: " \f0d7";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
        }

        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
        content: " \f0da";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
        }
        h3{
            margin-top: 15px;
        }
        th{
            text-align: center;
        }
    </style>
</head>
<body>
	<?php 
			session_start();
			if($_SESSION['level']==""){
			header("location:masuk.php?pesan=gagal");
			}
	?>
<!-- Start Sidebar -->
<nav class="navbar navbar-expand-md navbar-light bg-warning">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img src="../img/hand.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      <span class="menu-collapsed h5">VOLANCER ADMIN PAGE</span>
    </a>
    
  </nav>
  
  
  <div class="row" id="body-row">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
          <ul class="list-group">
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                  <small>MAIN MENU</small>
              </li>
              <a href="../halaman_admin.php" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3"></span>
                      <span class="menu-collapsed">Beranda</span>
                      <span class="ml-auto"></span>
                  </div>
              </a>
              <a href="datapengguna.php" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-user fa-fw mr-3"></span>
                      <span class="menu-collapsed">Data Pengguna</span>
                      <span class="ml-auto"></span>
                  </div>
              </a>
              <a href="datakegiatan.php" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Data Kegiatan</span>
                    <span class="ml-auto"></span>
                </div>
			</a>      
			<a href="../logout.php" aria-expanded="false" class="nav-link bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Keluar</span>
                    <span class="ml-auto"></span>
                </div>
            </a>      
          </ul>
      </div> <!-- End Sidebar -->
  
	  <!-- MAIN -->

      <div class="col">
      <h3>Data kegiatan yang terdaftar</h3><br>
       <!-- Navbar Search-->
       <form action="datakegiatan.php" method="get" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" name="cari" placeholder="Cari judul kegiatan..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button value="cari" class="btn btn-secondary" type="button">cari</button>
                    </div>
                </div>
            </form>
            <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                   
                }
            ?>
      <div class="card-body table-responsive">
      <table class="table table-bordered">
        <thead>
		<tr>
			<th scope="col">Judul</th>
			<th scope="col">Kategori</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Tempat</th>
            <th scope="col">Email</th>
            <th scope="col">Nama File</th>
			<th scope="col">Opsi</th>
        </tr>
        </thead>
        <?php 
        include '../koneksi.php';
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($connect,"select * from tb_kegiatan where judul_keg like '%".$cari."%'");
        }else{
		$data = mysqli_query($connect,"select * from tb_kegiatan");
        }
        while($d = mysqli_fetch_array($data)){
            ?>
            <tbody>
			<tr>
				<td><?php echo $d['judul_keg']; ?></td>
				<td><?php echo $d['kat_keg']; ?></td>
                <td><?php echo $d['des_keg']; ?></td>
                <td><?php echo $d['tgl_keg']; ?></td>
                <td><?php echo $d['tempat_keg']; ?></td>
                <td><?php echo $d['email_keg']; ?></td>
                <td><img src="<?php echo "../user/file/".$d['nama_file']; ?>" width="70"></td>
				<td>
					<a href="edit2.php?id_keg=<?php echo $d['id_keg']; ?>">edit</a>
					<a href="delete2.php?id_keg=<?php echo $d['id_keg']; ?>">delete</a>
				</td>
            </tr>
            </tbody>
			<?php 
		}
		?>
	</table>
    </div>
      </div>
  </div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="../js/jquery-3.5.1.min.js" ></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>