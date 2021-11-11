<?php
include "db.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']),PASSWORD_DEFAULT);
    $db = "SELECT email from users  where email='$email'";
    $query_run = mysqli_query($con,$db);

    if(mysqli_num_rows($query_run) > 0)
    {
        echo json_encode(['status' => 'error','message' => 'Sorry this email is already taken']);
    }
    else{
        $query = "INSERT INTO `users`(`name`,`email`,`password`) values ('$name','$email','$password')";
        $run = mysqli_query($con,$query) or die(mysqli_error());

        if($run)
        {
            echo json_encode(['status' => 'success']);
        }
    }
}


// if(isset($_POST['signup']))
// {
//     if($_POST['name'] && $_POST['email']&& $_POST['password'])
//     {
//         $name = trim($_POST['name']);
//         $email = trim($_POST['email']);
//         $password = password_hash(trim($_POST['password']),PASSWORD_DEFAULT);

//         $query = "INSERT INTO `users`(`name`,`email`,`password`) values ('$name','$email','$password')";
//         $run = mysqli_query($con,$query) or die(mysqli_error());

//         if($run)
//         {
//             echo json_encode(['status' => 'success']);
//         }
//     }
    
// }
?>