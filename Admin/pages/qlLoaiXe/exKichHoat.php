<?php
    if(isset($_GET["id"])){
        $IDRange = $_GET["id"];
        
        $sql = "UPDATE ranges SET StatusR = 0 WHERE IDRange = $IDRange";
        
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=4");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>