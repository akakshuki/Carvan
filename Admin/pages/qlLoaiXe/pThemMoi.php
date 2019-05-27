<h2 class="text-center">Add Brand</h2>
<br><br>
<form class="form-horizontal" name="frmAddRange" action="index.php?c=4&a=201" method="post">
    <div class="form-group">
        <span class="col-md-3 control-label">Name Kind :</span>
        <input type="text" name="txtNameRange" required />

    </div>
   
    <div class="form-group">
        <span class="col-md-3 control-label">Information Kind:</span>
        <textarea name="txtDescriptionR" cols="60" rows="5"></textarea>
    </div>
    <div class="form-group text-center  ">
        <button class="btn btn-primary" type="submit">Add</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=4';">Cancel</button>
    </div>
      
 
  </form>