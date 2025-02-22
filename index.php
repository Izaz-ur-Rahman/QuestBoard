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
} else {
    // Optional: Add a default content if needed
    echo "<p></p>";
}
?>

</body>
</html>
