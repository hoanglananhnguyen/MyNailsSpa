<?php 
//process-login.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    

    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
<div>
<!--------- HEADER -------->
    <header>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="index-zim.html">TRY ME</a></li>    
   
            </ul>
        </nav>       
    </header>  

<!----- PHP ------>

<?php

//receive form variables
$username = $_POST["username"];
$password = $_POST["password"];

//check username & pw is correct/not
//compare submitted the username and password to the data in the database 
//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `user`.`username` = '$username'
AND `user`.`password` = '$password';
AND `user`.`role` = '$role';");


//execute
$stmt->execute();

// if u/p correct and role is member => show member-gallery.php
// else show error
if($row = $stmt->fetch()){
    //remember this user's logged-in status and their name
    $_SESSION["loggedIn"] = 1;
	$_SESSION["userId"] = $row["userId"]; 
	$_SESSION["username"] = $row["username"]; 
	$_SESSION["password"] = $row["password"]; 
	$_SESSION["role"] = $row["role"]; 
    if ($_SESSION["role"] == "admin"){
        //show admin-select-price.php
        header("Location: admin-select-price.php");
        } else {
        //show member-gallery
        header("Location: member-gallery.php");
        } 
    }
    else {  
    //fail        
    header("Location: fail-login.php");
    }
?>
</body>
</html>