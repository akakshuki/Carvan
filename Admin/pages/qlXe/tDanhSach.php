
<tr>
    <td class="text-center"><?php echo $IDCar; ?></td>
    <td><?php echo $NameCar; ?></td>
    <td align="center"><img src="../images/car/<?php echo $IMG_Car;?>" class="img-responsive" width="100" /></td>
    <td><?php echo $NameRange; ?></td>
    <td><?php echo $NameBrand; ?></td>
     <td><?php echo $Price;?></td>
    <td><?php echo $DateINS;?></td>
    <td><?php echo $TopWiew; ?></td>
    <td style="max-width:400px;"><?php echo $DescriptionC; ?></td>

    <td align="center">
        <?php 
            if($StatusC == 0){
                echo "<a href='index.php?c=5&a=403&id=$IDCar'><img src='img/active.png'/></a> ";    
            } else {
                echo "<a href='index.php?c=5&a=402&id=$IDCar'><img src='img/lock.png'/></a>";
            }
        ?>
    </td>
    <td align="center">
        <a href="index.php?c=5&a=3&id=<?php echo $IDCar; ?>">
           <img src="img/edit.png" alt="">
        </a>
        <a href="index.php?c=5&a=401&id=<?php echo $IDCar; ?>">
            <img src="img/delete.png" />
        </a>
    </td>
</tr>