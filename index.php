<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>RemiAlert - Home</title>
    <link rel="stylesheet" href="styles/animatehome.css">
    <script src="js/script.js"></script>
    
    

    
</head>
<header id="header">
        <!-- <h2 class="logo">RemiAlert</h2> -->
        <img src="img/logov2.png" alt="Logo" height="60px">
        <nav class="navigation">
            <a href="/index.php">Home</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <button class="btnLogin-popup" onclick="redirectToLogin()">Login</button>
            <button class="btnSignup-popup" onclick="redirectToSignup()">Sign Up</button>
            
        </nav>
        <script src="js/scriptanim.js"></script> 

</header>



<section class="parallax">
        <img src="img/animate/bgimage.png" id="bgimage">
        <!--<img src="img/animate/example1.png" id="example1">
        <img src="img/animate/example2.png" id="example2"> -->
        <img src="img/animate/calender.png" id="calender">
        <img src="img/animate/car.png" id="car">
        <img src="img/animate/girl.png" id="girl">
        <h2 id="text"> Stay Organized.</br>Never Miss a Bill or Event</h2>
        <img src="img/animate/rocket.png" id="rocket">
        <img src="img/animate/desk.png" id="desk">
        
        <script>
            let text = document.getElementById('text');
            let rocket = document.getElementById('rocket');
            let bgimage = document.getElementById('bgimage');
            let calender = document.getElementById('calender');
            let car = document.getElementById('car');

            window.addEventListener('scroll', () => {
            let value = window.scrollY;

            text.style.marginTop = value * 2.5 + 'px';
            rocket.style.top = value * -1.5 + 'px';
            rocket.style.left = value * 1.5 + 'px';
            car.style.left = value * 1.5 + 'px';
            calender.style.left = value * -1.5 + 'px';
            calender.style.top = value * -1.5 + 'px';
            // bgimage.style.top = value * 1 + 'px';
            bgimage.style.top = value * 0.5 + 'px';
            });
        </script>
        
        
    </section>
<br><br>

    <section class="sec">
        <h2 class="features-heading">FEATURES</h2>
        <div class="container">
        <div class="image">
            <img src="img/featuresgi.png" alt="Image">
        </div>
        <div class="icon">
          <br><br><br>
            <img src="img/notification.png" alt="Icon" height="50px" width="50px">
            <p class="text">Personalised Notifications</p>
            <br><br>
            <img src="img/tracking50.png" alt="Icon" height="50px" width="50px" >
            <p class="text">Reminders & Tracking</p>
            <br><br>
            <img src="img/calendar.png" alt="Icon" height="50px" width="50px" >
            <p class="text">Calender</p>
        </div>
        <div class="icon2">
          <br><br><br>
          <img src="img/dash.png" alt="Icon" height="50px" width="50px">
            <p class="text">Dashboard</p>
            <br>
            <img src="img/signup.png" alt="Icon" height="50px" width="50px" >
            <p class="text">Easy Signup</p>
            <br><br>
            <img src="img/support.png" alt="Icon" height="50px" width="50px" >
            <p class="text">Support</p>
        </div>
    </div>
    </section>

    <section class="sec2">
    <p class="text">Why Choose our service?</p>
    <h2 class="benifits-heading">The benefits</h2>
    <p class="text">Choose RemiAlert for hassle free bill management and event reminder system.Our inttuitive interface,
    <br> reliable reminders and seamless integration make staying organized a breeze.</p>
    <div class="btnarea">
    <button class="get-started-btn">Get Started</button>
    <br><br>
</div>
    </section>


<section class="sec3">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>






    

    <footer>
  <div class="footer-column">
  <img src="img/logov2white.png" alt="Logo">
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
      <a href="https://www.facebook.com/"><img src="img/fb-ico.svg" alt="Facebook"></a>
      <a href="https://www.instagram.com/"><img src="img/insta-ico.svg" alt="Twitter"></a>
      <a href="https://www.youtube.com/"><img src="img/yt-ico.svg" alt="Instagram"></a>
      <a href="https://www.linkedin.com/"><img src="img/linkedin-ico.svg" alt="Linkedin"></a>
    </div>
    
    <div class="footer-newsletter">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
  </div>
</div>
<div class="copyright">
    <p>© Copyright 2024. All Rights Reserved (MET_WD_04 Group)</p>
  </div>
</footer>
</body>
</html>