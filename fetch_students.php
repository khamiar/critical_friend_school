<?php
// Include the database connection
include("connection.php");
function fetch_students() {
    global $conn;
    // Fetch all students
    $query = "SELECT s.snum, s.sname, s.dob, s.class, d.deptName 
        FROM student s 
        JOIN department d ON s.deptID = d.deptID";
    $result = $conn->query($query);

    // Return the result
    if ($result && $result->num_rows > 0) {
        $students = [];
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
        return $students;
    } else {
        return [];
    }
}
?>
