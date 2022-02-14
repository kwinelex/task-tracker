<!-- DB INCLUDE -->
<?php
include('../database/db-conection.php');
include('../helpers/select-data.php');
include('../helpers/delete-data.php');
?>
<!-- ------------------------------------------------------------------------ -->

<!-- HEADER -->
<?php include('../components/header.php') ?>
<!-- SIDEBAR -->
<?php include('../components/sidebar.php') ?>
<!-- NAVBAR -->
<?php include('../components/navbar.php') ?>
<!-- ------------------------BELOW NEED TO UPDATE---------------------------- -->

<!-- START CONTENT COLUMN -->
<div class="row body-color body-cust text-success">
    <div class="col shadow body-first-layer-color body-first-layer-cust">
        <div class="row p-2 mb-2 bg-light shadow-sm justify-content-between">
            <div class="col text-start">User</div>
            <div class="col text-end">
                <a href="add-user.php" class="text-decoration-none add-color add-cust"><i class="fa-solid fa-plus"></i> New User</a>
            </div>
        </div>
        <div class="row p-2 bg-light shadow-sm justify-content-between">
            <div class="col-2">
                <select class="form-select form-select-sm text-success" aria-label=".form-select-sm example">
                    <option selected value="all">All</option>
                    <option value="active">Active</option>
                    <option value="deactive">Deactive</option>
                </select>
            </div>
            <div class="col text-end">
                <span>Search: </span>
                <input type="search" name="" id="" placeholder="">
            </div>
        </div>
        <div class="row p-2 bg-light border" style="height: 500px; overflow:scroll;">
            <form action="user.php" method="GET">
                <table class="table text-success">
                    <thead class="text-light bg-success">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <?php include('../controllers/user-controller.php') ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<!-- END CONTENT COLUMN -->

<!-- ------------------------ABOVE NEED TO UPDATE---------------------------- -->
<!-- FOOTER -->
<?php include('../components/footer.php') ?>