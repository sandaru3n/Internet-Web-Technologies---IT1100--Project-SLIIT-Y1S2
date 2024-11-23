<?php 
session_start();

	include("adminconnection.php");
	include("adminfunctions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html>





<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title> RemiAlert - User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/styles/dashboardstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/script.js"></script>
</head>



    <header>
        <!-- <h2 class="logo">RemiAlert</h2> -->
        <img src="/img/logov2.png" alt="Logo" height="60px">
        <nav class="navigation">
            <a href="/admin/adminpanel.php">Admin Panel</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <button class="btnLogout-popup" onclick="redirectToLogout()">Log out</button>
        </nav>

        
</header>


<div class="user-profile">
    <img src="/img/profile.jpg" alt="Profile Picture" class="profile-pic"> 
    
    <span class="username">
    <?php echo $user_data['user_name']; ?><br>
    <?php echo 'admin@mail.com'; ?></span>
    </div>



<body>
<div>
<h1 class="dashbooard" > Admin Panel </h1>
</div>	


<div class="box-container">
  <a href="/admin/viewusers.php"  class="box">
  <img src="/img/users.png" height="115px" width="115px">  <span class="box-text">Users</span>
  </a>
  <a href="/admin/smtpsettings.php" class="box">
  <img src="/img/smtp.png" height="115px" width="115px"> <span class="box-text">SMTP Settings</span>
  </a>
  <a href="#" class="box">
  <img src="/img/analytics.png" height="115px" width="115px">   <span class="box-text">Analytics</span>
  </a>
</div>



	


</body>




   



</body>
</html>