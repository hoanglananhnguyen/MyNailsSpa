<?php //admin-select-price.php?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin select price</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/login.css">     

</head>

<!--------------body -------------->
<body>
<div class="bg">
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
session_start();	

$userId = $_SESSION["userId"];
$username = $_SESSION["admin"];
$password = $_SESSION["password"];

	//connect
	$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
	$dbusername = "root";
	$dbpassword = "root";

	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	//prepare
	$stmt = $pdo->prepare("SELECT * FROM `prices`");
	
	//execute
	$stmt->execute();

	//display/process results
	?><h1> Price Lists:</h1>
	<div class="content" style="display: flex;justify-content: center;">
	<table style="width:80%">
	<?php
	while($row = $stmt->fetch()) {     
	?>	
			<tr>
				<td><?= $row["serviceId"]; ?></td>
				<td><?= $row["service"]; ?></td>
				<td><?= $row["price"]; ?></td>
				<td><a class ="btn-2" href="delete-price-confirmation.php?serviceId=<?= $row["serviceId"]; ?>">DELETE</a></td>
				<td><a class ="btn-2" href="update-price.php?serviceId=<?= $row["serviceId"]; ?>">UPDATE</a></td>
			</tr>

	<?php } ?>
	</table>
	</div>
    <!-- <script src="price-ajax.js"></script> -->

</body>
</html>

