<?php
//add-price.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add price</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    
	<link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/login.css">

</head>

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

<!--------------form -------------->
	<div class="content">
		<h1>Insert new service</h1>
		<div class="container">
			<form action="process-add-price.php" method="POST">
				
            <table>
            <tr> 
                <td>
                    Service <input type="text" name="service">
                </td>

                <td>
                    Price <input type="text" name="price">   
                </td>
            </tr>
            </table>

            <button class="btn" type="submit">SUBMIT</button>
			<button class="btn" type="submit"><a href="admin-select-price.php">CANCEL
            </a></button>
				
			</form>
	</div>


</div>
 
</body>
</html>