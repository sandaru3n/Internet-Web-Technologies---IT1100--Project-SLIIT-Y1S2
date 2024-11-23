<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title> RemiAlert - User Dashboard - Bill Types</title>
    <link rel="stylesheet" type="text/css" href="styles/addbillstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/script.js"></script>
</head>

    <header>
        <img src="img/logov2.png" alt="Logo" height="60px">
        <nav class="navigation">
            <a href="/userdashboard.php">Dashboard</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <button class="btnLogout-popup" onclick="redirectToLogout()">Log out</button>
        </nav>
       
</header>


<div class="user-profile">
    <img src="img/profile.jpg" alt="Profile Picture" class="profile-pic"> 
    
    <span class="username">
    <?php echo $user_data['user_name']; ?><br>
    <?php echo 'example@mail.com'; ?></span>
    </div>

<body>
<div>
<h1 class="dashbooard" > BILL TYPES </h1>
</div>	


<div class="box-container1">
  <a href="/addphone.php"  class="box">
  <img src="img/phone.png" height="85px" width="85px">  <span class="box-text">Phone</span>
  </a>
  <a href="/addinternet.php" class="box">
  <img src="img/internet.png" height="85px" width="85px"> <span class="box-text">Internet</span>
  </a>
 
  <a href="/addinsurance.php" class="box">
  <img src="img/insurance.png" height="85px" width="85px">   <span class="box-text">Insurance</span>
  </a>
  <a href="/addwater.php" class="box">
  <img src="img/water.png" height="85px" width="85px">  <span class="box-text">Water</span>
  </a>
  
  <a href="/addelectricity.php"  class="box">
  <img src="img/electricity.png" height="85px" width="85px">  <span class="box-text">Electricity</span>
  </a>
  <a href="/addother.php" class="box">
  <img src="img/others.png" height="85px" width="85px"> <span class="box-text">Other</span>
  </a>
  
</div>

<div class="box-container2">
<button class="btn2" onclick="redirectToCustomLink()">  Back </button>
</div>


<script>
  function redirectToCustomLink() {
    window.location.href = "/userdashboard.php";
  }
</script>



</body>

<!--footer--------------------------------------------------------------------------------->
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