<?php
$server = "localhost";
$username = "root";
$password = "khamiar@1908";
$database_name = "school";
$conn = mysqli_connect($server, $username, $password, $database_name);
if ($conn->connect_errno) {
    die("Connection failed: " . mysqli_connect_error($conn));
} else {
    
}
?>