<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $t = $_GET["t"];


        $sql = "UPDATE customerc Set IdStatusK = $t  WHERE IDCustomer = $id";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=6");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>