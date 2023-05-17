<?php 
//process-update-price.php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update price</title>
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
                <li><a href="admin-select-price.php">Price list</a></li>
			    <li><a href="add-price.php">New service</a></li>
                <li><a href="logout.php">Log out</a></li> 
            </ul>
        </nav>       
    </header>  
    
<!----- PHP ------>
    <?php
    //receive variables needed by this script
    $serviceId = $_POST['serviceId'];
    $service = $_POST['service'];
    $price = $_POST['price'];

    //update specified record in table
    //connect
    $dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "root";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    //prepare

    $stmt = $pdo->prepare("UPDATE `prices` 
        SET  
        `serviceId` = '$serviceId', 
        `service` = '$service', 
        `price` = '$price'
       
        WHERE `prices`.`serviceId` = '$serviceId';");

        if($stmt->execute() == true){ 
            ?><p>Your price list was sucessfully updated.<p><?php
        }else{
            ?><p>Your data could not be inserted.<p><?php
        }
?>
<a href="admin-select-price.php">Back to price list</a>
</div>

</body>
</html>


