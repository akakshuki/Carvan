<?php
    if(isset($_POST["hdIDCar"])){
        $IDCar = $_POST["hdIDCar"];
        $NameCar = $_POST["txtNameCar"];
        $IDRange = $_POST["cmbRange"];
        $IDBrand=$_POST["cmbBrand"];
        $Price = $_POST["txtPrice"]; 
       
        $DescriptionC = $_POST["txtDescriptionC"];
        $DetailCar = $_POST["txtDetailCar"];

        if($_FILES["fHinh"]["size"] > 0){
            $IMG_Car = $_FILES['fHinh']['name'];
            move_uploaded_file($_FILES['fHinh']['tmp_name'], "../images/car/".$IMG_Car);

            if(file_exists("../images/Xe/".$IMG_Car) == false){
                DataProvider::ChangeURL("index.php?c=5&a=2&err=1");
            }

            $sql = "UPDATE cars SET NameCar = '$NameCar', IDRange = $IDRange, IDBrand= $IDBrand, Price = $Price, DescriptionC = '$DescriptionC', DetailCar = '$DetailCar', IMG_Car_xe = '$IMG_Car' WHERE IDCar = $IDCar";
        } else {
            $sql = "UPDATE cars SET NameCar = '$NameCar', IDRange = $IDRange, IDBrand= $IDBrand, Price = $Price, DescriptionC = '$DescriptionC', DetailCar = '$DetailCar' WHERE IDCar = $IDCar";    
        }
        
        DataProvider::ExecuteQuery($sql);
        DataProvider::ChangeURL("index.php?c=5");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>