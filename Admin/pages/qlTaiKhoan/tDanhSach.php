<tr>
    <td  class="text-center"><?php echo $IDAd; ?></td>
    <td><?php echo $UserAd; ?></td>
    <td><?php echo $NameAd; ?></td>
    <td><?php echo $Phone; ?></td>
    <td><?php echo $Mail; ?></td>
    <td align="center">
        <?php 
            $hinhBiXoa = ($StatusA == 0) ? "active.png" : "lock.png";
            echo "<img src='img/$hinhBiXoa' />";
        ?>
    </td>
    <td align="center">
        <a href="index.php?c=2&a=101&id=<?php echo $IDAd; $hinhBiXoa = ($StatusA == 0) ? "lock.png" : "active.png";?>">
            <img src="img/<?=$hinhBiXoa; ?>" />
        </a>
        <a href="index.php?c=2&a=102&id=<?php echo $IDAd; ?>">
            <img src="img/edit.png" />
        </a>
    </td>
</tr>
