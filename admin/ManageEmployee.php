<?php 
include('header.php');
include_once '../config/database.php';
$db = new Database();

?>

<!-- Dashboard -->

<div class="col-sm-4 pull-right" id="dashBoard">
    <h3>Manage Employee</h3>
</div>
<div class="col-sm-4 pull-left">
    <h4><a href="AddEmployee.php">Add Employee</a></h4>
</div>
<div class="col-md-10" id="topline">

    <!-- Scenario -->
    <br>    
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM employee";
                $res = $db->select($sql);

                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td>
                        <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        <a href="#" class="btn btn-info" onclick="return confirm('Are you sure you want to see details?')">Details</a>
                        <a href="EditEmployeeProfile.php" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

<?php include('footer.php'); ?>
