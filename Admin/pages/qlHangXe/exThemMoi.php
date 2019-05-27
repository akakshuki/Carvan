<?php
    
    if(isset($_POST["txtNameBrand"])){
        $NameBrand = $_POST["txtNameBrand"];        
        $DescriptionB = $_POST["txtDescriptionB"];
        $Country= $_POST["txtCountry"];
         // Xử lý upload hình
        $IMG_Logo = $_FILES['Hinh']['name'];
        move_uploaded_file($_FILES['Hinh']['tmp_name'], "../images/Logo /".$IMG_Logo);
        

         if(file_exists("../images/hangXe/".$_FILES['Hinh']['name']) == false){
            DataProvider::ChangeURL("index.php?c=5&a=2&err=1");
         }
        $sql = "INSERT INTO brands(NameBrand,DescriptionB,Country,Logo) VALUES('$NameBrand','$DescriptionB','$Country','$IMG_Logo')";
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>