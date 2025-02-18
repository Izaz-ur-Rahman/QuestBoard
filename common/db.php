<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "discuss";

$conn = new mysqli('$server','$username','$pasword','$db');
if($conn ->connect_error){
    die("Not connected with DB".$conn->connect_error);
}


?>