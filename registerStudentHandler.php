<?php
session_start();

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $snum = $_POST["snum"];
    $sname = $_POST["sname"];
    $deptID = $_POST["deptID"];
    $dob = $_POST["dob"];
    $class = $_POST["class"];

    if (empty($snum) || empty($sname) || empty($deptID) || empty($dob) || empty($class)) {
        header("location:registerStudent.php?msg=All fields are required");
        exit;
    }

    $query = "INSERT INTO student (snum, sname, deptID, dob, class) 
        VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssisi", $snum, $sname, $deptID, $dob, $class);

    $user_qstr = "INSERT INTO user VALUES('$snum','$sname','Student')";
		$query2= mysqli_query($conn, $user_qstr) or die("Operation Failed");
		header("location:registerStudentHandler.php");


    if ($stmt->execute()) {
        header("location:registerStudent.php?msg=Student registered successfully");
    } else {
        header("location:registerStudent.php?msg=Error registering student: " . $conn->error);
    }

    $stmt->close();
    $conn->close();
} else {
    header("location:registerStudent.php");
    exit;
}


?>
