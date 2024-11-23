<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();



	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


  if ($_SERVER['REQUEST_METHOD'] == "POST" )
{
    //something was posted
    $bill_title = $_POST['bill_title'];
    $bill_des = $_POST['bill_des'];
    $rem_time = $_POST['rem_time'];
    $rem_date = $_POST['rem_date'];

    if(!empty($bill_title) && !empty($bill_des) && !empty($rem_time) && !empty($rem_date)  )
    {
        //save to database
        $user_name = $user_data['user_name'];
        $bill_id = random_phone(30);
        $category= 'internet';
        $query = "insert into addbill (bill_id,category,bill_title,bill_des,rem_time,rem_date,user_name) values ('$bill_id','$category','$bill_title','$bill_des','$rem_time','$rem_date','$user_name')";


        mysqli_query($con, $query);

        header("Location: billeventadded.php");
        die;

    }else
    {
        echo "Please enter some valid info";
    }


}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title> RemiAlert - User Dashboard - Bill Types</title>
    <link rel="stylesheet" type="text/css" href="styles/addphonestyle.css">
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
<h1 class="dashbooard" > ADD BILL</h1>
</div>	




<div class="wrapper">
    

    <div class="form-box login">
    <h2>Internet</h2>
    <form method="post">
        
        <label>Add Bill Title</label>
        <div class="input-box"><input type="text" name="bill_title" required></div><br>
        <label>Add Bill Description</label>
        <div class="input-box"><input type="text" name="bill_des" required></div><br>
        <label>Set Reminder Time</label>
        <div class="input-box"><input type="time" name="rem_time" required></div><br>
        <label>Set Reminder Date</label>
        <div class="input-box"><input type="date" name="rem_date" required></div><br>

            <button type="submit" class = "btn1" >Add Reminder </button>

            <button class="btn2" onclick="redirectToCustomLink()">Back</button>

            </form>
        </div>
</div>

<script>
  function redirectToCustomLink() {
    window.location.href = "/addbill.php";
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