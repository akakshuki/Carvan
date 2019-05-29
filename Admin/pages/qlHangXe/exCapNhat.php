<?php
    if(isset($_POST["hdIDBrand"])){
        $IDBrand = $_POST["hdIDBrand"];
        $NameBrand = $_POST["txtNameBrand"];
        $DescriptionB= $_POST["txtDescriptionB"];
        $Country=$_POST["txtCountry"]; 
     
        //upload hinh
            $hinhURL = $_FILES['fHinh']['name'];
            move_uploaded_file($_FILES['fHinh']['tmp_name'], "../images/Logo/".$hinhURL);
    
            if(file_exists("../images/Logo/".$_FILES['fHinh']['name']) == false){
               // DataProvider::ChangeURL("index.php?c=4&a=2&err=1");
            }

            $sql = "UPDATE brands SET NameBrand = '$NameBrand', DescriptionB= '$DescriptionB', Logo='$hinhURL' WHERE IDBrand = $IDBrand";
            } else {
            $sql = "UPDATE brands SET NameBrand = '$NameBrand', DescriptionB= '$DescriptionB' WHERE IDBrand = $IDBrand";        }
        
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=3");
   
?>