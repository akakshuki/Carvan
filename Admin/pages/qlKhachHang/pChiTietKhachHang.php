<?php
	if(!isset($_GET["id"]))
		DataProvider::ChangeURL("index.php?c=404");

	$id = $_GET["id"];
	$sql = "SELECT c.IDCustomer, c.DayCus, c.NameCustomer, c.AdressCustomer, c.PhoneCustomer , k.NameStatusK, k.IDStatusK FROM customerc c,  StatusK k WHERE  c.IDStatusK=k.IDStatusK AND IDCustomer = $id";
	$result = DataProvider::ExecuteQuery($sql);
	$row = mysqli_fetch_array($result);
?>
<fieldset>
	<legend>Information order</legend>
	<div>
		<span>Code order:</span>
		<?php echo $row["IDCustomer"]; ?>
	</div>
	<div>
		<span>Day order:</span>
		<?php echo $row["DayCus"]; ?>
	</div>
	<div>
		<span>Name order:</span>
		<?php echo $row["NameCustomer"]; ?>
	</div>
	<div>
		<span>Numberphone:</span>
		<?php echo $row["PhoneCustomer"]; ?>
	</div>
	<div>
		<span>Address:</span>
		<?php echo $row["AdressCustomer"]; ?>
	</div>

	<br>
	<a href="index.php?c=6&a=201&t=2&id=<?php echo $id; ?>" class="btn btn-info">
		Contact
	</a>
	<a href="index.php?c=6&a=201&t=3&id=<?php echo $id; ?>" class="btn btn-info">
		Cancel order
	</a>
	<a href="#" onclick="window.print();" class="btn btn-info">
		Insert order
	</a>
</fieldset>

<h2>Detail Order</h2>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead>
	<tr style="background:gray;">
		<th  class="text-center">STT</th>
		<th  class="text-center">Code order</th>
		<th  class="text-center">Name order</th>
		<th  class="text-center">Image</th>
		<th  class="text-center">Price</th>
		<th  class="text-center">Name Customer</th>
    </tr>
	</thead>
	<tbody>
    <?php
		$sql = "SELECT s.NameCar, s.IMG_Car, s.Price, c.DayCaft, c.NameCustomer, c.IDCar  FROM customerc c, cars s WHERE c.IDCar = s.IDCar AND c.IDCustomer = $id";
		$result = DataProvider::ExecuteQuery($sql);
		$i = 1;
		while ($row = mysqli_fetch_array($result))
		{
			?>	
				<tr>
					<td class="text-center"><?php echo $i++; ?></td>
					<td><?php echo $row["IDCar"]; ?></td>
					<td><?php echo $row["NameCar"]; ?></td>
					<td align="center">
						<img src="../images/car/<?php echo $row["IMG_Car"]; ?>" height="35" />
					</td>
					<td class="text-center"><?php echo $row["Price"]; ?></td>
					<td class="text-center"><?php echo $row["NameCustomer"]; ?></td>
				</tr>
			<?php
		}
	?>
	</tbody>
</table>
</div>