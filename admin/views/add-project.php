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
            <div class="col text-start">New Project</div>
            <!-- <div class="col text-end">
                <a href="" class="text-decoration-none add-color add-cust"><i class="fa-solid fa-floppy-disk"></i> Save</a>
            </div> -->
        </div>
        <div class="row p-2 bg-light shadow-sm">
            <form action="">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInputName" class="form-label">Project Name:</label>
                            <input type="text" class="form-control" id="FormControlInputName" required placeholder="Enter project name">
                        </div>
                        <div class="mb-3">
                            <label for="FormControlSelectStartDate" class="form-label">Start Date:</label>
                            <input type="date" class="form-control" id="FormControlSelectStartDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlSelectProjectManager" class="form-label">Project Manager:</label>
                            <select class="form-select" aria-label="Default select example" id="FormControlSelectProjectManager" required>
                                <option selected disabled value="">Please select here</option>
                                <option value="1">Leam Vina</option>
                                <option value="2">Kari Sona</option>
                                <option value="3">Som Kusa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInputSatus" class="form-label">Status:</label>
                            <select class="form-select" aria-label="Default select example" id="FormControlInputSatus" required>
                                <option selected disabled value="">Please select here</option>
                                <option value="1">Pending</option>
                                <option value="2">Done</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlSelectDueDate" class="form-label">Due Date</label>
                            <input type="date" class="form-control" id="FormControlSelectStartSate" required>
                        </div>
                        <div class="mb-3">
                            <label for="FormControlInputProjectMember" class="form-label">Project Team Member:</label>
                            <input type="search" class="form-control" id="FormControlInputProjectMember" required placeholder="Enter username">
                        </div>
                    </div>
                </div>
                <div class="row m-0 mb-3">
                    <label for="FormControlInputDecs" class="form-label p-0">Description:</label>
                    <textarea name="" class="form-control" id="FormControlInputDecs" cols="30" rows="7" required placeholder="Enter description"></textarea>
                </div>
                <div class="row m-0">
                    <button class="btn btn-success" type="submit">Create Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END CONTENT COLUMN -->

<!-- ------------------------ABOVE NEED TO UPDATE---------------------------- -->
<!-- FOOTER -->
<?php include('../components/footer.php') ?>