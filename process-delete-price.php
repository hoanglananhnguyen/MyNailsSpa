<?php
//process-delete-price.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process delete price</title>

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
                <li><a href="admin-select-price.php">Price list</a></li>
			    <li><a href="add-price.php">New service</a></li>
                <li><a href="logout.php">Log out</a></li> 
            </ul>
        </nav>       
    </header>  
    <!-- <div class="bg" style="height: 100%;"> -->
<!----- PHP ------>
<?php
//receive the serviceId via POST
$serviceId= $_POST["serviceId"];

//delete a record using the imageId
//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE 
    FROM `prices` 
    WHERE `prices`.`serviceId` = $serviceId;");

if($stmt->execute() == true){
    ?><div class="container"></div><?
    ?><p>Your data was sucessfully deleted</p>
    <?php
}else{
    ?><a href="admin-select-price.php"><p>Please try again</p></a>
     
    <?php
}
?>
<a href="admin-select-price.php">Back to your price list</a> 
</div>
</body>
</html>
