<?php
    if(isset($_GET["id"])){
        $IDCar = $_GET["id"];
        // Có 2 trường hợp xóa
        
// khoa dell dc nef=
        
  $sql = "UPDATE cars SET StatusC = 1 WHERE IDCar = $IDCar";
     
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=5");
     }else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>