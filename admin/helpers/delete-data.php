<?php 
    if(isset($_GET['deleteUser'])){
        $id = $_GET['deleteUser'];
        $deleteUserQuery = "DELETE FROM `tb_user` WHERE user_id= $id";
        $userDeleteExecute = mysqli_query($conn, $deleteUserQuery);

        if ($userDeleteExecute) {
            echo "<font color='green'> Record deleted from database";
        }
        else{
            echo "<font color='red'> Failed to delete record from database";
        }
    }
?>