<?php 
//booking.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nail booking</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    

    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>
<body>
   
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
    <div class="bg"> 
    <!--------- booking -------->
    
        <div class="content">
            <h1>Book your appointment</h1>
            <div class="container">
                <form action="process-booking.php" method="POST">

                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="rose" required/><br>

                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="rose@gmail.com" required/><br>

                    <label for="phonenumber">Phone Number: </label>
                    <input type="text" name="phone" placeholder="123 456 7890" required/><br>

                    <label for="date">Date: </label>
                    <input type="date" name="date" placeholder="123 456 7890" required/><br>

                    <label for="time">Time: </label>
                    <input type="time" name="time" placeholder="123 456 7890" required/><br>

                   <button class="btn" type="submit" value="submit">SUBMIT</button>
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