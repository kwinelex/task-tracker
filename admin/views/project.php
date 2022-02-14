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
            <div class="col text-start">Project</div>
            <div class="col text-end">
                <a href="add-project.php" class="text-decoration-none add-color add-cust"><i class="fa-solid fa-plus"></i> New Project</a>
            </div>
        </div>
        <div class="row p-2 bg-light shadow-sm justify-content-between">
            <div class="col-2">
                <select class="form-select form-select-sm text-success" aria-label=".form-select-sm example">
                    <option selected value="all">All</option>
                    <option value="todo">To Do</option>
                    <option value="inprogress">In Progress</option>
                    <option value="complete">Complete</option>
                </select>
            </div>
            <div class="col text-end">
                <span>Search: </span>
                <input type="search" name="" id="" placeholder="">
            </div>
        </div>
        <div class="row p-2 bg-light border" style="height: 500px; overflow:scroll;">
            <form action="">
                <table class="table text-success">
                    <thead class="text-light bg-success">
                        <th>CODE</th>
                        <th>PROJECT</th>
                        <th>PROGRESS</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sample Project</td>
                            <td>
                                <div class="progress my-1">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                            </td>
                            <td>
                                <div class="badge rounded bg-info text-light">To Do</div>
                            </td>
                            <td>
                                <a href="project-detail.php" class="text-decoration-none">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sample Project</td>
                            <td>
                                <div class="progress my-1">
                                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </td>
                            <td>
                                <span class="badge rounded bg-secondary text-light">In Progress</span>
                            </td>
                            <td>
                                <a href="project-detail.php" class="text-decoration-none">Details</a>
                            </td>
                        </tr>
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