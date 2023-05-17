<?php 
session_start();
//delete-price-confirmation.php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete price confirmation</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">   
    <link rel="icon" href="./assets/image/favicon.png"> 
    <link rel="stylesheet" href="./assets/css/login.css">     
    <style>
        tr, td { color:var(--beigh);
        }
    </style>
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
    <div class="bg" style="height: 100%;">

<!----- PHP ------>
<?php
//receive the variables that this script needs to run
$serviceId = $_GET["serviceId"];

//connect
$dsn = "mysql:host=localhost;dbname=nails_project;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "root";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * 
    FROM `prices` 
    WHERE `serviceId` = $serviceId;");

$stmt->execute();
$row = $stmt->fetch();

//show confirmation screen

?>  
    <div class="content">
    <h1>Delete your data</h1>
    <div class="container">
    <p>Are you sure you want to delete this data?</p><br>
        
    <table>
        <tr>
            <td><?= $row["serviceId"]; ?></td>
			<td><?= $row["service"]; ?></td>
			<td><?= $row["price"]; ?></td>
        </tr> 
    </table>

    <form action="process-delete-price.php" method="POST">
    <input type="hidden" name="serviceId" value="<?= $row["serviceId"]?> "><br>


    <button class="btn" type="submit">CONFIRM DELETE</button>
    <a href="admin-select-price.php">
        <button class="btn" type="submit">CANCEL</button>
    </a>
    
    </form>
    </div>
    </div>

</body>
</html>