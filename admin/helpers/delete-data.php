<?php 
    if(isset($_GET['deleteUser'])){
        $id = $_GET['deleteUser'];
        $deleteUserQuery = "DELETE FROM tb_users WHERE user_id= $id";
        $userDeleteExecute = mysqli_query($conn, $deleteUserQuery);

        if ($userDeleteExecute) {
            echo "<font color='green'> Record deleted from database";
            header('Location: user.php');
        }
        else{
            echo "<font color='red'> Failed to delete record from database";
        }
    }
?>