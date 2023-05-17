<?php 
session_start();
//member-gallery.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nail gallery</title>

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
            <li><a href="member-gallery.php">My gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="add-photo.php">Add photo</a></li>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="index-zim.html">TRY ME</a></li>       
        </ul>
    </nav>       
</header>

<!----- PHP ------>
<?php
$userId = $_SESSION["userId"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];

//get data for that user??

//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `gallery`
WHERE `userId` = $userId;");

//execute
$stmt->execute();
?><div class="container">
<h1>User's corner</h1>
<button class="btn-2"><a href="add-photo.php">Add your new look</a></button>
<?echo($username = $_SESSION["username"];
)?>
<?php 
while($row = $stmt->fetch()) {  
     
    ?> <div class="item">
        <img src="uploads/<?= $row["imageName"]; ?>">
        <div class="item-info">
        <div class="description">
            <p><?= $row["imageName"]; ?></p>
            <p>Image Id: <?= $row["imageId"]; ?></p>
            <p>Shape: <?= $row["shape"]; ?></p>
            <p>Type: <?= $row["type"]; ?></p>
        </div>
        
        <div class="container-btn">
            <a href="delete-photo-confirmation.php?imageId=<?= $row["imageId"]; ?>">
	        DELETE </a>
	       
	        &nbsp;
	        <a href="update-photo.php?imageId=<?= $row["imageId"]; ?>">
            UPDATE</a>
        </div>
</div>
</div>
    </div>
    <?php
    } ?>
    

    <br>
</div>
    

<script src="./assets/js/gallery.js"></script>
 
</body>
</html>