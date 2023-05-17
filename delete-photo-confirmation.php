<?php 
session_start();
//delete-photo-confirmation.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete photo confirmation</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">   
    <link rel="icon" href="./assets/image/favicon.png"> 
    <link rel="stylesheet" href="./assets/css/login.css">     

</head>

<body>
<div class="bg" style="height: 100%;">
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
//receive the variables that this script needs to run
$imageId = $_GET["imageId"];

//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * 
    FROM `gallery` 
    WHERE `imageId` = $imageId;");

$stmt->execute();
$row = $stmt->fetch();

//show confirmation screen

?>  
    <div class="content">
    <h1>Delete your photo</h1>
    <div class="container">
    <label>Are you sure you want to delete this photo?</label><br>
    <br><label>Image Id: <?= $row["imageId"]?></label><br>
    <label>Image Name: <?= $row["imageName"]?></label><br>
    <img src="uploads/<?= $row["imageName"] ?>"><br>

    <form action="process-delete-photo.php" method="POST">
    <input type="hidden" name="imageId" value="<?= $row["imageId"]?> "><br>
    
    <button class="btn" type="submit">CONFIRM DELETE</button>
    <a href="member-gallery.php">
        <button class="btn" type="submit">CANCEL</button>
    </a>
    
    

    </form>
    </div>
    </div>

</body>
</html>