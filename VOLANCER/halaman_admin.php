<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
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
		h1{
			text-align: center;
		}
		.center {
			display: block;
			margin-left: auto;
			margin-right: auto;
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
      <img src="img/hand.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      <span class="menu-collapsed h5">VOLANCER ADMIN PAGE</span>
    </a>
   
  </nav>
  
  
  <div class="row" id="body-row">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
          <ul class="list-group">
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                  <small>MAIN MENU</small>
              </li>
              <a href="halaman_admin.php" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3"></span>
                      <span class="menu-collapsed">Beranda</span>
                      <span class="ml-auto"></span>
                  </div>
              </a>
              <a href="admin/datapengguna.php" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-user fa-fw mr-3"></span>
                      <span class="menu-collapsed">Data Pengguna</span>
                      <span class="ml-auto"></span>
                  </div>
              </a>
              <a href="admin/datakegiatan.php" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Data Kegiatan</span>
                    <span class="ml-auto"></span>
                </div>
			</a>      
			<a href="logout.php" aria-expanded="false" class="nav-link bg-dark list-group-item list-group-item-action flex-column align-items-start">
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
	  		<img src="img/profil.jpg" class="center" alt="Girl in a jacket"  width="300" height="300">
		  <h1 class="display-4">Selamat datang admin <?php echo $_SESSION['username']; ?></h1>
    
  
      </div>
  </div>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="js/jquery-3.5.1.min.js" ></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>