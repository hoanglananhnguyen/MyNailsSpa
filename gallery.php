<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nail gallery</title>

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
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="signup.php">Sign up</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="index-zim.html">TRY ME</a></li>    
        </ul>
    </nav>       
</header>  

<!--------- gallery -------->
<div class="gallery">
    <h1>Gallery</h1>
    <section id="gallery" 
        style="background-color: var(--beige);
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-content: center;
        padding: 50px;">
    </section>
       
    <a href="booking.php">
        <button class="btn" type='button'>BOOK YOUR APPOINTMENT </button>
    </a>
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

<script src="./assets/js/gallery.js"></script>
 
</body>
</html>