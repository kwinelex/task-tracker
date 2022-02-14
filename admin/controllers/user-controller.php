<?php 
foreach ($userResults as $userResult) { 
    // Argument
    $id = $userResult['user_id'];
    $first_name = $userResult['user_firstname'];
    $last_name = $userResult['user_lastname'];
    $email = $userResult['user_email'];
    $role = $userResult['user_role'];
    $status = $userResult['user_status'];

    if ($status === "Active") {
        $bgcolor = 'bg-success';
    } else {
        $bgcolor = 'bg-danger';
    }

    echo '
        <tr>
            <td>'.$id.'</td>
            <td>'.$first_name.' '.$last_name.'</td>
            <td>'.$email.'</td>
            <td>
                <div class="badge rounded bg-info">'.$role.'</div>
            </td>
            <td>
                <div class="badge rounded text-light '.$bgcolor.' ">'.$status.'</div>
            </td>
            <td>
                <div class="row text-center">
                    <a href="edit-user.php?updateUser='.$id.'" class="col text-decoration-none rounded text-light bg-primary mx-1"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href="user.php?deleteUser='.$id.'" class="col text-decoration-none rounded text-light bg-danger mx-1"><i class="fa-solid fa-trash-can"></i> Delete</a>
                </div>
            </td>
        </tr>
    ';
}
?>