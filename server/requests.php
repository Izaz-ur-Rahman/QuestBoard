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
            $user_id = 0;
            $query = "select * from users where email ='$email' and password = '$password'";
            $result = $conn->query($query);
            if($result->num_rows == 1)
            {
                foreach ($result as $row) {
                    $username = $row['username'];
                    $user_id = $row['id'];
                }
                echo "record found username is ".$_POST['username'];
                $_SESSION["user"] = ["username" => $username, "email" => $email,"user_id"=>$user_id];
                header("location:/Question_discussion_system");
            }
            else{
                echo "record not found";
            }


        }else if(isset($_GET['logout'])){
            session_unset();
            header("location:/Question_discussion_system");
        }
        else if(isset($_POST['ask'])) {
            $title = $_POST['Title'];
            $description = $_POST['desc'];
            $category = $_POST['category'];

            // Ensure user is logged in
            if (!isset($_SESSION['user']['user_id'])) {
                echo "Error: User not logged in.";
                exit;
            }

            $user_id = $_SESSION['user']['user_id'];

            // Use a prepared statement to prevent SQL injection
            $question = $conn->prepare("INSERT INTO `questions`
            (`title`, `description`, `category_id`, `user_id`)
            VALUES (?, ?, ?, ?)");

            $question->bind_param("ssii", $title, $description, $category, $user_id);

            if($question->execute()) {
                // Fetch last inserted ID
                $question_id = $conn->insert_id;
                // echo "Record successfully added. Question ID: " . $question_id;
                header("location: /question_discussion_website");
            } else {
                echo "Question not added to the website: " . $question->error;
            }
        }
?>