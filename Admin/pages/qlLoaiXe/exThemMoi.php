<?php
    if(isset($_POST["txtNameRange"])){
        $NameRange = $_POST["txtNameRange"];        
        $DescriptionR = $_POST["txtDescriptionR"];

        // Xử lý upload hình
       

        $sql = "INSERT INTO ranges( NameRange, DescriptionR ) VALUES('$NameRange','$DescriptionR')";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=4");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>