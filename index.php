<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discus Project</title>
    <?php include('./client/commonFiles.php') ?>
</head>
<body>

<?php
// Start the session
session_start();

// Include the header
include('./client/header.php');

// Check conditions with isset() to avoid warnings
if (isset($_GET['SignUp']) && $_GET['SignUp'] == "true") {
    include('./client/signUp.php');
} elseif (isset($_GET['login']) && $_GET['login'] == "true") {
    include('./client/login.php');
} elseif(isset($_GET['ask']) && $_GET['ask']=="true") {
    // Optional: Add a default content if needed
    include('./client/ask.php');

}
// for getting question  id

elseif(isset($_GET['q-id'])) {
    $qid = $_GET['q-id'];
    include('./client/question-details.php');

}
// for getting category id
elseif(isset($_GET['c-id'])){
    $cid = $_GET['c-id'];
   include('./client/questions.php');

}
else{
    include('./client/questions.php');
}
?>

</body>
</html>
