<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "SELECT NameCar, IDRange, IDBrand, Price, DescriptionC, DetailCar, IMG_Car FROM cars WHERE IDCar = $id";
     
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row == null){
            DataProvider::ChangeURL("index.php?c=404");
        }

        $NameCar = $row["NameCar"];
        $IDRange_goc = $row["IDRange"];
        $IDBrand_goc= $row["IDBrand"];
        $Price = $row["Price"];
    
        $DescriptionC = $row["DescriptionC"];
        $DetailCar = $row["DetailCar"];
        $IMG_Car = $row["IMG_Car"];
        

    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>


<h2 class="text-center">Add New Car</h2>
<form class="form-horizontal" name="frmTaoXe" action="index.php?c=5&a=301" method="post" enctype="multipart/form-data">
    <input type="hidden" name="hdIDCar" value="<?php echo $id; ?>" />
    <div class="form-group">
        <span class="col-md-3 control-label">Name Car:</span>
        <input type="text" name="txtNameCar" value="<?php echo $NameCar ?>" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Kind Car:</span>
        <select name="cmbRange">
            <?php 
                $sql = "SELECT IDRange, NameRange FROM ranges WHERE StatusR = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while($row = mysqli_fetch_array($result)){
                    $IDRange = $row["IDRange"];
                    $NameRange = $row["NameRange"];
                    echo "<option value='$IDRange'>$NameRange</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Kind Car:</span>
        </select>
        <select name="cmbBrand">
            <?php 
                $sql = "SELECT IDBrand, NameBrand FROM brands WHERE StatusB = 0";
                $result = DataProvider::ExecuteQuery($sql);
                while($row = mysqli_fetch_array($result)){
                    $IDBrand = $row["IDBrand"];
                    $NameBrand = $row["NameBrand"];
                    echo "<option value='$IDBrand'>$NameBrand</option>";
                }
            ?>
        </select>
       
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">image:</span>
        <input type="file" name="fHinh"  />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label"></span>
        <img src="../images/car/<?php echo $IMG_Car;?>" height="75" /> <?php echo $IMG_Car; ?>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Rate:</span>
        <input type="number" name="txtPrice" value="<?php echo $Price; ?>" required />
    </div>
    
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Description:</span>
        <textarea  name="txtDescriptionC" cols="60" rows="5"><?php echo $DescriptionC; ?></textarea>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Detail:</span>
        <textarea id="editor1" name="txtDetailCar" cols="1200" rows="680"><?php echo $DetailCar; ?></textarea>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" stype="submit">Upload</button>
        <button class="btn btn-primary" stype="button" onclick="location='index.php?c=5';">Cancel</button>
    </div>
    
    <?php
        if(isset($_GET["err"])){
            echo "<div class='error'>Không thể upload file</div>";
        }
    ?>
    
</form>