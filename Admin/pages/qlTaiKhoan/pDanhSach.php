<div class="taoMoi">
    <a href="index.php?c=2&a=2">
        <span><img src="img/Add.png" width="20" /></span> <span>Create New</span>
    </a>
</div>
<br>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               
                <tfoot>
                    <tr>
                        <th>Employees Code</th>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Number Phone</th>
                        <th>Mail</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                <?php 
                $sql = "SELECT * FROM adminu";
                $res = DataProvider::ExecuteQuery($sql);
                while($row = mysqli_fetch_array($res)){
                    $IDAd= $row["IDAd"];
                    $UserAd=$row["UserAd"];
                    $NameAd = $row["NameAd"];
                    $Mail= $row["Mail"];
                    $Phone = $row["Phone"];
                    $StatusA = $row["StatusA"];

                    include("pages/qlTaiKhoan/tDanhSach.php");
                }
            ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

</div>

</table>
</div>