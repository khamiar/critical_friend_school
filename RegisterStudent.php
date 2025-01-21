<?php
 include("session_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
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
                <h2>Register Student</h2>
                <div class="form-container">
                    <form action="registerStudentHandler.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="snum" class="form-label">Student Number</label>
                            <input type="text" class="form-control" id="snum" name="snum" placeholder="Enter student number" required>
                        </div>

                        <div class="mb-3">
                            <label for="sname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter full name" required>
                        </div>

                        <div class="mb-3">
                            <label for="deptID" class="form-label">Department ID</label>
                            <input type="number" class="form-control" id="deptID" name="deptID" placeholder="Enter department ID" required>
                        </div>

                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>

                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input type="number" class="form-control" id="class" name="class" placeholder="Enter class" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                        
                    </form>
                </div>

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
