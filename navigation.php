	<h4>Menu</h4>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
        </li>
		<?php if($_SESSION["ROLE"]=="admin"){?>
		<li class="nav-item">
            <a class="nav-link" href="ViewDepartments.php">View Department</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="RegisterStudent.php">Register Student</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewStudent.php">View Student</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="RegisterCourse.php">Register Course</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewCourse.php">View Course</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewInstructor.php">View Instructor</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewSection.php">View Section</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewTranscript.php">View Transcript</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ManageGradeReport.php">Manage Grade Report</a>
		</li>
		<?php } elseif($_SESSION["ROLE"]=="instructor"){?>
		<li class="nav-item">
			<a class="nav-link" href="ViewStudent.php">View Student</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewCourse.php">View Course</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ManageGradeReport.php">Manage Grade Report</a>
		</li>
		<?php } elseif($_SESSION["ROLE"]=="Student"){?>
		<li class="nav-item">
			<a class="nav-link" href="ViewTranscript.php">View Transcript</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewResult.php">View Result</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="ViewCourse.php">View Course</a>
		</li>
		<?php }?>
    </ul>
