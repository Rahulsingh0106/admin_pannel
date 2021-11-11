<?php

include "db.php";

if(isset($_POST['email1']) && isset($_POST['password1']))
{
    $email = trim($_POST['email1']);
    $password = trim($_POST['password1']);

    $Query = "SELECT * FROM users where email = '$email'";
    $Query_run = mysqli_query($con,$Query);
    if(mysqli_num_rows($Query_run)> 0)
    {
$row = mysqli_fetch_object($Query_run);
$dbPassword = $row->password;
$name = $row->name;
$id = $row->id;
if(password_verify($password, $dbPassword)){
    // $_SESSION['id'] = $id;
    // $_SESSION['name'] = $name;
        echo json_encode(['status' => 'success']);

}
else{
    echo json_encode(['status' => 'passwordError', 'message' => 'your password is wrong']);
}
    }
    else{
        echo json_encode(['status' => 'emailError', 'message' => 'your email is wrong']);
    }
}

?>