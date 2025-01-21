<?php
include("session_check.php");
include("connection.php");

// Handle Add Department Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deptName'])) {
    $deptName = $_POST['deptName'];

    if (!empty($deptName)) {
        $query = "INSERT INTO department (deptName) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $deptName);

        if ($stmt->execute()) {
            header("Location: ViewDepartments.php?msg=Department added successfully");
        } else {
            header("Location: ViewDepartments.php?msg=Error adding department: " . htmlspecialchars($stmt->error));
        }
    } else {
        header("Location: ViewDepartments.php?msg=Department name is required");
    }
    exit;
}

// Handle Delete Department Request
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['deptID'])) {
    $deptID = $_GET['deptID'];

    $query = "DELETE FROM department WHERE deptID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $deptID);

    if ($stmt->execute()) {
        header("Location: ViewDepartments.php?msg=Department deleted successfully");
    } else {
        header("Location: ViewDepartments.php?msg=Error deleting department: " . htmlspecialchars($stmt->error));
    }
    exit;
}

// Redirect to ViewDepartments.php if no valid request
header("Location: ViewDepartments.php?msg=Invalid request");
exit;
?>
