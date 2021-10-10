<?php 

	include("php/connection.php");
	include("php/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Care System</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue|Exo">
</head>
<body>
    <header>
         <div class="wrapper">
         <ul class="menu">
            <div class="dropdown">
                <li><button class="dropbtn"><i class="fas fa-sign-in-alt"></i>Login</button>
                <div class="dropdown-content">
                <a href="admin_login&signup.php"><i class="fas fa-sign-in-alt" id="icon"></i>Admin</a>
                <a href="parent_login&signup.php"><i class="fas fa-sign-in-alt" id="icon"></i>Parent</a>
                </div>
              </div></li>
              <li><a href="php/signup.php">Sign up</a></li>
         </ul>
        </div>
        <div class="text">
            <h1>Child Care System</h1>
            <p>It's important to keep your family's immunization records<br>
                up to date, especially for your child. Child Care System is <br> 
                enabled for managing your child's immunization records,  <br>
                and for sending immunization schedule reminders to you.</p>
                 <img src="admin/cc.png" class="b3">
        </div>
    </header>
    <footer>
        <div class="container">
    <center>
        <p>© 2021 Capstone Project | All Rights Reserved </p>
    </center>
    </div>
    </footer>
</body>
</html>