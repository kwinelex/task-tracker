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
            <div class="col text-start">Delete Priview</div>
        </div>
        <div class="row p-2 bg-light shadow-sm">
            <form action="user-detail.php" method="GET">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInputFirstName" class="form-label">User ID:</label>
                            <input type="number" class="form-control" name="user_firstname" id="FormControlInputName" readonly placeholder="Enter first name">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputFirstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="user_firstname" id="FormControlInputName" readonly placeholder="Enter first name">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputLastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="user_lastname" id="FormControlInputLastName" readonly placeholder="Enter last name">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlSelectRole" class="form-label">User Role:</label>
                            <select class="form-select" name="user_role" id="FormControlSelectRole" aria-label="Default select example" disabled>
                                <option selected disabled value="">Please select here</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Management">Managerment</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInputSatus" class="form-label">Status:</label>
                            <select class="form-select" aria-label="Default select example" name="user_status" disabled>
                                <option selected disabled value="">Please select here</option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputEmail" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="user_email" id="FormControlInputEmail" readonly placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputUsername" class="form-label">Username:</label>
                            <input type="text" class="form-control" name="user_name" id="FormControlInputUsername" readonly placeholder="Enter username">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputPassword" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="user_password" id="FormControlInputPassword" readonly placeholder="Enter password">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="FormControlFile">Upload Image:</label>
                    <img src="<?php echo $user_id ?>" alt="profile" id="FormControlFile" class="m-3 border">
                </div>
                <div class="row m-0">
                    <button class="btn btn-danger" type="submit" value="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END CONTENT COLUMN -->

<!-- ------------------------ABOVE NEED TO UPDATE---------------------------- -->
<!-- FOOTER -->
<?php include('../components/footer.php') ?>