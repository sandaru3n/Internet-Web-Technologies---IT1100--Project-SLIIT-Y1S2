

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
						header("Location: dashboard.php");
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

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>

<head>
    
	<title>RemiAlert User - Log In </title>
    <link rel="stylesheet" href="accountstyle.css">
    <script src="script.js"></script>

    
</head>



<body>

    <header>
        <h2 class="logo">Project 01 </h2>
        <nav class="navigation">
            <a href="http://localhost/jobportal/index.php">Home</a>
            <a href="http://localhost/jobportal/jobs.php">Jobs</a>
            <a href="http://localhost/jobportal/about.php">About</a>
            <a href="http://localhost/jobportal/contact.php">Contact</a>
            <button class="btnLogin-popup" onclick="redirectToLogin()">Login</button>
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
    <p> Don't have an account? <a href="http://localhost/jobportal/account/signup.php" class="register-link">
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
