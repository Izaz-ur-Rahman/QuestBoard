<?php
session_start();
include('../common/db.php');
if(isset($_POST['SignUp'])){
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
        $_SESSION["user"] = ["username"=>$username,"email"=>$email];
        header("location: /question_discussion_website");
    }
    else
    {
        echo "User not registered";
    }
} else if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = "";
            $query = "select * from users where email ='$email' and password = '$password'";
            $result = $conn->query($query);
            if($result->num_rows == 1)
            {
                foreach ($result as $row) {
                    $username = $row['username'];
                }
                $_SESSION["user"] = ["username" => $username, "email" => $email];
                header("location:/Question_discussion_system");
            }
            else{
                echo "record not found";
            }

}
?>