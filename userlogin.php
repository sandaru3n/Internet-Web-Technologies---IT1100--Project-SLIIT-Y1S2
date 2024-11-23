<?php 

session_start();

	include("connection.php");
	include("functions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: userdashboard.php");
						die;
					}
				}
			}
			
            echo '<script>alert("wrong username or password!");</script>';
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>RemiAlert - User Login</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="/js/script.js"></script>
</head>

<body>

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

<div class="wrapper">
    

    <div class="form-box login">
    <h2>Login</h2>
    <form method="post">
        <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="text" name="user_name" required>
            <label>Username</label>
        </div>
<div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password" required>
            <label>Password</label>
</div>
<button type="submit" class = "btn" >Login </button>
<div class="login-register">
    <p> Don't have an account? <a href="/usersignup.php" class="register-link">
      Register </a>
    </p>
    </div>
   </form>
  </div> 
</div>


	


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	
</body>
</html>
