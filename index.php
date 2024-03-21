<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home page</title>
</head>
<body>

<div class="container mt-5 text-center">
    <h2 class="text-center mt-5">Welcome <?php echo $_SESSION["username"] ?> </h2>    
    <a href="logout.php" class="btn btn-primary mt-3">Logout</a> <!-- corrected class attribute -->
</div>

</body>
</html>
