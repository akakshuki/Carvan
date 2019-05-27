<div class="TaoMoi">
    <a href="index.php?c=5&a=2">
        <span><img src="img/Add.png" width="20" /></span><span> Create New</span>
    </a>
</div>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
     
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code Car</th>
                        <th>Name Car</th>
                        <th>Image</th>
                        <th>Kind</th>
                        <th>Brand</th>
                        <th>Rate</th>
                        <th>Time of enter</th>
                        <th>Number of Views</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tfoot>
                    <?php
        $sql = "SELECT IDCar, NameCar, cars.IMG_Car, ranges.NameRange, Brands.NameBrand, Price, TopWiew, cars.StatusC, cars.DescriptionC, DateINS FROM cars, ranges, Brands WHERE cars.IDRange = ranges.IDRange AND cars.IDBrand = brands.IDBrand ORDER BY IDCar";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $IDCar = $row["IDCar"];
            $NameCar = $row["NameCar"];
            $IMG_Car = $row["IMG_Car"];
            $NameBrand = $row["NameBrand"];
            $NameRange = $row["NameRange"];
            $DateINS=$row["DateINS"];
            $Price = $row["Price"];
            $TopWiew = $row["TopWiew"];
            $DescriptionC = $row["DescriptionC"];
            $StatusC = $row["StatusC"];
        
        
        
            include("pages/qlXe/tDanhSach.php");
        }
    ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

</div>


























