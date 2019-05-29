<?php
    if(isset($_POST["hdIDRange"])){
        $IDRange = $_POST["hdIDRange"];
        $NameRange = $_POST["txtNameRange"];
        $DescriptionR= $_POST["txtDescriptionR"];
        $sql = "UPDATE ranges SET NameRange = '$NameRange', DescriptionR= '$DescriptionR' WHERE IDRange = $IDRange";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=4");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>