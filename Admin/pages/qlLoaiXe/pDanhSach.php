<div class="TaoMoi">
    <a href="index.php?c=4&a=2">
        <span><img src="img/Add.png" width="20" /></span><span>Add Kind Car</span>
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
                    <tr >
                        <th  >Code kind</th>
                        <th  >Name kind </th>
                        <th  >Information </th>
                        <th  >Status</th>
                        <th  >Option</th>
                    </tr>
                </thead>
               
                <tbody>
                    <?php
        $sql = "SELECT * FROM ranges";
        $res = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($res)){
            $IDRange = $row["IDRange"];
            $NameRange = $row["NameRange"];
            $DescriptionR = $row["DescriptionR"];
            $StatusR = $row["StatusR"];

            include("pages/qlLoaiXe/tDanhSach.php");
        }
    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

















