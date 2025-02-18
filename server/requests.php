<?php
include('../common/db.php');
if(isset($_POST['SignUp'])){
    echo "user Name:".$_POST['username']."<br>";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $conn->prepare("Insert into users")
}
?>