<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr ">
                        <th class="text-center">Code customer</th>
                        <th class="text-center">Customer</th>
                        <th class="text-center">Day boot</th>
                        <th class="text-center">Number Phone</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Day registration</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Option</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
        $sql ="		SELECT IDCustomer, NameCustomer, PhoneCustomer, AdressCustomer, DayCus, s.IDCar, DayCaft, c.IDStatusK, k.NameStatusK
        FROM cars s, customerc c,  statusk k
        WHERE  c.IDCar=s.IDCar and c.IDStatusK=k.IDStatusK
        ORDER BY  k.IDStatusK
        
            ";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result)){
            $IDCustomer = $row["IDCustomer"];
            $NameCustomer = $row["NameCustomer"];
            $DayCaft= $row["DayCaft"];
            $AddressCustomer = $row["AdressCustomer"];
            $PhoneCustomer = $row["PhoneCustomer"];
            $DayCus=$row["DayCus"];
            $StatusK = $row["NameStatusK"];
            
            $class = "";
            switch( $StatusK){
                case 1:
                    $class = "classWaiting";
                    break;
                case 2:
                    $class = "classPropressing";
                    break;
                case 3:
                    $class = "classCancle";
                    break;
               
              
            }

            include("pages/qlKhachHang/tDanhSach.php");
        }
    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>