<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css">
</head>
<body class="login">
    <div class="container-fluid">
        
        <div class="row header py-3 align-items-center d-flex justify-content-between">
            <h1 class="col-md-auto">STUDENT SYSTEM RESULT</h1>
            <div class="col-md-auto">
                <img src="suza.png" alt="logo" height="auto" width="100">
            </div>
        </div>
 

        <div class="row welcome py-2">
            <h5>Welcome To Student Result System</h5>
        </div>

        <div class="main-content">
            <div class="login-form">
                <?php if(isset($_GET["msg"]))
                {
                ?>
                <p style="color:red; text-align:center">
                        <?php echo $_GET["msg"] ?>
                </p>
                
                <?php
                }
                ?>
                <h3>Login</h3>
                <form action="loginHandler.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter user name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>

        <?php
			include("footer.php");
		?>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script> 
</body>
</html>
