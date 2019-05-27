<?php
    if(isset($_GET["id"])){
        $IDCar = $_GET["id"];
        // Có 2 trường hợp xóa
        
        $sql = "SELECT COUNT(IDCar) FROM cars WHERE IDCar = $IDCar";
        $result = DataProvider::ExecuteQuery($sql);
        $row  = mysqli_fetch_array($result);
       
            // TH1: Xóa thiệt trong CSDL khi sản phẩm này vừa vừa được tạo và chưa có bán sản phẩm nào hết
            $sql = "DELETE FROM cars WHERE IDCar = $IDCar";
        ;
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=5");
    } else {
        DataProvider::ChangeURL("index.php?c=504");
    }
?>