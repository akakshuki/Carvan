<?php
    if(isset($_POST["txtUserAd"])){
        $UserAd = $_POST["txtUserAd"];
        $PasswordAd = $_POST["txtPasswordAd"];

        $sql = "SELECT * FROM adminu WHERE StatusA = 0 AND UserAd = '$UserAd' AND PasswordAd='$PasswordAd'";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row == null){
            DataProvider::ChangeURL("index.php?c=0&err=1");
        } else {
            $_SESSION["IDAd"] = $row["IDAd"];
            $_SESSION["NameAd"] = $row["NameAd"];

            DataProvider::ChangeURL("index.php");
        }

    } else {
        DataProvider::ChangeURL("index.php?c=0&err=1");
    }
?>