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
            <div class="col text-start">Task</div>
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
                        <th>ID</th>
                        <th>PROJECT</th>
                        <th>TASK</th>
                        <th>PROJECT STARTED</th>
                        <th>PROJECT DUE DATE</th>
                        <th>PROJECT STATUS</th>
                        <th>TASK STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sample project</td>
                            <td>
                                Sample task 1
                            </td>
                            <td>2022-01-01</td>
                            <td>2022-02-02</td>
                            <td>
                                <div class="badge rounded bg-success text-light">Complete</div>
                            </td>
                            <td>
                                <div class="badge rounded bg-success text-light">Done</div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn border border-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sample project</td>
                            <td>
                                Sample task 2
                            </td>
                            <td>2022-01-01</td>
                            <td>2022-02-02</td>
                            <td>
                                <div class="badge rounded bg-secondary text-light">In Progress</div>
                            </td>
                            <td>
                                <span class="badge rounded bg-secondary text-light">Pending</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn border border-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Delete</a></li>
                                    </ul>
                                </div>
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