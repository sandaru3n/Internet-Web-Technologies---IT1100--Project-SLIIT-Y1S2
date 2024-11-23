<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="styles/contactstyle.css">
    <script src="js/script.js"></script>
</head>

<body>

<header>
        <!-- <h2 class="logo">RemiAlert</h2> -->
        <img src="img/logov2.png" alt="Logo" height="60px">
        <nav class="navigation">
            <a href="/">Home</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <button class="btnLogin-popup" onclick="redirectToLogin()">Login</button>
            <button class="btnSignup-popup" onclick="redirectToLogin()">Sign Up</button>
        </nav>
    </header>


    <div>
        <h1 class="contact-heading">Contact Us </h1>
        <p class="contact-para">We are here to help you with any questions, concerns, or feedback you may have about our platform - Feel free to contact us.</p>
    <div>

    <br>
    <div class="container">
        <div class="form">
            <form action="#" method="post">
                <br>
                <br>
                
                <label for="name"></label><br>
                <input type="text" id="name" name="name" placeholder="Name"> <br>
                <label for="email"></label><br>
                <input type="email" id="email" name="email" placeholder="Email"><br>
                <label for="message"></label><br>
                <textarea id="message" name="message" rows="7" cols="30" placeholder="Message"></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        
        <div class="contact-details">
            <br>
        
            <div class="contact-methods">
            
                <div>
                    <img src="img/phone22.png" alt="Phone" height="100px" width="100px" >
                    (+94) 11-234-5198
                </div>
                <div>
                    <img src="img/mail22.png" alt="Email">
                    admin@domain.com
                </div>
                <div>
                    <img src="img/location22.png" alt="Mail">
                    No 155, ABC Street, Kingsburg, Colombo 5
</div>

            <div class="map">
                <!-- Replace this with your map embed code -->
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=280&amp;hl=en&amp;q=sliit%20metro+(Remialert)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="450" height="280" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            
            </div>
        </div>
    </div>
            
    </div>
    </div>
    
</body>





<footer>

  <div class="footer-column">
    <img src="img/logov2white.png" alt="Logo">
    <!-- <h2 class="Footerlogo">RemiAlert</h2> -->
    <p>Simplify your life with RemiAlert's convenient bill and event reminder system, designed to streamline your tasks and keep you organized.</p>
  </div>
  <div class="footer-column">
    <h3>Information</h3>
    <ul>
      <li><a href="#">Terms & Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="footer-column">
    <h3>Quick Links</h3>
    <ul>
      <li><a href="#">Terms & Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div class="footer-column">
    <h3>Follow Us</h3>
    <div class="social-media">
      <a href="#"><img src="img/fb-ico.svg" alt="Facebook"></a>
      <a href="#"><img src="img/insta-ico.svg" alt="Twitter"></a>
      <a href="#"><img src="img/yt-ico.svg" alt="Instagram"></a>
      <a href="#"><img src="img/linkedin-ico.svg" alt="Linkedin"></a>
    </div>
    
    <div class="footer-newsletter">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
  </div>
</div>
<div class="copyright">
    <p>© Copyright 2024. All Rights Reserved</p>
  </div>
</footer>
            
</body>
</html>