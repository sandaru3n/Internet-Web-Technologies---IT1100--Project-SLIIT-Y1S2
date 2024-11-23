<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST" )
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
    {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";


        mysqli_query($con, $query);

        header("Location: login.php");
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
    
	<title>RemindU - User Signup</title>
    <link rel="stylesheet" href="accountstyle.css">
    <script src="script.js"></script>

    
</head>


<body>

    <header>
        <h2 class="logo">RemindU </h2>
        <nav class="navigation">
            <a href="http://localhost/jobportal/index.php">Home</a>
            <a href="http://localhost/jobportal/jobs.php">About</a>
            <a href="http://localhost/jobportal/about.php">Contact</a>
            <button class="btnLogin-popup" onclick="redirectToLogin()">Login</button>
            <button class="btnSignup-popup" onclick="redirectToLogin()">Sign Up</button>
        </nav>
        
</header>

<div class="wrapper">
    

  <div class="form-box register">
    <h2>Sign Up</h2>
    <form method="post">
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
    <p> Already have an account? <a href="http://localhost/jobportal/account/login.php" class="login-link">
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
