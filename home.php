<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nail home</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">    

    <link rel="icon" href="./assets/image/favicon.png">
    <link rel="stylesheet" href="./assets/css/home.css">
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

<!--------- hero -------->
    <section class="hero">
        <img class="logo" src="./assets/image/logo-white.png" alt="Logo">
        <h1>Welcome to Nails & Spa</h1>
    </section>

<!--------- gallery -------->
<div class="gallery-container">
    <h2>Gallery</h2>
        <section id="gallery">
                
        </section>
       
    <a href="booking.php"><button class='btn' type='button'>BOOK YOUR APPOINTMENT </button></a>
</div>

<!--------- services -------->
    <section class="services">
        <div class="services-intro">
            <h2>Services</h2>
            <p>Have a relaxing time and be more beautiful after enjoying high-end services at one of the best nail salons in the industry.</p>
        </div>

        <div class="services-description">
            <div class="dot">
                <p class="text">Manicure Services</p>
            </div>
        
            <div class="dot">
                <p class="text">Pedicure Services</p>
            </div>

            <div class="dot">
                <p class="text">Nail Enhancements</p>
            </div>
           
            <div class="dot">
                <p class="text">Additional Services</p>
            </div>
        </div>        
        
        <div class="output-container">
            <button class="btn-2" id="showOutput">View Price</button>
                <section id="output" >
                   
                </section>
        </div>
    </section>

<!--------- contact -------->
<section class="contact">
    <div class="container">
        <div class="image fade">
            <img src="assets/image/contact1.png" style="width:100%">
        </div>

        <div class="image fade" >
            <img src="assets/image/contact2.png" style="width:100%">
        </div>

        <div class="image fade">
            <img src="assets/image/contact4.png" style="width:100%">
        </div>
    
        <div class="slider-btn">
            <a id="prev" onclick = "plusSlides(-1)" style="color:#73766A">&lt;</a>
            <a id="next" onclick = "plusSlides(1)" style="color:#73766A">&gt;</a>
        </div>
    </div>

        <div class="info">
            <div class="info-detail">
                <h3>Visit Us</h3>
                <p>624 Lillington Hwy Ste #100</p>
                <p>Spring Lake, NC 28390</p>
            </div>

            <div class="info-detail">
                <h3>Opening Hours</h3>
                <p>Mon – Sat: 9 AM – 7 PM</p>
                <p>Sun: 12 PM – 5 PM</p>
            </div>

            <div class="info-detail">
                <h3>Contact Us</h3>
                <p>(910) 436-0098</p>
                <p>mynailsandspaspringlake@gmail.com</p>
            </div>
        </div>
</section>
            
<!--------- booking -------->
    <section class="booking">
        <div class="">
            <h2>Book your appointment</h2>
        </div>
        <div class="booking-form">
       
        <div class="container">
            <form action="process-booking.php" method="post">

                <label for="name">Name: </label>
                <input type="text" name="email" placeholder="rose" required/><br>

                <label for="email">Email: </label>
                <input type="text" name="email" placeholder="rose@gmail.com" required/><br>

                <label for="phonenumber">Phone Number: </label>
                <input type="text" name="phonenumber" placeholder="123 456 7890" required/><br>

                <label for="date">Date: </label>
                <input type="date" name="date" required/><br>

                <label for="time">Time: </label>
                <input type="time" name="time" required/><br>

                <button class="btn-reverse" type="submit" value="submit">SUBMIT</button>
            </form>
        </div>

        <div class ="container-img">
            <img  src="./assets/image/booking.png"></img>
        </div>
   
    </section>

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
    
<script src="./assets/js/gallery-home.js"></script>

<script src="./assets/js/price-ajax.js"></script>

<script src="./assets/js/slider.js"></script>

</body>
</html>

