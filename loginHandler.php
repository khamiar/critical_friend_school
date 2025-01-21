<?php
session_start();
	if(isset($_POST["login"])){
		include("connection.php");
		
		$user = $_POST["username"];
		$pass= $_POST["password"];
		$query_string = "SELECT * FROM user WHERE username ='$user' AND password ='$pass'";
		$query = mysqli_query($conn, $query_string) or die("Error");
		$num = mysqli_num_rows($query);
		if($num==1){
			$row = mysqli_fetch_array($query);
			$_SESSION["USERNAME"] = $user;
			$_SESSION["ROLE"] = $row["role"];
			header("location:Home.php");
		}else{
			header("location:index.php?msg=Wrong username or Password");
		}
		
	

	}
?>