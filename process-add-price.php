<?php
//process-add-price.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add photo</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
	<link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/gallery.css">

</head>
<div class="bg" style="height: 100%;">
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

<?php
$serviceId = $_POST['serviceId'];
$service = $_POST['service'];
$price = $_POST['price'];

//insert data to the database
//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
	
$stmt = $pdo->prepare("INSERT INTO  `prices`
(`serviceId`, `service`, `price`)  
VALUES (NULL, '$service','$price');");

if($stmt->execute() == true){ 
	?><p>Your data was sucessfully added<p><?php
}else{
	?><p>Your data could not be inserted<p><?php			
}
?>

<a href="admin-select-price.php">Back to pricelist</a>

</div>
</body>
</html>
