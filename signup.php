<?php 
//signup.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="./assets/css/signup.css">

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
    <div class="content" >
        <h1>Sign Up</h1>
        <div class="container">
            <form action="process-signup.php" method="POST"> 

                <label for="email">Email: </label>
                <input type="email" placeholder="rose@gmail.com" name="email" required /><br>

                <label for="username">Username: </label>
                <input type="text" name="username" /><br>

                <label for="password">Password: </label>
                <input type="text" name="password" /><br>
    
                <a href="signup.php"><div class="input"><button class="btn" type="submit" >SIGN UP</button></div>
                </a>

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