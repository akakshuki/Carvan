<tr>
    <td class="text-center"><?php echo $IDBrand; ?></td>
    <td><?php echo $NameBrand; ?></td>
    <td><?php echo $Country; ?></td>
    <td><img src="../images/Logo/<?php echo $Logo;?>" class="img-responsive" width="100" ></td>
    <td align="center"><?php echo $DescriptionB; ?></td>
    <td align="center">
        <?php 
            if($StatusB == 0){
                echo "<img src='img/active.png' />";    
            } else {
                echo "<a href='index.php?c=3&a=402&id=$IDBrand'><img src='img/lock.png' /></a>";
            }
        ?>
    </td>
    <td class="text-center">
        <a href="index.php?c=3&a=3&id=<?php echo $IDBrand; ?>">
            <img src="img/edit.png" />
        </a>
        <a href="index.php?c=3&a=401&id=<?php echo $IDBrand; ?>">
            <img src="img/delete.png" />
        </a>
    </td>
</tr>