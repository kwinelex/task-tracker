<!-- DB INCLUDE -->
<?php
include('../database/db-conection.php');
include('../helpers/select-data.php');
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
    <div class="col">
        <div class="row">
            <a href="project.php" class="col link-light text-decoration-none mx-1 cont-card-color cont-card-cust shadow">
                <div class="row p-2">
                    <div class="col">
                        <div class="row cont-card-title">Projects</div>
                        <div class="row cont-card-subtitle">Month/Year</div>
                    </div>
                </div>
                <div class="row cont-card-child h-50 py-4">
                    <div class="col text-start"><i class="fa-solid fa-hourglass fs-4"></i></div>
                    <div class="col text-end">15 Active</div>
                </div>
            </a>
            <a href="task.php" class="col link-light text-decoration-none mx-1 cont-card-color cont-card-cust shadow">
                <div class="row p-2">
                    <div class="col">
                        <div class="row cont-card-title">Tasks</div>
                        <div class="row cont-card-subtitle">today/this week</div>
                    </div>
                </div>
                <div class="row cont-card-child h-50 py-4">
                    <div class="col text-start"><i class="fa-solid fa-list-check fs-4"></i></div>
                    <div class="col text-end">1/0 Active</div>
                </div>
            </a>
            <a href="user.php" class="col link-light text-decoration-none mx-1 cont-card-color cont-card-cust shadow">
                <div class="row p-2">
                    <div class="col">
                        <div class="row cont-card-title">Users</div>
                        <div class="row cont-card-subtitle">All user</div>
                    </div>
                </div>
                <div class="row cont-card-child h-50 py-4">
                    <div class="col text-start"><i class="fa-solid fa-user-group fs-4"></i></div>
                    <div class="col text-end"><?php foreach($totalUserResults as $totalUserResult){echo htmlspecialchars($totalUserResult['user_total']);} ?> Peoples</div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- END CONTENT COLUMN -->

<!-- ------------------------ABOVE NEED TO UPDATE---------------------------- -->
<!-- FOOTER -->
<?php include('../components/footer.php') ?>