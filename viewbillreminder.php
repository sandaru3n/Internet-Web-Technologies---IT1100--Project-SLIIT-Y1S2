<?php 
session_start();

	include("connection.php");
	include("functions.php");

  if (isset($_GET['bill_id'])){
    $bill_id=$_GET['bill_id'];
    $delete=mysqli_query($con,"DELETE FROM addbill WHERE bill_id = '$bill_id'");
  }

  $user_data = check_login($con);

  $user_id = $user_data['user_id'];
  $select = "SELECT * FROM addbill A,users U WHERE A.user_name = U.user_name AND U.user_id ='$user_id'";
  $query=mysqli_query($con,$select);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title> RemiAlert - User Dashboard - Bill Types</title>
    <link rel="stylesheet" type="text/css" href="styles/viewbillreminderstyle.css">
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
<h1 class="dashbooard" > BILL REMINDERS</h1>
</div>	




<div class="wrapper">
    

    <div class="form-box login">

    <table border="1" cellpadding="0">
      <tr>
        <!-- <th>BILL ID</th> -->
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        <th>Time</th>
        <th>Date</th>
        <th>Operation</th>
      </tr>
      <?php 
      $num=mysqli_num_rows($query);
      if($num>0){
        while ($result=mysqli_fetch_assoc($query)){
          echo "
          <tr> 
            
            <td>".$result['category']."</td>
            <td>".$result['bill_title']."</td>
            <td>".$result['bill_des']."</td>
            <td>".$result['rem_time']."</td>
            <td>".$result['rem_date']."</td>
            <td>
              <a href='viewbillreminder.php?bill_id=".$result['bill_id']."' 
              class='btn5'>Delete</a>

            </td>
          </tr>
          ";

        }
      }
      ?>
      
    </table>   
    <br><br>
    <a href="/viewreminders.php" class='btn6'>Back</a>
    
    
        </div>
        </div>



<script>
  function redirectToCustomLink() {
    window.location.href = "/viewreminders.php";
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