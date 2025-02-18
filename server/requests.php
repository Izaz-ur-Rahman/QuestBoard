<?php
include('../common/db.php');
if(isset($_POST['SignUp'])){
    echo "user Name:".$_POST['username']."<br>";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];

 $user = $conn->prepare("Insert into `users`
(`id`,`username`,`email`,`password`,`address`)
values(NULL,'$username','$email','$password','$address');
    ");
    $result = $user->execute();
    if($result)
    {
        echo " User successfully added ";
    }
    else
    {
        echo "User not registered";
    }
}
?>