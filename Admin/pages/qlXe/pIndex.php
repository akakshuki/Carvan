<h1 class="text-center"> Manager Car </h1>

<?php 
    $a=1;
    if(isset($_GET["a"])){
        $a= $_GET["a"];
    }
    switch($a){
        case 1:
            include("pages/qlXe/pDanhSach.php"); 
        break;
        case 2:
            include("pages/qlXe/pThemMoi.php"); 
        break;
        case 3:
            include("pages/qlXe/pCapNhat.php"); 
        break;
        case 201:
            include("pages/qlXe/exThemMoi.php"); 
        break;
        case 301:
            include("pages/qlXe/exCapNhat.php"); 
        break;
        case 401:
            include("pages/qlXe/exXoa.php"); 
        break;
        case 403:
            include("pages/qlXe/exKhoaXe.php");
        break;

        case 402:
            include("pages/qlXe/exKichHoat.php"); 
        break;
        default:
            DataProvider::changeURL("index.php?c=404");
    }

?>