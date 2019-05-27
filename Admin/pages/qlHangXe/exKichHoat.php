<?php
    if(isset($_GET["id"])){
        $IDBrand = $_GET["id"];
        
        $sql = "UPDATE brands SET StatusB = 0 WHERE IDBrand = $IDBrand";
        
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>