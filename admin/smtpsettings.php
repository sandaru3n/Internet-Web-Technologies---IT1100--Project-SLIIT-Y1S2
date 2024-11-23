<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();



	include("adminconnection.php");
	include("adminfunctions.php");

	$user_data = check_login($con);


  if ($_SERVER['REQUEST_METHOD'] == "POST" )
{
    //something was posted
    $mail_host = $_POST['mail_host'];
    $mail_port = $_POST['mail_port'];
    $mail_username = $_POST['mail_username'];
    $mail_password = $_POST['mail_password'];

    if(!empty($mail_host) && !empty($mail_port) && !empty($mail_username) && !empty($mail_password)  )
    {
        //save to database
        $query = "UPDATE smtp
        SET mail_host = '$mail_host',
            mail_port = '$mail_port',
            mail_username = '$mail_username',
            mail_password = '$mail_password'";


        mysqli_query($con, $query);

        header("Location: smtpsettings.php");
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
    <title> RemiAlert - SMTP Settings</title>
    <link rel="stylesheet" type="text/css" href="/styles/smtpsettingstyle.css">
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
    <?php echo 'example@mail.com'; ?></span>
    </div>

<body>
<div>
<h1 class="dashbooard" > SMTP Settings</h1>
</div>	



<div class="wrapper">
    

    <div class="form-box login">
    <form method="post">
        
        <label>Mail Host</label>
        <div class="input-box"><input type="text" name="mail_host" required></div><br>
        <label>Mail Port</label>
        <div class="input-box"><input type="text" name="mail_port" required></div><br>
        <label>Mail Username</label>
        <div class="input-box"><input type="text" name="mail_username" required></div><br>
        <label>Password</label>
        <div class="input-box"><input type="text" name="mail_password" required></div><br>

            <button type="submit" class = "btn1" >Save Changes</button>

            <button class="btn2" onclick="redirectToCustomLink()">Back</button>

            </form>
        </div>
</div>

<script>
  function redirectToCustomLink() {
    window.location.href = "/admin/adminpanel.php";
  }
</script>






</body>

   
</body>
</html>