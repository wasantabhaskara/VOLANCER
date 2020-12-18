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
    </style>
</head>
<body>
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
                <h3>Edit Data Pengguna</h3> <br>
            
            <?php
            include '../koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($connect,"select * from tb_user where id='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
            <table cellpadding="8" >
                <tr >   
                <td>Username</td>
                <td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>">
                </td>
                </tr> 
                <tr>
                <td>Email</td>
                <td><input type="email" name="email" class="form-control" value="<?php echo $d['email']; ?>"></td>
                </tr>
                <tr>
                <td>No Hp</td>
                <td><input type="text" name="no_hp" class="form-control" value="<?php echo $d['no_hp']; ?>"></td>
                </tr>
                <tr>
                <td>Password</td>
                <td><input type="text" name="password" class="form-control" value="<?php echo $d['password']; ?>"></td>
                </tr>
                <tr>
                <td>Level</td>
                <td><input type="text" name="level" class="form-control" value="<?php echo $d['level']; ?>"></td>
                </tr>
                <tr>
                <td><input type="submit" value="SIMPAN" class="btn btn-secondary"></td>
                <td>
                <a href="datapengguna.php" class="btn btn-secondary">KEMBALI</a>
                </td>   
                </tr>  
            </table>
            </form>
            <?php 
            }
            ?>
            
        </div>
  
      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="../js/jquery-3.5.1.min.js" ></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>