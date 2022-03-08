<?php
$sql = "SELECT * FROM `users` WHERE `role` = 'user' ";
$result = $mysqli->query($sql);
// $row = $result->fetch_assoc();
// print_r($row);

?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Date of Birth</th>
                        <th>Resume</th>
                    </tr>
                </thead>
       
                <tbody>
                    <?php
                     while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["mobile"] ?></td>
                        <td><?php echo $row["dob"] ?></td>
                        <td><?php echo $row["resume"] ?></td>
                    </tr>
               <?php
                     }
                     ?>
                </tbody>
            </table>
        </div>
    </div>
</div>