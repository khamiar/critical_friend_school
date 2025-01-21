<?php
 include("session_check.php");
 include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Departments</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="Styles.css">
    </head>
    <body>
        <div class="container-fluid">
        

            
            <?php
                include("header.php");
            ?>
            


            <div class="row g-4 main-content">
                <div class="col-md-3 sidebar">
                    <?php
                        include("navigation.php");
                    ?>
                </div>

                <div class="col-md-9 content">
                    <h2>Manage Departments</h2>
                    <div class="form-container mb-4">
                        <form action="handledepartment.php" method="POST" class="d-flex">
                            <input type="text" class="form-control me-2" name="deptName" placeholder="Enter department name" required>
                            <button type="submit" class="btn btn-primary">Add Department</button>
                        </form>
                    </div>
                    <hr>
                <h3>Existing Departments</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Department ID</th>
                            <th>Department Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch departments from the database
                        $query = "SELECT * FROM department";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>{$row['deptID']}</td>
                                    <td>{$row['deptName']}</td>
                                    <td>
                                        <a href='handledepartment.php?deptID={$row['deptID']}' class='btn btn-danger btn-sm'>Delete</a>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No departments found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>


            <?php
                include("footer.php");
            ?>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.js"></script> 
    </body>
</html>