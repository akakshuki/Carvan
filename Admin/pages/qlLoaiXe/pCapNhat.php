<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "SELECT NameRange, DescriptionR FROM ranges WHERE IDRange = $id";
     
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        
        if($row == null){
            DataProvider::ChangeURL("index.php?c=404");
        }
    } else {
        DataProvider::ChangeURL("index.php?c=404");
    }
?>
<h2 class="text-center">Eidit Brand</h2>
<form class="form-horizontal" name="frmEditRanges" action="index.php?c=4&a=301" method="post">
    <div class="form-group">
        <span class="col-md-5 control-label">Name</span>
        <input type="text" name="txtNameRange" value="<?php echo $row["NameRange"]; ?>" required />
        <input type="hidden" name="hdIDRange" value="<?php echo $id; ?>" />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Information kind:</span>
        <textarea name="txtDescriptionR" cols="60" rows="5"><?php echo $row["DescriptionR"]; ?></textarea>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Upload</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=4';">Cancel</button>
    </div>
</form>