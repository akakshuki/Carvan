<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "SELECT * FROM brands WHERE IDBrand = $id";
     
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row == null){
            DataProvider::ChangeURL("index.php?c=404");
        }
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>
<h2 class="text-center">Edit Information The brand</h2>
<form class="form-horizontal" name="frmTaobrands" action="index.php?c=3&a=301" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <span class="col-md-3 control-label">Name brand</span>
        <input type="text" name="txtNameBrand" value="<?php echo $row["NameBrand"]; ?>" required />
        <input type="hidden" name="hdIDBrand" value="<?php echo $id; ?>" />
    </div>
    <div class="form-group"  >
        <span class="col-md-3 control-label">image:</span>
        <input type="file" name="fHinh" required   />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label"></span>
        <img src="../images/Logo/<?php echo $row["Logo"];?>" height="75" /> <?php $row["Logo"] ?>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">information the brand:</span>
        <textarea name="txtDescriptionB" cols="60" rows="10" ><?php echo $row["DescriptionB"]; ?></textarea>
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">made:</span>
        <textarea name="txtCountry" cols="60" ><?php echo $row["Country"]; ?></textarea>
    </div>
    </div>
    
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Upload</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=3';">Hủy</button>
    </div>



</form>