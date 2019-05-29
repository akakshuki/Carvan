<?php
    if(isset($_POST["txtNameCar"])){
        $NameCar = $_POST["txtNameCar"];
        $IDRange = $_POST["cmbRange"];
        $IDBrand=$_POST["cmbBrand"];
        $Price = $_POST["txtPrice"];
        $DescriptionC = $_POST["txtDescriptionC"];
        $DetailCar = $_POST["txtDetailCar"];

        // Xử lý upload hình
        $IMG_Car = $_FILES['fHinh']['name'];
        move_uploaded_file($_FILES['fHinh']['tmp_name'], "../images/car/".$IMG_Car);

        if(file_exists("../images/Xe/".$_FILES['fHinh']['name']) == false){
            DataProvider::ChangeURL("index.php?c=5&a=1&err=1");
        }

        $sql = "INSERT INTO cars(NameCar,IDRange,IDBrand,Price,DescriptionC,DetailCar,IMG_Car) VALUES('$NameCar','$IDRange','$IDBrand','$Price','$DescriptionC','$DetailCar','$IMG_Car')";
        DataProvider::ExecuteQuery($sql);
        
        DataProvider::ChangeURL("index.php?c=5");
    } else {
        DataProvider::ChangeURL("index.php?c=404");
       
    }
?>