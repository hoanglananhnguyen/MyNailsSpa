<?php
//add-photo.php
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
    <link rel="stylesheet" href="./assets/css/login.css">

</head>

<body>
<div class="bg">
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

<!--------------form -------------->
	<div class="content">
		<h1>Upload your new look</h1>
		<div class="container">
			<form action="process-add-photo.php" method="POST" enctype="multipart/form-data">
				
                <input type="file" name="image"><br>

				<label for="shape">Shape: </label><br>
                <input type="radio" id="round" name="shape" value="round">
				<label for="round">Round</label>
				<input type="radio" id="square" name="shape" value="square">
				<label for="square">Square</label>
				<input type="radio" id="almond" name="shape" value="almond">
				<label for="almond">Almond</label><br>

				<br><label for="type">Type: </label><br>
				<input type="radio" id="shellac" name="type" value="shellac">
				<label for="shellac">Shellac</label>
				<input type="radio" id="gel" name="type" value="gel">
				<label for="gel">Gel</label><br>
	
				<button class="btn" type="submit">SUBMIT</button>
				<button class="btn" type="submit"><a href="member-gallery.php">CANCEL
                </a></button> 
				
			</form>
	</div>

<!---------------- footer --------------->
<footer>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>  

</footer> 
</div>
<!-- <script src="main.js"></script> -->
 
</body>
</html>