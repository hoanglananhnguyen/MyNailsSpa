<?php 
//login.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>

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
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="index-zim.html">TRY ME</a></li>    
    
        </ul>
    </nav>       
</header>   

<!--------------form -------------->
    <div class="content">
        <h1>Welcome back</h1>
        <div class="container">
            <form action="process-login.php" method="POST"> 

                <label for="username">Username: </label>
                <input type="text" name="username" /><br>

                <label for="password">Password: </label>
                <input type="text" name="password" /><br>
    
                <button class="btn" type="submit" >LOG IN</button>

                <a href="home.php"><div class="input"><button class="btn" type="submit">CANCEL</button></div>
                </a>

            </form>
        </div>
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

 
</body>
</html>