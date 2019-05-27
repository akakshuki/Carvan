<?php 
    $id=0;
    if(isset($_GET["id"])){
        $id =$_GET["id"];
    }
    $sql= "SELECT IDAd FROM adminu WHERE IDAd= $id";
    $res= DataProvider::ExecuteQuery($sql);
    $row= mysqli_fetch_array($res);
    $id=$row["IDAd"];
    if($id != null){
        $sql= "SELECT UserAd, NameAd, Mail, Phone FROM adminu WHERE IDAd=$id";
        $res= DataProvider::ExecuteQuery($sql);
        $row= mysqli_fetch_array($res);
        $UserAd= $row["UserAd"];
        $NameAd= $row["NameAd"];
        $Mail= $row["Mail"];
        $Phone= $row["Phone"];
  

?>

<h2 class="text-center">Edit User</h2>
<form class="form-horizontal" name="frmTaoTaiKhoanMoi" action="index.php?c=2&a=202&id=<?=$id; ?>" method="post">
    <div class="form-group">
        <span class="col-md-4 control-label">User Name:</span>
        <input type="text" name="txtUserAd" value="<?=$UserAd;?>" required />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Password:</span>
        <input type="password" name="txtPasswordAd" required />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Name:</span>
        <input type="text" name="txtNameAd" value="<?=$NameAd;?>" require />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Email:</span>
        <input type="email" name="txtMail" value="<?=$Mail;?>" />
    </div>
    <div class="form-group">
        <span class="col-md-4 control-label">Number Phone:</span>
        <input type="tel" name="txtPhone" value="<?=$Phone;?>" />
    </div>
    <div class="form-group col-md-8 text-center">
        <button class="btn btn-primary" type="submit">Upload</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=2';">Cancel</button>
    </div>
</form>
    <?php }else{ DataProvider::changeURL("index.php?c=2"); } ?>