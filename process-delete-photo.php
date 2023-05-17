<?php
//process-delete-photo.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process delete photo</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    
    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/gallery.css">     

</head>

<body>

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
    <!-- <div class="bg" style="height: 100%;"> -->
<!----- PHP ------>
<?php
//receive the imageId via POST
$imageId= $_POST["imageId"];

//delete a record using the imageId
//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE 
    FROM `gallery` 
    WHERE `gallery`.`imageId` = $imageId;");

if($stmt->execute() == true){
    ?><div class="container"></div><?
    ?><p>Your photo was sucessfully deleted</p>
    <?php
}else{
    ?><a href="member-gallery.php"><p>Please try again</p></a>
     
    <?php
}
?>
<a href="member-gallery.php" style="">Back to your gallery</a> 
</div>
</body>
</html>
