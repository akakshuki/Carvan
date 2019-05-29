<?php
    if(isset($_GET["id"])){
        $IDBrand = $_GET["id"];
        // Có 2 trường hợp xóa
        
        $sql = "SELECT COUNT(IDCar) FROM cars WHERE IDBrand = $IDBrand";
        $result = DataProvider::ExecuteQuery($sql);
        $row  = mysqli_fetch_array($result);
        if($row[0] == 0){
            // TH1: Xóa thiệt trong CSDL khi Loại sản phẩm này vừa vừa được tạo và chưa có thêm Sản phảm nào thuộc loại này hết
            $sql = "DELETE FROM brands WHERE IDBrand = $IDBrand";
        } else {
            $sql = "UPDATE brands SET StatusB = 1 WHERE IDBrand = $IDBrand";
        }
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>