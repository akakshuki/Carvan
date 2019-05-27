<tr>
    <td class="text-center"><?php echo $IDRange; ?></td>
    <td><?php echo $NameRange; ?></td>
    <td align="center"><?php echo $DescriptionR ?></td>
    <td align="center">
        <?php 
            if($StatusR == 0){
                echo "<img src='img/active.png' />";    
            } else {
                echo "<a href='index.php?c=4&a=402&id=$IDRange'><img src='img/lock.png' /></a>";
            }
        ?>
    </td>
    <td class="text-center">
        <a href="index.php?c=4&a=3&id=<?php echo $IDRange; ?>">
            <img src="img/edit.png" />
        </a>
        <a href="index.php?c=4&a=401&id=<?php echo $IDRange; ?>">
            <img src="img/delete.png" />
        </a>
    </td>
</tr>