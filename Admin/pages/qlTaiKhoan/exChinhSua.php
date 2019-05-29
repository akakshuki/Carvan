<?php 
     $id=0;
     if(isset($_GET["id"])){
         $id= $_GET["id"];
     }
     $sql= "SELECT IDAd FROM adminu WHERE IDAd= $id";
     $res= DataProvider::ExecuteQuery($sql);
    $row= mysqli_fetch_array($res);
    $id=$row["IDAd"];
    if($id != null){
        $UserAd=$_POST["txtUserAd"];
        $passwordAd= $_POST["txtPasswordAd"];
        $NameAd= $_POST["txtNameAd"];
        $Mail=$_POST["txtMail"];
        $Phone= $_POST["txtPhone"];
        $sql= "UPDATE adminu SET UserAd = '$UserAd', NameAd='$NameAd', Mail='$Mail', Phone= '$Phone' WHERE IDAd= $id ";
        DataProvider::ExecuteQuery($sql);
        DataProvider::changeURL("index.php?c=2");

    }else{
        DataProvider::changeURL("index.php?c=404");
    }

?>
