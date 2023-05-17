<?php 
//process-update-photo.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update photo</title>
    <link rel="icon" href="./assets/image/favicon.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="./assets/css/gallery.css">
</head>
<body>
<div class="bg" style="height: 120%;">
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
    //receive variables needed by this script
    $imageId = $_POST['imageId'];
    $imageName = $_POST['imageName'];
    $userId = $_SESSION['userId'];
    $shape = $_POST['shape'];
    $type = $_POST['type'];

    if(isset($_POST['shape'])){ 
         $shape=$_POST['shape'];}
    
    if(isset($_POST['type'])){ 
         $type=$_POST['type'];}
   
   //upload the file
   
   $uploaddir = "uploads/";
   $uploadfile = $uploaddir . basename($_FILES["image"]["name"]);
   
   $imageName = $_FILES["image"]["name"];
   
   if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadfile)) {
       ?><p>File is valid, and was successfully uploaded.</p><?php
   } else {
       ?><p>Possible file upload attack!</p>
       <a href="update-photo.php">Please try again</a>
    
       <?php
   }

    //update specified record in table
    //connect
    $dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "root";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    //prepare

    $stmt = $pdo->prepare("UPDATE `gallery` 
        SET  
        `imageId` = '$imageId', 
        `imageName` = '$imageName', 
        `userId` = '$userId', 
        `shape` = '$shape', 
        `type` = '$type'
        WHERE `gallery`.`imageId` = '$imageId'
        AND `userId` = '$userId';");

   
        if($stmt->execute() == true){ 
            ?><p>Your gallery was sucessfully updated.<p><?php
        }else{
            ?><p>Your photo could not be inserted.<p><?php
        }
?>
<a href="member-gallery.php">Back to gallery</a>
</div>

</body>
</html>


