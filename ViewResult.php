<?php
 include("session_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result</title>
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

                <div class="col-md-8 col-lg-10 container">
                    <p>ViewResult</p>
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