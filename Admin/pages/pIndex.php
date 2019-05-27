<?php
    $sql = "SELECT COUNT(IDAd) FROM adminu WHERE StatusA = 0";
    $res = DataProvider::ExecuteQuery($sql);
    $row  = mysqli_fetch_array($res);
    $soadminu = $row["COUNT(IDAd)"];
    $sql = "SELECT COUNT(IDCustomer) FROM customerc WHERE IDStatusK = 1";
    $result = DataProvider::ExecuteQuery($sql);
    $row  = mysqli_fetch_array($result);
    $Customer=$row["COUNT(IDCustomer)"]


    
?>


<h1 class="text-center">Manager System </h1>
<h2  class="text-center">General Summary</h2>
<div class="container">
    <div style="width:300px; margin: auto;">
        <p>Employees doing: <?=$soadminu;?></p>
        
    </div>  
    <div style="width:300px; margin: auto;">
        <p>New customer <?= $Customer;?></p>
        
    </div>
</div>
