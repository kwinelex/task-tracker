<!-- DB INCLUDE -->
<?php
include('../database/db-conection.php');
include('../helpers/update-data.php');
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
            <div class="col text-start">Edit User</div>
        </div>
        <div class="row p-2 bg-light shadow-sm">
            <form action="edit-user.php" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInputFirstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="user_firstname" id="FormControlInputName" required placeholder="Enter first name">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputLastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="user_lastname" id="FormControlInputLastName" required placeholder="Enter last name">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlSelectRole" class="form-label">User Role:</label>
                            <select class="form-select" name="user_role" id="FormControlSelectRole" aria-label="Default select example" required>
                                <option selected disabled value="">Please select here</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Management">Managerment</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="FormControlFile">Upload Image:</label>
                            <input type="file" class="form-control" name="user_image" id="FormControlFile" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInputSatus" class="form-label">Status:</label>
                            <select class="form-select" aria-label="Default select example" name="user_status" required>
                                <option selected disabled value="">Please select here</option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputEmail" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="user_email" id="FormControlInputEmail" required placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputUsername" class="form-label">Username:</label>
                            <input type="text" class="form-control" name="user_name" id="FormControlInputUsername" required placeholder="Enter username">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputPassword" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="user_password" id="FormControlInputPassword" required placeholder="Enter password">
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <button class="btn btn-primary" type="submit" value="edit now">Edit Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END CONTENT COLUMN -->

<!-- ------------------------ABOVE NEED TO UPDATE---------------------------- -->
<!-- FOOTER -->
<?php include('../components/footer.php') ?>