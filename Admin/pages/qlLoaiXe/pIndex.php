<h1 class="text-center"> Manager range Car </h1>

<?php 
    $a=1;
    if(isset($_GET["a"])){
        $a= $_GET["a"];
    }
    switch($a){
        case 1:
            include("pages/qlLoaiXe/pDanhSach.php"); 
        break;
        case 2:
            include("pages/qlLoaiXe/pThemMoi.php"); 
        break;
        case 3:
            include("pages/qlLoaiXe/pCapNhat.php"); 
        break;
        case 201:
            include("pages/qlLoaiXe/exThemMoi.php"); 
        break;
        case 301:
            include("pages/qlLoaiXe/exCapNhat.php"); 
        break;
        case 401:
            include("pages/qlLoaiXe/exXoa.php"); 
        break;
        case 402:
            include("pages/qlLoaiXe/exKichHoat.php"); 
        break;
        default:
            DataProvider::changeURL("index.php?c=404");
    }

?>