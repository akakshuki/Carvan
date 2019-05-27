<?php
    if(isset($_GET["id"])){
        $IDCar = $_GET["id"];
        
        $sql = "UPDATE cars SET StatusC = 0 WHERE IDCar = $IDCar";
        
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=5");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>