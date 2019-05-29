<?php 
    if(isset($_GET["id"])){
        $IDAd    =$_GET["id"];
        $sql=" UPDATE adminu SET StatusA = 1 - StatusA WHERE IDAd = $IDAd";
        DataProvider::ExecuteQuery($sql);
        DataProvider::changeURL("index.php?c=2");

    }else{
        DataProvider::changeURL("index.php?c=404");
    }
?>