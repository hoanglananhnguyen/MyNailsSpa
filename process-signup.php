<?php 
//process-signup.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    

    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/signup.css">
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
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

// process variables
//insert data into database table
//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `user`(`userId`, `email`, `username`, `password`, `role`)
VALUES 
(NULL, '$email', '$username', '$password', '');");


if($stmt->execute() == true){
    ?><div class="container"></div><?
    ?><h2>Congratulations. Your account was created.<h2>
    <button class="btn"><a href="login.php" style="">LOG IN</a></button>   
    <?php
}else{
    ?><a href="signup.php"><h2>Please try again<h2></a>
     
    <?php
}
?>

</div>

 
</body>
</html>