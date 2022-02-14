<?php 
    // User List
    $userSelectQuery = "SELECT * FROM tb_users";
    $userExecute = mysqli_query($conn, $userSelectQuery);
    $userResults = mysqli_fetch_all($userExecute, MYSQLI_ASSOC);

    // Total User
    $totalUserSelectQuery = "SELECT COUNT(user_lastname) AS user_total FROM tb_users;";
    $totalUserExecute = mysqli_query($conn, $totalUserSelectQuery);
    $totalUserResults = mysqli_fetch_all($totalUserExecute, MYSQLI_ASSOC);
?>