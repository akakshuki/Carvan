<div class="TaoMoi">
    <a href="index.php?c=3&a=2">
        <span><img src="img/Add.png" width="20" /></span><span>Enter Add name the brand
        </span>
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
                    <tr style= text-align:center ;">
                        <th class="text-center">Code Brand</th>
                        <th class="text-center">Name Brand</th>
                        <th class="text-center">made</th>
                        <th class="text-center">Logo</th>
                        <th class="text-center">information </th>
                        <th class="text-center">Startus</th>
                        <th class="text-center">Option</th>
                    </tr>
                </thead>
               
                <tbody>
                    <?php
        $sql = "SELECT * FROM  brands";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $IDBrand = $row["IDBrand"];
            $NameBrand = $row["NameBrand"];
            $Logo= $row["Logo"];
            $Country=$row["Country"];
            $DescriptionB= $row["DescriptionB"];
            $StatusB = $row["StatusB"];
           

            include("pages/qlHangXe/tDanhSach.php");
        }
    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>




















