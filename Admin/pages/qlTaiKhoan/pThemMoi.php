<h2 class="text-center">Create Account</h2>
<form class="form-horizontal" name="frmTaoTaiKhoanMoi" action="index.php?c=2$a=201" method="post">
<div class="form-group">
        <span class="col-md-5 control-label">User Name:</span>
        <input type="text" name="txtUserAd" required />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">password:</span>
        <input type="password" name="txtPassworkAd" required />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Name:</span>
        <input type="text" name="txtNameAd" required />
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Mail:</span>
        <input type="email" name="txtEmail"/>
    </div>
    <div class="form-group">
        <span class="col-md-5 control-label">Number Phone:</span>
        <input type="tel" name="txtPhone"/>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Create Account</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=2';">Cancel</button>
    </div>

</form>
