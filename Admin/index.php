<?php 
    session_start();
    include("../libs/DataProvider.php");
    $c=1;
    if(isset($_GET["c"])){
        $c=$_GET["c"];
    }   
?>


<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Management System</title>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
     <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>


    <div class="container">
        <div id="header" class="bg-primary text-center">
            <a href="index.php">
                <br><br>
                  <h1 style="color:White;">CarVan System Management</h1>
                <br><br>
            </a>
        </div>
        <div id="menu">
            <?php 
                if(isset($_SESSION["IDAd"])){
                    include("modules/mMenuAdmin.php");
                    include("modules/mThongTinDangNhap.php");
                }    
            ?>
        </div>
        <div id="content">  
                <?php 
                    if(isset($_SESSION["IDAd"])==false){
                    $c=0;
                    }

                    switch($c){
                        case 0:
                                include("modules/mDangNhap/pIndex.php");
                        break;
                        case 1:
                                include("pages/pIndex.php");
                        break;
                        case 2:
                                include("pages/qlTaiKhoan/pIndex.php");
                        break;
                        case 3:
                                include("pages/qlHangXe/pIndex.php");
                        break;
                        case 4:
                             include("pages/qlLoaiXe/pIndex.php");
                        break;  
                        case 5:
                             include("pages/qlXe/pIndex.php");
                        break;  
                        case 6:
                            include("pages/qlKhachHang/pIndex.php"); 
                        break;

                    }
                ?>
        </div>
        <br><br>
	<div id="footer" class="bg-primary text-center text-white">
        <br>
        &copy; 2019 - Cavan
        <br><br>
        <script>
                CKEDITOR.replace( 'editor1' );
            </script>
    </div>





















   

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>




