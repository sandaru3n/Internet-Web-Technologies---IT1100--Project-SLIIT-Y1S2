<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" )
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email=$_POST['email'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
    {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,email,user_name,password) values ('$user_id','$email','$user_name','$password')";


        mysqli_query($con, $query);

        header("Location: userlogin.php");
        die;

    }else
    {
        echo "Please enter some valid info";
    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>RemiAlert - User Signup</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/script.js"></script>
</head>



    <header>
        <!-- <h2 class="logo">RemiAlert</h2> -->
        <img src="img/logov2.png" alt="Logo" height="60px">
        <nav class="navigation">
            <a href="/index.php">Home</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <button class="btnLogin-popup" onclick="redirectToLogin()">Login</button>
            <button class="btnSignup-popup" onclick="redirectToSignup()">Sign Up</button>
        </nav>
        
</header>


<body>
<div class="wrapper">
    
  <div class="form-box register">
    <h2>Sign Up</h2>
    <form method="post">
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon>
        </span>
            <input type="email" name="email" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon>
        </span>
            <input type="text" name="user_name" required>
            <label>Username</label>
        </div>
<div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password" required>
            <label>Password</label>
</div>
<button type="submit" class = "btn" > Register </button>
<div class="login-register">
    <p> Already have an account? <a href="/userlogin.php" class="login-link">
      Login </a>
    </p>
    </div>
   </form>
  </div>
</div>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	
</body>
</html>
