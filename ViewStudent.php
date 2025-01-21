<?php
 include("session_check.php");
 include("connection.php");
 
 include("fetch_students.php");
 
$students = fetch_students();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css">
        <link href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" rel="stylesheet">
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
                    <h2>Students</h2>
                    <!-- Display Students -->
                    
                        <table id="view_student" class="table table-bordered table-hovered">
                            <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Class</th>
                                <th>Department</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($students) > 0): ?>
                                <?php foreach ($students as $row): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['snum']); ?></td>
                                        <td><?php echo htmlspecialchars($row['sname']); ?></td>
                                        <td><?php echo htmlspecialchars($row['dob']); ?></td>
                                        <td><?php echo htmlspecialchars($row['class']); ?></td>
                                        <td><?php echo htmlspecialchars($row['deptName']); ?></td>
                                    </tr>
                                <?php endforeach;?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">No students found.</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Student Number</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Class</th>
                                    <th>Department</th>
                                </tr>
				            </tfoot>
                        </table>
                    
                </div>
            </div>


            <?php
                include("footer.php");
            ?>
        </div>
        <!--<script src="https://code.jquery.com/jquery.js"></script>-->
        <script src="js/bootstrap.js"></script> 
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script> 
		<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script> 
		<script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script> 
		<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> 
		<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script> 
		<script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script> 
		<script>
		new DataTable('#view_student', {
			layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
			}
		});
		</script>
    </body>
</html>