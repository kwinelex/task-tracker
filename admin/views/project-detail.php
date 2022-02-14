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
        <div class="row p-2 mb-2 bg-light shadow-sm">
            <div class="col text-start">Project Details</div>
        </div>
        <div class="row py-2 mb-2 bg-light shadow-sm justify-content-between" style="height: 250px;">
            <div class="col">
                <div class="row mx-1 mb-2 px-1">
                    <div class="row text-decoration-underline">Project Name:</div>
                    <div class="row fw-light text-secondary">Sample Project</div>
                </div>
                <div class="row mx-1 px-1 text-decoration-underline">Project Description:</div>
                <div class="row mx-1 px-1 fw-light text-secondary text-wrap">
                    look more appealing, it does make word-spacing more random and therefore harder to read.
                </div>
            </div>
            <div class="col">
                <div class="row mx-1 mb-2 px-1">
                    <div class="row text-decoration-underline">Start Date:</div>
                    <div class="row fw-light text-secondary">Jan 01, 2022</div>
                </div>
                <div class="row mx-1 mb-2 px-1">
                    <div class="row text-decoration-underline">End Date:</div>
                    <div class="row fw-light text-secondary">Jan 05, 2022</div>
                </div>
                <div class="row mx-1 mb-2 px-1">
                    <div class="row text-decoration-underline">Status:</div>
                    <div class="row fw-light text-secondary">
                        In Progress
                    </div>
                </div>
                <div class="row mx-1 mb-2 px-1">
                    <div class="row mb-1 text-decoration-underline">Project Manager:</div>
                    <div class="row fw-light text-secondary">
                        <div class="col-1 p-0 text-start">
                            <i class="fa-solid fa-circle-user fs-3"></i>
                        </div>
                        <div class="col-4 px-0">
                            Leam Vina
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col me-1">
                <div class="row px-4 py-2 mb-2 bg-light shadow-sm">Memeber/Assigned:</div>
                <div class="row px-4 py-2 mb-2 bg-light shadow-sm">
                    <div class="col-1 p-0 text-start">
                        <i class="fa-solid fa-circle-user fs-3"></i>
                    </div>
                    <div class="col-3 px-0">
                        Leam Vina
                    </div>
                    <div class="col-1 p-0 text-start">
                        <i class="fa-solid fa-circle-user fs-3"></i>
                    </div>
                    <div class="col-3 px-0">
                        Teom Savin
                    </div>
                    <div class="col-1 p-0 text-start">
                        <i class="fa-solid fa-circle-user fs-3"></i>
                    </div>
                    <div class="col-3 px-0">
                        San vuthikaru
                    </div>
                </div>
            </div>
            <div class="col ms-1">
                <div class="row px-3 py-2 mb-2 bg-light shadow-sm">
                    <div class="col">Task List:</div>
                    <div class="col text-end">
                        <a href="" class="text-decoration-none py-1 px-2 text-light bg-success"><i class="fa-solid fa-plus"></i> Add Task</a>
                    </div>
                </div>
                <div class="row px-3 py-2 bg-light" style="height: 250px; overflow:scroll;">
                    <form action="" class="p-0">
                        <table class="table text-success">
                            <thead class="text-light bg-success">
                                <th>ID</th>
                                <th>TASK</th>
                                <th>DESCRIPTION</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sample Task 1</td>
                                    <td>
                                        look more appealing, it does make word-spacing more random and therefore harder to read.
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
                                    <td>Sample Task 2</td>
                                    <td>
                                        look more appealing, it does make word-spacing more random and therefore harder to read.
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
    </div>
</div>
<!-- END CONTENT COLUMN -->

<!-- ------------------------ABOVE NEED TO UPDATE---------------------------- -->
<!-- FOOTER -->
<?php include('../components/footer.php') ?>