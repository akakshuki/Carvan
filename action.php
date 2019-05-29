<?php 
	session_start();
	include('dbconnect.php');
	if(isset($_POST["rangecar"])){
		$query="SELECT * FROM ranges where StatusR = 0";
		$res=mysqli_query($conn,$query);
		echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='#'><h4>Range</h4></a></li>";
		if(mysqli_num_rows($res)){
			while($row=mysqli_fetch_array($res)){
				$IDR=$row['IDRange'];
				$NameR=$row['NameRange'];
				echo "<li><a href='#' class='rangecar' IDR='$IDR'>$NameR</a></li>";
			}
			echo "</div>";
		}
	}
	
	if(isset($_POST["brand"])){
		$query="SELECT * FROM brands where StatusB = 0";
		$res=mysqli_query($conn,$query);
		echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='#'><h4>Brands</h4></a></li>";
		if(mysqli_num_rows($res)){
			while($row=mysqli_fetch_array($res)){
				$IDB=$row['IDBrand'];
				$NameB=$row['NameBrand'];
				echo "<li><a href='#' class='brand' IDB='$IDB'>$NameB</a></li>";
			}
			echo "</div>";
		}
	}
	if(isset($_POST['getProduct']) || isset($_POST['setPage'])){
		$limit = 9;
		if(isset($_POST['setPage'])){
			$pageno=$_POST['pageNumber'];
			$start=($pageno * $limit)-$limit;
		}else{$start=0;}
		$query="SELECT * FROM cars where StatusC = 0 LIMIT $start,$limit";
		$res=mysqli_query($conn,$query);
		echo "<div class='row'>";
		
		while($row=mysqli_fetch_array($res)){
			$IDC=$row['IDCar'];
			$NameC=$row['NameCar'];
			$Price=$row['Price'];
			$imgC=$row['IMG_Car'];

			echo "<div class='col-md-4'>
						<div class='panel panel-info'>
							<div class='panel-heading'>$NameC</div>
							<div class='panel-body'>
								<a href='#' class='imageproduct' IDC='$IDC'>
									<img src='images/car/$imgC' style='width:200px; height:100px' >
								</a>
							</div>
							<div class='panel-heading'>$ $Price
								<button IDC='$IDC' class='detail btn btn-warning btn-xs' style='float:right;'>Detail</button>&nbsp;
							</div>
						</div>
					</div>";
		}
		echo "</div>";
		echo "<div class='col-md-12'>
				<center>
					<ul class='pagination'>";
		$query="SELECT * FROM cars where StatusC = 0";
		$res=mysqli_query($conn,$query);
		$count = mysqli_num_rows($res);
		$pageno=ceil($count/9);
		for($i=1;$i<=$pageno;$i++)
		{
			echo "<li><a href='#' page='$i' class='page'>$i</a></li>";
		}
		echo "</ul>
			</center></div>";
	
	}

	if(isset($_POST['get_selected_range']) || isset($_POST['get_selected_brand']))
	{
		if(isset($_POST['get_selected_range']) || isset($_POST['setPage_range'])){
			$IDR=$_POST['id'];
			$limit = 6;
			if(isset($_POST['setPage_range'])){
			$pageno=$_POST['pageNumber_range'];
			$start=($pageno * $limit)-$limit;
			}else{$start=0;}
			$sql="SELECT * FROM cars WHERE StatusC = 0 and IDRange=$IDR LIMIT $start,$limit";
		}
		elseif(isset($_POST['get_selected_brand']) || isset($_POST['setPage_brand'])){
			$IDB=$_POST['id'];
			 
			
			$query="SELECT * FROM brands WHERE IDBrand=$IDB and StatusB = 0";
		
			$res= mysqli_query($conn,$query);
			while($row = mysqli_fetch_array($res)){
				$IDB = $row['IDBrand'];
				$NameB = $row['NameBrand'];
				$Made = $row['Country'];
				$imgB = $row['Logo'];
				$descB = $row['DescriptionB'];
				echo "<div class='row' >
							<div class='col-md-4 img-brand'>
								<div class='container'> <img src='images/Logo/$imgB' style='width: 200px'> </div>
							</div>
							<div class='col-md-8 info-brand'>
								<h5 class='info-brand-txt'>Brand: $NameB</h5>
								<h5 class='info-brand-txt'>Made: $Made</h5>
								<h5 class='info-brand-txt'>Description: 
								<p>$descB</p>
								</h5>
							</div>
						</div>";
			}
			$limit = 6;
			if(isset($_POST['setPage_brand'])){
			$pageno=$_POST['pageNumber_brand'];
			$start=($pageno * $limit)-$limit;
			}else{$start=0;}
			$sql="SELECT * FROM cars WHERE StatusC = 0 and IDBrand=$IDB LIMIT $start,$limit";
		}
		
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res)){
			$IDC = $row['IDCar'];
			$IDR = $row['IDRange'];
			$IDB = $row['IDBrand'];
			$NameC = $row['NameCar'];
			$Price = $row['Price'];
			$imgC = $row['IMG_Car'];

				echo "<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$NameC</div>
								<div class='panel-body'><a href='#' class='imageproduct' IDC='$IDC'><img src='images/car/$imgC' style='width:200px; height:100px'></a></div>
								<div class='panel-heading'>$ $Price
								<button IDC='$IDC' class='detail btn btn-warning btn-xs' style='float:right;'>Detail</button>&nbsp;
								</div>
							</div></div>";
		}
		if(isset($_POST['get_selected_range'])){
			echo "<div class='col-md-12'>
				<center>
					<ul class='pagination'>";
		$query="SELECT * FROM cars where StatusC = 0 and IDRange = $IDR";
		$res=mysqli_query($conn,$query);
		$count = mysqli_num_rows($res);
		$pageno=ceil($count/6);
		for($i=1;$i<=$pageno;$i++)
		{
			echo "<li><a href='#' pagerange='$i' class='pagerange' IDR='$IDR'>$i</a></li>";
		}
		echo "</ul>
			</center></div>";
		}
		if(isset($_POST['get_selected_brand'])){
			echo "<div class='col-md-12'>
				<center>
					<ul class='pagination'>";
		$query="SELECT * FROM cars where StatusC = 0 and IDBrand = $IDB";
		$res=mysqli_query($conn,$query);
		$count = mysqli_num_rows($res);
		$pageno=ceil($count/6);
		for($i=1;$i<=$pageno;$i++)
		{
			echo "<li><a href='#' pagebrand='$i' class='pagebrand' IDB='$IDB'>$i</a></li>";
		}
		echo "</ul>
			</center></div>";
		}
	}
	
	if(isset($_POST['detail_car'])){
		$IDC=$_POST['id'];
		if(!empty($IDC)){
			$query= "SELECT * FROM cars a, ranges b, brands c WHERE a.IDRange = b.IDRange and a.IDBrand = c.IDBrand and a.IDCar=$IDC";
			$res = mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($res)){
				$id=$row['IDCar'];
				$NameC = $row['NameCar'];
				$Price = $row['Price'];
				$imgC = $row['IMG_Car'];
				$IDR = $row['IDRange'];
				$IDB = $row['IDBrand'];
				$NameR = $row['NameRange'];
				$NameB = $row['NameBrand'];
				$descC = $row['DescriptionC'];
				$detailC = $row['DetailCar'];
				$view = $row['TopView'];
			echo "<div class='product-info'>
					<div class='row'>
						<div class='col-lg-5 grid'>
							<img src='images/car/$imgC' style='width:300px' data-imagezoom='true'> 
						</div>
						<div class='col-lg-7 single-top-in'>
							<div class='span_2_of_a1'>
								<h3>$NameC</h3>
								<p class='in-para'> One of the products that make up the <a href='#' class='brand' IDB='$IDB'>$NameB</a></p>
								<div class='price_single'> <span class='reducedfrom item_price'>$ $Price</span><button IDC='$IDC' class='buy btn btn-warning btn-xs' style='float:left; width:50px; margin-left:10px'>Buy</button>&nbsp;
									<div class='clearfix'></div>
								</div>
								<h4 class='quick'>Views: $view</h4>
								<h4 class='quick'>Type: <a href='#' class='rangecar' IDR='$IDR'>$NameR</a></h4>
								<h4 class='quick'>Descriptrion:</h4>
								<p class='quick_desc'>$descC</p>
							</div>
						</div>
						<div class='clearfix'></div>
					</div>
					<div class='col-md-12'>
						$detailC
					</div>
				</div>
				<script src='js/imagezoom.js'></script>";
			}
			$ViewCount= $view + 1;
			$query = "UPDATE cars SET TopView = $ViewCount WHERE IDCar = $IDC";
			$res = mysqli_query($conn,$query);
		}
	}

	if(isset($_POST["type_body"])){
		$query = "SELECT * FROM ranges where StatusR = 0 ";
		$res = mysqli_query($conn,$query);
		echo "<div class='row'>";
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_array($res)){
				$IDR = $row['IDRange'];
				$NameR = $row['NameRange'];
				$imgR = $row['IMG'];
				echo "<div class='col-md-3 col-sm-3 col-xs-3 text-center'>
						<div class='panel panel-info'>
							<img src='images/car/$imgR' alt='' style='max-width:100px'>
							<p>$NameR</p>
						</div></div>";
			}
			echo "</div>";
		}
	}

	if(isset($_POST["top_cars"])){
		$query = "SELECT * FROM cars Where StatusC = 0 ORDER BY Price DESC LIMIT 8";
		$res = mysqli_query($conn,$query);
		echo "<div class='row'>";
		if(mysqli_num_rows($res)){
	   
			while($row = mysqli_fetch_array($res)){
		   $IDC = $row['IDCar'];
		   $imgC = $row['IMG_Car'];
		   $NameC = $row['NameCar'];
		   echo "<div class='col-lg-3 col-md-3 col-sm-3 article'>
							   <a href='#' class='imageproduct' IDC='$IDC'><div class='thumb' style='background-image: url(images/car/$imgC);'></div></a>
						   
							   </div>";
			}
			echo "</div>";
		}
	}
	
	if(isset($_POST['menu_brand'])){
		$query = "SELECT IDBrand,NameBrand FROM brands WHERE StatusB = 0";
		$res = mysqli_query($conn,$query);
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_array($res)){
				$IDB = $row['IDBrand'];
				$NameB = $row['NameBrand'];
				echo "<li><a href='#' class='brand' IDB='$IDB'>$NameB</a><li>";
			}
		}
	}

	if(isset($_POST['menu_range'])){
		$query = "SELECT IDRange, NameRange FROM ranges WHERE StatusR = 0";
		$res = mysqli_query($conn,$query);
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_array($res)){
				$IDR = $row['IDRange'];
				$NameR = $row['NameRange'];
				echo "<li><a href='#' class='rangecar' IDR='$IDR'>$NameR</a><li>";
			}
		}
	}

	if(isset($_POST['quick_detail'])){
		$IDC = $_POST['id'];
		$query="SELECT * FROM cars WHERE IDCar='$IDC'";
		$res = mysqli_query($conn,$query);
		$row= mysqli_fetch_array($res);
		$IDC = $row['IDCar'];
		$NameC = $row['NameCar'];
		$Price = $row['Price'];
		$imgC = $row['IMG_Car'];
		$desc = $row['DescriptionC'];
		echo "
		<div class='row'>
		
		<div class='col-lg-7 single-top-in'>
			<div class='span_2_of_a1'>
				<h2 style='font-weight:bold'>$NameC</h2>
				<div class='price_single'> <span class='reducedfrom item_price'>$ $Price</span>
					<div class='clearfix'></div>
				</div>
				<h5 style='font-weight:bold'>Descriptrion:</h5>
				<p class='quick_desc'>$desc</p>
			</div>
		</div>
		<div class='col-lg-5 grid thumb1' style='background-image: url(images/car/$imgC);'></div>
		<div class='clearfix'></div>
	</div>
		";

	}

	if(isset($_POST['BuyProd']) || isset($_POST['submituser']) || isset($_POST['showbuy'])){
		if(isset($_POST['BuyProd'])){
		$IDCar = $_POST['IDCar'];
		$query = "SELECT * FROM cars WHERE IDCar = '$IDCar'";
		$res = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($res);
		$IDC = $row['IDCar'];
		$NameC = $row['NameCar'];
		echo "
		<center>
		<table>
		<tr>
				<th>Name Car:</th>
				<td><input type='text' id='NameC' value='$NameC'></td>
		</tr>
		<tr>	
			<th>Name:</th>
			<td><input type='text' id='NameCus' required></td>
		</tr>

		<tr>
			<th>Phone:</th>
			<td><input type='text' id='PhoneCus' required></td>
		</tr>

		<tr>
			<th>Address:</th>
			<td><input type='text' id='AddressCus'></td>
		</tr>
		<tr>
			<th>Email:</th>
			<td><input type='text' id='EmailCus'></td>
		</tr>
		<tr>
			<th>Day:</th>
			<td><input type='date' id='DayCaft'></td>
		</tr>
		<tr>
			<td><button class='submitcar' IDC='$IDC' >Submit</button></td>
		</tr>
		</table></center>
		<div id='displaysubmit'></div>
		
		";
		
	}
	elseif(isset($_POST['submituser'])){
		
		$NameCus = $_POST['NameCus'];
		$PhoneCus = $_POST['PhoneCus'];
		$AddressCus = $_POST['AddressCus'];
		$EmailCus = $_POST['EmailCus'];
		$IDC = $_POST['IDC'];
		$DayCaft = $_POST['DayCaft'];
		if($NameCus == null || $PhoneCus == null){
			echo "<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					<strong>Hey there!</strong> Please enter your name and phonenumber!
	  			</div>";
		}else{
		$query = "INSERT INTO customerc(NameCustomer,PhoneCustomer,AdressCustomer,EmailCustomer,IDCar,DayCaft) VALUES('$NameCus','$PhoneCus','$AddressCus','$EmailCus','$IDC','$DayCaft')";
		$res = mysqli_query($conn,$query);
		if($res == true){
			$query = "SELECT a.IDCustomer, a.NameCustomer, b.NameCar FROM customerc a, cars b WHERE IDStatusK =1 and a.IDCar = b.IDCar ORDER BY IDCustomer DESC LIMIT 0, 1";
			$res = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($res);
			$IDCus = $row['IDCustomer'];
			$NameCus = $row['NameCustomer'];
			$NameCar = $row['NameCar'];
			echo "<div class='alert alert-success' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					  <strong>Name:</strong> $NameCus<br/>
					  <strong>Code Bill:</strong> $IDCus</br>
					  <strong>Name Car is added:</strong> $NameCar</br>
				</div>
					";
		}
		}
	}
	
}

	if(isset($_POST['cart'])){
		echo "
		<div class='row'>
				<div class='col-md-6'>
					<input type='text' id='check'>
				</div>
				<div class='col-md-6'>
					<button class='checkcart'>Check Cart</button>
				</div>
			";
			if(isset($_POST['check_cart'])){
				$CheckCart = $_POST['CheckCart'];
				if(!empty($CheckCart)){
				$query = "SELECT * FROM cars a, customerc b WHERE a.IDCar = b.IDCar and b.PhoneCustomer = '{$CheckCart}' or b.IDCustomer = '{$CheckCart}'";
				$res = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($res);
				
				$IDCus = $row['IDCustomer'];
				$NameCus = $row['NameCustomer'];
				$PhoneCus = $row['PhoneCustomer'];
				$AddressCus = $row['AdressCustomer'];
				$NameCar = $row['NameCar'];
				$imgCar = $row['IMG_Car'];

				echo "<div class='col-md-12 caft-info'>
						<div class='row'>
							<div class='col-md-5 thumb2' style='background-image: url(images/car/$imgCar);'>
						
							</div>
							<div class='col-md-7 info-cart'>
								<h5 class='info-brand-txt'>Name Car: $NameCar</h5>
								<h5 class='info-brand-txt'>ID Cart: $IDCus</h5>
								<h5 class='info-brand-txt'>Customer Name: $NameCus</h5>
								<h5 class='info-brand-txt'>PhoneNumber: $PhoneCus</h5>
								<h5 class='info-brand-txt'>Address: $AddressCus</h5>
							</div>
						
						</div>";
				}
			}
			echo "</div>
			<div id='checkmsg'></div>
			";
	}

?>

