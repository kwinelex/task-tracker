<?php 
    $id = $_GET['updateUser'];
    if(!isset($_POST['edit now'])){
        // Authentication
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];

        // Add User Paramenter
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];
        $user_status = $_POST['user_status'];
        $user_email = $_POST['user_email'];
        $user_image = addslashes(file_get_contents($_FILES['user_image']['tmp_name']));
        
        if (!empty($user_firstname) && !empty($user_lastname) && !empty($user_role) && !empty($user_status) && !empty($user_email) && !empty($user_image) && !empty($user_name) && !empty($user_password)) {
            //  Insert data of user details
            $editUserQuery = "UPDATE `tb_users` SET user_name='$user_name', user_password='$user_password', user_firstname='$user_firstname', user_lastname='$user_lastname', user_email='$user_email', user_status='$user_status', user_role='$user_role', user_image='$user_image' WHERE user_id='$id'";
            $editUserExecute = mysqli_query($conn, $editUserQuery);

            if($editUserExecute){
                echo "<div class='alert alert-success p-0' role='alert'> Update successfully </div>";
            }
            else{
                echo "<div class='alert alert-danger' role='alert'> Failed update</div>";
                die(mysqli_error($conn));
            }
        }

        mysqli_close($conn);
    }
?>