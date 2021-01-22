<?php 
include('./config/dbconnect.php');
session_start();
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="grey lighten-4">
    <nav class="nav-col z-depth-0">
        <div class="container">
            <a href="#" class='brand-logo brand-text'>Assignment</a>
            <ul id='nav-mobile' class="right hide-on-med-and-down">
                <li><a>Hello <?php echo $username; ?></a></li>
                <li><a href="home.php?logout='1'" style="color: #FF802C;"><b>Logout!</b></a></li>
            </ul>
        </div>
    </nav>
</body>

</html>