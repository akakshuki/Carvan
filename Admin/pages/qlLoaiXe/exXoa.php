<?php
    if(isset($_GET["id"])){
        $IDRange = $_GET["id"];
        // Có 2 trường hợp xóa
        
        $sql = "SELECT COUNT(IDCar) FROM cars WHERE IDRange = $IDRange";
        $result = DataProvider::ExecuteQuery($sql);
        $row  = mysqli_fetch_array($result);
        if($row[0] == 0){
            // TH1: Xóa thiệt trong CSDL khi Loại sản phẩm này vừa vừa được tạo và chưa có thêm Sản phảm nào thuộc loại này hết
            $sql = "DELETE FROM ranges WHERE IDRange = $IDRange";
        } else {
            $sql = "UPDATE ranges SET StatusR = 1 WHERE IDRange = $IDRange";
        }
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=4");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>