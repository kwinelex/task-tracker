<?php 
    if(!isset($_POST['create now'])){
        // Authentication
        // $user_id = $_POST['user_id'];
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
            $addUserQuery = "INSERT INTO tb_users(user_name, user_password, user_firstname, user_lastname, user_email, user_status, user_role, user_image) VALUES('$user_name', '$user_password', '$user_firstname', '$user_lastname', '$user_email','$user_status', '$user_role', '$user_image')";
            $addUserExecute = mysqli_query($conn, $addUserQuery);
            if($addUserExecute){
                echo "<div class='alert alert-success p-0' role='alert'> Data recorded in database </div>";
            }
            else{
                echo "<div class='alert alert-danger' role='alert'> Failed with recording</div>";
            }
        }

        mysqli_close($conn);
    }
?>