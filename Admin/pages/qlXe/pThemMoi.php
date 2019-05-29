<h2 class="text-center">Add New Car</h2>
<form class="form-horizontal" name="frmTaoXe" action="index.php?c=5&a=201" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <span class="col-md-3 control-label">Name Car:</span>
        <input type="text" name="txtNameCar" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Brand Car:</span>
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
        <span class="col-md-3 control-label">Kind car:</span>
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
        <span class="col-md-3 control-label">Image:</span>
        <input type="file" name="fHinh" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Rate:</span>
        <input type="number" name="txtPrice" required />
    </div>
        <div class="form-group">
        <span class="col-md-3 control-label">Desciption:</span>
        <textarea name="txtDescriptionC" cols="60" rows="5"></textarea>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Detail:</span>
        <textarea id="editor1" name="txtDetailCar" cols="100" rows="15"></textarea>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" stype="submit">Add new car</button>
        <button class="btn btn-primary" stype="button" onclick="location='index.php?c=5';">Cancel</button>
    </div>
   
</form> 