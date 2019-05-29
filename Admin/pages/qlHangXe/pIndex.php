<h1 class="text-center"> Car brand management     </h1>

<?php 
    $a=1;
    if(isset($_GET["a"])){
        $a= $_GET["a"];
    }
    switch($a){
        case 1:
            include("pages/qlHangXe/pDanhSach.php"); 
        break;
        case 2:
            include("pages/qlHangXe/pThemMoi.php"); 
        break;
        case 3:
            include("pages/qlHangXe/pCapNhat.php"); 
        break;
        case 201:
            include("pages/qlHangXe/exThemMoi.php"); 
        break;
        case 301:
            include("pages/qlHangXe/exCapNhat.php"); 
        break;
        case 401:
            include("pages/qlHangXe/exXoa.php"); 
        break;
        case 402:
            include("pages/qlHangXe/exKichHoat.php"); 
        break;
        default:
            DataProvider::changeURL("index.php?c=404");
    }

?>