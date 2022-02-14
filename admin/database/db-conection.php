<?php 
    // Server Enviroment
    $servername = "localhost";
    $username = "vina.leam";
    $password = "Vsom@115$";
    $dbname = "task_tracker";

    // Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>