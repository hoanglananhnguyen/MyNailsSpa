<?php 
//update-price.php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update photo</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/login.css">     

</head>

<body>
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
    <div class="bg" src ="./assets/image/contact.png" style="height: 120%;">

<!----- PHP ------>
<?php

//RECEIVE imageId
$serviceId= $_GET["serviceId"];

//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * 
    FROM `prices`  
    WHERE `serviceId` = $serviceId; ");

$stmt->execute();
$row = $stmt->fetch();

//allow member to edit their gallery
?>
<div class="content">
    <h1>Update price list</h1>
    <div class="container">
        
        <form action="process-update-price.php" method="POST">

        <table>
            <tr> 
                <td>
                    Service <input type="text" name="service" value="<?= $row["service"]; ?>">
                </td>

                <td>
                    Price <input type="text" name="price"  value="<?= $row["price"]; ?>">   
                </td>

                <td>
                <input type="hidden" name="priceId" value="<?= $row["priceId"] ?> ">   
                </td>
            </tr>
        </table>

            <button class="btn" type="submit" value="SAVE"><a href="process-update-price.php" style="color:white">SAVE</a></button>
            <button class="btn" type="submit"><a href="admin-select-price.php" style="color:white">CANCEL</a></button>
        </form>

</div>

</body>
<html>