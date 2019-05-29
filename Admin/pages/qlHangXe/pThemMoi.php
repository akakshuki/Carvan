<h2 class="text-center">Add New Brand</h2>
<br><br>
<form class="form-horizontal" name="frmAddBrand" action="index.php?c=3&a=201" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <span class="col-md-3 control-label">Name New Brand:</span>
        <input type="text" name="txtNameBrand" cols="60" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">image:</span>
        <input  type="file" name="Hinh" required />
    </div>
    <div class="form-group">
        <span class="col-md-3 control-label">Made:</span>
        <input type="text" name="txtCountry" cols="60" col="5" required />

    </div>

       <div class="form-group">
        <span class="col-md-3 control-label">Description:</span>
        <textarea name="txtDescriptionB" cols="60" ></textarea>
    </div>
    <div class="form-group text-center  ">
        <button class="btn btn-primary" type="submit">Add</button>
        <button class="btn btn-primary" type="button" onclick="location='index.php?c=3';">Cancel</button>
    </div>
      
        
    <?php
        if(isset($_GET["err"])){
            echo "<div class='error'>Không thể upload file</div>";
        }
    ?>
 
  </form>