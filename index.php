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
if (isset($_GET['signUp']) && (!isset($_SESSION['user']) || !$_SESSION['user'])) {
    include('./client/signUp.php');
} elseif (isset($_GET['login']) && (!isset($_SESSION['user']) || !$_SESSION['user'])) {
    include('./client/login.php');
} else {
    // Optional: Add a default content if needed
    echo "<p>Welcome to the Discussion Project!</p>";
}
?>

</body>
</html>
