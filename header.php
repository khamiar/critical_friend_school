<div class="row header py-3 align-items-center d-flex justify-content-between">
    <h1 class="col-md-auto">STUDENT SYSTEM RESULT</h1>
    <div class="col-md-auto">
        <img src="suza.png" alt="logo" height="auto" width="100">
    </div>
</div>
 
<div class="row welcome py-2">
        
    <div class="col-md-6 user-info">
    User: <?php echo $_SESSION["USERNAME"]?>        Role: <?php echo $_SESSION["ROLE"]?>
    </div>
    <div class="col-md-6 text-end">
        <a href="#" class="btn btn-light btn-sm me-2">Change Pasword</a>
        <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
    </div>
        
</div>