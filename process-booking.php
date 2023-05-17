<?php 
//process-booking.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nail contact</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    

    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/gallery.css">
</head>
<body>
<div class="bg">
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
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$time= $_POST["time"];

// process variables
//insert data into database table
//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `booking`(`userId`, `name`, `email`, `phone`, `date`, `time`)
VALUES 
(NULL, '$name', '$email', '$phone', '$date', '$time');");


if($stmt->execute() == true){
    ?><h2>Thank you<h2><?php
}else{
    ?><a href="booking.php"><p>Under construction :") <p></a>
        
    <?php
}
?>
</div>
 
</body>
</html>