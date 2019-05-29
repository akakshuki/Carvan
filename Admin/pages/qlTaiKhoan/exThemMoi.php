<?php
    if(isset($_POST["txtUserAd"])){
        $UserAd = $_POST["txtUserAd"];
        $PasswordAd = $_POST["txtPasswordAd"];
        $NameAd = $_POST["txtNameAd"];
        $Mail = $_POST["txtMail"];
        $Phone = $_POST["txtPhone"];

        $sql = "INSERT INTO adminu(UserAd, PasswordAd, NameAd, Mail, Phone) VALUES ('$UserAd','$PasswordAd','$NameAd', '$Mail', '$Phone')";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=2");
 
    } else {
         DataProvider::ChangeURL("index.php?c=404");
    
    }



?>