<h1>Manager Order</h1>

<?php
    $a = 1; 
    if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){
        case 1:
            include("pages/qlKhachHang/pDanhSach.php");
            break;
        case 2: 
            include("pages/qlKhachHang/pChiTietKhachHang.php");
            break;
        
        case 201: 
            include("pages/qlKhachHang/exDatHang.php");
            break;
        default:
            DataProvider::ChangeURL("index.php?c=404");
        
    }
?>